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
    </ul>
  </div>
<div class="header">
  <div class="headertitle">
<div class="title">bitmap.h</div>  </div>
</div>
<div class="contents">
<div class="fragment"><pre class="fragment"><a name="l00001"></a>00001 <span class="comment">/*</span>
<a name="l00002"></a>00002 <span class="comment"> * Copyright © 2009 CNRS</span>
<a name="l00003"></a>00003 <span class="comment"> * Copyright © 2009-2011 inria.  All rights reserved.</span>
<a name="l00004"></a>00004 <span class="comment"> * Copyright © 2009-2011 Université Bordeaux 1</span>
<a name="l00005"></a>00005 <span class="comment"> * Copyright © 2009-2011 Cisco Systems, Inc.  All rights reserved.</span>
<a name="l00006"></a>00006 <span class="comment"> * See COPYING in top-level directory.</span>
<a name="l00007"></a>00007 <span class="comment"> */</span>
<a name="l00008"></a>00008 
<a name="l00013"></a>00013 <span class="preprocessor">#ifndef HWLOC_BITMAP_H</span>
<a name="l00014"></a>00014 <span class="preprocessor"></span><span class="preprocessor">#define HWLOC_BITMAP_H</span>
<a name="l00015"></a>00015 <span class="preprocessor"></span>
<a name="l00016"></a>00016 <span class="preprocessor">#include &lt;hwloc/autogen/config.h&gt;</span>
<a name="l00017"></a>00017 <span class="preprocessor">#include &lt;assert.h&gt;</span>
<a name="l00018"></a>00018 
<a name="l00019"></a>00019 
<a name="l00020"></a>00020 <span class="preprocessor">#ifdef __cplusplus</span>
<a name="l00021"></a>00021 <span class="preprocessor"></span><span class="keyword">extern</span> <span class="stringliteral">&quot;C&quot;</span> {
<a name="l00022"></a>00022 <span class="preprocessor">#endif</span>
<a name="l00023"></a>00023 <span class="preprocessor"></span>
<a name="l00024"></a>00024 
<a name="l00045"></a><a class="code" href="a00063.php#gaa3c2bf4c776d603dcebbb61b0c923d84">00045</a> <span class="keyword">typedef</span> <span class="keyword">struct </span>hwloc_bitmap_s * <a class="code" href="a00063.php#gaa3c2bf4c776d603dcebbb61b0c923d84" title="Set of bits represented as an opaque pointer to an internal bitmap.">hwloc_bitmap_t</a>;
<a name="l00047"></a><a class="code" href="a00063.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">00047</a> <span class="keyword">typedef</span> <span class="keyword">const</span> <span class="keyword">struct </span>hwloc_bitmap_s * <a class="code" href="a00063.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48" title="a non-modifiable hwloc_bitmap_t">hwloc_const_bitmap_t</a>;
<a name="l00048"></a>00048 
<a name="l00049"></a>00049 
<a name="l00050"></a>00050 <span class="comment">/*</span>
<a name="l00051"></a>00051 <span class="comment"> * Bitmap allocation, freeing and copying.</span>
<a name="l00052"></a>00052 <span class="comment"> */</span>
<a name="l00053"></a>00053 
<a name="l00061"></a>00061  hwloc_bitmap_t <a class="code" href="a00063.php#ga9fb6aedc30d4ef4998fa53e2403b6130" title="Allocate a new empty bitmap.">hwloc_bitmap_alloc</a>(<span class="keywordtype">void</span>) ;
<a name="l00062"></a>00062 
<a name="l00064"></a>00064  hwloc_bitmap_t <a class="code" href="a00063.php#gadd4479485685bda179f4b8b9b70f671e" title="Allocate a new full bitmap.">hwloc_bitmap_alloc_full</a>(<span class="keywordtype">void</span>) ;
<a name="l00065"></a>00065 
<a name="l00070"></a>00070  <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga8e7035fe555ef96921bfb98e08519bc7" title="Free bitmap bitmap.">hwloc_bitmap_free</a>(hwloc_bitmap_t bitmap);
<a name="l00071"></a>00071 
<a name="l00076"></a>00076  hwloc_bitmap_t <a class="code" href="a00063.php#gaaa4ed76211cd3694dfbea2109fc440be" title="Duplicate bitmap bitmap by allocating a new bitmap and copying bitmap contents.">hwloc_bitmap_dup</a>(hwloc_const_bitmap_t bitmap) ;
<a name="l00077"></a>00077 
<a name="l00079"></a>00079  <span class="keywordtype">void</span> <a class="code" href="a00063.php#gab14743355fa03b36cef521cbcd2fbf64" title="Copy the contents of bitmap src into the already allocated bitmap dst.">hwloc_bitmap_copy</a>(hwloc_bitmap_t dst, hwloc_const_bitmap_t src);
<a name="l00080"></a>00080 
<a name="l00081"></a>00081 
<a name="l00082"></a>00082 <span class="comment">/*</span>
<a name="l00083"></a>00083 <span class="comment"> * Bitmap/String Conversion</span>
<a name="l00084"></a>00084 <span class="comment"> */</span>
<a name="l00085"></a>00085 
<a name="l00095"></a>00095  <span class="keywordtype">int</span> <a class="code" href="a00063.php#ga6c0d60db98f27276752c1e5fafcbd7d1" title="Stringify a bitmap.">hwloc_bitmap_snprintf</a>(<span class="keywordtype">char</span> * restrict buf, <span class="keywordtype">size_t</span> buflen, hwloc_const_bitmap_t bitmap);
<a name="l00096"></a>00096 
<a name="l00099"></a>00099  <span class="keywordtype">int</span> <a class="code" href="a00063.php#gad3cf87ceb58aa91656756bbb58057320" title="Stringify a bitmap into a newly allocated string.">hwloc_bitmap_asprintf</a>(<span class="keywordtype">char</span> ** strp, hwloc_const_bitmap_t bitmap);
<a name="l00100"></a>00100 
<a name="l00103"></a>00103  <span class="keywordtype">int</span> <a class="code" href="a00063.php#ga553cd5ceb1925bfd31788e70b4a46ae8" title="Parse a bitmap string and stores it in bitmap bitmap.">hwloc_bitmap_sscanf</a>(hwloc_bitmap_t bitmap, const <span class="keywordtype">char</span> * restrict <span class="keywordtype">string</span>);
<a name="l00104"></a>00104 
<a name="l00118"></a>00118  <span class="keywordtype">int</span> <a class="code" href="a00063.php#gab94b52560ea4333663895b3276e89af2" title="Stringify a bitmap in the list format.">hwloc_bitmap_list_snprintf</a>(<span class="keywordtype">char</span> * restrict buf, <span class="keywordtype">size_t</span> buflen, hwloc_const_bitmap_t bitmap);
<a name="l00119"></a>00119 
<a name="l00122"></a>00122  <span class="keywordtype">int</span> <a class="code" href="a00063.php#ga600651f00d39d378f423acbd75d938d2" title="Stringify a bitmap into a newly allocated list string.">hwloc_bitmap_list_asprintf</a>(<span class="keywordtype">char</span> ** strp, hwloc_const_bitmap_t bitmap);
<a name="l00123"></a>00123 
<a name="l00126"></a>00126  <span class="keywordtype">int</span> <a class="code" href="a00063.php#gafe8fc90e7a9171e287cf1bfa11e85980" title="Parse a list string and stores it in bitmap bitmap.">hwloc_bitmap_list_sscanf</a>(hwloc_bitmap_t bitmap, const <span class="keywordtype">char</span> * restrict <span class="keywordtype">string</span>);
<a name="l00127"></a>00127 
<a name="l00140"></a>00140  <span class="keywordtype">int</span> <a class="code" href="a00063.php#gae0e0619f43a4af5efafb75f489c1c6ec" title="Stringify a bitmap in the taskset-specific format.">hwloc_bitmap_taskset_snprintf</a>(<span class="keywordtype">char</span> * restrict buf, <span class="keywordtype">size_t</span> buflen, hwloc_const_bitmap_t bitmap);
<a name="l00141"></a>00141 
<a name="l00144"></a>00144  <span class="keywordtype">int</span> <a class="code" href="a00063.php#gaa3df92e204ffb24ceddd44d8d58f6eaa" title="Stringify a bitmap into a newly allocated taskset-specific string.">hwloc_bitmap_taskset_asprintf</a>(<span class="keywordtype">char</span> ** strp, hwloc_const_bitmap_t bitmap);
<a name="l00145"></a>00145 
<a name="l00148"></a>00148  <span class="keywordtype">int</span> <a class="code" href="a00063.php#ga71b28ef0d7206e37adbb94468c03e1a9" title="Parse a taskset-specific bitmap string and stores it in bitmap bitmap.">hwloc_bitmap_taskset_sscanf</a>(hwloc_bitmap_t bitmap, const <span class="keywordtype">char</span> * restrict <span class="keywordtype">string</span>);
<a name="l00149"></a>00149 
<a name="l00150"></a>00150 
<a name="l00151"></a>00151 <span class="comment">/*</span>
<a name="l00152"></a>00152 <span class="comment"> * Building bitmaps.</span>
<a name="l00153"></a>00153 <span class="comment"> */</span>
<a name="l00154"></a>00154 
<a name="l00156"></a>00156  <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga6c540b9fe63b8223b6aba46d56dd63b8" title="Empty the bitmap bitmap.">hwloc_bitmap_zero</a>(hwloc_bitmap_t bitmap);
<a name="l00157"></a>00157 
<a name="l00159"></a>00159  <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga52456f7ef79d68e610cb65e3f7ffafad" title="Fill bitmap bitmap with all possible indexes (even if those objects don&#39;t exist or are otherwise unav...">hwloc_bitmap_fill</a>(hwloc_bitmap_t bitmap);
<a name="l00160"></a>00160 
<a name="l00162"></a>00162  <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga8ea10f5ebaadb8418f28f953d6106190" title="Empty the bitmap bitmap and add bit id.">hwloc_bitmap_only</a>(hwloc_bitmap_t bitmap, <span class="keywordtype">unsigned</span> <span class="keywordtype">id</span>);
<a name="l00163"></a>00163 
<a name="l00165"></a>00165  <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga88204c1c313aa067da10241b5886a166" title="Fill the bitmap and clear the index id.">hwloc_bitmap_allbut</a>(hwloc_bitmap_t bitmap, <span class="keywordtype">unsigned</span> <span class="keywordtype">id</span>);
<a name="l00166"></a>00166 
<a name="l00168"></a>00168  <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga02eae57cff32b6aa55044e6609ae7d73" title="Setup bitmap bitmap from unsigned long mask.">hwloc_bitmap_from_ulong</a>(hwloc_bitmap_t bitmap, <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> mask);
<a name="l00169"></a>00169 
<a name="l00171"></a>00171  <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga3c44c943cb3a3e4577b32d924e4f36f2" title="Setup bitmap bitmap from unsigned long mask used as i -th subset.">hwloc_bitmap_from_ith_ulong</a>(hwloc_bitmap_t bitmap, <span class="keywordtype">unsigned</span> i, <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> mask);
<a name="l00172"></a>00172 
<a name="l00173"></a>00173 
<a name="l00174"></a>00174 <span class="comment">/*</span>
<a name="l00175"></a>00175 <span class="comment"> * Modifying bitmaps.</span>
<a name="l00176"></a>00176 <span class="comment"> */</span>
<a name="l00177"></a>00177 
<a name="l00179"></a>00179  <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga497556af0cc34f109ae0277999c074d3" title="Add index id in bitmap bitmap.">hwloc_bitmap_set</a>(hwloc_bitmap_t bitmap, <span class="keywordtype">unsigned</span> <span class="keywordtype">id</span>);
<a name="l00180"></a>00180 
<a name="l00185"></a>00185  <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga9d4f8fc40f552a76c943b5b773ac17d6" title="Add indexes from begin to end in bitmap bitmap.">hwloc_bitmap_set_range</a>(hwloc_bitmap_t bitmap, <span class="keywordtype">unsigned</span> begin, <span class="keywordtype">int</span> end);
<a name="l00186"></a>00186 
<a name="l00188"></a>00188  <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga56027d6b141a3da441925e6e999de1c1" title="Replace i -th subset of bitmap bitmap with unsigned long mask.">hwloc_bitmap_set_ith_ulong</a>(hwloc_bitmap_t bitmap, <span class="keywordtype">unsigned</span> i, <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> mask);
<a name="l00189"></a>00189 
<a name="l00191"></a>00191  <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga54e89b87ba5f5c18323f16690e0e5730" title="Remove index id from bitmap bitmap.">hwloc_bitmap_clr</a>(hwloc_bitmap_t bitmap, <span class="keywordtype">unsigned</span> <span class="keywordtype">id</span>);
<a name="l00192"></a>00192 
<a name="l00197"></a>00197  <span class="keywordtype">void</span> <a class="code" href="a00063.php#gac27bd46fd5b387def6b40712b7ee2796" title="Remove indexes from begin to end in bitmap bitmap.">hwloc_bitmap_clr_range</a>(hwloc_bitmap_t bitmap, <span class="keywordtype">unsigned</span> begin, <span class="keywordtype">int</span> end);
<a name="l00198"></a>00198 
<a name="l00205"></a>00205  <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga4630aa1b7e08eac5b41be126194e84a1" title="Keep a single index among those set in bitmap bitmap.">hwloc_bitmap_singlify</a>(hwloc_bitmap_t bitmap);
<a name="l00206"></a>00206 
<a name="l00207"></a>00207 
<a name="l00208"></a>00208 <span class="comment">/*</span>
<a name="l00209"></a>00209 <span class="comment"> * Consulting bitmaps.</span>
<a name="l00210"></a>00210 <span class="comment"> */</span>
<a name="l00211"></a>00211 
<a name="l00213"></a>00213  <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> <a class="code" href="a00063.php#ga4fee4e3cea99e4a389c54a6c3f0c78ed" title="Convert the beginning part of bitmap bitmap into unsigned long mask.">hwloc_bitmap_to_ulong</a>(hwloc_const_bitmap_t bitmap) ;
<a name="l00214"></a>00214 
<a name="l00216"></a>00216  <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> <a class="code" href="a00063.php#gabc0b9f4cae56a1303c38b2380086efc2" title="Convert the i -th subset of bitmap bitmap into unsigned long mask.">hwloc_bitmap_to_ith_ulong</a>(hwloc_const_bitmap_t bitmap, <span class="keywordtype">unsigned</span> i) ;
<a name="l00217"></a>00217 
<a name="l00219"></a>00219  <span class="keywordtype">int</span> <a class="code" href="a00063.php#ga2583f44cbdb5fff2ea40efdcf3975d3f" title="Test whether index id is part of bitmap bitmap.">hwloc_bitmap_isset</a>(hwloc_const_bitmap_t bitmap, <span class="keywordtype">unsigned</span> <span class="keywordtype">id</span>) ;
<a name="l00220"></a>00220 
<a name="l00222"></a>00222  <span class="keywordtype">int</span> <a class="code" href="a00063.php#gaa94fed35d2a598bc4a8657b6955b7bf5" title="Test whether bitmap bitmap is empty.">hwloc_bitmap_iszero</a>(hwloc_const_bitmap_t bitmap) ;
<a name="l00223"></a>00223 
<a name="l00225"></a>00225  <span class="keywordtype">int</span> <a class="code" href="a00063.php#ga59a07ecd8e74f2d4ee4271a1dbf0e4dd" title="Test whether bitmap bitmap is completely full.">hwloc_bitmap_isfull</a>(hwloc_const_bitmap_t bitmap) ;
<a name="l00226"></a>00226 
<a name="l00231"></a>00231  <span class="keywordtype">int</span> <a class="code" href="a00063.php#ga42472a7b75ca79cae19f0611fdb849e6" title="Compute the first index (least significant bit) in bitmap bitmap.">hwloc_bitmap_first</a>(hwloc_const_bitmap_t bitmap) ;
<a name="l00232"></a>00232 
<a name="l00239"></a>00239  <span class="keywordtype">int</span> <a class="code" href="a00063.php#ga00fc0b9d7d603e271b75956a7dd28826" title="Compute the next index in bitmap bitmap which is after index prev.">hwloc_bitmap_next</a>(hwloc_const_bitmap_t bitmap, <span class="keywordtype">int</span> prev) ;
<a name="l00240"></a>00240 
<a name="l00245"></a>00245  <span class="keywordtype">int</span> <a class="code" href="a00063.php#ga4d5786ea9561d9ddbf90bc0ce606c549" title="Compute the last index (most significant bit) in bitmap bitmap.">hwloc_bitmap_last</a>(hwloc_const_bitmap_t bitmap) ;
<a name="l00246"></a>00246 
<a name="l00252"></a>00252  <span class="keywordtype">int</span> <a class="code" href="a00063.php#ga12d520387be74f849f191d7a06ac325c" title="Compute the &quot;weight&quot; of bitmap bitmap (i.e., number of indexes that are in the bitmap).">hwloc_bitmap_weight</a>(hwloc_const_bitmap_t bitmap) ;
<a name="l00253"></a>00253 
<a name="l00265"></a><a class="code" href="a00063.php#ga3f6861045a8029ade373510ffa727d2a">00265</a> <span class="preprocessor">#define hwloc_bitmap_foreach_begin(id, bitmap) \</span>
<a name="l00266"></a>00266 <span class="preprocessor">do { \</span>
<a name="l00267"></a>00267 <span class="preprocessor">        assert(hwloc_bitmap_weight(bitmap) != -1); \</span>
<a name="l00268"></a>00268 <span class="preprocessor">        for (id = hwloc_bitmap_first(bitmap); \</span>
<a name="l00269"></a>00269 <span class="preprocessor">             (unsigned) id != (unsigned) -1; \</span>
<a name="l00270"></a>00270 <span class="preprocessor">             id = hwloc_bitmap_next(bitmap, id)) { \</span>
<a name="l00271"></a>00271 <span class="preprocessor"></span>
<a name="l00275"></a><a class="code" href="a00063.php#gafcf3246db406218d4e155735b3fa6528">00275</a> <span class="preprocessor">#define hwloc_bitmap_foreach_end() \</span>
<a name="l00276"></a>00276 <span class="preprocessor">        } \</span>
<a name="l00277"></a>00277 <span class="preprocessor">} while (0)</span>
<a name="l00278"></a>00278 <span class="preprocessor"></span>
<a name="l00279"></a>00279 
<a name="l00280"></a>00280 <span class="comment">/*</span>
<a name="l00281"></a>00281 <span class="comment"> * Combining bitmaps.</span>
<a name="l00282"></a>00282 <span class="comment"> */</span>
<a name="l00283"></a>00283 
<a name="l00285"></a>00285  <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga1ba1de709ee9a7cf5cc8ad2d9a1a81d4" title="Or bitmaps bitmap1 and bitmap2 and store the result in bitmap res.">hwloc_bitmap_or</a> (hwloc_bitmap_t res, hwloc_const_bitmap_t bitmap1, hwloc_const_bitmap_t bitmap2);
<a name="l00286"></a>00286 
<a name="l00288"></a>00288  <span class="keywordtype">void</span> <a class="code" href="a00063.php#gac2f7675dcf1b664a832413d9990d1bcf" title="And bitmaps bitmap1 and bitmap2 and store the result in bitmap res.">hwloc_bitmap_and</a> (hwloc_bitmap_t res, hwloc_const_bitmap_t bitmap1, hwloc_const_bitmap_t bitmap2);
<a name="l00289"></a>00289 
<a name="l00291"></a>00291  <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga7618a962685d95564564ba07e9b2199b" title="And bitmap bitmap1 and the negation of bitmap2 and store the result in bitmap res.">hwloc_bitmap_andnot</a> (hwloc_bitmap_t res, hwloc_const_bitmap_t bitmap1, hwloc_const_bitmap_t bitmap2);
<a name="l00292"></a>00292 
<a name="l00294"></a>00294  <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga5743af61c30758df75aec29c12444616" title="Xor bitmaps bitmap1 and bitmap2 and store the result in bitmap res.">hwloc_bitmap_xor</a> (hwloc_bitmap_t res, hwloc_const_bitmap_t bitmap1, hwloc_const_bitmap_t bitmap2);
<a name="l00295"></a>00295 
<a name="l00297"></a>00297  <span class="keywordtype">void</span> <a class="code" href="a00063.php#ga4a8088d62755a083ffce9d592c9e3878" title="Negate bitmap bitmap and store the result in bitmap res.">hwloc_bitmap_not</a> (hwloc_bitmap_t res, hwloc_const_bitmap_t bitmap);
<a name="l00298"></a>00298 
<a name="l00299"></a>00299 
<a name="l00300"></a>00300 <span class="comment">/*</span>
<a name="l00301"></a>00301 <span class="comment"> * Comparing bitmaps.</span>
<a name="l00302"></a>00302 <span class="comment"> */</span>
<a name="l00303"></a>00303 
<a name="l00305"></a>00305  <span class="keywordtype">int</span> <a class="code" href="a00063.php#ga575c27953709a8cb9a047aae65157526" title="Test whether bitmaps bitmap1 and bitmap2 intersects.">hwloc_bitmap_intersects</a> (hwloc_const_bitmap_t bitmap1, hwloc_const_bitmap_t bitmap2) ;
<a name="l00306"></a>00306 
<a name="l00308"></a>00308  <span class="keywordtype">int</span> <a class="code" href="a00063.php#gaae29e14a926c198e8f91e6e4790621e7" title="Test whether bitmap sub_bitmap is part of bitmap super_bitmap.">hwloc_bitmap_isincluded</a> (hwloc_const_bitmap_t sub_bitmap, hwloc_const_bitmap_t super_bitmap) ;
<a name="l00309"></a>00309 
<a name="l00311"></a>00311  <span class="keywordtype">int</span> <a class="code" href="a00063.php#ga4dd6a75ab63d33ef33bd626b0e489388" title="Test whether bitmap bitmap1 is equal to bitmap bitmap2.">hwloc_bitmap_isequal</a> (hwloc_const_bitmap_t bitmap1, hwloc_const_bitmap_t bitmap2) ;
<a name="l00312"></a>00312 
<a name="l00318"></a>00318  <span class="keywordtype">int</span> <a class="code" href="a00063.php#gac1cbd1e03f9986552243761e657e1752" title="Compare bitmaps bitmap1 and bitmap2 using their lowest index.">hwloc_bitmap_compare_first</a>(hwloc_const_bitmap_t bitmap1, hwloc_const_bitmap_t bitmap2) ;
<a name="l00319"></a>00319 
<a name="l00325"></a>00325  <span class="keywordtype">int</span> <a class="code" href="a00063.php#gadd3aa325f2d6a17b5aa3b3be9c740da0" title="Compare bitmaps bitmap1 and bitmap2 using their highest index.">hwloc_bitmap_compare</a>(hwloc_const_bitmap_t bitmap1, hwloc_const_bitmap_t bitmap2) ;
<a name="l00326"></a>00326 
<a name="l00330"></a>00330 <span class="preprocessor">#ifdef __cplusplus</span>
<a name="l00331"></a>00331 <span class="preprocessor"></span>} <span class="comment">/* extern &quot;C&quot; */</span>
<a name="l00332"></a>00332 <span class="preprocessor">#endif</span>
<a name="l00333"></a>00333 <span class="preprocessor"></span>
<a name="l00334"></a>00334 
<a name="l00335"></a>00335 <span class="preprocessor">#endif </span><span class="comment">/* HWLOC_BITMAP_H */</span>
</pre></div></div>
</div>
<?php
include_once("$topdir/includes/footer.inc");
