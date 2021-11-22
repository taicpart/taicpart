<?php
	include("_proj/Proj.php");
	$page =& Toucan::create("Proj_TAICPART_Page", array("url"=>"."));
	print $page->getHeaderHTML();
?>
	
	<div class="right_column">
		
		<div class="photo">
			<img src="images/cumberland2.jpg" width="290" height="187" alt="" /><br />
			Cumberland Lodge, Windsor, UK
		</div>

		<h2>In collaboration with</h2>
		
			<a href="http://www.ieee.org" target="_blank"><img src="images/ieee.gif" width="101" height="125" alt="IEEE" border="0" /></a>
			<a href="http://www.computer.org/ " target="_blank"><img src="images/ieee-cs.gif" width="203" height="125" alt="IEEE Computer Society" border="0" /></a>


		<br />&nbsp;		
		<h2>Sponsored by</h2>
		
		<div class="sponsors">
			<a href="http://www.epsrc.ac.uk" target="_blank"><img src="images/epsrc.gif" width="250" height="111" alt="EPSRC - Engineering and Physical Sciences Research Council" border="0" /></a>

			<a href="http://www.daimlerchrysler.com" target="_blank"><img src="images/daimlerchrysler.gif" width="200" height="29" alt="DaimlerChrysler" border="0" /></a>
			<a href="http://www.ericsson.com" target="_blank"><img src="images/ericsson.gif" width="150" height="34" alt="Ericsson" border="0" /></a>

			<br />
			<a href="http://www.ipl.com" target="_blank"><img src="images/ipl.gif" width="100" height="58" alt="IPL" border="0" /></a>
			<a href="http://www.ldra.co.uk" target="_blank"><img src="images/ldra.gif" width="110" height="59" alt="LDRA" border="0" /></a> 

			<a href="http://www.motorola.com" target="_blank"><img src="images/motorola.gif" width="110" height="69" alt="Motorola" border="0" /></a>
			<a href="http://www.vizuri.co.uk/home/default.html" target="_blank"><img src="images/vizuri.gif" width="110" height="68" alt="Vizuri" border="0" /></a>
		</div>		
	</div>


	<h1>TAIC PART 2009</h1>

        <p>See the <a href="http://www.taicpart.org">TAIC PART 2009</a> website for details of the event this year, and latest news.</p> 

	<h1>TAIC PART 2006 rated 'Outstanding'</h1>
			
	<p>
	TAIC PART 2006 was assessed outstanding and internationally leading in
	all categories by the EPSRC, who provided significant funding to hold the event.
	The criteria included research quality, planning and practice, scientific impact,
	communication of output and benefits to society.
	</p>		
 			
 	<h1>What is TAIC PART?</h1>		
 			
	<p>
	TAIC PART is a testing workshop that aims to forge collaboration between
	industry and academia on the challenging and exciting problem of
	software testing. It is sponsored by representatives of both industry and
	academia, bringing together commercial and industrial software
	developers and users with academic researchers working on the theory and practice
	of software testing.
    </p>

	<p>
	The conference will be held at <a href="http://www.cumberlandlodge.ac.uk/" target="_blank">Cumberland Lodge</a>, Windsor, UK, 29th-31st August, 2006.
	Cumberland lodge is a former royal residence given to the nation
	in 1946 by the late Queen Mother. It is an ideal setting for a productive and enjoyable
	conference, providing world-class conference facilities in an ideal
	location, which resonates with centuries of historical significance, dating back to
	the mid 17th century.
	</p>
	
	
	<h2>Important Dates</h2>
	<ul>
	<li>Deadline for submission of papers:
		<ul style="padding-top: 2px;">
			<li class="sub"><strong>Abstract and paper submission is now closed</strong></li>
			<li class="sub"><em>Abstract of paper by</em> Friday 21st April 2006</li>
			<li class="sub"><em>Completed paper to follow by</em> Friday 28th April 2006<br />&nbsp;</li>
		</ul>
		</li>
	<li>Notification of acceptance: <br /> <strong>Monday 29th May 2006</strong></li>
	<li>Workshop: <br /> <strong>Tuesday 29th - Thursday 31st August, 2006</strong></li>
	</ul>
	
	<p>Join the <a href="mailinglist.php">mailing list</a> to stay in touch with the latest developments (call for papers, submission deadlines etc.).</p>
	
	<h2>Organisation</h2>
	<ul>
		<li><strong>General chair</strong><br />
			<a href="http://www.dcs.kcl.ac.uk/staff/mark/" target="_blank">Professor Mark Harman</a><br />
			<em>King's College London</em></li>		
		<li><strong>Program Committee Chair</strong><br />
			<a href="http://www.dcs.shef.ac.uk/~phil/" target="_blank">Dr Phil McMinn</a><br />
			<em>University of Sheffield</em></li>		
		<li><strong>Local Arrangements Chair</strong><br />
			<a href="http://www.dcs.kcl.ac.uk/staff/zheng/" target="_blank">Zheng Li</a><br />
			<em>King's College London</em></li>
		<li><strong>PhD Symposium Chair</strong><br />
			<a href="http://www.cs.man.ac.uk/~willmord/" target="_blank">David Willmor</a><br />
			<em>University of Manchester</em></li>
	</ul>	

<?php
	print $page->getFooterHTML();
?>