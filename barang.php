<?php
require 'function.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>INVENTARIS BARANG</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">Start Bootstrap</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <?php include 'navbar.php'; ?>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">INVENTARIS BARANG</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">SISTEM INFORMASI INVENTARISASI BMD</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Tambah Data
                            </button>
                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#filter">
                                Filter
                            </button>
                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#export">
                                Export
                            </button>
                            <a href="javascript:window.print()" class="btn btn-outline-info"><i class="ri-printer-line"></i> Print</a>


                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
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
                                        if (isset($_POST['filterbarang'])) {
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
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2020</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>
<!-- The Modal -->
<div class="modal fade" id="export">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Filter Data</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form method="post" action="exportbarang.php">
                <div class="modal-body">
                    <input type="text" name="kodebarang" placeholder="Kode Barang" class="form-control">
                    <br>
                    <input type="text" name="namainvenbarang" placeholder="Nama Barang" class="form-control">
                    <br>
                    <input type="text" name="nomorregister" placeholder="Nomor Register" class="form-control">
                    <br>
                    <input type="text" name="kondisibarang" placeholder="Kondisi" class="form-control">
                    <br>
                    <input type="text" name="merkbarang" placeholder="Merk" class="form-control">
                    <br>
                    <input type="text" name="ukuranbarang" placeholder="Ukuran" class="form-control">
                    <br>
                    <input type="text" name="bahanbarang" placeholder="Bahan" class="form-control">
                    <br>
                    <input type="text" name="tahunperolehanbarang" placeholder="Tahun Perolehan" class="form-control">
                    <br>
                    <input type="text" name="asalusulbarang" placeholder="Asal Usul" class="form-control">
                    <br>
                    <input type="text" name="hargabarang" placeholder="Harga" class="form-control">
                    <br>
                    <input type="text" name="keteranganbarang" placeholder="Keterangan" class="form-control">
                    <br>
                    <button type="submit" class="btn btn-primary" name="filterbarang">PDF</button>
                    <button type="submit" class="btn btn-primary" name="filterbarang">EXCEL</button>
                </div>
            </form>

        </div>
    </div>
</div>
<div class="modal fade" id="filter">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Export Data</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form method="post" action="">
                <div class="modal-body">
                    <input type="text" name="kodebarang" placeholder="Kode Barang" class="form-control">
                    <br>
                    <input type="text" name="namainvenbarang" placeholder="Nama Barang" class="form-control">
                    <br>
                    <input type="text" name="nomorregister" placeholder="Nomor Register" class="form-control">
                    <br>
                    <input type="text" name="kondisibarang" placeholder="Kondisi" class="form-control">
                    <br>
                    <input type="text" name="merkbarang" placeholder="Merk" class="form-control">
                    <br>
                    <input type="text" name="ukuranbarang" placeholder="Ukuran" class="form-control">
                    <br>
                    <input type="text" name="bahanbarang" placeholder="Bahan" class="form-control">
                    <br>
                    <input type="text" name="tahunperolehanbarang" placeholder="Tahun Perolehan" class="form-control">
                    <br>
                    <input type="text" name="asalusulbarang" placeholder="Asal Usul" class="form-control">
                    <br>
                    <input type="text" name="hargabarang" placeholder="Harga" class="form-control">
                    <br>
                    <input type="text" name="keteranganbarang" placeholder="Keterangan" class="form-control">
                    <br>
                    <button type="submit" class="btn btn-light" name="filterbarang">PDF</button>
                    <button type="submit" class="btn btn-light" name="filterbarang">Word</button>
                    <button type="submit" class="btn btn-light" name="filterbarang">EXCEL</button>
                </div>
            </form>

        </div>
    </div>
</div>
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form method="post">
                <div class="modal-body">
                    <input type="text" name="kodebarang" placeholder="Kode Barang" class="form-control" required>
                    <br>
                    <input type="text" name="namainvenbarang" placeholder="Nama Barang" class="form-control" required>
                    <br>
                    <input type="text" name="nomorregister" placeholder="Nomor Register" class="form-control" required>
                    <br>
                    <input type="text" name="kondisibarang" placeholder="Kondisi" class="form-control" required>
                    <br>
                    <input type="text" name="merkbarang" placeholder="Merk" class="form-control" required>
                    <br>
                    <input type="text" name="ukuranbarang" placeholder="Ukuran" class="form-control" required>
                    <br>
                    <input type="text" name="bahanbarang" placeholder="Bahan" class="form-control" required>
                    <br>
                    <input type="text" name="tahunperolehanbarang" placeholder="Tahun Perolehan" class="form-control" required>
                    <br>
                    <input type="text" name="asalusulbarang" placeholder="Asal Usul" class="form-control" required>
                    <br>
                    <input type="text" name="hargabarang" placeholder="Harga" class="form-control" required>
                    <br>
                    <input type="text" name="keteranganbarang" placeholder="Keterangan" class="form-control" required>
                    <br>
                    <button type="submit" class="btn btn-primary" name="invenbarang">Submit</button>
                </div>
                <form>

        </div>
    </div>
</div>

</html>