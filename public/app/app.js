function closeWindow() {
    window.close();
}

function clr_error() {
    var closer_name = document.forms["lead_form"]["closer_name"];
    var re = /^[A-Za-z0-9]{3,15}$/; // Allow alphabet characters and spaces
    if (closer_name.value == "") {
        document.getElementById('invalid-error').innerHTML = "<div class='text-danger'>Closer Name Required</div>";
        closer_name.focus();
        return false;
    } else {
        document.getElementById('invalid-error').innerHTML = "";
    }
}

function age_error() {
    var age = document.forms["lead_form"]["age"];
    var re = /^[A-Za-z0-9]{3,15}$/; // Allow alphabet characters and spaces
    if (age.value == "") {
        document.getElementById('age-error').innerHTML = "<div class='text-danger'>Please select a Customer Age. Required</div>";
        age.focus();
        return false;
    } else {
        document.getElementById('age-error').innerHTML = "";
    }
}

function smoker_error() {
    var smoker = document.forms["lead_form"]["smoker"];
    var re = /^[A-Za-z0-9]{3,15}$/; // Allow alphabet characters and spaces
    if (smoker.value == "") {
        document.getElementById('smoker-error').innerHTML = "<div class='text-danger'>Please select an Option Required</div>";
        smoker.focus();
        return false;
    } else {
        document.getElementById('smoker-error').innerHTML = "";
    }
}

$(document).ready(function() {
    $('#example').DataTable({
        //disable sorting on last column
        "columnDefs": [
            { "orderable": false, "targets": 5 }
        ],
        language: {
            //customize pagination prev and next buttons: use arrows instead of words
            'paginate': {
                'previous': '<span class="fa fa-chevron-left"></span>',
                'next': '<span class="fa fa-chevron-right"></span>'
            },
            //customize number of elements to be displayed
            "lengthMenu": 'Display <select class="form-control input-sm">' +
                '<option value="100">100</option>' +
                '<option value="200">200</option>' +
                '<option value="300">300</option>' +
                '<option value="400">400</option>' +
                '<option value="500">500</option>' +
                '<option value="-1">All</option>' +
                '</select> results'
        }
    })
});