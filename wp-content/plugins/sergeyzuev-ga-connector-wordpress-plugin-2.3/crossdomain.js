(function() {
function getTopDomain(locationHref) {
    var topDomainRegex = /[-\w]+\.(?:[-\w]+\.xn--[-\w]+|[-\w]{3,}|[-\w]+\.[-\w]{2})$/i;
    var fullDomain = locationHref.split('/')[2];
    var topDomain = topDomainRegex.exec(fullDomain);
    if (typeof topDomain === 'object' && topDomain instanceof Array && topDomain.length > 0) {
        return topDomain[0];
    }
}

//put this line outside the script to make it universal
var internalDomains = [
	'terrafirma-academy.com',
	'energymanagementfundamentals.co.za',
	'energyefficiencycourses.co.za',
	'dieselefficiencymanagement.co.za',
	'mvprofessional.co.za',
	'residentialenergy.co.za',
	'energybehaviourchange.co.za',
	'solarcourses.co.za',
	'solarpvhealthandsafety.co.za',
	'solarpvinstaller.co.za',
	'solarpvprojectmanagement.co.za',
	'waterefficiencymanagement.co.za',
	'waterbehaviourchange.co.za',
	'carbonfootprintanalyst.co.za',
	'carbonprojectsmarkets.co.za',
	'climatechangeawareness.co.za',
	'environmentalstrategy.co.za',
	'facilitiesmanagementtraining.co.za',
	'officeecomanager.co.za',
	'greenyourofficecourse.co.za',
	'residentialecocourses.co.za',
	'greenyourhomecourse.co.za'
];

var currentDomain = getTopDomain(document.location.href);

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1);
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function getUtmVal(utmName) {
	return encodeURIComponent( getCookie('gaconnector_' + utmName) );
}

function setUtmLink(link) {
	var originalHref = link.dataset.originalHref;
	if (typeof originalHref === 'undefined') {
		link.dataset.originalHref = link.href;
		originalHref = link.href;
	}

	var firstSeparator;
	if (originalHref.indexOf('?') > -1) {
		firstSeparator = '&';
	} else {
		firstSeparator = '?';
	}

	link.href = originalHref + firstSeparator + 'utm_source=' + getUtmVal('lc_source')
	                                          + '&utm_medium=' + getUtmVal('lc_medium')
	                                          + '&utm_campaign=' + getUtmVal('lc_campaign')
	                                          + '&utm_term=' + getUtmVal('lc_term')
	                                          + '&utm_content=' + getUtmVal('lc_content');
	return link.href;
}

function addUtmsToLinks() {
  if (typeof gaconnector === 'undefined') {
  	return;
  }
  var gaFields = gaconnector.getCookieValues();
  var links = document.getElementsByTagName('a');
  for (var i=0; i<links.length; i++) {
  	var link = links[i];
  	var linkDomain = getTopDomain(link.href);
  	//console.log(linkDomain);
  	//console.log(internalDomains.indexOf(linkDomain) > -1);
  	//console.log(linkDomain !== currentDomain);
  	if ( internalDomains.indexOf(linkDomain) > -1 &&  linkDomain !== currentDomain) {
	  	setUtmLink(link);
	  	//console.log("Changing:");
	  	//console.log(link);
	} else {
	  	//console.log("Dismissing:");
	  	//console.log(link);
	}
  }
}

jQuery(document).ready(function() {
  addUtmsToLinks();
  setInterval(addUtmsToLinks, 1000);
});
})();