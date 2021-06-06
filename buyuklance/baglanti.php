<?php
$host="localhost";
$vtismi="buyuklance1";
$kullaniciadi="root";
$sifre="";

try{

    $baglan=new PDO("mysql:host=$host;dbname=$vtismi","$kullaniciadi","$sifre");

}
catch(PDOException $hata)
{
echo "bir hata oluştu <br><br>" . $hata;
}

?>