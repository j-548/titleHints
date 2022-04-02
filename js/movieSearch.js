

function showHint(str) {
    if (str.length == 0) {//check if the length of parameter str is 0
        document.getElementById("txtHint").innerHTML = "";//if yes, inner text of id will be blank
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();//constructor initializes an XMLHttpRequest
        xmlhttp.onreadystatechange = function() {//is called whenever the readyState attribute changes
            if (this.readyState == 4 && this.status == 200) {//ready state 4 is request has been sent. Status 200 is ok.
                document.getElementById("txtHint").innerHTML = this.responseText;//returns the text received from a server following a request being sent
            }
        };
        xmlhttp.open("GET", "gethint.php?q="+str, true);// initializes a newly-created request, or re-initializes an existing one
        xmlhttp.send();//sends the request to the server
    }
}
