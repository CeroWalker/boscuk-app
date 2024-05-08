<!DOCTYPE html>

<style>
    body,
html {
  margin: 0;
}

html {
  height: 100%;
}

body {
  height: 90%;
  max-width: 800px;
  margin: 0 auto;
}

h1,
p {
  font-family: sans-serif;
  text-align: center;
  padding: 20px;
}

.txt,
select,
form > div {
  display: block;
  margin: 0 auto;
  font-family: sans-serif;
  font-size: 16px;
  padding: 5px;
}

.txt {
  width: 80%;
}

select {
  width: 83%;
}

form > div {
  width: 81%;
}

.txt,
form > div {
  margin-bottom: 10px;
  overflow: auto;
}

.clearfix {
  clear: both;
}

label {
  float: left;
  width: 10%;
  line-height: 1.5;
}

.rate-value,
.pitch-value {
  float: right;
  width: 5%;
  line-height: 1.5;
}

#rate,
#pitch {
  float: right;
  width: 81%;
}

.controls {
  text-align: center;
  margin-top: 10px;
}

.controls button {
  padding: 10px;
}
</style>

<html lang="tr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width" />

    <title>Speech synthesiser</title>

    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <h1>Speech synthesiser</h1>

    <p>
      Enter some text in the input below and press return or the "play" button
      to hear it. change voices using the dropdown menu.
    </p>

    <form>
      <label for="txt">Enter text</label>
      <input id="txt" type="text" class="txt" />
      <div>
        <label for="rate">Rate</label
        ><input type="range" min="0.5" max="2" value="1" step="0.1" id="rate" />
        <div class="rate-value">1</div>
        <div class="clearfix"></div>
      </div>
      <div>
        <label for="pitch">Pitch</label
        ><input type="range" min="0" max="2" value="1" step="0.1" id="pitch" />
        <div class="pitch-value">1</div>
        <div class="clearfix"></div>
      </div>
      <select></select>
      <div class="controls">
        <button id="play" type="submit">Play</button>
      </div>
    </form>

    <script src="script.js"></script>
  </body>

  <script>
    const synth = window.speechSynthesis;

const inputForm = document.querySelector("form");
const inputTxt = document.querySelector(".txt");
const voiceSelect = document.querySelector("select");

const pitch = document.querySelector("#pitch");
const pitchValue = document.querySelector(".pitch-value");
const rate = document.querySelector("#rate");
const rateValue = document.querySelector(".rate-value");

let voices = [];

function populateVoiceList() {
  voices = synth.getVoices().sort(function (a, b) {
    const aname = a.name.toUpperCase();
    const bname = b.name.toUpperCase();

    if (aname < bname) {
      return -1;
    } else if (aname == bname) {
      return 0;
    } else {
      return +1;
    }
  });
  const selectedIndex =
    voiceSelect.selectedIndex < 0 ? 0 : voiceSelect.selectedIndex;
  voiceSelect.innerHTML = "";

  for (let i = 0; i < voices.length; i++) {
    const option = document.createElement("option");
    option.textContent = `${voices[i].name} (${voices[i].lang})`;

    if (voices[i].default) {
      option.textContent += " -- DEFAULT";
    }

    option.setAttribute("data-lang", voices[i].lang);
    option.setAttribute("data-name", voices[i].name);
    voiceSelect.appendChild(option);
  }
  voiceSelect.selectedIndex = selectedIndex;
}

populateVoiceList();

if (speechSynthesis.onvoiceschanged !== undefined) {
  speechSynthesis.onvoiceschanged = populateVoiceList;
}

function speak() {
  if (synth.speaking) {
    console.error("speechSynthesis.speaking");
    return;
  }

  if (inputTxt.value !== "") {
    const utterThis = new SpeechSynthesisUtterance(inputTxt.value);

    utterThis.onend = function (event) {
      console.log("SpeechSynthesisUtterance.onend");
    };

    utterThis.onerror = function (event) {
      console.error("SpeechSynthesisUtterance.onerror");
    };

    const selectedOption =
      voiceSelect.selectedOptions[0].getAttribute("data-name");

    for (let i = 0; i < voices.length; i++) {
      if (voices[i].name === selectedOption) {
        utterThis.voice = voices[i];
        break;
      }
    }
    utterThis.pitch = pitch.value;
    utterThis.rate = rate.value;
    synth.speak(utterThis);
  }
}

inputForm.onsubmit = function (event) {
  event.preventDefault();

  speak();

  inputTxt.blur();
};

pitch.onchange = function () {
  pitchValue.textContent = pitch.value;
};

rate.onchange = function () {
  rateValue.textContent = rate.value;
};

voiceSelect.onchange = function () {
  speak();
};

  </script>

</html>
