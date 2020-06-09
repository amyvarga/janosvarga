document.write('<!-- name: \"banner02\" -->\n');

var plugin = (navigator.mimeTypes && navigator.mimeTypes["application/x-shockwave-flash"]) ? navigator.mimeTypes["application/x-shockwave-flash"].enabledPlugin : 0;
if ( plugin ) {
 plugin = parseInt(plugin.description.substring(plugin.description.indexOf(".")-1)) >= 5;
}
else if (navigator.userAgent && navigator.userAgent.indexOf("MSIE")>=0 && (navigator.userAgent.indexOf("Windows 95")>=0 || navigator.userAgent.indexOf("Windows 98")>=0 || navigator.userAgent.indexOf("Windows NT")>=0)) {
 document.write('<SCRIPT LANGUAGE=VBScript\> \n');
 document.write('on error resume next \n');
 document.write('plugin = ( IsObject(CreateObject("ShockwaveFlash.ShockwaveFlash.5")))\n');
 document.write('if ( plugin <= 0 ) then plugin = ( IsObject(CreateObject("ShockwaveFlash.ShockwaveFlash.5")))\n');
 document.write('<\/SCRIPT\> \n');
}
if ( plugin ) {
 document.write('<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"');
 document.write('  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,2,0" ');
 document.write(' ID=FLASH_AD WIDTH=120 HEIGHT=600>');
 document.write(' <PARAM NAME=movie VALUE="http://m2.doubleclick.net/706461/banner02.swf?clickTAG=http://ad.ca.doubleclick.net/click%3Bh=v2|2f99|3|0|%2a|g%3B4850512%3B0-0%3B1%3B6744590%3B7641-120|240%3B1963176|1961597|1%3B%3B%3fhttp://www.icejerseys.com"> <PARAM NAME=quality VALUE=autohigh> <PARAM NAME=bgcolor VALUE=#FFFFFF> '); 
 document.write(' <EMBED src="http://m2.doubleclick.net/706461/banner02.swf?clickTAG=http://ad.ca.doubleclick.net/click%3Bh=v2|2f99|3|0|%2a|g%3B4850512%3B0-0%3B1%3B6744590%3B7641-120|240%3B1963176|1961597|1%3B%3B%3fhttp://www.icejerseys.com" quality=autohigh ');
 document.write(' swLiveConnect=FALSE WIDTH=120 HEIGHT=600 bgcolor=#FFFFFF');
 document.write(' TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash">');
 document.write(' </EMBED>');
 document.write(' </OBJECT>');
} else if (!(navigator.appName && navigator.appName.indexOf("Netscape")>=0 && navigator.appVersion.indexOf("2.")>=0)){
 document.write('<A TARGET="_top" HREF="http://ad.ca.doubleclick.net/click%3Bh=v2|2f99|3|0|%2a|g%3B4850512%3B0-0%3B1%3B6744590%3B7641-120|240%3B1963176|1961597|1%3B%3B%3fhttp%3a%2f%2fwww.icejerseys.com"><IMG SRC="http://m2.doubleclick.net/706461/backup1.jpg" WIDTH=120 HEIGHT=600 BORDER=0></A>');
}
//-->
document.write('\n<NOEMBED><A TARGET=\"_top\" HREF=\"http://ad.ca.doubleclick.net/click%3Bh=v2|2f99|3|0|%2a|g%3B4850512%3B0-0%3B1%3B6744590%3B7641-120|240%3B1963176|1961597|1%3B%3B%3fhttp%3a%2f%2fwww.icejerseys.com\"><IMG SRC=\"http://m2.doubleclick.net/706461/backup1.jpg\" WIDTH=120 HEIGHT=600 BORDER=0></A></NOEMBED><NOSCRIPT><A TARGET=\"_top\" HREF=\"http://ad.ca.doubleclick.net/click%3Bh=v2|2f99|3|0|%2a|g%3B4850512%3B0-0%3B1%3B6744590%3B7641-120|240%3B1963176|1961597|1%3B%3B%3fhttp%3a%2f%2fwww.icejerseys.com\"><IMG SRC=\"http://m2.doubleclick.net/706461/backup1.jpg\" WIDTH=120 HEIGHT=600 BORDER=0></A></NOSCRIPT>');
