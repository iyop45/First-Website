include("Snoopy.class.php");
 
$snoopy = new Snoopy;
 
// set browser and referer:
$snoopy->agent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)";
$snoopy->referer = "http://www.google.com/";
 
// set an raw-header:
$snoopy->rawheaders["Pragma"] = "no-cache";
 
// set some internal variables:
$snoopy->maxredirs = 2;
$snoopy->offsiteok = false;
$snoopy->expandlinks = false;
 
// fetch the text of the website www.google.com:
if($snoopy->fetchtext("http://dofous.no-ip.info/index.php/")){ 
    // other methods: fetch, fetchform, fetchlinks, submittext and submitlinks
 
    // response code:
    print "response code: ".$snoopy->response_code."<br/>\n";
 
    // print the headers:
 
    print "<b>Headers:</b><br/>";
    while(list($key,$val) = each($snoopy->headers)){
        print $key.": ".$val."<br/>\n";
    }
 
    print "<br/>\n";
 
    // print the texts of the website:
    print "<pre>".htmlspecialchars($snoopy->results)."</pre>\n";
 
}
else {
    print "Snoopy: error while fetching document: ".$snoopy->error."\n";
}