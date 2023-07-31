<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header shadow-none">
            <h1>Halaman Profil</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-none">
                        <div class="card-header d-flex flex-column align-items-start">
                            <h4>Profil</h4>
                            <p>Ubah data profile, password, dan informasi lainnya</p>
                        </div>
                        <div class="card-body">
                            <form action="<?= BASEURL ?>/profile/update" method="post">
                                <div class="form-group">
                                    <label for="nama">nama</label>
                                    <input readonly required type="text" class="form-control" name="nama" value="<?= $_SESSION['login']['nama'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="nrik">nrik</label>
                                    <input required type="text" class="form-control" name="nrik" value="<?= $_SESSION['login']['nrik'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">no_hp</label>
                                    <input required type="text" class="form-control" name="no_hp" value="<?= $_SESSION['login']['no_hp'] ?>">
                                </div>
                                <div class="form-grup">
                                    <button type="submit" class="btn bg-main text-white">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-none">
                        <div class="card-header d-flex flex-column align-items-start">
                            <h4>Password</h4>
                            <p>Pastikan untuk menggunakan password yang panjang dan sulit untuk di tebak</p>
                        </div>
                        <div class="card-body">
                            <form action="<?= BASEURL ?>/profile/update_password" method="post">
                                <div class="form-group">
                                    <label for="password_lama">password_lama</label>
                                    <input required type="text" class="form-control" name="password_lama">
                                </div>
                                <div class="form-group">
                                    <label for="password_baru">password_baru</label>
                                    <input required type="text" class="form-control" name="password_baru">
                                </div>
                                <div class="form-group">
                                    <label for="konfirmasi_password_baru">konfirmasi_password_baru</label>
                                    <input required type="text" class="form-control" name="konfirmasi_password_baru">
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