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
<!-- Generated by Doxygen 1.7.3 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
      <li class="current"><a href="globals.php"><span>Globals</span></a></li>
    </ul>
  </div>
  <div id="navrow3" class="tabs2">
    <ul class="tablist">
      <li><a href="globals.php"><span>All</span></a></li>
      <li><a href="globals_func.php"><span>Functions</span></a></li>
      <li><a href="globals_type.php"><span>Typedefs</span></a></li>
      <li class="current"><a href="globals_enum.php"><span>Enumerations</span></a></li>
      <li><a href="globals_eval.php"><span>Enumerator</span></a></li>
      <li><a href="globals_defs.php"><span>Defines</span></a></li>
    </ul>
  </div>
</div>
<div class="contents">
&#160;<ul>
<li>hwloc_compare_types_e
: <a class="el" href="group__hwlocality__types.php#ga46323568968005137c32f6a1cd405b74">hwloc.h</a>
</li>
<li>hwloc_cpubind_flags_t
: <a class="el" href="group__hwlocality__cpubinding.php#ga217dc8d373f8958cc93c154ebce1c71c">hwloc.h</a>
</li>
<li>hwloc_get_type_depth_e
: <a class="el" href="group__hwlocality__information.php#gaf4e663cf42bbe20756b849c6293ef575">hwloc.h</a>
</li>
<li>hwloc_membind_flags_t
: <a class="el" href="group__hwlocality__membinding.php#gab00475fd98815bf4fb9aaf752030e7d2">hwloc.h</a>
</li>
<li>hwloc_membind_policy_t
: <a class="el" href="group__hwlocality__membinding.php#gac9764f79505775d06407b40f5e4661e8">hwloc.h</a>
</li>
<li>hwloc_obj_type_t
: <a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc.h</a>
</li>
<li>hwloc_topology_flags_e
: <a class="el" href="group__hwlocality__configuration.php#gada025d3ec20b4b420f8038d23d6e7bde">hwloc.h</a>
</li>
</ul>
</div>
<?php
include_once("$topdir/includes/footer.inc");
