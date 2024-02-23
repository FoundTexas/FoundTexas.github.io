// timeLine.js
function showEvents(year) {
    var allEvents = document.querySelectorAll('.events-wrapper');
    for (var i = 0; i < allEvents.length; i++) {
        allEvents[i].style.display = 'none';
    }
    document.getElementById('events-' + year).style.display = 'block';
    checkScrollButtons();
}

function scrollToEvent(year, index) {
    var eventCard = document.querySelectorAll('#events-' + year + ' .card')[index];
    eventCard.scrollIntoView({ behavior: 'smooth', block: 'center' });
}

function checkScrollButtons() {
    var allEvents = document.querySelectorAll('.events-wrapper');
    allEvents.forEach(function (eventsWrapper) {
        var scrollable = eventsWrapper.scrollWidth > eventsWrapper.clientWidth;
        var scrollButtons = eventsWrapper.querySelector('.scroll-buttons');
        if (scrollButtons) { // Check if scrollButtons is not null
            if (scrollable) {
                scrollButtons.style.display = 'block';
            } else {
                scrollButtons.style.display = 'none';
            }
        }
    });
}

function filterEvents() {
    var selectedTags = Array.from(document.querySelectorAll('input[name="tags"]:checked')).map(function (tag) {
        return tag.value;
    });

    var events = document.querySelectorAll('.timeline-event');
    events.forEach(function (event) {
        var tags = JSON.parse(event.querySelector('.tags').textContent);
        var year = event.closest('.events-wrapper').id.split('-')[1];
        if (selectedTags.some(function (tag) {
            return tags.includes(tag);
        })) {
            event.style.display = 'inline-block';
        } else {
            event.style.display = 'none';
        }
    });
}

function selectAllTags(value = true) {
    document.querySelectorAll('input[name="tags"]').forEach(function (checkbox) {
        checkbox.checked = value;
    });
    filterEvents();
}

window.addEventListener('resize', function () {
    checkScrollButtons();
});

document.querySelectorAll('input[name="tags"]').forEach(function (checkbox) {
    checkbox.addEventListener('change', function () {
        filterEvents();
    });
});