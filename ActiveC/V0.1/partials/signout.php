<!--****************************************************************************
********************************************************************************
********************************************************************************
********************************Singout Page-PHP********************************
********************************************************************************
********************************************************************************
*****************************************************************************-->
<?php
    echo
    "<script>
             window.location='#/login';
             var name = sessionStorage.getItem('username');
             //if there is no user connected, skip those lines
             if ( name !== 'null' && name !== 'Not_Valid_User_Name' ) 
             {
                sessionStorage.setItem('username', 'Not_Valid_User_Name');
                setTimeout(function(){alert('You have successfully logout.Redirecting to Login page..');},150);
             }
     </script>";
?>

 