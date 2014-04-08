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
<div class="title">bitmap.h</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">/*</span></div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;<span class="comment"> * Copyright © 2009 CNRS</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment"> * Copyright © 2009-2011 inria.  All rights reserved.</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment"> * Copyright © 2009-2011 Université Bordeaux 1</span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment"> * Copyright © 2009-2011 Cisco Systems, Inc.  All rights reserved.</span></div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment"> * See COPYING in top-level directory.</span></div>
<div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment"> */</span></div>
<div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;</div>
<div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="preprocessor">#ifndef HWLOC_BITMAP_H</span></div>
<div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#define HWLOC_BITMAP_H</span></div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="preprocessor">#include &lt;hwloc/autogen/config.h&gt;</span></div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="preprocessor">#include &lt;assert.h&gt;</span></div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;</div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;</div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="preprocessor">#ifdef __cplusplus</span></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="preprocessor"></span><span class="keyword">extern</span> <span class="stringliteral">&quot;C&quot;</span> {</div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;</div>
<div class="line"><a name="l00045"></a><span class="lineno"><a class="code" href="a00063.php#gaa3c2bf4c776d603dcebbb61b0c923d84">   45</a></span>&#160;<span class="keyword">typedef</span> <span class="keyword">struct </span>hwloc_bitmap_s * <a class="code" href="a00063.php#gaa3c2bf4c776d603dcebbb61b0c923d84" title="Set of bits represented as an opaque pointer to an internal bitmap.">hwloc_bitmap_t</a>;</div>
<div class="line"><a name="l00047"></a><span class="lineno"><a class="code" href="a00063.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">   47</a></span>&#160;<span class="keyword">typedef</span> <span class="keyword">const</span> <span class="keyword">struct </span>hwloc_bitmap_s * <a class="code" href="a00063.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48" title="a non-modifiable hwloc_bitmap_t">hwloc_const_bitmap_t</a>;</div>
<div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;</div>
<div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;</div>
<div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;<span class="comment">/*</span></div>
<div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;<span class="comment"> * Bitmap allocation, freeing and copying.</span></div>
<div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;<span class="comment"> */</span></div>
<div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;</div>
<div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160; hwloc_bitmap_t <a class="code" href="a00063.php#ga9fb6aedc30d4ef4998fa53e2403b6130" title="Allocate a new empty bitmap.">hwloc_bitmap_alloc</a>(<span class="keywordtype">void</span>) ;</div>
<div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;</div>
<div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160; hwloc_bitmap_t <a class="code" href="a00063.php#gadd4479485685bda179f4b8b9b70f671e" title="Allocate a new full bitmap.">hwloc_bitmap_alloc_full</a>(<span class="keywordtype">void</span>) ;</div>
<div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;</div>
<div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160; <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga8e7035fe555ef96921bfb98e08519bc7" title="Free bitmap bitmap.">hwloc_bitmap_free</a>(hwloc_bitmap_t bitmap);</div>
<div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;</div>
<div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160; hwloc_bitmap_t <a class="code" href="a00063.php#gaaa4ed76211cd3694dfbea2109fc440be" title="Duplicate bitmap bitmap by allocating a new bitmap and copying bitmap contents.">hwloc_bitmap_dup</a>(hwloc_const_bitmap_t bitmap) ;</div>
<div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;</div>
<div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160; <span class="keywordtype">void</span> <a class="code" href="a00063.php#gab14743355fa03b36cef521cbcd2fbf64" title="Copy the contents of bitmap src into the already allocated bitmap dst.">hwloc_bitmap_copy</a>(hwloc_bitmap_t dst, hwloc_const_bitmap_t src);</div>
<div class="line"><a name="l00080"></a><span class="lineno">   80</span>&#160;</div>
<div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;</div>
<div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;<span class="comment">/*</span></div>
<div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;<span class="comment"> * Bitmap/String Conversion</span></div>
<div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;<span class="comment"> */</span></div>
<div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;</div>
<div class="line"><a name="l00095"></a><span class="lineno">   95</span>&#160; <span class="keywordtype">int</span> <a class="code" href="a00063.php#ga6c0d60db98f27276752c1e5fafcbd7d1" title="Stringify a bitmap.">hwloc_bitmap_snprintf</a>(<span class="keywordtype">char</span> * restrict buf, <span class="keywordtype">size_t</span> buflen, hwloc_const_bitmap_t bitmap);</div>
<div class="line"><a name="l00096"></a><span class="lineno">   96</span>&#160;</div>
<div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160; <span class="keywordtype">int</span> <a class="code" href="a00063.php#gad3cf87ceb58aa91656756bbb58057320" title="Stringify a bitmap into a newly allocated string.">hwloc_bitmap_asprintf</a>(<span class="keywordtype">char</span> ** strp, hwloc_const_bitmap_t bitmap);</div>
<div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;</div>
<div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160; <span class="keywordtype">int</span> <a class="code" href="a00063.php#ga553cd5ceb1925bfd31788e70b4a46ae8" title="Parse a bitmap string and stores it in bitmap bitmap.">hwloc_bitmap_sscanf</a>(hwloc_bitmap_t bitmap, const <span class="keywordtype">char</span> * restrict <span class="keywordtype">string</span>);</div>
<div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;</div>
<div class="line"><a name="l00118"></a><span class="lineno">  118</span>&#160; <span class="keywordtype">int</span> <a class="code" href="a00063.php#gab94b52560ea4333663895b3276e89af2" title="Stringify a bitmap in the list format.">hwloc_bitmap_list_snprintf</a>(<span class="keywordtype">char</span> * restrict buf, <span class="keywordtype">size_t</span> buflen, hwloc_const_bitmap_t bitmap);</div>
<div class="line"><a name="l00119"></a><span class="lineno">  119</span>&#160;</div>
<div class="line"><a name="l00122"></a><span class="lineno">  122</span>&#160; <span class="keywordtype">int</span> <a class="code" href="a00063.php#ga600651f00d39d378f423acbd75d938d2" title="Stringify a bitmap into a newly allocated list string.">hwloc_bitmap_list_asprintf</a>(<span class="keywordtype">char</span> ** strp, hwloc_const_bitmap_t bitmap);</div>
<div class="line"><a name="l00123"></a><span class="lineno">  123</span>&#160;</div>
<div class="line"><a name="l00126"></a><span class="lineno">  126</span>&#160; <span class="keywordtype">int</span> <a class="code" href="a00063.php#gafe8fc90e7a9171e287cf1bfa11e85980" title="Parse a list string and stores it in bitmap bitmap.">hwloc_bitmap_list_sscanf</a>(hwloc_bitmap_t bitmap, const <span class="keywordtype">char</span> * restrict <span class="keywordtype">string</span>);</div>
<div class="line"><a name="l00127"></a><span class="lineno">  127</span>&#160;</div>
<div class="line"><a name="l00140"></a><span class="lineno">  140</span>&#160; <span class="keywordtype">int</span> <a class="code" href="a00063.php#gae0e0619f43a4af5efafb75f489c1c6ec" title="Stringify a bitmap in the taskset-specific format.">hwloc_bitmap_taskset_snprintf</a>(<span class="keywordtype">char</span> * restrict buf, <span class="keywordtype">size_t</span> buflen, hwloc_const_bitmap_t bitmap);</div>
<div class="line"><a name="l00141"></a><span class="lineno">  141</span>&#160;</div>
<div class="line"><a name="l00144"></a><span class="lineno">  144</span>&#160; <span class="keywordtype">int</span> <a class="code" href="a00063.php#gaa3df92e204ffb24ceddd44d8d58f6eaa" title="Stringify a bitmap into a newly allocated taskset-specific string.">hwloc_bitmap_taskset_asprintf</a>(<span class="keywordtype">char</span> ** strp, hwloc_const_bitmap_t bitmap);</div>
<div class="line"><a name="l00145"></a><span class="lineno">  145</span>&#160;</div>
<div class="line"><a name="l00148"></a><span class="lineno">  148</span>&#160; <span class="keywordtype">int</span> <a class="code" href="a00063.php#ga71b28ef0d7206e37adbb94468c03e1a9" title="Parse a taskset-specific bitmap string and stores it in bitmap bitmap.">hwloc_bitmap_taskset_sscanf</a>(hwloc_bitmap_t bitmap, const <span class="keywordtype">char</span> * restrict <span class="keywordtype">string</span>);</div>
<div class="line"><a name="l00149"></a><span class="lineno">  149</span>&#160;</div>
<div class="line"><a name="l00150"></a><span class="lineno">  150</span>&#160;</div>
<div class="line"><a name="l00151"></a><span class="lineno">  151</span>&#160;<span class="comment">/*</span></div>
<div class="line"><a name="l00152"></a><span class="lineno">  152</span>&#160;<span class="comment"> * Building bitmaps.</span></div>
<div class="line"><a name="l00153"></a><span class="lineno">  153</span>&#160;<span class="comment"> */</span></div>
<div class="line"><a name="l00154"></a><span class="lineno">  154</span>&#160;</div>
<div class="line"><a name="l00156"></a><span class="lineno">  156</span>&#160; <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga6c540b9fe63b8223b6aba46d56dd63b8" title="Empty the bitmap bitmap.">hwloc_bitmap_zero</a>(hwloc_bitmap_t bitmap);</div>
<div class="line"><a name="l00157"></a><span class="lineno">  157</span>&#160;</div>
<div class="line"><a name="l00159"></a><span class="lineno">  159</span>&#160; <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga52456f7ef79d68e610cb65e3f7ffafad" title="Fill bitmap bitmap with all possible indexes (even if those objects don&#39;t exist or are otherwise unav...">hwloc_bitmap_fill</a>(hwloc_bitmap_t bitmap);</div>
<div class="line"><a name="l00160"></a><span class="lineno">  160</span>&#160;</div>
<div class="line"><a name="l00162"></a><span class="lineno">  162</span>&#160; <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga8ea10f5ebaadb8418f28f953d6106190" title="Empty the bitmap bitmap and add bit id.">hwloc_bitmap_only</a>(hwloc_bitmap_t bitmap, <span class="keywordtype">unsigned</span> <span class="keywordtype">id</span>);</div>
<div class="line"><a name="l00163"></a><span class="lineno">  163</span>&#160;</div>
<div class="line"><a name="l00165"></a><span class="lineno">  165</span>&#160; <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga88204c1c313aa067da10241b5886a166" title="Fill the bitmap and clear the index id.">hwloc_bitmap_allbut</a>(hwloc_bitmap_t bitmap, <span class="keywordtype">unsigned</span> <span class="keywordtype">id</span>);</div>
<div class="line"><a name="l00166"></a><span class="lineno">  166</span>&#160;</div>
<div class="line"><a name="l00168"></a><span class="lineno">  168</span>&#160; <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga02eae57cff32b6aa55044e6609ae7d73" title="Setup bitmap bitmap from unsigned long mask.">hwloc_bitmap_from_ulong</a>(hwloc_bitmap_t bitmap, <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> mask);</div>
<div class="line"><a name="l00169"></a><span class="lineno">  169</span>&#160;</div>
<div class="line"><a name="l00171"></a><span class="lineno">  171</span>&#160; <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga3c44c943cb3a3e4577b32d924e4f36f2" title="Setup bitmap bitmap from unsigned long mask used as i -th subset.">hwloc_bitmap_from_ith_ulong</a>(hwloc_bitmap_t bitmap, <span class="keywordtype">unsigned</span> i, <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> mask);</div>
<div class="line"><a name="l00172"></a><span class="lineno">  172</span>&#160;</div>
<div class="line"><a name="l00173"></a><span class="lineno">  173</span>&#160;</div>
<div class="line"><a name="l00174"></a><span class="lineno">  174</span>&#160;<span class="comment">/*</span></div>
<div class="line"><a name="l00175"></a><span class="lineno">  175</span>&#160;<span class="comment"> * Modifying bitmaps.</span></div>
<div class="line"><a name="l00176"></a><span class="lineno">  176</span>&#160;<span class="comment"> */</span></div>
<div class="line"><a name="l00177"></a><span class="lineno">  177</span>&#160;</div>
<div class="line"><a name="l00179"></a><span class="lineno">  179</span>&#160; <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga497556af0cc34f109ae0277999c074d3" title="Add index id in bitmap bitmap.">hwloc_bitmap_set</a>(hwloc_bitmap_t bitmap, <span class="keywordtype">unsigned</span> <span class="keywordtype">id</span>);</div>
<div class="line"><a name="l00180"></a><span class="lineno">  180</span>&#160;</div>
<div class="line"><a name="l00185"></a><span class="lineno">  185</span>&#160; <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga9d4f8fc40f552a76c943b5b773ac17d6" title="Add indexes from begin to end in bitmap bitmap.">hwloc_bitmap_set_range</a>(hwloc_bitmap_t bitmap, <span class="keywordtype">unsigned</span> begin, <span class="keywordtype">int</span> end);</div>
<div class="line"><a name="l00186"></a><span class="lineno">  186</span>&#160;</div>
<div class="line"><a name="l00188"></a><span class="lineno">  188</span>&#160; <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga56027d6b141a3da441925e6e999de1c1" title="Replace i -th subset of bitmap bitmap with unsigned long mask.">hwloc_bitmap_set_ith_ulong</a>(hwloc_bitmap_t bitmap, <span class="keywordtype">unsigned</span> i, <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> mask);</div>
<div class="line"><a name="l00189"></a><span class="lineno">  189</span>&#160;</div>
<div class="line"><a name="l00191"></a><span class="lineno">  191</span>&#160; <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga54e89b87ba5f5c18323f16690e0e5730" title="Remove index id from bitmap bitmap.">hwloc_bitmap_clr</a>(hwloc_bitmap_t bitmap, <span class="keywordtype">unsigned</span> <span class="keywordtype">id</span>);</div>
<div class="line"><a name="l00192"></a><span class="lineno">  192</span>&#160;</div>
<div class="line"><a name="l00197"></a><span class="lineno">  197</span>&#160; <span class="keywordtype">void</span> <a class="code" href="a00063.php#gac27bd46fd5b387def6b40712b7ee2796" title="Remove indexes from begin to end in bitmap bitmap.">hwloc_bitmap_clr_range</a>(hwloc_bitmap_t bitmap, <span class="keywordtype">unsigned</span> begin, <span class="keywordtype">int</span> end);</div>
<div class="line"><a name="l00198"></a><span class="lineno">  198</span>&#160;</div>
<div class="line"><a name="l00205"></a><span class="lineno">  205</span>&#160; <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga4630aa1b7e08eac5b41be126194e84a1" title="Keep a single index among those set in bitmap bitmap.">hwloc_bitmap_singlify</a>(hwloc_bitmap_t bitmap);</div>
<div class="line"><a name="l00206"></a><span class="lineno">  206</span>&#160;</div>
<div class="line"><a name="l00207"></a><span class="lineno">  207</span>&#160;</div>
<div class="line"><a name="l00208"></a><span class="lineno">  208</span>&#160;<span class="comment">/*</span></div>
<div class="line"><a name="l00209"></a><span class="lineno">  209</span>&#160;<span class="comment"> * Consulting bitmaps.</span></div>
<div class="line"><a name="l00210"></a><span class="lineno">  210</span>&#160;<span class="comment"> */</span></div>
<div class="line"><a name="l00211"></a><span class="lineno">  211</span>&#160;</div>
<div class="line"><a name="l00213"></a><span class="lineno">  213</span>&#160; <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> <a class="code" href="a00063.php#ga4fee4e3cea99e4a389c54a6c3f0c78ed" title="Convert the beginning part of bitmap bitmap into unsigned long mask.">hwloc_bitmap_to_ulong</a>(hwloc_const_bitmap_t bitmap) ;</div>
<div class="line"><a name="l00214"></a><span class="lineno">  214</span>&#160;</div>
<div class="line"><a name="l00216"></a><span class="lineno">  216</span>&#160; <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> <a class="code" href="a00063.php#gabc0b9f4cae56a1303c38b2380086efc2" title="Convert the i -th subset of bitmap bitmap into unsigned long mask.">hwloc_bitmap_to_ith_ulong</a>(hwloc_const_bitmap_t bitmap, <span class="keywordtype">unsigned</span> i) ;</div>
<div class="line"><a name="l00217"></a><span class="lineno">  217</span>&#160;</div>
<div class="line"><a name="l00219"></a><span class="lineno">  219</span>&#160; <span class="keywordtype">int</span> <a class="code" href="a00063.php#ga2583f44cbdb5fff2ea40efdcf3975d3f" title="Test whether index id is part of bitmap bitmap.">hwloc_bitmap_isset</a>(hwloc_const_bitmap_t bitmap, <span class="keywordtype">unsigned</span> <span class="keywordtype">id</span>) ;</div>
<div class="line"><a name="l00220"></a><span class="lineno">  220</span>&#160;</div>
<div class="line"><a name="l00222"></a><span class="lineno">  222</span>&#160; <span class="keywordtype">int</span> <a class="code" href="a00063.php#gaa94fed35d2a598bc4a8657b6955b7bf5" title="Test whether bitmap bitmap is empty.">hwloc_bitmap_iszero</a>(hwloc_const_bitmap_t bitmap) ;</div>
<div class="line"><a name="l00223"></a><span class="lineno">  223</span>&#160;</div>
<div class="line"><a name="l00225"></a><span class="lineno">  225</span>&#160; <span class="keywordtype">int</span> <a class="code" href="a00063.php#ga59a07ecd8e74f2d4ee4271a1dbf0e4dd" title="Test whether bitmap bitmap is completely full.">hwloc_bitmap_isfull</a>(hwloc_const_bitmap_t bitmap) ;</div>
<div class="line"><a name="l00226"></a><span class="lineno">  226</span>&#160;</div>
<div class="line"><a name="l00231"></a><span class="lineno">  231</span>&#160; <span class="keywordtype">int</span> <a class="code" href="a00063.php#ga42472a7b75ca79cae19f0611fdb849e6" title="Compute the first index (least significant bit) in bitmap bitmap.">hwloc_bitmap_first</a>(hwloc_const_bitmap_t bitmap) ;</div>
<div class="line"><a name="l00232"></a><span class="lineno">  232</span>&#160;</div>
<div class="line"><a name="l00239"></a><span class="lineno">  239</span>&#160; <span class="keywordtype">int</span> <a class="code" href="a00063.php#ga00fc0b9d7d603e271b75956a7dd28826" title="Compute the next index in bitmap bitmap which is after index prev.">hwloc_bitmap_next</a>(hwloc_const_bitmap_t bitmap, <span class="keywordtype">int</span> prev) ;</div>
<div class="line"><a name="l00240"></a><span class="lineno">  240</span>&#160;</div>
<div class="line"><a name="l00245"></a><span class="lineno">  245</span>&#160; <span class="keywordtype">int</span> <a class="code" href="a00063.php#ga4d5786ea9561d9ddbf90bc0ce606c549" title="Compute the last index (most significant bit) in bitmap bitmap.">hwloc_bitmap_last</a>(hwloc_const_bitmap_t bitmap) ;</div>
<div class="line"><a name="l00246"></a><span class="lineno">  246</span>&#160;</div>
<div class="line"><a name="l00252"></a><span class="lineno">  252</span>&#160; <span class="keywordtype">int</span> <a class="code" href="a00063.php#ga12d520387be74f849f191d7a06ac325c" title="Compute the &quot;weight&quot; of bitmap bitmap (i.e., number of indexes that are in the bitmap).">hwloc_bitmap_weight</a>(hwloc_const_bitmap_t bitmap) ;</div>
<div class="line"><a name="l00253"></a><span class="lineno">  253</span>&#160;</div>
<div class="line"><a name="l00265"></a><span class="lineno"><a class="code" href="a00063.php#ga3f6861045a8029ade373510ffa727d2a">  265</a></span>&#160;<span class="preprocessor">#define hwloc_bitmap_foreach_begin(id, bitmap) \</span></div>
<div class="line"><a name="l00266"></a><span class="lineno">  266</span>&#160;<span class="preprocessor">do { \</span></div>
<div class="line"><a name="l00267"></a><span class="lineno">  267</span>&#160;<span class="preprocessor">        assert(hwloc_bitmap_weight(bitmap) != -1); \</span></div>
<div class="line"><a name="l00268"></a><span class="lineno">  268</span>&#160;<span class="preprocessor">        for (id = hwloc_bitmap_first(bitmap); \</span></div>
<div class="line"><a name="l00269"></a><span class="lineno">  269</span>&#160;<span class="preprocessor">             (unsigned) id != (unsigned) -1; \</span></div>
<div class="line"><a name="l00270"></a><span class="lineno">  270</span>&#160;<span class="preprocessor">             id = hwloc_bitmap_next(bitmap, id)) { \</span></div>
<div class="line"><a name="l00271"></a><span class="lineno">  271</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00275"></a><span class="lineno"><a class="code" href="a00063.php#gafcf3246db406218d4e155735b3fa6528">  275</a></span>&#160;<span class="preprocessor">#define hwloc_bitmap_foreach_end() \</span></div>
<div class="line"><a name="l00276"></a><span class="lineno">  276</span>&#160;<span class="preprocessor">        } \</span></div>
<div class="line"><a name="l00277"></a><span class="lineno">  277</span>&#160;<span class="preprocessor">} while (0)</span></div>
<div class="line"><a name="l00278"></a><span class="lineno">  278</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00279"></a><span class="lineno">  279</span>&#160;</div>
<div class="line"><a name="l00280"></a><span class="lineno">  280</span>&#160;<span class="comment">/*</span></div>
<div class="line"><a name="l00281"></a><span class="lineno">  281</span>&#160;<span class="comment"> * Combining bitmaps.</span></div>
<div class="line"><a name="l00282"></a><span class="lineno">  282</span>&#160;<span class="comment"> */</span></div>
<div class="line"><a name="l00283"></a><span class="lineno">  283</span>&#160;</div>
<div class="line"><a name="l00285"></a><span class="lineno">  285</span>&#160; <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga1ba1de709ee9a7cf5cc8ad2d9a1a81d4" title="Or bitmaps bitmap1 and bitmap2 and store the result in bitmap res.">hwloc_bitmap_or</a> (hwloc_bitmap_t res, hwloc_const_bitmap_t bitmap1, hwloc_const_bitmap_t bitmap2);</div>
<div class="line"><a name="l00286"></a><span class="lineno">  286</span>&#160;</div>
<div class="line"><a name="l00288"></a><span class="lineno">  288</span>&#160; <span class="keywordtype">void</span> <a class="code" href="a00063.php#gac2f7675dcf1b664a832413d9990d1bcf" title="And bitmaps bitmap1 and bitmap2 and store the result in bitmap res.">hwloc_bitmap_and</a> (hwloc_bitmap_t res, hwloc_const_bitmap_t bitmap1, hwloc_const_bitmap_t bitmap2);</div>
<div class="line"><a name="l00289"></a><span class="lineno">  289</span>&#160;</div>
<div class="line"><a name="l00291"></a><span class="lineno">  291</span>&#160; <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga7618a962685d95564564ba07e9b2199b" title="And bitmap bitmap1 and the negation of bitmap2 and store the result in bitmap res.">hwloc_bitmap_andnot</a> (hwloc_bitmap_t res, hwloc_const_bitmap_t bitmap1, hwloc_const_bitmap_t bitmap2);</div>
<div class="line"><a name="l00292"></a><span class="lineno">  292</span>&#160;</div>
<div class="line"><a name="l00294"></a><span class="lineno">  294</span>&#160; <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga5743af61c30758df75aec29c12444616" title="Xor bitmaps bitmap1 and bitmap2 and store the result in bitmap res.">hwloc_bitmap_xor</a> (hwloc_bitmap_t res, hwloc_const_bitmap_t bitmap1, hwloc_const_bitmap_t bitmap2);</div>
<div class="line"><a name="l00295"></a><span class="lineno">  295</span>&#160;</div>
<div class="line"><a name="l00297"></a><span class="lineno">  297</span>&#160; <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga4a8088d62755a083ffce9d592c9e3878" title="Negate bitmap bitmap and store the result in bitmap res.">hwloc_bitmap_not</a> (hwloc_bitmap_t res, hwloc_const_bitmap_t bitmap);</div>
<div class="line"><a name="l00298"></a><span class="lineno">  298</span>&#160;</div>
<div class="line"><a name="l00299"></a><span class="lineno">  299</span>&#160;</div>
<div class="line"><a name="l00300"></a><span class="lineno">  300</span>&#160;<span class="comment">/*</span></div>
<div class="line"><a name="l00301"></a><span class="lineno">  301</span>&#160;<span class="comment"> * Comparing bitmaps.</span></div>
<div class="line"><a name="l00302"></a><span class="lineno">  302</span>&#160;<span class="comment"> */</span></div>
<div class="line"><a name="l00303"></a><span class="lineno">  303</span>&#160;</div>
<div class="line"><a name="l00305"></a><span class="lineno">  305</span>&#160; <span class="keywordtype">int</span> <a class="code" href="a00063.php#ga575c27953709a8cb9a047aae65157526" title="Test whether bitmaps bitmap1 and bitmap2 intersects.">hwloc_bitmap_intersects</a> (hwloc_const_bitmap_t bitmap1, hwloc_const_bitmap_t bitmap2) ;</div>
<div class="line"><a name="l00306"></a><span class="lineno">  306</span>&#160;</div>
<div class="line"><a name="l00308"></a><span class="lineno">  308</span>&#160; <span class="keywordtype">int</span> <a class="code" href="a00063.php#gaae29e14a926c198e8f91e6e4790621e7" title="Test whether bitmap sub_bitmap is part of bitmap super_bitmap.">hwloc_bitmap_isincluded</a> (hwloc_const_bitmap_t sub_bitmap, hwloc_const_bitmap_t super_bitmap) ;</div>
<div class="line"><a name="l00309"></a><span class="lineno">  309</span>&#160;</div>
<div class="line"><a name="l00311"></a><span class="lineno">  311</span>&#160; <span class="keywordtype">int</span> <a class="code" href="a00063.php#ga4dd6a75ab63d33ef33bd626b0e489388" title="Test whether bitmap bitmap1 is equal to bitmap bitmap2.">hwloc_bitmap_isequal</a> (hwloc_const_bitmap_t bitmap1, hwloc_const_bitmap_t bitmap2) ;</div>
<div class="line"><a name="l00312"></a><span class="lineno">  312</span>&#160;</div>
<div class="line"><a name="l00318"></a><span class="lineno">  318</span>&#160; <span class="keywordtype">int</span> <a class="code" href="a00063.php#gac1cbd1e03f9986552243761e657e1752" title="Compare bitmaps bitmap1 and bitmap2 using their lowest index.">hwloc_bitmap_compare_first</a>(hwloc_const_bitmap_t bitmap1, hwloc_const_bitmap_t bitmap2) ;</div>
<div class="line"><a name="l00319"></a><span class="lineno">  319</span>&#160;</div>
<div class="line"><a name="l00325"></a><span class="lineno">  325</span>&#160; <span class="keywordtype">int</span> <a class="code" href="a00063.php#gadd3aa325f2d6a17b5aa3b3be9c740da0" title="Compare bitmaps bitmap1 and bitmap2 using their highest index.">hwloc_bitmap_compare</a>(hwloc_const_bitmap_t bitmap1, hwloc_const_bitmap_t bitmap2) ;</div>
<div class="line"><a name="l00326"></a><span class="lineno">  326</span>&#160;</div>
<div class="line"><a name="l00330"></a><span class="lineno">  330</span>&#160;<span class="preprocessor">#ifdef __cplusplus</span></div>
<div class="line"><a name="l00331"></a><span class="lineno">  331</span>&#160;<span class="preprocessor"></span>} <span class="comment">/* extern &quot;C&quot; */</span></div>
<div class="line"><a name="l00332"></a><span class="lineno">  332</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00333"></a><span class="lineno">  333</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00334"></a><span class="lineno">  334</span>&#160;</div>
<div class="line"><a name="l00335"></a><span class="lineno">  335</span>&#160;<span class="preprocessor">#endif </span><span class="comment">/* HWLOC_BITMAP_H */</span><span class="preprocessor"></span></div>
</div><!-- fragment --></div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
