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
<!-- Generated by Doxygen 1.7.2 -->
<div class="navigation" id="top">
  <div class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li class="current"><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
</div>
<div class="header">
  <div class="headertitle">
<h1>Switching from PLPA to hwloc </h1>  </div>
</div>
<div class="contents">
<p>Although PLPA and hwloc share some of the same ideas, their programming interfaces are quite different. After much debate, it was decided <em>not</em> to emulate the PLPA API with hwloc's API because hwloc's API is already far more rich than PLPA's.</p>
<p>More specifically, exploiting modern computing architecture <em>requires</em> the flexible functionality provided by the hwloc API -- the PLPA API is too rigid in its definitions and practices to handle the evolving server hardware landscape (e.g., PLPA only understands cores and sockets; hwloc understands a much larger set of hardware objects).</p>
<p>As such, even though it is fully possible to emulate the PLPA API with hwloc (e.g., only deal with sockets and cores), and while the documentation below describes how to do this, we encourage any existing PLPA application authors to actually re-think their application in terms of more than just sockets and cores. In short, we encourage you to use the full hwloc API to exploit <em>all</em> the hardware.</p>
<h2><a class="anchor" id="switchfromplpa_caching"></a>
Topology Context vs. Caching</h2>
<p>First, all hwloc functions take a <code>topology</code> parameter. This parameter serves as an internal storage for the result of the topology discovery. It replaces PLPA's caching abilities and even lets you manipulate multiple topologies as the same time, if needed.</p>
<p>Thus, all programs should first run <a class="el" href="group__hwlocality__creation.php#ga5c2d6f476af87005c7bd0811d4548b9f" title="Allocate a topology context.">hwloc_topology_init()</a> and <a class="el" href="group__hwlocality__creation.php#ga6040925d3ee4bbb2647f2a321aca5f4b" title="Terminate and free a topology context.">hwloc_topology_destroy()</a> as they did plpa_init() and plpa_finalize() in the past.</p>
<h2><a class="anchor" id="switchfromplpa_hierarchy"></a>
Hierarchy vs. Core@Socket</h2>
<p>PLPA was designed to understand only cores and sockets. hwloc offers many more different types of objects (e.g., cores, sockets, hardware threads, NUMA nodes, and others) and stores them within a tree of resources.</p>
<p>To emulate the PLPA model, it is possible to find sockets using functions such as <a class="el" href="group__hwlocality__traversal.php#ga701f83b2cf0cb8e0acd58cd2dc1c67a2" title="Returns the topology object at index index with type type.">hwloc_get_obj_by_type()</a>. Iterating over sockets is also possible using <a class="el" href="group__hwlocality__helper__traversal__basic.php#ga5f08ceb69375341e73563cfe2e77534e" title="Returns the next object of type type.">hwloc_get_next_obj_by_type()</a>. Then, finding a core within a socket may be done using <a class="el" href="group__hwlocality__helper__find__inside.php#ga50a80a0021e5843d968c3b97aebaad9b" title="Return the idx -th object of type type included in CPU set set.">hwloc_get_obj_inside_cpuset_by_type()</a> or <a class="el" href="group__hwlocality__helper__find__inside.php#ga934e7ecd68b33403e0c0be779d9ed1e6" title="Return the next object of type type included in CPU set set.">hwloc_get_next_obj_inside_cpuset_by_type()</a>.</p>
<p>It is also possible to directly find an object "below" another object using <a class="el" href="group__hwlocality__helper__traversal.php#ga3d32c128aa36b5c9d56f6bf9e70d0e78" title="Find an object below another object, both specified by types and indexes.">hwloc_get_obj_below_by_type()</a> (or <a class="el" href="group__hwlocality__helper__traversal.php#ga340bb7021204078c30382ea77d38bde9" title="Find an object below a chain of objects specified by types and indexes.">hwloc_get_obj_below_array_by_type()</a>).</p>
<h2><a class="anchor" id="switchfromplpa_indexes"></a>
Logical vs. Physical/OS Indexes</h2>
<p>hwloc manipulates logical indexes, meaning indexes specified with regard to the ordering of objects in the hwloc-provided hierarchical tree. Physical or OS indexes may be entirely hidden if not strictly required. The reason for this is that physical/OS indexes may change with the OS or with the BIOS version. They may be non-consecutive, multiple objects may have the same physical/OS indexes, making their manipulation tricky and highly non-portable.</p>
<p>Note that hwloc tries very hard to always present a hierarchical tree with the same logical ordering, regardless of physical or OS index ordering.</p>
<p>It is still possible to retrieve physical/OS indexes through the <code>os_index</code> field of objects, but such practice should be avoided as much as possible for the reasons described above (except perhaps for prettyprinting / debugging purposes).</p>
<p><a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55abca6887e80cb291353b0a0c1da83f661" title="Processing Unit, or (Logical) Processor. An execution unit (may share a core with some other logical ...">HWLOC_OBJ_PU</a> objects are supposed to have different physical/OS indexes since the OS uses them for binding. The <code>os_index</code> field of these objects provides the identifier that may be used for such binding, and hwloc_get_proc_obj_by_os_index() finds the object associated with a specific OS index.</p>
<p>But as mentioned above, we discourage the use of these conversion methods for actual binding. Instead, hwloc offers its own binding model using the <code>cpuset</code> field of objects. These cpusets may be duplicated, modified, combined, etc. (see <a class="el" href="bitmap_8h.php" title="The bitmap API, for use in hwloc itself.">hwloc/bitmap.h</a> for details) and then passed to <a class="el" href="group__hwlocality__cpubinding.php#gaf4cc194d5c0d38004a21b9f03522a7e3" title="Bind current process or thread on cpus given in bitmap set.">hwloc_set_cpubind()</a> for binding.</p>
<h2><a class="anchor" id="switchfromplpa_counting"></a>
Counting Specification</h2>
<p>PLPA offers a countspec parameter to specify whether counting all CPUs, only the online ones or only the offline ones. However, some operating systems do not expose the topology of offline CPUs (i.e., offline CPUs are not reported at all by the OS). Also, some processors may not be visible to the current application due to administrative restrictions. Finally, some processors let you shutdown a single hardware thread in a core, making some of the PLPA features irrelevant.</p>
<p>hwloc stores in the hierarchical tree of objects all CPUs that have known topology information. It then provides the applications with several cpusets that contain the list of CPUs that are actually known, that have topology information, that are online, or that are available to the application. These cpusets may be retrieved with <a class="el" href="group__hwlocality__helper__cpuset.php#gad00abc77f1670049a5b2139471d0c8db" title="Get online CPU set.">hwloc_topology_get_online_cpuset()</a> and other similar functions to filter the object that are relevant or not. </p>
</div>
<?php
include_once("$topdir/includes/footer.inc");
