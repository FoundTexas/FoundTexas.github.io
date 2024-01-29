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
    const volume = Math.pow((value), 1.1);

    for (let i = 0; i < audioElements.length; i++) {
        audioElements[i].volume = volume;
    }
}
