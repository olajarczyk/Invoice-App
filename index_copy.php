<!DOCTYPE html>
<html lang="en">  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href = "avc_label_style_copy.css">
  <title>System faktur</title>
</head>
<body>
<h1 style="padding: 40px; text-align: center; color: rgb(6, 147, 227); font-size: 40px; font-family: Consolas;"> System faktur </h1>
<div class="container p-4">
          <div class="row">
            <div class="col-12">
            </div>
          </div>
          <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                <div class="card" onclick="window.open('add_product.php','mywindow');" style="cursor: pointer;"></a>
                <img src = "product.png" class="card-img-top" alt="product">
                <i class="fa-thin fa-chart-tree-map"></i>
                <div class="card-body">
                <h5 class="card-title text-center" style="height: 80px; margin-bottom: 20px;">Produkty</h5>
            </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                <div class="card" onclick="window.open('add_client.php','mywindow');" style="cursor: pointer;"></a>
                <img src = "client.png" class="card-img-top" alt="client">
                <div class="card-body">
                <h5 class="card-title text-center" style="height: 80px; margin-bottom: 20px;">Klienci</h5>
            </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                <div class="card" onclick="window.open('add_job.php','mywindow');" style="cursor: pointer;"></a>
                <img src = "firma.png" class="card-img-top" alt="job">
                <div class="card-body">
                <h5 class="card-title text-center" style="height: 80px; margin-bottom: 20px;">Twoja firma</h5>
            </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                <div class="card" onclick="window.open('add_product.php','mywindow');" style="cursor: pointer;">
                <img src = "invoice.png" class="card-img-top" alt="invoice">
                <div class="card-body">
                <h5 class="card-title text-center" style="height: 80px; margin-bottom: 20px;">Wystaw fakturę</h5>
            </div>
            </div>
            </div>
</div>
</div>
<footer>
      <div class="col-12" style="background-color: rgb(18, 14, 38); color: rgb(6, 147, 227);">
        <h6 class="text-center font-weight-bold p-2">COPYRIGHT ALEKSANDRA JARCZYK</h6>
      </div>
    </footer>
    <!--Optional Javascript-->
    <script src="main.js"></script>
    <!--Jqyery, Popper, Bootstrap-->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>