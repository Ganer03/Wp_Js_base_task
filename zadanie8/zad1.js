function SaveLocalForm(){
	var inputEmail= document.getElementById("email");
	var inputName= document.getElementById("name");
	var inputTxtArea= document.getElementById("textarea");
	localStorage.setItem("email", inputEmail.value);
	localStorage.setItem("name", inputName.value);
	localStorage.setItem("textarea", inputTxtArea.value);
}

$(document).ready(function(){
     if(localStorage.getItem("email")){
	    document.getElementById("email").value=localStorage.getItem("email");
	    document.getElementById("name").value=localStorage.getItem("name");
	    document.getElementById("textarea").innerHTML=localStorage.getItem("textarea");
	    document.getElementById('checkbox').checked = true;
    }
    PopUpHide();
});
function PopUpShow(){
    $("#show").show();
}
function PopUpHide(){
    $("#show").hide();
}
function followLink(event, link)
{
	PopUpShow();
	var nameLink = link.innerHTML;
	window.history.pushState({title:nameLink}, null, "form");
	updateTitle(nameLink);
	event.preventDefault();
}

function updateTitle(title)
{
	var elm = document.getElementsByTagName('title')[0];
	elm.innerHTML = title;
}
function back(){
	PopUpHide();
	window.history.back();
	updateTitle(e.state.title);
}


$(".ajaxForm").submit(function(e){
SaveLocalForm();
e.preventDefault();
var href = $(this).attr("action");
$.ajax({
    type: "POST",
    dataType: "json",
    url: href,
    data: $(this).serialize(),
    success: function(response){
	if($('#name').val().length != 0  && $('#textarea').val().length != 0 && document.getElementById('checkbox').checked && response.status == "success"){
		document.getElementById('name').value='';
		document.getElementById('email').value='';
		document.getElementById('textarea').value='';
		document.getElementById('checkbox').checked = false;
		alert("We received your submission, thank you!");
	}else{
	    alert("An error occured: " + response.message);
	}
    }
});
});

window.addEventListener("popstate", function(e) {
	PopUpHide();									 
	updateTitle(e.state.title);
}, false );
// ($('#name').val().length === 0 || !$('#name').val().trim()) && $('#textarea').val().length != 0 && input[type="checkbox"].is(':checked') &&
