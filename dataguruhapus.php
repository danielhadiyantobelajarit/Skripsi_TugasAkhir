<?php
    include "includes/config.php";
    if(isset($_GET['hapusdata']))//ambil data yg akan dihapus
    {
        $gurukode = $_GET['hapusdata'];
        $hapusdata = mysqli_query($connection, "SELECT * FROM dataguru
            WHERE idguru = '$gurukode'");//untuk menghapus file dalam tabel
        $hapus = mysqli_fetch_array($hapusdata);
        $namafile = $hapus['fotoguru'];

        mysqli_query($connection, "DELETE FROM dataguru
            WHERE idguru = '$gurukode'"); //untuk menghapus record
        unlink('images/guru/'.$namafile);

        echo "<script>alert('DATA TELAH DIHAPUS');
        document.location='dataguru.php'</script>";
    }
?>