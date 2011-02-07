<?php
/* ====================
[BEGIN_SED_EXTPLUGIN]
Code=opengraph
Name=FaceBook OpenGraph
Description=Implements OpenGraph metas in pages for integration with Facebook
Version=1.0.0
Date=2011-02-07
Author=Trustmaster
Copyright=&copy; Vladimir Sibirov 2011
Notes=
SQL=
Auth_guests=R
Lock_guests=W12345A
Auth_members=RW
Lock_members=12345A
[END_SED_EXTPLUGIN]

[BEGIN_SED_EXTPLUGIN_CONFIG]
scan_img=01:radio::1:Scan for an image in page text
app_id=02:string:::FaceBook Application ID (optional)
admins=03:string:::FaceBook admins, comma separated
type=04:string::article:FaceBook OpenGraph type
[END_SED_EXTPLUGIN_CONFIG]
==================== */

defined('SED_CODE') or die('Wrong URL');

?>
