var button =  document.getElementById("connectmembre");
var modal =  document.getElementById("membre");
var close =  document.getElementById("close");

button.addEventListener("click", function(e){
    e.preventDefault();
    modal.style.display = "flex";
    });

close.addEventListener("click", function(e){
    e.preventDefault();
    modal.style.display = "none";
    });

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
