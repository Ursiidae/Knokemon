$(document).ready(function(){
	$('.center').click(function(){
		$('.open').css({
			'-webkit-transform' : '1s',
			'-moz-transform'    : '1s',
			'-ms-transform'     : '1s',
			'-o-transform'      : '1s',
			'transform'         : '1s',
			
			'-webkit-transition-duration' : '1s',
			'-moz-transition-duration'    : '1s',
			'-o-transition-duration'      : '1s',
			'transition-duration'         : '1s'
		});
		$('.left').css({
			'right' : '-150%'
		});
		$('.right').css({
			'right' : '100%'
		});
		$('.circle').css({
			'display' : 'none'
		});
	});
	/*
	the form for signup still needs to be completed. not yet complete. 
	signup.php is not even created yet. so yeah...
	*/
  $('#sign_up').click(function(){
		/*$('.info').html("<form action='signup.php'>"+
		"<br><br>Username: <input type='text' name='user'><br>"+
		"<span class='cred'> username should be between 6 and 20 characters </span> <br>"+
		"Password: <input type='password' name='pass'><br>"+
		"<span class='cred'> passwords should be 6 to 16 characters, containing letters"+
		" and atleast one number</span><br> <input type='submit'></form>");*/
		$('#sign').css({"display":"block"});
		$('#open').css({"display":"none"});
		$('#logn').css({"display":"none"});
	});
	/* the form for login still needs to get to work
	leading to the verification, will verify, login the member
	then will continue them onto the current website
	*/
  $('#login').click(function(){
		/*$('.info').html("<form action='loginver.php'>"+
		"<br><br>Username: <input type='text' name='user'><br>"+
		"<br>Password: <input type='password' name='pass'><br>"+
		"<br> <input type='submit'></form>");*/
		$('#logn').css({"display":"block"});
		$('#open').css({"display":"none"});
		$('#sign').css({"display":"none"});
	});
	
  $('.menu').hover(
    function(){
		$('.arrow-right').addClass('arrow-down');
		$('.arrow-down').removeClass('arrow-right');
		$('.menu>ul>li>ul').css({"display":"block"});
	},
	function(){
		$('.arrow-down').addClass('arrow-right');
		$('.arrow-right').removeClass('arrow-down');
		$('.menu>ul>li>ul').css({"display":"none"});
	});
});