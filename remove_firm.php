<?php
try {
    $conn = new PDO('mysql:host=localhost;dbname=add_more', 'root', '');
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to delete a record
$name = $_POST['name'];

// sql to delete a record
$request = $_REQUEST;
$name = $request['name'];
$sql = "DELETE FROM firm WHERE name = '".$name."'";
// use exec() because no results are returned
$conn->exec($sql);
echo "Record deleted successfully";
} catch(PDOException $e) {
echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?> 