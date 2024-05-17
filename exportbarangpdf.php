<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Data Barang</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
</head>


<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="container mb-5 mt-3">

                    <div class="container">
                        <div class="col-md-12">
                            <div class="text-center">
                                <h2 class="pt-0">KARTU INVENTARIS BARANG (KIB) B</h2>
                                <p>SISTEM INFORMASI INVENTARISASI BMD
                                </p>
                            </div>

                        </div>
                        <a href="javascript:window.print()" class="btn btn-outline-info"><i class="bi bi-printer"></i><i class="ri-printer-line"></i> Print</a>

                        <div class="row my-2 mx-1 justify-content-center">
                            <table class="table table-striped table-borderless">
                                <thead style="background-color:#84B0CA ;" class="text-white">
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Nomor Register</th>
                                        <th>Kondisi</th>
                                        <th>Merk</th>
                                        <th>Ukuran</th>
                                        <th>Bahan</th>
                                        <th>Tahun Perolehan</th>
                                        <th>Asal Usul</th>
                                        <th>Harga</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    require 'function.php';
                                    if (isset($_POST['export'])) {
                                        // Ambil dan sanitasi data dari formulir
                                        $kodebarang = isset($_POST['kodebarang']) ? mysqli_real_escape_string($conn, $_POST['kodebarang']) : '';
                                        $namainvenbarang = isset($_POST['namainvenbarang']) ? mysqli_real_escape_string($conn, $_POST['namainvenbarang']) : '';
                                        $nomorregister = isset($_POST['nomorregister']) ? mysqli_real_escape_string($conn, $_POST['nomorregister']) : '';
                                        $kondisibarang = isset($_POST['kondisibarang']) ? mysqli_real_escape_string($conn, $_POST['kondisibarang']) : '';
                                        $merkbarang = isset($_POST['merkbarang']) ? mysqli_real_escape_string($conn, $_POST['merkbarang']) : '';
                                        $ukuranbarang = isset($_POST['ukuranbarang']) ? mysqli_real_escape_string($conn, $_POST['ukuranbarang']) : '';
                                        $bahanbarang = isset($_POST['bahanbarang']) ? mysqli_real_escape_string($conn, $_POST['bahanbarang']) : '';
                                        $tahunperolehanbarang = isset($_POST['tahunperolehanbarang']) ? mysqli_real_escape_string($conn, $_POST['tahunperolehanbarang']) : '';
                                        $asalusulbarang = isset($_POST['asalusulbarang']) ? mysqli_real_escape_string($conn, $_POST['asalusulbarang']) : '';
                                        $hargabarang = isset($_POST['hargabarang']) ? mysqli_real_escape_string($conn, $_POST['hargabarang']) : '';
                                        $keteranganbarang = isset($_POST['keteranganbarang']) ? mysqli_real_escape_string($conn, $_POST['keteranganbarang']) : '';

                                        // Buat query filter
                                        $query = "SELECT * FROM barang WHERE 1=1";

                                        if (!empty($kodebarang)) {
                                            $query .= " AND kodebarang = '$kodebarang'";
                                        }
                                        if (!empty($namainvenbarang)) {
                                            $query .= " AND namainvenbarang = '$namainvenbarang'";
                                        }
                                        if (!empty($nomorregister)) {
                                            $query .= " AND nomorregister = '$nomorregister'";
                                        }
                                        if (!empty($kondisibarang)) {
                                            $query .= " AND kondisibarang = '$kondisibarang'";
                                        }
                                        if (!empty($merkbarang)) {
                                            $query .= " AND merkbarang = '$merkbarang'";
                                        }
                                        if (!empty($ukuranbarang)) {
                                            $query .= " AND ukuranbarang = '$ukuranbarang'";
                                        }
                                        if (!empty($bahanbarang)) {
                                            $query .= " AND bahanbarang = '$bahanbarang'";
                                        }
                                        if (!empty($tahunperolehanbarang)) {
                                            $query .= " AND tahunperolehanbarang = '$tahunperolehanbarang'";
                                        }
                                        if (!empty($asalusulbarang)) {
                                            $query .= " AND asalusulbarang = '$asalusulbarang'";
                                        }
                                        if (!empty($hargabarang)) {
                                            $query .= " AND hargabarang = '$hargabarang'";
                                        }
                                        if (!empty($keteranganbarang)) {
                                            $query .= " AND keteranganbarang = '$keteranganbarang'";
                                        }
                                    } else {
                                        $query = "SELECT * FROM barang";
                                    }

                                    // Menjalankan query
                                    $ambilsemuadatabarang = mysqli_query($conn, $query);

                                    // Periksa apakah query berhasil dijalankan
                                    if (!$ambilsemuadatabarang) {
                                        die("Query gagal: " . mysqli_error($conn));
                                    }

                                    // Iterasi melalui hasil query dan tampilkan datanya
                                    $i = 1;
                                    while ($data = mysqli_fetch_array($ambilsemuadatabarang)) {
                                        $kodebarang = $data['kodebarang'];
                                        $namainvenbarang = $data['namainvenbarang'];
                                        $nomorregister = $data['nomorregister'];
                                        $kondisibarang = $data['kondisibarang'];
                                        $merkbarang = $data['merkbarang'];
                                        $ukuranbarang = $data['ukuranbarang'];
                                        $bahanbarang = $data['bahanbarang'];
                                        $tahunperolehanbarang = $data['tahunperolehanbarang'];
                                        $asalusulbarang = $data['asalusulbarang'];
                                        $hargabarang = $data['hargabarang'];
                                        $keteranganbarang = $data['keteranganbarang'];


                                    ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $kodebarang; ?></td>
                                            <td><?= $namainvenbarang; ?></td>
                                            <td><?= $nomorregister; ?></td>
                                            <td><?= $kondisibarang; ?></td>
                                            <td><?= $merkbarang; ?></td>
                                            <td><?= $ukuranbarang; ?></td>
                                            <td><?= $bahanbarang; ?></td>
                                            <td><?= $tahunperolehanbarang; ?></td>
                                            <td><?= $asalusulbarang; ?></td>
                                            <td><?= $hargabarang; ?></td>
                                            <td><?= $keteranganbarang; ?></td>
                                        </tr>
                                    <?php
                                    };

                                    ?>

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>