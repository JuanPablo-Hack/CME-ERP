<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "static/head.php"; ?>
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <?php include "static/navbar.php"; ?>
      <?php include "static/menu.php"; ?>
      <div class="main-content">
        <section class="section">
          <?php include "components/StatsIndex.php"; ?>
          <?php include "components/TableIndex.php"; ?>
        </section>
      </div>
      <?php include "static/footer.php"; ?>
    </div>
  </div>
</body>

</html>