@media screen {
	/**
	 * CSS in this file is used by *all* skins (that have any CSS at all). Be
	 * careful what you put in here, since what looks good in one skin may not in
	 * another, but don't ignore the poor pre-Monobook users either.
	 */
	
	/* GENERAL CLASSES FOR DIRECTIONALITY SUPPORT */
	
	/**
	 * These classes should be used for text depending on the content direction.
	 * Content stuff like editsection, ul/ol and TOC depend on this.
	 */
	.mw-content-ltr {
		/* @noflip */
		direction: ltr;
	}
	.mw-content-rtl {
		/* @noflip */
		direction: rtl;
	}
	
	/* Most input fields should be in site direction */
	.sitedir-ltr textarea,
	.sitedir-ltr input {
		/* @noflip */
		direction: ltr;
	}
	.sitedir-rtl textarea,
	.sitedir-rtl input {
		/* @noflip */
		direction: rtl;
	}
	
	/* User-Agent styles for new HTML5 elements */
	mark {
		background-color: yellow;
		color: black;
	}
	
	/* Input types that should follow user direction, like buttons */
	/* TODO: What about buttons in wikipage content ? */
	input[type="submit"],
	input[type="button"],
	input[type="reset"],
	input[type="file"] {
		direction: ltr;
	}
	
	/* Override default values */
	textarea[dir="ltr"],
	input[dir="ltr"] {
		/* @noflip */
		direction: ltr;
	}
	textarea[dir="rtl"],
	input[dir="rtl"] {
		/* @noflip */
		direction: rtl;
	}
	
	/* Default style for semantic tags */
	abbr[title],
	.explain[title] {
		border-bottom: 1px dotted;
		cursor: help;
	}
	
	/* Colored watchlist and recent changes numbers */
	.mw-plusminus-pos {
		color: #006400; /* dark green */
	}
	.mw-plusminus-neg {
		color: #8b0000; /* dark red */
	}
	.mw-plusminus-null {
		color: #aaa; /* gray */
	}
	
	/**
	 * Links to redirects appear italicized on [[Special:AllPages]], [[Special:PrefixIndex]],
	 * [[Special:Watchlist/edit]] and in category listings.
	 */
	.allpagesredirect,
	.redirect-in-category,
	.watchlistredir {
		font-style: italic;
	}
	
	/* Comment and username portions of RC entries */
	span.comment {
		font-style: italic;
	}
	
	span.changedby {
		font-size: 95%;
	}
	
	/* Math */
	.texvc {
		direction: ltr;
		unicode-bidi: embed;
	}
	img.tex {
		vertical-align: middle;
	}
	span.texhtml {
		font-family: serif;
	}
	
	/**
	 * Add a bit of margin space between the preview and the toolbar.
	 * This replaces the ugly <p><br /></p> we used to insert into the page source
	 */
	#wikiPreview.ontop {
		margin-bottom: 1em;
	}
	
	/* Stop floats from intruding into edit area in previews */
	#editform,
	#toolbar,
	#wpTextbox1 {
		clear: both;
	}
	
	#toolbar img {
		cursor: pointer;
	}
	
	/**
	 * File description page
	 */
	
	div.mw-filepage-resolutioninfo {
		font-size: smaller;
	}
	
	/**
	 * File histories
	 */
	h2#filehistory {
		clear: both;
	}
	
	table.filehistory th,
	table.filehistory td {
		vertical-align: top;
	}
	table.filehistory th {
		text-align: left;
	}
	table.filehistory td.mw-imagepage-filesize,
	table.filehistory th.mw-imagepage-filesize {
		white-space: nowrap;
	}
	
	table.filehistory td.filehistory-selected {
		font-weight: bold;
	}
	
	/**
	 * Add a checkered background image on hover for file
	 * description pages. (bug 26470)
	 */
	.filehistory a img,
	#file img:hover {
		background: white url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAAAAAA6mKC9AAAAGElEQVQYV2N4DwX/oYBhgARgDJjEAAkAAEC99wFuu0VFAAAAAElFTkSuQmCC) repeat;
		background: white url(http://ec.europa.eu/eurostat/statistics-explained/skins/common/images/Checker-16x16.png?2014-04-01T12:25:00Z) repeat!ie;
	}
	
	/**
	 * rev_deleted stuff
	 */
	li span.deleted,
	span.history-deleted {
		text-decoration: line-through;
		color: #888;
		font-style: italic;
	}
	
	/**
	 * Patrol stuff
	 */
	.not-patrolled {
		background-color: #ffa;
	}
	
	.unpatrolled {
		font-weight: bold;
		color: red;
	}
	
	div.patrollink {
		font-size: 75%;
		text-align: right;
	}
	
	/**
	 * Forms
	 */
	td.mw-label {
		text-align: right;
	}
	td.mw-input {
		text-align: left;
	}
	td.mw-submit {
		text-align: left;
	}
	
	td.mw-label {
		vertical-align: top;
	}
	.prefsection td.mw-label {
		width: 20%;
	}
	.prefsection table {
		width: 100%;
	}
	.prefsection table.mw-htmlform-matrix {
		width: auto;
	}
	
	.mw-icon-question {
		background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAMAAABFNRROAAAAYFBMVEX///+AgIBVVVVVVVVVVVVVVVVXV1dWVlZWVlZZWVlXV1dWVlZXV1dYWFhYWFhXV1dXV1dXV1dXV1dYWFhXV1dXV1dXV1dXV1dXV1dWVlZXV1dXV1dXV1dXV1dXV1dXV1eAokvNAAAAH3RSTlMAAgMMDxIyQURIe3+Tmqasrby/w83R09zl6fHz+fv81iRuaAAAAGxJREFUeNpdjtkSglAMQ8PiRa1lkSrIBfn/vyQZnyQPOW3T6RRU8sjhCVJp2y5tVrIzVuvzQzeuMZlqFC3TBNfW8L40hCN2qcedHshq1ur6JfIvm28vIeDC8lgE502iQ0fnTZg4amanX/7/PACrGg1LAsGCgwAAAABJRU5ErkJggg==) no-repeat;
		background: url(http://ec.europa.eu/eurostat/statistics-explained/skins/common/images/question-small.png?2014-04-01T12:25:00Z) no-repeat!ie;
		/* SVG support using a transparent gradient to guarantee cross-browser
		 * compatibility (browsers able to understand gradient syntax support also SVG)
		 * lifted from #pt-login css rule in skins/vector/screen.css */
		background: -webkit-linear-gradient(transparent, transparent), url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE2LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IgoJIHdpZHRoPSIyMS4wNTlweCIgaGVpZ2h0PSIyMS4wNnB4IiB2aWV3Qm94PSIwIDAgMjEuMDU5IDIxLjA2IiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAyMS4wNTkgMjEuMDYiIHhtbDpzcGFjZT0icHJlc2VydmUiPgo8cGF0aCBmaWxsPSIjNTc1NzU3IiBkPSJNMTAuNTI5LDBDNC43MTUsMCwwLDQuNzE0LDAsMTAuNTI5czQuNzE1LDEwLjUzLDEwLjUyOSwxMC41M2M1LjgxNiwwLDEwLjUyOS00LjcxNSwxMC41MjktMTAuNTMKCVMxNi4zNDYsMCwxMC41MjksMHogTTEwLjUyNywxNi43NjdjLTAuODYxLDAtMS40OTgtMC42ODgtMS40OTgtMS41MTZjMC0wLjg2MiwwLjYzNy0xLjUzNCwxLjQ5OC0xLjUzNGMwLjgyOCwwLDEuNSwwLjY3MiwxLjUsMS41MzQKCUMxMi4wMjcsMTYuMDc4LDExLjM1NSwxNi43NjcsMTAuNTI3LDE2Ljc2N3ogTTEyLjY2NCwxMC4yNTVjLTAuNzIzLDAuNTY4LTEsMC45MzEtMSwxLjczOXYwLjVIOS40NTl2LTAuNjAzCgljMC0xLjUxNywwLjQ0OS0yLjEzNiwxLjE1NC0yLjY4OGMwLjcwNy0wLjU1MiwxLjEzOS0wLjg0NSwxLjEzOS0xLjYzN2MwLTAuNjcyLTAuNDE0LTEuMDUxLTEuMjQtMS4wNTEKCWMtMC43MDcsMC0xLjMyOCwwLjE4OS0xLjk4MiwwLjYzOEw3LjQ3OSw1LjM0NmMwLjg2MS0wLjYwNCwxLjkzLTEuMDM0LDMuMzQyLTEuMDM0YzEuOTEyLDAsMy41MTYsMS4wNTEsMy41MTYsMy4wNjYKCUMxNC4zMzYsOC44MDgsMTMuNTQzLDkuNTY2LDEyLjY2NCwxMC4yNTV6Ii8+Cjwvc3ZnPgo=) no-repeat;
		background: -webkit-linear-gradient(transparent, transparent), url(http://ec.europa.eu/eurostat/statistics-explained/skins/common/images/question.svg?2014-04-01T12:25:00Z) no-repeat!ie;
		background: linear-gradient(transparent, transparent), url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE2LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IgoJIHdpZHRoPSIyMS4wNTlweCIgaGVpZ2h0PSIyMS4wNnB4IiB2aWV3Qm94PSIwIDAgMjEuMDU5IDIxLjA2IiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAyMS4wNTkgMjEuMDYiIHhtbDpzcGFjZT0icHJlc2VydmUiPgo8cGF0aCBmaWxsPSIjNTc1NzU3IiBkPSJNMTAuNTI5LDBDNC43MTUsMCwwLDQuNzE0LDAsMTAuNTI5czQuNzE1LDEwLjUzLDEwLjUyOSwxMC41M2M1LjgxNiwwLDEwLjUyOS00LjcxNSwxMC41MjktMTAuNTMKCVMxNi4zNDYsMCwxMC41MjksMHogTTEwLjUyNywxNi43NjdjLTAuODYxLDAtMS40OTgtMC42ODgtMS40OTgtMS41MTZjMC0wLjg2MiwwLjYzNy0xLjUzNCwxLjQ5OC0xLjUzNGMwLjgyOCwwLDEuNSwwLjY3MiwxLjUsMS41MzQKCUMxMi4wMjcsMTYuMDc4LDExLjM1NSwxNi43NjcsMTAuNTI3LDE2Ljc2N3ogTTEyLjY2NCwxMC4yNTVjLTAuNzIzLDAuNTY4LTEsMC45MzEtMSwxLjczOXYwLjVIOS40NTl2LTAuNjAzCgljMC0xLjUxNywwLjQ0OS0yLjEzNiwxLjE1NC0yLjY4OGMwLjcwNy0wLjU1MiwxLjEzOS0wLjg0NSwxLjEzOS0xLjYzN2MwLTAuNjcyLTAuNDE0LTEuMDUxLTEuMjQtMS4wNTEKCWMtMC43MDcsMC0xLjMyOCwwLjE4OS0xLjk4MiwwLjYzOEw3LjQ3OSw1LjM0NmMwLjg2MS0wLjYwNCwxLjkzLTEuMDM0LDMuMzQyLTEuMDM0YzEuOTEyLDAsMy41MTYsMS4wNTEsMy41MTYsMy4wNjYKCUMxNC4zMzYsOC44MDgsMTMuNTQzLDkuNTY2LDEyLjY2NCwxMC4yNTV6Ii8+Cjwvc3ZnPgo=) no-repeat;
		background: linear-gradient(transparent, transparent), url(http://ec.europa.eu/eurostat/statistics-explained/skins/common/images/question.svg?2014-04-01T12:25:00Z) no-repeat!ie;
		background-size: 13px 13px;
		display: inline-block;
		height: 13px;
		width: 13px;
		margin-left: 4px;
	}
	
	.mw-icon-question:lang(ar),
	.mw-icon-question:lang(fa),
	.mw-icon-question:lang(ur) {
		-webkit-transform: scaleX(-1);
		-ms-transform: scaleX(-1);
		transform: scaleX(-1);
	}
	
	td.mw-submit {
		white-space: nowrap;
	}
	
	table.mw-htmlform-nolabel td.mw-label {
		width: 1px;
	}
	
	tr.mw-htmlform-vertical-label td.mw-label {
		text-align: left !important;
	}
	
	.mw-htmlform-invalid-input td.mw-input input {
		border-color: red;
	}
	
	.mw-htmlform-flatlist div.mw-htmlform-flatlist-item {
		display: inline;
		margin-right: 1em;
		white-space: nowrap;
	}
	
	.mw-htmlform-matrix td {
		padding-left: 0.5em;
		padding-right: 0.5em;
	}
	
	input#wpSummary {
		width: 80%;
		margin-bottom: 1em;
	}
	
	/**
	 * Image captions
	 */
	/* @noflip */
	.mw-content-ltr .thumbcaption {
		text-align: left;
	}
	/* @noflip */
	.mw-content-rtl .thumbcaption {
		text-align: right;
	}
	/* @noflip */
	.mw-content-ltr .magnify {
		float: right;
	}
	/* @noflip */
	.mw-content-rtl .magnify {
		float: left;
	}
	
	/**
	 * Categories
	 */
	#catlinks {
		/**
		 * Overrides text justification (user preference)
		 * See bug 31990
		 */
		text-align: left;
	}
	.catlinks ul {
		display: inline;
		margin: 0;
		padding: 0;
		list-style: none;
		list-style-type: none;
		list-style-image: none;
		vertical-align: middle !ie;
	}
	
	.catlinks li {
		display: inline-block;
		line-height: 1.25em;
		border-left: 1px solid #AAA;
		margin: 0.125em 0;
		padding: 0 0.5em;
		zoom: 1;
		display: inline !ie;
	}
	
	.catlinks li:first-child {
		padding-left: 0.25em;
		border-left: none;
	}
	
	/* (bug 5346) make category redirects italic */
	.catlinks li a.mw-redirect {
		font-style: italic;
	}
	/**
	 * Hidden categories
	 */
	.mw-hidden-cats-hidden {
		display: none;
	}
	.catlinks-allhidden {
		display: none;
	}
	
	/* Convenience links to edit block, delete and protect reasons */
	p.mw-ipb-conveniencelinks,
	p.mw-protect-editreasons,
	p.mw-filedelete-editreasons,
	p.mw-delete-editreasons,
	p.mw-revdel-editreasons {
		font-size: 90%;
		text-align: right;
	}
	
	/**
	 * OpenSearch ajax suggestions
	 */
	.os-suggest {
		overflow: auto;
		overflow-x: hidden;
		position: absolute;
		top: 0;
		left: 0;
		width: 0;
		background-color: white;
		border-style: solid;
		border-color: #AAAAAA;
		border-width: 1px;
		z-index:99;
		font-size:95%;
	}
	
	table.os-suggest-results {
		font-size: 95%;
		cursor: pointer;
		border: 0;
		border-collapse: collapse;
		width: 100%;
	}
	
	.os-suggest-result,
	.os-suggest-result-hl {
		white-space: nowrap;
		background-color: white;
		color: black;
		padding: 2px;
	}
	.os-suggest-result-hl,
	.os-suggest-result-hl-webkit {
		background-color: #4C59A6;
		color: white;
	}
	
	.os-suggest-toggle {
		position: relative;
		left: 1ex;
		font-size: 65%;
	}
	.os-suggest-toggle-def {
		position: absolute;
		top: 0;
		left: 0;
		font-size: 65%;
		visibility: hidden;
	}
	
	/* Page history styling */
	
	/* The auto-generated edit comments */
	.autocomment {
		color: gray;
	}
	#pagehistory .history-user {
		margin-left: 0.4em;
		margin-right: 0.2em;
	}
	#pagehistory span.minor {
		font-weight: bold;
	}
	#pagehistory li {
		border: 1px solid white;
	}
	#pagehistory li.selected {
		background-color: #f9f9f9;
		border: 1px dashed #aaa;
	}
	
	.mw-history-revisiondelete-button, #mw-fileduplicatesearch-icon {
		float: right;
	}
	
	/** Generic minor/bot/newpage styling (recent changes) */
	.newpage,
	.minoredit,
	.botedit {
		font-weight: bold;
	}
	
	#shared-image-dup,
	#shared-image-conflict {
		font-style: italic;
	}
	
	/**
	 * Recreating deleted page warning
	 * Reupload file warning
	 * Page protection warning
	 * incl. log entries for these warnings
	 */
	div.mw-warning-with-logexcerpt {
		padding: 3px;
		margin-bottom: 3px;
		border: 2px solid #2F6FAB;
		clear: both;
	}
	div.mw-warning-with-logexcerpt ul li {
		font-size: 90%;
	}
	
	/* (show/hide) revision deletion links */
	span.mw-revdelundel-link,
	strong.mw-revdelundel-link {
		font-size: 90%;
	}
	span.mw-revdelundel-hidden,
	input.mw-revdelundel-hidden {
		visibility: hidden;
	}
	
	td.mw-revdel-checkbox,
	th.mw-revdel-checkbox {
		padding-right: 10px;
		text-align: center;
	}
	
	/* red links; see bug 36276 */
	a.new {
		color: #BA0000;
	}
	
	/* feed links */
	a.feedlink {
		background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAB5UlEQVR42k2SzU8TQQDF5+8w8S8QRWl2t90tFxOPxosxYuIBkBjiCROpWiV8tIKUtoomJhgIMcSEC4SIcNCDxnD14sHEbpCW7nbb0m7p9mu37TxnhkCc0xzee/m9N0N+DZ47nw77UuYzhZrPFViTfhQiARRnVRzNqyjHNdgJjRoROcW1hIn17FgvrLkbyE/2ozBxBaWZPthzPlQTEupvZDTfKXCXAjAjsk5YKj0cuwjadMBPO/cbja9xVF+r/4n9aK+oqLwKUpKb8CMX6oWzu4DWz010naIwUjuN1vrAmbjxVoG9EATJTwUERu3TFJy1IZaswf0eAzou4DrobN4V4uOYhCPWixSjqmCmrROkbmkf7sYwvK0RxtcErWRxnNRQmu5DYToAwlyiYO3DALy9RcCrs3QPne378L69FCH1L0lYTy7DYvikPK+JNRrvrzHmO/DWbzFTjXXIiOSubaBd+Avj4SWYYQXEjgfFGrSk86robA3C+5EQydW1UdT3Pop7NnwVRogbkhrl03X/7AA1C83V63CWb54YPsdR2ZgVdyN6G5lxiRJzRtLZo/DpTtfgBTmzwEg/6MH+vQvQh3pwEPLp4msYUSVVSQZpOaah+EJFnq3B38d4KuNwXEbmkUQPHvvE1/gHGQ6mWZBs5g0AAAAASUVORK5CYII=) center left no-repeat;
		background: url(http://ec.europa.eu/eurostat/statistics-explained/skins/common/images/feed-icon.png?2014-04-01T12:25:00Z) center left no-repeat!ie;
		padding-left: 16px;
	}
	
	/* Plainlinks - this can be used to switch
	 * off special external link styling */
	.plainlinks a {
		background: none !important;
		padding: 0 !important;
	}
	/* External URLs should always be treated as LTR (bug 4330) */
	/* @noflip */ .rtl a.external.free,
	.rtl a.external.autonumber {
		direction: ltr;
		unicode-bidi: embed;
	}
	
	/**
	 * wikitable class for skinning normal tables
	 * keep in sync with commonPrint.css
	 */
	table.wikitable {
		margin: 1em 0;
		background-color: #f9f9f9;
		border: 1px #aaa solid;
		border-collapse: collapse;
		color: black;
	}
	table.wikitable > tr > th,
	table.wikitable > tr > td,
	table.wikitable > * > tr > th,
	table.wikitable > * > tr > td {
		border: 1px #aaa solid;
		padding: 0.2em;
	}
	table.wikitable > tr > th,
	table.wikitable > * > tr > th {
		background-color: #f2f2f2;
		text-align: center;
	}
	table.wikitable > caption {
		font-weight: bold;
	}
	
	/* hide initially collapsed collapsable tables */
	table.collapsed tr.collapsable {
		display: none;
	}
	
	/* success and error messages */
	.error,
	.warning,
	.success {
		font-size: larger;
	}
	.error {
		color: #cc0000;
	}
	.warning {
		color: #705000;
	}
	.success {
		color: #009000;
	}
	
	.errorbox,
	.warningbox,
	.successbox {
		border: 1px solid;
		padding: .5em 1em;
		margin-bottom: 1em;
		display: -moz-inline-block;
		display: inline-block;
		zoom: 1;
		*display: inline;
	}
	.errorbox h2,
	.warningbox h2,
	.successbox h2 {
		font-size: 1em;
		color: inherit;
		font-weight: bold;
		display: inline;
		margin: 0 .5em 0 0;
		border: none;
	}
	.errorbox {
		color: #cc0000;
		border-color: #fac5c5;
		background-color: #fae3e3;
	}
	.warningbox {
		color: #705000;
		border-color: #fde29b;
		background-color: #fdf1d1;
	}
	.successbox {
		color: #009000;
		border-color: #b7fdb5;
		background-color: #e1fddf;
	}
	
	/* general info/warning box for SP */
	.mw-infobox {
		border: 2px solid #ff7f00;
		margin: 0.5em;
		clear: left;
		overflow: hidden;
	}
	
	.mw-infobox-left {
		margin: 7px;
		float: left;
		width: 35px;
	}
	
	.mw-infobox-right {
		margin: 0.5em 0.5em 0.5em 49px;
	}
	
	/* Note on preview page */
	.previewnote {
		color: #c00;
		margin-bottom: 1em;
	}
	
	.previewnote p {
		text-indent: 3em;
		margin: 0.8em 0;
	}
	
	.visualClear {
		clear: both;
	}
	
	#mw_trackbacks {
		border: solid 1px #bbbbff;
		background-color: #eeeeff;
		padding: 0.2em;
	}
	
	/**
	 * Data table style
	 *
	 * Transparent table with suddle borders
	 * and blue row-highlighting.
	 */
	.mw-datatable {
		border-collapse: collapse;
	}
	.mw-datatable,
	.mw-datatable td,
	.mw-datatable th {
		border: 1px solid #aaaaaa;
		padding: 0 0.15em 0 0.15em;
	}
	.mw-datatable th {
		background-color: #ddddff;
	}
	.mw-datatable td {
		background-color: #ffffff;
	}
	.mw-datatable tr:hover td {
		background-color: #eeeeff;
	}
	
	
	/**
	 * TablePager tables generated by the TablePager PHP class
	 * in MediaWiki (e.g. Special:ListFiles).
	 */
	.TablePager {
		min-width: 80%;
	}
	.TablePager_nav {
		margin: 0 auto;
	}
	.TablePager_nav td {
		padding: 3px;
		text-align: center;
	}
	.TablePager_nav a {
		text-decoration: none;
	}
	
	.imagelist td,
	.imagelist th {
		white-space: nowrap;
	}
	.imagelist .TablePager_col_links {
		background-color: #eeeeff;
	}
	.imagelist .TablePager_col_img_description {
		white-space: normal;
	}
	.imagelist th.TablePager_sort {
		background-color: #ccccff;
	}
	
	/* filetoc */
	ul#filetoc {
		text-align: center;
		border: 1px solid #aaaaaa;
		background-color: #f9f9f9;
		padding: 5px;
		font-size: 95%;
		margin-bottom: 0.5em;
		margin-left: 0;
		margin-right: 0;
	}
	
	#filetoc li {
		display: inline;
		list-style-type: none;
		padding-right: 2em;
	}
	
	/* Classes for Exif data display */
	table.mw_metadata {
		font-size: 0.8em;
		margin-left: 0.5em;
		margin-bottom: 0.5em;
		width: 400px;
	}
	
	table.mw_metadata caption {
		font-weight: bold;
	}
	
	table.mw_metadata th {
		font-weight: normal;
	}
	
	table.mw_metadata td {
		padding: 0.1em;
	}
	
	table.mw_metadata {
		border: none;
		border-collapse: collapse;
	}
	
	table.mw_metadata td,
	table.mw_metadata th {
		text-align: center;
		border: 1px solid #aaaaaa;
		padding-left: 5px;
		padding-right: 5px;
	}
	
	table.mw_metadata th {
		background-color: #f9f9f9;
	}
	
	table.mw_metadata td {
		background-color: #fcfcfc;
	}
	
	table.mw_metadata ul.metadata-langlist {
		list-style-type: none;
		list-style-image: none;
		padding-right: 5px;
		padding-left: 5px;
		margin: 0;
	}
	
	/* Correct directionality when page dir is different from site/user dir */
	.mw-content-ltr ul,
	.mw-content-rtl .mw-content-ltr ul {
		/* @noflip */
		margin: 0.3em 0 0 1.6em;
		padding: 0;
	}
	.mw-content-rtl ul,
	.mw-content-ltr .mw-content-rtl ul {
		/* @noflip */
		margin: 0.3em 1.6em 0 0;
		padding: 0;
	}
	.mw-content-ltr ol,
	.mw-content-rtl .mw-content-ltr ol {
		/* @noflip */
		margin: 0.3em 0 0 3.2em;
		padding: 0;
	}
	.mw-content-rtl ol,
	.mw-content-ltr .mw-content-rtl ol {
		/* @noflip */
		margin: 0.3em 3.2em 0 0;
		padding: 0;
	}
	/* @noflip */
	.mw-content-ltr dd,
	.mw-content-rtl .mw-content-ltr dd {
		margin-left: 1.6em;
		margin-right: 0;
	}
	/* @noflip */
	.mw-content-rtl dd,
	.mw-content-ltr .mw-content-rtl dd {
		margin-right: 1.6em;
		margin-left: 0;
	}
	
	/* Galleries */
	/* These display attributes look nonsensical, but are needed to support IE and FF2 */
	/* Don't forget to update commonPrint.css */
	li.gallerybox {
		vertical-align: top;
		display: -moz-inline-box;
		display: inline-block;
	}
	
	ul.gallery,
	li.gallerybox {
		zoom: 1;
		*display: inline;
	}
	
	ul.gallery {
		margin: 2px;
		padding: 2px;
		display: block;
	}
	
	li.gallerycaption {
		font-weight: bold;
		text-align: center;
		display: block;
		word-wrap: break-word;
	}
	
	li.gallerybox div.thumb {
		text-align: center;
		border: 1px solid #ccc;
		background-color: #f9f9f9;
		margin: 2px;
	}
	
	li.gallerybox div.thumb img {
		display: block;
		margin: 0 auto;
	}
	
	div.gallerytext {
		overflow: hidden;
		font-size: 94%;
		padding: 2px 4px;
		word-wrap: break-word;
	}
	
	/* new gallery stuff */
	ul.mw-gallery-nolines li.gallerybox div.thumb {
		background-color: transparent;
		border: none;
	}
	
	ul.mw-gallery-nolines li.gallerybox div.gallerytext {
		text-align: center;
	}
	
	/* height constrained gallery */
	
	ul.mw-gallery-packed li.gallerybox div.thumb,
	ul.mw-gallery-packed-overlay li.gallerybox div.thumb,
	ul.mw-gallery-packed-hover li.gallerybox div.thumb {
		background-color: transparent;
		border: none;
	}
	ul.mw-gallery-packed li.gallerybox div.thumb img,
	ul.mw-gallery-packed-overlay li.gallerybox div.thumb img,
	ul.mw-gallery-packed-hover li.gallerybox div.thumb img {
		margin: 0 auto;
	}
	
	ul.mw-gallery-packed-hover li.gallerybox,
	ul.mw-gallery-packed-overlay li.gallerybox {
		position:relative;
	}
	
	ul.mw-gallery-packed-hover div.gallerytextwrapper {
		overflow: hidden;
		height: 0;
	}
	
	ul.mw-gallery-packed-hover li.gallerybox:hover div.gallerytextwrapper,
	ul.mw-gallery-packed-overlay li.gallerybox div.gallerytextwrapper,
	ul.mw-gallery-packed-hover li.gallerybox.mw-gallery-focused div.gallerytextwrapper {
		position:absolute;
		opacity:.8;
		filter:alpha(opacity=80);
		zoom: 1;
		background-color:white;
		padding: 5px 10px;
		bottom: 0;
		left: 0; /* Needed for IE */
		height: auto;
		font-weight: bold;
		margin: 2px; /* correspond to style on div.thumb */
	}
	
	ul.mw-gallery-packed-hover,
	ul.mw-gallery-packed-overlay,
	ul.mw-gallery-packed {
		text-align: center;
	}
	
	ul.mw-gallery-packed-hover div.gallerytext,
	ul.mw-gallery-packed-overlay div.gallerytext {
		opacity: 1;
		position: relative; /* Resets opacity in old IE */
	}
	
	
	.mw-ajax-loader {
		background-image: url(data:image/gif;base64,R0lGODlhIAAgAOMAAP///wAAAMbGxoSEhLa2tpqamjY2NlZWVtjY2OTk5Ly8vB4eHgQEBP///////////yH/C05FVFNDQVBFMi4wAwEAAAAh+QQFCgAPACwAAAAAIAAgAAAE5/DJSWlhperN52JLhSSdRgwVo1ICQZRUsiwHpTJT4iowNS8vyW2icCF6k8HMMBk+EDskxTBDPZwuAkkqIfxIQyhBQBFvHwSDITM5VDW6XNE4KagNh6Bgwe60smQUB3d4Rz1ZBApnFASDd0hihh12BkE9kjAJVlycXIg7CQIFA6SlnJ87paqbSKiKoqusnbMdmDC2tXQlkUhziYtyWTxIfy6BE8WJt5YJvpJivxNaGmLHT0VnOgSYf0dZXS7APdpB309RnHOG5g/qXGLDaC457D1zZ/V/nmOM82XiHRLYKhKP1oZmADdEAAAh+QQFCgAPACwAAAAAGAAXAAAEcvDJSesiNetplqlDsYnUYlIGw2jGV55SoS5sq0wmLS3qoBWtAw42mG0ehxYp90CoGKRNy8U8qFzNweCGwlJkgolCq0VIEAbMkUIghxLrDcLti2/Gg7D9qN774wkKBIOEfw+ChIV/gYmDho+QkZKTR3p7EQAh+QQFCgAPACwBAAAAHQAOAAAEcvDJSScxNev9jjkZwU2IUhkodSzLKA2DOKGYRLD1CA/InEoGlkui2PlyuKGkADM9aI8EayGbJDYI4zM1YIEmAwajkCAoehNmTNNaLsQMHmGuuEYHgpHAAGfUBHNzeUp9VBQJCoFOLmFxWHNoQweRWEocEQAh+QQFCgAPACwHAAAAGQARAAAEavDJ+cQQNOtdRsnf9iRINpyZYYgEgU3nQKnr1hIJjEqHGmqIlkInexRUB5FE0So9YhKaUpK4SaAPlWaxIFAETQ3B4BxzF2Kn8nBeJKebdm3SgksKXDt8kNP7/xoMgoMLP36DiAyAD4kMhREAIfkEBQoADwAsDgAAABIAGAAABGUQFfSqvZiUghXF1cZZxTCA4WYh5omKVqugD/woLV2rT/u9KoJpFDIYaIJBwnIwGogoivOoq0wPs6r1qe16v5WFeEzVjc+LKnphIIC9g193wGC4uvX6Aoo05BllVQULeXdadAxuEQAh+QQFCgAPACwOAAAAEgAeAAAEgDCp9Kq9WBGFBb5ECBbFV4XERaYmahGk14qPQJbm4z53foq2AquiGAwQJsQQYTRyfIlCc4DzTY8+i8CZxQy74KxhTD58P+S0Qaw+hN8WyruwWMDrdcM5ecAv3CYDDDIEBngmBwwMaxeGJgmKDFVdggx2bwuKA28EkXAGinJhVCYRACH5BAUKAA8ALA8AAQARAB8AAAR88Mn5UKIYC0KyT5ziZQqHjBQSohRHXGzFCSkHU/eTlCa7uTSUi6DIeVSEU0yiXDo9g6i0EIRKr6hrlPrsOgkGQ8EZDh+eZcOosKAcymPKYLE4TwphCWMvoS86HnsME3RqgXwSBnQjghR+h4MTB4sZjRiAGAsMbU4FDHFLEQAh+QQFCgAPACwIAA4AGAASAAAEbPDJSesjOKtk+8yg4nkgto1oihIqKgyD2FpwjcxUUtRDMROG2wPBkz0EjEHHYKgoYMKHgcE4PBZYCbM5KlAZHOxCUmBaPQuq8pqVHJg+GnUsEVO2nTQjzqZPmB1UXHVtE3wVOxUGC4M4H34qEQAh+QQFCgAPACwCABIAHQAOAAAEePDJSat96FJ0tEUEkV0DwwwepYSEklDEYpopJbCEIBkzY+geweD1SKxCiJJpUZAgmBbCYNCcIFaJggk1OSwWKINYMh2MLMRJ7LsbPxTl2sTAbhsmhalC/vje7VZxNXQLBHNuEnlcKV8dh38TCmcehhUHBo58cpA1EQAh+QQFCgAPACwAAA8AGQARAAAEZ7AsRuu7OOtbO9tgJnlfaJ7omQwpuixFCxrvK2dHvRwoQmw1w+8i3PgIggzBpjEYLoPohUBNoJzPR5T1OCpOB2dMK70oqIhQwcmDlh8J6nCDzWwzAmrIqblnEFZqGgUDYzcaAgNJGxEAIfkEBQoADwAsAQAIABEAGAAABFyQMDaevfiOyVbJ4GNwjCGEWLGQaLZRbYZUcW3feK7vaGEYNsXh96sRgYiW73e4JAYn0O9zKQwGhAdhi5pdLdts6DpQgLkgBfkSHl+TZ7ELi2mDEHKLgmC+JRQJEQAh+QQFCgAPACwAAAIADgAdAAAEcvDJ+cqgeDJmMt4M4U3DtozTsl1oASJpRxnbkS6LIT4Cw0oHHO4A8xAMwhPqgSssH4nnknAwWK+Zq1ZGoW650vAOpRgMBCOEee2xrAtRTNlcQEsI8Yd6oKAICARFHgmAYx4KgIIZCIB9ZIB5RgR2KAmKEQA7);
		background-image: url(http://ec.europa.eu/eurostat/statistics-explained/skins/common/images/ajax-loader.gif?2014-04-01T12:25:00Z)!ie;
		background-position: center center;
		background-repeat: no-repeat;
		padding: 16px;
		position: relative;
		top: -16px;
	}
	
	.mw-small-spinner {
		padding: 10px !important;
		margin-right: 0.6em;
		background-image: url(data:image/gif;base64,R0lGODlhFAAUAIQQAAYJBRkbGCYnJTI0MT9APk5QTVhZV2ZoZXR2c4SGg5CSj52fnKyuq7m7uMfJxtPV0v///////////////////////////////////////////////////////////////yH/C05FVFNDQVBFMi4wAwEAAAAh+QQJCgABACwAAAAAFAAUAAAFc2AgjuNQkCipHCMAiI6TjoWAiG7gNM08CgTca+cbGWyBXEMm6okMJxGBNWLuGo8ngWBY+HgxlIFwm4VnimKKkWgn1Dzwwv0uxpfqfJWZ2p1hV0VXTA9gMCRETXxOOj08jXxfMo+NcHiUgT5nlAFZejqRKCEAIfkECQoADAAsAAAAABQAFAAABXYgI45jcZAouSSjIIjDkI4HwTJBIALvLBIFUY4xAPhoA1ZAcAjIRI2RQlFCkIIMR6PxEC0UiYXDt3WMSdOFz0w+prTb6DHeMNPd9LN7n9WjtGwjdnIzcGeGIn5aI3WMglFbWY14kHKLR4AMkZKEb2ebDF18fUchACH5BAkKAAEALAAAAAAUABQAAAV6YCCO44GQKOkw40CIxZuKi9KIwyAK8hwkCpyOIPCNFglWTjEojAgJkeMmUixIhiABADhIGw3HwycACLyqsI+ATo2NqCmY6puH5WC43QHvjxx8M3KBUnJGgyIPYIGEAVMjaiJ0j3lTjTN5eQGadWqainQpgJJ0b36jPiEAIfkECQoAAQAsAAAAABQAFAAABXVgII7jwpAo+TxjkoiGkY5OwwauSBTz2DSinIHQozUcuISCIIMpRDUfcoRYBAwCwQH6c9xSBAEBgapNUwfy7Fs0/oBFgBwwqL3bcwCvzYeey10qdkV2Uw+BAX9RIkc+RgE/iY1tkZGSlI2Wgz0OU5YBbG2dRSEAIfkECQoACAAsAAAAABQAFAAABXcgIo4j05Ao+TjjsohuOjoNi8RIoshjDb+KBG/mczUUL9EhSevZYKwDgSBE0GoPXmFgqBKfqIMXlR2iro3TMCBgF9BqXpt9MKPGJAeYRAhw81dDAwAAAyIPaTZgTSIChiJxTWlWPmaTk5SWPpiBPHqQcWV2VnskIQAh+QQJCgABACwAAAAAFAAUAAAFemAgjqPjkCj5nGLTiAyTlg3rios8t/bLLDvayeXIjRYsx4tHcjwCi0RCp6w9Z4qEQifcxXbXYNN1Cw7Og0O1vEMTEGKUYmfaGQaEQ7O6WxQEAwUiD0QiLCIEAiMEBCNLAUoBNwcAA3E3ZQIAYoVllI10PSMHCXGGhykhACH5BAkKAAEALAAAAAAUABQAAAV3YCCOo+OQKPmcYtOIZlo2T/sGDSvjrBs4t90vh6MRYbXh6Igc0mAuRzIV1UGtpJhsKpy5grKEOLEAfrvjBKOLUuy0KQTBkMiadwsDYS56RGEkBwQjBQZLMwEAAAEIAoZdPooiBAKQRJKMAgVCWpgBB25sAQUDQiEAIfkECQoAEAAsAAAAABQAFAAABXsgJI6j45Ao+Zxi04hmWjZP+0INK+OsCzm33S+HoxFhteHoiBzSYC5HMhXVQa2kmGwqnLmCsm8O+O2KseadNrVQKBhZsnqRSChEj6iIQEIURm5LIwMBCAIBEAkDB10QAAIQAYgQBnxChyKYiQSMOwKQEJ8jCQuNIgd/OyEAIfkECQoAHwAsAAAAABQAFAAABXzgJ46j45Ao+Zxi04hmWjZP+34NK+Os+zm33S+HoxFhteHoiBzSYC5HMhXVQa2kmGwqnLmCsm8O+O2KsV0u6UDYAbWigwAg2K2iIgMAMPgsDCQMCkssCW0iBQMKA30MCQtdHwNtjCILCV0EfZKbDY9CBAUimiMMaDIIgDshACH5BAkKAB8ALAAAAAAUABQAAAV44CeOo+OQKPmcYtOIZlo2T/t+DSvjrPs5t90vh6MRYbXh6Igc0mAuRzIV1UGtpJhsKhwVAGBA1xUdhMVCMrMr4pIQhx1QK0IQBITdKio6CAQFHwsIWUFHCoEiBgQKCQlDWCkEgY5QXQV5H5WQQgWJmx8PbjsMC0IhACH5BAkKAB8ALAAAAAAUABQAAAV14CeOo+OQKPmcYtO0bwo/cC3b7pffotOcrsevRPsMBKMh8eNrFAcBwEBxczlRUMLNdEvwUgWAGPC1/gZjMs9c/I7aqMRh62KJEoZB4bay3gkEcw4LJD5JMQtzIgsKfj52XVQ7OzcKVDoxQjEyCoSYb3A8XDchACH5BAEKAB8ALAAAAAAUABQAAAV64CeOo+OQKJkcY9OIZjoSAPu5Ii6LgJC/jtdONKjdGo/GCfYQEQYjAYHkaAaVosJgUFjsXDHS07ALpxTDFOK5TbvAh217+MamSU0Zg1FWLkUMCgloMg9XSwwJCV6GVEI3Sw5eMEg4QX9fJzo6X0I6SZgoYZwPeXdmKSEAOw==);
		background-image: url(http://ec.europa.eu/eurostat/statistics-explained/skins/common/images/spinner.gif?2014-04-01T12:25:00Z)!ie;
		background-position: center center;
		background-repeat: no-repeat;
	}
	
	/* Language specific height correction for titles. Ref Bug 29405 and Bug 30809 */
	/* Languages like hi or ml require slightly more vertical space to show diacritics properly */
	h1:lang(anp),
	h1:lang(as),
	h1:lang(bh), /* Macrolanguage, used on bh.wikipedia.org, should be removed one day */
	h1:lang(bho),
	h1:lang(bn),
	h1:lang(gu),
	h1:lang(hi),
	h1:lang(kn),
	h1:lang(ks),
	h1:lang(ml),
	h1:lang(mr),
	h1:lang(my),
	h1:lang(mai),
	h1:lang(ne),
	h1:lang(new),
	h1:lang(or),
	h1:lang(pa),
	h1:lang(pi),
	h1:lang(sa),
	h1:lang(ta),
	h1:lang(te) {
		line-height: 1.6em !important;
	}
	h2:lang(anp), h3:lang(anp), h4:lang(anp), h5:lang(anp), h6:lang(anp),
	h2:lang(as), h3:lang(as), h4:lang(as), h5:lang(as), h6:lang(as),
	h2:lang(bho), h3:lang(bho), h4:lang(bho), h5:lang(bho), h6:lang(bho),
	h2:lang(bh), h3:lang(bh), h4:lang(bh), h5:lang(bh), h6:lang(bh),
	h2:lang(bn), h3:lang(bn), h4:lang(bn), h5:lang(bn), h6:lang(bn),
	h2:lang(gu), h3:lang(gu), h4:lang(gu), h5:lang(gu), h6:lang(gu),
	h2:lang(hi), h3:lang(hi), h4:lang(hi), h5:lang(hi), h6:lang(hi),
	h2:lang(kn), h3:lang(kn), h4:lang(kn), h5:lang(kn), h6:lang(kn),
	h2:lang(ks), h3:lang(ks), h4:lang(ks), h5:lang(ks), h6:lang(ks),
	h2:lang(ml), h3:lang(ml), h4:lang(ml), h5:lang(ml), h6:lang(ml),
	h2:lang(mr), h3:lang(mr), h4:lang(mr), h5:lang(mr), h6:lang(mr),
	h2:lang(my), h3:lang(my), h4:lang(my), h5:lang(my), h6:lang(my),
	h2:lang(mai), h3:lang(mai), h4:lang(mai), h5:lang(mai), h6:lang(mai),
	h2:lang(ne), h3:lang(ne), h4:lang(ne), h5:lang(ne), h6:lang(ne),
	h2:lang(new), h3:lang(new), h4:lang(new), h5:lang(new), h6:lang(new),
	h2:lang(or), h3:lang(or), h4:lang(or), h5:lang(or), h6:lang(or),
	h2:lang(pa), h3:lang(pa), h4:lang(pa), h5:lang(pa), h6:lang(pa),
	h2:lang(pi), h3:lang(pi), h4:lang(pi), h5:lang(pi), h6:lang(pi),
	h2:lang(sa), h3:lang(sa), h4:lang(sa), h5:lang(sa), h6:lang(sa),
	h2:lang(ta), h3:lang(ta), h4:lang(ta), h5:lang(ta), h6:lang(ta),
	h2:lang(te), h3:lang(te), h4:lang(te), h5:lang(te), h6:lang(te) {
		line-height: 1.2em;
	}
	
	/* Localised ordered list numbering for some languages */
	ol:lang(bcc) li,
	ol:lang(bqi) li,
	ol:lang(fa) li,
	ol:lang(glk) li,
	ol:lang(kk-arab) li,
	ol:lang(mzn) li {
		list-style-type: -moz-persian;
		list-style-type: persian;
	}
	
	ol:lang(ckb) li {
		list-style-type: -moz-arabic-indic;
		list-style-type: arabic-indic;
	}
	
	ol:lang(hi) li,
	ol:lang(mr) li {
		list-style-type: -moz-devanagari;
		list-style-type: devanagari;
	}
	
	ol:lang(as) li,
	ol:lang(bn) li {
		list-style-type: -moz-bengali;
		list-style-type: bengali;
	}
	
	ol:lang(or) li {
		list-style-type: -moz-oriya;
		list-style-type: oriya;
	}
	
	#toc ul, .toc ul {
		margin: .3em 0;
	}
	
	/* Correct directionality when page dir is different from site/user dir */
	/* @noflip */ .mw-content-ltr .toc ul,
	.mw-content-ltr #toc ul,
	.mw-content-rtl .mw-content-ltr .toc ul,
	.mw-content-rtl .mw-content-ltr #toc ul {
		text-align: left;
	}
	/* @noflip */ .mw-content-rtl .toc ul,
	.mw-content-rtl #toc ul,
	.mw-content-ltr .mw-content-rtl .toc ul,
	.mw-content-ltr .mw-content-rtl #toc ul {
		text-align: right;
	}
	/* @noflip */ .mw-content-ltr .toc ul ul,
	.mw-content-ltr #toc ul ul,
	.mw-content-rtl .mw-content-ltr .toc ul ul,
	.mw-content-rtl .mw-content-ltr #toc ul ul {
		margin: 0 0 0 2em;
	}
	/* @noflip */ .mw-content-rtl .toc ul ul,
	.mw-content-rtl #toc ul ul,
	.mw-content-ltr .mw-content-rtl .toc ul ul,
	.mw-content-ltr .mw-content-rtl #toc ul ul {
		margin: 0 2em 0 0;
	}
	
	#toc #toctitle,
	.toc #toctitle,
	#toc .toctitle,
	.toc .toctitle {
		direction: ltr;
	}
	
	/* tooltip styles */
	.mw-help-field-hint {
		display: none;
		margin-left: 2px;
		margin-bottom: -8px;
		padding: 0 0 0 15px;
		background-image: url(data:image/gif;base64,R0lGODlhCwALALMAAP///01NTZOTk1lZWefn57i4uJSUlPPz82VlZdDQ0HFxcaysrNvb28TExAAAAAAAACH5BAAAAAAALAAAAAALAAsAAAQrUIRJqQQ455nNNBgHJANBDAwgZsVwqIG2IEQYYwXy2lq/Kg3NqqeSVCqCCAA7);
		background-image: url(http://ec.europa.eu/eurostat/statistics-explained/skins/common/images/help-question.gif?2014-04-01T12:25:00Z)!ie;
		background-position: left center;
		background-repeat: no-repeat;
		cursor: pointer;
		font-size: .8em;
		text-decoration: underline;
		color: #0645ad;
	}
	.mw-help-field-hint:hover {
		background-image: url(data:image/gif;base64,R0lGODlhCwALALMAAAtop+7z+GCWwpW51oStz8rb6yZzrafF3bnR5Nzn8QBcoD91oABQmf///wAAAAAAACH/C1hNUCBEYXRhWE1QPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS4wLWMwNjAgNjEuMTM0Nzc3LCAyMDEwLzAyLzEyLTE3OjMyOjAwICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1wTU06T3JpZ2luYWxEb2N1bWVudElEPSJ4bXAuZGlkOjAyODAxMTc0MDcyMDY4MTE5NkQ0QUQzRjI0NzRCNUQwIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjJBN0FFQTQwQjlGQzExREY5RDlBQTRBODQyMkJCMkFDIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjJBN0FFQTNGQjlGQzExREY5RDlBQTRBODQyMkJCMkFDIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RkM3RjExNzQwNzIwNjgxMTk1RkVBQ0ZBOEQxNTU5MkUiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MDI4MDExNzQwNzIwNjgxMTk2RDRBRDNGMjQ3NEI1RDAiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4B//79/Pv6+fj39vX08/Lx8O/u7ezr6uno5+bl5OPi4eDf3t3c29rZ2NfW1dTT0tHQz87NzMvKycjHxsXEw8LBwL++vby7urm4t7a1tLOysbCvrq2sq6qpqKempaSjoqGgn56dnJuamZiXlpWUk5KRkI+OjYyLiomIh4aFhIOCgYB/fn18e3p5eHd2dXRzcnFwb25tbGtqaWhnZmVkY2JhYF9eXVxbWllYV1ZVVFNSUVBPTk1MS0pJSEdGRURDQkFAPz49PDs6OTg3NjU0MzIxMC8uLSwrKikoJyYlJCMiISAfHh0cGxoZGBcWFRQTEhEQDw4NDAsKCQgHBgUEAwIBAAAh+QQAAAAAACwAAAAACwALAAAEK3CxSalsOOeZxRQY1yBKkihFI2aDEqiMRgBJGGMD8NpavxoHzaqnklQqiwgAOw==);
		background-image: url(http://ec.europa.eu/eurostat/statistics-explained/skins/common/images/help-question-hover.gif?2014-04-01T12:25:00Z)!ie;
	}
	.mw-help-field-data {
		display: block;
		background-color: #d6f3ff;
		padding:5px 8px 4px 8px;
		border: 1px solid #5dc9f4;
		margin-left: 20px;
	}
	.tipsy {
		padding: 5px 5px 10px;
		font-size: 12px;
		position: absolute;
		z-index: 100000;
		overflow: visible;
	}
	.tipsy-inner {
		padding: 5px 8px 4px 8px;
		background-color: #d6f3ff;
		color: black;
		border: 1px solid #5dc9f4;
		max-width: 300px;
		text-align: left;
	}
	.tipsy-arrow {
		position: absolute;
		background: url(data:image/gif;base64,R0lGODlhDQANAMQAAPf399bz/9vu9m/O9NXy/8Pm9svp9pfd+YLW943X9LTn++z093XQ9WnM9OLw9p/c9YTU9InY9/T292DK9Jre+afj+rvq/Nzv9rjk9brl9cPt/ZLb+GbL9MLs/ZHb+KLh+iH5BAAAAAAALAAAAAANAA0AAAVK4BGMZBkcg2WW1lBEKxkVAFTFFQQAwkSYhIlgB3hQTJQHEbBodEiaxmIJyHhIGwwVIGEoAgqGZAswIAIIA3mX+CTWOwfHAd9dtiEAOw==) no-repeat top left;
		background: url(http://ec.europa.eu/eurostat/statistics-explained/skins/common/images/tipsy-arrow.gif?2014-04-01T12:25:00Z) no-repeat top left!ie;
		width: 13px;
		height: 13px;
	}
	.tipsy-se .tipsy-arrow {
		bottom: -2px;
		right: 10px;
		background-position: 0% 100%;
	}
	
	#mw-clearyourcache,
	#mw-sitecsspreview,
	#mw-sitejspreview,
	#mw-usercsspreview,
	#mw-userjspreview {
		direction: ltr;
		unicode-bidi: embed;
	}
	
	/* Correct user & content directionality when viewing a diff */
	.diff-currentversion-title,
	.diff {
		direction: ltr;
		unicode-bidi: embed;
	}
	/* @noflip */ .diff-contentalign-right td {
		direction: rtl;
		unicode-bidi: embed;
	}
	/* @noflip */ .diff-contentalign-left td {
		direction: ltr;
		unicode-bidi: embed;
	}
	.diff-multi,
	.diff-otitle,
	.diff-ntitle,
	.diff-lineno {
		direction: ltr !important;
		unicode-bidi: embed;
	}
	
	#mw-revision-info,
	#mw-revision-info-current,
	#mw-revision-nav {
		direction: ltr;
		display: inline;
	}
	
	/* Images */
	
	/* @noflip */ div.tright,
	div.floatright,
	table.floatright {
		clear: right;
		float: right;
	}
	/* @noflip */ div.tleft,
	div.floatleft,
	table.floatleft {
		float: left;
		clear: left;
	}
	div.floatright,
	table.floatright,
	div.floatleft,
	table.floatleft {
		position: relative;
	}
	
	/* bug 12205 */
	#mw-credits a {
		unicode-bidi: embed;
	}
	
	/* Accessibility */
	.mw-jump,
	#jump-to-nav {
		overflow: hidden;
		height: 0;
		zoom: 1; /* http://webaim.org/techniques/skipnav/#iequirk */
	}
	
	/* Print footer should be hidden by default in screen. */
	.printfooter {
		display: none;
	}
	
	/* For developpers */
	.xdebug-error {
		position: absolute;
		z-index: 99;
	}
	
	.mw-editsection,
	.toctoggle {
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}
	
	/* Display editsection links smaller and next to headings */
	.mw-editsection {
		font-size: small;
		font-weight: normal;
		margin-left: 1em;
		vertical-align: baseline;
		/* Reset line-height; headings tend to have it set to larger values */
		line-height: 1em;
		/* As .mw-editsection is a <span> (inline element), it is treated as part */
		/* of the heading content when selecting text by multiple clicks and thus */
		/* selected together with heading content, despite the user-select: none; */
		/* rule set above. This enforces non-selection without changing the look. */
		display: inline-block;
	}
	
	/* Correct directionality when page dir is different from site/user dir */
	/* @noflip */
	.mw-content-ltr .mw-editsection,
	.mw-content-rtl .mw-content-ltr .mw-editsection {
		margin-left: 1em;
	}
	/* @noflip */
	.mw-content-rtl .mw-editsection,
	.mw-content-ltr .mw-content-rtl .mw-editsection {
		margin-right: 1em;
	}}