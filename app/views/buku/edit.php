<?php $title = 'Edit Buku'; ?>
<?php require __DIR__ . '/../partials/header.php'; ?>

<div class="page-head">
    <div>
        <h1>Edit Buku</h1>
        <p class="subtitle">Ubah data buku lalu simpan</p>
    </div>
</div>

<?php require __DIR__ . '/../partials/flash.php'; ?>

<div class="card form-card">
    <form method="post" action="index.php?page=buku&action=update">
        <input type="hidden" name="id" value="<?= (int) $buku['id'] ?>">
        <div class="form-group">
            <label>Judul</label>
            <input type="text" name="judul" value="<?= htmlspecialchars($buku['judul']) ?>" required>
        </div>
        <div class="form-group">
            <label>Penulis</label>
            <input type="text" name="penulis" value="<?= htmlspecialchars($buku['penulis']) ?>" required>
        </div>
        <div class="form-group">
            <label>Penerbit</label>
            <input type="text" name="penerbit" value="<?= htmlspecialchars($buku['penerbit']) ?>" required>
        </div>
        <div class="form-group">
            <label>Tahun Terbit</label>
            <input type="number" name="tahun_terbit" min="1000" max="<?= date('Y') + 1 ?>"
                   value="<?= htmlspecialchars($buku['tahun_terbit']) ?>" required>
        </div>
        <div class="form-group">
            <label>ISBN</label>
            <input type="text" name="isbn" value="<?= htmlspecialchars($buku['isbn']) ?>" required>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn">Update</button>
            <a href="index.php?page=buku" class="btn btn-ghost">Kembali</a>
        </div>
    </form>
</div>

<?php require __DIR__ . '/../partials/footer.php'; ?>