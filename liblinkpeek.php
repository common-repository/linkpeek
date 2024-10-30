<?php

# signup for an APIKEY here: https://linkpeek.com/signup
DEFINE( 'APIKEY', '' );
DEFINE( 'SECRET', '' );

function api_v1( $uri, $size = '336', $apikey = APIKEY, $secret = SECRET ){
    /***LinkPeek.com API v1 helper function***/
    $token = md5( $secret . $uri . $size );
    $uri = urlencode( $uri ); 
    return "http://linkpeek.com/api/v1?uri=$uri&apikey=$apikey&token=$token&size=$size";
}

function test(){
    /***LinkPeek.com API tests***/
    print api_v1( 'lostquery.com' );
    print "<br/>";
    print api_v1( 'http://lostquery.com', '200x400' );
    print "<br/>";
    print api_v1( 'http://lostquery.com', '400x200' );
    print "<br/>";
}

?>
