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

    var exsisttags = Array.from(document.querySelectorAll('input[name="tags"]'));

    if (exsisttags.length <= 0) { return; }
    var tags = Array.from(document.querySelectorAll('input[name="tags"]:checked'));

    var selectedTags = tags.map(function (tag) {
        return tag.value;
    });

    var events = document.querySelectorAll('.timeline-event');
    var index = 0;

    events.forEach(function (event) {
        var tags = JSON.parse(event.querySelector('.tags').textContent);


        if (selectedTags.some(function (tag) {
            return tags.includes(tag);
        })) {
            console.log(tags);
            console.log(selectedTags);

            event.style.setProperty('display', 'block', 'important');

            //event.style.display = 'block !important';
            index++;
        } else {
            //event.style.display = 'none !important';
            event.style.setProperty('display', 'none', 'important');
        }
    });

    console.log(index);
    const element = document.getElementById("noTimelineEvents");
    if (element) {
        element.style.display = index > 0 ? 'none' : 'block';
    }

}

function selectAllTags(value = true) {
    document.querySelectorAll('input[name="tags"]').forEach(function (checkbox) {
        checkbox.checked = value;
    });

    var element = document.getElementById("noTimelineevents");
    if (element) {
        element.style.display = value ? 'none' : 'block';
    }

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