
function submitForm(url, containerid, formid, loadingGif) {
    var form = document.getElementById(formid);
    var formData = new FormData(form);

    setLoadingGif(containerid, loadingGif);

    fetch(url, {
        method: 'POST',
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            if (data.status !== 'success') {
                throw new Error(data.message);
            }
            
            removeLoadingGif(containerid);
            newForm(url, containerid, loadingGif)
            alert('Form submitted successfully!');
        })
        .catch(error => {
            // Handle error
            console.error('There was a problem with the fetch operation:', error);

            // Hide the loading GIF
            removeLoadingGif(containerid);

            // Optionally, show an error message
            alert('Failed to submit form: ' + error.message);
        });
}

function newForm(url, containerid, loadingGif) {
    var container = document.getElementById(containerid);
    setLoadingGif(containerid, loadingGif);

    fetch(url)
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

function initializeForm() {
    var collectionHolders = Array.from(document.querySelectorAll('.collection'))
        .filter(function (collectionHolder) {
            return !collectionHolder.querySelector('.collection-add');
        });

    collectionHolders.forEach(function (collectionHolder) {

        if (collectionHolder.classList.contains('no-add') == false) {
            var addButton = document.createElement('button');
            addButton.type = 'button';
            addButton.className = 'collection-add btn btn-secondary my-3 w-50 rounded-pill';
            addButton.innerText = 'Add';

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
                initializeForm();
            });
        }

        collectionHolder.dataset.index = collectionHolder.querySelectorAll(':scope > div').length;

        collectionHolder.querySelectorAll(':scope > div').forEach(function (contactForm) {
            addDeleteLink(contactForm);
        });
    });
}

function addDeleteLink(contactForm) {
    var removeButton = document.createElement('button');
    removeButton.type = 'button';
    removeButton.className = 'col-auto btn btn-danger';
    removeButton.innerText = 'Delete';

    contactForm.appendChild(removeButton);

    removeButton.addEventListener('click', function () {
        contactForm.remove();
    });
}
