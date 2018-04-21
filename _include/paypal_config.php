<?php

  //start session in all pages
  if (session_status() == PHP_SESSION_NONE) { session_start(); } //PHP >= 5.4.0
  //if(session_id() == '') { session_start(); } //uncomment this line if PHP < 5.4.0 and comment out line above

	// sandbox or live
	define('PPL_MODE', 'production');

	if(PPL_MODE=='production'){
		
		define('PPL_API_USER', 'ahstop1112_api1.hotmail.com');
		define('PPL_API_PASSWORD', 'EPN5BMJDQ9J6PMNM');
		define('PPL_API_SIGNATURE', 'AXdeKwPXbrH3PHzCR8DasxzIRIt8AUlIJYWtbqfZQCX5ywXOVQFl-djg');
	}
	else{
		
		define('PPL_API_USER', 'somepaypal_api.yahoo.co.uk');
		define('PPL_API_PASSWORD', '123456789');
		define('PPL_API_SIGNATURE', 'opupouopupo987kkkhkixlksjewNyJ2pEq.Gufar');
	}
	
	define('PPL_LANG', 'EN');
	
	define('PPL_LOGO_IMG', 'http://url/to/site/logo.png');
	
	define('PPL_RETURN_URL', 'http://localhost/paypal/process.php');
	define('PPL_CANCEL_URL', 'http://localhost/paypal/cancel_url.php');

	define('PPL_CURRENCY_CODE', 'EUR');
