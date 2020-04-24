<?php

return array(
/** set your paypal credential **/
//'client_id' =>'Adyla_8LUvpWcXtlMEok6JVK9ANNDI1TtwVJd-mh5Wjlxuab5YOBTfGkFKBfeLknKAuAx-0PqaAPlT1u',
//'secret' => 'ECULh_601jBMm_jRzFzhbxurI7UVctVzcIQ_-PjXY5DIbijIpIVSmt0KocA33pMFV6g7sapl37Mo0LZm',
/**
* SDK configuration 
*/

'client_id' =>'ARU6LIaW6E9h1FdcG236fPvnRry6WypO7uVGmpTzVopK_P2ZfxBb4wg7mJjPPZusZvVCpN1Bs2Gj2Huk',
'secret' => 'EPMKMxnRVVaXs8jBrPwTODQcQV1V7lnMKDc5FdYNh8B-Xo7UiX5-8nX6gioi8-f-je2oDznd535GDijP',

'settings' => array(
/**
* Available option 'sandbox' or 'live'
*/
'mode' => 'live',
/**
* Specify the max request time in seconds
*/
'http.ConnectionTimeOut' => 30000,
/**
* Whether want to log to a file
*/
'log.LogEnabled' => true,
/**
* Specify the file that want to write on
*/
'log.FileName' => storage_path() . '/logs/paypal.log',
/**
* Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
*
* Logging is most verbose in the 'FINE' level and decreases as you
* proceed towards ERROR
*/
'log.LogLevel' => 'FINE'
),
);