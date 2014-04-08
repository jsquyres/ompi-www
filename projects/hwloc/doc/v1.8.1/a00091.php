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
<!-- Generated by Doxygen 1.8.6 -->
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
<div class="title">CPU and node sets of entire topologies</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ga418ebb39eaf1eac8f9cf4047cf59a534"><td class="memItemLeft" align="right" valign="top">static __hwloc_inline <br class="typebreak"/>
<a class="el" href="a00073.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00091.php#ga418ebb39eaf1eac8f9cf4047cf59a534">hwloc_topology_get_complete_cpuset</a> (<a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology) __hwloc_attribute_pure</td></tr>
<tr class="separator:ga418ebb39eaf1eac8f9cf4047cf59a534"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gaa319133e702fea664750c45735ac8a25"><td class="memItemLeft" align="right" valign="top">static __hwloc_inline <br class="typebreak"/>
<a class="el" href="a00073.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00091.php#gaa319133e702fea664750c45735ac8a25">hwloc_topology_get_topology_cpuset</a> (<a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology) __hwloc_attribute_pure</td></tr>
<tr class="separator:gaa319133e702fea664750c45735ac8a25"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gafeb07985e2cc66aee1da447aff0bcab8"><td class="memItemLeft" align="right" valign="top">static __hwloc_inline <br class="typebreak"/>
<a class="el" href="a00073.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00091.php#gafeb07985e2cc66aee1da447aff0bcab8">hwloc_topology_get_online_cpuset</a> (<a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology) __hwloc_attribute_pure</td></tr>
<tr class="separator:gafeb07985e2cc66aee1da447aff0bcab8"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga08e3b14e1fe7642b383633d34c1f3c4a"><td class="memItemLeft" align="right" valign="top">static __hwloc_inline <br class="typebreak"/>
<a class="el" href="a00073.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00091.php#ga08e3b14e1fe7642b383633d34c1f3c4a">hwloc_topology_get_allowed_cpuset</a> (<a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology) __hwloc_attribute_pure</td></tr>
<tr class="separator:ga08e3b14e1fe7642b383633d34c1f3c4a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gaddb7a1f3d71510bb011189e0b8edf29f"><td class="memItemLeft" align="right" valign="top">static __hwloc_inline <br class="typebreak"/>
<a class="el" href="a00073.php#ga2f5276235841ad66a79bedad16a5a10c">hwloc_const_nodeset_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00091.php#gaddb7a1f3d71510bb011189e0b8edf29f">hwloc_topology_get_complete_nodeset</a> (<a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology) __hwloc_attribute_pure</td></tr>
<tr class="separator:gaddb7a1f3d71510bb011189e0b8edf29f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga78f80a3c04718ca273791a1071512031"><td class="memItemLeft" align="right" valign="top">static __hwloc_inline <br class="typebreak"/>
<a class="el" href="a00073.php#ga2f5276235841ad66a79bedad16a5a10c">hwloc_const_nodeset_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00091.php#ga78f80a3c04718ca273791a1071512031">hwloc_topology_get_topology_nodeset</a> (<a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology) __hwloc_attribute_pure</td></tr>
<tr class="separator:ga78f80a3c04718ca273791a1071512031"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga13915b8e074f59fbdf8f973739509293"><td class="memItemLeft" align="right" valign="top">static __hwloc_inline <br class="typebreak"/>
<a class="el" href="a00073.php#ga2f5276235841ad66a79bedad16a5a10c">hwloc_const_nodeset_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00091.php#ga13915b8e074f59fbdf8f973739509293">hwloc_topology_get_allowed_nodeset</a> (<a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology) __hwloc_attribute_pure</td></tr>
<tr class="separator:ga13915b8e074f59fbdf8f973739509293"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="ga08e3b14e1fe7642b383633d34c1f3c4a"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static __hwloc_inline <a class="el" href="a00073.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> hwloc_topology_get_allowed_cpuset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
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

<p>Get allowed CPU set. </p>
<dl class="section return"><dt>Returns</dt><dd>the CPU set of allowed logical processors of the system. If the topology is the result of a combination of several systems, NULL is returned.</dd></dl>
<dl class="section note"><dt>Note</dt><dd>The returned cpuset is not newly allocated and should thus not be changed or freed, hwloc_cpuset_dup must be used to obtain a local copy. </dd></dl>

</div>
</div>
<a class="anchor" id="ga13915b8e074f59fbdf8f973739509293"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static __hwloc_inline <a class="el" href="a00073.php#ga2f5276235841ad66a79bedad16a5a10c">hwloc_const_nodeset_t</a> hwloc_topology_get_allowed_nodeset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
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

<p>Get allowed node set. </p>
<dl class="section return"><dt>Returns</dt><dd>the node set of allowed memory of the system. If the topology is the result of a combination of several systems, NULL is returned.</dd></dl>
<dl class="section note"><dt>Note</dt><dd>The returned nodeset is not newly allocated and should thus not be changed or freed, hwloc_nodeset_dup must be used to obtain a local copy. </dd></dl>

</div>
</div>
<a class="anchor" id="ga418ebb39eaf1eac8f9cf4047cf59a534"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static __hwloc_inline <a class="el" href="a00073.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> hwloc_topology_get_complete_cpuset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
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

<p>Get complete CPU set. </p>
<dl class="section return"><dt>Returns</dt><dd>the complete CPU set of logical processors of the system. If the topology is the result of a combination of several systems, NULL is returned.</dd></dl>
<dl class="section note"><dt>Note</dt><dd>The returned cpuset is not newly allocated and should thus not be changed or freed; hwloc_cpuset_dup must be used to obtain a local copy. </dd></dl>

</div>
</div>
<a class="anchor" id="gaddb7a1f3d71510bb011189e0b8edf29f"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static __hwloc_inline <a class="el" href="a00073.php#ga2f5276235841ad66a79bedad16a5a10c">hwloc_const_nodeset_t</a> hwloc_topology_get_complete_nodeset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
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

<p>Get complete node set. </p>
<dl class="section return"><dt>Returns</dt><dd>the complete node set of memory of the system. If the topology is the result of a combination of several systems, NULL is returned.</dd></dl>
<dl class="section note"><dt>Note</dt><dd>The returned nodeset is not newly allocated and should thus not be changed or freed; hwloc_nodeset_dup must be used to obtain a local copy. </dd></dl>

</div>
</div>
<a class="anchor" id="gafeb07985e2cc66aee1da447aff0bcab8"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static __hwloc_inline <a class="el" href="a00073.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> hwloc_topology_get_online_cpuset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
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

<p>Get online CPU set. </p>
<dl class="section return"><dt>Returns</dt><dd>the CPU set of online logical processors of the system. If the topology is the result of a combination of several systems, NULL is returned.</dd></dl>
<dl class="section note"><dt>Note</dt><dd>The returned cpuset is not newly allocated and should thus not be changed or freed; hwloc_cpuset_dup must be used to obtain a local copy. </dd></dl>

</div>
</div>
<a class="anchor" id="gaa319133e702fea664750c45735ac8a25"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static __hwloc_inline <a class="el" href="a00073.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> hwloc_topology_get_topology_cpuset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
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

<p>Get topology CPU set. </p>
<dl class="section return"><dt>Returns</dt><dd>the CPU set of logical processors of the system for which hwloc provides topology information. This is equivalent to the cpuset of the system object. If the topology is the result of a combination of several systems, NULL is returned.</dd></dl>
<dl class="section note"><dt>Note</dt><dd>The returned cpuset is not newly allocated and should thus not be changed or freed; hwloc_cpuset_dup must be used to obtain a local copy. </dd></dl>

</div>
</div>
<a class="anchor" id="ga78f80a3c04718ca273791a1071512031"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static __hwloc_inline <a class="el" href="a00073.php#ga2f5276235841ad66a79bedad16a5a10c">hwloc_const_nodeset_t</a> hwloc_topology_get_topology_nodeset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
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

<p>Get topology node set. </p>
<dl class="section return"><dt>Returns</dt><dd>the node set of memory of the system for which hwloc provides topology information. This is equivalent to the nodeset of the system object. If the topology is the result of a combination of several systems, NULL is returned.</dd></dl>
<dl class="section note"><dt>Note</dt><dd>The returned nodeset is not newly allocated and should thus not be changed or freed; hwloc_nodeset_dup must be used to obtain a local copy. </dd></dl>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
