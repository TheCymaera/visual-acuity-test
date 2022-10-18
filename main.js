
const rows = 15;
const characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

function getRandomChar() {
	return characters[(Math.random() * characters.length) | 0];
}

const chart = document.querySelector(".chart");
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
document.querySelector("button").onclick = generate;