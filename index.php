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
 <input type="radio"name="images" >Cars<br>
 <input type="radio"name="images" >balloon<br>
 <input type="radio"name="images" >cat<br><br><br>
 <input type="submit"name="btn"><br>
 </form>