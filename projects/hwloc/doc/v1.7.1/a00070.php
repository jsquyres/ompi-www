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
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">Advanced Traversal Helpers</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ga26c2ac4f25b1ed293249c88e232f1bea"><td class="memItemLeft" align="right" valign="top"> unsigned&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00070.php#ga26c2ac4f25b1ed293249c88e232f1bea">hwloc_get_closest_objs</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> src, <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> *restrict objs, unsigned max)</td></tr>
<tr class="separator:ga26c2ac4f25b1ed293249c88e232f1bea"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga6c482c2097f01b1ff88598fec8a1ba3b"><td class="memItemLeft" align="right" valign="top">static inline <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00070.php#ga6c482c2097f01b1ff88598fec8a1ba3b">hwloc_get_obj_below_by_type</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00052.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type1, unsigned idx1, <a class="el" href="a00052.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type2, unsigned idx2) </td></tr>
<tr class="separator:ga6c482c2097f01b1ff88598fec8a1ba3b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gac33a0990f4e771b2117ddedabc3f00f6"><td class="memItemLeft" align="right" valign="top">static inline <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00070.php#gac33a0990f4e771b2117ddedabc3f00f6">hwloc_get_obj_below_array_by_type</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, int nr, <a class="el" href="a00052.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> *typev, unsigned *idxv) </td></tr>
<tr class="separator:gac33a0990f4e771b2117ddedabc3f00f6"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<p>Be sure to see the figure in <a class="el" href="a00001.php#termsanddefs">termsanddefs</a> that shows a complete topology tree, including depths, child/sibling/cousin relationships, and an example of an asymmetric topology where one socket has fewer caches than its peers. </p>
<h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="ga26c2ac4f25b1ed293249c88e232f1bea"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> unsigned hwloc_get_closest_objs </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>src</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> *restrict&#160;</td>
          <td class="paramname"><em>objs</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>max</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Do a depth-first traversal of the topology to find and sort. </p>
<p>all objects that are at the same depth than <code>src</code>. Report in <code>objs</code> up to <code>max</code> physically closest ones to <code>src</code>.</p>
<dl class="section return"><dt>Returns</dt><dd>the number of objects returned in <code>objs</code>.</dd>
<dd>
0 if <code>src</code> is an I/O object.</dd></dl>
<dl class="section note"><dt>Note</dt><dd>This function requires the <code>src</code> object to have a CPU set. </dd></dl>

</div>
</div>
<a class="anchor" id="gac33a0990f4e771b2117ddedabc3f00f6"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_obj_below_array_by_type </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>nr</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00052.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> *&#160;</td>
          <td class="paramname"><em>typev</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned *&#160;</td>
          <td class="paramname"><em>idxv</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Find an object below a chain of objects specified by types and indexes. </p>
<p>This is a generalized version of <a class="el" href="a00070.php#ga6c482c2097f01b1ff88598fec8a1ba3b" title="Find an object below another object, both specified by types and indexes.">hwloc_get_obj_below_by_type()</a>.</p>
<p>Arrays <code>typev</code> and <code>idxv</code> must contain <code>nr</code> types and indexes.</p>
<p>Start from the top system object and walk the arrays <code>typev</code> and <code>idxv</code>. For each type and logical index couple in the arrays, look under the previously found object to find the index-th object of the given type. Indexes are specified within the parent, not withing the entire system.</p>
<p>For instance, if nr is 3, typev contains NODE, SOCKET and CORE, and idxv contains 0, 1 and 2, return the third core object below the second socket below the first NUMA node.</p>
<dl class="section note"><dt>Note</dt><dd>This function requires all these objects and the root object to have a CPU set. </dd></dl>

</div>
</div>
<a class="anchor" id="ga6c482c2097f01b1ff88598fec8a1ba3b"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_obj_below_by_type </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00052.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td>
          <td class="paramname"><em>type1</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>idx1</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00052.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td>
          <td class="paramname"><em>type2</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>idx2</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Find an object below another object, both specified by types and indexes. </p>
<p>Start from the top system object and find object of type <code>type1</code> and logical index <code>idx1</code>. Then look below this object and find another object of type <code>type2</code> and logical index <code>idx2</code>. Indexes are specified within the parent, not withing the entire system.</p>
<p>For instance, if type1 is SOCKET, idx1 is 2, type2 is CORE and idx2 is 3, return the fourth core object below the third socket.</p>
<dl class="section note"><dt>Note</dt><dd>This function requires these objects to have a CPU set. </dd></dl>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
