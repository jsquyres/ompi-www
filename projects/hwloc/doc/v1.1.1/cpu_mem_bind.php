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
<h1>CPU and Memory Binding Overview </h1>  </div>
</div>
<div class="contents">
<p>Some operating systems do not systematically provide separate functions for CPU and memory binding. This means that CPU binding functions may have have effects on the memory binding policy. Likewise, changing the memory binding policy may change the CPU binding of the current thread. This is often not a problem for applications, so by default hwloc will make use of these functions when they provide better binding support.</p>
<p>If the application does not want the CPU binding to change when changing the memory policy, it needs to use the HWLOC_MEMBIND_NOCPUBIND flag to prevent hwloc from using OS functions which would change the CPU binding. Additionally, HWLOC_CPUBIND_NOMEMBIND can be passed to CPU binding function to prevent hwloc from using OS functions would change the memory binding policy. Of course, using these flags will reduce hwloc's overall support for binding, so their use is discouraged.</p>
<p>One can avoid using these flags but still closely control both memory and CPU binding by allocating memory, touching each page in the allocated memory, and then changing the CPU binding. The already-really-allocated memory will then be "locked" to physical memory and will not be migrated. Thus, even if the memory binding policy gets changed by the CPU binding order, the already-allocated memory will not change with it. When binding and allocating further memory, the CPU binding should be performed again in case the memory binding altered the previously-selected CPU binding.</p>
<p>Not all operating systems support the notion of a "current" memory binding policy for the current process, but such operating systems often still provide a way to allocate data on a given node set. Conversely, some operating systems support the notion of a "current" memory binding policy and do not permit allocating data on a specific node set without changing the current policy and allocate the data. To provide the most powerful coverage of these facilities, hwloc provides:</p>
<ul>
<li>
functions that set/get the current memory binding policies (if supported): hwloc_set/get_membind_*() and hwloc_set/get_proc_membind() </li>
<li>
functions that allocate memory bound to specific node set without changing the current memory binding policy (if supported): <a class="el" href="group__hwlocality__membinding.php#ga221a7edc5d436300374fa16463f607e5" title="Allocate some memory on memory nodes near the given cpuset cpuset.">hwloc_alloc_membind()</a> and <a class="el" href="group__hwlocality__membinding.php#gaeaa00714a9c4319bda0a74ca6f8720e8" title="Allocate some memory on the given nodeset nodeset.">hwloc_alloc_membind_nodeset()</a>. </li>
<li>
helpers which, if needed, change the current memory binding policy of the process in order to obtain memory binding: <a class="el" href="group__hwlocality__helper__binding.php#ga6178c6a9ec1dd88ec9f6a9fcdcc7d634" title="Allocate some memory on the memory nodes near given cpuset cpuset.">hwloc_alloc_membind_policy()</a> and <a class="el" href="group__hwlocality__helper__binding.php#ga3e772fbc4de626ed80f13d332b7d4d03" title="Allocate some memory on the given nodeset nodeset.">hwloc_alloc_membind_policy_nodeset()</a> </li>
</ul>
<p>An application can thus use the two first sets of functions if it wants to manage separately the global process binding policy and directed allocation, or use the third set of functions if it does not care about the process memory binding policy.</p>
<p>See <a class="el" href="group__hwlocality__cpubinding.php">CPU binding</a> and <a class="el" href="group__hwlocality__membinding.php">Memory binding</a> for hwloc's API functions regarding CPU and memory binding, respectively. </p>
</div>
<?php
include_once("$topdir/includes/footer.inc");
