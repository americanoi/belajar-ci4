<form action="/diskon/update/<?= $diskon['id'] ?>" method="post">
    <label>Tanggal:</label>
    <input type="date" name="tanggal" value="<?= $diskon['tanggal'] ?>" readonly>
    <label>Nominal:</label>
    <input type="number" name="nominal" value="<?= $diskon['nominal'] ?>" required>
    <button type="submit">Update</button>
</form>
