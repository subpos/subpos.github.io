<!DOCTYPE html>
<html class="client-nojs" lang="en" dir="ltr">

<!-- Mirrored from subpos.org/wiki/index.php?title=Path_Loss_Calculation&oldid=450 by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 05:39:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8"/>
<title>Path Loss Calculation - SubPos</title>
<script>document.documentElement.className = document.documentElement.className.replace( /(^|\s)client-nojs(\s|$)/, "$1client-js$2" );</script>
<script>(window.RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Path_Loss_Calculation","wgTitle":"Path Loss Calculation","wgCurRevisionId":450,"wgRevisionId":450,"wgArticleId":52,"wgIsArticle":true,"wgIsRedirect":false,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":false,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Path_Loss_Calculation","wgRelevantArticleId":52,"wgRequestId":"XcOqp1tWpCKwjH@DMkZzKgAAAlY","wgCSPNonce":false,"wgIsProbablyEditable":false,"wgRelevantPageIsProbablyEditable":false,"wgRestrictionEdit":[],"wgRestrictionMove":[]});mw.loader.state({"site.styles":"ready","noscript":"ready","user.styles":"ready","user":"ready","user.options":"ready","user.tokens":"loading","mediawiki.legacy.shared":"ready","mediawiki.legacy.commonPrint":"ready","mediawiki.skinning.interface":"ready","skins.vector.styles":"ready"});mw.loader.implement("user.tokens@0tffind",function($,jQuery,require,module){/*@nomin*/mw.user.tokens.set({"editToken":"+\\","patrolToken":"+\\","watchToken":"+\\","csrfToken":"+\\"});
});RLPAGEMODULES=["site","mediawiki.page.startup","mediawiki.page.ready","mediawiki.searchSuggest","skins.vector.js"];mw.loader.load(RLPAGEMODULES);});</script>
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
<body class="mediawiki ltr sitedir-ltr mw-hide-empty-elt ns-0 ns-subject page-Path_Loss_Calculation rootpage-Path_Loss_Calculation skin-vector action-view">
<div id="mw-page-base" class="noprint"></div>
<div id="mw-head-base" class="noprint"></div>
<div id="content" class="mw-body" role="main">
	<a id="top"></a>
	
	<div class="mw-indicators mw-body-content">
</div>

	<h1 id="firstHeading" class="firstHeading" lang="en">Path Loss Calculation</h1>
	
	<div id="bodyContent" class="mw-body-content">
		<div id="siteSub" class="noprint">From SubPos</div>
		<div id="contentSub"><div class="mw-revision"><div id="mw-revision-info">Revision as of 05:55, 14 May 2016 by <a href="http://subpos.org/wiki/index.php?title=User:Blecky&amp;action=edit&amp;redlink=1" class="new mw-userlink" title="User:Blecky (page does not exist)"><bdi>Blecky</bdi></a> <span class="mw-usertoollinks">(<a href="http://subpos.org/wiki/index.php?title=User_talk:Blecky&amp;action=edit&amp;redlink=1" class="new mw-usertoollinks-talk" title="User talk:Blecky (page does not exist)">talk</a> | <a href="http://subpos.org/wiki/index.php/Special:Contributions/Blecky" class="mw-usertoollinks-contribs" title="Special:Contributions/Blecky">contribs</a>)</span></div><div id="mw-revision-nav">(<a href="http://subpos.org/wiki/index.php?title=Path_Loss_Calculation&amp;diff=prev&amp;oldid=450" title="Path Loss Calculation">diff</a>) <a href="http://subpos.org/wiki/index.php?title=Path_Loss_Calculation&amp;direction=prev&amp;oldid=450" title="Path Loss Calculation">← Older revision</a> | Latest revision (diff) | Newer revision → (diff)</div></div></div>
		
		
		
		<div id="jump-to-nav"></div>
		<a class="mw-jump-link" href="#mw-head">Jump to navigation</a>
		<a class="mw-jump-link" href="#p-search">Jump to search</a>
		<div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr"><div class="mw-parser-output"><p>Path loss calculation in the standard defines different environment types only and is used for distance calculation using <a rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Received_signal_strength_indication">RSSI</a>. This definition is mandated for use with application ID 0x0 only (other application IDs can specify their own figures). As such it is optional with the standard, as you may opt to use a differing type of distance measurement rather than RSSI (such as 802.11mc's fine time measurement functionality).
</p><p>This does not specify the path loss calculation method required however, as this would be application specific and depend entirely on frequency, minimum supported features (802.11b/g/n), modulation and characteristics of each client device (how RSSI is handled on different smart phones for example) to name a few.
</p><p>The following path loss coefficients for the appropriate environment types are to be used for application ID 0x0:
</p>
<table class="wikitable">

<tbody><tr>
<th>Co-efficient Selection
</th>
<th>Mu (Co-efficient)
</th>
<th>Conditions
</th></tr>
<tr>
<td>0
</td>
<td>1
</td>
<td>No Co-efficient
</td></tr>
<tr>
<td>1
</td>
<td>2.0
</td>
<td>Outdoors with clear conditions
</td></tr>
<tr>
<td>2
</td>
<td>2.5
</td>
<td>Indoors with clear conditions
</td></tr>
<tr>
<td>3
</td>
<td>3.0
</td>
<td>Indoors with moderately clear conditions
</td></tr>
<tr>
<td>4
</td>
<td>3.5
</td>
<td>Indoors with moderately bad conditions
</td></tr>
<tr>
<td>5
</td>
<td>Not Used
</td>
<td>Not Used
</td></tr>
<tr>
<td>6
</td>
<td>Not Used
</td>
<td>Not Used
</td></tr>
<tr>
<td>7
</td>
<td>Not Used
</td>
<td>Not Used
</td></tr></tbody></table>
<p>In this instance, the first column (selection value) represents the co-efficient value with it's corresponding environment condition description, as the stored value in the Beacon Frame. In the client code, this selection value will need to be translated to the appropriate Mu value for it to be used with path loss/distance calculation.
</p><p>An example path loss calculation method (which is used in the Android API) for 802.11b networks, with CCK modulation, at 1Mbps is as follows (Java implementation):
</p>
<pre>double distance = Math.pow(10.0,(((double)(tx_pwr/10)) - rx_pwr - 10*Math.log10(4*Math.PI/(c/frequency)))/(20*mu));
</pre>
<p>Where c = 299.792458 if using MHz for frequency.
</p><p>In dense areas, path loss figures should be restricted or filtered once they reach a certain loss value. This is performed on an application by application basis on the client side and would depend on the number of visible beacon sources.
</p>
<!-- 
NewPP limit report
Cached time: 20191107050826
Cache expiry: 86400
Dynamic content: false
CPU time usage: 0.007 seconds
Real time usage: 0.007 seconds
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

<!-- Saved in parser cache with key subposor_spwiki-spw_:pcache:idhash:52-0!canonical and timestamp 20191107050826 and revision id 450
 -->
</div></div>
		
		<div class="printfooter">Retrieved from "<a dir="ltr" href="http://subpos.org/wiki/index.php?title=Path_Loss_Calculation&amp;oldid=450">http://subpos.org/wiki/index.php?title=Path_Loss_Calculation&amp;oldid=450</a>"</div>
		
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
							<li id="pt-login"><a href="http://subpos.org/wiki/index.php?title=Special:UserLogin&amp;returnto=Path+Loss+Calculation&amp;returntoquery=oldid%3D450" title="You are encouraged to log in; however, it is not mandatory [o]" accesskey="o">Log in</a></li>						</ul>
					</div>
									<div id="left-navigation">
										<div id="p-namespaces" role="navigation" class="vectorTabs" aria-labelledby="p-namespaces-label">
						<h3 id="p-namespaces-label">Namespaces</h3>
						<ul>
							<li id="ca-nstab-main" class="selected"><span><a href="http://subpos.org/wiki/index.php/Path_Loss_Calculation" title="View the content page [c]" accesskey="c">Page</a></span></li><li id="ca-talk" class="new"><span><a href="http://subpos.org/wiki/index.php?title=Talk:Path_Loss_Calculation&amp;action=edit&amp;redlink=1" rel="discussion" title="Discussion about the content page (page does not exist) [t]" accesskey="t">Discussion</a></span></li>						</ul>
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
							<li id="ca-view" class="collapsible selected"><span><a href="http://subpos.org/wiki/index.php/Path_Loss_Calculation">Read</a></span></li><li id="ca-viewsource" class="collapsible"><span><a href="http://subpos.org/wiki/index.php?title=Path_Loss_Calculation&amp;action=edit" title="This page is protected.&#10;You can view its source [e]" accesskey="e">View source</a></span></li><li id="ca-history" class="collapsible"><span><a href="http://subpos.org/wiki/index.php?title=Path_Loss_Calculation&amp;action=history" title="Past revisions of this page [h]" accesskey="h">View history</a></span></li>						</ul>
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
					<li id="t-whatlinkshere"><a href="http://subpos.org/wiki/index.php/Special:WhatLinksHere/Path_Loss_Calculation" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li><li id="t-recentchangeslinked"><a href="http://subpos.org/wiki/index.php/Special:RecentChangesLinked/Path_Loss_Calculation" rel="nofollow" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li><li id="t-specialpages"><a href="http://subpos.org/wiki/index.php/Special:SpecialPages" title="A list of all special pages [q]" accesskey="q">Special pages</a></li><li id="t-print"><a href="http://subpos.org/wiki/index.php?title=Path_Loss_Calculation&amp;oldid=450&amp;printable=yes" rel="alternate" title="Printable version of this page [p]" accesskey="p">Printable version</a></li><li id="t-permalink"><a href="http://subpos.org/wiki/index.php?title=Path_Loss_Calculation&amp;oldid=450" title="Permanent link to this revision of the page">Permanent link</a></li><li id="t-info"><a href="http://subpos.org/wiki/index.php?title=Path_Loss_Calculation&amp;action=info" title="More information about this page">Page information</a></li>				</ul>
							</div>
		</div>
				</div>
		</div>
				<div id="footer" role="contentinfo">
						<ul id="footer-info">
								<li id="footer-info-lastmod"> This page was last edited on 14 May 2016, at 05:55.</li>
							</ul>
						<ul id="footer-places">
								<li id="footer-places-privacy"><a href="http://subpos.org/wiki/index.php/SubPos:Privacy_policy" title="SubPos:Privacy policy">Privacy policy</a></li>
								<li id="footer-places-about"><a href="http://subpos.org/wiki/index.php/SubPos:About" title="SubPos:About">About SubPos</a></li>
								<li id="footer-places-disclaimer"><a href="http://subpos.org/wiki/index.php/SubPos:General_disclaimer" title="SubPos:General disclaimer">Disclaimers</a></li>
							</ul>
									<div style="clear: both;"></div>
		</div>
		

<script>(window.RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgPageParseReport":{"limitreport":{"cputime":"0.007","walltime":"0.007","ppvisitednodes":{"value":1,"limit":1000000},"ppgeneratednodes":{"value":4,"limit":1000000},"postexpandincludesize":{"value":0,"limit":2097152},"templateargumentsize":{"value":0,"limit":2097152},"expansiondepth":{"value":1,"limit":40},"expensivefunctioncount":{"value":0,"limit":100},"unstrip-depth":{"value":0,"limit":20},"unstrip-size":{"value":0,"limit":5000000},"timingprofile":["100.00%    0.000      1 -total"]},"cachereport":{"timestamp":"20191107050826","ttl":86400,"transientcontent":false}}});mw.config.set({"wgBackendResponseTime":84});});</script>
</body>

<!-- Mirrored from subpos.org/wiki/index.php?title=Path_Loss_Calculation&oldid=450 by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 05:39:20 GMT -->
</html>
