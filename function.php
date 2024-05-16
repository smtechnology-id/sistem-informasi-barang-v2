<?php
session_start();

//Membuat koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "sisteminformasibarang");


//Menambah barang baru peralatan
if (isset($_POST['addnewdata'])) {
    $namabarang = $_POST['namabarang'];
    $nomorregister = $_POST['nomorregister'];
    $merk = $_POST['merk'];
    $bahan = $_POST['bahan'];
    $harga = $_POST['harga'];
    $tahunperolehan = $_POST['tahunperolehan'];
    $riwayatperolehan = $_POST['riwayatperolehan'];
    $kondisi = $_POST['kondisi'];
    $aspeklegal = $_POST['aspeklegal'];
    $keterangan = $_POST['keterangan'];

    $addtotable = mysqli_query($conn, "insert into peralatan (namabarang, nomorregister, merk, bahan, harga, tahunperolehan, riwayatperolehan, kondisi, aspeklegal, keterangan) values('$namabarang','nomorregister','$merk','$bahan','$harga','$tahunperolehan','$riwayatperolehan','$kondisi','$aspeklegal','$keterangan')");
    if ($addtotable) {
        header('location:masterperalatan.php');
    } else {
        echo 'Gagal';
        header('location:masterperalatan.php');
    }
}



//Menambah barang baru kendaraan
if (isset($_POST['barangkendaraan'])) {
    $namakendaraan = $_POST['namakendaraan'];
    $nomorregister = $_POST['nomorregister'];
    $merk1 = $_POST['merk'];
    $bahan1 = $_POST['bahan'];
    $harga1 = $_POST['harga'];
    $tahunperolehan1 = $_POST['tahunperolehan'];
    $riwayatperolehan1 = $_POST['riwayatperolehan'];
    $kondisi1 = $_POST['kondisi'];
    $aspeklegal1 = $_POST['aspeklegal'];
    $keterangan1 = $_POST['keterangan'];

    $addtokendaraan = mysqli_query($conn, "insert into kendaraan (namakendaraan, nomorregister, merk1, bahan1, harga1, tahunperolehan1, riwayatperolehan1, kondisi1, aspeklegal1, keterangan1) values('$namakendaraan','$nomorregister','$merk1','$bahan1','$harga1','$tahunperolehan1','$riwayatperolehan1','$kondisi1','$aspeklegal1','$keterangan1')");
    if ($addtotable) {
        header('location:masterkendaraan.php');
    } else {
        echo 'Gagal';
        header('location:masterkendaraan.php');
    }
}

if (isset($_POST['barangelektronik'])) {
    // Ambil dan sanitasi data dari form
    $namaelektronik = mysqli_real_escape_string($conn, $_POST['namaelektronik']);
    $nomorregister = mysqli_real_escape_string($conn, $_POST['nomorregister']);
    $merk2 = mysqli_real_escape_string($conn, $_POST['merk']);
    $bahan2 = mysqli_real_escape_string($conn, $_POST['bahan']);
    $harga2 = mysqli_real_escape_string($conn, $_POST['harga']);
    $tahunperolehan2 = mysqli_real_escape_string($conn, $_POST['tahunperolehan']);
    $riwayatperolehan2 = mysqli_real_escape_string($conn, $_POST['riwayatperolehan']);
    $kondisi2 = mysqli_real_escape_string($conn, $_POST['kondisi']);
    $aspeklegal2 = mysqli_real_escape_string($conn, $_POST['aspeklegal']);
    $keterangan2 = mysqli_real_escape_string($conn, $_POST['keterangan']);

    // Query untuk menambah data ke tabel elektronik
    $addtoelektronik = mysqli_query($conn, "INSERT INTO elektronik (namaelektronik, nomorregister, merk2, bahan2, harga2, tahunperolehan2, riwayatperolehan2, kondisi2, aspeklegal2, keterangan2) VALUES ('$namaelektronik', '$nomorregister', '$merk2', '$bahan2', '$harga2', '$tahunperolehan2', '$riwayatperolehan2', '$kondisi2', '$aspeklegal2', '$keterangan2')") or die(mysqli_error($conn));

    if ($addtoelektronik) {
        header('Location: masterelektronik.php');
        exit();
    } else {
        echo 'Gagal';
        header('Location: masterelektronik.php');
        exit();
    }
}

//Menambah barang baru furniture
if (isset($_POST['barangfurniture'])) {
    $namafurniture = $_POST['namafurniture'];
    $merk3 = $_POST['merk'];
    $nomorregister = $_POST['nomorregister'];
    $bahan3 = $_POST['bahan'];
    $harga3 = $_POST['harga'];
    $tahunperolehan3 = $_POST['tahunperolehan'];
    $riwayatperolehan3 = $_POST['riwayatperolehan'];
    $kondisi3 = $_POST['kondisi'];
    $aspeklegal3 = $_POST['aspeklegal'];
    $keterangan3 = $_POST['keterangan'];

    $addtofurniture = mysqli_query($conn, "insert into furniture (namafurniture, nomorregister, nomorregister, bahan3, harga3, tahunperolehan3, riwayatperolehan3, kondisi3, aspeklegal3, keterangan3) values('$namafurniture','$nomorregister','$merk3','$bahan3','$harga3','$tahunperolehan3','$riwayatperolehan3','$kondisi3','$aspeklegal3','$keterangan3')");
    if ($addtotable) {
        header('location:masterfurniture.php');
    } else {
        echo 'Gagal';
        header('location:masterfurniture.php');
    }
}

//Menambah data inven barang
if (isset($_POST['invenbarang'])) {
    $kodebarang = $_POST['kodebarang'];
    $namainvenbarang = $_POST['namainvenbarang'];
    $nomorregister = $_POST['nomorregister'];
    $kondisibarang = $_POST['kondisibarang'];
    $merkbarang = $_POST['merkbarang'];
    $ukuranbarang = $_POST['ukuranbarang'];
    $bahanbarang = $_POST['bahanbarang'];
    $tahunperolehanbarang = $_POST['tahunperolehanbarang'];
    $asalusulbarang = $_POST['asalusulbarang'];
    $hargabarang = $_POST['hargabarang'];
    $keteranganbarang = $_POST['keteranganbarang'];

    $addtofurniture = mysqli_query($conn, "insert into barang (kodebarang, namainvenbarang, nomorregister, kondisibarang, merkbarang, ukuranbarang, bahanbarang, tahunperolehanbarang, asalusulbarang, hargabarang, keteranganbarang) values('$kodebarang','$namainvenbarang','$nomorregister','$kondisibarang','$merkbarang','$ukuranbarang','$bahanbarang','$tahunperolehanbarang','$asalusulbarang','$hargabarang','$keteranganbarang')");
    if ($addtotable) {
        header('location:barang.php');
    } else {
        echo 'Gagal';
        header('location:barang.php');
    }
}

if (isset($_POST['updateDataPeralatan'])) {
    // Ambil data dari form
    $idbarang = mysqli_real_escape_string($conn, $_POST['idbarang']);
    $namabarang = mysqli_real_escape_string($conn, $_POST['namabarang']);
    $nomorregister = mysqli_real_escape_string($conn, $_POST['nomo$nomorregister']);
    $merk = mysqli_real_escape_string($conn, $_POST['merk']);
    $bahan = mysqli_real_escape_string($conn, $_POST['bahan']);
    $harga = mysqli_real_escape_string($conn, $_POST['harga']);
    $tahunperolehan = mysqli_real_escape_string($conn, $_POST['tahunperolehan']);
    $riwayatperolehan = mysqli_real_escape_string($conn, $_POST['riwayatperolehan']);
    $kondisi = mysqli_real_escape_string($conn, $_POST['kondisi']);
    $aspeklegal = mysqli_real_escape_string($conn, $_POST['aspeklegal']);
    $keterangan = mysqli_real_escape_string($conn, $_POST['keterangan']);

    // Query untuk memperbarui data
    $sql = "UPDATE peralatan SET 
                namabarang = '$namabarang', 
                nomorregister = '$nomorregister', 
                merk = '$merk', 
                bahan = '$bahan', 
                harga = '$harga', 
                tahunperolehan = '$tahunperolehan', 
                riwayatperolehan = '$riwayatperolehan', 
                kondisi = '$kondisi', 
                aspeklegal = '$aspeklegal', 
                keterangan = '$keterangan' 
            WHERE idbarang = '$idbarang'";

    // Eksekusi query
    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil diperbarui!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
if (isset($_POST['deletePeralatan'])) {
    // Ambil idbarang dari form
    $idbarang = mysqli_real_escape_string($conn, $_POST['idbarang']);

    // Query untuk menghapus data
    $sql = "DELETE FROM peralatan WHERE idbarang = '$idbarang'";

    // Eksekusi query
    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil dihapus!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
if (isset($_POST['updateKendaraan'])) {
    // Ambil data dari form
    var_dump($_POST);
    $idbarang = mysqli_real_escape_string($conn, $_POST['idbarang']);
    $namakendaraan = mysqli_real_escape_string($conn, $_POST['namakendaraan']);
    $nomorregister = mysqli_real_escape_string($conn, $_POST['nomorregister']);
    $merk1 = mysqli_real_escape_string($conn, $_POST['merk1']);
    $bahan1 = mysqli_real_escape_string($conn, $_POST['bahan1']);
    $harga1 = mysqli_real_escape_string($conn, $_POST['harga1']);
    $tahunperolehan1 = mysqli_real_escape_string($conn, $_POST['tahunperolehan1']);
    $riwayatperolehan1 = mysqli_real_escape_string($conn, $_POST['riwayatperolehan1']);
    $kondisi1 = mysqli_real_escape_string($conn, $_POST['kondisi1']);
    $aspeklegal1 = mysqli_real_escape_string($conn, $_POST['aspeklegal1']);
    $keterangan1 = mysqli_real_escape_string($conn, $_POST['keterangan1']);

    // Query untuk memperbarui data
    $sql = "UPDATE kendaraan SET 
                namakendaraan = '$namakendaraan', 
                nomorregister = '$nomorregister', 
                merk1 = '$merk1', 
                bahan1 = '$bahan1', 
                harga1 = '$harga1', 
                tahunperolehan1 = '$tahunperolehan1', 
                riwayatperolehan1 = '$riwayatperolehan1', 
                kondisi1 = '$kondisi1', 
                aspeklegal1 = '$aspeklegal1', 
                keterangan1 = '$keterangan1' 
            WHERE idbarang = '$idbarang'";

    // Eksekusi query
    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil diperbarui!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if (isset($_POST['deleteKendaraan'])) {
    // Ambil idbarang dari form
    $idbarang = mysqli_real_escape_string($conn, $_POST['idbarang']);

    // Query untuk menghapus data
    $sql = "DELETE FROM kendaraan WHERE idbarang = '$idbarang'";

    // Eksekusi query
    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil dihapus!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
if (isset($_POST['updateElektronik'])) {
    // Tampilkan semua data POST untuk debugging
    var_dump($_POST); // Uncomment untuk melihat semua data POST

    // Ambil data dari form
    $idbarang = mysqli_real_escape_string($conn, $_POST['idbarang']);
    $namaelektronik = mysqli_real_escape_string($conn, $_POST['namaelektronik']);
    $nomorregister = mysqli_real_escape_string($conn, $_POST['nomor$nomorregister']);
    $merk2 = mysqli_real_escape_string($conn, $_POST['merk']);
    $bahan2 = mysqli_real_escape_string($conn, $_POST['bahan']);
    $harga2 = mysqli_real_escape_string($conn, $_POST['harga']);
    $tahunperolehan2 = mysqli_real_escape_string($conn, $_POST['tahunperolehan']);
    $riwayatperolehan2 = mysqli_real_escape_string($conn, $_POST['riwayatperolehan']);
    $kondisi2 = mysqli_real_escape_string($conn, $_POST['kondisi']);
    $aspeklegal2 = mysqli_real_escape_string($conn, $_POST['aspeklegal']);
    $keterangan2 = mysqli_real_escape_string($conn, $_POST['keterangan']);

    // Query untuk memperbarui data
    $sql = "UPDATE elektronik SET 
                namaelektronik = '$namaelektronik', 
                merk2 = '$merk2', 
                nomorregister = '$nomorregister', 
                bahan2 = '$bahan2', 
                harga2 = '$harga2', 
                tahunperolehan2 = '$tahunperolehan2', 
                riwayatperolehan2 = '$riwayatperolehan2', 
                kondisi2 = '$kondisi2', 
                aspeklegal2 = '$aspeklegal2', 
                keterangan2 = '$keterangan2' 
            WHERE idbarang = '$idbarang'";

    // Eksekusi query
    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil diperbarui!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
if (isset($_POST['deleteElektronik'])) {
    // Ambil idbarang dari form
    $idbarang = mysqli_real_escape_string($conn, $_POST['idbarang']);

    // Query untuk menghapus data
    $sql = "DELETE FROM elektronik WHERE idbarang = '$idbarang'";

    // Eksekusi query
    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil dihapus!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
if (isset($_POST['updateFurniture'])) {
    // Tampilkan semua data POST untuk debugging
    var_dump($_POST); // Uncomment untuk melihat semua data POST

    // Ambil data dari form
    $idbarang = mysqli_real_escape_string($conn, $_POST['idbarang']);
    $nomorregister = mysqli_real_escape_string($conn, $_POST['nomorregister']);
    $namafurniture = mysqli_real_escape_string($conn, $_POST['namafurniture']);
    $merk3 = mysqli_real_escape_string($conn, $_POST['merk']);
    $bahan3 = mysqli_real_escape_string($conn, $_POST['bahan']);
    $harga3 = mysqli_real_escape_string($conn, $_POST['harga']);
    $tahunperolehan3 = mysqli_real_escape_string($conn, $_POST['tahunperolehan']);
    $riwayatperolehan3 = mysqli_real_escape_string($conn, $_POST['riwayatperolehan']);
    $kondisi3 = mysqli_real_escape_string($conn, $_POST['kondisi']);
    $aspeklegal3 = mysqli_real_escape_string($conn, $_POST['aspeklegal']);
    $keterangan3 = mysqli_real_escape_string($conn, $_POST['keterangan']);

    // Query untuk memperbarui data
    $sql = "UPDATE furniture SET 
                namafurniture = '$namafurniture', 
                nomorregister = '$nomorregister', 
                merk3 = '$merk3', 
                bahan3 = '$bahan3', 
                harga3 = '$harga3', 
                tahunperolehan3 = '$tahunperolehan3', 
                riwayatperolehan3 = '$riwayatperolehan3', 
                kondisi3 = '$kondisi3', 
                aspeklegal3 = '$aspeklegal3', 
                keterangan3 = '$keterangan3' 
            WHERE idbarang = '$idbarang'";

    // Eksekusi query
    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil diperbarui!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
if (isset($_POST['deleteFurniture'])) {
    // Ambil idbarang dari form
    $idbarang = mysqli_real_escape_string($conn, $_POST['idbarang']);

    // Query untuk menghapus data
    $sql = "DELETE FROM furniture WHERE idbarang = '$idbarang'";

    // Eksekusi query
    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil dihapus!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
if (isset($_POST['addUser'])) {
    // Ambil data dari form
    $nama_lengkap = mysqli_real_escape_string($conn, $_POST['nama_lengkap']);
    $jabatan = mysqli_real_escape_string($conn, $_POST['jabatan']);
    $unit_kerja = mysqli_real_escape_string($conn, $_POST['unit_kerja']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Query untuk menyimpan data
    $sql = "INSERT INTO users (nama_lengkap,jabatan,unit_kerja,email, password) VALUES ('$nama_lengkap','$jabatan','$unit_kerja', '$email', '$password')";

    // Eksekusi query
    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
if (isset($_POST['updateUser'])) {
    // Ambil data dari form
    $id_user = mysqli_real_escape_string($conn, $_POST['id_user']);
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Bangun query update secara dinamis
    $update_fields = [];
    $update_fields[] = "nama = '$nama'";
    $update_fields[] = "email = '$email'";

    if (!empty($password)) {
        // Hash password sebelum menyimpan ke database
        $hashed_password = $password;
        $update_fields[] = "password = '$hashed_password'";
    }

    // Gabungkan semua field yang akan diupdate
    $update_query = implode(", ", $update_fields);

    // Query untuk memperbarui data
    $sql = "UPDATE login SET $update_query WHERE id_user = '$id_user'";

    // Eksekusi query
    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil diperbarui!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
if (isset($_POST['deleteUser'])) {
    // Ambil idbarang dari form
    $id_user = mysqli_real_escape_string($conn, $_POST['id_user']);

    // Query untuk menghapus data
    $sql = "DELETE FROM login WHERE id_user = '$id_user'";

    // Eksekusi query
    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil dihapus!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
if (isset($_POST['dataruangan'])) {
    // Ambil dan sanitasi data dari form
    $namaruangan = mysqli_real_escape_string($conn, $_POST['namaruangan']);
    $koderuangan = mysqli_real_escape_string($conn, $_POST['koderuangan']);
    $namabarangruangan = mysqli_real_escape_string($conn, $_POST['namabarangruangan']);
    $jenisbarang = mysqli_real_escape_string($conn, $_POST['jenisbarang']);
    $spesifikasi = mysqli_real_escape_string($conn, $_POST['spesifikasi']);
    $aspeklegalruangan = mysqli_real_escape_string($conn, $_POST['aspeklegalruangan']);
    $ukuranruangan = mysqli_real_escape_string($conn, $_POST['ukuranruangan']);
    $bahanruangan = mysqli_real_escape_string($conn, $_POST['bahanruangan']);
    $tahunperolehanruangan = mysqli_real_escape_string($conn, $_POST['tahunperolehanruangan']);
    $jumlahruangan = mysqli_real_escape_string($conn, $_POST['jumlahruangan']);
    $hargaperolehanruangan = mysqli_real_escape_string($conn, $_POST['hargaperolehanruangan']);
    $kondisiruangan = mysqli_real_escape_string($conn, $_POST['kondisiruangan']);
    $penggunabarang = mysqli_real_escape_string($conn, $_POST['penggunabarang']);
    $unitkerja = mysqli_real_escape_string($conn, $_POST['unitkerja']);

    // Query untuk memasukkan data ke dalam tabel
    $query = "INSERT INTO ruangan (namaruangan, koderuangan, namabarangruangan, jenisbarang, spesifikasi, aspeklegalruangan, ukuranruangan, bahanruangan, tahunperolehanruangan, jumlahruangan, hargaperolehanruangan, kondisiruangan, penggunabarang, unitkerja) VALUES ('$namaruangan', '$koderuangan', '$namabarangruangan', '$jenisbarang', '$spesifikasi', '$aspeklegalruangan', '$ukuranruangan', '$bahanruangan', '$tahunperolehanruangan', '$jumlahruangan', '$hargaperolehanruangan', '$kondisiruangan', '$penggunabarang', '$unitkerja')";

    // Eksekusi query
    if (mysqli_query($conn, $query)) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($conn);
    }
}

