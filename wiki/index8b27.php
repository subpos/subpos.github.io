<!DOCTYPE html>
<html class="client-nojs" lang="en" dir="ltr">

<!-- Mirrored from subpos.org/wiki/index.php?title=Coded_Beacon_Frame&action=edit by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 05:39:18 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8"/>
<title>View source for Coded Beacon Frame - SubPos</title>
<script>document.documentElement.className = document.documentElement.className.replace( /(^|\s)client-nojs(\s|$)/, "$1client-js$2" );</script>
<script>(window.RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Coded_Beacon_Frame","wgTitle":"Coded Beacon Frame","wgCurRevisionId":516,"wgRevisionId":0,"wgArticleId":20,"wgIsArticle":false,"wgIsRedirect":false,"wgAction":"edit","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":true,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Coded_Beacon_Frame","wgRelevantArticleId":20,"wgRequestId":"XcOqnKI8Bos5ze83YO5QOgAAAQg","wgCSPNonce":false,"wgIsProbablyEditable":false,"wgRelevantPageIsProbablyEditable":false,"wgRestrictionEdit":[],"wgRestrictionMove":[]});mw.loader.state({"site.styles":"ready","noscript":"ready","user.styles":"ready","user":"ready","user.options":"ready","user.tokens":"loading","mediawiki.legacy.shared":"ready","mediawiki.legacy.commonPrint":"ready","mediawiki.skinning.interface":"ready","skins.vector.styles":"ready"});mw.loader.implement("user.tokens@0tffind",function($,jQuery,require,module){/*@nomin*/mw.user.tokens.set({"editToken":"+\\","patrolToken":"+\\","watchToken":"+\\","csrfToken":"+\\"});
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
<body class="mediawiki ltr sitedir-ltr mw-hide-empty-elt ns-0 ns-subject page-Coded_Beacon_Frame rootpage-Coded_Beacon_Frame skin-vector action-edit">
<div id="mw-page-base" class="noprint"></div>
<div id="mw-head-base" class="noprint"></div>
<div id="content" class="mw-body" role="main">
	<a id="top"></a>
	
	<div class="mw-indicators mw-body-content">
</div>

	<h1 id="firstHeading" class="firstHeading" lang="en">View source for Coded Beacon Frame</h1>
	
	<div id="bodyContent" class="mw-body-content">
		
		<div id="contentSub">← <a href="http://subpos.org/wiki/index.php/Coded_Beacon_Frame" title="Coded Beacon Frame">Coded Beacon Frame</a></div>
		
		
		
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
</p><textarea readonly="" accesskey="," id="wpTextbox1" cols="80" rows="25" style="" class="mw-editfont-monospace" lang="en" dir="ltr" name="wpTextbox1">The coding schema in the Wi-Fi beacon frame (with coding masks) has been designed in such a way that it can be inserted into most existing access points, client devices and various APIs. The following is the SSID coding that is transmitted in a beacon frame.

{| class="wikitable"
! style="text-align: left;" | 0
! style="text-align: right;" colspan="5" | 161
|-
! 24bit
! 24bit (unsigned int)
! 32bit (signed int)
! 32bit (signed int)
! 24bit (unsigned int)
! 26bit (unsigned int)
|-
| Human Readable Tag ("SPS")
| Unique Device ID`
| Latitude (decimal degrees, 7dp) or y coordinate in cm's (offset mapping).
| Longitude (decimal degrees, 7dp) or x coordinate in cm's (offset mapping).
| Application ID
| Altitude (cm, from height of mean sea level)~, or or z coordinate in cm's (offset mapping).
|-
! style="text-align: left;" colspan="6" | 162
! style="text-align: right;" | 247
|-
! 1bit
! 1bit
! 1bit
! 11bit
! 3bit
! 13bit
! 56bit
|-
| Below Sea Level (altitude sign bit; 1 = below, 0 = above) or sign bit for z coordinate (offset mapping; 1 = negative, 0 = positive).
| Offset Mapping Enable (non GPS coords)
| 3D Location Enable
| TX Power (EIRP dBm, 1dp)^
| Path Loss Coefficient Selection
| Application Reserved
| Coding Masks (0x7F and invalid chars)
|}

` Unique to an area, not necessarily the entire world. Generally unique for an Application ID (unless 0).

~ Should be height of floor relative to height of mean sea level, not where the node/access point is mounted, unless 3D location is enabled.

^ Decimal value is offset by +100.0 to create unsigned value (dBm; -100bDm is the minimum 802.11 receive strength, 23dBm is the maximum; note, this doesn't relate to RSSI maximums and minimums). If using transmitter power as a rough guide for this value from the specifications sheet, be sure to use the value of the lowest supported rate, as transmit power will change depending on the modulation scheme. For full compatibility, you should support 802.11b as the lowest support standard which will generally have a higher transmit power and support CCK modulation at 1Mbps. Using different figures here will change the path loss algorithm required to get an accurate result.

== Notes == 

* All integers are encoded with the MSB as the leftmost bit and the LSB as the rightmost bit in the string (with the start of the string beginning with the human readable tag) and signed integers are two's compliment representations.

* Beacon frames should be sent at a minimum rate of 1mbps and 802.11b to normalise RSSI across all devices. Different speeds and coding will affect the RSSI.

* Values with decimal points are stored as fixed point representations and should be handled appropriately (multiply by 10,000,000 before encoding, divide by 10,000,000 after decoding).

* The length of the coded SSID is only 31 bytes, as some embedded systems use a null terminator on the 32nd byte of the SSID. 

* If a new version of the coded frame specification is released, the starting tag will dictate the version number. SPS = version 1, SP2 = version 2, etc.

* When using offset mapping, the application developer should determine the center-point of the area and map out from there in the negative and positive axes.

* Access points or nodes can be placed into [[Learning Mode|learning mode]], which enables them to determine their position from other Nodes over time for easy deployment of new beacon sources. When in learning mode, the tag should be SLS (or SL[version_num]).

* Offset mapping coordinates - http://www.gisdoctor.com/site/wp-content/uploads/2015/08/latlong_final-1024x452.jpg

== Implementation ==

 C (reference design) - https://github.com/subpos/ssid_coder/blob/master/coder/ssid_coder.c

 Javascript (encoder only) - http://wiki.subpos.org/index.php?title=Javascript_SSID_Coder

 Java (decoder only) - https://github.com/subpos/subpos_android_api/blob/master/SPSData.java
</textarea><div class="templatesUsed"></div><p id="mw-returnto">Return to <a href="http://subpos.org/wiki/index.php/Coded_Beacon_Frame" title="Coded Beacon Frame">Coded Beacon Frame</a>.</p>
</div>
		
		<div class="printfooter">Retrieved from "<a dir="ltr" href="http://subpos.org/wiki/index.php/Coded_Beacon_Frame">http://subpos.org/wiki/index.php/Coded_Beacon_Frame</a>"</div>
		
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
							<li id="pt-login"><a href="http://subpos.org/wiki/index.php?title=Special:UserLogin&amp;returnto=Coded+Beacon+Frame&amp;returntoquery=action%3Dedit" title="You are encouraged to log in; however, it is not mandatory [o]" accesskey="o">Log in</a></li>						</ul>
					</div>
									<div id="left-navigation">
										<div id="p-namespaces" role="navigation" class="vectorTabs" aria-labelledby="p-namespaces-label">
						<h3 id="p-namespaces-label">Namespaces</h3>
						<ul>
							<li id="ca-nstab-main" class="selected"><span><a href="http://subpos.org/wiki/index.php/Coded_Beacon_Frame" title="View the content page [c]" accesskey="c">Page</a></span></li><li id="ca-talk" class="new"><span><a href="http://subpos.org/wiki/index.php?title=Talk:Coded_Beacon_Frame&amp;action=edit&amp;redlink=1" rel="discussion" title="Discussion about the content page (page does not exist) [t]" accesskey="t">Discussion</a></span></li>						</ul>
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
							<li id="ca-view" class="collapsible"><span><a href="http://subpos.org/wiki/index.php/Coded_Beacon_Frame">Read</a></span></li><li id="ca-viewsource" class="collapsible selected"><span><a href="http://subpos.org/wiki/index.php?title=Coded_Beacon_Frame&amp;action=edit" title="This page is protected.&#10;You can view its source [e]" accesskey="e">View source</a></span></li><li id="ca-history" class="collapsible"><span><a href="http://subpos.org/wiki/index.php?title=Coded_Beacon_Frame&amp;action=history" title="Past revisions of this page [h]" accesskey="h">View history</a></span></li>						</ul>
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
					<li id="t-whatlinkshere"><a href="http://subpos.org/wiki/index.php/Special:WhatLinksHere/Coded_Beacon_Frame" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li><li id="t-recentchangeslinked"><a href="http://subpos.org/wiki/index.php/Special:RecentChangesLinked/Coded_Beacon_Frame" rel="nofollow" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li><li id="t-specialpages"><a href="http://subpos.org/wiki/index.php/Special:SpecialPages" title="A list of all special pages [q]" accesskey="q">Special pages</a></li><li id="t-info"><a href="http://subpos.org/wiki/index.php?title=Coded_Beacon_Frame&amp;action=info" title="More information about this page">Page information</a></li>				</ul>
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
		

<script>(window.RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgBackendResponseTime":80});});</script>
</body>

<!-- Mirrored from subpos.org/wiki/index.php?title=Coded_Beacon_Frame&action=edit by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 05:39:18 GMT -->
</html>
