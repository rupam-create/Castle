 $(function() {
    
    var defaultType = 'All-Types';
    var defaultLocation = 'All-Location';
    var defaultMonth = 'All-Month';
    var defaultYear = 'All-Year';

    /* Search */
    $("#search .dropdown-menu li a").click(function(){
      var selText = $(this).text();
      $(this).parents('.search-option').find('.dropdown-toggle').html(selText+' <span class="fa fa-angle-down drow-icon"></span>');
    });

    /* Type Options */
    $( "#search .type-option li a" ).click(function() {
      var valueName = $(this).attr("data-type");
      var valueAll = 'All-Types';
      var classValue = '.'+valueName;
      myFilter('hour', valueName, classValue, valueAll);
    });

    /* location Options */
    $( "#search .location-options li a" ).click(function() {
      var valueName = $(this).attr("data-type");
      var valueAll = 'All-Location';
      var classValue = '.'+valueName;
      myFilter('location', valueName, classValue, valueAll);
    });

    /* Month Options */
    $( "#search .month-options li a" ).click(function() {
      var valueName = $(this).attr("data-type");
      var valueAll = 'All-Month';
      var classValue = '.'+valueName;
      myFilter('month', valueName, classValue, valueAll);
    });

    /* All Year */
    $( "#search .year-options li a" ).click(function() {
      var valueName = $(this).attr("data-type");
      var valueAll = 'All-Year';
      var classValue = '.'+valueName;
      myFilter('year', valueName, classValue, valueAll);
    });

    function myFilter(iData,iEntry,iClass,iAll) {
      if(iData == 'hour') {
        defaultType = iEntry;
      } else if(iData == 'location') {
        defaultLocation = iEntry;
      } else if(iData == 'month') {
        defaultMonth = iEntry;
      } else if(iData == 'year') {
        defaultYear = iEntry;
      }

      $('.no-events').addClass('hide-data');

      if(iEntry == iAll) {
        $(".all-event-wrp table tr").removeClass('hide-data');
        $(".all-event-wrp").removeClass('hide-data');
      }

      $('.all-event-wrp').each(function() {
        if(
            ($(this).hasClass(defaultType) || defaultType == 'All-Types') &&
            ($(this).hasClass(defaultLocation) || defaultLocation == 'All-Location') &&
            ($(this).hasClass(defaultMonth) || defaultMonth == 'All-Month') &&
            ($(this).hasClass(defaultYear) || defaultYear == 'All-Year')
        ) {
          $(this).removeClass('hide-data');
        } else {
          $(this).addClass('hide-data');
        }
      });

      $('.tablebody tr').each(function() {
        if(
            ($(this).hasClass(defaultType) || defaultType == 'All-Types') &&
            ($(this).hasClass(defaultLocation) || defaultLocation == 'All-Location') &&
            ($(this).hasClass(defaultMonth) || defaultMonth == 'All-Month') 

        ) {
          $(this).removeClass('hide-data');
        } else {
          $(this).addClass('hide-data');
        }

      });

      // if found zero record(s) 
      var myCounter = 0;
      $('.tablebody tr').each(function() {
        var className = $(this).attr('class');
        var parentDiv = $(this).parent().parent().parent().attr('class');
        //console.log(parentDiv);
        if( !$(this).hasClass('hide-data') && !$(this).parent().parent().parent().hasClass('hide-data') ) {
          myCounter++;
        }
      });
      if(myCounter == 0) {
        $('.no-events').removeClass('hide-data');
      }
    }

    /*Reset*/
    $("#reset-all" ).click(function() {
      
      $(".all-event-wrp").removeClass('hide-data');
      $(".all-event-wrp table tr").removeClass('hide-data');
    });

    $("#all-event-con .tablebody tr").click(function() {
        window.location = $(this).data("href");
    });
});