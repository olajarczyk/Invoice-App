<!DOCTYPE html>
<html lang="en">  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href = "avc_label_style.css">
  <title>System faktur</title>
</head>
<body>
<h1 style="padding: 40px; text-align: center; color: #ffd700; font-size: 40px; font-family: Consolas;"> System faktur </h1>
  <div id = "container">
    <div id = "first">
      <div class = "grid-container">
        <div class="grid-item">
        <a href ="add_product.php" target="_blank">
          <button type = "button" id = "b1" class = "small_btn" ><img class = "img" src="product.png" alt="product" style="width:100%; background-color: grey;"><br><span style="font-family: Consolas; font-size: 30px; color:white; background-color: grey;">Produkty</button></a>
        </div>
        <div class="grid-item">
        <a href ="add_client.php" target="_blank"><button type = "button" id = "b2" class = "small_btn"><img class = "img" src="client.png" alt="client" style="width:100%; background-color: grey;"><br><span style="font-family: Consolas; font-size: 30px; color:white;background-color: grey; ">Kontrahenci</button></a>
        </div>
        <div class="grid-item">
        <a href ="add_job.php" target="_blank"><button type = "button" id = "b3" class = "small_btn"><img class = "img" src="firma.png" alt="firma" style="width:100%; background-color: grey;"><span style="font-family: Consolas; font-size: 30px; color:white; background-color: grey;">Moja firma</button></a>
        </div>
        <div class="grid-item">
        <a href ="add_client.php" target="_blank"><button type = "button" id = "b4" class = "small_btn"><img class = "img" src="invoice.png" alt="invoice" style="width:100%; background-color: grey;"><span style="font-family: Consolas; font-size: 30px; color:white; background-color: grey;">Wystaw fakturę</button></a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>