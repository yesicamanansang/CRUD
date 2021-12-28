<!DOCTYPE html>
<html>
<head>
    <title>TUGAS CRUD</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<h1 class="text-center">TUGAS CRUD</h1>
<h2 class="text-center">@YESICAMANANSANG</h2>

    <!--Awal Card Form -->
    <div class="card mt=3">
    <div class="card-header bg-primary text-white">
        Form Input Mahasiswa
    </div>
    <div class="card-body">
        <form method="post" action="">
            <div class="form.group">
                <label>Nim</label>
                <input type="text" name="tnim" class="form-control" placeholder="input Nim anda disini!" required>
            </div>
            <div class="form.group">
                <label>Nama</label>
                <input type="text" name="tnama" class="form-control" placeholder="input Nama anda disini!" required>
            </div>
            <div class="form.group">
                <label>Prodi</label>
                <input type="text" name="tprodi" class="form-control" placeholder="input prodi anda disini!" required>
            </div>
            <div class="form.group">
                <label>Program Studi</label>
                <select class="form-control" name="prodi">
                    <option></opsion>
                    <option value="Sistem Informasi">Sistem Informasi </option>
                    <option value="Teknik Penangkapan Ikan">Teknik Penangkapan Ikan </option>
                    <option value="Teknik Pengolahan Hasil Laut">Teknik Pengolahan Hasil Laut </option>
                    <option value="Teknik Budidaya Ikan">Teknik Budidaya Ikan</option>
                </select>
            </div>
        </form>
    </div>
    </div>
    <!--Akhir Card Form -->

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>