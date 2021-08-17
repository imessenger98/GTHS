document.documentElement.onload = function(){
    document.getElementById("loader").style.display = "block";
    document.getElementById("main-part").style.display = "none";

  };
  window.onload = function(){
    document.getElementById("loader").style.display = "none";
    document.getElementById("main-part").style.display = "block";

};