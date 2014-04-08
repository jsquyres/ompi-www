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
<!-- Generated by Doxygen 1.8.2 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li class="current"><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li><a href="functions.php"><span>Data&#160;Fields</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Data Structure Index</div>  </div>
</div><!--header-->
<div class="contents">
<div class="qindex"><a class="qindex" href="#letter_H">H</a></div>
<table style="margin: 10px; white-space: nowrap;" align="center" width="95%" border="0" cellspacing="0" cellpadding="0">
<tr><td rowspan="2" valign="bottom"><a name="letter_H"></a><table border="0" cellspacing="0" cellpadding="0"><tr><td><div class="ah">&#160;&#160;H&#160;&#160;</div></td></tr></table>
</td><td valign="top"><a class="el" href="a00017.php">hwloc_distances_s</a>&#160;&#160;&#160;</td><td valign="top"><a class="el" href="a00021.php">hwloc_obj_info_s</a>&#160;&#160;&#160;</td><td valign="top"><a class="el" href="a00025.php">hwloc_obj_attr_u::hwloc_pcidev_attr_s</a>&#160;&#160;&#160;</td><td valign="top"><a class="el" href="a00029.php">hwloc_topology_support</a>&#160;&#160;&#160;</td></tr>
<tr><td valign="top"><a class="el" href="a00018.php">hwloc_obj_attr_u::hwloc_group_attr_s</a>&#160;&#160;&#160;</td><td valign="top"><a class="el" href="a00022.php">hwloc_obj_memory_s::hwloc_obj_memory_page_type_s</a>&#160;&#160;&#160;</td><td valign="top"><a class="el" href="a00026.php">hwloc_topology_cpubind_support</a>&#160;&#160;&#160;</td><td></td></tr>
<tr><td valign="top"><a class="el" href="a00015.php">hwloc_obj_attr_u::hwloc_bridge_attr_s</a>&#160;&#160;&#160;</td><td valign="top"><a class="el" href="a00019.php">hwloc_obj</a>&#160;&#160;&#160;</td><td valign="top"><a class="el" href="a00023.php">hwloc_obj_memory_s</a>&#160;&#160;&#160;</td><td valign="top"><a class="el" href="a00027.php">hwloc_topology_discovery_support</a>&#160;&#160;&#160;</td><td></td></tr>
<tr><td valign="top"><a class="el" href="a00016.php">hwloc_obj_attr_u::hwloc_cache_attr_s</a>&#160;&#160;&#160;</td><td valign="top"><a class="el" href="a00020.php">hwloc_obj_attr_u</a>&#160;&#160;&#160;</td><td valign="top"><a class="el" href="a00024.php">hwloc_obj_attr_u::hwloc_osdev_attr_s</a>&#160;&#160;&#160;</td><td valign="top"><a class="el" href="a00028.php">hwloc_topology_membind_support</a>&#160;&#160;&#160;</td><td></td></tr>
<tr><td></td><td></td><td></td><td></td><td></td></tr>
</table>
<div class="qindex"><a class="qindex" href="#letter_H">H</a></div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
