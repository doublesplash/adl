ADL
=================

Bridge API between Infusionsoft and ADLWare used for HomeCare Lead automation.

INSTALLATION
=================

- Download packages from github (Place them in the following folder structure)
  - doublesplash/adl -> /home/adl
- Configure the config.ini file in init/
- Run the install.sh script in init/

POSTING INSTRUCTIONS
=====================

This project consists of just a single entry point to post data.  Use the following link to send data between Infusionsoft to ADLWare:

  - /post
  
The parameters are the same as the ADLWare API specs.  You will need a Lead Post Token from ADLWare to make the connection work.

FRAMEWORK
=================
The site is built on a modified MVC framework known as Mojavi.  Mojavi is a very lightweight framework that can be used with other libraries (such as GeoIP or ZendFramework).

In Mojavi, a module is composed of Actions/, Views/, and Templates/.  An Action runs basic code and returns a success code such as View::SUCCESS or View::ERROR.  Mojavi will then 
load the appropriate View associated to the Action name (if an action is called RecordAction.php and returns a success code of View::SUCCESS, Mojavi will load RecordSuccessView.php).  

The View runs any PHP code required to load the template containing HTML code.  This includes setting the decorator (or shell), saving menu items for breadcrumbs, or selecting between 
multiple template files.  A Template is just HTML with PHP code injected in it.

Everything in Mojavi is based of the Context object.  Within the Context, there is a DatabaseManager, Request Container, and User Management.

 - Context::getDatabase($name): Returns a database connection defined in the webapp/config/databases.ini file
 - Context::getRequest(): Returns the request container used to store values and pass them between the Action and the View/Template.  You can do this with the setAttribute($key, $value) 
and the getAttribute($key, $default) functions.
 - Context::getUser(): Loads the currently logged in user's information stored in the session (normally in the LoginAction)   

QUESTIONS
=================
If you have any questions, please feel free to contact me