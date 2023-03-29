class Header {
  constructor() {
    this.header = document.getElementById("main-header");
    this.serviceSubMenu = document.getElementById("service-sub-menu");

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
  }
}

export default Header;
