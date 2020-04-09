/*var coll = document.getElementsByClassName("collabsable");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("activated");
    var bonye = this.nextElementSibling;
    if (bonye.style.maxHeight){
      bonye.style.maxHeight = null;
    } else {
      bonye.style.maxHeight = bonye.scrollHeight + "px";
    }
  });
}*/
var coll = document.getElementsByClassName("collabsable");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("activated");
    var bonye = this.nextElementSibling;
    if (bonye.style.display === "block") {
      bonye.style.display = "none";
    } else {
      bonye.style.display = "block";
    }
  });
}
