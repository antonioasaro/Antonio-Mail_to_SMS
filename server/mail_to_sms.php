<?PHP

//  print "Working ...<br>";
  if (!isset($_GET['cmd'])) die();
  if (!isset($_GET['who'])) die();
  if (!isset($_GET['msg'])) die();

  $cmd = $_GET['cmd'];
  $who = $_GET['who'];
  $msg = $_GET['msg'];
  
///////////  personalize this part  ///////////
  $sub = "Hold 562-457-7144 to reply";
  $frm = "5624577144@txt.att.com";
///////////////////////////////////////////////
  $hdr = "From: ".$frm;

  $sentOK = 0;
  if (strcmp($cmd, "send") == 0) {
      if (mail($who, $sub, $msg, $hdr)) { $sentOK = 1; }
  } else {
      if (strcmp($cmd, "test") == 0) {
        print "<b>To:</b> ".$who."<br><b>From:</b> ".$frm."<br><b>Subject:</b> ".$sub."<br><b>Msg:</b> ".$msg."<br><br>";
    }
  }
  $result[1] = array();
  $result[1] = array('I', $sentOK);
  print json_encode($result);

?>

