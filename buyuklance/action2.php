<?php
if($_POST){
    include "baglanti.php";

    $aciklama=$_POST["aciklama"];
    $hesap=$_POST["hesap"];
    $birim=$_POST["birim"];
    $uye=$_POST["uye"];
    $kutu1=$_POST["kutu1"];
    $kutu2=$_POST["kutu2"];
    $kutu3=$_POST["kutu3"];

    if($_POST["kurallar"]){
        $sorgu2=$baglan->prepare("insert into aramakriterleri set uyegrupadi=:uyegrupadi, hesapadi=:hesapadi, birimadi=:birimadi, aciklama=:aciklama, hesapmi=:hesapmi, birimmi=:birimmi, uyegrupmu=:uyegrupmu ");
        $guncelle2=$sorgu2->execute([
            "hesapadi"=> $hesap,
            "uyegrupadi"=>$uye,
            "birimadi"=>$birim,
            "aciklama"=>$aciklama,
            "hesapmi"=>$kutu1,
            "birimmi"=>$kutu2,
            "uyegrupmu"=>$kutu3
        ]);
    }
    


    
    $sorgu=$baglan->prepare("update anatablo set grupuye=:grupuye, hesap=:hesap, birim=:birim where aciklama like '%".$aciklama."%' ");
    $guncelle=$sorgu->execute([
        "hesap"=> $hesap,
        "grupuye"=>$uye,
        "birim"=>$birim,
    ]);
    if($guncelle)
    {
        header("location:index.php");

    }
    else
    {
        echo "Beklenmedik Bir Hata Oluştu";
    }

 
  
    

}
?>