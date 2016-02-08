//Browser Support Code for ajax
function ajaxFunction(divid,url)
{
	
        var ajaxRequest;  // The variable that makes Ajax possible!
	try
	{	// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	}
	catch (e)
	{	// Internet Explorer Browsers
		try
		{	ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch (e)
		{	try
			{	
			 ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch (e)
			{	// Something went wrong
				alert("Your browser broke!");
				return false;
			}
		}
	}
	
	//Sending the querystring to server
	ajaxRequest.open("GET",url, true);
	ajaxRequest.send(null);
	
	// Create a function that will receive data sent from the server
	ajaxRequest.onreadystatechange = function()
	{	if(ajaxRequest.readyState == 4)
		{	
		 	if (ajaxRequest.status == 200) 
			{						
				var ajaxDisplay = document.getElementById(divid);
				//alert(ajaxRequest.responseText);
				ajaxDisplay.innerHTML = ajaxRequest.responseText;						
			} 
			else 
			{
				alert("There is a problem in using XMLHTTP object:\n" + ajaxRequest.statusText);
			}
		}
	}


}




