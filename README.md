# ARTO
Where arts and culture is shared through storytelling

This application is intended to meet the need of a fictitious organization ARTO. The Application
is intended to bring local stories closer and easier for tourist who are seeking stories by allowing interested 
story writers register and share their stories.

This application models the work of Brad Traversy in his tutorial of "Object-Oriented PHP & MVC"
which introduce the concept of Model-View-Controller Software Architectural Pattern from scratch.

### MVC, What's it about?
MVC stands for Model, View, and Controller. MVC is a software architecture pattern that
guides to organize how the components of an application interacts with one another.
* Model is the component that establishes the logic behind the application through its
  interactions with the database by updating, retrieving, setting, or deleting information.
* View is the interface the user sees and interacts with.
* Controller controls the communication between the model(database), and the view(user's interface).

### Directory Structure and Definition
##### The following describes our MVC framework and how it interacts to deliver the expected result.
The application contains 2 directories; the Private and Public. The Private contains all the application
components; the MVC framework that runs the entire application. The Public contains the frontend elements;
Stylesheets, images, and JavaScripts files that enhances User interface and experience.

The application is router by 3 .htaccess files, the 1st one is in the project directory.
This routes the root url of the application towards the public directory. The 2nd one is in the Public
directory. This directs the whole webpage through index.php. The 3rd one is in the Private directory.
This restricts access to the public.
#### Project Folder
* ##### Private
    * config/
    * controllers/
    * libs/
    * data/
    * models/
    * modules/
    * views/
    * test/
    

* ##### Public
    * assets/

#### To use this MVC Framework
* Change **define('URL_ROOT', '')** in the config/config.php file variables
* Change the **RewriteBase** path in the .htaccess file in the Public directory to your project root.
* Create a database and update the Database information in the config/config.php file
* Change Database defined constant to own credentials in the config/config.php file variables
* Using data/arto_blog.sql, import into database server environment.
* To access on a browser, use  **_URL_ROOT_** . Ex. http://localhost:8080/ARTO/.
