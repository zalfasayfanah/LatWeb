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

    function tambahmahasiswa($data)
    {
        global $koneksi;

        $nama = $data["nama"];
        $nim = $data["nim"];
        $jurusan = $data["jurusan"];
        $nohp = $data["nohp"];

        $query = "INSERT INTO mahasiswa VALUES ('','','$nama','$nim','$jurusan','$nohp')";
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);

    }

    function hapusdata($id)
    {
        global $koneksi;
        $query = "DELETE FROM mahasiswa WHERE id=$id";
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);        
    }

?> 