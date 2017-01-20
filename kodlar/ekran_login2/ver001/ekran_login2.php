<?php    
    
$kullanici_adi= $_GET['kullanici_adi']; 
$sifre= $_GET['sifre']; 

if($kullanici_adi == 'admin' && $sifre == '1234'){     

header('location: ../../ekran0/ver001/ekran0.php');    

}

else{    
echo 'sifre yanlıs';
}

?>    
