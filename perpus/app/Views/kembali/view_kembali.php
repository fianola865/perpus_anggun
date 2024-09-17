<?= $this->extend('template/index'); ?>

<?= $this->section('Anggun') ?>
<div class="container">
    <h2 class="mt-5">Data Pengembalian</h2>
    <table class="table table-striped" border="3">
        <thead>
            <tr>
                <td>No</td>
                <td>UserId</td>
                <td>BukuID</td>
                <td>Tanggal_pengembalian</td>
            </tr>
        </thead>
        <tbody>
            <?php $nomor = 0; ?>
            <?php foreach ($ANGGUN as $key): ?>
                <?php $nomor++; ?>
                <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $key["user_name"] ?></td>
                    <td><?= $key["buku_title"] ?></td>
                    <td><?= $key["Tanggal_pengembalian"] ?></td>
                    <td>
                        <form action="/eduitz" method="post" class="d-inline">
                            <input type="hidden" name="UserID" value="<?= $key['PeminjamanID'] ?>">
                            <input type="hidden" name="UserID" value="<?= $key['UserID'] ?>">
                            <input type="hidden" name="BukuID" value="<?= $key['BukuID'] ?>">
                            <input type="hidden" name="Tanggal_pengembalian" value="<?= $key['Tanggal_pengembalian'] ?>">
                            <button type="submit" class="btn btn-warning btn-sm">Edit</button>
                        </form>
                    </td>
                    <td>
                        <form action="/havus" method="post" style="display: inline;">
                            <input type="hidden" name="PeminjamanID" value="<?= $key['PeminjamanID']; ?> ">
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="/masux" class="btn btn-primary">Tambah</a>
</div>
<?= $this->endSection(); ?>