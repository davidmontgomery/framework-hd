<?php

class FaqCategory extends DataObject {

	static $has_many = array(
		'Faqs' => 'Faq'
	);



}