<?php

$link = mysqli_connect('localhost', 'root', 'root', 'z403');

if (empty($link)) {
    die('Error to connect with DB');
}