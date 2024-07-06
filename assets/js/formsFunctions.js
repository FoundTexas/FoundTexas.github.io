
function submitForm(url = 'admin/new/milestone', id = 'mileStoneForm', loadingGif, updateID) {
    var form = document.getElementById(id);
    var formData = new FormData(form);

    // Append the updateID to the formData
    formData.append('updateID', updateID);

    setLoadingGif(id, loadingGif);

    fetch(url, {
        method: 'POST',
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            if (data.status !== 'success') {
                throw new Error(data.message);
            }
            // Handle success response
            console.log(data);
            // Optionally, redirect to another page or perform other actions

            // Hide the loading GIF
            removeLoadingGif(id);

            // Optionally, show a success message or perform other actions
            alert('Form submitted successfully!');
        })
        .catch(error => {
            // Handle error
            console.error('There was a problem with the fetch operation:', error);

            // Hide the loading GIF
            removeLoadingGif(id);

            // Optionally, show an error message
            alert('Failed to submit form: ' + error.message);
        });
}


function initializeForm() {
    console.log('Milestone');
    var collectionHolder = document.querySelector('#mile_stone_form_tags');
    var addButton = document.createElement('button');
    addButton.type = 'button';
    addButton.className = 'btn btn-secondary my-3 w-50 rounded-pill';
    addButton.innerText = 'Add Contacto';

    collectionHolder.appendChild(addButton);

    addButton.addEventListener('click', function () {
        var newForm = collectionHolder.dataset.prototype;
        var index = collectionHolder.dataset.index * 1;
        newForm = newForm.replace(/__name__/g, index);
        collectionHolder.dataset.index = index + 1;

        var newFormElement = document.createElement('div');
        newFormElement.innerHTML = newForm;
        collectionHolder.insertBefore(newFormElement, addButton);

        addDeleteLink(newFormElement);
    });

    collectionHolder.dataset.index = collectionHolder.querySelectorAll(':scope > div').length;

    collectionHolder.querySelectorAll(':scope > div').forEach(function (contactForm) {
        console.log('none');
        addDeleteLink(contactForm);
    });
}

function addDeleteLink(contactForm) {
    var removeButton = document.createElement('button');
    removeButton.type = 'button';
    removeButton.className = 'btn btn-danger';
    removeButton.innerText = 'Delete';

    contactForm.appendChild(removeButton);

    removeButton.addEventListener('click', function () {
        contactForm.remove();
    });
}

function newForm(url = 'admin/new/milestone', containerid = 'MilestoneContainer', loadingGif, selectedId) {
    // Show the loading GIF
    var container = document.getElementById(containerid);

    setLoadingGif(containerid, loadingGif);

    fetch(url + (selectedId ? '?id=' + selectedId : ''))
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                // Hide the loading GIF and update the container with the fetched content
                container.innerHTML = data.html;

                // Call the initialize function after the HTML is loaded
                initializeForm();
            } else {
                throw new Error(data.message);
            }
        })
        .catch(error => {
            // Hide the loading GIF and handle error
            container.innerHTML = '<div class="error">Failed to fetch form: ' + error.message + '</div>';
            console.error('There was a problem with the fetch operation:', error);
        });
}
