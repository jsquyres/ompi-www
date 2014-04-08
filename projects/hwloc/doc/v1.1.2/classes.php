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
<!-- Generated by Doxygen 1.7.3 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li class="current"><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li><a href="functions.php"><span>Data&#160;Fields</span></a></li>
    </ul>
  </div>
</div>
<div class="header">
  <div class="headertitle">
<h1>Data Structure Index</h1>  </div>
</div>
<div class="contents">
<div class="qindex"><a class="qindex" href="#letter_H">H</a></div>
<table align="center" width="95%" border="0" cellspacing="0" cellpadding="0">
<tr><td><a name="letter_H"></a><table border="0" cellspacing="0" cellpadding="0"><tr><td><div class="ah">&#160;&#160;H&#160;&#160;</div></td></tr></table>
</td><td><a class="el" href="structhwloc__obj.php">hwloc_obj</a>&#160;&#160;&#160;</td><td><a class="el" href="structhwloc__obj__memory__s_1_1hwloc__obj__memory__page__type__s.php">hwloc_obj_memory_s::hwloc_obj_memory_page_type_s</a>&#160;&#160;&#160;</td><td><a class="el" href="structhwloc__topology__cpubind__support.php">hwloc_topology_cpubind_support</a>&#160;&#160;&#160;</td><td><a class="el" href="structhwloc__topology__membind__support.php">hwloc_topology_membind_support</a>&#160;&#160;&#160;</td></tr><tr><td><a class="el" href="structhwloc__obj__attr__u_1_1hwloc__cache__attr__s.php">hwloc_obj_attr_u::hwloc_cache_attr_s</a>&#160;&#160;&#160;</td><td><a class="el" href="unionhwloc__obj__attr__u.php">hwloc_obj_attr_u</a>&#160;&#160;&#160;</td><td><a class="el" href="structhwloc__obj__memory__s.php">hwloc_obj_memory_s</a>&#160;&#160;&#160;</td><td><a class="el" href="structhwloc__topology__discovery__support.php">hwloc_topology_discovery_support</a>&#160;&#160;&#160;</td><td><a class="el" href="structhwloc__topology__support.php">hwloc_topology_support</a>&#160;&#160;&#160;</td></tr><tr><td><a class="el" href="structhwloc__obj__attr__u_1_1hwloc__group__attr__s.php">hwloc_obj_attr_u::hwloc_group_attr_s</a>&#160;&#160;&#160;</td><td><a class="el" href="structhwloc__obj__info__s.php">hwloc_obj_info_s</a>&#160;&#160;&#160;</td></tr></table><div class="qindex"><a class="qindex" href="#letter_H">H</a></div>
</div>
<?php
include_once("$topdir/includes/footer.inc");
