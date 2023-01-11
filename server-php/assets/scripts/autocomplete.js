$(document).ready(function () {
	$('#userName').keyup(function () {
		var userName = $(this).val();
		if (userName !== '') {
			$.ajax({
				url: 'functions/autocomplete.php',
				method: 'POST',
				data: { userName: userName },
				success: function (data) {
					$('#userList').fadeIn();
					$('#userList').html(data);
				},
			});
		}
	});
});

// const userNameInput = document.getElementById('userName');
// userNameInput.addEventListener('keyup', () => {
// 	fetch('http://transaction.cm/functions/autocomplete.php', { method: 'POST', body: { userName: userNameInput.value } });
// });
