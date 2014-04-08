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
      <li class="current"><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li><a href="functions.php"><span>Data&#160;Fields</span></a></li>
    </ul>
  </div>
  <div id="nav-path" class="navpath">
    <ul>
      <li class="navelem"><a class="el" href="structhwloc__obj__memory__s.php">hwloc_obj_memory_s</a>      </li>
      <li class="navelem"><a class="el" href="structhwloc__obj__memory__s_1_1hwloc__obj__memory__page__type__s.php">hwloc_obj_memory_page_type_s</a>      </li>
    </ul>
  </div>
</div>
<div class="header">
  <div class="summary">
<a href="#pub-attribs">Data Fields</a>  </div>
  <div class="headertitle">
<div class="title">hwloc_obj_memory_s::hwloc_obj_memory_page_type_s Struct Reference</div>  </div>
</div>
<div class="contents">
<!-- doxytag: class="hwloc_obj_memory_s::hwloc_obj_memory_page_type_s" -->
<p>Array of local memory page types, <code>NULL</code> if no local memory and <code>page_types</code> is 0.  
 <a href="structhwloc__obj__memory__s_1_1hwloc__obj__memory__page__type__s.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="hwloc_8h_source.php">hwloc.h</a>&gt;</code></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-attribs"></a>
Data Fields</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">hwloc_uint64_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj__memory__s_1_1hwloc__obj__memory__page__type__s.php#a3f1d261766352288791512974665ce01">size</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Size of pages.  <a href="#a3f1d261766352288791512974665ce01"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">hwloc_uint64_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj__memory__s_1_1hwloc__obj__memory__page__type__s.php#aa5b9fa36f1dc47ff3c345fe4dd06b260">count</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Number of pages of this size.  <a href="#aa5b9fa36f1dc47ff3c345fe4dd06b260"></a><br/></td></tr>
</table>
<hr/><a name="details" id="details"></a><h2>Detailed Description</h2>
<div class="textblock"><p>Array of local memory page types, <code>NULL</code> if no local memory and <code>page_types</code> is 0. </p>
<p>The array is sorted by increasing <code>size</code> fields. It contains <code>page_types_len</code> slots. </p>
</div><hr/><h2>Field Documentation</h2>
<a class="anchor" id="aa5b9fa36f1dc47ff3c345fe4dd06b260"></a><!-- doxytag: member="hwloc_obj_memory_s::hwloc_obj_memory_page_type_s::count" ref="aa5b9fa36f1dc47ff3c345fe4dd06b260" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">hwloc_uint64_t <a class="el" href="structhwloc__obj__memory__s_1_1hwloc__obj__memory__page__type__s.php#aa5b9fa36f1dc47ff3c345fe4dd06b260">hwloc_obj_memory_s::hwloc_obj_memory_page_type_s::count</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Number of pages of this size. </p>

</div>
</div>
<a class="anchor" id="a3f1d261766352288791512974665ce01"></a><!-- doxytag: member="hwloc_obj_memory_s::hwloc_obj_memory_page_type_s::size" ref="a3f1d261766352288791512974665ce01" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">hwloc_uint64_t <a class="el" href="structhwloc__obj__memory__s_1_1hwloc__obj__memory__page__type__s.php#a3f1d261766352288791512974665ce01">hwloc_obj_memory_s::hwloc_obj_memory_page_type_s::size</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Size of pages. </p>

</div>
</div>
<hr/>The documentation for this struct was generated from the following file:<ul>
<li><a class="el" href="hwloc_8h_source.php">hwloc.h</a></li>
</ul>
</div>
<?php
include_once("$topdir/includes/footer.inc");
