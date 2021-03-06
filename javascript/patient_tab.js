//used for pop up forms
function openform (element) {
	document.getElementById(element).style.display = 'block';
}

function closeform(element) {
	document.getElementById(element).style.display = 'none';
}

//this is for load from a file
function openFileOption()
{
document.getElementById("file1").click();
}

//this is to check a form for valid inputs
function checkForm(element)
{
	var x = document.getElementById(element).elements;
	var errorFlag = 0
	//i doesn't reset (fix this eventually)
	for (var i = x.length - 1; i > 0; i--)
	{
		if (x[i].value == "") {
			console.log(x[i])
			alert("Please fill in all fields.");
			errorFlag = 1
			return
		};
	}
if (errorFlag == 0){
	document.getElementById(element).submit();
}
	return
}

//used for showing patient in form for selection
function showPatient(str)
{
	if (str == "") {
		document.getElementById("selectPatient").innerHTML = " ";
		return
	}
	else{
		if (window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		}
		else{
			xmlhttp = new ActiveXObject();
		}

		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				var patientInfo = JSON.parse(xmlhttp.responseText);
				var messageToDisplay = '<h1 class="display-patient">'+patientInfo.first_name+' '+patientInfo.last_name+'</h1>';
        		messageToDisplay += '<h1 class="display-patient">'+patientInfo.description+'</h1>';
				document.getElementById("selectPatient").innerHTML = messageToDisplay;
				document.getElementById("hiddenbutton").style.display = "block";
			}
			else {
				document.getElementById("hiddenbutton").style.display = "block";
			}
		}

		xmlhttp.open("GET", "php/getpatient.php?q="+str, true);
		xmlhttp.send();
	}
}

// not used as of now
function showEditPatient(str)
{
	if (str == "") {
		document.getElementById("editPatient").innerHTML = " ";
		return
	}
	else{
		if (window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		}
		else{
			xmlhttp = new ActiveXObject();
		}

		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				document.getElementById("editPatient").innerHTML = xmlhttp.responseText;
				document.getElementById("hidden-button_2").style.display = "block";
			}
			else {
				document.getElementById("hidden-button_2").style.display = "none";
			}
		}

		xmlhttp.open("GET", "php/getpatient.php?q="+str, true);
		xmlhttp.send();
	}
}

//edit the patient values already in the database
function editPatient()
{
	var column = document.getElementById("forminput_2").value;
	if (column == ""){
		alert("Please Select A Value to edit");
		return;
	}
	else {
		var val = document.getElementById("editvalue").value;
		var id = document.getElementById("forminput_3").value;

		var str = "";
		str = id.concat(" ");
		str = str.concat(column);
		str = str.concat(" ");
		str = str.concat(val);

		if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
			}
			else{
				xmlhttp = new ActiveXObject();
			}

			xmlhttp.onreadystatechange = function(){
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					document.getElementById("temp").innerHTML = xmlhttp.responseText;
				}
			}

		xmlhttp.open("GET", "php/getpatient.php?q="+str, true);
		xmlhttp.send();
	}
}
