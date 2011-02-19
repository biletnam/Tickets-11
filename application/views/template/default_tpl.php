<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title><?php echo $this->template->title ?></title>
  <?php
  echo html::stylesheet(array
  (
    'media/css/style'
  ), FALSE);
  ?>
</head>
<body>
  <div id="container">
    <div id="header">
      <div id="login-bar"></div>
      <h1>Ticket System</h1>
      <div id="menu-bar">
        <?php 
        echo html::anchor('home', 'Strona główna', array('title'=>'Strona główna'))."&nbsp;|&nbsp";
        echo html::anchor('ticket/show_create_editor', 'Zgłość ticket', array('title'=>'Zgłość ticket'));

        ?>
      </div>
    </div>
    <div id="body-content"><?php echo $content ?></div>
    <div id="footer"><?php echo $footer ?></div>
  </div>
</body>
</html>