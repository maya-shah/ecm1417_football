// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};


// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("topnav").className = "sticky";
    } else {
        document.getElementById("topnav").className = "";
    }
}


document.getElementById("register").onclick = function() {CheckLength()};

function CheckLength() {

    var password = document.getElementById("password").value;

    if (password.length < 8)

      alert('The password must be greater than 8 characters.');


}

function myDeleteFunction() {
        document.getElementById("myTable").deleteRow(0);
    }

//var x = document.getElementById("turkeyvitaly");
//var x = document.createElement("INPUT");
//x.setAttribute("type", "text", "value", "");

