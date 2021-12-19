<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILE MATERI KELAS 10</title>
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
    table {
        font-size: 16px;
    }
</style>

<?php
    include "includes/config.php";
    if(isset($_POST['Simpan'])){
        $kodefile = $_POST['inputkode'];
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $path = "files/kelas11/".$fileName;
        
        $query = "INSERT INTO filekelas11 VALUES ('$kodefile', '$fileName')";
        $run = mysqli_query($connection,$query);
        
        if($run){
            move_uploaded_file($fileTmpName,$path);
            echo "success";
        }
        else{
            echo "error".mysqli_error($connection);
        }
        
    }
    
?>

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
          <a class="nav-link dropdown-toggle active h5" aria-current="page" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Daftar File Materi Pelajaran Kelas 11</h1>
                    <h5>File Materi Kelas 11 Download Di Sini</h5>
                </div>
            </div>
        <br>
        <table class="table table-hover table-success">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <!--<th>Tugas</th>
                    <th>Foto</th> -->
                    <th colspan="2" style="text-align: center">Action</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                $query2 = "SELECT * FROM filekelas11";
                $run2 = mysqli_query($connection,$query2);
                $nomor = 1;
                while ($row = mysqli_fetch_assoc($run2))
                { ?>
                    <tr>
                        <td><?php echo $nomor;?></td>
                        <td><?php echo $row['idfile'];?></td>
                        <td><?php echo $row['filename'];?></td>

                        <td>
                            <a href="download.php?file=<?php echo $row['filename'] ?>" 
                            class="btn btn-success btn-sm" title="EDIT">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg>
                            </a>
                        </td>

                    </tr>
                    <?php $nomor = $nomor + 1;?>
                <?php } ?>
            </tbody>

        </table>
        </div>

        <div class="col-sm-2"></div>

    </div>
    
    	<!-- footer -->
	<footer class="bg-info fixed-bottom">
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


<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/
jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/
select2/4.0.3/js/select2.min.js"></script>

</body>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/
    jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/
    select2/4.0.3/js/select2.min.js"></script>
</html>