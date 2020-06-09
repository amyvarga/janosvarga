function openPrintStoryWindow() {
	var page = "/components/printstory/printstory.asp?id=" + document.docForm.id.value;
	var windowprops = "width=700,height=400,location=no,menubar=yes,scrollbars=yes,resizable=yes";
	var subwin;
	
	subwin = window.open(page, "",windowprops);
}


document.writeln('<a href=\"javascript:openPrintStoryWindow()\"><img src=\"/components/printstory/images/s_print_story.gif\" border=\"0\"/></a>');
