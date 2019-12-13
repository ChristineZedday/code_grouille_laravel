require('./wysiwyg');

var button =  document.getElementById("connectmembre");
var modal =  document.getElementById("membre");
var close =  document.getElementById("close");
var burger =  document.getElementById("burger");
var menudiv =  document.getElementById("hiddenheader");
if (button) {
    button.addEventListener("click", function(e){
        e.preventDefault();
        modal.style.display = "flex";
        });
}

close.addEventListener("click", function(e){
    e.preventDefault();
    modal.style.display = "none";
    });

window.onclick = function(event) {
    if (event.target == modal) {
    modal.style.display = "none";
    }

    function toggleMenu() {
            if(menudiv.style.display == "block") {
                menudiv.style.display = "none";
            }
            else {
                menudiv.style.display = "block";
            }
        }

    burger.addEventListener("click", function(e){
        toggleMenu();
        });
    }


// ====================================FAVORIS=========================================




