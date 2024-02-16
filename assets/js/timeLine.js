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
    var existTags = Array.from(document.querySelectorAll('input[name="tags"]'));

    if (existTags.length <= 0) return;

    var selectedTags = Array.from(document.querySelectorAll('input[name="tags"]:checked')).map(function (tag) {
        return tag.value;
    });

    var events = document.querySelectorAll('.timeline-event');
    var index = 0;

    events.forEach(function (event) {
        var tagsvalue = event.querySelector('.tags').textContent;

        var tags = tagsvalue.split(",");

        console.log('tags:', tags);

        if (selectedTags.some(function (tag) {
            return tags.includes(tag);
        })) {
            event.style.setProperty('display', 'block', 'important');
            index++;
        } else {
            event.style.setProperty('display', 'none', 'important');
        }
    });

    var noEventsElement = document.getElementById("noTimelineEvents");
    if (noEventsElement) {

        noEventsElement.style.setProperty('display', index > 0 ? 'none' : 'block', 'important');

    }
}

function selectAllTags(value = true) {
    document.querySelectorAll('input[name="tags"]').forEach(function (checkbox) {
        checkbox.checked = value;
    });

    var noEventsElement = document.getElementById("noTimelineEvents");
    if (noEventsElement) {
        noEventsElement.style.display = value ? 'none' : 'block';
    }

    filterEvents();
}

document.querySelectorAll('input[name="tags"]').forEach(function (checkbox) {
    checkbox.addEventListener('change', function () {
        filterEvents();
    });
});

