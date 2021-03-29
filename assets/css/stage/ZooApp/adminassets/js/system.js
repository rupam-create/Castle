(function($) {

	var base_url = window.location.origin +"/stage/ZooApp/";


  $(document).ready(function(){
    $(".delete").click(function(e){
        if(!confirm('Are you sure?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
   });

$(document).on('click','.feedingfact_edit',function(){
          //alert('got');
          event.preventDefault();
          var id = $(this).data('id');
          var factor_name=$(this).data('factor_name');
          var details = $(this).data('details');
         // var description = $(this).data('servicearea_description');
          $('#id_modal').val(id);
          $('#factor_name_modal').val(factor_name);
          $('#details_modal').val(details);
          CKEDITOR.instances.details_modal.setData(details);  
          $('#feddingmodal_Edit').modal('show');
        });
$(document).on('click','.groups_edit',function(){
          //alert('got');
          event.preventDefault();
          var id = $(this).data('id');
          var group_name=$(this).data('group_name');
          var group_details = $(this).data('group_details');
          var status = $(this).data('status');
        
          $('#id_modal').val(id);
          $('#group_name_modal').val(group_name);
          $('#status_modal').val(status);
          $('#group_details_modal').val(group_details);
          $('#groupmodal_Edit').modal('show');
        });
$(document).on('click','.vaccinetype_edit',function(){
          //alert('got');
          event.preventDefault();
          var id = $(this).data('id');
          var vaccine_type=$(this).data('vaccine_type');
          var description = $(this).data('description');
          var status = $(this).data('status');
        
          $('#id_modal').val(id);
          $('#vaccine_type_modal').val(vaccine_type);
          $('#status_modal').val(status);
          $('#description_modal').val(description);
          $('#vaccinemodal_Edit').modal('show');
        });
$(document).on('click','.diagnosis_edit',function(){
          //alert('got');
          event.preventDefault();
          var id = $(this).data('id');
          var diagnosis = $(this).data('diagnosis');
          var description = $(this).data('description');
          var status = $(this).data('status');
        
          $('#id_modal').val(id);
          $('#diagnosis_modal').val(diagnosis);
          $('#status_modal').val(status);
          $('#description_modal').val(description);
          $('#diagnosismodal_Edit').modal('show');
        });
$(document).on('click','.mealslotedit',function(){
          //alert('got');
          event.preventDefault();
          var id = $(this).data('id');
          var slot_name=$(this).data('slot_name');
          var start_time = $(this).data('start_time');
           var end_time = $(this).data('end_time');
        
          $('#id_modal').val(id);
          $('#slot_name_modal').val(slot_name);
          $('#start_time_modal').val(start_time);
          $('#end_time_modal').val(end_time); 
          $('#mealmodal_Edit').modal('show');
        });
$(document).on('click','.platers_edit',function(){
          //alert('got');
          event.preventDefault();
          var id = $(this).data('id');
          var platers_name=$(this).data('platers_name');
          var icon = $(this).data('icon');
          var status = $(this).data('status');

          $('#id_modal').val(id);
          $('#platers_name_modal').val(platers_name);
          $('#status_modal').val(status);
          $('#icon_modal').attr("src",icon);  
          $('#feedingplaters_Edit').modal('show');
        });
$(document).on('click','.feedtype_edit',function(){
          //alert('got');
          event.preventDefault();
          var id = $(this).data('id');
          var feed_type_name=$(this).data('feed_type_name');
          var feed_icon = $(this).data('feed_icon');
          var status = $(this).data('status');

          $('#id_modal').val(id);
          $('#feed_type_name_modal').val(feed_type_name);
          $('#status_modal').val(status);
          $('#feed_icon_modal').attr("src",feed_icon);  
          $('#feedingtype_Edit').modal('show');
        });
$(document).on('click','.unitedit',function(){
          //alert('got');
          event.preventDefault();
          var id = $(this).data('id');
          var unit_name=$(this).data('unit_name');
          var status = $(this).data('status');

          $('#id_modal').val(id);
          $('#unit_name_modal').val(unit_name);
          $('#status_modal').val(status);  
          $('#unitmodal_Edit').modal('show');
        });


$('#species').change(function(){
    var species = $("#species").val();
    console.log(species);
    $.ajax({
                "url": base_url+"Animals/getAllSubcat/"+species,
                "method": "GET",
                "timeout": 0,
                success:function(data)
                {
                  console.log(data);
                  var obj = JSON.parse(data);
                  // console.log(obj);
                  var html= '';
                    var i;
                    var html = '<option value="">Select species</option>'
                    for(i=0;i<obj.length;i++){
                        html += '<option value="'+obj[i].id+'">'+obj[i].cat_name+'</option>'
                          }
                    $('#subspecies').html(html);

                }
             });
     });
$('#vaccine_code').change(function(){
    var vaccine_code = $("#vaccine_code").val();
    console.log(vaccine_code);
    $.ajax({
                "url": base_url+"Vaccine/getfrequency/"+vaccine_code,
                "method": "GET",
                "timeout": 0,
                success:function(data)
                {
                  console.log(data);
                  var obj = JSON.parse(data);
                  // console.log(obj);
                  var html= '';
                    var i;
                    var html = '<option value="">Select Option</option>'
                    for(i=0;i<obj.length;i++){
                        // html += '<option value="'+obj[i].frequency+'">'+obj[i].frequency+'</option>'
                        html += '<textarea name="obj[i].frequency">'+obj[i].frequency+'</textarea>'
                          }
                    $('#frequency').html(html);

                }
             });
     });
$('#frequency').click(function(){
    var frequency = $("#frequency").val();
    console.log(frequency);
    $.ajax({
                "url": base_url+"Vaccine/getdosage/"+frequency,
                "method": "GET",
                "timeout": 0,
                success:function(data)
                {
                  console.log(data);
                  var obj = JSON.parse(data);
                  // console.log(obj);
                  var html= '';
                    var i;
                    var html = '<option value="">Select Option</option>'
                    for(i=0;i<obj.length;i++){
                        // html += '<option value="'+obj[i].dosage+'">'+obj[i].dosage+'</option>'
                         html += '<textarea name="obj[i].dosage">'+obj[i].dosage+'</textarea>'
                          }
                    $('#dosage').html(html);

                }
             });
     });
$('#dosage').click(function(){
    var dosage = $("#dosage").val();
    console.log(dosage);
    $.ajax({
                "url": base_url+"Vaccine/getroute/"+dosage,
                "method": "GET",
                "timeout": 0,
                success:function(data)
                {
                  console.log(data);
                  var obj = JSON.parse(data);
                  // console.log(obj);
                  var html= '';
                    var i;
                    var html = '<option value="">Select Option</option>'
                    for(i=0;i<obj.length;i++){
                        // html += '<option value="'+obj[i].route+'">'+obj[i].route+'</option>'
                        html += '<textarea name="obj[i].route">'+obj[i].route+'</textarea>'
                          }
                    $('#route').html(html);

                }
             });
     });

  $(document).on('change', '#pictures', function(){
      //alert("got");
        var pdfimg = $("#areaproject").val();
      //alert(pdfimg);
        var ext = this.value.match(/\.([^\.]+)$/)[1];
        switch (ext) {
          case 'jpg':
          case 'jpeg':
          case 'png':
          //case 'tif':
            //alert('Allowed');
            break;
          default:
            alert('This File Type is not allowed. Please select a file with extension of jpg,png or jpeg');
            this.value = '';
        }
  });
 $('#vaccines_code').change(function(){
    var vaccines_code = $("#vaccines_code").val();
    console.log(vaccines_code);
    $.ajax({
                "url": base_url+"Vaccine/getdosages/"+vaccines_code,
                "method": "GET",
                "timeout": 0,
                success:function(data)
                {
                  console.log(data);
                  var obj = JSON.parse(data);
                  // console.log(obj);
                  var html= '';
                    var i;
                    var html = '<option value="">Select Option</option>'
                    for(i=0;i<obj.length;i++){
                        // html += '<option value="'+obj[i].dosage+'">'+obj[i].dosage+'</option>'
                        html += '<textarea name="obj[i].dosage">'+obj[i].dosage+'</textarea>'
                          }
                    $('#dosages').html(html);

                }
             });
     });

 $('#dosages').click(function(){
    var dosages = $("#dosages").val();
    console.log(dosages);
    $.ajax({
                "url": base_url+"Vaccine/getroutes/"+dosages,
                "method": "GET",
                "timeout": 0,
                success:function(data)
                {
                  console.log(data);
                  var obj = JSON.parse(data);
                  // console.log(obj);
                  var html= '';
                    var i;
                    var html = '<option value="">Select Option</option>'
                    for(i=0;i<obj.length;i++){
                        // html += '<option value="'+obj[i].route+'">'+obj[i].route+'</option>'
                        html += '<textarea name="obj[i].route">'+obj[i].route+'</textarea>'
                          }
                    $('#routes').html(html);

                }
             });
     });

$('#category').change(function(){
    var category = $("#category").val();
    console.log(category);
    $.ajax({
                "url": base_url+"Animals/getSubcat/"+category,
                "method": "GET",
                "timeout": 0,
                success:function(data)
                {
                  console.log(data);
                  var obj = JSON.parse(data);
                  // console.log(obj);
                  var html= '';
                    var i;
                    var html = '<option value="">Select SubCategory</option>'
                    for(i=0;i<obj.length;i++){
                        html += '<option value="'+obj[i].id+'">'+obj[i].cat_name+'</option>'
                          }
                    $('#subcategory').html(html);

                }
             });
     });
$('#schedule_time').change(function(){
    var schedule_time = $("#schedule_time").val();
    console.log(schedule_time);
    $.ajax({
                "url": base_url+"Feeding/calci/"+schedule_time,
                "method": "GET",
                "timeout": 0,
                success:function(data)
                {
                  console.log(data);
                  var obj = JSON.parse(data);
                  console.log(obj.delay);
                  var html= '';
                        html += ''+obj.delay+'Hours'
                          
                    $('#time').html(html);

                }
             });
     });




})(jQuery);