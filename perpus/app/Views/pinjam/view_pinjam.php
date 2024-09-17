<?= $this->extend('template/index') ?>

<?= $this->section('Anggun') ?>
<div class="container">
    <h2 class="mt-5">Data Peminjam</h2>
    <table class="table table-striped" border="3">
        <thead>
            <tr>
                <th>No</th>
                <th>User ID</th>
                <th>Buku ID</th>
                <th>Tanggal Peminjaman</th>
                <th>Status Peminjaman</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <tbody>
            <?php $nomor = 0; ?>
            <?php foreach ($anggun as $key): ?>
                <?php $nomor++; ?>
                <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $key["user_name"] ?></td>
                    <td><?= $key["buku_title"] ?></td>
                    <td><?= $key["TanggalPeminjaman"] ?></td>
                    <td><?= $key["StatusPeminjaman"] ?></td>
                    <td>
                        <form action="/rombak" method="post" class="d-inline">
                            <input type="hidden" name="PeminjamanID" value="<?= $key['PeminjamanID'] ?>">
                            <input type="hidden" name="UserID" value="<?= $key['UserID'] ?>">
                            <input type="hidden" name="BukuID" value="<?= $key['BukuID'] ?>">
                            <input type="hidden" name="TanggalPeminjaman" value="<?= $key['TanggalPeminjaman'] ?>">
                            <input type="hidden" name="StatusPeminjaman" value="<?= $key['StatusPeminjaman'] ?>">
                            <button type="submit" class="btn btn-warning btn-sm">Edit</button>
                        </form>
                    </td>
                    <td>
                        <form action="/hapus" method="post" style="display:inline;">
                            <input type="hidden" name="PeminjamanID" value="<?= $key['PeminjamanID'] ?>">
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="/add" class="btn btn-primary">Tambah</a>
</div>
<?= $this->endSection(); ?>