var partOne = document.getElementById("part1");
var div = document.createElement("div");
function welcome() {
    div.setAttribute("class", "row");
    div.classList.add("space-t50");
    partOne.appendChild(div);
    div.appendChild(div);
    div.setAttribute("class", "col-12");
    div.classList.add("space-t50");
    partOne.appendChild(div);
}
welcome();
