<?php


class Writers extends Controller
{
    private $writerModel;
    /**
     * @var mixed
     */
    private $storyModel;

    public function __construct()
    {
        $this->writerModel = $this->model('Writer');
        $this->storyModel = $this->model('Story');

    }

    public function index($id){
        if (!loggedin()) {
            redirect('pages/index');
        }

        $writer = $this->writerModel->getWriterById($id);
        $stories = $this->storyModel->getShortStoriesbyWriters($id);

        //Set Data
        $data = [
            'writer' => $writer,
            'stories' => $stories
        ];

        // Load homepage/index view
        $this->view('writers/index', $data);

    }


    public function register()
    {
        // Check if POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'fname' => trim($_POST['fname']),
                'lname' => trim($_POST['lname']),
                'email' => trim($_POST['email']),
                'city' => trim($_POST['city']),
                'state' => trim($_POST['state']),
                'password' => trim($_POST['password']),
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
            ];

            // Validate name
            if (empty($data['fname'] || empty($data['lname']))) {
                $data['name_err'] = 'Please enter name';
            }

            // Validate email
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter an email';
            } else {
                // Check Email
                if ($this->writerModel->findWriterByEmail($data['email'])) {
                    $data['email_err'] = 'Email is already taken.';
                }
            }

            // Validate password
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter a password.';
            }

            // Make sure errors are empty
            if (empty($data['name_err']) && empty($data['email_err']) && empty($data['password_err'])) {
                // SUCCESS - Proceed to insert

                //Execute
                $registered = $this->writerModel->register($data);

                if ($registered) {
                    $writer = $this->writerModel->getWriterById($registered);

                    // Create Session
                    $this->createSession($writer);
                } else {
                    $this->view('pages/register', $data);
                }
            } else {
                $this->view('pages/register', $data);
            }
        } else {
            // IF NOT A POST REQUEST

            // Init data

            $data = [
                'fname' => '',
                'lname' => '',
                'email' => '',
                'city' => '',
                'state' => '',
                'password' => '',
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
            ];

            // Load View
            $this->view('pages/register', $data);
        }
    }

    public function login()
    {
        if(loggedin()){
            redirect('writers/home');
        }

        // Check if POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_err' => '',
                'password_err' => '',
            ];

            // Validate email
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter an email';
            } else {
                // Check Email
                if (!$this->writerModel->findWriterByEmail($data['email'])) {
                    $data['email_err'] = 'Invalid email';
                }
            }

            // Validate password
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter a password.';
            }

            // Make sure errors are empty
            if (empty($data['email_err']) && empty($data['password_err'])) {
                // SUCCESS - Proceed to insert

                //Execute
                $loggedin = $this->writerModel->login($data['email'], $data['password']);

                if ($loggedin) {
                    $this->createSession($loggedin);;

                } else {
                    $data['password_err'] = 'Password incorrect';
                    $this->view('pages/login', $data);
                }
            } else {
                $this->view('pages/login', $data);
            }
        } else {
            // IF NOT A POST REQUEST

            // Init data

            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => '',
            ];

            // Load View
            $this->view('pages/login', $data);
        }
    }

    public function edit($id) {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            var_dump($_POST);

            // Process form
            $data = [
                'id' => $_SESSION['id'],
                'fname' => ucwords(trim($_POST['fname'])),
                'lname' => ucwords(trim($_POST['lname'])),
                'email' => strtolower(trim($_POST['email'])),
                'profile' => trim($_POST['profile']),
                'city' => trim($_POST['city']),
                'state' => ucwords(trim($_POST['state'])),
                'fname_err' => '',
                'lname_err' => '',
                'email_err' => '',
            ];


            // Check if entries are empty
            if (empty($data['fname'])) {
                $data['fname_err'] = 'Please enter you First name';
            }
            if (empty($data['lname'])) {
                $data['lname_err'] = 'Please enter your Last name';
            }

            if (empty($data['email'])) {
                $data['email_err'] = 'Email can not be empty';
            }

            if (!empty($data['email'])) {

                if ($this->writerModel->getWriterByEmail($data['email'])) {
                    $data['email_err'] = 'This email address in invalid';
                }
            }

            // Make sure errors are empty
            if (empty($data['email_err']) && empty($data['fname_err']) && empty($data['lname_err'])) {

                // Update User
                $updated = $this->writerModel->update($data);
                var_dump($updated);

                if ($updated) {
                    // Create Session
                    header('location: ' . URL_ROOT . 'writers/index/'. $id);
                } else {
                    die('Something happened!!, Unable to update profile');
                }
            } else {
                // Load view
                $this->view('writers/edit', $data);
            }

        } else {
            //Get existing tailor data
            $writer = $this->writerModel->getWriterById($id);

            if (!$writer->writer_id == $_SESSION['id']) {
                header('location' . URL_ROOT . 'pages');
            }
            // Init data
            $data = [
                'id' => $id,
                'fname' => $writer->writer_fname,
                'lname' => $writer->writer_lname,
                'email' => $writer->writer_email,
                'profile' => $writer->writer_profile,
                'city' => $writer->writer_city,
                'state' => $writer->writer_state,
                'fname_err' => '',
                'lname_err' => '',
                'email_err' => '',
            ];

            // Load view
            $this->view('writers/edit', $data);
        }
    }

    private function createSession($writer)
    {
        $_SESSION['id'] = $writer->writer_id;
        $_SESSION['email'] = $writer->writer_email;
        $_SESSION['user'] = 'writer';
        header('location: ' . URL_ROOT . 'writers/index/'. $writer->writer_id);
    }

    // Logout & Destroy Session
    public function logout(){
        unset($_SESSION['id']);
        unset($_SESSION['email']);
        unset($_SESSION['user']);
        session_destroy();
        redirect('pages/login');
    }


}
