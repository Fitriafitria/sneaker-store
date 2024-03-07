<?php include "header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-barang.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "koneksi.php";
                $tampil=$koneksi->query("select * from sepatu order by id_sepatu");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="id_sepatu">No</label>
                        <input type="hidden" name="id_sepatu" value="<?php echo $row['id_sepatu']?>" class="form-control">
                        <input type="number" name="id_sepatu"value="<?php echo $row['id_sepatu']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama_sepatu">nama_sepatu</label>
                        <input type="text" name="nama_sepatu" value="<?php echo $row['nama_sepatu']?>" class="form-control">
                        </div>

                    <div class="form-group">
                        <label for="harga">harga</label>
                        <input type="text" name="harga" value="<?php echo $row['harga']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jumlah">jumlah</label>
                        <input type="text" name="jumlah"  value="<?php echo $row['jumlah']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="total_harga">total_harga</label>
                        <input type="text" name="total_harga" value="<?php echo $row['total_harga']?>" class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php"; ?>