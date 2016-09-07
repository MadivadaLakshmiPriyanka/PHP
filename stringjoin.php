<?php
$firstName='Priyanka';
$lastName='Madivada';
$title='"Hi "';
$author='php';
$answer=1;
$newLines="\r\n\r\n";
$fullName=$firstName . $lastName;
$fullName=$firstName . ' ' . $lastName;

$fullName = "$firstName $lastName";
$book = "$title by $author";
echo $fullName . '<br>';
echo $book;

$message = "Answer: $answer";
echo $message;