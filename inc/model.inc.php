<?php
function getURL($cod){
	$response = file_get_contents('http://'.DOMAIN.'/'.EXE_FOLDER.'/wxis?IsisScript=get&cod='.$cod);
	if(preg_match('/http(\:\/[a-zA-Z0-9]{1})/', $response))$response = str_replace("http:/","http://",$response);
	return $response;
}
function createURL($v1,$v2){
	return file_get_contents('http://'.DOMAIN.'/'.EXE_FOLDER."/wxis?IsisScript=create&v1=$v1&v2=$v2");
}
function search($cod){
	$tf = file_get_contents('http://'.DOMAIN.'/'.EXE_FOLDER.'/wxis?IsisScript=search&cod='.$cod);
	if($tf==0)$tf=FALSE;
	else if($tf==1)$tf=TRUE;
	return $tf;
}
?>