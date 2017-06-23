<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
    '*' => array(
        'siteName' => 'Cross Park',
        'timezone' => 'Australia/Sydney',
        'allowAutoUpdates' => false,
        'omitScriptNameInUrls' => true,
        'varnish' => false,
        'templateVariables' => array(
            'cssPath' => '/css/',
            'jsPath' => '/js/',
            'jsVendorPath' => '/js/vendor/',
            'imgPath' => '/images/'
        ),
        'formerly' => array(
            'honeyPotName' => 'pants', //id of input honeypot, don't call it something obvious like honeypot
            'assetFolderId' => 6, //id of the folder you want to put assets in, note - you should secure this folder from browsing
            'allowedKinds' => array("excel", "image", "pdf", "text", "word"), //valid types of files users can upload
            'timezoneOffset' => '+10:00',
            'sendEmails' => true
        ),
    ),
    'local.dhp' => array(
        'devMode' => true,
        'siteCached' => false,
        'siteUrl' => 'http://local.dhp/',
        'environmentVariables' => array(
            'baseUrl' => 'http://local.dhp/',
        ),
    ),
);
