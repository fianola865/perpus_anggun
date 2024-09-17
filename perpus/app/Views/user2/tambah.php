<?= $this->extend('template/index') ?>

<?= $this->section('Anggun') ?>
<div class="container mt-5">
    <h1>Tambah User</h1>
    <form action="/simpans" method="post">
        <div class="form-group mt-3">
            <label for="Username">Username:</label>
            <input type="text" id="Username" name="Username" class="form-control" required>
        </div>
        <div class="form-group mt-3">
            <label for="Password">Password:</label>
            <input type="password" id="Password" name="Password" class="form-control" required>
        </div>
        <div class="form-group mt-3">
            <label for="Email">Email:</label>
            <input type="text" id="Email" name="Email" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="NamaLengkap">Nama Lengkap:</label>
            <input type="text" id="NamaLengkap" name="NamaLengkap" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="Alamat">Alamat:</label>
            <input type="text" id="Alamat" name="Alamat" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan Buku</button>
    </form>
</div>

<?= $this->endSection(); ?>