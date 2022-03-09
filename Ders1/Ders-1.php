<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bugra</title>
</head>
<body>
    <?php
     /* -- Html yorum satırı -->php_check_syntax
     (Çoklu satır kullanılabilir) Kısayol: Shift+ Alt+ a
     */
      
     // Tek satır açıklama için kullanılır.

     /* Kullanılan Komut:
      echo: Ekrana yazdırma işlemi yapar.
        Komut içerisinde html etiketleri kullanılabilir.
        Çift veya tek tırnakla kullanılabilir.
        Çift tırnak ile kullanıldığında içerisindeki değişkenlerin içeriğimi ekrana yazar.
        Nokta (.) operatörü ile birleştirme işemi yapılabilir. (string birleştirme de denebilir.)
        Ters Slash (\) kaçış karakteridir Özel ifadelerden önce kullanılır.

     */

     echo '<h3>Adnan Menderes Üniversitesi';
     echo '<h4> Aydın Meslek Yüksekokulu</h4>';
     echo 'Bilgisayar Programcılığı ' . 'Aymes';
     
     

    echo '<hr> <h4> Değişken Tanımlama </h4> ';
    echo '<ol>
            <li>Değişken isimleri $ ile başlar. </li>
            <li>Değişken isimleri sayısal ifadelerle başlayamaz. </li>
            <li>Değişken isimlerinde boşluk kullanılamaz. İki kelime birinci_sinif birincisinif birini-sinif örnekleri kullanılabilir </li>
            <li>Değişken isimleri küçük büyük harfe duyarlıdır. \$sayi != \$Sayi </li>
            <li>Değişken ismi, değişkenin taşıdığı içeriği ifade etmeli.  </li>
            <li>Değişken içeriğinde metinsel ifade varsa çift tırnak (\") veya tek tırnak kullanılabilir. </li>
            <li>Değişken sayılsal bir ifade varsa tırnak kullanmak gerekli değildir. </li>
            <li>Değişken içerikleri ekrana echo komutu ile yazdırılabilir. </li>
           
    </ol>';

    echo '<hr> <h4> Değişken Tanımlama örnekleri </h4> ';
    $isim     = 'Ahmet';
    $soyisim  = "Erimez";
    $gsm      = "123123123";
    echo $isim."<br>";
    echo "$isim $soyisim $gsm";

    /* Uygulama:
       Üniversite-MYO-ad-soyad-numara değişkenlerini tanımlayınız.
       Bu değişkenlerin içeriklerini tablo veya form biçiminde ekrana yazdırınız.
    */   
    
    $uni       = "ADÜ";
    $myo       = "Aymes";
    $ad     = "Buğra";
    $soyad  = "Altın";
    $numara    = "05464344931";
    ?>

    <form action=""> 
      <label for= "universite">Üni: </label>
      <input type="text" name="" value="<?php echo $uni;  ?>" id="universite" disabled><br>
    
      <label for= "myo">MYO: </label>
      <input type="text" name="" value="<?php echo $myo;  ?>" id="myo" disabled><br>
      
      <label for= "ad">Ad: </label>
      <input type="text" name="" value="<?php echo $ad;  ?>" id="ad" disabled><br>

      <label for= "soyad">Soyad: </label>
      <input type="text" name="" value="<?php echo $soyad;  ?>" id="soyad" disabled><br>

      <label for= "numara">Numara: </label>
      <input type="text" name="" value="<?php echo $numara;  ?>" id="numara" disabled><br>
    </form>

    <table border="1">
        <tr>
            <td>Üni:</td>
            <td><?php echo $uni;  ?></td>
            
        </tr>
        <tr>
            <td>MYO:</td>
            <td><?php echo $myo;  ?></td>
            
        </tr>
        <tr>
            <td>Ad:</td>
            <td><?php echo $ad;  ?></td>
            
        </tr>
        <tr>
            <td>Soyad:</td>
            <td><?php echo $soyad;  ?></td>
            
        </tr>
        <tr>
            <td>Numara:</td>
            <td><?php echo $numara;  ?></td>
            
        </tr>



    </table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>
</html>
