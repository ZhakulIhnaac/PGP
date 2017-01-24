<html>

ekran3 - Bu ekranda müşteriler listelenecek
    
<?php 

include '../../url_degiskenleri/url_degiskenleri.php';
include "$config";    
include '../../config_pdo/ver002/config.php';
include "$header";

echo "not: sil'e bastıktan sonra f5'e tıkladığınızda ilgili kayıtın silindiği gözükecektir.";

$sorgu=$pdo->prepare("SELECT * FROM musteriler");
$sonuc=$sorgu->execute();


?>
<head>
<link rel="stylesheet" type="text/css" href="<?=$css_dosyasi?>">    
<script type="text/javascript" src="../../sorttable_js/sorttable.js"></script>    
<script>

function Deleteqry(id){
window.location="<?=$ekran3?>?del="+id; 
}    
    
</script>    
    
<script type="text/javascript">
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>    

</head>
    
    
<br>    
<a href=<?="$ekran1"?>>Müşteri Ekle</a>    

<br> 
        
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
<table id="mytable" border="1" class="sortable">
<tr>
<td>Sil</td><td>Değiştir</td><td>Müşteri ID</td><td>Müşteri Adı</td><td>Müşteri Soyadı</td><td>TCKNO</td><td>Vergi No</td><td>Vergi Dairesi</td><td>Müşteri Adresi</td><td>Müşteri İli</td>
<td>Müşteri İlçesi</td><td>Müşteri Telefon</td><td>Müşteri Eposta</td><td>Müşteri Web Adresi</td><td>Müşteri Faaliyet Kodu</td><td>Müşteri Faaliyet Açıklaması</td>    
</tr>    
    
<?php

foreach($sonuc=$sorgu->fetchAll() as $deger){

if(isset($_GET['del'])){
    
$sql = "DELETE FROM musteriler WHERE musteri_id = :musteri_id";    
$stmt = $pdo->prepare($sql);
$stmt -> bindParam(':musteri_id', $_GET['del'], PDO::PARAM_INT);
$stmt->execute();    

}
    
?>    
<tr><td>
<input type="button" name="sil" id="sil" value="sil "onclick="Deleteqry(<?=$deger['musteri_id']?>)"/> 
</td>

<td>    
<form name="degistir" action="<?=$ekran4?>">

<input type="hidden" name="musteri_id" value="<?=$deger['musteri_id']?>">
    
<input type="submit" name="degistir_input" value="değiştir">    
        
</form>
</td>
    
<?php    
        
echo '<td>';         
print_r($deger['musteri_id']); 
echo '</td><td>'; 
print_r($deger['musteri_adi']); 
echo '</td><td>';
print_r($deger['musteri_soyadi']); 
echo '</td><td>';
print_r($deger['TCKNO']); 
echo '</td><td>';
print_r($deger['vergi_no']); 
echo '</td><td>';
print_r($deger['vergi_dairesi']); 
echo '</td><td>';
print_r($deger['musteri_adresi']); 
echo '</td><td>';
print_r($deger['musteri_adres_ili']); 
echo '</td><td>';
print_r($deger['musteri_adres_ilcesi']); 
echo '</td><td>';
print_r($deger['musteri_telefon_no']); 
echo '</td><td>';
print_r($deger['musteri_eposta_adresi']); 
echo '</td><td>';
print_r($deger['musteri_web_adresi']);
echo '</td><td>';
print_r($deger['musteri_faaliyet_kodu']);
echo '</td><td>';
print_r($deger['musteri_faaliyet_aciklamasi']); 
echo '</td></tr>';
        
}
    
?>
</table>
    
<?php include "$footer";    ?>
    