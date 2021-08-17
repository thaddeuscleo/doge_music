import { environment } from "./environment";

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


/**
 * TOOD:
 * - Opens a new tab by pressing the view button on the table
 *   the button uses {view-btn} from the html tag so make sure to not
 *   remove the class
 */
  // View starts here...



  // View modal ends here


/**
 * TODO:
 * - Show a update modal by pressing the update button on the table
 *   the button uses {update-btn} from the html tag so make sure to not
 *   remove the class. This is were the AJAX request happen for getting
 *   the data from the API.
 * - Get album information using fetch method
 * - To display the update prompt use:
 *   { formUpdate.style.display = "block" }
 */
  // Update modal starts here...



  // Update modal ends here




/**
 * TODO:
 * - Show a delete modal by pressing the delete button on the table
 *   the button uses {delete-btn} from the html tag so make sure to not
 *   remove the class.
 * - Get album name using fetch method
 * - To display the delete prompt use:
 *   { formDelete.style.display = "block" }
 */
  // Delete modal starts here...



  // Delete modal ends here




/**
 * TODO:
 * - This is where the add button add the input element of the form
 *   and the form can be only have 4 input maximum
 * - If the user reached the maximum limit the alert the user
 */
  // Add Song modal starts here...



  // Add Song modal ends here



/**
 * TODO:
 * Disables the submit functionality when button clicked.
 * This is to prevent submission when the add input field
 * button pressed
 */
