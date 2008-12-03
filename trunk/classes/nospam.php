<?php 

class nospam {
	
	function formatemail($email, $filterLevel = 'normal')
    {
        $email = strrev($email);
        $email = preg_replace('[@]', '//', $email);
        $email = preg_replace('[\.]', '/', $email);

        if($filterLevel == 'low')
        {
            $email = strrev($email);
        }

        return $email;
    } 
}

?>