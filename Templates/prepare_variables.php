<?
include_once ($template_directory . 'template_xml.php');

//make a copy of pose_filt file if pose_filt_0.c3d is not the correct one
foreach ($measurements as $m) {
	if ($m["Used"] === "True" && $m["Process_With_Theia"] !== "False") {
		$path_parts = pathinfo($m["Filename"]);
		$foldername = $path_parts['filename'];
		$files = glob($working_directory . 'TheiaFormatData\\' . $foldername . '\\pose_filt_*.c3d');
		rsort($files); //use one with lowest number
		
		$pose_filt_file = $working_directory . 'TheiaFormatData\\' . $foldername . '\\pose_filt_'.$m["Theia_c3d_file"].'.c3d';
		
		if ($m["Theia_c3d_file"] == 0)
			$file_to_copy = array_pop($files);
		else {
			$file_to_copy = $pose_filt_file;
			echo "! Theia c3d used: " . $file_to_copy . "\n";
		}
		
		$dest_name = $working_directory . 'TheiaFormatData\\' . $foldername . '\\pose_subject.c3d';
		
		echo "! Using ". $file_to_copy . "\n";
		//echo "!". $dest_name . "\n";
		
		// Check if $dest_name is a valid folder
		if (file_exists($dest_name))
			copy($file_to_copy, $dest_name);
	}
}
?> 
