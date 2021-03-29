$(document).ready(function() {  

/*
#Ids

// STEP 1

	your-name
	email-address
	mytype [yoga-training]
		- training-location
		- training-date
	mytype [retreat]
		- retreat-location
		- retreat-date

// STEP 2

	phone-number
	yoga-experience [yes|no]
	any-problem
	room-name
	experience-content

*/
	var field_yourName,field_emailAddress,field_mytype,field_trainingLocation,field_hearabout,field_age,field_room,field_trainingDate,field_retreatLocation,field_retreatDate,field_phoneNumber,field_anyProblem,field_experienceContent  = '';

	function getFields() {
		field_yourName = $('#yourName').val();
		field_emailAddress = $('#email-address').val();
		//field_mytype = $('#mytype').val(); // radio | [yoga-training, retreat]
		field_mytype = $( "input[type=radio][name=mytype]:checked" ).val();


		field_trainingLocation = $('#training-location').val();

		field_trainingDate = $('#training-date').val();

		field_retreatLocation = $('#retreat-location').val();

		field_retreatDate = $('#retreat-date').val();

		field_phoneNumber = $('#phoneNumber').val();
		//field_phoneNumber = $( "input[type=Number][name=phone-number]" ).val();
		
		field_anyProblem = $('#any-problem').val();

		field_room = $('#select-room-type').val();

		field_age = $('#person-age').val();

		field_hearabout = $('#hearabout').val();
		
		field_experienceContent = $('#experience-content').val();
		
	}

	function isEmail(email) {
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(email);
	}
	// step link(s)

	// button1
	$('.button1').click(function() {
		getFields();
		// goto step 2, and remove others active
		
		if(field_yourName == "") {
			alert('Please enter Your name.');

		} else if(field_emailAddress == "") {
			alert('Please enter Email Address.');

		} else if( !isEmail(field_emailAddress) ) {
			alert('Please enter valid Email Address.');

		} else if( field_mytype == "yoga-training" && field_trainingLocation == "" ) {
			alert('Please choose location for Yoga Training.');

		} else if( field_mytype == "yoga-training" && field_trainingDate == "null" ) {
			alert('Please choose date for Yoga Training.');

		} else if( field_mytype == "retreat" && field_retreatLocation == "" ) {
			alert('Please choose location for Retreat.');

		} else if( field_mytype == "retreat" && field_retreatDate == "" ) {
			alert('Please enter joining date for Retreat.');

		} else if( field_room == "" ) {
			alert('Please select your room type.');

		} else {

			var mylocation,mydate = '';
			if( field_mytype == "yoga-training" ) {
				mylocation = field_trainingLocation;
				mydate = field_trainingDate;
			}
			if( field_mytype == "retreat" ) {
				mylocation = field_retreatLocation;
				mydate = field_retreatDate;
			}

            $.ajax({
                type: "POST",
                url: "send-email.php",
                data: {
                		form_number		: 'first',
                        your_name		: field_yourName,
                        email_address	: field_emailAddress,
                        phone_number	: field_phoneNumber,
                        mytype 			: field_mytype,
                        location 		: mylocation,
                        date 			: mydate,
                        room 			: field_room
                    },
                dataType:"json",
                cache:false,
                success:
                function(data) {
                    // console.log(data);
                    if( data.result == "success") {
                        console.log(data);
                        // $('#parent_id').html(data.list);
                    }
                }
            });

			$('#step2title').addClass("active");
			$('#step2block').css('display','block');

			$('#step1title').removeClass("active");
			$('#step3title').removeClass("active");
			$('#step1block').css('display','none');
			$('#step3block').css('display','none');
		}
	});

	


	// button2
	$('.button2').click(function() {
		getFields();
		// goto step 3, and remove others active
		var totalCharsOfPhn = field_phoneNumber.length; 
		var totalCharsOfAge = field_age.length;

		if(field_age == "" || totalCharsOfAge > 2) {
			alert('Please enter your correct Age.');	
		
		} 

		else {

			var mylocation,mydate = '';
			if( field_mytype == "yoga-training" ) {
				mylocation = field_trainingLocation;
				mydate = field_trainingDate;
			}
			if( field_mytype == "retreat" ) {
				mylocation = field_retreatLocation;
				mydate = field_retreatDate;
			}

            $.ajax({
                type: "POST",
                url: "send-email.php",
                data: {
                		form_number		: 'second',
                        your_name		: field_yourName,
                        email_address	: field_emailAddress,
                        mytype 			: field_mytype,
                        location 		: mylocation,
                        date 			: mydate,
                        phone_number 	: field_phoneNumber,
                        problem 		: field_anyProblem,
                        age 			: field_age,
                        experience 		: field_experienceContent,
                        hearabout 		: field_hearabout
                    },
                dataType:"json",
                cache:false,
                success:
                function(data) {
                    // console.log(field_age);
                    if( data.result == "success") {
                        console.log(data);
                    }
                }
            });

			$('#step3title').addClass("active");
			$('#step3block').css('display','block');

			$('#step1title').removeClass("active");
			$('#step2title').removeClass("active");
			$('#step1block').css('display','none');
			$('#step2block').css('display','none');
		}
	});


	// button3
	/*$('.button3').click(function() {

	});
	*/


	// previous2
	$('.previous2').click(function() {
		// goto step 1, and remove others active
		$('#step1title').addClass("active");
		$('#step1block').css('display','block');
		$('#step2title').removeClass("active");
		$('#step3title').removeClass("active");
		$('#step2block').css('display','none');
		$('#step3block').css('display','none');
	});

	// previous3
	$('.previous3').click(function() {
		// goto step 2, and remove others active
		$('#step2title').addClass("active");
		$('#step2block').css('display','block');
		$('#step1title').removeClass("active");
		$('#step3title').removeClass("active");
		$('#step1block').css('display','none');
		$('#step3block').css('display','none');
	});



	// Handle type
	if($("#yoga-training").is(":checked")){
		$("#training-wrap").addClass("show-training");
	}

	if($("#retreat").is(":checked")){
		$("#retreat-wrap").addClass("show-retreat");
	}

	$('#yoga-training').click(function() {
		$("#training-wrap").addClass("show-training");
		$("#retreat-wrap").removeClass("show-retreat");
	});

	$('#retreat').click(function() {
		$("#retreat-wrap").addClass("show-retreat");
		$("#training-wrap").removeClass("show-training");
	});
});