<?php
    
    $homeTB = "";
    $cfpTB = "";
    $pcTB = "";
    $keyTB = "";
    $attTB = "";
    $presTB = "";
    $sdTB = "";
    $phTB = "";
    $activeTAB = curPageURL();
    if(strcmp($activeTAB, "callforpapers") == 0)
    {
        $cfpTB = "class=\"active\"";
    }
    elseif(strcmp($activeTAB, "programcommittee") == 0)
    {
        $pcTB = "class=\"active\"";
    }
     elseif(strcmp($activeTAB, "keynotes") == 0)
    {
        $keyTB = "class=\"active\"";
    }
  elseif(strcmp($activeTAB, "attendees") == 0)
    {
        $attTB = "class=\"active\"";
    }
   elseif(strcmp($activeTAB, "presentations") == 0)
    {
        $presTB = "class=\"active\"";
    }
    elseif(strcmp($activeTAB, "speeddating") == 0)
    {
        $sdTB = "class=\"active\"";
    }
     elseif(strcmp($activeTAB, "photos") == 0)
    {
        $phTB = "class=\"active\"";
    }
    else
    {
        $homeTB = "class=\"active\"";
    }

    print "<ul id=\"tabmenu\">";
    print "<li><a $homeTB href=\"http://www2008.taicpart.org\">Welcome</a></li>";
	print "<li><a $cfpTB href=\"2008/callforpapers/\">Call for Papers</a></li>";
	print "<li><a $pcTB href=\"2008/programcommittee/\">Program Committee</a></li>";
	print "<li><a $keyTB href=\"2008/keynotes/\">Keynote Speakers</a></li>";
	print "<li><a $attTB href=\"2008/attendees/\">Attendees</a></li>";
	print "<li><a $presTB href=\"2008/presentations/\">Presentations & Posters</a></li>";
    print "<li><a $sdTB href=\"2008/speeddating/\">Speed Dating</a></li>";
	print "<li><a $phTB href=\"2008/photos/\">Photos</a></li>";
    print "</ul>";
    print "<br><br>";
    
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
