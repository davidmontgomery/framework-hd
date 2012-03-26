<?php

global $project;
$project = 'mysite';

global $databaseConfig;

/*** Local Details ***/
require_once('conf/ConfigureFromEnv.php');

/*** Heyday Details ***/
// $databaseConfig = array(
// 	'type' => 'MySQLDatabase',
// 	'server' => 'localhost',
// 	'username' => 'root',
// 	'password' => 'root',
// 	'database' => 'framework-hd',
// );

Security::setDefaultAdmin('admin', 'pass');
Director::set_environment_type('dev');

/*** END: ***/

SSViewer::set_theme('framework-hd');
FulltextSearchable::enable();

i18n::set_locale('en_US');

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
/*
Helpers:

if (Director::isDev()) {
	SSViewer::flush_template_cache();
}

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