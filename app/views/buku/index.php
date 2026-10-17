<?php $title = 'Daftar Buku'; ?>
<?php require __DIR__ . '/../partials/header.php'; ?>

<div class="page-head">
    <div>
        <h1>Daftar Buku</h1>
        <p class="subtitle">Total <?= count($buku) ?> buku dalam koleksi</p>
    </div>
    <a href="index.php?page=buku&action=create" class="btn btn-add">+ Tambah Buku</a>
</div>

<?php require __DIR__ . '/../partials/flash.php'; ?>

<div class="card">
    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun</th>
                    <th>ISBN</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($buku as $i => $b): ?>
                <tr>
                    <td><?= $i + 1 ?></td>
                    <td class="judul"><?= htmlspecialchars($b['judul']) ?></td>
                    <td><?= htmlspecialchars($b['penulis']) ?></td>
                    <td><?= htmlspecialchars($b['penerbit']) ?></td>
                    <td><span class="badge"><?= htmlspecialchars($b['tahun_terbit']) ?></span></td>
                    <td class="isbn"><?= htmlspecialchars($b['isbn']) ?></td>
                    <td class="actions">
                        <a href="index.php?page=buku&action=edit&id=<?= (int) $b['id'] ?>" class="btn btn-sm btn-edit">Edit</a>
                        <form method="post" action="index.php?page=buku&action=delete"
                              class="inline-form"
                              onsubmit="return confirm('Hapus buku ini?')">
                            <input type="hidden" name="id" value="<?= (int) $b['id'] ?>">
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php if (empty($buku)): ?>
                <tr><td colspan="7" class="empty">Belum ada data buku.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require __DIR__ . '/../partials/footer.php'; ?>