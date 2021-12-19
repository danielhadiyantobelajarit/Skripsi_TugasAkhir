<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA GURU SMAK KASIH KEMULIAAN</title>
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
    if(isset($_POST['Simpan']))
    {
        $kodeguru = $_POST['inputkode'];
        $namaguru = $_POST['inputnama'];
        $tugasguru = $_POST['inputtugas'];

        $nama = $_FILES['file']['name'];
        $file_tmp = $_FILES["file"]["tmp_name"];

        $ekstensifile = pathinfo($nama, PATHINFO_EXTENSION);

        //periksa ekstensi file harus JPG atau jpg
        if(($ekstensifile == "jpg") or ($ekstensifile == "JPG"))
        {
            move_uploaded_file($file_tmp, 'images/guru/'.$nama); //unggah file ke folder images
            mysqli_query($connection, "insert into dataguru value('$kodeguru', '$namaguru', 
                '$tugasguru', '$nama')");
            header("location:dataguru.php");
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
          <a class="nav-link dropdown-toggle active h5" aria-current="page" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Daftar Guru SMA Kasih Kemuliaan</h1>
                </div>
            </div>
        <br>

        <form method="POST">
        <div class="form-group row mb-2">
            <label for="search" class="col-sm-2">Nama Guru</label>
            <div class="col-sm-6">
                <input type="text" name="search" class="form-control" id="search" 
                value="<?php if(isset($_POST['search'])) {echo $_POST['search'];}?>" 
                placeholder="Cari Nama Guru">
            </div>
            <input type="submit" name="kirim" class="col-sm-1 btn btn-primary" 
            value="Search">
        </div>
        </form>
        <br>

        <table class="table table-hover table-info table-bordered border-dark">
            <thead class="thead-dark">
                <tr style="text-align: center">
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Tugas</th>
                    <th>Foto</th>
                </tr>
            </thead>

            <tbody>
            <?php
            if(isset($_POST["kirim"]))
            {
                $search = $_POST['search'];
                $query = mysqli_query($connection, "select * from dataguru
                    where namaguru like '%".$search."%'");
            }else
                {
                    $query = mysqli_query($connection, "select * from dataguru");
                }

                $nomor = 1;
                while ($row = mysqli_fetch_array($query))
                { ?>
                    <tr style="text-align: center">
                        <td><?php echo $nomor;?></td>
                        <td><?php echo $row['idguru'];?></td>
                        <td><?php echo $row['namaguru'];?></td>
                        <td><?php echo $row['tugasguru'];?></td>
                        <td>
                            <?php if(is_file("images/guru/".$row['fotoguru']))
                            { ?>
                                <img src="images/guru/<?php echo $row['fotoguru']?>" width="100">
                            <?php } else
                                echo "<img src='images/noimage.PNG' width='80'>"
                            ?>
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