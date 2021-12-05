<?php
// Reads the variables sent via POST
$sessionId   = $_POST["sessionId"];  
$serviceCode = $_POST["serviceCode"];  
$text = $_POST["text"];
//This is the first menu screen
if ( $text == "" ) {
$response  = "CON Welcome to Imbokodo get assistance or learn more";
$response .= "1. Enter 1 to continue";
}
// Menu for a user who selects '1' from the first menu
// Will be brought to this second menu screen
else if ($text == "1") {
$response  = "CON  Please select a language \n";
$response .= "1. English \n";
$response .= "2. Afrikaans \n";
$response .= "3. Sotho \n";
$response .= "4. Zulu \n";
}
// Menu for a user who selects '1' from the second menu
// Will be brought to this third menu screen
else if ($text == "1*1") {
$response  = "CON  Please select an option below\n";
$response .= "1. Emergency Alert \n";
$response .= "2. Safe House \n";
$response .= "3. Leaving your abuser \n";
$response .= "4. Doccument Storage\n";
}
//Menu for a user who selects '1' from the third menu above
// Will be brought to this third menu screen
else if ($text == "1*1*1") {
$response .= "This is only for immediate emergency \n";
$responce .= "Press 1 to continue and 0 to cancel \n";
;
}
else if ($text == "1*1*1*1") {
$response = "Help is on the way, stay strong";
}
else if ($text == "1*1*0") {
$response = "END Emergency alert has been canceled";
}
// Menu for a user who selects "2" from the second menu above
// Will be brought to this fourth menu screen
else if ($text == "2") {
$response = "CON Safe houses are organisations that can help you with a accomodation and other services \n";
$response .= "Please Enter 1 to confirm your need for a safe house 0 to cancel\n";
}
// Menu for a user who selects "1" from the fourth menu screen
else if ($text == "1*2*1") {
$response = "CON A safe house near you will contact you soon \n";
$response .= "Please enter your phone number /n";
}
else if ($text == "1*2*1*0") {
$response = "END You have canceled the request /n";
}
// Menu for a user who selects "3" from the second menu above
// Will be brought to this fith menu screen
else if ($text == "1*3") {
$response = "CON Do you want steps on how to leave your abuser? \n";
$response .= "Please Enter 1 to confirm 0 to cancel\n";
}
// Menu for a user who enters "1" from the fifth menu
else if ($text == "1*3*1") {
$response = "CON An organisation will contact you to come up with a safety plan that is best for you";
$response .= "Enter your phone number to continue \n";
$response .= "Enter 0 to cancel \n";
}
else if ($text == "1*3*1*1") {
$response = "END Thank you, you will be contacted soon to discuss a safety plan";
}
else if ($text == "1*3*1*0") {
$response = "END Your request has been canceled";
}
// Menu for a user who enters "4" from the second menu above
// Will be brought to this sixth menu screen
else if ($text == "1*4") {
$response = "CON keep your important doccuments stored at an organisation for safe keeping\n";
$response .= "Please Enter 1 to continue \n";
}
// Menu for a user who enters "1" from the sixth menu
else if ($text == "1*4*1") {
$response = "Please take the following original doccuments";
$response .= "ID/Birth certificate";
$response .= "Educational certificates";
$response .= "Legal doccuments ";
$response .= " Medical doccuments";
$response .= " Take these doccuments to an organisation near you \n";
}

// Menu for a user who enters "1" from the fifth menu
else if ($text == "1*3*1") {
$response = "CON An organisation will contact you to come up with a safety plan that is best for you";
$response .= "Enter your phone number to continue \n";
$response .= "Enter 0 to cancel \n";
}
else if ($text == "1*3*1*1") {
$response = "END Thank you, you will be contacted soon to discuss a safety plan";
}
else if ($text == "1*3*1*0") {
$response = "END Your request has been canceled";
}
// Menu for a user who enters "4" from the second menu above
// Will be brought to this sixth menu screen
else if ($text == "1*1*4") {
$response = "Please take the following original doccuments";
$response .= "ID/Birth certificate";
$response .= "Educational certificates";
$response .= "Legal doccuments ";
$response .= " Medical doccuments";
$response .= " Take these doccuments to an organisation near you \n";
}

//echo response
header('Content-type: text/plain');
echo $response
?>
