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
<!-- Generated by Doxygen 1.7.2 -->
<div class="navigation" id="top">
  <div class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
</div>
<div class="header">
  <div class="summary">
<a href="#enum-members">Enumerations</a> &#124;
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<h1>Topology Object Types</h1>  </div>
</div>
<div class="contents">
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="enum-members"></a>
Enumerations</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> { <br/>
&#160;&#160;<a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a3aa1b842d1fd4207ebce171f95a244ec">HWLOC_OBJ_SYSTEM</a>, 
<a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a3f4e83ffc4a259354959ae8a9eaa2a80">HWLOC_OBJ_MACHINE</a>, 
<a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55aaf0964881117bdedf1a5e9332cd120dd">HWLOC_OBJ_NODE</a>, 
<a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a1ac6e07775ae4324b3fe9dbd72c785ec">HWLOC_OBJ_SOCKET</a>, 
<br/>
&#160;&#160;<a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a56ee0b7eca88f363b75b34fdde8c9ddc">HWLOC_OBJ_CACHE</a>, 
<a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55ac793958f330bca371aa1535de8aff45f">HWLOC_OBJ_CORE</a>, 
<a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55abca6887e80cb291353b0a0c1da83f661">HWLOC_OBJ_PU</a>, 
<a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a5269ef95be72f88465559d35c9b7ad56">HWLOC_OBJ_GROUP</a>, 
<br/>
&#160;&#160;<a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a19f8a6953fa91efc76bcbcdf2d22de4d">HWLOC_OBJ_MISC</a>
<br/>
 }</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight"><p>Type of topology object. </p>
 <a href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__types.php#ga46323568968005137c32f6a1cd405b74">hwloc_compare_types_e</a> { <a class="el" href="group__hwlocality__types.php#gga46323568968005137c32f6a1cd405b74a2f8297ea36eba46e7596e810a67298fb">HWLOC_TYPE_UNORDERED</a>
 }</td></tr>
<tr><td colspan="2"><h2><a name="func-members"></a>
Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__types.php#gabd7da4f4ea12b420b8ecbde458b27805">hwloc_compare_types</a> (<a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type1, <a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type2) </td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Compare the depth of two object types.  <a href="#gabd7da4f4ea12b420b8ecbde458b27805"></a><br/></td></tr>
</table>
<hr/><h2>Enumeration Type Documentation</h2>
<a class="anchor" id="ga46323568968005137c32f6a1cd405b74"></a><!-- doxytag: member="hwloc.h::hwloc_compare_types_e" ref="ga46323568968005137c32f6a1cd405b74" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="group__hwlocality__types.php#ga46323568968005137c32f6a1cd405b74">hwloc_compare_types_e</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">
<dl><dt><b>Enumerator: </b></dt><dd><table border="0" cellspacing="2" cellpadding="0">
<tr><td valign="top"><em><a class="anchor" id="gga46323568968005137c32f6a1cd405b74a2f8297ea36eba46e7596e810a67298fb"></a><!-- doxytag: member="HWLOC_TYPE_UNORDERED" ref="gga46323568968005137c32f6a1cd405b74a2f8297ea36eba46e7596e810a67298fb" args="" -->HWLOC_TYPE_UNORDERED</em>&nbsp;</td><td>
<p>Value returned by hwloc_compare_types when types can not be compared. </p>
</td></tr>
</table>
</dd>
</dl>

</div>
</div>
<a class="anchor" id="gacd37bb612667dc437d66bfb175a8dc55"></a><!-- doxytag: member="hwloc.h::hwloc_obj_type_t" ref="gacd37bb612667dc437d66bfb175a8dc55" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Type of topology object. </p>
<dl class="note"><dt><b>Note:</b></dt><dd>Do not rely on the ordering or completeness of the values as new ones may be defined in the future! If you need to compare types, use <a class="el" href="group__hwlocality__types.php#gabd7da4f4ea12b420b8ecbde458b27805" title="Compare the depth of two object types.">hwloc_compare_types()</a> instead. </dd></dl>
<dl><dt><b>Enumerator: </b></dt><dd><table border="0" cellspacing="2" cellpadding="0">
<tr><td valign="top"><em><a class="anchor" id="ggacd37bb612667dc437d66bfb175a8dc55a3aa1b842d1fd4207ebce171f95a244ec"></a><!-- doxytag: member="HWLOC_OBJ_SYSTEM" ref="ggacd37bb612667dc437d66bfb175a8dc55a3aa1b842d1fd4207ebce171f95a244ec" args="" -->HWLOC_OBJ_SYSTEM</em>&nbsp;</td><td>
<p>Whole system (may be a cluster of machines). The whole system that is accessible to hwloc. That may comprise several machines in SSI systems like Kerrighed. </p>
</td></tr>
<tr><td valign="top"><em><a class="anchor" id="ggacd37bb612667dc437d66bfb175a8dc55a3f4e83ffc4a259354959ae8a9eaa2a80"></a><!-- doxytag: member="HWLOC_OBJ_MACHINE" ref="ggacd37bb612667dc437d66bfb175a8dc55a3f4e83ffc4a259354959ae8a9eaa2a80" args="" -->HWLOC_OBJ_MACHINE</em>&nbsp;</td><td>
<p>Machine. The typical root object type. A set of processors and memory with cache coherency. </p>
</td></tr>
<tr><td valign="top"><em><a class="anchor" id="ggacd37bb612667dc437d66bfb175a8dc55aaf0964881117bdedf1a5e9332cd120dd"></a><!-- doxytag: member="HWLOC_OBJ_NODE" ref="ggacd37bb612667dc437d66bfb175a8dc55aaf0964881117bdedf1a5e9332cd120dd" args="" -->HWLOC_OBJ_NODE</em>&nbsp;</td><td>
<p>NUMA node. A set of processors around memory which the processors can directly access. </p>
</td></tr>
<tr><td valign="top"><em><a class="anchor" id="ggacd37bb612667dc437d66bfb175a8dc55a1ac6e07775ae4324b3fe9dbd72c785ec"></a><!-- doxytag: member="HWLOC_OBJ_SOCKET" ref="ggacd37bb612667dc437d66bfb175a8dc55a1ac6e07775ae4324b3fe9dbd72c785ec" args="" -->HWLOC_OBJ_SOCKET</em>&nbsp;</td><td>
<p>Socket, physical package, or chip. In the physical meaning, i.e. that you can add or remove physically. </p>
</td></tr>
<tr><td valign="top"><em><a class="anchor" id="ggacd37bb612667dc437d66bfb175a8dc55a56ee0b7eca88f363b75b34fdde8c9ddc"></a><!-- doxytag: member="HWLOC_OBJ_CACHE" ref="ggacd37bb612667dc437d66bfb175a8dc55a56ee0b7eca88f363b75b34fdde8c9ddc" args="" -->HWLOC_OBJ_CACHE</em>&nbsp;</td><td>
<p>Data cache. Can be L1, L2, L3, ... </p>
</td></tr>
<tr><td valign="top"><em><a class="anchor" id="ggacd37bb612667dc437d66bfb175a8dc55ac793958f330bca371aa1535de8aff45f"></a><!-- doxytag: member="HWLOC_OBJ_CORE" ref="ggacd37bb612667dc437d66bfb175a8dc55ac793958f330bca371aa1535de8aff45f" args="" -->HWLOC_OBJ_CORE</em>&nbsp;</td><td>
<p>Core. A computation unit (may be shared by several logical processors). </p>
</td></tr>
<tr><td valign="top"><em><a class="anchor" id="ggacd37bb612667dc437d66bfb175a8dc55abca6887e80cb291353b0a0c1da83f661"></a><!-- doxytag: member="HWLOC_OBJ_PU" ref="ggacd37bb612667dc437d66bfb175a8dc55abca6887e80cb291353b0a0c1da83f661" args="" -->HWLOC_OBJ_PU</em>&nbsp;</td><td>
<p>Processing Unit, or (Logical) Processor. An execution unit (may share a core with some other logical processors, e.g. in the case of an SMT core). </p>
<p>Objects of this kind are always reported and can thus be used as fallback when others are not. </p>
</td></tr>
<tr><td valign="top"><em><a class="anchor" id="ggacd37bb612667dc437d66bfb175a8dc55a5269ef95be72f88465559d35c9b7ad56"></a><!-- doxytag: member="HWLOC_OBJ_GROUP" ref="ggacd37bb612667dc437d66bfb175a8dc55a5269ef95be72f88465559d35c9b7ad56" args="" -->HWLOC_OBJ_GROUP</em>&nbsp;</td><td>
<p>Group objects. Objects which do not fit in the above but are detected by hwloc and are useful to take into account for affinity. For instance, some operating systems expose their arbitrary processors aggregation this way. And hwloc may insert such objects to group NUMA nodes according to their distances. </p>
<p>These objects are ignored when they do not bring any structure. </p>
</td></tr>
<tr><td valign="top"><em><a class="anchor" id="ggacd37bb612667dc437d66bfb175a8dc55a19f8a6953fa91efc76bcbcdf2d22de4d"></a><!-- doxytag: member="HWLOC_OBJ_MISC" ref="ggacd37bb612667dc437d66bfb175a8dc55a19f8a6953fa91efc76bcbcdf2d22de4d" args="" -->HWLOC_OBJ_MISC</em>&nbsp;</td><td>
<p>Miscellaneous objects. Objects without particular meaning, that can e.g. be added by the application for its own use. </p>
</td></tr>
</table>
</dd>
</dl>

</div>
</div>
<hr/><h2>Function Documentation</h2>
<a class="anchor" id="gabd7da4f4ea12b420b8ecbde458b27805"></a><!-- doxytag: member="hwloc.h::hwloc_compare_types" ref="gabd7da4f4ea12b420b8ecbde458b27805" args="(hwloc_obj_type_t type1, hwloc_obj_type_t type2) " -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_compare_types </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td>
          <td class="paramname"> <em>type1</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td>
          <td class="paramname"> <em>type2</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td> const</td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Compare the depth of two object types. </p>
<p>Types shouldn't be compared as they are, since newer ones may be added in the future. This function returns less than, equal to, or greater than zero respectively if <code>type1</code> objects usually include <code>type2</code> objects, are the same as <code>type2</code> objects, or are included in <code>type2</code> objects. If the types can not be compared (because neither is usually contained in the other), HWLOC_TYPE_UNORDERED is returned. Object types containing CPUs can always be compared (usually, a system contains machines which contain nodes which contain sockets which contain caches, which contain cores, which contain processors).</p>
<dl class="note"><dt><b>Note:</b></dt><dd>HWLOC_OBJ_PU will always be the deepest. </dd>
<dd>
This does not mean that the actual topology will respect that order: e.g. as of today cores may also contain caches, and sockets may also contain nodes. This is thus just to be seen as a fallback comparison method. </dd></dl>

</div>
</div>
</div>
<?php
include_once("$topdir/includes/footer.inc");
