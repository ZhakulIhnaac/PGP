<html>
<head>

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

</head>    
    
<?php $country=intval($_GET['country']);

include '../../config_pdo/ver002/config.php';
    
$query=$pdo->prepare("SELECT musteri_tipi2_id,musteri_tipi2_adi FROM musteri_tipi2 WHERE musteri_tipi1_id='$country'");
$query->execute();

?>
<select required name="state" onchange="goster('musteri_tipi3');goster('citydiv');getCity(<?=$country?>,this.value)">
<option ></option>
<?php while($row=$query->fetch()) 
{ 
echo "<option value= '".$row['musteri_tipi2_id']."'>".$row['musteri_tipi2_adi']."</option>";
} 
?>
</select>

</html>    