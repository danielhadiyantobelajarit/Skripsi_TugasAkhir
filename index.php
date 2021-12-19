<!DOCTYPE html>

<?php
    include "includes/config.php";
    
    $sql = mysqli_query($connection, "SELECT * FROM dataguru");
    $sql2 = mysqli_query($connection, "SELECT * FROM datafasilitas");
    $sql3 = mysqli_query($connection, "SELECT * FROM datamapel");
    $jumlah = mysqli_num_rows($sql);
    $jumlah2 = mysqli_num_rows($sql2);
    $jumlah3 = mysqli_num_rows($sql3);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEKOLAH SMAK KASIH KEMULIAAN</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<style>
    .banner{
        height: 90vh;
        background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('images/Gedung-KK-2.jpg');
        background-size: cover;
        background-position: center;
    }

    .banner-content{
        height: 100%;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .row p {
	      color: #666;
	      word-spacing: 2px;
	      line-height: 25px;
	      margin-bottom: 20px;
	      font-size: 18px;
	      text-align: justify;
    }
    footer {
	      padding: 20px 0;
	      color: #fff;
	      text-align: center;
    }
</style>

<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-info sticky-top">
  <div class="container">
    <span class="navbar-brand h6">
        <img src="images/Logo-Kasih-Kemuliaan.png" width="100">
        SMAK Kasih Kemuliaan
    </span>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item mx-1">
          <a class="nav-link active h5" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link h5" href="about.php">About</a>
        </li>
        <li class="nav-item dropdown mx-1">
          <a class="nav-link dropdown-toggle h5" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sarana & Prasarana
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="dataguru.php">Guru Pengajar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="datafasilitas.php">Fasilitas Sekolah</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="datamapel.php">Mata Pelajaran</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown mx-1">
          <a class="nav-link dropdown-toggle h5" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Materi Pelajaran
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="fileskelas10.php">Kelas 10</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="fileskelas11.php">Kelas 11</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="fileskelas12.php">Kelas 12</a></li>
          </ul>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link h5" href="contact.php">Contact</a>
        </li>
      </ul>
    <!--  <form class="d-flex">
        <input class="form-control mx-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>

    <div class="container-fluid banner">
        <div class="container banner-content col-lg-8">
            <div class="text-center">
                <p class="fs-1">Selamat Datang di Sekolah SMAK Kasih Kemuliaan</p>
                <p class="d-none d-sm-block h5">Melayani Tuhan Dengan Keunggulan Semangat, Pengetahuan, dan Karakter!</p>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
            <h3>INFO SINGKAT</h3>
				    <p>Sekolah Kristen Kasih Kemuliaan merupakan salah satu sekolah yang termasuk berprestasi cukup tinggi 
				    dan dapat dipercaya untuk membantu banyak kesulitan yang dialami para murid contohnya dalam hal pelajaran 
				    bisa bertanya saat luar jam pelajaran atau dalam memberikan saran yang baik bagi para murid, Kasih Kemuliaan 
				    juga memberikan konseling bagi yang membutuhkan.</p>
				    <p>Sekolah Kasih Kemuliaan sudah berdiri dari tahun 2006, jadi bisa dikatakan bahwa sekolah ini sudah banyak 
				    membantu para murid selama 15 tahun lamanya. Gedung sekolah ini terdiri dari 4 Lantai, dan kelas berskala dari 
				    kelas 10 hingga 12 SMA. Ada x mata pelajaran yang dapat dipelajari di sekolah ini, dan guru yang mengajar 
				    berbeda - beda sesuai subjek materi pembelajarannya. Terdapat pula berbagai macam fasilitas untuk mendukung 
				    efisiensi belajar murid - murid.</p>
        </div>
            <div class="col-sm-3">

                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Jumlah Guru Pengajar
                        <span class="badge rounded-pill bg-primary"><?php echo $jumlah?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Jumlah Fasilitas Sekolah
                        <span class="badge rounded-pill bg-primary"><?php echo $jumlah2?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Jumlah Mata Pelajaran
                        <span class="badge rounded-pill bg-primary"><?php echo $jumlah3?></span>
                    </li>
                </ul>

            </div>

        </div>
    </div>

<!-- END OBYEK -->

	<!-- footer -->
	<footer class="bg-info">
		<div class="container">
			<small>Copyright &copy; 2020 - KasihKemuliaan. All Rights Reserved.</small>
		</div>
	</footer>


	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>