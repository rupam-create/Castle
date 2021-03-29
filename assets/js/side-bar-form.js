        $(document).ready(function() {  
              function getsideFields() {
                field_course = $('#side_course').val();
                field_month = $('#side_month').val();
                field_fname = $('#side_fname').val();
                
                field_email = $('#side_email').val();
                field_phone = $('#side_phone').val();
                field_message = $('#side_message').val();
            }

            function isSideEmail(email) {
                var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                return regex.test(email);
            }
            $('.slidebar_btn').click(function() {
                getsideFields();
                if (field_fname == "") {
                    alert('Please enter Your Name.');
                    return false;
                } else if (field_email == "") {
                    alert('Please enter Email Address.');
                    return false;
                } else {
                    $.ajax({
                        type: "POST",
                        url: "sidebar-form.php",
                        data: {
                            side_course: field_course,
                            side_month: field_month,
                            side_fname: field_fname,
                            side_email: field_email,
                            side_phone: field_phone,
                            side_message: field_message,

                        },
                        dataType: "json",
                        cache: false,
                        success: function(data) {
                            if (data.result == "success") {
                                 window.location = "logged_in.php";
                                
                            }else{  alert("Wrong password.");  }
                        }
                    });

                    //$( "body" ).removeClass("slide_pop-open");
                }
                 
            });

            $( ".apply-btn" ).click(function() {
              $( "body" ).addClass("slide_pop-open");
            });

            $( ".close-btn" ).click(function() {
              $( "body" ).removeClass("slide_pop-open");
              
              $('#sidebar-form-wrap')[0].reset();
            });
            
            $( ".overlay-sidebar" ).click(function() {
              $( "body" ).removeClass("slide_pop-open");
              
              $('#sidebar-form-wrap')[0].reset();
            });


         });


        