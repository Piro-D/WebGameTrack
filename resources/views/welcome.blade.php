<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GameTrack</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .carousel-item img {
        width: 100%; /* Responsive width */
        height: 25%; /* Maintains aspect ratio */}
    </style>


</head>
<body>
    <div class="title" style="text-align: center;">
        <h1>Welcome to GameTrack!!!</h1>
        <h2>The website that allows you to list all the video games you have played and rate them!!</h2>
    </div>

    <hr>

    <div  style="max-width: 1000px; margin: auto;">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('images/Apex.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('images/Fortnite.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('images/Genshin.jpg')}}" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <hr>


</body>
</html>
