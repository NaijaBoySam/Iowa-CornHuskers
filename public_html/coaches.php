<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cornhuskers Coaches</title>
    <!-- This says our CSS is compatible with phones, and phones
         don't need to scale it strangely. -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Main CSS styles for Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- Optional theme add-on -->
 <!--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/superhero/bootstrap.min.css" integrity="sha384-u4BOm6DXWNW9DDMz3uKYKOOtsYm6pt8m8DxK2sVQ9RJVnWP8mjOIct/zzXkwobmN" crossorigin="anonymous">  -->

    <style>
      body {
        background-color: #EBC50C;
        text-align: center;
        }
      .jumbotronfooter{
      background-color:#FFF;
      text-align: center;
      position: fixed;
      bottom: 0px;
      width: 100%; 
      }
      .coachesTable{
      border-style: solid;
      border-width: 5px;
      border-color: black;
      background-color: #FFF;
      margin-right: 50px;
      margin-left: 50px;
      margin-bottom: 20px;
      }
      .bioCol{
        text-align: left;
        text-indent: 40px;
      }      
      th, td {
        padding: 10px;
      }
      h2{
      text-align: center
      }
      
    </style>
</head>

<body>

<?php include 'navigation.php'; ?>
   
<h1> Iowa Cornhuskers Coaching Staff</h1>
<img alt="logo image" src="img/logo_assignment1.png"/>

<h2>Meet the Coaches</h2>

<table class="coachesTable">
    <thead>
        <tr>
            <th colspan="2">Coach Name</th>
            <th>Position</th>
            <th>Bio</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Bob Hammerhead<td>
            <td>Head Coach</td>
            <td class="bioCol">Entering his 17 straight season as the Iowa Cornhuskers head coach. Hammerhead's relentless dedication to excellence in every phase                  of the program has resulted in 16 national championships since 2000. A 17 time National Coach of the Year. Hammerhead has compiled 300-1 (.99) record                as the head coach for the Iowa Cornhuskers. Hammerhead, has been called to coach at the next level (NFL) numerous time but declines the offer every                  year Hammerhead is the only coach in college history to win 17 straight national titles.</td>
        </tr>
        <tr>
            <td>Coco Puff<td>
            <td>Offensive Coordinator</td>
            <td class="bioCol">Coco Puff joined Bob Hammerhead's staff at Iowa Cornhusker in January of 2003 as the Cornhuskers offensive coordinator. Puff, known                   for strong recruiting skills, was listed as the number one recruiter in the nation 13 different times. Bringing in every 5-star recruit in the                       nation to the Cornhuskers program.Coco Puff is known for running up the score on opponents and he does not care. The Cornhuskers average 200 points                  a game, <em> Yes, 200!</em></td>
        </tr>
        <tr>
            <td>Stewie Griff<td>
            <td>Defensive Coordinator</td>
            <td class="bioCol">Stewie Griff is in his 13th season after joining head coach Bob Hammerhead's staff in 2004 as the defensive coordinator. Every year                   Griff's defensive unit led the nation in scoring defense (2.7ppg) and rushing defense (-100 ypg). Griff's message to his defense before every game                   is to not let them get on the scoreboard. The Cornhuskers are known for not giving their opponents any chance to score, they ranked the top in total                 defense (10 ypg).</td>
        </tr>
    </tbody>
</table>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<div class="jumbotronfooter">
<img alt="EBG pic" src="img/EBGpic_assignment1.png" />

<?php include 'footer.php'; ?>
</div>

</body>
</html>