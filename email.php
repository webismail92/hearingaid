<?php if(isset($_POST['name']) && isset($_POST['contacts']) && isset($_POST['email'])) {
	
 
    $email_to = 'ismailtiten@gmail.com';
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $contact = $_POST['contacts'];
    $city = $_POST['city'];
    $message = $_POST['message'];
    
    $text = "<br>
            From Sanjar E Solutions<br><br>
            Name: $name<br>
            Email Id: $email<br>
            Contact Number: $contact<br>        
			City : $city<br>
			Message: $message";

    $headers  = "MIME-Version: 1.0" . "\r\n"; 
    $headers .= "Content-type:text/html; charset=utf-8" . "\r\n"; 
    $headers .= "From: <$email>" . "\r\n";
    
    if(mail($email_to, "From Sanjar E Solutions", $text, $headers)) {
        //case of sucess
        $message2 = "Your Message Sent";
        
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'http://sanjarcrm.com/api/leads/submit',
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => array(
        'name' => $name,
        'email' => $email,
        'contact' => $contact,
        'location' => $city,
        'message' => $message,
        'table_alias' => 'hearing_aids_co_in_ads',
        'api_key' => 'f7581fa98ff5bb7da36584fe35b327c7'
        )
        ));
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);
        
        
        echo '<script language="javascript">';
        echo 'alert("'.$message2.'")';
        echo '</script>';
        echo '</script> <script language="javascript"> window.location.href = "thanks.htm"; </script>';
    }
    else {
        //case of failure
        $message2 = "Your Message Sending Failed";
        echo '<script language="javascript">';
        echo 'alert("'.$message2.'")';
        echo '</script>';
    }
}

?>
