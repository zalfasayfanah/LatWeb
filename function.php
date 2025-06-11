<?php
    $koneksi = mysqli_connect("localhost:3307","root","","latweb");

    if(!$koneksi)
    {
        die("Koneksi Gagal!".mysqli_connect_error());
    }
    else
    {
        echo "Koneksi Berhasil !";
    }

    function query($query)
    {
        global $koneksi;
        $result = mysqli_query($koneksi, $query); //hasilnya berupa objek,

        $rows = [];

        while($row = mysqli_fetch_assoc($result))
        {
            $rows[] = $row;
        }

        return $rows;
    }
?> 