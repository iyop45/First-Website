<?php
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * Type:     function
 * Name:     random
 * Purpose:  output a random number between $varIn and $varOut:
 *	{random in=$varIn out=$varOut}
 *	If you want to assign the random number to a variable
 *	instead of displaying it, you must write:
 *	{random in=$varIn out=$varOut assign=yourVar}
 *	Where yourVar can be anything. Then you'll get
 *	$yourVar equal to a random number between $varIn and $varOut.
 * Author:   Philippe Morange
 * Modified: 25-03-2003
 * -------------------------------------------------------------
 */
 
function smarty_function_randomString($params, &$smarty)
{
	$length = $params['length'];
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
	if (isset($assign)) {
		$smarty->assign($assign, $randomString);
	}
	else {
		return $randomString;
	}
}
?>