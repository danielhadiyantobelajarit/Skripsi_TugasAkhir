<?php
    include "includes/config.php";
    if(isset($_GET['hapusdata']))//ambil data yg akan dihapus
    {
        $mapelkode = $_GET['hapusdata'];
        $hapusdata = mysqli_query($connection, "SELECT * FROM datamapel
            WHERE idmapel = '$mapelkode'");//untuk menghapus file dalam tabel
        $hapus = mysqli_fetch_array($hapusdata);

        mysqli_query($connection, "DELETE FROM datamapel
            WHERE idmapel = '$mapelkode'"); //untuk menghapus record

        echo "<script>alert('DATA TELAH DIHAPUS');
        document.location='datamapel.php'</script>";
    }
?>