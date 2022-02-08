<?php
  require 'function.php';

  $id = $_GET['id'];
  $buku = query("SELECT * FROM db_buku WHERE id = $id");
  if (isset($_POST['edit'])) {
    if (edit($_POST) > 0) {
      echo "
      <script>
        alert('Data Berhasil di Edit..!');
        document.location.href='detail_perpus.php'
        </script>
        ";
    } else {
      echo "
      <script>
        alert('Data Gagal di Edit..!');
        </script>
        ";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Uas</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="font-awesome.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">PERPUSTAKAAN</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="services.php">Daftar Buku</a></li>
                        <li class="nav-item"><a class="nav-link" href="portfolio.php">Anggota Perpustakaan</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Services-->
        <section class="page-section" id="services">
          <div class="container justify-content-center">
            <div class="text-center mt-5">
              <h2 class="section-heading text-uppercase">EDIT DATA BUKU</h2>
              <h3 class="section-subheading text-muted mb-5">Pinjam & Baca Bucu Semua Ada Disini</h3>
            </div>

            <div class="row">
              <div class="col px-3">
                <form method="POST" action="">
                  <input type="hidden" class="form-control" value="<?= $buku['id'] ?>" name="id">
                  <div class="form-group">
                    <label for="id_buku" class="form-label mt-2">ID Buku : </label>
                    <input type="text" class="form-control" id="id_buku" value="<?= $buku['id_buku'] ?>" placeholder="ID Buku" name="id_buku" autofocus required autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="judul_buku" class="form-label mt-2">Judul Buku : </label>
                    <input type="text" class="form-control" id="judul_buku" value="<?= $buku['judul_buku'] ?>" placeholder="Judul Buku" name="judul_buku" required autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="pengarang" class="form-label mt-2">Pengarang : </label>
                    <input type="text" class="form-control" id="pengarang" value="<?= $buku['pengarang'] ?>" placeholder="Pengarang" name="pengarang" required autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="penerbit" class="form-label mt-2">Penerbit : </label>
                    <input type="text" class="form-control" id="penerbit" value="<?= $buku['penerbit'] ?>" placeholder="Penerbit" name="penerbit" required autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="tahun_terbit" class="form-label mt-2">Tahun Terbit : </label>
                    <input type="text" class="form-control" id="tahun_terbit" value="<?= $buku['tahun_terbit'] ?>" placeholder="Tahun Terbit" name="tahun_terbit" required autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="gambar_buku" class="form-label mt-2">Upload Image :</label>
                    <input class="form-control" type="file" id="gambar_buku" value="<?= $buku['gambar_buku'] ?>" placeholder="Gambar Buku" name="gambar_buku" required autocomplete="off">
                  </div>
                  <button type="tambah" class="btn btn-warning mt-3" name="edit">Simpan</button>
                  <a href="detail_perpus.php" class="btn btn-info mt-3" role="button">Kembali</a>
                </form>
              </div>
            </div>
          </div>
        </section>

        <!-- Footer-->
        <footer class="bg-light py-4">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; Library Ibukota</div></div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
