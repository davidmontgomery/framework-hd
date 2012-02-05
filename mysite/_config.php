<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	"type" => 'MySQLDatabase',
	"server" => 'localhost',
	"username" => 'root',
	"password" => 'root',
	"database" => 'framework-hd',
	"path" => '',
);

SSViewer::set_theme('framework-hd');
// FulltextSearchable::enable();


i18n::set_locale('en_US');
SiteTree::enable_nested_urls();
Director::set_environment_type('dev');

Security::setDefaultAdmin('admin','pass');
Email::setAdminEmail('hello@davidmontgomery.co.nz');

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