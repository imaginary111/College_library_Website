<?php 

/*$data = array('sortType' => 'plf-f',
	'count' => '20',
	'offset' => '0',
	'searchString' => 'F-ID(60103918)',
	'sortType' => 'plf-f',
	'origin' => 'resultslist',
	'originationType' => 'aff',
	'clusterRowDisplayCount' => '10',
	'resultsPerPage' => '20',
	'resultsCount' => '522',
	'eid' => 'null',
	'listId' => '',
	'cite' => '',
	'citedAuthorId' => '',
	'citingId' => '',
	'refeid' => '',
	'ref' => '',
	'recent' => '');
$string = http_build_query($data);

$ch = curl_init('https://www.scopus.com/results/results.url?sort=plf-f&src=s&sid=883492D5247E9C896A19189B536C9332.euC1gMODexYlPkQec4u1Q%3a310&sot=aff&sdt=a&sl=15&s=AF-ID%2860103918%29&origin=AffiliationProfile&editSaveSearch=&txGid=883492D5247E9C896A19189B536C9332.euC1gMODexYlPkQec4u1Q%3a31');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
echo 'working'.curl_exec($ch);
curl_close($ch);*/

/*$url = "https://www.scopus.com/results/results.url?sort=plf-f&src=s&sid=883492D5247E9C896A19189B536C9332.euC1gMODexYlPkQec4u1Q%3a310&sot=aff&sdt=a&sl=15&s=AF-ID%2860103918%29&origin=AffiliationProfile&editSaveSearch=&txGid=883492D5247E9C896A19189B536C9332.euC1gMODexYlPkQec4u1Q%3a31";

$opts = array('http' =>
    array(
        'method' => 'GET',
        'max_redirects' => '0',
        'ignore_errors' => '1'
    )
);

$context = stream_context_create($opts);
$stream = fopen($url, 'r', false, $context);

// header information as well as meta data
// about the stream
var_dump(stream_get_meta_data($stream));

// actual data at $url
var_dump(stream_get_contents($stream));
fclose($stream);
*/

$postdata = http_build_query(
    array('sortType' => 'plf-f',
    'count' => '20',
	'offset' => '0',
	'searchString' => 'F-ID(60103918)',
	'origin' => 'resultslist',
	'originationType' => 'aff',
	'clusterRowDisplayCount' => '10',
	'resultsPerPage' => '20',
	'resultsCount' => '522',
	'eid' => 'null',
	'listId' => '',
	'cite' => '',
	'citedAuthorId' => '',
	'citingId' => '',
	'refeid' => '',
	'ref' => '',
	'recent' => '')
);

$opts = array('http' =>
    array(
        'method'  => 'POST',
        'content' => $postdata,
        'max_redirects' => '0',
        'ignore_errors' => '1'
    )
);

$context  = stream_context_create($opts);

echo htmlentities(file_get_contents('https://www.scopus.com/results/results.url?sort=plf-f&src=s&sid=883492D5247E9C896A19189B536C9332.euC1gMODexYlPkQec4u1Q%3a310&sot=aff&sdt=a&sl=15&s=AF-ID%2860103918%29&origin=AffiliationProfile&editSaveSearch=&txGid=883492D5247E9C896A19189B536C9332.euC1gMODexYlPkQec4u1Q%3a31'),false,$context);
?>