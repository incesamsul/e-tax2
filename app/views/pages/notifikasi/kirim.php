<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header shadow-none">
            <h1>kirim lampiran</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-none">
                        <div class="card-header d-flex  align-items-start justify-content-between flex-row">
                            <div>
                                <div class="d-flex flex-row">
                                    <h4>lampiran</h4>
                                    <a href="<?= BASEURL ?>/cabang" class="btn bg-main text-white"><i class="fas fa-arrow-left"></i></a>
                                </div>
                                <p class="mt-5">Detail notifikasi</p>
                                <table cellpadding="10">
                                    <tr>
                                        <td>jenis pajak</td>
                                        <td>:</td>
                                        <td><?= NotifikasiOrm::pajak($data['notifikasi']['id_pajak'])['nama_pajak'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>lampiran yang diupload</td>
                                        <td>:</td>
                                        <td><?= NotifikasiOrm::pajak($data['notifikasi']['id_pajak'])['lampiran'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>deadline</td>
                                        <td>:</td>
                                        <td><?= $data['notifikasi']['deadline'] ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="d-flex">
                                <a href="<?= BASEURL ?>/cabang/download_contoh_lampiran/<?= strtolower(NotifikasiOrm::pajak($data['notifikasi']['id_pajak'])['nama_pajak']) . ".xlsx" ?>" class="btn bg-secondary pl-3 pr-3 text-white ml-2 p-1 d-flex"><i class="mr-3 far text-success fa-file-excel fa-bigger"></i> <span>download Contoh lampiran</span></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="<?= BASEURL ?>/cabang/kirim_lampiran" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="nama">nama</label>
                                    <input type="hidden" class="form-control" name="id_notifikasi" value="<?= $data['notifikasi']['id'] ?>">
                                    <input required type="file" class="form-control" name="lampiran">
                                </div>
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