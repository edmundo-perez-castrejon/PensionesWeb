<?php
        require_once('clases/nusoap.php');
        $parameters = array('codigo'=>'06-002-001-005-00-120-00033','sesion'=>'adsadsa');
//        $soapclient = new soapclient('http://localhost/webservice/wsdlserver.php');
        $client = new soapclient('http://localhost/rppc/wsdlserver.php?wsdl', true);
        $err = $client->getError();
        if ($err) {
          // Display the error
          echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
          // At this point, you know the call that follows will fail
        }
        // Call the SOAP method
        
           $result = $client->call('informacion_rppc',$parameters);
         // Check for a fault
          if ($client->fault) {
              echo '<h2>Fault</h2><pre>';
              print_r($result);
            
              echo '</pre>';
          } else {
              // Check for errors
              $err = $client->getError();
              if ($err) {
                  // Display the error
                  echo '<h2>Error</h2><pre>' . $err . '</pre>';
              } else {
                  // Display the result
                  echo '<h2>Result</h2><pre>';
                  print_r($result);
                  echo $result[0];
              echo '</pre>';
              }
          }
           
       // Display the request and response
          echo '<h2>Request</h2>';
          echo '<pre>' . htmlspecialchars($client->request, ENT_QUOTES) . '</pre>';
          echo '<h2>Response</h2>';
          echo '<pre>' . htmlspecialchars($client->response, ENT_QUOTES) . '</pre>';
          // Display the debug messages
          echo '<h2>Debug</h2>';
          echo '<pre>' . htmlspecialchars($client->debug_str, ENT_QUOTES) . '</pre>';

?>
