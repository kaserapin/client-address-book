<?php 
// FUNCTIONS.php

// clean the form to prevent injections

function validateFormData($formData) {
    $formData = trim( stripslashes( htmlspecialchars( strip_tags( str_replace( array ( '(', ')' ), '', $formData ) ), ENT_QUOTES ) ) );
    return $formData;
}


?>