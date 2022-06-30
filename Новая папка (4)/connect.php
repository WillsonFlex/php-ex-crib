<?php
$link = mysqli_connect('localhost', 'z-ka', 'password', 'z-ka');

if (!$link) {
  die('Error connect to DB');
}