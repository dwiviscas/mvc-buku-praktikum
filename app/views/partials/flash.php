<?php if (!empty($_SESSION['flash'])): ?>
    <?php $f = $_SESSION['flash']; unset($_SESSION['flash']); ?>
    <div class="alert alert-<?= $f['type'] === 'success' ? 'success' : 'error' ?>">
        <?= htmlspecialchars($f['message']) ?>
    </div>
<?php endif; ?>