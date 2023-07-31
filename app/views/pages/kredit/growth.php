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
                            <table class="full-width  table-bordered" cellpadding="10">
                                <thead class="bg-danger text-white">
                                    <?php
                                    $month = ['jun-22', 'jul-22', 'dec-22', 'mar-22', 'mar-23', 'apr-23', 'mei-23', 'jun-23'];
                                    ?>
                                    <tr>
                                        <th rowspan=" 2">Cabang</th>
                                        <th class="text-center" colspan="<?= count($month) ?>">Realisasi</th>
                                        <th colspan="3">Growth (Rp)</th>
                                        <th colspan="3">Growth (%)</th>
                                    </tr>
                                    <tr>
                                        <?php foreach ($month as $row) : ?>
                                            <th><?= $row ?></th>
                                        <?php endforeach ?>
                                        <th>MTM</th>
                                        <th>YTD</th>
                                        <th>YOY</th>
                                        <th>MTM</th>
                                        <th>YTD</th>
                                        <th>YOY</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data['cabang'] as $cabang) : ?>
                                        <tr>
                                            <td contenteditable="false" class="cabang">
                                                <?= $cabang['cabang'] ?>
                                            </td>
                                            <?php
                                            $totalmtm = 0;
                                            $mtm = 0;
                                            $ytd = 0;
                                            $yoi = 0;
                                            ?>
                                            <?php foreach ($month as $row) : ?>
                                                <?php
                                                $lastRow = Helpers::getRealisasiKreditByCabangAndMonth($cabang['cabang'], $month['7']) ? Helpers::getRealisasiKreditByCabangAndMonth($cabang['cabang'], $month['7'])['realisasi'] : 0;
                                                $secondLast = Helpers::getRealisasiKreditByCabangAndMonth($cabang['cabang'], $month['6']) ? Helpers::getRealisasiKreditByCabangAndMonth($cabang['cabang'], $month['6'])['realisasi'] : 0;
                                                $thirdRow = Helpers::getRealisasiKreditByCabangAndMonth($cabang['cabang'], $month['2']) ? Helpers::getRealisasiKreditByCabangAndMonth($cabang['cabang'], $month['2'])['realisasi'] : 0;
                                                $firstRow = Helpers::getRealisasiKreditByCabangAndMonth($cabang['cabang'], $month['0']) ? Helpers::getRealisasiKreditByCabangAndMonth($cabang['cabang'], $month['0'])['realisasi'] : 0;
                                                $mtm = $lastRow - $secondLast;
                                                $ytd = $lastRow - $thirdRow;
                                                $yoi = $lastRow - $firstRow;
                                                $totalmtm = $mtm;
                                                ?>
                                                <td contenteditable="false" class="realisasi" data-month="<?= $row ?>">
                                                    <?= Helpers::getRealisasiKreditByCabangAndMonth($cabang['cabang'], $row) ? Helpers::getRealisasiKreditByCabangAndMonth($cabang['cabang'], $row)['realisasi'] : 0 ?>
                                                </td>
                                            <?php endforeach ?>
                                            <td>
                                                <?= $mtm ?>
                                            </td>
                                            <td>
                                                <?= $ytd ?>
                                            </td>
                                            <td>
                                                <?= $yoi ?>
                                            </td>
                                            <td>
                                                <?= $mtm . '%' ?>
                                            </td>
                                            <td>
                                                <?= $ytd . '%' ?>
                                            </td>
                                            <td>
                                                <?= $yoi . '%' ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    <tr class="text-bold">
                                        <td>
                                            Total
                                        </td>
                                        <?php foreach ($month as $row) : ?>
                                            <td contenteditable="false" class="realisasi" data-month="<?= $row ?>">
                                                <?= Helpers::getTotalRealisasi($row) ? Helpers::getTotalRealisasi($row)['total'] : 0 ?>
                                            </td>
                                        <?php endforeach ?>
                                        <td>
                                            <?= $totalmtm ?>
                                        </td>
                                        <td>
                                            0
                                        </td>
                                        <td>
                                            0
                                        </td>
                                        <td>
                                            0
                                        </td>
                                        <td>
                                            0
                                        </td>
                                        <td>
                                            0
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>