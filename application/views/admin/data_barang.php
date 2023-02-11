<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_item"><i class="fas fa-plus fa-sm"> </i> Tambah Item</button>

    <table class="table table-bordered">
        <tr>

            <th>NO</th>
            <th>NAMA ITEM</th>
            <th>KETERANGAN</th>
            <th>KATEGORI</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th colspan="3">AKSI</th>
        </tr>
        <?php
        $no = 1;
        foreach ($makanan as $mkn) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $mkn->nama_mkn ?></td>
                <td><?= $mkn->keterangan ?></td>
                <td><?= $mkn->kategori ?></td>
                <td><?= $mkn->harga ?></td>
                <td><?= $mkn->stok ?></td>
                <td>
                    <div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>
                </td>
                <td><?php echo anchor('admin/data_barang/edit/' . $mkn->id_mkn, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
                </td>
                <td><?php echo anchor('admin/data_barang/hapus/' . $mkn->id_mkn, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>

                </td>
            </tr>

        <?php endforeach; ?>

    </table>

</div>
<!-- Modal -->
<div class="modal fade" id="tambah_item" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'admin/data_barang/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Item</label>
                        <input type="text" name="nama_mkn" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" name="keterangan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <input type="text" name="kategori" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Stok</label>
                        <input type="text" name="stok" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Gambar Produk</label><br>
                        <input type="file" name="gambar" class="form-control">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>

            </form>

        </div>
    </div>
</div>