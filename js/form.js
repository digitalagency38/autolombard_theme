$(document).ready(function() {
$('input[name="UTM_SOURCE"]').val(localStorage.getItem("utm_source"));
$('input[name="UTM_MEDIUM"]').val(localStorage.getItem("utm_medium"));
$('input[name="UTM_CAMPAIGN"]').val(localStorage.getItem("utm_campaign"));
$('input[name="UTM_TERM"]').val(localStorage.getItem("utm_term"));
$('input[name="UTM_CONTENT"]').val(localStorage.getItem("utm_content"));
});
		
		
		
$(document).ready(function () {
        $('form .js_submit').click(function (e) {
			
            e.preventDefault();
//             window.dataLayer.push ({'event': 'formSend'});
            var btnn = $(this);
            var form = $(this).closest('form');
            var tel = form.find('input[name="tel"]').val();
			var check = form.find('input[name="check"]').val();
			
			
			var username = form.find('input[name="name"]').val();
			var email = form.find('input[name="email"]').val();
			var message = form.find('textarea[name="question"]').val();
			
			var subject = form.find('input[name="subject"]').val();
			
			
            var utm_so = localStorage.getItem('utm_source');
            if (!utm_so){utm_so='-';}
            var utm_me = localStorage.getItem('utm_medium');
            if (!utm_me){utm_me='-';}
            var utm_ca = localStorage.getItem('utm_campaign');
            if (!utm_ca){utm_ca='-';}
            var utm_te = localStorage.getItem('utm_term');
            if (!utm_te){utm_te='-';}
            var utm_co = localStorage.getItem('utm_content');
            if (!utm_co){utm_co='-';}
			var ym_uid = localStorage.getItem('_ym_uid');

            var utm_data = '&utm_source='+utm_so+
                '&utm_medium='+utm_me+
                '&utm_campaign='+utm_ca+
                '&utm_term='+utm_te+
                '&utm_content='+utm_co;
			
			if (ym_uid) {
				utm_data += '&_ym_uid=' + ym_uid;
			}

            if (tel.length != 18){
                form.find('input[name="tel"]').trigger('focus');
            }
            else {
                var data_send = 'user_phone='+tel+utm_data;
                btnn.addClass('disabled');
				
				if (subject){
				var data_send = data_send + '&subject='+subject;
				}
				
				if (username){
				var data_send = data_send + '&user_name='+username;
				}
				if (email){
				var data_send = data_send + '&email='+email;
				}
				if (message){
				var data_send = data_send + '&message='+message;
				}
				
				if(check = 'stopSpam'){
				
                $.ajax({
                    url: "/wp-content/themes/autolombard_theme/send.php",
                    type: 'get',
                    data: data_send,
                    success: function (da) {
//                         window.dataLayer.push ({'event': 'formSuccess'});
                        console.log(da);
//                         location.href = '/success-callback/';
						btnn.parent().addClass('isSend');
                    },
                    error: function (err) {}
                });
				
				}
            }
        });
		
		
		
		
		$('form .js-calc').click(function (e) {
			
            e.preventDefault();
//             window.dataLayer.push ({'event': 'formSend'});
            var btnn = $(this);
            var form = $(this).closest('form');
            var tel = form.find('input[name="phone"]').val();
			var check = form.find('input[name="check"]').val();
			var username = form.find('input[name="name"]').val();
			var summ = form.find('input[name="summ"]').val();
			var time = form.find('input[name="time"]').val();
			
			var subject = form.find('input[name="subject"]').val();
			
			
            var utm_so = localStorage.getItem('utm_source');
            if (!utm_so){utm_so='-';}
            var utm_me = localStorage.getItem('utm_medium');
            if (!utm_me){utm_me='-';}
            var utm_ca = localStorage.getItem('utm_campaign');
            if (!utm_ca){utm_ca='-';}
            var utm_te = localStorage.getItem('utm_term');
            if (!utm_te){utm_te='-';}
            var utm_co = localStorage.getItem('utm_content');
            if (!utm_co){utm_co='-';}

            var utm_data = '&utm_source='+utm_so+
                '&utm_medium='+utm_me+
                '&utm_campaign='+utm_ca+
                '&utm_term='+utm_te+
                '&utm_content='+utm_co;

            if (tel.length != 18){
                form.find('input[name="tel"]').trigger('focus');
            }
            else {
                var data_send = 'user_phone='+tel+utm_data;
                btnn.addClass('disabled');
				
				if (subject){
				var data_send = data_send + '&subject='+subject;
				}
				
				if (username){
				var data_send = data_send + '&user_name='+username;
				}
				if (summ){
				var data_send = data_send + '&summ='+summ;
				}
				if (time){
				var data_send = data_send + '&time='+time;
				}
				
				

            if(check = 'stopSpam'){
                $.ajax({
                    url: "/wp-content/themes/autolombard_theme/calcsend.php",
                    type: 'get',
                    data: data_send,
                    success: function (da) {
//                         window.dataLayer.push ({'event': 'formSuccess'});
                        // console.log(da);
                        location.href = '/success-callback/';
                    },
                    error: function (err) {}
                });
			}
            }
        });
		
		
		
		
		
		
		$('form .js-estim').click(function (e) {
			
            e.preventDefault();
//             window.dataLayer.push ({'event': 'formSend'});
            var btnn = $(this);
            var form = $(this).closest('form');
            var tel = form.find('input[name="tel"]').val();
			var check = form.find('input[name="check"]').val();
			var username = form.find('input[name="name"]').val();
			var brand = form.find('#mark-value').val();
			var model = form.find('#model-value').val();
			var year = form.find('#year-value').val();
			
			var subject = form.find('input[name="subject"]').val();
			
			
            var utm_so = localStorage.getItem('utm_source');
            if (!utm_so){utm_so='-';}
            var utm_me = localStorage.getItem('utm_medium');
            if (!utm_me){utm_me='-';}
            var utm_ca = localStorage.getItem('utm_campaign');
            if (!utm_ca){utm_ca='-';}
            var utm_te = localStorage.getItem('utm_term');
            if (!utm_te){utm_te='-';}
            var utm_co = localStorage.getItem('utm_content');
            if (!utm_co){utm_co='-';}

            var utm_data = '&utm_source='+utm_so+
                '&utm_medium='+utm_me+
                '&utm_campaign='+utm_ca+
                '&utm_term='+utm_te+
                '&utm_content='+utm_co;

            if (tel.length != 18){
                form.find('input[name="tel"]').trigger('focus');
            }
            else {
                var data_send = 'user_phone='+tel+utm_data;
                btnn.addClass('disabled');
				
				if (subject){
				var data_send = data_send + '&subject='+subject;
				}
				
				if (username){
				var data_send = data_send + '&user_name='+username;
				}
				if (brand){
				var data_send = data_send + '&brand='+brand;
				}
				if (model){
				var data_send = data_send + '&model='+model;
				}
				if (year){
				var data_send = data_send + '&year='+year;
				}
				
			if(check = 'stopSpam'){
            
                $.ajax({
                    url: "/wp-content/themes/autolombard_theme/estimsend.php",
                    type: 'get',
                    data: data_send,
                    success: function (da) {
//                         window.dataLayer.push ({'event': 'formSuccess'});
                        // console.log(da);
                        location.href = '/success-callback/';
                    },
                    error: function (err) {}
                });
				
			}
            }
        });
		
		
		

    });		
		
		
		
