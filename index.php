<?php
  $new_url = str_replace ('url=', '', substr ($_SERVER['REQUEST_URI'], strpos ($_SERVER['REQUEST_URI'], '?') + 1));

  // Get cURL resource
  $curl = curl_init();
  // Set some options - we are passing in a useragent too here
  curl_setopt_array($curl, array(
      CURLOPT_RETURNTRANSFER => 1,
      CURLOPT_URL => $new_url,
      CURLOPT_USERAGENT => 'SARAH Proxy'
  ));
  // Send the request & save response to $resp
  $resp = curl_exec($curl);
  // Close request to clear up some resources
  curl_close($curl);

  echo $resp;
