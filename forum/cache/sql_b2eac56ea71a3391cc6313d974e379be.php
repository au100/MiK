<?php exit; ?>
1344939617
SELECT s.style_id, c.theme_id, c.theme_data, c.theme_path, c.theme_name, c.theme_mtime, i.*, t.template_path FROM phpbb_styles s, phpbb_styles_template t, phpbb_styles_theme c, phpbb_styles_imageset i WHERE s.style_id = 2 AND t.template_id = s.template_id AND c.theme_id = s.theme_id AND i.imageset_id = s.imageset_id
14908
a:1:{i:0;a:11:{s:8:"style_id";s:1:"2";s:8:"theme_id";s:1:"2";s:10:"theme_data";s:14529:"/*  phpBB 3.0 Style Sheet
    --------------------------------------------------------------
	Style name:		610nm
	Author:		Daniel St. Jules ( http://www.gamexe.net/ )
    --------------------------------------------------------------
*/

/* Layout
 ------------ */
/**
 * @package styles
 * @version $Id: tooltip.css,v 1.1 2008/12/09 22:26:52 rmcgirr83 Exp $
 * @copyright (c) 2008 Richard McGirr (RMcGirr83) - http://rmcgirr83.org
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 ---------------------------------------- */

#tooltip{
	padding: 3px;
	border: solid 1px #000000;
	display: none; /*white-space: nowrap;*/
	background: #FFF;
	color: #000000;
	font: 10px Verdana, Arial, Helvetica, sans-serif;
	text-align: left;
	position: absolute;
	left: 0;
	z-index: 1000;
	filter: alpha(opacity=85);
	opacity: .85;
}
* {
	/* Reset browsers default margin, padding and font sizes */
	margin: 0;
	padding: 0;
}

.right { float: right; }

body {
	font-family: Verdana, Helvetica, Arial, sans-serif;
	color: #4B4B4B;
	background: #5B5B5B url("{T_THEME_PATH}/images/bg.gif") top repeat-x;
	font-size: 10px;
}

#topnav {
	height: 39px;
	padding-top: 4px;
}

#wrap {
	margin: 0 auto;
	width: 86%;
	min-width: 740px;
	position: relative;
}


#wrapcentre {
	padding: 6px;
}

#wrapfooter {
	padding: 25px;
	text-align: center;
	clear: both;
}

#findbar {
	width: 100%;
	margin: 0;
	padding: 0;
	border: 0;
}

.forumrules {
	background-color: #F9CC79;
	border-width: 1px;
	border-style: solid;
	border-color: #BB9860;
	padding: 4px;
	font-weight: normal;
	font-size: 1.1em;
	font-family: "Lucida Grande", Verdana, Arial, Helvetica, sans-serif;
}

.forumrules h3 {
	color: red;
}

.clear { clear: both; }

/* Navigation
 --------------------- */

#navcontainer {
	width: 100%;
	padding-bottom: 1px;
	background: url("{T_THEME_PATH}/images/nav.gif") top repeat-x;
}

#navcontainer ul { padding: 0; }
#navcontainer ul li { display: inline; }

#navcontainer ul {
	margin: 0;
	height: 42px;
	padding: 0 10px 0 10px;
	font-size: 1.1em;
}

#navcontainer ul li a {
	padding: 12px 10px 0 10px;
	height: 30px;
	color: #53473F;
	text-decoration: none;
	float: left;
}

#navlist li a:hover, #navlist li a:active {
	text-decoration: none;
	text-align: left;
	background: url("{T_THEME_PATH}/images/nav_hover.gif") top repeat-x;
}

/* Search box
 --------------------- */
#search-box {
	color: #FFFFFF;
	display: block;
	float: right;
	text-align: right;
	white-space: nowrap; /* For Opera */
	border: 0;
}

#search-box input {
	border: 0;
	width: 139px;
	height: 17px;
	padding: 3px 5px 0 5px;
	background: url("{T_THEME_PATH}/images/search.gif") top no-repeat;
	color: #929292;
	border: 0;
}

#search-box fieldset {
	border: 0;
	background: none;
}

#search-box input:hover, #search-box input:focus {
	color: #BBBBBB;
	background: url("{T_THEME_PATH}/images/search.gif") no-repeat;
	background-position: 0 -20px;
}

/* Round cornered boxes and backgrounds
 --------------------------------------------------------- */

#header_bg {
	height: 102px;
	background: url("{T_THEME_PATH}/images/header_right.gif") top right no-repeat;
}

#header_bg2 {
	height: 102px;
	background: url("{T_THEME_PATH}/images/header_left.gif") top left no-repeat;
	
}

#header_container { 
	background: url("{T_THEME_PATH}/images/header_bg.gif") top repeat-x;
	display: block;
	width: 100%;
}

#logo {
	display: block;
	width: 100%;
}

#logo img {
	margin-left: 20px;
}

.b { 
	background: #F3F3EE url("{T_THEME_PATH}/images/footer_bg.gif") bottom repeat-x;
}

.bl { 
	background: url("{T_THEME_PATH}/images/footer_left.gif") bottom left no-repeat;
}

.br { 
	background: url("{T_THEME_PATH}/images/footer_right.gif") bottom right no-repeat;
}

.navbar {
	background-color: #D7D7C2;
	padding: 10px 20px 10px 5px;
	margin-bottom: 15px;
	display: block;
}

ul.linklist li {
	list-style-type: none;
}

/*  Text
 --------------------- */
h1 {
	color: black;
	font-family: "Lucida Grande", "Trebuchet MS", Verdana, sans-serif;
	font-weight: bold;
	font-size: 1.8em;
	text-decoration: none;
}

h2 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 1.5em;
	text-decoration: none;
	line-height: 120%;
}

h3 {
	font-size: 1.3em;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	line-height: 120%;
}

h4 {
	margin: 0;
	font-size: 1.1em;
	font-weight: bold;
}

p {
	font-size: 1.1em;
}

p.moderators {
	margin: 0;
	float: left;
	color: black;
	font-weight: bold;
}

.rtl p.moderators {
	float: right;
}

p.linkmcp {
	margin: 0;
	float: right;
	white-space: nowrap;
}

.rtl p.linkmcp {
	float: left;
}

p.breadcrumbs {
	margin: 0;
	float: left;
	color: black;
	font-weight: bold;
	white-space: normal;
	font-size: 1em;
}

.rtl p.breadcrumbs {
	float: right;
}

p.datetime {
	margin: 0;
	float: right;
	white-space: nowrap;
	font-size: 1em;
}

.rtl p.datetime {
	float: left;
}

p.searchbar {
	white-space: nowrap;
} 

p.searchbarreg {
	margin: 0;
	float: right;
	white-space: nowrap;
}

.rtl p.searchbarreg {
	float: left;
}

p.forumdesc {
	padding-bottom: 4px;
}

p.topicauthor {
	margin: 1px 0;
}

p.topicdetails {
	margin: 1px 0;
}

.postreported, .postreported a:visited, .postreported a:hover, .postreported a:link, .postreported a:active {
	margin: 1px 0;
	color: red;
	font-weight:bold;
}

.postapprove, .postapprove a:visited, .postapprove a:hover, .postapprove a:link, .postapprove a:active {
	color: green;
	font-weight:bold;
}

.postapprove img, .postreported img {
	vertical-align: bottom;
	padding-top: 5px;
}

.postauthor {
	color: #000000;
}

.postdetails {
	color: #000000;
}

.postbody {
	font-size: 1.3em;
	line-height: 1.4em;
	font-family: "Lucida Grande", "Trebuchet MS", Helvetica, Arial, sans-serif;
}

.postbody li, ol, ul {
	margin: 0 0 0 1.5em;
}

.rtl .postbody li, .rtl ol, .rtl ul {
	margin: 0 1.5em 0 0;
}

.posthilit {
	background-color: yellow;
}

.nav {
	margin: 0;
	color: black;
	font-weight: bold;
}

.pagination {
	padding: 4px;
	color: black;
	font-size: 1em;
	font-weight: bold;
}

.cattitle {

}

.gen {
	margin: 1px 1px;
	font-size: 1.2em;
}

.genmed {
	margin: 1px 1px;
	font-size: 1.1em;
}

.gensmall {
	margin: 1px 1px;
	font-size: 1em;
}

.copyright {
	color: #444;
	font-weight: normal;
	font-family: "Lucida Grande", Verdana, Arial, Helvetica, sans-serif;
}

.titles {
	font-family: "Lucida Grande", Helvetica, Arial, sans-serif;
	font-weight: bold;
	font-size: 1.3em;
	text-decoration: none;
}

.error {
	color: red;
}


/* Tables
 ------------ */
th {
	color: #75471A;
	font-size: 1.1em;
	font-weight: bold;
	background: url('{T_THEME_PATH}/images/cellpic3.gif') top repeat-x;
	white-space: nowrap;
	padding: 0 5px;
	height: 25px;
	text-align: center;
}

td {
	padding: 2px;
}
td.profile {
	padding: 4px;
}

.tablebg {
	background-color: #B8B89B;
}

.catdiv {
	height: 28px;
	margin: 0;
	padding: 0;
	border: 0;
	background: white url('{T_THEME_PATH}/images/cellpic2.jpg') repeat-y scroll top left;
}
.rtl .catdiv {
	background: white url('{T_THEME_PATH}/images/cellpic2_rtl.jpg') repeat-y scroll top right;
}

.cat {
	height: 28px;
	margin: 0;
	padding: 0;
	border: 0;
	background: #E8E8E3 url('{T_THEME_PATH}/images/cellpic1.gif') repeat-x;
	text-indent: 4px;
}

.row1 {
	background: #DEDECA url('{T_THEME_PATH}/images/row1.gif') repeat-x;
	padding: 4px;
	border-top: 1px #EEEEE2 solid;
	border-left: 1px #F4F4EB solid;
}

.row2 {
	background: #D8D8C2 url('{T_THEME_PATH}/images/row2.gif') repeat-x;
	padding: 4px;
	border-top: 1px #EEEEE2 solid;
	border-left: 1px #F4F4EB solid;
}

.row3 {
	background: #DEDECA url('{T_THEME_PATH}/images/row1.gif') repeat-x;
	padding: 4px;
	border-top: 1px #EEEEE2 solid;
	border-left: 1px #F4F4EB solid;
}

.spacer {
	background: #E0E0E0 url('{T_THEME_PATH}/images/space.gif') repeat-x;
}

hr {
	height: 1px;
	border-width: 0;
	background-color: #D1D7DC;
	color: #D1D7DC;
}

.legend {
	text-align:center;
	margin: 0 auto;
}

/* Links
 ------------ */
 
/* Links adjustment to correctly display an order of rtl/ltr mixed content */
.rtl a {
	direction: rtl;
	unicode-bidi: embed;
}
 
a:link	{ color: #5B3818; text-decoration: none; }
a:visited	{ color: #5B3818; text-decoration: none; }
a:hover	{ color: #8C651A; text-decoration: underline; }
a:active	{ color: #8C651A; text-decoration: none; }

a.forumlink {
	font-weight: bold;
	font-family: "Lucida Grande", Helvetica, Arial, sans-serif;
	font-size: 1.2em;
}

a.topictitle, a.topictitle:visited {
	margin: 1px 0;
	font-family: "Lucida Grande", Helvetica, Arial, sans-serif;
	font-weight: bold;
	font-size: 1.2em;
}

th a,
th a:visited {
	color: #75471A !important;
	text-decoration: none;
}

th a:hover {
	text-decoration: none;
}


/* Form Elements
 ------------ */
form {
	margin: 0;
	padding: 0;
	border: 0;
}

input {
	color: #3D3D3F;
	font-family: "Lucida Grande", Verdana, Helvetica, sans-serif;
	font-size: 1.1em;
	font-weight: normal;
	padding: 2px;
	border: 1px solid #B2B296;
	background-color: #F2F2F2;
	vertical-align: middle;
}

input:hover, input:focus, select:hover, select:focus {
	border: 1px solid #78786E;
	background-color: #FFF;
}

textarea {
	background: #EEEEEE url("{T_THEME_PATH}/images/textarea.gif") top repeat-x;
	color: #333333;
	font-family: "Lucida Grande", Verdana, Helvetica, Arial, sans-serif;
	font-size: 1.3em; 
	line-height: 1.4em;
	font-weight: normal;
	border: 1px solid #B2B296;
	padding: 2px;
	vertical-align: middle;
}

textarea:hover, textarea:focus {
	border: 1px solid #78786E;
}

select {
	color: #333333;
	background-color: #FAFAFA;
	font-family: "Lucida Grande", Verdana, Helvetica, sans-serif;
	font-size: 1.1em;
	font-weight: normal;
	border: 1px solid #B2B296;
	padding: 1px;
	vertical-align: middle;
}

option {
	padding: 0 1em 0 0;
}

option.disabled-option {
	color: graytext;
}

.rtl option {
	padding: 0 0 0 1em;
}

input.radio {
	border: none;
	background-color: transparent;
	vertical-align: middle;
}

.post {
	background-color: white;
	border-style: solid;
	border-width: 1px;
}

.btnbbcode {
	color: #000000;
	font-weight: normal;
	font-size: 1.1em;
	font-family: "Lucida Grande", Verdana, Helvetica, sans-serif;
}

.btnmain {
	font-weight: bold;
	cursor: pointer;
	padding: 1px 5px;
	font-size: 1.1em;
}

.btnlite {
	font-weight: normal;
	cursor: pointer;
	padding: 1px 5px;
	font-size: 1.1em;
}

.btnfile {
	font-weight: normal;
	padding: 1px 5px;
	font-size: 1.1em;
}

.btnmain, .btnlite, .btnfile {
	background: url("{T_THEME_PATH}/images/submit.gif") top repeat-x;
	color: #575757;
}

.btnmain:hover, .btnmain:focus, .btnlite:hover, .btnlite:focus, .btnfile:hover, .btnfile:focus {
	background-position: 0 -40px;
	border: 1px #93937B solid;
	color: #363636;
}

.btnbbcode {
	background: url("{T_THEME_PATH}/images/bbcode.gif") top repeat-x;
	color: #575757;
}

.btnbbcode:hover, .btnbbcode:focus {
	background-position: 0 -40px;
	border: 1px #9B8A72 solid;
	color: #363636;
}

.helpline, .helpline:hover, .helpline:focus  {
	background: transparent;
	border-style: none;
}


/* BBCode
 ------------ */
.quotetitle, .attachtitle {
	margin: 10px 5px 0 5px;
	padding: 4px;
	border-width: 1px 1px 0 1px;
	border-style: solid;
	border-color: #ABAB9C;
	color: #333333;
	font-size: 0.85em;
	font-weight: bold;
	background: #EEEEEE url("{T_THEME_PATH}/images/cellpic1.gif") top repeat-x;
}

.quotetitle .quotetitle {
	font-size: 1em;
}

.quotecontent, .attachcontent {
	margin: 0 5px 10px 5px;
	padding: 5px;
	border-color: #A9B8C2;
	border-width: 0 1px 1px 1px;
	border-style: solid;
	font-weight: normal;
	font-size: 1em;
	line-height: 1.4em;
	font-family: "Lucida Grande", "Trebuchet MS", Helvetica, Arial, sans-serif;
	background: #EEEEEE url("{T_THEME_PATH}/images/textarea.gif") top repeat-x;
	color: #4B5C77;
}

.attachcontent {
	font-size: 0.85em;
}

.codetitle {
	margin: 10px 5px 0 5px;
	padding: 2px 4px;
	border-width: 1px 1px 0 1px;
	border-style: solid;
	color: #333333;
	font-family: "Lucida Grande", Verdana, Helvetica, Arial, sans-serif;
	font-size: 0.8em;
	border-color: #ABAB9C;
	background: #EEEEEE url("{T_THEME_PATH}/images/cellpic1.gif") top repeat-x;
}

.codecontent {
	direction: ltr;
	margin: 0 5px 10px 5px;
	padding: 5px;
	border-color: #A9B8C2;
	border-width: 0 1px 1px 1px;
	border-style: solid;
	font-weight: normal;
	color: #006600;
	font-size: 0.85em;
	font-family: Monaco, 'Courier New', monospace;
	background: #EEEEEE url("{T_THEME_PATH}/images/textarea.gif") top repeat-x;
}

.syntaxbg {
	color: #FFFFFF;
}

.syntaxcomment {
	color: #FF8000;
}

.syntaxdefault {
	color: #0000BB;
}

.syntaxhtml {
	color: #000000;
}

.syntaxkeyword {
	color: #007700;
}

.syntaxstring {
	color: #DD0000;
}


/* Private messages
 ------------------ */
.pm_marked_colour {
	background-color: #000000;
}

.pm_replied_colour {
	background-color: #A9B8C2;
}

.pm_friend_colour {
	background-color: #007700;
}

.pm_foe_colour {
	background-color: #DD0000;
}

/* Buttons
 --------------- */

a.fontsize {
	display: block;
	overflow: hidden;
	height: 18px;
	text-indent: -5000px;
	text-align: left;
	background-repeat: no-repeat;
	background-image: url("{T_THEME_PATH}/images/icon_fontsize.gif");
	background-position: 0 -1px;
	width: 29px;
	position: absolute;
	top: 6px;
	left: 0px;
}

a.fontsize:hover {
	background-position: 0 -20px;
	text-decoration: none;
}

.reply-icon	{ 
	float: left; display: block; width: 96px; height: 25px;
	background: url("{IMG_BUTTON_TOPIC_REPLY_SRC}") 0 0 no-repeat;
	margin-right: 10px;
}
.post-icon	{ 
	float: left; display: block; width: 96px; height: 25px;
	background: url("{IMG_BUTTON_TOPIC_NEW_SRC}") 0 0 no-repeat;
	margin-right: 10px;
}
.locked-icon { 
	float: left; display: block; width: 96px; height: 25px;
	background: url("{IMG_BUTTON_TOPIC_LOCKED_SRC}") 0 0 no-repeat;
	margin-right: 10px;
}
.newpm-icon { 
	float: left; display: block; width: 96px; height: 25px;
	background: url("{IMG_BUTTON_PM_NEW_SRC}") 0 0 no-repeat;
	margin-right: 10px;
}

.reply-icon span, .post-icon span, .locked-icon span, .newpm-icon span {
	display: none; text-indent: -5000px;
}

.reply-icon:hover, .post-icon:hover, .locked-icon:hover, .newpm-icon:hover {
	background-position: 0 -25px;
}

/* Misc
 ------------ */
img {
	border: none;
}

.sep {
	color: black;
	background-color: #FFA34F;
}

table.colortable td {
	padding: 0;
}

pre {
	font-size: 1.1em;
	font-family: Monaco, 'Courier New', monospace;
}

.nowrap {
	white-space: nowrap;
}

.username-coloured {
	font-weight: bold;
}

.simple {
    background-color: #FFFFFF;
}

#datebar { padding: 0 4px; }";s:10:"theme_path";s:5:"610nm";s:10:"theme_name";s:5:"610nm";s:11:"theme_mtime";s:10:"1321540583";s:11:"imageset_id";s:1:"2";s:13:"imageset_name";s:5:"610nm";s:18:"imageset_copyright";s:30:"Daniel St. Jules of Gamexe.net";s:13:"imageset_path";s:5:"610nm";s:13:"template_path";s:5:"610nm";}}