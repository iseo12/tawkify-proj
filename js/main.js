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

  function readUrl(input) {

  if (input.files && input.files[0]) {
    let reader = new FileReader();
    reader.onload = (e) => {
      let imgData = e.target.result;
      let imgName = input.files[0].name;
      input.setAttribute("data-title", imgName);
      console.log(e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }

}
});
