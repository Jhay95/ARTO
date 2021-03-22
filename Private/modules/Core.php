<?php
/**
 * Class Core
 * This file is the start of the application. it is initiated in Public/index.php.
 * This MVC has the url format of /controller/method/parameters. The Core class set default values for the controller,
 * method, and parameters so that when a user inputs an unknown directory, the default is ran. In this case, it would be “Pages”.
 * The Core class:
 * gets the url, sanitizes it to remove unwanted characters, and saves it in an array.
 * then it checks to see if the first url value (controller) matches any controller in the Private/controllers directory.
 * If that controller does NOT exist, the default page “Pages” is chosen instead for the current Controller.
 * If it does exist, the current Controller becomes the first url value. Then the url[0] is unset and
 * the controller file in /Private/controllers which contains a Class that has the same name as its filename is then required and instantiated.
 * Then, it checks to see if the second url value(method) exists in the required controller Class in /Private/controllers.
 * if so, it sets current Method and unset url[1].
 * Then it gets the last value in the url array and stores it in params.
 * Finally, it calls the controller Class with its method and parameters in /Private/controllers.
 */

class Core
{

    /**
     *  APP CORE CLASS
     *  Creates URL & Loads Controllers
     *  URL Format - /controller/method/param1/param2
     */
    // Set Defaults
    protected $currentController = 'Pages'; // Default controller
    protected string $currentMethod = 'home'; // Default method
    protected false|array $params = []; // Set initial empty params array

    public function __construct()
    {
        $url = $this->getUrl();
        if (!empty($url)) {
            // Look in controllers folder for controller
            if (file_exists('../Private/controllers/' . ucwords($url[0]) . '.php')) {
                // If exists, set as controller
                $this->currentController = ucwords($url[0]);
                // Unset 0 index
                unset($url[0]);
            }
        }

        // Require the current controller
        require_once('../Private/controllers/' . $this->currentController . '.php');

        // Instantiate the current controller
        $this->currentController = new $this->currentController;

        // Check if second part of url is set (method)
        if (isset($url[1])) {

            // Check if method/function exists in current controller class
            if (method_exists($this->currentController, $url[1])) {
                // Set current method if it exists
                $this->currentMethod = $url[1];
                // Unset 1 index
                unset($url[1]);
            }
        }

        // Get params - Any values left over in url are params
        $this->params = $url ? array_values($url) : [];

        // Call a callback with an array of parameters
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    // Construct URL From $_GET['url']
    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}