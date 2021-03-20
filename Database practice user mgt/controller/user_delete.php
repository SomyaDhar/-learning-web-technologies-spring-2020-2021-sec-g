<?php 
    $path=mysqli_connect('localhost', 'root', '', 'web_user_mgt');
    $user=$_GET['id'];

    $sql="delete from userlist where username='$user'";
    mysqli_query($path, $sql);

    header('location: ../view/user_list.php');
?>