<?php
$locale = new Locale('twitter',$_SESSION['locale']);
$view = '
		<div class="form_save">
			<div class="form_msg">'.$_SESSION['loc_msg'].'</div>
			<form>
				<input class="ipt_save" id="link" type="text" name="action" value="http://'.DOMAIN.'/'.$_SESSION['code'].'"/><br/>
				<div class="twitter">
					<a href="http://twitter.com/home?status=http://'.DOMAIN.'/'.$_SESSION['code'].'">
					<center>
					<table>
						<tr>
							<td>
								<img src="images/twitter.png" />
							</td>
							<td style="vertical-align:middle;">
								'.$locale->msg.'
							</td>
						</tr>
					</table>
					</a>
					</center>
				</div>
			</form>
		</div>';
?>
