// timeLine.js

function filter() {

    var selectedTags = Array.from(document.querySelectorAll('input[name="tags"]:checked')).map(function (tag) {
        return tag.value;
    });
    var selectedYears = Array.from(document.querySelectorAll('input[name="years"]')).map(function (year) {
        return year.value;
    });

    events.forEach(function (event) {
        year = event.value;
        console.log(year);
        var yearvalue = document.getElementById(year);
        if(yearvalue)
        {if (year) {
            yearvalue.style.setProperty('display', 'block', 'important');
        } 
        else {
            yearvalue.style.setProperty('display', 'none', 'important');
        }}
    });

    console.log(selectedTags);
    console.log(selectedYears);

    return

    var events = document.querySelectorAll('.timeline-event');
    var index = 0;

    events.forEach(function (event) {
        var tagsvalue = event.querySelector('.tags').textContent;

        var tags = tagsvalue.split(",");

        if (selectedTags.some(function (tag) {
            return tags.includes(tag);
        })) {
            event.style.setProperty('display', 'block', 'important');
            index++;
        } 
        else {
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

    filter();
}

document.querySelectorAll('input[name="tags"]').forEach(function (checkbox) {
    checkbox.addEventListener('change', function () {
        filter();
    });
});

document.querySelectorAll('input[name="years"]').forEach(function (checkbox) {
    checkbox.addEventListener('change', function () {
        filter();
    });
});

