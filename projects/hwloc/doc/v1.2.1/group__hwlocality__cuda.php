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
<div class="title">CUDA Driver API Specific Functions</div>  </div>
</div>
<div class="contents">
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="func-members"></a>
Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__cuda.php#gae06cf330d2f0d9949feb52b146b7d136">hwloc_cuda_get_device_cpuset</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology , CUdevice cudevice, <a class="el" href="group__hwlocality__sets.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> set)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the CPU set of logical processors that are physically close to device <code>cudevice</code>.  <a href="#gae06cf330d2f0d9949feb52b146b7d136"></a><br/></td></tr>
</table>
<hr/><h2>Function Documentation</h2>
<a class="anchor" id="gae06cf330d2f0d9949feb52b146b7d136"></a><!-- doxytag: member="cuda.h::hwloc_cuda_get_device_cpuset" ref="gae06cf330d2f0d9949feb52b146b7d136" args="(hwloc_topology_t topology , CUdevice cudevice, hwloc_cpuset_t set)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline int hwloc_cuda_get_device_cpuset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology&#160;</td>
          <td class="paramname"><em></em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">CUdevice&#160;</td>
          <td class="paramname"><em>cudevice</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="group__hwlocality__sets.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Get the CPU set of logical processors that are physically close to device <code>cudevice</code>. </p>
<p>For the given CUDA Driver API device <code>cudevice</code>, read the corresponding kernel-provided cpumap file and return the corresponding CPU set. This function is currently only implemented in a meaningful way for Linux; other systems will simply get a full cpuset. </p>

</div>
</div>
</div>
<?php
include_once("$topdir/includes/footer.inc");
