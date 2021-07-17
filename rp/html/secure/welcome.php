<?php
  echo "Welcome!<br /><br />\n";
  date_default_timezone_set('Asia/Tokyo');
	$now = time() ;
  echo "Now : ";
  echo date('Y/m/d H:i:s',$now);
  echo " <br /><br />\n";

  $headers = apache_request_headers();
  foreach ($headers as $header => $value)
  {
	  if ($header == "OIDC_CLAIM_preferred_username"){
    		echo "Username : $value <br />\n";
	  }
	  if ($header == "OIDC_CLAIM_email"){
      echo "Email : $value <br />\n";
    }

	  if ($header == "OIDC_CLAIM_auth_time"){
      echo "<br />\n";
      echo "Auth Time <br />\n";
      echo "- exp(UNIX) : $value <br />\n";
      echo "- exp(Tokyo) : ";
      echo date('Y/m/d H:i:s', $value);
      echo " <br />\n";
    }
    
	  if ($header == "OIDC_access_token_expires"){
      echo "<br />\n";
      echo "Access Token <br />\n";
      echo "- exp(UNIX) : $value <br />\n";
      echo "- exp(Tokyo) : ";
      echo date('Y/m/d H:i:s', $value);
      echo " <br />\n";
      $exp = $value;
    }

	  if ($header == "OIDC_access_token"){
      $access_token = $value;
    }

  }
  
  if( $now >= $exp ){
    echo " <br /><br />\n";
    echo "<font color=\"red\">Your Access token has expired.</font><br />";
    echo "<button onclick=\"location.href='/secure?refresh=http://test-oidc-rp:8081/secure/welcome.php&access_token=$access_token'\">Refresh Access token</button>\n";
    //echo "$access_token <br />\n";
  }

  echo "<br /><br />\n";
  echo "<button onclick=\"location.href='../index.html'\">Return to top while logged in</button>\n";
  echo "<br /><br />\n";
  echo "<button onclick=\"location.href='/secure?logout=http://test-oidc-rp:8081/loggedout.html'\">Logout</button>\n";
  
?>
