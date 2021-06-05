import {environment} from "./environment";

// Action Buttons
const viewButtons = document.getElementsByClassName('view-btn')
const updateButtons = document.getElementsByClassName('update-btn')
const deleteButtons = document.getElementsByClassName('delete-btn')
const closeUpdateModalBtn = document.getElementById('close-update-modal-btn')
const cancelDeleteBtn = document.getElementById('cancel-delete')
const confirmDeleteBtn = document.getElementById('confirm-delete')

// Form Elements
const formUpdate = document.getElementById('form-update')
const formDelete = document.getElementById('form-delete')
const addSongButton = document.getElementById('add-song-btn')
const container = document.getElementById('song-container')
const updateFormSubmit = document.getElementById('submit-update')
const deleteAlbumName = document.getElementById('delete-album-name')

// Fields
const albumNameField = document.getElementById('album-name')
const artistNameField = document.getElementById('artist-name')
const priceField = document.getElementById('price')


/*
* Opens a new tab by pressing the view button on the table
* the button uses {view-btn} from the html tag so make sure to not
* remove the class
*/
for (let viewBtn of viewButtons) {
    viewBtn.addEventListener("click", () => {
        window.open(`${environment.host}product/${viewBtn.value}`)
    })
}

/*
* Show a update modal by pressing the update button on the table
* the button uses {update-btn} from the html tag so make sure to not
* remove the class. This is were the AJAX request happen for getting
* the data from the API.
*/
for (let updateBtn of updateButtons) {
    updateBtn.addEventListener("click", () => {
        formUpdate.style.display = "block";
        let URL = `${environment.host}api/albums/${updateBtn.value}`
        container.innerHTML = ""
        fetch(URL)
            .then(value => value.json())
            .then(value => {
                albumNameField.value = value.name
                artistNameField.value = value.artist_name
                priceField.value = value.price
                formUpdate.action = `${environment.host}product/${value.id}`
                // show loading animation
                fetch(`${environment.host}api/songs/${value.id}`)
                    .then(data => data.json())
                    .then(data => {
                        // hide loading animation
                        if (data.length >= 5) {
                            addSongButton.classList.add("disabled")
                        }
                        data.forEach(data => {
                            container.innerHTML += `
                                <input
                                    type="text"
                                    class="song"
                                    name="song_name[]"
                                    placeholder="Song Name"
                                    value="${data.title}">
                            `
                        })
                    })
            })
    })
}

/*
* Show a delete modal by pressing the delete button on the table
* the button uses {delete-btn} from the html tag so make sure to not
* remove the class.
*/
for (let deleteBtn of deleteButtons) {
    deleteBtn.addEventListener("click", () => {
        let URL = `${environment.host}api/albums/${deleteBtn.value}`
        fetch(URL)
            .then(value => value.json())
            .then(value => {
                let message = `Are you sure want to delete ${value.name}`
                formDelete.action = `${environment.host}product/${value.id}`
                deleteAlbumName.innerText = message
                formDelete.style.display = "block"
            })
    })
}

/*
* This is where the add button add the input element of the form
* and the form can be only have 5 input maximum
*/
addSongButton.addEventListener('click', () => {
    let songElement = document.getElementsByClassName('song')
    if (songElement.length < 4) {
        container.innerHTML += `
                <input
                    type="text"
                    class="song"
                    name="song_name"
                    placeholder="Song Name">
            `
    }
})

/*
* Disables the submit functionality when button clicked.
* This is to prevent submission when the add input field
* button pressed
*/
formUpdate.addEventListener('submit', ev => {
    ev.preventDefault()
})

updateFormSubmit.addEventListener('click', () => {
    formUpdate.submit()
})

closeUpdateModalBtn.addEventListener('click', () => {
    formUpdate.style.display = "none"
})

formDelete.addEventListener('submit', ev => {
    ev.preventDefault()
})

cancelDeleteBtn.addEventListener('click', () => {
    formDelete.style.display = "none"
})

confirmDeleteBtn.addEventListener('click', () => {
    formDelete.submit()
})
