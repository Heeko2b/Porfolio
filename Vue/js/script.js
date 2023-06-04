const linkSae101 = document.querySelector("a[href='#sae101']");
const sectionSae101 = document.querySelector("#sectionSae101");

const closeSae101 = document.querySelector("#closeSae101");

linkSae101.addEventListener("click", () => {
  sectionSae101.classList.add("active");
});

closeSae101.addEventListener("click", () => {
  sectionSae101.classList.remove("active");
});

const linkSae102 = document.querySelector("a[href='#sae102']");
const sectionSae102 = document.querySelector("#sectionSae102");

const closeSae102 = document.querySelector("#closeSae102");

linkSae102.addEventListener("click", () => {
  sectionSae102.classList.add("active");
});

closeSae102.addEventListener("click", () => {
  sectionSae102.classList.remove("active");
});

const linkSae103 = document.querySelector("a[href='#sae103']");
const sectionSae103 = document.querySelector("#sectionSae103");

const closeSae103 = document.querySelector("#closeSae103");

linkSae103.addEventListener("click", () => {
  sectionSae103.classList.add("active");
});

closeSae103.addEventListener("click", () => {
  sectionSae103.classList.remove("active");
});

const linkSae202 = document.querySelector("a[href='#sae202']");
const sectionSae202 = document.querySelector("#sectionSae202");

const closeSae202 = document.querySelector("#closeSae202");

linkSae202.addEventListener("click", () => {
  sectionSae202.classList.add("active");
});

closeSae202.addEventListener("click", () => {
  sectionSae202.classList.remove("active");
});

const linkSae203 = document.querySelector("a[href='#sae203']");
const sectionSae203 = document.querySelector("#sectionSae203");

const closeSae203 = document.querySelector("#closeSae203");

linkSae203.addEventListener("click", () => {
  sectionSae203.classList.add("active");
});

closeSae203.addEventListener("click", () => {
  sectionSae203.classList.remove("active");
});

const linkSae204 = document.querySelector("a[href='#sae204']");
const sectionSae204 = document.querySelector("#sectionSae204");

const closeSae204 = document.querySelector("#closeSae204");

linkSae204.addEventListener("click", () => {
  sectionSae204.classList.add("active");
});

closeSae204.addEventListener("click", () => {
  sectionSae204.classList.remove("active");
});

const linkSae205 = document.querySelector("a[href='#sae205']");
const sectionSae205 = document.querySelector("#sectionSae205");

const closeSae205 = document.querySelector("#closeSae205");

linkSae205.addEventListener("click", () => {
  sectionSae205.classList.add("active");
});

closeSae205.addEventListener("click", () => {
  sectionSae205.classList.remove("active");
});

const linkSae301 = document.querySelector("a[href='#sae301']");
const sectionSae301 = document.querySelector("#sectionSae301");

const closeSae301 = document.querySelector("#closeSae301");

linkSae301.addEventListener("click", () => {
  sectionSae301.classList.add("active");
});

closeSae301.addEventListener("click", () => {
  sectionSae301.classList.remove("active");
});

const linkSae302 = document.querySelector("a[href='#sae302']");
const sectionSae302 = document.querySelector("#sectionSae302");

const closeSae302 = document.querySelector("#closeSae302");

linkSae302.addEventListener("click", () => {
  sectionSae302.classList.add("active");
});

closeSae302.addEventListener("click", () => {
  sectionSae302.classList.remove("active");
});

const linkSae303 = document.querySelector("a[href='#sae303']");
const sectionSae303 = document.querySelector("#sectionSae303");

const closeSae303 = document.querySelector("#closeSae303");

linkSae303.addEventListener("click", () => {
  sectionSae303.classList.add("active");
});

closeSae303.addEventListener("click", () => {
  sectionSae303.classList.remove("active");
});

const linkSae401 = document.querySelector("a[href='#sae401']");
const sectionSae401 = document.querySelector("#sectionSae401");

const closeSae401 = document.querySelector("#closeSae401");

linkSae401.addEventListener("click", () => {
  sectionSae401.classList.add("active");
});

closeSae401.addEventListener("click", () => {
  sectionSae401.classList.remove("active");
});

const linkSae402 = document.querySelector("a[href='#sae402']");
const sectionSae402 = document.querySelector("#sectionSae402");

const closeSae402 = document.querySelector("#closeSae402");

linkSae402.addEventListener("click", () => {
  sectionSae402.classList.add("active");
});

closeSae402.addEventListener("click", () => {
  sectionSae402.classList.remove("active");
});

// typing animation
var typed = new Typed(".typing", {
  strings: [
    "",
    "Community Manager",
    "Développeur Web",
    "Designer Graphique",
    "un peu tout à la fois",
  ],
  typeSpeed: 100,
  BackSpeed: 60,
  loop: true,
});
// Aside activation
const nav = document.querySelector(".nav"),
  navList = nav.querySelectorAll("li"),
  totalNavList = navList.length;
(allSection = document.querySelectorAll(".section")),
  (totalSection = allSection.length);
for (let i = 0; i < totalNavList; i++) {
  const a = navList[i].querySelector("a");
  a.addEventListener("click", function () {
    removeBackSection();
    for (let j = 0; j < totalNavList; j++) {
      if (navList[j].querySelector("a").classList.contains("active")) {
        addBackSection(j);
        // allSection[j].classList.add("back-section");
      }
      navList[j].querySelector("a").classList.remove("active");
    }
    this.classList.add("active");
    showSection(this);
    if (window.innerWidth < 1200) {
      asideSectionTogglerBtn();
    }
  });
}
function removeBackSection() {
  for (let i = 0; i < totalSection; i++) {
    allSection[i].classList.remove("back-section");
  }
}
function addBackSection(num) {
  allSection[num].classList.add("back-section");
}
function showSection(element) {
  for (let i = 0; i < totalSection; i++) {
    allSection[i].classList.remove("active");
  }
  const target = element.getAttribute("href").split("#")[1];
  document.querySelector("#" + target).classList.add("active");
}
function updateNav(element) {
  for (let i = 0; i < totalNavList; i++) {
    navList[i].querySelector("a").classList.remove("active");
    const target = element.getAttribute("href").split("#")[1];
    if (
      target ===
      navList[i].querySelector("a").getAttribute("href").split("#")[1]
    ) {
      navList[i].querySelector("a").classList.remove("active");
    }
  }
}
document.querySelector(".contact").addEventListener("click", function () {
  const sectionIndex = this.getAttribute("data-section-index");
  //console.log(sectionIndex)
  showSection(this);
  updateNav(this);
  removeBackSection();
  addBackSection(sectionIndex);
});
const navTogglerBtn = document.querySelector(".nav-toggler"),
  aside = document.querySelector(".aside");
navTogglerBtn.addEventListener("click", () => {
  asideSectionTogglerBtn();
});
function asideSectionTogglerBtn() {
  aside.classList.toggle("open");
  navTogglerBtn.classList.toggle("open");
  for (let i = 0; i < totalSection; i++) {
    allSection[i].classList.toggle("open");
  }
}

let allGridItems = document.getElementsByClassName("portfolio-img");
