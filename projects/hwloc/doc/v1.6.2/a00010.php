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
<!-- Generated by Doxygen 1.8.3.1 -->
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
<div class="title">Interoperability With Other Software </div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><p><a class="anchor" id="interoperability"></a> Although hwloc offers its own portable interface, it still may have to interoperate with specific or non-portable libraries that manipulate similar kinds of objects. hwloc therefore offers several specific "helpers" to assist converting between those specific interfaces and hwloc.</p>
<p>Some external libraries may be specific to a particular OS; others may not always be available. The hwloc core therefore generally does not explicitly depend on these types of libraries. However, when a custom application uses or otherwise depends on such a library, it may optionally include the corresponding hwloc helper to extend the hwloc interface with dedicated helpers.</p>
<p>Most of these helpers use structures that are specific to these external libraries and only meaningful on the local machine. If so, the helper requires the input topology to match the current machine. Some helpers also require I/O device discovery to be supported and enabled for the current topology.</p>
<dl>
<dt>Linux specific features </dt>
<dd><p class="startdd"><a class="el" href="a00038_source.php" title="Macros to help interaction between hwloc and Linux.">hwloc/linux.h</a> offers Linux-specific helpers that utilize some non-portable features of the Linux system, such as binding threads through their thread ID ("tid") or parsing kernel CPU mask files. </p>
<p class="enddd"></p>
</dd>
<dt>Linux libnuma </dt>
<dd><p class="startdd"><a class="el" href="a00037_source.php" title="Macros to help interaction between hwloc and Linux libnuma.">hwloc/linux-libnuma.h</a> provides conversion helpers between hwloc CPU sets and libnuma-specific types, such as bitmasks. It helps you use libnuma memory-binding functions with hwloc CPU sets. </p>
<p class="enddd"></p>
</dd>
<dt>Glibc </dt>
<dd><p class="startdd"><a class="el" href="a00033_source.php" title="Macros to help interaction between hwloc and glibc scheduling routines.">hwloc/glibc-sched.h</a> offers conversion routines between Glibc and hwloc CPU sets in order to use hwloc with functions such as sched_setaffinity(). </p>
<p class="enddd"></p>
</dd>
<dt>OpenFabrics Verbs </dt>
<dd><p class="startdd"><a class="el" href="a00040_source.php" title="Macros to help interaction between hwloc and OpenFabrics verbs.">hwloc/openfabrics-verbs.h</a> helps interoperability with the OpenFabrics Verbs interface. For example, it can return a list of processors near an OpenFabrics device. Note that if I/O device discovery is enabled, such devices may also appear as PCI objects and as OS objects in the topology. </p>
<p class="enddd"></p>
</dd>
<dt>Myrinet Express </dt>
<dd><p class="startdd"><a class="el" href="a00039_source.php" title="Macros to help interaction between hwloc and Myrinet Express.">hwloc/myriexpress.h</a> offers interoperability with the Myrinet Express interface. It can return the list of processors near a Myrinet board managed by the MX driver. Note that if I/O device discovery is enabled, such boards may also appear as PCI objects in the topology. </p>
<p class="enddd"></p>
</dd>
<dt>NVIDIA CUDA </dt>
<dd><p class="startdd"><a class="el" href="a00031_source.php" title="Macros to help interaction between hwloc and the CUDA Driver API.">hwloc/cuda.h</a> and <a class="el" href="a00032_source.php" title="Macros to help interaction between hwloc and the CUDA Runtime API.">hwloc/cudart.h</a> enable interoperability with NVIDIA CUDA Driver and Runtime interfaces. For instance, it may return the list of processors near NVIDIA GPUs. Note that if I/O device discovery is enabled, GPUs may also appear as PCI objects in the topology. </p>
<p class="enddd"></p>
</dd>
<dt>Taskset command-line tool </dt>
<dd><p class="startdd">The taskset command-line tool is widely used for binding processes. It manipulates CPU set strings in a format that is slightly different from hwloc's one (it does not divide the string in fixed-size subsets and separates them with commas). To ease interoperability, hwloc offers routines to convert hwloc CPU sets from/to taskset-specific string format. Most hwloc command-line tools also support the <code>&ndash;taskset</code> option to manipulate taskset-specific strings. </p>
<p class="enddd"></p>
</dd>
</dl>
</div></div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
