<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System faktur - Klienci</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="productstyle.css" rel="stylesheet">
</head>
<body class="bg-dark">
<h1 style="padding: 40px; text-align: center; color: #ffd700; font-size: 40px;"> Klienci </h1>
    <div class="container">
        <div class = "row my-4">
            <div class ="col-lg-10 mx-auto">
                <div class="card shadow">
                    <div class = "card-header">
                        <h4> Dodaj klienta do bazy</h4>
</div>
<div class = "card-body p-4">
    <div id="show_alert"></div>
    <form action = "#" method = "POST" id = "add_form">
        <div id = "show_item">
            <div class = "row">
                <div class = "col-md-4 mb-3">
                    <input type = "text" name ="client_name[]" class = "form-control" placeholder="Nazwa firmy/klienta" required>
</div>
<div class = "col-md-3 mb-3">
                    <input type = "number" name ="client_nip[]" class = "form-control" placeholder="NIP" required>
</div>
<div class = "col-md-3 mb-3">
                    <input type = "text" name ="client_email[]" class = "form-control" placeholder="E-MAIL" required>
</div>
<div class = "col-md-2 mb-3 d-grid">
    <button class ="btn add_item_btn" style="width: 45px; border: none; background-color: rgba(0%, 0%, 100%, 0 "><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16" style="border: solid 1px gold; background-color: gold; color: #141d63; width: 30px; height:30px;">
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg></button>
</div>
</div>
</div>
<div>
    <input type="submit" value="Dodaj" class="btn btn-primary w-20" id="add_btn" style="background-color:#141d63; color: #ffd700; border: none;">
    <a href ="pdf.php" class="btn btn-danger" target="_blank" style="background-color:#ffd700; color: #141d63; border: none;">Pobierz PDF</a>
</div>
</form>
</div>
</div>
</div>
</div>
<script
			  src="https://code.jquery.com/jquery-3.6.0.min.js">
</script>
<script>
    $(document).ready(function(){
        $(".add_item_btn").click(function(e){
            e.preventDefault();
            $("#show_item").prepend(`<div class = "row append_item">
                <div class = "col-md-4 mb-3">
                    <input type = "text" name ="client_name[]" class = "form-control" placeholder="Nazwa firmy/klienta" required>
</div>
<div class = "col-md-3 mb-3">
                    <input type = "number" name ="client_nip[]" class = "form-control" placeholder="NIP" required>
</div>
<div class = "col-md-3 mb-3">
                    <input type = "text" name ="client_email[]" class = "form-control" placeholder="E-MAIL" required>
</div>
<div class = "col-md-2 mb-3 d-grid">
                    <button class ="btn  remove_item_btn" style=" width: 45px; border: none;background-color: rgba(0%, 0%, 100%, 0)"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16" style="border: solid 1px #a30000; background-color: #a30000; color: #141d63; width: 30px; height:30px;">
  <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
</svg></button>
</div>
</div>`);
        });
$(document).on('click', '.remove_item_btn', function(e){
    e.preventDefault();
    let row_item=$(this).parent().parent();
    $(row_item).remove();
});
// ajax request to insert all form data
$("#add_form").submit(function(e){
    e.preventDefault();
    $("#add_btn").val("Dodawanie...");
    $.ajax({
        url:'action_client.php',
        method: 'post',
        data: $(this).serialize(),
        success: function(response){
            $("#add_btn").val('Add');
            $("#add_form")[0].reset();
            $("#show_alert").html(`<div class="alert alert-success" role="alert">${response}</div>`)
        }
    });
});
});
</script>
<!-- ---------------------------------------------------------------------------------------------------- -->
<!-- REMOVE PRODUCT -->
<div class="container">
        <div class = "row my-4">
            <div class ="col-lg-10 mx-auto">
                <div class="card shadow">
                    <div class = "card-header">
                        <h4> Usuń klienta z bazy</h4>
</div>
<div class = "card-body p-4">
    <div id="show_alert"></div>
    <form action = 'remove.php?name="<?php echo $row['name'] ?>"' method = "POST" id = "remove_form">
        <div id = "show_item">
            <div class = "row">
                <div class = "col-md-4 mb-3">
                    <input type = "text" name="name" value="<?php echo isset($row['name'])?>" class = "form-control" placeholder="Podaj nazwę klienta do usunięcia" required>
</div>
<div class = "col-md-2 mb-3 d-grid">
<input type="submit" value="Usuń" class="btn btn-primary w-20" id="remove_btn" style="background-color:#a30000; color: #141d63; border: none;">
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<script
			  src="https://code.jquery.com/jquery-3.6.0.min.js">
</script>
<script>
$("#remove_form").submit(function(e){
    e.preventDefault();
    $("#remove_btn").val("Usuwanie...");
    $.ajax({
        url:'remove_client.php',
        method: 'post',
        data: $(this).serialize(),
        success: function(response){
            $("#remove_btn").val('Remove');
            $("#remove_form")[0].reset();
            $("#show_alert").html(`<div class="alert alert-success" role="alert">${response}</div>`)
        }
    });
});
</script>
<!-- ---------------------------------------------------------------------------------------------------- -->
<!-- PRODUCT LISTING -->
<div class="container">
        <div class = "row my-4 second">
            <div class ="col-lg-10 mx-auto" style="margin-left: -10px;">
                <div class="card shadow">
                    <div class = "card-header">
                        <h4> Wyświetl klientów</h4>
</div>
<div class = "card-body p-4">
    <div id="show_alert"></div>
<?php
$db_host='localhost';
$db_user='root';
$db_pass='';
$db_name='add_more';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if(!$conn){
    die('failed to connect mysql database') . mysqli_connect_error();
}

$sql = 'SELECT * FROM client';
$query=mysqli_query($conn, $sql);

if(!$query){
    die('error found!' . mysqli_error($conn));
}
echo "
<table>
<thead>
<tr>
<th>KLIENT</th>
<th>NIP</th>
<th>EMAIL</th>
</tr>
</thead>";

while ($row=mysqli_fetch_array($query))
{
    echo '<tr>
     <td>'. $row['name'] .'</td>
     <td>'.$row['nip'].'</td>
     <td>'.$row['email'].'</td>
 </tr>';
 }
 echo "</table>";
?>
</div>
</div>
</div>
</body>
</html>
