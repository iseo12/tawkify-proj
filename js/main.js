$(document).ready(function(){
  $('.submit-btn').click(function(event) {
    event.preventDefault();
    var heightFactor = $('.height-factor.selected').data('value');
    var incomeFactor = $('.income-factor.selected').data('value');
    var data = {};
    $.each($('#user-info').serializeArray(), function() {
      data[this.name] = this.value;
    });
    data['height-factor'] = heightFactor;
    data['income-factor'] = incomeFactor;
    console.log(data);
    $.ajax({
       url: 'test.php',
       type: 'post',
       data: data,
       success: function (response) {
          // you will get response from your php page (what you echo or print)
          console.log(response);
       },
       error: function(jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
       }
     });
  });
  //toggles height/income factor option on click
  $('.height-factor').click(function(event){
    event.preventDefault();
    $('.height-factor').toggleClass('selected');
  });
  $('.income-factor').click(function(event){
    event.preventDefault();
    $('.income-factor').toggleClass('selected');
  });
});
