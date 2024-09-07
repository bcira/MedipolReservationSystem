<?php
// we are started the session.
session_start();
include("dbconnect.php");
 
// delete the sessions.
$_SESSION = array();
 
// expire the cookies..
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
 
/**
 * destroy the sessions.
 * user logged out.
 */
session_unset();
session_destroy();
 
/**
 * go to main page of the system.

 */
header("location:homepage.php");
exit;