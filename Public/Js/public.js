//登录function
  $(function ($) {
  		//登录AJAX提示判断
			    $.post('__APP__/Home/Login/do_login', {
					username:$("#txtName").val(),
					password:$("#txtPwd").val(),
				},function(text){
					if(text=="pass"){
						// alert('pass')
						window.location.href="__APP__/Home/Index/main";
					}else{
						$("#suggest").html(text);
					}
				});
		//弹出登录
		$("#login").hover(function () {
			$(this).stop().animate({
				opacity: '1'
			}, 600);
		}, function () {
			$(this).stop().animate({
				opacity: '0.6'
			}, 1000);
		}).on('click', function () {
			$("body").append("<div id='mask'></div>");
			$("#mask").addClass("mask").fadeIn("slow");
			$("#LoginBox").fadeIn("slow");
		});
		//
		//按钮的透明度
		$("#l_loginbtn").hover(function () {
			$(this).stop().animate({
				opacity: '1'
			}, 600);
		}, function () {
			$(this).stop().animate({
				opacity: '0.8'
			}, 1000);
		});
		//文本框不允许为空---按钮触发
		$("#l_loginbtn").on('click', function () {
			var txtName = $("#l_txtName").val();
			var txtPwd = $("#l_txtPwd").val();
			if (txtName == "" || txtName == undefined || txtName == null) {
				if (txtPwd == "" || txtPwd == undefined || txtPwd == null) {
					$(".warning").css({ display: 'block' });
				}
				else {
					$("#l_warn").css({ display: 'block' });
					$("#l_warn2").css({ display: 'none' });
				}
			}
			else {
				if (txtPwd == "" || txtPwd == undefined || txtPwd == null) {
					$("#l_warn").css({ display: 'none' });
					$(".warn2").css({ display: 'block' });
				}
				else {
					$(".warning").css({ display: 'none' });
				}
			}
		});
		//文本框不允许为空---单个文本触发
		$("#l_txtName").on('blur', function () {
			var txtName = $("#l_txtName").val();
			if (txtName == "" || txtName == undefined || txtName == null) {
				$("#warn").css({ display: 'block' });
			}
			else {
				$("#warn").css({ display: 'none' });
			}
		});
		$("#txtName").on('focus', function () {
			$("#warn").css({ display: 'none' });
		});
		//
		$("#txtPwd").on('blur', function () {
			var txtName = $("#txtPwd").val();
			if (txtName == "" || txtName == undefined || txtName == null) {
				$("#warn2").css({ display: 'block' });
			}
			else {
				$("#warn2").css({ display: 'none' });
			}
		});
		$("#txtPwd").on('focus', function () {
			$("#warn2").css({ display: 'none' });
		});
		//关闭
		$(".close_btn").hover(function () { $(this).css({ color: 'black' }) }, function () { $(this).css({ color: '#999' }) }).on('click', function () {
			$("#LoginBox").fadeOut("fast");
			$("#mask").css({ display: 'none' });
		});
	});

  // 注册function
    $(function ($) {
		//弹出登录
		$("#register").hover(function () {
			$(this).stop().animate({
				opacity: '1'
			}, 600);
		}, function () {
			$(this).stop().animate({
				opacity: '0.6'
			}, 1000);
		}).on('click', function () {
			$("body").append("<div id='mask'></div>");
			$("#mask").addClass("mask").fadeIn("slow");
			$("#registerBox").fadeIn("slow");
		});
		//
		//按钮的透明度
		$("#r_loginbtn").hover(function () {
			$(this).stop().animate({
				opacity: '1'
			}, 600);
		}, function () {
			$(this).stop().animate({
				opacity: '0.8'
			}, 1000);
		});
		//文本框不允许为空---按钮触发
		$("#r_loginbtn").on('click', function () {
			var txtName = $("#r_txtName").val();
			var txtPwd = $("#r_txtPwd").val();
			if (txtName == "" || txtName == undefined || txtName == null) {
				if (txtPwd == "" || txtPwd == undefined || txtPwd == null) {
					$(".warning").css({ display: 'block' });
				}
				else {
					$("#r_warn").css({ display: 'block' });
					$("#r_warn2").css({ display: 'none' });
				}
			}
			else {
				if (txtPwd == "" || txtPwd == undefined || txtPwd == null) {
					$("#r_warn").css({ display: 'none' });
					$(".warn2").css({ display: 'block' });
				}
				else {
					$(".warning").css({ display: 'none' });
				}
			}
		});
		//文本框不允许为空---单个文本触发
		$("#r_txtName").on('blur', function () {
			var txtName = $("#r_txtName").val();
			if (txtName == "" || txtName == undefined || txtName == null) {
				$("r_#warn").css({ display: 'block' });
			}
			else {
				$("r_#warn").css({ display: 'none' });
			}
		});
		$("#r_txtName").on('focus', function () {
			$("#r_warn").css({ display: 'none' });
		});
		//
		$("r_#txtPwd").on('blur', function () {
			var txtName = $("#txtPwd").val();
			if (txtName == "" || txtName == undefined || txtName == null) {
				$("#r_warn2").css({ display: 'block' });
			}
			else {
				$("#r_warn2").css({ display: 'none' });
			}
		});
		$("#r_txtPwd").on('focus', function () {
			$("#r_warn2").css({ display: 'none' });
		});
		//关闭
		$(".close_btn").hover(function () { $(this).css({ color: 'black' }) }, function () { $(this).css({ color: '#999' }) }).on('click', function () {
			$("#registerBox").fadeOut("fast");
			$("#mask").css({ display: 'none' });
		});
	});
