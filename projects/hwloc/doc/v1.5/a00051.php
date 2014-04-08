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
<!-- Generated by Doxygen 1.8.1.2 -->
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
<div class="title">Building Custom Topologies</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ga59ccf6a63cb23d63940e8b782059d9cb"><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00051.php#ga59ccf6a63cb23d63940e8b782059d9cb">hwloc_custom_insert_topology</a> (<a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> newtopology, <a class="el" href="a00042.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> newparent, <a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> oldtopology, <a class="el" href="a00042.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> oldroot)</td></tr>
<tr class="memitem:gac1037fe389bfa7c2bf0e3739b7e20844"><td class="memItemLeft" align="right" valign="top"> <a class="el" href="a00042.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00051.php#gac1037fe389bfa7c2bf0e3739b7e20844">hwloc_custom_insert_group_object_by_parent</a> (<a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00042.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> parent, int groupdepth)</td></tr>
</table>
<a name="details" id="details"></a><h2>Detailed Description</h2>
<p>A custom topology may be initialized by calling <a class="el" href="a00044.php#ga12024fec46f9368fb8fc5c624089c5ec" title="Prepare the topology for custom assembly.">hwloc_topology_set_custom()</a> after <a class="el" href="a00043.php#ga5c2d6f476af87005c7bd0811d4548b9f" title="Allocate a topology context.">hwloc_topology_init()</a>. It may then be modified by inserting objects or entire topologies. Once done assembling, <a class="el" href="a00043.php#ga91e2e6427b95fb7339c99dbbef996e71" title="Build the actual topology.">hwloc_topology_load()</a> should be invoked as usual to finalize the topology. </p>
<h2>Function Documentation</h2>
<a class="anchor" id="gac1037fe389bfa7c2bf0e3739b7e20844"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> <a class="el" href="a00042.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_custom_insert_group_object_by_parent </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00042.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>parent</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>groupdepth</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Insert a new group object inside a custom topology. </p>
<p>An object with type <a class="el" href="a00041.php#ggacd37bb612667dc437d66bfb175a8dc55a5269ef95be72f88465559d35c9b7ad56" title="Group objects. Objects which do not fit in the above but are detected by hwloc and are useful to take...">HWLOC_OBJ_GROUP</a> is inserted as a new child of object <code>parent</code>.</p>
<p><code>groupdepth</code> is the depth attribute to be given to the new object. It may for instance be 0 for top-level groups, 1 for their children, and so on.</p>
<p>The custom topology <code>newtopology</code> must have been prepared with <a class="el" href="a00044.php#ga12024fec46f9368fb8fc5c624089c5ec" title="Prepare the topology for custom assembly.">hwloc_topology_set_custom()</a> and not loaded with <a class="el" href="a00043.php#ga91e2e6427b95fb7339c99dbbef996e71" title="Build the actual topology.">hwloc_topology_load()</a> yet.</p>
<p><code>parent</code> may be either the root of <code>topology</code> or an object that was added earlier through <a class="el" href="a00051.php#gac1037fe389bfa7c2bf0e3739b7e20844" title="Insert a new group object inside a custom topology.">hwloc_custom_insert_group_object_by_parent()</a>. </p>

</div>
</div>
<a class="anchor" id="ga59ccf6a63cb23d63940e8b782059d9cb"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_custom_insert_topology </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>newtopology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00042.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>newparent</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>oldtopology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00042.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>oldroot</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Insert an existing topology inside a custom topology. </p>
<p>Duplicate the existing topology <code>oldtopology</code> inside a new custom topology <code>newtopology</code> as a leaf of object <code>newparent</code>.</p>
<p>If <code>oldroot</code> is not <code>NULL</code>, duplicate <code>oldroot</code> and all its children instead of the entire <code>oldtopology</code>. Passing the root object of <code>oldtopology</code> in <code>oldroot</code> is equivalent to passing <code>NULL</code>.</p>
<p>The custom topology <code>newtopology</code> must have been prepared with <a class="el" href="a00044.php#ga12024fec46f9368fb8fc5c624089c5ec" title="Prepare the topology for custom assembly.">hwloc_topology_set_custom()</a> and not loaded with <a class="el" href="a00043.php#ga91e2e6427b95fb7339c99dbbef996e71" title="Build the actual topology.">hwloc_topology_load()</a> yet.</p>
<p><code>newparent</code> may be either the root of <code>newtopology</code> or an object that was added through <a class="el" href="a00051.php#gac1037fe389bfa7c2bf0e3739b7e20844" title="Insert a new group object inside a custom topology.">hwloc_custom_insert_group_object_by_parent()</a>. </p>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
