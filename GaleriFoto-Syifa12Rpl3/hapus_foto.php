<?php
    include "koneksi.php";
    session_start();

    $fotoid=$_GET['fotoid'];
    if(isset($_GET['confirm']) && $_GET['confirm'] == 'yes') {
    $sql=mysqli_query($conn,"delete from foto where fotoid='$fotoid'");
    header("location:foto.php");

    } else {
    // Jika belum dikonfirmasi, tampilkan peringatan
    echo '<script>
            var confirmDelete = confirm("Yakin akan menghapus ini?");
            if(confirmDelete){
                window.location.href = "hapus_foto.php?fotoid=' . $fotoid . '&confirm=yes";
            } else {
                window.location.href = "foto.php";
            }
          </script>';
        }
?>