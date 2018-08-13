<?php if (!defined('BASEPATH')) 	exit('Hacking Attempt: Get out of the system ..!');


// Read more function
function read_more($string, $wordsreturned) {
	/*  Returns the first $wordsreturned out of $string.  If string
	  contains more words than $wordsreturned, the entire string
	  is returned. */

	$string = strip_tags($string); // Remove html tag
	$retval = $string; //	Just in case of a problem
	$array = explode(" ", $string);
	/*  Already short enough, return the whole thing */
	if (count($array) <= $wordsreturned) {
		$retval = $string;
	}
	/*  Need to chop of some words */ else {
		array_splice($array, $wordsreturned);
		$retval = implode(" ", $array) . " ...";
	}
	return $retval;
}
function slug($str = NULL) {
	$url = url_title($str, 'dash', TRUE);
	if ($url == '')
		return str_replace(' ', '-', $str);
	else
		return $url;
}

//echo read_more('word' , 'number');

