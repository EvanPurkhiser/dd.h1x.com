<?php

$directories = new FileSystemIterator('../../', FilesystemIterator::SKIP_DOTS);

foreach($directories as $directory)
{
	// Get the paths for these files
	$path = realpath($directory->getPathname());
	$info = $path.'/.project/public.txt';

	// Make sure this is a public project
	if( ! is_file($info)) continue;

	// Add the info to the project lis
	$projects[] = (object) array(
		'url'   => $directory->getBasename(),
		'title' => file_get_contents($info),
	);
}

include 'layout.php';