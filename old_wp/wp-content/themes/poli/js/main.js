$(document).ready(function() {
//alert($(document).width());
  $('.modal form').not('#commentform').submit(function(e) {
    var msg   = $(this).serialize();
        $.ajax({
          type: 'POST',
          url: '/mail.php',
          data: msg,
          success: function(data) {
      alert('Форма успешно отправлена!');
      
      $('input[type="text"]').val('');
      $('textarea').val('');
      $('.modal').modal('hide');
          },
          error:  function(xhr, str){
      alert('Р’РѕР·РЅРёРєР»Р° РѕС€РёР±РєР°: ' + xhr.responseCode);
          }
        });
    e.preventDefault();
  });
    
}); 