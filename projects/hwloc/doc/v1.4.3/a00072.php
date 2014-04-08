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
<div class="title">CUDA Runtime API Specific Functions</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ga1cbf127459986c345f873e2752ddf681"><td class="memItemLeft" align="right" valign="top">static inline int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00072.php#ga1cbf127459986c345f873e2752ddf681">hwloc_cudart_get_device_pci_ids</a> (<a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology , int device, int *domain, int *bus, int *dev)</td></tr>
<tr class="separator:ga1cbf127459986c345f873e2752ddf681"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga2daaf1dd1a9a7f11ccbc6821374120e9"><td class="memItemLeft" align="right" valign="top">static inline int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00072.php#ga2daaf1dd1a9a7f11ccbc6821374120e9">hwloc_cudart_get_device_cpuset</a> (<a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology , int device, <a class="el" href="a00040.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> set)</td></tr>
<tr class="separator:ga2daaf1dd1a9a7f11ccbc6821374120e9"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gaaff84cc4ee4b27f35b21c33626651da0"><td class="memItemLeft" align="right" valign="top">static inline <a class="el" href="a00042.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00072.php#gaaff84cc4ee4b27f35b21c33626651da0">hwloc_cudart_get_device_pcidev</a> (<a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, int device)</td></tr>
<tr class="separator:gaaff84cc4ee4b27f35b21c33626651da0"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="ga2daaf1dd1a9a7f11ccbc6821374120e9"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline int hwloc_cudart_get_device_cpuset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology&#160;</td>
          <td class="paramname"><em></em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>device</em>, </td>
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

<p>Get the CPU set of logical processors that are physically close to device <code>device</code>. </p>
<p>For the given CUDA Runtime API device <code>device</code>, read the corresponding kernel-provided cpumap file and return the corresponding CPU set. This function is currently only implemented in a meaningful way for Linux; other systems will simply get a full cpuset.</p>
<p>Topology <code>topology</code> must match the current machine. </p>

</div>
</div>
<a class="anchor" id="ga1cbf127459986c345f873e2752ddf681"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline int hwloc_cudart_get_device_pci_ids </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology&#160;</td>
          <td class="paramname"><em></em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>device</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int *&#160;</td>
          <td class="paramname"><em>domain</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int *&#160;</td>
          <td class="paramname"><em>bus</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int *&#160;</td>
          <td class="paramname"><em>dev</em>&#160;</td>
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

<p>Return the domain, bus and device IDs of device <code>device</code>. </p>

</div>
</div>
<a class="anchor" id="gaaff84cc4ee4b27f35b21c33626651da0"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="a00042.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_cudart_get_device_pcidev </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>device</em>&#160;</td>
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

<p>Get the hwloc object for the PCI device corresponding to device <code>device</code>. </p>
<p>For the given CUDA Runtime API device <code>device</code>, return the hwloc PCI object containing the device. Returns NULL if there is none.</p>
<p>IO devices detection must be enabled in topology <code>topology</code>. </p>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
