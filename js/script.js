function render(data) {

  var html =   "<div class='row text-center'><div class='col-12' style='text-align: center;margin: 20px 0;'><div class='card' style='width: 25%;display: inline-block;'><div class='card-header'>Question " + cnt + "</div><div class='card-body'><blockquote class='blockquote text-center'><p class='mb-0'>" + data.body + "</p><footer class='blockquote-footer text-center' style='color:#c7d8cd;height: 80px;' >Asked by: <cite title='Source Title' style='color:#ffff;'>" + data.name + "</cite></footer></blockquote></div></div></div></div>";
  $("#question-container").append(html);
}

$(document).ready(function() {

	var question = [];
	cnt = 0;
	$('#addQuestion').click(function() {
	  var addObj = {
	    "name": $('#name').val(),
	    "body": $('#bodyText').val()
	  };
	  console.log(addObj);
		cnt = cnt + 1;
		console.log(cnt);
	  question.push(addObj);
	  render(addObj);

		$('#name').val('');
		$('#bodyText').val('');


	});


	var offset = 250;
	var duration = 500;
	$(window).scroll(function() {
		if ($(this).scrollTop() > offset) {
			$('.to-top').fadeIn(duration);
		} else {
			$('.to-top').fadeOut(duration);
		}
	})
	$('#scr').click(function() {

		$('html,body').animate({
			scrollTop: 0
		}, duration);
	})
});
