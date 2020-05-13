$(document).ready(function() {
    $('#login-trigger').click(function(){
    $(this).next('#login-content').slideToggle();
    $(this).toggleClass('active');          				
    if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
      else $(this).find('span').html('&#x25BC;')
    });
    $('#logout-trigger').click(function(){
    $(this).next('#logout-content').slideToggle();
    $(this).toggleClass('active');          				
    if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
      else $(this).find('span').html('&#x25BC;')
    });	
    $('#loginform').submit(function() {
       console.log("Called2")
       $('#login-content').hide();
       $('#login, #logout').toggle();
       $('#logout-trigger').removeClass('active');
       $('#loginform').find('input:text').val('');
       $('#loginform').find('input:password').val('');
    });
    $('#logoutform').submit(function() {
       console.log("Called2")
       $('#login-content').hide();
       $('#login, #logout').toggle();
       $('#login-trigger').removeClass('active');				   			   
    });	
    $('#incancel').click(function(){
      $(':input','#loginform')
        .not(':button, :submit, :reset, :hidden')
        .val('');
      $('#login-content').slideToggle();
      $(this).toggleClass('active');          				
  
    });
    $('#outcancel').click(function(){
      $(':input','#loginform')
        .not(':button, :submit, :reset, :hidden')
        .val('');
      $('#logout-content').slideToggle();
      $(this).toggleClass('active');          				
    });								
  });  