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
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#typedef-members">Typedefs</a> &#124;
<a href="#enum-members">Enumerations</a> &#124;
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">Topology Object Types</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="typedef-members"></a>
Typedefs</h2></td></tr>
<tr class="memitem:ga0a947e8c5adcc729b126bd09c01a0153"><td class="memItemLeft" align="right" valign="top">typedef enum <br class="typebreak"/>
<a class="el" href="a00041.php#ga48a4803c72574191d7ead1c62aaf9860">hwloc_obj_bridge_type_e</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00041.php#ga0a947e8c5adcc729b126bd09c01a0153">hwloc_obj_bridge_type_t</a></td></tr>
<tr class="separator:ga0a947e8c5adcc729b126bd09c01a0153"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga90c1e82a60ba5871d07645169e636987"><td class="memItemLeft" align="right" valign="top">typedef enum <a class="el" href="a00041.php#ga64f5d539df299c97ae80ce53fc4b56c0">hwloc_obj_osdev_type_e</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00041.php#ga90c1e82a60ba5871d07645169e636987">hwloc_obj_osdev_type_t</a></td></tr>
<tr class="separator:ga90c1e82a60ba5871d07645169e636987"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="enum-members"></a>
Enumerations</h2></td></tr>
<tr class="memitem:gacd37bb612667dc437d66bfb175a8dc55"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00041.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> { <br/>
&#160;&#160;<a class="el" href="a00041.php#ggacd37bb612667dc437d66bfb175a8dc55a3aa1b842d1fd4207ebce171f95a244ec">HWLOC_OBJ_SYSTEM</a>, 
<a class="el" href="a00041.php#ggacd37bb612667dc437d66bfb175a8dc55a3f4e83ffc4a259354959ae8a9eaa2a80">HWLOC_OBJ_MACHINE</a>, 
<a class="el" href="a00041.php#ggacd37bb612667dc437d66bfb175a8dc55aaf0964881117bdedf1a5e9332cd120dd">HWLOC_OBJ_NODE</a>, 
<a class="el" href="a00041.php#ggacd37bb612667dc437d66bfb175a8dc55a1ac6e07775ae4324b3fe9dbd72c785ec">HWLOC_OBJ_SOCKET</a>, 
<br/>
&#160;&#160;<a class="el" href="a00041.php#ggacd37bb612667dc437d66bfb175a8dc55a56ee0b7eca88f363b75b34fdde8c9ddc">HWLOC_OBJ_CACHE</a>, 
<a class="el" href="a00041.php#ggacd37bb612667dc437d66bfb175a8dc55ac793958f330bca371aa1535de8aff45f">HWLOC_OBJ_CORE</a>, 
<a class="el" href="a00041.php#ggacd37bb612667dc437d66bfb175a8dc55abca6887e80cb291353b0a0c1da83f661">HWLOC_OBJ_PU</a>, 
<a class="el" href="a00041.php#ggacd37bb612667dc437d66bfb175a8dc55a5269ef95be72f88465559d35c9b7ad56">HWLOC_OBJ_GROUP</a>, 
<br/>
&#160;&#160;<a class="el" href="a00041.php#ggacd37bb612667dc437d66bfb175a8dc55a19f8a6953fa91efc76bcbcdf2d22de4d">HWLOC_OBJ_MISC</a>, 
<a class="el" href="a00041.php#ggacd37bb612667dc437d66bfb175a8dc55a6825f10895fea60aca7a6ba9fe273db0">HWLOC_OBJ_BRIDGE</a>, 
<a class="el" href="a00041.php#ggacd37bb612667dc437d66bfb175a8dc55a5d8117a54df1fbd3606ab19e42cb0ea9">HWLOC_OBJ_PCI_DEVICE</a>, 
<a class="el" href="a00041.php#ggacd37bb612667dc437d66bfb175a8dc55a51e7280240fd9f25589cbbe538bdb075">HWLOC_OBJ_OS_DEVICE</a>, 
<br/>
&#160;&#160;<a class="el" href="a00041.php#ggacd37bb612667dc437d66bfb175a8dc55addb5f843e1812445a84e6b2a844b1ebc">HWLOC_OBJ_TYPE_MAX</a>
<br/>
 }</td></tr>
<tr class="separator:gacd37bb612667dc437d66bfb175a8dc55"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga48a4803c72574191d7ead1c62aaf9860"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00041.php#ga48a4803c72574191d7ead1c62aaf9860">hwloc_obj_bridge_type_e</a> { <a class="el" href="a00041.php#gga48a4803c72574191d7ead1c62aaf9860a2c7660f3864ad2810c1e72aad285e574">HWLOC_OBJ_BRIDGE_HOST</a>, 
<a class="el" href="a00041.php#gga48a4803c72574191d7ead1c62aaf9860a8f3b4cecf3dab6073d74696d10863c60">HWLOC_OBJ_BRIDGE_PCI</a>
 }</td></tr>
<tr class="separator:ga48a4803c72574191d7ead1c62aaf9860"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga64f5d539df299c97ae80ce53fc4b56c0"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00041.php#ga64f5d539df299c97ae80ce53fc4b56c0">hwloc_obj_osdev_type_e</a> { <br/>
&#160;&#160;<a class="el" href="a00041.php#gga64f5d539df299c97ae80ce53fc4b56c0a689b0488c3c0d08d116751c6b9cb8871">HWLOC_OBJ_OSDEV_BLOCK</a>, 
<a class="el" href="a00041.php#gga64f5d539df299c97ae80ce53fc4b56c0aa3a09798ef2836abb236dc3a645ffc90">HWLOC_OBJ_OSDEV_GPU</a>, 
<a class="el" href="a00041.php#gga64f5d539df299c97ae80ce53fc4b56c0ab715d81155f771573c8682dffc65021b">HWLOC_OBJ_OSDEV_NETWORK</a>, 
<a class="el" href="a00041.php#gga64f5d539df299c97ae80ce53fc4b56c0a52157d03694fdae82dddd57ca8c973b6">HWLOC_OBJ_OSDEV_OPENFABRICS</a>, 
<br/>
&#160;&#160;<a class="el" href="a00041.php#gga64f5d539df299c97ae80ce53fc4b56c0a827ad1643360711a8b6c6af671366791">HWLOC_OBJ_OSDEV_DMA</a>
<br/>
 }</td></tr>
<tr class="separator:ga64f5d539df299c97ae80ce53fc4b56c0"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga46323568968005137c32f6a1cd405b74"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00041.php#ga46323568968005137c32f6a1cd405b74">hwloc_compare_types_e</a> { <a class="el" href="a00041.php#gga46323568968005137c32f6a1cd405b74a2f8297ea36eba46e7596e810a67298fb">HWLOC_TYPE_UNORDERED</a>
 }</td></tr>
<tr class="separator:ga46323568968005137c32f6a1cd405b74"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:gabd7da4f4ea12b420b8ecbde458b27805"><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00041.php#gabd7da4f4ea12b420b8ecbde458b27805">hwloc_compare_types</a> (<a class="el" href="a00041.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type1, <a class="el" href="a00041.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type2) </td></tr>
<tr class="separator:gabd7da4f4ea12b420b8ecbde458b27805"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<h2 class="groupheader">Typedef Documentation</h2>
<a class="anchor" id="ga0a947e8c5adcc729b126bd09c01a0153"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">typedef enum <a class="el" href="a00041.php#ga48a4803c72574191d7ead1c62aaf9860">hwloc_obj_bridge_type_e</a>  <a class="el" href="a00041.php#ga0a947e8c5adcc729b126bd09c01a0153">hwloc_obj_bridge_type_t</a></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Type of one side (upstream or downstream) of an I/O bridge. </p>

</div>
</div>
<a class="anchor" id="ga90c1e82a60ba5871d07645169e636987"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">typedef enum <a class="el" href="a00041.php#ga64f5d539df299c97ae80ce53fc4b56c0">hwloc_obj_osdev_type_e</a>  <a class="el" href="a00041.php#ga90c1e82a60ba5871d07645169e636987">hwloc_obj_osdev_type_t</a></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Type of a OS device. </p>

</div>
</div>
<h2 class="groupheader">Enumeration Type Documentation</h2>
<a class="anchor" id="ga46323568968005137c32f6a1cd405b74"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="a00041.php#ga46323568968005137c32f6a1cd405b74">hwloc_compare_types_e</a></td>
        </tr>
      </table>
</div><div class="memdoc">
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><em><a class="anchor" id="gga46323568968005137c32f6a1cd405b74a2f8297ea36eba46e7596e810a67298fb"></a>HWLOC_TYPE_UNORDERED</em>&nbsp;</td><td class="fielddoc">
<p>Value returned by hwloc_compare_types when types can not be compared. </p>
</td></tr>
</table>

</div>
</div>
<a class="anchor" id="ga48a4803c72574191d7ead1c62aaf9860"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="a00041.php#ga48a4803c72574191d7ead1c62aaf9860">hwloc_obj_bridge_type_e</a></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Type of one side (upstream or downstream) of an I/O bridge. </p>
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><em><a class="anchor" id="gga48a4803c72574191d7ead1c62aaf9860a2c7660f3864ad2810c1e72aad285e574"></a>HWLOC_OBJ_BRIDGE_HOST</em>&nbsp;</td><td class="fielddoc">
<p>Host-side of a bridge, only possible upstream. </p>
</td></tr>
<tr><td class="fieldname"><em><a class="anchor" id="gga48a4803c72574191d7ead1c62aaf9860a8f3b4cecf3dab6073d74696d10863c60"></a>HWLOC_OBJ_BRIDGE_PCI</em>&nbsp;</td><td class="fielddoc">
<p>PCI-side of a bridge. </p>
</td></tr>
</table>

</div>
</div>
<a class="anchor" id="ga64f5d539df299c97ae80ce53fc4b56c0"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="a00041.php#ga64f5d539df299c97ae80ce53fc4b56c0">hwloc_obj_osdev_type_e</a></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Type of a OS device. </p>
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><em><a class="anchor" id="gga64f5d539df299c97ae80ce53fc4b56c0a689b0488c3c0d08d116751c6b9cb8871"></a>HWLOC_OBJ_OSDEV_BLOCK</em>&nbsp;</td><td class="fielddoc">
<p>Operating system block device. For instance "sda" on Linux. </p>
</td></tr>
<tr><td class="fieldname"><em><a class="anchor" id="gga64f5d539df299c97ae80ce53fc4b56c0aa3a09798ef2836abb236dc3a645ffc90"></a>HWLOC_OBJ_OSDEV_GPU</em>&nbsp;</td><td class="fielddoc">
<p>Operating system GPU device. For instance the "card0" DRM device on Linux. </p>
</td></tr>
<tr><td class="fieldname"><em><a class="anchor" id="gga64f5d539df299c97ae80ce53fc4b56c0ab715d81155f771573c8682dffc65021b"></a>HWLOC_OBJ_OSDEV_NETWORK</em>&nbsp;</td><td class="fielddoc">
<p>Operating system network device. For instance the "eth0" interface on Linux. </p>
</td></tr>
<tr><td class="fieldname"><em><a class="anchor" id="gga64f5d539df299c97ae80ce53fc4b56c0a52157d03694fdae82dddd57ca8c973b6"></a>HWLOC_OBJ_OSDEV_OPENFABRICS</em>&nbsp;</td><td class="fielddoc">
<p>Operating system openfabrics device. For instance the "mlx4_0" InfiniBand HCA device on Linux. </p>
</td></tr>
<tr><td class="fieldname"><em><a class="anchor" id="gga64f5d539df299c97ae80ce53fc4b56c0a827ad1643360711a8b6c6af671366791"></a>HWLOC_OBJ_OSDEV_DMA</em>&nbsp;</td><td class="fielddoc">
<p>Operating system dma engine device. For instance the "dma0chan0" DMA channel on Linux. </p>
</td></tr>
</table>

</div>
</div>
<a class="anchor" id="gacd37bb612667dc437d66bfb175a8dc55"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="a00041.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Type of topology object. </p>
<dl class="section note"><dt>Note</dt><dd>Do not rely on the ordering or completeness of the values as new ones may be defined in the future! If you need to compare types, use <a class="el" href="a00041.php#gabd7da4f4ea12b420b8ecbde458b27805" title="Compare the depth of two object types.">hwloc_compare_types()</a> instead. </dd></dl>
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><em><a class="anchor" id="ggacd37bb612667dc437d66bfb175a8dc55a3aa1b842d1fd4207ebce171f95a244ec"></a>HWLOC_OBJ_SYSTEM</em>&nbsp;</td><td class="fielddoc">
<p>Whole system (may be a cluster of machines). The whole system that is accessible to hwloc. That may comprise several machines in SSI systems like Kerrighed. </p>
</td></tr>
<tr><td class="fieldname"><em><a class="anchor" id="ggacd37bb612667dc437d66bfb175a8dc55a3f4e83ffc4a259354959ae8a9eaa2a80"></a>HWLOC_OBJ_MACHINE</em>&nbsp;</td><td class="fielddoc">
<p>Machine. The typical root object type. A set of processors and memory with cache coherency. </p>
</td></tr>
<tr><td class="fieldname"><em><a class="anchor" id="ggacd37bb612667dc437d66bfb175a8dc55aaf0964881117bdedf1a5e9332cd120dd"></a>HWLOC_OBJ_NODE</em>&nbsp;</td><td class="fielddoc">
<p>NUMA node. A set of processors around memory which the processors can directly access. </p>
</td></tr>
<tr><td class="fieldname"><em><a class="anchor" id="ggacd37bb612667dc437d66bfb175a8dc55a1ac6e07775ae4324b3fe9dbd72c785ec"></a>HWLOC_OBJ_SOCKET</em>&nbsp;</td><td class="fielddoc">
<p>Socket, physical package, or chip. In the physical meaning, i.e. that you can add or remove physically. </p>
</td></tr>
<tr><td class="fieldname"><em><a class="anchor" id="ggacd37bb612667dc437d66bfb175a8dc55a56ee0b7eca88f363b75b34fdde8c9ddc"></a>HWLOC_OBJ_CACHE</em>&nbsp;</td><td class="fielddoc">
<p>Data cache. Can be L1, L2, L3, ... </p>
</td></tr>
<tr><td class="fieldname"><em><a class="anchor" id="ggacd37bb612667dc437d66bfb175a8dc55ac793958f330bca371aa1535de8aff45f"></a>HWLOC_OBJ_CORE</em>&nbsp;</td><td class="fielddoc">
<p>Core. A computation unit (may be shared by several logical processors). </p>
</td></tr>
<tr><td class="fieldname"><em><a class="anchor" id="ggacd37bb612667dc437d66bfb175a8dc55abca6887e80cb291353b0a0c1da83f661"></a>HWLOC_OBJ_PU</em>&nbsp;</td><td class="fielddoc">
<p>Processing Unit, or (Logical) Processor. An execution unit (may share a core with some other logical processors, e.g. in the case of an SMT core). </p>
<p>Objects of this kind are always reported and can thus be used as fallback when others are not. </p>
</td></tr>
<tr><td class="fieldname"><em><a class="anchor" id="ggacd37bb612667dc437d66bfb175a8dc55a5269ef95be72f88465559d35c9b7ad56"></a>HWLOC_OBJ_GROUP</em>&nbsp;</td><td class="fielddoc">
<p>Group objects. Objects which do not fit in the above but are detected by hwloc and are useful to take into account for affinity. For instance, some operating systems expose their arbitrary processors aggregation this way. And hwloc may insert such objects to group NUMA nodes according to their distances. </p>
<p>These objects are ignored when they do not bring any structure. </p>
</td></tr>
<tr><td class="fieldname"><em><a class="anchor" id="ggacd37bb612667dc437d66bfb175a8dc55a19f8a6953fa91efc76bcbcdf2d22de4d"></a>HWLOC_OBJ_MISC</em>&nbsp;</td><td class="fielddoc">
<p>Miscellaneous objects. Objects without particular meaning, that can e.g. be added by the application for its own use. </p>
</td></tr>
<tr><td class="fieldname"><em><a class="anchor" id="ggacd37bb612667dc437d66bfb175a8dc55a6825f10895fea60aca7a6ba9fe273db0"></a>HWLOC_OBJ_BRIDGE</em>&nbsp;</td><td class="fielddoc">
<p>Bridge. Any bridge that connects the host or an I/O bus, to another I/O bus. Bridge objects have neither CPU sets nor node sets. They are not added to the topology unless I/O discovery is enabled with <a class="el" href="a00044.php#ga6d11e53db143ac39c32cdb3912b71f99" title="Set OR&#39;ed flags to non-yet-loaded topology.">hwloc_topology_set_flags()</a>. </p>
</td></tr>
<tr><td class="fieldname"><em><a class="anchor" id="ggacd37bb612667dc437d66bfb175a8dc55a5d8117a54df1fbd3606ab19e42cb0ea9"></a>HWLOC_OBJ_PCI_DEVICE</em>&nbsp;</td><td class="fielddoc">
<p>PCI device. These objects have neither CPU sets nor node sets. They are not added to the topology unless I/O discovery is enabled with <a class="el" href="a00044.php#ga6d11e53db143ac39c32cdb3912b71f99" title="Set OR&#39;ed flags to non-yet-loaded topology.">hwloc_topology_set_flags()</a>. </p>
</td></tr>
<tr><td class="fieldname"><em><a class="anchor" id="ggacd37bb612667dc437d66bfb175a8dc55a51e7280240fd9f25589cbbe538bdb075"></a>HWLOC_OBJ_OS_DEVICE</em>&nbsp;</td><td class="fielddoc">
<p>Operating system device. These objects have neither CPU sets nor node sets. They are not added to the topology unless I/O discovery is enabled with <a class="el" href="a00044.php#ga6d11e53db143ac39c32cdb3912b71f99" title="Set OR&#39;ed flags to non-yet-loaded topology.">hwloc_topology_set_flags()</a>. </p>
</td></tr>
<tr><td class="fieldname"><em><a class="anchor" id="ggacd37bb612667dc437d66bfb175a8dc55addb5f843e1812445a84e6b2a844b1ebc"></a>HWLOC_OBJ_TYPE_MAX</em>&nbsp;</td><td class="fielddoc">
<p>Sentinel value </p>
</td></tr>
</table>

</div>
</div>
<h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="gabd7da4f4ea12b420b8ecbde458b27805"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_compare_types </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00041.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td>
          <td class="paramname"><em>type1</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00041.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td>
          <td class="paramname"><em>type2</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Compare the depth of two object types. </p>
<p>Types shouldn't be compared as they are, since newer ones may be added in the future. This function returns less than, equal to, or greater than zero respectively if <code>type1</code> objects usually include <code>type2</code> objects, are the same as <code>type2</code> objects, or are included in <code>type2</code> objects. If the types can not be compared (because neither is usually contained in the other), HWLOC_TYPE_UNORDERED is returned. Object types containing CPUs can always be compared (usually, a system contains machines which contain nodes which contain sockets which contain caches, which contain cores, which contain processors).</p>
<dl class="section note"><dt>Note</dt><dd>HWLOC_OBJ_PU will always be the deepest. </dd>
<dd>
This does not mean that the actual topology will respect that order: e.g. as of today cores may also contain caches, and sockets may also contain nodes. This is thus just to be seen as a fallback comparison method. </dd></dl>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
