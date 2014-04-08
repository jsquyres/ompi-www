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
<!-- Generated by Doxygen 1.8.6 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li class="current"><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Thread Safety </div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><p>Like most libraries that mainly fill data structures, hwloc is not thread safe but rather reentrant: all state is held in a <a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> instance without mutex protection. That means, for example, that two threads can safely operate on and modify two different <a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> instances, but they should not simultaneously invoke functions that modify the <em>same</em> instance. Similarly, one thread should not modify a <a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> instance while another thread is reading or traversing it. However, two threads can safely read or traverse the same <a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> instance concurrently.</p>
<p>When running in multiprocessor environments, be aware that proper thread synchronization and/or memory coherency protection is needed to pass hwloc data (such as <a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> pointers) from one processor to another (e.g., a mutex, semaphore, or a memory barrier). Note that this is not a hwloc-specific requirement, but it is worth mentioning.</p>
<p>For reference, <a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> modification operations include (but may not be limited to):</p>
<dl>
<dt>Creation and destruction </dt>
<dd><p class="startdd"><code><a class="el" href="a00076.php#ga03fd4a16d8b9ee1ffc32b25fd2f6bdfa" title="Allocate a topology context. ">hwloc_topology_init()</a>, <a class="el" href="a00076.php#gabdf58d87ad77f6615fccdfe0535ff826" title="Build the actual topology. ">hwloc_topology_load()</a>, <a class="el" href="a00076.php#ga9f34a640b6fd28d23699d4d084667b15" title="Terminate and free a topology context. ">hwloc_topology_destroy()</a></code> (see <a class="el" href="a00076.php">Topology Creation and Destruction</a>) imply major modifications of the structure, including freeing some objects. No other thread cannot access the topology or any of its objects at the same time.</p>
<p>Also references to objects inside the topology are not valid anymore after these functions return. </p>
<p class="enddd"></p>
</dd>
<dt>Runtime topology modifications </dt>
<dd><p class="startdd"><code>hwloc_topology_insert_misc_object_by_*</code> (see <a class="el" href="a00082.php">Modifying a loaded Topology</a>) may modify the topology significantly by adding objects inside the tree, changing the topology depth, etc. <code>hwloc_topology_restrict</code> modifies the topology even more dramatically by removing some objects.</p>
<p>Although references to former objects <em>may</em> still be valid after insertion or restriction, it is strongly advised to not rely on any such guarantee and always re-consult the topology to reacquire new instances of objects. </p>
<p class="enddd"></p>
</dd>
<dt>Locating topologies  </dt>
<dd><p class="startdd"><code>hwloc_topology_ignore*</code>, <code>hwloc_topology_set*</code> (see <a class="el" href="a00077.php">Topology Detection Configuration and Query</a>) do not modify the topology directly, but they do modify internal structures describing the behavior of the upcoming invocation of <code><a class="el" href="a00076.php#gabdf58d87ad77f6615fccdfe0535ff826" title="Build the actual topology. ">hwloc_topology_load()</a></code>. Hence, all of these functions should not be used concurrently. </p>
<p class="enddd"></p>
</dd>
</dl>
</div></div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
