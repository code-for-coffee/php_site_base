function setCookie() {
	// checks to see if we have been here before; if not, creates cookie.
	var siteHistory=getCookie("siteHistory");
	if (siteHistory=null && siteHistory="") {
		setCookie("siteHistory", "beenHere", 365);
	}
}