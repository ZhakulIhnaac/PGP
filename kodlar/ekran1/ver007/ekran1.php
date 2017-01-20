<!DOCTYPE html> 
<html>
<head>
        
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
<script language="javascript" type="text/javascript" src="../../getxmlhttp/getxmlhttp.js"></script>    

<script LANGUAGE="JavaScript" TYPE="text/javascript">    

function goster(id){
    var divObject=document.getElementById(id);
    divObject.style.display="block";
	}	
    
function gizle(id){
		var divObject=document.getElementById(id);
		divObject.style.display="none";
	}    
    
</script>    
    
<style>

#tuzel_kisilik_alani {
    display: none;
}
    
#sahis_alani{
    display: none;
}

</style>    

<?php    
include '../../config_pdo/ver002/config.php';
include '../../url_degiskenleri/url_degiskenleri.php' ;
include "$header";
?>    
    
<link rel="stylesheet" type="text/css" href="<?=$css_dosyasi?>">
        
</head>
<body>



<?php    
$query= $pdo->prepare("SELECT musteri_tipi1_id,musteri_tipi1_adi FROM musteri_tipi1");
$query -> execute();
$result = $query->fetch();

?>          
    
<a href="<?=$ekran3?>">Müşterileri Listele</a>    
    
<form method="get" action="<?=$ekran2?>" name="form1">

<table>

<tr>
<td>Müşteri Tipi1 Seçin:</td>
<td>

<select required name="country" onChange="getState(this.value)">
<option value="">Müşteri Tipi1 Seçin</option>        

<?php  while($row=$query->fetch()) 
{ 
echo "<option value= '".$row['musteri_tipi1_id']."' >'".$row['musteri_tipi1_adi']."' </option>";
} ?>

</select></td>  
</tr>   
    
<tr style="">
    <td>Müşteri Tipi2 Seçin:</td>
    <td><div id="statediv"><select name="state">
	<option>Önce Müşteri Tipi1 Seçin</option>
    </select></div></td>    
</tr>
    
<tr>
    <td>Müşteri Tipi3 Seçin:</td>
    <td><div id="citydiv"><select name="city">
	<option>Önce Müşteri Tipi2 Seçin</option>
    </select></div></td>
</tr>
    
   
    
</table>    

    
    
<div id="tuzel_kisilik_alani">   
    
<table>    
    
<tr>
    <td>Kurumun Ünvanı:</td><td><input type="text" name="kurum_adi"> </td>        
</tr>    
    
<tr>
    <td>Kurumun Vergi Numarası:</td><td><input type="text" name="vergi_no"> </td>        
</tr>
    
<tr>
    <td>Kurumun Vergi Dairesi:</td><td><input type="text"> </td>        
</tr>
    
<tr>
    <td>Kurumun Adresi:</td><td><input type="text"> </td>        
</tr>
    
<tr>
    <td>Kurumun İli:</td><td><input type="text"> </td>        
</tr>    
    
<tr>
    <td>Kurumun İlçesi:</td><td><input type="text"> </td>        
</tr>        
    
<tr>
    <td>Telefon No:</td><td><input type="text"> </td>        
</tr>        

<tr>
    <td>Eposta Adresi:</td><td><input type="text"> </td>        
</tr>    
    
<tr>
    <td>Web Adresi:</td><td><input type="text"> </td>        
</tr>            

<tr>
    <td>Faaliyet Kodu:</td><td><input type="text"> </td>        
</tr>        
    
<tr>
    <td>Faaliyet Açıklaması:</td><td><input type="text"> </td>        
</tr>        
    
</table>
        
</div>
    
<div id="sahis_alani">

<table>    
    
<tr>
    <td>Adı:</td><td><input type="text" name="musteri_adi"> </td>    
</tr>    
    
<tr>
    <td>Soyadı:</td><td><input type="text" name="musteri_soyadi"> </td>    
</tr>        
    
<tr>
    <td>TC NO:</td><td><input type="text" name="TCKNO"> </td>    
</tr>        
    
<tr>
    <td>Vergi Numarası:</td><td><input type="text" name="vergi_no"> </td>        
</tr>
    
<tr>
    <td>Vergi Dairesi:</td><td><input type="text" name="vergi_dairesi"> </td>        
</tr>
    
<tr>
    <td>Adresi:</td><td><input type="text" name="musteri_adresi"> </td>        
</tr>
    
<tr>
    <td>İli:</td><td><input type="text" name="musteri_adres_ili"> </td>        
</tr>    
    
<tr>
    <td>İlçesi:</td><td><input type="text" name="musteri_adres_ilcesi"> </td>        
</tr>        
    
<tr>
    <td>Telefon No:</td><td><input type="text" name="musteri_telefon_no"> </td>        
</tr>        

<tr>
    <td>Eposta Adresi:</td><td><input type="text" name="musteri_eposta_adresi"> </td>        
</tr>    
    
<tr>
    <td>Web Adresi:</td><td><input type="text" name="musteri_web_adresi"> </td>        
</tr>            

<tr>
    <td>Faaliyet Kodu:</td><td><input type="text" name="musteri_faaliyet_kodu"> </td>        
</tr>        
    
<tr>
    <td>Faaliyet Açıklaması:</td><td><input type="text" name="musteri_faaliyet_aciklamasi"> </td>        
</tr>         

</table>    
    
</div>    
 
<table>    
<tr>    
<td>    <input type="button" value="tuzel_kisilik_goster" onclick="gizle('sahis_alani');goster('tuzel_kisilik_alani')"> </td>
<td>    <input type="button" value="sahis_goster" onclick="gizle('tuzel_kisilik_alani');goster('sahis_alani')">   </td>    
</table>        

<table>    
<tr>    
<td><input type="submit" value="Gönder" style="width:100px ; height:25px"/>  </td>    

<td><a href= >  <input type="button" value="İptal" style="width:100px ; height:25px"></a></td>
    
</form>
</tr>
    
  
</table>    
    
    
<?php include "$footer";    ?>    
</body>

</html>
