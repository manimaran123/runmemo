jQuery(document).ready(function(){
    if(document.getElementById('selected_event_drag') != undefined && document.getElementById('selected_event_drag') != null && document.getElementById('selected_event_drag')!='')
    {
        document.getElementById('selected_event_drag').style.display='none';
        if(document.getElementById('event_select').value != 'select_event'){
            document.getElementById('upload_section').style.display= 'block';
        }
    }

});

/**
 * This function is used for show and hide the upload section when without selecting the event
 */
function select_event_upload(){
    var selected_event=document.getElementById('event_select').value;
    //for get the selected  value from select box to the other zip file upload form hidded text field.because of two form in the single page.so we want to 		pass the selected event name from drag and drop upload form to zip file upload form
    if(selected_event!='select_event'){
            document.getElementById('selected_event_drag').value= selected_event;
            document.getElementById('upload_section').style.display= 'block';
    }
    else{
            document.getElementById('upload_section').style.display= 'none';
    }
	
}

/**
 * draog and drop upload validation
 */
function drag_drop_upload_validation() {
  var selected_value=document.getElementById('event_select').value;
  if (selected_value=='select_event') {
    alert(Drupal.t('Select the event'));
    return false;

  }

  var selected_value=document.getElementById('event_select').value;
  var uploader = jQuery("#edit-file").pluploadQueue();
  uploader.settings.url = Drupal.settings.plupload._default.url+'&event='+selected_value;
	//uploader.settings.unique_names  = false;
	
}

