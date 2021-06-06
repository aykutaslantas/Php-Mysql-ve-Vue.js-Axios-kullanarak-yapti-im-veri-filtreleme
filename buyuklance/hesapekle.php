<?php
if($_POST){
    include "baglanti.php";
    $hesap=$_POST["hesap"];
    $eklesorgu=$baglan->prepare("insert into hesap set hesapadi=:hesapadi");
    $ekle=$eklesorgu->execute([

        "hesapadi"=>$hesap
    ]);
    if($ekle)
    {
        {
            header("location:index.php");
        }
    }
    else
    {
        echo "hata oluştu";
    }

}
?>