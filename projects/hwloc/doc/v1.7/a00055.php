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
<a href="#nested-classes">Data Structures</a> &#124;
<a href="#enum-members">Enumerations</a> &#124;
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">Configure Topology Detection</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Data Structures</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00030.php">hwloc_topology_discovery_support</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00029.php">hwloc_topology_cpubind_support</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00031.php">hwloc_topology_membind_support</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00032.php">hwloc_topology_support</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="enum-members"></a>
Enumerations</h2></td></tr>
<tr class="memitem:gada025d3ec20b4b420f8038d23d6e7bde"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00055.php#gada025d3ec20b4b420f8038d23d6e7bde">hwloc_topology_flags_e</a> { <br/>
&#160;&#160;<a class="el" href="a00055.php#ggada025d3ec20b4b420f8038d23d6e7bdea129b4fea1300be22bbaf0bb0958994c8">HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM</a>, 
<a class="el" href="a00055.php#ggada025d3ec20b4b420f8038d23d6e7bdea6ecb6abc6a0bb75e81564f8bca85783b">HWLOC_TOPOLOGY_FLAG_IS_THISSYSTEM</a>, 
<a class="el" href="a00055.php#ggada025d3ec20b4b420f8038d23d6e7bdea46ae25e8896278840b1800ae9ce4de41">HWLOC_TOPOLOGY_FLAG_IO_DEVICES</a>, 
<a class="el" href="a00055.php#ggada025d3ec20b4b420f8038d23d6e7bdea426b18c349f15d7046bb391d96fa947c">HWLOC_TOPOLOGY_FLAG_IO_BRIDGES</a>, 
<br/>
&#160;&#160;<a class="el" href="a00055.php#ggada025d3ec20b4b420f8038d23d6e7bdea4a41dc181649ef81c2dcd44a54e271b9">HWLOC_TOPOLOGY_FLAG_WHOLE_IO</a>, 
<a class="el" href="a00055.php#ggada025d3ec20b4b420f8038d23d6e7bdeaae509a0bed4a7067e0116c75c661178d">HWLOC_TOPOLOGY_FLAG_ICACHES</a>
<br/>
 }</td></tr>
<tr class="separator:gada025d3ec20b4b420f8038d23d6e7bde"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:gaf2071c8621fddc53649c245d87835b47"><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00055.php#gaf2071c8621fddc53649c245d87835b47">hwloc_topology_ignore_type</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00052.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type)</td></tr>
<tr class="separator:gaf2071c8621fddc53649c245d87835b47"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga6ddd4213d95bd1c30555b294a60efa6b"><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00055.php#ga6ddd4213d95bd1c30555b294a60efa6b">hwloc_topology_ignore_type_keep_structure</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00052.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type)</td></tr>
<tr class="separator:ga6ddd4213d95bd1c30555b294a60efa6b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gaec6fb00050f50cd41007f1ae580d2106"><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00055.php#gaec6fb00050f50cd41007f1ae580d2106">hwloc_topology_ignore_all_keep_structure</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology)</td></tr>
<tr class="separator:gaec6fb00050f50cd41007f1ae580d2106"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga6d11e53db143ac39c32cdb3912b71f99"><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00055.php#ga6d11e53db143ac39c32cdb3912b71f99">hwloc_topology_set_flags</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, unsigned long flags)</td></tr>
<tr class="separator:ga6d11e53db143ac39c32cdb3912b71f99"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gae1100de0162b3c6a9db750ac14629c05"><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00055.php#gae1100de0162b3c6a9db750ac14629c05">hwloc_topology_set_pid</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict topology, hwloc_pid_t pid)</td></tr>
<tr class="separator:gae1100de0162b3c6a9db750ac14629c05"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga2f6bfb6958d8b508ea1d7d5bb266432c"><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00055.php#ga2f6bfb6958d8b508ea1d7d5bb266432c">hwloc_topology_set_fsroot</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict topology, const char *restrict fsroot_path)</td></tr>
<tr class="separator:ga2f6bfb6958d8b508ea1d7d5bb266432c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga2fcb52181b586c20f001b7a999550324"><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00055.php#ga2fcb52181b586c20f001b7a999550324">hwloc_topology_set_synthetic</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict topology, const char *restrict description)</td></tr>
<tr class="separator:ga2fcb52181b586c20f001b7a999550324"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga93efcc8a962afe1ed23393700682173f"><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00055.php#ga93efcc8a962afe1ed23393700682173f">hwloc_topology_set_xml</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict topology, const char *restrict xmlpath)</td></tr>
<tr class="separator:ga93efcc8a962afe1ed23393700682173f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gae7e4bade144652a2b48f5eaf0309b4ec"><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00055.php#gae7e4bade144652a2b48f5eaf0309b4ec">hwloc_topology_set_xmlbuffer</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict topology, const char *restrict buffer, int size)</td></tr>
<tr class="separator:gae7e4bade144652a2b48f5eaf0309b4ec"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga12024fec46f9368fb8fc5c624089c5ec"><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00055.php#ga12024fec46f9368fb8fc5c624089c5ec">hwloc_topology_set_custom</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology)</td></tr>
<tr class="separator:ga12024fec46f9368fb8fc5c624089c5ec"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gabda6afa67a495cd652f064ad51d3fe47"><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00055.php#gabda6afa67a495cd652f064ad51d3fe47">hwloc_topology_set_distance_matrix</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict topology, <a class="el" href="a00052.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type, unsigned nbobjs, unsigned *os_index, float *distances)</td></tr>
<tr class="separator:gabda6afa67a495cd652f064ad51d3fe47"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gac2126e105f3ae708efca2e90d612625a"><td class="memItemLeft" align="right" valign="top"> struct <br class="typebreak"/>
<a class="el" href="a00032.php">hwloc_topology_support</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00055.php#gac2126e105f3ae708efca2e90d612625a">hwloc_topology_get_support</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict topology)</td></tr>
<tr class="separator:gac2126e105f3ae708efca2e90d612625a"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<p>These functions can optionally be called between <a class="el" href="a00054.php#ga5c2d6f476af87005c7bd0811d4548b9f" title="Allocate a topology context.">hwloc_topology_init()</a> and <a class="el" href="a00054.php#ga91e2e6427b95fb7339c99dbbef996e71" title="Build the actual topology.">hwloc_topology_load()</a> to configure how the detection should be performed, e.g. to ignore some objects types, define a synthetic topology, etc.</p>
<p>If none of them is called, the default is to detect all the objects of the machine that the caller is allowed to access.</p>
<p>This default behavior may also be modified through environment variables if the application did not modify it already. Setting HWLOC_XMLFILE in the environment enforces the discovery from a XML file as if <a class="el" href="a00055.php#ga93efcc8a962afe1ed23393700682173f" title="Enable XML-file based topology.">hwloc_topology_set_xml()</a> had been called. HWLOC_FSROOT switches to reading the topology from the specified Linux filesystem root as if <a class="el" href="a00055.php#ga2f6bfb6958d8b508ea1d7d5bb266432c" title="Change the file-system root path when building the topology from sysfs/procfs.">hwloc_topology_set_fsroot()</a> had been called. Finally, HWLOC_THISSYSTEM enforces the return value of <a class="el" href="a00058.php#ga0d109e33fc7990f62f665d336e5e5111" title="Does the topology context come from this system?">hwloc_topology_is_thissystem()</a>. </p>
<h2 class="groupheader">Enumeration Type Documentation</h2>
<a class="anchor" id="gada025d3ec20b4b420f8038d23d6e7bde"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="a00055.php#gada025d3ec20b4b420f8038d23d6e7bde">hwloc_topology_flags_e</a></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Flags to be set onto a topology context before load. </p>
<p>Flags should be given to <a class="el" href="a00055.php#ga6d11e53db143ac39c32cdb3912b71f99" title="Set OR&#39;ed flags to non-yet-loaded topology.">hwloc_topology_set_flags()</a>. They may also be returned by <a class="el" href="a00058.php#ga4f368cb8f2c69b8c8086a6226f12d1bd" title="Get OR&#39;ed flags of a topology.">hwloc_topology_get_flags()</a>. </p>
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><em><a class="anchor" id="ggada025d3ec20b4b420f8038d23d6e7bdea129b4fea1300be22bbaf0bb0958994c8"></a>HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM</em>&nbsp;</td><td class="fielddoc">
<p>Detect the whole system, ignore reservations and offline settings. </p>
<p>Gather all resources, even if some were disabled by the administrator. For instance, ignore Linux Cpusets and gather all processors and memory nodes, and ignore the fact that some resources may be offline. </p>
</td></tr>
<tr><td class="fieldname"><em><a class="anchor" id="ggada025d3ec20b4b420f8038d23d6e7bdea6ecb6abc6a0bb75e81564f8bca85783b"></a>HWLOC_TOPOLOGY_FLAG_IS_THISSYSTEM</em>&nbsp;</td><td class="fielddoc">
<p>Assume that the selected backend provides the topology for the system on which we are running. </p>
<p>This forces hwloc_topology_is_thissystem to return 1, i.e. makes hwloc assume that the selected backend provides the topology for the system on which we are running, even if it is not the OS-specific backend but the XML backend for instance. This means making the binding functions actually call the OS-specific system calls and really do binding, while the XML backend would otherwise provide empty hooks just returning success.</p>
<p>Setting the environment variable HWLOC_THISSYSTEM may also result in the same behavior.</p>
<p>This can be used for efficiency reasons to first detect the topology once, save it to an XML file, and quickly reload it later through the XML backend, but still having binding functions actually do bind. </p>
</td></tr>
<tr><td class="fieldname"><em><a class="anchor" id="ggada025d3ec20b4b420f8038d23d6e7bdea46ae25e8896278840b1800ae9ce4de41"></a>HWLOC_TOPOLOGY_FLAG_IO_DEVICES</em>&nbsp;</td><td class="fielddoc">
<p>Detect PCI devices. </p>
<p>By default, I/O devices are ignored. This flag enables I/O device detection using the pci backend. Only the common PCI devices (GPUs, NICs, block devices, ...) and host bridges (objects that connect the host objects to an I/O subsystem) will be added to the topology. Uncommon devices and other bridges (such as PCI-to-PCI bridges) will be ignored. </p>
</td></tr>
<tr><td class="fieldname"><em><a class="anchor" id="ggada025d3ec20b4b420f8038d23d6e7bdea426b18c349f15d7046bb391d96fa947c"></a>HWLOC_TOPOLOGY_FLAG_IO_BRIDGES</em>&nbsp;</td><td class="fielddoc">
<p>Detect PCI bridges. </p>
<p>This flag should be combined with HWLOC_TOPOLOGY_FLAG_IO_DEVICES to enable the detection of both common devices and of all useful bridges (bridges that have at least one device behind them). </p>
</td></tr>
<tr><td class="fieldname"><em><a class="anchor" id="ggada025d3ec20b4b420f8038d23d6e7bdea4a41dc181649ef81c2dcd44a54e271b9"></a>HWLOC_TOPOLOGY_FLAG_WHOLE_IO</em>&nbsp;</td><td class="fielddoc">
<p>Detect the whole PCI hierarchy. </p>
<p>This flag enables detection of all I/O devices (even the uncommon ones) and bridges (even those that have no device behind them) using the pci backend. </p>
</td></tr>
<tr><td class="fieldname"><em><a class="anchor" id="ggada025d3ec20b4b420f8038d23d6e7bdeaae509a0bed4a7067e0116c75c661178d"></a>HWLOC_TOPOLOGY_FLAG_ICACHES</em>&nbsp;</td><td class="fielddoc">
<p>Detect instruction caches. </p>
<p>This flag enables detection of Instruction caches, instead of only Data and Unified caches. </p>
</td></tr>
</table>

</div>
</div>
<h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="gac2126e105f3ae708efca2e90d612625a"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"> struct <a class="el" href="a00032.php">hwloc_topology_support</a>* hwloc_topology_get_support </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict&#160;</td>
          <td class="paramname"><em>topology</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">read</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Retrieve the topology support. </p>

</div>
</div>
<a class="anchor" id="gaec6fb00050f50cd41007f1ae580d2106"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_topology_ignore_all_keep_structure </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Ignore all objects that do not bring any structure. </p>
<p>Ignore all objects that do not bring any structure: Each ignored object should have a single children or be the only child of its parent. I/O objects may not be ignored, topology flags should be used to configure their discovery instead. </p>

</div>
</div>
<a class="anchor" id="gaf2071c8621fddc53649c245d87835b47"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_topology_ignore_type </td>
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

<p>Ignore an object type. </p>
<p>Ignore all objects from the given type. The bottom-level type HWLOC_OBJ_PU may not be ignored. The top-level object of the hierarchy will never be ignored, even if this function succeeds. I/O objects may not be ignored, topology flags should be used to configure their discovery instead. </p>

</div>
</div>
<a class="anchor" id="ga6ddd4213d95bd1c30555b294a60efa6b"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_topology_ignore_type_keep_structure </td>
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

<p>Ignore an object type if it does not bring any structure. </p>
<p>Ignore all objects from the given type as long as they do not bring any structure: Each ignored object should have a single children or be the only child of its parent. The bottom-level type HWLOC_OBJ_PU may not be ignored. I/O objects may not be ignored, topology flags should be used to configure their discovery instead. </p>

</div>
</div>
<a class="anchor" id="ga12024fec46f9368fb8fc5c624089c5ec"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_topology_set_custom </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Prepare the topology for custom assembly. </p>
<p>The topology then contains a single root object. It must then be built by inserting other topologies with <a class="el" href="a00063.php#ga59ccf6a63cb23d63940e8b782059d9cb" title="Insert an existing topology inside a custom topology.">hwloc_custom_insert_topology()</a> or single objects with <a class="el" href="a00063.php#gac1037fe389bfa7c2bf0e3739b7e20844" title="Insert a new group object inside a custom topology.">hwloc_custom_insert_group_object_by_parent()</a>. <a class="el" href="a00054.php#ga91e2e6427b95fb7339c99dbbef996e71" title="Build the actual topology.">hwloc_topology_load()</a> must be called to finalize the new topology as usual.</p>
<dl class="section note"><dt>Note</dt><dd>If nothing is inserted in the topology, <a class="el" href="a00054.php#ga91e2e6427b95fb7339c99dbbef996e71" title="Build the actual topology.">hwloc_topology_load()</a> will fail with errno set to EINVAL.</dd>
<dd>
On success, the custom component replaces the previously enabled component (if any), but the topology is not actually modified until <a class="el" href="a00054.php#ga91e2e6427b95fb7339c99dbbef996e71" title="Build the actual topology.">hwloc_topology_load()</a>. </dd></dl>

</div>
</div>
<a class="anchor" id="gabda6afa67a495cd652f064ad51d3fe47"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_topology_set_distance_matrix </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00052.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td>
          <td class="paramname"><em>type</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>nbobjs</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned *&#160;</td>
          <td class="paramname"><em>os_index</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">float *&#160;</td>
          <td class="paramname"><em>distances</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Provide a distance matrix. </p>
<p>Provide the matrix of distances between a set of objects of the given type. The set may or may not contain all the existing objects of this type. The objects are specified by their OS/physical index in the <code>os_index</code> array. The <code>distances</code> matrix follows the same order. The distance from object i to object j in the i*nbobjs+j.</p>
<p>A single latency matrix may be defined for each type. If another distance matrix already exists for the given type, either because the user specified it or because the OS offers it, it will be replaced by the given one. If <code>nbobjs</code> is <code>0</code>, <code>os_index</code> is <code>NULL</code> and <code>distances</code> is <code>NULL</code>, the existing distance matrix for the given type is removed.</p>
<dl class="section note"><dt>Note</dt><dd>Distance matrices are ignored in multi-node topologies. </dd></dl>

</div>
</div>
<a class="anchor" id="ga6d11e53db143ac39c32cdb3912b71f99"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_topology_set_flags </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
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

<p>Set OR'ed flags to non-yet-loaded topology. </p>
<p>Set a OR'ed set of <a class="el" href="a00055.php#gada025d3ec20b4b420f8038d23d6e7bde" title="Flags to be set onto a topology context before load.">hwloc_topology_flags_e</a> onto a topology that was not yet loaded.</p>
<p>If this function is called multiple times, the last invokation will erase and replace the set of flags that was previously set.</p>
<p>The flags set in a topology may be retrieved with <a class="el" href="a00058.php#ga4f368cb8f2c69b8c8086a6226f12d1bd" title="Get OR&#39;ed flags of a topology.">hwloc_topology_get_flags()</a> </p>

</div>
</div>
<a class="anchor" id="ga2f6bfb6958d8b508ea1d7d5bb266432c"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_topology_set_fsroot </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const char *restrict&#160;</td>
          <td class="paramname"><em>fsroot_path</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Change the file-system root path when building the topology from sysfs/procfs. </p>
<p>On Linux system, use sysfs and procfs files as if they were mounted on the given <code>fsroot_path</code> instead of the main file-system root. Setting the environment variable HWLOC_FSROOT may also result in this behavior. Not using the main file-system root causes <a class="el" href="a00058.php#ga0d109e33fc7990f62f665d336e5e5111" title="Does the topology context come from this system?">hwloc_topology_is_thissystem()</a> to return 0.</p>
<p>Note that this function does not actually load topology information; it just tells hwloc where to load it from. You'll still need to invoke <a class="el" href="a00054.php#ga91e2e6427b95fb7339c99dbbef996e71" title="Build the actual topology.">hwloc_topology_load()</a> to actually load the topology information.</p>
<dl class="section return"><dt>Returns</dt><dd>-1 with errno set to ENOSYS on non-Linux and on Linux systems that do not support it. </dd>
<dd>
-1 with the appropriate errno if <code>fsroot_path</code> cannot be used.</dd></dl>
<dl class="section note"><dt>Note</dt><dd>For convenience, this backend provides empty binding hooks which just return success. To have hwloc still actually call OS-specific hooks, the HWLOC_TOPOLOGY_FLAG_IS_THISSYSTEM has to be set to assert that the loaded file is really the underlying system.</dd>
<dd>
On success, the Linux component replaces the previously enabled component (if any), but the topology is not actually modified until <a class="el" href="a00054.php#ga91e2e6427b95fb7339c99dbbef996e71" title="Build the actual topology.">hwloc_topology_load()</a>. </dd></dl>

</div>
</div>
<a class="anchor" id="gae1100de0162b3c6a9db750ac14629c05"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_topology_set_pid </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">hwloc_pid_t&#160;</td>
          <td class="paramname"><em>pid</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Change which pid the topology is viewed from. </p>
<p>On some systems, processes may have different views of the machine, for instance the set of allowed CPUs. By default, hwloc exposes the view from the current process. Calling <a class="el" href="a00055.php#gae1100de0162b3c6a9db750ac14629c05" title="Change which pid the topology is viewed from.">hwloc_topology_set_pid()</a> permits to make it expose the topology of the machine from the point of view of another process.</p>
<dl class="section note"><dt>Note</dt><dd><code>hwloc_pid_t</code> is <code>pid_t</code> on Unix platforms, and <code>HANDLE</code> on native Windows platforms.</dd>
<dd>
-1 is returned and errno is set to ENOSYS on platforms that do not support this feature. </dd></dl>

</div>
</div>
<a class="anchor" id="ga2fcb52181b586c20f001b7a999550324"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_topology_set_synthetic </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const char *restrict&#160;</td>
          <td class="paramname"><em>description</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Enable synthetic topology. </p>
<p>Gather topology information from the given <code>description</code>, a space-separated string of numbers describing the arity of each level. Each number may be prefixed with a type and a colon to enforce the type of a level. If only some level types are enforced, hwloc will try to choose the other types according to usual topologies, but it may fail and you may have to specify more level types manually. See also the <a class="el" href="a00009.php#synthetic">synthetic</a>.</p>
<p>If <code>description</code> was properly parsed and describes a valid topology configuration, this function returns 0. Otherwise -1 is returned and errno is set to EINVAL.</p>
<p>Note that this function does not actually load topology information; it just tells hwloc where to load it from. You'll still need to invoke <a class="el" href="a00054.php#ga91e2e6427b95fb7339c99dbbef996e71" title="Build the actual topology.">hwloc_topology_load()</a> to actually load the topology information.</p>
<dl class="section note"><dt>Note</dt><dd>For convenience, this backend provides empty binding hooks which just return success.</dd>
<dd>
On success, the synthetic component replaces the previously enabled component (if any), but the topology is not actually modified until <a class="el" href="a00054.php#ga91e2e6427b95fb7339c99dbbef996e71" title="Build the actual topology.">hwloc_topology_load()</a>. </dd></dl>

</div>
</div>
<a class="anchor" id="ga93efcc8a962afe1ed23393700682173f"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_topology_set_xml </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const char *restrict&#160;</td>
          <td class="paramname"><em>xmlpath</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Enable XML-file based topology. </p>
<p>Gather topology information from the XML file given at <code>xmlpath</code>. Setting the environment variable HWLOC_XMLFILE may also result in this behavior. This file may have been generated earlier with <a class="el" href="a00056.php#ga45578d725c66865cfef31d0585dcff70" title="Export the topology into an XML file.">hwloc_topology_export_xml()</a> or lstopo file.xml.</p>
<p>Note that this function does not actually load topology information; it just tells hwloc where to load it from. You'll still need to invoke <a class="el" href="a00054.php#ga91e2e6427b95fb7339c99dbbef996e71" title="Build the actual topology.">hwloc_topology_load()</a> to actually load the topology information.</p>
<dl class="section return"><dt>Returns</dt><dd>-1 with errno set to EINVAL on failure to read the XML file.</dd></dl>
<dl class="section note"><dt>Note</dt><dd>See also <a class="el" href="a00056.php#ga7a47eecb5807f52c9a6e9bd2e2b6e5c9" title="Set the application-specific callback for importing userdata.">hwloc_topology_set_userdata_import_callback()</a> for importing application-specific userdata.</dd>
<dd>
For convenience, this backend provides empty binding hooks which just return success. To have hwloc still actually call OS-specific hooks, the HWLOC_TOPOLOGY_FLAG_IS_THISSYSTEM has to be set to assert that the loaded file is really the underlying system.</dd>
<dd>
On success, the XML component replaces the previously enabled component (if any), but the topology is not actually modified until <a class="el" href="a00054.php#ga91e2e6427b95fb7339c99dbbef996e71" title="Build the actual topology.">hwloc_topology_load()</a>. </dd></dl>

</div>
</div>
<a class="anchor" id="gae7e4bade144652a2b48f5eaf0309b4ec"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_topology_set_xmlbuffer </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const char *restrict&#160;</td>
          <td class="paramname"><em>buffer</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>size</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Enable XML based topology using a memory buffer (instead of a file, as with <a class="el" href="a00055.php#ga93efcc8a962afe1ed23393700682173f" title="Enable XML-file based topology.">hwloc_topology_set_xml()</a>). </p>
<p>Gather topology information from the XML memory buffer given at <code>buffer</code> and of length <code>size</code>. This buffer may have been filled earlier with <a class="el" href="a00056.php#ga739330e9402425315e44e5012631fb91" title="Export the topology into a newly-allocated XML memory buffer.">hwloc_topology_export_xmlbuffer()</a>.</p>
<p>Note that this function does not actually load topology information; it just tells hwloc where to load it from. You'll still need to invoke <a class="el" href="a00054.php#ga91e2e6427b95fb7339c99dbbef996e71" title="Build the actual topology.">hwloc_topology_load()</a> to actually load the topology information.</p>
<dl class="section return"><dt>Returns</dt><dd>-1 with errno set to EINVAL on failure to read the XML buffer.</dd></dl>
<dl class="section note"><dt>Note</dt><dd>See also <a class="el" href="a00056.php#ga7a47eecb5807f52c9a6e9bd2e2b6e5c9" title="Set the application-specific callback for importing userdata.">hwloc_topology_set_userdata_import_callback()</a> for importing application-specific userdata.</dd>
<dd>
For convenience, this backend provides empty binding hooks which just return success. To have hwloc still actually call OS-specific hooks, the HWLOC_TOPOLOGY_FLAG_IS_THISSYSTEM has to be set to assert that the loaded file is really the underlying system.</dd>
<dd>
On success, the XML component replaces the previously enabled component (if any), but the topology is not actually modified until <a class="el" href="a00054.php#ga91e2e6427b95fb7339c99dbbef996e71" title="Build the actual topology.">hwloc_topology_load()</a>. </dd></dl>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
