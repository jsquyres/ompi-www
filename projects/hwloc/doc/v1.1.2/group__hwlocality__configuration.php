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
<a href="#nested-classes">Data Structures</a> &#124;
<a href="#enum-members">Enumerations</a> &#124;
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<h1>Configure Topology Detection</h1>  </div>
</div>
<div class="contents">
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="nested-classes"></a>
Data Structures</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__topology__discovery__support.php">hwloc_topology_discovery_support</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Flags describing actual discovery support for this topology.  <a href="structhwloc__topology__discovery__support.php#_details">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__topology__cpubind__support.php">hwloc_topology_cpubind_support</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Flags describing actual PU binding support for this topology.  <a href="structhwloc__topology__cpubind__support.php#_details">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__topology__membind__support.php">hwloc_topology_membind_support</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Flags describing actual memory binding support for this topology.  <a href="structhwloc__topology__membind__support.php#_details">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__topology__support.php">hwloc_topology_support</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Set of flags describing actual support for this topology.  <a href="structhwloc__topology__support.php#_details">More...</a><br/></td></tr>
<tr><td colspan="2"><h2><a name="enum-members"></a>
Enumerations</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__configuration.php#gada025d3ec20b4b420f8038d23d6e7bde">hwloc_topology_flags_e</a> { <a class="el" href="group__hwlocality__configuration.php#ggada025d3ec20b4b420f8038d23d6e7bdea129b4fea1300be22bbaf0bb0958994c8">HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM</a>, 
<a class="el" href="group__hwlocality__configuration.php#ggada025d3ec20b4b420f8038d23d6e7bdea6ecb6abc6a0bb75e81564f8bca85783b">HWLOC_TOPOLOGY_FLAG_IS_THISSYSTEM</a>
 }</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight"><p>Flags to be set onto a topology context before load. </p>
 <a href="group__hwlocality__configuration.php#gada025d3ec20b4b420f8038d23d6e7bde">More...</a><br/></td></tr>
<tr><td colspan="2"><h2><a name="func-members"></a>
Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__configuration.php#gaf2071c8621fddc53649c245d87835b47">hwloc_topology_ignore_type</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Ignore an object type.  <a href="#gaf2071c8621fddc53649c245d87835b47"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__configuration.php#ga6ddd4213d95bd1c30555b294a60efa6b">hwloc_topology_ignore_type_keep_structure</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Ignore an object type if it does not bring any structure.  <a href="#ga6ddd4213d95bd1c30555b294a60efa6b"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__configuration.php#gaec6fb00050f50cd41007f1ae580d2106">hwloc_topology_ignore_all_keep_structure</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Ignore all objects that do not bring any structure.  <a href="#gaec6fb00050f50cd41007f1ae580d2106"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__configuration.php#ga6d11e53db143ac39c32cdb3912b71f99">hwloc_topology_set_flags</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, unsigned long flags)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Set OR'ed flags to non-yet-loaded topology.  <a href="#ga6d11e53db143ac39c32cdb3912b71f99"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__configuration.php#ga2f6bfb6958d8b508ea1d7d5bb266432c">hwloc_topology_set_fsroot</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict topology, const char *restrict fsroot_path)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Change the file-system root path when building the topology from sysfs/procfs.  <a href="#ga2f6bfb6958d8b508ea1d7d5bb266432c"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__configuration.php#gae1100de0162b3c6a9db750ac14629c05">hwloc_topology_set_pid</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict topology, hwloc_pid_t pid)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Change which pid the topology is viewed from.  <a href="#gae1100de0162b3c6a9db750ac14629c05"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__configuration.php#ga2fcb52181b586c20f001b7a999550324">hwloc_topology_set_synthetic</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict topology, const char *restrict description)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Enable synthetic topology.  <a href="#ga2fcb52181b586c20f001b7a999550324"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__configuration.php#ga93efcc8a962afe1ed23393700682173f">hwloc_topology_set_xml</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict topology, const char *restrict xmlpath)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Enable XML-file based topology.  <a href="#ga93efcc8a962afe1ed23393700682173f"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__configuration.php#gae7e4bade144652a2b48f5eaf0309b4ec">hwloc_topology_set_xmlbuffer</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict topology, const char *restrict buffer, int size)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Enable XML based topology using a memory buffer instead of a file.  <a href="#gae7e4bade144652a2b48f5eaf0309b4ec"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> struct <br class="typebreak"/>
<a class="el" href="structhwloc__topology__support.php">hwloc_topology_support</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__configuration.php#gac2126e105f3ae708efca2e90d612625a">hwloc_topology_get_support</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict topology)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Retrieve the topology support.  <a href="#gac2126e105f3ae708efca2e90d612625a"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>These functions can optionally be called between <a class="el" href="group__hwlocality__creation.php#ga5c2d6f476af87005c7bd0811d4548b9f" title="Allocate a topology context.">hwloc_topology_init()</a> and <a class="el" href="group__hwlocality__creation.php#ga91e2e6427b95fb7339c99dbbef996e71" title="Build the actual topology.">hwloc_topology_load()</a> to configure how the detection should be performed, e.g. to ignore some objects types, define a synthetic topology, etc.</p>
<p>If none of them is called, the default is to detect all the objects of the machine that the caller is allowed to access.</p>
<p>This default behavior may also be modified through environment variables if the application did not modify it already. Setting HWLOC_XMLFILE in the environment enforces the discovery from a XML file as if <a class="el" href="group__hwlocality__configuration.php#ga93efcc8a962afe1ed23393700682173f" title="Enable XML-file based topology.">hwloc_topology_set_xml()</a> had been called. HWLOC_FSROOT switches to reading the topology from the specified Linux filesystem root as if <a class="el" href="group__hwlocality__configuration.php#ga2f6bfb6958d8b508ea1d7d5bb266432c" title="Change the file-system root path when building the topology from sysfs/procfs.">hwloc_topology_set_fsroot()</a> had been called. Finally, HWLOC_THISSYSTEM enforces the return value of <a class="el" href="group__hwlocality__information.php#ga0d109e33fc7990f62f665d336e5e5111" title="Does the topology context come from this system?">hwloc_topology_is_thissystem()</a>. </p>
<hr/><h2>Enumeration Type Documentation</h2>
<a class="anchor" id="gada025d3ec20b4b420f8038d23d6e7bde"></a><!-- doxytag: member="hwloc.h::hwloc_topology_flags_e" ref="gada025d3ec20b4b420f8038d23d6e7bde" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="group__hwlocality__configuration.php#gada025d3ec20b4b420f8038d23d6e7bde">hwloc_topology_flags_e</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Flags to be set onto a topology context before load. </p>
<p>Flags should be given to <a class="el" href="group__hwlocality__configuration.php#ga6d11e53db143ac39c32cdb3912b71f99" title="Set OR&#39;ed flags to non-yet-loaded topology.">hwloc_topology_set_flags()</a>. </p>
<dl><dt><b>Enumerator: </b></dt><dd><table border="0" cellspacing="2" cellpadding="0">
<tr><td valign="top"><em><a class="anchor" id="ggada025d3ec20b4b420f8038d23d6e7bdea129b4fea1300be22bbaf0bb0958994c8"></a><!-- doxytag: member="HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM" ref="ggada025d3ec20b4b420f8038d23d6e7bdea129b4fea1300be22bbaf0bb0958994c8" args="" -->HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM</em>&nbsp;</td><td>
<p>Detect the whole system, ignore reservations and offline settings. </p>
<p>Gather all resources, even if some were disabled by the administrator. For instance, ignore Linux Cpusets and gather all processors and memory nodes, and ignore the fact that some resources may be offline. </p>
</td></tr>
<tr><td valign="top"><em><a class="anchor" id="ggada025d3ec20b4b420f8038d23d6e7bdea6ecb6abc6a0bb75e81564f8bca85783b"></a><!-- doxytag: member="HWLOC_TOPOLOGY_FLAG_IS_THISSYSTEM" ref="ggada025d3ec20b4b420f8038d23d6e7bdea6ecb6abc6a0bb75e81564f8bca85783b" args="" -->HWLOC_TOPOLOGY_FLAG_IS_THISSYSTEM</em>&nbsp;</td><td>
<p>Assume that the selected backend provides the topology for the system on which we are running. </p>
<p>This forces hwloc_topology_is_thissystem to return 1, i.e. makes hwloc assume that the selected backend provides the topology for the system on which we are running, even if it is not the OS-specific backend but the XML backend for instance. This means making the binding functions actually call the OS-specific system calls and really do binding, while the XML backend would otherwise provide empty hooks just returning success.</p>
<p>Setting the environment variable HWLOC_THISSYSTEM may also result in the same behavior.</p>
<p>This can be used for efficiency reasons to first detect the topology once, save it to an XML file, and quickly reload it later through the XML backend, but still having binding functions actually do bind. </p>
</td></tr>
</table>
</dd>
</dl>

</div>
</div>
<hr/><h2>Function Documentation</h2>
<a class="anchor" id="gac2126e105f3ae708efca2e90d612625a"></a><!-- doxytag: member="hwloc.h::hwloc_topology_get_support" ref="gac2126e105f3ae708efca2e90d612625a" args="(hwloc_topology_t restrict topology)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> struct <a class="el" href="structhwloc__topology__support.php">hwloc_topology_support</a>* hwloc_topology_get_support </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict&#160;</td>
          <td class="paramname"><em>topology</em></td><td>)</td>
          <td><code> [read]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Retrieve the topology support. </p>

</div>
</div>
<a class="anchor" id="gaec6fb00050f50cd41007f1ae580d2106"></a><!-- doxytag: member="hwloc.h::hwloc_topology_ignore_all_keep_structure" ref="gaec6fb00050f50cd41007f1ae580d2106" args="(hwloc_topology_t topology)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_topology_ignore_all_keep_structure </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Ignore all objects that do not bring any structure. </p>
<p>Ignore all objects that do not bring any structure: Each ignored object should have a single children or be the only child of its parent. </p>

</div>
</div>
<a class="anchor" id="gaf2071c8621fddc53649c245d87835b47"></a><!-- doxytag: member="hwloc.h::hwloc_topology_ignore_type" ref="gaf2071c8621fddc53649c245d87835b47" args="(hwloc_topology_t topology, hwloc_obj_type_t type)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_topology_ignore_type </td>
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

<p>Ignore an object type. </p>
<p>Ignore all objects from the given type. The bottom-level type HWLOC_OBJ_PU may not be ignored. The top-level object of the hierarchy will never be ignored, even if this function succeeds. </p>

</div>
</div>
<a class="anchor" id="ga6ddd4213d95bd1c30555b294a60efa6b"></a><!-- doxytag: member="hwloc.h::hwloc_topology_ignore_type_keep_structure" ref="ga6ddd4213d95bd1c30555b294a60efa6b" args="(hwloc_topology_t topology, hwloc_obj_type_t type)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_topology_ignore_type_keep_structure </td>
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

<p>Ignore an object type if it does not bring any structure. </p>
<p>Ignore all objects from the given type as long as they do not bring any structure: Each ignored object should have a single children or be the only child of its parent. The bottom-level type HWLOC_OBJ_PU may not be ignored. </p>

</div>
</div>
<a class="anchor" id="ga6d11e53db143ac39c32cdb3912b71f99"></a><!-- doxytag: member="hwloc.h::hwloc_topology_set_flags" ref="ga6d11e53db143ac39c32cdb3912b71f99" args="(hwloc_topology_t topology, unsigned long flags)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_topology_set_flags </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
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
</div>
<div class="memdoc">

<p>Set OR'ed flags to non-yet-loaded topology. </p>
<p>Set a OR'ed set of <a class="el" href="group__hwlocality__configuration.php#gada025d3ec20b4b420f8038d23d6e7bde" title="Flags to be set onto a topology context before load.">hwloc_topology_flags_e</a> onto a topology that was not yet loaded. </p>

</div>
</div>
<a class="anchor" id="ga2f6bfb6958d8b508ea1d7d5bb266432c"></a><!-- doxytag: member="hwloc.h::hwloc_topology_set_fsroot" ref="ga2f6bfb6958d8b508ea1d7d5bb266432c" args="(hwloc_topology_t restrict topology, const char *restrict fsroot_path)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_topology_set_fsroot </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict&#160;</td>
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
</div>
<div class="memdoc">

<p>Change the file-system root path when building the topology from sysfs/procfs. </p>
<p>On Linux system, use sysfs and procfs files as if they were mounted on the given <code>fsroot_path</code> instead of the main file-system root. Setting the environment variable HWLOC_FSROOT may also result in this behavior. Not using the main file-system root causes <a class="el" href="group__hwlocality__information.php#ga0d109e33fc7990f62f665d336e5e5111" title="Does the topology context come from this system?">hwloc_topology_is_thissystem()</a> to return 0.</p>
<dl class="note"><dt><b>Note:</b></dt><dd>For conveniency, this backend provides empty binding hooks which just return success. To have hwloc still actually call OS-specific hooks, the HWLOC_TOPOLOGY_FLAG_IS_THISSYSTEM has to be set to assert that the loaded file is really the underlying system. </dd></dl>

</div>
</div>
<a class="anchor" id="gae1100de0162b3c6a9db750ac14629c05"></a><!-- doxytag: member="hwloc.h::hwloc_topology_set_pid" ref="gae1100de0162b3c6a9db750ac14629c05" args="(hwloc_topology_t restrict topology, hwloc_pid_t pid)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_topology_set_pid </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict&#160;</td>
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
</div>
<div class="memdoc">

<p>Change which pid the topology is viewed from. </p>
<p>On some systems, processes may have different views of the machine, for instance the set of allowed CPUs. By default, hwloc exposes the view from the current process. Calling <a class="el" href="group__hwlocality__configuration.php#gae1100de0162b3c6a9db750ac14629c05" title="Change which pid the topology is viewed from.">hwloc_topology_set_pid()</a> permits to make it expose the topology of the machine from the point of view of another process.</p>
<dl class="note"><dt><b>Note:</b></dt><dd>hwloc_pid_t is pid_t on unix platforms, and HANDLE on native Windows platforms </dd>
<dd>
-1 is returned and errno is set to ENOSYS on platforms that do not support this feature. </dd></dl>

</div>
</div>
<a class="anchor" id="ga2fcb52181b586c20f001b7a999550324"></a><!-- doxytag: member="hwloc.h::hwloc_topology_set_synthetic" ref="ga2fcb52181b586c20f001b7a999550324" args="(hwloc_topology_t restrict topology, const char *restrict description)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_topology_set_synthetic </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict&#160;</td>
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
</div>
<div class="memdoc">

<p>Enable synthetic topology. </p>
<p>Gather topology information from the given <code>description</code> which should be a space-separated string of numbers describing the arity of each level. Each number may be prefixed with a type and a colon to enforce the type of a level. If only some level types are enforced, hwloc will try to choose the other types according to usual topologies, but it may fail and you may have to specify more level types manually.</p>
<p>If <code>description</code> was properly parsed and describes a valid topology configuration, this function returns 0. Otherwise -1 is returned and errno is set to EINVAL.</p>
<dl class="note"><dt><b>Note:</b></dt><dd>For conveniency, this backend provides empty binding hooks which just return success. </dd></dl>

</div>
</div>
<a class="anchor" id="ga93efcc8a962afe1ed23393700682173f"></a><!-- doxytag: member="hwloc.h::hwloc_topology_set_xml" ref="ga93efcc8a962afe1ed23393700682173f" args="(hwloc_topology_t restrict topology, const char *restrict xmlpath)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_topology_set_xml </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict&#160;</td>
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
</div>
<div class="memdoc">

<p>Enable XML-file based topology. </p>
<p>Gather topology information from the XML file given at <code>xmlpath</code>. Setting the environment variable HWLOC_XMLFILE may also result in this behavior. This file may have been generated earlier with lstopo file.xml.</p>
<dl class="note"><dt><b>Note:</b></dt><dd>For conveniency, this backend provides empty binding hooks which just return success. To have hwloc still actually call OS-specific hooks, the HWLOC_TOPOLOGY_FLAG_IS_THISSYSTEM has to be set to assert that the loaded file is really the underlying system. </dd></dl>

</div>
</div>
<a class="anchor" id="gae7e4bade144652a2b48f5eaf0309b4ec"></a><!-- doxytag: member="hwloc.h::hwloc_topology_set_xmlbuffer" ref="gae7e4bade144652a2b48f5eaf0309b4ec" args="(hwloc_topology_t restrict topology, const char *restrict buffer, int size)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_topology_set_xmlbuffer </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict&#160;</td>
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
</div>
<div class="memdoc">

<p>Enable XML based topology using a memory buffer instead of a file. </p>
<p>Gather topology information from the XML memory buffer given at <code>buffer</code> and of length <code>length</code>. </p>

</div>
</div>
</div>
<?php
include_once("$topdir/includes/footer.inc");
