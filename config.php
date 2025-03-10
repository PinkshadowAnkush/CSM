<?php 
    ob_start();
    session_start();
    date_default_timezone_set("Asia/Kolkata");

    /********************** DATABASE CONNECTION **********************/
    define("DATABASE_HOST","localhost");//Update this on the time of production
    define("DATABASE_USER","root");//Update this on the time of production
    define("DATABASE_PASSWORD","");//Update this on the time of production
    define("DATABASE_DB","cms");//Update this on the time of production
    /********************** DATABASE CONNECTION **********************/

    /********************** WEBSITE INFORMATION **********************/
    define("BASE_URL","http://localhost/");
    define("ORGANIZATION_NAME","PINKSHADOW MEDIA");
    define();
    /********************** WEBSITE INFORMATION **********************/
?>