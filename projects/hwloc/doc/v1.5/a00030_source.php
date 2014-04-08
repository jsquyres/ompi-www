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
<!-- Generated by Doxygen 1.8.1.2 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_d44c64559bbebec7f509842c48db8b23.php">include</a></li><li class="navelem"><a class="el" href="dir_5cb306d949c7931a3b6c77517393dd34.php">hwloc</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">glibc-sched.h</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">/*</span></div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;<span class="comment"> * Copyright © 2009 CNRS</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment"> * Copyright © 2009-2012 inria.  All rights reserved.</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment"> * Copyright © 2009-2011 Université Bordeaux 1</span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment"> * Copyright © 2011 Cisco Systems, Inc.  All rights reserved.</span></div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment"> * See COPYING in top-level directory.</span></div>
<div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment"> */</span></div>
<div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;</div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="preprocessor">#ifndef HWLOC_GLIBC_SCHED_H</span></div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#define HWLOC_GLIBC_SCHED_H</span></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="preprocessor">#include &lt;hwloc.h&gt;</span></div>
<div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;<span class="preprocessor">#include &lt;hwloc/helper.h&gt;</span></div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="preprocessor">#include &lt;assert.h&gt;</span></div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;</div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#if !defined _GNU_SOURCE || !defined _SCHED_H || (!defined CPU_SETSIZE &amp;&amp; !defined sched_priority)</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#error Please make sure to include sched.h before including glibc-sched.h, and define _GNU_SOURCE before any inclusion of sched.h</span></div>
<div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;</div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="preprocessor">#ifdef __cplusplus</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor"></span><span class="keyword">extern</span> <span class="stringliteral">&quot;C&quot;</span> {</div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;</div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="preprocessor">#ifdef HWLOC_HAVE_CPU_SET</span></div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;</div>
<div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;<span class="keyword">static</span> inline <span class="keywordtype">int</span></div>
<div class="line"><a name="l00052"></a><span class="lineno"><a class="code" href="a00066.php#ga39454e6013441d32e58ef4c4fcba7e4b">   52</a></span>&#160;<a class="code" href="a00066.php#ga39454e6013441d32e58ef4c4fcba7e4b" title="Convert hwloc CPU set toposet into glibc sched affinity CPU set schedset.">hwloc_cpuset_to_glibc_sched_affinity</a>(<a class="code" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context.">hwloc_topology_t</a> topology , <a class="code" href="a00040.php#ga1f784433e9b606261f62d1134f6a3b25" title="A non-modifiable hwloc_cpuset_t.">hwloc_const_cpuset_t</a> hwlocset,</div>
<div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;                                    cpu_set_t *schedset, <span class="keywordtype">size_t</span> schedsetsize)</div>
<div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;{</div>
<div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;<span class="preprocessor">#ifdef CPU_ZERO_S</span></div>
<div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;<span class="preprocessor"></span>  <span class="keywordtype">unsigned</span> cpu;</div>
<div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;  CPU_ZERO_S(schedsetsize, schedset);</div>
<div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;  <a class="code" href="a00065.php#ga3f6861045a8029ade373510ffa727d2a" title="Loop macro iterating on bitmap bitmap.">hwloc_bitmap_foreach_begin</a>(cpu, hwlocset)</div>
<div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;    CPU_SET_S(cpu, schedsetsize, schedset);</div>
<div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;  <a class="code" href="a00065.php#gafcf3246db406218d4e155735b3fa6528">hwloc_bitmap_foreach_end</a>();</div>
<div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;<span class="preprocessor">#else </span><span class="comment">/* !CPU_ZERO_S */</span><span class="preprocessor"></span></div>
<div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;<span class="preprocessor"></span>  <span class="keywordtype">unsigned</span> cpu;</div>
<div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;  CPU_ZERO(schedset);</div>
<div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;  assert(schedsetsize == <span class="keyword">sizeof</span>(cpu_set_t));</div>
<div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;  <a class="code" href="a00065.php#ga3f6861045a8029ade373510ffa727d2a" title="Loop macro iterating on bitmap bitmap.">hwloc_bitmap_foreach_begin</a>(cpu, hwlocset)</div>
<div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;    CPU_SET(cpu, schedset);</div>
<div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;  <a class="code" href="a00065.php#gafcf3246db406218d4e155735b3fa6528">hwloc_bitmap_foreach_end</a>();</div>
<div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;<span class="preprocessor">#endif </span><span class="comment">/* !CPU_ZERO_S */</span><span class="preprocessor"></span></div>
<div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;<span class="preprocessor"></span>  <span class="keywordflow">return</span> 0;</div>
<div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;}</div>
<div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;</div>
<div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;<span class="keyword">static</span> inline <span class="keywordtype">int</span></div>
<div class="line"><a name="l00080"></a><span class="lineno"><a class="code" href="a00066.php#ga6df504b2f5440b527be05cdad6b1655e">   80</a></span>&#160;<a class="code" href="a00066.php#ga6df504b2f5440b527be05cdad6b1655e" title="Convert glibc sched affinity CPU set schedset into hwloc CPU set.">hwloc_cpuset_from_glibc_sched_affinity</a>(<a class="code" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context.">hwloc_topology_t</a> topology , <a class="code" href="a00040.php#ga4bbf39b68b6f568fb92739e7c0ea7801" title="A CPU set is a bitmap whose bits are set according to CPU physical OS indexes.">hwloc_cpuset_t</a> hwlocset,</div>
<div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;                                       <span class="keyword">const</span> cpu_set_t *schedset, <span class="keywordtype">size_t</span> schedsetsize)</div>
<div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;{</div>
<div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;  <span class="keywordtype">int</span> cpu;</div>
<div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;<span class="preprocessor">#ifdef CPU_ZERO_S</span></div>
<div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;<span class="preprocessor"></span>  <span class="keywordtype">int</span> count;</div>
<div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;<span class="preprocessor"></span>  <a class="code" href="a00065.php#ga6c540b9fe63b8223b6aba46d56dd63b8" title="Empty the bitmap bitmap.">hwloc_bitmap_zero</a>(hwlocset);</div>
<div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;<span class="preprocessor">#ifdef CPU_ZERO_S</span></div>
<div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;<span class="preprocessor"></span>  count = CPU_COUNT_S(schedsetsize, schedset);</div>
<div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;  cpu = 0;</div>
<div class="line"><a name="l00091"></a><span class="lineno">   91</span>&#160;  <span class="keywordflow">while</span> (count) {</div>
<div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;    <span class="keywordflow">if</span> (CPU_ISSET_S(cpu, schedsetsize, schedset)) {</div>
<div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;      <a class="code" href="a00065.php#ga497556af0cc34f109ae0277999c074d3" title="Add index id in bitmap bitmap.">hwloc_bitmap_set</a>(hwlocset, cpu);</div>
<div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;      count--;</div>
<div class="line"><a name="l00095"></a><span class="lineno">   95</span>&#160;    }</div>
<div class="line"><a name="l00096"></a><span class="lineno">   96</span>&#160;    cpu++;</div>
<div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;  }</div>
<div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;<span class="preprocessor">#else </span><span class="comment">/* !CPU_ZERO_S */</span><span class="preprocessor"></span></div>
<div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;<span class="preprocessor"></span>  <span class="comment">/* sched.h does not support dynamic cpu_set_t (introduced in glibc 2.7),</span></div>
<div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;<span class="comment">   * assume we have a very old interface without CPU_COUNT (added in 2.6)</span></div>
<div class="line"><a name="l00101"></a><span class="lineno">  101</span>&#160;<span class="comment">   */</span></div>
<div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;  assert(schedsetsize == <span class="keyword">sizeof</span>(cpu_set_t));</div>
<div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;  <span class="keywordflow">for</span>(cpu=0; cpu&lt;CPU_SETSIZE; cpu++)</div>
<div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;    <span class="keywordflow">if</span> (CPU_ISSET(cpu, schedset))</div>
<div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;      <a class="code" href="a00065.php#ga497556af0cc34f109ae0277999c074d3" title="Add index id in bitmap bitmap.">hwloc_bitmap_set</a>(hwlocset, cpu);</div>
<div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;<span class="preprocessor">#endif </span><span class="comment">/* !CPU_ZERO_S */</span><span class="preprocessor"></span></div>
<div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;<span class="preprocessor"></span>  <span class="keywordflow">return</span> 0;</div>
<div class="line"><a name="l00108"></a><span class="lineno">  108</span>&#160;}</div>
<div class="line"><a name="l00109"></a><span class="lineno">  109</span>&#160;</div>
<div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;<span class="preprocessor">#endif </span><span class="comment">/* CPU_SET */</span><span class="preprocessor"></span></div>
<div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;</div>
<div class="line"><a name="l00116"></a><span class="lineno">  116</span>&#160;<span class="preprocessor">#ifdef __cplusplus</span></div>
<div class="line"><a name="l00117"></a><span class="lineno">  117</span>&#160;<span class="preprocessor"></span>} <span class="comment">/* extern &quot;C&quot; */</span></div>
<div class="line"><a name="l00118"></a><span class="lineno">  118</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00119"></a><span class="lineno">  119</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00120"></a><span class="lineno">  120</span>&#160;</div>
<div class="line"><a name="l00121"></a><span class="lineno">  121</span>&#160;<span class="preprocessor">#endif </span><span class="comment">/* HWLOC_GLIBC_SCHED_H */</span><span class="preprocessor"></span></div>
</div><!-- fragment --></div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
