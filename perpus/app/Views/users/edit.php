<?= $this->extend('template/index') ?>

<?= $this->section('Anggun') ?>
<div class="container mt-5">
    <h1>Edit</h1>
    <form action="/edits" method="post">
        <div class="form-group">
            <label for="judul">Judul Buku:</label>
            <input type="text" id="judul" name="judul" class="form-control" required value="<?= $judul ?>">
        </div>
        <div class="form-group mt-3">
            <label for="penulis">Penulis:</label>
            <input type="text" id="penulis" name="penulis" class="form-control" required value="<?= $penulis ?>">
        </div>
        <div class=" form-group mt-3">
            <label for="penerbit">Penerbit:</label>
            <input type="text" id="penerbit" name="penerbit" class="form-control" required value="<?= $penerbit ?>">
        </div>
        <div class=" form-group mt-3">
            <label for="tahun_terbit">Tahun Terbit:</label>
            <input type="number" id="tahun_terbit" name="tahun_terbit" class="form-control" value="<?= $tahun_terbit ?>">
            <input type="hidden" id="id_buku" name="id_buku" class="form-control" value="<?= $id_buku ?>">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<?= $this->endSection(); ?>