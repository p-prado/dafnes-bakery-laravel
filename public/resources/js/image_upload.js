const imageInput = document.getElementById('imageInput');
const imagePreview = document.getElementById('imagePreview');

imageInput.style.opacity = 0.5;

imageInput.addEventListener('change', updateImageDisplay);

function updateImageDisplay() {
    // Use a while loop to empty the previous contents of the preview <div>.
    while (imagePreview.firstChild) {
        imagePreview.removeChild(imagePreview.firstChild);
    }

    // Grab the FileList object that contains the information on all the selected files, and store it in a variable called curFiles.
    const curFiles = imageInput.files;
    if (curFiles.length === 0) {
        const para = document.createElement('p');
        // Check to see if no files were selected, by checking if curFiles.length is equal to 0. If so, print a message into the preview <div> stating that no files have been selected.
        para.textContent = 'No hay archivos seleccionados.';
        imagePreview.appendChild(para);
    } else {
        // We use the custom validFileType() function to check whether the file is of the correct type (e.g. the image types specified in the accept attribute).
        var file = curFiles[0];
        if (validFileType(file)) {
            const para = document.createElement('p');
            // Print out its name and file size into a list item inside the previous <div> (obtained from file.name and file.size). The custom returnFileSize() function returns a nicely-formatted version of the size in bytes/KB/MB (by default the browser reports the size in absolute bytes).
            para.textContent = `Nombre ${file.name} |  ${returnFileSize(file.size)}`;
            const image = document.createElement('img');
            image.src = URL.createObjectURL(file);
            image.classList.add('image-preview-img');
            // Generate a thumbnail preview of the image by calling URL.createObjectURL(curFiles[i]). Then, insert the image into the list item too by creating a new <img> and setting its src to the thumbnail.
            imagePreview.appendChild(para);
            imagePreview.appendChild(image);
        } else {
            alert("123");
            // If the file type is invalid, we display a message inside a list item telling the user that they need to select a different file type.
            para.textContent = `${file.name}: No es un tipo de archivo válido. Selecciona otro archivo.`;
            imagePreview.appendChild(para);
        }

        // const list = document.createElement('ul');
        // imagePreview.appendChild(list);

        // // If files have been selected, we loop through each one, printing information about it into the preview <div>. Things to note here:
        // for (const file of curFiles) {
        //     const listItem = document.createElement('li');
        //     const para = document.createElement('p');
        //     // We use the custom validFileType() function to check whether the file is of the correct type (e.g. the image types specified in the accept attribute).
        //     if (validFileType(file)) {

        //         // Print out its name and file size into a list item inside the previous <div> (obtained from file.name and file.size). The custom returnFileSize() function returns a nicely-formatted version of the size in bytes/KB/MB (by default the browser reports the size in absolute bytes).
        //         para.textContent = `Nombre ${file.name} |  ${returnFileSize(file.size)}`;
        //         const image = document.createElement('img');
        //         image.src = URL.createObjectURL(file);
        //         image.classList.add('image-preview-img');

        //         // Generate a thumbnail preview of the image by calling URL.createObjectURL(curFiles[i]). Then, insert the image into the list item too by creating a new <img> and setting its src to the thumbnail.
        //         listItem.appendChild(para);
        //         listItem.appendChild(image);
        //     } else {
        //         // If the file type is invalid, we display a message inside a list item telling the user that they need to select a different file type.
        //         para.textContent = `${file.name}: No es un tipo de archivo válido. Selecciona otro archivo.`;
        //         listItem.appendChild(para);
        //     }

        //     list.appendChild(listItem);
        // }
    }
}

// https://developer.mozilla.org/en-US/docs/Web/Media/Formats/Image_types
const fileTypes = [
    "image/apng",
    "image/jpeg",
    "image/pjpeg",
    "image/png",
    "image/webp",
];

// The custom validFileType() function takes a File object as a parameter, then uses Array.prototype.includes() to check if any value in the fileTypes matches the file's type property. If a match is found, the function returns true. If no match is found, it returns false.
function validFileType(file) {
    return fileTypes.includes(file.type);
}

//   Image upload handling from MDN docs: https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/file


// The returnFileSize() function takes a number (of bytes, taken from the current file's size property), and turns it into a nicely formatted size in bytes/KB/MB.
function returnFileSize(number) {
    if (number < 1024) {
      return `${number} bytes`;
    } else if (number >= 1024 && number < 1048576) {
      return `${(number / 1024).toFixed(1)} KB`;
    } else if (number >= 1048576) {
      return `${(number / 1048576).toFixed(1)} MB`;
    }
  }