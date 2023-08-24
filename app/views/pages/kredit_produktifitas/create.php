<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header shadow-none">
            <?php if (isset($data['id'])) : ?>
                <h1>Edit kredit</h1>
            <?php else : ?>
                <h1>Tambah kredit</h1>
            <?php endif; ?>

        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-none">
                        <div class="card-header d-flex  align-items-start justify-content-between flex-row">
                            <div>
                                <div class="d-flex flex-row">
                                    <h4>kredit</h4>
                                    <a href="<?= BASEURL ?>/kredit" class="btn bg-main text-white"><i class="fas fa-arrow-left"></i></a>
                                </div>
                                <?php if (isset($data['id'])) : ?>
                                    <p>Edit kredit</p>
                                <?php else : ?>
                                    <p>Tambah kredit</p>
                                <?php endif; ?>
                            </div>
                            <div class="d-flex">
                                <!-- <input type="text" class="search-data-table form-control"> -->
                            </div>
                        </div>
                        <div class="card-body">
                            <?php if (isset($data['id'])) : ?>
                                <form action="<?= BASEURL ?>/kredit/update" method="post">
                                <?php else : ?>
                                    <form action="<?= BASEURL ?>/kredit/store" method="post">
                                    <?php endif; ?>
                                    <div class="form-group">
                                        <label for="cabang">cabang</label>
                                        <input type="hidden" class="form-control" name="id" value="<?= isset($data['id']) ? $data['edit']['id'] : '' ?>">
                                        <input required type="text" class="form-control" name="cabang" value="<?= isset($data['id']) ? $data['edit']['cabang'] : '' ?>">
                                    </div>
                                    <?php
                                    $month = ['jun-22', 'jul-22', 'dec-22', 'mar-22', 'mar-23', 'apr-23', 'mei-23', 'jun-23'];
                                    ?>

                                    <?php foreach ($month as $row) : ?>

                                        <div class="form-group">
                                            <label for="cabang"><?= $row ?></label>
                                            <input required type="text" class="form-control" name="cabang" value="<?= isset($data['id']) ? $data['edit']['cabang'] : '' ?>">
                                        </div>


                                    <?php endforeach; ?>

                                    <div class="form-grup">
                                        <button type="submit" class="btn bg-main text-white">Simpan</button>
                                    </div>
                                    </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>