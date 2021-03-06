<?php
/*==========================================================================*\
|| ######################################################################## ||
|| # ILance Marketplace Software 4.0.0 Build 8072
|| # -------------------------------------------------------------------- # ||
|| # Customer License # 1gKWJi9mdPYnVaN
|| # -------------------------------------------------------------------- # ||
|| # Copyright ©2000–2017 ILance Inc. All Rights Reserved.                # ||
|| # This file may not be redistributed in whole or significant part.     # ||
|| # ----------------- ILANCE IS NOT FREE SOFTWARE ---------------------- # ||
|| # http://www.ilance.com | http://www.ilance.com/eula	| info@ilance.com # ||
|| # -------------------------------------------------------------------- # ||
|| ######################################################################## ||
\*==========================================================================*/

// #### setup script location ##################################################
define('LOCATION', 'rpc');

// #### require backend ########################################################
require_once('./functions/config.php');

($apihook = $ilance->api('rpc_start')) ? eval($apihook) : false;

// #### start xml rpc server ###################################################
$xmlrpcserver = construct_object('api.xmlrpcserver');
$ilance_xmlrpcserver = new ilance_xmlrpcserver($xmlrpcserver);
$answer = $xmlrpcserver->send_reponse();
header('Content-Type: text/xml');
echo $answer;
exit();

/*======================================================================*\
|| ####################################################################
|| # Downloaded: Wed, Jan 4th, 2017
|| ####################################################################
\*======================================================================*/
?>