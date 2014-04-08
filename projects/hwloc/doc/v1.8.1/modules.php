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
<!-- Generated by Doxygen 1.8.6 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li class="current"><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Modules</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock">Here is a list of all modules:</div><div class="directory">
<table class="directory">
<tr id="row_0_" class="even"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00072.php" target="_self">API version</a></td><td class="desc"></td></tr>
<tr id="row_1_"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00073.php" target="_self">Object Sets (hwloc_cpuset_t and hwloc_nodeset_t)</a></td><td class="desc"></td></tr>
<tr id="row_2_" class="even"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00074.php" target="_self">Object Types</a></td><td class="desc"></td></tr>
<tr id="row_3_"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00075.php" target="_self">Object Structure and Attributes</a></td><td class="desc"></td></tr>
<tr id="row_4_" class="even"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00076.php" target="_self">Topology Creation and Destruction</a></td><td class="desc"></td></tr>
<tr id="row_5_"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00077.php" target="_self">Topology Detection Configuration and Query</a></td><td class="desc"></td></tr>
<tr id="row_6_" class="even"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00078.php" target="_self">Object levels, depths and types</a></td><td class="desc"></td></tr>
<tr id="row_7_"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00079.php" target="_self">Manipulating Object Type, Sets and Attributes as Strings</a></td><td class="desc"></td></tr>
<tr id="row_8_" class="even"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00080.php" target="_self">CPU binding</a></td><td class="desc"></td></tr>
<tr id="row_9_"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00081.php" target="_self">Memory binding</a></td><td class="desc"></td></tr>
<tr id="row_10_" class="even"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00082.php" target="_self">Modifying a loaded Topology</a></td><td class="desc"></td></tr>
<tr id="row_11_"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00083.php" target="_self">Building Custom Topologies</a></td><td class="desc"></td></tr>
<tr id="row_12_" class="even"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00084.php" target="_self">Exporting Topologies to XML</a></td><td class="desc"></td></tr>
<tr id="row_13_"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00085.php" target="_self">Finding Objects inside a CPU set</a></td><td class="desc"></td></tr>
<tr id="row_14_" class="even"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00086.php" target="_self">Finding Objects covering at least CPU set</a></td><td class="desc"></td></tr>
<tr id="row_15_"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00087.php" target="_self">Looking at Ancestor and Child Objects</a></td><td class="desc"></td></tr>
<tr id="row_16_" class="even"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00088.php" target="_self">Looking at Cache Objects</a></td><td class="desc"></td></tr>
<tr id="row_17_"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00089.php" target="_self">Finding objects, miscellaneous helpers</a></td><td class="desc"></td></tr>
<tr id="row_18_" class="even"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00090.php" target="_self">Distributing items over a topology</a></td><td class="desc"></td></tr>
<tr id="row_19_"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00091.php" target="_self">CPU and node sets of entire topologies</a></td><td class="desc"></td></tr>
<tr id="row_20_" class="even"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00092.php" target="_self">Converting between CPU sets and node sets</a></td><td class="desc"></td></tr>
<tr id="row_21_"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00093.php" target="_self">Manipulating Distances</a></td><td class="desc"></td></tr>
<tr id="row_22_" class="even"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00094.php" target="_self">Finding I/O objects</a></td><td class="desc"></td></tr>
<tr id="row_23_"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00095.php" target="_self">The bitmap API</a></td><td class="desc"></td></tr>
<tr id="row_24_" class="even"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00096.php" target="_self">Topology differences</a></td><td class="desc"></td></tr>
<tr id="row_25_"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00097.php" target="_self">Components and Plugins: Discovery components</a></td><td class="desc"></td></tr>
<tr id="row_26_" class="even"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00098.php" target="_self">Components and Plugins: Discovery backends</a></td><td class="desc"></td></tr>
<tr id="row_27_"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00099.php" target="_self">Components and Plugins: Generic components</a></td><td class="desc"></td></tr>
<tr id="row_28_" class="even"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00100.php" target="_self">Components and Plugins: Core functions to be used by components</a></td><td class="desc"></td></tr>
<tr id="row_29_"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00101.php" target="_self">Linux-specific helpers</a></td><td class="desc"></td></tr>
<tr id="row_30_" class="even"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00102.php" target="_self">Interoperability with Linux libnuma unsigned long masks</a></td><td class="desc"></td></tr>
<tr id="row_31_"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00103.php" target="_self">Interoperability with Linux libnuma bitmask</a></td><td class="desc"></td></tr>
<tr id="row_32_" class="even"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00104.php" target="_self">Interoperability with glibc sched affinity</a></td><td class="desc"></td></tr>
<tr id="row_33_"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00105.php" target="_self">Interoperability with OpenCL</a></td><td class="desc"></td></tr>
<tr id="row_34_" class="even"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00106.php" target="_self">Interoperability with the CUDA Driver API</a></td><td class="desc"></td></tr>
<tr id="row_35_"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00107.php" target="_self">Interoperability with the CUDA Runtime API</a></td><td class="desc"></td></tr>
<tr id="row_36_" class="even"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00108.php" target="_self">Interoperability with the NVIDIA Management Library</a></td><td class="desc"></td></tr>
<tr id="row_37_"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00109.php" target="_self">Interoperability with OpenGL displays</a></td><td class="desc"></td></tr>
<tr id="row_38_" class="even"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00110.php" target="_self">Interoperability with Intel Xeon Phi (MIC)</a></td><td class="desc"></td></tr>
<tr id="row_39_"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><a class="el" href="a00111.php" target="_self">Interoperability with OpenFabrics</a></td><td class="desc"></td></tr>
<tr id="row_40_" class="even"><td class="entry"><img src="ftv2lastnode.png" alt="\" width="16" height="22" /><a class="el" href="a00112.php" target="_self">Interoperability with Myrinet Express</a></td><td class="desc"></td></tr>
</table>
</div><!-- directory -->
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
