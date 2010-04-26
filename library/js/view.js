/**
 * @author wilton de oliveira garcia
 */
$(document).ready(function(){
	setTimeout(__init__, 100);
	$("#input_text").click(function(){
		if(tf){
			this.value = "";
			tf = false;
		}
	});
});