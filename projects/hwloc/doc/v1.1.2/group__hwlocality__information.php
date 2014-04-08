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
<!-- Generated by Doxygen 1.7.3 -->
  <div id="navrow1" class="tabs">
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
<h1>Get some Topology Information</h1>  </div>
</div>
<div class="contents">
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="enum-members"></a>
Enumerations</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__information.php#gaf4e663cf42bbe20756b849c6293ef575">hwloc_get_type_depth_e</a> { <a class="el" href="group__hwlocality__information.php#ggaf4e663cf42bbe20756b849c6293ef575a0565ab92ab72cb0cec91e23003294aad">HWLOC_TYPE_DEPTH_UNKNOWN</a>, 
<a class="el" href="group__hwlocality__information.php#ggaf4e663cf42bbe20756b849c6293ef575ae99465995cacde6c210d5fc2e409798c">HWLOC_TYPE_DEPTH_MULTIPLE</a>
 }</td></tr>
<tr><td colspan="2"><h2><a name="func-members"></a>
Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> unsigned&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__information.php#ga8c30b0cec55074eb3ed34e4f2a1a9937">hwloc_topology_get_depth</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict topology) </td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the depth of the hierachical tree of objects.  <a href="#ga8c30b0cec55074eb3ed34e4f2a1a9937"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__information.php#gaea7c64dd59467f5201ba87712710b14d">hwloc_get_type_depth</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns the depth of objects of type <code>type</code>.  <a href="#gaea7c64dd59467f5201ba87712710b14d"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> <a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__information.php#gadd4964764ae7e49231065d58a553fd31">hwloc_get_depth_type</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, unsigned depth) </td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns the type of objects at depth <code>depth</code>.  <a href="#gadd4964764ae7e49231065d58a553fd31"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> unsigned&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__information.php#ga20cfe2456f4cfdd789c9aca6d2fdd69f">hwloc_get_nbobjs_by_depth</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, unsigned depth) </td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns the width of level at depth <code>depth</code>.  <a href="#ga20cfe2456f4cfdd789c9aca6d2fdd69f"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline int <br class="typebreak"/>
&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__information.php#ga0131ab1051011fabfa69d7c1853e716c">hwloc_get_nbobjs_by_type</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns the width of level type <code>type</code>.  <a href="#ga0131ab1051011fabfa69d7c1853e716c"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__information.php#ga0d109e33fc7990f62f665d336e5e5111">hwloc_topology_is_thissystem</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict topology) </td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Does the topology context come from this system?  <a href="#ga0d109e33fc7990f62f665d336e5e5111"></a><br/></td></tr>
</table>
<hr/><h2>Enumeration Type Documentation</h2>
<a class="anchor" id="gaf4e663cf42bbe20756b849c6293ef575"></a><!-- doxytag: member="hwloc.h::hwloc_get_type_depth_e" ref="gaf4e663cf42bbe20756b849c6293ef575" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="group__hwlocality__information.php#gaf4e663cf42bbe20756b849c6293ef575">hwloc_get_type_depth_e</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">
<dl><dt><b>Enumerator: </b></dt><dd><table border="0" cellspacing="2" cellpadding="0">
<tr><td valign="top"><em><a class="anchor" id="ggaf4e663cf42bbe20756b849c6293ef575a0565ab92ab72cb0cec91e23003294aad"></a><!-- doxytag: member="HWLOC_TYPE_DEPTH_UNKNOWN" ref="ggaf4e663cf42bbe20756b849c6293ef575a0565ab92ab72cb0cec91e23003294aad" args="" -->HWLOC_TYPE_DEPTH_UNKNOWN</em>&nbsp;</td><td>
<p>No object of given type exists in the topology. </p>
</td></tr>
<tr><td valign="top"><em><a class="anchor" id="ggaf4e663cf42bbe20756b849c6293ef575ae99465995cacde6c210d5fc2e409798c"></a><!-- doxytag: member="HWLOC_TYPE_DEPTH_MULTIPLE" ref="ggaf4e663cf42bbe20756b849c6293ef575ae99465995cacde6c210d5fc2e409798c" args="" -->HWLOC_TYPE_DEPTH_MULTIPLE</em>&nbsp;</td><td>
<p>Objects of given type exist at different depth in the topology. </p>
</td></tr>
</table>
</dd>
</dl>

</div>
</div>
<hr/><h2>Function Documentation</h2>
<a class="anchor" id="gadd4964764ae7e49231065d58a553fd31"></a><!-- doxytag: member="hwloc.h::hwloc_get_depth_type" ref="gadd4964764ae7e49231065d58a553fd31" args="(hwloc_topology_t topology, unsigned depth) " -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> <a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> hwloc_get_depth_type </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
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
</div>
<div class="memdoc">

<p>Returns the type of objects at depth <code>depth</code>. </p>
<dl class="return"><dt><b>Returns:</b></dt><dd>-1 if depth <code>depth</code> does not exist. </dd></dl>

</div>
</div>
<a class="anchor" id="ga20cfe2456f4cfdd789c9aca6d2fdd69f"></a><!-- doxytag: member="hwloc.h::hwloc_get_nbobjs_by_depth" ref="ga20cfe2456f4cfdd789c9aca6d2fdd69f" args="(hwloc_topology_t topology, unsigned depth) " -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> unsigned hwloc_get_nbobjs_by_depth </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
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
</div>
<div class="memdoc">

<p>Returns the width of level at depth <code>depth</code>. </p>

</div>
</div>
<a class="anchor" id="ga0131ab1051011fabfa69d7c1853e716c"></a><!-- doxytag: member="hwloc.h::hwloc_get_nbobjs_by_type" ref="ga0131ab1051011fabfa69d7c1853e716c" args="(hwloc_topology_t topology, hwloc_obj_type_t type)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline int  hwloc_get_nbobjs_by_type </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td>
          <td class="paramname"><em>type</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Returns the width of level type <code>type</code>. </p>
<p>If no object for that type exists, 0 is returned. If there are several levels with objects of that type, -1 is returned. </p>

</div>
</div>
<a class="anchor" id="gaea7c64dd59467f5201ba87712710b14d"></a><!-- doxytag: member="hwloc.h::hwloc_get_type_depth" ref="gaea7c64dd59467f5201ba87712710b14d" args="(hwloc_topology_t topology, hwloc_obj_type_t type)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_get_type_depth </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td>
          <td class="paramname"><em>type</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Returns the depth of objects of type <code>type</code>. </p>
<p>If no object of this type is present on the underlying architecture, or if the OS doesn't provide this kind of information, the function returns HWLOC_TYPE_DEPTH_UNKNOWN.</p>
<p>If type is absent but a similar type is acceptable, see also <a class="el" href="group__hwlocality__helper__types.php#ga0ffafb4c0ae13b9a7541ca820ca34883" title="Returns the depth of objects of type type or below.">hwloc_get_type_or_below_depth()</a> and <a class="el" href="group__hwlocality__helper__types.php#ga24b9cd5917fcebac6e45ae38d0a6cda4" title="Returns the depth of objects of type type or above.">hwloc_get_type_or_above_depth()</a>.</p>
<p>If some objects of the given type exist in different levels, for instance L1 and L2 caches, the function returns HWLOC_TYPE_DEPTH_MULTIPLE. </p>

</div>
</div>
<a class="anchor" id="ga8c30b0cec55074eb3ed34e4f2a1a9937"></a><!-- doxytag: member="hwloc.h::hwloc_topology_get_depth" ref="ga8c30b0cec55074eb3ed34e4f2a1a9937" args="(hwloc_topology_t restrict topology) " -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> unsigned hwloc_topology_get_depth </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict&#160;</td>
          <td class="paramname"><em>topology</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Get the depth of the hierachical tree of objects. </p>
<p>This is the depth of HWLOC_OBJ_PU objects plus one. </p>

</div>
</div>
<a class="anchor" id="ga0d109e33fc7990f62f665d336e5e5111"></a><!-- doxytag: member="hwloc.h::hwloc_topology_is_thissystem" ref="ga0d109e33fc7990f62f665d336e5e5111" args="(hwloc_topology_t restrict topology) " -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_topology_is_thissystem </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict&#160;</td>
          <td class="paramname"><em>topology</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Does the topology context come from this system? </p>
<dl class="return"><dt><b>Returns:</b></dt><dd>1 if this topology context was built using the system running this program. </dd>
<dd>
0 instead (for instance if using another file-system root, a XML topology file, or a synthetic topology). </dd></dl>

</div>
</div>
</div>
<?php
include_once("$topdir/includes/footer.inc");
