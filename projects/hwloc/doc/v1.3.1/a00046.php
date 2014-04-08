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
<!-- Generated by Doxygen 1.7.4 -->
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
<div class="title">Retrieve Objects</div>  </div>
</div>
<div class="contents">
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="func-members"></a>
Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> <a class="el" href="a00015.php">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00046.php#gaedd78240b0c1108355586a268ec5a697">hwloc_get_obj_by_depth</a> (<a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, unsigned depth, unsigned idx) </td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline <br class="typebreak"/>
<a class="el" href="a00015.php">hwloc_obj_t</a> <br class="typebreak"/>
&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00046.php#ga701f83b2cf0cb8e0acd58cd2dc1c67a2">hwloc_get_obj_by_type</a> (<a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00040.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type, unsigned idx)</td></tr>
</table>
<hr/><a name="details" id="details"></a><h2>Detailed Description</h2>
<p>Be sure to see the figure in <a class="el" href="a00001.php">Terms and Definitions</a> that shows a complete topology tree, including depths, child/sibling/cousin relationships, and an example of an asymmetric topology where one socket has fewer caches than its peers. </p>
<hr/><h2>Function Documentation</h2>
<a class="anchor" id="gaedd78240b0c1108355586a268ec5a697"></a><!-- doxytag: member="hwloc.h::hwloc_get_obj_by_depth" ref="gaedd78240b0c1108355586a268ec5a697" args="(hwloc_topology_t topology, unsigned depth, unsigned idx) " -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> <a class="el" href="a00015.php">hwloc_obj_t</a> hwloc_get_obj_by_depth </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>depth</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>idx</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Returns the topology object at logical index <code>idx</code> from depth <code>depth</code>. </p>

</div>
</div>
<a class="anchor" id="ga701f83b2cf0cb8e0acd58cd2dc1c67a2"></a><!-- doxytag: member="hwloc.h::hwloc_get_obj_by_type" ref="ga701f83b2cf0cb8e0acd58cd2dc1c67a2" args="(hwloc_topology_t topology, hwloc_obj_type_t type, unsigned idx)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="a00015.php">hwloc_obj_t</a>  hwloc_get_obj_by_type </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00040.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td>
          <td class="paramname"><em>type</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>idx</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Returns the topology object at logical index <code>idx</code> with type <code>type</code>. </p>
<p>If no object for that type exists, <code>NULL</code> is returned. If there are several levels with objects of that type, <code>NULL</code> is returned and ther caller may fallback to <a class="el" href="a00046.php#gaedd78240b0c1108355586a268ec5a697" title="Returns the topology object at logical index idx from depth depth.">hwloc_get_obj_by_depth()</a>. </p>

</div>
</div>
</div>
<?php
include_once("$topdir/includes/footer.inc");
