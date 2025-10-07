<?php

// find theia tools
foreach (glob($template_directory . 'Assets\Programs\Theia-Tools\Theia-Tools*.exe') as $filename) {
    $command_string_base = '"' . $filename . '"';
    break;
}
$wrapped_working_dir =  '"' . $working_directory . '\"';
$theia_format_data_path =  '"' . $working_directory . 'TheiaFormatData' . '"';
$theia_batch_commands_dir = '"' . $template_directory . 'Scripts\src\Theia\\theia_batch_commands.txt' . '"';

switch (trim($analysis_name)) {

    case 'Theia Tools Process':
        $command_string = $command_string_base . ' --script process' . 
        ' --path-to-session-folder ' . $wrapped_working_dir . 
        ' --path-to-batch-commands ' . $theia_batch_commands_dir . 
        ' --theia-data-dir ' . $theia_format_data_path; 
        break;

    case 'Upsample Data':
        $command_string = $command_string_base . ' --script upsample-theia-data' . 
        ' --path-to-session-folder ' . $wrapped_working_dir . 
        ' --path-to-batch-commands ' . $theia_batch_commands_dir . 
        ' --theia-data-dir ' . $theia_format_data_path; 
        break;
    }

$command_string = $command_string . ' --error-log-folder ' . $wrapped_working_dir;
exec($command_string,$output);

?>