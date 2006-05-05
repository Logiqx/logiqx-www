<?php

// ----------------------------------------------------------------------------
// configuration file for phpBB with KittenAuth visual confirmation
// ----------------------------------------------------------------------------

// Important note:
//
// Without altering phpBB's "<prefix>_confirm" table (with the field "code"
// defined as "char(6)" in the default phpBB setup), you should not use more
// that 100 image files (named "0.<ext>" to "99.<ext>") and no higher value
// than "3" for the configuration parameter "ka_max_num_correct" below (to be
// able to store the correct test answer as three two-digit numbers in the six
// table cell characters). If you want more that three answers to be checked
// or more than 100 images, alter (enlarge) the field "code" accordingly.

$ka_image_dir = 'kitten_auth';	// sub-directory where to store the images

$ka_max_num_correct = 3;	// maximum number of correct images to select

$ka_test_cols = 3;		// number of columns for the test image table
$ka_test_rows = 3;		// number of rows for the test image table

$ka_image_width = 100;		// size to which the images should be scaled
$ka_image_height = 100;		// size to which the images should be scaled
$ka_image_border = 5;		// size of border around the images to select

$ka_color_off = '#ffffff';	// border color for unselected images
$ka_color_on  = '#ff0000';	// border color for selected images

// in the following structure, define all available KittenAuth confirm tests;
// each test consists of a descriptive text to tell the user which images
// should be selected in this test, plus a list of all images that are correct
// for this certain test
//
// for example, if you have a directory full of images of animals, you could
// ask the user to select all images that show cats (this would be the original
// "kitten auth" test), or all animals that can fly, or all white animals, ...

// the following 20 images used for phpBB with KittenAuth visual confirmation
// were taken from http://www.thepetprofessor.com/free_pictures/ according to
// the license policy of this site which allows the use of up to 20 images on
// the users web site for educational, personal or commercial purposes

$ka_tests = array
(
	array
	(
		'info'	=> "Please select all cats!",
		'list'	=> array
		(
			'cat1.png',
			'cat2.png',
			'cat3.png',
			'cat4.png',
		)
	),
	array
	(
		'info'	=> "Please select all dogs!",
		'list'	=> array
		(
			'dog1.png',
			'dog2.png',
			'dog3.png',
			'dog4.png',
		)
	),
	array
	(
		'info'	=> "Please select all birds!",
		'list'	=> array
		(
			'bird1.png',
			'bird2.png',
			'bird3.png',
			'bird4.png',
		)
	),
	array
	(
		'info'	=> "Please select all fishes!",
		'list'	=> array
		(
			'fish1.png',
			'fish2.png',
			'fish3.png',
		)
	),
	array
	(
		'info'	=> "Please select all farm animals!",
		'list'	=> array
		(
			'cow1.png',
			'donkey1.png',
			'horse1.png',
		)
	),
	array
	(
		'info'	=> "Please select all animals that can fly!",
		'list'	=> array
		(
			'bird1.png',
			'bird2.png',
			'bird3.png',
			'bird4.png',
			'butterfly1.png',
		)
	),
	array
	(
		'info'	=> "Please select all animals with four legs!",
		'list'	=> array
		(
			'cat1.png',
			'cat2.png',
			'cat3.png',
			'cat4.png',
			'dog1.png',
			'dog2.png',
			'dog3.png',
			'dog4.png',
			'cow1.png',
			'donkey1.png',
			'horse1.png',
			'frog1.png',
		)
	),
	array
	(
		'info'	=> "Please select all animals without fur!",
		'list'	=> array
		(
			'bird1.png',
			'bird2.png',
			'bird3.png',
			'bird4.png',
			'butterfly1.png',
			'fish1.png',
			'fish2.png',
			'fish3.png',
			'frog1.png',
		)
	),
);

?>
