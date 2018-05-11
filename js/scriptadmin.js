// JavaScript Document

function validarEmail( email ) {
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if ( !expr.test(email) )
        return false;
else return true;
}

function validarusuarioalta()
{
    valid = true;
	$("#erroremail").hide("slow");
	if (document.forminsertar.strEmail.value == ""){
		$("#erroremail").show("slow");
	    valid = false;
	}
	
	$("#erroremailreal").hide("slow");
	if (!validarEmail(document.forminsertar.strEmail.value)){
		$("#erroremailreal").show("slow");
	    valid = false;
	}
	
	$("#errorpass").hide("slow");
	if (document.forminsertar.strPassword.value == ""){
		$("#errorpass").show("slow");
	    valid = false;
	}
	$("#errornombre").hide("slow");
	if (document.forminsertar.strNombre.value == ""){
		$("#errornombre").show("slow");
	    valid = false;
	}
	return valid;
}

function validarusuarioeditar()
{
    valid = true;
	$("#erroremail").hide("slow");
	if (document.forminsertar.strEmail.value == ""){
		$("#erroremail").show("slow");
	    valid = false;
	}
	$("#errornombre").hide("slow");
	if (document.forminsertar.strNombre.value == ""){
		$("#errornombre").show("slow");
	    valid = false;
	}
	return valid;
}

function validarcategoriaalta()
{
    valid = true;
	
	$("#errororden").hide("slow");
	if (document.forminsertar.intOrden.value == ""){
		$("#errororden").show("slow");
	    valid = false;
	}
	$("#errornombre").hide("slow");
	if (document.forminsertar.strNombre.value == ""){
		$("#errornombre").show("slow");
	    valid = false;
	}
	return valid;
}

function validaraccesoadmin()
{
    valid = true;
	$("#erroremail").hide("slow");
	if (document.formacceso.strEmail.value == ""){
		$("#erroremail").show("slow");
	    valid = false;
	}
	
	$("#erroremailreal").hide("slow");
	if (!validarEmail(document.formacceso.strEmail.value)){
		$("#erroremailreal").show("slow");
	    valid = false;
	}
	
	$("#errorpass").hide("slow");
	if (document.formacceso.strPassword.value == ""){
		$("#errorpass").show("slow");
	    valid = false;
	}

	return valid;
}


