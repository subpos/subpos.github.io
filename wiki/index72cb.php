<!DOCTYPE html>
<html class="client-nojs" lang="en" dir="ltr">

<!-- Mirrored from subpos.org/wiki/index.php?title=Application_IDs&printable=yes by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 05:39:15 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8"/>
<title>Application IDs - SubPos</title>
<script>document.documentElement.className = document.documentElement.className.replace( /(^|\s)client-nojs(\s|$)/, "$1client-js$2" );</script>
<script>(window.RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Application_IDs","wgTitle":"Application IDs","wgCurRevisionId":495,"wgRevisionId":495,"wgArticleId":7,"wgIsArticle":true,"wgIsRedirect":false,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":false,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Application_IDs","wgRelevantArticleId":7,"wgRequestId":"XcOqlqI8Bos5ze83YO5QKwAAAQM","wgCSPNonce":false,"wgIsProbablyEditable":false,"wgRelevantPageIsProbablyEditable":false,"wgRestrictionEdit":[],"wgRestrictionMove":[]});mw.loader.state({"site.styles":"ready","noscript":"ready","user.styles":"ready","user":"ready","user.options":"ready","user.tokens":"loading","mediawiki.legacy.shared":"ready","mediawiki.legacy.commonPrint":"ready","mediawiki.skinning.interface":"ready","skins.vector.styles":"ready"});mw.loader.implement("user.tokens@0tffind",function($,jQuery,require,module){/*@nomin*/mw.user.tokens.set({"editToken":"+\\","patrolToken":"+\\","watchToken":"+\\","csrfToken":"+\\"});
});RLPAGEMODULES=["site","mediawiki.page.startup","mediawiki.page.ready","jquery.tablesorter","mediawiki.searchSuggest","skins.vector.js"];mw.loader.load(RLPAGEMODULES);});</script>
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
<body class="mediawiki ltr sitedir-ltr mw-hide-empty-elt ns-0 ns-subject page-Application_IDs rootpage-Application_IDs skin-vector action-view">
<div id="mw-page-base" class="noprint"></div>
<div id="mw-head-base" class="noprint"></div>
<div id="content" class="mw-body" role="main">
	<a id="top"></a>
	
	<div class="mw-indicators mw-body-content">
</div>

	<h1 id="firstHeading" class="firstHeading" lang="en">Application IDs</h1>
	
	<div id="bodyContent" class="mw-body-content">
		<div id="siteSub" class="noprint">From SubPos</div>
		<div id="contentSub"></div>
		
		
		
		<div id="jump-to-nav"></div>
		<a class="mw-jump-link" href="#mw-head">Jump to navigation</a>
		<a class="mw-jump-link" href="#p-search">Jump to search</a>
		<div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr"><div class="mw-parser-output"><p>Currently registered Applications IDs. <a href="index.php/Special_Contact.html" class="new" title="Special:Contact (page does not exist)">Contact us</a> to register a new Application ID.
</p>
<table class="wikitable sortable">
<tbody><tr>
<th style="text-align:left;">ID
</th>
<th>Hex
</th>
<th>Owner
</th>
<th>Purpose
</th>
<th>Registration Date (dd/mm/yyyy)
</th>
<th>Platforms
</th></tr>
<tr>
<td>0
</td>
<td>0x0
</td>
<td>SubPos.org
</td>
<td>Default positioning, no application specified.
</td>
<td>04/05/2015
</td>
<td>Any
</td></tr>
<tr>
<td>1
</td>
<td>0x1
</td>
<td>SubPos.org
</td>
<td>Room zoning enabled. Each room is fitted with 1 or mode nodes and the client will filter out the 1 or more strongest nodes from this room for trilateration. The number of nodes is stored as an unsigned int in the lower (LSB) 4 bits of the reserved bits. The upper 7 bits are used for the RSSI cutoff value (unsigned int) of the room. The cutoff value is assumed to be negative (e.g. 0x7F is -127). This cutoff is to be specified by measuring the room's characteristics and the client will filter this particular value out if it falls below this threshold. The device ID is also modified to allow room ID's. The upper 10 bits are a signed floor number. The middle 14bits are used as an unsigned room identifier and the lower 8 bits are used as the node ID of the room.
</td>
<td>04/05/2015
</td>
<td>Any
</td></tr>
<tr>
<td>2
</td>
<td>0x2
</td>
<td>SubPos.org
</td>
<td><a href="index.php/Use_in_Caving.html" title="Use in Caving">Breadcrumb mode</a>. No positioning available (which means lower processing requirements on smartphone), but can tag rooms and can be placed on topological maps if desired.
</td>
<td>04/05/2015
</td>
<td>N/A
</td></tr>
<tr>
<td>3
</td>
<td>0x3
</td>
<td>SubPos.org
</td>
<td>To work with 802.11mc. Use 802.11's fine time measurement to obtain a ranging value and use SubPos to obtain the position of the access point it is ranging from to easily trilaterate your position, without connecting to a database of access points.
</td>
<td>16/02/2016
</td>
<td>Future use.
</td></tr>
<tr>
<td>4
</td>
<td>0x4
</td>
<td>SubPos.org
</td>
<td>Retransmission of GPS coordinates to client devices. This position is not used for trilateration, instead it is used as a direct position that has been obtained from a host device. This position can update frequently and should be handled appropriately on the client side.
</td>
<td>04/05/2015
</td>
<td>N/A
</td></tr>
<tr>
<td>5
</td>
<td>0x5
</td>
<td>SubPos.org
</td>
<td>Reserved
</td>
<td>04/05/2015
</td>
<td>N/A
</td></tr>
<tr>
<td>6
</td>
<td>0x6
</td>
<td>SubPos.org
</td>
<td>Reserved
</td>
<td>04/05/2015
</td>
<td>N/A
</td></tr>
<tr>
<td>7
</td>
<td>0x7
</td>
<td>SubPos.org
</td>
<td>Reserved
</td>
<td>04/05/2015
</td>
<td>N/A
</td></tr>
<tr>
<td>8
</td>
<td>0x8
</td>
<td>SubPos.org
</td>
<td>Reserved
</td>
<td>04/05/2015
</td>
<td>N/A
</td></tr>
<tr>
<td>9
</td>
<td>0x9
</td>
<td>SubPos.org
</td>
<td>Reserved
</td>
<td>04/05/2015
</td>
<td>N/A
</td></tr>
<tr>
<td>10
</td>
<td>0xA
</td>
<td>SubPos.org
</td>
<td><a href="indexb500.php?title=External_Ranging&amp;action=edit&amp;redlink=1" class="new" title="External Ranging (page does not exist)">External Ranging</a>. This application ID supports an external ranging device to determine distances for trilateration more accurately over RSSI. On each node or access point, the ranging device must be addressed with the same ID as the Device ID of the SubPos Node. On the receiver, the device should get a list of visible Nodes from a Wi-Fi scan and then iterate through each ranging device to determine distances for trilateration. If a channel number is required for ranging, this will be stored in the upper (MSB) 5 bits of the reserved bits. A device ID of 0x0 is always used for the client. The method in which ranging is performed is determined by the hardware vendor.
</td>
<td>19/01/2016
</td>
<td>Custom hardware.
</td></tr>
<tr>
<td>11
</td>
<td>0xB
</td>
<td>SubPos.org
</td>
<td>Reserved
</td>
<td>09/05/2015
</td>
<td>N/A
</td></tr>
<tr>
<td>12
</td>
<td>0xC
</td>
<td>SubPos.org
</td>
<td>Reserved
</td>
<td>09/05/2015
</td>
<td>N/A
</td></tr>
<tr>
<td>13
</td>
<td>0xD
</td>
<td>SubPos.org
</td>
<td>Reserved
</td>
<td>09/05/2015
</td>
<td>N/A
</td></tr>
<tr>
<td>14
</td>
<td>0xE
</td>
<td>SubPos.org
</td>
<td>Reserved
</td>
<td>09/05/2015
</td>
<td>N/A
</td></tr>
<tr>
<td>15
</td>
<td>0xF
</td>
<td>SubPos.org
</td>
<td>Reserved
</td>
<td>09/05/2015
</td>
<td>N/A
</td></tr>
<tr>
<td>16
</td>
<td>0x10
</td>
<td>SubPos.org
</td>
<td>Reserved
</td>
<td>09/05/2015
</td>
<td>N/A
</td></tr>
<tr>
<td>17
</td>
<td>0x11
</td>
<td>SubPos.org
</td>
<td>Reserved
</td>
<td>09/05/2015
</td>
<td>N/A
</td></tr>
<tr>
<td>18
</td>
<td>0x12
</td>
<td>SubPos.org
</td>
<td>Reserved
</td>
<td>09/05/2015
</td>
<td>N/A
</td></tr>
<tr>
<td>19
</td>
<td>0x13
</td>
<td>SubPos.org
</td>
<td>Reserved
</td>
<td>09/05/2015
</td>
<td>N/A
</td></tr>
<tr>
<td>20
</td>
<td>0x14
</td>
<td>SubPos.org
</td>
<td>Reserved
</td>
<td>09/05/2015
</td>
<td>N/A
</td></tr></tbody></table>
<!-- 
NewPP limit report
Cached time: 20191107050800
Cache expiry: 86400
Dynamic content: false
CPU time usage: 0.015 seconds
Real time usage: 0.016 seconds
Preprocessor visited node count: 1/1000000
Preprocessor generated node count: 4/1000000
Post‐expand include size: 0/2097152 bytes
Template argument size: 0/2097152 bytes
Highest expansion depth: 1/40
Expensive parser function count: 0/100
Unstrip recursion depth: 0/20
Unstrip post‐expand size: 0/5000000 bytes
-->
<!--
Transclusion expansion time report (%,ms,calls,template)
100.00%    0.000      1 -total
-->

<!-- Saved in parser cache with key subposor_spwiki-spw_:pcache:idhash:7-0!canonical and timestamp 20191107050800 and revision id 495
 -->
</div></div>
		
		<div class="printfooter">Retrieved from "<a dir="ltr" href="indexfc8b.php?title=Application_IDs&amp;oldid=495">http://subpos.org/wiki/index.php?title=Application_IDs&amp;oldid=495</a>"</div>
		
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
							<li id="pt-login"><a href="index02e6.php?title=Special:UserLogin&amp;returnto=Application+IDs&amp;returntoquery=printable%3Dyes" title="You are encouraged to log in; however, it is not mandatory [o]" accesskey="o">Log in</a></li>						</ul>
					</div>
									<div id="left-navigation">
										<div id="p-namespaces" role="navigation" class="vectorTabs" aria-labelledby="p-namespaces-label">
						<h3 id="p-namespaces-label">Namespaces</h3>
						<ul>
							<li id="ca-nstab-main" class="selected"><span><a href="index.php/Application_IDs.html" title="View the content page [c]" accesskey="c">Page</a></span></li><li id="ca-talk" class="new"><span><a href="indexaacd.php?title=Talk:Application_IDs&amp;action=edit&amp;redlink=1" rel="discussion" title="Discussion about the content page (page does not exist) [t]" accesskey="t">Discussion</a></span></li>						</ul>
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
							<li id="ca-view" class="collapsible selected"><span><a href="index.php/Application_IDs.html">Read</a></span></li><li id="ca-viewsource" class="collapsible"><span><a href="indexcbc6.php?title=Application_IDs&amp;action=edit" title="This page is protected.&#10;You can view its source [e]" accesskey="e">View source</a></span></li><li id="ca-history" class="collapsible"><span><a href="index9dbe.php?title=Application_IDs&amp;action=history" title="Past revisions of this page [h]" accesskey="h">View history</a></span></li>						</ul>
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
					<li id="t-whatlinkshere"><a href="index.php/Special_WhatLinksHere/Application_IDs.html" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li><li id="t-recentchangeslinked"><a href="index.php/Special_RecentChangesLinked/Application_IDs.html" rel="nofollow" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li><li id="t-specialpages"><a href="index.php/Special_SpecialPages.html" title="A list of all special pages [q]" accesskey="q">Special pages</a></li><li id="t-permalink"><a href="indexfc8b.php?title=Application_IDs&amp;oldid=495" title="Permanent link to this revision of the page">Permanent link</a></li><li id="t-info"><a href="index5c33.php?title=Application_IDs&amp;action=info" title="More information about this page">Page information</a></li>				</ul>
							</div>
		</div>
				</div>
		</div>
				<div id="footer" role="contentinfo">
						<ul id="footer-info">
								<li id="footer-info-lastmod"> This page was last edited on 21 April 2017, at 01:31.</li>
							</ul>
						<ul id="footer-places">
								<li id="footer-places-privacy"><a href="index.php/SubPos_Privacy_policy.html" title="SubPos:Privacy policy">Privacy policy</a></li>
								<li id="footer-places-about"><a href="index.php/SubPos_About.html" title="SubPos:About">About SubPos</a></li>
								<li id="footer-places-disclaimer"><a href="index.php/SubPos_General_disclaimer.html" title="SubPos:General disclaimer">Disclaimers</a></li>
							</ul>
									<div style="clear: both;"></div>
		</div>
		

<script>(window.RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgPageParseReport":{"limitreport":{"cputime":"0.015","walltime":"0.016","ppvisitednodes":{"value":1,"limit":1000000},"ppgeneratednodes":{"value":4,"limit":1000000},"postexpandincludesize":{"value":0,"limit":2097152},"templateargumentsize":{"value":0,"limit":2097152},"expansiondepth":{"value":1,"limit":40},"expensivefunctioncount":{"value":0,"limit":100},"unstrip-depth":{"value":0,"limit":20},"unstrip-size":{"value":0,"limit":5000000},"timingprofile":["100.00%    0.000      1 -total"]},"cachereport":{"timestamp":"20191107050800","ttl":86400,"transientcontent":false}}});mw.config.set({"wgBackendResponseTime":74});});</script>
</body>

<!-- Mirrored from subpos.org/wiki/index.php?title=Application_IDs&printable=yes by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 05:39:15 GMT -->
</html>
