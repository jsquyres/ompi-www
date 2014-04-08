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
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-attribs">Data Fields</a>  </div>
  <div class="headertitle">
<div class="title">hwloc_topology_support Struct Reference<div class="ingroups"><a class="el" href="a00047.php">Configure Topology Detection</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p><code>#include &lt;<a class="el" href="a00036_source.php">hwloc.h</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-attribs"></a>
Data Fields</h2></td></tr>
<tr class="memitem:aea3fbd7653d987d81f848636c420504d"><td class="memItemLeft" align="right" valign="top">struct <br class="typebreak"/>
<a class="el" href="a00027.php">hwloc_topology_discovery_support</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00029.php#aea3fbd7653d987d81f848636c420504d">discovery</a></td></tr>
<tr class="separator:aea3fbd7653d987d81f848636c420504d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:adef2bb91f74c3e70a2a071393caf5f56"><td class="memItemLeft" align="right" valign="top">struct <br class="typebreak"/>
<a class="el" href="a00026.php">hwloc_topology_cpubind_support</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00029.php#adef2bb91f74c3e70a2a071393caf5f56">cpubind</a></td></tr>
<tr class="separator:adef2bb91f74c3e70a2a071393caf5f56"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac6eb62ae8bc0a68dce679a7107a36194"><td class="memItemLeft" align="right" valign="top">struct <br class="typebreak"/>
<a class="el" href="a00028.php">hwloc_topology_membind_support</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00029.php#ac6eb62ae8bc0a68dce679a7107a36194">membind</a></td></tr>
<tr class="separator:ac6eb62ae8bc0a68dce679a7107a36194"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Set of flags describing actual support for this topology. </p>
<p>This is retrieved with <a class="el" href="a00047.php#gac2126e105f3ae708efca2e90d612625a" title="Retrieve the topology support.">hwloc_topology_get_support()</a> and will be valid until the topology object is destroyed. Note: the values are correct only after discovery. </p>
</div><h2 class="groupheader">Field Documentation</h2>
<a class="anchor" id="adef2bb91f74c3e70a2a071393caf5f56"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="a00026.php">hwloc_topology_cpubind_support</a>* hwloc_topology_support::cpubind</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a class="anchor" id="aea3fbd7653d987d81f848636c420504d"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="a00027.php">hwloc_topology_discovery_support</a>* hwloc_topology_support::discovery</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a class="anchor" id="ac6eb62ae8bc0a68dce679a7107a36194"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="a00028.php">hwloc_topology_membind_support</a>* hwloc_topology_support::membind</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<hr/>The documentation for this struct was generated from the following file:<ul>
<li><a class="el" href="a00036_source.php">hwloc.h</a></li>
</ul>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
