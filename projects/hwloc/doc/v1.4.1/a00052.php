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
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
</div>
<div class="header">
  <div class="summary">
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">Object Type Helpers</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="func-members"></a>
Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00052.php#ga081be77905201e9f42318e9974456b45">hwloc_get_type_or_below_depth</a> (<a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00041.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type) </td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00052.php#ga62a3f401854c209605c90079700f4bc5">hwloc_get_type_or_above_depth</a> (<a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00041.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type) </td></tr>
</table>
<hr/><a name="details" id="details"></a><h2>Detailed Description</h2>
<p>Be sure to see the figure in <a class="el" href="a00001.php">Terms and Definitions</a> that shows a complete topology tree, including depths, child/sibling/cousin relationships, and an example of an asymmetric topology where one socket has fewer caches than its peers. </p>
<hr/><h2>Function Documentation</h2>
<a class="anchor" id="ga62a3f401854c209605c90079700f4bc5"></a><!-- doxytag: member="helper.h::hwloc_get_type_or_above_depth" ref="ga62a3f401854c209605c90079700f4bc5" args="(hwloc_topology_t topology, hwloc_obj_type_t type) " -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline int <a class="el" href="a00052.php#ga62a3f401854c209605c90079700f4bc5">hwloc_get_type_or_above_depth</a> </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00041.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td>
          <td class="paramname"><em>type</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Returns the depth of objects of type <code>type</code> or above. </p>
<p>If no object of this type is present on the underlying architecture, the function returns the depth of the first "present" object typically containing <code>type</code>.</p>
<p>If some objects of the given type exist in different levels, for instance L1 and L2 caches, the function returns HWLOC_TYPE_DEPTH_MULTIPLE. </p>

</div>
</div>
<a class="anchor" id="ga081be77905201e9f42318e9974456b45"></a><!-- doxytag: member="helper.h::hwloc_get_type_or_below_depth" ref="ga081be77905201e9f42318e9974456b45" args="(hwloc_topology_t topology, hwloc_obj_type_t type) " -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline int <a class="el" href="a00052.php#ga081be77905201e9f42318e9974456b45">hwloc_get_type_or_below_depth</a> </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00041.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td>
          <td class="paramname"><em>type</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Returns the depth of objects of type <code>type</code> or below. </p>
<p>If no object of this type is present on the underlying architecture, the function returns the depth of the first "present" object typically found inside <code>type</code>.</p>
<p>If some objects of the given type exist in different levels, for instance L1 and L2 caches, the function returns HWLOC_TYPE_DEPTH_MULTIPLE. </p>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
