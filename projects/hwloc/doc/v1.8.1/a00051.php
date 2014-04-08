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
      <li class="current"><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li><a href="functions.php"><span>Data&#160;Fields</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#nested-classes">Data Structures</a> &#124;
<a href="#pub-attribs">Data Fields</a>  </div>
  <div class="headertitle">
<div class="title">hwloc_topology_diff_u Union Reference<div class="ingroups"><a class="el" href="a00096.php">Topology differences</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p><code>#include &lt;<a class="el" href="a00058_source.php">diff.h</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Data Structures</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00044.php">hwloc_topology_diff_generic_s</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00046.php">hwloc_topology_diff_obj_attr_s</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00050.php">hwloc_topology_diff_too_complex_s</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-attribs"></a>
Data Fields</h2></td></tr>
<tr class="memitem:af1882d9c9d37c735a0e9b04069fab01f"><td class="memItemLeft" align="right" valign="top">struct <br class="typebreak"/>
<a class="el" href="a00044.php">hwloc_topology_diff_u::hwloc_topology_diff_generic_s</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00051.php#af1882d9c9d37c735a0e9b04069fab01f">generic</a></td></tr>
<tr class="separator:af1882d9c9d37c735a0e9b04069fab01f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a7245713f0f49e9f08fda28401a4f98fd"><td class="memItemLeft" align="right" valign="top">struct <br class="typebreak"/>
<a class="el" href="a00046.php">hwloc_topology_diff_u::hwloc_topology_diff_obj_attr_s</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00051.php#a7245713f0f49e9f08fda28401a4f98fd">obj_attr</a></td></tr>
<tr class="separator:a7245713f0f49e9f08fda28401a4f98fd"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:adaaabee4029a455119ec3695c19632d6"><td class="memItemLeft" align="right" valign="top">struct <br class="typebreak"/>
<a class="el" href="a00050.php">hwloc_topology_diff_u::hwloc_topology_diff_too_complex_s</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00051.php#adaaabee4029a455119ec3695c19632d6">too_complex</a></td></tr>
<tr class="separator:adaaabee4029a455119ec3695c19632d6"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>One element of a difference list between two topologies. </p>
</div><h2 class="groupheader">Field Documentation</h2>
<a class="anchor" id="af1882d9c9d37c735a0e9b04069fab01f"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="a00044.php">hwloc_topology_diff_u::hwloc_topology_diff_generic_s</a>  hwloc_topology_diff_u::generic</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a class="anchor" id="a7245713f0f49e9f08fda28401a4f98fd"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="a00046.php">hwloc_topology_diff_u::hwloc_topology_diff_obj_attr_s</a>  hwloc_topology_diff_u::obj_attr</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a class="anchor" id="adaaabee4029a455119ec3695c19632d6"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="a00050.php">hwloc_topology_diff_u::hwloc_topology_diff_too_complex_s</a>  hwloc_topology_diff_u::too_complex</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<hr/>The documentation for this union was generated from the following file:<ul>
<li><a class="el" href="a00058_source.php">diff.h</a></li>
</ul>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
