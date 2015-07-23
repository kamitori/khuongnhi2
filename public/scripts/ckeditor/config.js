/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.width = '780px';
	config.height = $(window).height()/2+'px';
	console.log(config.height);
	config.resize_dir = 'vertical';
	config.contentsCss = window.location+'/../scripts/ckeditor/contents.css';
	config.enterMode = CKEDITOR.ENTER_BR;
};
