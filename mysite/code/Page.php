<?php
class Page extends SiteTree {

	public static $db = array(
	);

	public static $has_one = array(
	);


}
class Page_Controller extends ContentController {

	public function init() {
		parent::init();

		// Favicon + RSS
		Requirements::insertHeadTags('<link rel="shortcut icon" href="/favicon.ico?nocache=1" />');
		Requirements::insertHeadTags('<link rel="apple-touch-icon" href="/apple-touch-icon.png" />');

		// JS - Head
		Requirements::insertHeadTags('<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>');
		Requirements::insertHeadTags('<script src="' . $this->ThemeDir() . '/js/modernizr-1.7.min.js"></script>');
		Requirements::insertHeadTags('<link rel="stylesheet" href="' . $this->ThemeDir() . '/css/style.css">');

		// Combine: To test set to 'test' in _config
		Requirements::set_combined_files_folder('assets/combined');

		// JS
		Requirements::combine_files(
			'combined.js',
			array(
				$this->ThemeDir() . '/js/general.js',
				$this->ThemeDir() . '/js/placeholder.js'
			)
		);

	}

	public function isDev() {
		return Director::isDev();
	}

	public function isLive() {
		return Director::isLive();
	}

	public function MetaTags($includeTitle = true)
	{
		$tags = '';

		if ($includeTitle === true || $includeTitle == 'true') {
			$tags .= '<title>' . Convert::raw2xml(($this->MetaTitle) ? $this->MetaTitle : $this->Title) . '</title>' . PHP_EOL;
		}

		$tags .= '<meta charset=\'' . ContentNegotiator::get_encoding() . '\' />';

		if ($this->MetaKeywords) {
			$tags .= '<meta name=\'keywords\' content=\'' . Convert::raw2att($this->MetaKeywords) . '\' />' . PHP_EOL;
		}

		if ($this->MetaDescription) {
			$tags .= '<meta name=\'description\' content=\'' . Convert::raw2att($this->MetaDescription) . '\' />' . PHP_EOL;
		}

		if ($this->ExtraMeta) {
			$tags .= $this->ExtraMeta . PHP_EOL;
		}

		$this->extend('MetaTags', $tags);

		return $tags;
	}


}