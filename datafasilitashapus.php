<?php
    include "includes/config.php";
    if(isset($_GET['hapusdata']))//ambil data yg akan dihapus
    {
        $fasilitaskode = $_GET['hapusdata'];
        $hapusdata = mysqli_query($connection, "SELECT * FROM datafasilitas
            WHERE idfasilitas = '$fasilitaskode'");//untuk menghapus file dalam tabel
        $hapus = mysqli_fetch_array($hapusdata);
        $namafile = $hapus['fotofasilitas'];

        mysqli_query($connection, "DELETE FROM datafasilitas
            WHERE idfasilitas = '$fasilitaskode'"); //untuk menghapus record
        unlink('images/fasilitas/'.$namafile);

        echo "<script>alert('DATA TELAH DIHAPUS');
        document.location='datafasilitas.php'</script>";
    }
?>