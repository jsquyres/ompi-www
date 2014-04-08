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
      <li><a href="pages.php"><span>Related&nbsp;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&nbsp;Structures</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div class="tabs">
    <ul>
      <li><a href="files.php"><span>File&nbsp;List</span></a></li>
      <li><a href="globals.php"><span>Globals</span></a></li>
    </ul>
  </div>
</div>
<div class="contents">
<h1>glibc-sched.h File Reference</h1>
<p>Macros to help interaction between hwloc and glibc scheduling routines.  
<a href="#_details">More...</a></p>
<code>#include &lt;<a class="el" href="hwloc_8h_source.php">hwloc.h</a>&gt;</code><br/>
<code>#include &lt;<a class="el" href="helper_8h_source.php">hwloc/helper.h</a>&gt;</code><br/>

<p><a href="glibc-sched_8h_source.php">Go to the source code of this file.</a></p>
<table border="0" cellpadding="0" cellspacing="0">
<tr><td colspan="2"><h2>Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline void&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__glibc__sched.php#ga8d52ded42a9b3d832672d642798cdd8a">hwloc_cpuset_to_glibc_sched_affinity</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a> hwlocset, cpu_set_t *schedset, size_t schedsetsize)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Convert hwloc CPU set <code>toposet</code> into glibc sched affinity CPU set <code>schedset</code>.  <a href="group__hwlocality__glibc__sched.php#ga8d52ded42a9b3d832672d642798cdd8a"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline <a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__glibc__sched.php#ga95a1b94fc109895ee13b17bddac08f5f">hwloc_cpuset_from_glibc_sched_affinity</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, const cpu_set_t *schedset, size_t schedsetsize)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Convert glibc sched affinity CPU set <code>schedset</code> into hwloc CPU set.  <a href="group__hwlocality__glibc__sched.php#ga95a1b94fc109895ee13b17bddac08f5f"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>Macros to help interaction between hwloc and glibc scheduling routines. </p>
<p>Applications that use both hwloc and glibc scheduling routines such as sched_getaffinity may want to include this file so as to ease conversion between their respective types. </p>
</div>
<?php
include_once("$topdir/includes/footer.inc");
