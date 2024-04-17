function newMilestone() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                document.getElementById('MilestoneContainer').innerHTML = xhr.responseText;
            } else {
                console.error('Failed to fetch milestone form:', xhr.status);
            }
        }
    };
    xhr.open('GET', '/admin/new/milestone', true);
    xhr.send();
}

document.addEventListener('DOMContentLoaded', function () { // Add event listener for dropdown change
    document.getElementById('milestoneDropdown').addEventListener('change', function () {
        var selectedId = this.value;
        if (selectedId) { // Make AJAX request to get milestone form
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        document.getElementById('MilestoneContainer').innerHTML = xhr.responseText;
                    } else {
                        console.error('Failed to fetch milestone form:', xhr.status);
                    }
                }
            };
            xhr.open('GET', '/admin/new/milestone?id=' + selectedId, true);
            xhr.send();
        }
    });
});