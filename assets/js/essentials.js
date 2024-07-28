function setLoadingGif(givenID, gifUrl) {
    var container = document.getElementById(givenID);
    if (container) {
        container.innerHTML = '<img src="' + gifUrl + '" alt="Loading...">';
    } else {
        console.error('Element with ID "' + givenID + '" not found.');
    }
}

function removeLoadingGif(givenID) {
    var container = document.getElementById(givenID);
    if (container) {
        container.innerHTML = '';
    } else {
        console.error('Element with ID "' + givenID + '" not found.');
    }
}
