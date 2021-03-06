<!DOCTYPE html>
<html class="client-nojs" lang="en" dir="ltr">

<!-- Mirrored from subpos.org/wiki/index.php?title=Coding_Mask_Calculation&printable=yes by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 05:39:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8"/>
<title>Coding Mask Calculation - SubPos</title>
<script>document.documentElement.className = document.documentElement.className.replace( /(^|\s)client-nojs(\s|$)/, "$1client-js$2" );</script>
<script>(window.RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Coding_Mask_Calculation","wgTitle":"Coding Mask Calculation","wgCurRevisionId":502,"wgRevisionId":502,"wgArticleId":53,"wgIsArticle":true,"wgIsRedirect":false,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":false,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Coding_Mask_Calculation","wgRelevantArticleId":53,"wgRequestId":"XcOqpltWpCKwjH@DMkZzKQAAAlE","wgCSPNonce":false,"wgIsProbablyEditable":false,"wgRelevantPageIsProbablyEditable":false,"wgRestrictionEdit":[],"wgRestrictionMove":[]});mw.loader.state({"site.styles":"ready","noscript":"ready","user.styles":"ready","user":"ready","user.options":"ready","user.tokens":"loading","mediawiki.legacy.shared":"ready","mediawiki.legacy.commonPrint":"ready","mediawiki.skinning.interface":"ready","skins.vector.styles":"ready"});mw.loader.implement("user.tokens@0tffind",function($,jQuery,require,module){/*@nomin*/mw.user.tokens.set({"editToken":"+\\","patrolToken":"+\\","watchToken":"+\\","csrfToken":"+\\"});
});RLPAGEMODULES=["site","mediawiki.page.startup","mediawiki.page.ready","mediawiki.searchSuggest","skins.vector.js"];mw.loader.load(RLPAGEMODULES);});</script>
<link rel="stylesheet" href="loadffe4.css?lang=en&amp;modules=mediawiki.legacy.commonPrint%2Cshared%7Cmediawiki.skinning.interface%7Cskins.vector.styles&amp;only=styles&amp;printable=1&amp;skin=vector"/>
<script async="" src="loadc8f9.php?lang=en&amp;modules=startup&amp;only=scripts&amp;printable=1&amp;skin=vector"></script>
<meta name="ResourceLoaderDynamicStyles" content=""/>
<link rel="stylesheet" href="loadbe30.css?lang=en&amp;modules=site.styles&amp;only=styles&amp;printable=1&amp;skin=vector"/>
<meta name="generator" content="MediaWiki 1.33.0"/>
<meta name="robots" content="noindex,follow"/>
<link rel="shortcut icon" href="../favicon.ico"/>
<link rel="search" type="application/opensearchdescription+xml" href="opensearch_desc.php" title="SubPos (en)"/>
<link rel="EditURI" type="application/rsd+xml" href="api-result251f.xml?action=rsd"/>
<link rel="alternate" type="application/atom+xml" title="SubPos Atom feed" href="index890f.php?title=Special:RecentChanges&amp;feed=atom"/>
<!--[if lt IE 9]><script src="/wiki/load.php?lang=en&amp;modules=html5shiv&amp;only=scripts&amp;skin=vector&amp;sync=1"></script><![endif]-->
</head>
<body class="mediawiki ltr sitedir-ltr mw-hide-empty-elt ns-0 ns-subject page-Coding_Mask_Calculation rootpage-Coding_Mask_Calculation skin-vector action-view">
<div id="mw-page-base" class="noprint"></div>
<div id="mw-head-base" class="noprint"></div>
<div id="content" class="mw-body" role="main">
	<a id="top"></a>
	
	<div class="mw-indicators mw-body-content">
</div>

	<h1 id="firstHeading" class="firstHeading" lang="en">Coding Mask Calculation</h1>
	
	<div id="bodyContent" class="mw-body-content">
		<div id="siteSub" class="noprint">From SubPos</div>
		<div id="contentSub"></div>
		
		
		
		<div id="jump-to-nav"></div>
		<a class="mw-jump-link" href="#mw-head">Jump to navigation</a>
		<a class="mw-jump-link" href="#p-search">Jump to search</a>
		<div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr"><div class="mw-parser-output"><p>To increase compatibility of the SubPos coding in a large array of different access points and Wi-Fi receiver APIs, the coding mask consists of an "ASCII Mask" and an "Invalid Character" mask. During coding, the ASCII mask is calculated before the Invalid Character mask, and upon decoding, they occur in the reverse order.
</p><p>The human readable tag at the start of the coded SSID is excluded from these mask calculations and should always be a valid character for any access point. 
</p>
<h2><span class="mw-headline" id="ASCII_Mask">ASCII Mask</span></h2>
<p>This mask converts all characters to ASCII since some access points don't use UTF8.
</p><p>The ASCII Mask is a 3x7bit mask, with each 7 bits being stored in the lower bits of a byte (24 bits total; so we don't have to ASCII Mask the mask) that corresponds to bytes 4 to 24 (indexed 1) of the SSID. Each bit represents whether the corresponding byte is greater than 0x7F. If the byte is greater, this byte has its most significant bit set to 0 in the original array and the mask bit is set. On decode, if this bit is set, the most significant bit is set back to 1.
</p><p>The following ASCII Mask bits correspond to bytes in the SSID:
</p>
<table class="wikitable">

<tbody><tr>
<td>1
</td>
<td>2
</td>
<td>3
</td>
<td>4
</td>
<td>5
</td>
<td>6
</td>
<td>7
</td>
<td>8
</td>
<td>9
</td>
<td>10
</td>
<td>11
</td>
<td>12
</td>
<td>13
</td>
<td>14
</td>
<td>15
</td>
<td>16
</td>
<td>17
</td>
<td>18
</td>
<td>19
</td>
<td>20
</td>
<td>21
</td>
<td>22
</td>
<td>23
</td>
<td>24
</td></tr>
<tr>
<td>not used
</td>
<td>byte 4
</td>
<td>byte 5
</td>
<td>byte 6
</td>
<td>byte 7
</td>
<td>byte 8
</td>
<td>byte 9
</td>
<td>byte 10
</td>
<td>not used
</td>
<td>byte 11
</td>
<td>byte 12
</td>
<td>byte 13
</td>
<td>byte 14
</td>
<td>byte 15
</td>
<td>byte 16
</td>
<td>byte 17
</td>
<td>not used
</td>
<td>byte 18
</td>
<td>byte 19
</td>
<td>byte 20
</td>
<td>byte 21
</td>
<td>byte 22
</td>
<td>byte 23
</td>
<td>byte 24
</td></tr></tbody></table>
<h2><span class="mw-headline" id="Invalid_Character_Mask">Invalid Character Mask</span></h2>
<p>This mask is used to convert and mask characters out that might be invalid for certain access points. For example, the most common invalid characters are:
</p>
<pre>LF    - 0x0A
CR    - 0x0D
"     - 0x22	
+     - 0x2B
null  - 0x00
space - 0x20
</pre>
<p>The Invalid Character Mask is a 4x7bit mask, with each 7 bits being stored in the lower bits of a byte (32 bits total; so we don't have to ASCII Mask the mask). Each bit represents whether the corresponding byte was originally an invalid character byte. If the original byte is one from an invalid list (this can be different for each access point and the decoder will still be able to decode it), this byte gets incremented by 1 in the original array and the mask bit for that corresponding byte is set. On decode, if this bit is set, the corresponding byte in the SSID gets decremented by 1. If two invalid characters are next to each other in the ASCII table for a certain access point, this access point is not supported.
</p><p>The following Invalid Character Mask bits correspond to bytes in the SSID:
</p>
<table class="wikitable">

<tbody><tr>
<td>1
</td>
<td>2
</td>
<td>3
</td>
<td>4
</td>
<td>5
</td>
<td>6
</td>
<td>7
</td>
<td>8
</td>
<td>9
</td>
<td>10
</td>
<td>11
</td>
<td>12
</td>
<td>13
</td>
<td>14
</td>
<td>15
</td>
<td>16
</td>
<td>17
</td>
<td>18
</td>
<td>19
</td>
<td>20
</td>
<td>21
</td>
<td>22
</td>
<td>23
</td>
<td>24
</td>
<td>25
</td>
<td>26
</td>
<td>27
</td>
<td>28
</td></tr>
<tr>
<td>not used
</td>
<td>byte 4
</td>
<td>byte 5
</td>
<td>byte 6
</td>
<td>byte 7
</td>
<td>byte 8
</td>
<td>byte 9
</td>
<td>byte 10
</td>
<td>not used
</td>
<td>byte 11
</td>
<td>byte 12
</td>
<td>byte 13
</td>
<td>byte 14
</td>
<td>byte 15
</td>
<td>byte 16
</td>
<td>byte 17
</td>
<td>not used
</td>
<td>byte 18
</td>
<td>byte 19
</td>
<td>byte 20
</td>
<td>byte 21
</td>
<td>byte 22
</td>
<td>byte 23
</td>
<td>byte 24
</td>
<td>not used
</td>
<td>byte 25 (ASCII mask)
</td>
<td>byte 26 (ASCII mask)
</td>
<td>byte 27 (ASCII mask)
</td></tr></tbody></table>
<p>The last 4 bits are used to apply the coding mask to the mask itself. When checking the last byte of the coding mask, the final bit is set if that byte is invalid (which modifies/increments the byte itself). On decode, this last byte is self referencing and the byte is decremented if the bit is set (set the bit to 0).
</p>
<table class="wikitable">

<tbody><tr>
<td>29
</td>
<td>30
</td>
<td>31
</td>
<td>32
</td></tr>
<tr>
<td>byte 28 (Invalid Char mask)
</td>
<td>byte 29 (Invalid Char mask)
</td>
<td>byte 30 (Invalid Char mask)
</td>
<td>byte 31 (Invalid Char mask)
</td></tr></tbody></table>
<h2><span class="mw-headline" id="Implementation">Implementation</span></h2>
<pre>C (reference design) - <a rel="nofollow" class="external free" href="https://github.com/subpos/ssid_coder/blob/master/coder/ssid_coder.c">https://github.com/subpos/ssid_coder/blob/master/coder/ssid_coder.c</a>
</pre>
<pre>Javascript (encoder only) - <a rel="nofollow" class="external free" href="../../github.com/subpos/ssid_coder/blob/master/coder/ssid_coder.html">https://github.com/subpos/ssid_coder/blob/master/coder/ssid_coder.js</a>
</pre>
<pre>Java (decoder only) - <a rel="nofollow" class="external free" href="https://github.com/subpos/subpos_android_api/blob/master/SPSData.java">https://github.com/subpos/subpos_android_api/blob/master/SPSData.java</a>
</pre>
<!-- 
NewPP limit report
Cached time: 20191107050826
Cache expiry: 86400
Dynamic content: false
CPU time usage: 0.014 seconds
Real time usage: 0.014 seconds
Preprocessor visited node count: 11/1000000
Preprocessor generated node count: 16/1000000
Post‐expand include size: 0/2097152 bytes
Template argument size: 0/2097152 bytes
Highest expansion depth: 2/40
Expensive parser function count: 0/100
Unstrip recursion depth: 0/20
Unstrip post‐expand size: 0/5000000 bytes
-->
<!--
Transclusion expansion time report (%,ms,calls,template)
100.00%    0.000      1 -total
-->

<!-- Saved in parser cache with key subposor_spwiki-spw_:pcache:idhash:53-0!canonical and timestamp 20191107050826 and revision id 502
 -->
</div></div>
		
		<div class="printfooter">Retrieved from "<a dir="ltr" href="index0f5a.php?title=Coding_Mask_Calculation&amp;oldid=502">http://subpos.org/wiki/index.php?title=Coding_Mask_Calculation&amp;oldid=502</a>"</div>
		
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
							<li id="pt-login"><a href="index7ff5.php?title=Special:UserLogin&amp;returnto=Coding+Mask+Calculation&amp;returntoquery=printable%3Dyes" title="You are encouraged to log in; however, it is not mandatory [o]" accesskey="o">Log in</a></li>						</ul>
					</div>
									<div id="left-navigation">
										<div id="p-namespaces" role="navigation" class="vectorTabs" aria-labelledby="p-namespaces-label">
						<h3 id="p-namespaces-label">Namespaces</h3>
						<ul>
							<li id="ca-nstab-main" class="selected"><span><a href="index.php/Coding_Mask_Calculation.html" title="View the content page [c]" accesskey="c">Page</a></span></li><li id="ca-talk" class="new"><span><a href="index6c55.php?title=Talk:Coding_Mask_Calculation&amp;action=edit&amp;redlink=1" rel="discussion" title="Discussion about the content page (page does not exist) [t]" accesskey="t">Discussion</a></span></li>						</ul>
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
							<li id="ca-view" class="collapsible selected"><span><a href="index.php/Coding_Mask_Calculation.html">Read</a></span></li><li id="ca-viewsource" class="collapsible"><span><a href="index4457.php?title=Coding_Mask_Calculation&amp;action=edit" title="This page is protected.&#10;You can view its source [e]" accesskey="e">View source</a></span></li><li id="ca-history" class="collapsible"><span><a href="index9f5b.php?title=Coding_Mask_Calculation&amp;action=history" title="Past revisions of this page [h]" accesskey="h">View history</a></span></li>						</ul>
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
				<div id="p-logo" role="banner"><a class="mw-wiki-logo" href="index.php/SubPos.html" title="Visit the main page"></a></div>
						<div class="portal" role="navigation" id="p-navigation" aria-labelledby="p-navigation-label">
			<h3 id="p-navigation-label">Navigation</h3>
			<div class="body">
								<ul>
					<li id="n-mainpage-description"><a href="index.php/SubPos.html" title="Visit the main page [z]" accesskey="z">Main page</a></li><li id="n-Documentation"><a href="index.php/SubPos_Documentation.html">Documentation</a></li><li id="n-Software"><a href="index.php/SubPos_Software.html">Software</a></li><li id="n-Hardware"><a href="index.php/SubPos_Hardware.html">Hardware</a></li><li id="n-Repository"><a href="index.php/SubPos_Repository.html">Repository</a></li><li id="n-Main-site"><a href="../index.html" rel="nofollow">Main site</a></li>				</ul>
							</div>
		</div>
			<div class="portal" role="navigation" id="p-tb" aria-labelledby="p-tb-label">
			<h3 id="p-tb-label">Tools</h3>
			<div class="body">
								<ul>
					<li id="t-whatlinkshere"><a href="index.php/Special_WhatLinksHere/Coding_Mask_Calculation.html" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li><li id="t-recentchangeslinked"><a href="index.php/Special_RecentChangesLinked/Coding_Mask_Calculation.html" rel="nofollow" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li><li id="t-specialpages"><a href="index.php/Special_SpecialPages.html" title="A list of all special pages [q]" accesskey="q">Special pages</a></li><li id="t-permalink"><a href="index0f5a.php?title=Coding_Mask_Calculation&amp;oldid=502" title="Permanent link to this revision of the page">Permanent link</a></li><li id="t-info"><a href="index90cb.php?title=Coding_Mask_Calculation&amp;action=info" title="More information about this page">Page information</a></li>				</ul>
							</div>
		</div>
				</div>
		</div>
				<div id="footer" role="contentinfo">
						<ul id="footer-info">
								<li id="footer-info-lastmod"> This page was last edited on 21 April 2017, at 01:59.</li>
							</ul>
						<ul id="footer-places">
								<li id="footer-places-privacy"><a href="index.php/SubPos_Privacy_policy.html" title="SubPos:Privacy policy">Privacy policy</a></li>
								<li id="footer-places-about"><a href="index.php/SubPos_About.html" title="SubPos:About">About SubPos</a></li>
								<li id="footer-places-disclaimer"><a href="index.php/SubPos_General_disclaimer.html" title="SubPos:General disclaimer">Disclaimers</a></li>
							</ul>
									<div style="clear: both;"></div>
		</div>
		

<script>(window.RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgPageParseReport":{"limitreport":{"cputime":"0.014","walltime":"0.014","ppvisitednodes":{"value":11,"limit":1000000},"ppgeneratednodes":{"value":16,"limit":1000000},"postexpandincludesize":{"value":0,"limit":2097152},"templateargumentsize":{"value":0,"limit":2097152},"expansiondepth":{"value":2,"limit":40},"expensivefunctioncount":{"value":0,"limit":100},"unstrip-depth":{"value":0,"limit":20},"unstrip-size":{"value":0,"limit":5000000},"timingprofile":["100.00%    0.000      1 -total"]},"cachereport":{"timestamp":"20191107050826","ttl":86400,"transientcontent":false}}});mw.config.set({"wgBackendResponseTime":74});});</script>
</body>

<!-- Mirrored from subpos.org/wiki/index.php?title=Coding_Mask_Calculation&printable=yes by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 05:39:19 GMT -->
</html>
