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
<h1>Helpers for manipulating Linux libnuma nodemask_t</h1>  </div>
</div>
<div class="contents">
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="func-members"></a>
Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__linux__libnuma__nodemask.php#ga36feb81315de87ce11d9a5aa2b4c6e6d">hwloc_cpuset_to_linux_libnuma_nodemask</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> cpuset, nodemask_t *nodemask)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Convert hwloc CPU set <code>cpuset</code> into libnuma nodemask <code>nodemask</code>.  <a href="#ga36feb81315de87ce11d9a5aa2b4c6e6d"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__linux__libnuma__nodemask.php#gac24c9e4bb2eab3e23b2039559adc9df8">hwloc_cpuset_from_linux_libnuma_nodemask</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a> cpuset, const nodemask_t *nodemask)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Convert libnuma nodemask <code>nodemask</code> into hwloc CPU set <code>cpuset</code>.  <a href="#gac24c9e4bb2eab3e23b2039559adc9df8"></a><br/></td></tr>
</table>
<hr/><h2>Function Documentation</h2>
<a class="anchor" id="gac24c9e4bb2eab3e23b2039559adc9df8"></a><!-- doxytag: member="linux&#45;libnuma.h::hwloc_cpuset_from_linux_libnuma_nodemask" ref="gac24c9e4bb2eab3e23b2039559adc9df8" args="(hwloc_topology_t topology, hwloc_cpuset_t cpuset, const nodemask_t *nodemask)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline int hwloc_cpuset_from_linux_libnuma_nodemask </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&nbsp;</td>
          <td class="paramname"> <em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a>&nbsp;</td>
          <td class="paramname"> <em>cpuset</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const nodemask_t *&nbsp;</td>
          <td class="paramname"> <em>nodemask</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td><code> [static]</code></td>
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
          <td class="memname">static inline int hwloc_cpuset_to_linux_libnuma_nodemask </td>
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
          <td class="paramtype">nodemask_t *&nbsp;</td>
          <td class="paramname"> <em>nodemask</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Convert hwloc CPU set <code>cpuset</code> into libnuma nodemask <code>nodemask</code>. </p>
<p>This function may be used before calling some old libnuma functions that use a nodemask_t as an input parameter. </p>

</div>
</div>
</div>
<?php
include_once("$topdir/includes/footer.inc");
