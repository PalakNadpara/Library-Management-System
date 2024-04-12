<?php
include('connect.php');
session_start();
if($_POST){

       $name =$_POST['name'];
       $date =$_POST['date'];
       $clg  =$_POST['clg'];
       $dep  =$_POST['dep'];
       $cid  =$_POST['cid'];
       $email=$_POST['email']; 
       $mno =$_POST['mno'];
       $add = $_POST['add'];
       //$om = "INSERT INTO Member_Info (Full_Name, DOB, Collage, Department, Collage_Id, Email, Mobile_No,Address) 
       //VALUES ('$name', '$date', '$clg', '$dep', '$cid', '$email','$mno', '$add')";

    // echo $sql;
       $res = mysqli_query($con,"INSERT INTO Member_Info (FName, DOB, Collage, Department, Collage_Id, Email, Mobile_No,Address) 
       VALUES ('$name', '$date', '$clg', '$dep', '$cid', '$email','$mno', '$add');");

     if($res)
     {
      header("Location: http://localhost/SGP/DataBase.php");
     }
     else
     {
       echo "Eroor:  $sql <br> $con-->error";
     }

}
       ?>