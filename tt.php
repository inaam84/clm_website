<?php

echo get_gravatar_url("inaam@gmail.com");

function get_gravatar_url( $email ) {
    // Trim leading and trailing whitespace from
    // an email address and force all characters
    // to lower case
    $address = strtolower( trim( $email ) );
  
    // Create an SHA256 hash of the final string
    $hash = hash( 'sha256', $address );
  
    // Grab the actual image URL
    return 'https://www.gravatar.com/avatar/' . $hash;
  }

  #2390:gk-R_FBEWh4cSOD30Qtpa0M5iR51PF2stlTtSc8zJS1UbYyXK2Z0RAXXtNGyB-00

  $str = file_get_contents( 'https://gravatar.com/27205e5c51cb03f862138b22bcb5dc20f94a342e744ff6df1b8dc8af3c865109.php' );
$profile = unserialize( $str );
if ( is_array( $profile ) && isset( $profile['entry'] ) ) {
    echo $profile['entry'][0]['displayName'];
}