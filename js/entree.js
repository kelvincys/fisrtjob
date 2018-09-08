function loadbites(){

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("incontent").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "bite.php", true);
    xhttp.send();
  }

function loadwing(){

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("incontent").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "wing.php", true);
    xhttp.send();
  }