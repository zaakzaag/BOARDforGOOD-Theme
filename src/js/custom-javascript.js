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
