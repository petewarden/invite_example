<?php
require_once('config.php');

if (isset($_GET['error_message']))
{
    $error_message = urldecode($_GET['error_message']);
}
else
{
    if (!isset($_GET['contactsinfo']))
        die('No data found in URL');

    $contactsinfo = json_decode(urldecode($_GET['contactsinfo']), true);

    $emailaddress = $contactsinfo['emailaddress'];
    $topfriends = $contactsinfo['topfriends'];
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Invite Example</title>
<link rel="stylesheet" type="text/css" href="http://static.openheatmap.com/css/mainstyle.css"/>
</head>

<body>

<div class="ui-corner-all" style="font-size: 175%; margin-top: 0px; margin-left: 150px;">

  <h2>This example shows how to use InvitesDoneRight</h2>
  <br>
  <br>
  Here's the shortlist of the user's friends
  <br>
  <br>
<?php

if (isset($error_message))
{
    print 'There was an error - '.htmlspecialchars($error_message);
}
else
{
    foreach ($topfriends as $friendinfo)
    {
        $address = $friendinfo['address'];
        $display = $friendinfo['display'];
        
        print htmlspecialchars('"'.$display.'" <'.$address.'>');
        print '<br>';
        print "\n";    
    }
}

?>

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
