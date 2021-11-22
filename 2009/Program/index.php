<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <title>TAIC PART :: Testing: Academic &amp; Industrial Conference - Program</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=iso-8859-1" />
    <link href="/_assets/2008.css" rel="stylesheet" type="text/css" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
<script language="Javascript 1.2"
type="text/javascript">
function show(id) 
{
	el = document.getElementById(id);
	if (el.style.display == 'none')
	{
		el.style.display = '';
		el = document.getElementById('more' + id);
		el.innerHTML = 'less info...';
	} else {
		el.style.display = 'none';
		el = document.getElementById('more' + id);
		el.innerHTML = 'more info...';
	}
}
</script>
</head>
<body>
<div id="container_top">
<!-- Tab Menu -->
        <?php
            $path ='/home/taicpart/www/www2009/_assets/php';
            set_include_path(get_include_path() . PATH_SEPARATOR . $path);
            require_once("tabmenuJAN2008.php");
        ?>
<!-- End Tab Menu -->
</div>

<div id="story" align="center">

<!-- This is the new material -->

<!-- <p><b>10:00</b> 	Arrival and Coffee </p> -->

<!--  <label class="indent">
    <b>Exploring the relationship of a file's history and its
    fault-proneness: An empirical study</b> Timea Illes-Seifert and
    Barbara Paech
  </label> -->

<h1>Day One - Friday, September 4, 2009</h1>

<p><b>9:00</b> Arrival and Coffee </p>

<p><b>9:40</b> Welcome to TAIC PART 2009
<br> <b class="indent">Session Chair: Leonardo Bottaci </b> 
</p>

<p><b>10:00</b> Keynote Address: <a href = "http://research.microsoft.com/en-us/people/nikolait/">Nikolai Tillmann</a>, Microsoft
Research, USA
<a id="moreKeyNoteOne"
onclick="javascript:show('KeyNoteOne');return false;"
href="index.php" target="_new">more info...</a>

<div id="KeyNoteOne" style="display: none">

<div class="keynote">
<p><b>Parameterized Unit Testing with Pex: Automated White Box Testing
for .NET</b></p> 

<p><b>Abstract</b></p>

<p class="overmore">
I will talk about how automated program analysis techniques can be
combined with unit testing to develop more thoroughly tested code in
less time. First, the developer writes Parameterized Unit Tests
(PUTs) instead of traditional unit tests. PUTs are algebraic
specifications written as code, describing the behavior of a program
from a client's point of view. Then Pex, an incubation project for
Visual Studio developed at Microsoft Research, analyzes the PUTs
together with the code under test. Pex computes test inputs that will
trigger different program behaviors. The result is a traditional test
suite that often achieves high code coverage and may expose bugs. To
this end, Pex performs dynamic symbolic execution, where the program
is executed multiple times with different concrete inputs, while the
taken execution paths are monitored at the instruction level. A
constraint solver computes new concrete test inputs that will
exercise different execution paths. Pex has been used in Microsoft to
test core .NET components. Pex is publicly available, enabling a new
software development and testing experience.
</p>

<p><b>Biography</b></p>

<p>
Nikolai Tillmann is a Principal Research Software Design Engineer at
Microsoft Research. He is currently leading the Pex project - a white
box test generation framework for .NET applications based on
parameterized unit testing, dynamic symbolic execution, an SMT
solver, and an integrated development and testing experience in
Visual Studio. Previously he worked on AsmL, an executable modeling
language, and Spec Explorer, a model-based testing tool. His research
interests include program specification, analysis, testing, and
verification.  He received his M.S. (Diplom) in Computer Science from
the Technical University of Berlin in 2000.
</p>
</div>

</div>

</p>

<p><b>11:00</b> <b class="session">Paper Session
One - Research:</b> <em class="heavy">Adequacy and Oracles</em>
<br> <b class="indent">Session Chair: Paul Strooper</b> 
</p>

<label class="indent">
   Ruilian Zhao and Zheng Li <br>
   <b>Boundary Value Testing Using Integrated Circuit Fault Detection
   Rule</b>
</label> <br>

<label class="indent">
  Dae Sung Kim Park, Claudio de la Riva, and Javier Tuya <br>
  <b>A Partial Test Oracle for XML Query Testing</b> 
</label><br>

<label class="indent">
  W. B. Langdon, Mark Harman, and Yue Jia <br>
  <b>Multi-Objective Higher Order Mutation Testing with Genetic
  Programming</b>
</label> 

<p><b>12.30</b> Lunch</p>

<p><b>1:45</b> Walk</p>

<p><b>3:00</b> Tea</p>

<p><b>3.30</b> <b class="session">Paper Session Two - Research and
Tools:</b>
<em class="heavy">Selection and Generation</em>
<br> <b class="indent">Session Chair: Michael Hennell</b> 
</p>

<label class="indent">
  Anthony J H Simons and Wenwen Zhao <br> 
    <b>Dynamic Analysis of Algebraic Structure to Optimize Test
   Generation and Test Case Selection</b>
</label> <br>

<label class="indent">
  D. Hoffman, L. Sobotkiewicz, H. Wang, P. Strooper, G. Bazdell, and
  B. Stevens <br>

   <b>Test Generation with Context Free Grammars and Covering
   Arrays</b>
</label>

<p><b>4:30</b> <b class="session">Paper Session Three - Industry
Challenge and Experience Reports:</b> <em class = "heavy">Integration
Testing</em>
<br> <b class="indent">Session Chair: Marc Roper</b> 
</p>

<label class="indent">
  Michaela Greiler, Hans-Gerhard Gross, and Khalid Adam Nasr <br>
   
   <b>Runtime Integration and Testing for Highly Dynamic Service-Oriented
   ICT Solutions: An Industry Challenges Report</b>
</label> <br>

<label class="indent">
Sebastian Wieczorek, Alin Stefanescu, and Ina Schieferdecker <br>
   
   <b>Model-based Integration Testing of Enterprise Services</b> 
</label> 

<p><b>5:30</b> <b class="session">Paper Session Four - Research and
Experience Reports:</b> <em class="heavy">Models and
Generation</em>
<br> <b class="indent">Session Chair: Anthony J H Simons </b> 
</p>

<label class="indent">
Abdul Salam Kalaji, Robert M. Hierons, and Stephen Swift<br>

   <b>A Search-Based Approach for Automatic Test Generation from
   Extended Finite State Machines (Fast Abstract)</b>
</label> <br>

<label class="indent">
Vladimir Entin, Sebastian Siegl, Andreas Kern, Michael Reichel, and
Klaus Meyer-Wegener <br>

   <b>A Scenario-Centric Approach for the Definition of the Formal
   Test Specifications of Reactive Systems</b>
</label> <br>

<label class="indent">

  Gordon Fraser and Angelo Gargantini <br>

  <b>An Evaluation of Specification Based Test Generation Techniques
  using Model Checkers</b>
</label> 

<p><b>6:45</b> Closing Remarks</p>

<p><b>7:15</b> Dinner</p>

<h1>Day Two - Saturday, September 5, 2009</h1>

<p><b>8:15</b> Breakfast</p>

<p><b>9:00</b> Keynote Address: <a href = "http://www.quviq.com/">John Hughes</a>, Chalmers University and QuviQ AB, Sweden
<a id="moreKeyNoteTwo"
onclick="javascript:show('KeyNoteTwo');return false;"
href="index.php" target="_new">more info...</a>

<div id="KeyNoteTwo" style="display: none">

<div class="keynote">
<p><b>Property Based Testing with QuickCheck</b></p> 

<p><b>Abstract</b></p>

<p class="overmore">
QuickCheck is a random testing tool which tests programs against
formal specifications expressed in a functional programming language,
reducing failing tests to minimal counterexamples from which errors
can easily be diagnosed.  We use functional programming both as a tool
for modeling the system under test, and as a meta-language in which
domain specific testing languages can easily be embedded. In this
talk, I will demonstrate the QuickCheck tool itself and the
property-driven development style it supports, describe some
industrial applications, and present some recent results in
state-machine testing and specification generation from the FP7
project ProTest.
</p>

<p><b>Biography</b></p> 
<p>
John is a well-known researcher in the area of functional programming
and is the author of more than 50 research papers. He was appointed to
a Chair at the age of 27 by the University of Glasgow, and since 1992
has held a Chair in Computer Science at Chalmers University,
Gothenburg. He now divides his time between Chalmers and QuviQ AB, a
company that he founded with Thomas Arts in May 2006.
</p>
</div>

</div>

</p>

<p><b>10:00</b> <b class="session">Paper Session Five - Research:</b>
<em class="heavy">Generation and Localization</em>
<br> <b class="indent">Session Chair: Bill Langdon</b> 
</p>

<label class="indent">
   Kiran Lakhotia, Phil McMinn, and Mark Harman <br>
  
   <b>Automated Test Data Generation for Coverage: Haven't We Solved
   This Problem Yet?</b>
</label> <br>

<label class="indent">
  D. Hoffman, H. Wang, M. Chang, D. Ly-Gagnon <br>

  <b>Grammar Based Testing of HTML Injection Vulnerabilities in RSS
  Feeds</b>
</label> 

<p><b>11:00</b> Coffee</p>

<p><b>11:30</b><b class="session"> Paper Session Six - Fast
Abstracts:</b> <em class="heavy">Models and Oracles</em>
<br> <b class="indent">Session Chair: Gordon Fraser</b> 
</p>

<label class="indent">
  Tamim Ahmed Khan and Reiko Heckel <br>

  <b>A Methodology for Model-Based Regression Testing of Web Services</b>   
</label> <br>

<label class="indent">
  Marc Roper<br>

   <b>Artificial Immune Systems, Danger Theory, and the Oracle Problem</b>
</label> <br> 

<label class="indent">
  Muhammad Naeem Irfan<br>

  <b>Heuristics for Improving Model Learning Based Software Testing</b> 
</label> <br>

<label class="indent">
Leonardo Bottaci <br>

   <b>A Language for Generalising Unit Tests</b> 
</label> 

<p><b>12:30</b> Feedback Session for Fast Abstracts
<br> <b class="indent">Session Chair: Gordon Fraser</b> 
</p>

<p><b>1:00</b> Lunch</p>

<p><b>2:00</b> <b class="session">Paper Session Seven -
Research:</b> <em class="heavy">Integration and Generation</em>
<br> <b class="indent">Session Chair: Leonardo Bottaci </b> 
</p>

<label class="indent">
  Bernhard Peischl, Naveed Riaz, and Franz Wotawa <br> 

   <b>Test Patterns for Verilog Design Error Localization</b> 
</label> <br>

<label class="indent">
  Lars Borner and Barbara Paech <br>
   
   <b>Using Dependency Information to Select the Test Focus within the
   Integration Testing Process</b>
</label> <br>

<label class="indent"> 
  Nikolai Kosmatov <br>

   <b>On Complexity of All-Paths Test Generation: from Practice to
   Theory</b>
</label> <br>

<label class="indent">
  Tobias Hartmann <br>

   <b>Model-Based Testing of End-to-End Chains using Domain Specific
   Languages</b>
</label>

<p><b>4:00</b> Tea</p>

<p><b>4:30</b> Tools Session
<br> <b class="indent">Session Chair: Neil Walkinshaw </b> 
</p>

<label class="indent">
   <b>Presentation from LDRA</b>
</label> <br>

<label class="indent">
   <b>Presentation from TechExcel</b>
</label>

<p><b>6:30</b> Closing Remarks</p>

<p><b>7:15</b> Conference Banquet</p>

<h1>Day Three - Sunday, September 6, 2009</h1>

<p><b>9:00</b> Breakfast</p>

<p><b>9:45</b> <b class="session">Paper Session Eight -
Research:</b> <em class="heavy">Economics and Effectiveness</em>
<br> <b class="indent">Session Chair: Daniel Hoffmann </b> 
</p>
     
<label class="indent">
  Harry Sneed <br>

    <b>Value-driven testing</b> 
</label> <br>

<label class="indent">
  Christopher D. Thomson, Mike Holcombe, Anthony J H Simons<br>

    <b>What Makes Testing Work: Nine Case Studies of Software
    Development Teams</b>
</label> 

<p><b>10:45</b> Coffee</p>

<p><b>11:15</b> <b class="session">Paper Session Nine - Research and
Experience:</b> <em class="heavy">New Domains</em>
<br> <b class="indent">Session Chair: Neil Walkinshaw </b> 
</p>

<label class="indent">
  Emine Gokce Aydal<br>

    <b>
      Automation of Model-Based Testing through Model
      Transformations </b>
</label> <br>

<label class="indent">
  Abel Marrero Pérez and Stefan Kaiser <br>

   <b>Integrating Test Levels for Embedded Systems</b> 
</label> 

<p><b>12:15</b> Challenge Session: Connecting Theory and Practice
<br> <b class="indent">Session Chair: Leonardo Bottaci </b> 
</p>

<p><b>1:00</b> Lunch</p>

<p><b>2:00</b> <b class="session">Paper Session Ten -
Research:</b> <em class="heavy">Testing and Security</em>
<br> <b class="indent">Session Chair: Harry Sneed </b> 
</p>

<label class="indent">

  Ramona Duelks, Falk Salewski, and Stefan Kowalewski <br>

   <b>A real-time test and simulation environment based on standard FPGA
   hardware</b>
</label> <br>

<label class="indent">
  Sven Türpe and Jörn Eichler<br>

   <b>Testing Production Systems Safely: Common Precautions in
   Penetration Testing</b>
</label>

<p><b>3:00</b> Tea</p>

<p><b>4:00</b> Closing Remarks and Next Steps</p>

<div style="margin-top:.3in" align="left">

  <div align="justify">

    <b>Presentation Details:</b> Full papers have a twenty-five
      minute presentation followed by five minutes of questions.  Fast
      abstracts have ten minutes for presentation and five minutes for
      questions. </p>

  </div>

</div>

<br>

<?php 
	$path ='/home/taicpart/www/www2008/_assets/php';
        set_include_path(get_include_path() . PATH_SEPARATOR . $path);
	include_once("analyticstracking.php") 
?>

<style type="text/css">
  .centeredImage
    {
    text-align:center;
    display:block;
    margin-left: auto;
    margin-right: auto;
    width: 820px;
    }
</style>
        <img class="centeredImage" src="../_assets/images/longline.jpg">

</body>
</html>
