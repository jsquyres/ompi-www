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
<div class="title">Basic Traversal Helpers</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:gadbf58f6e187efbdb3cd9a8e30311b7d7"><td class="memItemLeft" align="right" valign="top">static inline <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00051.php#gadbf58f6e187efbdb3cd9a8e30311b7d7">hwloc_get_root_obj</a> (<a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology) </td></tr>
<tr class="separator:gadbf58f6e187efbdb3cd9a8e30311b7d7"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga9b9d6af74eb0b78b1384aa66dd058ddc"><td class="memItemLeft" align="right" valign="top">static inline <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00051.php#ga9b9d6af74eb0b78b1384aa66dd058ddc">hwloc_get_ancestor_obj_by_depth</a> (<a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology , unsigned depth, <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> obj) </td></tr>
<tr class="separator:ga9b9d6af74eb0b78b1384aa66dd058ddc"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gac93e1a95a71add57ac841daef1b94e5e"><td class="memItemLeft" align="right" valign="top">static inline <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00051.php#gac93e1a95a71add57ac841daef1b94e5e">hwloc_get_ancestor_obj_by_type</a> (<a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology , <a class="el" href="a00040.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type, <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> obj) </td></tr>
<tr class="separator:gac93e1a95a71add57ac841daef1b94e5e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gab7c1dce3f42ece5bfa621e87cf332418"><td class="memItemLeft" align="right" valign="top">static inline <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00051.php#gab7c1dce3f42ece5bfa621e87cf332418">hwloc_get_next_obj_by_depth</a> (<a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, unsigned depth, <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> prev)</td></tr>
<tr class="separator:gab7c1dce3f42ece5bfa621e87cf332418"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga5f08ceb69375341e73563cfe2e77534e"><td class="memItemLeft" align="right" valign="top">static inline <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00051.php#ga5f08ceb69375341e73563cfe2e77534e">hwloc_get_next_obj_by_type</a> (<a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00040.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type, <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> prev)</td></tr>
<tr class="separator:ga5f08ceb69375341e73563cfe2e77534e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga0bc54225b65d557c70c7cb5dfb714de7"><td class="memItemLeft" align="right" valign="top">static inline <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00051.php#ga0bc54225b65d557c70c7cb5dfb714de7">hwloc_get_pu_obj_by_os_index</a> (<a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, unsigned os_index) </td></tr>
<tr class="separator:ga0bc54225b65d557c70c7cb5dfb714de7"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gae5ef1af636849f77714e1584ba78cf9c"><td class="memItemLeft" align="right" valign="top">static inline <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00051.php#gae5ef1af636849f77714e1584ba78cf9c">hwloc_get_next_child</a> (<a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology , <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> parent, <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> prev)</td></tr>
<tr class="separator:gae5ef1af636849f77714e1584ba78cf9c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga52a334f17c6b5b409d5cc6bb4ab8a2ab"><td class="memItemLeft" align="right" valign="top">static inline <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00051.php#ga52a334f17c6b5b409d5cc6bb4ab8a2ab">hwloc_get_common_ancestor_obj</a> (<a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology , <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> obj1, <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> obj2) </td></tr>
<tr class="separator:ga52a334f17c6b5b409d5cc6bb4ab8a2ab"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga08b5c1c1a95ed27a219c8af864690b3e"><td class="memItemLeft" align="right" valign="top">static inline int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00051.php#ga08b5c1c1a95ed27a219c8af864690b3e">hwloc_obj_is_in_subtree</a> (<a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology , <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> obj, <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> subtree_root) </td></tr>
<tr class="separator:ga08b5c1c1a95ed27a219c8af864690b3e"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<p>Be sure to see the figure in <a class="el" href="a00001.php">Terms and Definitions</a> that shows a complete topology tree, including depths, child/sibling/cousin relationships, and an example of an asymmetric topology where one socket has fewer caches than its peers. </p>
<h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="ga9b9d6af74eb0b78b1384aa66dd058ddc"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_ancestor_obj_by_depth </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology&#160;</td>
          <td class="paramname"><em></em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>depth</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>obj</em>&#160;</td>
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

<p>Returns the ancestor object of <code>obj</code> at depth <code>depth</code>. </p>

</div>
</div>
<a class="anchor" id="gac93e1a95a71add57ac841daef1b94e5e"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_ancestor_obj_by_type </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology&#160;</td>
          <td class="paramname"><em></em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00040.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td>
          <td class="paramname"><em>type</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>obj</em>&#160;</td>
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

<p>Returns the ancestor object of <code>obj</code> with type <code>type</code>. </p>

</div>
</div>
<a class="anchor" id="ga52a334f17c6b5b409d5cc6bb4ab8a2ab"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_common_ancestor_obj </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology&#160;</td>
          <td class="paramname"><em></em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>obj1</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>obj2</em>&#160;</td>
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

<p>Returns the common parent object to objects lvl1 and lvl2. </p>

</div>
</div>
<a class="anchor" id="gae5ef1af636849f77714e1584ba78cf9c"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_next_child </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology&#160;</td>
          <td class="paramname"><em></em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>parent</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>prev</em>&#160;</td>
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

<p>Return the next child. </p>
<p>If <code>prev</code> is <code>NULL</code>, return the first child. </p>

</div>
</div>
<a class="anchor" id="gab7c1dce3f42ece5bfa621e87cf332418"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_next_obj_by_depth </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>depth</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>prev</em>&#160;</td>
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

<p>Returns the next object at depth <code>depth</code>. </p>
<p>If <code>prev</code> is <code>NULL</code>, return the first object at depth <code>depth</code>. </p>

</div>
</div>
<a class="anchor" id="ga5f08ceb69375341e73563cfe2e77534e"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_next_obj_by_type </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00040.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td>
          <td class="paramname"><em>type</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>prev</em>&#160;</td>
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

<p>Returns the next object of type <code>type</code>. </p>
<p>If <code>prev</code> is <code>NULL</code>, return the first object at type <code>type</code>. If there are multiple or no depth for given type, return <code>NULL</code> and let the caller fallback to <a class="el" href="a00051.php#gab7c1dce3f42ece5bfa621e87cf332418" title="Returns the next object at depth depth.">hwloc_get_next_obj_by_depth()</a>. </p>

</div>
</div>
<a class="anchor" id="ga0bc54225b65d557c70c7cb5dfb714de7"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_pu_obj_by_os_index </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>os_index</em>&#160;</td>
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

<p>Returns the object of type <a class="el" href="a00040.php#ggacd37bb612667dc437d66bfb175a8dc55abca6887e80cb291353b0a0c1da83f661" title="Processing Unit, or (Logical) Processor. An execution unit (may share a core with some other logical ...">HWLOC_OBJ_PU</a> with <code>os_index</code>. </p>
<dl class="section note"><dt>Note</dt><dd>The <code>os_index</code> field of object should most of the times only be used for pretty-printing purpose. Type <a class="el" href="a00040.php#ggacd37bb612667dc437d66bfb175a8dc55abca6887e80cb291353b0a0c1da83f661" title="Processing Unit, or (Logical) Processor. An execution unit (may share a core with some other logical ...">HWLOC_OBJ_PU</a> is the only case where <code>os_index</code> could actually be useful, when manually binding to processors. However, using CPU sets to hide this complexity should often be preferred. </dd></dl>

</div>
</div>
<a class="anchor" id="gadbf58f6e187efbdb3cd9a8e30311b7d7"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_root_obj </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Returns the top-object of the topology-tree. </p>
<p>Its type is typically <a class="el" href="a00040.php#ggacd37bb612667dc437d66bfb175a8dc55a3f4e83ffc4a259354959ae8a9eaa2a80" title="Machine. The typical root object type. A set of processors and memory with cache coherency.">HWLOC_OBJ_MACHINE</a> but it could be different for complex topologies. This function replaces the old deprecated hwloc_get_system_obj(). </p>

</div>
</div>
<a class="anchor" id="ga08b5c1c1a95ed27a219c8af864690b3e"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline int hwloc_obj_is_in_subtree </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology&#160;</td>
          <td class="paramname"><em></em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>obj</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>subtree_root</em>&#160;</td>
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

<p>Returns true if <code>obj</code> is inside the subtree beginning with <code>subtree_root</code>. </p>
<dl class="section note"><dt>Note</dt><dd>This function assumes that both <code>obj</code> and <code>subtree_root</code> have a <code>cpuset</code>. </dd></dl>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
