<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Rekap Absensi </title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM peminjaman WHERE id='" . $_GET ['id'] . "'";
        
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Absensi Mahasiswa </h2>
                        <h4>Jalan Ahmat Yani No. 22, Kisaran Kota <br> Kecamatan Kisaran Barat, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA REKAP ABSENSI</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
								<tr>
                                    <td>Nim</td> <td><?= $data['nim'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Mahasiswa</td> <td><?= $data['nama_mhs'] ?></td>
                                </tr>
                                <tr>
                                    <td>Kelas</td> <td><?= $data['kelas'] ?></td>
                                </tr>
                                <tr>
                                    <td>Smester</td> <td><?= $data['smester'] ?></td>
                                </tr>
								<tr>
                                    <td>Total</td> <td><?= $data['total'] ?> hari</td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>staff <strong></u><br>
                                        NIK 1074044808990003
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
