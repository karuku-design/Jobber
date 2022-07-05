<?php


$conn = new mysqli('localhost','root','','jobber_db');

if (!$conn) {
	echo "Connection failed!";
}