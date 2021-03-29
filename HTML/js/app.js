$(function() {
    $('input[name="ytt"]').val("");
    $('input[name="date_of_joining"]').val("");
    $('input[name="yoga_experience"]').val("");
    $('input[name="select_room"]').val("");
    var trainingID = "";
    $('#training-location-wrap .dropdown-menu li a').click(function() {
        var trainingID = $(this).attr("data-value");
        $('input[name="ytt"]').val(trainingID);
    });
    $('#retreat-location-wrap .dropdown-menu li a').click(function() {
        var trainingID = $(this).attr("data-value");
        $('input[name="ytt"]').val(trainingID);
    });
    $('#training-date-wrap .dropdown-menu li a').click(function() {
        var dateID = $(this).attr("data-value");
        $('input[name="date_of_joining"]').val(dateID);
    });
    $('#yoga-exp .dropdown-menu li a').click(function() {
        var expID = $(this).attr("data-value");
        $('input[name="yoga_experience"]').val(expID);
    });
    $('#select-room .dropdown-menu li a').click(function() {
        var roomID = $(this).attr("data-value");
        $('input[name="select_room"]').val(roomID);
    });
    if ($("#yoga-training").is(":checked")) {
        $("#training-wrap").addClass("show-training");
    }
    if ($("#retreat").is(":checked")) {
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
    var scholarID = $(this).attr("data-value");
    $('input[name="ytt"]').val(trainingID);
    $("#single-apply .dropdown-menu li a").click(function() {
        var selText = $(this).text();
        $(this).parents('.dropdown').find('.dropdown-toggle').html(selText + '<span class="caret"></span>');
        var trainingData = $('#training-link').attr("href");
        trainingData = trainingData.substring(0, trainingData.indexOf('&date'));
        var trainingLink = trainingData + '&date=' + selText;
        $('#training-link').attr("href", trainingLink);
        var apply_valueName = $(this).attr("class");
        var apply_classValue = '.' + apply_valueName;
        var apply_targetList = $(".price-sec .offer-wrap");
        if ((apply_targetList).hasClass(apply_valueName)) {
            $(apply_targetList).siblings('.offer-wrap').addClass('price-hide');
            $(".offer-wrap" + apply_classValue).removeClass('price-hide');
        }
    });
    $.urlParam = function(name) {
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if (results == null) {
            return null;
        } else {
            return decodeURI(results[1]) || 0;
        }
    }
    $.urlParam('date');
    $.urlParam('location');
    $.urlParam('type');
    $.urlParam('Offer');
    $.urlParam('duration');
    var dataLocation = $.urlParam('location');
    var dateHere = $.urlParam('date');
    var offerHere = $.urlParam('Offer');
    var yogaDuration = $.urlParam('duration');
    if ($.urlParam('date') != null) {
        $("#single-apply").find('.dropdown-toggle').html(dateHere + '<span class="caret"></span>');
        var offer_valueName = $.urlParam('Offer');;
        var offer_classValue = '.' + offer_valueName;
        var offer_targetList = $(".price-sec .offer-wrap");
        if ((offer_targetList).hasClass(offer_valueName)) {
            $(offer_targetList).siblings('.offer-wrap').addClass('price-hide');
            $(".offer-wrap" + offer_classValue).removeClass('price-hide');
        }
    }
    $(".treat-btn").click(function() {
        var treat_location = $(this).attr("data-location");
        var treat_duration = $(this).attr("duration");
        var datePickstart = $("#start-date").val();
        var datePickstartClear = datePickstart.replace(/[^a-z0-9\s]/gi, ' ').replace(/[_\s]/g, '-');
        var datePickend = $("#end-date").val();
        var datePickendClear = datePickend.replace(/[^a-z0-9\s]/gi, ' ').replace(/[_\s]/g, '-');
        var treatUrl = "apply-now?duration=" + treat_duration + "&type=applyretreat&location=" + treat_location;
        var finalUrl = treatUrl + '&date=' + datePickstartClear + '&enddate=' + datePickendClear;
        window.location = $(this).attr('href', finalUrl);;
    });
    if ($.urlParam('type') != "applyretreat") {
        if ($.urlParam('date') != null && $.urlParam('location') != null) {
            if ($.urlParam('duration') == "200" || $.urlParam('duration') == null) {
                $("#training-location-wrap").find('.dropdown-toggle').html('200 Hour Yoga Teacher Training in ' + dataLocation + ' <span class="fa fa-angle-down"></span>');
                $('input[name="ytt"]').val('200 Hour Yoga Teacher Training in ' + dataLocation);
            } else {
                $("#training-location-wrap").find('.dropdown-toggle').html(yogaDuration + ' Yoga Teacher Training in ' + dataLocation + ' <span class="fa fa-angle-down"></span>');
                $('input[name="ytt"]').val(yogaDuration + ' Hour Yoga Teacher Training in ' + dataLocation);
            }
            if ($.urlParam('date') != null) {
                $("#training-date-wrap").find('.dropdown-toggle').html(dateHere + ' <span class="fa fa-angle-down"></span>');
            } else {
                $("#training-date-wrap").find('.dropdown-toggle').html('Select Course Date <span class="fa fa-angle-down"></span>');
            }
            $('input[name="date_of_joining"]').val(dateHere);
        }
    }



    $("#training-location-wrap .dropdown-menu li a").click(function() {
        var apply_valueName = $(this).attr("class");
        var apply_classValue = '.' + apply_valueName;
        var apply_targetList = $("#training-date-wrap .dropdown-menu li");
        if ((apply_targetList).hasClass(apply_valueName)) {
            $(apply_targetList).siblings().hide();
            $("li" + apply_classValue).show();
        }
    });
    var trainingData = $('#training-link').attr("href");
    var trainingLink = trainingData + '&date=' + dateHere;
    $('#training-link').attr("href", trainingLink);

/*Retreat Apply Form*/
    if ($.urlParam('type') == "applyretreat") {
        $("#retreat-wrap").addClass("show-retreat");
        $("#training-wrap").removeClass("show-training");
        $("#retreat").prop("checked", true);

        if ($.urlParam('date') != "" && $.urlParam('location') != "") {

            if ($.urlParam('location') == "rishikesh-begin") {
                $("#retreat-location-wrap").find('.dropdown-toggle').html('Beginners Yoga Retreat In Rishikesh <span class="fa fa-angle-down"></span>');
                $('input[name="ytt"]').val('Beginners Yoga Retreat In Rishikesh');
            } else {

                if($.urlParam('duration') != "" && $.urlParam('duration') != null) {

                    //console.log("duration");
                   $("#retreat-location-wrap").find('.dropdown-toggle').html(yogaDuration + ' Yoga Retreat In ' + dataLocation + ' <span class="fa fa-angle-down"></span>');

                   $('input[name="ytt"]').val(yogaDuration + ' Yoga Retreat In ' + dataLocation);
                    
                }
                else
                { $("#retreat-location-wrap").find('.dropdown-toggle').html('Yoga Retreat In ' + dataLocation + ' <span class="fa fa-angle-down"></span>');
                $('input[name="ytt"]').val('Yoga Retreat In ' + dataLocation);}

            }
            $('input[name="date_of_joining"]').val(dateHere);
        }




    }


    $('input[name="scholar_title"]').val("Scholarship For Free Yoga Teacher Training In " + $.urlParam('location') + ", India on " + $.urlParam('date'));
    if ($.urlParam('date') != null) {
        var scholarData = $.urlParam('date');
        var scholarclear = scholarData.replace(/[^a-z0-9\s]/gi, ' ').replace(/[_\s]/g, '_')
        $('div[ data-value=' + $.urlParam('location') + '-' + (scholarclear) + ']').show();
    }
});