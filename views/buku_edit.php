<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_nama WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Daftar Mahasiswa</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                       
                        <div class="form-group">
                            <label for="noRak" class="col-sm-3 control-label">Nim</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_buku" value="<?=$data['nim']?>"class="form-control" id="inputEmail3" placeholder="Nomor Rak/Lemari">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="noLaci" class="col-sm-3 control-label">Nama Mahasiswa</label>
                            <div class="col-sm-9">
                                <input type="text" name="judul_buku" value="<?=$data['nama_mhs']?>"class="form-control" id="inputEmail3" placeholder="Nomor Tingkat/Laci">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="noBoks" class="col-sm-3 control-label">Kelas</label>
                            <div class="col-sm-9">
                                <input type="text" name="penulis_buku" value="<?=$data['kelas']?>"class="form-control" id="inputEmail3" placeholder="Nomor Boks">
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label for="noBoks" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="penulis_buku" value="<?=$data['alamat']?>"class="form-control" id="inputEmail3" placeholder="Nomor Boks">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="noBoks" class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="penulis_buku" value="<?=$data['ttl']?>"class="form-control" id="inputEmail3" placeholder="Nomor Boks">
                            </div>
                        </div>
							
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">


                            <label class="col-sm-3 control-label">Tanggal Masuk</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2021;$i>1980;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>

                        </div>
                        <!--end tanggal lahir-->           

                       
                        <!--Status-->
                        
                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="status" class="form-control">
									<option value="Ada">Hadir</option>
									<option value="Dipinjam">Tidak Hadir</option>
                                    <option value="Ada">Ijin</option>
                                    <option value="Dipinjam">Sakit</option>
                                    <option value="Ada">Tanpa Keterangan</option>
								</select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Total</label>
                            <div class="col-sm-2 col-xs-9">
                                 <select name="jumlah" class="form-control">
                                    <?php for($i=100;$i>1;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>
                            </div>
                        </div>
                        <!--Akhir Status-->
                        
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Absensi</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Arsip
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
$no=$_POST['nim'];
$judul=$_POST['nama_mhs'];
$penulis=$_POST['kelas'];
$tgl_terbit=$_POST['tahun']."_".$_POST['bulan']."_".$_POST['tanggal'];
$status=$_POST['alamat'];
$peminjam=$_POST['ttl'];
$pemberi=$_POST['pemberi'];
$ket=$_POST['keterangan'];
    
    //buat sql
    $sql="UPDATE tbl_nama SET id = '',='$penulis',nim='$judul',nama_mhs='$no',tgl_terbit='$tgl_terbit',peminjam='$peminjam',pemberi='$pemberi',status='$status',keterangan='$ket' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=buku&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



