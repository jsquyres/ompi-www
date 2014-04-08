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
<div class="title">Helpers for manipulating Linux libnuma nodemask_t</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="func-members"></a>
Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00070.php#ga36feb81315de87ce11d9a5aa2b4c6e6d">hwloc_cpuset_to_linux_libnuma_nodemask</a> (<a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00040.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> cpuset, nodemask_t *nodemask)</td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00070.php#gafa4e7cc68f0f99724f8d99541d9ab3de">hwloc_nodeset_to_linux_libnuma_nodemask</a> (<a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00040.php#ga2f5276235841ad66a79bedad16a5a10c">hwloc_const_nodeset_t</a> nodeset, nodemask_t *nodemask)</td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00070.php#gac24c9e4bb2eab3e23b2039559adc9df8">hwloc_cpuset_from_linux_libnuma_nodemask</a> (<a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00040.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> cpuset, const nodemask_t *nodemask)</td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00070.php#ga22862f485346ae3b2ab7d052f538fc5f">hwloc_nodeset_from_linux_libnuma_nodemask</a> (<a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00040.php#ga37e35730fa7e775b5bb0afe893d6d508">hwloc_nodeset_t</a> nodeset, const nodemask_t *nodemask)</td></tr>
</table>
<hr/><a name="details" id="details"></a><h2>Detailed Description</h2>
<dl class="note"><dt><b>Note:</b></dt><dd>The Linux libnuma nodemask_t interface is deprecated and its implementation is at least incorrect with respect to sparse NUMA node ids. It is strongly advised to use struct bitmask instead of nodemask_t, or even to use hwloc directly. </dd></dl>
<hr/><h2>Function Documentation</h2>
<a class="anchor" id="gac24c9e4bb2eab3e23b2039559adc9df8"></a><!-- doxytag: member="linux&#45;libnuma.h::hwloc_cpuset_from_linux_libnuma_nodemask" ref="gac24c9e4bb2eab3e23b2039559adc9df8" args="(hwloc_topology_t topology, hwloc_cpuset_t cpuset, const nodemask_t *nodemask)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline int <a class="el" href="a00070.php#gac24c9e4bb2eab3e23b2039559adc9df8">hwloc_cpuset_from_linux_libnuma_nodemask</a> </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00040.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>cpuset</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const nodemask_t *&#160;</td>
          <td class="paramname"><em>nodemask</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Convert libnuma nodemask <code>nodemask</code> into hwloc CPU set <code>cpuset</code>. </p>
<p>This function may be used before calling some old libnuma functions that use a nodemask_t as an output parameter. </p>

</div>
</div>
<a class="anchor" id="ga36feb81315de87ce11d9a5aa2b4c6e6d"></a><!-- doxytag: member="linux&#45;libnuma.h::hwloc_cpuset_to_linux_libnuma_nodemask" ref="ga36feb81315de87ce11d9a5aa2b4c6e6d" args="(hwloc_topology_t topology, hwloc_const_cpuset_t cpuset, nodemask_t *nodemask)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline int <a class="el" href="a00070.php#ga36feb81315de87ce11d9a5aa2b4c6e6d">hwloc_cpuset_to_linux_libnuma_nodemask</a> </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00040.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>cpuset</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">nodemask_t *&#160;</td>
          <td class="paramname"><em>nodemask</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Convert hwloc CPU set <code>cpuset</code> into libnuma nodemask <code>nodemask</code>. </p>
<p>This function may be used before calling some old libnuma functions that use a nodemask_t as an input parameter. </p>

</div>
</div>
<a class="anchor" id="ga22862f485346ae3b2ab7d052f538fc5f"></a><!-- doxytag: member="linux&#45;libnuma.h::hwloc_nodeset_from_linux_libnuma_nodemask" ref="ga22862f485346ae3b2ab7d052f538fc5f" args="(hwloc_topology_t topology, hwloc_nodeset_t nodeset, const nodemask_t *nodemask)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline int <a class="el" href="a00070.php#ga22862f485346ae3b2ab7d052f538fc5f">hwloc_nodeset_from_linux_libnuma_nodemask</a> </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00040.php#ga37e35730fa7e775b5bb0afe893d6d508">hwloc_nodeset_t</a>&#160;</td>
          <td class="paramname"><em>nodeset</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const nodemask_t *&#160;</td>
          <td class="paramname"><em>nodemask</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Convert libnuma nodemask <code>nodemask</code> into hwloc NUMA node set <code>nodeset</code>. </p>
<p>This function may be used before calling some old libnuma functions that use a nodemask_t as an output parameter. </p>

</div>
</div>
<a class="anchor" id="gafa4e7cc68f0f99724f8d99541d9ab3de"></a><!-- doxytag: member="linux&#45;libnuma.h::hwloc_nodeset_to_linux_libnuma_nodemask" ref="gafa4e7cc68f0f99724f8d99541d9ab3de" args="(hwloc_topology_t topology, hwloc_const_nodeset_t nodeset, nodemask_t *nodemask)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline int <a class="el" href="a00070.php#gafa4e7cc68f0f99724f8d99541d9ab3de">hwloc_nodeset_to_linux_libnuma_nodemask</a> </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00040.php#ga2f5276235841ad66a79bedad16a5a10c">hwloc_const_nodeset_t</a>&#160;</td>
          <td class="paramname"><em>nodeset</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">nodemask_t *&#160;</td>
          <td class="paramname"><em>nodemask</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Convert hwloc NUMA node set <code>nodeset</code> into libnuma nodemask <code>nodemask</code>. </p>
<p>This function may be used before calling some old libnuma functions that use a nodemask_t as an input parameter. </p>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
