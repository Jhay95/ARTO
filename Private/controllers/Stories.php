<?php


class Stories extends Controller
{
    /**
     * @var mixed
     */
    private $storyModel;

    public function __construct()
    {
        if (!loggedin()) {
            header('location' . URL_ROOT . pages);
        }

        $this->storyModel = $this->model('Story');
    }

    public function new($id)
    {
        // Check if POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'writer_id' => $id,
                'title' => trim($_POST['title']),
                'slug' => slug(trim($_POST['title'])),
                'body' => trim($_POST['body']),
                'cat' => trim($_POST['category']),
                'location' => trim($_POST['location']),
                'tag' => trim($_POST['tag']),
                'title_err' => '',
                'body_err' => '',
            ];

            // Validate title
            if (empty($data['title'])) {
                $data['title_err'] = 'Title can not be empty';
            }

            // Validate title
            if (empty($data['body'])) {
                $data['body_err'] = 'Please share your story';
            }


            // Make sure errors are empty
            if (empty($data['title_err']) && empty($data['body_err'])) {

                //Execute
                $added = $this->storyModel->addNew($data);

                if ($added) {
                    header('location' . URL_ROOT . 'writers/index/' . $id);
                } else die('Something went wrong!!');
            }
        }
        else {
            // Load page for writing new stories
            $this->view('stories/write');
        }
    }





}