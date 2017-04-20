# Doctor'App

## 3D Unity Player to serve Web purposes

### Meaning and use of Doctor'App

- This application has been made by Year 1 Web students and year 2/3 3D students as a Proof Of Concept in a certain context (Role Play):
  - Unity wants students to build a POC during 4 days and defend the commercial interests of the application during a presentation on the 5th day.
  - The main goal was to include a Unity 3D Application in a Web Application (both built from scratch) and convince the clients that your work as a place on the market.
  - Both Teams of 3D and Web had to communicate and manage the project in order to give the best POC possible (synergy / example plugin).

- Doctor'App is a dynamic web Application to be used mainly by medicine Students so they can read lessons online and manage these lessons :
  - Read lessons online once you're logged in (Lessons include 3D application representing a 3D view of a Human shoulder)
  - Search lessons according to their tags (Shoulder, Cardiology, Nerves ...)
  - Add/Remove Lessons to/from their "favorites".
  - Lessons are put into the user's "History", which allows people to find articles they did read, also allows the app to calculate the user's progression through the lessons.

### Structure

#### Doctor'App is using a MVC structure (no framework) with a simple URL rewriting consisting of :

- First parameter in URL is the controller 
  - Ex: "medical/users" is using a controller called "Users"
- Second one is the action we want the controller to execute 
  - Ex : "medical/users/register" is using a method called register from the controller "Users".
- Third one is an id (number)
  - Ex : "medical/courses/articles/15" is passing an id parameter "15".

#### BootStrap class : Router

- The Bootstrap PHP Class gets informations from the URL and will :
  - Generate the controller called ("Home" if no controller is called and will only echo "Controller does not exist" if controller class does not exist)
  - Execute the Controller's Action if method exists, otherwise will execute the 404 method from parent Controller Class.

#### AJAX APIS 

Doctor'App is using 2 AJAX APIS :

- Search API which expects a parameter tag (method: POST) (represents a tag name for Lessons), searches into the databases for the lessons corresponding to the tag given and returns a JSON.

- Add Favorites API which expects the user to be logged in (checks for Session variables). This API is used in two ways (so we can use this API on different views):
  - Add to the User's favorites if the article is not already into it (method "exists" defined in the Parent Model class)
  - Remove from the User's favorites if the article is into the database for this specific user.

### Set up to use Doctor'App (local)

In order to use Doctor'App locally, you'll need to take care of multiple factors :
- Download / Git Clone this repository
- Use a server application such as : WAMP / MAMP / XAMP
  - Then either change your local server port to 8888 or open "config/config.php" and change the ROOT_URL definition at line 14 to the local port you are currently using.
- Import the database structure in your personnal MySQL (PhpMyAdmin) --> config/db/sql, !Don't forget to name the local database "medical"!
- You will have to rename the repository as "medical" (or change ROOT_URL in config/config.php line 14)
