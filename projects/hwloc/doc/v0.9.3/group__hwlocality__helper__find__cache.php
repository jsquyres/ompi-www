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
<!-- Generated by Doxygen 1.6.1 -->
<div class="navigation" id="top">
  <div class="tabs">
    <ul>
      <li><a href="index.php"><span>Main&nbsp;Page</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&nbsp;Structures</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
</div>
<div class="contents">
<h1>Cache-specific Finding Helpers</h1><table border="0" cellpadding="0" cellspacing="0">
<tr><td colspan="2"><h2>Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__helper__find__cache.php#ga5e56e841b6887dc596214965d379781e">hwloc_get_cache_covering_cpuset</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a> set)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Get the first cache covering a cpuset <code>set</code>.  <a href="#ga5e56e841b6887dc596214965d379781e"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__helper__find__cache.php#gaefe0e3eda6f6bfb9bdcd9c62f4e88066">hwloc_get_shared_cache_covering_obj</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> obj)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Get the first cache shared between an object and somebody else.  <a href="#gaefe0e3eda6f6bfb9bdcd9c62f4e88066"></a><br/></td></tr>
</table>
<hr/><h2>Function Documentation</h2>
<a class="anchor" id="ga5e56e841b6887dc596214965d379781e"></a><!-- doxytag: member="helper.h::hwloc_get_cache_covering_cpuset" ref="ga5e56e841b6887dc596214965d379781e" args="(hwloc_topology_t topology, hwloc_cpuset_t set)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> hwloc_get_cache_covering_cpuset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&nbsp;</td>
          <td class="paramname"> <em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a>&nbsp;</td>
          <td class="paramname"> <em>set</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Get the first cache covering a cpuset <code>set</code>. </p>
<dl class="return"><dt><b>Returns:</b></dt><dd><code>NULL</code> if no cache matches </dd></dl>

</div>
</div>
<a class="anchor" id="gaefe0e3eda6f6bfb9bdcd9c62f4e88066"></a><!-- doxytag: member="helper.h::hwloc_get_shared_cache_covering_obj" ref="gaefe0e3eda6f6bfb9bdcd9c62f4e88066" args="(hwloc_topology_t topology, hwloc_obj_t obj)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> hwloc_get_shared_cache_covering_obj </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&nbsp;</td>
          <td class="paramname"> <em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="structhwloc__obj.php">hwloc_obj_t</a>&nbsp;</td>
          <td class="paramname"> <em>obj</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Get the first cache shared between an object and somebody else. </p>
<dl class="return"><dt><b>Returns:</b></dt><dd><code>NULL</code> if no cache matches </dd></dl>

</div>
</div>
</div>
<?php
include_once("$topdir/includes/footer.inc");
