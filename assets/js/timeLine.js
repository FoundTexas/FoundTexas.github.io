// timeLine.js

function filter() {
    // Get selected tags
    var selectedTags = Array.from(document.querySelectorAll('input[name="tags[]"]:checked')).map(function (tag) {
        return tag.value;
    });

    // Print selected tags
    console.log("Selected Tags: ", selectedTags);

    // Get selected years (assuming there are input checkboxes for years as well)
    var selectedYears = Array.from(document.querySelectorAll('input[name="years[]"]:checked')).map(function (year) {
        return year.value;
    });
    var years = Array.from(document.querySelectorAll('input[name="years[]"]')).map(function (year) {
        return year.value;
    });

    // Print selected years
    console.log("Selected Years: ", selectedYears);

    // Show or hide year sections based on selection (if applicable)
    years.forEach(function (year) {
        var yearElement = document.getElementById(year);
        if (yearElement) {
            yearElement.style.setProperty('display', selectedYears.includes(year) ? 'block' : 'none', 'important');
        }
    });

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

