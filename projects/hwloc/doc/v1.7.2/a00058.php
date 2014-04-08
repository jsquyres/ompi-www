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
<!-- Generated by Doxygen 1.8.4 -->
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
<a href="#enum-members">Enumerations</a> &#124;
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">Get Some Topology Information</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="enum-members"></a>
Enumerations</h2></td></tr>
<tr class="memitem:gaf4e663cf42bbe20756b849c6293ef575"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00058.php#gaf4e663cf42bbe20756b849c6293ef575">hwloc_get_type_depth_e</a> { <br/>
&#160;&#160;<a class="el" href="a00058.php#ggaf4e663cf42bbe20756b849c6293ef575a0565ab92ab72cb0cec91e23003294aad">HWLOC_TYPE_DEPTH_UNKNOWN</a>, 
<a class="el" href="a00058.php#ggaf4e663cf42bbe20756b849c6293ef575ae99465995cacde6c210d5fc2e409798c">HWLOC_TYPE_DEPTH_MULTIPLE</a>, 
<a class="el" href="a00058.php#ggaf4e663cf42bbe20756b849c6293ef575af93b50182973e4a718d9d4db9e253a90">HWLOC_TYPE_DEPTH_BRIDGE</a>, 
<a class="el" href="a00058.php#ggaf4e663cf42bbe20756b849c6293ef575ad8b1516e699b57ce1c8d107fbd2f674c">HWLOC_TYPE_DEPTH_PCI_DEVICE</a>, 
<br/>
&#160;&#160;<a class="el" href="a00058.php#ggaf4e663cf42bbe20756b849c6293ef575afe9a2131073eebbe129d4aa2928d3f46">HWLOC_TYPE_DEPTH_OS_DEVICE</a>
<br/>
 }</td></tr>
<tr class="separator:gaf4e663cf42bbe20756b849c6293ef575"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ga8c30b0cec55074eb3ed34e4f2a1a9937"><td class="memItemLeft" align="right" valign="top">HWLOC_DECLSPEC unsigned&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00058.php#ga8c30b0cec55074eb3ed34e4f2a1a9937">hwloc_topology_get_depth</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> __hwloc_restrict topology) __hwloc_attribute_pure</td></tr>
<tr class="separator:ga8c30b0cec55074eb3ed34e4f2a1a9937"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gaea7c64dd59467f5201ba87712710b14d"><td class="memItemLeft" align="right" valign="top">HWLOC_DECLSPEC int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00058.php#gaea7c64dd59467f5201ba87712710b14d">hwloc_get_type_depth</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00052.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type)</td></tr>
<tr class="separator:gaea7c64dd59467f5201ba87712710b14d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gadd4964764ae7e49231065d58a553fd31"><td class="memItemLeft" align="right" valign="top">HWLOC_DECLSPEC <a class="el" href="a00052.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00058.php#gadd4964764ae7e49231065d58a553fd31">hwloc_get_depth_type</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, unsigned depth) __hwloc_attribute_pure</td></tr>
<tr class="separator:gadd4964764ae7e49231065d58a553fd31"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga20cfe2456f4cfdd789c9aca6d2fdd69f"><td class="memItemLeft" align="right" valign="top">HWLOC_DECLSPEC unsigned&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00058.php#ga20cfe2456f4cfdd789c9aca6d2fdd69f">hwloc_get_nbobjs_by_depth</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, unsigned depth) __hwloc_attribute_pure</td></tr>
<tr class="separator:ga20cfe2456f4cfdd789c9aca6d2fdd69f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gaba821f84ef64282d14577066e6d6547e"><td class="memItemLeft" align="right" valign="top">static __hwloc_inline int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00058.php#gaba821f84ef64282d14577066e6d6547e">hwloc_get_nbobjs_by_type</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00052.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type) __hwloc_attribute_pure</td></tr>
<tr class="separator:gaba821f84ef64282d14577066e6d6547e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga0d109e33fc7990f62f665d336e5e5111"><td class="memItemLeft" align="right" valign="top">HWLOC_DECLSPEC int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00058.php#ga0d109e33fc7990f62f665d336e5e5111">hwloc_topology_is_thissystem</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> __hwloc_restrict topology) __hwloc_attribute_pure</td></tr>
<tr class="separator:ga0d109e33fc7990f62f665d336e5e5111"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga4f368cb8f2c69b8c8086a6226f12d1bd"><td class="memItemLeft" align="right" valign="top">HWLOC_DECLSPEC unsigned long&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00058.php#ga4f368cb8f2c69b8c8086a6226f12d1bd">hwloc_topology_get_flags</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology)</td></tr>
<tr class="separator:ga4f368cb8f2c69b8c8086a6226f12d1bd"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<p>Be sure to see the figure in <a class="el" href="a00001.php#termsanddefs">termsanddefs</a> that shows a complete topology tree, including depths, child/sibling/cousin relationships, and an example of an asymmetric topology where one socket has fewer caches than its peers. </p>
<h2 class="groupheader">Enumeration Type Documentation</h2>
<a class="anchor" id="gaf4e663cf42bbe20756b849c6293ef575"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="a00058.php#gaf4e663cf42bbe20756b849c6293ef575">hwloc_get_type_depth_e</a></td>
        </tr>
      </table>
</div><div class="memdoc">
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><em><a class="anchor" id="ggaf4e663cf42bbe20756b849c6293ef575a0565ab92ab72cb0cec91e23003294aad"></a>HWLOC_TYPE_DEPTH_UNKNOWN</em>&nbsp;</td><td class="fielddoc">
<p>No object of given type exists in the topology. </p>
</td></tr>
<tr><td class="fieldname"><em><a class="anchor" id="ggaf4e663cf42bbe20756b849c6293ef575ae99465995cacde6c210d5fc2e409798c"></a>HWLOC_TYPE_DEPTH_MULTIPLE</em>&nbsp;</td><td class="fielddoc">
<p>Objects of given type exist at different depth in the topology. </p>
</td></tr>
<tr><td class="fieldname"><em><a class="anchor" id="ggaf4e663cf42bbe20756b849c6293ef575af93b50182973e4a718d9d4db9e253a90"></a>HWLOC_TYPE_DEPTH_BRIDGE</em>&nbsp;</td><td class="fielddoc">
<p>Virtual depth for bridge object level. </p>
</td></tr>
<tr><td class="fieldname"><em><a class="anchor" id="ggaf4e663cf42bbe20756b849c6293ef575ad8b1516e699b57ce1c8d107fbd2f674c"></a>HWLOC_TYPE_DEPTH_PCI_DEVICE</em>&nbsp;</td><td class="fielddoc">
<p>Virtual depth for PCI device object level. </p>
</td></tr>
<tr><td class="fieldname"><em><a class="anchor" id="ggaf4e663cf42bbe20756b849c6293ef575afe9a2131073eebbe129d4aa2928d3f46"></a>HWLOC_TYPE_DEPTH_OS_DEVICE</em>&nbsp;</td><td class="fielddoc">
<p>Virtual depth for software device object level. </p>
</td></tr>
</table>

</div>
</div>
<h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="gadd4964764ae7e49231065d58a553fd31"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">HWLOC_DECLSPEC <a class="el" href="a00052.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> hwloc_get_depth_type </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>depth</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Returns the type of objects at depth <code>depth</code>. </p>
<dl class="section return"><dt>Returns</dt><dd>-1 if depth <code>depth</code> does not exist. </dd></dl>

</div>
</div>
<a class="anchor" id="ga20cfe2456f4cfdd789c9aca6d2fdd69f"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">HWLOC_DECLSPEC unsigned hwloc_get_nbobjs_by_depth </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>depth</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Returns the width of level at depth <code>depth</code>. </p>

</div>
</div>
<a class="anchor" id="gaba821f84ef64282d14577066e6d6547e"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static __hwloc_inline int hwloc_get_nbobjs_by_type </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00052.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td>
          <td class="paramname"><em>type</em>&#160;</td>
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

<p>Returns the width of level type <code>type</code>. </p>
<p>If no object for that type exists, 0 is returned. If there are several levels with objects of that type, -1 is returned. </p>

</div>
</div>
<a class="anchor" id="gaea7c64dd59467f5201ba87712710b14d"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">HWLOC_DECLSPEC int hwloc_get_type_depth </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00052.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td>
          <td class="paramname"><em>type</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Returns the depth of objects of type <code>type</code>. </p>
<p>If no object of this type is present on the underlying architecture, or if the OS doesn't provide this kind of information, the function returns HWLOC_TYPE_DEPTH_UNKNOWN.</p>
<p>If type is absent but a similar type is acceptable, see also <a class="el" href="a00064.php#ga081be77905201e9f42318e9974456b45" title="Returns the depth of objects of type type or below. ">hwloc_get_type_or_below_depth()</a> and <a class="el" href="a00064.php#ga62a3f401854c209605c90079700f4bc5" title="Returns the depth of objects of type type or above. ">hwloc_get_type_or_above_depth()</a>.</p>
<p>If some objects of the given type exist in different levels, for instance L1 and L2 caches, or L1i and L1d caches, the function returns HWLOC_TYPE_DEPTH_MULTIPLE. See <a class="el" href="a00069.php#gac3cfbb68829b606e61ab039f142f29a0" title="Find the depth of cache objects matching cache depth and type. ">hwloc_get_cache_type_depth()</a> in <a class="el" href="a00038_source.php" title="High-level hwloc traversal helpers. ">hwloc/helper.h</a> to better handle this case.</p>
<p>If an I/O object type is given, the function returns a virtual value because I/O objects are stored in special levels that are not CPU-related. This virtual depth may be passed to other hwloc functions such as <a class="el" href="a00059.php#gaedd78240b0c1108355586a268ec5a697" title="Returns the topology object at logical index idx from depth depth. ">hwloc_get_obj_by_depth()</a> but it should not be considered as an actual depth by the application. In particular, it should not be compared with any other object depth or with the entire topology depth. </p>

</div>
</div>
<a class="anchor" id="ga8c30b0cec55074eb3ed34e4f2a1a9937"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">HWLOC_DECLSPEC unsigned hwloc_topology_get_depth </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> __hwloc_restrict&#160;</td>
          <td class="paramname"><em>topology</em>)</td><td></td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the depth of the hierarchical tree of objects. </p>
<p>This is the depth of HWLOC_OBJ_PU objects plus one. </p>

</div>
</div>
<a class="anchor" id="ga4f368cb8f2c69b8c8086a6226f12d1bd"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">HWLOC_DECLSPEC unsigned long hwloc_topology_get_flags </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>)</td><td></td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get OR'ed flags of a topology. </p>
<p>Get the OR'ed set of <a class="el" href="a00055.php#gada025d3ec20b4b420f8038d23d6e7bde" title="Flags to be set onto a topology context before load. ">hwloc_topology_flags_e</a> of a topology.</p>
<dl class="section return"><dt>Returns</dt><dd>the flags previously set with <a class="el" href="a00055.php#ga6d11e53db143ac39c32cdb3912b71f99" title="Set OR&#39;ed flags to non-yet-loaded topology. ">hwloc_topology_set_flags()</a>. </dd></dl>

</div>
</div>
<a class="anchor" id="ga0d109e33fc7990f62f665d336e5e5111"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">HWLOC_DECLSPEC int hwloc_topology_is_thissystem </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> __hwloc_restrict&#160;</td>
          <td class="paramname"><em>topology</em>)</td><td></td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Does the topology context come from this system? </p>
<dl class="section return"><dt>Returns</dt><dd>1 if this topology context was built using the system running this program. </dd>
<dd>
0 instead (for instance if using another file-system root, a XML topology file, or a synthetic topology). </dd></dl>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
