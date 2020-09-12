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
            url: "ajaxfile.php",
            data: formdata,
            success: function(response){

          alert("Data Saved: " + response);

             }
        })
        
    })
}

  
        function booking() {

  
       var from = jQuery("#from").val();
        var to = jQuery("#to").val();
         var cartype = jQuery("#cartype").val();
           var pack = jQuery("#package").val();
        var date = jQuery("#inputPassword").val();
         var fname = jQuery("#firstname").val();
           var lname = jQuery("#lastname").val();
        var gender = jQuery("#gender").val();
         var age = jQuery("#age").val();
      var emailaddress = jQuery("#emailaddress").val();
        var phonenumber = jQuery("#phonenumber").val();
    alert(date);

        
        $.ajax({
            method: "POST",
            url: "booking.php",
           data: {
             from: from,
            to: to,
             cartype: cartype,
            pack: pack,
            date: date,
            fname: fname,
            lname: lname,
            gender: gender,
            age: age,
            emailaddress: emailaddress,
            phonenumber: phonenumber,
            },
            })
            .done(function (msg) {
            $('.contact_form_box').toggle();
            $('.contact_form_thanks_box').toggle();
            alert('sucess');
        }).fail(function (err) {
            alert('Please try after some time...');
            // $('.contact_form_box').toggle();
            // $('.contact_form_thanks_box').toggle();
            console.log(`[ERR] [API] @ checkingAvailability() is `, err);
        });
        
    
}


function contactUs() {
    $('#contactUsForm').submit(function (e) {
        e.preventDefault();
        let formdata = $(this).serialize();
        console.log('formdata :: ',formdata);
       
        
         $.ajax({
            method: "POST",
            url: "mail.php",
            data: formdata,
            success: function(response){

          alert("Data Saved: " + response);

             }
        })
        
    })
    
    
}