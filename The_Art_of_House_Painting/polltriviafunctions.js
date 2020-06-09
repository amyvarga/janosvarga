
function validateChoice(objForm,maxchoice,thischoice) {
	var choicecount = 0;
	
	for (var item = 0; item < objForm.length; item++)
	{
		if (objForm[item].name == thischoice)
		{
			if (objForm[item].checked) {
				choicecount++;
			}
		}
	}
	if (choicecount > maxchoice) {
		return false;
	} else {
		return true;
	}
}

function Popup(formname,thischoice) {
var page = "/components/polltrivia/vote.asp?"
var windowprops = "width=200,height=200,location=no,toolbar=no,menubar=no,scrollbars=no,resizable=no";
var subwin;
var objTriviaForm = document.forms[formname];

for (var x=0; x < objTriviaForm.length; x++){
	if (objTriviaForm[x].name != thischoice) {
		page = page + objTriviaForm[x].name + "=" + objTriviaForm[x].value + "&"
		} else {
			if (objTriviaForm[x].checked) {
				page = page + objTriviaForm[x].name + "=" + objTriviaForm[x].value + "&"
			}
		}
}
 	subwin=window.open(page, "", windowprops);
}