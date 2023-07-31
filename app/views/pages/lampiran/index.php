<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header shadow-none">
            <h1>Halaman lampiran</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-none">
                        <div class="card-header d-flex  align-items-start justify-content-between flex-row">
                            <div>
                                <div class="d-flex flex-row">
                                    <h4>lampiran</h4>
                                </div>
                                <p>list lampiran</p>
                            </div>
                            <div class="d-flex">
                                <input type="text" class="search-data-table form-control">
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table data-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama pajak</th>
                                        <th>Lampiran </th>
                                        <th>tgl max pengumpulan</th>
                                        <th>Tujuan</th>
                                        <th>file</th>
                                        <th>Verifikasi</th>
                                        <th>alasan</th>
                                        <th>status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data['notifikasi'] as $index => $row) : ?>
                                        <tr>
                                            <td><?= $index + 1 ?></td>
                                            <td><?= NotifikasiOrm::pajak($row['id_pajak'])['nama_pajak'] ?> </td>
                                            <td><?= NotifikasiOrm::pajak($row['id_pajak'])['lampiran'] ?> </td>
                                            <td><?= $row['deadline'] ?> </td>
                                            <td><?= NotifikasiOrm::cabang($row['id_user'])['nama'] ?> </td>
                                            <td>
                                                <?php if (NotifikasiOrm::hasOneLampiran($row['id'])) : ?>
                                                    <a href="<?= BASEURL ?>/lampiran/download/<?= basename(NotifikasiOrm::hasOneLampiran($row['id'])['file']) ?>" class="btn bg-white ml-2 p-1" data-toggle="tooltip" data-placement="top" title="download file."><i class="far text-success fa-file-excel fa-bigger"></i></a>
                                                <?php else : ?>
                                                    <span class="btn  bg-white text-secondary"><i class="fas fa-file fa-bigger"></i></span>
                                                <?php endif; ?>

                                            </td>
                                            <td class="d-flex">
                                                <?php if (NotifikasiOrm::hasOneLampiran($row['id'])) : ?>
                                                    <form action="<?= BASEURL ?>/lampiran/terima" method="post" class="d-niline">
                                                        <button data-toggle="tooltip" data-placement="top" title="terima lampiran." onclick="return confirm('teirma lampiran?')" name="terima" value="<?= $row['id'] ?>" class="btn btn-primary shadow-none"><i class="fas fa-check"></i></button>
                                                    </form>
                                                    <a href="<?= BASEURL ?>/lampiran/tolak/<?= $row['id'] ?>" data-toggle="tooltip" data-placement="top" title="tolak lampiran." name="tolak" value="<?= $row['id'] ?>" class="ml-2 btn btn-danger shadow-none"><i class="fas fa-times"></i></a>
                                                    <form action="<?= BASEURL ?>/lampiran/reset" method="post" class="d-niline ml-2">
                                                        <button data-toggle="tooltip" data-placement="top" title="reset lampiran." onclick="return confirm('reset lampiran?')" name="reset" value="<?= $row['id'] ?>" title="reset" class="btn btn-warning shadow-none"><i class="fas fa-sync"></i></button>
                                                    </form>
                                                <?php else : ?>
                                                    <span class="badge badge-info">belum upload lampiran</span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if ($row['verifikasi'] == '0') : ?>
                                                    <span class="badge badge-secondary">---</span>
                                                <?php elseif ($row['verifikasi'] == '1') : ?>
                                                    <span class="badge badge-light">---</span>
                                                <?php else : ?>
                                                    <?php

                                                    $paragraph = $row['alasan'];
                                                    $words = explode(' ', $paragraph);
                                                    $short_paragraph = implode(' ', array_slice($words, 0, 3)) . '...';
                                                    ?>

                                                    <span onclick="showParagraph('<?= $paragraph ?>')"><?= $short_paragraph ?></span>
                                                    <script>
                                                        function showParagraph(paragraph) {
                                                            alert(paragraph);
                                                        }
                                                    </script>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if ($row['verifikasi'] == '0') : ?>
                                                    <span class="badge badge-secondary">belum verifikasi</span>
                                                <?php elseif ($row['verifikasi'] == '1') : ?>
                                                    <span class="badge badge-success">diterima</span>
                                                <?php else : ?>
                                                    <span class="badge badge-danger">ditolak</span>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>