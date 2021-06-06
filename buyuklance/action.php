<?php


$connect = new PDO("mysql:host=localhost; dbname=buyuklance1", "root", "");


$received_data = json_decode(file_get_contents("php://input"));

$data = array();

if($received_data->deneme==false && $received_data->deneme2==false&& $received_data->deneme3==false)
{
	$sorgu = "
	SELECT * FROM anatablo 
	WHERE aciklama LIKE '%".$received_data->sorgu."%' ORDER BY id DESC";
}


if($received_data->deneme==true && $received_data->deneme2==false)
{
	$sorgu = "
	SELECT * FROM anatablo 
	WHERE aciklama LIKE '%".$received_data->sorgu."%' AND hesap=' ' ORDER BY id DESC";
}

if($received_data->deneme==true && $received_data->deneme2==true)
{
	$sorgu = "
	SELECT * FROM anatablo 
	WHERE aciklama LIKE '%".$received_data->sorgu."%' AND hesap=' ' AND grupuye=' ' ORDER BY id DESC";
}

if($received_data->deneme==false && $received_data->deneme2==true)
{
	$sorgu = "
	SELECT * FROM anatablo 
	WHERE aciklama LIKE '%".$received_data->sorgu."%' AND grupuye=' ' ORDER BY id DESC";
}

if($received_data->deneme3==true)
{
	$sorgu = "
	SELECT * FROM anatablo 
	WHERE aciklama LIKE '%".$received_data->sorgu."%' AND birim=' ' ORDER BY id DESC";
}
if($received_data->deneme==true && $received_data->deneme2==true && $received_data->deneme3==true)
{
	$sorgu = "
	SELECT * FROM anatablo 
	WHERE aciklama LIKE '%".$received_data->sorgu."%' AND birim=' ' AND grupuye=' ' AND hesap=' ' ORDER BY id DESC";
}
if($received_data->deneme==false && $received_data->deneme2==true && $received_data->deneme3==true)
{
	$sorgu = "
	SELECT * FROM anatablo 
	WHERE aciklama LIKE '%".$received_data->sorgu."%' AND birim=' ' AND grupuye=' ' ORDER BY id DESC";
}
if($received_data->deneme==true && $received_data->deneme2==false && $received_data->deneme3==true)
{
	$sorgu = "
	SELECT * FROM anatablo 
	WHERE aciklama LIKE '%".$received_data->sorgu."%' AND birim=' ' AND hesap=' ' ORDER BY id DESC";
}


$statement = $connect->prepare($sorgu);


$statement->execute();

while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	$data[] = $row;
}

echo json_encode($data);



?>