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
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<h1>Finding Objects Inside a CPU set</h1>  </div>
</div>
<div class="contents">
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="func-members"></a>
Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__helper__find__inside.php#gabcd5fa81a95fa5335950cae092277d5b">hwloc_get_first_largest_obj_inside_cpuset</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__sets.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Get the first largest object included in the given cpuset <code>set</code>.  <a href="#gabcd5fa81a95fa5335950cae092277d5b"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__helper__find__inside.php#gaab04c89623662e63a48ed2cd48eb601c">hwloc_get_largest_objs_inside_cpuset</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__sets.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set, <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> *restrict objs, int max)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Get the set of largest objects covering exactly a given cpuset <code>set</code>.  <a href="#gaab04c89623662e63a48ed2cd48eb601c"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__helper__find__inside.php#ga8af256c2572f16520f95440b884c1bd6">hwloc_get_next_obj_inside_cpuset_by_depth</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__sets.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set, unsigned depth, <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> prev)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Return the next object at depth <code>depth</code> included in CPU set <code>set</code>.  <a href="#ga8af256c2572f16520f95440b884c1bd6"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__helper__find__inside.php#ga934e7ecd68b33403e0c0be779d9ed1e6">hwloc_get_next_obj_inside_cpuset_by_type</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__sets.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set, <a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type, <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> prev)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Return the next object of type <code>type</code> included in CPU set <code>set</code>.  <a href="#ga934e7ecd68b33403e0c0be779d9ed1e6"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline <br class="typebreak"/>
<a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> <br class="typebreak"/>
&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__helper__find__inside.php#ga20703980008f82379f98f56857611a1a">hwloc_get_obj_inside_cpuset_by_depth</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__sets.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set, unsigned depth, unsigned idx)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Return the <code>index</code> -th object at depth <code>depth</code> included in CPU set <code>set</code>.  <a href="#ga20703980008f82379f98f56857611a1a"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline <br class="typebreak"/>
<a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> <br class="typebreak"/>
&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__helper__find__inside.php#ga50a80a0021e5843d968c3b97aebaad9b">hwloc_get_obj_inside_cpuset_by_type</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__sets.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set, <a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type, unsigned idx)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Return the <code>idx</code> -th object of type <code>type</code> included in CPU set <code>set</code>.  <a href="#ga50a80a0021e5843d968c3b97aebaad9b"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline unsigned <br class="typebreak"/>
&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__helper__find__inside.php#ga6807db0012369efe19b8d3dcee235493">hwloc_get_nbobjs_inside_cpuset_by_depth</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__sets.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set, unsigned depth)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Return the number of objects at depth <code>depth</code> included in CPU set <code>set</code>.  <a href="#ga6807db0012369efe19b8d3dcee235493"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline int <br class="typebreak"/>
&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__helper__find__inside.php#ga72c5bc4317a4c3938e32447b769813a0">hwloc_get_nbobjs_inside_cpuset_by_type</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__sets.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set, <a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Return the number of objects of type <code>type</code> included in CPU set <code>set</code>.  <a href="#ga72c5bc4317a4c3938e32447b769813a0"></a><br/></td></tr>
</table>
<hr/><h2>Function Documentation</h2>
<a class="anchor" id="gabcd5fa81a95fa5335950cae092277d5b"></a><!-- doxytag: member="helper.h::hwloc_get_first_largest_obj_inside_cpuset" ref="gabcd5fa81a95fa5335950cae092277d5b" args="(hwloc_topology_t topology, hwloc_const_cpuset_t set)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> hwloc_get_first_largest_obj_inside_cpuset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&nbsp;</td>
          <td class="paramname"> <em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="group__hwlocality__sets.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&nbsp;</td>
          <td class="paramname"> <em>set</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Get the first largest object included in the given cpuset <code>set</code>. </p>
<dl class="return"><dt><b>Returns:</b></dt><dd>the first object that is included in <code>set</code> and whose parent is not.</dd></dl>
<p>This is convenient for iterating over all largest objects within a CPU set by doing a loop getting the first largest object and clearing its CPU set from the remaining CPU set. </p>

</div>
</div>
<a class="anchor" id="gaab04c89623662e63a48ed2cd48eb601c"></a><!-- doxytag: member="helper.h::hwloc_get_largest_objs_inside_cpuset" ref="gaab04c89623662e63a48ed2cd48eb601c" args="(hwloc_topology_t topology, hwloc_const_cpuset_t set, hwloc_obj_t *restrict objs, int max)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_get_largest_objs_inside_cpuset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&nbsp;</td>
          <td class="paramname"> <em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="group__hwlocality__sets.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&nbsp;</td>
          <td class="paramname"> <em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> *restrict&nbsp;</td>
          <td class="paramname"> <em>objs</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&nbsp;</td>
          <td class="paramname"> <em>max</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Get the set of largest objects covering exactly a given cpuset <code>set</code>. </p>
<dl class="return"><dt><b>Returns:</b></dt><dd>the number of objects returned in <code>objs</code>. </dd></dl>

</div>
</div>
<a class="anchor" id="ga6807db0012369efe19b8d3dcee235493"></a><!-- doxytag: member="helper.h::hwloc_get_nbobjs_inside_cpuset_by_depth" ref="ga6807db0012369efe19b8d3dcee235493" args="(hwloc_topology_t topology, hwloc_const_cpuset_t set, unsigned depth)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline unsigned  hwloc_get_nbobjs_inside_cpuset_by_depth </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&nbsp;</td>
          <td class="paramname"> <em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="group__hwlocality__sets.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&nbsp;</td>
          <td class="paramname"> <em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&nbsp;</td>
          <td class="paramname"> <em>depth</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Return the number of objects at depth <code>depth</code> included in CPU set <code>set</code>. </p>

</div>
</div>
<a class="anchor" id="ga72c5bc4317a4c3938e32447b769813a0"></a><!-- doxytag: member="helper.h::hwloc_get_nbobjs_inside_cpuset_by_type" ref="ga72c5bc4317a4c3938e32447b769813a0" args="(hwloc_topology_t topology, hwloc_const_cpuset_t set, hwloc_obj_type_t type)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline int  hwloc_get_nbobjs_inside_cpuset_by_type </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&nbsp;</td>
          <td class="paramname"> <em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="group__hwlocality__sets.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&nbsp;</td>
          <td class="paramname"> <em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&nbsp;</td>
          <td class="paramname"> <em>type</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Return the number of objects of type <code>type</code> included in CPU set <code>set</code>. </p>
<p>If no object for that type exists inside CPU set <code>set</code>, 0 is returned. If there are several levels with objects of that type inside CPU set <code>set</code>, -1 is returned. </p>

</div>
</div>
<a class="anchor" id="ga8af256c2572f16520f95440b884c1bd6"></a><!-- doxytag: member="helper.h::hwloc_get_next_obj_inside_cpuset_by_depth" ref="ga8af256c2572f16520f95440b884c1bd6" args="(hwloc_topology_t topology, hwloc_const_cpuset_t set, unsigned depth, hwloc_obj_t prev)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> hwloc_get_next_obj_inside_cpuset_by_depth </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&nbsp;</td>
          <td class="paramname"> <em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="group__hwlocality__sets.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&nbsp;</td>
          <td class="paramname"> <em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&nbsp;</td>
          <td class="paramname"> <em>depth</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="structhwloc__obj.php">hwloc_obj_t</a>&nbsp;</td>
          <td class="paramname"> <em>prev</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Return the next object at depth <code>depth</code> included in CPU set <code>set</code>. </p>
<p>If <code>prev</code> is <code>NULL</code>, return the first object at depth <code>depth</code> included in <code>set</code>. The next invokation should pass the previous return value in <code>prev</code> so as to obtain the next object in <code>set</code>. </p>

</div>
</div>
<a class="anchor" id="ga934e7ecd68b33403e0c0be779d9ed1e6"></a><!-- doxytag: member="helper.h::hwloc_get_next_obj_inside_cpuset_by_type" ref="ga934e7ecd68b33403e0c0be779d9ed1e6" args="(hwloc_topology_t topology, hwloc_const_cpuset_t set, hwloc_obj_type_t type, hwloc_obj_t prev)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> hwloc_get_next_obj_inside_cpuset_by_type </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&nbsp;</td>
          <td class="paramname"> <em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="group__hwlocality__sets.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&nbsp;</td>
          <td class="paramname"> <em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&nbsp;</td>
          <td class="paramname"> <em>type</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="structhwloc__obj.php">hwloc_obj_t</a>&nbsp;</td>
          <td class="paramname"> <em>prev</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Return the next object of type <code>type</code> included in CPU set <code>set</code>. </p>
<p>If there are multiple or no depth for given type, return <code>NULL</code> and let the caller fallback to <a class="el" href="group__hwlocality__helper__find__inside.php#ga8af256c2572f16520f95440b884c1bd6" title="Return the next object at depth depth included in CPU set set.">hwloc_get_next_obj_inside_cpuset_by_depth()</a>. </p>

</div>
</div>
<a class="anchor" id="ga20703980008f82379f98f56857611a1a"></a><!-- doxytag: member="helper.h::hwloc_get_obj_inside_cpuset_by_depth" ref="ga20703980008f82379f98f56857611a1a" args="(hwloc_topology_t topology, hwloc_const_cpuset_t set, unsigned depth, unsigned idx)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a>  hwloc_get_obj_inside_cpuset_by_depth </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&nbsp;</td>
          <td class="paramname"> <em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="group__hwlocality__sets.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&nbsp;</td>
          <td class="paramname"> <em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&nbsp;</td>
          <td class="paramname"> <em>depth</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&nbsp;</td>
          <td class="paramname"> <em>idx</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Return the <code>index</code> -th object at depth <code>depth</code> included in CPU set <code>set</code>. </p>

</div>
</div>
<a class="anchor" id="ga50a80a0021e5843d968c3b97aebaad9b"></a><!-- doxytag: member="helper.h::hwloc_get_obj_inside_cpuset_by_type" ref="ga50a80a0021e5843d968c3b97aebaad9b" args="(hwloc_topology_t topology, hwloc_const_cpuset_t set, hwloc_obj_type_t type, unsigned idx)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a>  hwloc_get_obj_inside_cpuset_by_type </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&nbsp;</td>
          <td class="paramname"> <em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="group__hwlocality__sets.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&nbsp;</td>
          <td class="paramname"> <em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&nbsp;</td>
          <td class="paramname"> <em>type</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&nbsp;</td>
          <td class="paramname"> <em>idx</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Return the <code>idx</code> -th object of type <code>type</code> included in CPU set <code>set</code>. </p>
<p>If there are multiple or no depth for given type, return <code>NULL</code> and let the caller fallback to <a class="el" href="group__hwlocality__helper__find__inside.php#ga20703980008f82379f98f56857611a1a" title="Return the index -th object at depth depth included in CPU set set.">hwloc_get_obj_inside_cpuset_by_depth()</a>. </p>

</div>
</div>
</div>
<?php
include_once("$topdir/includes/footer.inc");
