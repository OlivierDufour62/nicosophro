let partOne: HTMLDivElement = document.getElementById(
  "part1"
) as HTMLDivElement;
let div: HTMLElement = document.createElement("div") as HTMLElement;

function welcome() {
  div.setAttribute("class", "row");
  div.classList.add("space-t50");
  partOne.appendChild(div);
  div.appendChild(div)
  div.setAttribute("class", "col-12");
  div.classList.add("space-t50");
  partOne.appendChild(div);
}

welcome();
