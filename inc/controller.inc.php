<?php 
function index() {
    if (! empty($_GET['cod'])) {
        $cod = $_GET['cod'];
        $homepage = getURL($cod);
        if (! empty($homepage))
		   header("Location:$homepage");
        else
            get404();
    } else {
        if (! empty($_GET['action'])) {
            switch ($_GET['action']) {
                case 'new':
                    get200($_GET['action']);
                    break;
				case 'lcl':
					setLcl($_GET['value']);
					header("Location:http://".DOMAIN);
					break;
            }
        } else if (! empty($_POST['action'])) {
            switch ($_POST['action']) {
                case 'save':
                    $code = getCode();
                    createURL($code, $_POST['value']);
                    $_SESSION['code'] = $code;
                    get200($_POST['action']);
                    break;
            }
        } else {
        	get200('index');
        }
    }
}
function getCode() {
    $tf = TRUE;
    while ($tf) {
        $code = randomCode();
        $tf = search($code);
    }
    return $code;
}
function randomCode() {
    $cod = "";
    for ($i = 0; $i < 6; $i++) {
        $cod .= randomChar();
    }
    return $cod;
}
function randomChar() {
    $it = "QWERTYUIOPASDFGHJKLZXCVBNM1234567890";
    $num = mt_rand(0, 35);
    $cr = substr($it, $num, 1);
    return $cr;
}
function setLcl($locale){
	$_SESSION['locale'] = $locale;
}
?>
