
 <script type="text/javascript">

    // form input animation
    $('.form-control').on('focus blur', function (e) {
        $(this).parents('.form-group').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
    }).trigger('blur');

</script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "{{ asset('js/1.js') }}#xfbml=1&appId=1502686356678302&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

window.fbAsyncInit = function() {
    FB.init({
      appId      : '252967394737645',
      xfbml      : true,
      version    : 'v2.5'
    });
    FB.Event.subscribe('comment.create', function(commentResponse){ 
        $.get('/pub/api/v1/csrftoken',function(csrfResponse){
            console.log(csrfResponse);
            $.ajax({ url: '/pub/api/v1/comment_received',
              type: 'POST',
              beforeSend: function(xhr) {xhr.setRequestHeader('X-CSRF-Token', csrfResponse.csrftoken) },
              data: {document_uniq_id: $('#article_body').attr('data-uniq-id'),comment:commenResponse},
              success: function(response) {
                console.log("Posted successfully");
              }
            });
        });
    });
  };
</script>
