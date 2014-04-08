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
<div class="title">Cpuset Helpers</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="func-members"></a>
Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline <br class="typebreak"/>
<a class="el" href="a00040.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00060.php#ga418ebb39eaf1eac8f9cf4047cf59a534">hwloc_topology_get_complete_cpuset</a> (<a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology) </td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline <br class="typebreak"/>
<a class="el" href="a00040.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00060.php#gaa319133e702fea664750c45735ac8a25">hwloc_topology_get_topology_cpuset</a> (<a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology) </td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline <br class="typebreak"/>
<a class="el" href="a00040.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00060.php#gafeb07985e2cc66aee1da447aff0bcab8">hwloc_topology_get_online_cpuset</a> (<a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology) </td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline <br class="typebreak"/>
<a class="el" href="a00040.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00060.php#ga08e3b14e1fe7642b383633d34c1f3c4a">hwloc_topology_get_allowed_cpuset</a> (<a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology) </td></tr>
</table>
<hr/><h2>Function Documentation</h2>
<a class="anchor" id="ga08e3b14e1fe7642b383633d34c1f3c4a"></a><!-- doxytag: member="helper.h::hwloc_topology_get_allowed_cpuset" ref="ga08e3b14e1fe7642b383633d34c1f3c4a" args="(hwloc_topology_t topology) " -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="a00040.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> <a class="el" href="a00060.php#ga08e3b14e1fe7642b383633d34c1f3c4a">hwloc_topology_get_allowed_cpuset</a> </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em></td><td>)</td>
          <td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Get allowed CPU set. </p>
<dl class="return"><dt><b>Returns:</b></dt><dd>the CPU set of allowed logical processors of the system. If the topology is the result of a combination of several systems, NULL is returned.</dd></dl>
<dl class="note"><dt><b>Note:</b></dt><dd>The returned cpuset is not newly allocated and should thus not be changed or freed, hwloc_cpuset_dup must be used to obtain a local copy. </dd></dl>

</div>
</div>
<a class="anchor" id="ga418ebb39eaf1eac8f9cf4047cf59a534"></a><!-- doxytag: member="helper.h::hwloc_topology_get_complete_cpuset" ref="ga418ebb39eaf1eac8f9cf4047cf59a534" args="(hwloc_topology_t topology) " -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="a00040.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> <a class="el" href="a00060.php#ga418ebb39eaf1eac8f9cf4047cf59a534">hwloc_topology_get_complete_cpuset</a> </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em></td><td>)</td>
          <td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Get complete CPU set. </p>
<dl class="return"><dt><b>Returns:</b></dt><dd>the complete CPU set of logical processors of the system. If the topology is the result of a combination of several systems, NULL is returned.</dd></dl>
<dl class="note"><dt><b>Note:</b></dt><dd>The returned cpuset is not newly allocated and should thus not be changed or freed; hwloc_cpuset_dup must be used to obtain a local copy. </dd></dl>

</div>
</div>
<a class="anchor" id="gafeb07985e2cc66aee1da447aff0bcab8"></a><!-- doxytag: member="helper.h::hwloc_topology_get_online_cpuset" ref="gafeb07985e2cc66aee1da447aff0bcab8" args="(hwloc_topology_t topology) " -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="a00040.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> <a class="el" href="a00060.php#gafeb07985e2cc66aee1da447aff0bcab8">hwloc_topology_get_online_cpuset</a> </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em></td><td>)</td>
          <td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Get online CPU set. </p>
<dl class="return"><dt><b>Returns:</b></dt><dd>the CPU set of online logical processors of the system. If the topology is the result of a combination of several systems, NULL is returned.</dd></dl>
<dl class="note"><dt><b>Note:</b></dt><dd>The returned cpuset is not newly allocated and should thus not be changed or freed; hwloc_cpuset_dup must be used to obtain a local copy. </dd></dl>

</div>
</div>
<a class="anchor" id="gaa319133e702fea664750c45735ac8a25"></a><!-- doxytag: member="helper.h::hwloc_topology_get_topology_cpuset" ref="gaa319133e702fea664750c45735ac8a25" args="(hwloc_topology_t topology) " -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="a00040.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> <a class="el" href="a00060.php#gaa319133e702fea664750c45735ac8a25">hwloc_topology_get_topology_cpuset</a> </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em></td><td>)</td>
          <td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Get topology CPU set. </p>
<dl class="return"><dt><b>Returns:</b></dt><dd>the CPU set of logical processors of the system for which hwloc provides topology information. This is equivalent to the cpuset of the system object. If the topology is the result of a combination of several systems, NULL is returned.</dd></dl>
<dl class="note"><dt><b>Note:</b></dt><dd>The returned cpuset is not newly allocated and should thus not be changed or freed; hwloc_cpuset_dup must be used to obtain a local copy. </dd></dl>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
