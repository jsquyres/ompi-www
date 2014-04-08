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
      <li class="current"><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
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
<li class="navelem"><a class="el" href="a00023.php">hwloc_obj_attr_u</a></li><li class="navelem"><a class="el" href="a00017.php">hwloc_cache_attr_s</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-attribs">Data Fields</a>  </div>
  <div class="headertitle">
<div class="title">hwloc_obj_attr_u::hwloc_cache_attr_s Struct Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p><code>#include &lt;<a class="el" href="a00040_source.php">hwloc.h</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-attribs"></a>
Data Fields</h2></td></tr>
<tr class="memitem:abe5e788943ed04302976740c829674c0"><td class="memItemLeft" align="right" valign="top">hwloc_uint64_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00017.php#abe5e788943ed04302976740c829674c0">size</a></td></tr>
<tr class="separator:abe5e788943ed04302976740c829674c0"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a5c8f7f39193736c2187ed626940835d5"><td class="memItemLeft" align="right" valign="top">unsigned&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00017.php#a5c8f7f39193736c2187ed626940835d5">depth</a></td></tr>
<tr class="separator:a5c8f7f39193736c2187ed626940835d5"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a801e8a668e28caf06c8b88e9ae5c10db"><td class="memItemLeft" align="right" valign="top">unsigned&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00017.php#a801e8a668e28caf06c8b88e9ae5c10db">linesize</a></td></tr>
<tr class="separator:a801e8a668e28caf06c8b88e9ae5c10db"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad06525e474d1e2d1423ed71bb998592d"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00017.php#ad06525e474d1e2d1423ed71bb998592d">associativity</a></td></tr>
<tr class="separator:ad06525e474d1e2d1423ed71bb998592d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad8edc8ded2b7a70d6abbc874801930f4"><td class="memItemLeft" align="right" valign="top"><a class="el" href="a00052.php#gab6e1e7efedae8b341f3ee14fbe53d66c">hwloc_obj_cache_type_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00017.php#ad8edc8ded2b7a70d6abbc874801930f4">type</a></td></tr>
<tr class="separator:ad8edc8ded2b7a70d6abbc874801930f4"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Cache-specific Object Attributes. </p>
</div><h2 class="groupheader">Field Documentation</h2>
<a class="anchor" id="ad06525e474d1e2d1423ed71bb998592d"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int hwloc_obj_attr_u::hwloc_cache_attr_s::associativity</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Ways of associativity, -1 if fully associative, 0 if unknown. </p>

</div>
</div>
<a class="anchor" id="a5c8f7f39193736c2187ed626940835d5"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned hwloc_obj_attr_u::hwloc_cache_attr_s::depth</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Depth of cache (e.g., L1, L2, ...etc.) </p>

</div>
</div>
<a class="anchor" id="a801e8a668e28caf06c8b88e9ae5c10db"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned hwloc_obj_attr_u::hwloc_cache_attr_s::linesize</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Cache-line size in bytes. 0 if unknown. </p>

</div>
</div>
<a class="anchor" id="abe5e788943ed04302976740c829674c0"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">hwloc_uint64_t hwloc_obj_attr_u::hwloc_cache_attr_s::size</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Size of cache in bytes. </p>

</div>
</div>
<a class="anchor" id="ad8edc8ded2b7a70d6abbc874801930f4"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="a00052.php#gab6e1e7efedae8b341f3ee14fbe53d66c">hwloc_obj_cache_type_t</a> hwloc_obj_attr_u::hwloc_cache_attr_s::type</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Cache type. </p>

</div>
</div>
<hr/>The documentation for this struct was generated from the following file:<ul>
<li><a class="el" href="a00040_source.php">hwloc.h</a></li>
</ul>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
