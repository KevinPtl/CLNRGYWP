class Header {
  constructor() {
    this.header = document.getElementById("main-header");
    this.serviceSubMenu = document.getElementById("service-sub-menu");
    this.shopSubMenu = document.getElementById("shop-sub-menu");

    // Check the value of the query parameter and add a class to the element
    // if (queryParamValue === "shipping") {
    // }

    document.addEventListener("scroll", () => {
      if (window.scrollY >= 50 || window.pageXOffset >= 50) {
        this.header.classList.add("active");
      } else {
        this.header.classList.remove("active");
      }
    });

    if (this.serviceSubMenu) {
      this.serviceSubMenu.addEventListener("click", (event) => {
        this.serviceSubMenu.classList.toggle("active");
      });
    }

    if (this.shopSubMenu) {
      this.shopSubMenu.addEventListener("click", (event) => {
        this.shopSubMenu.classList.toggle("active");
      });
    }
  }
}

export default Header;
