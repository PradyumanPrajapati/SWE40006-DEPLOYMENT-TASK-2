<?php
$environment = getenv('DEPLOYMENT_ENV')          ?: 'Local Development';
$region      = getenv('DEPLOYMENT_REGION')       ?: 'Not Configured';
$hostName    = getenv('WEBSITE_SITE_NAME')   ?: 'localhost';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Task 2.4 - PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container text-center mt-5">
        <h1>Hi, From Pradyuman Prajapati</h1>
        <p>This is Task 2.4 (High Distinction) - Polyglot Deployment</p>
        <hr />
        <p>SWE40006 - Software Deployment and Evolution</p>
        <p>Student ID: 104795326</p>

        <h4 class="mt-4">Runtime Configuration</h4>
        <table class="table table-bordered w-50 mx-auto">
            <tr><th>Deployment Environment</th><td><?php echo $environment; ?></td></tr>
            <tr><th>Region</th><td><?php echo $region; ?></td></tr>
            <tr><th>PHP Version</th><td><?php echo phpversion(); ?></td></tr>
            <tr><th>Host Instance</th><td><?php echo $hostName; ?></td></tr>
        </table>

        <p class="text-muted">Server time (UTC): <?php echo gmdate('d M Y H:i:s'); ?></p>
    </div>
</body>
</html>
