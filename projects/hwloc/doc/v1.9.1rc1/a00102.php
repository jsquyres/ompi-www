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
<!-- Generated by Doxygen 1.8.8 -->
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
<div class="title">Linux-specific helpers</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:gaa5a608236c3c0757b0b79818f1d429fb"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00102.php#gaa5a608236c3c0757b0b79818f1d429fb">hwloc_linux_parse_cpumap_file</a> (FILE *file, <a class="el" href="a00073.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> set)</td></tr>
<tr class="separator:gaa5a608236c3c0757b0b79818f1d429fb"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga630e699c56b5f3d2e534b475944c216e"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00102.php#ga630e699c56b5f3d2e534b475944c216e">hwloc_linux_set_tid_cpubind</a> (<a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, pid_t tid, <a class="el" href="a00073.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set)</td></tr>
<tr class="separator:ga630e699c56b5f3d2e534b475944c216e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gaddcb985cb56337a4d6693cee72e7bf94"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00102.php#gaddcb985cb56337a4d6693cee72e7bf94">hwloc_linux_get_tid_cpubind</a> (<a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, pid_t tid, <a class="el" href="a00073.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> set)</td></tr>
<tr class="separator:gaddcb985cb56337a4d6693cee72e7bf94"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gacc7945c2d06c6db1e58f8fd953009134"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00102.php#gacc7945c2d06c6db1e58f8fd953009134">hwloc_linux_get_tid_last_cpu_location</a> (<a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, pid_t tid, <a class="el" href="a00095.php#gaa3c2bf4c776d603dcebbb61b0c923d84">hwloc_bitmap_t</a> set)</td></tr>
<tr class="separator:gacc7945c2d06c6db1e58f8fd953009134"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<p>This includes helpers for manipulating Linux kernel cpumap files, and hwloc equivalents of the Linux sched_setaffinity and sched_getaffinity system calls. </p>
<h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="gaddcb985cb56337a4d6693cee72e7bf94"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int hwloc_linux_get_tid_cpubind </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">pid_t&#160;</td>
          <td class="paramname"><em>tid</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00073.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the current binding of thread <code>tid</code>. </p>
<p>The behavior is exactly the same as the Linux sched_getaffinity system call, but uses a hwloc cpuset.</p>
<dl class="section note"><dt>Note</dt><dd>This is equivalent to calling <a class="el" href="a00080.php#gac82de91f788fa82dacf99c6e0d4b7158" title="Get the current physical binding of process pid. ">hwloc_get_proc_cpubind()</a> with HWLOC_CPUBIND_THREAD as flags. </dd></dl>

</div>
</div>
<a class="anchor" id="gacc7945c2d06c6db1e58f8fd953009134"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int hwloc_linux_get_tid_last_cpu_location </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">pid_t&#160;</td>
          <td class="paramname"><em>tid</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00095.php#gaa3c2bf4c776d603dcebbb61b0c923d84">hwloc_bitmap_t</a>&#160;</td>
          <td class="paramname"><em>set</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the last physical CPU where thread <code>tid</code> ran. </p>
<dl class="section note"><dt>Note</dt><dd>This is equivalent to calling <a class="el" href="a00080.php#ga910a05c2d47f68a3155bf176b50fa555" title="Get the last physical CPU where a process ran. ">hwloc_get_proc_last_cpu_location()</a> with HWLOC_CPUBIND_THREAD as flags. </dd></dl>

</div>
</div>
<a class="anchor" id="gaa5a608236c3c0757b0b79818f1d429fb"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int hwloc_linux_parse_cpumap_file </td>
          <td>(</td>
          <td class="paramtype">FILE *&#160;</td>
          <td class="paramname"><em>file</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00073.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Convert a linux kernel cpumap file <code>file</code> into hwloc CPU set. </p>
<p>Might be used when reading CPU set from sysfs attributes such as topology and caches for processors, or local_cpus for devices. </p>

</div>
</div>
<a class="anchor" id="ga630e699c56b5f3d2e534b475944c216e"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int hwloc_linux_set_tid_cpubind </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">pid_t&#160;</td>
          <td class="paramname"><em>tid</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00073.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Bind a thread <code>tid</code> on cpus given in cpuset <code>set</code>. </p>
<p>The behavior is exactly the same as the Linux sched_setaffinity system call, but uses a hwloc cpuset.</p>
<dl class="section note"><dt>Note</dt><dd>This is equivalent to calling <a class="el" href="a00080.php#ga296db8a3c6d49b51fb83d6f3e45c02a6" title="Bind a process pid on cpus given in physical bitmap set. ">hwloc_set_proc_cpubind()</a> with HWLOC_CPUBIND_THREAD as flags. </dd></dl>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
