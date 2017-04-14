<?php

class Model_Album extends Orm\Model
{
	protected static $_properties = array(
		'id',
		'author',
		'category',
		'title',
		'year_released',
		'cover_url',
		'details',
		'link'
	);
}