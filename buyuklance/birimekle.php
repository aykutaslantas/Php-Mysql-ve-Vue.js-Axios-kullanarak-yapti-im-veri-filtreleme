<?php
if($_POST){
    include "baglanti.php";
    $birim=$_POST["birim"];
    $eklesorgu=$baglan->prepare("insert into birim set birimadi=:birimadi");
    $ekle=$eklesorgu->execute([

        "birimadi"=>$birim
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