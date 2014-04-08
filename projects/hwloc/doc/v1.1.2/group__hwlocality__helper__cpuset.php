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
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
</div>
<div class="header">
  <div class="summary">
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<h1>Cpuset Helpers</h1>  </div>
</div>
<div class="contents">
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="func-members"></a>
Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline <br class="typebreak"/>
<a class="el" href="group__hwlocality__sets.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> <br class="typebreak"/>
&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__helper__cpuset.php#ga75f0ac3ac41e9915541c3ae3153a6e26">hwloc_topology_get_complete_cpuset</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Get complete CPU set.  <a href="#ga75f0ac3ac41e9915541c3ae3153a6e26"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline <br class="typebreak"/>
<a class="el" href="group__hwlocality__sets.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> <br class="typebreak"/>
&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__helper__cpuset.php#ga4497338d1cbae6f8a6d68cb14234d5d8">hwloc_topology_get_topology_cpuset</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Get topology CPU set.  <a href="#ga4497338d1cbae6f8a6d68cb14234d5d8"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline <br class="typebreak"/>
<a class="el" href="group__hwlocality__sets.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> <br class="typebreak"/>
&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__helper__cpuset.php#gad00abc77f1670049a5b2139471d0c8db">hwloc_topology_get_online_cpuset</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Get online CPU set.  <a href="#gad00abc77f1670049a5b2139471d0c8db"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline <br class="typebreak"/>
<a class="el" href="group__hwlocality__sets.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> <br class="typebreak"/>
&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__helper__cpuset.php#ga95f116c4c0b1ff2c6418c16341fc2e57">hwloc_topology_get_allowed_cpuset</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Get allowed CPU set.  <a href="#ga95f116c4c0b1ff2c6418c16341fc2e57"></a><br/></td></tr>
</table>
<hr/><h2>Function Documentation</h2>
<a class="anchor" id="ga95f116c4c0b1ff2c6418c16341fc2e57"></a><!-- doxytag: member="helper.h::hwloc_topology_get_allowed_cpuset" ref="ga95f116c4c0b1ff2c6418c16341fc2e57" args="(hwloc_topology_t topology)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="group__hwlocality__sets.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>  hwloc_topology_get_allowed_cpuset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
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
<a class="anchor" id="ga75f0ac3ac41e9915541c3ae3153a6e26"></a><!-- doxytag: member="helper.h::hwloc_topology_get_complete_cpuset" ref="ga75f0ac3ac41e9915541c3ae3153a6e26" args="(hwloc_topology_t topology)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="group__hwlocality__sets.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>  hwloc_topology_get_complete_cpuset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
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
<a class="anchor" id="gad00abc77f1670049a5b2139471d0c8db"></a><!-- doxytag: member="helper.h::hwloc_topology_get_online_cpuset" ref="gad00abc77f1670049a5b2139471d0c8db" args="(hwloc_topology_t topology)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="group__hwlocality__sets.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>  hwloc_topology_get_online_cpuset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
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
<a class="anchor" id="ga4497338d1cbae6f8a6d68cb14234d5d8"></a><!-- doxytag: member="helper.h::hwloc_topology_get_topology_cpuset" ref="ga4497338d1cbae6f8a6d68cb14234d5d8" args="(hwloc_topology_t topology)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="group__hwlocality__sets.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>  hwloc_topology_get_topology_cpuset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
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
</div>
<?php
include_once("$topdir/includes/footer.inc");
