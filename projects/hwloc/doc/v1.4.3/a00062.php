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
<div class="title">Conversion between cpuset and nodeset</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ga60ecc4ae480c28b5fbd34aca4fc37daa"><td class="memItemLeft" align="right" valign="top">static inline void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00062.php#ga60ecc4ae480c28b5fbd34aca4fc37daa">hwloc_cpuset_to_nodeset</a> (<a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00040.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> cpuset, <a class="el" href="a00040.php#ga37e35730fa7e775b5bb0afe893d6d508">hwloc_nodeset_t</a> nodeset)</td></tr>
<tr class="separator:ga60ecc4ae480c28b5fbd34aca4fc37daa"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga9162785e39d7c697f76f99524c4a2fb4"><td class="memItemLeft" align="right" valign="top">static inline void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00062.php#ga9162785e39d7c697f76f99524c4a2fb4">hwloc_cpuset_to_nodeset_strict</a> (struct hwloc_topology *topology, <a class="el" href="a00040.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> cpuset, <a class="el" href="a00040.php#ga37e35730fa7e775b5bb0afe893d6d508">hwloc_nodeset_t</a> nodeset)</td></tr>
<tr class="separator:ga9162785e39d7c697f76f99524c4a2fb4"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gaa677fd588304b5615de4ea78104adfb5"><td class="memItemLeft" align="right" valign="top">static inline void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00062.php#gaa677fd588304b5615de4ea78104adfb5">hwloc_cpuset_from_nodeset</a> (<a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00040.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> cpuset, <a class="el" href="a00040.php#ga2f5276235841ad66a79bedad16a5a10c">hwloc_const_nodeset_t</a> nodeset)</td></tr>
<tr class="separator:gaa677fd588304b5615de4ea78104adfb5"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gaa7c3f39802b00a758c58e024a8119979"><td class="memItemLeft" align="right" valign="top">static inline void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00062.php#gaa7c3f39802b00a758c58e024a8119979">hwloc_cpuset_from_nodeset_strict</a> (struct hwloc_topology *topology, <a class="el" href="a00040.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> cpuset, <a class="el" href="a00040.php#ga2f5276235841ad66a79bedad16a5a10c">hwloc_const_nodeset_t</a> nodeset)</td></tr>
<tr class="separator:gaa7c3f39802b00a758c58e024a8119979"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<p>There are two semantics for converting cpusets to nodesets depending on how non-NUMA machines are handled.</p>
<p>When manipulating nodesets for memory binding, non-NUMA machines should be considered as having a single NUMA node. The standard conversion routines below should be used so that marking the first bit of the nodeset means that memory should be bound to a non-NUMA whole machine.</p>
<p>When manipulating nodesets as an actual list of NUMA nodes without any need to handle memory binding on non-NUMA machines, the strict conversion routines may be used instead. </p>
<h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="gaa677fd588304b5615de4ea78104adfb5"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline void hwloc_cpuset_from_nodeset </td>
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
          <td class="paramtype"><a class="el" href="a00040.php#ga2f5276235841ad66a79bedad16a5a10c">hwloc_const_nodeset_t</a>&#160;</td>
          <td class="paramname"><em>nodeset</em>&#160;</td>
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

<p>Convert a NUMA node set into a CPU set and handle non-NUMA cases. </p>
<p>If the topology contains no NUMA nodes, the machine is considered as a single memory node, and the following behavior is used: If <code>nodeset</code> is empty, <code>cpuset</code> will be emptied as well. Otherwise <code>cpuset</code> will be entirely filled. This is useful for manipulating memory binding sets. </p>

</div>
</div>
<a class="anchor" id="gaa7c3f39802b00a758c58e024a8119979"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline void hwloc_cpuset_from_nodeset_strict </td>
          <td>(</td>
          <td class="paramtype">struct hwloc_topology *&#160;</td>
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
          <td class="paramtype"><a class="el" href="a00040.php#ga2f5276235841ad66a79bedad16a5a10c">hwloc_const_nodeset_t</a>&#160;</td>
          <td class="paramname"><em>nodeset</em>&#160;</td>
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

<p>Convert a NUMA node set into a CPU set without handling non-NUMA cases. </p>
<p>This is the strict variant of <a class="el" href="a00062.php#gaa677fd588304b5615de4ea78104adfb5" title="Convert a NUMA node set into a CPU set and handle non-NUMA cases.">hwloc_cpuset_from_nodeset</a>. It does not fix non-NUMA cases. If the topology contains some NUMA nodes, behave exactly the same. However, if the topology contains no NUMA nodes, return an empty cpuset. </p>

</div>
</div>
<a class="anchor" id="ga60ecc4ae480c28b5fbd34aca4fc37daa"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline void hwloc_cpuset_to_nodeset </td>
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
          <td class="paramtype"><a class="el" href="a00040.php#ga37e35730fa7e775b5bb0afe893d6d508">hwloc_nodeset_t</a>&#160;</td>
          <td class="paramname"><em>nodeset</em>&#160;</td>
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

<p>Convert a CPU set into a NUMA node set and handle non-NUMA cases. </p>
<p>If some NUMA nodes have no CPUs at all, this function never sets their indexes in the output node set, even if a full CPU set is given in input.</p>
<p>If the topology contains no NUMA nodes, the machine is considered as a single memory node, and the following behavior is used: If <code>cpuset</code> is empty, <code>nodeset</code> will be emptied as well. Otherwise <code>nodeset</code> will be entirely filled. </p>

</div>
</div>
<a class="anchor" id="ga9162785e39d7c697f76f99524c4a2fb4"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline void hwloc_cpuset_to_nodeset_strict </td>
          <td>(</td>
          <td class="paramtype">struct hwloc_topology *&#160;</td>
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
          <td class="paramtype"><a class="el" href="a00040.php#ga37e35730fa7e775b5bb0afe893d6d508">hwloc_nodeset_t</a>&#160;</td>
          <td class="paramname"><em>nodeset</em>&#160;</td>
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

<p>Convert a CPU set into a NUMA node set without handling non-NUMA cases. </p>
<p>This is the strict variant of <a class="el" href="a00062.php#ga60ecc4ae480c28b5fbd34aca4fc37daa" title="Convert a CPU set into a NUMA node set and handle non-NUMA cases.">hwloc_cpuset_to_nodeset</a>. It does not fix non-NUMA cases. If the topology contains some NUMA nodes, behave exactly the same. However, if the topology contains no NUMA nodes, return an empty nodeset. </p>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
