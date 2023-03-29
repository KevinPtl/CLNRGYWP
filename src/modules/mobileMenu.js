class MobileMenu {
  constructor() {
    this.body = document.getElementsByTagName("body")[0];
    this.header = document.getElementById("main-header");
    this.menuButton = document.getElementById("open-menu-btn");
    this.mobileMenu = document.getElementById("navigation-menu");
	this.menuOverlay = document.getElementById("menu-overlay");
    this.events();
  }

  events() {
    if (this.menuButton) {
      this.menuButton.addEventListener("click", this.toggleMenu.bind(this));
    }
	  
	if (this.menuOverlay) {
      this.menuOverlay.addEventListener("click", this.toggleMenu.bind(this));
    }
  }

  toggleMenu() {
    this.menuButton.classList.toggle("menu-open");
    this.mobileMenu.classList.toggle("open");
    this.header.classList.toggle("open");
    this.body.classList.toggle("menu-open");
  }
}

export default MobileMenu;
