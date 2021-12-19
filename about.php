<!DOCTYPE html>
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
    .about p {
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
          <a class="nav-link h5" href="index.php">Home</a>
        </li>
        <li class="nav-item mx-1">
        <a class="nav-link active h5" aria-current="page" href="#">About</a>
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

	<!-- about -->
	<section class="about">
		<div class="container">
            <br>
			<h2>SEJARAH</h2>
			<p>Kasih Kemuliaan merupakan sekolah kristen yang didirikan pada tahun 2006 lalu (dengan nama Kasih Karunia) dibawah naungan 
			Yayasan Pendidikan Kasih Karunia. Sekolah ini berada di Taman Surya V blok RR No.1, Jakarta Barat. Setelah berseling-nya waktu, 
			Sekolah Kasih Karunia terpecah menjadi 2, yaitu Kasih Karunia dan Kasih Kemuliaan (SMPK & SMAK) sehingga SMPK/SMAK Kasih Karunia 
			berganti nama menjadi Sekolah Kasih Kemuliaan.</p>
			<center><img src="images/Logo-Kasih-Kemuliaan.png" width="27%" style="margin: 50px"></center>
			<br>
			<center><img src="images/Gedung-KK-2.jpg" width="50%" style="margin: 50px"></center>
			<p>Sekolah Kristen Kasih Kemuliaan, menyajikan program pendidikan sesuai perkembangan daya pikir dan kemampuan berbahasa anak yang 
				dipacu dengan menggunakan berbagai media belajar dan metode mengajar yang bervariasi, seperti komputer multimedia dan eksperimen. 
				Perkembangan Kemandirian dan kemampuan sosial anak, dilatih melalui berbagai keterampilan psikomotorik, ekspresi dalam seni, 
				karya-karya keterampilan, memasak, mengikutsertakan dalam berbagai perlombaan. Untuk memperkaya keterampilan berbahasa, 
				sejak dini anak diperkenalkan dengan Bahasa mandarin, Bahasa Inggris di samping Bahasa Indonesia yang berguna sebagai bekal masa depannya.</p>

			<h2>VISI</h2>
			<p>“ Terbentuk pribadi yang kuat beriman, berbelas kasih, santun dan prima dalam ilmu “</p>
			<h2>MISI</h2>
			<p>1.	Membentuk iman yang takut akan Tuhan dengan kegiatan – kegiatan ibadah bersama.</p>
			<p>2.	Membentuk moral dan budi pekerti yang baik.</p>
			<p>3.	Menciptakan hubungan harmonis antara sekolah dan lingkungan masyarakat.</p>
			<p>4.	Meningkatkan rasa kepedulian sosial melalui program – program social yang diselenggarakan SMA Kristen Kasih Kemuliaan.</p>
			<p>5.	Melaksanakan program pembelajaran yang efektif, kreatif, dan aplikatif untuk mengembangkan potensi peserta didik.</p>
			<p>6.	Membekali siswa dengan ilmu yang berguna untuk melanjutkan pendidikan yang lebih tinggi.</p>
			<p>7.	Mengembangkan rasa profesionalisme peserta didik menuju era globalisasi dan persaingan dunia pekerjaan yang kompetitif.</p>
		</div>
	</section>

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