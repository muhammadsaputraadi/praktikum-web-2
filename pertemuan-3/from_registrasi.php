<?php
$majors = [' sistem informasi', 'Teknik Informatika', 'Bianis Dizital'];
$skills = [
    'HTML' => 10,
    'CSS' => 10,
    'JavaScript' => 20,
    'RWD Bootstrap' => 30,
    'PHP' => 30,
    'Python' => 30,
    'Java' => 50,
];
$domiciles = ['Jakarta', 'Depok', 'Bogor', 'Tangerang', 'Bekasi', 'Lainnya'];
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Registrasi</title>
</head>

<body>
    <div class="container">
        <h2>From Registrasi IT Club Data Science</h2>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <form method="POST" action="proses_registrasi.php">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label>
                <div class="col-8">
                    <input id="nim" name="nim" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="Masukkan Nama" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <input id="Masukkan Nama" name="nama" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="Laki-laki" required="required">
                        <label for="gender_0" class="custom-control-label">Laki-laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="perempuan" required="required">
                        <label for="gender_1" class="custom-control-label">perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="Prodi" class="col-4 col-form-label">Program Studi</label>
                <div class="col-8">
                    <select id="Prodi" name="Prodi" class="custom-select" required="required">
                        <?php foreach ($majors as $major) : ?>
                            <option value="<?php echo $major ?>"><?php echo $major ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Skill Programming</label>
                <div class="col-8">
                    <?php foreach ($skills as $key => $value) : ?>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="<?php echo $key ?>" type="checkbox" class="custom-control-input" value="<?php echo $key ?>">
                            <label for="<?php echo $key ?>" class="custom-control-label"><?php echo $key ?></label>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="domisili" class="col-4 col-form-label">Tempat</label>
                <div class="col-8">
                    <select id="domisili" name="domisili" class="custom-select" required="required">
                        <?php foreach ($domiciles as $domicile) : ?>
                            <option value="<? $domicile ?>"><?= $domicile ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>