/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
    config.removePlugins = 'forms';
    config.extraPlugins = 'image2'
    config.image2_alignClasses = [ 'image-left', 'image-center', 'image-right' ];
config.image2_captionedClass = 'image-captioned';
config.image2_disableResizer = true;
config.extraAllowedContent = 'img[title]';
        config.allowedContent = true;
    CKEDITOR.dtd.$removeEmpty['i'] = false;
    CKEDITOR.dtd.$removeEmpty['span'] = false;
};
