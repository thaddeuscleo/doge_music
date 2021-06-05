const formAdd = document.getElementById('form-add')
const addAlbumBtn = document.getElementById('add-album')
const imageInput = document.getElementById('image-input')
const albumArt = document.getElementById('album-art')
const container = document.getElementById('container')
const addSongBtn = document.getElementById('add-song')
const songs = document.getElementsByClassName('song')

imageInput.addEventListener('change', () => {
    const [file] = imageInput.files
    if (file) {
        albumArt.src = URL.createObjectURL(file)
    }
})

addSongBtn.addEventListener('click', () => {
    if (songs.length < 4) {
        container.innerHTML += `
            <input type="text" name="song[]" placeholder="Song name" class="song">
        `
    }
})

addAlbumBtn.addEventListener('click', () => {
    formAdd.submit();
})

formAdd.addEventListener('submit', ev => {
    ev.preventDefault()
})
