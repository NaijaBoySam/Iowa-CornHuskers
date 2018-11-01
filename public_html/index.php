<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Iowa Cornhuskers</title>
    <!-- This says our CSS is compatible with phones, and phones
         don't need to scale it strangely. -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Main CSS styles for Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- Optional theme add-on -->
<!--     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/superhero/bootstrap.min.css" integrity="sha384-u4BOm6DXWNW9DDMz3uKYKOOtsYm6pt8m8DxK2sVQ9RJVnWP8mjOIct/zzXkwobmN" crossorigin="anonymous"> -->

    <style>
      .jumbotron {
        text-align: center;
        background-color: #EBC50C;

      }
      #out_of_jumbotron {
        text-align: center;
      }

      .carousel-inner > .carousel-item >img {
        margin: 0 auto;
      }
      
      .jumbotronfooter{
      background-color:#FFF;
      text-align: center;
      bottom: 0px;
      width: 100%;  
      }
      
    </style>
</head>

<body>
  
<?php include 'navigation.php'; ?>
    
<div class="jumbotron">
  <h1 class="display-4">Official Home of the Iowa Cornhuskers</h1>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-80" src="img/EBG.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-80" src="img/wins.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-80" src="img/football.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <p class="lead"></p>
  <hr class="my-4">
  <p>This is the Offical Site for all things Cornhusker football, the best football program in the nation.</p>
  <a class="btn btn-success btn-lg" href="roster.html" role="button">Learn more</a>
  <p></p><br>

<p id="out_of_jumbotron">Cornhuskers football program is one rich in history and tradition. Playing hard nose football every season since 2000,<br> the Cornhuskers football team has won 17 straight EBG Conference Championships, made 17 straight trips to the NCAA Division 6 Championships <br> and won 16 NCAA Division 6 National Championship. Come watch numerous conference MVPs and All-Americans showcase their talents at <br>beautiful Kevin Hart Stadium located in Indianola, Iowa. Rocking the Black &amp; Gold on Saturdays in the fall, it will be an experience unlike any other.</p>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<div class="jumbotronfooter">
<img alt="EBG pic" src="img/EBGpic_assignment1.png" />

<?php include 'footer.php'; ?>
</div>
</body>
</html>