<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReservacionesHoteles.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
      body{
        background-image: url('img/reservacion.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
      }
    </style>
</head>
  
<body>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Reserve</li>
        </ol>
    </nav>
  
  <div class="position-absolute top-50 start-50 translate-middle">
    <div class="position-absolute top-30 start-50 translate-middle" >
      <h1 class="fw-bold" style="color:white">ReHotel</h1>
    </div>
    <br>
    <h3 class="fw-light" style="color:white">Do you want to know where to stay?</h3>
    <br>
    <form class="row g-3">
      <div class="col-md-6">
        <input type="text" class="form-control" id="inputCiudad" placeholder="City">
      </div>
      <div class="col-md-4">
        <select id="inputState" class="form-select">
          <option selected>State...</option>
          <option>Nayarit</option>
          <option>All</option>
        </select>
      </div>
      <button type="button" class="btn btn-primary btn-sm">Know Hotels</button>
    </form> 
  </div>

  
    
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    
</body>
</html>