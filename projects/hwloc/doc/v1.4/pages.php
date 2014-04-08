<?php
$topdir = "../../../..";
# Note that we must use the PHP "$$" indirection to assign to the
# "title" variable, because if we list "$ title" (without the space)
# in this file, Doxygen will replace it with a string title.
$ver = basename(getcwd());
$thwarting_doxygen_preprocessor = "title";
$$thwarting_doxygen_preprocessor = "Portable Hardware Locality (hwloc) Documentation: $ver";
$header_include_file = "$topdir/projects/hwloc/doc/$ver/www.open-mpi.org-css.inc";

include_once("$topdir/projects/hwloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/code.inc");
?>
<!-- Generated by Doxygen 1.7.6.1 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li class="current"><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
</div>
<div class="header">
  <div class="headertitle">
<div class="title">Related Pages</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock">Here is a list of all related documentation pages:</div><ul>
<li><a class="el" href="a00001.php">Terms and Definitions</a>
</li>
<li><a class="el" href="a00002.php">Command-Line Tools</a>
</li>
<li><a class="el" href="a00003.php">Environment Variables</a>
</li>
<li><a class="el" href="a00004.php">CPU and Memory Binding Overview</a>
</li>
<li><a class="el" href="a00005.php">I/O Devices</a>
</li>
<li><a class="el" href="a00006.php">Multi-node Topologies</a>
</li>
<li><a class="el" href="a00007.php">Importing and exporting topologies from/to XML files</a>
</li>
<li><a class="el" href="a00008.php">Interoperability With Other Software</a>
</li>
<li><a class="el" href="a00009.php">Thread Safety</a>
</li>
<li><a class="el" href="a00010.php">Embedding hwloc in Other Software</a>
</li>
<li><a class="el" href="a00011.php">Frequently Asked Questions</a>
</li>
</ul>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
