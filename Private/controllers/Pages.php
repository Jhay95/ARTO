<?php
/**
 * Class Pages Controller
 * This controller extends the base controller in /Private/modules
 * it loads the models that interacts with the database, updates the data that would be displayed
 * to the user and loads the view(page) with the corresponding data
 *
 * This controller is responsible for loading default pages that doesn't require any access control
 *
 */

class Pages extends Controller
{

    private $storyModel;
    private $stories;

    public function __construct()
    {
        $this->storyModel = $this->model('Story');
        $this->stories = $this->storyModel->getShortStories();
    }

    // Loads Homepage with 4 most stories
    public function home()
    {
        $recent = array_slice($this->stories , 0, 4);
        //Set Data
        $data = [
            'stories' => $recent
        ];

        // Load homepage/index view
        $this->view('pages/index', $data);
    }

    // Loads About us page
    public function about()
    {
        //Set Data
        $data = [
            'top_posts' => ''
        ];

        // Load homepage/index view
        $this->view('pages/about', $data);
    }

    // Loads Registration page
    public function register()
    {
        //Set Data
        $data = [];

        // Load about view
        $this->view('pages/register', $data);
    }

    // Loads login page
    public function login()
    {
        //Set Data
        $data = [];

        // Load about view
        $this->view('pages/login', $data);
    }

    // Loads page that displays all stories
    public function stories()
    {
        //Set Data
        $data = [
            'stories' => $this->stories
        ];
        // Load about view
        $this->view('pages/stories', $data);
    }

    // Loads Contact page
    public function contact()
    {
        //Set Data
        $data = [];

        // Load about view
        $this->view('pages/contact', $data);
    }

    // Loads a selected story's page
    public function read($id) {
        $story = $this->storyModel->getFullStory($id);

        //Set Data
        $data = [
            'story' => $story
        ];

        // Load homepage/index view
        $this->view('stories/index', $data);
    }


    public function search($data) {

    }
}