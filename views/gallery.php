<?php

require '../controllers/gallery-controller.php';

?>

<!doctype html>
<html lang="fr">

<head>

  <title>All Pix</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/style.css">
  <link href="../assets/lightbox.css" rel="stylesheet" />


</head>

<body>

  <div class="container text-center mt-5">

    <h1 class="mb-5 display-1">allPIX</h1>

    <div class="row" data-masonry='{"percentPosition": true }'>

      <?php foreach ($files as $value): ?>

        <div class='col-lg-3 col-4 mb-3'>
          <div>
            <a data-lightbox='roadtrip' href='../img/<?= $_SESSION["user"]["login"] ?>/<?= $value ?>'>
              <img class='img-fluid' src='../img/<?= $_SESSION["user"]["login"] ?>/<?= $value ?>'>
            </a>
          </div>
        </div>

        <?php endforeach; ?>
    </div>


    <p class=" fixed-bottom bg-white m-0 fw-bold border-top border-danger"><a href="../views/dashboard.php" class="text-bg">Dashboard</a></p>


          </div>



          <script src="../assets/script.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
          <script src="../assets/lightbox-plus-jquery.js"></script>
</body>

</html>