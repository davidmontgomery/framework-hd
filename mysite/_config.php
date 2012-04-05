<?php

global $project;
$project = 'mysite';

global $databaseConfig;

require_once('conf/ConfigureFromEnv.php');


if (Director::isTest()) {
	BasicAuth::protect_entire_site();
}

// Email
define('EMAIL', 'hello@davidmontgomery.co.nz');

SSViewer::set_theme('framework-hd');

FulltextSearchable::enable();
i18n::set_locale('en_NZ');

// Spam
MathSpamProtection::setEnabled();
SSAkismet::setAPIKey('key');
SSAkismet::setSaveSpam(true);

// Comments
PageComment::enableModeration();
PageCommentInterface::set_comments_require_login(true);

// Errors
SS_Log::add_writer(new SS_LogEmailWriter('me@mydomain.com'), SS_Log::ERR);
SS_Log::add_writer(new SS_LogFileWriter('error_log.txt'), SS_Log::ERR);

// Icons
Page::$icon = array('themes/framework-hd/images/tree-icons/page','file');
ErrorPage::$icon = array('themes/framework-hd/images/tree-icons/error','file');



// Tiny_mce config: wiki.moxiecode.com Need to implement modal
HtmlEditorConfig::get('cms')->setButtonsForLine(1,
	'formatselect',
	'styleselect',
	'bold',
	'italic',
	'sub',
	'sup',
	'bullist',
	'numlist',
	'separator',
	'link',
	'unlink',
	'anchor',
	'separator',
	'pasteword',
	'code',
	'separator'
);
HtmlEditorConfig::get('cms')->setButtonsForLine(2);
HtmlEditorConfig::get('cms')->setButtonsForLine(3);

if (Director::isDev()) {
	SSViewer::flush_template_cache();
}

/*
Helpers:

To prevent SS from removing the hash and making urls:
SSViewer::setOption('rewriteHashlinks', false);

Adds SS includes as HTML comments:
SSViewer::set_source_file_comments(true);

Remove unused CMS tabs:
CMSMenu::remove_menu_item('ReportAdmin');

Email:
Email::cc_all_emails_to('mail@mysite.com');
Email::bcc_all_emails_to('mail@mysite.com');
Email::send_all_emails_to('mail@mysite.com');
Email::setAdminEmail($adminEmail);

Allow extensions:
File::$allowed_extensions[] = 'psd';

Breadcrumbs:
SiteTree::$breadcrumbs_delimiter = ' >> ';

Images:
GD::set_default_quality(95);

Validation:
Validator::set_javascript_validation_handler('none');

*/

/*** Heyday Details ***/
// $databaseConfig = array(
// 	'type' => 'MySQLDatabase',
// 	'server' => 'localhost',
// 	'username' => 'root',
// 	'password' => 'root',
// 	'database' => 'framework-hd',
// );
// Security::setDefaultAdmin('admin', 'pass');