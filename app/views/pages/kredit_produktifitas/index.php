<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header shadow-none">
            <h1>Halaman kredit <?= isset($data['filtered']) ? $data['filtered'] : '' ?></h1>
            <span><a class="badge badge-secondary ml-2" href="<?= BASEURL ?>/kreditrealisasi">Realisasi</a></span>

        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-none">
                        <div class="card-header d-flex  align-items-start justify-content-between flex-row">
                            <div>
                                <div class="d-flex flex-row">
                                    <h4>Produktifitas RM Mikro</h4>
                                    <!-- <a href="<?= BASEURL ?>/kredit/create" class="btn bg-main text-white"><i class="fas fa-plus"></i></a> -->
                                </div>

                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <input type="text" class="search-data-table form-control">
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <div class="form-group">
                                <label for="tahun">Tahun</label>
                                <select name="tahun" id="tahun" class="form-control col-sm-3">
                                    <option value="">pilih tahun</option>
                                    <?php
                                    for ($tahun = 2018; $tahun <= 2035; $tahun++) {
                                        echo "<option value='$tahun'>$tahun</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jenis_lembar_kerja">Jenis lembar kerja</label>
                                <select id="jenis_lembar_kerja" class="col-sm-3 form-control" name="jenis_lembar_kerja" id="jenis_lembar_kerja">
                                    <option value="">pilih lembar kerja</option>
                                    <?php foreach ($data['jenis_lembar_kerja'] as $jlk) : ?>
                                        <option value="<?= $jlk['id'] ?>"><?= $jlk['nama'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="bulan">bulan</label>
                                <!-- <input id="bulan_input" type="text" class="form-control col-sm-3" name="bulan"> -->
                                <select name="bulan" id="bulan_input" class="form-control col-sm-3">
                                    <option value="">Pilih bulan</option>
                                    <?php
                                    $months = Helpers::getMonth();
                                    foreach ($months as $index => $month) {
                                        $monthNumber = $index + 1;
                                        echo "<option value='$monthNumber'>$month</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <table class="full-width  table-bordered table-editable" cellpadding="10">
                                <thead class="bg-danger text-white">
                                    <?php
                                    $month = Helpers::getProduktifitasMonth();
                                    ?>

                                    <tr class="text-center">
                                        <th rowspan=" 2">Cabang</th>

                                        <?php foreach ($month as $row) : ?>
                                            <th colspan="2"><?= $row ?></th>
                                        <?php endforeach ?>
                                        <th rowspan="2" style="width: 10px;">#</th>
                                    </tr>
                                    <tr>
                                        <?php foreach ($month as $row) : ?>
                                            <th>JML. RM</th>
                                            <th>Pencarian</th>
                                        <?php endforeach ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data['cabang'] as $cabang) : ?>
                                        <tr>
                                            <td contenteditable="true" class="cabang">
                                                <?= $cabang['cabang'] ?>
                                            </td>
                                            <?php foreach ($month as $row) : ?>
                                                <td contenteditable="true" class="jml_rm" data-month="<?= $row ?>">
                                                    <?= Helpers::getProduktifitasByCabangAndMonth($cabang['cabang'], $row) ? Helpers::getProduktifitasByCabangAndMonth($cabang['cabang'], $row)['jml_rm'] : 0 ?>
                                                </td>
                                                <td contenteditable="true" class="pencarian" data-month="<?= $row ?>">
                                                    <?= Helpers::getProduktifitasByCabangAndMonth($cabang['cabang'], $row) ? Helpers::getProduktifitasByCabangAndMonth($cabang['cabang'], $row)['pencarian'] : 0 ?>
                                                </td>
                                            <?php endforeach ?>
                                            <td><button class='btn btn-sm btn-danger btnRemoveRow'><i class='fas fa-trash'></i></button></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <div class="d-flex mt-4 justify-content-end">
                                <button class="btn bg-main btn-tambah text-white">
                                    <i class="fas fa-plus"></i>
                                    <span>Tambah</span>
                                </button>
                                <button class="btn btn-primary btn-save ml-2">
                                    <i class="fas fa-save"></i>
                                    <span>save</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>