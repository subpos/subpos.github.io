<!DOCTYPE html>
<html class="client-nojs" lang="en" dir="ltr">

<!-- Mirrored from subpos.org/wiki/index.php?title=Access_Point_Support&action=edit by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 05:39:12 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8"/>
<title>View source for Access Point Support - SubPos</title>
<script>document.documentElement.className = document.documentElement.className.replace( /(^|\s)client-nojs(\s|$)/, "$1client-js$2" );</script>
<script>(window.RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Access_Point_Support","wgTitle":"Access Point Support","wgCurRevisionId":458,"wgRevisionId":0,"wgArticleId":29,"wgIsArticle":false,"wgIsRedirect":false,"wgAction":"edit","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":true,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Access_Point_Support","wgRelevantArticleId":29,"wgRequestId":"XcOqioTqKysoxXxEhmKnqgAAAgE","wgCSPNonce":false,"wgIsProbablyEditable":false,"wgRelevantPageIsProbablyEditable":false,"wgRestrictionEdit":[],"wgRestrictionMove":[]});mw.loader.state({"site.styles":"ready","noscript":"ready","user.styles":"ready","user":"ready","user.options":"ready","user.tokens":"loading","mediawiki.legacy.shared":"ready","mediawiki.legacy.commonPrint":"ready","mediawiki.skinning.interface":"ready","skins.vector.styles":"ready"});mw.loader.implement("user.tokens@0tffind",function($,jQuery,require,module){/*@nomin*/mw.user.tokens.set({"editToken":"+\\","patrolToken":"+\\","watchToken":"+\\","csrfToken":"+\\"});
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
<body class="mediawiki ltr sitedir-ltr mw-hide-empty-elt ns-0 ns-subject page-Access_Point_Support rootpage-Access_Point_Support skin-vector action-edit">
<div id="mw-page-base" class="noprint"></div>
<div id="mw-head-base" class="noprint"></div>
<div id="content" class="mw-body" role="main">
	<a id="top"></a>
	
	<div class="mw-indicators mw-body-content">
</div>

	<h1 id="firstHeading" class="firstHeading" lang="en">View source for Access Point Support</h1>
	
	<div id="bodyContent" class="mw-body-content">
		
		<div id="contentSub">← <a href="http://subpos.org/wiki/index.php/Access_Point_Support" title="Access Point Support">Access Point Support</a></div>
		
		
		
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
</p><textarea readonly="" accesskey="," id="wpTextbox1" cols="80" rows="25" style="" class="mw-editfont-monospace" lang="en" dir="ltr" name="wpTextbox1">Enabling SubPos works in nearly all access points that support multiple SSIDs. This allows you to use your existing SSID at the same time as the SubPos SSID. If your access point doesn't support this, you can still enable it, you just won't be able to change the SSID to something other than the SubPos encoded SSID.

If you confirm that this works on your model router, or you have issues, use the [[Special:Contact|contact]] page to submit details.

== Billion BiPAC 7800VDPX ==

[[Access_Point_Augmentation|Instructions here]].

== WRT Based Routers (e.g. ASUS DSL-AC68U) ==

Use the following invalid chars 0a 0d 22 2b 00 20 in the SSID coder. Copy the entire contents of the ASCII field (click in the textbox and press Ctrl+A, then press Ctrl+C). Paste this field into the SSID field of your router. The ASCII characters may appear blank, but they are there (you can confirm this by pasting the contents into a text editor).

Unfortunately some versions of '''DD-WRT''' (not OpenWRT) are not "out-of-the-box" supported at this stage due to the following check in the web interface's Javascript code:

 function isValid(SSID) {
     for (i=0) ; i&lt; SSID.length; i++) {
         ch = SSID.charAt(i);
         if (ch &lt; ' ' || ch > '~') {
             alert('invalid ssid);
             return false;
         }
     }
     return true;
 }

This code just checks if characters are human readable. The Wi-Fi standard states than an SSID is to be handled as an array of 32 octets, so the DD-WRT GUI is treating this in a non-standard way. However, if you have a browser that is capable of editing a web page's Javascript code, you can edit this function to just return true and it should now work, as the DD-WRT firmware treats the SSID properly as per the standard:

 function isValid(SSID) {
     return true;
 }

[[Greasemonkey_SSID_Check|This]] Greasemonkey/Tampermonkey script should fix this issue.

OpenWRT implementations do not perform this check.

== D-Link N300 ==

Use the following invalid chars 0a 0d 22 2b 00 20 in the SSID coder. Copy the entire contents of the ASCII field (click in the textbox and press Ctrl+A, then press Ctrl+C). Paste this field into the SSID field of your router. The ASCII characters may appear blank, but they are there (you can confirm this by pasting the contents into a text editor).

== Android Access Point ==

Doesn't support dual SSID, but can still be used for testing or to share the phone's position with other devices (an app will be required to update the SSID periodically with the phone's position). 

Use the following invalid chars: 00

== ESP8266 Modules ==

Use the following invalid chars 0a 0d 22 2b.

For the ESP modules, using the hex value from the javascript coder, you should use it to form the following string:

AT+CWSAP="[hex_string]","",[channel_num],0

For example:

AT+CWSAP="\x53\x50\x53\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x03\x68\x00\x00\x00\x00\x04\x00\x00\x00\x00","",1,0

You can then paste this string to a terminal emulator that supports escaped hex values, such as [http://realterm.sourceforge.net/ RealTerm]. Check the EOL boxes like shown:

[[File:Realterm.png]]

Now click Send ASCII. The ESP modules will store this setting automatically to flash.

== Troubleshooting ==

If you find that the client app doesn't work as intended with the positions you have encoded into the SSID, it might be due to the router not supporting a specific character.

To determine if this is the case, use a Wi-Fi scanning app that allows you to copy ASCII characters. Once copied, you can convert [http://www.asciitohex.com/ ASCII chars to hex] and compare them to the values in the [[Javascript_SSID_Coder|SSID Coder]] ASCII textbox. Alternativel on Linux you can output hex values and compare that to the hex textbox:

 echo -ne `sudo iwlist wlan0 scan | grep ESSID | grep SPS | sed "s/^[ \t]*//" \
 | sed -r 's/^.{7}//' | sed 's/.$//'` | hexdump -e '16/1 "%02x " "\n\n"'

Command Output (if multiple entries, ignore 32nd newline char "20"):

 53 50 53 01 01 03 08 58 3b 01 08 58 3b 01 01 01
 01 01 01 01 03 68 01 01 01 01 04 61 0f 73 60

Coder Output:

 \x53\x50\x53\x01\x01\x03\x08\x58\x3b\x01\x08\x58\x3b\x01\x01\x01\x01\x01\x01\x01\x03\x68\x01\x01\x01\x01\x04\x61\x0f\x73\x60

When you encounter the first character from the left that doesn't match the original SSID coding, this character might be invalid for that access point.
Add this hex value to the "Invalid values" textbox, re-encode the position and re-configure the SSID on your router. Repeat this method until the position can be decoded correctly.

The method in which the access point handles invalid characters will vary from model to model. Commonly however, invalid chars will either be truncated from that point, be replace with another character, removed from the SSID or not be accepted by the router all together (with an error message).

If you find that the access point will not accept the SSID, you will need to remove a single character from the end and re-enter the value. You need to keep doing this until the SSID is accepted by the router. At this point, the invalid character has been identified (and you can re-encode with the value specified in the invalid values box). You might find there is multiple invalid characters. In some instances only human readable characters will be accepted. If this is the case, you might have to "trick" the router into accepting the value (see [[Access_Point_Support#WRT_Based_Routers_.28e.g._ASUS_DSL-AC68U.29|WRT Based Routers]] or [[Access_Point_Augmentation|Access Point Augmentation]]). If this doesn't work, the router might not be supported.
</textarea><div class="templatesUsed"></div><p id="mw-returnto">Return to <a href="http://subpos.org/wiki/index.php/Access_Point_Support" title="Access Point Support">Access Point Support</a>.</p>
</div>
		
		<div class="printfooter">Retrieved from "<a dir="ltr" href="http://subpos.org/wiki/index.php/Access_Point_Support">http://subpos.org/wiki/index.php/Access_Point_Support</a>"</div>
		
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
							<li id="pt-login"><a href="http://subpos.org/wiki/index.php?title=Special:UserLogin&amp;returnto=Access+Point+Support&amp;returntoquery=action%3Dedit" title="You are encouraged to log in; however, it is not mandatory [o]" accesskey="o">Log in</a></li>						</ul>
					</div>
									<div id="left-navigation">
										<div id="p-namespaces" role="navigation" class="vectorTabs" aria-labelledby="p-namespaces-label">
						<h3 id="p-namespaces-label">Namespaces</h3>
						<ul>
							<li id="ca-nstab-main" class="selected"><span><a href="http://subpos.org/wiki/index.php/Access_Point_Support" title="View the content page [c]" accesskey="c">Page</a></span></li><li id="ca-talk" class="new"><span><a href="http://subpos.org/wiki/index.php?title=Talk:Access_Point_Support&amp;action=edit&amp;redlink=1" rel="discussion" title="Discussion about the content page (page does not exist) [t]" accesskey="t">Discussion</a></span></li>						</ul>
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
							<li id="ca-view" class="collapsible"><span><a href="http://subpos.org/wiki/index.php/Access_Point_Support">Read</a></span></li><li id="ca-viewsource" class="collapsible selected"><span><a href="http://subpos.org/wiki/index.php?title=Access_Point_Support&amp;action=edit" title="This page is protected.&#10;You can view its source [e]" accesskey="e">View source</a></span></li><li id="ca-history" class="collapsible"><span><a href="http://subpos.org/wiki/index.php?title=Access_Point_Support&amp;action=history" title="Past revisions of this page [h]" accesskey="h">View history</a></span></li>						</ul>
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
					<li id="t-whatlinkshere"><a href="http://subpos.org/wiki/index.php/Special:WhatLinksHere/Access_Point_Support" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li><li id="t-recentchangeslinked"><a href="http://subpos.org/wiki/index.php/Special:RecentChangesLinked/Access_Point_Support" rel="nofollow" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li><li id="t-specialpages"><a href="http://subpos.org/wiki/index.php/Special:SpecialPages" title="A list of all special pages [q]" accesskey="q">Special pages</a></li><li id="t-info"><a href="http://subpos.org/wiki/index.php?title=Access_Point_Support&amp;action=info" title="More information about this page">Page information</a></li>				</ul>
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
		

<script>(window.RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgBackendResponseTime":75});});</script>
</body>

<!-- Mirrored from subpos.org/wiki/index.php?title=Access_Point_Support&action=edit by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 05:39:12 GMT -->
</html>
