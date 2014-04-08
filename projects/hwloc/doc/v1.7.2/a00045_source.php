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
<div class="title">nvml.h</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">/*</span></div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;<span class="comment"> * Copyright © 2012-2013 Inria.  All rights reserved.</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment"> * See COPYING in top-level directory.</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment"> */</span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;</div>
<div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="preprocessor">#ifndef HWLOC_NVML_H</span></div>
<div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#define HWLOC_NVML_H</span></div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="preprocessor">#include &lt;hwloc.h&gt;</span></div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="preprocessor">#include &lt;hwloc/autogen/config.h&gt;</span></div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="preprocessor">#include &lt;hwloc/helper.h&gt;</span></div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="preprocessor">#ifdef HWLOC_LINUX_SYS</span></div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#include &lt;hwloc/linux.h&gt;</span></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;<span class="preprocessor">#include &lt;nvml.h&gt;</span></div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;</div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;</div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#ifdef __cplusplus</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;<span class="preprocessor"></span><span class="keyword">extern</span> <span class="stringliteral">&quot;C&quot;</span> {</div>
<div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;</div>
<div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;<span class="keyword">static</span> __hwloc_inline <span class="keywordtype">int</span></div>
<div class="line"><a name="l00052"></a><span class="lineno"><a class="code" href="a00089.php#ga4ee13f105f3d2a359de8ee74b6929863">   52</a></span>&#160;<a class="code" href="a00089.php#ga4ee13f105f3d2a359de8ee74b6929863" title="Get the CPU set of logical processors that are physically close to NVML device device. ">hwloc_nvml_get_device_cpuset</a>(<a class="code" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context. ">hwloc_topology_t</a> topology __hwloc_attribute_unused,</div>
<div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;                             nvmlDevice_t device, <a class="code" href="a00051.php#ga4bbf39b68b6f568fb92739e7c0ea7801" title="A CPU set is a bitmap whose bits are set according to CPU physical OS indexes. ">hwloc_cpuset_t</a> set)</div>
<div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;{</div>
<div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;<span class="preprocessor">#ifdef HWLOC_LINUX_SYS</span></div>
<div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;<span class="preprocessor"></span>  <span class="comment">/* If we&#39;re on Linux, use the sysfs mechanism to get the local cpus */</span></div>
<div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;<span class="preprocessor">#define HWLOC_NVML_DEVICE_SYSFS_PATH_MAX 128</span></div>
<div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;<span class="preprocessor"></span>  <span class="keywordtype">char</span> path[HWLOC_NVML_DEVICE_SYSFS_PATH_MAX];</div>
<div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;  FILE *sysfile = NULL;</div>
<div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;  nvmlReturn_t nvres;</div>
<div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;  nvmlPciInfo_t pci;</div>
<div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;</div>
<div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;  <span class="keywordflow">if</span> (!<a class="code" href="a00058.php#ga0d109e33fc7990f62f665d336e5e5111" title="Does the topology context come from this system? ">hwloc_topology_is_thissystem</a>(topology)) {</div>
<div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;    errno = EINVAL;</div>
<div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;    <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;  }</div>
<div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;</div>
<div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;  nvres = nvmlDeviceGetPciInfo(device, &amp;pci);</div>
<div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;  <span class="keywordflow">if</span> (NVML_SUCCESS != nvres) {</div>
<div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;    errno = EINVAL;</div>
<div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;    <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;  }</div>
<div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;</div>
<div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;  sprintf(path, <span class="stringliteral">&quot;/sys/bus/pci/devices/%04x:%02x:%02x.0/local_cpus&quot;</span>, pci.domain, pci.bus, pci.device);</div>
<div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;  sysfile = fopen(path, <span class="stringliteral">&quot;r&quot;</span>);</div>
<div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;  <span class="keywordflow">if</span> (!sysfile)</div>
<div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;    <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;</div>
<div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;  <a class="code" href="a00083.php#gaeacad897c30dbea284948374ad4b010c" title="Convert a linux kernel cpumap file file into hwloc CPU set. ">hwloc_linux_parse_cpumap_file</a>(sysfile, set);</div>
<div class="line"><a name="l00080"></a><span class="lineno">   80</span>&#160;  <span class="keywordflow">if</span> (<a class="code" href="a00077.php#gaa94fed35d2a598bc4a8657b6955b7bf5" title="Test whether bitmap bitmap is empty. ">hwloc_bitmap_iszero</a>(set))</div>
<div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;    <a class="code" href="a00077.php#gab14743355fa03b36cef521cbcd2fbf64" title="Copy the contents of bitmap src into the already allocated bitmap dst. ">hwloc_bitmap_copy</a>(set, <a class="code" href="a00072.php#ga418ebb39eaf1eac8f9cf4047cf59a534" title="Get complete CPU set. ">hwloc_topology_get_complete_cpuset</a>(topology));</div>
<div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;</div>
<div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;  fclose(sysfile);</div>
<div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;<span class="preprocessor">#else</span></div>
<div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;<span class="preprocessor"></span>  <span class="comment">/* Non-Linux systems simply get a full cpuset */</span></div>
<div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;  <a class="code" href="a00077.php#gab14743355fa03b36cef521cbcd2fbf64" title="Copy the contents of bitmap src into the already allocated bitmap dst. ">hwloc_bitmap_copy</a>(set, <a class="code" href="a00072.php#ga418ebb39eaf1eac8f9cf4047cf59a534" title="Get complete CPU set. ">hwloc_topology_get_complete_cpuset</a>(topology));</div>
<div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;<span class="preprocessor"></span>  <span class="keywordflow">return</span> 0;</div>
<div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;}</div>
<div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;</div>
<div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;<span class="keyword">static</span> __hwloc_inline <a class="code" href="a00022.php" title="Structure of a topology object. ">hwloc_obj_t</a></div>
<div class="line"><a name="l00105"></a><span class="lineno"><a class="code" href="a00089.php#ga2b5e13914ff9462ed799b3022bc746fc">  105</a></span>&#160;<a class="code" href="a00089.php#ga2b5e13914ff9462ed799b3022bc746fc" title="Get the hwloc OS device object corresponding to the NVML device whose index is idx. ">hwloc_nvml_get_device_osdev_by_index</a>(<a class="code" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context. ">hwloc_topology_t</a> topology, <span class="keywordtype">unsigned</span> idx)</div>
<div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;{</div>
<div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;        <a class="code" href="a00022.php" title="Structure of a topology object. ">hwloc_obj_t</a> osdev = NULL;</div>
<div class="line"><a name="l00108"></a><span class="lineno">  108</span>&#160;        <span class="keywordflow">while</span> ((osdev = <a class="code" href="a00076.php#ga73a5bc6265642e6001f7a10812ab886d" title="Get the next OS device in the system. ">hwloc_get_next_osdev</a>(topology, osdev)) != NULL) {</div>
<div class="line"><a name="l00109"></a><span class="lineno">  109</span>&#160;                <span class="keywordflow">if</span> (<a class="code" href="a00052.php#gga64f5d539df299c97ae80ce53fc4b56c0aa3a09798ef2836abb236dc3a645ffc90" title="Operating system GPU device. For instance &quot;:0.0&quot; for a GL display, &quot;card0&quot; for a Linux DRM device...">HWLOC_OBJ_OSDEV_GPU</a> == osdev-&gt;<a class="code" href="a00022.php#accd40e29f71f19e88db62ea3df02adc8" title="Object type-specific Attributes, may be NULL if no attribute value was found. ">attr</a>-&gt;<a class="code" href="a00023.php#a22904c25fe44b323bab5c9bc52660fca">osdev</a>.<a class="code" href="a00027.php#a31e019e27e54ac6138d04be639bb96f9">type</a></div>
<div class="line"><a name="l00110"></a><span class="lineno">  110</span>&#160;                    &amp;&amp; osdev-&gt;<a class="code" href="a00022.php#abb709ec38f2970677e4e57d1d30be96d" title="Object description if any. ">name</a></div>
<div class="line"><a name="l00111"></a><span class="lineno">  111</span>&#160;                    &amp;&amp; !strncmp(<span class="stringliteral">&quot;nvml&quot;</span>, osdev-&gt;<a class="code" href="a00022.php#abb709ec38f2970677e4e57d1d30be96d" title="Object description if any. ">name</a>, 4)</div>
<div class="line"><a name="l00112"></a><span class="lineno">  112</span>&#160;                    &amp;&amp; atoi(osdev-&gt;<a class="code" href="a00022.php#abb709ec38f2970677e4e57d1d30be96d" title="Object description if any. ">name</a> + 4) == (<span class="keywordtype">int</span>) idx)</div>
<div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;                        <span class="keywordflow">return</span> osdev;</div>
<div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;        }</div>
<div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;        <span class="keywordflow">return</span> NULL;</div>
<div class="line"><a name="l00116"></a><span class="lineno">  116</span>&#160;}</div>
<div class="line"><a name="l00117"></a><span class="lineno">  117</span>&#160;</div>
<div class="line"><a name="l00131"></a><span class="lineno">  131</span>&#160;<span class="keyword">static</span> __hwloc_inline <a class="code" href="a00022.php" title="Structure of a topology object. ">hwloc_obj_t</a></div>
<div class="line"><a name="l00132"></a><span class="lineno"><a class="code" href="a00089.php#gadd25999bc0c482c85f6afddd7897b1c1">  132</a></span>&#160;<a class="code" href="a00089.php#gadd25999bc0c482c85f6afddd7897b1c1" title="Get the hwloc OS device object corresponding to NVML device device. ">hwloc_nvml_get_device_osdev</a>(<a class="code" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context. ">hwloc_topology_t</a> topology, nvmlDevice_t device)</div>
<div class="line"><a name="l00133"></a><span class="lineno">  133</span>&#160;{</div>
<div class="line"><a name="l00134"></a><span class="lineno">  134</span>&#160;        <a class="code" href="a00022.php" title="Structure of a topology object. ">hwloc_obj_t</a> osdev;</div>
<div class="line"><a name="l00135"></a><span class="lineno">  135</span>&#160;        nvmlReturn_t nvres;</div>
<div class="line"><a name="l00136"></a><span class="lineno">  136</span>&#160;        nvmlPciInfo_t pci;</div>
<div class="line"><a name="l00137"></a><span class="lineno">  137</span>&#160;</div>
<div class="line"><a name="l00138"></a><span class="lineno">  138</span>&#160;        <span class="keywordflow">if</span> (!<a class="code" href="a00058.php#ga0d109e33fc7990f62f665d336e5e5111" title="Does the topology context come from this system? ">hwloc_topology_is_thissystem</a>(topology)) {</div>
<div class="line"><a name="l00139"></a><span class="lineno">  139</span>&#160;                errno = EINVAL;</div>
<div class="line"><a name="l00140"></a><span class="lineno">  140</span>&#160;                <span class="keywordflow">return</span> NULL;</div>
<div class="line"><a name="l00141"></a><span class="lineno">  141</span>&#160;        }</div>
<div class="line"><a name="l00142"></a><span class="lineno">  142</span>&#160;</div>
<div class="line"><a name="l00143"></a><span class="lineno">  143</span>&#160;        nvres = nvmlDeviceGetPciInfo(device, &amp;pci);</div>
<div class="line"><a name="l00144"></a><span class="lineno">  144</span>&#160;        <span class="keywordflow">if</span> (NVML_SUCCESS != nvres)</div>
<div class="line"><a name="l00145"></a><span class="lineno">  145</span>&#160;                <span class="keywordflow">return</span> NULL;</div>
<div class="line"><a name="l00146"></a><span class="lineno">  146</span>&#160;</div>
<div class="line"><a name="l00147"></a><span class="lineno">  147</span>&#160;        osdev = NULL;</div>
<div class="line"><a name="l00148"></a><span class="lineno">  148</span>&#160;        <span class="keywordflow">while</span> ((osdev = <a class="code" href="a00076.php#ga73a5bc6265642e6001f7a10812ab886d" title="Get the next OS device in the system. ">hwloc_get_next_osdev</a>(topology, osdev)) != NULL) {</div>
<div class="line"><a name="l00149"></a><span class="lineno">  149</span>&#160;                <a class="code" href="a00022.php" title="Structure of a topology object. ">hwloc_obj_t</a> pcidev = osdev-&gt;<a class="code" href="a00022.php#adc494f6aed939992be1c55cca5822900" title="Parent, NULL if root (system object) ">parent</a>;</div>
<div class="line"><a name="l00150"></a><span class="lineno">  150</span>&#160;                <span class="keywordflow">if</span> (strncmp(osdev-&gt;<a class="code" href="a00022.php#abb709ec38f2970677e4e57d1d30be96d" title="Object description if any. ">name</a>, <span class="stringliteral">&quot;nvml&quot;</span>, 4))</div>
<div class="line"><a name="l00151"></a><span class="lineno">  151</span>&#160;                        <span class="keywordflow">continue</span>;</div>
<div class="line"><a name="l00152"></a><span class="lineno">  152</span>&#160;                <span class="keywordflow">if</span> (pcidev</div>
<div class="line"><a name="l00153"></a><span class="lineno">  153</span>&#160;                    &amp;&amp; pcidev-&gt;<a class="code" href="a00022.php#acc4f0803f244867e68fe0036800be5de" title="Type of object. ">type</a> == <a class="code" href="a00052.php#ggacd37bb612667dc437d66bfb175a8dc55a5d8117a54df1fbd3606ab19e42cb0ea9" title="PCI device. These objects have neither CPU sets nor node sets. They are not added to the topology unl...">HWLOC_OBJ_PCI_DEVICE</a></div>
<div class="line"><a name="l00154"></a><span class="lineno">  154</span>&#160;                    &amp;&amp; pcidev-&gt;<a class="code" href="a00022.php#accd40e29f71f19e88db62ea3df02adc8" title="Object type-specific Attributes, may be NULL if no attribute value was found. ">attr</a>-&gt;<a class="code" href="a00023.php#a4203d713ce0f5beaa6ee0e9bdac70828">pcidev</a>.<a class="code" href="a00028.php#a8fba44988deb98613c1505a4019a34dc">domain</a> == pci.domain</div>
<div class="line"><a name="l00155"></a><span class="lineno">  155</span>&#160;                    &amp;&amp; pcidev-&gt;<a class="code" href="a00022.php#accd40e29f71f19e88db62ea3df02adc8" title="Object type-specific Attributes, may be NULL if no attribute value was found. ">attr</a>-&gt;<a class="code" href="a00023.php#a4203d713ce0f5beaa6ee0e9bdac70828">pcidev</a>.<a class="code" href="a00028.php#aae99e035e8d1387d7b8768aaa8eceb0a">bus</a> == pci.bus</div>
<div class="line"><a name="l00156"></a><span class="lineno">  156</span>&#160;                    &amp;&amp; pcidev-&gt;<a class="code" href="a00022.php#accd40e29f71f19e88db62ea3df02adc8" title="Object type-specific Attributes, may be NULL if no attribute value was found. ">attr</a>-&gt;<a class="code" href="a00023.php#a4203d713ce0f5beaa6ee0e9bdac70828">pcidev</a>.<a class="code" href="a00028.php#a3d70c84a12f7e93d14c8d47bf4fd9dc5">dev</a> == pci.device</div>
<div class="line"><a name="l00157"></a><span class="lineno">  157</span>&#160;                    &amp;&amp; pcidev-&gt;<a class="code" href="a00022.php#accd40e29f71f19e88db62ea3df02adc8" title="Object type-specific Attributes, may be NULL if no attribute value was found. ">attr</a>-&gt;<a class="code" href="a00023.php#a4203d713ce0f5beaa6ee0e9bdac70828">pcidev</a>.<a class="code" href="a00028.php#a695f32df53f4ef728670bfcf31b74e0f">func</a> == 0)</div>
<div class="line"><a name="l00158"></a><span class="lineno">  158</span>&#160;                        <span class="keywordflow">return</span> osdev;</div>
<div class="line"><a name="l00159"></a><span class="lineno">  159</span>&#160;        }</div>
<div class="line"><a name="l00160"></a><span class="lineno">  160</span>&#160;</div>
<div class="line"><a name="l00161"></a><span class="lineno">  161</span>&#160;        <span class="keywordflow">return</span> NULL;</div>
<div class="line"><a name="l00162"></a><span class="lineno">  162</span>&#160;}</div>
<div class="line"><a name="l00163"></a><span class="lineno">  163</span>&#160;</div>
<div class="line"><a name="l00167"></a><span class="lineno">  167</span>&#160;<span class="preprocessor">#ifdef __cplusplus</span></div>
<div class="line"><a name="l00168"></a><span class="lineno">  168</span>&#160;<span class="preprocessor"></span>} <span class="comment">/* extern &quot;C&quot; */</span></div>
<div class="line"><a name="l00169"></a><span class="lineno">  169</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00170"></a><span class="lineno">  170</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00171"></a><span class="lineno">  171</span>&#160;</div>
<div class="line"><a name="l00172"></a><span class="lineno">  172</span>&#160;<span class="preprocessor">#endif </span><span class="comment">/* HWLOC_NVML_H */</span><span class="preprocessor"></span></div>
</div><!-- fragment --></div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
