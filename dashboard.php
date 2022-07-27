<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <section id="navbar">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
          <h4>Aplikasi Absen</h4>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link smooth-scroll" href="dashboard.php">Home</a></li>
            <li class="nav-item"><a class="nav-link smooth-scroll" href="tampilAbsen.php">Tampil Absen</a></li>
            <li class="nav-item"><a class="nav-link smooth-scroll" href="inputAbsen.php">Input Absen</a></li>
            <li class="nav-item"><a class="nav-link smooth-scroll" href="contact.php">Contact</a></li>
          </ul>
        </div>
      </nav>
    </section>
    
<div class="jumbotron">


<h1 class="display-4 text-center">Hello, <?= $_SESSION ['nama_lengkap']?></h1>
<p class="lead text-center">Selamat Datang, anda berhasil login sebagai <b><?= $_SESSION['username']?></b></p>
<hr class="my-4">

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
