<?php

function getPlanClass($id)
{
	if($id == 1){
		return 'primary';
	}elseif($id == 2){
		return 'warning';
	}elseif($id == 3){
		return 'success';
	}elseif($id == 4){
		return 'danger';
	}

	return 'primary';
}

function getPlanSpace($id)
{
	if($id == 1){
		return 'primary';
	}elseif($id == 2){
		return 'warning';
	}elseif($id == 3){
		return 'success';
	}elseif($id == 4){
		return 'danger';
	}
}

if(!function_exists('string_exists'))
{
	function string_exists($string, $array)
	{
		foreach ($array as $url) {
		    if (strpos($string, $url) !== FALSE) {
		        return true;
		    }
		}
		return false;
	}
}

function is_valid_domain_name($domain_name)
{
    return (preg_match("/^([a-z\d](-*[a-z\d])*)(\.([a-z\d](-*[a-z\d])*))*$/i", $domain_name) //valid chars check
            && preg_match("/^.{1,253}$/", $domain_name) //overall length check
            && preg_match("/^[^\.]{1,63}(\.[^\.]{1,63})*$/", $domain_name)   ); //length of each label
}