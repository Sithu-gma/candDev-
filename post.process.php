<?php
 include('./includes/class-autoload.inc.php');
 $post= new Posts;
 if(isset($_POST['submit'])){
     $title=$_POST['title'];
     $body=$_POST['body'];
     $author=$_POST['author'];

     $post->addPost($title, $body, $author);
     header('location: index.php');
 } else if(isset($_POST['update'])) {
     $id=$_GET['id'];
    $title=$_POST['title'];
    $body=$_POST['body'];
    $author=$_POST['author'];

    $post->updatePost($title, $body, $author,$id);
    header('location: index.php');
 }else if(isset($_GET['id'])){
     $id=$_GET['id'];
     $post->deletePost($id);
     header('location: index.php');
 }
