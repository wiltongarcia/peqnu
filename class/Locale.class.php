<?php 
class Locale {
    function Locale($id,$lg) {
  		$this->msg = $this->library[$id][$lg];
    }
	function getMSG($id,$lg){
		return $this->library[$id][$lg];
	}
	var $msg;
    var $library = array(
				404 => array(
					'pt_BR' => "Link Inexistente",
					'en' => "Link not found",
					'es' =>  "Link no existe",
				),
				200 => array(
					'pt_BR' => "Link Criado",
					'en' => "Link Created",
					'es' =>  "Link Creado"
				),
				'input_text' => array(
					'pt_BR' => "Digite aqui e pressione Enter",
					'en' => "Type here and press Enter",
					'es' =>  "Digita aquí y haz clic en Enter"
				),
				'slc_lgg' => array(
					'pt_BR' => "Selecione um idioma",
					'en' => "Select a language",
					'es' =>  "Seleciona un idioma"
				),
				'twitter' => array(
					'pt_BR' => "Envie para o twitter",
					'en' => "Share on twitter",
					'es' =>  "Envia por twitter"
				)
			);
}
?>
