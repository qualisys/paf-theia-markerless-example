<?
include_once ($template_directory . 'template_xml.php');

//make a copy of pose_filt file if pose_filt_0.c3d is not the correct one
foreach ($measurements as $m) {
	$path_parts = pathinfo($m["Filename"]);
	$foldername = $path_parts['filename'];
	$files = glob($working_directory . 'TheiaFormatData\\' . $foldername . '\\pose_filt_*.c3d');
	rsort($files); //use one with lowest number
	
	$file_to_copy = $working_directory . 'TheiaFormatData\\' . $foldername . '\\pose_filt_'.$m["Theia_c3d_file"].'.c3d';
	$dest_name = $working_directory . 'TheiaFormatData\\' . $foldername . '\\pose_subject.c3d';
	
	if ($m["Used"] === "True" && $m["Process_With_Theia"] !== "False") {
		// Check if $file_to_copy is a valid name
		if (file_exists($file_to_copy)) {
			copy($file_to_copy, $dest_name);
			echo "! Renaming ". $file_to_copy . "\n";
			echo "! To ". $dest_name . "\n";
		}
	}
	else {
		// Delete pose_subject.c3d first otherwise unselected trials would be included in analysis
		if (file_exists($dest_name)) {
			unlink($dest_name);
			echo "! Removing " . $dest_name . "\n";
		}
	}
}
?> 
