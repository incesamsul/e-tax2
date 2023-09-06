<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-body d-flex align-items-center ">
                        <h5>List data dpk</h5>
                    </div>
                </div>
            </div>

            <?php foreach ($data['pengguna'] as $pengguna) : ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body d-flex align-items-center justify-content-start">
                                <p><?= $pengguna['nama'] ?></p>
                                <a href="<?= BASEURL ?>/pajak/detail_dpk/<?= $pengguna['id'] ?>" class="badge badge-primary ml-3"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>