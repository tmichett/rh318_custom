<?php
$servername = "localhost";
$username = "root";

// Create connection
$conn = mysqli_connect($servername, $username);

// Check connection
if (!$conn) {
  http_response_code(500); 
} else {
  http_response_code(200); 
}
