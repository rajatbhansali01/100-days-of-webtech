<?php
if($_POST["name"]|| $POST["course"])  {
	 if (preg_match("/[^A-Za-z'-]/",$_POST['name'] )) {
         die ("invalid name and name should be alpha");
	 }

	
 echo "Welcome ". $_POST['name']. "<br />";
      echo "You are ". $_POST['course']. "in this course";
exit();
}
?>
