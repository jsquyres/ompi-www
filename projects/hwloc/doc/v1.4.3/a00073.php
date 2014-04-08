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
<!-- Generated by Doxygen 1.8.3.1 -->
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
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">OpenFabrics-Specific Functions</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:gaa8ea979ce3a9b8c70ae80bc5716a0fbe"><td class="memItemLeft" align="right" valign="top">static inline int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00073.php#gaa8ea979ce3a9b8c70ae80bc5716a0fbe">hwloc_ibv_get_device_cpuset</a> (<a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology , struct ibv_device *ibdev, <a class="el" href="a00040.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> set)</td></tr>
<tr class="separator:gaa8ea979ce3a9b8c70ae80bc5716a0fbe"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="gaa8ea979ce3a9b8c70ae80bc5716a0fbe"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline int hwloc_ibv_get_device_cpuset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology&#160;</td>
          <td class="paramname"><em></em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">struct ibv_device *&#160;</td>
          <td class="paramname"><em>ibdev</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00040.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the CPU set of logical processors that are physically close to device <code>ibdev</code>. </p>
<p>For the given OpenFabrics device <code>ibdev</code>, read the corresponding kernel-provided cpumap file and return the corresponding CPU set. This function is currently only implemented in a meaningful way for Linux; other systems will simply get a full cpuset.</p>
<p>Topology <code>topology</code> must match the current machine. </p>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
