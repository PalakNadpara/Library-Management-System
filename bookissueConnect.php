<?php
include('connect2.php');
session_start();
if($_POST){

       $Rname=$_POST['Rname'];
       $Bname=$_POST['Bname'];
       $Bid=$_POST['Bid'];
       $Isdate=$_POST['Isdate'];
       $Rtdate=$_POST['Rtdate'];
       $Aname=$_POST['Aname'];
       $Btype=$_POST['Btype'];
       $sql = "INSERT INTO Book_Issue (RName, BName, Id, IsDate, RtDate, AName, BookType)
       VALUES ('$Rname','$Bname','$Bid','$Isdate','$Rtdate','$Aname','$Btype');";

    // echo $sql;
       $res = mysqli_query($con2,$sql);

     if($res)
     {
      header("Location: http://localhost/SGP/bookissue.php");
     }
     else
     {
       echo "Eroor:  $sql <br> $con-->error";
     }

}
       ?>