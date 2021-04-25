<body>
<?php echo "Hello World! This is the Version 1 App "; ?>
<?php if($_ENV["HOSTNAME"]) {?><h3>My hostname is <?php echo $_ENV["HOSTNAME"]; ?><br /><br />
<?php echo "This Program is written by vinod "; ?><br /><br />
<?php echo "S2I Image"; ?>

<?php
}
?>
</body>
</html>
