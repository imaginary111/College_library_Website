<?php
$con = mysqli_connect("localhost","root","","library") or die("Connection not established!!");
$results = file_get_contents('3.html');
$results = preg_replace('/\s(1,)/', ' ', $results);
$records = preg_split('/<span class="docTitle">/', $results);
for($i=1;$i<count($records);$i++){
    //for Title
    preg_match('/">(.*)<\/a>/', $records[$i],$newResultsTitle);
    print $i.". ".$newResultsTitle[1]."<br>";
	//Scopus ID
    /*preg_match('/&sid=(.*)&sot=/', $records[$i],$newResultsSID);
    $newResultsSID = urldecode($newResultsSID[1]);
	print "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspScopusID: ".$newResultsSID."<br>";*/
    //for year
    preg_match('/<label class="hidden-label">Year the Document was Publish<\/label>\n<span class="">(.*)<\/span>\n<\/div>/sU',$records[$i],$newResultsYear);
    print '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspYear of Publication: '.$newResultsYear[1].'<br>';
    //authors
    preg_match('/<label class="hidden-label">Authors of Document<\/label>\n*<span class="">\n*(.*)<\/a>\s*\n*<\/span>/Us', $records[$i],$newResultsAuthor);
	$newResultsAuthor = preg_replace('/<\/?a(.*)>/Us','',$newResultsAuthor[1]);
	print "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAuthors: ".$newResultsAuthor.'<br>';
    //abstract
    if (preg_match('/<span><span class="txt">(.*)<\/span><\/span><\/div>/', $records[$i],$newResultsAbs)){
    print "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAbstract: ".$newResultsAbs[1].'<br>';
    }else{
        preg_match('/<div id="previewAbstract[0-9]*"><span>(.*)<\/span><\/div>/s', $records[$i],$newResultsAbs);
        print "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAbstract: ".$newResultsAbs[1].'<br>';
    }
    //for link
    preg_match('/<a href="(.*)"\s/U', $records[$i],$newResultsLink);
    print '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="'.$newResultsLink[1].'">Go to full page</a><br>';
    $query = 'INSERT INTO scopusresearch (r_Title,r_Year,r_Author,r_Abstract,r_Link) VALUES (\''.addslashes($newResultsTitle[1]).'\',\''.addslashes($newResultsYear[1]).'\',\''.addslashes($newResultsAuthor).'\',\''.addslashes($newResultsAbs[1]).'\',\''.addslashes($newResultsLink[1]).'\')';
    if(mysqli_query($con,$query)){
        continue;
    }
    else{
        echo '<br>JaiNumber:'.$i.' - '.mysqli_error($con).' <br>';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form>
	
</form>
</body>
</html>