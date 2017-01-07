<?php
	class controllo{

		//Controllo mail
		public function mailvalida($mail){
			if(!filter_var($mail, FILTER_VALIDATE_MAIL)){
				return false;
			}
			else{
				return true;
			}
		}
	}
?>