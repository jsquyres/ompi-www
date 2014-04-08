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
      <li class="current"><a href="pages.php"><span>Related&nbsp;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&nbsp;Structures</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
</div>
<div class="header">
  <div class="headertitle">
<h1>Thread safety </h1>  </div>
</div>
<div class="contents">
<p>Like most libraries that mainly fill data structures, hwloc is not thread safe but rather reentrant: all state is held in a <a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> instance without mutex protection. That means, for example, that two threads can safely operate on and modify two different <a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> instances, but they should not simultaneously invoke functions that modify the <em>same</em> instance. Similarly, one thread should not modify a <a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> instance while another thread is reading or traversing it. However, two threads can safely read or traverse the same <a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> instance concurrently.</p>
<p>When running in multiprocessor environments, be aware that proper thread synchronization and/or memory coherency protection is needed to pass hwloc data (such as <a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> pointers) from one processor to another (e.g., a mutex, semaphore, or a memory barrier). Note that this is not a hwloc-specific requirement, but it is worth mentioning.</p>
<p>For reference, <a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> modification operations include (but may not be limited to):</p>
<dl>
<dt>Creation and destruction </dt>
<dd><p class="startdd"><code><a class="el" href="group__hwlocality__creation.php#ga5c2d6f476af87005c7bd0811d4548b9f" title="Allocate a topology context.">hwloc_topology_init()</a>, <a class="el" href="group__hwlocality__creation.php#ga91e2e6427b95fb7339c99dbbef996e71" title="Build the actual topology.">hwloc_topology_load()</a>, <a class="el" href="group__hwlocality__creation.php#ga6040925d3ee4bbb2647f2a321aca5f4b" title="Terminate and free a topology context.">hwloc_topology_destroy()</a></code> (see <a class="el" href="group__hwlocality__creation.php">Create and Destroy Topologies</a>) imply major modifications of the structure, including freeing some objects. No other thread cannot access the topology or any of its objects at the same time.</p>
<p>Also references to objects inside the topology are not valid anymore after these functions return. </p>
<p class="enddd"></p>
</dd>
<dt>Runtime topology modifications </dt>
<dd><p class="startdd"><code>hwloc_topology_insert_misc_object_by_*</code> (see <a class="el" href="group__hwlocality__tinker.php">Tinker with topologies.</a>) may modify the topology significantly by adding objects inside the tree, changing the topology depth, etc.</p>
<p>Although references to former objects <em>may</em> still be valid after insertion, it is strongly advised to not rely on any such guarantee and always re-consult the topology to reacquire new instances of objects. </p>
<p class="enddd"></p>
</dd>
<dt>Locating topologies  </dt>
<dd><p class="startdd"><code>hwloc_topology_ignore*</code>, <code>hwloc_topology_set*</code> (see <a class="el" href="group__hwlocality__configuration.php">Configure Topology Detection</a>) do not modify the topology directly, but they do modify internal structures describing the behavior of the next invocation of <code><a class="el" href="group__hwlocality__creation.php#ga91e2e6427b95fb7339c99dbbef996e71" title="Build the actual topology.">hwloc_topology_load()</a></code>. Hence, all of these functions should not be used concurrently.</p>
<p>Note that these functions do not modify the current topology until it is actually reloaded; it is possible to use them while other threads are only read the current topology. </p>
<p class="enddd"></p>
</dd>
</dl>
</div>
<?php
include_once("$topdir/includes/footer.inc");
