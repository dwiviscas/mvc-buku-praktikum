<?php $title = 'Tambah Buku'; ?>
<?php require __DIR__ . '/../partials/header.php'; ?>

<div class="page-head">
    <div>
        <h1>Tambah Buku</h1>
        <p class="subtitle">Isi data buku baru di bawah ini</p>
    </div>
</div>

<?php require __DIR__ . '/../partials/flash.php'; ?>

<div class="card form-card">
    <form method="post" action="index.php?page=buku&action=store">
        <div class="form-group">
            <label>Judul</label>
            <input type="text" name="judul" required>
        </div>
        <div class="form-group">
            <label>Penulis</label>
            <input type="text" name="penulis" required>
        </div>
        <div class="form-group">
            <label>Penerbit</label>
            <input type="text" name="penerbit" required>
        </div>
        <div class="form-group">
            <label>Tahun Terbit</label>
            <input type="number" name="tahun_terbit" min="1000" max="<?= date('Y') + 1 ?>" required>
        </div>
        <div class="form-group">
            <label>ISBN</label>
            <input type="text" name="isbn" required>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-add">Simpan</button>
            <a href="index.php?page=buku" class="btn btn-ghost">Kembali</a>
        </div>
    </form>
</div>

<?php require __DIR__ . '/../partials/footer.php'; ?>