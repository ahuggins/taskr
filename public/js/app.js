$(document).ready(function() {
   $('.tasks .complete').click(function() {

   		// Ajax call to set task to complete in DB

   		$(this).parent().parent().toggleClass('completed');
   });

   $('.add-task').keypress(function (e) {
	  if (e.which === 13) {
	  	var add = $('.add-task input');
	  	var val = add.val();
	  	$(add).val('').focus();

	  	$('.tasks').append(val);

	  	
	  	// Ajax call to create task in db. Default to current user.

	  }
	});

});