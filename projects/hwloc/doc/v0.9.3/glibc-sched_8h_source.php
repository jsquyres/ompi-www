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
<!-- Generated by Doxygen 1.6.1 -->
<div class="navigation" id="top">
  <div class="tabs">
    <ul>
      <li><a href="index.php"><span>Main&nbsp;Page</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&nbsp;Structures</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div class="tabs">
    <ul>
      <li><a href="files.php"><span>File&nbsp;List</span></a></li>
      <li><a href="globals.php"><span>Globals</span></a></li>
    </ul>
  </div>
<h1>glibc-sched.h</h1><a href="glibc-sched_8h.php">Go to the documentation of this file.</a><div class="fragment"><pre class="fragment"><a name="l00001"></a>00001 <span class="comment">/*</span>
<a name="l00002"></a>00002 <span class="comment"> * Copyright © 2009 CNRS, INRIA, Université Bordeaux 1</span>
<a name="l00003"></a>00003 <span class="comment"> * See COPYING in top-level directory.</span>
<a name="l00004"></a>00004 <span class="comment"> */</span>
<a name="l00005"></a>00005 
<a name="l00014"></a>00014 <span class="preprocessor">#ifndef HWLOC_GLIBC_SCHED_H</span>
<a name="l00015"></a>00015 <span class="preprocessor"></span><span class="preprocessor">#define HWLOC_GLIBC_SCHED_H</span>
<a name="l00016"></a>00016 <span class="preprocessor"></span>
<a name="l00017"></a>00017 <span class="preprocessor">#include &lt;<a class="code" href="hwloc_8h.php" title="The hwloc API.">hwloc.h</a>&gt;</span>
<a name="l00018"></a>00018 <span class="preprocessor">#include &lt;<a class="code" href="helper_8h.php" title="High-level hwloc traversal helpers.">hwloc/helper.h</a>&gt;</span>
<a name="l00019"></a>00019 
<a name="l00020"></a>00020 <span class="preprocessor">#if !defined _GNU_SOURCE || !defined _SCHED_H</span>
<a name="l00021"></a>00021 <span class="preprocessor"></span><span class="preprocessor">#error sched.h must be included with _GNU_SOURCE defined</span>
<a name="l00022"></a>00022 <span class="preprocessor"></span><span class="preprocessor">#endif</span>
<a name="l00023"></a>00023 <span class="preprocessor"></span>
<a name="l00024"></a>00024 <span class="preprocessor">#ifdef HWLOC_HAVE_CPU_SET</span>
<a name="l00025"></a>00025 <span class="preprocessor"></span>
<a name="l00026"></a>00026 
<a name="l00039"></a>00039 <span class="keyword">static</span> inline <span class="keywordtype">void</span>
<a name="l00040"></a><a class="code" href="group__hwlocality__glibc__sched.php#ga8d52ded42a9b3d832672d642798cdd8a">00040</a> <a class="code" href="group__hwlocality__glibc__sched.php#ga8d52ded42a9b3d832672d642798cdd8a" title="Convert hwloc CPU set toposet into glibc sched affinity CPU set schedset.">hwloc_cpuset_to_glibc_sched_affinity</a>(<a class="code" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context.">hwloc_topology_t</a> topology, <a class="code" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411" title="Set of CPUs represented as an opaque pointer to an internal bitmask.">hwloc_cpuset_t</a> hwlocset,
<a name="l00041"></a>00041                                     cpu_set_t *schedset, <span class="keywordtype">size_t</span> schedsetsize)
<a name="l00042"></a>00042 {
<a name="l00043"></a>00043 <span class="preprocessor">#ifdef CPU_ZERO_S</span>
<a name="l00044"></a>00044 <span class="preprocessor"></span>  <span class="keywordtype">unsigned</span> cpu;
<a name="l00045"></a>00045   CPU_ZERO_S(schedsetsize, schedset);
<a name="l00046"></a>00046   <a class="code" href="group__hwlocality__cpuset.php#ga8f896ce703ad1740fdf9ce8ac6361359" title="Loop macro iterating on CPU set set.">hwloc_cpuset_foreach_begin</a>(cpu, hwlocset)
<a name="l00047"></a>00047     CPU_SET_S(cpu, schedsetsize, schedset);
<a name="l00048"></a>00048   <a class="code" href="group__hwlocality__cpuset.php#gae2974be78a7d7cddbd38cb23fcc6240a" title="End of loop.">hwloc_cpuset_foreach_end</a>();
<a name="l00049"></a>00049 <span class="preprocessor">#else </span><span class="comment">/* !CPU_ZERO_S */</span>
<a name="l00050"></a>00050   <span class="keywordtype">unsigned</span> cpu;
<a name="l00051"></a>00051   CPU_ZERO(schedset);
<a name="l00052"></a>00052   assert(schedsetsize == <span class="keyword">sizeof</span>(cpu_set_t));
<a name="l00053"></a>00053   <a class="code" href="group__hwlocality__cpuset.php#ga8f896ce703ad1740fdf9ce8ac6361359" title="Loop macro iterating on CPU set set.">hwloc_cpuset_foreach_begin</a>(cpu, hwlocset)
<a name="l00054"></a>00054     CPU_SET(cpu, schedset);
<a name="l00055"></a>00055   <a class="code" href="group__hwlocality__cpuset.php#gae2974be78a7d7cddbd38cb23fcc6240a" title="End of loop.">hwloc_cpuset_foreach_end</a>();
<a name="l00056"></a>00056 <span class="preprocessor">#endif </span><span class="comment">/* !CPU_ZERO_S */</span>
<a name="l00057"></a>00057 }
<a name="l00058"></a>00058 
<a name="l00066"></a>00066 <span class="keyword">static</span> inline <a class="code" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411" title="Set of CPUs represented as an opaque pointer to an internal bitmask.">hwloc_cpuset_t</a>
<a name="l00067"></a><a class="code" href="group__hwlocality__glibc__sched.php#ga95a1b94fc109895ee13b17bddac08f5f">00067</a> <a class="code" href="group__hwlocality__glibc__sched.php#ga95a1b94fc109895ee13b17bddac08f5f" title="Convert glibc sched affinity CPU set schedset into hwloc CPU set.">hwloc_cpuset_from_glibc_sched_affinity</a>(<a class="code" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context.">hwloc_topology_t</a> topology,
<a name="l00068"></a>00068                                       <span class="keyword">const</span> cpu_set_t *schedset, <span class="keywordtype">size_t</span> schedsetsize)
<a name="l00069"></a>00069 {
<a name="l00070"></a>00070   <a class="code" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411" title="Set of CPUs represented as an opaque pointer to an internal bitmask.">hwloc_cpuset_t</a> hwlocset = <a class="code" href="group__hwlocality__cpuset.php#ga82803256c7e78369aad77a2a9e5599a2" title="Allocate a new empty CPU set.">hwloc_cpuset_alloc</a>();
<a name="l00071"></a>00071 <span class="preprocessor">#ifdef CPU_ZERO_S</span>
<a name="l00072"></a>00072 <span class="preprocessor"></span>  <span class="keywordtype">int</span> cpu, count;
<a name="l00073"></a>00073   count = CPU_COUNT_S(schedsetsize, schedset);
<a name="l00074"></a>00074   cpu = 0;
<a name="l00075"></a>00075   <span class="keywordflow">while</span> (count) {
<a name="l00076"></a>00076     <span class="keywordflow">if</span> (CPU_ISSET_S(cpu, schedsetsize, schedset)) {
<a name="l00077"></a>00077       <a class="code" href="group__hwlocality__cpuset.php#gac5ba8c6d6367436995f67dbd4b3ba1de" title="Add CPU cpu in CPU set set.">hwloc_cpuset_set</a>(hwlocset, cpu);
<a name="l00078"></a>00078       count--;
<a name="l00079"></a>00079     }
<a name="l00080"></a>00080     cpu++;
<a name="l00081"></a>00081     <span class="keywordflow">if</span> (cpu &gt; HWLOC_NBMAXCPUS)
<a name="l00082"></a>00082       <span class="keywordflow">break</span>;
<a name="l00083"></a>00083   }
<a name="l00084"></a>00084 <span class="preprocessor">#else </span><span class="comment">/* !CPU_ZERO_S */</span>
<a name="l00085"></a>00085   <span class="comment">/* sched.h does not support dynamic cpu_set_t (introduced in glibc 2.7),</span>
<a name="l00086"></a>00086 <span class="comment">   * assume we have a very old interface without CPU_COUNT (added in 2.6)</span>
<a name="l00087"></a>00087 <span class="comment">   */</span>
<a name="l00088"></a>00088   <span class="keywordtype">int</span> cpu;
<a name="l00089"></a>00089   assert(schedsetsize == <span class="keyword">sizeof</span>(cpu_set_t));
<a name="l00090"></a>00090   <span class="keywordflow">for</span>(cpu=0; cpu&lt;CPU_SETSIZE &amp;&amp; cpu&lt;HWLOC_NBMAXCPUS; cpu++)
<a name="l00091"></a>00091     <span class="keywordflow">if</span> (CPU_ISSET(cpu, schedset))
<a name="l00092"></a>00092       <a class="code" href="group__hwlocality__cpuset.php#gac5ba8c6d6367436995f67dbd4b3ba1de" title="Add CPU cpu in CPU set set.">hwloc_cpuset_set</a>(hwlocset, cpu);
<a name="l00093"></a>00093 <span class="preprocessor">#endif </span><span class="comment">/* !CPU_ZERO_S */</span>
<a name="l00094"></a>00094   <span class="keywordflow">return</span> hwlocset;
<a name="l00095"></a>00095 }
<a name="l00096"></a>00096 
<a name="l00100"></a>00100 <span class="preprocessor">#endif </span><span class="comment">/* CPU_SET */</span>
<a name="l00101"></a>00101 
<a name="l00102"></a>00102 <span class="preprocessor">#endif </span><span class="comment">/* HWLOC_GLIBC_SCHED_H */</span>
</pre></div></div>
<?php
include_once("$topdir/includes/footer.inc");
