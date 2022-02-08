<?php
  require 'function.php';
  // Agar Tidak Bisa Masuk Ke Pengetikan Manual Pada Url
  if (!isset($_GET['id'])) {
    header('location: services.php');
    exit;
  }
  $id = $_GET['id'];
  $buku = query("SELECT * FROM db_buku WHERE id = $id");
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
                <h2 class="section-heading text-uppercase">DETAIL BUKU</h2>
                <h3 class="section-subheading text-muted mb-5">Baca dan pinjam buku</h3>
            </div>

            <ul class="list-group">
                <li class="list-group-item active"></li>
                <li class="list-group-item"><img class="rounded" src="buku/<?php echo $buku['gambar_buku']; ?>"
                    width="250px"></li>
                <li class="list-group-item">ID Buku : <?= $buku['id_buku']; ?></li>
                <li class="list-group-item">Judul Buku : <?= $buku['judul_buku']; ?></li>
                <li class="list-group-item">Pengarang : <?= $buku['pengarang']; ?></li>
                <li class="list-group-item">Penerbit : <?= $buku['penerbit']; ?></li>
                <li class="list-group-item">Tahun Terbit : <?= $buku['tahun_terbit']; ?></li>
                <li class="list-group-item">
                <a href="edit_perpus.php?id=<?= $buku['id']; ?>" class="btn btn-warning" role="button">Edit</a> |
                <a href="hapus.php?id=<?= $buku['id']; ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini');"
                    class="btn btn-danger" role="button">Hapus</a> |
                <a href="services.php" class="btn btn-info" role="button">Kembali</a>
                </li>
            </ul>
            </div>
        </section>

        <!-- Footer-->
        <footer class="bg-light py-4">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; PPSKNNI</div></div>
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
