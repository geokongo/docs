                <div class="jumbotron">
                <h1>Gliver Documentation</h1>

                <p>The Gliver MVC Framework is for PHP developers, both new and seasoned to write cutting edge web applicaitions, APIs, Web Services, Software Back ends and much more just in a matter of minutes. 

                <p>This framework is inspired by a community of developers who needed a light weight framework with a relatively faster execution time on the server as compared to other frameworks based on <a href="http://php.net/releases/5_4_0.php"> <strong>PHP >=5.4</strong> </a>.</p>

                <p>Gliver comes with a built in templating engine that removes all the monotonous repeated php tags, therefore being less scary for a front end developer with almost no learning curve</p>
                           
                <p>The project is hosted on <a class="projectLinks" href="https://github.com/gliverphp/gliver" target="_blank">Github</a> and is available for use under the <a class="projectLinks" href="https://github.com/gliverphp/gliver/blob/master/LICENSE" target="_blank">MIT software license</a>.  You can report bugs and discuss features on the <a href="https://github.com/gliverphp/gliver/issues" target="_blank">GitHub issues page</a>, or send tweets to <a href="https://twitter.com/gliverframework" target="_blank">@GliverFramework</a>.</p>
                
                <p><a class="btn btn-primary btn-lg" href="https://github.com/gliverphp/gliver" target="_blank">Fork on Github »</a></p>
                </div>


                <h2>Installation</h2>


                <p class="well">Gliver Framework requires PHP version 7.0 or greater to run. In order to avoid broken functionality or open security holes in your application, upgrade to version >=7.0</p>

                <p>You also need to have <a href="https://getcomposer.org/doc/00-intro.md" target="_blank">Composer</a> installed on your computer in order to be able to install the Gliver framework</p>

                <p>Gliver framework uses .htaccess rules to process requests so ModeRewrite should be enabled on your server.</p>

                <p><strong>Step 1.</strong></p>

                <p>Click here to <a href="https://github.com/gliverphp/gliver/archive/master.zip">download the Gliver core</a> from GitGub and extract it in your root directory</p>

                <p><strong>Step 2.</strong></p>

                <p>Run 'composer update' from the root directory of your Gliver installation to install the Gliver framework dependencies</p>

<pre>
<code data-language="html">
composer update    
</code>
</pre>

                <p><strong>Step 3.</strong></p>

                <p>Alternatively, can install Gliver framework directly from Packagist repository by running 'composer create-project gliver/gliver myapp' in from command line</p>

<pre>
<code data-language="html">
composer create-project gliver/gliver myapp
</code>
</pre>

                
                <p>This command would download the latest stable version of Gliver framework and all dependencies and install them in the directory <span class="text-danger">myapp</span>.</p>

                <p>You can change the name of the directory to your directory of choice, or better still rename it after installation...</p>               
        
                  <h2>Configuration</h2>

            
                  <p>There are four configuration files where you can specify the settings for your application.</p>

                  <p class="alert alert-info">These options can be accessed from anywhere within your application using specific class methods.</p>

                  <h3 class="text-danger">Config.php</h3>  

                  <p>This file contains the general configuration options of your application. 

                  <p>The config.php resides in the config directory. 
<pre>
<code data-language="html">
config/config.php
</code> 
</pre>



                  <p>Set the value of 'dev => true' if your application is running in development mode and set this to 'false' as soon as you deploy to production.</p>

<pre>
<code data-language="php">
/**
 *Set the application environment. Set true for development, otherwise, set to false
 */
'dev' => true,
</code>  
</pre>

                  <p>This would do is to ensure that error messages are not shown to the user when in production mode in order to avoid exposing your server directory structure to that malicious jerk.</p>
            
                  <p class="alert alert-info">You can also set your default controller and action here.</p>

                  <p>These are key as they will be loaded as your homepage i.e. whenever you access you application without specifying the controller and method</p>

<pre>
<code data-language="php">
/**
 *Set the default controller
 */
'controller' => 'Home',
/**
 *Set default action
 */
'action' => 'Index' 
</code>
</pre>

            
                  <h3 class="text-danger">Database.php</h3>  

                  <p>The Gliver database configuration file resides in the config directoty.</p>

<pre>
<code data-language="html">
config/database.php
</code>
</pre>
                 
                  <p>In the database configuration, you can specify the settings for any supported database then specify the default database you would like the application to alwasy connect to.</p>

                  <p>As soon as you change your mind and would like to use a different database, just set it as the default.</p>

<pre>
<code data-language="php">
/**
 *Define the database server hostname
 */
'host'    => 'localhost',
/*
 *Define the username
 */
'username'  => 'root',
/*
 *Define the database password
 */
'password'  => '',  
</code>
</pre>
            
                  <h3 class="text-danger">Constants.php</h3>  

                  <p>The constants configuration file resides in the application directoy.</p>

<pre>
<code data-language="html">
application/constants.php
</code>
</pre>

                  <p>Here you can define all the values that you will need throughout all your application.</p>

                  <p>Once defined, you can access them from anywhere in your application by using the constant name.</p>

<pre>
<code data-language="php">
//Specify the network id constant
define('NETWORK_ID', 'gliver'); 
</code>
</pre>
                  
                  <p>You can then access them from anywhere in this manner:</p>
<pre>
<code data-language="php"> 
echo NETWORK_ID; 
</code>
</pre>

 
                  <h2>Routing</h2>

                  <p>The routing feature enables mapping of defined keywords to particular controllers/action pairs.</p>

                  <p>Routing also enables you to pass url parameters to your controllers which it parses and includes as part of the GET parameters you access them via the Input helper class.</p>

                  <p>The routing class gives much flexibility so that you can map a defined route to a controller, a controller method pair and optionally name the parameters that you expect to recieve along with the url request</p>

                  <p>Routes are defined in the routes.php file found in the application directory.</p>

<pre>
<code data-language="html">
application/routes.php
</code>
</pre>
                  <p>Defining routes is, however, optional as you can decide to call your controllers directly from the url and pass unamed parameters and accessing them using numbered indexes.</p>
                                    
                  <p class="alert alert-info">Remember that the routes.php file is an array and therefore should maintain a valid array format.</p>
                  
                  <p>Say you have a controller class named <span class="text-danger">LoadController</span> that you would like to invoke using the word <span class="text-danger">blog</span>.</p>

                  <p>In order to achieve this you will define this name value pair in the routes file as: 

<pre>
<code data-language="php">
"blog" => "Load",
</code>
</pre>

                  <p>This simply means the word blog maps to the LoadController class, so that when you access the LoadController class from the url you use the word blog in this manner:</p>

<pre>
<code data-language="html">
http://localhost/myapp/blog
</code>
</pre>

                  <p class="alert alert-info">If you define a route to map to a controller without specifying a method pair, you can still supply the method name as the second parameter in the url. Otherwise the default method name set in your config.php would be excecuted whenever this route is accessed.</p>

                  <p>If you want to define a route that maps to a controller class with the particular method to be executed, separate the controller class and method name with an @ symbol.</p>

                  <p>Say you have an <span class="text-danger">AdminController</span> class that loads users profiles using a getUser() method.</p>

                  <p>You can define an 'adminusers' route that maps to this controller class and the getUser() method in order to load a user's profile.</p>

                  <p>It would be something like:</p>

<pre>
<code data-language="php">
"adminusers"=>"Home@getUser"
</code>
</pre>

                  <p>And you would access it using a url like:</p>

<pre>
<code data-language="html">
http://localhost/myapp/adminusers
</code>
</pre>                 
                  
                  <p>In case each user on your system has a unique id and you would like to load different pages for editing or viewing mode, pass all these parameters in the url and give them names with which to access them in this manner:

<pre>
<code data-language="php">
"adminusers"=>"Home@getUser/id/mode"
</code>
</pre>                    

                  <p>Here is an example url you would use to access it:</p>

<pre>
<code data-language="html">
http://localhost/myapp/adminusers/49723/edit
</code>
</pre>                  
                  
                  <p class="alert alert-info">If you define named url parameters in routes file for a particular route, any additional parameters passed along with the url would be discarded and only the named values would to available.</p>

                  <p>If you don't name your url parameters, you can access unlimited number of url parameters in the order in which they appear in the url by using indexes begining from 0...onwards.</li>
                  </p>

                  <p>In case you want to define a route for a controller that is within a subdirectory, e.g:

<pre>
<code data-language="html">
application/controllers/Admin/HomeController 
</code>
</pre>
                  <p>Specify the namespace in this manner as:

<pre>
<code data-language="php">
"adminusers"=>"Admin\Home@getUser/id/mode
</code>
</pre>            


                  <h2>Controllers</h2>

                  <p>Controllers form the entry point into your application. It handles requests by loading a controller class and the respective method.</p>

                  <p>It is from here that you can call your model classes, libraries and load the view files, among other things... </p>

<pre>
<code data-language="php">
&lt;?php namespace Controllers;

use Gliver\View\View;

class HomeController extends BaseController {

    /**
     *Load the home page.
     *@param null
     *@return void
     */
    public function getIndex()
    {
        //get the ending date today
        View::render('home');

    } 

}  
</code>
</pre>         
                

                <p>All controller classes reside in the application/controllers directory or subdirectory:</p>

<pre>
<code data-language="html">
application/controllers/
</code>
</pre>
                  
                  <p class="alert alert-info">One file can only contain one controller class.</p>
                  
                  <p>Controller class files must have a <span class="text-danger">.php</span> file extension and the name of the controller class must be the same as the name of the file:

<pre>
<code data-language="html">
HomeController class resides in HomeController.php
</code>
</pre>

                  <p>Controller classes and file names must have the 'Controller' suffix as: <span class="text-danger">HomeController</span>.</p>

                  <p>When accessing controllers from a url, you only specify the controller name without the 'Controller' suffix as:</p>

<pre>
<code data-language="html">
http://localhost/myapp/home
</code>
</pre>

                  <p>All controllers classes must extend the <span class="text-danger">BaseController</span> class.</p>

<pre>
<code data-language="php">
class HomeController extends BaseController 
</code>
</pre>
                  <p>Ensure you namespace your controllers, so that they are autoloaded as expected.</p>

                  <p>If your controller class resides in the <span class="text-warning">application/controllers</span> directory then use:

<pre>
<code data-language="php">
namespace Controllers;
</code>
</pre>
                  <p>If your controller resides in a subdirectory like 'Admin' as <span class="text-danger">application/controllers/Admin</span> then use:

<pre>
<code data-language="php">
namespace Controllers\Admin;  
</code>
</pre>

                  <p>This follows psr-4 namespace pattern.</p>                  
                  
                  <p class="alert alert-info">You cannot create static methods or properties in your controllers.</p>

                  <p>In order to use another class from the inside of your controller class, use the <span class="text-danger">use</span> statement with the full namespace of the class as:

<pre>
<code data-language="php">
use Helpers\View\View;
</code>
</pre>
                   <p> Do that to load the view helper class then access it from anywhere within your controllers as:

<pre>
<code data-language="php">
View::render('home/users');
</code>
</pre>
                  
                  <p>When defining your methods in your controllers, you can choose to let all your methods have unique names or you can use the same method name to excecute different methods based on the request method used.</p>

                  <p>There are two request methods that would be detected by Gliver framework : GET and POST methods.</p>    
                  
                  <p>With this feature comes a cool ability of Gliver to load a controller method based on your request method. This means that you can use the same method name in different request methods. For example:</p>
                  
                  <p>Say you have a <span class="text-danger">LoginController</span> and would like to use the same method name for loading a login form and at the same time processing user login information - you will do this as below.</p>
                  
                  <p>Create two methods named:</p>

<pre>
<code data-language="php">
public function getLogin()
    {
        //...

    } 

public function postLogin()
    {
        //...

    } 
</code>
</pre>


                  <p>You will access both methods with the same url as:</p>

<pre>
<code data-language="php">
http://localhost/myapp/login/login
</code>
</pre>                 
                    
                  <p>Accessing this url in your address bar will load the user login form as the request method would be GET and the <span class="text-danger">getLogin</span> method would be excecuted.</p>

                  <p>Once the user fills up the form, you specify in your action attribute the same url for form submission as:

<pre>
<code data-language="html">
&lt;form action="http://localhost/myapp/login/login" method="post" > 
</code>
</pre>
         
                  <p>When the user then submits the form, Gliver would detect this as a POST request and therefore submit your form to the <span class="text-danger">postLogin()</span> method of the LoginController.</p>

                  <p>So, there you go. Using the same method name to excecute different methods depending on the request method.</p>


                <h2>Views</h2>


                <h3>View::render</h3>


                <p>The view class enables you to provide a response to the url request.</p>

                <p>This can be by loading html view files, sending pdf, json or xml responses.</p>

                <p>To use the View loader, first require it in your controller class as:</p>
<pre>
<code data-language="php">
use Gliver\View\View;  
</code>
</pre>

                <p>You can then access the View class and methods directly without creating an instance.</p>

                <p>All view files resides in the application/views directory and must have a <span class="text-danger">.php</span> file extension.</p>

                <p>First instance, let's say you want to load the <span class="text-danger">users.php</span> view file in the home subdirectory, you'd do this:</p>

<pre>
<code data-language="php">
View::render('home/users');  
</code>
</pre>

                <p>If you want to pass some variables to be available to the view files, pass them in an array as the second parameter. </p>

<pre>
<code data-language="php">
View::render('home/users', $data); 
</code>
</pre>
          
                <p>Say you would like to dynamically get the site title from the controller and use it in your view file.</p>

                <p>Create a $data array and store the value of the title as a key in the $data array, then then pass it as a second parameter to the View::render() method:</p>

<pre>
<code data-language="php">
$data['title'] = "Gliver - Official Site"; 

View::render('home/users', $data);
</code>
</pre>

                <p>You can then access it in your view file as:</p>

<pre>
<code data-language="html">
&lt;?php echo $title; ?>
</code>
</pre>

    
                <h3>View::renderJson</h3>

                <p>If you want to return a json object instead of loading a html file, then use the renderJson method instead.</p>

                <p>This method sets the content header as application/json.</p>

                <p>Supply the array to be converted to a json object as an optional parameter as shown:</p>

<pre>
<code data-language="php">
View::renderJson($data);
</code>
</pre>


                <p>Out of the box, Gliver has an in built templating engine that abstracts the most commonly repeated actions when generating a view.</p>

                <p class="alert alert-info">You do not need to specify a special file extension to activate the template engine. It is on by default.</p>


                <p>The following template methods are available within the view files.</p>

                <h3>Echo </h3>

                <p>In regular PHP in order to echo a string to the browser, you open and close PHP tags then use the echo statement in between the tags:</p>

<pre>
<code data-language="php">
&lt;?php echo $username; ?> 
</code>
</pre>               

                <p>Gliver has a template method that does the same thing. Just put the variable to be printed within double curly braces.</p>

<pre>
<code data-langauge="html">
<?php echo '{'; ?>{$username}} 
</code>
</pre>


                <h3>{{"@"}}include </h3>

                <p>This template method enables you to load view files that are shared as subviews.</p>

                <p>You call this method from within your view files, while passing the name of the view file to be included as the first parameter.</p>

<pre>
<code data-language="html">
{{"@"}}include('header') 
</code>
</pre>

                <p>If the view file to be included exists in a sub directory, specify the directory structure separated by forward slash.</p>

<pre>
<code data-language="html">
{{"@"}}include('admin/header')  
</code>
</pre>

                <p>Say you have a <span class="text-danger">header.php</span> and <span class="text-danger"> footer.php</span> view files in your admin directory and would like to include them in your <span class="text-danger">home.php</span> view page.</p>

                <p>This is what the code in your <span class="text-danger">home.php</span> file would look like</p>

<pre>
<code data-language="php">
{{'@'}}include('admin/header')
&lt;div class="container"&gt;
    &lt;div class="row"&gt;
        &lt;div class="col-lg-12"&gt;

        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

{{'@'}}include('admin/footer')
</code>
</pre>
                
                <h3>{{"@"}}if</h3>

                <p>There are 3 ways you could use the {{"@"}}if method.</p>

                <p>This depends on the type or length of the loop you want to execute.</p>

                <p>The 3 code samples below demonstrate the different uses of the {{"@"}}if methid in the Gliver template view files.</p>

                <p><strong>{{"@"}}if...</strong></p>


<pre>
<code data-language="php">
{{"@"}}if(isset($email) AND ! empty($email))
  &lt;p>Your email address is {{"{"}}{$email}}&lt;/p>
{{"@"}}endif
</code>
</pre>
         
                <p><strong>{{"@"}}if...{{"@"}}else</strong></p>

<pre>
<code data-language="php">
{{"@"}}if(count($users) > 0)
  &lt;p>Registered users: {{"{"}}{count($users)}}&lt;/p>
{{"@"}}else
  &lt;p>There are no registered users yet!&lt;/p>
{{"@"}}endif
</code>
</pre>

              <p><strong>{{"@"}}if...{{"@"}}elseif...{{"@"}}else</strong></p>

<pre>
<code data-language="php">
{{"@"}}if($score > 80) 
  &lt;p>Grade : A  Remarks : Excellent&lt;/p>
{{"@"}}elseif($score > 60)
  &lt;p>Grade : B  Remarks : Good &lt;/p>
{{"@"}}else
  &lt;p>Grade : C  Remarks : Fair&lt;/p>
{{"@"}}endif
</code>
</pre>

            <h3>{{"@"}}while...</h3>

<pre>
<code data-language="php">
{{"@"}}while($number <= 10)
  #do something to end this loop...
{{"@"}}endwhile
</code>
</pre>
            
            <h3>{{"@"}}for...</h3>

<pre>
<code data-language="php">
{{"@"}}for($itr = 1; $itr < 10; $itr++)
  &lt;p>This is paragraph number {{"{"}}{$itr}} &lt;/p>
{{"@"}}endfor
</code>
</pre>

            <h3>{{"@"}}foreach...</h3>

<pre>
<code data-language="php">
{{"@"}}foreach($users as $user)
  &lt;p>Name {{"{"}}{$user['first_name']}} : Email : {{"{"}}{$user['email_address']}}&lt;/p>
{{"@"}}endforeach
</code>
</pre>


                <h2>Models</h2>

                <p>Models help you handle database or API connection operations.</p>

                <p>Models reside in the application/models directory or subdirectory and must extend the <span class="text-danger">Model</span> class.</p>


<pre>
<code data-language="php">
&lt;?php namespace Models;

class UsersModel extends Model {

  /**
   *@var string Table name 
   */
  protected static $table = 'users';
}
</code>
</pre>

                <p class="alert alert-info">All Model methods are declared as static. </p>

<pre>
<code data-language="php">
&lt;?php namespace Models;

class UsersModel extends Model {

  public static function getUsers()
  {
    
    #... code goes here

  }

}
</code>
</pre>


                
                  <p>Model classes and file names can optionally have the 'Model' suffix.</p>

                  <p class="alert alert-info">When accessing models classes specify the complete name without omiting the 'Model' suffix.</p>

                  <p>If your model class resides within a subdirectory like application/models/Admin use the correct namespace. </p>

<pre>
<code data-language="php">
namespace Models\Admin; 
</code>
</pre>


                <p>In order to use a model in your controllers, require the model using its full namespace.</p>

                <p>Say you have a <span class="text-danger">UsersModel</span> that has a static <span class="text-danger">getUser()</span> method that returns the list of all users from the database.</p>

                <p>This is how you access this method from the HomeController class.</p>

<pre>
<code data-language="php">
use Models\UsersModel;

class HomeController extends BaseController {

  public function Queue()
  {
    //get all users
    $data['users'] = UsersModel::getUsers();

    #... other code
  }

}
</code>
</pre>     

                <p class="alert alert-info">More information is coming on how to use the Query Builder and Gliver ORM...</p>


                <h2>Helpers</h2>
                
                <p>You only need to load the Helper classes when using them from your controllers, models or libraries.</p>

                <p>However, they are autoloaded by default in the view files using the alias names specified in the <span class="text-danger">config.php</span> file.</p>

                <p>All helper classes are accessed statically so you do not need to create an instance to access the methods.</p>

                <p>In order to access a helper method specify the helper class name, the scope resolution operator and then the name of the method:</p>

<pre>
<code data-language="php">
Redirect::to(); 
</code>
</pre>
                
                <p>To use a helper class in your controller, first require it by specifying the full namespace.</p>

<pre>
<code data-language="php">
use Gliver\Redirect\Redirect;
</code>
</pre>
                <p>You can also alias the helper class name to a name of your choice:</p>

<pre>
<code data-language="php">
use Gliver\Redirect\Redirect as Red; 
</code>
</pre>

                <p>Then use the Red class to access all the Redirect helper methods.</p>


<pre>
<code data-language="php">
&lt;?php namespace Controllers;

use Gliver\Redirect\Redirect; 

class HomeController extends BaseController {

    public function goThere()
    {
        $path = "...";

        Redirect::to($path);
        
    }  

}
</code> 
</pre>

                <h3>Array</h3>

                <p>The ArrayHelper class enables you to create arrays out of string as well as manipulate arrays.</p>

                <p>This class allows for method chaining, so you can chain all the methods you would like to use in one method call and get the final result returned.</p>
                                
                <p>Here are the methods available with the ArrayHelper class.</p>

                <h4 class="text-danger">ArrayHelper::parts</h4>

                <p>This method splits a string into a numerically indexed array depending on the delimiter provided.</p>
                
                <p>It expects three parameters:</p>

<pre>
<code data-language="php">
ArrayHelper::parts($delimiter = null, $string = null, $limit = null)->get() 
</code>
</pre> 

                <p><strong>$delimtier</strong> is the character(s) to use as a separator for exploding the input string into an array. </p>
                
                <p><strong>$string</strong> is the input string which is to be exploded into an array</p>
                
                <p><strong>$limit</strong> is an integer value that limits the number of elements to return</p>

                <p>Example:</p>

<pre>
<code data-language="php">
$name_string  = "This is Gliver Documentation";

$name_array = ArrayHelper::parts(' ', $name_string)->get();

//the final value of the $name_array is this
$name_array = array(
    0 => 'This',
    1 => 'is',
    2 => 'Gliver',
    3 => 'Documentation'
);
</code>
</pre>

                <p class="well">If we only wanted the first two elements to be returned, we would pass 2 as the third parameter so that the parts after 'is' are not returned.</p>

                <h4 class="text-danger">ArrayHelper::join</h4>

                <p>This method joins an array into a string based on the joining parameter provided</p>
                
                <p>It expects two parameters:</p>

<pre>
<code data-language="php">
ArrayHelper::join($glue = null, array $inputArray = null)->get();  
</code>
</pre>
                
                <p><strong>$glue</strong> The string to use to join the array elements into string</p>
                
                <p><strong>$array</strong> The string which is to be exploded into an array</p>

                <p>Example:</p>

<pre>
<code data-language="php">
//input array
$names = array(
    0 => 'Scott',
    1 => 'Mendoza',
    2 => 'Stuart'
);

$names_string  = ArrayHelper::join(', ', $names_array)->get();

//the final value of $names_string becomes
$names_string = 'Scott, Mendoza, Stuart';
</code>
</pre>


                <h4 class="text-danger">ArrayHelper::clean</h4>

                <p>This method loops through the items of an array removing elements with empty or null values</p>
                
                <p>It expects one parameter:</p>

<pre>
<code data-language="php">
ArrayHelper::clean($array = null)->get();
</code>
</pre>               
                
                <p><strong>$array</strong> The array whose values are to be cleaned</p>

                <p>Example:</p>


<pre>
<code data-language="php">
//input array
$user_info = array(
    'name' => 'Bernhard Anaurdis',
    'gender' => 'male',
    'address' => null,
    'age' => 78
);

//remove empty and null values
$user_info = ArrayHelper::clean($user_info)->get();

//the final content of $user_info
$user_info = array(
    'name' => 'Bernhard Anaurdis',
    'gender' => 'male',
    'age' => 78
);
</code>
</pre>



                <h4 class="text-danger">ArrayHelper::trim</h4>

                <p>This method loops through array elements removing whitespaces from begining and ending of string element values</p>
                
                <p>It expects one parameter:</p>

<pre>
<code data-language="php">
ArrayHelper::trim($array = null)->get();  
</code>
</pre>
                
                <p><strong>$array</strong> The input array to be trimmed of whitespace</p>

                <p>Example:</p>

<pre>
<code data-language="php">
//input array
$user_info = array(
    'name' => '  Sagini Obed  ',
    'status' => ' Will tell you    when   I see u',
    'address' => '4399  6th Street    Benton Harbor  '
);

//get trimmed user_info
$user_info = ArrayHelper::trim($user_info)->get();

//final content of $user_info
$user_info = array(
    'name' => 'Sagini Obed',
    'status' => 'Will tell you    when   I see u',
    'address' => '4399  6th Street    Benton Harbor'
);
</code>
</pre>



                <h4 class="text-danger">ArrayHelper::flatten</h4>

                <p>This method converts an associative array into a numerically indexed array</p>
                
                <p>It expects two paramaters:</p>

<pre>
<code data-language="php">
ArrayHelper::flatten($array = null, $return = array())->get(); 
</code>
</pre>
                
                <p><strong>$array</strong> The array to flatten</p>
                
                <p><strong>$return</strong> The return array</p>


                <p>Example:</p>


<pre>
<code data-language="php">
//input array 
$array = array(
    'first_name' => 'Vince',
    'middle_name' => 'Fargo',
    'last_name' => 'Lombardi'
);

$array = ArrayHelper::flatten($array)->get();

//final content of the $array
$array = array(
    0 => 'Vince',
    1 => 'Fargo',
    2 => 'Lombardi'
);
</code>
</pre>



                <h4 class="text-danger">ArrayHelper::first</h4>

                <p>This method returns the first element in an array</p>
                
                <p>It expects one argument:</p>

<pre>
<code data-language="php">
ArrayHelper::first($array = null)->get(); 
</code>
</pre>
                
                <p><strong>$array</strong> The array whose first element is to be returned</p>

                <p>Example:</p>


<pre>
<code data-language="php">
//input array
$cities = array('New York', 'New Hamshire', 'New Jersy');

$city = ArrayHelper::first($cities)->get();

//content of city
$city = array('New York');
</code>
</pre>

                <h4 class="text-danger">ArrayHelper::slice</h4>

                <p>This method splits an array and returns the specified section.parts</p>
                
                <p>It expects four parameters:</p>

<pre>
<code data-language="php">
ArrayHelper::slice($inputArray = null, $offset = null,  = null, $preserveKeys = false)->get();
</code>
</pre>
                
                <p><strong>$inputArray</strong> The input array that is to be split and parts returned</p>
                
                <p><strong>$offset</strong> The int to specify where to start truncating from</p>
                
                <p><strong>$length</strong>  The int to specify the number of elements to return</p>
                
                <p><strong>$preserveKeys</strong> boolean true|false Set to true to preserver numberic keys, otherwise would be reindexed</p>


                <p>Example:</p>

<pre>
<code data-language="php">
//inpur array
$employee == array(
    0 => 'Software Engineer',
    1 => '$47,000',
    2 => 'Marcial Araujo',
    3 => '6th Street Benton Harbor, MI',
    4 => 'female'
);

$employee = ArrayHelper::slice($employee, 2)->get();

//final content of $employee
$employee = array(
    0 => 'Marcial Araujo',
    1 => '6th Street Benton Harbor, MI',
    2 => 'female'
);
</code>
</pre>


                <h4 class="text-danger">ArrayHelper::KeyExists</h4>

                <p>This method checks if an array key exists</p>
                
                <p>This method expects two parameters:</p>

<pre>
<code data-language="php">
ArrayHelper::KeyExists($key = null, array $inputArrayToSearch = null)->get();  
</code>
</pre>
                
                <p><strong>$key</strong> The key to search for inthe input array</p>
                
                <p><strong> $inputArrayToSearch</strong> The array to check against</p>

                <h3>Upload</h3>

                <p>This helper class performs file uploads on the server.</p>
                
                <h4 class="text-danger">Upload::doUpload</h4>

                <p>The Upload helper class has one method which takes three parameters:</p>

<pre>
<code data-language="php">
Upload::doUpload($file_name, $target_dir = null, $file_type = null); 
</code>
</pre>
                
                <p><strong>$file_name</strong>The name of the file to upload as submitted in the form</p>
                
                <p><strong>$target_dir</strong>The name of the directory where to upload the file to.</p>

                <p>If you leave this option or set it to null, the file would be uploaded to the default upload directory specified in the config.php file.</p>

                <p>In order to specify a different directory, you give the relative path to the folder including the trailing forward slash as:</p>

<pre>
<code data-language="html">
'public/uploads/profilepics/' 
</code>
</pre>
                
                <p><strong>$file_type</strong> The file type to be checked for validation.</p>

                <p>If you would like to only upload image files, set this option to <span class="text-danger">'images'</span> so that the uploaded file is checked for valid image format.</p>
                
                <p>This method returns a <span class="text-danger">Helpers\Upload\UploadResponseClass</span> object with data about the performed upload and the property for checking if the upload was successful or unsuccessful.</p>
                
                <p>Example:</p>

<pre>
<code data-language="php">
//lets  write a simple form for uploading image file
&lt;!DOCTYPE html>
&lt;html>
&lt;body>

&lt;form action="{{Url::link('home/upload')}}" method="post" enctype="multipart/form-data">
    Select image to upload:
    &lt;input type="file" name="gravator" id="gravator">
    &lt;input type="submit" value="Upload Profile Image" name="Upload">
&lt;/form>

//let's write some code to upload this file after submission

use Helpers\Upload\Upload;

class HomeController extends BaseController {

    public function postUpload()
    {   
        $upload = Upload::doUpload('gravator', null, 'image');

        print_r($upload);

        //the object printed would have this structure
        Helpers\Upload\UploadResponseClass Object
        (
            [success] => //1 if upload was successful
            [upload_path_full] => //full path to the uploaded file
            [upload_path_relative] => //relative path to file from root if your installation
            [file_name] => //name of the file before uploading, different from final file name
            [file_size] => //interger representing the size of the file
        )

    }
    ...
}

&lt;/body>
&lt;/html> 
</code>
</pre>



                <h3>Url</h3>

                <p>This helper class resolves urls and returns the appropriate url string required</p>
                
                <p>To load this class use:</p>

<pre>
<code data-language="php">
use Gliver\Url\Url; 
</code>
</pre>

                <h4 class="text-danger">Url::link</h4>

                <p>This method returns the base url string - the url to your root installation</p>
                
                <p>It does not expect any parameter</p>
                
                <p>It returns the url string</p>

                <p>Example:</p>


<pre>
<code data-language="php">
//say you installed gliver in 'myapp' folder in your localhost

$base_url = Url::link();

echo $base_url; //should output http://localhost/myapp/
</code>
</pre>



                <h3>Redirect</h3>


                <p>This helper class helps you to manage php session re-direction</p>

                <p>You load this class in this manner:</p>

<pre>
<code data-language="php">
use Gliver\Redirect\Redirect;
</code>
</pre>                
                
                <p>This class sends headers back to the browser and returns a REDIRECT(302) status code to the browser.</p>
                
                <h4 class="text-danger">Redirect::to</h4>
                
                <p>This method redirects the browser to the url specified</p>
                
                <p>It can take two parameters:</p>

<pre>
<code data-language="php"> 
Redirect::to($path, array $data = null);  
</code>
</pre>

                
                <p><strong>$path</strong> The controller or route name to redirect to. This parameter is required.</p>
                
                <p><strong>$data</strong> The data to append to the url as query string. This has to be in a valid array format. This parameter is optional.</p>

                <p>Example:</p>

<pre>
<code data-language="php">
//say we would like to redirect to the ProfileController view() method with user id information
//lets compose the data array
$data = array('id'=>9897717171);

//this loads this url http://localhost/gliver/profile/view?id=9897717171
Redirect::to('profile/view', $data); 
</code>
</pre>

                <h4 class="text-danger">Redirect::with</h4>

                <p>This method enables you to specify parameters to be set as part of the redirect url.</p>

                <p>These parameters will be appended as a query string to the url string generated.</p>
                
                <p>It expects one parameter - an array with the key/value pairs to be appended to url.</p>

                <p>Array keys with null or empty elements will be stripped off from the query string.</p>
                
                <p><strong>$data</strong> The array with parameter to pass to url as query string. This parameter is required.</p>
                
                <p>You call this method chainied with the to() method in this manner:</p>

<pre>
<code data-language="php">
Redirect::with($data)->to('home'); 
</code>
</pre>
                
                <p class="alert alert-info">Calling this method is the same as passing the $data array as a second parameter to the Redirect::to() method</p>

                <p>Example:</p>

<pre>
<code data-language="php">
//say we would like to redirect to the ProfileController view() method with user id information
//lets compose the data array
$data = array('id'=>9897717171);

//this loads this url http://localhost/gliver/profile/view?id=9897717171
Redirect::with($data)->to('profile/view'); 
</code>
</pre>


                  <h2>Requests</h2>


                  <p>What would be the purpose of a framework if it were not able to handle requests? Proper and secure request handling is key to a strong framework that wants to be efficient and at the same time safeguard your application and server resources. </p>
                  
                  <p>A request in Gliver is invoked by accessing a url, for example <code>http://localhost/gliver</code>. This would look rather simple but there is much that goes in here Rodger!</p>
                  
                  <p>For the security of our application, excecutable PHP code does not reside in the root of the application. With the use of rules in our .htaccess file in the root directory, all requests are re-routed into the public directory. The second .htaccess file in the public directory would check for the nature of this request. If this is a request for an asset file i.e. a css, js, img files it would return the resource. If not, it would direct this request to the index.php file - thereby infering that this would be a request to load a controller. The controller is the entry point into your application.</p>
                  
                  <p>This means that we would then invoke the routing class. This class would first check and disarm the request url against XXS(Cross Site Scripting), as a security measure, before going ahead to parse the url into controller/method pairs.</p>
                  
                  <p>When making a request Gliver enables you to send with the request data in the form of GET, POST and URL parameters. All these you access using the <span class="text-primary">Input</span> helper class. More would be discussed about the Input helper class in the helpers section but you will need the parameter name in order to access its value. For example, if you submitted a form with field of name email in it, you will access the value of the email parameter in this manner <code>Input::get('email')</code>. </p>
                  
                  <p>If you defined a route in this manner <code>'adminusers' => 'Home@getUser/id/mode',</code> and you have a url of this nature <code>http://localhost/gliver/adminusers/4957450723/edit</code>, you access the value of the id parameter in this manner <code>Input::get('id')</code> - which would return <span class="text-primary">4957450723</span>.</p>
                  
                  <p class="alert alert-info">Gliver framework would only help you map a request to a controller and method pair to excecute passing along the parameters sent by request, besides securing your application from XXS. However, the rest of the logic on how, what and when your request is handled is code that you will have to write yourself.</p>
            
                  <p>Gliver framework can detect the request method - which can either be GET or POST. With this feature comes a cool ability of Gliver to load a controller method based on your request method. This means that you can use the same method name in different request methods. For example:</p>
                  
                  <p>Say you have a controller class named <span class="text-primary">LoginController</span> and would like to use the same method name for loading a login form and at the same time processing user login information - you will do this as below.</p>
                  
                  <p>Create two methods named <span class="text-primary">getLogin()</span> and <span class="text-primary">postLogin()</span>. You will access both methods with the same url as <code>http://localhost/gliver/login/login</code>. Accessing this url in your address bar will load the user login form as the request method would be GET and the <span class="text-primary">getLogin</span> method would be excecuted. Once the user fills up the form, you specify in your action attribute the same url for form submission as this <code>&lt;form action="http://localhost/gliver/login/login" method="post" ></code>. When the user then submits the form, Gliver would detect this as a POST request and therefore submit your form to the <span class="text-primary">postLogin</span> method of the LoginController. So, there you go! Using the same method name to excecute different methods depening on the request method.</p>

                  <h3>Responses</h3>

                  <p>Whenever a request is made, there is need for a response - or their might be no point of the request.</p>
                  
                  <p>After processing a url request, it's time to respond back to the user and let them know what you did, the outcome of it and their next steps.... Most, if not all, responses are handled with the <span class="text-primary">View</span> helper class.
                  The result of the request could be loading a view file, responding with json data, csv, pdf and others options as you may wish. You will look more on how to load and use the View helper class in the helpers section but we will show an example of how to load 
                  a view file using the View helper class.</p>
                  
                  <p>Place all your view files in the <code>application/views/</code> directory. Gliver has glade templating inbuilt and is enabled by default and all view files must have a <span class="text-info">.glade.php</span> extension. </p>
                  
                  <p>Say you have a users.glade.php view file under the views/home directory so that your dir structure is <code>application/views/home/users.glade.php</code>, you 
                      will load the users.glade.php view file in this manner <code>View::render('home/users')</code>.</p>
                  
                  <p>If you would like to pass data to be used by your view files, pass it as the second parameter in array format as <code>View::render('home/users', array('title'=>'Gliver - Official Site'))</code>, you will then access this variable in your view file as <span class="text-success">$title</span>.</p>        
                   

                  <h2 id="errors" class="text-danger">Error Handling</h2>

                  <p>Error handling in Gliver comes in two flavors - either through PHP errors or Exceptions.</p>
                  
                  <p>Most likely when writing, testing and deploying your application you are going to break something - you are human, right? Informative error information is a very quick and effective way to troubleshoot and fix the bug. All errors encoutered in your application are logged into the error.log file found in the <code>bin/logs/error.log</code> directory. However, you can also choose to display these errors to the screen - a good idea if you are working in development mode to mend things a little faster. </p>

                  <p>The setting on whether to display or hide and log error messages is defined in the config.php file where you set <code>"dev"=>true,</code> when working in a development environment - this makes error messages to be displayed to the screen. Setting <code>"dev"=>false,</code> would turn off error display on the screen, so that whenever there is an error message it is logged in the log file and a template error page is shown in the browser. This is good for production mode to avoid exposing your application or server directory structure to a malicious jerk.</p>

                  <p>You might however want to create custom error messages that might be more sensible to your users - who may not be techies...</p>
                  
                  <p>In that case, therefore, you might want to consider using <span class="text-info">Exceptions</span>. You might want to use your exceptions within a try...catch block, but that is entrely up-to you. Create your own Exception class by extending the <span class="text-primary">Exceptions/BaseExceptionClass</span> so that you enjoy all the built in functionality in the exception class already. In order to make use of this class, throw exceptions by passing the custom error message in this manner <code>throw new BaseExceptionClass("...your error message here...");</code> then catch this in a block 
                  and display the error message by calling the errorShow() method like so <code>$BaseExceptionClassInstance->errorShow()</code>.</p>



                <h2>Release Notes</h2>
                
                <p>The official stable release of Gliver framework is <span class="text-danger">v1.0.0</span>. Gliver MVC is, however, under active developemnt and updates are being pushed to the <a href="https://github.com/gliver-mvc/gliver">repository</a> every day. However, the syntax defined in version 0.0.1 will not change, only functionlity will be added. So if you have already learnt the syntax with this version, you are good to go, nothing would change, only for better functionality. However, you might want to keep checking out for new updates, so remember to subscribe to our newsletter so that we can keep you informed of every advancement. The updates would only include the very cool features that you have been waiting for...you don't want to miss out on this.</p>   

                <h4>Gliver 1.0.0</h4> 

                <p>This is the first stable official release of Gliver framework after the many alpha versions released earlier. Out of the box, this version has</p>
                
                <ul>
                    <li>Glade Templating Implementation with .glade.php extension for all view files</li>
                    <li>Advanced Routing with ability to name url parameters</li>
                    <li>Express Query Builder and Model Class for automated query generation and execution</li>
                </ul>      


                <h2>Upgrade Guide</h2>
                

                <p>Things can only always get better. If you realize that we have updates and there are some really cool features that you like in the updates, you can always pull the new code and put you application on steriods. At the moment, for you to pull down updates to your application, you need to <a href="https://github.com/gliver-mvc/gliver/archive/master.zip"> download </a> the framework extract and replace only the content of the system directory with the contents of the system directory in your application. You thought there was more to it? We are sorry, that's all, your framework is now  up to date. Enjoy the new funcitonality. We are working on a way to be able to update your whole application by a simple composer update statement on the command line, this is more reason you wanna subscribe to our newsletter, so that you be the first to know when this is done so that you can begin using it right away. </p>


                <h2>Contribution Guide</h2>


                <p>We are really grateful you are amazed by this wonderful light weight framework and would like to contribute code to make it better. We can't wait to see you getting started! Contribution of code is as easy. You need to bundle you code in packages
                , use psr-0 or psr-4 namespacing and publish then on the <a href="https://packagist.org/">packagist repository</a>, you can then install them via composer. With this you can contribute to the core of the framework as well. There is a more in depth guide on contributing code in the tutorials sections. Be sure to check it out. We welcome your contributions as the main drive for this framework is to develop an active community around this code base. To contribute just folk this repository and fire on... Once we have some cool features in, do a pull request and we will be in touch to get the code merged in a reasonable time</p>     