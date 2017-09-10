$(document).ready(function(){

	$('.chat_head').click(function(){
		// $('.chat_body').slideToggle('slow');
		$('.chat_body').slideToggle();
	});
	$('.msg_head').click(function(){
		$('.msg_wrap').slideToggle();
	});

	$('.close').click(function(){
		$('.msg_box').hide();
	});

	$('.user').click(function(){

		$('.msg_wrap').show();
		$('.msg_box').show();
	});

	$('.m').keypress(
    function(e){
        if (e.keyCode == 13) {
            e.preventDefault();
            var msg = $(this).val();
			$(this).val('');
			if(msg!='')
			$('<div class="msg_b">'+msg+'</div>').insertBefore('.msg_push');
			$('.msg_body').scrollTop($('.msg_body')[0].scrollHeight);
        }
    });


		$('.msg_head1').click(function(){
			$('.msg_wrap1').slideToggle();
		});

		$('.close1').click(function(){
			$('.msg_box1').hide();
		});

		$('.user1').click(function(){

			$('.msg_wrap1').show();
			$('.msg_box1').show();
		});

		$('.m1').keypress(
	    function(e1){
	        if (e1.keyCode == 13) {
	            e1.preventDefault();
	            var msg1 = $(this).val();
				$(this).val('');
				if(msg1!='')
				$('<div class="msg_b1">'+msg1+'</div>').insertBefore('.msg_push1');
				$('.msg_body1').scrollTop($('.msg_body1')[0].scrollHeight);
	        }
	    });



			$('.msg_head2').click(function(){
				$('.msg_wrap2').slideToggle();
			});

			$('.close2').click(function(){
				$('.msg_box2').hide();
			});

			$('.user2').click(function(){

				$('.msg_wrap2').show();
				$('.msg_box2').show();
			});

			$('.m2').keypress(
		    function(e2){
		        if (e2.keyCode == 13) {
		            e2.preventDefault();
		            var msg2 = $(this).val();
					$(this).val('');
					if(msg2!='')
					$('<div class="msg_b2">'+msg2+'</div>').insertBefore('.msg_push2');
					$('.msg_body2').scrollTop($('.msg_body2')[0].scrollHeight);
		        }
		    });

});
