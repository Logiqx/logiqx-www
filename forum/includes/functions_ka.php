<?php
/***************************************************************************
 *                            function_ka_confirm.php
 *                            -----------------------
 *   begin                : Sunday, Apr 16, 2006
 *   copyright            : (C) 2006 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: functions_confirm.php,v 1.0.0.0 2006/04/16 13:30:00 artsoft Exp $
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *
 ***************************************************************************/

class ka_confirm
{
    var $confirm_test = "";
    var $confirm_code = "";

    function ka_confirm()
    {
	// currently no default constructor
    }

    function create_test()
    {
	global $phpbb_root_path, $phpEx;

	// read configuration for KittenAuth visual confirmation
	include($phpbb_root_path . 'ka_config.'.$phpEx);

	// read language file for KittenAuth visual confirmation
	if ( !empty($board_config['default_lang']) )
	{
		include($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/lang_ka.'.$phpEx);
	}
	else
	{
		include($phpbb_root_path . 'language/lang_english/lang_ka.'.$phpEx);
	}

	$confirm_test = '';

	// read list of image files from KittenAuth image directory
	$ka_image_path = 'images' . '/' . $ka_image_dir;
	$ka_image_root_path = $phpbb_root_path . '/' . $ka_image_path;
	$ka_image_file_to_nr = array();
	$ka_image_nr_to_file = array();

	$dir = @opendir($ka_image_root_path);

	if (! $dir)
	{
		message_die(GENERAL_ERROR, "Cannot find configured KittenAuth image sub-directory '$ka_image_path'!");
	}

	$nr = 0;
	while ( $file = @readdir($dir) )
	{
		if ($file != '.' &&
		    $file != '..' &&
	            is_file($ka_image_root_path . '/' . $file))
		{
			// start with 1 to prevent "empty()" from failing
			$ka_image_file_to_nr[$file] = $nr + 1;
			$ka_image_nr_to_file[$nr] = $file;

			$nr++;
		}
	}

	@closedir($dir);

	// determine number of available images
	$ka_num_images = count($ka_image_nr_to_file);

	// determine number of different KittenAuth tests that are available
	$ka_num_tests = count($ka_tests);

	// randomly select one of the available KittenAuth tests
	$ka_test_nr = mt_rand(0, $ka_num_tests - 1);
	$ka_test = $ka_tests[$ka_test_nr];

	// get information text and list of correct images for this test
	$ka_info = $ka_test['info'];
	$ka_list = $ka_test['list'];

	// get size of list of possible correct images for this test
	$ka_list_size = count($ka_list);

	// check all KittenAuth tests for invalid files
	for($i = 0; $i < $ka_num_tests; $i++)
	{
		$ka_test_check = $ka_tests[$i];
		$ka_info_check = $ka_test_check['info'];
		$ka_list_check = $ka_test_check['list'];
		$ka_list_size_check = count($ka_list_check);

		for($j = 0; $j < $ka_list_size_check; $j++)
		{
			$file = $ka_list_check[$j];

			if (empty($ka_image_file_to_nr[$file]))
			{
				message_die(GENERAL_ERROR, "Cannot find file '$file' in list of files for KittenAuth test '$ka_info_check'!");
			}
		}
	}

	// convert list of possible images from filename to number
	for($i = 0; $i < $ka_list_size; $i++)
	{
		$file = $ka_list[$i];

		// replace file with number in list of test images
		$ka_list[$i] = $ka_image_file_to_nr[$file] - 1;
	}

	// determine number of correct images -- can be less than configured
	$ka_num_correct = $ka_max_num_correct;
	if ($ka_list_size < $ka_max_num_correct)
	{
		$ka_num_correct = $ka_list_size;
	}

	// determine number of selectable images from grid size
	$ka_num_selectable = $ka_test_cols * $ka_test_rows;

	// assume all images to be "wrong" (and remove "correct" images later)
	$ka_num_wrong = $ka_num_selectable - $ka_num_correct;

	// if we don't have enough images to fill the grid, show error message
	if ($ka_num_selectable > $ka_num_images)
	{
		message_die(GENERAL_ERROR, "Cannot build $ka_test_cols x $ka_test_rows grid for test -- only $ka_num_images images available!");
	}

	// initially create complete list of all "correct" and "wrong" images
	for($i = 0; $i < $ka_num_images; $i++)
	{
		$ka_correct_keep[$i] = -1;		// not modified
		$ka_correct[$i] = -1;
		$ka_wrong[$i] = 1;
	}
	for($i = 0; $i < $ka_list_size; $i++)
	{
		$ka_correct_keep[$ka_list[$i]] = 1;	// not modified
		$ka_correct[$ka_list[$i]] = 1;
		$ka_wrong[$ka_list[$i]] = -1;

		// if we don't have enough images to fill the grid, show error message
		if ($ka_list[$i] >= $ka_num_images)
		{
			message_die(GENERAL_ERROR, "Parameter 'ka_num_images' ($ka_num_images) apparently invalid -- found definition for image $ka_list[$i]!");
		}
	}

	// initially create empty list of final images to select
	for($i = 0; $i < $ka_num_selectable; $i++)
	{
		$ka_final[$i] = -1;
	}

	// first step: randomly fill in all "correct" images
	for($i = 0; $i < $ka_num_correct; $i++)
	{
		// create temporary list of all image positions still left
		$ka_final_left = array ();
		$nr = 0;
		for($j = 0; $j < $ka_num_selectable; $j++)
		{
			if ($ka_final[$j] == -1)
			{
				$ka_final_left[$nr] = $j;
				$nr++;
			}
		}

		// create temporary list of all "correct" images still left
		$ka_correct_left = array ();
		$nr = 0;
		for($j = 0; $j < $ka_num_images; $j++)
		{
			if ($ka_correct[$j] != -1)
			{
				$ka_correct_left[$nr] = $j;
				$nr++;
			}
		}

		$ka_final_pos = $ka_final_left[ mt_rand(0, count($ka_final_left) - 1) ];
		$ka_correct_pos = $ka_correct_left [ mt_rand(0, count($ka_correct_left) - 1) ];

		$ka_final[$ka_final_pos] = $ka_correct_pos;
		$ka_correct[$ka_correct_pos] = -1;
	}

	// second step: randomly fill in all "wrong" images
	for($i = 0; $i < $ka_num_wrong; $i++)
	{
		// create temporary list of all image positions still left
		$ka_final_left = array ();
		$nr = 0;
		for($j = 0; $j < $ka_num_selectable; $j++)
		{
			if ($ka_final[$j] == -1)
			{
				$ka_final_left[$nr] = $j;
				$nr++;
			}
		}

		// create temporary list of all "wrong" images still left
		$ka_wrong_left = array ();
		$nr = 0;
		for($j = 0; $j < $ka_num_images; $j++)
		{
			if ($ka_wrong[$j] != -1)
			{
				$ka_wrong_left[$nr] = $j;
				$nr++;
			}
		}

		$ka_final_pos = $ka_final_left[ mt_rand(0, count($ka_final_left) - 1) ];
		$ka_wrong_pos = $ka_wrong_left[ mt_rand(0, count($ka_wrong_left) - 1) ];

		$ka_final[$ka_final_pos] = $ka_wrong_pos;
		$ka_wrong[$ka_wrong_pos] = -1;
	}

	// finally fill resulting images into grid array
	for($i = 0; $i < $ka_num_selectable; $i++)
	{
		$x = (int)($i % $ka_test_cols);
		$y = (int)($i / $ka_test_rows);

		$ka_grid[$x][$y] = $ka_final[$i];
	}

	// create initial confirm code string
	$confirm_code_initial = "";
	$confirm_code_correct = "";
	for($i = 0; $i < $ka_num_selectable; $i++)
	{
		$nr = $ka_final[$i];

		$confirm_code_initial .= "|$nr|";

		if ($ka_correct_keep[$nr] != -1)
		{
			$confirm_code_correct .= "!$nr!";
		}
		else
		{
			$confirm_code_correct .= "|$nr|";
		}
	}

	if (!empty($lang['ka_info_header']))
	{
		$confirm_test .= '<span class="gensmall">';
		$confirm_test .= $lang['ka_info_header'];
		$confirm_test .= '</span>';
		$confirm_test .= '<br />';
	}

	// this descriptive text really should always exist
	$confirm_test .= $ka_info;
	$confirm_test .= '<br />';
	$confirm_test .= '<br />';

	if (!empty($lang['ka_info_footer']))
	{
		$confirm_test .= '<span class="gensmall">';
		$confirm_test .= $lang['ka_info_footer'];
		$confirm_test .= '</span>';
		$confirm_test .= '<br />';
	}

	if (!empty($lang['ka_test_header']))
	{
		$confirm_test .= '<span class="gensmall">';
		$confirm_test .= $lang['ka_test_header'];
		$confirm_test .= '</span>';
		$confirm_test .= '<br />';
	}

	$confirm_test .= '
	<input id="ka_confirm_code" name="confirm_code" value="' . $confirm_code_initial . '" type="hidden">
	<div id="ka">
		<style type="text/css">
			table.ka
			{
				background:	#000000;
				border:		none;
				margin:		auto;
			}
			table.ka td
			{
				background:	' . $ka_color_off . ';
			}
			table.ka img
			{
				background:	' . $ka_color_off . ';
				border:		none;
				margin:		' . $ka_image_border . 'px;
				width:		' . $ka_image_width  . 'px;
				height:		' . $ka_image_height . 'px;
			}
		</style>

		<script type="text/javascript">
		<!--
			var isIE = (navigator.appName == "Microsoft Internet Explorer");
			
			function getElement(id)
			{
				if (isIE)
					return document.all[id];
				else
					return document.getElementById(id);
			}
	
			var ka_confirm_code = getElement("ka_confirm_code");

			ka_confirm_code.value = "' . $confirm_code_initial . '";
			
			function ka_check(nr)
			{
				var id = "ka_img_" + nr;
				var nr_on  = "!" + nr + "!";
				var nr_off = "|" + nr + "|";

				if (ka_confirm_code.value.search(nr_on) != -1)
				{
					ka_confirm_code.value = ka_confirm_code.value.replace(nr_on, nr_off);

					getElement(id).style.backgroundColor = "' . $ka_color_off . '";
				}
				else
				{
					ka_confirm_code.value = ka_confirm_code.value.replace(nr_off, nr_on);

					getElement(id).style.backgroundColor = "' . $ka_color_on . '";
				}
			}
		//-->
		</script>

		<table class="ka">
	';

	for($y = 0; $y < $ka_test_rows; $y++)
	{
		$confirm_test .= '<tr>';
		$confirm_test .= "\n";

		for($x = 0; $x < $ka_test_cols; $x++)
		{
			$nr = $ka_grid[$x][$y];
			$file = $ka_image_nr_to_file[$nr];

			$confirm_test .= "<td id=\"ka_img_$nr\">";
			$confirm_test .= "<a href=\"javascript:ka_check($nr)\">";
			$confirm_test .= "<img src=\"$ka_image_path/$file\" />";
			$confirm_test .= "</a>";
			$confirm_test .= "\n";
		}

		$confirm_test .= '</tr>';
		$confirm_test .= "\n";
	}

	$confirm_test .= '
		</table>
	</div>
	';

	if (!empty($lang['ka_test_footer']))
	{
		$confirm_test .= '<span class="gensmall">';
		$confirm_test .= $lang['ka_test_footer'];
		$confirm_test .= '</span>';
	}

	$this->confirm_test = $confirm_test;
	$this->confirm_code = $confirm_code_correct;
    }

    function get_test()
    {
	return $this->confirm_test;
    }

    function get_long_code()
    {
	return $this->confirm_code;
    }

    function get_short_code()
    {
	return $this->get_short_code_from_long_code($this->confirm_code);
    }

    function get_short_code_from_long_code($code_long)
    {
	$code_tmp = $code_long;

	$code_tmp = ereg_replace("\|([0-9]+)\|", "", $code_tmp);
	$code_tmp = ereg_replace("\!([0-9]+)\!", "\\1,", $code_tmp);
	$code_tmp = ereg_replace(",$", "", $code_tmp);

	$code_list = split(",", $code_tmp);
	$code_short = '';

	for ($i = 0; $i < count($code_list); $i++)
	{
		$code_short .= sprintf("%02d", $code_list[$i]);
	}

	return $code_short;
    }
}

?>
