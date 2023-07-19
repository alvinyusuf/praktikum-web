<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<main>
    <div class="title">
        <h1>Tambah Data Mahasiswa</h1>
    </div>
    <div class="form">
        <form action="tambah" method="post">
            <div class="input">
                <label for="nim">NIM</label>
                <input type="text" id="nim" name="nim">
            </div>
            <div class="input">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama">
            </div>
            <div class="input">
                <label for="prodi">Prodi</label>
                <input type="text" id="prodi" name="prodi">
            </div>
            <div class="input">
                <label for="univ">Universitas</label>
                <input type="text" id="univ" name="univ">
            </div>
            <div class="input">
                <label for="no_hp">Nomor Handphone</label>
                <input type="text" id="no_hp" name="no_hp">
            </div>
            <div class="button">
                <button type="submit" value="submit">Submit</button>
            </div>
        </form>
    </div>
</main>

<?= $this->endSection() ?>