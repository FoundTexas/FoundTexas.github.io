// audioPlayer.js

// Define the playSound function that takes an element ID as a parameter
function playSound(elementId) { 
    console.log("audio");
    const audio = document.getElementById(elementId);

    // Check if the audio is paused or ended
    if (audio.paused || audio.ended) {
        // Play the audio
        audio.play();
    } else {
        // Pause and reset the audio to the beginning
        audio.currentTime = 0;
    }
}

// Function to set the volume of all audio elements
function setVolume(value, group) {
    const audioElements = document.getElementsByClassName(group);
    const volume = Math.pow(value, 1.3);

    // Update volume percentage display
    document.getElementById('volumeValue').textContent = `${Math.round(volume * 100)}%`;

    // Set volume for each audio element
    for (let i = 0; i < audioElements.length; i++) {
        audioElements[i].volume = volume;
    }

    // Store volume value as a cookie
    document.cookie = `volume=${volume}; expires=Thu, 18 Dec 2025 12:00:00 UTC; path=/`;
}


// Retrieve volume value from cookie at document ready
document.addEventListener('DOMContentLoaded', function() {
    const volumeCookie = document.cookie.replace(/(?:(?:^|.*;\s*)volume\s*=\s*([^;]*).*$)|^.*$/, "$1");
    if (volumeCookie) {
        // Set volume slider value
        document.getElementById('volumeRange').value = parseFloat(volumeCookie) ** (1/1.1);
        // Set volume of audio elements
        setVolume(parseFloat(volumeCookie), 'audio-group');
    }
});
