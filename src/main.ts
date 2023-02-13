import {} from "helion/core.js";
import {} from "helion/LightTheme.js";
import {} from "helion/Panel.js";
import {} from "helion/NavRail.js";
import { fa5_brands_github, fa5_solid_dice, fa5_solid_home } from "fontawesome-svgs";
import "./main.css";

document.body.innerHTML = /*html*/`
<div class="chart"></div>
<helion-nav-rail>
	<button class="helion-nav-rail-icon-button generate" title="Randomize">
		${fa5_solid_dice}
	</button>

	<helion-nav-rail-spacer></helion-nav-rail-spacer>

	<a class="helion-nav-rail-icon-button" href="https://github.com/TheCymaera/visual-acuity-test" target="_blank" title="GitHub">
		${fa5_brands_github}
	</a>
	<a class="helion-nav-rail-icon-button" href="/" title="Home">
		${fa5_solid_home}
	</a>
</helion-nav-rail>
`;

const rows = 15;
const characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

function getRandomChar() {
	return characters[(Math.random() * characters.length) | 0]!;
}

const chart = document.querySelector(".chart")!;
function generate() {
	chart.textContent = "";
	let fontSize = 1;
	for (let i = 0; i < rows; i++) {
		fontSize *= .8;

		const row = document.createElement("div");
		row.style.fontSize = `${fontSize * 100}%`;
		for (let c = 0; c <= i; c++) {
			const char = document.createElement("div");
			char.textContent = getRandomChar();
			row.appendChild(char)
		}
		chart.appendChild(row);
	}
}

generate();
document.querySelector("button")!.onclick = generate;