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
        echo '</script> <script language="javascript"> window.location.href = "http://hearing-aids.co.in/ads/thanks.htm"; </script>';
    }
    else {
        //case of failure
        $message2 = "Your Message Sending Failed";
        echo '<script language="javascript">';
        echo 'alert("'.$message2.'")';
        echo '</script>';
    }

$errors = array();

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (empty($_POST["name"])) {
    array_push($errors, "please enter your name");
} else {
    $name = test_input($_POST["name"]);
}

if (empty($_POST["email"])) {
    array_push($errors, "please enter your email");
} else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "please enter a valid email Id.");
    }
}

if (empty($_POST["contacts"])) {
    array_push($errors, "please enter your mobile number");
} else {
    $contact = test_input($_POST["contacts"]);    
    if (!preg_match("/^[0-9]{8,15}$/", $contact)) {
        array_push($errors, "Your mobile has some invalid characters.");
   }
}


if (empty($_POST["city"])) {
    array_push($errors, "please enter your location");
} else {
    $location = test_input($_POST["city"]);
}

if (empty($_POST["message"])) {
    array_push($errors, "please enter your message");
} else {
    $message = test_input($_POST["message"]);
}


if (count($errors) == 0) {


$pleadopendate = date('Y-m-d H:i:s');
$url = "http://hearing-aids.co.in/ads";
$xtime = "2017-12-14 12:47:29";
$servername = "localhost";
$username = "sanjares_ivf";
$password = "f~i(7kG},o9O";
$dbname = "sanjares_ivf";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
date_default_timezone_set('Asia/Kolkata');
$stmt = $conn->prepare("INSERT INTO email(name, mobile, email, location, message, dates, xtime, url) VALUES (? , ? , ? , ? , ? , ? , CURDATE()  , ?)");
$stmt->bind_param("sssssss", $name , $contact , $email , $location , $message , $pleadopendate  ,  $url);
$stmt->execute();
$stmt->close();
$conn->close();
}
else
{
    echo "<ul>";
                foreach ($errors as $error) {
                    echo "<li>" . $error . "</li>";
                }
                echo "</ul>";
}

    echo '<script language="javascript">';
    echo 'alert("Your message has been sent !")';
    echo '</script> <script language="javascript"> window.location.href = "http://hearing-aids.co.in/ads/thanks.htm"; </script>';
}

?>
