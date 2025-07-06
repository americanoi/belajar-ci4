<h2>Data Diskon</h2>
<a href="/diskon/create">Tambah Diskon</a>
<table>
    <tr><th>Tanggal</th><th>Nominal</th><th>Aksi</th></tr>
    <?php foreach ($diskon as $d): ?>
    <tr>
        <td><?= $d['tanggal'] ?></td>
        <td><?= number_format($d['nominal'], 0, ',', '.') ?></td>
        <td>
            <a href="/diskon/edit/<?= $d['id'] ?>">Edit</a> |
            <a href="/diskon/delete/<?= $d['id'] ?>" onclick="return confirm('Yakin?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
