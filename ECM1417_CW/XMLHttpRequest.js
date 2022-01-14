var xhttp = new XMLHttpRequest();
xhttp.open("GET", "http://ml-lab-7b3a1aae-e63e-46ec-90c4-4e430b434198.ukwest.cloudapp.azure.com:60999/",
false);
xhttp.send();
if(xhttp.status == 200) {
    xmlDoc = xhttp.responseXML;
    if(xmlDoc == null) {
        xmlDoc = loadXMLDoc(defaultXML);
    }
}

var result = xhttp.responseText;


function handleException(request, message, error){
    var msg = " ";

    msg += "Code: " + xhttp.status + "\n";
    msg += "Text: " + xhttp.statusText + "\n";

    if(request.responseJSON != null) {
        msg += "Message: " + xhttp.responseJSON.message + "\n";
    }

    alert(msg);
}