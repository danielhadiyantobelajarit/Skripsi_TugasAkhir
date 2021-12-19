<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA MATA PELAJARAN SMA KASIH KEMULIAAN</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/
    libs/select2/4.0.3/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>

<?php
    include "includes/config.php";
    
    if(isset($_POST["Batal"]))
    {
        header("location:datamapel.php");
    }
    
    if(isset($_POST['Ubah']))
    {
        $kodemapel = $_POST['inputkode'];
        $namamapel = $_POST['inputnama'];
        $keteranganmapel = $_POST['inputketerangan'];

        
        mysqli_query($connection, "UPDATE datamapel SET namamapel=
        '$namamapel', keteranganmapel='$keteranganmapel'
        WHERE idmapel = '$kodemapel'");
        header("location:datamapel.php");
    }

    $kodemapel = $_GET["ubadata"];
    $editmapel = mysqli_query($connection, "SELECT * FROM datamapel
    where idmapel = '$kodemapel'");
    $rowedit = mysqli_fetch_array($editmapel);
?>

<body>
    <div class="row">
    <div class="col-sm-1"></div>

    <div class="col-sm-10">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Edit Data Mata Pelajaran SMA Kasih Kemuliaan</h1>
            </div>
        </div>
        <br>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="kodemapel" class="col-sm-2 col-form-label">Kode Mata Pelajaran</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="kodemapel" name="inputkode"
                    value="<?php echo $rowedit["idmapel"]?>" readonly>
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="namamapel" class="col-sm-2 col-form-label">Nama Mata Pelajaran</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="namamapel" name="inputnama"
                    value="<?php echo $rowedit["namamapel"]?>">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="keteranganmapel" class="col-sm-2 col-form-label">Keterangan Mata Pelajaran</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="keteranganmapel" name="inputketerangan"
                    value="<?php echo $rowedit["keteranganmapel"]?>">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <input type="submit" name="Ubah" class="btn btn-primary" value="Ubah">
                    <input type="submit" name="Batal" class="btn btn-secondary" value="Batal">
                </div>
            </div>
            <br>
        </form>

    </div>

    <div class="col-sm-1"></div>
    </div>

    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Daftar Mata Pelajaran SMA Kasih Kemuliaan</h1>
                    <h5>Semua Mata Pelajaran Berskala dari Kelas 10 - 12</h5>
                </div>
            </div>
        <br>
        <table class="table table-hover table-success">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Keterangan</th>
                    <th colspan="2" style="text-align: center">Action</th>
                </tr>
            </thead>

            <tbody>
                <?php $query = mysqli_query($connection, "select * from datamapel");
                $nomor = 1;
                while ($row = mysqli_fetch_array($query))
                { ?>
                    <tr>
                        <td><?php echo $nomor;?></td>
                        <td><?php echo $row['idmapel'];?></td>
                        <td><?php echo $row['namamapel'];?></td>
                        <td><?php echo $row['keteranganmapel'];?></td>
                        <td>
                            <a href="datamapelubah.php?ubadata=<?php echo $row['idmapel']?>" 
                            class="btn btn-success btn-sm" title="EDIT">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
                            </a>
                        </td>

                        <td>
                            <a href="datamapelhapus.php?hapusdata=<?php echo $row['idmapel']?>" 
                            class="btn btn-danger btn-sm" title="DELETE">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg>
                        </a>
                        </td>

                    </tr>
                    <?php $nomor = $nomor + 1;?>
                <?php } ?>
            </tbody>

        </table>
        </div>

        <div class="col-sm-1"></div>

    </div>

</body>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/
    jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/
    select2/4.0.3/js/select2.min.js"></script>
</html>