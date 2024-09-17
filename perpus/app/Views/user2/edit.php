<?= $this->extend('template/index') ?>

<?= $this->section('Anggun') ?>
<div class="container mt-5">
    <h1>Edit</h1>
    <form action="/ganti" method="post">
        <div class=" form-group mt-3">
            <label for="Username">Username:</label>
            <input type="text" id="Username" name="Username" class="form-control" required value="<?= $Username ?>">
            <input type="hidden" id="UserID" name="UserID" class="form-control" value="<?= $UserID ?>">
        </div>
        <div class=" form-group mt-3">
            <label for="Password">Password:</label>
            <input type="password" id="Password" name="Password" class="form-control" required value="<?= $Username ?>">
        </div>
        <div class=" form-group mt-3">
            <label for="Email">Email:</label>
            <input type="text" id="Email" name="Email" class="form-control" required value="<?= $Email ?>">
        </div>
        <div class=" form-group mt-3">
            <label for="NamaLengkap">Nama Lengkap:</label>
            <input type="text" id="NamaLengkap" name="NamaLengkap" class="form-control" value="<?= $NamaLengkap ?>">
        </div>
        <div class="from-group mt-3">
            <label class="Alamat"> Alamat</label>
            <input type="text" id="Alamat" name="Alamat" class="form-control" required value="<?= $Alamat ?>">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<?= $this->endSection(); ?>