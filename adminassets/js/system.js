(function($) {

	var base_url = window.location.origin +"/pimento/";


  $(document).ready(function(){
    $(".delete").click(function(e){
        if(!confirm('Are you sure?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
   });

$(document).on('click','.services_edit',function(){
          //alert('got');
          event.preventDefault();
          var id = $(this).data('id');
          var name=$(this).data('name');
          var description = $(this).data('description');
          var image = $(this).data('image');
         // var description = $(this).data('servicearea_description');
          $('#id_modal').val(id);
          $('#name_modal').val(name);
          $('#description_modal').val(description);
          $('#image_modal').attr("src",image);  
          $('#servicesmodal_Edit').modal('show');
        });

  $(document).on('click','.gallery_edit',function(){
          //alert('got');
          event.preventDefault();
          var id = $(this).data('id');
          var name=$(this).data('name');
          var image = $(this).data('image');

         // var description = $(this).data('servicearea_description');

          $('#id_modal').val(id);
          $('#name_modal').val(name);
          $('#image_modal').attr("src",image);  
          $('#gallerypart_Edit').modal('show');
        });

  

//homepage background image
$(document).on('click','.homeslider_edit',function(){
          //alert('got');
          event.preventDefault();
          var id = $(this).data('id');
          var title=$(this).data('title');
          var is_active = $(this).data('is_active');
          var image = $(this).data('image');
         // var description = $(this).data('servicearea_description');
          $('#id_modal').val(id);
          $('#title_modal').val(title);
          $('#is_active_modal').val(is_active);
          $('#image_modal').attr("src",image);  
          $('#homeslidermodal_Edit').modal('show');
        });
$(document).on('click','.social_edit',function(){
          //alert('got');
          event.preventDefault();
          var id = $(this).data('id');
          var name=$(this).data('name');
          var link = $(this).data('link');
          var icon = $(this).data('icon');
           var status = $(this).data('status');
         // var description = $(this).data('servicearea_description');

          $('#id_modal').val(id);
          $('#name_modal').val(name);
          $('#link_modal').val(link);
          $('#icon_modal').val(icon);
          $('#status_modal').val(status);
          $('#socialmodal_Edit').modal('show');
        });
$(document).on('click','.customerfdbk_edit',function(){
          //alert('got');
          event.preventDefault();
          var id = $(this).data('id');
          var name=$(this).data('name');
          var comment = $(this).data('comment');

          $('#id_modal').val(id);
          $('#name_modal').val(name);
          $('#comment_modal').val(comment);
          $('#customerfdbkmodal_Edit').modal('show');
        });
$(document).on('click','.faq_edit',function(){
          //alert('got');
          event.preventDefault();
          var id = $(this).data('id');
          var question=$(this).data('question');
          var answer = $(this).data('answer');
         // var description = $(this).data('servicearea_description');

          $('#id_modal').val(id);
          $('#question_modal').val(question);
          $('#answer_modal').val(answer);
          $('#faqmodal_Edit').modal('show');
        });
$(document).on('click','.media_edit',function(){
          //alert('got');
          event.preventDefault();
          var id = $(this).data('id');
          var image = $(this).data('image');
          var title = $(this).data('title');
          var media_type = $(this).data('media_type');
          var video_url = $(this).data('video_url');

          $('#id_modal').val(id);
          $('#title_modal').val(title);
          $('#media_type_modal').val(media_type);
          $('#video_url_modal').val(video_url);
          $('#image_modal').attr("src",image);  
          $('#mediamodal_Edit').modal('show');
        });
$(document).on('click','.testimonial_edit',function(){
          //alert('got');
          event.preventDefault();
          var id = $(this).data('id');
          var image = $(this).data('image');
          var title=$(this).data('title');
          var subtitle = $(this).data('subtitle');
          var description = $(this).data('description');
         // var description = $(this).data('servicearea_description');

          $('#id_modal').val(id);
          $('#title_modal').val(title);
          $('#subtitle_modal').val(subtitle);
          $('#description_modal').val(description); 
          $('#testimonialmodal_Edit').modal('show');
        });
$(document).on('click','.counter_edit',function(){
          //alert('got');
          event.preventDefault();
          var id = $(this).data('id');
          var counter_name=$(this).data('counter_name');
          var counter = $(this).data('counter');
          var status = $(this).data('status');
         // var description = $(this).data('servicearea_description');

          $('#id_modal').val(id);
          $('#counter_name_modal').val(counter_name);
          $('#counter_modal').val(counter);
          $('#status_modal').val(status);
          $('#countermodal_Edit').modal('show');
        });
$(document).on('click','.homecontents_edit',function(){
          //alert('got');
          event.preventDefault();
          var id = $(this).data('id');
          var heading_one = $(this).data('heading_one');
          var heading_two = $(this).data('heading_two');
          var paragraph = $(this).data('paragraph');
          var about = $(this).data('about');
          var youtube_link = $(this).data('youtube_link');
         // var description = $(this).data('servicearea_description');

          $('#id_modal').val(id);
          $('#heading_one_modal').val(heading_one);
          $('#heading_two_modal').val(heading_two);
          $('#paragraph_modal').val(paragraph);
          CKEDITOR.instances.paragraph_modal.setData(paragraph);
          $('#about_modal').val(about);
          $('#youtube_link_modal').val(youtube_link);
          $('#homecontentsmodal_Edit').modal('show');
        });
$(document).on('click','.aboutcontents_edit',function(){
          //alert('got');
          event.preventDefault();
          var id = $(this).data('id');
          var heading=$(this).data('heading');
          var about = $(this).data('about');
          var image = $(this).data('image');
         // var description = $(this).data('servicearea_description');
          $('#id_modal').val(id);
          $('#heading_modal').val(heading);
          $('#about_modal').val(about);
          CKEDITOR.instances.about_modal.setData(about);
         // CKEDITOR.replace(about);
          $('#image_modal').attr("src",image);  
          $('#aboutcontentmodal_Edit').modal('show');
        });
$(document).ready(function(){
  $('#slug-target').slugify('#slug-source');

});
$(document).on('click','.image_modal',function(){  
          $('#imagemodal_Edit').modal('show');
        });

$(document).ready(function() {
            // $("#status").append("<option value='1 BHK'>1 BHK</option>");
            $("#status").append("<option value='2 BHK'>2 BHK</option>");
            $("#status").append("<option value='3 BHK'>3 BHK</option>");
            $("#status").append("<option value='4 BHK'>4 BHK</option>");
    $("#propertytype").change(function (e) {
        var el = $(this);
        if (el.val() === "Residential Plots") {
            $("#status option:last-child").remove();
            $("#status option:last-child").remove();
            $("#status option:last-child").remove();
            $("#status option:last-child").remove();
            $("#status").append("<option value='1.5 c - 15 c'>1.5 c - 15 c</option>");
        } else if (el.val() === "Apartment") {
            $("#status option:last-child").remove();
            $("#status option:last-child").remove();
            $("#status option:last-child").remove();
            $("#status option:last-child").remove();
            $("#status").append("<option value='1 BHK'>1 BHK</option>");
            $("#status").append("<option value='2 BHK'>2 BHK</option>");
            $("#status").append("<option value='3 BHK'>3 BHK</option>");
            $("#status").append("<option value='4 BHK'>4 BHK</option>");
        }
         else if (el.val() === "Individual villa") {
            $("#status option:last-child").remove();
            $("#status option:last-child").remove();
            $("#status option:last-child").remove();
            $("#status option:last-child").remove();
            $("#status").append("<option value='1 BHK'>1 BHK</option>");
            $("#status").append("<option value='2 BHK'>2 BHK</option>");
            $("#status").append("<option value='3 BHK'>3 BHK</option>");
            $("#status").append("<option value='4 BHK'>4 BHK</option>");
        }
    });
  });
})(jQuery);