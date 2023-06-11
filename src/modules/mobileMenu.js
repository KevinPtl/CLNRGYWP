class MobileMenu {
  constructor() {
    this.body = document.getElementsByTagName("body")[0];
    this.header = document.getElementById("main-header");

    this.menuButton = document.getElementById("open-menu-btn");
    this.mobileMenu = document.getElementById("navigation-menu");

    this.cartButton = document.getElementById("open-cart-btn");
    this.cartMenu = document.getElementById("cart-menu");

    this.menuOverlay = document.getElementById("menu-overlay");
    this.cartOverlay = document.getElementById("cart-overlay");
    this.events();
  }

  events() {
    // Mobile Menu Handlers
    if (this.menuButton) {
      this.menuButton.addEventListener("click", this.toggleMenu.bind(this));
    }

    if (this.menuOverlay) {
      this.menuOverlay.addEventListener("click", this.toggleMenu.bind(this));
    }

    // Cart Event Handlers
    if (this.cartButton) {
      this.cartButton.addEventListener("click", this.toggleCart.bind(this));
    }

    if (this.cartOverlay) {
      this.cartOverlay.addEventListener("click", this.toggleCart.bind(this));
    }
  }

  toggleMenu() {
    this.menuButton.classList.toggle("menu-open");
    this.mobileMenu.classList.toggle("open");
    this.header.classList.toggle("open");
    this.body.classList.toggle("menu-open");
  }

  toggleCart() {
    this.cartButton.classList.toggle("cart-open");
    this.cartMenu.classList.toggle("open");
    this.header.classList.toggle("cart-open");
    this.body.classList.toggle("cart-open");
  }
}

export default MobileMenu;
