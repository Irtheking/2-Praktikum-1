<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 1</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1>Form Nilai Siswa</h1>
<form class="form-horizontal p-5 shadow" style="background-color:#f1f2f6;" method="GET" action="">
    
    Nama : <input type="text" name="nama" value="" size="30"/>
    <br/>
    Mata Kuliah :
    <select name="matkul">
    <option value="DDP">Dasar-Dasar Pemrograman</option>
    <option value="BDI">Basis Data I</option>
    <option value="WEB1">Pemrograman Web</option>
    </select>
    <br/>
    Nilai UTS : <input type="text" name="nilai_uts" value=""size="6"/>
    <br/>
    Nilai UAS : <input type="text" name="nilai_uas" value=""size="6"/>
    <br/>
    Nilai Tugas/Praktikum : <input type="text" name="nilai_tugas"value="" size="6"/>
    <br/>
    
    <input class="btn btn-primary" type="submit" value="Simpan" name="proses"/>
    </form>
</div>
<?php
$proses= $_GET['proses'];
$nama_siswa = $_GET['nama'];
$mata_kuliah = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];
echo 'Proses : '.$proses;
echo '<br/>Nama : '.$nama_siswa;
echo '<br/>Mata Kuliah : '.$mata_kuliah;
echo '<br/>Nilai UTS : '.$nilai_uts;
echo '<br/>Nilai UAS : '.$nilai_uas;
echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
?>

<?php
$ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
$ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
$ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];

$ar_nilai = [$ns1, $ns2 , $ns3, $ns4];

?>

<div class="container"
    <h3>Daftar Nilai Siswa</h3>
    <table border="1" width="100%">
    <thead>
    <tr>
    <th>No</th><th>NIM</th><th>UTS</th>
    <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
    </tr>
    </thead>
    <tbody>
    
    <?php
    $nomor = 1;
    foreach($ar_nilai as $ns){
    echo '<tr><td>'.$nomor.'</td>';
    echo '<td>'.$ns['nim'].'</td>';
    echo '<td>'.$ns['uts'].'</td>';
    echo '<td>'.$ns['uas'].'</td>';
    echo '<td>'.$ns['tugas'].'</td>';
    $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
    echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
    echo '<tr/>';
    $nomor++;
    }
    ?>
    </tbody>
    </table>
 </div>

</body>
</html>