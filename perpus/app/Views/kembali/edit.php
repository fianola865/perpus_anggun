<?= $this->extend('template/index') ?>

<?= $this->section('Anggun') ?>
<div class="container mt-5">
    <h1>Edit</h1>
    <form action="/gantiy" method="post">
        <div class="form-group">
            <label for="UserID">Id User:</label>
            <input type="hidden" id="PeminjamanID" name="PeminjamanID" class="form-control" required value="<?= $PeminjamanID ?>">
            <input type="text" id="UserID" name="UserID" class="form-control" required value="<?= $UserID ?>">
        </div>
        <div class=" form-group mt-3">
            <label for="BukuID">Id Buku:</label>
            <input type="text" id="BukuID" name="BukuID" class="form-control" required value="<?= $BukuID ?>">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>

<script>
    $(function() {
        $('#TanggalPeminjaman').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            defaulDate: new Date()
        });
    });
</script>
<?= $this->endSection(); ?>