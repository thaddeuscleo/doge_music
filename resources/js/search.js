import {environment} from "./environment";

const searchButton = document.getElementById('search-btn')
const searchText = document.getElementById('search_text')
const closeSearchButton = document.getElementById('close-search')
const searchContainer = document.getElementById('search-container')
const resultItem = document.getElementById('search-result')


window.addEventListener('keyup', ev => {
    if (ev.isComposing || ev.code === "Slash") {
        searchText.focus()
    }

    if (ev.isComposing || ev.code === "Escape") {
        searchContainer.style.display = "none";
        searchButton.style.display = "block";
    }
})

searchButton.addEventListener('click', () => {
    searchButton.style.display = "none";
    searchContainer.style.display = "block";
})

closeSearchButton.addEventListener('click', () => {
    searchContainer.style.display = "none";
    searchButton.style.display = "block";
})

/**
 * TODO:
 * - Show suggestion by fetching the data using AJAX.
 * - Use this markup to populate the suggestion: 
 *   <div class="search-item"> <p> <a href="{{url}}"> {{name}} </a> </p> </div>
 */
  // Show suggestion starts here...



  // Show suggestion ends here





