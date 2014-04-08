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
<!-- Generated by Doxygen 1.6.1 -->
<div class="navigation" id="top">
  <div class="tabs">
    <ul>
      <li><a href="index.php"><span>Main&nbsp;Page</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&nbsp;Structures</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
</div>
<div class="contents">
<h1>Create and Destroy Topologies</h1><table border="0" cellpadding="0" cellspacing="0">
<tr><td colspan="2"><h2>Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__creation.php#ga03fd4a16d8b9ee1ffc32b25fd2f6bdfa">hwloc_topology_init</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> *topologyp)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Allocate a topology context.  <a href="#ga03fd4a16d8b9ee1ffc32b25fd2f6bdfa"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__creation.php#gabdf58d87ad77f6615fccdfe0535ff826">hwloc_topology_load</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Build the actual topology.  <a href="#gabdf58d87ad77f6615fccdfe0535ff826"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__creation.php#ga9f34a640b6fd28d23699d4d084667b15">hwloc_topology_destroy</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Terminate and free a topology context.  <a href="#ga9f34a640b6fd28d23699d4d084667b15"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__creation.php#gaf6746bc3a558ef1ac8348b4491d091b5">hwloc_topology_check</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Run internal checks on a topology structure.  <a href="#gaf6746bc3a558ef1ac8348b4491d091b5"></a><br/></td></tr>
</table>
<hr/><h2>Function Documentation</h2>
<a class="anchor" id="gaf6746bc3a558ef1ac8348b4491d091b5"></a><!-- doxytag: member="hwloc.h::hwloc_topology_check" ref="gaf6746bc3a558ef1ac8348b4491d091b5" args="(hwloc_topology_t topology)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void hwloc_topology_check </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&nbsp;</td>
          <td class="paramname"> <em>topology</em></td>
          <td>&nbsp;)&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Run internal checks on a topology structure. </p>
<dl><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign="top"></td><td valign="top"><em>topology</em>&nbsp;</td><td>is the topology to be checked </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="ga9f34a640b6fd28d23699d4d084667b15"></a><!-- doxytag: member="hwloc.h::hwloc_topology_destroy" ref="ga9f34a640b6fd28d23699d4d084667b15" args="(hwloc_topology_t topology)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void hwloc_topology_destroy </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&nbsp;</td>
          <td class="paramname"> <em>topology</em></td>
          <td>&nbsp;)&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Terminate and free a topology context. </p>
<dl><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign="top"></td><td valign="top"><em>topology</em>&nbsp;</td><td>is the topology to be freed </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="ga03fd4a16d8b9ee1ffc32b25fd2f6bdfa"></a><!-- doxytag: member="hwloc.h::hwloc_topology_init" ref="ga03fd4a16d8b9ee1ffc32b25fd2f6bdfa" args="(hwloc_topology_t *topologyp)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int hwloc_topology_init </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> *&nbsp;</td>
          <td class="paramname"> <em>topologyp</em></td>
          <td>&nbsp;)&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Allocate a topology context. </p>
<dl><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign="top"><tt>[out]</tt>&nbsp;</td><td valign="top"><em>topologyp</em>&nbsp;</td><td>is assigned a pointer to the new allocated context.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>Returns:</b></dt><dd>0 on success, -1 on error. </dd></dl>

</div>
</div>
<a class="anchor" id="gabdf58d87ad77f6615fccdfe0535ff826"></a><!-- doxytag: member="hwloc.h::hwloc_topology_load" ref="gabdf58d87ad77f6615fccdfe0535ff826" args="(hwloc_topology_t topology)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int hwloc_topology_load </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&nbsp;</td>
          <td class="paramname"> <em>topology</em></td>
          <td>&nbsp;)&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Build the actual topology. </p>
<p>Build the actual topology once initialized with <a class="el" href="group__hwlocality__creation.php#ga03fd4a16d8b9ee1ffc32b25fd2f6bdfa" title="Allocate a topology context.">hwloc_topology_init()</a> and tuned with hwlocality_configuration routine. No other routine may be called earlier using this topology context.</p>
<dl><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign="top"></td><td valign="top"><em>topology</em>&nbsp;</td><td>is the topology to be loaded with objects.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>Returns:</b></dt><dd>0 on success, -1 on error.</dd></dl>
<dl class="see"><dt><b>See also:</b></dt><dd><a class="el" href="group__hwlocality__configuration.php">Configure Topology Detection</a> </dd></dl>

</div>
</div>
</div>
<?php
include_once("$topdir/includes/footer.inc");
