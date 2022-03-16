<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-2</title>
</head>
<body>
 
<?php
/*Php versiyon ve detay bilgisini gösterir. */
// echo phpinfo();

echo "<h4> Tırnak işaretleri arasındaki farklar </h4>";
$uni = "Adnan Menderes Üniversitesi";

echo "Değişken içeriği; $uni";
echo "<br>";
/* Değişken isminin yazdırılması */
echo "1-Kazandığınız üniversite: \$uni";
echo "<br>";
echo "2-Kazandığınız üniversite:". ' $uni';
echo "<br>";
echo "3-Kazandığınız üniversite: $uni";
echo "<br>";
echo "<br>";
/*Değişken içeriği yazdırılması */
echo "1-Kazandığınız üniversite: $uni";
echo "<br>";
echo "2-Kazandığınız üniveriste: $uni";
echo "<br>";
echo "3-Kazandığınız üniversite:" . $uni;
echo "<br>";
echo '4-Kazandığınız üniversite:' . "$uni";
echo "<br>";

echo "<hr> <h4> Temel matematiksel işlemler</h4>";
echo "<h5> Toplama işlemi </h5>";
$sayi1=10;
$sayi2=20;
echo "<br>";
echo "$sayi1 + $sayi2 = " . ($sayi1 + $sayi2);
echo "<br>";
$sonuc = $sayi1 + $sayi2;
echo "<br>";

echo "<h5> Çıkarma işlemi </h5>";
echo "$sayi1 - $sayi2 = " . ($sayi1 - $sayi2);
echo "<br>";

echo "<h5> Çarpma işlemi </h5>";
echo "<br>";
echo "$sayi1 * $sayi2 = " . ($sayi1 * $sayi2);
echo "<br>";

echo "<h5> Bölme işlemi </h5>";
echo "<br>";
echo "$sayi1 / $sayi2 = " . ($sayi1 / $sayi2);
echo "<br>";


echo "<h5> Üst alma işlemi (pow(x,y))</h5>";
$x = 4;
//$y = (int) "2"; // Dönüşüm işlemi
$y = 2;
echo "Değişken tipi: " . gettype($x) . "<br>";
echo "Değişken tipi: " . gettype($y) . "<br>";
echo "$x<sup>$y</sup>= " . pow($x, $y);

echo "<h5>Karekök alma işlemi (sqrt(x))</h5> ";
$x = 123;
$karekok = sqrt($x);
echo "$x sayısının karekökü: $karekok";

echo "<h5>Mutlak değer işlemi (abs(x))</h5>";
$x = (-12);
$mutlak = abs($x);
echo "|$x| sayısının mutlak değeri: $mutlak";

echo "<h5> Taban değişim işlemi (bse_convert(x,taban1,taban2))</h5>";
echo "27 sayısının 2'lik tabandaki karşılığı: " . base_convert(27, 10, 2);
echo "<br>";

$sayi = 255;
$taban = 10;
$yenitaban = 2;
$sonuc =base_convert($sayi, $taban, $yenitaban);
//(50)10  = (....)2
echo "($sayi) <sub>$taban</sub>= ($sonuc)<sub>($yenitaban)</sub>";

echo "<h5> Mod işlemi (fmod(x,y))</h5>";
$x = 20;
$y = 4;
$mod = fmod($x, $y);
echo "$x mod $y : $mod";
/* girilen sayının tek mi çift mi olduğunu gösterir*/
echo "<br> $x sayısı: " . (fmod($x,2)==0? "Çifttir" : "Tektir");

echo "<h5> Yuvarlama işlemleri (round(x,y))</h5>";

$x=15.315;
$y=15.385;

echo "$x Bir ondalık basamak yuvarlaması sonucu: " . round($x, 1);  
"<br>";
echo "$y Bir ondalık basamak yuvarlaması sonucu: " . round($y, 1);  
"<br>";
echo "$x İki ondalık basamak yuvarlaması sonucu: " . round($x, 2);  
"<br>";
echo "$y İki ondalık basamak yuvarlaması sonucu: " . round($y, 2);  
"<br>";
echo "<h5> Yuvarlama işlemleri (floor(x,))</h5>";
/*en yakın en küçük tam sayıya yuvarlar */
"<br>";
$x = 15.313;
$y = 15.213;
echo "$x Floor yuvarlaması sonucu: " . floor($x) . "<br>";
echo "$y Floor yuvarlaması sonucu: " . floor($y) . "<br>";

echo "<h5> Yuvarlama işlemleri (ceil(x,))</h5>";
/*kendisinden büyük en küçük tam sayıya yuvarlar */
"<br>";
$x = 15.313;
$y = 15.213;
echo "$x Ceil yuvarlaması sonucu: " . ceil($x) . "<br>";
echo "$y Ceil yuvarlaması sonucu: " . ceil($y) . "<br>";

echo "<h5> Rasgele sayı üretme işlemi (rand(x,y))</h5>";
echo "10-100 Arasında Rastgele sayı üretildi: " . rand(10, 100);

echo "<br>";
for ($i =1; $i <= 10; $i++) {
    echo "$i. Sayı:" . rand (0, 100) ."<br>";
}


?>
</body>
</html>