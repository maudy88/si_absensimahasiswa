<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Daftar Mata Kuliah</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_mtkuliah WHERE id='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">NIDN</td> <td><?= $data['nidn'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Dosen</td> <td><?= $data['nama_dosen'] ?></td>
                        </tr>
                        <tr>
                            <td>Jama Masuk</td> <td><?= $data['jm_masuk'] ?></td>
                        </tr>
						<tr>
                            <td>Jam Keluar</td> <td><?= $data['jm_keluar'] ?></td>
                        </tr>
                        <tr>
                            <td>Mata Kuliah</td> <td><?= $data['mt_kuliah'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=peminjaman&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Peminjaman </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

