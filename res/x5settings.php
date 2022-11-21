<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'site_id' => '9FC3FFB99143076C75A0ADD321D823E8',
	'url' => 'https://moveleiros.com.br/projetos/modelo03/',
	'homepage_url' => 'https://moveleiros.com.br/projetos/modelo03/index.html',
	'icon' => '',
	'version' => '2022.2.11.0',
	'sitename' => 'Moveleiros - Modelo 3',
	'lang_code' => 'pt-BR',
	'public_folder' => '',
	'salt' => '9jgsivtzez5fjhvj8himoi8o5twggw7p18adl0xh0njqyc9as',
	'common_email_sender_addres' => 'contato@virtuainfo.com.br'
);
/*
|-------------------------------
|	PASSWORD POLICY
|-------------------------------
*/

$imSettings['password_policy'] = array(
	'required_policy' => false,
	'minimum_characters' => '6',
	'include_uppercase' => false,
	'include_numeric' => false,
	'include_special' => false
);
/*
|-------------------------------
|	Captcha
|-------------------------------
*/ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label for=\"8cujdk5d-imCpt\">Palavra de verificação:</label><br />
			<input type=\"text\" id=\"8cujdk5d-imCpt\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";


$imSettings['admin'] = array(
	'icon' => 'admin/images/logo_mnp14fnd.png',
	'notification_public_key' => '345187716177453c',
	'notification_private_key' => '3101e5d8d657545d',
	'enable_manager_notifications' => false,
	'theme' => 'orange',
	'extra-dashboard' => array(),
	'extra-links' => array()
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array();
$ecommerce = Configuration::getCart();
// Setup the coupon data
$couponData = array();
$couponData['products'] = array();
// Setup the cart
$ecommerce->setPublicFolder('');
$ecommerce->setCouponData($couponData);
$ecommerce->setSettings(array(
	'page_url' => 'https://moveleiros.com.br/projetos/modelo03/',
	'force_sender' => false,
	'mail_btn_css' => 'display: inline-block; text-decoration: none; color: rgba(255, 255, 255, 1); background-color: rgba(0, 0, 0, 1); padding: 10px 10px 10px 10px; border-style: solid; border-width: 0px 0px 0px 0px; border-color: rgba(55, 71, 79, 1) rgba(55, 71, 79, 1) rgba(55, 71, 79, 1) rgba(55, 71, 79, 1); border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-left-radius: 3px; border-bottom-right-radius: 3px;',
	'email_opening' => 'Caro Cliente,<br /><br />Obrigado pela sua compra. Lembramos que ainda estamos aguardando seu pagamento.<br /><br />Abaixo encontrará a lista dos produtos comprados, os detalhes sobre fatura e frete e instruções para efetuar o pagamento.',
	'email_closing' => 'Continuamos à sua disposição para maiores informações.<br /><br />Atenciosamente, Equipe de Vendas.',
	'email_payment_opening' => 'Caro Cliente,<br /><br />Obrigado pela sua compra. Confirmamos que recebemos seu pagamento corretamente e que o pedido será processado o mais rápido possível.<br /><br />Abaixo você encontrará a lista dos produtos comprados e os detalhes sobre fatura e frete.',
	'email_payment_closing' => 'Por favor, entre em contato com a gente se precisar de maiores informações.<br /><br />Atenciosamente, equipe de vendas.',
	'email_digital_shipment_opening' => 'Caro cliente,<br />Obrigado por sua compra.<br />Em anexo encontrará a lista de links de download para os produtos que encomendou:',
	'email_digital_shipment_closing' => 'Por favor, entre em contato com a gente se precisar de maiores informações.<br /><br />Atenciosamente, equipe de vendas.',
	'email_physical_shipment_opening' => 'Prezado cliente,<br />Obrigado por sua compra. Confirmamos que o pedido foi processado e enviado corretamente.<br />Segue em anexo a lista dos produtos encomendados:',
	'email_physical_shipment_closing' => 'Por favor, entre em contato com a gente se precisar de maiores informações.<br /><br />Atenciosamente, equipe de vendas.',
	'sendEmailBeforePayment' => false,
	'sendEmailAfterPayment' => false,
	'useCSV' => false,
	'header_bg_color' => 'rgba(37, 58, 88, 1)',
	'header_text_color' => 'rgba(255, 255, 255, 1)',
	'cell_bg_color' => 'rgba(255, 255, 255, 1)',
	'cell_text_color' => 'rgba(0, 0, 0, 1)',
	'availability_reduction_type' => 1,
	'border_color' => 'rgba(211, 211, 211, 1)',
	'owner_email' => 'example@example.com',
	'vat_type' => 'included',
	'availability_image' => ''
));

$ecommerce->setPriceFormatData(array(
	'decimals' => 2,
	'decimal_sep' => '.',
	'thousands_sep' => '',
	'currency_to_right' => true,
	'currency_separator' => ' ',
	'show_zero_as' => '0',
	'currency_symbol' => 'R$',
	'currency_code' => 'BRL',
	'currency_name' => 'Brazil, Reais',
));

$ecommerce->setDigitalProductsData(array());
$ecommerce->setProductsData(array());
$ecommerce->setSlugToProductIdMap(array());
$ecommerce->setCategoriesData(array(
	'0yiyy3at' => array(
		'id' => '0yiyy3at',
		'name' => 'Nova Categoria',
		'containsProductsWithProductPage' => false,
		'products' => array(),
		'categories' => array()
	)
));
$ecommerce->setCommentsData(array(
	'enabled' => false,
	'type' => "websitex5",
	'db' => '',
	'table' => 'w5_trob2ks0_products_comments',
	'prefix' => 'x5productPage_',
	'comment_type' => "commentandstars"
));
$ecommerce->setPaymentData(array(
	'8dkejfu5' => array(
		'id' => '8dkejfu5',
		'name' => 'Depósito em conta',
		'description' => 'Pagar depois por depósito ou DOC.',
		'email_text' => 'Aqui estão os dados necessários para efetuar o pagamento por Transferência Bancária:

XXX YYY ZZZ

Note que uma vez que o pagamente seja efetuado é necessário enviar uma cópia do comprovante junto com o Número do Pedido.',
		'enableAfterPaymentEmail' => false
	)));
$ecommerce->setShippingData(array(
	'j48dn4la' => array(
		'id' => 'j48dn4la',
		'name' => 'Correios',
		'description' => 'As mercadorias serão entregues em 3-5 dias úteis.',
		'email_text' => 'Enviado por Correios.\\nAs mercadorias serão entregues em 3-5 dias úteis.',
		'enable_tracking' => false,
		'tracking_url' => ''
	),
	'hdj47dut' => array(
		'id' => 'hdj47dut',
		'name' => 'Sedex',
		'description' => 'As mercadorias serão entregues em 1-2 dias úteis.',
		'email_text' => 'Enviado por Sedex.\\nAs mercadorias serão entregues em 1-2 dias úteis.',
		'enable_tracking' => false,
		'tracking_url' => ''
	)));

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array();

/*
|-------------------------------------------------------------------------------------------
|	Dynamic Objects SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['dynamicobjects'] = array(	'template' => array(
),
	'pages' => array(

	));


/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'phpmailer';
$ImMailer->exposeWsx5 = true;
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '<meta name="generator" content="Incomedia WebSite X5 Professional 2022.2.11 - www.websitex5.com">' . "\n" . '</head>' . "\n" . '<body bgcolor="#37474F" style="background-color: #37474F;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px;">' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; padding: 10px; font: normal normal normal 12pt \'Poppins\'; color: #000000; background-color: #FFFFFF; text-decoration: none; text-align: left; width: 700px; border-style: solid; border-color: #000000; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; background-color: #FFFFFF" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '</table>' . "\n" . '<table width="100%"><tr><td id="imEmailFooter" style="font: normal normal normal 9pt \'Poppins\'; color: #FFFFFF; background-color: transparent; text-decoration: none; text-align: center;  padding: 10px; margin-top: 5px;background-color: transparent">' . "\n\t\t" . 'Esta mensagem de email contém informações destinadas exclusivamente ao destinatário indicado acima.<br>Se você recebeu esta mensagem por engano, por favor notifique o remetente imediatamente e destrua o que foi recebido sem fazer uma cópia.' . "\n\t" . '</td></tr></table>' . "\n\t" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = '#FFFFFF';
$ImMailer->bodyBackgroundEven = '#FFFFFF';
$ImMailer->bodyBackgroundOdd = '#F0F0F0';
$ImMailer->bodyBackgroundBorder = '#CDCDCD';
$ImMailer->bodyTextColorOdd = '#000000';
$ImMailer->bodySeparatorBorderColor = '#000000';
$ImMailer->emailBackground = '#37474F';
$ImMailer->emailContentStyle = 'font: normal normal normal 12pt \'Poppins\'; color: #000000; background-color: #FFFFFF; text-decoration: none; text-align: left; ';
$ImMailer->emailContentFontFamily = 'font-family: Poppins;';

// End of file x5settings.php