<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2017.0.2.363
*/

require_once('form_process.php');

$form = array(
	'subject' => 'שליחת A-Master Form',
	'heading' => 'שליחת טופס חדש',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'מסומן',
		'checkbox_unchecked' => 'לא מסומן',
		'submitted_from' => 'הטופס נשלח מאתר אינטרנט: %s',
		'submitted_by' => 'כתובת IP של מבקר: %s',
		'too_many_submissions' => 'בוצעו לאחרונה יותר מדי פעולות שליחה מ-IP זה',
		'failed_to_send_email' => 'שליחת דואר אלקטרוני נכשלה',
		'invalid_reCAPTCHA_private_key' => 'מפתח פרטי לא חוקי של reCAPTCHA.',
		'invalid_reCAPTCHA2_private_key' => 'Invalid reCAPTCHA 2.0 private key.',
		'invalid_reCAPTCHA2_server_response' => 'Invalid reCAPTCHA 2.0 server response.',
		'invalid_field_type' => 'סוג שדה לא ידוע \'%s\'.',
		'invalid_form_config' => 'התצורה של השדה \'%s\' אינה חוקית.',
		'unknown_method' => 'פעולת שירות לא ידועה של בקשת שרת'
	),
	'email' => array(
		'from' => 'defendera@gmail.com',
		'to' => 'defendera@gmail.com'
	),
	'fields' => array(
		'custom_U872' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'שם',
			'required' => true,
			'errors' => array(
				'required' => 'השדה \'שם\' נדרש.'
			)
		),
		'Email' => array(
			'order' => 3,
			'type' => 'email',
			'label' => 'כתובת דואר: אלקטרוני',
			'required' => true,
			'errors' => array(
				'required' => 'השדה \'כתובת דואר: אלקטרוני\' נדרש.',
				'format' => 'השדה \'כתובת דואר: אלקטרוני\' כולל כתובת דואר אלקטרוני לא חוקית.'
			)
		),
		'custom_U917' => array(
			'order' => 2,
			'type' => 'string',
			'label' => 'טלפון סלולרי',
			'required' => true,
			'errors' => array(
				'required' => 'השדה \'טלפון סלולרי\' נדרש.'
			)
		)
	)
);

process_form($form);
?>
