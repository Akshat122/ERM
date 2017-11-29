<?php
function mySqlErrors($response)
{
    //Returns custom error messages instead of MySQL errors
    switch (substr($response, 0, 22)) {

        case 'Error: SQLSTATE[23000]':
            echo "<script> iziToast.show({title: 'Error', message: 'Username or email already exists', theme: 'light',color: 'red',          position: 'topRight', progressBarColor: 'red', });   </script>";
            break;

        default:
            echo "<script> iziToast.show({title: 'Error', message: 'An error occurred... try again', theme: 'light',color: 'red',          position: 'topRight', progressBarColor: 'red', });   </script>";

    }
}
