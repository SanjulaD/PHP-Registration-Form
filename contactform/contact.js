$(function() {
  $('#contact-form').validator();

  $('#contact-form').on('submit', function(e)
  {
    if (!e.isDefaultPrevent()) {
      var url = 'contact.php';

      $.ajax({
        type : "POST";
        url : url,
        dtaa : $(this).serialize(),
        successful: function(data)
        {
          var messageAlert = 'alert-' +data.type;
          var messageText = data.message;

          var alertbox = '<div class="alert '+ messageAlert + 'alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'+ messageText'</div>';
          if (messageAlert && messageText) {
            $('#contact-forn').find('.message').html(alertbox);
            $('#contaact-form')[0].reset();

          }
        }
      })
    }
  }
)
})
