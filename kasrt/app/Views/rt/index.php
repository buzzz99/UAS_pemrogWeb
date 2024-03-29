<?= $this->include('template/header'); ?>

<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Kelamin</th>
            <th>Alamat</th>
            <th>No. Rumah</th>
            <th>Status</th>

        </tr>
    </thead>
    <tbody>
        <?php if ($rt) : foreach ($rt as $row) : ?>
                <tr>
                    <td><?= $row['warga_id']; ?></td>
                    <td><?= $row['nik']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['kelamin']; ?></td>
                    <td><?= $row['alamat']; ?></td>
                    <td><?= $row['no_rumah']; ?></td>
                    <td><?= $row['status']; ?></td>
                </tr>
            <?php endforeach;
        else : ?>
            <tr>
                <td colspan="6">Belum ada data.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?= $this->include('template/footer'); ?>