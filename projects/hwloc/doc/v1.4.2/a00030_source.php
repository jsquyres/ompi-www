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
<!-- Generated by Doxygen 1.7.6.1 -->
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
    </ul>
  </div>
</div>
<div class="header">
  <div class="headertitle">
<div class="title">glibc-sched.h</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><pre class="fragment"><a name="l00001"></a>00001 <span class="comment">/*</span>
<a name="l00002"></a>00002 <span class="comment"> * Copyright © 2009 CNRS</span>
<a name="l00003"></a>00003 <span class="comment"> * Copyright © 2009-2012 inria.  All rights reserved.</span>
<a name="l00004"></a>00004 <span class="comment"> * Copyright © 2009-2011 Université Bordeaux 1</span>
<a name="l00005"></a>00005 <span class="comment"> * Copyright © 2011 Cisco Systems, Inc.  All rights reserved.</span>
<a name="l00006"></a>00006 <span class="comment"> * See COPYING in top-level directory.</span>
<a name="l00007"></a>00007 <span class="comment"> */</span>
<a name="l00008"></a>00008 
<a name="l00019"></a>00019 <span class="preprocessor">#ifndef HWLOC_GLIBC_SCHED_H</span>
<a name="l00020"></a>00020 <span class="preprocessor"></span><span class="preprocessor">#define HWLOC_GLIBC_SCHED_H</span>
<a name="l00021"></a>00021 <span class="preprocessor"></span>
<a name="l00022"></a>00022 <span class="preprocessor">#include &lt;hwloc.h&gt;</span>
<a name="l00023"></a>00023 <span class="preprocessor">#include &lt;hwloc/helper.h&gt;</span>
<a name="l00024"></a>00024 <span class="preprocessor">#include &lt;assert.h&gt;</span>
<a name="l00025"></a>00025 
<a name="l00026"></a>00026 <span class="preprocessor">#if !defined _GNU_SOURCE || !defined _SCHED_H || (!defined CPU_SETSIZE &amp;&amp; !defined sched_priority)</span>
<a name="l00027"></a>00027 <span class="preprocessor"></span><span class="preprocessor">#error Please make sure to include sched.h before including glibc-sched.h, and define _GNU_SOURCE before any inclusion of sched.h</span>
<a name="l00028"></a>00028 <span class="preprocessor"></span><span class="preprocessor">#endif</span>
<a name="l00029"></a>00029 <span class="preprocessor"></span>
<a name="l00030"></a>00030 
<a name="l00031"></a>00031 <span class="preprocessor">#ifdef __cplusplus</span>
<a name="l00032"></a>00032 <span class="preprocessor"></span><span class="keyword">extern</span> <span class="stringliteral">&quot;C&quot;</span> {
<a name="l00033"></a>00033 <span class="preprocessor">#endif</span>
<a name="l00034"></a>00034 <span class="preprocessor"></span>
<a name="l00035"></a>00035 
<a name="l00036"></a>00036 <span class="preprocessor">#ifdef HWLOC_HAVE_CPU_SET</span>
<a name="l00037"></a>00037 <span class="preprocessor"></span>
<a name="l00038"></a>00038 
<a name="l00051"></a>00051 <span class="keyword">static</span> inline <span class="keywordtype">int</span>
<a name="l00052"></a><a class="code" href="a00066.php#ga39454e6013441d32e58ef4c4fcba7e4b">00052</a> <a class="code" href="a00066.php#ga39454e6013441d32e58ef4c4fcba7e4b" title="Convert hwloc CPU set toposet into glibc sched affinity CPU set schedset.">hwloc_cpuset_to_glibc_sched_affinity</a>(<a class="code" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context.">hwloc_topology_t</a> topology , <a class="code" href="a00040.php#ga1f784433e9b606261f62d1134f6a3b25" title="A non-modifiable hwloc_cpuset_t.">hwloc_const_cpuset_t</a> hwlocset,
<a name="l00053"></a>00053                                     cpu_set_t *schedset, <span class="keywordtype">size_t</span> schedsetsize)
<a name="l00054"></a>00054 {
<a name="l00055"></a>00055 <span class="preprocessor">#ifdef CPU_ZERO_S</span>
<a name="l00056"></a>00056 <span class="preprocessor"></span>  <span class="keywordtype">unsigned</span> cpu;
<a name="l00057"></a>00057   CPU_ZERO_S(schedsetsize, schedset);
<a name="l00058"></a>00058   <a class="code" href="a00065.php#ga3f6861045a8029ade373510ffa727d2a" title="Loop macro iterating on bitmap bitmap.">hwloc_bitmap_foreach_begin</a>(cpu, hwlocset)
<a name="l00059"></a>00059     CPU_SET_S(cpu, schedsetsize, schedset);
<a name="l00060"></a>00060   <a class="code" href="a00065.php#gafcf3246db406218d4e155735b3fa6528">hwloc_bitmap_foreach_end</a>();
<a name="l00061"></a>00061 <span class="preprocessor">#else </span><span class="comment">/* !CPU_ZERO_S */</span>
<a name="l00062"></a>00062   <span class="keywordtype">unsigned</span> cpu;
<a name="l00063"></a>00063   CPU_ZERO(schedset);
<a name="l00064"></a>00064   assert(schedsetsize == <span class="keyword">sizeof</span>(cpu_set_t));
<a name="l00065"></a>00065   <a class="code" href="a00065.php#ga3f6861045a8029ade373510ffa727d2a" title="Loop macro iterating on bitmap bitmap.">hwloc_bitmap_foreach_begin</a>(cpu, hwlocset)
<a name="l00066"></a>00066     CPU_SET(cpu, schedset);
<a name="l00067"></a>00067   <a class="code" href="a00065.php#gafcf3246db406218d4e155735b3fa6528">hwloc_bitmap_foreach_end</a>();
<a name="l00068"></a>00068 <span class="preprocessor">#endif </span><span class="comment">/* !CPU_ZERO_S */</span>
<a name="l00069"></a>00069   <span class="keywordflow">return</span> 0;
<a name="l00070"></a>00070 }
<a name="l00071"></a>00071 
<a name="l00079"></a>00079 <span class="keyword">static</span> inline <span class="keywordtype">int</span>
<a name="l00080"></a><a class="code" href="a00066.php#ga6df504b2f5440b527be05cdad6b1655e">00080</a> <a class="code" href="a00066.php#ga6df504b2f5440b527be05cdad6b1655e" title="Convert glibc sched affinity CPU set schedset into hwloc CPU set.">hwloc_cpuset_from_glibc_sched_affinity</a>(<a class="code" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context.">hwloc_topology_t</a> topology , <a class="code" href="a00040.php#ga4bbf39b68b6f568fb92739e7c0ea7801" title="A CPU set is a bitmap whose bits are set according to CPU physical OS indexes.">hwloc_cpuset_t</a> hwlocset,
<a name="l00081"></a>00081                                        <span class="keyword">const</span> cpu_set_t *schedset, <span class="keywordtype">size_t</span> schedsetsize)
<a name="l00082"></a>00082 {
<a name="l00083"></a>00083   <span class="keywordtype">int</span> cpu;
<a name="l00084"></a>00084 <span class="preprocessor">#ifdef CPU_ZERO_S</span>
<a name="l00085"></a>00085 <span class="preprocessor"></span>  <span class="keywordtype">int</span> count;
<a name="l00086"></a>00086 <span class="preprocessor">#endif</span>
<a name="l00087"></a>00087 <span class="preprocessor"></span>  <a class="code" href="a00065.php#ga6c540b9fe63b8223b6aba46d56dd63b8" title="Empty the bitmap bitmap.">hwloc_bitmap_zero</a>(hwlocset);
<a name="l00088"></a>00088 <span class="preprocessor">#ifdef CPU_ZERO_S</span>
<a name="l00089"></a>00089 <span class="preprocessor"></span>  count = CPU_COUNT_S(schedsetsize, schedset);
<a name="l00090"></a>00090   cpu = 0;
<a name="l00091"></a>00091   <span class="keywordflow">while</span> (count) {
<a name="l00092"></a>00092     <span class="keywordflow">if</span> (CPU_ISSET_S(cpu, schedsetsize, schedset)) {
<a name="l00093"></a>00093       <a class="code" href="a00065.php#ga497556af0cc34f109ae0277999c074d3" title="Add index id in bitmap bitmap.">hwloc_bitmap_set</a>(hwlocset, cpu);
<a name="l00094"></a>00094       count--;
<a name="l00095"></a>00095     }
<a name="l00096"></a>00096     cpu++;
<a name="l00097"></a>00097   }
<a name="l00098"></a>00098 <span class="preprocessor">#else </span><span class="comment">/* !CPU_ZERO_S */</span>
<a name="l00099"></a>00099   <span class="comment">/* sched.h does not support dynamic cpu_set_t (introduced in glibc 2.7),</span>
<a name="l00100"></a>00100 <span class="comment">   * assume we have a very old interface without CPU_COUNT (added in 2.6)</span>
<a name="l00101"></a>00101 <span class="comment">   */</span>
<a name="l00102"></a>00102   assert(schedsetsize == <span class="keyword">sizeof</span>(cpu_set_t));
<a name="l00103"></a>00103   <span class="keywordflow">for</span>(cpu=0; cpu&lt;CPU_SETSIZE; cpu++)
<a name="l00104"></a>00104     <span class="keywordflow">if</span> (CPU_ISSET(cpu, schedset))
<a name="l00105"></a>00105       <a class="code" href="a00065.php#ga497556af0cc34f109ae0277999c074d3" title="Add index id in bitmap bitmap.">hwloc_bitmap_set</a>(hwlocset, cpu);
<a name="l00106"></a>00106 <span class="preprocessor">#endif </span><span class="comment">/* !CPU_ZERO_S */</span>
<a name="l00107"></a>00107   <span class="keywordflow">return</span> 0;
<a name="l00108"></a>00108 }
<a name="l00109"></a>00109 
<a name="l00113"></a>00113 <span class="preprocessor">#endif </span><span class="comment">/* CPU_SET */</span>
<a name="l00114"></a>00114 
<a name="l00115"></a>00115 
<a name="l00116"></a>00116 <span class="preprocessor">#ifdef __cplusplus</span>
<a name="l00117"></a>00117 <span class="preprocessor"></span>} <span class="comment">/* extern &quot;C&quot; */</span>
<a name="l00118"></a>00118 <span class="preprocessor">#endif</span>
<a name="l00119"></a>00119 <span class="preprocessor"></span>
<a name="l00120"></a>00120 
<a name="l00121"></a>00121 <span class="preprocessor">#endif </span><span class="comment">/* HWLOC_GLIBC_SCHED_H */</span>
</pre></div></div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
