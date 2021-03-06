<!DOCTYPE html>
<html class="client-nojs" lang="en" dir="ltr">

<!-- Mirrored from subpos.org/wiki/index.php?title=Coded_Beacon_Frame&printable=yes by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 05:39:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8"/>
<title>Coded Beacon Frame - SubPos</title>
<script>document.documentElement.className = document.documentElement.className.replace( /(^|\s)client-nojs(\s|$)/, "$1client-js$2" );</script>
<script>(window.RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Coded_Beacon_Frame","wgTitle":"Coded Beacon Frame","wgCurRevisionId":516,"wgRevisionId":516,"wgArticleId":20,"wgIsArticle":true,"wgIsRedirect":false,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":false,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Coded_Beacon_Frame","wgRelevantArticleId":20,"wgRequestId":"XcOqn6I8Bos5ze83YO5QQQAAAQo","wgCSPNonce":false,"wgIsProbablyEditable":false,"wgRelevantPageIsProbablyEditable":false,"wgRestrictionEdit":[],"wgRestrictionMove":[]});mw.loader.state({"site.styles":"ready","noscript":"ready","user.styles":"ready","user":"ready","user.options":"ready","user.tokens":"loading","mediawiki.legacy.shared":"ready","mediawiki.legacy.commonPrint":"ready","mediawiki.skinning.interface":"ready","skins.vector.styles":"ready"});mw.loader.implement("user.tokens@0tffind",function($,jQuery,require,module){/*@nomin*/mw.user.tokens.set({"editToken":"+\\","patrolToken":"+\\","watchToken":"+\\","csrfToken":"+\\"});
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
<body class="mediawiki ltr sitedir-ltr mw-hide-empty-elt ns-0 ns-subject page-Coded_Beacon_Frame rootpage-Coded_Beacon_Frame skin-vector action-view">
<div id="mw-page-base" class="noprint"></div>
<div id="mw-head-base" class="noprint"></div>
<div id="content" class="mw-body" role="main">
	<a id="top"></a>
	
	<div class="mw-indicators mw-body-content">
</div>

	<h1 id="firstHeading" class="firstHeading" lang="en">Coded Beacon Frame</h1>
	
	<div id="bodyContent" class="mw-body-content">
		<div id="siteSub" class="noprint">From SubPos</div>
		<div id="contentSub"></div>
		
		
		
		<div id="jump-to-nav"></div>
		<a class="mw-jump-link" href="#mw-head">Jump to navigation</a>
		<a class="mw-jump-link" href="#p-search">Jump to search</a>
		<div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr"><div class="mw-parser-output"><p>The coding schema in the Wi-Fi beacon frame (with coding masks) has been designed in such a way that it can be inserted into most existing access points, client devices and various APIs. The following is the SSID coding that is transmitted in a beacon frame.
</p>
<table class="wikitable">
<tbody><tr>
<th style="text-align: left;">0
</th>
<th style="text-align: right;" colspan="5">161
</th></tr>
<tr>
<th>24bit
</th>
<th>24bit (unsigned int)
</th>
<th>32bit (signed int)
</th>
<th>32bit (signed int)
</th>
<th>24bit (unsigned int)
</th>
<th>26bit (unsigned int)
</th></tr>
<tr>
<td>Human Readable Tag ("SPS")
</td>
<td>Unique Device ID`
</td>
<td>Latitude (decimal degrees, 7dp) or y coordinate in cm's (offset mapping).
</td>
<td>Longitude (decimal degrees, 7dp) or x coordinate in cm's (offset mapping).
</td>
<td>Application ID
</td>
<td>Altitude (cm, from height of mean sea level)~, or or z coordinate in cm's (offset mapping).
</td></tr>
<tr>
<th style="text-align: left;" colspan="6">162
</th>
<th style="text-align: right;">247
</th></tr>
<tr>
<th>1bit
</th>
<th>1bit
</th>
<th>1bit
</th>
<th>11bit
</th>
<th>3bit
</th>
<th>13bit
</th>
<th>56bit
</th></tr>
<tr>
<td>Below Sea Level (altitude sign bit; 1 = below, 0 = above) or sign bit for z coordinate (offset mapping; 1 = negative, 0 = positive).
</td>
<td>Offset Mapping Enable (non GPS coords)
</td>
<td>3D Location Enable
</td>
<td>TX Power (EIRP dBm, 1dp)^
</td>
<td>Path Loss Coefficient Selection
</td>
<td>Application Reserved
</td>
<td>Coding Masks (0x7F and invalid chars)
</td></tr></tbody></table>
<p>` Unique to an area, not necessarily the entire world. Generally unique for an Application ID (unless 0).
</p><p>~ Should be height of floor relative to height of mean sea level, not where the node/access point is mounted, unless 3D location is enabled.
</p><p>^ Decimal value is offset by +100.0 to create unsigned value (dBm; -100bDm is the minimum 802.11 receive strength, 23dBm is the maximum; note, this doesn't relate to RSSI maximums and minimums). If using transmitter power as a rough guide for this value from the specifications sheet, be sure to use the value of the lowest supported rate, as transmit power will change depending on the modulation scheme. For full compatibility, you should support 802.11b as the lowest support standard which will generally have a higher transmit power and support CCK modulation at 1Mbps. Using different figures here will change the path loss algorithm required to get an accurate result.
</p>
<h2><span class="mw-headline" id="Notes">Notes</span></h2>
<ul><li>All integers are encoded with the MSB as the leftmost bit and the LSB as the rightmost bit in the string (with the start of the string beginning with the human readable tag) and signed integers are two's compliment representations.</li></ul>
<ul><li>Beacon frames should be sent at a minimum rate of 1mbps and 802.11b to normalise RSSI across all devices. Different speeds and coding will affect the RSSI.</li></ul>
<ul><li>Values with decimal points are stored as fixed point representations and should be handled appropriately (multiply by 10,000,000 before encoding, divide by 10,000,000 after decoding).</li></ul>
<ul><li>The length of the coded SSID is only 31 bytes, as some embedded systems use a null terminator on the 32nd byte of the SSID.</li></ul>
<ul><li>If a new version of the coded frame specification is released, the starting tag will dictate the version number. SPS = version 1, SP2 = version 2, etc.</li></ul>
<ul><li>When using offset mapping, the application developer should determine the center-point of the area and map out from there in the negative and positive axes.</li></ul>
<ul><li>Access points or nodes can be placed into <a href="index.php/Learning_Mode.html" title="Learning Mode">learning mode</a>, which enables them to determine their position from other Nodes over time for easy deployment of new beacon sources. When in learning mode, the tag should be SLS (or SL[version_num]).</li></ul>
<ul><li>Offset mapping coordinates - <a rel="nofollow" class="external free" href="../../www.benjaminspaulding.com/site/wp-content/uploads/2015/08/latlong_final-1024x452.html">http://www.gisdoctor.com/site/wp-content/uploads/2015/08/latlong_final-1024x452.jpg</a></li></ul>
<h2><span class="mw-headline" id="Implementation">Implementation</span></h2>
<pre>C (reference design) - <a rel="nofollow" class="external free" href="https://github.com/subpos/ssid_coder/blob/master/coder/ssid_coder.c">https://github.com/subpos/ssid_coder/blob/master/coder/ssid_coder.c</a>
</pre>
<pre>Javascript (encoder only) - <a rel="nofollow" class="external free" href="http://wiki.subpos.org/index.php?title=Javascript_SSID_Coder">http://wiki.subpos.org/index.php?title=Javascript_SSID_Coder</a>
</pre>
<pre>Java (decoder only) - <a rel="nofollow" class="external free" href="https://github.com/subpos/subpos_android_api/blob/master/SPSData.java">https://github.com/subpos/subpos_android_api/blob/master/SPSData.java</a>
</pre>
<!-- 
NewPP limit report
Cached time: 20191107050825
Cache expiry: 86400
Dynamic content: false
CPU time usage: 0.012 seconds
Real time usage: 0.013 seconds
Preprocessor visited node count: 7/1000000
Preprocessor generated node count: 12/1000000
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

<!-- Saved in parser cache with key subposor_spwiki-spw_:pcache:idhash:20-0!canonical and timestamp 20191107050825 and revision id 516
 -->
</div></div>
		
		<div class="printfooter">Retrieved from "<a dir="ltr" href="index7a13.php?title=Coded_Beacon_Frame&amp;oldid=516">http://subpos.org/wiki/index.php?title=Coded_Beacon_Frame&amp;oldid=516</a>"</div>
		
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
							<li id="pt-login"><a href="index93c1.php?title=Special:UserLogin&amp;returnto=Coded+Beacon+Frame&amp;returntoquery=printable%3Dyes" title="You are encouraged to log in; however, it is not mandatory [o]" accesskey="o">Log in</a></li>						</ul>
					</div>
									<div id="left-navigation">
										<div id="p-namespaces" role="navigation" class="vectorTabs" aria-labelledby="p-namespaces-label">
						<h3 id="p-namespaces-label">Namespaces</h3>
						<ul>
							<li id="ca-nstab-main" class="selected"><span><a href="index.php/Coded_Beacon_Frame.html" title="View the content page [c]" accesskey="c">Page</a></span></li><li id="ca-talk" class="new"><span><a href="index52aa.php?title=Talk:Coded_Beacon_Frame&amp;action=edit&amp;redlink=1" rel="discussion" title="Discussion about the content page (page does not exist) [t]" accesskey="t">Discussion</a></span></li>						</ul>
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
							<li id="ca-view" class="collapsible selected"><span><a href="index.php/Coded_Beacon_Frame.html">Read</a></span></li><li id="ca-viewsource" class="collapsible"><span><a href="index8b27.php?title=Coded_Beacon_Frame&amp;action=edit" title="This page is protected.&#10;You can view its source [e]" accesskey="e">View source</a></span></li><li id="ca-history" class="collapsible"><span><a href="index7d9c.php?title=Coded_Beacon_Frame&amp;action=history" title="Past revisions of this page [h]" accesskey="h">View history</a></span></li>						</ul>
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
					<li id="t-whatlinkshere"><a href="index.php/Special_WhatLinksHere/Coded_Beacon_Frame.html" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li><li id="t-recentchangeslinked"><a href="index.php/Special_RecentChangesLinked/Coded_Beacon_Frame.html" rel="nofollow" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li><li id="t-specialpages"><a href="index.php/Special_SpecialPages.html" title="A list of all special pages [q]" accesskey="q">Special pages</a></li><li id="t-permalink"><a href="index7a13.php?title=Coded_Beacon_Frame&amp;oldid=516" title="Permanent link to this revision of the page">Permanent link</a></li><li id="t-info"><a href="indexfc7b.php?title=Coded_Beacon_Frame&amp;action=info" title="More information about this page">Page information</a></li>				</ul>
							</div>
		</div>
				</div>
		</div>
				<div id="footer" role="contentinfo">
						<ul id="footer-info">
								<li id="footer-info-lastmod"> This page was last edited on 21 April 2017, at 02:27.</li>
							</ul>
						<ul id="footer-places">
								<li id="footer-places-privacy"><a href="index.php/SubPos_Privacy_policy.html" title="SubPos:Privacy policy">Privacy policy</a></li>
								<li id="footer-places-about"><a href="index.php/SubPos_About.html" title="SubPos:About">About SubPos</a></li>
								<li id="footer-places-disclaimer"><a href="index.php/SubPos_General_disclaimer.html" title="SubPos:General disclaimer">Disclaimers</a></li>
							</ul>
									<div style="clear: both;"></div>
		</div>
		

<script>(window.RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgPageParseReport":{"limitreport":{"cputime":"0.012","walltime":"0.013","ppvisitednodes":{"value":7,"limit":1000000},"ppgeneratednodes":{"value":12,"limit":1000000},"postexpandincludesize":{"value":0,"limit":2097152},"templateargumentsize":{"value":0,"limit":2097152},"expansiondepth":{"value":2,"limit":40},"expensivefunctioncount":{"value":0,"limit":100},"unstrip-depth":{"value":0,"limit":20},"unstrip-size":{"value":0,"limit":5000000},"timingprofile":["100.00%    0.000      1 -total"]},"cachereport":{"timestamp":"20191107050825","ttl":86400,"transientcontent":false}}});mw.config.set({"wgBackendResponseTime":70});});</script>
</body>

<!-- Mirrored from subpos.org/wiki/index.php?title=Coded_Beacon_Frame&printable=yes by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 05:39:19 GMT -->
</html>
