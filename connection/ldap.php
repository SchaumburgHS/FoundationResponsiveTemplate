 <?php
session_start();
//setting the redirect page in case session has started
//$redirectPage = "index.php"; 
 //page to redirect user on successful login
 //$redirectPage = "subscriptions.php";
  $dn = "DC=d211,DC=org";
  $school = array("SHS","Schaumburg High School");
  $domain = "@d211.org";
  array $ldapservers[];
  $ldapservers[0] = "10.6.1.11";
  $ldapservers[1] = "SHSVHADC3.d211.org";
  $ldapservers[2] = "SHSVHADC1.d211.org";
  $ldapservers[3] = "209.7.119.15";


 $error ="";
 $message = "";
 
 //this function will connect to the LDAP server, bind the user and create session variable
 function authenticate($username, $ADpassword)
  {
	global $dn; 
	global $school;
	global $domain;
	$info = 0;

	//setting the value to get extended error output from the ldap_get_option function
	define(LDAP_OPT_DIAGNOSTIC_MESSAGE, 0x0032);
    
    //connecting to server
   $ds = ldap_connect($ldapservers[0]);  
	if(!$ds){  $ds = ldap_connect($ldapservers[1]); 
	}elseif(!$ds){ $ds = ldap_connect($ldapservers[2]); 
	}elseif(!$ds){ $ds = ldap_connect($ldapservers[3],636); 
	}elseif(!$ds){	echo("Error Connecting:'".ldap_error($ds)."'</br>");}

	
	//setting new values for LDAP optios, on new PHP version these values must be defined
	ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
	ldap_set_option($ds, LDAP_OPT_REFERRALS, 0);
       

     //concatenating the username entered to the d211 extension, otherwise server won't bind
      $ADusername = $username.$domain;
     
    
     //binding user
	$r=ldap_bind($ds, $ADusername, $ADpassword ); 
	 
        //AD attributes needed
        $attributes = array("company","displayname", "mail","homedirectory","department", "samaccountname");
        //filter for LDAP search
        $filter = "sAMAccountName=$username";
        
     //if bind is successful, run a search to the LDAP tree to make sure is not an anonymous bind
       if(!$r){  return false; }else { 
 
               $sr = ldap_search($ds,$dn,$filter, $attributes);
                $info = ldap_get_entries($ds, $sr);
    	        //echo "Data for " . $info["count"] . " items returned:<p>";
    	        $company = $info[0]['company'][0];
    	        $displayname =$info[0]['displayname'][0];
           	    $homedirectory = $info[0]['homedirectory'][0];
	            $error1= ldap_error($ds);  
	           }
         if($error1 == 'Operations error'){   return false; }else
         {  
            //verify that user belongs to Schaumburg H.S.
           	if(preg_match("/(shs|SHS)/", $homedirectory)){
          		 	//create user's session if no errors exited and is from S.H.S.
          			  //$_SESSION['user'] = $ADusername;
          			  //$_SESSION['displayname'] = $displayname;
          			  return $info;  
          			  }else{
          		            //if user does in not part of SHS then return false
          		            return false;
                           }
         }
 	   ldap_close($ds);
	}//end authenticate function
   
?>