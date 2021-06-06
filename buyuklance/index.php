<?php include "baglanti.php"?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
		<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></head>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	
		
    <style>
		.arama{  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 3px 18px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;

  cursor: pointer;}
.modal1 {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 3px 18px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;

  cursor: pointer;
}
.modal2 {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 3px 18px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
margin-top: 3px;
  cursor: pointer;
}
.modal4 {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 3px 18px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;

	right: 2px;
  cursor: pointer;
}
table {
	width:100%;
}

table, td, tr, th {
	border:0.1px solid black;
	border-collapse: collapse;
	text-align: left;
}

td, tr, th {
	padding:0.5em;
}

th {
	background:#eee;
	font-weight: bold;
}

@media screen and (max-width:700px) {

	
	table, tr, td {
		padding:0;
		border:1px solid gray;
	}

	table {
		border:none;
	}

	thead {
		display:none;
	}

	tr {
		float: left;
		width: 100%;
		margin-bottom: 2em;
	}

	td {
		float: left;
		width: 100%;
		padding:0.5em;
	}
	.alan1{color: green;}
	.alan2{color:red ;}
	.alan3{color:black ;}
	
*{font-size: 14px;}
	td::before {
		word-wrap: break-word;
		background: #eee;
		border-right:2px solid black;
		width: 20%;
		float:left;
		padding:1em;
		font-weight: bold;
		margin:-1em 1em -1em -1em;
	}
	.modal1{
	top: -145px;
	
		
	}
	.modal2{
		top: -146;
	}
	.modal4{
		top:-115
	}
	.check1{
		left: -140px;
	}
	.check2
	{
		left: -110px;
	}
	.check3
	{
		left:-80px
	}
}

</style>
</head>
<body>
<div class="container" id="aramayeri">
	
<div class="input-group">
<form action="action2.php" method="POST">

<input type="text"  name="kutu1" hidden  :value="secili1">
<input type="text"  name="kutu2" hidden :value="secili2">
<input type="text"  name="kutu3" hidden :value="secili3">
<input type="text" class="form-control" name="aciklama" placeholder="Açıklamalarda Ara" v-model="sorgu" @keyup="verigetir()" ><div style="display: inline; position:relative;left:280px;bottom:30px;"><input  type="checkbox" name="kurallar">Aramayı Kurallara Ekle</div>  
<br> <br>

<input list="brow1" name="hesap"  placeholder="Hesap" required>
<datalist id="brow1">
<?php
 $sorgu = $baglan->prepare("select * from hesap");
 $sorgu->execute();
while($sonuc = $sorgu->fetch()){?>
  <option value="<?php echo $sonuc["hesapadi"]; ?>">
<?php } ?>
</datalist>

  <br>
<input list="brow2" name="birim" placeholder="Birim" required>
<datalist id="brow2">

<?php
 $sorgu2 = $baglan->prepare("select * from birim");
 $sorgu2->execute();
while($sonuc2 = $sorgu2->fetch()){?>
  <option value="<?php echo $sonuc2["birimadi"]; ?>">
  <?php } ?>

</datalist> 

<br>

<input list="brow3" name="uye" placeholder="Üye/Grup" required>
<datalist id="brow3">
<?php
 $sorgu3 = $baglan->prepare("select * from uye");
 $sorgu3->execute();
while($sonuc3 = $sorgu3->fetch()){?>
  <option value="<?php echo $sonuc3["uyeadi"]; ?>">
  <?php } ?>
</datalist>

<br> <br>
<input type="submit" value="Arama Sonuçlarını Topluca Değiştir" class="arama">
</form> 

</div>


<!-- --------- -->
<button type="button" class="modal1"   data-toggle="modal" data-target="#exampleModal3" style="position: relative; left:188px; bottom:160px;">
Hesap Ekle
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="hesapekle.php" method="POST">
		  <input type="text" placeholder="Hesap Adını Giriniz" required name="hesap">
		  <input type="submit" value="Hesap Ekle">
	  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
       
      </div>
    </div>
  </div>
</div>
<br>
<button type="button" class="modal2"  data-toggle="modal" style="position:relative; left:190px; bottom:160px;" data-target="#exampleModal2" >
Birim Ekle
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="birimekle.php" method="POST">
		  <input type="text" placeholder="Birim Adını Giriniz" required name="birim">
		  <input type="submit" value="Birim Ekle">
	  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
       
      </div>
    </div>
  </div>
</div>

<button type="button" class="modal4" style="position:relative;left:86px;bottom: 130px;"  data-toggle="modal"    data-target="#exampleModal4" >
Üye/Grup Ekle
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="uyegrupekle.php" method="POST">
		  <input type="text" placeholder="Üye/Grup Adını Giriniz" required name="uyegrup">
		  <input type="submit" value="Üye/Grup Ekle">
	  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
       
      </div>
    </div>
  </div>
</div>

<div style="display: inline; position:relative;right:50px;" class="check1"><input type="checkbox" v-on:click="deneme=!deneme;kutu1();secili1=!secili1" > Hesap</div><div class="check2" style="position: relative; display:inline; right:20px;"><input type="checkbox" v-on:click="deneme2=!deneme2;kutu2();secili2=!secili2">Grup/Üye</div> <div class="check3" style="display: inline; position:relative;"><input type="checkbox" v-on:click="deneme3=!deneme3;kutu3();secili3=!secili3">Birim</div>  



<table>
    <thead>
      <tr>
        <th>Tarih</th>
        <th>Tutar</th>
        <th>Açıklama</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="satir in tumveri">
        <td class="alan1" >{{satir.tarih}}</td>
        <td class="alan2" >{{satir.tutar}}</td>
        <td class="alan3" >{{satir.aciklama}} </td>
      </tr>
	  <tr v-if="veriyok">
	  <td>veri yok</td>
	  </tr>
	  
	  
     
    </tbody>
</table>


</div>

</body>
</html>

<script>
var uygulama = new Vue ({
	el:'#aramayeri',
	data: {
		
			tumveri:'',
			sorgu:'',
			deneme:false,
			deneme2:false,
			deneme3:false,
			secili1:false,
			secili2:false,
			secili3:false
	
	},
	methods: {
		verigetir:function(){
			axios.post('action.php', {
				sorgu:this.sorgu,deneme:this.deneme,deneme2:this.deneme2,deneme3:this.deneme3
			}).then(function(response){
				if(response.data.length > 0)
				{
					uygulama.tumveri = response.data;
					uygulama.veriyok = false;
					
				}
				else
				{
					uygulama.tumveri = '';
					uygulama.veriyok = true;
				}
			});
		},
		kutu1(){
			
			axios.post('action.php', {
				sorgu:this.sorgu,deneme:this.deneme,deneme2:this.deneme2,deneme3:this.deneme3
			}).then(function(response){
				if(response.data.length > 0)
				{
					uygulama.tumveri = response.data;
					uygulama.veriyok = false;
					
				}
				else
				{
					uygulama.tumveri = '';
					uygulama.veriyok = true;
				}
			});
		},
		kutu2(){
			
			axios.post('action.php', {
				sorgu:this.sorgu,deneme2:this.deneme2,deneme:this.deneme,deneme3:this.deneme3
			}).then(function(response){
				if(response.data.length > 0)
				{
					uygulama.tumveri = response.data;
					uygulama.veriyok = false;
					
				}
				else
				{
					uygulama.tumveri = '';
					uygulama.veriyok = true;
				}
			});
		},
		kutu3(){
			
			axios.post('action.php', {
				sorgu:this.sorgu,deneme2:this.deneme2,deneme:this.deneme,deneme3:this.deneme3
			}).then(function(response){
				if(response.data.length > 0)
				{
					uygulama.tumveri = response.data;
					uygulama.veriyok = false;
					
				}
				else
				{
					uygulama.tumveri = '';
					uygulama.veriyok = true;
				}
			});
		},

	},
	
	created:function(){
		this.verigetir();

	}
});
</script>