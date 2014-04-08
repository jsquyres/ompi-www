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
<!-- Generated by Doxygen 1.8.1.2 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#nested-classes">Data Structures</a> &#124;
<a href="#typedef-members">Typedefs</a>  </div>
  <div class="headertitle">
<div class="title">Topology Objects</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2><a name="nested-classes"></a>
Data Structures</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00020.php">hwloc_obj_memory_s</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">Object memory.  <a href="a00020.php#details">More...</a><br/></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00016.php">hwloc_obj</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">Structure of a topology object.  <a href="a00016.php#details">More...</a><br/></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">union &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00017.php">hwloc_obj_attr_u</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">Object type-specific Attributes.  <a href="a00017.php#details">More...</a><br/></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00014.php">hwloc_distances_s</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">Distances between objects.  <a href="a00014.php#details">More...</a><br/></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00018.php">hwloc_obj_info_s</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">Object info.  <a href="a00018.php#details">More...</a><br/></td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2><a name="typedef-members"></a>
Typedefs</h2></td></tr>
<tr class="memitem:ga79b8ab56877ef99ac59b833203391c7d"><td class="memItemLeft" align="right" valign="top">typedef struct <a class="el" href="a00016.php">hwloc_obj</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00042.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a></td></tr>
</table>
<a name="details" id="details"></a><h2>Detailed Description</h2>
<h2>Typedef Documentation</h2>
<a class="anchor" id="ga79b8ab56877ef99ac59b833203391c7d"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">typedef struct <a class="el" href="a00016.php">hwloc_obj</a>* <a class="el" href="a00042.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Convenience typedef; a pointer to a struct <a class="el" href="a00016.php" title="Structure of a topology object.">hwloc_obj</a>. </p>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
