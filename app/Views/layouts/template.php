<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="/assets/css/crud.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CRUD</title>
</head>
<body>
    <header>
        <nav>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>Kelompok Praktikum Web</td>
                </tr>
                <tr>
                    <td>Anggota</td>
                    <td>:</td>
                    <td>Dimas, Alvin, Labib, Amar</td>
                </tr>
            </table>
        </nav>
    </header>
    <?= $this->renderSection('content') ?>
</body>
</html>
