function toggleSearchBar() {
  const searchBar = document.getElementById("searchBar");
  if (searchBar.style.display === "none" || searchBar.style.display === "") {
    searchBar.style.display = "block";
    searchBar.focus();
  } else {
    searchBar.style.display = "none";
  }
}

function handleSearchKeyPress(event) {
  if (event.key === "Enter") {
    const searchTerm = document.getElementById("searchBar").value;
    if (searchTerm) {
      window.location.href = `/shop?search=${encodeURIComponent(searchTerm)}`;
    }
  }
}

document.addEventListener("DOMContentLoaded", function() {
  const urlParams = new URLSearchParams(window.location.search);
  const searchTerm = urlParams.get("search");

  if (searchTerm) {
    const searchInput = document.getElementById("searchInput");
    if (searchInput) {
      searchInput.value = searchTerm; // Mengisi search bar pada shop
    }
  }
});
