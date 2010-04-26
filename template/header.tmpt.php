<?php
	$locale = new Locale('input_text',$_SESSION['locale']);
    $header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>PEQ.NU</title>
		<script src="library/js/jquery.js"></script>
		<script src="library/js/view.js"></script>
		<script>
			var tf = false;
			function __init__(){
				try{
					var input_text = "'.$locale->msg.'"; 
					var obj = document.getElementById("input_text");
					if(obj.value==""){
						obj.value = input_text;
						tf = true;
					}
				}
				catch(e){} 
			}
		</script>
		 <style>
        	<!--
			@import url("library/css/estilo.css");
        	-->
        </style>
	</head>
	<body>
		<div class="flags">
			<table>
				<tr>
					<td class="flag_rgt"><a href="http://'.DOMAIN.'/">'.SYS_NAME.'</a></td>
					<td>
						<table>
							<tr>
								<td colspan="3">
									<div>'.$locale->getMSG("slc_lgg", $_SESSION['locale']).'</div>
								</td>
							</tr>
							<tr>
								<td>
									<div><a href="lcl/pt_BR" ><img src="images/pt_BR.gif" /></a></div>
								</td>
								<td>
									<div><a href="lcl/es" ><img src="images/es.gif" /></a></div>
								</td>
								<td>
									<div><a href="lcl/en" ><img src="images/en.gif" /></a></div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>
	';
?>