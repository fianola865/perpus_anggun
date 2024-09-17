<?= $this->extend('template/index') ?>

<?= $this->section('Anggun') ?>
<div class="container mt-5">
    <h2>Data Buku</h2>
    <table class="table table-striped table-bordered" border="4">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
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
                    <td><?= $key["judul"] ?></td>
                    <td><?= $key["penulis"] ?></td>
                    <td><?= $key["penerbit"] ?></td>
                    <td><?= $key["tahun_terbit"] ?></td>
                    <td>
                        <form action="/edit" method="post" class="d-inline">
                            <input type="hidden" name="id_buku" value="<?= $key['id_buku'] ?>">
                            <input type="hidden" name="judul" value="<?= $key['judul'] ?>">
                            <input type="hidden" name="penulis" value="<?= $key['penulis'] ?>">
                            <input type="hidden" name="penerbit" value="<?= $key['penerbit'] ?>">
                            <input type="hidden" name="tahun_terbit" value="<?= $key['tahun_terbit'] ?>">     
                            <button type="submit" class="btn btn-warning btn-sm">Edit</button>
                        </form>
                    </td>
                    <td>
                        <form action="/delete" method="post" class="d-inline">
                            <input type="hidden" name="id_buku" value="<?= $key['id_buku'] ?>">
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="/tambuah" class="btn btn-primary">Tambah</a>
</div>
<?= $this->endSection(); ?>