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
<!-- Generated by Doxygen 1.7.1 -->
<div class="navigation" id="top">
  <div class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&nbsp;Page</span></a></li>
      <li><a href="pages.php"><span>Related&nbsp;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&nbsp;Structures</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
</div>
<div class="header">
  <div class="summary">
<a href="#nested-classes">Data Structures</a> &#124;
<a href="#typedef-members">Typedefs</a>  </div>
  <div class="headertitle">
<h1>Topology Objects</h1>  </div>
</div>
<div class="contents">
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="nested-classes"></a>
Data Structures</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj__memory__s.php">hwloc_obj_memory_s</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Object memory.  <a href="structhwloc__obj__memory__s.php#_details">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj.php">hwloc_obj</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Structure of a topology object.  <a href="structhwloc__obj.php#_details">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">union &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="unionhwloc__obj__attr__u.php">hwloc_obj_attr_u</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Object type-specific Attributes.  <a href="unionhwloc__obj__attr__u.php#_details">More...</a><br/></td></tr>
<tr><td colspan="2"><h2><a name="typedef-members"></a>
Typedefs</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">typedef struct <a class="el" href="structhwloc__obj.php">hwloc_obj</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__objects.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Convenience typedef; a pointer to a struct <a class="el" href="structhwloc__obj.php" title="Structure of a topology object.">hwloc_obj</a>.  <a href="#ga79b8ab56877ef99ac59b833203391c7d"></a><br/></td></tr>
</table>
<hr/><h2>Typedef Documentation</h2>
<a class="anchor" id="ga79b8ab56877ef99ac59b833203391c7d"></a><!-- doxytag: member="hwloc.h::hwloc_obj_t" ref="ga79b8ab56877ef99ac59b833203391c7d" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">typedef struct <a class="el" href="structhwloc__obj.php">hwloc_obj</a>* <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Convenience typedef; a pointer to a struct <a class="el" href="structhwloc__obj.php" title="Structure of a topology object.">hwloc_obj</a>. </p>

</div>
</div>
</div>
<?php
include_once("$topdir/includes/footer.inc");
