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
<!-- Generated by Doxygen 1.7.2 -->
<div class="navigation" id="top">
  <div class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
      <li><a href="globals.php"><span>Globals</span></a></li>
    </ul>
  </div>
</div>
<div class="header">
  <div class="summary">
<a href="#define-members">Defines</a> &#124;
<a href="#typedef-members">Typedefs</a> &#124;
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<h1>bitmap.h File Reference</h1>  </div>
</div>
<div class="contents">

<p>The bitmap API, for use in hwloc itself.  
<a href="#_details">More...</a></p>
<code>#include &lt;hwloc/config.h&gt;</code><br/>
<code>#include &lt;assert.h&gt;</code><br/>

<p><a href="bitmap_8h_source.php">Go to the source code of this file.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="define-members"></a>
Defines</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#ga3f6861045a8029ade373510ffa727d2a">hwloc_bitmap_foreach_begin</a>(id, bitmap)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Loop macro iterating on bitmap <code>bitmap</code>.  <a href="group__hwlocality__bitmap.php#ga3f6861045a8029ade373510ffa727d2a"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#gafcf3246db406218d4e155735b3fa6528">hwloc_bitmap_foreach_end</a>()</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">End of loop. Needs a terminating ';'.  <a href="group__hwlocality__bitmap.php#gafcf3246db406218d4e155735b3fa6528"></a><br/></td></tr>
<tr><td colspan="2"><h2><a name="typedef-members"></a>
Typedefs</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">typedef struct hwloc_bitmap_s *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#gaa3c2bf4c776d603dcebbb61b0c923d84">hwloc_bitmap_t</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Set of bits represented as an opaque pointer to an internal bitmap.  <a href="group__hwlocality__bitmap.php#gaa3c2bf4c776d603dcebbb61b0c923d84"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">typedef struct hwloc_bitmap_s *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">a non-modifiable <a class="el" href="group__hwlocality__bitmap.php#gaa3c2bf4c776d603dcebbb61b0c923d84" title="Set of bits represented as an opaque pointer to an internal bitmap.">hwloc_bitmap_t</a>  <a href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48"></a><br/></td></tr>
<tr><td colspan="2"><h2><a name="func-members"></a>
Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> <a class="el" href="group__hwlocality__bitmap.php#gaa3c2bf4c776d603dcebbb61b0c923d84">hwloc_bitmap_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#ga9fb6aedc30d4ef4998fa53e2403b6130">hwloc_bitmap_alloc</a> (void) </td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Allocate a new empty bitmap.  <a href="group__hwlocality__bitmap.php#ga9fb6aedc30d4ef4998fa53e2403b6130"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> <a class="el" href="group__hwlocality__bitmap.php#gaa3c2bf4c776d603dcebbb61b0c923d84">hwloc_bitmap_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#gadd4479485685bda179f4b8b9b70f671e">hwloc_bitmap_alloc_full</a> (void) </td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Allocate a new full bitmap.  <a href="group__hwlocality__bitmap.php#gadd4479485685bda179f4b8b9b70f671e"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#ga8e7035fe555ef96921bfb98e08519bc7">hwloc_bitmap_free</a> (<a class="el" href="group__hwlocality__bitmap.php#gaa3c2bf4c776d603dcebbb61b0c923d84">hwloc_bitmap_t</a> bitmap)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Free bitmap <code>bitmap</code>.  <a href="group__hwlocality__bitmap.php#ga8e7035fe555ef96921bfb98e08519bc7"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> <a class="el" href="group__hwlocality__bitmap.php#gaa3c2bf4c776d603dcebbb61b0c923d84">hwloc_bitmap_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#gaaa4ed76211cd3694dfbea2109fc440be">hwloc_bitmap_dup</a> (<a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> bitmap) </td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Duplicate bitmap <code>bitmap</code> by allocating a new bitmap and copying <code>bitmap</code> contents.  <a href="group__hwlocality__bitmap.php#gaaa4ed76211cd3694dfbea2109fc440be"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#gab14743355fa03b36cef521cbcd2fbf64">hwloc_bitmap_copy</a> (<a class="el" href="group__hwlocality__bitmap.php#gaa3c2bf4c776d603dcebbb61b0c923d84">hwloc_bitmap_t</a> dst, <a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> src)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Copy the contents of bitmap <code>src</code> into the already allocated bitmap <code>dst</code>.  <a href="group__hwlocality__bitmap.php#gab14743355fa03b36cef521cbcd2fbf64"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#ga6c0d60db98f27276752c1e5fafcbd7d1">hwloc_bitmap_snprintf</a> (char *restrict buf, size_t buflen, <a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> bitmap)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Stringify a bitmap.  <a href="group__hwlocality__bitmap.php#ga6c0d60db98f27276752c1e5fafcbd7d1"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#gad3cf87ceb58aa91656756bbb58057320">hwloc_bitmap_asprintf</a> (char **strp, <a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> bitmap)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Stringify a bitmap into a newly allocated string.  <a href="group__hwlocality__bitmap.php#gad3cf87ceb58aa91656756bbb58057320"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#ga553cd5ceb1925bfd31788e70b4a46ae8">hwloc_bitmap_sscanf</a> (<a class="el" href="group__hwlocality__bitmap.php#gaa3c2bf4c776d603dcebbb61b0c923d84">hwloc_bitmap_t</a> bitmap, const char *restrict string)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Parse a bitmap string and stores it in bitmap <code>bitmap</code>.  <a href="group__hwlocality__bitmap.php#ga553cd5ceb1925bfd31788e70b4a46ae8"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#gae0e0619f43a4af5efafb75f489c1c6ec">hwloc_bitmap_taskset_snprintf</a> (char *restrict buf, size_t buflen, <a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> bitmap)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Stringify a bitmap in the taskset-specific format.  <a href="group__hwlocality__bitmap.php#gae0e0619f43a4af5efafb75f489c1c6ec"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#gaa3df92e204ffb24ceddd44d8d58f6eaa">hwloc_bitmap_taskset_asprintf</a> (char **strp, <a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> bitmap)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Stringify a bitmap into a newly allocated taskset-specific string.  <a href="group__hwlocality__bitmap.php#gaa3df92e204ffb24ceddd44d8d58f6eaa"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#ga71b28ef0d7206e37adbb94468c03e1a9">hwloc_bitmap_taskset_sscanf</a> (<a class="el" href="group__hwlocality__bitmap.php#gaa3c2bf4c776d603dcebbb61b0c923d84">hwloc_bitmap_t</a> bitmap, const char *restrict string)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Parse a taskset-specific bitmap string and stores it in bitmap <code>bitmap</code>.  <a href="group__hwlocality__bitmap.php#ga71b28ef0d7206e37adbb94468c03e1a9"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#ga6c540b9fe63b8223b6aba46d56dd63b8">hwloc_bitmap_zero</a> (<a class="el" href="group__hwlocality__bitmap.php#gaa3c2bf4c776d603dcebbb61b0c923d84">hwloc_bitmap_t</a> bitmap)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Empty the bitmap <code>bitmap</code>.  <a href="group__hwlocality__bitmap.php#ga6c540b9fe63b8223b6aba46d56dd63b8"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#ga52456f7ef79d68e610cb65e3f7ffafad">hwloc_bitmap_fill</a> (<a class="el" href="group__hwlocality__bitmap.php#gaa3c2bf4c776d603dcebbb61b0c923d84">hwloc_bitmap_t</a> bitmap)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Fill bitmap <code>bitmap</code> with all possible indexes (even if those objects don't exist or are otherwise unavailable)  <a href="group__hwlocality__bitmap.php#ga52456f7ef79d68e610cb65e3f7ffafad"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#ga8ea10f5ebaadb8418f28f953d6106190">hwloc_bitmap_only</a> (<a class="el" href="group__hwlocality__bitmap.php#gaa3c2bf4c776d603dcebbb61b0c923d84">hwloc_bitmap_t</a> bitmap, unsigned id)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Empty the bitmap <code>bitmap</code> and add bit <code>id</code>.  <a href="group__hwlocality__bitmap.php#ga8ea10f5ebaadb8418f28f953d6106190"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#ga88204c1c313aa067da10241b5886a166">hwloc_bitmap_allbut</a> (<a class="el" href="group__hwlocality__bitmap.php#gaa3c2bf4c776d603dcebbb61b0c923d84">hwloc_bitmap_t</a> bitmap, unsigned id)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Fill the bitmap <code>and</code> clear the index <code>id</code>.  <a href="group__hwlocality__bitmap.php#ga88204c1c313aa067da10241b5886a166"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#ga02eae57cff32b6aa55044e6609ae7d73">hwloc_bitmap_from_ulong</a> (<a class="el" href="group__hwlocality__bitmap.php#gaa3c2bf4c776d603dcebbb61b0c923d84">hwloc_bitmap_t</a> bitmap, unsigned long mask)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Setup bitmap <code>bitmap</code> from unsigned long <code>mask</code>.  <a href="group__hwlocality__bitmap.php#ga02eae57cff32b6aa55044e6609ae7d73"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#ga3c44c943cb3a3e4577b32d924e4f36f2">hwloc_bitmap_from_ith_ulong</a> (<a class="el" href="group__hwlocality__bitmap.php#gaa3c2bf4c776d603dcebbb61b0c923d84">hwloc_bitmap_t</a> bitmap, unsigned i, unsigned long mask)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Setup bitmap <code>bitmap</code> from unsigned long <code>mask</code> used as <code>i</code> -th subset.  <a href="group__hwlocality__bitmap.php#ga3c44c943cb3a3e4577b32d924e4f36f2"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#ga497556af0cc34f109ae0277999c074d3">hwloc_bitmap_set</a> (<a class="el" href="group__hwlocality__bitmap.php#gaa3c2bf4c776d603dcebbb61b0c923d84">hwloc_bitmap_t</a> bitmap, unsigned id)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Add index <code>id</code> in bitmap <code>bitmap</code>.  <a href="group__hwlocality__bitmap.php#ga497556af0cc34f109ae0277999c074d3"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#ga371be6d389287d5b22a8034d61ccd7e3">hwloc_bitmap_set_range</a> (<a class="el" href="group__hwlocality__bitmap.php#gaa3c2bf4c776d603dcebbb61b0c923d84">hwloc_bitmap_t</a> bitmap, unsigned begin, unsigned end)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Add indexess from <code>begin</code> to <code>end</code> in bitmap <code>bitmap</code>.  <a href="group__hwlocality__bitmap.php#ga371be6d389287d5b22a8034d61ccd7e3"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#ga56027d6b141a3da441925e6e999de1c1">hwloc_bitmap_set_ith_ulong</a> (<a class="el" href="group__hwlocality__bitmap.php#gaa3c2bf4c776d603dcebbb61b0c923d84">hwloc_bitmap_t</a> bitmap, unsigned i, unsigned long mask)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Replace <code>i</code> -th subset of bitmap <code>bitmap</code> with unsigned long <code>mask</code>.  <a href="group__hwlocality__bitmap.php#ga56027d6b141a3da441925e6e999de1c1"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#ga54e89b87ba5f5c18323f16690e0e5730">hwloc_bitmap_clr</a> (<a class="el" href="group__hwlocality__bitmap.php#gaa3c2bf4c776d603dcebbb61b0c923d84">hwloc_bitmap_t</a> bitmap, unsigned id)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Remove index <code>id</code> from bitmap <code>bitmap</code>.  <a href="group__hwlocality__bitmap.php#ga54e89b87ba5f5c18323f16690e0e5730"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#gacddc932644e34fc2e914caf2fdaa70ce">hwloc_bitmap_clr_range</a> (<a class="el" href="group__hwlocality__bitmap.php#gaa3c2bf4c776d603dcebbb61b0c923d84">hwloc_bitmap_t</a> bitmap, unsigned begin, unsigned end)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Remove index from <code>begin</code> to <code>end</code> in bitmap <code>bitmap</code>.  <a href="group__hwlocality__bitmap.php#gacddc932644e34fc2e914caf2fdaa70ce"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#ga4630aa1b7e08eac5b41be126194e84a1">hwloc_bitmap_singlify</a> (<a class="el" href="group__hwlocality__bitmap.php#gaa3c2bf4c776d603dcebbb61b0c923d84">hwloc_bitmap_t</a> bitmap)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Keep a single index among those set in bitmap <code>bitmap</code>.  <a href="group__hwlocality__bitmap.php#ga4630aa1b7e08eac5b41be126194e84a1"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> unsigned long&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#ga4fee4e3cea99e4a389c54a6c3f0c78ed">hwloc_bitmap_to_ulong</a> (<a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> bitmap) </td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert the beginning part of bitmap <code>bitmap</code> into unsigned long <code>mask</code>.  <a href="group__hwlocality__bitmap.php#ga4fee4e3cea99e4a389c54a6c3f0c78ed"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> unsigned long&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#gabc0b9f4cae56a1303c38b2380086efc2">hwloc_bitmap_to_ith_ulong</a> (<a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> bitmap, unsigned i) </td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert the <code>i</code> -th subset of bitmap <code>bitmap</code> into unsigned long mask.  <a href="group__hwlocality__bitmap.php#gabc0b9f4cae56a1303c38b2380086efc2"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#ga2583f44cbdb5fff2ea40efdcf3975d3f">hwloc_bitmap_isset</a> (<a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> bitmap, unsigned id) </td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Test whether index <code>id</code> is part of bitmap <code>bitmap</code>.  <a href="group__hwlocality__bitmap.php#ga2583f44cbdb5fff2ea40efdcf3975d3f"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#gaa94fed35d2a598bc4a8657b6955b7bf5">hwloc_bitmap_iszero</a> (<a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> bitmap) </td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Test whether bitmap <code>bitmap</code> is empty.  <a href="group__hwlocality__bitmap.php#gaa94fed35d2a598bc4a8657b6955b7bf5"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#ga59a07ecd8e74f2d4ee4271a1dbf0e4dd">hwloc_bitmap_isfull</a> (<a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> bitmap) </td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Test whether bitmap <code>bitmap</code> is completely full.  <a href="group__hwlocality__bitmap.php#ga59a07ecd8e74f2d4ee4271a1dbf0e4dd"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#ga42472a7b75ca79cae19f0611fdb849e6">hwloc_bitmap_first</a> (<a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> bitmap) </td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Compute the first index (least significant bit) in bitmap <code>bitmap</code>.  <a href="group__hwlocality__bitmap.php#ga42472a7b75ca79cae19f0611fdb849e6"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#gae351afd7046295683112f0876cc782f1">hwloc_bitmap_next</a> (<a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> bitmap, unsigned prev) </td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Compute the next index in bitmap <code>bitmap</code> which is after index <code>prev</code>.  <a href="group__hwlocality__bitmap.php#gae351afd7046295683112f0876cc782f1"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#ga4d5786ea9561d9ddbf90bc0ce606c549">hwloc_bitmap_last</a> (<a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> bitmap) </td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Compute the last index (most significant bit) in bitmap <code>bitmap</code>.  <a href="group__hwlocality__bitmap.php#ga4d5786ea9561d9ddbf90bc0ce606c549"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#ga12d520387be74f849f191d7a06ac325c">hwloc_bitmap_weight</a> (<a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> bitmap) </td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Compute the "weight" of bitmap <code>bitmap</code> (i.e., number of indexes that are in the bitmap).  <a href="group__hwlocality__bitmap.php#ga12d520387be74f849f191d7a06ac325c"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#ga1ba1de709ee9a7cf5cc8ad2d9a1a81d4">hwloc_bitmap_or</a> (<a class="el" href="group__hwlocality__bitmap.php#gaa3c2bf4c776d603dcebbb61b0c923d84">hwloc_bitmap_t</a> res, <a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> bitmap1, <a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> bitmap2)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Or bitmaps <code>bitmap1</code> and <code>bitmap2</code> and store the result in bitmap <code>res</code>.  <a href="group__hwlocality__bitmap.php#ga1ba1de709ee9a7cf5cc8ad2d9a1a81d4"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#gac2f7675dcf1b664a832413d9990d1bcf">hwloc_bitmap_and</a> (<a class="el" href="group__hwlocality__bitmap.php#gaa3c2bf4c776d603dcebbb61b0c923d84">hwloc_bitmap_t</a> res, <a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> bitmap1, <a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> bitmap2)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">And bitmaps <code>bitmap1</code> and <code>bitmap2</code> and store the result in bitmap <code>res</code>.  <a href="group__hwlocality__bitmap.php#gac2f7675dcf1b664a832413d9990d1bcf"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#ga7618a962685d95564564ba07e9b2199b">hwloc_bitmap_andnot</a> (<a class="el" href="group__hwlocality__bitmap.php#gaa3c2bf4c776d603dcebbb61b0c923d84">hwloc_bitmap_t</a> res, <a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> bitmap1, <a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> bitmap2)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">And bitmap <code>bitmap1</code> and the negation of <code>bitmap2</code> and store the result in bitmap <code>res</code>.  <a href="group__hwlocality__bitmap.php#ga7618a962685d95564564ba07e9b2199b"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#ga5743af61c30758df75aec29c12444616">hwloc_bitmap_xor</a> (<a class="el" href="group__hwlocality__bitmap.php#gaa3c2bf4c776d603dcebbb61b0c923d84">hwloc_bitmap_t</a> res, <a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> bitmap1, <a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> bitmap2)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Xor bitmaps <code>bitmap1</code> and <code>bitmap2</code> and store the result in bitmap <code>res</code>.  <a href="group__hwlocality__bitmap.php#ga5743af61c30758df75aec29c12444616"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#ga4a8088d62755a083ffce9d592c9e3878">hwloc_bitmap_not</a> (<a class="el" href="group__hwlocality__bitmap.php#gaa3c2bf4c776d603dcebbb61b0c923d84">hwloc_bitmap_t</a> res, <a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> bitmap)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Negate bitmap <code>bitmap</code> and store the result in bitmap <code>res</code>.  <a href="group__hwlocality__bitmap.php#ga4a8088d62755a083ffce9d592c9e3878"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#ga575c27953709a8cb9a047aae65157526">hwloc_bitmap_intersects</a> (<a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> bitmap1, <a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> bitmap2) </td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Test whether bitmaps <code>bitmap1</code> and <code>bitmap2</code> intersects.  <a href="group__hwlocality__bitmap.php#ga575c27953709a8cb9a047aae65157526"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#gaae29e14a926c198e8f91e6e4790621e7">hwloc_bitmap_isincluded</a> (<a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> sub_bitmap, <a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> super_bitmap) </td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Test whether bitmap <code>sub_bitmap</code> is part of bitmap <code>super_bitmap</code>.  <a href="group__hwlocality__bitmap.php#gaae29e14a926c198e8f91e6e4790621e7"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#ga4dd6a75ab63d33ef33bd626b0e489388">hwloc_bitmap_isequal</a> (<a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> bitmap1, <a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> bitmap2) </td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Test whether bitmap <code>bitmap1</code> is equal to bitmap <code>bitmap2</code>.  <a href="group__hwlocality__bitmap.php#ga4dd6a75ab63d33ef33bd626b0e489388"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#gac1cbd1e03f9986552243761e657e1752">hwloc_bitmap_compare_first</a> (<a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> bitmap1, <a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> bitmap2) </td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Compare bitmaps <code>bitmap1</code> and <code>bitmap2</code> using their lowest index.  <a href="group__hwlocality__bitmap.php#gac1cbd1e03f9986552243761e657e1752"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__bitmap.php#gadd3aa325f2d6a17b5aa3b3be9c740da0">hwloc_bitmap_compare</a> (<a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> bitmap1, <a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">hwloc_const_bitmap_t</a> bitmap2) </td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Compare bitmaps <code>bitmap1</code> and <code>bitmap2</code> using their highest index.  <a href="group__hwlocality__bitmap.php#gadd3aa325f2d6a17b5aa3b3be9c740da0"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>The bitmap API, for use in hwloc itself. </p>
</div>
<?php
include_once("$topdir/includes/footer.inc");
