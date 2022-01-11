    <html>pertemuan 3</html>
</head>
<body>
    <!-- PHP dalam HTML --> 
    <h1>Selamat Datang, <?php echo "Unisian"; ?></h1>

    <!-- tag HTML dalam php -->

    <?php echo "<h2>di Pembelajaran Web Programing</h2>";
    ?>
<hr> 
    <h2>Tipe data integer</h2> 

    <?php
    echo "Desimal : " ; var_dump(1900); echo "<br>";
    echo "Octa : " ; var_dump(012345); echo "<br>"; 
    echo "Hexadesimal : " ; var_dump(0x1f); echo "<br>";
    echo "Binary : " ; var_dump(0b11111); echo"<br>";
    echo "Underscore di nomor : " ; var_dump(1_500_000);
        echo "<br>";
        
    ?>

    <hr>
    <h2>variable</h2>
<?php
$namadepan = "Angga";
$namablkng = "Prayoga";
$matakuliah = "Web Programing";
$nim = "1904030041";
$hoby = "nonton film";
$Usia = (0x14);
$Alamat = "Nuansa sukatani rajeg";
$Jeniskelamin = "Laki-Laki";
$tempattanggallahir = "tangerang, 22-06-2001";
$Nomerhp = "082211135xxx";
?>

<h4>Identitas diri</h4>
<p>Nama : <?php echo $namadepan ." ". $namablkng; ?></p>
<p>Mata kuliah : <?php echo $matakuliah; ?></p>
<p>NIM : <?php echo $nim ?></p>
<p>Hobi : <?php echo $hoby ?></p>
<p>Umur : <?php echo $Usia ?></p>
<p>Alamat : <?php echo $Alamat ?></p>
<p>Jenis Kelamin : <?php echo $Jeniskelamin ?></p>
<p> Tempat Tanggal Lahir : <?php echo $tempattanggallahir ?></p>
<p>Nomer hp : <?php echo $Nomerhp ?></p>

</body>
</html> 