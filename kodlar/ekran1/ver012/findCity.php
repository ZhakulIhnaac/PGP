<?php $countryId=intval($_GET['country']);
$stateId=intval($_GET['state']);

include '../../config_pdo/ver002/config.php';

$query= $pdo->prepare("SELECT musteri_tipi3_id,musteri_tipi3_adi FROM musteri_tipi3 WHERE musteri_tipi1_id='$countryId' AND musteri_tipi2_id='$stateId'");
$query->execute();

?>
<select name="city" id="city">
<option></option>
<?php while($row=$query->fetch()) 
{
echo "<option value='".$row['musteri_tipi3_id']."'>    ".$row['musteri_tipi3_adi']."  </option>";
} 
?>
</select>
