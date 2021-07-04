<?php
  echo "Welcome!<br /><br />\n";
  $headers = apache_request_headers();
  foreach ($headers as $header => $value)
  {
	  if ($header == "OIDC_CLAIM_preferred_username"){
    		echo "Username : $value <br />\n";
	  }
	  if ($header == "OIDC_CLAIM_email"){
      echo "Email : $value <br />\n";
  }
}
  echo "<br /><br />\n";
  echo "<button onclick=\"location.href='./logout.html'\">Logout</button>\n";
?>
