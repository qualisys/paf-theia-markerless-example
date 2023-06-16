<?php
/*==================================
  Script settings
  ==================================*/
// TheiaTools
$save_workspace = false; // Defines whether to save workspace or not when processing with Theia
$theia_filter_type = "spline"; // Allowed filter types ["spline","moving_average"]
$theia_filter_cutoff = 8; // Lowpass filter cut-off frequency in Hz
$enable_knee_rotation = true; // Enable the internal/external rotation degree of rotation of the knees. Default is true.
$enable_free_arms = false; // Enable a free joint (six degrees of freedom) at the shoudlers. Default is false.
$enable_free_feet = false; // Enable a free joint (six degrees of freedom) at the ankles. Default is false.
$max_people = -1; // Maximum nmber of people being tracked. Default is -1 meaning all the people will be tracked.
$track_rotated_people = false; // Option to better track people not standing up (upside down or laying down for example). Default is false since it increases the processing time when used. 
$export_type = "C3D"; // The data can be exported into a C3D or a FBX file with different conventions. Allowed entries: "C3D", "FBXTHEAI3D", "FBXMAYAYUP", "FBXMAYAZUP", "FBXMAX", "FBXMOTIONBUILDER", "FBXOPENGL", "FBXDIRECTX", "FBXLIGHTWAVE" or "FBXCUSTOM". Default is "C3D".
					  // Important: The V3D analysis requires using "C3D". Although using other entries than "C3D" will also export C3D file(s), it will make the analysis fail because selecting one of the FBX export types changes the Theia skeleton/model convention. 
?>