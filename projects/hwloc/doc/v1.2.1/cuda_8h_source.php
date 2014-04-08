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
<!-- Generated by Doxygen 1.7.4 -->
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
      <li><a href="globals.php"><span>Globals</span></a></li>
    </ul>
  </div>
<div class="header">
  <div class="headertitle">
<div class="title">cuda.h</div>  </div>
</div>
<div class="contents">
<a href="cuda_8h.php">Go to the documentation of this file.</a><div class="fragment"><pre class="fragment"><a name="l00001"></a>00001 <span class="comment">/*</span>
<a name="l00002"></a>00002 <span class="comment"> * Copyright © 2010 INRIA.  All rights reserved.</span>
<a name="l00003"></a>00003 <span class="comment"> * Copyright © 2010 Université Bordeaux 1</span>
<a name="l00004"></a>00004 <span class="comment"> * Copyright © 2011 Cisco Systems, Inc.  All rights reserved.</span>
<a name="l00005"></a>00005 <span class="comment"> * See COPYING in top-level directory.</span>
<a name="l00006"></a>00006 <span class="comment"> */</span>
<a name="l00007"></a>00007 
<a name="l00016"></a>00016 <span class="preprocessor">#ifndef HWLOC_CUDA_H</span>
<a name="l00017"></a>00017 <span class="preprocessor"></span><span class="preprocessor">#define HWLOC_CUDA_H</span>
<a name="l00018"></a>00018 <span class="preprocessor"></span>
<a name="l00019"></a>00019 <span class="preprocessor">#include &lt;<a class="code" href="hwloc_8h.php" title="The hwloc API.">hwloc.h</a>&gt;</span>
<a name="l00020"></a>00020 <span class="preprocessor">#include &lt;hwloc/autogen/config.h&gt;</span>
<a name="l00021"></a>00021 <span class="preprocessor">#include &lt;<a class="code" href="linux_8h.php" title="Macros to help interaction between hwloc and Linux.">hwloc/linux.h</a>&gt;</span>
<a name="l00022"></a>00022 
<a name="l00023"></a>00023 <span class="preprocessor">#include &lt;<a class="code" href="cuda_8h.php" title="Macros to help interaction between hwloc and the CUDA Driver API.">cuda.h</a>&gt;</span>
<a name="l00024"></a>00024 
<a name="l00025"></a>00025 
<a name="l00026"></a>00026 <span class="preprocessor">#ifdef __cplusplus</span>
<a name="l00027"></a>00027 <span class="preprocessor"></span><span class="keyword">extern</span> <span class="stringliteral">&quot;C&quot;</span> {
<a name="l00028"></a>00028 <span class="preprocessor">#endif</span>
<a name="l00029"></a>00029 <span class="preprocessor"></span>
<a name="l00030"></a>00030 
<a name="l00043"></a>00043 <span class="keyword">static</span> inline <span class="keywordtype">int</span>
<a name="l00044"></a><a class="code" href="group__hwlocality__cuda.php#gae06cf330d2f0d9949feb52b146b7d136">00044</a> <a class="code" href="group__hwlocality__cuda.php#gae06cf330d2f0d9949feb52b146b7d136" title="Get the CPU set of logical processors that are physically close to device cudevice.">hwloc_cuda_get_device_cpuset</a>(<a class="code" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context.">hwloc_topology_t</a> topology ,
<a name="l00045"></a>00045                              CUdevice cudevice, <a class="code" href="group__hwlocality__sets.php#ga4bbf39b68b6f568fb92739e7c0ea7801" title="A CPU set is a bitmap whose bits are set according to CPU physical OS indexes.">hwloc_cpuset_t</a> <span class="keyword">set</span>)
<a name="l00046"></a>00046 {
<a name="l00047"></a>00047 <span class="preprocessor">#ifdef HWLOC_LINUX_SYS</span>
<a name="l00048"></a>00048 <span class="preprocessor"></span>  <span class="comment">/* If we&#39;re on Linux, use the sysfs mechanism to get the local cpus */</span>
<a name="l00049"></a>00049 <span class="preprocessor">#define HWLOC_CUDA_DEVICE_SYSFS_PATH_MAX 128</span>
<a name="l00050"></a>00050 <span class="preprocessor"></span>  CUresult cres;
<a name="l00051"></a>00051   <span class="keywordtype">int</span> deviceid;
<a name="l00052"></a>00052   <span class="keywordtype">int</span> busid;
<a name="l00053"></a>00053   <span class="keywordtype">char</span> path[HWLOC_CUDA_DEVICE_SYSFS_PATH_MAX];
<a name="l00054"></a>00054   FILE *sysfile = NULL;
<a name="l00055"></a>00055 
<a name="l00056"></a>00056   cres = cuDeviceGetAttribute(&amp;busid, CU_DEVICE_ATTRIBUTE_PCI_BUS_ID, cudevice);
<a name="l00057"></a>00057   <span class="keywordflow">if</span> (cres != CUDA_SUCCESS) {
<a name="l00058"></a>00058     errno = ENOSYS;
<a name="l00059"></a>00059     <span class="keywordflow">return</span> -1;
<a name="l00060"></a>00060   }
<a name="l00061"></a>00061   cres = cuDeviceGetAttribute(&amp;deviceid, CU_DEVICE_ATTRIBUTE_PCI_DEVICE_ID, cudevice);
<a name="l00062"></a>00062   <span class="keywordflow">if</span> (cres != CUDA_SUCCESS) {
<a name="l00063"></a>00063     errno = ENOSYS;
<a name="l00064"></a>00064     <span class="keywordflow">return</span> -1;
<a name="l00065"></a>00065   }
<a name="l00066"></a>00066 
<a name="l00067"></a>00067   sprintf(path, <span class="stringliteral">&quot;/sys/bus/pci/devices/0000:%02x:%02x.0/local_cpus&quot;</span>, busid, deviceid);
<a name="l00068"></a>00068   sysfile = fopen(path, <span class="stringliteral">&quot;r&quot;</span>);
<a name="l00069"></a>00069   <span class="keywordflow">if</span> (!sysfile)
<a name="l00070"></a>00070     <span class="keywordflow">return</span> -1;
<a name="l00071"></a>00071 
<a name="l00072"></a>00072   <a class="code" href="group__hwlocality__linux.php#gaeacad897c30dbea284948374ad4b010c" title="Convert a linux kernel cpumap file file into hwloc CPU set.">hwloc_linux_parse_cpumap_file</a>(sysfile, <span class="keyword">set</span>);
<a name="l00073"></a>00073 
<a name="l00074"></a>00074   fclose(sysfile);
<a name="l00075"></a>00075 <span class="preprocessor">#else</span>
<a name="l00076"></a>00076 <span class="preprocessor"></span>  <span class="comment">/* Non-Linux systems simply get a full cpuset */</span>
<a name="l00077"></a>00077   <a class="code" href="group__hwlocality__bitmap.php#gab14743355fa03b36cef521cbcd2fbf64" title="Copy the contents of bitmap src into the already allocated bitmap dst.">hwloc_bitmap_copy</a>(<span class="keyword">set</span>, <a class="code" href="group__hwlocality__helper__cpuset.php#ga75f0ac3ac41e9915541c3ae3153a6e26" title="Get complete CPU set.">hwloc_topology_get_complete_cpuset</a>(topology));
<a name="l00078"></a>00078 <span class="preprocessor">#endif</span>
<a name="l00079"></a>00079 <span class="preprocessor"></span>  <span class="keywordflow">return</span> 0;
<a name="l00080"></a>00080 }
<a name="l00081"></a>00081 
<a name="l00085"></a>00085 <span class="preprocessor">#ifdef __cplusplus</span>
<a name="l00086"></a>00086 <span class="preprocessor"></span>} <span class="comment">/* extern &quot;C&quot; */</span>
<a name="l00087"></a>00087 <span class="preprocessor">#endif</span>
<a name="l00088"></a>00088 <span class="preprocessor"></span>
<a name="l00089"></a>00089 
<a name="l00090"></a>00090 <span class="preprocessor">#endif </span><span class="comment">/* HWLOC_CUDA_H */</span>
</pre></div></div>
</div>
<?php
include_once("$topdir/includes/footer.inc");
