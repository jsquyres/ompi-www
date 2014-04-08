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
<div class="title">Interoperability With Other Software </div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><p>Although hwloc offers its own portable interface, it still may have to interoperate with specific or non-portable libraries that manipulate similar kinds of objects. hwloc therefore offers several specific "helpers" to assist converting between those specific interfaces and hwloc.</p>
<p>Some external libraries may be specific to a particular OS; others may not always be available. The hwloc core therefore generally does not explicitly depend on these types of libraries. However, when a custom application uses or otherwise depends on such a library, it may optionally include the corresponding hwloc helper to extend the hwloc interface with dedicated helpers.</p>
<p>Most of these helpers use structures that are specific to these external libraries and only meaningful on the local machine. If so, the helper requires the input topology to match the current machine. Some helpers also require I/O device discovery to be supported and enabled for the current topology.</p>
<dl>
<dt>Linux specific features </dt>
<dd><p class="startdd"><a class="el" href="a00066_source.php" title="Macros to help interaction between hwloc and Linux. ">hwloc/linux.h</a> offers Linux-specific helpers that utilize some non-portable features of the Linux system, such as binding threads through their thread ID ("tid") or parsing kernel CPU mask files. </p>
<p class="enddd"></p>
</dd>
<dt>Linux libnuma </dt>
<dd><p class="startdd"><a class="el" href="a00065_source.php" title="Macros to help interaction between hwloc and Linux libnuma. ">hwloc/linux-libnuma.h</a> provides conversion helpers between hwloc CPU sets and libnuma-specific types, such as bitmasks. It helps you use libnuma memory-binding functions with hwloc CPU sets. </p>
<p class="enddd"></p>
</dd>
<dt>Glibc </dt>
<dd><p class="startdd"><a class="el" href="a00060_source.php" title="Macros to help interaction between hwloc and glibc scheduling routines. ">hwloc/glibc-sched.h</a> offers conversion routines between Glibc and hwloc CPU sets in order to use hwloc with functions such as sched_getaffinity() or pthread_attr_setaffinity_np(). </p>
<p class="enddd"></p>
</dd>
<dt>OpenFabrics Verbs </dt>
<dd><p class="startdd"><a class="el" href="a00070_source.php" title="Macros to help interaction between hwloc and OpenFabrics verbs. ">hwloc/openfabrics-verbs.h</a> helps interoperability with the OpenFabrics Verbs interface. For example, it can return a list of processors near an OpenFabrics device. It may also return the corresponding OS device hwloc object for further information (if I/O device discovery is enabled). </p>
<p class="enddd"></p>
</dd>
<dt>Myrinet Express </dt>
<dd><p class="startdd"><a class="el" href="a00067_source.php" title="Macros to help interaction between hwloc and Myrinet Express. ">hwloc/myriexpress.h</a> offers interoperability with the Myrinet Express interface. It can return the list of processors near a Myrinet board managed by the MX driver. Note that if I/O device discovery is enabled, such boards may also appear as PCI objects in the topology. </p>
<p class="enddd"></p>
</dd>
<dt>Intel Xeon Phi (MIC) </dt>
<dd><p class="startdd"><a class="el" href="a00064_source.php" title="Macros to help interaction between hwloc and Intel Xeon Phi (MIC). ">hwloc/intel-mic.h</a> helps interoperability with Intel Xeon Phi (MIC) coprocessors by returning the list of processors near these devices. It may also return the corresponding OS device hwloc object for further information (if I/O device discovery is enabled). </p>
<p class="enddd"></p>
</dd>
<dt>AMD OpenCL </dt>
<dd><p class="startdd"><a class="el" href="a00069_source.php" title="Macros to help interaction between hwloc and the OpenCL interface. ">hwloc/opencl.h</a> enables interoperability with the OpenCL interface. Only the AMD implementation currently offers locality information. It may return the list of processors near an AMD/ATI GPU given as a <code>cl_device_id</code>. It may also return the corresponding OS device hwloc object for further information (if I/O device discovery is enabled). </p>
<p class="enddd"></p>
</dd>
<dt>NVIDIA CUDA </dt>
<dd><p class="startdd"><a class="el" href="a00056_source.php" title="Macros to help interaction between hwloc and the CUDA Driver API. ">hwloc/cuda.h</a> and <a class="el" href="a00057_source.php" title="Macros to help interaction between hwloc and the CUDA Runtime API. ">hwloc/cudart.h</a> enable interoperability with NVIDIA CUDA Driver and Runtime interfaces. For instance, it may return the list of processors near NVIDIA GPUs. It may also return the corresponding OS device hwloc object for further information (if I/O device discovery is enabled). </p>
<p class="enddd"></p>
</dd>
<dt>NVIDIA Management Library (NVML) </dt>
<dd><p class="startdd"><a class="el" href="a00068_source.php" title="Macros to help interaction between hwloc and the NVIDIA Management Library. ">hwloc/nvml.h</a> enables interoperability with the NVIDIA NVML interface. It may return the list of processors near a NVIDIA GPU given as a <code>nvmlDevice_t</code>. It may also return the corresponding OS device hwloc object for further information (if I/O device discovery is enabled). </p>
<p class="enddd"></p>
</dd>
<dt>NVIDIA displays </dt>
<dd><p class="startdd"><a class="el" href="a00059_source.php" title="Macros to help interaction between hwloc and OpenGL displays. ">hwloc/gl.h</a> enables interoperability with NVIDIA displays using the NV-CONTROL X extension (NVCtrl library). If I/O device discovery is enabled, it may return the OS device hwloc object that corresponds to a display given as a name such as <em>:0.0</em> or given as a port/device pair (server/screen). </p>
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
