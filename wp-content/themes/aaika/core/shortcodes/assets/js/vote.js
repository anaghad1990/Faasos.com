jQuery(document).ready(function ($) {
	$('#wpwrap').before($('.devn-vote').slideDown());
	$('.devn-vote-action').on('click', function (e) {
		var $this = $(this);
		e.preventDefault();
		$.ajax({
			type: 'get',
			url: $this.attr('href'),
			beforeSend: function () {
				$('.devn-vote').slideUp();
				if (typeof $this.data('action') !== 'undefined') window.open($this.data('action'));
			},
			success: function (data) {}
		});
	});
});