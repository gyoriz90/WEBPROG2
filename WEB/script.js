jQuery(document).ready(function($){
  var $form_modal = $('.user-modal'),
    $form_login = $form_modal.find('#login'),
    $main_nav = $('.main-nav');

  $main_nav.on('click', function(event){

    if( $(event.target).is($main_nav) ) {
      $(this).children('ul').toggleClass('is-visible');
    } else {
      $main_nav.children('ul').removeClass('is-visible');
      $form_modal.addClass('is-visible'); 
      ( $(event.target).is('.signup') ) ? signup_selected() : login_selected();
    }

  });

  $('.user-modal').on('click', function(event){
    if( $(event.target).is($form_modal) || $(event.target).is('.close-form') ) {
      $form_modal.removeClass('is-visible');
    } 
  });
  
  $(document).keyup(function(event){
      if(event.which==='27'){
        $form_modal.removeClass('is-visible');
      }
    });

  $('.hide-password').on('click', function(){
    var $this= $(this),
      $password_field = $this.prev('input');
    
    ( 'password' === $password_field.attr('type') ) ? $password_field.attr('type', 'text') : $password_field.attr('type', 'password');
    ( 'Mutat' === $this.text() ) ? $this.text('Elrejt') : $this.text('Mutat');
    $password_field.putCursorAtEnd();
  });


  function login_selected(){
    $form_login.addClass('is-selected');
  }

  function signup_selected(){
    $form_login.removeClass('is-selected');
  }


});


jQuery.fn.putCursorAtEnd = function() {
  return this.each(function() {
      if (this.setSelectionRange) {
          var len = $(this).val().length * 2;
          this.setSelectionRange(len, len);
      } else {
          $(this).val($(this).val());
      }
  });
};