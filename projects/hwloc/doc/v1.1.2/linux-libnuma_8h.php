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
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
      <li><a href="globals.php"><span>Globals</span></a></li>
    </ul>
  </div>
</div>
<div class="header">
  <div class="summary">
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<h1>linux-libnuma.h File Reference</h1>  </div>
</div>
<div class="contents">

<p>Macros to help interaction between hwloc and Linux libnuma.  
<a href="#_details">More...</a></p>
<div class="textblock"><code>#include &lt;hwloc.h&gt;</code><br/>
<code>#include &lt;numa.h&gt;</code><br/>
</div>
<p><a href="linux-libnuma_8h_source.php">Go to the source code of this file.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="func-members"></a>
Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__linux__libnuma__ulongs.php#ga018e57a42a780ce2ba2e35ef975d8888">hwloc_cpuset_to_linux_libnuma_ulongs</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__sets.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> cpuset, unsigned long *mask, unsigned long *maxnode)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert hwloc CPU set <code>cpuset</code> into the array of unsigned long <code>mask</code>.  <a href="group__hwlocality__linux__libnuma__ulongs.php#ga018e57a42a780ce2ba2e35ef975d8888"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__linux__libnuma__ulongs.php#gaf213df50d229c5d17a5a56b5d8f10b74">hwloc_nodeset_to_linux_libnuma_ulongs</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__sets.php#ga2f5276235841ad66a79bedad16a5a10c">hwloc_const_nodeset_t</a> nodeset, unsigned long *mask, unsigned long *maxnode)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert hwloc NUMA node set <code>nodeset</code> into the array of unsigned long <code>mask</code>.  <a href="group__hwlocality__linux__libnuma__ulongs.php#gaf213df50d229c5d17a5a56b5d8f10b74"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__linux__libnuma__ulongs.php#gafa60816dde33d69149497bcf6c7818e0">hwloc_cpuset_from_linux_libnuma_ulongs</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__sets.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> cpuset, const unsigned long *mask, unsigned long maxnode)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert the array of unsigned long <code>mask</code> into hwloc CPU set.  <a href="group__hwlocality__linux__libnuma__ulongs.php#gafa60816dde33d69149497bcf6c7818e0"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__linux__libnuma__ulongs.php#ga5b51a4a96a0c3ad9f4c0da308bbf4d8f">hwloc_nodeset_from_linux_libnuma_ulongs</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__sets.php#ga37e35730fa7e775b5bb0afe893d6d508">hwloc_nodeset_t</a> nodeset, const unsigned long *mask, unsigned long maxnode)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert the array of unsigned long <code>mask</code> into hwloc NUMA node set.  <a href="group__hwlocality__linux__libnuma__ulongs.php#ga5b51a4a96a0c3ad9f4c0da308bbf4d8f"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline struct <br class="typebreak"/>
bitmask <br class="typebreak"/>
*&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__linux__libnuma__bitmask.php#ga067ec565345a346bfd9d721cff5901ae">hwloc_cpuset_to_linux_libnuma_bitmask</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__sets.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> cpuset)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert hwloc CPU set <code>cpuset</code> into the returned libnuma bitmask.  <a href="group__hwlocality__linux__libnuma__bitmask.php#ga067ec565345a346bfd9d721cff5901ae"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline struct <br class="typebreak"/>
bitmask <br class="typebreak"/>
*&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__linux__libnuma__bitmask.php#gaa2c4cb4075422a19e07c450dc7092e69">hwloc_nodeset_to_linux_libnuma_bitmask</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__sets.php#ga2f5276235841ad66a79bedad16a5a10c">hwloc_const_nodeset_t</a> nodeset)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert hwloc NUMA node set <code>nodeset</code> into the returned libnuma bitmask.  <a href="group__hwlocality__linux__libnuma__bitmask.php#gaa2c4cb4075422a19e07c450dc7092e69"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__linux__libnuma__bitmask.php#ga47747968f12c2674d2840dfbacce4940">hwloc_cpuset_from_linux_libnuma_bitmask</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__sets.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> cpuset, const struct bitmask *bitmask)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert libnuma bitmask <code>bitmask</code> into hwloc CPU set <code>cpuset</code>.  <a href="group__hwlocality__linux__libnuma__bitmask.php#ga47747968f12c2674d2840dfbacce4940"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__linux__libnuma__bitmask.php#ga5a1d17375cc7b65cd155330008cbdb6a">hwloc_nodeset_from_linux_libnuma_bitmask</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__sets.php#ga37e35730fa7e775b5bb0afe893d6d508">hwloc_nodeset_t</a> nodeset, const struct bitmask *bitmask)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert libnuma bitmask <code>bitmask</code> into hwloc NUMA node set <code>nodeset</code>.  <a href="group__hwlocality__linux__libnuma__bitmask.php#ga5a1d17375cc7b65cd155330008cbdb6a"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__linux__libnuma__nodemask.php#ga36feb81315de87ce11d9a5aa2b4c6e6d">hwloc_cpuset_to_linux_libnuma_nodemask</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__sets.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> cpuset, nodemask_t *nodemask)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert hwloc CPU set <code>cpuset</code> into libnuma nodemask <code>nodemask</code>.  <a href="group__hwlocality__linux__libnuma__nodemask.php#ga36feb81315de87ce11d9a5aa2b4c6e6d"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__linux__libnuma__nodemask.php#gafa4e7cc68f0f99724f8d99541d9ab3de">hwloc_nodeset_to_linux_libnuma_nodemask</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__sets.php#ga2f5276235841ad66a79bedad16a5a10c">hwloc_const_nodeset_t</a> nodeset, nodemask_t *nodemask)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert hwloc NUMA node set <code>nodeset</code> into libnuma nodemask <code>nodemask</code>.  <a href="group__hwlocality__linux__libnuma__nodemask.php#gafa4e7cc68f0f99724f8d99541d9ab3de"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__linux__libnuma__nodemask.php#gac24c9e4bb2eab3e23b2039559adc9df8">hwloc_cpuset_from_linux_libnuma_nodemask</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__sets.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> cpuset, const nodemask_t *nodemask)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert libnuma nodemask <code>nodemask</code> into hwloc CPU set <code>cpuset</code>.  <a href="group__hwlocality__linux__libnuma__nodemask.php#gac24c9e4bb2eab3e23b2039559adc9df8"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__linux__libnuma__nodemask.php#ga22862f485346ae3b2ab7d052f538fc5f">hwloc_nodeset_from_linux_libnuma_nodemask</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__sets.php#ga37e35730fa7e775b5bb0afe893d6d508">hwloc_nodeset_t</a> nodeset, const nodemask_t *nodemask)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert libnuma nodemask <code>nodemask</code> into hwloc NUMA node set <code>nodeset</code>.  <a href="group__hwlocality__linux__libnuma__nodemask.php#ga22862f485346ae3b2ab7d052f538fc5f"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<div class="textblock"><p>Macros to help interaction between hwloc and Linux libnuma. </p>
<p>Applications that use both Linux libnuma and hwloc may want to include this file so as to ease conversion between their respective types. </p>
</div></div>
<?php
include_once("$topdir/includes/footer.inc");
