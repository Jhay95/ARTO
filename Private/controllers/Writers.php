<?php
/**
 * Class Writers Controller
 * This controller extends the base controller in /Private/modules
 * it loads the models that interacts with the database, updates the data that would be displayed
 * to the user and loads the view(page) with the corresponding data
 *
 * This controller is responsible for interacting with the writers and their pages
 * and can only be accessed during a logged in session as a writer with unique identity
 *
 */

class Writers extends Controller
{
    private $writerModel;
    private $storyModel;

    public function __construct()
    {

        $this->writerModel = $this->model('Writer');
        $this->storyModel = $this->model('Story');

    }

    // Loads the writers personal page with
    //writer's information and photo, writer's story
    public function index($id){

        if (!loggedin()) {
            header('location:' . URL_ROOT . 'pages/error');
        }
        $writer = $this->writerModel->getWriterById($id);
        $stories = $this->storyModel->getShortStoriesbyWriters($id);
        $photo = $this->writerModel->findPhoto($id);

        //Set Data
        $data = [
            'writer' => $writer,
            'stories' => $stories,
            'photo'  => $photo
        ];

        // Load homepage/index view
        $this->view('writers/index', $data);

    }

    // Register a new writer
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

                // Hash Password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

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

    // Validate login for a writer
    public function login()
    {
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

            // Validate password
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter a password.';
            }

            // Validate email
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter an email';
            } else {
                // Check Email
                if (!$this->writerModel->findWriterByEmail($data['email'])) {
                    $data['email_err'] = 'Invalid email';
                }
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

    // Update a writer's profile
    public function edit($id) {

        if (!loggedin()) {
            header('location:' . URL_ROOT . 'pages/error');
        }
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

    // Delete a writer's profile
    public function delete($id)
    {
        if (!loggedin()) {
            header('location:' . URL_ROOT . 'pages/error');
        }
        // Check for Post Request
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {

            //Execute
            $deleted = $this->writerModel->delete($id);

            if ($deleted) {
                $this->logout();
            } else
                die('Something went wrong!!');
        } else {
            header('location:' . URL_ROOT . 'pages/error');
        }
    }

    // Upload Profile photo for a writer
    public function upload($id) {
        if (!loggedin()) {
            header('location:' . URL_ROOT . 'pages/error');
        }

        // Uploads files
        if ($_SERVER['REQUEST_METHOD'] == 'POST') { // if save button on the form is clicked

            $data = [
                'id' => $id,
                'file' => '',
                'size' => '',
                'file_err' => ''
            ];

            if (empty($_FILES['profile'])){
                $data['file_err'] = 'File is empty';
            }
            // name of the uploaded file
            $data['file'] = $_FILES['profile']['name'];

            // destination of the file on the server
            $destination = $_SERVER['DOCUMENT_ROOT']. '/ARTO/Public/Assets/images/uploads/profiles/' . $data['file'];

            // get the file extension
            $extension = pathinfo($data['file'], PATHINFO_EXTENSION);

            // the physical file on a temporary uploads directory on the server
            $file = $_FILES['profile']['tmp_name'];
            $data['size'] = $_FILES['profile']['size'];

            if (!in_array($extension, ['png', 'jpeg', 'jpg'])) {
                $data['file_err'] = "You file extension must be .png, .jpeg or .jpg";
            } elseif ($_FILES['profile']['size'] > 6000000) { // file shouldn't be larger than 6Megabyte
                $data['file_err'] = "File too large!";
            }

            if (empty($data['file_err'])) {
                // move the uploaded (temporary) file to the specified destination
                if (move_uploaded_file($file, $destination)) {

                    //check if any profile pic for user exist
                    $exists = $this->writerModel->findPhoto($id);

                    if ($exists) {
                        $uploaded = $this->writerModel->editPhoto($data);
                    } else {
                        $uploaded = $this->writerModel->uploadPhoto($data);
                    }

                    if ($uploaded) {
                        header('location:' . URL_ROOT . 'writers/index/'. $id);
                    } else {
                        $data['file_err'] = "Failed to upload file.";
                    }

                    $this->view('writers/photo_upload', $data);

                } else {
                    $this->view('writers/photo_upload', $data);
                }
            } else {
                $this->view('writers/photo_upload', $data);
            }
        } else {

            $data = [
                'id' => $id,

            ];

            $this->view('writers/photo_upload', $data);
        }
    }

    // Create session for a logged in user
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
        header('location: ' . URL_ROOT . 'pages/login');

    }

}
