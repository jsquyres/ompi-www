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
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#enum-members">Enumerations</a> &#124;
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">Modifying a loaded Topology</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="enum-members"></a>
Enumerations</h2></td></tr>
<tr class="memitem:ga9d80f08eb25b7ac22f1b998dc8bf521f"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00082.php#ga9d80f08eb25b7ac22f1b998dc8bf521f">hwloc_restrict_flags_e</a> { <a class="el" href="a00082.php#gga9d80f08eb25b7ac22f1b998dc8bf521fa4d18407f5520793b50b9e892f5bb55d1">HWLOC_RESTRICT_FLAG_ADAPT_DISTANCES</a>, 
<a class="el" href="a00082.php#gga9d80f08eb25b7ac22f1b998dc8bf521fa699969227a09bbc1a7de51dc9fb7be4b">HWLOC_RESTRICT_FLAG_ADAPT_MISC</a>, 
<a class="el" href="a00082.php#gga9d80f08eb25b7ac22f1b998dc8bf521faa95d6985e36ec1e55f68b210297a85cb">HWLOC_RESTRICT_FLAG_ADAPT_IO</a>
 }</td></tr>
<tr class="separator:ga9d80f08eb25b7ac22f1b998dc8bf521f"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ga017a9ba16d554326c6e3812d545d7230"><td class="memItemLeft" align="right" valign="top">HWLOC_DECLSPEC <a class="el" href="a00075.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00082.php#ga017a9ba16d554326c6e3812d545d7230">hwloc_topology_insert_misc_object_by_cpuset</a> (<a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00073.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> cpuset, const char *name)</td></tr>
<tr class="separator:ga017a9ba16d554326c6e3812d545d7230"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gadacd7a3d21220fbb30c3256d8b22a294"><td class="memItemLeft" align="right" valign="top">HWLOC_DECLSPEC <a class="el" href="a00075.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00082.php#gadacd7a3d21220fbb30c3256d8b22a294">hwloc_topology_insert_misc_object_by_parent</a> (<a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00075.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> parent, const char *name)</td></tr>
<tr class="separator:gadacd7a3d21220fbb30c3256d8b22a294"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gad75fa918e3eb54663bdeab25ed89b648"><td class="memItemLeft" align="right" valign="top">HWLOC_DECLSPEC int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00082.php#gad75fa918e3eb54663bdeab25ed89b648">hwloc_topology_restrict</a> (<a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> __hwloc_restrict topology, <a class="el" href="a00073.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> cpuset, unsigned long flags)</td></tr>
<tr class="separator:gad75fa918e3eb54663bdeab25ed89b648"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gaad1fc9486d7aa710bd2ce06a49c35fef"><td class="memItemLeft" align="right" valign="top">HWLOC_DECLSPEC int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00082.php#gaad1fc9486d7aa710bd2ce06a49c35fef">hwloc_topology_dup</a> (<a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> *newtopology, <a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> oldtopology)</td></tr>
<tr class="separator:gaad1fc9486d7aa710bd2ce06a49c35fef"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<h2 class="groupheader">Enumeration Type Documentation</h2>
<a class="anchor" id="ga9d80f08eb25b7ac22f1b998dc8bf521f"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="a00082.php#ga9d80f08eb25b7ac22f1b998dc8bf521f">hwloc_restrict_flags_e</a></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Flags to be given to <a class="el" href="a00082.php#gad75fa918e3eb54663bdeab25ed89b648" title="Restrict the topology to the given CPU set. ">hwloc_topology_restrict()</a>. </p>
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><em><a class="anchor" id="gga9d80f08eb25b7ac22f1b998dc8bf521fa4d18407f5520793b50b9e892f5bb55d1"></a>HWLOC_RESTRICT_FLAG_ADAPT_DISTANCES</em>&#160;</td><td class="fielddoc">
<p>Adapt distance matrices according to objects being removed during restriction. If this flag is not set, distance matrices are removed. </p>
</td></tr>
<tr><td class="fieldname"><em><a class="anchor" id="gga9d80f08eb25b7ac22f1b998dc8bf521fa699969227a09bbc1a7de51dc9fb7be4b"></a>HWLOC_RESTRICT_FLAG_ADAPT_MISC</em>&#160;</td><td class="fielddoc">
<p>Move Misc objects to ancestors if their parents are removed during restriction. If this flag is not set, Misc objects are removed when their parents are removed. </p>
</td></tr>
<tr><td class="fieldname"><em><a class="anchor" id="gga9d80f08eb25b7ac22f1b998dc8bf521faa95d6985e36ec1e55f68b210297a85cb"></a>HWLOC_RESTRICT_FLAG_ADAPT_IO</em>&#160;</td><td class="fielddoc">
<p>Move I/O objects to ancestors if their parents are removed during restriction. If this flag is not set, I/O devices and bridges are removed when their parents are removed. </p>
</td></tr>
</table>

</div>
</div>
<h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="gaad1fc9486d7aa710bd2ce06a49c35fef"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">HWLOC_DECLSPEC int hwloc_topology_dup </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> *&#160;</td>
          <td class="paramname"><em>newtopology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>oldtopology</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Duplicate a topology. </p>
<p>The entire topology structure as well as its objects are duplicated into a new one.</p>
<p>This is useful for keeping a backup while modifying a topology. </p>

</div>
</div>
<a class="anchor" id="ga017a9ba16d554326c6e3812d545d7230"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">HWLOC_DECLSPEC <a class="el" href="a00075.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_topology_insert_misc_object_by_cpuset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00073.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>cpuset</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const char *&#160;</td>
          <td class="paramname"><em>name</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Add a MISC object to the topology. </p>
<p>A new MISC object will be created and inserted into the topology at the position given by bitmap <code>cpuset</code>. This offers a way to add new intermediate levels to the topology hierarchy.</p>
<p><code>cpuset</code> and <code>name</code> will be copied to setup the new object attributes.</p>
<dl class="section return"><dt>Returns</dt><dd>the newly-created object. </dd>
<dd>
<code>NULL</code> if the insertion conflicts with the existing topology tree.</dd></dl>
<dl class="section note"><dt>Note</dt><dd>If <code>name</code> contains some non-printable characters, they will be dropped when exporting to XML, see <a class="el" href="a00084.php#ga45578d725c66865cfef31d0585dcff70" title="Export the topology into an XML file. ">hwloc_topology_export_xml()</a>. </dd></dl>

</div>
</div>
<a class="anchor" id="gadacd7a3d21220fbb30c3256d8b22a294"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">HWLOC_DECLSPEC <a class="el" href="a00075.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_topology_insert_misc_object_by_parent </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00075.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>parent</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const char *&#160;</td>
          <td class="paramname"><em>name</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Add a MISC object as a leaf of the topology. </p>
<p>A new MISC object will be created and inserted into the topology at the position given by parent. It is appended to the list of existing children, without ever adding any intermediate hierarchy level. This is useful for annotating the topology without actually changing the hierarchy.</p>
<p><code>name</code> will be copied to the setup the new object attributes. However, the new leaf object will not have any <code>cpuset</code>.</p>
<dl class="section return"><dt>Returns</dt><dd>the newly-created object</dd></dl>
<dl class="section note"><dt>Note</dt><dd>If <code>name</code> contains some non-printable characters, they will be dropped when exporting to XML, see <a class="el" href="a00084.php#ga45578d725c66865cfef31d0585dcff70" title="Export the topology into an XML file. ">hwloc_topology_export_xml()</a>. </dd></dl>

</div>
</div>
<a class="anchor" id="gad75fa918e3eb54663bdeab25ed89b648"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">HWLOC_DECLSPEC int hwloc_topology_restrict </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> __hwloc_restrict&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00073.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>cpuset</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned long&#160;</td>
          <td class="paramname"><em>flags</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Restrict the topology to the given CPU set. </p>
<p>Topology <code>topology</code> is modified so as to remove all objects that are not included (or partially included) in the CPU set <code>cpuset</code>. All objects CPU and node sets are restricted accordingly.</p>
<p><code>flags</code> is a OR'ed set of <a class="el" href="a00082.php#ga9d80f08eb25b7ac22f1b998dc8bf521f" title="Flags to be given to hwloc_topology_restrict(). ">hwloc_restrict_flags_e</a>.</p>
<dl class="section note"><dt>Note</dt><dd>This call may not be reverted by restricting back to a larger cpuset. Once dropped during restriction, objects may not be brought back, except by loading another topology with <a class="el" href="a00076.php#ga91e2e6427b95fb7339c99dbbef996e71" title="Build the actual topology. ">hwloc_topology_load()</a>.</dd></dl>
<dl class="section return"><dt>Returns</dt><dd>0 on success.</dd>
<dd>
-1 with errno set to EINVAL if the input cpuset is invalid. The topology is not modified in this case.</dd>
<dd>
-1 with errno set to ENOMEM on failure to allocate internal data. The topology is reinitialized in this case. It should be either destroyed with <a class="el" href="a00076.php#ga6040925d3ee4bbb2647f2a321aca5f4b" title="Terminate and free a topology context. ">hwloc_topology_destroy()</a> or configured and loaded again. </dd></dl>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
