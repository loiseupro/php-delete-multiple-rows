<?php
/* Delete */
if(isset($_POST['to_delete']) AND is_array($_POST['to_delete']) AND count($_POST['to_delete'])>0){
	$to_delete_msg = '';
	foreach($products as $pos => $product){
		if(in_array($product['id'], $_POST['to_delete'])){
			$to_delete_msg .= '<div class="alert alert-info"> Deleting #'.$product["id"].' with name ['.$product["name"].']</div>';
			unset($products[$pos]);
		}
	}
}
?>