<?php
if($_POST){
    include "baglanti.php";
    $uyegrup=$_POST["uyegrup"];
    $eklesorgu=$baglan->prepare("insert into uye set uyeadi=:uyeadi");
    $ekle=$eklesorgu->execute([

        "uyeadi"=>$uyegrup
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