<!DOCTYPE html>
<html>
  <head>
    <title>Input Lelang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        body {
            max-width: 99vw;
        }
    </style>
  </head>
  <body>
    <?php include "sidebar.php";
          $id_lelang=$_GET["id_lelang"];
    ?>
    <div class="row">
        <div class="col-12 text-center my-5">
            <h2>Edit Lelang</h2>
        </div>
        <div class="col-6 position-relative top-0 start-50 translate-middle-x">
          <form action="../model/edit_lelang.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id_lelang" value="<?php $id_lelang ?>">
              <div class="mb-3">
                  <label class="form-label">Status</label>
                  <select class="form-control" name="status">
                      <option value="buka">Buka</option>
                      <option value="tutup">Tutup</option>
                  </select>
              </div>
              <button type="submit" name="simpan" value="simpan" class="btn btn-primary">Submit</button>
          </form>
        </div>
    </div>
  </body>
</html>