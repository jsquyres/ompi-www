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
      <li><a href="globals_enum.php"><span>Enumerations</span></a></li>
      <li class="current"><a href="globals_eval.php"><span>Enumerator</span></a></li>
      <li><a href="globals_defs.php"><span>Defines</span></a></li>
    </ul>
  </div>
</div>
<div class="contents">
&#160;<ul>
<li>HWLOC_CPUBIND_NOMEMBIND
: <a class="el" href="group__hwlocality__cpubinding.php#gga217dc8d373f8958cc93c154ebce1c71ca41ce440443cc3087caed95ab60edcad6">hwloc.h</a>
</li>
<li>HWLOC_CPUBIND_PROCESS
: <a class="el" href="group__hwlocality__cpubinding.php#gga217dc8d373f8958cc93c154ebce1c71ca2e0dd0128dac6b03408c7dd170477fdc">hwloc.h</a>
</li>
<li>HWLOC_CPUBIND_STRICT
: <a class="el" href="group__hwlocality__cpubinding.php#gga217dc8d373f8958cc93c154ebce1c71ca679a7e0f0c7ee06b123565f90d98e7fa">hwloc.h</a>
</li>
<li>HWLOC_CPUBIND_THREAD
: <a class="el" href="group__hwlocality__cpubinding.php#gga217dc8d373f8958cc93c154ebce1c71caf1b6bbad00d7b1017b918e3719f4d421">hwloc.h</a>
</li>
<li>HWLOC_MEMBIND_BIND
: <a class="el" href="group__hwlocality__membinding.php#ggac9764f79505775d06407b40f5e4661e8ad811fa4b2a6002c4d63695a408ffde2c">hwloc.h</a>
</li>
<li>HWLOC_MEMBIND_DEFAULT
: <a class="el" href="group__hwlocality__membinding.php#ggac9764f79505775d06407b40f5e4661e8a18675bb80ebc1bce5b652e9de8f3998c">hwloc.h</a>
</li>
<li>HWLOC_MEMBIND_FIRSTTOUCH
: <a class="el" href="group__hwlocality__membinding.php#ggac9764f79505775d06407b40f5e4661e8a979c7aa78dd32780858f30f47a72cca0">hwloc.h</a>
</li>
<li>HWLOC_MEMBIND_INTERLEAVE
: <a class="el" href="group__hwlocality__membinding.php#ggac9764f79505775d06407b40f5e4661e8ae370075e5af016d42310f87ea5af236b">hwloc.h</a>
</li>
<li>HWLOC_MEMBIND_MIGRATE
: <a class="el" href="group__hwlocality__membinding.php#ggab00475fd98815bf4fb9aaf752030e7d2aa6e49e54f52827cb143cc869cfd748af">hwloc.h</a>
</li>
<li>HWLOC_MEMBIND_MIXED
: <a class="el" href="group__hwlocality__membinding.php#ggac9764f79505775d06407b40f5e4661e8a3185bd869b67817fb2bd5164bf360402">hwloc.h</a>
</li>
<li>HWLOC_MEMBIND_NEXTTOUCH
: <a class="el" href="group__hwlocality__membinding.php#ggac9764f79505775d06407b40f5e4661e8aecdd4164d647708fbb51a00d98dbb138">hwloc.h</a>
</li>
<li>HWLOC_MEMBIND_NOCPUBIND
: <a class="el" href="group__hwlocality__membinding.php#ggab00475fd98815bf4fb9aaf752030e7d2aad6b9eaf2ee324ca58dc8f58094b9997">hwloc.h</a>
</li>
<li>HWLOC_MEMBIND_PROCESS
: <a class="el" href="group__hwlocality__membinding.php#ggab00475fd98815bf4fb9aaf752030e7d2a1b1b74aef138f64aff214a8cbdfe8eb4">hwloc.h</a>
</li>
<li>HWLOC_MEMBIND_REPLICATE
: <a class="el" href="group__hwlocality__membinding.php#ggac9764f79505775d06407b40f5e4661e8afb37480fe5f4236eb7dd4aef26f691e9">hwloc.h</a>
</li>
<li>HWLOC_MEMBIND_STRICT
: <a class="el" href="group__hwlocality__membinding.php#ggab00475fd98815bf4fb9aaf752030e7d2a0335311a0ee04166df2888d52b4a42c6">hwloc.h</a>
</li>
<li>HWLOC_MEMBIND_THREAD
: <a class="el" href="group__hwlocality__membinding.php#ggab00475fd98815bf4fb9aaf752030e7d2a1dc7dd5cdcd5796893a325a524555298">hwloc.h</a>
</li>
<li>HWLOC_OBJ_CACHE
: <a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a56ee0b7eca88f363b75b34fdde8c9ddc">hwloc.h</a>
</li>
<li>HWLOC_OBJ_CORE
: <a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55ac793958f330bca371aa1535de8aff45f">hwloc.h</a>
</li>
<li>HWLOC_OBJ_GROUP
: <a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a5269ef95be72f88465559d35c9b7ad56">hwloc.h</a>
</li>
<li>HWLOC_OBJ_MACHINE
: <a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a3f4e83ffc4a259354959ae8a9eaa2a80">hwloc.h</a>
</li>
<li>HWLOC_OBJ_MISC
: <a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a19f8a6953fa91efc76bcbcdf2d22de4d">hwloc.h</a>
</li>
<li>HWLOC_OBJ_NODE
: <a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55aaf0964881117bdedf1a5e9332cd120dd">hwloc.h</a>
</li>
<li>HWLOC_OBJ_PU
: <a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55abca6887e80cb291353b0a0c1da83f661">hwloc.h</a>
</li>
<li>HWLOC_OBJ_SOCKET
: <a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a1ac6e07775ae4324b3fe9dbd72c785ec">hwloc.h</a>
</li>
<li>HWLOC_OBJ_SYSTEM
: <a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a3aa1b842d1fd4207ebce171f95a244ec">hwloc.h</a>
</li>
<li>HWLOC_TOPOLOGY_FLAG_IS_THISSYSTEM
: <a class="el" href="group__hwlocality__configuration.php#ggada025d3ec20b4b420f8038d23d6e7bdea6ecb6abc6a0bb75e81564f8bca85783b">hwloc.h</a>
</li>
<li>HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM
: <a class="el" href="group__hwlocality__configuration.php#ggada025d3ec20b4b420f8038d23d6e7bdea129b4fea1300be22bbaf0bb0958994c8">hwloc.h</a>
</li>
<li>HWLOC_TYPE_DEPTH_MULTIPLE
: <a class="el" href="group__hwlocality__information.php#ggaf4e663cf42bbe20756b849c6293ef575ae99465995cacde6c210d5fc2e409798c">hwloc.h</a>
</li>
<li>HWLOC_TYPE_DEPTH_UNKNOWN
: <a class="el" href="group__hwlocality__information.php#ggaf4e663cf42bbe20756b849c6293ef575a0565ab92ab72cb0cec91e23003294aad">hwloc.h</a>
</li>
<li>HWLOC_TYPE_UNORDERED
: <a class="el" href="group__hwlocality__types.php#gga46323568968005137c32f6a1cd405b74a2f8297ea36eba46e7596e810a67298fb">hwloc.h</a>
</li>
</ul>
</div>
<?php
include_once("$topdir/includes/footer.inc");
