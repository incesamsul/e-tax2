<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header shadow-none">
            <h1>Halaman kredit <?= isset($data['filtered']) ? $data['filtered'] : '' ?></h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-none">
                        <div class="card-header d-flex  align-items-start justify-content-between flex-row">
                            <div>
                                <div class="d-flex flex-row">
                                    <h4>kredit</h4>
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
                                <input type="text" class="form-control col-sm-3" id="tahun">
                            </div>
                            <div class="form-group">
                                <label for="jenis_lembar_kerja">Jenis lembar kerja</label>
                                <select id="jenis_lembar_kerja" class="col-sm-3 form-control" name="jenis_lembar_kerja" id="jenis_lembar_kerja">
                                    <?php foreach ($data['jenis_lembar_kerja'] as $jlk) : ?>
                                        <option value="<?= $jlk['id'] ?>"><?= $jlk['nama'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="bulan">bulan</label>
                                <input id="bulan_input" type="text" class="form-control col-sm-3" name="bulan">
                            </div>
                            <table class="full-width  table-bordered table-editable" cellpadding="10">
                                <thead class="bg-danger text-white">
                                    <?php
                                    $month = ['jun-22', 'jul-22', 'dec-22', 'mar-22', 'mar-23', 'apr-23', 'mei-23', 'jun-23'];
                                    ?>
                                    <tr>
                                        <th rowspan=" 2">Cabang</th>
                                        <th class="text-center" colspan="<?= count($month) + 1 ?>">Realisasi</th>

                                    </tr>
                                    <tr>
                                        <?php foreach ($month as $row) : ?>
                                            <th><?= $row ?></th>
                                        <?php endforeach ?>
                                        <th style="width: 10px;">#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data['cabang'] as $cabang) : ?>
                                        <tr>
                                            <td contenteditable="true" class="cabang">
                                                <?= $cabang['cabang'] ?>
                                            </td>
                                            <?php foreach ($month as $row) : ?>
                                                <td contenteditable="true" class="realisasi" data-month="<?= $row ?>">
                                                    <?= Helpers::getRealisasiKreditByCabangAndMonth($cabang['cabang'], $row) ? Helpers::getRealisasiKreditByCabangAndMonth($cabang['cabang'], $row)['realisasi'] : 0 ?>
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