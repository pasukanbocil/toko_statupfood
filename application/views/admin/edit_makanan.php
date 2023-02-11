<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>Edit Data Barang</h3>
    <?php
    foreach ($makanan as $mkn) : ?>
        <form method="post" action="<?php echo base_url() . 'admin/data_barang/update'  ?>">
            <div class="form-group">
                <label>Nama Item</label>
                <input type="text" name="nama_mkn" class="form-control" value="<?php echo $mkn->nama_mkn ?>">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="hidden" name="id_mkn" class="form-control" value="<?php echo $mkn->id_mkn ?>">
                <input type="text" name="keterangan" class="form-control" value="<?php echo $mkn->keterangan ?>">
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control" value="<?php echo $mkn->kategori ?>">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $mkn->harga ?>">
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" value="<?php echo $mkn->stok ?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>

        </form>
    <?php endforeach;  ?>
</div>