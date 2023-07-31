<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header shadow-none">
            <h1>Halaman pengguna</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-none">
                        <div class="card-header d-flex  align-items-start justify-content-between flex-row">
                            <div>
                                <div class="d-flex flex-row">
                                    <h4>Pengguna</h4>
                                    <a href="<?= BASEURL ?>/pengguna/create" class="btn bg-main text-white"><i class="fas fa-plus"></i></a>
                                </div>
                                <p>Tambah, edit, dan hapus pengguna</p>
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
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>no_hp</th>
                                        <th>role</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data['pengguna'] as $index => $row) : ?>
                                        <tr>
                                            <td><?= $index + 1 ?></td>
                                            <td><?= $row['nama'] ?></td>
                                            <td><?= $row['email'] ?></td>
                                            <td><?= $row['no_hp'] ?></td>
                                            <td><?= $row['role'] ?></td>
                                            <td class="d-flex">
                                                <form action="<?= BASEURL ?>/pengguna/delete" method="post" class="d-niline">
                                                    <button onclick="return confirm('yakin?')" name="delete" value="<?= $row['id'] ?>" class="btn btn-danger shadow-none"><i class="fas fa-trash"></i></button>
                                                </form>
                                                <a href="<?= BASEURL ?>/pengguna/edit/<?= $row['id'] ?>" class="btn btn-secondary ml-2"><i class="fas fa-pen"></i></a>
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