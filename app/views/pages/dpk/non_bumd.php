<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header shadow-none">
            <h1>Lembar kerja NON BUMD</h1>
        </div>

        <div class="section-body">


            <?php
            $giroNet = [];
            $depoNet = [];
            ?>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <?php if ($_SESSION['login']['role'] == 'group_hbl') : ?>
                                <a href="<?= BASEURL ?>/dpk/bumd" class="btn btn-outline-secondary">BUMD</a>
                                <a href="<?= BASEURL ?>/dpk/non_bumd" class="btn btn-outline-secondary">NON BUMD</a>
                            <?php endif; ?>
                            <?php if ($_SESSION['login']['role'] == 'group_sya') : ?>
                                <a href="<?= BASEURL ?>/dpk/syariah" class="btn btn-outline-secondary">SYARIAH</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="card shadow-none">
                        <div class="card-header d-flex  align-items-start justify-content-between flex-row">
                            <div>
                                <div class="d-flex flex-row">
                                    <h4>Giro Cash In</h4>
                                    <!-- <a href="<?= BASEURL ?>/kredit/create" class="btn bg-main text-white"><i class="fas fa-plus"></i></a> -->
                                </div>

                            </div>
                            <div class="d-flex align-items-center justify-content-center">

                            </div>
                        </div>
                        <div class="card-body table-responsive">



                            <table class="full-width  table-bordered table-editable" cellpadding="10" id="table-nonbumd-giro-cash-in">
                                <thead class="bg-danger text-white">
                                    <tr class="text-center">
                                        <th>Nama</th>
                                        <th>Nominal</th>
                                        <th>Rate</th>
                                        <th>Jangka waktu</th>
                                        <th>Keterangan</th>
                                        <th>Tgl Proyeksi</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php
                                    $totalGiroCashIn = 0;
                                    ?>
                                    <?php foreach ($data['nonbumd_giro_cash_in'] as $dpk) : ?>
                                        <?php
                                        $giroNet['cash_in'][] = $dpk['nominal'];
                                        $totalGiroCashIn += $dpk['nominal'];
                                        ?>
                                        <tr>
                                            <td contenteditable="true" class="cell-data" data-col="nama">
                                                <?= $dpk['nama'] ?>
                                            </td>
                                            <td contenteditable="true" class="cell-data" data-col="nominal">
                                                <?= $dpk['nominal'] ?>
                                            </td>
                                            <td contenteditable="true" class="cell-data" data-col="rate">
                                                <?= $dpk['rate'] ?>
                                            </td>
                                            <td contenteditable="true" class="cell-data" data-col="jangka_waktu">
                                                <?= $dpk['jangka_waktu'] ?>
                                            </td>
                                            <td contenteditable="true" class="cell-data" data-col="keterangan">
                                                <?= $dpk['keterangan'] ?>
                                            </td>
                                            <td contenteditable="true" class="cell-data" data-col="tgl_proyeksi">
                                                <?= $dpk['tgl_proyeksi'] ?>
                                            </td>

                                            <td><button class='btn btn-sm btn-danger btnRemoveRow'><i class='fas fa-trash'></i></button></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr class="bg-secondary">
                                        <td>TOTAL</td>
                                        <td colspan="6"><strong><?= $totalGiroCashIn ?></strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="d-flex mt-4 justify-content-end">
                                <button class="btn bg-main btn-tambah-nonbumd-giro-cash-in text-white">
                                    <i class="fas fa-plus"></i>
                                    <span>Tambah</span>
                                </button>
                                <button class="btn btn-primary btn-save-nonbumd-giro-cash-in ml-2">
                                    <i class="fas fa-save"></i>
                                    <span>save</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card shadow-none">
                        <div class="card-header d-flex  align-items-start justify-content-between flex-row">
                            <div>
                                <div class="d-flex flex-row">
                                    <h4>Giro Cash Out</h4>
                                    <!-- <a href="<?= BASEURL ?>/kredit/create" class="btn bg-main text-white"><i class="fas fa-plus"></i></a> -->
                                </div>

                            </div>
                            <div class="d-flex align-items-center justify-content-center">

                            </div>
                        </div>
                        <div class="card-body table-responsive">



                            <table class="full-width  table-bordered table-editable" cellpadding="10" id="table-nonbumd-giro-cash-out">
                                <thead class="bg-danger text-white">
                                    <tr class="text-center">
                                        <th>Nama</th>
                                        <th>Nominal</th>
                                        <th>Rate</th>
                                        <th>Jangka waktu</th>
                                        <th>Keterangan</th>
                                        <th>Tgl Proyeksi</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $totalGiroCashOut = 0 ?>
                                    <?php foreach ($data['nonbumd_giro_cash_out'] as $dpk) : ?>
                                        <?php
                                        $giroNet['cash_out'][] = $dpk['nominal'];
                                        $totalGiroCashOut += $dpk['nominal'];
                                        ?>
                                        <tr>
                                            <td contenteditable="true" class="cell-data" data-col="nama">
                                                <?= $dpk['nama'] ?>
                                            </td>
                                            <td contenteditable="true" class="cell-data" data-col="nominal">
                                                <?= $dpk['nominal'] ?>
                                            </td>
                                            <td contenteditable="true" class="cell-data" data-col="rate">
                                                <?= $dpk['rate'] ?>
                                            </td>
                                            <td contenteditable="true" class="cell-data" data-col="jangka_waktu">
                                                <?= $dpk['jangka_waktu'] ?>
                                            </td>
                                            <td contenteditable="true" class="cell-data" data-col="keterangan">
                                                <?= $dpk['keterangan'] ?>
                                            </td>
                                            <td contenteditable="true" class="cell-data" data-col="tgl_proyeksi">
                                                <?= $dpk['tgl_proyeksi'] ?>
                                            </td>

                                            <td><button class='btn btn-sm btn-danger btnRemoveRow'><i class='fas fa-trash'></i></button></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr class="bg-secondary">
                                        <td>TOTAL</td>
                                        <td colspan="6"><strong><?= $totalGiroCashOut ?></strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="d-flex mt-4 justify-content-end">
                                <button class="btn bg-main btn-tambah-nonbumd-giro-cash-out text-white">
                                    <i class="fas fa-plus"></i>
                                    <span>Tambah</span>
                                </button>
                                <button class="btn btn-primary btn-save-nonbumd-giro-cash-out ml-2">
                                    <i class="fas fa-save"></i>
                                    <span>save</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php

                $giroNetCounted = []; // This will hold the GI$giroNetCounted
                $count = 0;
                if (isset($giroNet['cash_in']) && isset($giroNet['cash_out'])) {
                    // Get the number of elements in the arrays
                    $count = count($giroNet["cash_in"]);

                    // Subtract the corresponding values from cash_in and cash_out
                    for ($i = 0; $i < $count; $i++) {
                        $giroNetCounted[] = $giroNet["cash_in"][$i] - $giroNet["cash_out"][$i];
                    }
                }

                ?>

                <div class="col-lg-2">
                    <div class="card shadow-none">
                        <div class="card-header d-flex  align-items-start justify-content-between flex-row">
                            <div>
                                <div class="d-flex flex-row">
                                    <h4>GIRO NET</h4>
                                    <!-- <a href="<?= BASEURL ?>/kredit/create" class="btn bg-main text-white"><i class="fas fa-plus"></i></a> -->
                                </div>

                            </div>
                            <div class="d-flex align-items-center justify-content-center">

                            </div>
                        </div>
                        <div class="card-body table-responsive">



                            <table class="full-width  table-bordered table-editable" cellpadding="10">
                                <thead class="bg-danger text-white">
                                    <tr class="text-center">
                                        <th>NET</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $totalGiroNetCounted = 0 ?>
                                    <?php foreach ($giroNetCounted as $row) : ?>
                                        <?php $totalGiroNetCounted += $row ?>
                                        <tr>
                                            <td class="<?= $row < 0 ? 'text-danger' : '' ?>"><?= $row ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr class="bg-secondary">
                                        <td colspan="6"><strong><?= $totalGiroNetCounted ?></strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>




            <div class="row">
                <div class="col-lg-5">
                    <div class="card shadow-none">
                        <div class="card-header d-flex  align-items-start justify-content-between flex-row">
                            <div>
                                <div class="d-flex flex-row">
                                    <h4>Deposito Cash In</h4>
                                    <!-- <a href="<?= BASEURL ?>/kredit/create" class="btn bg-main text-white"><i class="fas fa-plus"></i></a> -->
                                </div>

                            </div>
                            <div class="d-flex align-items-center justify-content-center">

                            </div>
                        </div>
                        <div class="card-body table-responsive">



                            <table class="full-width  table-bordered table-editable" cellpadding="10" id="table-nonbumd-deposito-cash-in">
                                <thead class="bg-danger text-white">
                                    <tr class="text-center">
                                        <th>Nama</th>
                                        <th>Nominal</th>
                                        <th>Rate</th>
                                        <th>Jangka waktu</th>
                                        <th>Keterangan</th>
                                        <th>Tgl Proyeksi</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $totalDepositoCashIn = 0; ?>
                                    <?php foreach ($data['nonbumd_deposito_cash_in'] as $dpk) : ?>
                                        <?php
                                        $depoNet['cash_in'][] = $dpk['nominal'];
                                        $totalDepositoCashIn += $dpk['nominal'];
                                        ?>
                                        <tr>
                                            <td contenteditable="true" class="cell-data" data-col="nama">
                                                <?= $dpk['nama'] ?>
                                            </td>
                                            <td contenteditable="true" class="cell-data" data-col="nominal">
                                                <?= $dpk['nominal'] ?>
                                            </td>
                                            <td contenteditable="true" class="cell-data" data-col="rate">
                                                <?= $dpk['rate'] ?>
                                            </td>
                                            <td contenteditable="true" class="cell-data" data-col="jangka_waktu">
                                                <?= $dpk['jangka_waktu'] ?>
                                            </td>
                                            <td contenteditable="true" class="cell-data" data-col="keterangan">
                                                <?= $dpk['keterangan'] ?>
                                            </td>
                                            <td contenteditable="true" class="cell-data" data-col="tgl_proyeksi">
                                                <?= $dpk['tgl_proyeksi'] ?>
                                            </td>

                                            <td><button class='btn btn-sm btn-danger btnRemoveRow'><i class='fas fa-trash'></i></button></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr class="bg-secondary">
                                        <td>TOTAL</td>
                                        <td colspan="6"><strong><?= $totalDepositoCashIn ?></strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="d-flex mt-4 justify-content-end">
                                <button class="btn bg-main btn-tambah-nonbumd-deposito-cash-in text-white">
                                    <i class="fas fa-plus"></i>
                                    <span>Tambah</span>
                                </button>
                                <button class="btn btn-primary btn-save-nonbumd-deposito-cash-in ml-2">
                                    <i class="fas fa-save"></i>
                                    <span>save</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card shadow-none">
                        <div class="card-header d-flex  align-items-start justify-content-between flex-row">
                            <div>
                                <div class="d-flex flex-row">
                                    <h4>Deposito Cash out</h4>
                                    <!-- <a href="<?= BASEURL ?>/kredit/create" class="btn bg-main text-white"><i class="fas fa-plus"></i></a> -->
                                </div>

                            </div>
                            <div class="d-flex align-items-center justify-content-center">

                            </div>
                        </div>
                        <div class="card-body table-responsive">



                            <table class="full-width  table-bordered table-editable" cellpadding="10" id="table-nonbumd-deposito-cash-out">
                                <thead class="bg-danger text-white">
                                    <tr class="text-center">
                                        <th>Nama</th>
                                        <th>Nominal</th>
                                        <th>Rate</th>
                                        <th>Jangka waktu</th>
                                        <th>Keterangan</th>
                                        <th>Tgl Proyeksi</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $totalDepositoCashOut = 0 ?>
                                    <?php foreach ($data['nonbumd_deposito_cash_out'] as $dpk) : ?>
                                        <?php
                                        $depoNet['cash_out'][] = $dpk['nominal'];
                                        $totalDepositoCashOut += $dpk['nominal'];
                                        ?>
                                        <tr>
                                            <td contenteditable="true" class="cell-data" data-col="nama">
                                                <?= $dpk['nama'] ?>
                                            </td>
                                            <td contenteditable="true" class="cell-data" data-col="nominal">
                                                <?= $dpk['nominal'] ?>
                                            </td>
                                            <td contenteditable="true" class="cell-data" data-col="rate">
                                                <?= $dpk['rate'] ?>
                                            </td>
                                            <td contenteditable="true" class="cell-data" data-col="jangka_waktu">
                                                <?= $dpk['jangka_waktu'] ?>
                                            </td>
                                            <td contenteditable="true" class="cell-data" data-col="keterangan">
                                                <?= $dpk['keterangan'] ?>
                                            </td>
                                            <td contenteditable="true" class="cell-data" data-col="tgl_proyeksi">
                                                <?= $dpk['tgl_proyeksi'] ?>
                                            </td>

                                            <td><button class='btn btn-sm btn-danger btnRemoveRow'><i class='fas fa-trash'></i></button></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr class="bg-secondary">
                                        <td>TOTAL</td>
                                        <td colspan="6"><strong><?= $totalDepositoCashOut ?></strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="d-flex mt-4 justify-content-end">
                                <button class="btn bg-main btn-tambah-nonbumd-deposito-cash-out text-white">
                                    <i class="fas fa-plus"></i>
                                    <span>Tambah</span>
                                </button>
                                <button class="btn btn-primary btn-save-nonbumd-deposito-cash-out ml-2">
                                    <i class="fas fa-save"></i>
                                    <span>save</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php

                $depoNetCounted = []; // This will hold the GI$depoNetCounted

                if (isset($depoNet['cash_in']) && isset($depoNet['cash_out'])) {
                    // Get the number of elements in the arrays
                    $count = count($depoNet["cash_in"]);

                    // Subtract the corresponding values from cash_in and cash_out
                    for ($i = 0; $i < $count; $i++) {
                        $depoNetCounted[] = $depoNet["cash_in"][$i] - $depoNet["cash_out"][$i];
                    }
                }

                ?>

                <div class="col-lg-2">
                    <div class="card shadow-none">
                        <div class="card-header d-flex  align-items-start justify-content-between flex-row">
                            <div>
                                <div class="d-flex flex-row">
                                    <h4>DEPO NET</h4>
                                    <!-- <a href="<?= BASEURL ?>/kredit/create" class="btn bg-main text-white"><i class="fas fa-plus"></i></a> -->
                                </div>

                            </div>
                            <div class="d-flex align-items-center justify-content-center">

                            </div>
                        </div>
                        <div class="card-body table-responsive">



                            <table class="full-width  table-bordered table-editable" cellpadding="10">
                                <thead class="bg-danger text-white">
                                    <tr class="text-center">
                                        <th>NET</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $totalDepoNetCounted = 0 ?>
                                    <?php foreach ($depoNetCounted as $row) : ?>
                                        <?php $totalDepoNetCounted += $row ?>
                                        <tr>
                                            <td class="<?= $row < 0 ? 'text-danger' : '' ?>"><?= $row ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr class="bg-secondary">
                                        <td colspan="6"><strong><?= $totalDepoNetCounted ?></strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>





        </div>
    </section>
</div>