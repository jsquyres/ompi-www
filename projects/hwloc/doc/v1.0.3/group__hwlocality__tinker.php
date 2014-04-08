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
<!-- Generated by Doxygen 1.7.1 -->
<div class="navigation" id="top">
  <div class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&nbsp;Page</span></a></li>
      <li><a href="pages.php"><span>Related&nbsp;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&nbsp;Structures</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
</div>
<div class="header">
  <div class="summary">
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<h1>Tinker with topologies.</h1>  </div>
</div>
<div class="contents">
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="func-members"></a>
Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> void&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__tinker.php#ga1c9d8e608232206ce2142fe806a6835b">hwloc_topology_export_xml</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, const char *xmlpath)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Export the topology into an XML file.  <a href="#ga1c9d8e608232206ce2142fe806a6835b"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__tinker.php#ga017a9ba16d554326c6e3812d545d7230">hwloc_topology_insert_misc_object_by_cpuset</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> cpuset, const char *name)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Add a MISC object to the topology.  <a href="#ga017a9ba16d554326c6e3812d545d7230"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__tinker.php#gadacd7a3d21220fbb30c3256d8b22a294">hwloc_topology_insert_misc_object_by_parent</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> parent, const char *name)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Add a MISC object to the topology.  <a href="#gadacd7a3d21220fbb30c3256d8b22a294"></a><br/></td></tr>
</table>
<hr/><h2>Function Documentation</h2>
<a class="anchor" id="ga1c9d8e608232206ce2142fe806a6835b"></a><!-- doxytag: member="hwloc.h::hwloc_topology_export_xml" ref="ga1c9d8e608232206ce2142fe806a6835b" args="(hwloc_topology_t topology, const char *xmlpath)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> void hwloc_topology_export_xml </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&nbsp;</td>
          <td class="paramname"> <em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const char *&nbsp;</td>
          <td class="paramname"> <em>xmlpath</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Export the topology into an XML file. </p>
<p>This file may be loaded later through <a class="el" href="group__hwlocality__configuration.php#ga93efcc8a962afe1ed23393700682173f" title="Enable XML-file based topology.">hwloc_topology_set_xml()</a>. </p>

</div>
</div>
<a class="anchor" id="ga017a9ba16d554326c6e3812d545d7230"></a><!-- doxytag: member="hwloc.h::hwloc_topology_insert_misc_object_by_cpuset" ref="ga017a9ba16d554326c6e3812d545d7230" args="(hwloc_topology_t topology, hwloc_const_cpuset_t cpuset, const char *name)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> hwloc_topology_insert_misc_object_by_cpuset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&nbsp;</td>
          <td class="paramname"> <em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a>&nbsp;</td>
          <td class="paramname"> <em>cpuset</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const char *&nbsp;</td>
          <td class="paramname"> <em>name</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Add a MISC object to the topology. </p>
<p>A new MISC object will be created and inserted into the topology at the position given by cpuset.</p>
<p>cpuset and name will be copied.</p>
<dl class="return"><dt><b>Returns:</b></dt><dd>the newly-created object </dd></dl>

</div>
</div>
<a class="anchor" id="gadacd7a3d21220fbb30c3256d8b22a294"></a><!-- doxytag: member="hwloc.h::hwloc_topology_insert_misc_object_by_parent" ref="gadacd7a3d21220fbb30c3256d8b22a294" args="(hwloc_topology_t topology, hwloc_obj_t parent, const char *name)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> hwloc_topology_insert_misc_object_by_parent </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&nbsp;</td>
          <td class="paramname"> <em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="structhwloc__obj.php">hwloc_obj_t</a>&nbsp;</td>
          <td class="paramname"> <em>parent</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const char *&nbsp;</td>
          <td class="paramname"> <em>name</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Add a MISC object to the topology. </p>
<p>A new MISC object will be created and inserted into the topology at the position given by parent.</p>
<p>name will be copied.</p>
<dl class="return"><dt><b>Returns:</b></dt><dd>the newly-created object </dd></dl>

</div>
</div>
</div>
<?php
include_once("$topdir/includes/footer.inc");
