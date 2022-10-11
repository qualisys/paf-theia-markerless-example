# Qualisys PAF – Theia Markerless example

## Getting started

To download the latest version (not tested) of the example project to your computer, you can either:

* [Click here](https://github.com/qualisys/paf-theia-markerless-example/archive/refs/heads/main.zip) to download it as a zip file.
<br>_— or —_
* Clone this repository to your computer.

To download a release version (tested), please [Click here](https://github.com/qualisys/paf-theia-markerless-example/releases)

## Preparing Qualisys data for Theia3D processing

1. Install [Theia](https://www.theiamarkerless.ca/) and accompanying engine.
2. In QTM, set Project Options > Miscellaneous > Folder Options for "Theia" to ```C:\Program Files\Theia\Theia3D\Theia3D.exe``` (adapt if Theia is installed at different location).
3. Install Visual3D.
4. Set Project Options > Miscellaneous > Folder Options for "Visual 3d" to ```C:\Program Files\Visual3D\Visual3D.exe``` (adapt if Visual3D is installed at different location).
5. Download data from Qualisys File Library (https://qfl.qualisys.com/#!/project/theiaexample)
   > Note: Example data include two persons. While **John Doe** can be used with Theia to generate .c3d files (use `Markerless Session`), **Jim Doe** does not include videos and can be used to compare marker-based and markerless data (use `Marker-based vs Markerless Comparison Session`). This sesson type expects data to be captured by combined system of video cameras and marker-based cameras where markers are places on the body for the same trial that is used to capture videos. Script is set to work with sports marker set. If other marker set is required, it is necessary to adapt the script and model files accordingly.
6. Extract downloaded .zip file into the projects data folder "Theia Markerless Example\Data"
7. To process the data, you have to first click on **Theia and V3D Processing**
    > Note: The following Theia specific settings along with their descriptions are available in Templates\settings.php: save_workspace, theia_filter_type, theia_filter_cutoff, enable_knee_rotation, max_people, track_rotated_people and export_type. When saving the workspace, it will create a TheiaFormatData_workspace folder in your session where each subfolder is containing the Theia workspace of a measurement. To open the workspace of a measurement, click on File > Load Workspace and select the subfolder of your choice. If Theia is closed, double-click on the results.p3d included in the subfolder of your choice.

## Resources for using the Qualisys Project Automation Framework (PAF)

The purpose of the ***Project Automation Framework*** (PAF) is to streamline the motion capture process from data collection to the final report. This repository contains an example project that illustrate how PAF can be used to implement custom automated data collection in [Qualisys Track Manager (QTM)](http://www.qualisys.com/software/qualisys-track-manager/), and how QTM can be connected to a processing engine. 

### PAF Documentation

The full documentation for PAF development is available here: [PAF Documentation](https://github.com/qualisys/paf-documentation).


### PAF Examples

Our official examples for various processing engines:

- [Excel](https://github.com/qualisys/paf-excel-example)
- [Matlab](https://github.com/qualisys/paf-matlab-example)
- [OpenSim](https://github.com/qualisys/paf-opensim-example)
- [Python](https://github.com/qualisys/paf-python-example)
- [Theia Markerless](https://github.com/qualisys/paf-theia-markerless-example)
- [Visual3D](https://github.com/qualisys/paf-visual3d-example)

_As of QTM version 2.17, the official Qualisys PAF examples can be used without any additional license. Note that some more advanced analysis types require a license for the "PAF Framework Developer kit" (Article number 150300)._
