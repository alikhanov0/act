<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
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

  <div class="card" style="width: 40%; margin: auto; margin-top:8%;">
    <div class="card-body">
  <center>
  <div class="container">
    <div class="row">
      <h2>Имя:
        <?php
        echo $_COOKIE["first_name"];
        ?>
      </h2>
      <h2>Фамилия:
        <?php
        echo $_COOKIE['last_name'];
        ?>
      </h2>
      <h2>Роль:
        <?php
        echo $_COOKIE['role'];
        ?>
      </h2>
    </div>
    <div class="row" style="margin-top:10%; margin-bottom:10%;">
      <div class="col"></div>
      <div class="col" id="buttond"><button type="button" class="btn btn-success" style="font-size: 40px; display: none;" onclick="doFunc()" id="button1">Награда</button></div>
      <div class="col" id="button2d"><button type="button" class="btn btn-danger" style="font-size: 40px; display: none;" onclick="window.location.href = 'nakazanie.php';" id="button2">Наказание</button></div>
      <div class="col"></div>
    </div>
  </div>
  </center>
  </div>
</div>
    <script src="checkrole.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>