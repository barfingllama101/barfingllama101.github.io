<?php   
    if (isset($_POST["submit"])){ 
            $to = "kpg6728@rit.edu";
        
            $from = empty(trim($_POST["email"])) ? "noemail@sample.com" : sanitize_string($_POST["email"]);
            
            $subject = empty(trim($_POST["subject"])) ? "No Subject" : sanitize_string($_POST["subject"]);
            
            $message = empty(trim($_POST["message"])) ?  "No message" : sanitize_string($_POST["message"]);
            
            $name = empty(trim($_POST["emailer"])) ? "No name" : sanitize_string($_POST["emailer"]);    
            
            $headers = "From: $from" . "\r\n";
            
            $sent = mail($to,$subject,$message,$headers);

            header('location: https://people.rit.edu/kpg6728/235/KimmyPort/index.html');
    }
    
    // #9 - this handy helper function is very necessary whenever
    // we are going to put user input onto a web page or a database
    // For example, if the user entered a <script> tag, and we added that <script> tag to our HTML page
    // they could perform an XSS attack (Cross-site scripting)
    function sanitize_string($string){
    $string = trim($string);
    $string = strip_tags($string);
    return $string;
    }
?>