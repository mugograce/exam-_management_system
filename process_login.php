<?php
session_start();
$conn=mysqli_connect("localhost","root","","teachers")or die(mysqli_error($conn));
if(isset($_POST['submit'])){
      $username=$_POST['username'];
      $password=$_POST['password'];
      $select_query=mysqli_query($conn,"select * from details where name='$username' and password='$password'")
      or die(mysqli_error($conn));
      $num=mysqli_num_rows($select_query);
    if($num==1){
        foreach($select_query as $record){
            $_SESSION['username']=$record['username'];
            $_SESSION['password']=$record['password'];
            $_SESSION['password']=TRUE;
        }
         echo"<script>window.alert('success');</script>";
         header("refresh:0;url=home_page.php");   
    }else{
        echo"<script>window.alert('Login failed')</script>";
        header("refresh:0;url=index.php");
    }
}
?>