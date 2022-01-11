<html>
<head>
    <title>Pertemuan 4</title>
</head>
<body>
    <h1>Membuat Array</h1>
    <?php
    $nilai= array(1,2,3,4,5.50);
    var_dump($nilai);

    echo"<br>";
    echo($nilai[4]);

    echo"<br>";
    $ATK = ["pulpen","pensil","penghapus","penggaris"];
    var_dump($ATK);
    echo"<br>";
    echo "$ATK[3]";

    echo"<br>";
    // mengganti isi value
    $ATK[2] = "tipex";
    var_dump($ATK);
    echo"<br>";

    // menambahkan value
    $ATK[] = "pengserut";
    var_dump($ATK);
    echo"<br>";

    // menghapus salah satu value
    unset($ATK[2]);
    var_dump($ATK);
    echo"<br>";

    // menghitung total array
    echo"<br>";
    var_dump(count($ATK));

    ?>
<hr>
<h1>Map dengan array</h1>
<?php

$angga = array(
             "id" => "yoga",
             "nama" => "angga prayoga",
             "umur" => 20,
             "alamat" => [
                 "kota" => "Tangerang",
                 "prov" => "Banten"
             ]      
                   );
var_dump($angga);
echo"<br>";
$riki= array(
                "id" => "pratama",
                "nama" => "riki pratama",
                "umur" => 20,
                "alamat" => [
                    "kota" => "Tangerang",
                    "prov" => "Banten"
                ]
                );
var_dump($riki);
echo"<br>";

echo("nama id : " . $angga["id"]);
echo"<br>";
echo("nama lengkap : " . $angga["nama"]);
echo"<br>";
echo("umur : " . $angga["umur"]);
echo"<br>";

echo("nama id : " . $riki["id"]);
echo"<br>";
echo("nama lengkap : " . $riki["nama"]);
echo"<br>";
echo("umur : " . $riki["umur"]);
echo"<br>";

?>

<hr>
<h1>Operator Matematika</h1>

<?php
$tambah = 4000 + 50000;
$kurang = 50000 - 1000;
$kali = 280*100;
$bagi = 6000 / 20;
$modular = 800 % 3;
$pangkat = 209**2;
echo "tambah : " . $tambah . "<br>";
echo "kurang : " . $kurang . "<br>";
echo "kali : " . $kali . "<br>";
echo "bagi : " . $bagi . "<br>";
echo "modular : " . $modular . "<br>";
echo "pangkat : " . $pangkat . "<br>";
?>

<hr>
<h2>Increment</h2>
<?php
$a = 95;
$a++;
$a--;
$a--;
$a--;
$a--;
$a--;
$a--;
echo($a);


?>
<hr>
    <h1> Menampilkan Isi Array Dengan Perulangan </h1>
    <?php
        $makanan = ["Mie ayam", "Nasi bakar", "Bakpau", "Ayam bakar", "Soto"];

        for ($i=0; $i < count($makanan); $i++) { 
            echo $makanan[$i]."<br>";
        }
        echo "<br>";
        $minuman = ["Teh hangat", "Jus", "Wedang jahe", "Cincau"];

        foreach ($minuman as $minuman) {
            echo $minuman."<br>";
        }
    ?>
<hr>
    <h1> Array Asosiatif </h1>
    <?php
    // membuat array asosiatif
    $biodata = [
        "Nama" => "Angga Prayoga", 
        "Umur" => "20 Tahun", 
        "Alamat" => "Nuansa Sukatani Kab Tangerang", 
        "TTL" => "Tangerang, 22-06-2001", 
    ];
    
    //mencetak isi array asosiatif
    echo "<h2>Biodata</h2>";
    echo "<p>Nama: ".$biodata["Nama"]."</br>";
    echo "<p>Umur: ".$biodata["Umur"]."</br>";
    echo "<p>Alamat: ".$biodata["Alamat"]."</br>";
    echo "<p>TTL: ".$biodata["TTL"]."</br>";
    ?>
<hr>
    <h1> Array Multi Dimensi </h1>
    <?php
    // membuat array 2 dimensi yang berisi array asosiatif
     $sahabat = [
         [
             "Nama" => "Rizky",
             "Umur" => "21 Tahun"
         ],
         [
            "Nama" => "Rama",
            "Umur" => "20 Tahun"
        ],
        [
            "Nama" => "Putri",
            "Umur" => "20 Tahun"
        ],
        [
            "Nama" => "Putra",
            "Umur" => "20 Tahun"
        ],

     ];
     echo "<br>";

     // menampilkan array
     foreach ($sahabat as $sahabat) {
         echo "<h2>".$sahabat["Nama"]."</h2>";
         echo "<p>".$sahabat["Umur"]."</p>";
         echo "<hr>";
     }

?>




</body>
</html>

