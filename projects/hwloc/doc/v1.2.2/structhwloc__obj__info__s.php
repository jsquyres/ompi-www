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
</div>
<div class="header">
  <div class="summary">
<a href="#pub-attribs">Data Fields</a>  </div>
  <div class="headertitle">
<div class="title">hwloc_obj_info_s Struct Reference<div class="ingroups"><a class="el" href="group__hwlocality__objects.php">Topology Objects</a></div></div>  </div>
</div>
<div class="contents">
<!-- doxytag: class="hwloc_obj_info_s" -->
<p>Object info.  
 <a href="structhwloc__obj__info__s.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="hwloc_8h_source.php">hwloc.h</a>&gt;</code></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-attribs"></a>
Data Fields</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">char *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj__info__s.php#a115dde58f40338a2d3276d59c099857d">name</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Info name.  <a href="#a115dde58f40338a2d3276d59c099857d"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">char *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj__info__s.php#a522efd7f5262a4493a73fa3476a041ce">value</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Info value.  <a href="#a522efd7f5262a4493a73fa3476a041ce"></a><br/></td></tr>
</table>
<hr/><a name="details" id="details"></a><h2>Detailed Description</h2>
<div class="textblock"><p>Object info. </p>
</div><hr/><h2>Field Documentation</h2>
<a class="anchor" id="a115dde58f40338a2d3276d59c099857d"></a><!-- doxytag: member="hwloc_obj_info_s::name" ref="a115dde58f40338a2d3276d59c099857d" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">char* <a class="el" href="structhwloc__obj__info__s.php#a115dde58f40338a2d3276d59c099857d">hwloc_obj_info_s::name</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Info name. </p>

</div>
</div>
<a class="anchor" id="a522efd7f5262a4493a73fa3476a041ce"></a><!-- doxytag: member="hwloc_obj_info_s::value" ref="a522efd7f5262a4493a73fa3476a041ce" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">char* <a class="el" href="structhwloc__obj__info__s.php#a522efd7f5262a4493a73fa3476a041ce">hwloc_obj_info_s::value</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Info value. </p>

</div>
</div>
<hr/>The documentation for this struct was generated from the following file:<ul>
<li><a class="el" href="hwloc_8h_source.php">hwloc.h</a></li>
</ul>
</div>
<?php
include_once("$topdir/includes/footer.inc");
