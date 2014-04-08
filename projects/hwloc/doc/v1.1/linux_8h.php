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
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&nbsp;List</span></a></li>
      <li><a href="globals.php"><span>Globals</span></a></li>
    </ul>
  </div>
</div>
<div class="header">
  <div class="summary">
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<h1>linux.h File Reference</h1>  </div>
</div>
<div class="contents">

<p>Macros to help interaction between hwloc and Linux.  
<a href="#_details">More...</a></p>
<code>#include &lt;<a class="el" href="hwloc_8h_source.php">hwloc.h</a>&gt;</code><br/>
<code>#include &lt;stdio.h&gt;</code><br/>

<p><a href="linux_8h_source.php">Go to the source code of this file.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="func-members"></a>
Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__linux.php#gaeacad897c30dbea284948374ad4b010c">hwloc_linux_parse_cpumap_file</a> (FILE *file, <a class="el" href="group__hwlocality__sets.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> set)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Convert a linux kernel cpumap file <code>file</code> into hwloc CPU set.  <a href="group__hwlocality__linux.php#gaeacad897c30dbea284948374ad4b010c"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__linux.php#gaaaca5d1687053b6c3326b2c165bd6530">hwloc_linux_set_tid_cpubind</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, pid_t tid, <a class="el" href="group__hwlocality__sets.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Bind a thread <code>tid</code> on cpus given in cpuset <code>set</code>.  <a href="group__hwlocality__linux.php#gaaaca5d1687053b6c3326b2c165bd6530"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__linux.php#gaf36a9211a21eb930f59090eb5d460b8e">hwloc_linux_get_tid_cpubind</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, pid_t tid, <a class="el" href="group__hwlocality__sets.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> set)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Get the current binding of thread <code>tid</code>.  <a href="group__hwlocality__linux.php#gaf36a9211a21eb930f59090eb5d460b8e"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>Macros to help interaction between hwloc and Linux. </p>
<p>Applications that use hwloc on Linux may want to include this file if using some low-level Linux features. </p>
</div>
<?php
include_once("$topdir/includes/footer.inc");
