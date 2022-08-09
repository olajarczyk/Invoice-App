<?php

$conn = new PDO('mysql:host=localhost;dbname=add_more', 'root', '');

foreach ($_POST['client_name'] as $key => $value){
    $sql = 'INSERT INTO client(name, nip, email) VALUES (:name, :nip, :email)';
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        'name'=>$value,
        'nip'=> $_POST['client_nip'][$key],
        'email'=> $_POST['client_email'][$key]
    ]);
}
echo 'Items inserted successfully!';