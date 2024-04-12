// JavaScript function to add new tag fields
function addField(formcollection = 'mile_stone_form', formvalue = 'tags') {
    var tagsContainer = document.getElementById( (formcollection+'_'+formvalue) );
    var index = tagsContainer.children.length; // Get the number of existing tag fields

    var newTagField = document.createElement('div');
    newTagField.innerHTML = `
                        <input type="text" id="${formcollection}_${formvalue}_${index}" name="${formcollection}[${formvalue}][${index}]" required >
                        <button type="button" class="delete-btn" onclick="deleteField(this, ${formcollection}_${formvalue})">Delete</button>
                    `;
    tagsContainer.appendChild(newTagField);
}

// JavaScript function to delete tag fields
function deleteField(button, container = 'mile_stone_form_tags') {
    var tagContainer = button.parentElement; // Get the parent container

    tagContainer.remove();
    // Remove the tag container

    // Update the indexes of remaining tag fields
    var tagsContainer = document.getElementById(container);
    var remainingTags = tagsContainer.children;
    for (var i = 0; i < tagsContainer.children.length; i++) {
        var input = remainingTags[i].querySelector('input');
        var button = remainingTags[i].querySelector('.delete-btn');
        input.name = `mile_stone_form[tags][${i}]`; // Update input name
    }
}

function submitForm(updateID) {
    var form = document.getElementById('mileStoneForm');
    var formData = new FormData(form);

    // Append the updateID to the formData
    formData.append('updateID', updateID);

    fetch('/new/milestone', {
        method: 'POST',
        body: formData
    })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            // Handle success response
            console.log(data);
            // Optionally, redirect to another page or perform other actions
        })
        .catch(error => {
            // Handle error
            console.error('There was a problem with the fetch operation:', error);
        });
}