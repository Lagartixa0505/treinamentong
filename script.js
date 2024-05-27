let description = document.getElementById("description")
let state = document.getElementById("state")

function toggleVisibility(){
    return state.innerHTML=="...mostrar mais" ? showMore() : showLess()
}
function showLess(){
    description.style.height = "130px"; 
    state.innerHTML = "...mostrar mais"
}
function showMore(){
    description.style.height = "auto"; 
    state.innerHTML = "mostrar menos"
}
