// JavaScript function to add new tag fields
function addTagField() {
    var tagsContainer = document.getElementById('mile_stone_form_tags');
    var index = tagsContainer.children.length; // Get the number of existing tag fields

    var newTagField = document.createElement('div');
    newTagField.innerHTML = `
                        <input type="text" id="mile_stone_form_tags_${index}" name="mile_stone_form[tags][${index}]" required class="tag-input">
                        <button type="button" class="delete-tag-btn" onclick="deleteTagField(this)">Delete</button>
                    `;
    tagsContainer.appendChild(newTagField);
}

// JavaScript function to delete tag fields
function deleteTagField(button) {
    var tagContainer = button.parentElement; // Get the parent container

    tagContainer.remove();
    // Remove the tag container

    // Update the indexes of remaining tag fields
    var tagsContainer = document.getElementById('mile_stone_form_tags');
    var remainingTags = tagsContainer.children;
    for (var i = 0; i < tagsContainer.children.length; i++) {
        var input = remainingTags[i].querySelector('input');
        var button = remainingTags[i].querySelector('.delete-tag-btn');
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
