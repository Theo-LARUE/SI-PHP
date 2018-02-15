<?php
session_start();
include('db.php');
$conn = db_connect("localhost", "si-13-02-18", "root", "theoloan");		// pass: theoloan
$requete="SELECT * FROM `destination`";
$stmt= $conn->prepare($requete);
$stmt->execute();
//var_dump($row=$stmt->fetch());
?>

<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="img/favicon.png">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/font.css">
  <link rel="stylesheet" href="css/planets.css">
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
    <h2>Select your destination</h2>
  </div>

  <section class="planetsContainer">

    <form class="planetsForm" name="planetSelection" method="post" action="chooseplanet.php">
      <div class="gridContainer">

      <?php while (false !==$row=$stmt->fetch(PDO::FETCH_ASSOC)):
      ?>
        <div class="planetCell">
          <input id="planet<?=$row['id']?>" class="planetButton" type="radio" name="radio" value="<?=$row['id']?>"/>
          <div class="gridItem">
            <img class="planetImg" src="img/<?= $row['Image']?>" alt="">
            <label for="planet<?=$row['id']?>" class="planetLabel"><?= $row['PlanetName']?></label>
          </div>
        </div>
      <?php endwhile;?>
    </div>

      <div class="buttonContainer">
        <input class="continueButton" type='submit' name='continue' value="Continue">
      </div>

    </form>
  </section>

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
