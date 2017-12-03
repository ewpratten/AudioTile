function openLandingPage() {
	var landingPage = document.getElementById('landingPage');
	var tilesPage = document.getElementById('tilesPage');

	landingPage.style.opacity = '0';
	tilesPage.style.opacity = '1';
	landingPage.style.zIndex = '0';
	tilesPage.style.zIndex = '1000';
}