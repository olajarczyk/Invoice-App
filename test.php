<!DOCTYPE html>
<html>
<head>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Consolas;
    background-color: #1d1d1d;
  box-sizing: border-box;
}

.flex-container {
  display: flex;
  flex-wrap: wrap;
  font-size: 30px;
  text-align: center;
}

.flex-item-left {
  padding: 10px;
  flex: 25%;
}

.flex-item-right {
  padding: 10px;
  flex: 25%;
}

.flex-item-one {
  padding: 10px;
  flex: 25%;
}

.flex-item-two {
  padding: 10px;
  flex: 25%;
}
.small_btn {
    width: 70%;
    height: 500px;
    background-color: grey;
    border-radius: 15px;
    flex-direction: row;
}

/* Responsive layout - makes a one column-layout instead of a two-column layout */
@media (max-width: 800px) {
  .flex-item-right, .flex-item-left, .flex-item-one, .flex-item-two {
    flex: 100%;
  }
}
</style>
</head>
<body>
<h1 style="padding: 40px; text-align: center; color: #ffd700; font-size: 40px; font-family: Consolas;"> System faktur </h1>
<div class="flex-container">
  <div class="flex-item-left"><a href ="add_product.php" target="_blank"><button type = "button" id = "b1" class = "small_btn" ><img class = "img" src="product.png" alt="product" style="width:100%; background-color: grey;"><br><span style="font-family: Consolas; font-size: 30px; color:white; background-color: grey;">Produkty</button></a></div>
  <div class="flex-item-right"><a href ="add_client.php" target="_blank"><button type = "button" id = "b2" class = "small_btn"><img class = "img" src="client.png" alt="client" style="width:100%; background-color: grey;"><br><span style="font-family: Consolas; font-size: 30px; color:white;background-color: grey; ">Kontrahenci</button></a></div>
  <div class="flex-item-one"><a href ="add_job.php" target="_blank"><button type = "button" id = "b3" class = "small_btn"><img class = "img" src="firma.png" alt="firma" style="width:100%; background-color: grey;"><span style="font-family: Consolas; font-size: 30px; color:white; background-color: grey;">Moja firma</button></a>
  <div class="flex-item-two"><a href ="add_client.php" target="_blank"><button type = "button" id = "b4" class = "small_btn"><img class = "img" src="invoice.png" alt="invoice" style="width:100%; background-color: grey;"><span style="font-family: Consolas; font-size: 30px; color:white; background-color: grey;">Wystaw fakturę</button></a>
</div>

</body>
</html>


