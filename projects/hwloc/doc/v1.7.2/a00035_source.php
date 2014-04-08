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
<!-- Generated by Doxygen 1.8.4 -->
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
<div class="title">cudart.h</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">/*</span></div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;<span class="comment"> * Copyright © 2010-2013 Inria.  All rights reserved.</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment"> * Copyright © 2010-2011 Université Bordeaux 1</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment"> * Copyright © 2011 Cisco Systems, Inc.  All rights reserved.</span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment"> * See COPYING in top-level directory.</span></div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment"> */</span></div>
<div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;</div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="preprocessor">#ifndef HWLOC_CUDART_H</span></div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#define HWLOC_CUDART_H</span></div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="preprocessor">#include &lt;hwloc.h&gt;</span></div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="preprocessor">#include &lt;hwloc/autogen/config.h&gt;</span></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="preprocessor">#include &lt;hwloc/helper.h&gt;</span></div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="preprocessor">#ifdef HWLOC_LINUX_SYS</span></div>
<div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#include &lt;hwloc/linux.h&gt;</span></div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#include &lt;cuda_runtime_api.h&gt;</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;</div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="preprocessor">#ifdef __cplusplus</span></div>
<div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;<span class="preprocessor"></span><span class="keyword">extern</span> <span class="stringliteral">&quot;C&quot;</span> {</div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;</div>
<div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;<span class="keyword">static</span> __hwloc_inline <span class="keywordtype">int</span></div>
<div class="line"><a name="l00043"></a><span class="lineno"><a class="code" href="a00088.php#ga39724580f3bd2672cb2f7da06a27b805">   43</a></span>&#160;<a class="code" href="a00088.php#ga39724580f3bd2672cb2f7da06a27b805" title="Return the domain, bus and device IDs of the CUDA device whose index is idx. ">hwloc_cudart_get_device_pci_ids</a>(<a class="code" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context. ">hwloc_topology_t</a> topology __hwloc_attribute_unused,</div>
<div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;                                <span class="keywordtype">int</span> idx, <span class="keywordtype">int</span> *domain, <span class="keywordtype">int</span> *bus, <span class="keywordtype">int</span> *dev)</div>
<div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;{</div>
<div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;  cudaError_t cerr;</div>
<div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;  <span class="keyword">struct </span>cudaDeviceProp prop;</div>
<div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;</div>
<div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;  cerr = cudaGetDeviceProperties(&amp;prop, idx);</div>
<div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;  <span class="keywordflow">if</span> (cerr) {</div>
<div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;    errno = ENOSYS;</div>
<div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;    <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;  }</div>
<div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;</div>
<div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;<span class="preprocessor">#ifdef CU_DEVICE_ATTRIBUTE_PCI_DOMAIN_ID</span></div>
<div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;<span class="preprocessor"></span>  *domain = prop.pciDomainID;</div>
<div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;<span class="preprocessor">#else</span></div>
<div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;<span class="preprocessor"></span>  *domain = 0;</div>
<div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;  *bus = prop.pciBusID;</div>
<div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;  *dev = prop.pciDeviceID;</div>
<div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;</div>
<div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;  <span class="keywordflow">return</span> 0;</div>
<div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;}</div>
<div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;</div>
<div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;<span class="keyword">static</span> __hwloc_inline <span class="keywordtype">int</span></div>
<div class="line"><a name="l00084"></a><span class="lineno"><a class="code" href="a00088.php#ga6d8369da45101fbf88b296373b431e49">   84</a></span>&#160;<a class="code" href="a00088.php#ga6d8369da45101fbf88b296373b431e49" title="Get the CPU set of logical processors that are physically close to device idx. ">hwloc_cudart_get_device_cpuset</a>(<a class="code" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context. ">hwloc_topology_t</a> topology __hwloc_attribute_unused,</div>
<div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;                               <span class="keywordtype">int</span> idx, <a class="code" href="a00051.php#ga4bbf39b68b6f568fb92739e7c0ea7801" title="A CPU set is a bitmap whose bits are set according to CPU physical OS indexes. ">hwloc_cpuset_t</a> set)</div>
<div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;{</div>
<div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;<span class="preprocessor">#ifdef HWLOC_LINUX_SYS</span></div>
<div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;<span class="preprocessor"></span>  <span class="comment">/* If we&#39;re on Linux, use the sysfs mechanism to get the local cpus */</span></div>
<div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;<span class="preprocessor">#define HWLOC_CUDART_DEVICE_SYSFS_PATH_MAX 128</span></div>
<div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;<span class="preprocessor"></span>  <span class="keywordtype">char</span> path[HWLOC_CUDART_DEVICE_SYSFS_PATH_MAX];</div>
<div class="line"><a name="l00091"></a><span class="lineno">   91</span>&#160;  FILE *sysfile = NULL;</div>
<div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;  <span class="keywordtype">int</span> domain, bus, dev;</div>
<div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;</div>
<div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;  <span class="keywordflow">if</span> (<a class="code" href="a00088.php#ga39724580f3bd2672cb2f7da06a27b805" title="Return the domain, bus and device IDs of the CUDA device whose index is idx. ">hwloc_cudart_get_device_pci_ids</a>(topology, idx, &amp;domain, &amp;bus, &amp;dev))</div>
<div class="line"><a name="l00095"></a><span class="lineno">   95</span>&#160;    <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00096"></a><span class="lineno">   96</span>&#160;</div>
<div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;  <span class="keywordflow">if</span> (!<a class="code" href="a00058.php#ga0d109e33fc7990f62f665d336e5e5111" title="Does the topology context come from this system? ">hwloc_topology_is_thissystem</a>(topology)) {</div>
<div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;    errno = EINVAL;</div>
<div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;    <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;  }</div>
<div class="line"><a name="l00101"></a><span class="lineno">  101</span>&#160;</div>
<div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;  sprintf(path, <span class="stringliteral">&quot;/sys/bus/pci/devices/%04x:%02x:%02x.0/local_cpus&quot;</span>, domain, bus, dev);</div>
<div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;  sysfile = fopen(path, <span class="stringliteral">&quot;r&quot;</span>);</div>
<div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;  <span class="keywordflow">if</span> (!sysfile)</div>
<div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;    <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;</div>
<div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;  <a class="code" href="a00083.php#gaeacad897c30dbea284948374ad4b010c" title="Convert a linux kernel cpumap file file into hwloc CPU set. ">hwloc_linux_parse_cpumap_file</a>(sysfile, set);</div>
<div class="line"><a name="l00108"></a><span class="lineno">  108</span>&#160;  <span class="keywordflow">if</span> (<a class="code" href="a00077.php#gaa94fed35d2a598bc4a8657b6955b7bf5" title="Test whether bitmap bitmap is empty. ">hwloc_bitmap_iszero</a>(set))</div>
<div class="line"><a name="l00109"></a><span class="lineno">  109</span>&#160;    <a class="code" href="a00077.php#gab14743355fa03b36cef521cbcd2fbf64" title="Copy the contents of bitmap src into the already allocated bitmap dst. ">hwloc_bitmap_copy</a>(set, <a class="code" href="a00072.php#ga418ebb39eaf1eac8f9cf4047cf59a534" title="Get complete CPU set. ">hwloc_topology_get_complete_cpuset</a>(topology));</div>
<div class="line"><a name="l00110"></a><span class="lineno">  110</span>&#160;</div>
<div class="line"><a name="l00111"></a><span class="lineno">  111</span>&#160;  fclose(sysfile);</div>
<div class="line"><a name="l00112"></a><span class="lineno">  112</span>&#160;<span class="preprocessor">#else</span></div>
<div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;<span class="preprocessor"></span>  <span class="comment">/* Non-Linux systems simply get a full cpuset */</span></div>
<div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;  <a class="code" href="a00077.php#gab14743355fa03b36cef521cbcd2fbf64" title="Copy the contents of bitmap src into the already allocated bitmap dst. ">hwloc_bitmap_copy</a>(set, <a class="code" href="a00072.php#ga418ebb39eaf1eac8f9cf4047cf59a534" title="Get complete CPU set. ">hwloc_topology_get_complete_cpuset</a>(topology));</div>
<div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00116"></a><span class="lineno">  116</span>&#160;<span class="preprocessor"></span>  <span class="keywordflow">return</span> 0;</div>
<div class="line"><a name="l00117"></a><span class="lineno">  117</span>&#160;}</div>
<div class="line"><a name="l00118"></a><span class="lineno">  118</span>&#160;</div>
<div class="line"><a name="l00129"></a><span class="lineno">  129</span>&#160;<span class="keyword">static</span> __hwloc_inline <a class="code" href="a00022.php" title="Structure of a topology object. ">hwloc_obj_t</a></div>
<div class="line"><a name="l00130"></a><span class="lineno"><a class="code" href="a00088.php#ga6a2dcc585e2d07a400887d488be1c6a6">  130</a></span>&#160;<a class="code" href="a00088.php#ga6a2dcc585e2d07a400887d488be1c6a6" title="Get the hwloc PCI device object corresponding to the CUDA device whose index is idx. ">hwloc_cudart_get_device_pcidev</a>(<a class="code" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context. ">hwloc_topology_t</a> topology, <span class="keywordtype">int</span> idx)</div>
<div class="line"><a name="l00131"></a><span class="lineno">  131</span>&#160;{</div>
<div class="line"><a name="l00132"></a><span class="lineno">  132</span>&#160;  <span class="keywordtype">int</span> domain, bus, dev;</div>
<div class="line"><a name="l00133"></a><span class="lineno">  133</span>&#160;</div>
<div class="line"><a name="l00134"></a><span class="lineno">  134</span>&#160;  <span class="keywordflow">if</span> (<a class="code" href="a00088.php#ga39724580f3bd2672cb2f7da06a27b805" title="Return the domain, bus and device IDs of the CUDA device whose index is idx. ">hwloc_cudart_get_device_pci_ids</a>(topology, idx, &amp;domain, &amp;bus, &amp;dev))</div>
<div class="line"><a name="l00135"></a><span class="lineno">  135</span>&#160;    <span class="keywordflow">return</span> NULL;</div>
<div class="line"><a name="l00136"></a><span class="lineno">  136</span>&#160;</div>
<div class="line"><a name="l00137"></a><span class="lineno">  137</span>&#160;  <span class="keywordflow">return</span> <a class="code" href="a00076.php#ga546e1d690c63fb24177f3013ed78ceb1" title="Find the PCI device object matching the PCI bus id given domain, bus device and function PCI bus id...">hwloc_get_pcidev_by_busid</a>(topology, domain, bus, dev, 0);</div>
<div class="line"><a name="l00138"></a><span class="lineno">  138</span>&#160;}</div>
<div class="line"><a name="l00139"></a><span class="lineno">  139</span>&#160;</div>
<div class="line"><a name="l00157"></a><span class="lineno">  157</span>&#160;<span class="keyword">static</span> __hwloc_inline <a class="code" href="a00022.php" title="Structure of a topology object. ">hwloc_obj_t</a></div>
<div class="line"><a name="l00158"></a><span class="lineno"><a class="code" href="a00088.php#ga3dab7b2a09e90b4eadb1b3e2ef17da8c">  158</a></span>&#160;<a class="code" href="a00088.php#ga3dab7b2a09e90b4eadb1b3e2ef17da8c" title="Get the hwloc OS device object corresponding to the CUDA device whose index is idx. ">hwloc_cudart_get_device_osdev_by_index</a>(<a class="code" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context. ">hwloc_topology_t</a> topology, <span class="keywordtype">unsigned</span> idx)</div>
<div class="line"><a name="l00159"></a><span class="lineno">  159</span>&#160;{</div>
<div class="line"><a name="l00160"></a><span class="lineno">  160</span>&#160;        <a class="code" href="a00022.php" title="Structure of a topology object. ">hwloc_obj_t</a> osdev = NULL;</div>
<div class="line"><a name="l00161"></a><span class="lineno">  161</span>&#160;        <span class="keywordflow">while</span> ((osdev = <a class="code" href="a00076.php#ga73a5bc6265642e6001f7a10812ab886d" title="Get the next OS device in the system. ">hwloc_get_next_osdev</a>(topology, osdev)) != NULL) {</div>
<div class="line"><a name="l00162"></a><span class="lineno">  162</span>&#160;                <span class="keywordflow">if</span> (<a class="code" href="a00052.php#gga64f5d539df299c97ae80ce53fc4b56c0a46f8927e1c3e137eaa86cc8f6861fb83" title="Operating system co-processor device. For instance &quot;mic0&quot; for a Xeon Phi (MIC) on Linux...">HWLOC_OBJ_OSDEV_COPROC</a> == osdev-&gt;<a class="code" href="a00022.php#accd40e29f71f19e88db62ea3df02adc8" title="Object type-specific Attributes, may be NULL if no attribute value was found. ">attr</a>-&gt;<a class="code" href="a00023.php#a22904c25fe44b323bab5c9bc52660fca">osdev</a>.<a class="code" href="a00027.php#a31e019e27e54ac6138d04be639bb96f9">type</a></div>
<div class="line"><a name="l00163"></a><span class="lineno">  163</span>&#160;                    &amp;&amp; osdev-&gt;<a class="code" href="a00022.php#abb709ec38f2970677e4e57d1d30be96d" title="Object description if any. ">name</a></div>
<div class="line"><a name="l00164"></a><span class="lineno">  164</span>&#160;                    &amp;&amp; !strncmp(<span class="stringliteral">&quot;cuda&quot;</span>, osdev-&gt;<a class="code" href="a00022.php#abb709ec38f2970677e4e57d1d30be96d" title="Object description if any. ">name</a>, 4)</div>
<div class="line"><a name="l00165"></a><span class="lineno">  165</span>&#160;                    &amp;&amp; atoi(osdev-&gt;<a class="code" href="a00022.php#abb709ec38f2970677e4e57d1d30be96d" title="Object description if any. ">name</a> + 4) == (<span class="keywordtype">int</span>) idx)</div>
<div class="line"><a name="l00166"></a><span class="lineno">  166</span>&#160;                        <span class="keywordflow">return</span> osdev;</div>
<div class="line"><a name="l00167"></a><span class="lineno">  167</span>&#160;        }</div>
<div class="line"><a name="l00168"></a><span class="lineno">  168</span>&#160;        <span class="keywordflow">return</span> NULL;</div>
<div class="line"><a name="l00169"></a><span class="lineno">  169</span>&#160;}</div>
<div class="line"><a name="l00170"></a><span class="lineno">  170</span>&#160;</div>
<div class="line"><a name="l00174"></a><span class="lineno">  174</span>&#160;<span class="preprocessor">#ifdef __cplusplus</span></div>
<div class="line"><a name="l00175"></a><span class="lineno">  175</span>&#160;<span class="preprocessor"></span>} <span class="comment">/* extern &quot;C&quot; */</span></div>
<div class="line"><a name="l00176"></a><span class="lineno">  176</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00177"></a><span class="lineno">  177</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00178"></a><span class="lineno">  178</span>&#160;</div>
<div class="line"><a name="l00179"></a><span class="lineno">  179</span>&#160;<span class="preprocessor">#endif </span><span class="comment">/* HWLOC_CUDART_H */</span><span class="preprocessor"></span></div>
</div><!-- fragment --></div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
