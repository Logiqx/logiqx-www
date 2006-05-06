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
		'info'	=> "Please select all animal-shaped or monster characters!",
		'list'	=> array
		(
			'animal__bublbob2.png',
			'animal__chinagat.png',
			'animal__cyvern.png',
			'animal__digdug.png',
			'animal_bublbob2.png',
			'animal_bublbob2_.png',
			'animal_bublbob2__.png',
			'animal_chinagat.png',
			'animal_chinagat_.png',
			'animal_cyvern.png',
			'animal_digdug.png',
			'animal_dkong.png',
			'animal_dkong3.png',
			'animal_mario.png',
		)
	),
	array
	(
		'info'	=> "Please select all humanoid female characters!",
		'list'	=> array
		(
			'female__beastrzb.png',
			'female__doapp.png',
			'female_aafbb.png',
			'female_astorm.png',
			'female_bcstry.png',
			'female_beastrzb.png',
			'female_danceyes.png',
			'female_doapp.png',
			'female_dragngun.png',
			'female_drgnmst.png',
			'female_kabukizj.png',
			'female_sf2m1.png',
		)
	),
	array
	(
		'info'	=> "Please select all hardware system logos!",
		'list'	=> array
		(
			'hardware_megaplay.png',
			'hardware_neogeo.png',
			'hardware_neogeo-1.png',
			'hardware_pgm.png',
			'hardware_playch10.png',
			'hardware_stv.png',
			'hardware_system24.png',
			'hardware_taitogn.png',
		)
	),
	array
	(
		'info'	=> "Please select all humanoid male characters!",
		'list'	=> array
		(
			'male__3countb.png',
			'male__aof.png',
			'male__aof2.png',
			'male__aof3.png',
			'male__asterix.png',
			'male__beastrzr.png',
			'male__bloodstm.png',
			'male__btlkroad.png',
			'male__doubledr.png',
			'male__dragoonj.png',
			'male__jchan2.png',
			'male_3countb.png',
			'male_aof.png',
			'male_aof2.png',
			'male_aof3.png',
			'male_ar_fast.png',
			'male_ar_ninj.png',
			'male_asterix.png',
			'male_astorm.png',
			'male_avengrgs.png',
			'male_baddudes.png',
			'male_bcstry.png',
			'male_beastrzr.png',
			'male_bloodstm.png',
			'male_bmaster.png',
			'male_breakers.png',
			'male_breakrev.png',
			'male_btlkroad.png',
			'male_cthd2003.png',
			'male_digdug.png',
			'male_doubledr.png',
			'male_dragnblz.png',
			'male_dragngun.png',
			'male_dragoonj.png',
			'male_drgnmst.png',
			'male_ggreats2.png',
			'male_jchan2.png',
			'male_mario.png',
			'male_mjleague.png',
			'male_sf2m1.png',
		)
	),
	array
	(
		'info'	=> "Please select all air or space ships!",
		'list'	=> array
		(
			'spaceship__1945kiii.png',
			'spaceship__airduel.png',
			'spaceship__batsugun.png',
			'spaceship__cawing.png',
			'spaceship__ddonpach.png',
			'spaceship__dfeveron.png',
			'spaceship__donpachi.png',
			'spaceship_1945kiii.png',
			'spaceship_airduel.png',
			'spaceship_batsugun.png',
			'spaceship_cawing.png',
			'spaceship_cawing_.png',
			'spaceship_ddonpach.png',
			'spaceship_dfeveron.png',
			'spaceship_donpachi.png',
			'spaceship_mach3.png',
		)
	),
	array
	(
		'info'	=> "Please select all game titles!",
		'list'	=> array
		(
			'title_arknid2u.png',
			'title_assault.png',
			'title_bionicc.png',
			'title_captaven.png',
			'title_cbuster.png',
			'title_ddragon.png',
			'title_ddragon2.png',
			'title_dkongjr.png',
			'title_forgottn.png',
			'title_ghoulsu.png',
			'title_ikari.png',
			'title_invaders.png',
			'title_joust.png',
			'title_msh.png',
			'title_msword.png',
			'title_opwolf.png',
			'title_scontra.png',
			'title_sf2ce.png',
			'title_sf2ui.png',
			'title_snowbros.png',
			'title_xevious.png',
			'title_xmcota.png',
		)
	),
	array
	(
		'info'	=> "Please select all land vehicles!",
		'list'	=> array
		(
			'vehicle_crusnwld-1.png',
			'vehicle_cybrcycc-1.png',
			'vehicle_drifto94.png',
			'vehicle_rallybik.png',
		)
	),
);

?>
