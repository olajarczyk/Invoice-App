<?php

$conn = new PDO('mysql:host=localhost;dbname=add_more', 'root', '');

foreach ($_POST['firm_name'] as $key => $value){
    $sql = 'INSERT INTO firm(name, nip, email) VALUES (:name, :nip, :email)';
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        'name'=>$value,
        'nip'=> $_POST['firm_nip'][$key],
        'email'=> $_POST['firm_email'][$key]
    ]);
}
echo 'Items inserted successfully!';