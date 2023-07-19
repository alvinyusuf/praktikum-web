<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<?php //dd($mahasiswa) ?>

<main>
    <div class="title">
        <h1>Data Mahasiswa</h1>
        <a href="crud/tambah"><button>Tambah Data</button></a>
    </div>
    <div class="table">
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>NIM</td>
                <td>Prodi</td>
                <td>Universitas</td>
                <td>No HP</td>
                <td>Action</td>
            </tr>
            <?php if(empty($mahasiswa)) { ?>
                <tr>
                    <td collspan="7">Tidak Ada Data</td>
                </tr>
            <?php } else {
                $i = 1;
                foreach ($mahasiswa as $a) { ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <!-- <td>Ari</td> -->
                        <td><?= $a['nama'] ?></td>
                        <td><?= $a['nim'] ?></td>
                        <td><?= $a['prodi'] ?></td>
                        <td><?= $a['universitas'] ?></td>
                        <td><?= $a['no_handphone'] ?></td>
                        <!-- <td>Teknik Informatika</td>
                        <td>UNISSULA</td>
                        <td>081542637283</td> -->
                        <td class="action">
                            <a href="crud/hapus/<?= $a['nim'] ?>"><button class="btn-delete" onclick="return confirm('Are you sure to delete nim <?= $a['nim'] ?> ?')">Delete</button></a>
                            <a href="/crud/edit/<?= $a['nim']  ?>"><button class="btn-update">Update</button></a>
                        </td>
                    </tr>
            <?php }
            } ?>
        </table>
    </div>
</main>

<?= $this->endSection() ?>