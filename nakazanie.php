<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Act</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" src="style.css">
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
  rel="stylesheet"
/>
  </head>

  <body style="background: lightgray">

  <nav class="navbar navbar-expand-sm navbar-light" style="background-color: rgb(31, 188, 31)" id="neubar">
      <div class="container">
        <a href="" class="logo" style="color: black; font: bold;">Online-act</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
              <a class="nav-link mx-2 active" href="#">Личный кабинет</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="card" style="width: 60%; margin: auto; margin-top:8%;" id="first">
    <div class="card-body">
  <center>
  <div class="container">
    <div class="row" style="margin-top:10%; margin-bottom:10%;">
    <label class="my-1 mr-2" for="inlineFormCustomSelectPref" style="font-size:30px; padding-bottom:3%;">Выберите тип нарушения</label>
    <center>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" style="width:20%;">
    <option selected>Choose...</option>
    <?php
      include 'connect.php';

      $sql = "SELECT `category` FROM `act_category`";
      $res = $conn->query($sql);

      while($row = $res->fetch(PDO::FETCH_ASSOC)){
        echo "<option>" . $row['category'] . "</option>";
      }

      $conn = null;
    ?>
  </select>
  </center>
  <div class="row">
    <center>
    <button type="button" style="font-size: 20px; width:30%; margin-top:3%" class="btn btn-primary" id="button1" onclick="toSecond()">Далее</button>
    </center>
  </div>
  </div>
  </center>
  </div>
</div>



<div class="card" style="width: 60%; margin: auto; margin-top:8%;" id="second">
    <div class="card-body">
  <center>
  <div class="container">
    <div class="row" style="margin-top:10%; margin-bottom:10%;">
    <label class="my-1 mr-2" for="inlineFormCustomSelectPref" style="font-size:30px; padding-bottom:3%;">Выберите ученика</label>
    <div class="row">
      <div class="col"></div>
      <div class="col">
      <p>Выберите класс</p>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" style="width:20%;">
    <option selected>Choose...</option>
    <?php
      include 'connect.php';

      $sql = "SELECT `grade` FROM `classes`";
      $res = $conn->query($sql);

      while($row = $res->fetch(PDO::FETCH_ASSOC)){
        echo "<option>" . $row['grade'] . "</option>";
      }

      $conn = null;
    ?>
  </select>
  </div>

  <div class="col">
  <p>Выберите литер</p>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" style="width:20%;">
    <option selected>Choose...</option>
    <?php
      include 'connect.php';

      $sql = "SELECT `liter` FROM `classes`" ;
      $res = $conn->query($sql);

      while($row = $res->fetch(PDO::FETCH_ASSOC)){
        echo "<option>" . $row['grade'] . "</option>";
      }

      $conn = null;
    ?>
  </select>
  </div>

  <div class="col"></div>
  </div>
  <div class="row">
    <center>
    <div class="row">
      <div class="col">
      <button type="button" style="font-size: 20px; width:30%; margin-top:3%" class="btn btn-danger" onclick="backTo1()">Назад</button>
      </div>
      <div class="col">
      <button type="button" style="font-size: 20px; width:30%; margin-top:3%" class="btn btn-primary">Далее</button>
      </div>
    </div>
    </center>
  </div>
  </div>
  </center>
  </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="nakazanie.js"></script>
  </body>
</html>