# Qualisys PAF – Theia Markerless Basic Example

## Getting started

To download the latest version (not tested) of the example project to your computer, you can either:

* [Click here](https://github.com/qualisys/paf-theia-markerless-example/releases/latest) to download the latest release.
<br>_— or —_
* Clone this repository to your computer.

## Preparing QTM project
There are two ways how to set up the project for QTM:
1. Simple method is to unzip the zip file and open the project from QTM (File > Open Project) or by double clicking on Settings.paf in File Explorer.
2. If you plan to create multiple projects based on this example, unzip the zip file to `C:\Program Files\Qualisys\Qualisys Track Manager\Packages`, name the folder `Theia Markerless Example` and delete Settings.qtmproj. Then go to QTM > File > New Project and create new project based on Theia Markerless Example.

To control Theia3D via PAF it is neccessary to download Theia-Tools.exe from the corresponding [release](https://github.com/qualisys/paf-theia-markerless-example/releases/latest) and move the extracted content into the `Templates/Assets/Programs/Theia-Tools/` folder of the project directory.

## Preparing Qualisys data for Theia3D processing

1. Install [Theia](https://www.theiamarkerless.ca/) and accompanying engine.
2. In QTM, set Project Options > Miscellaneous > Folder Options for "Theia" to ```C:\Program Files\Theia\Theia3D\Theia3D.exe``` (adapt if Theia is installed at different location).
3. Install Visual3D.
4. Set Project Options > Miscellaneous > Folder Options for "Visual3D" to ```C:\Program Files\Visual3D x64\Visual3D.exe``` (adapt if Visual3D is installed at different location).
5. Download data from Qualisys File Library (https://qfl.qualisys.com/#!/project/theiaexample).

   Example data includes three types of data:
   1. **John Doe** can be used with this example to generate .c3d files,
   2. **Jim Doe** is intended for markerless vs markerbased comparison example: https://github.com/qualisys/paf-theia-markerless-comparison-example. It does not include videos and can be used to compare marker-based and markerless data and is intended to be used this this repository. This sesson type expects data to be captured by combined system of video cameras and marker-based cameras where markers are places on the body for the same trial that is used to capture videos. Script is set to work with sports marker set. If other marker set is required, it is necessary to adapt the script and model files accordingly. 
   3. **Joe Doe** is intended for true hybrid example: https://github.com/qualisys/paf-theia-markerless-true-hybrid-example. It does not include videos and can be used as an example for this repository how to add objects to markeless analysis. Objects must have markers on. It is important that both marker cameras and video camera capture at the same rate.
6. Extract downloaded .zip file into the `Data` folder of the project.
7. To process the data, you have to click on **Start Processing** button.
    - The following Theia specific settings along with their descriptions are available in Templates\settings.php: `save_workspace`, `theia_filter_type`, `theia_filter_cutoff`, `enable_knee_rotation`, `enable_free_arms`, `enable_free_feet`, `max_people`, `track_rotated_people` and `export_type`. When saving the workspace, it will create a TheiaFormatData_workspace folder in your session where each subfolder is containing the Theia workspace of a measurement. To open the workspace of a measurement, click on File > Load Workspace and select the subfolder of your choice. If Theia is closed, double-click on the results.p3d included in the subfolder of your choice.  
    - Theia can identify and process data for more then one subject if more persons are in the volume. The subject that yields best data is typically selected but sometimes other person is wrongly chosen. If that happens, there is an option to choose which c3d file is actual subject. To select other c3d, activate the measurement, navigate to `Theia c3d file` field and chose number of Theia file. To find out what c3d files Theia has created, go to working directory of active session, open `TheiaFormatData` folder, open folder of active measurement and review `pose_filt_*.c3d` files in Visual3D.

> Note that all data (videos, markers, forces, other analog) must be captured at capture rates that are integer multiple of each other, so that no resampling is required. Failing this requirement would lead to the data being out of sync.

## Resources for using the Qualisys Project Automation Framework (PAF)

The purpose of the ***Project Automation Framework*** (PAF) is to streamline the motion capture process from data collection to the final report. This repository contains an example project that illustrate how PAF can be used to implement custom automated data collection in [Qualisys Track Manager (QTM)](http://www.qualisys.com/software/qualisys-track-manager/), and how QTM can be connected to a processing engine. 

### PAF Documentation

The full documentation for PAF development is available here: [PAF Documentation](https://github.com/qualisys/paf-documentation).


### PAF Examples

Our official examples for various processing engines:

- [AnyBody](https://github.com/qualisys/paf-anybody-example)
- [ENABLE](https://github.com/qualisys/paf-enable-markerless-example)
- [Excel](https://github.com/qualisys/paf-excel-example)
- [Matlab](https://github.com/qualisys/paf-matlab-example)
- [OpenSim](https://github.com/qualisys/paf-opensim-example)
- [Python](https://github.com/qualisys/paf-python-example)
- [Theia Markerless](https://github.com/qualisys/paf-theia-markerless-example)
- [Theia Markerless Comparison](https://github.com/qualisys/paf-theia-markerless-comparison-example)
- [Theia Markerless True Hybrid](https://github.com/qualisys/paf-theia-markerless-true-hybrid-example)
- [Visual3D](https://github.com/qualisys/paf-visual3d-example)

_As of QTM version 2.17, the official Qualisys PAF examples can be used without any additional license. Note that some more advanced analysis types require a license for the "PAF Framework Developer kit" (Article number 150300)._
