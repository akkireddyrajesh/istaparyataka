$('document').ready(function () {
    // $().alert()
    //Menu 
    activeMenu();

    //checkingAvailability
    checkingAvailability();

    //contactUs
    contactUs()
});
function activeMenu() {
    const current_path = window.location.pathname.split('/').pop();
    console.log(`current file name from URL is :: ${current_path}`);
    $('.menu_ul > li').each(function (i, obj) {
        //test
        let dataUrl = $(this).attr('data-url');
        if (dataUrl == current_path) {
            $(this).addClass("btn_active");
        }
    });
}
function checkingAvailability() {
    $('#checkingAvailabilityForm').submit(function (e) {
        e.preventDefault();
        let formdata = $(this).serialize();
        console.log(formdata);
        $.ajax({
            method: "POST",
            url: "mail.lib.php",
            data: formdata
        })
        .done(function (msg) {
            alert("Data Saved: " + msg);
        }).fail(function (err) {
            // $('.alert').addClass('show');
            // console.log(`[ERR] [API] @ checkingAvailability() is `, err);
            // if (confirm('Due To COVID-19 Bookings are closed. we will let you know once services are up. would you like to setup reminder mail')) {
            //     // Save it!
            //     window.location='contactus.html';
            // }
            $('.bookingAvailability_box').toggle();
        });
    })
}

function contactUs() {
    $('#contactUsForm').submit(function (e) {
        e.preventDefault();
        let formdata = $(this).serialize();
        console.log('formdata :: ',formdata);
        $.ajax({
            method: "POST",
            url: "mail.lib.php",
            data: formdata
        })
        .done(function (msg) {
            $('.contact_form_box').toggle();
            $('.contact_form_thanks_box').toggle();
        }).fail(function (err) {
            alert('Please try after some time...');
            // $('.contact_form_box').toggle();
            // $('.contact_form_thanks_box').toggle();
            console.log(`[ERR] [API] @ checkingAvailability() is `, err);
        });
    })
    
    
}