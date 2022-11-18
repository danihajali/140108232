<?php
if($_POST['num'] == -1){
    echo " your number : ";
   echo $_POST['num'] . "<br>";
   echo "You cannot enter a number!";
}
else{
    echo " your number : ";
    echo $_POST['num'] . "<br>";
 echo "Enter the new number :";
}

?>