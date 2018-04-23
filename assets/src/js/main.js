
$(document).ready(function(){
    console.log('start');
  $('.menu li').on('click',function(e){
      $(this).siblings().removeClass('active');
      $(this).addClass('active');

  })
});