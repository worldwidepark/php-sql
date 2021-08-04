<?php
$conn = mysqli_connect('localhost','root','12345','parks');


// 1 row
$sql = 'SELECT * FROM topic WHERE id = 37';
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
echo '<h1>'.$row['title'].'</h1>';
echo $row['description'];

//all row
//mysqli_fetch_array 는  처음행부터 뱉어나가고, 다 뱉고나면 null 을 뱉는다.

$sql = 'SELECT * FROM topic ';
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)){
echo '<h1>'.$row['title'].'</h1>';
echo $row['description'];
}