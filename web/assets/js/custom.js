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
                $('.alert').addClass('show');
                console.log(`[ERR] [API] @ checkingAvailability() is `, err);
            });
    })
}

function contactUs() {
    $('#contactUsForm').submit(function (e) {
        e.preventDefault();
        console.log($(this).serializeArray());
    })
}