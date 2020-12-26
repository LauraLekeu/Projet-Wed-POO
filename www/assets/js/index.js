/*

      ./www/assets/js/index.js 

*/

$(function(){

  let offset = 5;
  
  $('#more-posts').click(function(e) { 
    e.preventDefault();
    $.ajax({
      url:'?ajax=more-posts',
      data: {
        offset: offset
      },
      method: 'get',
      success: function(reponsePHP){
        $('#liste-posts').append(reponsePHP)
                         .find('.blog_item:nth-last-child(-n+5)')
                         .hide()
                         .fadeIn();
        offset += 5;
      },
      error: function(){
        alert('Problèmes durant la transaction');
      }
    });
    
  });
});