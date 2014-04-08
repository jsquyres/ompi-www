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
<div class="title">openfabrics-verbs.h</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">/*</span></div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;<span class="comment"> * Copyright © 2009 CNRS</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment"> * Copyright © 2009-2012 inria.  All rights reserved.</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment"> * Copyright © 2009-2010 Université Bordeaux 1</span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment"> * Copyright © 2009-2011 Cisco Systems, Inc.  All rights reserved.</span></div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment"> * See COPYING in top-level directory.</span></div>
<div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment"> */</span></div>
<div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;</div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="preprocessor">#ifndef HWLOC_OPENFABRICS_VERBS_H</span></div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#define HWLOC_OPENFABRICS_VERBS_H</span></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="preprocessor">#include &lt;hwloc.h&gt;</span></div>
<div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;<span class="preprocessor">#include &lt;hwloc/autogen/config.h&gt;</span></div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="preprocessor">#include &lt;hwloc/linux.h&gt;</span></div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;</div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#include &lt;infiniband/verbs.h&gt;</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;</div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="preprocessor">#ifdef __cplusplus</span></div>
<div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;<span class="preprocessor"></span><span class="keyword">extern</span> <span class="stringliteral">&quot;C&quot;</span> {</div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;</div>
<div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;<span class="keyword">static</span> inline <span class="keywordtype">int</span></div>
<div class="line"><a name="l00049"></a><span class="lineno"><a class="code" href="a00072.php#gaa8ea979ce3a9b8c70ae80bc5716a0fbe">   49</a></span>&#160;<a class="code" href="a00072.php#gaa8ea979ce3a9b8c70ae80bc5716a0fbe" title="Get the CPU set of logical processors that are physically close to device ibdev.">hwloc_ibv_get_device_cpuset</a>(<a class="code" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context.">hwloc_topology_t</a> topology ,</div>
<div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;                            <span class="keyword">struct</span> ibv_device *ibdev, <a class="code" href="a00040.php#ga4bbf39b68b6f568fb92739e7c0ea7801" title="A CPU set is a bitmap whose bits are set according to CPU physical OS indexes.">hwloc_cpuset_t</a> <span class="keyword">set</span>)</div>
<div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;{</div>
<div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;<span class="preprocessor">#ifdef HWLOC_LINUX_SYS</span></div>
<div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;<span class="preprocessor"></span>  <span class="comment">/* If we&#39;re on Linux, use the verbs-provided sysfs mechanism to</span></div>
<div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;<span class="comment">     get the local cpus */</span></div>
<div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;<span class="preprocessor">#define HWLOC_OPENFABRICS_VERBS_SYSFS_PATH_MAX 128</span></div>
<div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;<span class="preprocessor"></span>  <span class="keywordtype">char</span> path[HWLOC_OPENFABRICS_VERBS_SYSFS_PATH_MAX];</div>
<div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;  FILE *sysfile = NULL;</div>
<div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;</div>
<div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;  <span class="keywordflow">if</span> (!<a class="code" href="a00046.php#ga0d109e33fc7990f62f665d336e5e5111" title="Does the topology context come from this system?">hwloc_topology_is_thissystem</a>(topology)) {</div>
<div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;    errno = EINVAL;</div>
<div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;    <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;  }</div>
<div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;</div>
<div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;  sprintf(path, <span class="stringliteral">&quot;/sys/class/infiniband/%s/device/local_cpus&quot;</span>,</div>
<div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;          ibv_get_device_name(ibdev));</div>
<div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;  sysfile = fopen(path, <span class="stringliteral">&quot;r&quot;</span>);</div>
<div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;  <span class="keywordflow">if</span> (!sysfile)</div>
<div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;    <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;</div>
<div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;  <a class="code" href="a00067.php#gaeacad897c30dbea284948374ad4b010c" title="Convert a linux kernel cpumap file file into hwloc CPU set.">hwloc_linux_parse_cpumap_file</a>(sysfile, <span class="keyword">set</span>);</div>
<div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;  <span class="keywordflow">if</span> (<a class="code" href="a00065.php#gaa94fed35d2a598bc4a8657b6955b7bf5" title="Test whether bitmap bitmap is empty.">hwloc_bitmap_iszero</a>(<span class="keyword">set</span>))</div>
<div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;    <a class="code" href="a00065.php#gab14743355fa03b36cef521cbcd2fbf64" title="Copy the contents of bitmap src into the already allocated bitmap dst.">hwloc_bitmap_copy</a>(<span class="keyword">set</span>, <a class="code" href="a00060.php#ga418ebb39eaf1eac8f9cf4047cf59a534" title="Get complete CPU set.">hwloc_topology_get_complete_cpuset</a>(topology));</div>
<div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;</div>
<div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;  fclose(sysfile);</div>
<div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;<span class="preprocessor">#else</span></div>
<div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;<span class="preprocessor"></span>  <span class="comment">/* Non-Linux systems simply get a full cpuset */</span></div>
<div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;  <a class="code" href="a00065.php#gab14743355fa03b36cef521cbcd2fbf64" title="Copy the contents of bitmap src into the already allocated bitmap dst.">hwloc_bitmap_copy</a>(<span class="keyword">set</span>, <a class="code" href="a00060.php#ga418ebb39eaf1eac8f9cf4047cf59a534" title="Get complete CPU set.">hwloc_topology_get_complete_cpuset</a>(topology));</div>
<div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;<span class="preprocessor"></span>  <span class="keywordflow">return</span> 0;</div>
<div class="line"><a name="l00080"></a><span class="lineno">   80</span>&#160;}</div>
<div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;</div>
<div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;<span class="keyword">static</span> inline <a class="code" href="a00016.php" title="Structure of a topology object.">hwloc_obj_t</a></div>
<div class="line"><a name="l00099"></a><span class="lineno"><a class="code" href="a00072.php#gaa6139e8ce1279bd91867b31b9ff4316b">   99</a></span>&#160;<a class="code" href="a00072.php#gaa6139e8ce1279bd91867b31b9ff4316b" title="Get the hwloc OS device object corresponding to the OpenFabrics device named ibname.">hwloc_ibv_get_device_osdev_by_name</a>(<a class="code" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context.">hwloc_topology_t</a> topology,</div>
<div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;                                   <span class="keyword">const</span> <span class="keywordtype">char</span> *ibname)</div>
<div class="line"><a name="l00101"></a><span class="lineno">  101</span>&#160;{</div>
<div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;        <a class="code" href="a00016.php" title="Structure of a topology object.">hwloc_obj_t</a> osdev = NULL;</div>
<div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;        <span class="keywordflow">while</span> ((osdev = <a class="code" href="a00064.php#ga73a5bc6265642e6001f7a10812ab886d" title="Get the next OS device in the system.">hwloc_get_next_osdev</a>(topology, osdev)) != NULL) {</div>
<div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;                <span class="keywordflow">if</span> (<a class="code" href="a00041.php#gga64f5d539df299c97ae80ce53fc4b56c0a52157d03694fdae82dddd57ca8c973b6" title="Operating system openfabrics device. For instance the &quot;mlx4_0&quot; InfiniBand HCA device on Linux...">HWLOC_OBJ_OSDEV_OPENFABRICS</a> == osdev-&gt;<a class="code" href="a00016.php#accd40e29f71f19e88db62ea3df02adc8" title="Object type-specific Attributes, may be NULL if no attribute value was found.">attr</a>-&gt;<a class="code" href="a00017.php#a22904c25fe44b323bab5c9bc52660fca">osdev</a>.<a class="code" href="a00021.php#a31e019e27e54ac6138d04be639bb96f9">type</a></div>
<div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;                    &amp;&amp; osdev-&gt;<a class="code" href="a00016.php#abb709ec38f2970677e4e57d1d30be96d" title="Object description if any.">name</a> &amp;&amp; !strcmp(ibname, osdev-&gt;<a class="code" href="a00016.php#abb709ec38f2970677e4e57d1d30be96d" title="Object description if any.">name</a>))</div>
<div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;                        <span class="keywordflow">return</span> osdev;</div>
<div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;        }</div>
<div class="line"><a name="l00108"></a><span class="lineno">  108</span>&#160;        <span class="keywordflow">return</span> NULL;</div>
<div class="line"><a name="l00109"></a><span class="lineno">  109</span>&#160;}</div>
<div class="line"><a name="l00110"></a><span class="lineno">  110</span>&#160;</div>
<div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;<span class="preprocessor">#ifdef __cplusplus</span></div>
<div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;<span class="preprocessor"></span>} <span class="comment">/* extern &quot;C&quot; */</span></div>
<div class="line"><a name="l00116"></a><span class="lineno">  116</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00117"></a><span class="lineno">  117</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00118"></a><span class="lineno">  118</span>&#160;</div>
<div class="line"><a name="l00119"></a><span class="lineno">  119</span>&#160;<span class="preprocessor">#endif </span><span class="comment">/* HWLOC_OPENFABRICS_VERBS_H */</span><span class="preprocessor"></span></div>
</div><!-- fragment --></div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
