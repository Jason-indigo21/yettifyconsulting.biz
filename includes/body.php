<?php
switch ($_REQUEST['page']) {

	case 'about-us':
		include('views/about-us.php');
		break;
	case 'faqs':
		include('views/faqs.php');
		break;
	case 'industries':
		include('views/industries.php');
		break;
	case 'services':
		include('views/services.php');
		break;
	case 'contact-us':
		include('views/contact-us.php');
		break;
	case 'privacy-policy':
		include('views/privacy-policy.php');
		break;
	case 'cookies-policy':
		include('views/cookies-policy.php');
		break;
	default:
		include('views/home.php');
		break;
}
?>