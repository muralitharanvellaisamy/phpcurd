# PHP simple CURD

1.Create DB and Table
2.Create a Form
3.Create connect.php File Create as Common File
4.Insert Option
5.Update
6.Delete

Create DB and Table

  - phpmyadmin using crate DB which Like your wish
  - create table, Number fields depends your requirement
  
Create a Form

  Whenever form creates Must enter 'action', 'name', 'method'
  <form action="" name="" method="">
  </form>
 
 Create connection DB
 
   Object Oriented DB Connection
  
   First set, Servername, Username, Password, DBname
   
   Example
   <?php
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "test"
       // Create connection
       $conn = new mysqli($servername, $username, $password, $dbname);
    ?>
    Note - if Your Using Localhost above the example use. 
 Insert Opeartion
   
   // Escape user inputs for security
   $first_name = mysqli_real_escape_string($link, $_REQUEST['firstname']);
   $last_name = mysqli_real_escape_string($link, $_REQUEST['lastname']);
   $email = mysqli_real_escape_string($link, $_REQUEST['email']);
    
   // attempt insert query execution
   $sql = "INSERT INTO phpcurdinsert (firstname, lastname, email) VALUES ('$first_name', '$last_name', '$email')"; 
