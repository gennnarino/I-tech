<?php 
	function chkEmail($email)
	{
		// elimino spazi, "a capo" e altro alle estremità della stringa
		$email = trim($email);

		// se la stringa è vuota sicuramente non è una mail
		if(!$email) {
			return false;
		}

		// controllo che ci sia una sola @ nella stringa
		$num_at = count(explode( '@', $email )) - 1;
		if($num_at != 1) {
			return false;
		}

		// controllo la presenza di ulteriori caratteri "pericolosi":
		if(strpos($email,';') || strpos($email,',') || strpos($email,' ')) {
			return false;
		}

		// la stringa rispetta il formato classico di una mail?
		if(!preg_match( '/^[\w\.\-]+@\w+[\w\.\-]*?\.\w{1,4}$/', $email)) {
			return false;
		}

		return true;
	}


	function codiceFiscale($codf){
    if($codf=='')
		return false;

    if(strlen($codf)!= 16)
		return false;
	/*
    $codf=strtoupper($codf);
    
    if(!preg_match("/[A-Z0-9]+$/", $codf))
		return false;
    $s = 0;
    for($i=1; $i<=13; $i+=2){
		$c=$codf[$i];
		if('0'<=$c and $c<='9')
	    	$s+=ord($c)-ord('0');
		else
	    	$s+=ord($c)-ord('A');
    }
    
    for($i=0; $i<=14; $i+=2){
		$c=$codf[$i];
		switch($c){
	        case '0':  $s += 1;  break;
		    case '1':  $s += 0;  break;
        	case '2':  $s += 5;  break;
		    case '3':  $s += 7;  break;
		    case '4':  $s += 9;  break;
	    	case '5':  $s += 13;  break;
		    case '6':  $s += 15;  break;
		    case '7':  $s += 17;  break;
	    	case '8':  $s += 19;  break;
		    case '9':  $s += 21;  break;
		    case 'A':  $s += 1;  break;
	    	case 'B':  $s += 0;  break;
		    case 'C':  $s += 5;  break;
		    case 'D':  $s += 7;  break;
	    	case 'E':  $s += 9;  break;
		    case 'F':  $s += 13;  break;
		    case 'G':  $s += 15;  break;
	    	case 'H':  $s += 17;  break;
	    	case 'I':  $s += 19;  break;
		    case 'J':  $s += 21;  break;
	    	case 'K':  $s += 2;  break;
		    case 'L':  $s += 4;  break;
		    case 'M':  $s += 18;  break;
	    	case 'N':  $s += 20;  break;
		    case 'O':  $s += 11;  break;
		    case 'P':  $s += 3;  break;
        	case 'Q':  $s += 6;  break;
		    case 'R':  $s += 8;  break;
		    case 'S':  $s += 12;  break;
	    	case 'T':  $s += 14;  break;
		    case 'U':  $s += 16;  break;
		    case 'V':  $s += 10;  break;
	    	case 'W':  $s += 22;  break;
		    case 'X':  $s += 25;  break;
		    case 'Y':  $s += 24;  break;
	    	case 'Z':  $s += 23;  break;
		}
    }
	
    if( chr($s%26+ord('A'))!=$codf[15] )
		return false;
	*/
    return true;
}
?>