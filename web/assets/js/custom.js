$('document').ready(function () {
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
    $('#checkingAvailabilityForm').submit(function(e) {
        e.preventDefault();
        console.log($(this).serializeArray());
    })
}

function contactUs() {
    $('#contactUsForm').submit(function(e) {
        e.preventDefault();
        console.log($(this).serializeArray());
    })
}