<?php
require_once('config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Invite Example</title>
<link rel="stylesheet" type="text/css" href="http://static.openheatmap.com/css/mainstyle.css"/>
</head>

<body>

<div class="ui-corner-all" style="font-size: 175%; margin-top: 0px; margin-left: 150px;">

  <h2>This example shows how to use <a href="http://invitesdoneright.com/">InvitesDoneRight</a></h2>
  <br>

  1 - Enter an email address below
  <br>
  2 - <a href="http://invitesdoneright.com/">InvitesDoneRight</a> will handle the contact importing process
  <br>
  3 - Your site will be called back with a shortlist of contacts the user actually has conversations with
  <br>
  <br>
  <br>

  <form method="GET" action="<?=INVITES_DONE_RIGHT_URL?>">
  Email address: <input type="text" size="40" name="emailaddress" value=""/>
  <input type="hidden" name="callback" value="<?=CALLBACK_URL?>"/>
  <input type="submit" value="Go"/>
  </form>

  <br>
  <br>
  <br>
  The code for this example is available at <a href="http://github.com/petewarden/invite_example">github.com/petewarden/invite_example</a>
  <br>
  <br>
  Documentation can be found at <a href="http://wiki.github.com/petewarden/invitesdoneright">wiki.github.com/petewarden/invitesdoneright</a>
  <br>
  <br>  

</div>

</body>
</html>
