<?php

/**
 * Class Stories Controller
 * This controller extends the base controller in /Private/modules
 * it loads the models that interacts with the database, updates the data that would be displayed
 * to the user and loads the view(page) with the corresponding data
 *
 * This controller is responsible for loading pages that interacts with creating, modifying and deleting
 * stories.
 * This controller has access control as only a loggedin in user with the permission to story can access
 *
 */

class Stories extends Controller
{

    private $storyModel;

    public function __construct()
    {
        if (!loggedin()) {
            header('location:' . URL_ROOT . 'pages/error');
        }

        $this->storyModel = $this->model('Story');
    }

    // Add new story to database
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
                'tag' => trim($_POST['tag']),
                'location' => trim($_POST['location']),
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
                    header('location:' . URL_ROOT . 'writers/index/' . $id);
                } else
                    die('Something went wrong!!');
            } else {
                // Load page for writing new stories
                $this->view('stories/write', $data);
            }
        } else {
            // Load page for writing new stories
            $this->view('stories/write');
        }
    }

    // Edit story to update database
    public function edit($w_id, $s_id)
    {
        // Check for Post Request
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'writer_id' => $w_id,
                'story_id' => $s_id,
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
                $updated = $this->storyModel->update($data);

                if ($updated) {
                    header('location:' . URL_ROOT . 'writers/index/' . $w_id);
                } else
                    die('Something went wrong!!');
            } else {
                // Load page for writing new stories
                $this->view('stories/edit', $data);
            }
        } else {
            //Get existing tailor data
            $story = $this->storyModel->getFullStory($s_id);

            // Init data
            $data = [
                'writer_id' => $w_id,
                'story_id' => $s_id,
                'title' => $story->story_title,
                'body' => $story->story_body,
                'cat' => $story->story_category,
                'location' => $story->story_location,
                'tag' => $story->story_tag,
                'title_err' => '',
                'body_err' => '',
            ];

            // Load view
            $this->view('stories/edit', $data);
        }
    }

    // Delete story to update database
    public function delete($w_id, $s_id)
    {
        // Check for Post Request
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            //Execute
            $deleted = $this->storyModel->delete($s_id);

            if ($deleted) {
                header('location:' . URL_ROOT . 'writers/index/' . $w_id);
            } else
                die('Something went wrong!!');

        } else {
            //Get existing tailor data
            $story = $this->storyModel->getFullStory($s_id);

            // Init data
            $data = [
                'writer_id' => $w_id,
                'story_id' => $s_id,
                'title' => $story->story_title,
                'body' => $story->story_body,
                'cat' => $story->story_category,
                'tag' => $story->story_tag,
                'location' => $story->story_location,
            ];

            // Load view
            $this->view('stories/delete', $data);
        }
    }

}