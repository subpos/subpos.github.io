<!DOCTYPE html>
<html class="client-nojs" lang="en" dir="ltr">

<!-- Mirrored from subpos.org/wiki/index.php?title=Details&action=edit by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 05:39:36 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8"/>
<title>View source for Details - SubPos</title>
<script>document.documentElement.className = document.documentElement.className.replace( /(^|\s)client-nojs(\s|$)/, "$1client-js$2" );</script>
<script>(window.RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Details","wgTitle":"Details","wgCurRevisionId":68,"wgRevisionId":0,"wgArticleId":24,"wgIsArticle":false,"wgIsRedirect":false,"wgAction":"edit","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":true,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Details","wgRelevantArticleId":24,"wgRequestId":"XcOrBqI8Bos5ze83YO5SKwAAARg","wgCSPNonce":false,"wgIsProbablyEditable":false,"wgRelevantPageIsProbablyEditable":false,"wgRestrictionEdit":[],"wgRestrictionMove":[]});mw.loader.state({"site.styles":"ready","noscript":"ready","user.styles":"ready","user":"ready","user.options":"ready","user.tokens":"loading","mediawiki.legacy.shared":"ready","mediawiki.legacy.commonPrint":"ready","mediawiki.skinning.interface":"ready","skins.vector.styles":"ready"});mw.loader.implement("user.tokens@0tffind",function($,jQuery,require,module){/*@nomin*/mw.user.tokens.set({"editToken":"+\\","patrolToken":"+\\","watchToken":"+\\","csrfToken":"+\\"});
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
<body class="mediawiki ltr sitedir-ltr mw-hide-empty-elt ns-0 ns-subject page-Details rootpage-Details skin-vector action-edit">
<div id="mw-page-base" class="noprint"></div>
<div id="mw-head-base" class="noprint"></div>
<div id="content" class="mw-body" role="main">
	<a id="top"></a>
	
	<div class="mw-indicators mw-body-content">
</div>

	<h1 id="firstHeading" class="firstHeading" lang="en">View source for Details</h1>
	
	<div id="bodyContent" class="mw-body-content">
		
		<div id="contentSub">← <a href="http://subpos.org/wiki/index.php/Details" title="Details">Details</a></div>
		
		
		
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
</p><textarea readonly="" accesskey="," id="wpTextbox1" cols="80" rows="25" style="" class="mw-editfont-monospace" lang="en" dir="ltr" name="wpTextbox1">So you might be wondering, how is this any different from any [[Existing Technologies|existing technologies]]? Well SubPos fully utilises the capabilities of beacon frames in Wi-Fi, much like traditional Wi-Fi positioning techniques, except we add in additional information that was previously inferred or guessed (through area modelling/profiling; war-driving) and which we had to contact a database to obtain. Additionally, Wi-Fi positioning only works when you have another positioning system to profile against (GPS) while logging the access points.

SubPos as such maintains a passive client implementation (like GPS) and has minimal acquisition times. And since it uses the beacon frame only, a simple beacon only access point can be created without the need for a network or complex hardware/infrastructure (you only require power). One of the goals of this project is to produce a manufacturable device that does just this and is easy to configure as well as set and forget.

So how do we "exploit" the beacon frame?

== SSID Encoding ==

An SSID contains a total of 256bits. This provides quite a large amount of data to exploit within a beacon frame of an access point. To this effect, we can actually store the physical location of the access point directly in the SSID.

Using a 32bit signed integer for the latitude and longitude gives us a worst case position of ±1.1 cm (7 digits of precision after decimal point; towards the equator, 1 degree is roughly equivalent to about 110 km).

Since we only alter the SSID of a beacon frame, we are also able to easily modify existing equipment or infrastructure (for example, if the access point supports multiple SSIDs) as we aren't altering the Wi-Fi standard itself.

[[Coded_Beacon_Frame|SSID Encoded Beacon Frame]]

== Be Careful of 0x0 String Termination Characters ==

"A common, albeit incorrect assumption, is that an SSID is a string of human-readable characters (such as ASCII), terminated by a NUL character (as in a C-string). SSIDs must be treated and handled as what they are a series of 0 to 32 octets, some of which may not be human-readable."[http://en.wikipedia.org/wiki/Service_set_%28802.11_network%29]

While this is a problem when writing software, it can be easily accounted for; for example we need to use memcpy instead of string functions (in c).

Obviously this becomes an issue when configuring the SSID manually. So it needs to be handled correctly if augmenting existing systems. In most instances we can just use the hex character representation, but some existing access points might not support this.

== Alternate Mapping ==

This project has a wide variety of applications and is designed to be portable. The above protocol schema is presented as a bare minimum specification to enable accurate location services. The feature flags allow us to enable alternate mapping which presents an application ID and reserved bits for custom services (such as integration into shopping mall navigation apps, indoor tour guide apps). When this alternate mapping is enabled, the latitude and longitude bits are read as centimetres instead of degrees around a point 0,0. This can be treated as the centre-point of a map or the 0,0 X/Y coordinate; it's up to the developer.

== Getting Location ==

While Wi-Fi triangulation is quite a well-known concept nowadays (Received Signal Strength Indication etc.) it presents a problem as it's a fuzzy approach to a solution. SubPos tries to remove the unknown by creating a series of fixed and known location transmission nodes (there is a once off manual planning effort to program the position of the node). With this knowledge, we are able to very accurately determine our position.

Additionally since the position of the AP is known (as it's sent in the beacon) you get almost instantaneous position calculations; this method is sort of like AGPS, but quicker and no need for data connectivity.

With regard to calculating the right altitude, it is assumed that devices on a plane remain relatively horizontal to some extent. In this sense, if a client device can see multiple access points on different floors, it can ignore these points to create a better altitude calculation (to be determined with further testing). Hopefully we can get very accurate 3D positioning accuracy with multiple nodes placed on the floor and ceiling of a room (hence the large precision for altitude).

Ideally the nodes themselves will be designed to all have the same or replicable wireless parameters for accurate distance calculations. While, this might not always be true, extra encoded information can help us normalise the output power to bring it in line with the standard nodes worked on within this project.

Obviously, the more sources the SubPos client can see, the more accurate the positioning will be.

== Why Encode and Not Just Store Strings? ==

Well you could use each character to store fixed digit string representations:

 SPS:-11999999+111999999-1199999

But you are limited in the amount of information you can actually send. In this instance you can have a tag, latitude, longitude and altitude. The lat/long can be decoded with 6 decimal points of resolution (resolution of meters) only and the altitude gives you a pretty broad range in meters, you could use the BSSID to determine uniqueness of the access point (providing two are never the same). That's where it ends though, you cannot send any more information. The usefulness of encoding starts when you can add even more information that allows us to create more accurate position estimations. In this instance we have packed so much in there that there is even space for future features, alternate mapping functionality and even the ability to mask incorrect characters from the SSID (as it turns out the "+" character doesn't work in the ESP8266).
</textarea><div class="templatesUsed"></div><p id="mw-returnto">Return to <a href="http://subpos.org/wiki/index.php/Details" title="Details">Details</a>.</p>
</div>
		
		<div class="printfooter">Retrieved from "<a dir="ltr" href="http://subpos.org/wiki/index.php/Details">http://subpos.org/wiki/index.php/Details</a>"</div>
		
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
							<li id="pt-login"><a href="http://subpos.org/wiki/index.php?title=Special:UserLogin&amp;returnto=Details&amp;returntoquery=action%3Dedit" title="You are encouraged to log in; however, it is not mandatory [o]" accesskey="o">Log in</a></li>						</ul>
					</div>
									<div id="left-navigation">
										<div id="p-namespaces" role="navigation" class="vectorTabs" aria-labelledby="p-namespaces-label">
						<h3 id="p-namespaces-label">Namespaces</h3>
						<ul>
							<li id="ca-nstab-main" class="selected"><span><a href="http://subpos.org/wiki/index.php/Details" title="View the content page [c]" accesskey="c">Page</a></span></li><li id="ca-talk" class="new"><span><a href="http://subpos.org/wiki/index.php?title=Talk:Details&amp;action=edit&amp;redlink=1" rel="discussion" title="Discussion about the content page (page does not exist) [t]" accesskey="t">Discussion</a></span></li>						</ul>
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
							<li id="ca-view" class="collapsible"><span><a href="http://subpos.org/wiki/index.php/Details">Read</a></span></li><li id="ca-viewsource" class="collapsible selected"><span><a href="http://subpos.org/wiki/index.php?title=Details&amp;action=edit" title="This page is protected.&#10;You can view its source [e]" accesskey="e">View source</a></span></li><li id="ca-history" class="collapsible"><span><a href="http://subpos.org/wiki/index.php?title=Details&amp;action=history" title="Past revisions of this page [h]" accesskey="h">View history</a></span></li>						</ul>
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
					<li id="t-whatlinkshere"><a href="http://subpos.org/wiki/index.php/Special:WhatLinksHere/Details" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li><li id="t-recentchangeslinked"><a href="http://subpos.org/wiki/index.php/Special:RecentChangesLinked/Details" rel="nofollow" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li><li id="t-specialpages"><a href="http://subpos.org/wiki/index.php/Special:SpecialPages" title="A list of all special pages [q]" accesskey="q">Special pages</a></li><li id="t-info"><a href="http://subpos.org/wiki/index.php?title=Details&amp;action=info" title="More information about this page">Page information</a></li>				</ul>
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
		

<script>(window.RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgBackendResponseTime":78});});</script>
</body>

<!-- Mirrored from subpos.org/wiki/index.php?title=Details&action=edit by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 05:39:36 GMT -->
</html>
