<?php
/**
 * EmbedingCode
 * EmbedingCode Services List
 * Adds a parser function embedding video from popular sources.
 * See README for details. For licensing information, see LICENSE. For a
 * complete list of contributors, see CREDITS
 *
 * @license MIT
 * @package EmbedingCode
 * @link    https://www.mediawiki.org/wiki/Extension:EmbedingCode
 **/

if (function_exists('wfLoadExtension')) {
	wfLoadExtension('EmbedingCode');
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['EmbedingCode'] = __DIR__ . '/i18n';
	$wgExtensionMessagesFiles['EmbedingCodeMagic']	= __DIR__ . '/EmbedingCode.i18n.magic.php';
	wfWarn(
		'Deprecated PHP entry point used for EmbedingCode extension. Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return;
} else {
	die('This version of the EmbedingCode extension requires MediaWiki 1.25+');
}
