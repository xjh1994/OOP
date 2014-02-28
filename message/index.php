<?php

//留言本

include('message.php');
include('bookModel.php');
include('leaveModel.php');
include('authorControl.php');

$message = new message();
$message->name = 'xjh1994';
$message->email = 'xujinghuanjut@gmail.com';
$message->content = 'oop is beautiful!';

$b = new authorControl();
$pen = new leaveModel();
$book = new bookModel();
$book->setBookPath("c:\\xampp\\htdocs\\oop\\message\\message.txt");
$b->message($pen, $book, $message);
echo $b->view($book);
// $b->delete($book);
