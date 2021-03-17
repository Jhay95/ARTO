<?php


class Pages extends Controller
{

    /**
     * @var mixed
     */
    private $storyModel;

    public function __construct()
    {
        $this->storyModel = $this->model('Story');
    }

    // Load Homepage
    public function home()
    {
       $stories = $this->storyModel->getShortStories();
       $recent = array_slice($stories, 0, 4);
        //Set Data
        $data = [
            'stories' => $recent
        ];

        // Load homepage/index view
        $this->view('pages/index', $data);
    }

    public function about()
    {
        //Set Data
        $data = [
            'top_posts' => ''
        ];

        // Load homepage/index view
        $this->view('pages/about', $data);
    }

    public function register()
    {
        //Set Data
        $data = [];

        // Load about view
        $this->view('pages/register', $data);
    }

    public function login()
    {
        //Set Data
        $data = [];

        // Load about view
        $this->view('pages/login', $data);
    }

    public function stories()
    {
        $stories = $this->storyModel->getShortStories();
        //Set Data
        $data = [
            'stories' => $stories
        ];
        // Load about view
        $this->view('pages/stories', $data);
    }

    public function contact()
    {
        //Set Data
        $data = [];

        // Load about view
        $this->view('pages/contact', $data);
    }

    public function read($id) {
        $story = $this->storyModel->getFullStory($id);

        //Set Data
        $data = [
            'story' => $story
        ];

        // Load homepage/index view
        $this->view('stories/index', $data);
    }
}