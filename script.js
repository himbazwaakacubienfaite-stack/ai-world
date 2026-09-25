const facts = [
     "AI can generate text, images, music, and other content.",
    "AI systems can recognize patterns in very large amounts of data.",
    "Some AI tools can understand and respond to human language.",
    "AI is used in areas such as medicine, education, transport, and science.",
    "Generative AI can create new content based on patterns learned from data."
];

function showFact() {
    const randomNumber = Math.floor(Math.random() * facts.length);

    document.getElementById("fact").textContent = facts[randomNumber];
}

function toggleMenu() {
    const menu = document.querySelector(".nav-links");

    menu.classList.toggle("show-menu");
}

function scrollToTop() {
    window.scrollTo(0, 0);
}