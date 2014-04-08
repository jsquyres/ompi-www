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
<!-- Generated by Doxygen 1.7.1 -->
<div class="navigation" id="top">
  <div class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&nbsp;Page</span></a></li>
      <li><a href="pages.php"><span>Related&nbsp;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&nbsp;Structures</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&nbsp;List</span></a></li>
      <li><a href="globals.php"><span>Globals</span></a></li>
    </ul>
  </div>
<div class="header">
  <div class="headertitle">
<h1>linux-libnuma.h</h1>  </div>
</div>
<div class="contents">
<a href="linux-libnuma_8h.php">Go to the documentation of this file.</a><div class="fragment"><pre class="fragment"><a name="l00001"></a>00001 <span class="comment">/*</span>
<a name="l00002"></a>00002 <span class="comment"> * Copyright © 2009 CNRS, INRIA, Université Bordeaux 1</span>
<a name="l00003"></a>00003 <span class="comment"> * See COPYING in top-level directory.</span>
<a name="l00004"></a>00004 <span class="comment"> */</span>
<a name="l00005"></a>00005 
<a name="l00013"></a>00013 <span class="preprocessor">#ifndef HWLOC_LINUX_LIBNUMA_H</span>
<a name="l00014"></a>00014 <span class="preprocessor"></span><span class="preprocessor">#define HWLOC_LINUX_LIBNUMA_H</span>
<a name="l00015"></a>00015 <span class="preprocessor"></span>
<a name="l00016"></a>00016 <span class="preprocessor">#include &lt;<a class="code" href="hwloc_8h.php" title="The hwloc API.">hwloc.h</a>&gt;</span>
<a name="l00017"></a>00017 <span class="preprocessor">#include &lt;numa.h&gt;</span>
<a name="l00018"></a>00018 
<a name="l00019"></a>00019 
<a name="l00020"></a>00020 <span class="preprocessor">#ifdef __cplusplus</span>
<a name="l00021"></a>00021 <span class="preprocessor"></span><span class="keyword">extern</span> <span class="stringliteral">&quot;C&quot;</span> {
<a name="l00022"></a>00022 <span class="preprocessor">#endif</span>
<a name="l00023"></a>00023 <span class="preprocessor"></span>
<a name="l00024"></a>00024 
<a name="l00040"></a>00040 <span class="keyword">static</span> inline <span class="keywordtype">int</span>
<a name="l00041"></a><a class="code" href="group__hwlocality__linux__libnuma__ulongs.php#ga018e57a42a780ce2ba2e35ef975d8888">00041</a> <a class="code" href="group__hwlocality__linux__libnuma__ulongs.php#ga018e57a42a780ce2ba2e35ef975d8888" title="Convert hwloc CPU set cpuset into the array of unsigned long mask.">hwloc_cpuset_to_linux_libnuma_ulongs</a>(<a class="code" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context.">hwloc_topology_t</a> topology, <a class="code" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> cpuset,
<a name="l00042"></a>00042                                     <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> *mask, <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> *maxnode)
<a name="l00043"></a>00043 {
<a name="l00044"></a>00044   <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> outmaxnode = -1;
<a name="l00045"></a>00045   <a class="code" href="structhwloc__obj.php" title="Structure of a topology object.">hwloc_obj_t</a> node = NULL;
<a name="l00046"></a>00046   <span class="keywordtype">unsigned</span> nbnodes = <a class="code" href="group__hwlocality__information.php#ga0131ab1051011fabfa69d7c1853e716c" title="Returns the width of level type type.">hwloc_get_nbobjs_by_type</a>(topology, <a class="code" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55aaf0964881117bdedf1a5e9332cd120dd" title="NUMA node. A set of processors around memory which the processors can directly access.">HWLOC_OBJ_NODE</a>);
<a name="l00047"></a>00047   <span class="keywordtype">unsigned</span> i;
<a name="l00048"></a>00048 
<a name="l00049"></a>00049   <span class="keywordflow">for</span>(i=0; i&lt;*maxnode/<span class="keyword">sizeof</span>(*mask)/8; i++)
<a name="l00050"></a>00050     mask[i] = 0;
<a name="l00051"></a>00051 
<a name="l00052"></a>00052   <span class="keywordflow">if</span> (nbnodes) {
<a name="l00053"></a>00053     <span class="keywordflow">while</span> ((node = <a class="code" href="group__hwlocality__helper__find__coverings.php#ga5915ea30f326676b3a4cfff371ce04d1" title="Iterate through same-type objects covering at least CPU set set.">hwloc_get_next_obj_covering_cpuset_by_type</a>(topology, cpuset, <a class="code" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55aaf0964881117bdedf1a5e9332cd120dd" title="NUMA node. A set of processors around memory which the processors can directly access.">HWLOC_OBJ_NODE</a>, node)) != NULL) {
<a name="l00054"></a>00054       <span class="keywordflow">if</span> (node-&gt;<a class="code" href="structhwloc__obj.php#a61a7a80a68eaccbaaa28269e678c81a9" title="OS-provided physical index number.">os_index</a> &gt;= *maxnode)
<a name="l00055"></a>00055         <span class="keywordflow">break</span>;
<a name="l00056"></a>00056       mask[node-&gt;<a class="code" href="structhwloc__obj.php#a61a7a80a68eaccbaaa28269e678c81a9" title="OS-provided physical index number.">os_index</a>/<span class="keyword">sizeof</span>(*mask)/8] |= 1UL &lt;&lt; (node-&gt;<a class="code" href="structhwloc__obj.php#a61a7a80a68eaccbaaa28269e678c81a9" title="OS-provided physical index number.">os_index</a> % (<span class="keyword">sizeof</span>(*mask)*8));
<a name="l00057"></a>00057       <span class="keywordflow">if</span> (outmaxnode == (<span class="keywordtype">unsigned</span> <span class="keywordtype">long</span>) -1 || outmaxnode &lt; node-&gt;os_index)
<a name="l00058"></a>00058         outmaxnode = node-&gt;<a class="code" href="structhwloc__obj.php#a61a7a80a68eaccbaaa28269e678c81a9" title="OS-provided physical index number.">os_index</a>;
<a name="l00059"></a>00059     }
<a name="l00060"></a>00060 
<a name="l00061"></a>00061   } <span class="keywordflow">else</span> {
<a name="l00062"></a>00062     <span class="comment">/* if no numa, libnuma assumes we have a single node */</span>
<a name="l00063"></a>00063     <span class="keywordflow">if</span> (!<a class="code" href="group__hwlocality__cpuset.php#gac5b8ad0c32e9d14c587eabde188182a9" title="Test whether set set is empty.">hwloc_cpuset_iszero</a>(cpuset)) {
<a name="l00064"></a>00064       mask[0] = 1;
<a name="l00065"></a>00065       outmaxnode = 0;
<a name="l00066"></a>00066     }
<a name="l00067"></a>00067   }
<a name="l00068"></a>00068 
<a name="l00069"></a>00069   *maxnode = outmaxnode+1;
<a name="l00070"></a>00070   <span class="keywordflow">return</span> 0;
<a name="l00071"></a>00071 }
<a name="l00072"></a>00072 
<a name="l00082"></a>00082 <span class="keyword">static</span> inline <span class="keywordtype">int</span>
<a name="l00083"></a><a class="code" href="group__hwlocality__linux__libnuma__ulongs.php#gafa60816dde33d69149497bcf6c7818e0">00083</a> <a class="code" href="group__hwlocality__linux__libnuma__ulongs.php#gafa60816dde33d69149497bcf6c7818e0" title="Convert the array of unsigned long mask into hwloc CPU set.">hwloc_cpuset_from_linux_libnuma_ulongs</a>(<a class="code" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context.">hwloc_topology_t</a> topology, <a class="code" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411" title="Set of CPUs represented as an opaque pointer to an internal bitmask.">hwloc_cpuset_t</a> cpuset,
<a name="l00084"></a>00084                                       <span class="keyword">const</span> <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> *mask, <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> maxnode)
<a name="l00085"></a>00085 {
<a name="l00086"></a>00086   <a class="code" href="structhwloc__obj.php" title="Structure of a topology object.">hwloc_obj_t</a> node;
<a name="l00087"></a>00087   <span class="keywordtype">int</span> depth;
<a name="l00088"></a>00088   <span class="keywordtype">unsigned</span> i;
<a name="l00089"></a>00089 
<a name="l00090"></a>00090   depth = <a class="code" href="group__hwlocality__information.php#gaea7c64dd59467f5201ba87712710b14d" title="Returns the depth of objects of type type.">hwloc_get_type_depth</a>(topology, <a class="code" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55aaf0964881117bdedf1a5e9332cd120dd" title="NUMA node. A set of processors around memory which the processors can directly access.">HWLOC_OBJ_NODE</a>);
<a name="l00091"></a>00091   <span class="comment">/* cannot be HWLOC_TYPE_DEPTH_MULTIPLE */</span>
<a name="l00092"></a>00092 
<a name="l00093"></a>00093   <span class="keywordflow">if</span> (depth == <a class="code" href="group__hwlocality__information.php#ggaf4e663cf42bbe20756b849c6293ef575a0565ab92ab72cb0cec91e23003294aad" title="No object of given type exists in the topology.">HWLOC_TYPE_DEPTH_UNKNOWN</a>) {
<a name="l00094"></a>00094     <span class="comment">/* if no numa, libnuma assumes we have a single node */</span>
<a name="l00095"></a>00095     <span class="keywordflow">if</span> (mask[0] &amp; 1)
<a name="l00096"></a>00096       <a class="code" href="group__hwlocality__cpuset.php#ga27a3b6994bd6f20c1f26d10bdb29ac0b" title="Copy the contents of CPU set src into the already allocated CPU set dst.">hwloc_cpuset_copy</a>(cpuset, <a class="code" href="group__hwlocality__helper__cpuset.php#ga75f0ac3ac41e9915541c3ae3153a6e26">hwloc_topology_get_complete_cpuset</a>(topology));
<a name="l00097"></a>00097     <span class="keywordflow">else</span>
<a name="l00098"></a>00098       <a class="code" href="group__hwlocality__cpuset.php#gacabf3491be3ab41b4ad1ee28f72db89e" title="Empty the CPU set set.">hwloc_cpuset_zero</a>(cpuset);
<a name="l00099"></a>00099 
<a name="l00100"></a>00100   } <span class="keywordflow">else</span> {
<a name="l00101"></a>00101     <a class="code" href="group__hwlocality__cpuset.php#gacabf3491be3ab41b4ad1ee28f72db89e" title="Empty the CPU set set.">hwloc_cpuset_zero</a>(cpuset);
<a name="l00102"></a>00102     <span class="keywordflow">for</span>(i=0; i&lt;maxnode; i++)
<a name="l00103"></a>00103       <span class="keywordflow">if</span> (mask[i/<span class="keyword">sizeof</span>(*mask)/8] &amp; (1UL &lt;&lt; (i% (<span class="keyword">sizeof</span>(*mask)*8)))) {
<a name="l00104"></a>00104         node = <a class="code" href="group__hwlocality__traversal.php#gaedd78240b0c1108355586a268ec5a697" title="Returns the topology object at index index from depth depth.">hwloc_get_obj_by_depth</a>(topology, depth, i);
<a name="l00105"></a>00105         <span class="keywordflow">if</span> (node)
<a name="l00106"></a>00106           <a class="code" href="group__hwlocality__cpuset.php#ga9654f87331e6f33090bed3d326346e85" title="Or sets set1 and set2 and store the result in set res.">hwloc_cpuset_or</a>(cpuset, cpuset, node-&gt;<a class="code" href="structhwloc__obj.php#a67925e0f2c47f50408fbdb9bddd0790f" title="CPUs covered by this object.">cpuset</a>);
<a name="l00107"></a>00107       }
<a name="l00108"></a>00108   }
<a name="l00109"></a>00109 
<a name="l00110"></a>00110   <span class="keywordflow">return</span> 0;
<a name="l00111"></a>00111 }
<a name="l00112"></a>00112 
<a name="l00131"></a>00131 <span class="keyword">static</span> inline <span class="keyword">struct </span>bitmask * 
<a name="l00132"></a><a class="code" href="group__hwlocality__linux__libnuma__bitmask.php#ga067ec565345a346bfd9d721cff5901ae">00132</a> <a class="code" href="group__hwlocality__linux__libnuma__bitmask.php#ga067ec565345a346bfd9d721cff5901ae" title="Convert hwloc CPU set cpuset into the returned libnuma bitmask.">hwloc_cpuset_to_linux_libnuma_bitmask</a>(<a class="code" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context.">hwloc_topology_t</a> topology, <a class="code" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> cpuset)
<a name="l00133"></a>00133 {
<a name="l00134"></a>00134   <span class="keyword">struct </span>bitmask *bitmask;
<a name="l00135"></a>00135   <a class="code" href="structhwloc__obj.php" title="Structure of a topology object.">hwloc_obj_t</a> node = NULL;
<a name="l00136"></a>00136   <span class="keywordtype">unsigned</span> nbnodes = <a class="code" href="group__hwlocality__information.php#ga0131ab1051011fabfa69d7c1853e716c" title="Returns the width of level type type.">hwloc_get_nbobjs_by_type</a>(topology, <a class="code" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55aaf0964881117bdedf1a5e9332cd120dd" title="NUMA node. A set of processors around memory which the processors can directly access.">HWLOC_OBJ_NODE</a>);
<a name="l00137"></a>00137 
<a name="l00138"></a>00138   <span class="keywordflow">if</span> (nbnodes) {
<a name="l00139"></a>00139     bitmask = numa_bitmask_alloc(nbnodes);
<a name="l00140"></a>00140     <span class="keywordflow">if</span> (!bitmask)
<a name="l00141"></a>00141       <span class="keywordflow">return</span> NULL;
<a name="l00142"></a>00142     <span class="keywordflow">while</span> ((node = <a class="code" href="group__hwlocality__helper__find__coverings.php#ga5915ea30f326676b3a4cfff371ce04d1" title="Iterate through same-type objects covering at least CPU set set.">hwloc_get_next_obj_covering_cpuset_by_type</a>(topology, cpuset, <a class="code" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55aaf0964881117bdedf1a5e9332cd120dd" title="NUMA node. A set of processors around memory which the processors can directly access.">HWLOC_OBJ_NODE</a>, node)) != NULL)
<a name="l00143"></a>00143       numa_bitmask_setbit(bitmask, node-&gt;<a class="code" href="structhwloc__obj.php#a61a7a80a68eaccbaaa28269e678c81a9" title="OS-provided physical index number.">os_index</a>);
<a name="l00144"></a>00144 
<a name="l00145"></a>00145   } <span class="keywordflow">else</span> {
<a name="l00146"></a>00146     <span class="comment">/* if no numa, libnuma assumes we have a single node */</span>
<a name="l00147"></a>00147     bitmask = numa_bitmask_alloc(1);
<a name="l00148"></a>00148     <span class="keywordflow">if</span> (!bitmask)
<a name="l00149"></a>00149       <span class="keywordflow">return</span> NULL;
<a name="l00150"></a>00150     <span class="keywordflow">if</span> (!<a class="code" href="group__hwlocality__cpuset.php#gac5b8ad0c32e9d14c587eabde188182a9" title="Test whether set set is empty.">hwloc_cpuset_iszero</a>(cpuset))
<a name="l00151"></a>00151       numa_bitmask_setbit(bitmask, 0);
<a name="l00152"></a>00152   }
<a name="l00153"></a>00153 
<a name="l00154"></a>00154   <span class="keywordflow">return</span> bitmask;
<a name="l00155"></a>00155 }
<a name="l00156"></a>00156 
<a name="l00162"></a>00162 <span class="keyword">static</span> inline <span class="keywordtype">int</span>
<a name="l00163"></a><a class="code" href="group__hwlocality__linux__libnuma__bitmask.php#ga47747968f12c2674d2840dfbacce4940">00163</a> <a class="code" href="group__hwlocality__linux__libnuma__bitmask.php#ga47747968f12c2674d2840dfbacce4940" title="Convert libnuma bitmask bitmask into hwloc CPU set cpuset.">hwloc_cpuset_from_linux_libnuma_bitmask</a>(<a class="code" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context.">hwloc_topology_t</a> topology, <a class="code" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411" title="Set of CPUs represented as an opaque pointer to an internal bitmask.">hwloc_cpuset_t</a> cpuset,
<a name="l00164"></a>00164                                        <span class="keyword">const</span> <span class="keyword">struct</span> bitmask *bitmask)
<a name="l00165"></a>00165 {
<a name="l00166"></a>00166   <a class="code" href="structhwloc__obj.php" title="Structure of a topology object.">hwloc_obj_t</a> node;
<a name="l00167"></a>00167   <span class="keywordtype">int</span> depth;
<a name="l00168"></a>00168   <span class="keywordtype">int</span> i;
<a name="l00169"></a>00169 
<a name="l00170"></a>00170   depth = <a class="code" href="group__hwlocality__information.php#gaea7c64dd59467f5201ba87712710b14d" title="Returns the depth of objects of type type.">hwloc_get_type_depth</a>(topology, <a class="code" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55aaf0964881117bdedf1a5e9332cd120dd" title="NUMA node. A set of processors around memory which the processors can directly access.">HWLOC_OBJ_NODE</a>);
<a name="l00171"></a>00171   <span class="comment">/* cannot be HWLOC_TYPE_DEPTH_MULTIPLE */</span>
<a name="l00172"></a>00172 
<a name="l00173"></a>00173   <span class="keywordflow">if</span> (depth == <a class="code" href="group__hwlocality__information.php#ggaf4e663cf42bbe20756b849c6293ef575a0565ab92ab72cb0cec91e23003294aad" title="No object of given type exists in the topology.">HWLOC_TYPE_DEPTH_UNKNOWN</a>) {
<a name="l00174"></a>00174     <span class="comment">/* if no numa, libnuma assumes we have a single node */</span>
<a name="l00175"></a>00175     <span class="keywordflow">if</span> (numa_bitmask_isbitset(bitmask, 0))
<a name="l00176"></a>00176       <a class="code" href="group__hwlocality__cpuset.php#ga27a3b6994bd6f20c1f26d10bdb29ac0b" title="Copy the contents of CPU set src into the already allocated CPU set dst.">hwloc_cpuset_copy</a>(cpuset, <a class="code" href="group__hwlocality__helper__cpuset.php#ga75f0ac3ac41e9915541c3ae3153a6e26">hwloc_topology_get_complete_cpuset</a>(topology));
<a name="l00177"></a>00177     <span class="keywordflow">else</span>
<a name="l00178"></a>00178       <a class="code" href="group__hwlocality__cpuset.php#gacabf3491be3ab41b4ad1ee28f72db89e" title="Empty the CPU set set.">hwloc_cpuset_zero</a>(cpuset);
<a name="l00179"></a>00179 
<a name="l00180"></a>00180   } <span class="keywordflow">else</span> {
<a name="l00181"></a>00181     <a class="code" href="group__hwlocality__cpuset.php#gacabf3491be3ab41b4ad1ee28f72db89e" title="Empty the CPU set set.">hwloc_cpuset_zero</a>(cpuset);
<a name="l00182"></a>00182     <span class="keywordflow">for</span>(i=0; i&lt;NUMA_NUM_NODES; i++)
<a name="l00183"></a>00183       <span class="keywordflow">if</span> (numa_bitmask_isbitset(bitmask, i)) {
<a name="l00184"></a>00184         node = <a class="code" href="group__hwlocality__traversal.php#gaedd78240b0c1108355586a268ec5a697" title="Returns the topology object at index index from depth depth.">hwloc_get_obj_by_depth</a>(topology, depth, i);
<a name="l00185"></a>00185         <span class="keywordflow">if</span> (node)
<a name="l00186"></a>00186           <a class="code" href="group__hwlocality__cpuset.php#ga9654f87331e6f33090bed3d326346e85" title="Or sets set1 and set2 and store the result in set res.">hwloc_cpuset_or</a>(cpuset, cpuset, node-&gt;<a class="code" href="structhwloc__obj.php#a67925e0f2c47f50408fbdb9bddd0790f" title="CPUs covered by this object.">cpuset</a>);
<a name="l00187"></a>00187       }
<a name="l00188"></a>00188   }
<a name="l00189"></a>00189 
<a name="l00190"></a>00190   <span class="keywordflow">return</span> 0;
<a name="l00191"></a>00191 }
<a name="l00192"></a>00192 
<a name="l00197"></a>00197 <span class="preprocessor">#ifdef NUMA_VERSION1_COMPATIBILITY</span>
<a name="l00198"></a>00198 <span class="preprocessor"></span>
<a name="l00208"></a>00208 <span class="keyword">static</span> inline <span class="keywordtype">int</span>
<a name="l00209"></a><a class="code" href="group__hwlocality__linux__libnuma__nodemask.php#ga36feb81315de87ce11d9a5aa2b4c6e6d">00209</a> <a class="code" href="group__hwlocality__linux__libnuma__nodemask.php#ga36feb81315de87ce11d9a5aa2b4c6e6d" title="Convert hwloc CPU set cpuset into libnuma nodemask nodemask.">hwloc_cpuset_to_linux_libnuma_nodemask</a>(<a class="code" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context.">hwloc_topology_t</a> topology, <a class="code" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> cpuset,
<a name="l00210"></a>00210                                       nodemask_t *nodemask)
<a name="l00211"></a>00211 {
<a name="l00212"></a>00212   <a class="code" href="structhwloc__obj.php" title="Structure of a topology object.">hwloc_obj_t</a> node = NULL;
<a name="l00213"></a>00213   <span class="keywordtype">unsigned</span> nbnodes = <a class="code" href="group__hwlocality__information.php#ga0131ab1051011fabfa69d7c1853e716c" title="Returns the width of level type type.">hwloc_get_nbobjs_by_type</a>(topology, <a class="code" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55aaf0964881117bdedf1a5e9332cd120dd" title="NUMA node. A set of processors around memory which the processors can directly access.">HWLOC_OBJ_NODE</a>);
<a name="l00214"></a>00214 
<a name="l00215"></a>00215   nodemask_zero(nodemask);
<a name="l00216"></a>00216   <span class="keywordflow">if</span> (nbnodes) {
<a name="l00217"></a>00217     <span class="keywordflow">while</span> ((node = <a class="code" href="group__hwlocality__helper__find__coverings.php#ga5915ea30f326676b3a4cfff371ce04d1" title="Iterate through same-type objects covering at least CPU set set.">hwloc_get_next_obj_covering_cpuset_by_type</a>(topology, cpuset, <a class="code" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55aaf0964881117bdedf1a5e9332cd120dd" title="NUMA node. A set of processors around memory which the processors can directly access.">HWLOC_OBJ_NODE</a>, node)) != NULL)
<a name="l00218"></a>00218       nodemask_set(nodemask, node-&gt;<a class="code" href="structhwloc__obj.php#a61a7a80a68eaccbaaa28269e678c81a9" title="OS-provided physical index number.">os_index</a>);
<a name="l00219"></a>00219 
<a name="l00220"></a>00220   } <span class="keywordflow">else</span> {
<a name="l00221"></a>00221     <span class="comment">/* if no numa, libnuma assumes we have a single node */</span>
<a name="l00222"></a>00222     <span class="keywordflow">if</span> (!<a class="code" href="group__hwlocality__cpuset.php#gac5b8ad0c32e9d14c587eabde188182a9" title="Test whether set set is empty.">hwloc_cpuset_iszero</a>(cpuset))
<a name="l00223"></a>00223       nodemask_set(nodemask, 0);
<a name="l00224"></a>00224   }
<a name="l00225"></a>00225 
<a name="l00226"></a>00226   <span class="keywordflow">return</span> 0;
<a name="l00227"></a>00227 }
<a name="l00228"></a>00228 
<a name="l00234"></a>00234 <span class="keyword">static</span> inline <span class="keywordtype">int</span>
<a name="l00235"></a><a class="code" href="group__hwlocality__linux__libnuma__nodemask.php#gac24c9e4bb2eab3e23b2039559adc9df8">00235</a> <a class="code" href="group__hwlocality__linux__libnuma__nodemask.php#gac24c9e4bb2eab3e23b2039559adc9df8" title="Convert libnuma nodemask nodemask into hwloc CPU set cpuset.">hwloc_cpuset_from_linux_libnuma_nodemask</a>(<a class="code" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context.">hwloc_topology_t</a> topology, <a class="code" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411" title="Set of CPUs represented as an opaque pointer to an internal bitmask.">hwloc_cpuset_t</a> cpuset,
<a name="l00236"></a>00236                                         <span class="keyword">const</span> nodemask_t *nodemask)
<a name="l00237"></a>00237 {
<a name="l00238"></a>00238   <a class="code" href="structhwloc__obj.php" title="Structure of a topology object.">hwloc_obj_t</a> node;
<a name="l00239"></a>00239   <span class="keywordtype">int</span> depth;
<a name="l00240"></a>00240   <span class="keywordtype">int</span> i;
<a name="l00241"></a>00241 
<a name="l00242"></a>00242   depth = <a class="code" href="group__hwlocality__information.php#gaea7c64dd59467f5201ba87712710b14d" title="Returns the depth of objects of type type.">hwloc_get_type_depth</a>(topology, <a class="code" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55aaf0964881117bdedf1a5e9332cd120dd" title="NUMA node. A set of processors around memory which the processors can directly access.">HWLOC_OBJ_NODE</a>);
<a name="l00243"></a>00243   <span class="comment">/* cannot be HWLOC_TYPE_DEPTH_MULTIPLE */</span>
<a name="l00244"></a>00244 
<a name="l00245"></a>00245   <span class="keywordflow">if</span> (depth == <a class="code" href="group__hwlocality__information.php#ggaf4e663cf42bbe20756b849c6293ef575a0565ab92ab72cb0cec91e23003294aad" title="No object of given type exists in the topology.">HWLOC_TYPE_DEPTH_UNKNOWN</a>) {
<a name="l00246"></a>00246     <span class="comment">/* if no numa, libnuma assumes we have a single node */</span>
<a name="l00247"></a>00247     <span class="keywordflow">if</span> (nodemask_isset(nodemask, 0))
<a name="l00248"></a>00248       <a class="code" href="group__hwlocality__cpuset.php#ga27a3b6994bd6f20c1f26d10bdb29ac0b" title="Copy the contents of CPU set src into the already allocated CPU set dst.">hwloc_cpuset_copy</a>(cpuset, <a class="code" href="group__hwlocality__helper__cpuset.php#ga75f0ac3ac41e9915541c3ae3153a6e26">hwloc_topology_get_complete_cpuset</a>(topology));
<a name="l00249"></a>00249     <span class="keywordflow">else</span>
<a name="l00250"></a>00250       <a class="code" href="group__hwlocality__cpuset.php#gacabf3491be3ab41b4ad1ee28f72db89e" title="Empty the CPU set set.">hwloc_cpuset_zero</a>(cpuset);
<a name="l00251"></a>00251 
<a name="l00252"></a>00252   } <span class="keywordflow">else</span> {
<a name="l00253"></a>00253     <a class="code" href="group__hwlocality__cpuset.php#gacabf3491be3ab41b4ad1ee28f72db89e" title="Empty the CPU set set.">hwloc_cpuset_zero</a>(cpuset);
<a name="l00254"></a>00254     <span class="keywordflow">for</span>(i=0; i&lt;NUMA_NUM_NODES; i++)
<a name="l00255"></a>00255       <span class="keywordflow">if</span> (nodemask_isset(nodemask, i)) {
<a name="l00256"></a>00256         node = <a class="code" href="group__hwlocality__traversal.php#gaedd78240b0c1108355586a268ec5a697" title="Returns the topology object at index index from depth depth.">hwloc_get_obj_by_depth</a>(topology, depth, i);
<a name="l00257"></a>00257         <span class="keywordflow">if</span> (node)
<a name="l00258"></a>00258           <a class="code" href="group__hwlocality__cpuset.php#ga9654f87331e6f33090bed3d326346e85" title="Or sets set1 and set2 and store the result in set res.">hwloc_cpuset_or</a>(cpuset, cpuset, node-&gt;<a class="code" href="structhwloc__obj.php#a67925e0f2c47f50408fbdb9bddd0790f" title="CPUs covered by this object.">cpuset</a>);
<a name="l00259"></a>00259       }
<a name="l00260"></a>00260   }
<a name="l00261"></a>00261 
<a name="l00262"></a>00262   <span class="keywordflow">return</span> 0;
<a name="l00263"></a>00263 }
<a name="l00264"></a>00264 
<a name="l00266"></a>00266 <span class="preprocessor">#endif </span><span class="comment">/* NUMA_VERSION1_COMPATIBILITY */</span>
<a name="l00267"></a>00267 
<a name="l00268"></a>00268 
<a name="l00269"></a>00269 <span class="preprocessor">#ifdef __cplusplus</span>
<a name="l00270"></a>00270 <span class="preprocessor"></span>} <span class="comment">/* extern &quot;C&quot; */</span>
<a name="l00271"></a>00271 <span class="preprocessor">#endif</span>
<a name="l00272"></a>00272 <span class="preprocessor"></span>
<a name="l00273"></a>00273 
<a name="l00274"></a>00274 <span class="preprocessor">#endif </span><span class="comment">/* HWLOC_LINUX_NUMA_H */</span>
</pre></div></div>
</div>
<?php
include_once("$topdir/includes/footer.inc");
