<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Recaptcha configuration settings
 * 
 * recaptcha_sitekey: Recaptcha site key to use in the widget
 * recaptcha_secretkey: Recaptcha secret key which is used for communicating between your server to Google's
 * lang: Language code, if blank "en" will be used
 * 
 * recaptcha_sitekey and recaptcha_secretkey can be obtained from https://www.google.com/recaptcha/admin/
 * Language code can be obtained from https://developers.google.com/recaptcha/docs/language
 * 
 * @author Damar Riyadi <damar@tahutek.net>
 */

$config['recaptcha_sitekey'] = (ENVIRONMENT === 'production') ? "6Le89gYUAAAAAIENtNE52gZXRZbtLAOA7caL2vQY" : "6Ley8wYUAAAAADpo-eH-XaQQ0dkl6_o0w0B9K0Bq";

$config['recaptcha_secretkey'] = (ENVIRONMENT === 'production') ? "6Le89gYUAAAAACwspqCQaB17kqgaUd1juP7eURwP" : "6Ley8wYUAAAAACz7xcfXCTPSVnNJxIRk7UgNEsUN";
$config['lang'] = "";