// Add your JS customizations here
var btnTop = document.getElementById("btn-top");
var rootElement = document.documentElement;
function scrollToTop() {
	// Scroll to top logic
	rootElement.scrollTo({
		top: 0,
		behavior: "smooth",
	});
}

btnTop.addEventListener("click", scrollToTop);

document.querySelectorAll('a[href^="#"]').forEach(($anchor) => {
	$anchor.addEventListener("click", function (e) {
		e.preventDefault();
		document.querySelector(this.getAttribute("href")).scrollIntoView({
			behavior: "smooth",
			block: "start", //scroll to top of the target element
		});
	});
});
