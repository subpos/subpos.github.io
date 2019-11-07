<!DOCTYPE html>
<html class="client-nojs" lang="en" dir="ltr">

<!-- Mirrored from subpos.org/wiki/index.php?title=SubPos:How_it_works&printable=yes by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 05:39:39 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8"/>
<title>SubPos:How it works - SubPos</title>
<script>document.documentElement.className = document.documentElement.className.replace( /(^|\s)client-nojs(\s|$)/, "$1client-js$2" );</script>
<script>(window.RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgCanonicalNamespace":"Project","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":4,"wgPageName":"SubPos:How_it_works","wgTitle":"How it works","wgCurRevisionId":300,"wgRevisionId":300,"wgArticleId":17,"wgIsArticle":true,"wgIsRedirect":false,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":false,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"SubPos:How_it_works","wgRelevantArticleId":17,"wgRequestId":"XcOrEqI8Bos5ze83YO5SrgAAAQU","wgCSPNonce":false,"wgIsProbablyEditable":false,"wgRelevantPageIsProbablyEditable":false,"wgRestrictionEdit":[],"wgRestrictionMove":[]});mw.loader.state({"site.styles":"ready","noscript":"ready","user.styles":"ready","user":"ready","user.options":"ready","user.tokens":"loading","mediawiki.legacy.shared":"ready","mediawiki.legacy.commonPrint":"ready","mediawiki.skinning.interface":"ready","skins.vector.styles":"ready"});mw.loader.implement("user.tokens@0tffind",function($,jQuery,require,module){/*@nomin*/mw.user.tokens.set({"editToken":"+\\","patrolToken":"+\\","watchToken":"+\\","csrfToken":"+\\"});
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
<body class="mediawiki ltr sitedir-ltr mw-hide-empty-elt ns-4 ns-subject page-SubPos_How_it_works rootpage-SubPos_How_it_works skin-vector action-view">
<div id="mw-page-base" class="noprint"></div>
<div id="mw-head-base" class="noprint"></div>
<div id="content" class="mw-body" role="main">
	<a id="top"></a>
	
	<div class="mw-indicators mw-body-content">
</div>

	<h1 id="firstHeading" class="firstHeading" lang="en">SubPos:How it works</h1>
	
	<div id="bodyContent" class="mw-body-content">
		<div id="siteSub" class="noprint">From SubPos</div>
		<div id="contentSub"></div>
		
		
		
		<div id="jump-to-nav"></div>
		<a class="mw-jump-link" href="#mw-head">Jump to navigation</a>
		<a class="mw-jump-link" href="#p-search">Jump to search</a>
		<div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr"><div class="mw-parser-output"><p>When a user enters an area littered with one or more SubPos Nodes, they are able to determine their position with a simple smartphone application. Some smartphone applications could include helping users find their parking spot, navigating unfamiliar buildings or determining whether your metro station is soon approaching. It could even be used as a GPS relay for embedded systems.
</p><p>SubPos Nodes or existing Wi-Fi access points are used to <a href="index.php/SubPos_Standard.html" class="mw-redirect" title="SubPos Standard">transmit encoded information in a standard Wi-Fi beacon frame</a> which is then used for position trilateration. The Nodes, while not necessary as part of the SubPos standard, provide a pre-calibrated device that is easy to configure and can be dotted about with ease.
</p><p>Unlike traditional Wi-Fi location techniques which map out an area of Wi-Fi signal strengths while storing it in a database, SubPos Nodes operate much like GPS satellites. In this case though, instead of using precise timing (for time of flight) to calculate distance between a transmitter and receiver (GPS), SubPos uses coded transmitter information as well as the client's received signal strength to determine distance from this known point (coded information).
</p><p><a href="index.php/File_How_subpos_works.html" class="image"><img alt="How subpos works.png" src="images/thumb/3/32/How_subpos_works.png/500px-How_subpos_works.png" decoding="async" width="500" height="450" srcset="/wiki/images/3/32/How_subpos_works.png 1.5x" /></a>
</p><p>The transmitter and Node position information is <a href="index.php/Coded_Beacon_Frame.html" title="Coded Beacon Frame">coded</a> into the Wi-Fi beacon frame that is sent by a Node, using a technique called <a rel="nofollow" class="external text" href="http://research.microsoft.com/pubs/73482/BeaconStuffing.pdf">beacon stuffing</a>. This allows a client to use this calculated distance from the transmitter and receiver, as well as the known position of the Nodes to easily determine its position. All of this is performed without the need for data connectivity as it's determined purely with the information received from visible Nodes.
</p><p>Additional analysis techniques, such as averaging (median filters), frequency (spread spectrum hopping and wider bandwidth modes e.g. wireless n/ac) and spacial diversity as well as accurate beacon timing, are also being combined together to resolve even greater accuracy.
</p><p>The positioning information of the access points/Nodes is coded into the SSID as follows:
</p><p><br />
<a href="index.php/File_Coded.html" class="image"><img alt="Coded.png" src="images/thumb/5/5f/Coded.png/500px-Coded.png" decoding="async" width="500" height="270" srcset="/wiki/images/thumb/5/5f/Coded.png/750px-Coded.png 1.5x, /wiki/images/5/5f/Coded.png 2x" /></a>
</p><p>To make use of this passive positioning information, SubPos also implements an easy to use Smartphone API, that allows application developers to integrate SubPos into their application designs, which provides easy to use indoor location services for their users.
</p><p>To integrate SubPos into an existing Android positioning application, all you need to do is initialise the API like so:
</p>
<pre>public class yourClass extends Activity {
   SubPos subpos;
   @Override
   public void onCreate(Bundle savedInstanceState) {
       super.onCreate(savedInstanceState);
       setContentView(R.layout.main);
</pre>
<pre>       //Create new SubPos service
       subpos = new SubPos(this); //"this" passes the activity's context
   }
</pre>
<p>Then to get your position, call:
</p>
<pre>SubPosPosition position = subpos.getPosition(); //returns null if position is not calculated
</pre>
<p><a href="index.php/File_API.html" class="image"><img alt="API.png" src="images/thumb/e/ea/API.png/200px-API.png" decoding="async" width="200" height="333" srcset="/wiki/images/thumb/e/ea/API.png/300px-API.png 1.5x, /wiki/images/thumb/e/ea/API.png/400px-API.png 2x" /></a>
</p><p>Future work will include the development of a SubPos receiver that can be connected to autonomous indoor drones.
</p><p>The Nodes themselves also provide an intuitive and pre-calibrated beacon frame source that can be set up with ease via a UART/Serial connection. The serial interface allows users to enter the Node position information, environment details and application details. Once configured, the device automatically does the rest:
</p><p><a href="index.php/File_Nodes.html" class="image"><img alt="Nodes.png" src="images/thumb/9/9d/Nodes.png/500px-Nodes.png" decoding="async" width="500" height="267" srcset="/wiki/images/thumb/9/9d/Nodes.png/750px-Nodes.png 1.5x, /wiki/images/thumb/9/9d/Nodes.png/1000px-Nodes.png 2x" /></a>
</p>
<!-- 
NewPP limit report
Cached time: 20191107051000
Cache expiry: 86400
Dynamic content: false
CPU time usage: 0.017 seconds
Real time usage: 0.018 seconds
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

<!-- Saved in parser cache with key subposor_spwiki-spw_:pcache:idhash:17-0!canonical and timestamp 20191107051000 and revision id 300
 -->
</div></div>
		
		<div class="printfooter">Retrieved from "<a dir="ltr" href="index1743.php?title=SubPos:How_it_works&amp;oldid=300">http://subpos.org/wiki/index.php?title=SubPos:How_it_works&amp;oldid=300</a>"</div>
		
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
							<li id="pt-login"><a href="index44a4.php?title=Special:UserLogin&amp;returnto=SubPos%3AHow+it+works&amp;returntoquery=printable%3Dyes" title="You are encouraged to log in; however, it is not mandatory [o]" accesskey="o">Log in</a></li>						</ul>
					</div>
									<div id="left-navigation">
										<div id="p-namespaces" role="navigation" class="vectorTabs" aria-labelledby="p-namespaces-label">
						<h3 id="p-namespaces-label">Namespaces</h3>
						<ul>
							<li id="ca-nstab-project" class="selected"><span><a href="index.php/SubPos_How_it_works.html" title="View the project page [a]" accesskey="a">Project page</a></span></li><li id="ca-talk" class="new"><span><a href="index49fe.php?title=SubPos_talk:How_it_works&amp;action=edit&amp;redlink=1" rel="discussion" title="Discussion about the content page (page does not exist) [t]" accesskey="t">Discussion</a></span></li>						</ul>
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
							<li id="ca-view" class="collapsible selected"><span><a href="index.php/SubPos_How_it_works.html">Read</a></span></li><li id="ca-viewsource" class="collapsible"><span><a href="index6d65.php?title=SubPos:How_it_works&amp;action=edit" title="This page is protected.&#10;You can view its source [e]" accesskey="e">View source</a></span></li><li id="ca-history" class="collapsible"><span><a href="index6feb.php?title=SubPos:How_it_works&amp;action=history" title="Past revisions of this page [h]" accesskey="h">View history</a></span></li>						</ul>
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
					<li id="t-whatlinkshere"><a href="index.php/Special_WhatLinksHere/SubPos_How_it_works.html" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li><li id="t-recentchangeslinked"><a href="index.php/Special_RecentChangesLinked/SubPos_How_it_works.html" rel="nofollow" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li><li id="t-specialpages"><a href="index.php/Special_SpecialPages.html" title="A list of all special pages [q]" accesskey="q">Special pages</a></li><li id="t-permalink"><a href="index1743.php?title=SubPos:How_it_works&amp;oldid=300" title="Permanent link to this revision of the page">Permanent link</a></li><li id="t-info"><a href="index485c.php?title=SubPos:How_it_works&amp;action=info" title="More information about this page">Page information</a></li>				</ul>
							</div>
		</div>
				</div>
		</div>
				<div id="footer" role="contentinfo">
						<ul id="footer-info">
								<li id="footer-info-lastmod"> This page was last edited on 15 August 2015, at 23:14.</li>
							</ul>
						<ul id="footer-places">
								<li id="footer-places-privacy"><a href="index.php/SubPos_Privacy_policy.html" title="SubPos:Privacy policy">Privacy policy</a></li>
								<li id="footer-places-about"><a href="index.php/SubPos_About.html" title="SubPos:About">About SubPos</a></li>
								<li id="footer-places-disclaimer"><a href="index.php/SubPos_General_disclaimer.html" title="SubPos:General disclaimer">Disclaimers</a></li>
							</ul>
									<div style="clear: both;"></div>
		</div>
		

<script>(window.RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgPageParseReport":{"limitreport":{"cputime":"0.017","walltime":"0.018","ppvisitednodes":{"value":1,"limit":1000000},"ppgeneratednodes":{"value":4,"limit":1000000},"postexpandincludesize":{"value":0,"limit":2097152},"templateargumentsize":{"value":0,"limit":2097152},"expansiondepth":{"value":1,"limit":40},"expensivefunctioncount":{"value":0,"limit":100},"unstrip-depth":{"value":0,"limit":20},"unstrip-size":{"value":0,"limit":5000000},"timingprofile":["100.00%    0.000      1 -total"]},"cachereport":{"timestamp":"20191107051000","ttl":86400,"transientcontent":false}}});mw.config.set({"wgBackendResponseTime":71});});</script>
</body>

<!-- Mirrored from subpos.org/wiki/index.php?title=SubPos:How_it_works&printable=yes by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 05:39:39 GMT -->
</html>
