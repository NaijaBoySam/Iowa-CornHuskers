<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Login</title>
  <!-- This says our CSS is compatible with phones, and phones
         don't need to scale it strangely. -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Main CSS styles for Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- Optional theme add-on -->
<!--     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/superhero/bootstrap.min.css" integrity="sha384-u4BOm6DXWNW9DDMz3uKYKOOtsYm6pt8m8DxK2sVQ9RJVnWP8mjOIct/zzXkwobmN" crossorigin="anonymous">
 -->
    <style>
      body {
        background-color: #EBC50C;
        text-align: center;
      }
      .form-group {
        width: 60%;
        padding-left: 575px;
      }
      .jumbotronfooter{
      background-color:#FFF;
      text-align: center;
      position: fixed;
      bottom: 0px;
      width: 100%;  
      }
    </style>
</head>

<body>

<?php include 'navigation.php'; ?>

<h1>Login to Cornhusker Football</h1>

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <button type="submit" class="btn btn-dark">Submit</button>

</form>
<br>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<div class="jumbotronfooter">
<img alt="EBG pic" src="img/EBGpic_assignment1.png" />
<?php include 'footer.php'; ?>
</div>

</body>
</html>