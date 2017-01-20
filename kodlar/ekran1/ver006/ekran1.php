<!DOCTYPE html> 
<html>
<head>
        
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
<script language="javascript" type="text/javascript" src="../../getxmlhttp/getxmlhttp.js"></script>    
    
</head>
<body>

<?php    
include '../../config_pdo/ver002/config.php';
include '../../url_degiskenleri/url_degiskenleri.php' ;
?>

<?php    
$query= $pdo->prepare("SELECT musteri_tipi1_id,musteri_tipi1_adi FROM musteri_tipi1");
$query -> execute();
$result = $query->fetch();

?>          
    
<form method="get" action="" name="form1">

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
     
<tr>
    <td>Müşterinin Adı:</td><td><input type="text"> </td>    
</tr>
    
<tr>
    <td>Kurumun Ünvanı:</td><td><input type="text"> </td>        
</tr>    
    
<tr>
    <td>Kurumun Adı:</td><td><input type="text"> </td>        
</tr>                
    
<tr>
    <td>Kurumun Vergi Numarası:</td><td><input type="text"> </td>        
</tr>        
    
    
</table>
        

<table>    
<tr>    
<td><input type="submit" value="Gönder" style="width:100px ; height:25px"/>  </td>    

<td><a href= >  <input type="button" value="İptal" style="width:100px ; height:25px"></a></td>
    
</form>

</tr>
</table>    
    
    
    
</body>
</html>
