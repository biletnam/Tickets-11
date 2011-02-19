<?php
  print form::open('ticket/create');
  print form::label(NULL, 'Tytuł')."<br />";
  print form::input('title', NULL, 'size=30')."<br /><br />";
  print form::label(NULL, 'Treść')."<br />";
  print form::textarea('body', NULL, 'cols=50 rows=20')."<br /><br />";
  print form::submit('submit', 'Załóż ticket');
  print form::close();
?>