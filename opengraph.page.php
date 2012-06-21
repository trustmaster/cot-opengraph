<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=page.main
[END_COT_EXT]
==================== */

defined('COT_CODE') or die('Wrong URL');

/**
 * Sets OpenGraph metas
 *
 * @package opengraph
 * @version 1.1.0
 * @author Trustmaster
 * @copyright (c) 2011 Vladimir Sibirov, Skuola.net
 * @license BSD
 */

$fb_title = htmlspecialchars($pag['page_title']);
$fb_desc = htmlspecialchars($pag['page_desc']);
$fb_url = COT_ABSOLUTE_URL . $out['canonical_uri'];

// Search for image in text
$fb_image = COT_ABSOLUTE_URL . 'plugins/opengraph/img/thumb.jpg';
if ($cfg['plugin']['opengraph']['scan_img']
	&& preg_match('`(http://[\w\-\.]+/)?([\w_\-\./]+\.(?:jpg|png))`i', $pag['page_text'], $mt))
{
	$fb_image = empty($mt[1]) ? COT_ABSOLUTE_URL . $mt[2] : $mt[0];
}

$fb_metas = <<<HTM
<meta property="og:title" content="$fb_title"/>
<meta property="og:type" content="{$cfg['plugin']['opengraph']['type']}"/>
<meta property="og:image" content="$fb_image"/>
<meta property="og:url" content="$fb_url"/>
<meta property="og:description" content="$fb_desc"/>
<meta property="og:site_name" content="{$cfg['maintitle']}"/>
<meta property="fb:admins" content="{$cfg['plugin']['opengraph']['admins']}"/>
HTM;
if (!empty($cfg['plugin']['opengraph']['app_id']))
{
	$fb_metas .= <<<HTM
<meta property="fb:app_id" content="{$cfg['plugin']['opengraph']['app_id']}"/>
HTM;
}

$out['head'] .= $fb_metas;
?>
