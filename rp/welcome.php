<?php
  echo "Welcome!<br /><br />\n";
  $headers = apache_request_headers();
  foreach ($headers as $header => $value)
  {
	  if ($header == "OIDC_CLAIM_preferred_username" || $header == "OIDC_CLAIM_email"){
    		echo "$value <br />\n";
	  }
  }
?>
