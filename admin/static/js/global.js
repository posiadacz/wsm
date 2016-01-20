tinymce.init({
  selector: 'textarea',
  height: 500,
  relative_urls : false,
  remove_script_host : true,
  document_base_url : "http://wsmochota.com.pl/",
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code'
  ],
  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  content_css: [
    '/style.css'
  ]
});

$(document).ready(function(){
   $('.js-confirm').click(function(){
       event.preventDefault();
      if(confirm($(this).attr("rel"))){
          $(location).attr('href', $(this).attr("href"));
      }
   });
    
    
   $('.js-documentFileDelete').click(function(){
      $('.js-filename').val('');
      $(this).hide();
      $('.js-documentFileDeleteStep2').show();
   }); 
    
});