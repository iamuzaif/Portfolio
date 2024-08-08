<!-- <?php
/**
 * Requires the "PHP Email Form" library
 * The "PHP Email Form" library is available only in the pro version of the template
 * The library should be uploaded to: vendor/php-email-form/php-email-form.php
 * For more info and help: https://bootstrapmade.com/php-email-form/
 */

// Set CORS headers
// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
// header('Access-Control-Allow-Headers: Content-Type');

// // Replace contact@example.com with your real receiving email address
// $receiving_email_address = 'uzaifmansoori99@gmail.com';

// // Check if the form data is being sent via POST
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//   // Include the PHP Email Form library
//   if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
//     include($php_email_form);
//   } else {
//     die('Unable to load the "PHP Email Form" Library!');
//   }

//   // Create a new PHP Email Form object
//   $contact = new PHP_Email_Form;
//   $contact->ajax = true;

//   // Set the form data
//   $contact->to = $receiving_email_address;
//   $contact->from_name = $_POST['name'];
//   $contact->from_email = $_POST['email'];
//   $contact->subject = $_POST['subject']; // added closing ;

//   // Add the form data to the email message
//   $contact->add_message($_POST['name'], 'From');
//   $contact->add_message($_POST['email'], 'Email');
//   $contact->add_message($_POST['message'], 'Message', 10);

//   // Send the email
//   echo $contact->send();
// } else {
//   // Handle other request methods (e.g. GET)
//   echo 'Error: Invalid request method';
// }
// // ?> -->