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

searchText.addEventListener('keyup', () => {
    let data = searchText.value.toString()
    if (data.length !== 0) {
        clearTimeout()
        setTimeout(() => {
            let URL = `${environment.host}api/albums/search/${data}`
            fetch(URL)
                .then(value => value.json())
                .then(value => {
                    resultItem.innerHTML = ""
                    if (value.length !== 0) {
                        value.forEach(val => {
                            let webURL = `${environment.host}product/${val.id}`
                            resultItem
                                .innerHTML += setItemValue(webURL, val.name)
                        })
                    } else {
                        resultItem
                            .innerHTML += setItemValue("", "No Result")
                    }
                })
        }, 100)
    } else {
        resultItem.innerHTML = ""
    }
})

closeSearchButton.addEventListener('click', () => {
    searchContainer.style.display = "none";
    searchButton.style.display = "block";
})

function setItemValue(url, name) {
    return `<div class="search-item">
                <p>
                    <a href="${url}">${name}</a>
                </p>
            </div>
            `
}




