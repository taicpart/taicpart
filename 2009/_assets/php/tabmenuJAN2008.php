<?php
    /*************************************************************/
    #Create Header
    print "<div id=\"banner\">\n";
    print "<a href=\"http://www2009.taicpart.org\">\n";
    print "<img src=\"/_assets/images/banner2009.jpg\" width=\"749\" height=\"130\" alt=\"/_assets/images/banner2008.jpg\" >";
    print "</img></a>\n";
    print "</div>\n";
    /*************************************************************/
    #Create Tab Menu
    $prTB = "";
    $idTB = "";
    $siTB = "";
    $wuTB = "";
    $spTB = "";
    $psTB = "";
    $vTB = "";
    $faTB = "";
    $rgTB = "";
    $sponTD = "";
    #$presTB = "";
    #$sdTB = "";
    #$phTB = "";
    $activeTAB = curPageURL();
    if(strcmp($activeTAB, "ImportantDates") == 0)
    {
        $idTB = "class=\"active\"";
    }
    else if(strcmp($activeTAB, "FastAbstracts") == 0)
    {
        $faTB = "class=\"active\"";
    }
    else if(strcmp($activeTAB, "Register") == 0)
    {
        $rgTB = "class=\"active\"";
    }
    elseif(strcmp($activeTAB, "Connections") == 0)
    {
        $siTB = "class=\"active\"";
    }
     elseif(strcmp($activeTAB, "WorkshopUpdates") == 0)
    {
        $wuTB = "class=\"active\"";
    }
  elseif(strcmp($activeTAB, "CallForPapers") == 0)
    {
        $psTB = "class=\"active\"";
    }
  elseif(strcmp($activeTAB, "SubmitPaper") == 0)
    {
        $spTB = "class=\"active\"";
    }
   elseif(strcmp($activeTAB, "Organization") == 0)
    {
        $vTB = "class=\"active\"";
    }
elseif(strcmp($activeTAB, "Program") == 0)
    {
        $prTB = "class=\"active\"";
    }
elseif(strcmp($activeTAB, "Sponsors") == 0)
    {
        $sponTB = "class=\"active\"";
    }
#     elseif(strcmp($activeTAB, "photos") == 0)
#    {
#        $phTB = "class=\"active\"";
#    }
    else
    {
        $homeTB = "class=\"active\"";
    }

    print "<ul id=\"tabmenu\">\n";
    print "<li><a $homeTB href=\"../index.php\">Home</a></li>\n";
    print "<li><a $idTB href=\"/ImportantDates/\">Dates</a></li>\n";
    print "<li><a $prTB href=\"/Program/\">Program</a></li>\n";
    print "<li><a $rgTB href=\"/Register/\">Register</a></li>\n";
    print "<li><a $psTB href=\"/CallForPapers/\">CFP</a></li>\n";
    print "<li><a $spTB href=\"/SubmitPaper/\">Submit</a></li>\n";
    print "<li><a $vTB href=\"/Organization/\">Organization</a></li>\n";
    print "<li><a $sponTB href=\"/Sponsors/\">Sponsors</a></li>\n";
    print "<li><a $wuTB href=\"/WorkshopUpdates/\">Updates</a></li>\n";

    #print "<li><a $presTB href=\"2008/presentations/\">Presentations & Posters</a></li>\n";
    #print "<li><a $sdTB href=\"2008/speeddating/\">Speed Dating</a></li>\n";
    #print "<li><a $phTB href=\"2008/photos/\">Photos</a></li>\n";
    print "</ul>\n";
#print "</div>\n";
    
    #-------------------------------------------#
    #Function Returns the Current Page's URL
    #-------------------------------------------#
    function curPageURL() 
    {
        #$pageURL = 'http';
        #if ($_SERVER["HTTPS"] == "on") 
        #{
        #$pageURL .= "s";
        #}
        #$pageURL .= "://";
        #if ($_SERVER["SERVER_PORT"] != "80") 
        #{
        #$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
        #} 
        #else 
        #{
        #$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
        $pageURLarray = explode("/", $_SERVER["REQUEST_URI"]);
        $pageURL = $pageURLarray[1];
        #}
         return $pageURL;
    }

?>
