# guru-notebookapp

Notebook – Your Personal Note Manager

“An easy way to add, edit and delete notes using our app”

1)	The application is developed using Laravel(Php framework) and MySql. Laravel comes with it’s own command-line interface called Artisan. Laravel also offers ‘Blade’, a powerful templating engine which allows us to use plain PHP code in our views. 

2)	Set-up: Laravel utilizes ‘Composer’ to manage its dependencies. Install composer - https://getcomposer.org/ and download laravel installer using the command – composer global require “laravel/installer”  (https://laravel.com/docs/5.4/installation) on your terminal. Download XAMPP - https://www.apachefriends.org/index.html and SequelPro -https://www.sequelpro.com/

3)	To test the application working (clone/download the source code)
 (i)Run composer install 
 (ii)php artisan key:generate 
 (iii)create new database and configure that in your .env file

4)	Dependencies and Services used:  (i) Auth Middleware – is used for protecting the routes, so that only authenticated users can access a given route. (ii) CSRF protection middleware – is used for protecting the application from cross-site request forgery. The CSRF token field is set in HTML forms for Post, Put, Delete requests. (iii) bcrypt – function hashes the password/values using Bcrypt. It is used as an alternative for ‘hash’ facade. Both functions help in storing passwords securely. (iv) Bootstrap-sass – for adding styles to webpages through available templates from bootstrap. (v) Validate service – to display validation errors as flash messages to the screen automatically. (vi) Postman, a chrome add-on, a tool to build, test and document the api's in a easy and faster way. 


5)	Application Working: (i) A user can only access the application once he is registered. Register and Login options are provided on the home page. (ii) Once the user has registered with his name,  email and password, he is taken to his dashboard page. (iii) A registered user can directly login with his email id, password and has access to his profile/dashboard. (iv) On the dashboard page he is given an option to goto his notebook collection. (v) On the Notebook Collection page he can add new Notebooks which can be edited and/or deleted if required. (vi) The user can choose a notebook created and the application takes him to the Notes page where he can add, edit and delete notes. (vii) A Note creation consists of title and body fields, where the user has to enter some data. (viii) If any of the note fields are left blank, it cannot be added and the application displays a flash error message. (ix) The user can return to the dashboard/home page by clicking on the Notebook Application header anytime. (x) The user can securely logout by clicking logout button on the top-right of the application anytime. 

6)	Add On’s – (i) The application can be made more useful by adding a push-notification feature for note-reminders to users. (ii) A subscription model can be added to limit the number of notebooks and/or notes that can be created based on a plan. (iii) A calendar based system can be interfaced so that a user could add notes based on the date, day and time(like a scheduler).

7)	Terminal commands that are handy
 (i)	php artisan list or php artisan help (to display list of commands available)
 (ii)	php artisan make:auth (creates a basic layout for authentication)
 (iii)	php artisan route:list (to list all the routes defined)   
 (iv)	php artisan migrate (to run all outstanding migrations)
 (v)	php artisan serve –-port=”8000” (to run server on a defined port, default port here is 8000)
    
8) Conclusion – (i) Working on “Notebook application” was very fun and interesting as the scope of the project was broad. (ii) Laravel is an amazing php framework, offers lot of tools to ease the development and testing environments. (iii) I have used MEAN stack, angular 2 and MeteorJS frameworks. I feel Laravel is comparatively better framework for devs, although it depends mostly on the projects. (iv) It was a great learning experience for me, working on this project helped me to think creatively and develop accordingly. THANK YOU 



