<?= $this->extend('template/index') ?>

<?= $this->section('Anggun') ?>
<div class="container">
    <h2 class="mt-5">Data User</h2>
    <table class="table table-striped" border="3">
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <tbody>
            <?php $nomor = 0; ?>
            <?php foreach ($dwi as $key): ?>
                <?php $nomor++; ?>
                <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $key["Username"] ?></td>
                    <td><?= $key["Password"] ?></td>
                    <td><?= $key["Email"] ?></td>
                    <td><?= $key["NamaLengkap"] ?></td>
                    <td><?= $key["Alamat"] ?></td>
                    <td>
                        <form action="/eduit" method="post" class="d-inline">
                            <input type="hidden" name="UserID" value="<?= $key['UserID'] ?>">
                            <input type="hidden" name="Username" value="<?= $key['Username'] ?>">
                            <input type="hidden" name="Password" value="<?= $key['Password'] ?>">
                            <input type="hidden" name="Email" value="<?= $key['Email'] ?>">
                            <input type="hidden" name="NamaLengkap" value="<?= $key['NamaLengkap'] ?>">
                            <input type="hidden" name="Alamat" value="<?= $key['Alamat'] ?>">
                            <button type="submit" class="btn btn-warning btn-sm">Edit</button>
                        </form>
                    </td>
                    <td>
                        <form action="/hapos" method="post" style="display:inline;">
                            <input type="hidden" name="UserID" value="<?= $key['UserID'] ?>">
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="/masuk" class="btn btn-primary">Tambah</a>
</div>
<?= $this->endSection(); ?>