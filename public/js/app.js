//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
    console.log(current_fs[0].title);
	if(checkValues(current_fs[0].title)){
		next_fs = $(this).parent().next();
	
		//activate next step on progressbar using the index of next_fs
		$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
		
		//show the next fieldset
		next_fs.show(); 
		//hide the current fieldset with style
		current_fs.animate({opacity: 0}, {
			step: function(now, mx) {
				//as the opacity of current_fs reduces to 0 - stored in "now"
				//1. scale current_fs down to 80%
				scale = 1 - (1 - now) * 0.2;
				//2. bring next_fs from the right(50%)
				left = (now * 50)+"%";
				//3. increase opacity of next_fs to 1 as it moves in
				opacity = 1 - now;
				current_fs.css({
			'transform': 'scale('+scale+')',
			'position': 'absolute'
		  });
				next_fs.css({'left': left, 'opacity': opacity});
			}, 
			duration: 800, 
			complete: function(){
				current_fs.hide();
				animating = false;
			}, 
			//this comes from the custom easing plugin
			easing: 'easeInOutBack'
		});
	}else{
		animating = false;
	}
	
	
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$("#msform .submit").click(function(){
	if(checkValues("misc")){
		$(this).attr("disabled", true);
		$("#msform").submit();
	}else{
		return false;
	}
	
});

$("#msform").submit(function(e){
	e.preventDefault();

	var form = $(this);
    var url = form.attr('action');

	$.ajax({
		type: "POST",
		url: url,
		data: form.serialize(), 
		success: function(data)
		{
			data = JSON.parse(data);
			if(data.result){
				$.growl.notice({ message: "Member added successfully! Page will reload in 3 seconds." });
				setTimeout(function() {
					location.reload();
				}, 3000);
			}
		}
	});
});

$("#login-form").submit(function(e){
	e.preventDefault();

	console.log(123);

	var form = $(this);
    var url = form.attr('action');

	$.ajax({
		type: "POST",
		url: url,
		data: form.serialize(), 
		success: function(data)
		{
			data = JSON.parse(data);
			if(data.result){
				$.growl.notice({ message: "Page will redirect you in 3 seconds." });
				setTimeout(function() {
					window.location.href = data.redirect;
				}, 3000);
			}else{
				$.growl.error({ message: "Invalid credentials!" });
			}
		}
	});
});

$("#login-form .submit").click(function(){
	if(checkValues("login")){
		$(this).attr("disabled", true);
		$("#login-form").submit();
	}else{
		return false;
	}
	
});


$("select[name=is_voter]").on("change", function(){
	$("input[name=precint]").val("");
	if($(this).val() == "1"){
		$("input[name=precint]").attr("disabled", false);
	}else{
		$("input[name=precint]").attr("disabled", true);
	}
});

function checkValues(type){
	var status = true;
	const fields = [];
	const errors = [];
    switch(type){
        case "contact":
            fields.push({ name: "email", type: "email", message: "Email Address is not valid!"}, { name: "number", type: "text", message: "Contact Number is empty!"});
            break;
        case "personal":
			fields.push({ name: "fname", type: "text", message: "First Name is empty!"}, { name: "lname", type: "text", message: "Last Name is empty!"}, { name: "address", type: "text", message: "Address is empty!"}, { name: "gender", type: "dropdown", message: "Please select a gender!"});
            break;
        case "misc":
			fields.push({ name: "education_attainment", type: "text", message: "Education Attainment is empty!"}, { name: "is_voter", type: "special_voter", message: "Please select an answer in voter field!"});
            break;
		case "login":
			fields.push({ name: "email", type: "email", message: "Email Address is not valid!"}, { name: "password", type: "text", message: "Password is empty!"});
			break;
    }

	$.each(fields, function(key, value) {
		if(value.type == "text"){
			if($("input[name="+ value.name +"]").val() == "" || $("input[name="+ value.name +"]").val() == null){
				status = false;
				errors.push( { name: value.name, message: value.message } );
			}
		} else if(value.type == "dropdown"){
			if($("select[name="+ value.name +"]").val() == "" || $("select[name="+ value.name +"]").val() == null){
				status = false;
				errors.push( { name: value.name, message: value.message } );
			}
		} else if(value.type == "email"){
			if($("input[name="+ value.name +"]").val() == "" || $("input[name="+ value.name +"]").val() == null){
				status = false;
				errors.push( { name: value.name, message: "Email Address is empty!" } );
			}else{
				if(!isEmail($("input[name="+ value.name +"]").val())){
					status = false;
					errors.push( { name: value.name, message: value.message } );
				}
			}
		} else if(value.type == "special_voter"){
			if($("select[name="+ value.name +"]").val() == "" || $("select[name="+ value.name +"]").val() == null){
				status = false;
				errors.push( { name: value.name, message: value.message } );
			}else{
				if($("select[name="+ value.name +"]").val() == 1){
					if($("input[name=precint]").val() == "" || $("input[name=precint]").val() == null){
						status = false;
						errors.push( { name: value.name, message: "Precint Number is empty!" } );
					}
				}
			}
		}
	});

	if(status == false){
		$.each(errors, function(key, value){
			$.growl.error({ message: value.message });
		});
		
	}
	return status;
}

function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}