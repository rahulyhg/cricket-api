<?php

require_once('GoogleApi/vendor/autoload.php');
$gclient=new Google_Client();
$gclient->setClientId('319379515687-abekk33h5nl6e2uob6mikua6qh08vfbp.apps.googleusercontent.com');
$gclient->setClientSecret('QhT0cbjWMwubx3rlvewcuj69');
$gclient->setApplicationName('google login');
$gclient->setRedirectUri('https://fantrick.herokuapp.com/g-callback.php');
$gclient->addScope('https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email');

 ?>
