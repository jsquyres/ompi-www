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
<!-- Generated by Doxygen 1.6.2 -->
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
<h1>linux.h</h1><a href="linux_8h.php">Go to the documentation of this file.</a><div class="fragment"><pre class="fragment"><a name="l00001"></a>00001 <span class="comment">/*</span>
<a name="l00002"></a>00002 <span class="comment"> * Copyright © 2009 CNRS, INRIA, Université Bordeaux 1</span>
<a name="l00003"></a>00003 <span class="comment"> * See COPYING in top-level directory.</span>
<a name="l00004"></a>00004 <span class="comment"> */</span>
<a name="l00005"></a>00005 
<a name="l00013"></a>00013 <span class="preprocessor">#ifndef HWLOC_LINUX_H</span>
<a name="l00014"></a>00014 <span class="preprocessor"></span><span class="preprocessor">#define HWLOC_LINUX_H</span>
<a name="l00015"></a>00015 <span class="preprocessor"></span>
<a name="l00016"></a>00016 <span class="preprocessor">#include &lt;<a class="code" href="hwloc_8h.php" title="The hwloc API.">hwloc.h</a>&gt;</span>
<a name="l00017"></a>00017 <span class="preprocessor">#include &lt;stdio.h&gt;</span>
<a name="l00018"></a>00018 
<a name="l00032"></a>00032  <span class="keywordtype">int</span> <a class="code" href="group__hwlocality__linux.php#gaeacad897c30dbea284948374ad4b010c" title="Convert a linux kernel cpumap file file into hwloc CPU set.">hwloc_linux_parse_cpumap_file</a>(FILE *file, <a class="code" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411" title="Set of CPUs represented as an opaque pointer to an internal bitmask.">hwloc_cpuset_t</a> <span class="keyword">set</span>);
<a name="l00033"></a>00033 
<a name="l00039"></a>00039  <span class="keywordtype">int</span> <a class="code" href="group__hwlocality__linux.php#gaaaca5d1687053b6c3326b2c165bd6530" title="Bind a thread tid on cpus given in cpuset set.">hwloc_linux_set_tid_cpubind</a>(<a class="code" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context.">hwloc_topology_t</a> topology, pid_t tid, <a class="code" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> <span class="keyword">set</span>);
<a name="l00040"></a>00040 
<a name="l00046"></a>00046  <span class="keywordtype">int</span> <a class="code" href="group__hwlocality__linux.php#gaf36a9211a21eb930f59090eb5d460b8e" title="Get the current binding of thread tid.">hwloc_linux_get_tid_cpubind</a>(<a class="code" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context.">hwloc_topology_t</a> topology, pid_t tid, <a class="code" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411" title="Set of CPUs represented as an opaque pointer to an internal bitmask.">hwloc_cpuset_t</a> <span class="keyword">set</span>);
<a name="l00047"></a>00047 
<a name="l00050"></a>00050 <span class="preprocessor">#endif </span><span class="comment">/* HWLOC_GLIBC_SCHED_H */</span>
</pre></div></div>
<?php
include_once("$topdir/includes/footer.inc");
