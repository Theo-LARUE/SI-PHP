<?php
session_start();
include('db.php');
$conn = db_connect("localhost", "si-13-02-18", "root", "theoloan");

$requete="SELECT PlanetName, Price, Image FROM `destination` WHERE `ìd` = :destination_id";
$stmt= $conn->prepare($requete);
$stmt->execute();

$requete2="SELECT * FROM `date`";
$stmt2= $conn->prepare($requete2);
$stmt2->execute();

$requete3="SELECT * FROM `lieu`";
$stmt3= $conn->prepare($requete3);
$stmt3->execute();
?>

<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="img/favicon.png">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/font.css">
  <link rel="stylesheet" href="css/booking.css">
  <script src="scripts/particles.min.js"></script>
  <title>Halan</title>
</head>

<body>
  <div id="particles-js"></div>

  <header>
    <div class="headerContainer">
      <div class="logoContainer">
        <a href="index.php">
          <img class="logoImg" src="img/logo_gradient_Gradient.svg" alt="Logo Halan">
        </a>
      </div>

      <div class="menuContainer">
        <a class="menuItem-link" href="">destinations</a>
        <a class="menuItem-link" href="">about</a>
      </div>
    </div>
  </header>

  <section class="steps">
    <div class="stepsContainer">
      <h4 class="step step1">1</h4>
      <div class="stepSeparator1"></div>
      <h4 class="step step2">2</h4>
      <div class="stepSeparator2"></div>
      <h4 class="step step3">3</h4>
    </div>
  </section>

  <div class="title">
    <h2>Booking informations</h2>
  </div>

  <section class="mainContainer">
    <div class="destinationContainer">
      <h5>Destination</h5>

      <img src="img/<?= $row['Image'].$row[id]?>" alt="Selected Planet Image" class="selectedPlanet">
      <h3><?=$row['PlanetName']?></h3>

    </div>


    <form class="informationForm" name="inscription" method="post" action="choosedate.php">
      <div class="fromDateContainer">
        <div class="fromContainer">
          <h5>From</h5>
          <div class="select-wrapper">
            <div class="select-arrow"></div>
            <select name="radio">
            <?php while (false !==$row3=$stmt3->fetch(PDO::FETCH_ASSOC)):
            ?>
              <option value="<?=$row3['id']?>"><?=$row3['Lieu']?></option>
            <?php endwhile;?>
            </select>
          </div>
        </div>

        <div class="datesContainer">
          <h5>Available dates</h5>
            <?php while (false !==$row2=$stmt2->fetch(PDO::FETCH_ASSOC)):
            ?>
          <div class="gridContainer">
            <div class="dateInputContainer">
              <input id="date<?=$row2['id']?>" class="dateButton" type="radio" name="radio" value="<?=$row2['id']?>"/>
              <div class="dateTile">
                <label for="date<?=$row2['id']?>" class="dateLabel"><?=$row2['Date']?></label>
              </div>
            </div>
              <?php endwhile;?>
          </div>

        </div>
      </div>
      <div class="buttonContainer">
        <input class="previousButton" type='submit' name='previous' value="Change destination" formaction="planets.php">
        <input class="continueButton" type='submit' name='continue' value="Continue" formaction="choosedate.php">
      </div>
    </form>

    <div class="priceContainer">
      <h5>Price</h5>
      <h2 class="priceDisplay">599€</h2>
    </div>
  </section>
~
  <script type="text/javascript">
    particlesJS("particles-js", {
      "particles": {
        "number": {
          "value": 355,
          "density": {
            "enable": true,
            "value_area": 789.1476416322727
          }
        },
        "color": {
          "value": "#ffffff"
        },
        "shape": {
          "type": "circle",
          "stroke": {
            "width": 0,
            "color": "#000000"
          },
          "polygon": {
            "nb_sides": 5
          },
          "image": {
            "src": "img/github.svg",
            "width": 100,
            "height": 100
          }
        },
        "opacity": {
          "value": 0.48927153781200905,
          "random": false,
          "anim": {
            "enable": true,
            "speed": 0.2,
            "opacity_min": 0,
            "sync": false
          }
        },
        "size": {
          "value": 2,
          "random": true,
          "anim": {
            "enable": true,
            "speed": 2,
            "size_min": 0,
            "sync": false
          }
        },
        "line_linked": {
          "enable": false,
          "distance": 150,
          "color": "#ffffff",
          "opacity": 0.4,
          "width": 1
        },
        "move": {
          "enable": true,
          "speed": 0.2,
          "direction": "none",
          "random": true,
          "straight": false,
          "out_mode": "out",
          "bounce": false,
          "attract": {
            "enable": false,
            "rotateX": 600,
            "rotateY": 1200
          }
        }
      },
      "interactivity": {
        "detect_on": "canvas",
        "events": {
          "onhover": {
            "enable": true,
            "mode": "bubble"
          },
          "onclick": {
            "enable": true,
            "mode": "push"
          },
          "resize": true
        },
        "modes": {
          "grab": {
            "distance": 400,
            "line_linked": {
              "opacity": 1
            }
          },
          "bubble": {
            "distance": 83.91608391608392,
            "size": 1,
            "duration": 3,
            "opacity": 1,
            "speed": 3
          },
          "repulse": {
            "distance": 200,
            "duration": 0.4
          },
          "push": {
            "particles_nb": 4
          },
          "remove": {
            "particles_nb": 2
          }
        }
      },
      "retina_detect": true
    });
  </script>


</body>

</html>
