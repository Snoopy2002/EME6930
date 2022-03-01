<html>
<body>
PHP output<br> //php file to process variables on form blanks.
Student First Name: <?php echo $_GET["fname"]; ?><br>
Student Last Name: <?php echo $_GET["lname"]; ?><br>
Student Age: <?php echo $_GET["age"]; ?><br>
Student Gender: <?php echo $_GET["gender"]; ?><br> 
Parent Email: <?php echo $_GET["email"]; ?><br> 
<?php echo "Today is " .date("Y.m.d")?>
</body>
</html>