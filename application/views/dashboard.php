<div class="container-fluid">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('assets/img/s.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/m.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="row text-center mt-4">


            <?php foreach ($makanan as $mkn) : ?>

                <div class="card ml-3 mb-3 mr-5" style="width: 16rem;">
                    <img src="<?php echo base_url() . '/uploads/' . $mkn->gambar ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mb-1"><?php echo $mkn->nama_mkn ?></h5>
                        <small><?php echo $mkn->keterangan ?></small><br>
                        <span class="badge badge-success mb-1">Rp. <?php echo $mkn->harga ?></span>
                        <?php echo anchor('dashboard/tambah_keranjang/' . $mkn->id_mkn, '<div class="btn btn-sm btn-primary">Tambah Ke Keranjang</div>') ?>
                        <a href="#" class="btn btn-sm btn-success mt-1">Detail</a>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>

    </div>