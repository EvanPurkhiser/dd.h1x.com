$(document).ready(function() {
	
	// Get the projects container
	var $container = $('#projects ul');

	// Make sure there are atleast 3 projects to fill
	while($container.children().length < 3)
	{
		$container.append($container.children().clone());
	}

	// Geth the projects listings
	var $projects = $('li', $container);

	// Get the first and last projects
	var $first = $($projects.slice(0, 1));
	var $last  = $($projects.slice(-1));

	// Get the element width
	var width = $first.outerWidth();

	// On left arrow clicks
	$('#projects .arrow.left').click(function () {

		// Add a clone of the last item to the front
		$container.prepend($last.clone());

		// Fix the positioning so the project doesent appear as first yet
		$container.css('left', -width);

		// Animate the entire container to the left
		$container.animate({left: '+=' + width});

		// Fix the staring and ending points
		$first = $first.prev();
		$last  = $last.prev();

		// Remove the element we cloned from the end
		$container.queue(function () {
			$last.next().remove();
			$container.dequeue();
		});

		return false;
	});

	// On right arrow clicks
	$('#projects .arrow.right').click(function () {
		
		// Animate the entire container to the left
		$container.animate({left: '-=' + width});

		// Add a clone of the last element to the front
		$container.append($first.clone());

		// The project after the first is now the first
		$last  = $last.next();
		$first = $first.next();

		// Remove the element we cloned from the begining
		$container.queue(function () {
			$first.prev().remove();
			$container.css('left', 0).dequeue();
		});

		return false;
	});

	// Left and right key events
	$(document).bind('keydown', function(event)
	{
		switch(event.keyCode)
		{
			// Left arrow key
			case 37: $('#projects .arrow.left').click();
			break;

			// Right arrow key
			case 39: $('#projects .arrow.right').click();
			break;
		}
	});

});