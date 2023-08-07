function bolgeGoster(evt, bolge) {
    var i, x, tablinks;
    x = document.getElementsByClassName("bolge");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    document.getElementById(bolge).style.display = "block";
  }