/**
 * @author zhixin wen <wenzhixin2010@gmail.com>
 */

$(function() {
	
	var client = new PHPRPC_Client('services.php', ['login', 'logout', 'getUser']);
	
	function main() {
		getUser();
		
		$('#login').submit(function() {
			var username = $.trim($('#username').val()),
				password = $.trim($('#password').val());
			client.login(username, password, function(result) {
				if (result) {
					alert('登录成功！');
					getUser();
				} else {
					alert('用户名或者密码错误！');
				}
			});
			return false;
		});
		
		$('#logout').click(function() {
			client.logout(function() {
				getUser();
			});
		});
	}
	
	function getUser() {
		client.getUser(function(user) {
			console.log(user);
			if (user) {
				$('#login').hide();
				$('#user').show().find('span').text(user.username);
			} else {
				$('#login').show();
				$('#user').hide();
			}
		});
	}
	
	main();
});
