<?php

require_once '../controllers/dashboard-controller.php';

?>



<!doctype html>
<html lang="fr">

<head>

  <title>All Pix</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/style.css">


</head>

<body>

  <div class="container text-center mt-5">

    <h1 class="mb-5 display-1">allPIX</h1>



    <p class="display-3">Bonjour, <span class="text-success"><?= $_SESSION['user']['login'] ?></span></p>

    <div class="mt-5 ps-4 text-start">

      <p class="display-6"><span class="fw-bold">Quota : </span><span class="ms-3 text-warning"><?= $_SESSION['infoPath']['sizeH'] ?> / <?= $_SESSION['user']['quotaH'] ?> Mo</span></p>
      <p class="display-6"><span class="fw-bold">Image(s) : </span><span class="ms-3 text-warning"><?= $_SESSION['infoPath']['nbFiles'] ?></p>

    </div>

    <div class="px-3 mt-5">

      <span class="pb-3 d-block"><?= $msgInfo ?? '' ?></span>

      <button id="upload" type="button" class="btn btn-light text-bg d-block w-100"><svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="35" height="20" fill="currentColor" class="bi bi-file-earmark-arrow-up-fill" viewBox="0 0 16 16">
          <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.354 9.854a.5.5 0 0 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 8.707V12.5a.5.5 0 0 1-1 0V8.707L6.354 9.854z" />
        </svg>Upload</button>



      <div class="container">
        <form id="upfile" class="d-none" enctype="multipart/form-data" action="" method="post">

          <input type="hidden" name="MAX_FILE_SIZE" value="<?= MAX_UPLOAD_MACHINE ?>" />

          <img id="preview" class="img-fluid mb-5">

          <input class="btn btn-light text-bg mb-3" type="file" name="fileToUpload" id="fileToUpload">
          <input class="btn btn-light text-bg" type="submit" value="Envoyer le fichier" name="pushmedia" />
          
          <p class="mt-2">Taille Max : <?= MAX_UPLOAD_HUMAN ?> Mo</p>
        </form>
      </div>


      <a href="../views/gallery.php" class="btn btn-light text-bg d-block mt-3"><svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-image-fill" viewBox="0 0 16 16">
          <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z" />
        </svg>Gallery</a>

    </div>


    <p class="fixed-bottom bg-white m-0 fw-bold border-top border-danger"><a href="../views/deconnection.php" class="text-bg">Déconnexion</a></p>



  </div>



  <script src="../assets/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>