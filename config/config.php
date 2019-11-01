<?php

include(dirname(__FILE__)."/api.php");

// Some basic configuration settings for XTC
define( 'SITE_DOMAIN', 'hubspot-portal.local' );
define( 'SITE_FOLDER', '');
define( 'USE_SSL', false);

// Ticket statuses
define( 'TICKET_CLOSED', array('4'));
define( 'TICKET_OPEN',array('1', '2', '3'));
define( 'TICKETS_PER_PAGE', '4');

define( 'EMAIL_KEY', '58b73e29be4b67aff74636e50ef85751e70421afaec54126ed9749fa276e8331');

// Email config
define( 'SMTP_HOST', 'xnizstudio.com' );
define( 'SMTP_USER', 'portal@huntdesignco.com' );
define( 'SMTP_PORT', '587' );
define ( 'SMTP_PASS', 'in_RxDhCXktQ');

?>
