<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Mahasiswa</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">


						 <div class="form-group">
                            <label for="no_buku" class="col-sm-3 control-label">Nim</label>
                            <div class="col-sm-9">
                                <input type="text" name="nim" class="form-control" id="inputEmail3" placeholder="Ketikkan Nim" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nama_mhs" class="col-sm-3 control-label">Nama Mahasiswa</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_mhs" class="form-control" id="inputEmail3" placeholder="Ketikkan Nama Mahasiswa" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="judul_buku" class="col-sm-3 control-label">Kelas</label>
                            <div class="col-sm-9">
                                <input type="text" name="kelas" class="form-control" id="inputEmail3" placeholder="Ketikkan Kelas" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="penulis_buku" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Ketikkan Alamat" required>
                            </div>
                        </div

                         <div class="form-group">
                            <label for="penulis_buku" class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" name="ttl" class="form-control" id="inputEmail3" placeholder="Ketikkan Tempat Tanggal Lahir" required>
                            </div>
                        </div>

                        <!--Status-->

                        

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=buku&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Mahasiswa
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  
	$nim=$_POST['nim'];
	$nama_mhs=$_POST['nama_mhs'];
  $kelas=$_POST['kelas'];
  $alamat=$_POST['alamat'];
  $ttl=$_POST['ttl'];
    //buat sql
    $sql="INSERT INTO tbl_nama VALUES ('','$naim','$nama_mhs','$kelas','$alamat','$ttl')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=buku&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
