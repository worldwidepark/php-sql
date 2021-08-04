<?php

$conn= mysqli_connect("localhost","root","12345","parks");
mysqli_query($conn,"
INSERT INTO TOPIC
(title, description, created)
VALUE(
    'MYSQL',
    'MYSQL is..',
    NOW())
     ");

?>