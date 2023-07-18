<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">
  <title>Sistema ERP - C&ME Logistics</title>
  <!-- Simple bar CSS -->
  <link rel="stylesheet" href="assets/css/simplebar.css">
  <!-- Fonts CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- Icons CSS -->
  <link rel="stylesheet" href="assets/css/feather.css">
  <!-- Date Range Picker CSS -->
  <link rel="stylesheet" href="assets/css/daterangepicker.css">
  <!-- App CSS -->
  <link rel="stylesheet" href="assets/css/app-light.css" id="lightTheme">
  <link rel="stylesheet" href="assets/css/styles.css" id="lightTheme">
  <link rel="stylesheet" href="assets/css/app-dark.css" id="darkTheme" disabled>
</head>

<body class="light ">
  <div class="wrapper vh-100">
    <div class="row align-items-center h-100">
      <form class="col-lg-3 col-md-4 col-10 mx-auto text-center" action="controllers/Login.php" method="post">
        <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
          <img src="assets/images/logo_cme.png" alt="Logo" class="logo_inicio">
        </a>
        <h1 class="h6 mb-3">Iniciar Sesión</h1>
        <div class="alert alert-success" role="alert" style="display: none;" id="success">Sus credenciales son correctas, bienvenido al sistema! </div>
        <div class="alert alert-danger" role="alert" style="display: none;" id="wrong"> Oops hemos tenido un
          error en la base de datos, revisa que la información sea la correcta! </div>
        <div class="form-group">
          <label for="inputEmail" class="sr-only">Correo Eléctronico</label>
          <input type="email" id="inputEmail" class="form-control form-control-lg" name="correo" placeholder="Email address" required autofocus>
        </div>
        <div class="form-group">
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" class="form-control form-control-lg" name="contra" placeholder="Password" required>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>
        <p class="mt-5 mb-3 text-muted">C&ME Logistics © 2023</p>
      </form>
    </div>
  </div>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/moment.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/simplebar.min.js"></script>
  <script src='assets/js/daterangepicker.js'></script>
  <script src='assets/js/jquery.stickOnScroll.js'></script>
  <script src="assets/js/tinycolor-min.js"></script>
  <script src="assets/js/config.js"></script>
  <script src="assets/js/apps.js"></script>
  <script src="scripts/login.js"></script>
</body>

</html>
</body>

</html>