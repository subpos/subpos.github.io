<!DOCTYPE html>
<html class="client-nojs" lang="en" dir="ltr">

<!-- Mirrored from subpos.org/wiki/index.php?title=Path_Loss_Calculation&action=edit by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 05:39:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8"/>
<title>View source for Path Loss Calculation - SubPos</title>
<script>document.documentElement.className = document.documentElement.className.replace( /(^|\s)client-nojs(\s|$)/, "$1client-js$2" );</script>
<script>(window.RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Path_Loss_Calculation","wgTitle":"Path Loss Calculation","wgCurRevisionId":450,"wgRevisionId":0,"wgArticleId":52,"wgIsArticle":false,"wgIsRedirect":false,"wgAction":"edit","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":true,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Path_Loss_Calculation","wgRelevantArticleId":52,"wgRequestId":"XcOqqaI8Bos5ze83YO5QawAAARQ","wgCSPNonce":false,"wgIsProbablyEditable":false,"wgRelevantPageIsProbablyEditable":false,"wgRestrictionEdit":[],"wgRestrictionMove":[]});mw.loader.state({"site.styles":"ready","noscript":"ready","user.styles":"ready","user":"ready","user.options":"ready","user.tokens":"loading","mediawiki.legacy.shared":"ready","mediawiki.legacy.commonPrint":"ready","mediawiki.skinning.interface":"ready","skins.vector.styles":"ready"});mw.loader.implement("user.tokens@0tffind",function($,jQuery,require,module){/*@nomin*/mw.user.tokens.set({"editToken":"+\\","patrolToken":"+\\","watchToken":"+\\","csrfToken":"+\\"});
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
<body class="mediawiki ltr sitedir-ltr mw-hide-empty-elt ns-0 ns-subject page-Path_Loss_Calculation rootpage-Path_Loss_Calculation skin-vector action-edit">
<div id="mw-page-base" class="noprint"></div>
<div id="mw-head-base" class="noprint"></div>
<div id="content" class="mw-body" role="main">
	<a id="top"></a>
	
	<div class="mw-indicators mw-body-content">
</div>

	<h1 id="firstHeading" class="firstHeading" lang="en">View source for Path Loss Calculation</h1>
	
	<div id="bodyContent" class="mw-body-content">
		
		<div id="contentSub">← <a href="http://subpos.org/wiki/index.php/Path_Loss_Calculation" title="Path Loss Calculation">Path Loss Calculation</a></div>
		
		
		
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
</p><textarea readonly="" accesskey="," id="wpTextbox1" cols="80" rows="25" style="" class="mw-editfont-monospace" lang="en" dir="ltr" name="wpTextbox1">Path loss calculation in the standard defines different environment types only and is used for distance calculation using [https://en.wikipedia.org/wiki/Received_signal_strength_indication RSSI]. This definition is mandated for use with application ID 0x0 only (other application IDs can specify their own figures). As such it is optional with the standard, as you may opt to use a differing type of distance measurement rather than RSSI (such as 802.11mc's fine time measurement functionality).

This does not specify the path loss calculation method required however, as this would be application specific and depend entirely on frequency, minimum supported features (802.11b/g/n), modulation and characteristics of each client device (how RSSI is handled on different smart phones for example) to name a few.

The following path loss coefficients for the appropriate environment types are to be used for application ID 0x0:

{| class="wikitable"
|-
! Co-efficient Selection
! Mu (Co-efficient)
! Conditions
|-
| 0
| 1
| No Co-efficient
|-
| 1
| 2.0
| Outdoors with clear conditions
|-
| 2
| 2.5
| Indoors with clear conditions
|-
| 3
| 3.0
| Indoors with moderately clear conditions
|-
| 4
| 3.5
| Indoors with moderately bad conditions
|-
| 5
| Not Used
| Not Used
|-
| 6
| Not Used
| Not Used
|-
| 7
| Not Used
| Not Used
|}

In this instance, the first column (selection value) represents the co-efficient value with it's corresponding environment condition description, as the stored value in the Beacon Frame. In the client code, this selection value will need to be translated to the appropriate Mu value for it to be used with path loss/distance calculation.

An example path loss calculation method (which is used in the Android API) for 802.11b networks, with CCK modulation, at 1Mbps is as follows (Java implementation):

 double distance = Math.pow(10.0,(((double)(tx_pwr/10)) - rx_pwr - 10*Math.log10(4*Math.PI/(c/frequency)))/(20*mu));

Where c = 299.792458 if using MHz for frequency.

In dense areas, path loss figures should be restricted or filtered once they reach a certain loss value. This is performed on an application by application basis on the client side and would depend on the number of visible beacon sources.
</textarea><div class="templatesUsed"></div><p id="mw-returnto">Return to <a href="http://subpos.org/wiki/index.php/Path_Loss_Calculation" title="Path Loss Calculation">Path Loss Calculation</a>.</p>
</div>
		
		<div class="printfooter">Retrieved from "<a dir="ltr" href="http://subpos.org/wiki/index.php/Path_Loss_Calculation">http://subpos.org/wiki/index.php/Path_Loss_Calculation</a>"</div>
		
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
							<li id="pt-login"><a href="http://subpos.org/wiki/index.php?title=Special:UserLogin&amp;returnto=Path+Loss+Calculation&amp;returntoquery=action%3Dedit" title="You are encouraged to log in; however, it is not mandatory [o]" accesskey="o">Log in</a></li>						</ul>
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
							<li id="ca-view" class="collapsible"><span><a href="http://subpos.org/wiki/index.php/Path_Loss_Calculation">Read</a></span></li><li id="ca-viewsource" class="collapsible selected"><span><a href="http://subpos.org/wiki/index.php?title=Path_Loss_Calculation&amp;action=edit" title="This page is protected.&#10;You can view its source [e]" accesskey="e">View source</a></span></li><li id="ca-history" class="collapsible"><span><a href="http://subpos.org/wiki/index.php?title=Path_Loss_Calculation&amp;action=history" title="Past revisions of this page [h]" accesskey="h">View history</a></span></li>						</ul>
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
					<li id="t-whatlinkshere"><a href="http://subpos.org/wiki/index.php/Special:WhatLinksHere/Path_Loss_Calculation" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li><li id="t-recentchangeslinked"><a href="http://subpos.org/wiki/index.php/Special:RecentChangesLinked/Path_Loss_Calculation" rel="nofollow" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li><li id="t-specialpages"><a href="http://subpos.org/wiki/index.php/Special:SpecialPages" title="A list of all special pages [q]" accesskey="q">Special pages</a></li><li id="t-info"><a href="http://subpos.org/wiki/index.php?title=Path_Loss_Calculation&amp;action=info" title="More information about this page">Page information</a></li>				</ul>
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

<!-- Mirrored from subpos.org/wiki/index.php?title=Path_Loss_Calculation&action=edit by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 05:39:20 GMT -->
</html>
