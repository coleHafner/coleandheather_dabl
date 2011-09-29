<?php

class Article extends baseArticle {
	const VIEW_INDEX = 1;
	const VIEW_RSVP = 2;
	const VIEW_GALLERY = 3;
	const VIEW_POSTS = 4;
	const VIEW_INFO = 5;

	static $views = array(
		'index' => self::VIEW_INDEX,
		'rsvp' => self::VIEW_RSVP,
		'gallery' => self::VIEW_GALLERY,
		'posts' => self::VIEW_POSTS,
		'info' => self::VIEW_INFO
	);
}
