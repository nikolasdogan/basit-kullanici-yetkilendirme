<?php
function KullaniciYetki($agenttitle,$key){
	$kullaniciyetki = array("YONETICI"=>"YONETICI","ADMIN" => "ADMIN");
	$key = array_search($agenttitle,$kullaniciyetki); // kullaniciyetki array in içinde admin yada yonetici title ını bulup döngüyü sorguluyor 
	return $key; // degişkeni array içindeki elemanımızı atıyor.
}
$test_GET('id' => 20);
$admitableid = 20;
?>

<?php 
if($agenttitle == KullaniciYetki($agenttitle,$key)){
			///////////////////
			goto yonetici;  /*yöneticiyi ileriye atıyor*/
			///////////////////
			}else{
			if(test_GET['id'] != $admitableid){
		echo "yonetici degilsiniz";
	}else{ yonetici:
  //yönetici ise üst ad kontrol döngüsünü direk ileri sarıp else e gönderiyor.
  }

?>
