<?php
$con = mysqli_connect("localhost","root","","library") or die("Connection not established!!");
$results = file_get_contents('parsed\\1.json');
$results = preg_split('/\[<ResArticle>\]/', $results);
for($i=1;$i<count($results);$i++){
    //for Title
    preg_match('/\[<docTitle>\](.*)\[<\/docTitle>\]/s', $results[$i],$newResultsTitle);
    print $i.". ".$newResultsTitle[1]."<br>";
    //for year
    preg_match('/\[<pubYear>\](.*)\[<\/pubYear>\]/s', $results[$i],$newResultsYear);
    print '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspYear of Publication: '.$newResultsYear[1].'<br>';
    //authors
    preg_match('/\[<authTitle>\](.*)\[<\/authTitle>\]/s', $results[$i],$newResultsAuthor);
    print "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAuthors: ".$newResultsAuthor[1].'<br>';
    //abstract
    preg_match('/\[<preAbs>\](.*)\[<\/preAbs>\]/s', $results[$i],$newResultsAbs);
    print "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAbstract: ".$newResultsAbs[1].'<br>';
    //for link
    preg_match('/\[<titleLink>\](.*)\[<\/titleLink>\]/s', $results[$i],$newResultsLink);
    print '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="'.$newResultsLink[1].'">Go to full page</a><br>';
    $query = 'INSERT INTO scopusresearch (r_Title,r_Year,r_Author,r_Abstract,r_Link) VALUES (\''.addslashes(trim($newResultsTitle[1],"\n\r")).'\',\''.addslashes(trim($newResultsYear[1],"\n\r")).'\',\''.addslashes(trim($newResultsAuthor[1],"\n\r")).'\',\''.addslashes(trim($newResultsAbs[1],"\n\r")).'\',\''.addslashes(trim($newResultsLink[1],"\n\r")).'\')';
    if(mysqli_query($con,$query)){
        continue;
    }
    else{
        echo '<br>JaiNumber:'.$i.' - '.mysqli_error($con).' <br>';
    }
}
?>