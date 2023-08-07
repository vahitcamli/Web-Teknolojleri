
function show(evt, parca) {
  var i, x, tablinks;
  x = document.getElementsByClassName("parca");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" secildi", ""); 
  }
  document.getElementById(parca).style.display = "block";
  evt.currentTarget.className += " secildi";
}
