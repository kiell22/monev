<?= $this->extend('index') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <center>
        <h1 class="mb-4">Tambah Pelanggan</h1>
    </center>
    <form action="/pelanggan/store" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" id="nama" name="nama" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="/kategori" class="btn btn-secondary">Back</a>
    </form>
</div>

<?= $this->endSection() ?>