<?php

require 'vendor/autoload.php';

use Dompdf\Dompdf;
$conn = new PDO('mysql:host=localhost;dbname=add_more', 'root', '');
$sql = 'SELECT * FROM items';
$stmt = $conn -> prepare($sql);
$stmt -> execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
$gt=0;
$i=1;
$html = '<!DOCTYPE html>
<html lang="pl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://aleksandrajarczyk.com/dompdfstyle.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Yellowtail">
    <title>Faktura pdf</title>
</head>
<div class="main" style="background-color: white; margin-top: 60px;">';
$html .= '<style>
* { font-family: DejaVu Sans, sans-serif; }

td,th{
    border: none;
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid black;
    font-size: 12px;
}
.my-table{
    text-align: right;
    border-bottom: none;
}

.my-table>th{
    border-bottom: none;
}
table{
    margin-top: 120px;
}
footer{
    text-align: center;
    position:absolute;

width:100%;
background-color: white;
margin-top: -140px;
}

</style>';
$html .= '<body >
    <h2 style="font-family: DejaVu Sans, sans-serif; font-size: 20px; float: left; padding-bottom: 60px; padding-right: 30px; ">FAKTURA</h2>
    <a href="https://aleksandrajarczyk.com/" style="margin-right: -40px; margin-top: -30px; z-index: 1;"><img src="https://aleksandrajarczyk.com/AJ.png" alt="Aleksandra Jarczyk" width="100" height="100"></a>
<table>
<thead>
    <tr>
<th>LP.</th>
<th>OPIS PRODUKTU</th>
<th>CENA</th>
<th>ILOŚĆ</th>
<th>RAZEM</th>
</tr>
</thead>
<tbody style="margin-bottom:10px;">';

foreach($rows as $row){
   $html .= '<tr>
    <td>'.$i.'</td>
    <td>'. $row['name'] .'</td>
    <td>'.number_format($row['price'], 2).'</td>
    <td>'.$row['quantity'].'</td>
    <td>'.number_format($row['price'] * $row['quantity']).'</td>
</tr>';
$gt += $row['price'] * $row['quantity'];
$i++;
}
$html .= '
</tbody>
<tr>
    <th colspan="3" class="my-table" style ="font-size: 20px; padding-top: 40px; text-align: right;">PODSUMOWANIE</th>
</tr>
<tr>
    <th colspan="5" class="my-table" >SUMA CZĘŚCIOWA</th>
    <th style="border-bottom: none;">' . number_format($gt) . '</th>
</tr>
<tr>
    <th colspan="5" class="my-table">VAT(23%)</th>
    <th style="border-bottom: none;">' . number_format(($gt * 23)/100, 2) . '</th>
</tr>
<tr>
    <th colspan="5" class="my-table">SUMA CAŁKOWITA</th>
    <th style="border-bottom: none;">' . number_format($gt + ($gt * 23)/100,2) . '</th>
</tr>
</table>
<div class="sprzed-odb" style="margin-top: 60px;">
<div style="max-width: 300px;float: right; font-size: 12px; margin-top: -5px;">
<h4 style="font-family: DejaVu Sans, sans-serif;">ODBIORCA: </h4>
<p>Kontrahent<br>
NIP: 5263151710 <br>
e-mail: info@e-mail.com</p>
</div>
<div style=" max-width: 300px;font-size: 12px; ">
<h4 style="font-family: DejaVu Sans, sans-serif;">SPRZEDAWCA: </h4>
<p>Nazwa firmy<br>
NIP: 7769905485 <br>
e-mail: info@e-mail.com</p>
</div>
<div style="margin-top: 50px;font-size: 12px;">
<h4 style="font-family: DejaVu Sans, sans-serif;">INFORMACJE DOTYCZĄCE RACHUNKU BANKOWEGO: </h4>
<p>Nazwa firmy<br>
Nazwa banku<br>
Nr konta: 1 2343 XXXX 9503 2093 XXXX 9400</p>
    </div>
<h3 style="font-size: 50px; text-align: right; ">Dzięki!</h3>
<a href="https://aleksandrajarczyk.com/" style="font-size: 15px; text-align: right; margin-top: -40px; margin-right: -10px; text-decoration: none; color:#ffd762; ">www.aleksandrajarczyk.com</a>
</div>
</div>
</div>
</body>
</html>';

// instantiate and use the dompdf class
$dompdf = new Dompdf;
$dompdf->setBasePath(realpath('media/style.css'));
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('invoice.pdf');
?>
