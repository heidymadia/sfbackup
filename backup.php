<?php


foreach ($_POST as $key=>$val){
  echo "key : ".$key;
  echo "\t";
  echo "value : ".$val;
  echo "\n";
}

foreach ($_GET as $key=>$val){
  echo "key : ".$key;
  echo "\t";
  echo "value : ".$val;
  echo "\n";
}

require_once 'lib/soapclient/SforceEnterpriseClient.php';


//$mySforceConnection->createConnection("lib/soapclient/enterprise8.wsdl.xml");
//$mySforceConnection->login("frisianflag@saasten.com.sandbox", "saasten2011");



try {
  $mySforceConnection = new SforceEnterpriseClient();
  $mySforceConnection->createConnection("lib/soapclient/enterprise1.wsdl.xml");


  $mySforceConnection->setSessionHeader($_GET['session']."");
  $mySforceConnection->setEndpoint($_GET['url']);

  $UserInfo = $mySforceConnection->getUserInfo();
  
  var_dump($UserInfo->userName);

  if(!empty($UserInfo->userName)){
    $query = "SELECT Id, FirstName, LastName FROM Contact";
    $response = $mySforceConnection->query($query);
    
    echo "<pre>";
    var_dump($response);
    echo "</pre>";
  }
  

} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}




