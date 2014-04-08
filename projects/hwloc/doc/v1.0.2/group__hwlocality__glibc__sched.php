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
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
</div>
<div class="contents">
<h1>Helpers for manipulating glibc sched affinity</h1><table border="0" cellpadding="0" cellspacing="0">
<tr><td colspan="2"><h2>Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__glibc__sched.php#ga39454e6013441d32e58ef4c4fcba7e4b">hwloc_cpuset_to_glibc_sched_affinity</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology , <a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> hwlocset, cpu_set_t *schedset, size_t schedsetsize)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Convert hwloc CPU set <code>toposet</code> into glibc sched affinity CPU set <code>schedset</code>.  <a href="#ga39454e6013441d32e58ef4c4fcba7e4b"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__glibc__sched.php#ga6df504b2f5440b527be05cdad6b1655e">hwloc_cpuset_from_glibc_sched_affinity</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology , <a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a> hwlocset, const cpu_set_t *schedset, size_t schedsetsize)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Convert glibc sched affinity CPU set <code>schedset</code> into hwloc CPU set.  <a href="#ga6df504b2f5440b527be05cdad6b1655e"></a><br/></td></tr>
</table>
<hr/><h2>Function Documentation</h2>
<a class="anchor" id="ga6df504b2f5440b527be05cdad6b1655e"></a><!-- doxytag: member="glibc&#45;sched.h::hwloc_cpuset_from_glibc_sched_affinity" ref="ga6df504b2f5440b527be05cdad6b1655e" args="(hwloc_topology_t topology , hwloc_cpuset_t hwlocset, const cpu_set_t *schedset, size_t schedsetsize)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline int hwloc_cpuset_from_glibc_sched_affinity </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology&nbsp;</td>
          <td class="paramname"> <em></em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a>&nbsp;</td>
          <td class="paramname"> <em>hwlocset</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const cpu_set_t *&nbsp;</td>
          <td class="paramname"> <em>schedset</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">size_t&nbsp;</td>
          <td class="paramname"> <em>schedsetsize</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Convert glibc sched affinity CPU set <code>schedset</code> into hwloc CPU set. </p>
<p>This function may be used before calling sched_setaffinity or any other function that takes a cpu_set_t as input parameter.</p>
<p><code>schedsetsize</code> should be sizeof(cpu_set_t) unless <code>schedset</code> was dynamically allocated with CPU_ALLOC </p>

</div>
</div>
<a class="anchor" id="ga39454e6013441d32e58ef4c4fcba7e4b"></a><!-- doxytag: member="glibc&#45;sched.h::hwloc_cpuset_to_glibc_sched_affinity" ref="ga39454e6013441d32e58ef4c4fcba7e4b" args="(hwloc_topology_t topology , hwloc_const_cpuset_t hwlocset, cpu_set_t *schedset, size_t schedsetsize)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline int hwloc_cpuset_to_glibc_sched_affinity </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology&nbsp;</td>
          <td class="paramname"> <em></em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a>&nbsp;</td>
          <td class="paramname"> <em>hwlocset</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">cpu_set_t *&nbsp;</td>
          <td class="paramname"> <em>schedset</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">size_t&nbsp;</td>
          <td class="paramname"> <em>schedsetsize</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Convert hwloc CPU set <code>toposet</code> into glibc sched affinity CPU set <code>schedset</code>. </p>
<p>This function may be used before calling sched_setaffinity or any other function that takes a cpu_set_t as input parameter.</p>
<p><code>schedsetsize</code> should be sizeof(cpu_set_t) unless <code>schedset</code> was dynamically allocated with CPU_ALLOC </p>

</div>
</div>
</div>
<?php
include_once("$topdir/includes/footer.inc");
