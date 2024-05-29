# Changelog

## [1.1.7]
Fix to provide compatibility with Visual3D 2024.05.3.

## [1.1.5]
Tested with QTM 2023.3.12256 and Visual3D 2023.10.2.

## [1.1.4]
Fix preventing to load to Visual3D workspace .c3d of measurements deleted by user when reprocessing the data

## [1.1.2]
Copy files instead of symlinks to make Theia processing work for users using exFAT drive

## [1.1.1]
Fix Theia-Tools when marker and marker_max FOV are different
Add enable_free_arms and enable_free_feet Theia settings in settings.php

## [1.1.0]
Split repository into three seperate ones to simplify the code  
Settings.paf encoding changed to ANSI to better handle special characters  
Second thorax model file was removed  
Fix not to include inactive trials in the analysis  
Fix to missing segment depth for Pelvis Floor segment  
Update to Readme.md  
Fix to measurement tagging  
Option to select Theia c3d file in case the subject is not pose_filt_0.c3d 

## [1.0.1]
New Theia settings available in settings.php  
Analog data are filtered by default (cutoff: 20Hz)

## [1.0.0]

Migrated examples from paf-resources.
