function openSendStoryWindow() {
	var page = "/components/sendstory/sendstoryform.asp?id=" + document.docForm.id.value + "&referer=" + window.location.href;
	var windowprops = "width=450,height=410,location=no,toolbar=no,menubar=no,scrollbars=yes,resizable=no";
	var subwin;
	
	subwin = window.open(page, "",windowprops);
}

document.writeln('<a href=\"javascript:openSendStoryWindow()\"><img src=\"/components/sendstory/images/s_send_friend.gif\" border=\"0\"/></a>');
