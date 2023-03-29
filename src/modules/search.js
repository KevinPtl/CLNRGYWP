class Search {
  constructor() {
    this.body = document.getElementsByTagName("body")[0];

    this.closeBtn = document.getElementById("close-search");
    this.searchBtn = document.getElementById("search-btn");
    this.searchOverlay = document.getElementById("search-overlay");
    this.searchTerm = document.getElementById("search-term");
    this.searchLoader = document.getElementById("search-loader");
    this.isSearchLoaderVisibile = false;
    this.searchResults = document.getElementById("search-results");
    this.previousSearchTerm;
    this.searchTimer;
    this.events();
  }

  events() {
    if (this.searchBtn) {
      this.searchBtn.addEventListener("click", this.openOverlay.bind(this));
    }

    if (this.closeBtn) {
      this.closeBtn.addEventListener("click", this.closeOverlay.bind(this));
    }

    if (this.searchTerm) {
      this.searchTerm.addEventListener("keyup", this.search.bind(this));
    }
  }

  search(e) {
    if (this.searchTerm.value === this.previousSearchTerm) {
      return;
    }

    clearTimeout(this.searchTimer);

    if (!this.searchTerm.value) {
      this.searchResults.innerHTML = "";
      this.searchLoader.style.display = "none";
      this.isSearchLoaderVisibile = false;
      this.previousSearchTerm = "";
      return;
    }

    if (!this.isSearchLoaderVisibile) {
      this.searchLoader.style.display = "flex";
      this.searchResults.style.display = "none";
      this.isSearchLoaderVisibile = true;
    }

    this.searchTimer = setTimeout(this.getSearchResults.bind(this), 750);
    this.previousSearchTerm = this.searchTerm.value;
  }

  async getSearchResults() {
    const data = await fetch(
      `${clnrgyData.root_url}/wp-json/clnrgy/v1/blog-search?term=${this.searchTerm.value}`
    );

    const posts = await data.json();
    this.isSearchLoaderVisibile = false;
    this.searchLoader.style.display = "none";
    this.searchResults.style.display = "flex";

    this.searchResults.innerHTML = `
        <h4>Résultat: </h4>
        ${posts && posts.length ? "<ul>" : "<p>Aucun résultat trouvé</p>"}
          ${posts
            .map(
              (item) =>
                `<li>
                  <a href="${item.permalink}">
                    ${
                      item.image
                        ? `<picture>
                    <img src="${item.image}" />
                  </picture>`
                        : ""
                    }
                    <div>
                      <span>${item.title}</span>
                      <small>Par ${item.authorName}</small>
                    </div>
                  </a>
                </li>`
            )
            .join("")}
        ${posts && posts.length ? "</ul>" : ""}
      `;
  }

  openOverlay() {
    this.searchOverlay.classList.add("active");
    this.body.classList.toggle("search-open");
    this.searchTerm.value = "";
    this.searchResults.innerHTML = "";

    setTimeout(() => {
      this.searchTerm.focus();
    }, 301);
  }

  closeOverlay() {
    this.searchOverlay.classList.remove("active");
    this.body.classList.toggle("search-open");
  }
}

export default Search;
