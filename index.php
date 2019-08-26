//Creation a form that contains with 3 inputs 1st must have a number second must have color 3d must have images.
user input process,
select number,select color,select images.
 output
 When a user select a number,it will be the number of images shown in the screen
 color selected must be = background color.
 This is an input form*/
 <br><br><br>
 <form action="index.php" method="POST">
 Select your number:<input type="number" name="number"><br><br><br>
 Select your favorite color: <input type="color" name="favcolor" value="#ff0000"><br><br><br>
 //<input type="radio"name="images" >Cars<br>
 <input type="radio"name="images" >balloon<br>
 <input type="radio"name="images" >cat<br><br><br>
 <input type="submit"name="btn"><br>
 </form>
 <style>
 </style>

//if the user select a random color let it be the body background of the page.
<?php
 //$_backcolor= $_POST['favcolor'];*/
 //the user submit a form and user pressed color,then collect a background image.
 //if ($_POST['favcolor']) && ($_POST['btn']);



 ?>



<?php
//When you work with an application, you open it, do some changes, and then you close it. This is much like a Session. The computer knows who you are. It knows when you start the application and when you end. But on the internet there is one problem: the web server does not know who you are or what you do, because the HTTP address doesn't maintain state.

//Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, favorite color, etc). By default, session variables last until the user closes the browser.

//So; Session variables hold information about one single user, and are available to all pages in one application.

//Tip: If you need a permanent storage, you may want to store the data in a database.

session_start();

echo $_SESSION['myVar'];
?>

