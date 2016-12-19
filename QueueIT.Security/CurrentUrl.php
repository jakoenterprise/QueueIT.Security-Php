<?php

function currentUrl()
{
	$ssl = isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on";

	$pageURL = 'http';
	if ($ssl) {$pageURL .= "s";}
	$pageURL .= "://";
	if ((!$ssl && $_SERVER["SERVER_PORT"] != "80") || ($ssl && $_SERVER["SERVER_PORT"] != "443"))  {
		$pageURL .= $_SERVER["HTTP_HOST"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}
?>