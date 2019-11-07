<!DOCTYPE html>
<html class="client-nojs" lang="en" dir="ltr">

<!-- Mirrored from subpos.org/wiki/index.php?title=Coding_Mask_Calculation&action=edit by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 05:39:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8"/>
<title>View source for Coding Mask Calculation - SubPos</title>
<script>document.documentElement.className = document.documentElement.className.replace( /(^|\s)client-nojs(\s|$)/, "$1client-js$2" );</script>
<script>(window.RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Coding_Mask_Calculation","wgTitle":"Coding Mask Calculation","wgCurRevisionId":502,"wgRevisionId":0,"wgArticleId":53,"wgIsArticle":false,"wgIsRedirect":false,"wgAction":"edit","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":true,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Coding_Mask_Calculation","wgRelevantArticleId":53,"wgRequestId":"XcOqpKI8Bos5ze83YO5QTQAAAQY","wgCSPNonce":false,"wgIsProbablyEditable":false,"wgRelevantPageIsProbablyEditable":false,"wgRestrictionEdit":[],"wgRestrictionMove":[]});mw.loader.state({"site.styles":"ready","noscript":"ready","user.styles":"ready","user":"ready","user.options":"ready","user.tokens":"loading","mediawiki.legacy.shared":"ready","mediawiki.legacy.commonPrint":"ready","mediawiki.skinning.interface":"ready","skins.vector.styles":"ready"});mw.loader.implement("user.tokens@0tffind",function($,jQuery,require,module){/*@nomin*/mw.user.tokens.set({"editToken":"+\\","patrolToken":"+\\","watchToken":"+\\","csrfToken":"+\\"});
});RLPAGEMODULES=["mediawiki.action.edit.collapsibleFooter","site","mediawiki.page.startup","mediawiki.page.ready","mediawiki.searchSuggest","skins.vector.js"];mw.loader.load(RLPAGEMODULES);});</script>
<link rel="stylesheet" href="load26d3.css?lang=en&amp;modules=mediawiki.legacy.commonPrint%2Cshared%7Cmediawiki.skinning.interface%7Cskins.vector.styles&amp;only=styles&amp;skin=vector"/>
<script async="" src="load3e21.php?lang=en&amp;modules=startup&amp;only=scripts&amp;skin=vector"></script>
<meta name="ResourceLoaderDynamicStyles" content=""/>
<link rel="stylesheet" href="load2f5e.css?lang=en&amp;modules=site.styles&amp;only=styles&amp;skin=vector"/>
<meta name="generator" content="MediaWiki 1.33.0"/>
<meta name="robots" content="noindex,nofollow"/>
<link rel="shortcut icon" href="http://subpos.org/favicon.ico"/>
<link rel="search" type="application/opensearchdescription+xml" href="http://subpos.org/wiki/opensearch_desc.php" title="SubPos (en)"/>
<link rel="EditURI" type="application/rsd+xml" href="http://subpos.org/wiki/api.php?action=rsd"/>
<link rel="alternate" type="application/atom+xml" title="SubPos Atom feed" href="http://subpos.org/wiki/index.php?title=Special:RecentChanges&amp;feed=atom"/>
<!--[if lt IE 9]><script src="/wiki/load.php?lang=en&amp;modules=html5shiv&amp;only=scripts&amp;skin=vector&amp;sync=1"></script><![endif]-->
</head>
<body class="mediawiki ltr sitedir-ltr mw-hide-empty-elt ns-0 ns-subject page-Coding_Mask_Calculation rootpage-Coding_Mask_Calculation skin-vector action-edit">
<div id="mw-page-base" class="noprint"></div>
<div id="mw-head-base" class="noprint"></div>
<div id="content" class="mw-body" role="main">
	<a id="top"></a>
	
	<div class="mw-indicators mw-body-content">
</div>

	<h1 id="firstHeading" class="firstHeading" lang="en">View source for Coding Mask Calculation</h1>
	
	<div id="bodyContent" class="mw-body-content">
		
		<div id="contentSub">← <a href="http://subpos.org/wiki/index.php/Coding_Mask_Calculation" title="Coding Mask Calculation">Coding Mask Calculation</a></div>
		
		
		
		<div id="jump-to-nav"></div>
		<a class="mw-jump-link" href="#mw-head">Jump to navigation</a>
		<a class="mw-jump-link" href="#p-search">Jump to search</a>
		<div id="mw-content-text"><p>You do not have permission to edit this page, for the following reason:
</p>
<div class="permissions-errors">
<p>The action you have requested is limited to users in the group: emailconfirmed.
</p>
</div><hr />
<p>You can view and copy the source of this page.
</p><textarea readonly="" accesskey="," id="wpTextbox1" cols="80" rows="25" style="" class="mw-editfont-monospace" lang="en" dir="ltr" name="wpTextbox1">To increase compatibility of the SubPos coding in a large array of different access points and Wi-Fi receiver APIs, the coding mask consists of an "ASCII Mask" and an "Invalid Character" mask. During coding, the ASCII mask is calculated before the Invalid Character mask, and upon decoding, they occur in the reverse order.

The human readable tag at the start of the coded SSID is excluded from these mask calculations and should always be a valid character for any access point. 

== ASCII Mask ==

This mask converts all characters to ASCII since some access points don't use UTF8.

The ASCII Mask is a 3x7bit mask, with each 7 bits being stored in the lower bits of a byte (24 bits total; so we don't have to ASCII Mask the mask) that corresponds to bytes 4 to 24 (indexed 1) of the SSID. Each bit represents whether the corresponding byte is greater than 0x7F. If the byte is greater, this byte has its most significant bit set to 0 in the original array and the mask bit is set. On decode, if this bit is set, the most significant bit is set back to 1.

The following ASCII Mask bits correspond to bytes in the SSID:
{| class="wikitable"
|-
| 1
| 2
| 3
| 4
| 5
| 6
| 7
| 8
| 9
| 10
| 11
| 12
| 13
| 14
| 15
| 16
| 17
| 18
| 19
| 20
| 21
| 22
| 23
| 24
|-
| not used
| byte 4
| byte 5
| byte 6
| byte 7
| byte 8
| byte 9
| byte 10
| not used
| byte 11
| byte 12
| byte 13
| byte 14
| byte 15
| byte 16
| byte 17
| not used
| byte 18
| byte 19
| byte 20
| byte 21
| byte 22
| byte 23
| byte 24
|}

== Invalid Character Mask ==

This mask is used to convert and mask characters out that might be invalid for certain access points. For example, the most common invalid characters are:

 LF    - 0x0A
 CR    - 0x0D
 "     - 0x22	
 +     - 0x2B
 null  - 0x00
 space - 0x20

The Invalid Character Mask is a 4x7bit mask, with each 7 bits being stored in the lower bits of a byte (32 bits total; so we don't have to ASCII Mask the mask). Each bit represents whether the corresponding byte was originally an invalid character byte. If the original byte is one from an invalid list (this can be different for each access point and the decoder will still be able to decode it), this byte gets incremented by 1 in the original array and the mask bit for that corresponding byte is set. On decode, if this bit is set, the corresponding byte in the SSID gets decremented by 1. If two invalid characters are next to each other in the ASCII table for a certain access point, this access point is not supported.

The following Invalid Character Mask bits correspond to bytes in the SSID:
{| class="wikitable"
|-
| 1
| 2
| 3
| 4
| 5
| 6
| 7
| 8
| 9
| 10
| 11
| 12
| 13
| 14
| 15
| 16
| 17
| 18
| 19
| 20
| 21
| 22
| 23
| 24
| 25
| 26
| 27
| 28
|-
| not used
| byte 4
| byte 5
| byte 6
| byte 7
| byte 8
| byte 9
| byte 10
| not used
| byte 11
| byte 12
| byte 13
| byte 14
| byte 15
| byte 16
| byte 17
| not used
| byte 18
| byte 19
| byte 20
| byte 21
| byte 22
| byte 23
| byte 24
| not used
| byte 25 (ASCII mask)
| byte 26 (ASCII mask)
| byte 27 (ASCII mask)
|}

The last 4 bits are used to apply the coding mask to the mask itself. When checking the last byte of the coding mask, the final bit is set if that byte is invalid (which modifies/increments the byte itself). On decode, this last byte is self referencing and the byte is decremented if the bit is set (set the bit to 0).

{| class="wikitable"
|-
| 29
| 30
| 31
| 32
|-
| byte 28 (Invalid Char mask)
| byte 29 (Invalid Char mask)
| byte 30 (Invalid Char mask)
| byte 31 (Invalid Char mask)
|}

== Implementation ==

 C (reference design) - https://github.com/subpos/ssid_coder/blob/master/coder/ssid_coder.c

 Javascript (encoder only) - https://github.com/subpos/ssid_coder/blob/master/coder/ssid_coder.js

 Java (decoder only) - https://github.com/subpos/subpos_android_api/blob/master/SPSData.java
</textarea><div class="templatesUsed"></div><p id="mw-returnto">Return to <a href="http://subpos.org/wiki/index.php/Coding_Mask_Calculation" title="Coding Mask Calculation">Coding Mask Calculation</a>.</p>
</div>
		
		<div class="printfooter">Retrieved from "<a dir="ltr" href="http://subpos.org/wiki/index.php/Coding_Mask_Calculation">http://subpos.org/wiki/index.php/Coding_Mask_Calculation</a>"</div>
		
		<div id="catlinks" class="catlinks catlinks-allhidden" data-mw="interface"></div>
		
		<div class="visualClear"></div>
		
	</div>
</div>

		<div id="mw-navigation">
			<h2>Navigation menu</h2>
			<div id="mw-head">
									<div id="p-personal" role="navigation" aria-labelledby="p-personal-label">
						<h3 id="p-personal-label">Personal tools</h3>
						<ul>
							<li id="pt-login"><a href="http://subpos.org/wiki/index.php?title=Special:UserLogin&amp;returnto=Coding+Mask+Calculation&amp;returntoquery=action%3Dedit" title="You are encouraged to log in; however, it is not mandatory [o]" accesskey="o">Log in</a></li>						</ul>
					</div>
									<div id="left-navigation">
										<div id="p-namespaces" role="navigation" class="vectorTabs" aria-labelledby="p-namespaces-label">
						<h3 id="p-namespaces-label">Namespaces</h3>
						<ul>
							<li id="ca-nstab-main" class="selected"><span><a href="http://subpos.org/wiki/index.php/Coding_Mask_Calculation" title="View the content page [c]" accesskey="c">Page</a></span></li><li id="ca-talk" class="new"><span><a href="http://subpos.org/wiki/index.php?title=Talk:Coding_Mask_Calculation&amp;action=edit&amp;redlink=1" rel="discussion" title="Discussion about the content page (page does not exist) [t]" accesskey="t">Discussion</a></span></li>						</ul>
					</div>
										<div id="p-variants" role="navigation" class="vectorMenu emptyPortlet" aria-labelledby="p-variants-label">
												<input type="checkbox" class="vectorMenuCheckbox" aria-labelledby="p-variants-label" />
						<h3 id="p-variants-label">
							<span>Variants</span>
						</h3>
						<ul class="menu">
													</ul>
					</div>
									</div>
				<div id="right-navigation">
										<div id="p-views" role="navigation" class="vectorTabs" aria-labelledby="p-views-label">
						<h3 id="p-views-label">Views</h3>
						<ul>
							<li id="ca-view" class="collapsible"><span><a href="http://subpos.org/wiki/index.php/Coding_Mask_Calculation">Read</a></span></li><li id="ca-viewsource" class="collapsible selected"><span><a href="http://subpos.org/wiki/index.php?title=Coding_Mask_Calculation&amp;action=edit" title="This page is protected.&#10;You can view its source [e]" accesskey="e">View source</a></span></li><li id="ca-history" class="collapsible"><span><a href="http://subpos.org/wiki/index.php?title=Coding_Mask_Calculation&amp;action=history" title="Past revisions of this page [h]" accesskey="h">View history</a></span></li>						</ul>
					</div>
										<div id="p-cactions" role="navigation" class="vectorMenu emptyPortlet" aria-labelledby="p-cactions-label">
						<input type="checkbox" class="vectorMenuCheckbox" aria-labelledby="p-cactions-label" />
						<h3 id="p-cactions-label"><span>More</span></h3>
						<ul class="menu">
													</ul>
					</div>
										<div id="p-search" role="search">
						<h3>
							<label for="searchInput">Search</label>
						</h3>
						<form action="http://subpos.org/wiki/index.php" id="searchform">
							<div id="simpleSearch">
								<input type="search" name="search" placeholder="Search SubPos" title="Search SubPos [f]" accesskey="f" id="searchInput"/><input type="hidden" value="Special:Search" name="title"/><input type="submit" name="fulltext" value="Search" title="Search the pages for this text" id="mw-searchButton" class="searchButton mw-fallbackSearchButton"/><input type="submit" name="go" value="Go" title="Go to a page with this exact name if it exists" id="searchButton" class="searchButton"/>							</div>
						</form>
					</div>
									</div>
			</div>
			<div id="mw-panel">
				<div id="p-logo" role="banner"><a class="mw-wiki-logo" href="http://subpos.org/wiki/index.php/SubPos" title="Visit the main page"></a></div>
						<div class="portal" role="navigation" id="p-navigation" aria-labelledby="p-navigation-label">
			<h3 id="p-navigation-label">Navigation</h3>
			<div class="body">
								<ul>
					<li id="n-mainpage-description"><a href="http://subpos.org/wiki/index.php/SubPos" title="Visit the main page [z]" accesskey="z">Main page</a></li><li id="n-Documentation"><a href="http://subpos.org/wiki/index.php/SubPos:Documentation">Documentation</a></li><li id="n-Software"><a href="http://subpos.org/wiki/index.php/SubPos:Software">Software</a></li><li id="n-Hardware"><a href="http://subpos.org/wiki/index.php/SubPos:Hardware">Hardware</a></li><li id="n-Repository"><a href="http://subpos.org/wiki/index.php/SubPos:Repository">Repository</a></li><li id="n-Main-site"><a href="https://www.subpos.org/" rel="nofollow">Main site</a></li>				</ul>
							</div>
		</div>
			<div class="portal" role="navigation" id="p-tb" aria-labelledby="p-tb-label">
			<h3 id="p-tb-label">Tools</h3>
			<div class="body">
								<ul>
					<li id="t-whatlinkshere"><a href="http://subpos.org/wiki/index.php/Special:WhatLinksHere/Coding_Mask_Calculation" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li><li id="t-recentchangeslinked"><a href="http://subpos.org/wiki/index.php/Special:RecentChangesLinked/Coding_Mask_Calculation" rel="nofollow" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li><li id="t-specialpages"><a href="http://subpos.org/wiki/index.php/Special:SpecialPages" title="A list of all special pages [q]" accesskey="q">Special pages</a></li><li id="t-info"><a href="http://subpos.org/wiki/index.php?title=Coding_Mask_Calculation&amp;action=info" title="More information about this page">Page information</a></li>				</ul>
							</div>
		</div>
				</div>
		</div>
				<div id="footer" role="contentinfo">
						<ul id="footer-places">
								<li id="footer-places-privacy"><a href="http://subpos.org/wiki/index.php/SubPos:Privacy_policy" title="SubPos:Privacy policy">Privacy policy</a></li>
								<li id="footer-places-about"><a href="http://subpos.org/wiki/index.php/SubPos:About" title="SubPos:About">About SubPos</a></li>
								<li id="footer-places-disclaimer"><a href="http://subpos.org/wiki/index.php/SubPos:General_disclaimer" title="SubPos:General disclaimer">Disclaimers</a></li>
							</ul>
									<div style="clear: both;"></div>
		</div>
		

<script>(window.RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgBackendResponseTime":76});});</script>
</body>

<!-- Mirrored from subpos.org/wiki/index.php?title=Coding_Mask_Calculation&action=edit by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 05:39:19 GMT -->
</html>
