var duration=10; // Specify duration of progress bar in seconds
var _progressWidth = 50;	// Display width of progress bar.

var _progressBar = "||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||";
var _progressEnd = 5;
var _progressAt = 0;


// Create and display the progress dialog.
// end: The number of steps to completion
function ProgressCreate(end) {
	// Initialize state variables
	_progressEnd = end;
	_progressAt = 0;

	// Move layer to center of window to show
	if (document.all) {	// Internet Explorer
		//progress.className = 'show';
                progress.style.display='block';
		progress.style.left = (document.body.clientWidth/2) - (progress.offsetWidth/2);
		progress.style.top = document.body.scrollTop+(document.body.clientHeight/2) - (progress.offsetHeight/2);
	} else if (document.layers) {	// Netscape
		document.progress.visibility = true;
		document.progress.left = (window.innerWidth/2) - 100+"px";
		document.progress.top = pageYOffset+(window.innerHeight/2) - 40+"px";
	} else if (document.getElementById) {	// Netscape 6+
		document.getElementById("progress").className = 'show';
		document.getElementById("progress").style.left = (window.innerWidth/2)- 100+"px";
		document.getElementById("progress").style.top = pageYOffset+(window.innerHeight/2) - 40+"px";
	}

	ProgressUpdate();	// Initialize bar
}

// Hide the progress layer
function ProgressDestroy() {
	// Move off screen to hide
	if (document.all) {	// Internet Explorer
		progress.className = 'hide';
	} else if (document.layers) {	// Netscape
		document.progress.visibility = false;
	} else if (document.getElementById) {	// Netscape 6+
		document.getElementById("progress").className = 'hide';
	}
}

// Increment the progress dialog one step
function ProgressStepIt() {
	_progressAt++;
	if(_progressAt > _progressEnd) _progressAt = _progressAt % _progressEnd;
	ProgressUpdate();
}

// Update the progress dialog with the current state
function ProgressUpdate() {
	var n = (_progressWidth / _progressEnd) * _progressAt;
	if (document.all) {	// Internet Explorer
		var bar = dialog.bar;
 	} else if (document.layers) {	// Netscape
		var bar = document.layers["progress"].document.forms["dialog"].bar;
		n = n * 0.55;	// characters are larger
	} else if (document.getElementById){
                var bar=document.getElementById("bar");
        }
	var temp = _progressBar.substring(0, n);
	//bar.value = temp;

        var per=n+30;
       // document.getElementById("per").innerHTML=per+'%';
       
}

// Demonstrate a use of the progress dialog.
function Demo() {
	ProgressCreate(10);
	window.setTimeout("Click()", 100);
}



function Click() { 
	if(_progressAt >= _progressEnd) {
		ProgressDestroy();
		return;
	}
	ProgressStepIt();
        //alert(percent);
        
	window.setTimeout("Click()", (duration-1)*1000/10);
}

function CallJS(jsStr) { //v2.0


  if(document.getElementById('edit-file1').value=='')
  {
    alert('Please upload a zip file!');
    return false;
  }
  else
  {


  document.getElementById('progress').style.display='block';
  document.getElementById('progress').innerHTML="<span id=progress ><FORM name=dialog id=dialog><TABLE border=2  bgcolor=#C0C0C0><TR><TD ALIGN=center>Please wait...<BR><input type=text name=bar id=bar size=\"" + _progressWidth/2 + "\"><span name=per id=per ></span></TD></TR></TABLE></FORM></span>";
  return eval(jsStr)

  }
}


/*function test()
{
  document.getElementById('progress').style.display='block';
  document.getElementById('progress').innerHTML="<span id=progress ><FORM name=dialog id=dialog><TABLE border=2  bgcolor=#FFFFCC><TR><TD ALIGN=center>Progress<BR><input type=text name=bar id=bar size=\"" + _progressWidth/2 + "\"></TD></TR></TABLE></FORM></span>";
}*/


//"<span id=progress style=display:none;><FORM name=dialog id=dialog><TABLE border=2  bgcolor=#FFFFCC><TR><TD ALIGN=center>Progress<BR><input type=text name=bar //id=bar size=\"" + _progressWidth/2 + "\"></TD></TR></TABLE></FORM></span>";



/*document.write("<span id=\"progress\" style=\"display:none;\">");
	document.write("<FORM name=dialog id=dialog>");
	document.write("<TABLE border=2  bgcolor=\"#FFFFCC\">");
	document.write("<TR><TD ALIGN=\"center\">");
	document.write("Progress<BR>");
	document.write("<input type=text name=\"bar\" id=\"bar\" size=\"" + _progressWidth/2 + "\"");
	if(document.all||document.getElementById) 	// Microsoft, NS6
		document.write(" bar.style=\"color:navy;\">");
	else	// Netscape
		document.write(">");
	document.write("</TD></TR>");
	document.write("</TABLE>");
	document.write("</FORM>");
document.write("</span>");
ProgressDestroy();*/
