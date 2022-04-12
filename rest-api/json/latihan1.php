<?php

$mahasiswa = [
    "nama" => "Mohamad Bagus Rizky",
    "nim" => "19.11.2711",
    "email" => "mohamad.15@students.amikom.ac.id"
];

//var_dump($mahasiswa);
// $dbh = new PDO('mysql:host=localhost;dbname=bukawarung', 'root', 'root');
// $db = $dbh->prepare('SELECT * FROM tb_admin');
// $db->execute();
// $tb_admin = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;

?>