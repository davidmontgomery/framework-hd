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

