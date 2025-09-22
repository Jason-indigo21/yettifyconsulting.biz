<?php
switch ($_REQUEST['page']) {

	case 'corporate-profile':
		include('views/corporate-profile.php');
		break;
	case 'faqs':
		include('views/faqs.php');
		break;
	case 'industries':
		include('views/industries.php');
		break;
	case 'specialty-areas':
		include('views/specialty-areas.php');
		break;
	case 'market-experience':
		include('views/market-experience.php');
		break;
	case 'key-technologies':
		include('views/key-technologies.php');
		break;
	case 'lets-talk':
		include('views/lets-talk.php');
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
