<?php
  if (isset($_POST['dbname'])) {
    $dbname = $_POST['dbname'];
    if (isset($_POST['button'])) {
      $old_path = getcwd();
      chdir('/Applications/MAMP/htdocs/home/sh');
      $output = shell_exec('sh newdb.sh '.$dbname);
      chdir($old_path);
    }
  }
?>
<html>
<body>
    <form method="post">
    <p>
      <input type="text" name="dbname">
    </p>
    <p>
        <button name="button">Run Perl</button>
    </p>
    </form>
</body>
<?php
?>