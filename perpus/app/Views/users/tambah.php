<?= $this->extend('template/index') ?>

<?= $this->section('Anggun') ?>
<div class="container mt-5">
    <h1>Tambah Buku</h1>
    <form action="/simpan" method="post">
        <div class="form-group">
            <label for="judul">Judul Buku:</label>
            <input type="text" id="judul" name="judul" class="form-control" required>
        </div>
        <div class="form-group mt-3">
            <label for="penulis">Penulis:</label>
            <input type="text" id="penulis" name="penulis" class="form-control" required>
        </div>
        <div class="form-group mt-3">
            <label for="penerbit">Penerbit:</label>
            <input type="text" id="penerbit" name="penerbit" class="form-control" required>
        </div>
        <div class="form-group mt-3">
            <label for="tahun_terbit">Tahun Terbit:</label>
            <input type="number" id="tahun_terbit" name="tahun_terbit" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan Buku</button>
    </form>
</div>

<?= $this->endSection(); ?>