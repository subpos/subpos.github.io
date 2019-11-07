<!DOCTYPE html>
<html class="client-nojs" lang="en" dir="ltr">

<!-- Mirrored from subpos.org/wiki/index.php?title=Trilateration&printable=yes by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 05:39:21 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8"/>
<title>Trilateration - SubPos</title>
<script>document.documentElement.className = document.documentElement.className.replace( /(^|\s)client-nojs(\s|$)/, "$1client-js$2" );</script>
<script>(window.RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Trilateration","wgTitle":"Trilateration","wgCurRevisionId":457,"wgRevisionId":457,"wgArticleId":25,"wgIsArticle":true,"wgIsRedirect":false,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":false,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Trilateration","wgRelevantArticleId":25,"wgRequestId":"XcOqvtqMYI0sdTvAfUZmMQAAAIs","wgCSPNonce":false,"wgIsProbablyEditable":false,"wgRelevantPageIsProbablyEditable":false,"wgRestrictionEdit":[],"wgRestrictionMove":[]});mw.loader.state({"site.styles":"ready","noscript":"ready","user.styles":"ready","user":"ready","user.options":"ready","user.tokens":"loading","mediawiki.legacy.shared":"ready","mediawiki.legacy.commonPrint":"ready","mediawiki.skinning.interface":"ready","skins.vector.styles":"ready"});mw.loader.implement("user.tokens@0tffind",function($,jQuery,require,module){/*@nomin*/mw.user.tokens.set({"editToken":"+\\","patrolToken":"+\\","watchToken":"+\\","csrfToken":"+\\"});
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
<body class="mediawiki ltr sitedir-ltr mw-hide-empty-elt ns-0 ns-subject page-Trilateration rootpage-Trilateration skin-vector action-view">
<div id="mw-page-base" class="noprint"></div>
<div id="mw-head-base" class="noprint"></div>
<div id="content" class="mw-body" role="main">
	<a id="top"></a>
	
	<div class="mw-indicators mw-body-content">
</div>

	<h1 id="firstHeading" class="firstHeading" lang="en">Trilateration</h1>
	
	<div id="bodyContent" class="mw-body-content">
		<div id="siteSub" class="noprint">From SubPos</div>
		<div id="contentSub"></div>
		
		
		
		<div id="jump-to-nav"></div>
		<a class="mw-jump-link" href="#mw-head">Jump to navigation</a>
		<a class="mw-jump-link" href="#p-search">Jump to search</a>
		<div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr"><div class="mw-parser-output"><p>Once the distance between an access point and client is determined, a circular area around the location of the access point can be plotted, using this distance as the radius. In the instance with a single access point, the location of the mobile device is “believed to be somewhere on this circular plot”.  If enough access points are contained within a constellation, this circular area can be plotted for each access point. These radii are then combined to determine an intersection point such as the one shown below:
</p><p><a href="index.php/File_Trilat.html" class="image"><img alt="Trilat.png" src="images/thumb/d/d1/Trilat.png/400px-Trilat.png" decoding="async" width="400" height="285" srcset="/wiki/images/thumb/d/d1/Trilat.png/600px-Trilat.png 1.5x, /wiki/images/thumb/d/d1/Trilat.png/800px-Trilat.png 2x" /></a>
</p><p>This technique is called trilateration or multilateration depending on the number of reference access points.
</p><p>While it's up to the application developer to choose the best trilateration and distance measurement technique for their specific implementation of SubPos, the trilateration process in the Android API uses an RSSI based <a href="index.php/Path_Loss_Calculation.html" title="Path Loss Calculation">path loss algorithm</a> to determine the distance with various coefficients that will are <a href="index.php/Path_Loss_Calculation.html" title="Path Loss Calculation">selectable</a> in the beacon source which model the environment the devices are located in.
</p><p>Once the API has determined the distance between the receiving device and the Nodes, it uses a <a rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Non-linear_least_squares">non-linear weighted least squares</a> analysis technique to reduce the error from nodes situated further away from the receiver, while also determining its position.
</p><p>Here are some simulated points running through the trilateration algorithm. The person indicates the actual client position and the blue point is the calculated output. The error in this instance is ~0.6meters (there is error from path loss estimates and rounding as well as the way the NWLS method handles points that are further away).
</p><p><a href="index.php/File_Google_Earth_Trilat.html" class="image"><img alt="Google Earth Trilat.png" src="images/thumb/6/6a/Google_Earth_Trilat.png/400px-Google_Earth_Trilat.png" decoding="async" width="400" height="235" srcset="/wiki/images/thumb/6/6a/Google_Earth_Trilat.png/600px-Google_Earth_Trilat.png 1.5x, /wiki/images/thumb/6/6a/Google_Earth_Trilat.png/800px-Google_Earth_Trilat.png 2x" /></a>
</p>
<!-- 
NewPP limit report
Cached time: 20191107050828
Cache expiry: 86400
Dynamic content: false
CPU time usage: 0.012 seconds
Real time usage: 0.014 seconds
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

<!-- Saved in parser cache with key subposor_spwiki-spw_:pcache:idhash:25-0!canonical and timestamp 20191107050828 and revision id 457
 -->
</div></div>
		
		<div class="printfooter">Retrieved from "<a dir="ltr" href="index78ac.php?title=Trilateration&amp;oldid=457">http://subpos.org/wiki/index.php?title=Trilateration&amp;oldid=457</a>"</div>
		
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
							<li id="pt-login"><a href="indexefda.php?title=Special:UserLogin&amp;returnto=Trilateration&amp;returntoquery=printable%3Dyes" title="You are encouraged to log in; however, it is not mandatory [o]" accesskey="o">Log in</a></li>						</ul>
					</div>
									<div id="left-navigation">
										<div id="p-namespaces" role="navigation" class="vectorTabs" aria-labelledby="p-namespaces-label">
						<h3 id="p-namespaces-label">Namespaces</h3>
						<ul>
							<li id="ca-nstab-main" class="selected"><span><a href="index.php/Trilateration.html" title="View the content page [c]" accesskey="c">Page</a></span></li><li id="ca-talk" class="new"><span><a href="indexf24c.php?title=Talk:Trilateration&amp;action=edit&amp;redlink=1" rel="discussion" title="Discussion about the content page (page does not exist) [t]" accesskey="t">Discussion</a></span></li>						</ul>
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
							<li id="ca-view" class="collapsible selected"><span><a href="index.php/Trilateration.html">Read</a></span></li><li id="ca-viewsource" class="collapsible"><span><a href="index237f.php?title=Trilateration&amp;action=edit" title="This page is protected.&#10;You can view its source [e]" accesskey="e">View source</a></span></li><li id="ca-history" class="collapsible"><span><a href="index4384.php?title=Trilateration&amp;action=history" title="Past revisions of this page [h]" accesskey="h">View history</a></span></li>						</ul>
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
					<li id="t-whatlinkshere"><a href="index.php/Special_WhatLinksHere/Trilateration.html" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li><li id="t-recentchangeslinked"><a href="index.php/Special_RecentChangesLinked/Trilateration.html" rel="nofollow" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li><li id="t-specialpages"><a href="index.php/Special_SpecialPages.html" title="A list of all special pages [q]" accesskey="q">Special pages</a></li><li id="t-permalink"><a href="index78ac.php?title=Trilateration&amp;oldid=457" title="Permanent link to this revision of the page">Permanent link</a></li><li id="t-info"><a href="index1c58.php?title=Trilateration&amp;action=info" title="More information about this page">Page information</a></li>				</ul>
							</div>
		</div>
				</div>
		</div>
				<div id="footer" role="contentinfo">
						<ul id="footer-info">
								<li id="footer-info-lastmod"> This page was last edited on 4 June 2016, at 08:07.</li>
							</ul>
						<ul id="footer-places">
								<li id="footer-places-privacy"><a href="index.php/SubPos_Privacy_policy.html" title="SubPos:Privacy policy">Privacy policy</a></li>
								<li id="footer-places-about"><a href="index.php/SubPos_About.html" title="SubPos:About">About SubPos</a></li>
								<li id="footer-places-disclaimer"><a href="index.php/SubPos_General_disclaimer.html" title="SubPos:General disclaimer">Disclaimers</a></li>
							</ul>
									<div style="clear: both;"></div>
		</div>
		

<script>(window.RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgPageParseReport":{"limitreport":{"cputime":"0.012","walltime":"0.014","ppvisitednodes":{"value":1,"limit":1000000},"ppgeneratednodes":{"value":4,"limit":1000000},"postexpandincludesize":{"value":0,"limit":2097152},"templateargumentsize":{"value":0,"limit":2097152},"expansiondepth":{"value":1,"limit":40},"expensivefunctioncount":{"value":0,"limit":100},"unstrip-depth":{"value":0,"limit":20},"unstrip-size":{"value":0,"limit":5000000},"timingprofile":["100.00%    0.000      1 -total"]},"cachereport":{"timestamp":"20191107050828","ttl":86400,"transientcontent":false}}});mw.config.set({"wgBackendResponseTime":68});});</script>
</body>

<!-- Mirrored from subpos.org/wiki/index.php?title=Trilateration&printable=yes by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 05:39:21 GMT -->
</html>
