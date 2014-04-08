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
      <li class="navelem"><a class="el" href="unionhwloc__obj__attr__u.php">hwloc_obj_attr_u</a>      </li>
      <li class="navelem"><a class="el" href="structhwloc__obj__attr__u_1_1hwloc__osdev__attr__s.php">hwloc_osdev_attr_s</a>      </li>
    </ul>
  </div>
</div>
<div class="header">
  <div class="summary">
<a href="#pub-attribs">Data Fields</a>  </div>
  <div class="headertitle">
<div class="title">hwloc_obj_attr_u::hwloc_osdev_attr_s Struct Reference</div>  </div>
</div>
<div class="contents">
<!-- doxytag: class="hwloc_obj_attr_u::hwloc_osdev_attr_s" -->
<p>OS Device specific Object Attributes.  
 <a href="structhwloc__obj__attr__u_1_1hwloc__osdev__attr__s.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="hwloc_8h_source.php">hwloc.h</a>&gt;</code></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-attribs"></a>
Data Fields</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="group__hwlocality__types.php#ga90c1e82a60ba5871d07645169e636987">hwloc_obj_osdev_type_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj__attr__u_1_1hwloc__osdev__attr__s.php#a31e019e27e54ac6138d04be639bb96f9">type</a></td></tr>
</table>
<hr/><a name="details" id="details"></a><h2>Detailed Description</h2>
<div class="textblock"><p>OS Device specific Object Attributes. </p>
</div><hr/><h2>Field Documentation</h2>
<a class="anchor" id="a31e019e27e54ac6138d04be639bb96f9"></a><!-- doxytag: member="hwloc_obj_attr_u::hwloc_osdev_attr_s::type" ref="a31e019e27e54ac6138d04be639bb96f9" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="group__hwlocality__types.php#ga90c1e82a60ba5871d07645169e636987">hwloc_obj_osdev_type_t</a> <a class="el" href="structhwloc__obj__attr__u_1_1hwloc__osdev__attr__s.php#a31e019e27e54ac6138d04be639bb96f9">hwloc_obj_attr_u::hwloc_osdev_attr_s::type</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

</div>
</div>
<hr/>The documentation for this struct was generated from the following file:<ul>
<li><a class="el" href="hwloc_8h_source.php">hwloc.h</a></li>
</ul>
</div>
<?php
include_once("$topdir/includes/footer.inc");
