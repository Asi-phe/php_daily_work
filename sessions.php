<form action="sessions.php" method="post">
Num1:<input type="number" name="num1"><br>
<select name="OP">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="/">/</option>
    <option value="*">*</option>
  </select>
 Num2:<input type="number" name="num2"><br>
<input type="submit">

</form>
<?php
//When you work with an application, you open it, do some changes, and then you close it. This is much like a Session. The computer knows who you are. It knows when you start the application and when you end. But on the internet there is one problem: the web server does not know who you are or what you do, because the HTTP address doesn't maintain state.

//Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, favorite color, etc). By default, session variables last until the user closes the browser.

//So; Session variables hold information about one single user, and are available to all pages in one application.

//Tip: If you need a permanent storage, you may want to store the data in a database.sessions are supr global.Local and global,local are variables that are accesseble within the local functio.

//session_start();
//initiallizing

//echo $_SESSION['myVar']=10;
//assigment


//creating a calculator
//Calling the function that is called calculator.
if($_POST){
  $n1 =$_POST['n1'];
  $n2 =$_POST['n12'];
  $OP =$_POST['op']
  echo calculator($n1,$n2,$OP)
}

function calculator($num1,$num2,$operator){
   switch ($operator) {
     case '+':
       # code...
       return $num1 + $num2
       break;
      # code...
      return $num1 - $num2
      break;
       # code...
       return $num1 / $num2
       break;
        # code...
        return $num1 * $num2
        break;
     default:
       # code...
       return "No command found"
       break;
   }
}

echo $_POST["num1"] 
echo $_POST["num2"]
echo $_POST["OP"]


?>