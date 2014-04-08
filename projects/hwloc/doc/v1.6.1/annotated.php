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
      <li class="current"><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li><a href="functions.php"><span>Data&#160;Fields</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Data Structures</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock">Here are the data structures with brief descriptions:</div><div class="directory">
<div class="levels">[detail level <span onclick="javascript:toggleLevel(1);">1</span><span onclick="javascript:toggleLevel(2);">2</span>]</div><table class="directory">
<tr id="row_0_" class="even"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><img src="ftv2cl.png" alt="C" width="24" height="22" /><a class="el" href="a00017.php" target="_self">hwloc_distances_s</a></td><td class="desc">Distances between objects</td></tr>
<tr id="row_1_"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><img src="ftv2cl.png" alt="C" width="24" height="22" /><a class="el" href="a00019.php" target="_self">hwloc_obj</a></td><td class="desc">Structure of a topology object</td></tr>
<tr id="row_2_" class="even"><td class="entry"><img id="arr_2_" src="ftv2mnode.png" alt="o" width="16" height="22" onclick="toggleFolder('2_')"/><img src="ftv2cl.png" alt="C" width="24" height="22" /><a class="el" href="a00020.php" target="_self">hwloc_obj_attr_u</a></td><td class="desc">Object type-specific Attributes</td></tr>
<tr id="row_2_0_"><td class="entry"><img src="ftv2vertline.png" alt="|" width="16" height="22" /><img src="ftv2node.png" alt="o" width="16" height="22" /><img src="ftv2cl.png" alt="C" width="24" height="22" /><a class="el" href="a00015.php" target="_self">hwloc_bridge_attr_s</a></td><td class="desc">Bridge specific Object Attribues</td></tr>
<tr id="row_2_1_" class="even"><td class="entry"><img src="ftv2vertline.png" alt="|" width="16" height="22" /><img src="ftv2node.png" alt="o" width="16" height="22" /><img src="ftv2cl.png" alt="C" width="24" height="22" /><a class="el" href="a00016.php" target="_self">hwloc_cache_attr_s</a></td><td class="desc">Cache-specific Object Attributes</td></tr>
<tr id="row_2_2_"><td class="entry"><img src="ftv2vertline.png" alt="|" width="16" height="22" /><img src="ftv2node.png" alt="o" width="16" height="22" /><img src="ftv2cl.png" alt="C" width="24" height="22" /><a class="el" href="a00018.php" target="_self">hwloc_group_attr_s</a></td><td class="desc">Group-specific Object Attributes</td></tr>
<tr id="row_2_3_" class="even"><td class="entry"><img src="ftv2vertline.png" alt="|" width="16" height="22" /><img src="ftv2node.png" alt="o" width="16" height="22" /><img src="ftv2cl.png" alt="C" width="24" height="22" /><a class="el" href="a00024.php" target="_self">hwloc_osdev_attr_s</a></td><td class="desc">OS Device specific Object Attributes</td></tr>
<tr id="row_2_4_"><td class="entry"><img src="ftv2vertline.png" alt="|" width="16" height="22" /><img src="ftv2lastnode.png" alt="\" width="16" height="22" /><img src="ftv2cl.png" alt="C" width="24" height="22" /><a class="el" href="a00025.php" target="_self">hwloc_pcidev_attr_s</a></td><td class="desc">PCI Device specific Object Attributes</td></tr>
<tr id="row_3_" class="even"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><img src="ftv2cl.png" alt="C" width="24" height="22" /><a class="el" href="a00021.php" target="_self">hwloc_obj_info_s</a></td><td class="desc">Object info</td></tr>
<tr id="row_4_"><td class="entry"><img id="arr_4_" src="ftv2mnode.png" alt="o" width="16" height="22" onclick="toggleFolder('4_')"/><img src="ftv2cl.png" alt="C" width="24" height="22" /><a class="el" href="a00023.php" target="_self">hwloc_obj_memory_s</a></td><td class="desc">Object memory</td></tr>
<tr id="row_4_0_" class="even"><td class="entry"><img src="ftv2vertline.png" alt="|" width="16" height="22" /><img src="ftv2lastnode.png" alt="\" width="16" height="22" /><img src="ftv2cl.png" alt="C" width="24" height="22" /><a class="el" href="a00022.php" target="_self">hwloc_obj_memory_page_type_s</a></td><td class="desc">Array of local memory page types, <code>NULL</code> if no local memory and <code>page_types</code> is 0</td></tr>
<tr id="row_5_"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><img src="ftv2cl.png" alt="C" width="24" height="22" /><a class="el" href="a00026.php" target="_self">hwloc_topology_cpubind_support</a></td><td class="desc">Flags describing actual PU binding support for this topology</td></tr>
<tr id="row_6_" class="even"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><img src="ftv2cl.png" alt="C" width="24" height="22" /><a class="el" href="a00027.php" target="_self">hwloc_topology_discovery_support</a></td><td class="desc">Flags describing actual discovery support for this topology</td></tr>
<tr id="row_7_"><td class="entry"><img src="ftv2node.png" alt="o" width="16" height="22" /><img src="ftv2cl.png" alt="C" width="24" height="22" /><a class="el" href="a00028.php" target="_self">hwloc_topology_membind_support</a></td><td class="desc">Flags describing actual memory binding support for this topology</td></tr>
<tr id="row_8_" class="even"><td class="entry"><img src="ftv2lastnode.png" alt="\" width="16" height="22" /><img src="ftv2cl.png" alt="C" width="24" height="22" /><a class="el" href="a00029.php" target="_self">hwloc_topology_support</a></td><td class="desc">Set of flags describing actual support for this topology</td></tr>
</table>
</div><!-- directory -->
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
