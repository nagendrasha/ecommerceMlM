$(document).ready(function() {

    toastr.options = {
        'closeButton': true,
        'debug': false,
        'newestOnTop': true,
        'progressBar': false,
        'positionClass': 'toast-top-right',
        'preventDuplicates': false,
        'showDuration': '1000',
        'hideDuration': '1000',
        'timeOut': '5000',
        'extendedTimeOut': '1000',
        'showEasing': 'swing',
        'hideEasing': 'linear',
        'showMethod': 'fadeIn',
        'hideMethod': 'fadeOut',
    }

});


// toastr.info('You clicked Info toast', 'Info Message');
// toastr.warning('You clicked Warning toast', 'Warning Message');
// toastr.error('You clicked Error toast', 'Error Message');
