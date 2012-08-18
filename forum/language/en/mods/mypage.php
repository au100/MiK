<?php

// mypage 0.2.0

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// general
$lang = array_merge($lang, array(
	'MP_PAGE_LIMIT_REACHED'		=> 'Page limit reached, Please delete a page before creating another.',
	'MP_PAGE_NOT_CREATED'		=> 'Page was not created',
	'MP_NO_PERMISSION'		=> 'You do not have permissions to perform that action',
	'MP_NO_PAGE'			=> 'The page was not found',
	'MP_ULD_ERROR_NO'		=> 'The file was not uploaded',
	'MP_ULD_ERROR_LARGE'		=> 'The file is to large to be uploaded',
	'MP_ULD_ERROR_NOT_IMG'		=> 'The file can not be uploaded because it is not an image',
	'MP_FILE_NOT_DELETED'		=> 'The file was not deleted',
	'MP_PAGE_POST_LIMIT'		=> 'You do not have enough post to use this feature',
	
	'MP_RETURN'			=> 'Return to last viewed page',
	'MP_ULD_NO_ERROR'		=> 'The file was uploaded',
	'MP_PAGE_ADDED'			=> 'Page added',
	'MP_PAGE_DELETED'		=> 'Page deleted',
	'MP_PAGE_EDITED'		=> 'Page edited',
	'MP_FILE_DELETED'		=> 'File deleted',
	'MP_PAGE_ORDER_UPDATED'		=> 'Page order updated',
	'MP_COMMENT_ADDED'		=> 'Your comment was added',
	'MP_COMMENT_UPDATED'		=> 'Comment updated',
	'MP_COMMENT_DELETED'		=> 'Comment deleted',
	'MP_RATING_ADDED'		=> 'Your rating was added',
	
	'MP_OVERVIEW'			=> 'Overview',
	'MP_USED_PAGES'			=> 'Used Pages',
	'MP_UPLOADED_FILES'		=> 'Uploaded Files',
	'MP_UPLOAD_FILES'		=> 'Upload File',
	'MP_FILE_TO_UPLOAD'		=> 'File to upload',
	'MP_COMMENTS'			=> 'Comments',
	'MP_RATINGS'			=> 'Ratings',
	'MP_OPTIONS'			=> 'Options',
	'MP_ORDER'			=> 'Order',
	'MP_PAGE_LIST'			=> 'page list',
	'MP_FILE_LIST'			=> 'file list',
	'MP_ADD_PAGE'			=> 'Add Page',
	'MP_EDIT_PAGE'			=> 'Edit Page',
	'MP_UPLOADS'			=> 'Manage Uploads',
	'MP_VIEW_MYPAGE'		=> 'View',
	'MP_MYPAGE'			=> 'Mypage',
	'MP_MYPAGES'			=> 'My pages',

	'MP_PAGE_TITLE'			=> 'Page title',
	
	'MP_DELETE'			=> 'Delete',
	'MP_DELETE_CONFIRM'		=> 'Are you sure you want to delete this page?',
	'MP_DELETE_UPLOAD_CONFIRM'	=> 'Are you sure you want to delete this file?',
	'MP_VIEW'			=> 'View',
	'MP_EDIT'			=> 'Edit',
	'MP_SELECT'			=> 'Select',
	'MP_MYPAGE_NO'			=> 'No pages created',
	
	'MP_GENERAL_OPTIONS'		=> 'General Options',
	'MP_STYLE_OPTIONS'		=> 'Style Options',
	'MP_EDITOR'			=> 'Editor',
	
	'MP_ALLOW_COMMENTS'		=> 'Allow comments',
	'MP_ALLOW_RATINGS'		=> 'Allow ratings',
	'MP_PARSE_HTML'			=> 'Parse html',
	'MP_PARSE_BBCODE'		=> 'Parse bbcode',
	'MP_PARSE_SMILES'		=> 'Parse smiles',
	'MP_PARSE_URL'			=> 'Parse url',
	'MP_BGRND_COLOR'		=> 'Background color',
	'MP_BGRND_IMAGE'		=> 'Background image',
	'MP_BGRND_STYLE'		=> 'Background style',
	'MP_FONT_SIZE'			=> 'Font size',
	'MP_FONT_COLOR'			=> 'Font color',
	'MP_RATE_PAGE'			=> 'Rate page',
	'MP_CHANGE_RATE'		=> 'Change page rating',
	
	'MY_OVERVIEW_TITLE'		=> 'Mypage &bull; Overview',
	'MY_ADD_PAGE_TITLE'		=> 'Mypage &bull; Add Page',
	'MY_EDIT_PAGE_TITLE'		=> 'Mypage &bull; Edit Page',
	'MY_UPLOADS_TITLE'		=> 'Mypage &bull; Uploads',
	
	'MP_INSERT'			=> 'Insert',
	'MP_INSERT_INLINE'		=> 'Insert inline',
	'MP_MAKE_BACKGROUND'		=> 'Make background',
	'MP_INSERT_COMMENT_LINK'	=> 'Comments link',
	'MP_INSERT_COMMENT_COUNT'	=> 'Comments count',
	'MP_COMMENT_COUNT_STRING'	=> 'This page has received % comments', // % will be replaced by the actual count
	'MP_COMMENT_LEAVE_VIEW_STRING'	=> 'Leave / View comments',
	'MP_COMMENT_BY_STRING'		=> 'Posted by %1 on %2', // %1 will be replaced by the username, %2 will be replaced by the date/time
	
	'MP_ORDER_EXPLAIN'		=> 'Order is the order your pages are listed in different places, Enter 0 to hide your page in your profile, The page with order id of 1 will be listed in your posts',
	
	'MP_ACP_GEN'			=> 'Mypage overview',
	'MP_ACP_GEN_EXPLAIN'		=> 'Here is some general mypage information',
	'MP_ACP_LIMITS'			=> 'Mypage limits',
	'MP_ACP_LIMITS_EXPLAIN'		=> 'Here you can set up limits for different mypage features',
	'MP_ACP_STYLE'			=> 'Mypage style options',
	'MP_ACP_STYLE_EXPLAIN'		=> 'Here you can set up style options for mypage',
	'MP_ACP_HTML'			=> 'Mypage html options',
	'MP_ACP_HTML_EXPLAIN'		=> 'Here you can set up html options for mypage',
	
	'MP_ACP_PAGE_LIMIT_A'		=> 'Page limit (A)',
	'MP_ACP_PAGE_LIMIT_A_EXPLAIN'	=> 'Page limit for members with "Allowed mypages (A)" permissions',
	'MP_ACP_PAGE_LIMIT_B'		=> 'Page limit (B)',
	'MP_ACP_PAGE_LIMIT_B_EXPLAIN'	=> 'Page limit for members with "Allowed mypages (B)" permissions',
	'MP_ACP_PAGE_LIMIT_C'		=> 'Page limit (C)',
	'MP_ACP_PAGE_LIMIT_C_EXPLAIN'	=> 'Page limit for members with "Allowed mypages (C)" permissions',
	'MP_ACP_UPLOAD_LIMIT_A'		=> 'Upload limit (A)',
	'MP_ACP_UPLOAD_LIMIT_A_EXPLAIN'	=> 'Upload limit for members with "Allowed mypage uploads (A)" permissions',
	'MP_ACP_UPLOAD_LIMIT_B'		=> 'Upload limit (B)',
	'MP_ACP_UPLOAD_LIMIT_B_EXPLAIN'	=> 'Upload limit for members with "Allowed mypage uploads (B)" permissions',
	'MP_ACP_UPLOAD_LIMIT_C'		=> 'Upload limit (C)',
	'MP_ACP_UPLOAD_LIMIT_C_EXPLAIN'	=> 'Upload limit for members with "Allowed mypage uploads (C)" permissions',
	'MP_ACP_UPLOAD_SIZE'		=> 'Upload file size',
	'MP_ACP_UPLOAD_SIZE_EXPLAIN'	=> 'Maximum allowed file size in bytes',
	'MP_ACP_DEFAULT_CONTENT'	=> 'Default content',
	'MP_ACP_DEFAULT_CONTENT_EXPLAIN'	=> 'This is the content placed on the page when first created. (BBCODE allowed)',
	'MP_ACP_FOOTER'			=> 'Footer',
	'MP_ACP_FOOTER_EXPLAIN'		=> 'This is the content placed on the bottom of any page created with Mypage. Enter 0 to not use. (HTML allowed)',
	'MP_ACP_USE_HEADER'		=> 'Use board header',
	'MP_ACP_USE_HEADER_EXPLAIN'	=> 'This allows you to have your board header and footer used for mypages',
	
	'MP_ACP_TTL_PAGE_LIMIT'		=> 'Page limits',
	'MP_ACP_TTL_UPLOAD_LIMIT'	=> 'Upload limits',
	'MP_ACP_TTL_GEN_STYLE'		=> 'General style options',
	'MP_ACP_TTL_RATE_IMGS'		=> 'Rating images',
	'MP_ACP_TTL_RATE_IMGS_EXPLAIN'	=> 'These are the images used for the rating system, these should be located in the images/mypage_ratings directory',
	
	'MP_ACP_UPDATED'		=> 'Mypage options updated',
	
	'MP_ACP_PAGE_CNT'		=> 'Number of pages',
	'MP_ACP_FILE_CNT'		=> 'Number of uploads',
	'MP_ACP_COMMENT_CNT'		=> 'Number of comments',
	'MP_ACP_RATING_CNT'		=> 'Number of ratings',
	
	// ratings
	'MP_RATE_0'			=> '0 stars',
	'MP_RATE_1'			=> '1 star',
	'MP_RATE_2'			=> '2 stars',
	'MP_RATE_3'			=> '3 stars',
	'MP_RATE_4'			=> '4 stars',
	'MP_RATE_5'			=> '5 stars',
	'MP_RATE_NR'			=> 'Not yet rated',

	// colors
	'MYPAGE_COLORS' => array(
		// ONLY CHANGE THE VALUES AFTER THE =>
		'AQUA'			=> 'Aqua',
		'BLACK'			=> 'Black',
		'BLUE'			=> 'Blue',
		'FUCHSIA'		=> 'Fuchsia',
		'GRAY'			=> 'Gray',
		'GREEN'			=> 'Green',
		'LIME'			=> 'Lime',
		'MAROON'		=> 'Maroon',
		'NAVY'			=> 'Navy',
		'OLIVE'			=> 'Olive',
		'PURPLE'		=> 'Purple',
		'RED'			=> 'Red',
		'SILVER'		=> 'Silver',
		'TEAL'			=> 'Teal',
		'WHITE'			=> 'White',
		'YELLOW'		=> 'Yellow',
	),

	// font sizes
	'MYPAGE_FNT_SIZE' => array(
		// ONLY CHANGE THE VALUES AFTER THE =>
		'XX_SMALL'		=> 'XX-Small',
		'X_SMALL'		=> 'X-Small',
		'SMALL'			=> 'Small',
		'MEDIUM'		=> 'Medium',
		'LARGE'			=> 'Large',
		'X-LARGE'		=> 'X-Large',
		'XX-LARGE'		=> 'XX-Large',
	),
	
));

// module titles
$lang = array_merge($lang, array(
	'UCP_MYPAGE'			=> 'Mypage',
	'UCP_MP_MAIN'			=> 'Overview',
	'UCP_MP_UPLOADS'		=> 'Uploads',
	'UCP_MP_EDIT'			=> 'Edit page',
	'UCP_MP_ORDER'			=> 'Order',
	'UCP_MP_ADD'			=> 'Add page',
	'ACP_MP_MYPAGE'			=> 'Mypage',
	'ACP_MP_MAIN'			=> 'Overview',
	'ACP_MP_LIMITS'			=> 'Limit Options',
	'ACP_MP_STYLE'			=> 'Style Options',
	'ACP_MP_HTML'			=> 'Html Options',
));

// new for 0.2.2
$lang = array_merge($lang, array(
	'MP_SUPPORT_LINE'		=> 'For support you can look <a href="http://www.phpbb.com/community/viewtopic.php?f=70&t=576979">here</a> or <a href="http://www.jtsenterprises.biz">here</a>.<br /><br />
					    If you would like to make a donation to to this project to help with future additions you can go <a href="http://www.jtsenterprises.biz/donate.php">here</a>.<br /><br />
					    If you would like to purchase any additional work, for mypage or anything else you may visit <a href="http://www.jtsenterprises.biz">here</a>.<br /><br />
					    Thank you for using Mypage,<br /><br />
					    JTS Enterprises',

	'MP_ACP_UPLOADS_SECURE'		=> 'Use secure uploads',
	'MP_ACP_UPLOADS_SECURE_EXPLAIN'	=> 'If yes the mime type is checked, if no, only the extension is checked',
	'MP_RATE_THIS_PAGE'		=> 'Rate this page',
	'MP_BE_FIRST_COMMENT'		=> 'Be the first to post a comment for this page.',
	'MP_ADD_COMMENT'		=> 'Add comment',
	'MP_NO_FILES'			=> 'You have no uploaded files',
	'MP_OVERVIEW_EXPLAIN'		=> 'Welcome to mypage. This area allows you to create a page or pages on these forums.',
	'MP_UP_FILE_NAME'		=> 'File Name',
	'MP_UP_UPLOADED'		=> 'Uploaded',
	'MP_UP_EXTENSION'		=> 'Extension',
	'MP_UP_OPTIONS'			=> 'Options',
));

?>
