<?php
if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $prodi = $_POST['Prodi'];
    $skills = $_POST['skill'];
    $domisili = $_POST['domisili'];


    echo "NIM: $nim";
    echo "<br> Nama: $nama";
    echo "<br> Jenis Kelamin: $gender";
    echo "<br> Program Studi: $prodi";
    echo "<br> Skill Prigramming: ";
    foreach ($skills as $skill) {
        echo $skill . ", ";
    }
    echo "<br> Tempat Domisili: $domisili";
}
