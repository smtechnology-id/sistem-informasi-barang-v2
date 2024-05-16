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
    <title>INVENTARIS RUANGAN</title>
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
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        </a>
                        <div class="sb-sidenav-menu-heading">DATA MASTER</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            DATA BARANG
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="masterperalatan.php">Peralatan</a>
                                <a class="nav-link" href="masterkendaraan.php">Kendaraan</a>
                                <a class="nav-link" href="masterelektronik.php">Elektronik</a>
                                <a class="nav-link" href="masterfurniture.php">Furniture</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            DATA INVENTARISASI
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link" href="kodefikasi.php">Data Kodefikasi</a>
                                <a class="nav-link" href="barang.php">Data Inventaris Barang</a>
                                <a class="nav-link" href="ruangan.php">Data Inventaris Ruangan</a>
                            </nav>
                        </div>
                        <a class="nav-link" href="laporan.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            LAPORAN
                        </a>
                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            DATA PENGGUNA
                        </a>
                        <a class="nav-link" href="logout.php">
                            LOGOUT
                        </a>
                    </div>
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
                    <h1 class="mt-4">INVENTARIS RUANGAN</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">SISTEM INFORMASI INVENTARISASI BMD</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Tambah Data
                            </button>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Ruangan</th>
                                            <th>Kode Ruangan</th>
                                            <th>Nama Barang</th>
                                            <th>Jenis Barang</th>
                                            <th>Spesifikasi</th>
                                            <th>Aspek Legal Aset</th>
                                            <th>Ukuran</th>
                                            <th>Bahan</th>
                                            <th>Tahun Perolehan</th>
                                            <th>Jumlah</th>
                                            <th>Harga Perolehan</th>
                                            <th>Kondisi</th>
                                            <th>Pengguna Barang</th>
                                            <th>Unit Kerja</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $ambilsemuadataruangan = mysqli_query($conn, "select * from ruangan");
                                        $i = 1;
                                        while ($data = mysqli_fetch_array($ambilsemuadataruangan)) {
                                            $namaruangan = $data['namaruangan'];
                                            $koderuangan = $data['koderuangan'];
                                            $namabarangruangan = $data['namabarangruangan'];
                                            $jenisbarang = $data['jenisbarang'];
                                            $spesifikasi = $data['spesifikasi'];
                                            $aspeklegalruangan = $data['aspeklegalruangan'];
                                            $ukuranruangan = $data['ukuranruangan'];
                                            $bahanruangan = $data['bahanruangan'];
                                            $tahunperolehanruangan = $data['tahunperolehanruangan'];
                                            $jumlahruangan = $data['jumlahruangan'];
                                            $hargaperolehanruangan = $data['hargaperolehanruangan'];
                                            $kondisiruangan = $data['kondisiruangan'];
                                            $penggunabarang = $data['penggunabarang'];
                                            $unitkerja = $data['unitkerja'];
                                            $idb = $data['idbarang'];


                                        ?>

                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $namaruangan; ?></td>
                                                <td><?= $koderuangan; ?></td>
                                                <td><?= $namabarangruangan; ?></td>
                                                <td><?= $jenisbarang; ?></td>
                                                <td><?= $spesifikasi; ?></td>
                                                <td><?= $aspeklegalruangan; ?></td>
                                                <td><?= $ukuranruangan; ?></td>
                                                <td><?= $bahanruangan; ?></td>
                                                <td><?= $tahunperolehanruangan; ?></td>
                                                <td><?= $jumlahruangan; ?></td>
                                                <td><?= $hargaperolehanruangan; ?></td>
                                                <td><?= $kondisiruangan; ?></td>
                                                <td><?= $penggunabarang; ?></td>
                                                <td><?= $unitkerja; ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $idb; ?>">
                                                        Delete
                                                    </button>
                                                    <div class="modal fade" id="delete<?= $idb; ?>">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content p-5">
                                                                <!-- Modal body -->
                                                                <p>Anda Yakin Ingin Menghapus Data Ini ? </p>
                                                                <form method="post">
                                                                    <input type="hidden" name="idbarang" value="<?= $idb; ?>">
                                                                    <button type="submit" class="btn btn-danger" name="deleteRuangan">Delete</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>


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
                    <input type="text" name="namaruangan" placeholder="Nama Ruangan" class="form-control" required>
                    <br>
                    <input type="text" name="koderuangan" placeholder="Kode Ruangan" class="form-control" required>
                    <br>
                    <input type="text" name="namabarangruangan" placeholder="Nama Barang" class="form-control" required>
                    <br>
                    <input type="text" name="jenisbarang" placeholder="Nama Barang" class="form-control" required>
                    <br>
                    <input type="text" name="spesifikasi" placeholder="Spesifikasi" class="form-control" required>
                    <br>
                    <input type="text" name="aspeklegalruangan" placeholder="Aspek Legal Aset" class="form-control" required>
                    <br>
                    <input type="text" name="ukuranruangan" placeholder="Ukuran" class="form-control" required>
                    <br>
                    <input type="text" name="bahanruangan" placeholder="Bahan" class="form-control" required>
                    <br>
                    <input type="text" name="tahunperolehanruangan" placeholder="Tahun Perolehan" class="form-control" required>
                    <br>
                    <input type="text" name="jumlahruangan" placeholder="Jumlah" class="form-control" required>
                    <br>
                    <input type="text" name="hargaperolehanruangan" placeholder="Harga Perolehan" class="form-control" required>
                    <br>
                    <input type="text" name="kondisiruangan" placeholder="Kondisi" class="form-control" required>
                    <br>
                    <input type="text" name="penggunabarang" placeholder="Pengguna Barang" class="form-control" required>
                    <br>
                    <input type="text" name="unitkerja" placeholder="Unit Kerja" class="form-control" required>
                    <br>
                    <button type="submit" class="btn btn-primary" name="dataruangan">Submit</button>
                </div>
            </form>

        </div>
    </div>
</div>

</html>