<?php

// Administrator password
define('ADMIN_PASSWORD', 'WfdRt7');

################ LOGIN FORM SETTINGS ################

// users list file.
define('USERS_LIST_FILE', 'users.php');

// request login? true - show login and password boxes, false - password box only
define('USE_USERNAME', true);

// User will be redirected to this page after logout
define('LOGOUT_URL', 'http://www.example.com/');

// time out after NN minutes of inactivity. Set to 0 to not timeout
define('TIMEOUT_MINUTES', 0);

// This parameter is only useful when TIMEOUT_MINUTES is not zero
// true - timeout time from last activity, false - timeout time from login
define('TIMEOUT_CHECK_ACTIVITY', true);

// This will be added as prefix to Redirect URL in User Management
// Would be usefull if redirect URLs start from the same string, as you do not need to type it all the time.
// Redirect URLs in User Management which starts with "http" string will not be prefixed
// Set to '' if you do not need it.
define('REDIRECT_PREFIX', '');

################ SIGNUP FORM SETTINGS ################

// Prompt for email address? true - request email, false - do not prompt for email
define('USE_EMAIL', true);

// Treat login as email field?
// true - login and password shown on signup form, login must be valid email address
// false - login, password, and email shown on signup form
define('LOGIN_AS_EMAIL', false);

// User will be redirected to this page after sign up
define('SIGNUP_THANKS_URL', 'http://www.example.com/');


################ REMINDER FORM SETTINGS ################

// Email will be user as "From" email
define('REMINDER_EMAIL', 'noreply@example.com');

// Subject for reminder email
define('REMINDER_SUBJECT', 'example.com - password reminder');

// User will be redirected to this page after submit
define('REMINDER_THANKS_URL', 'http://www.example.com/');

define('REMINDER_MESSAGE', '
Hello!

Login information for example.com:

Login: %login%
Password: %password%

Best regards.
example.com
');

?>