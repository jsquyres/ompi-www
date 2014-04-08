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
<h1>Nodeset Helpers</h1>  </div>
</div>
<div class="contents">
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="func-members"></a>
Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline <br class="typebreak"/>
<a class="el" href="group__hwlocality__sets.php#ga2f5276235841ad66a79bedad16a5a10c">hwloc_const_nodeset_t</a> <br class="typebreak"/>
&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__helper__nodeset.php#gaf8331b6d5e60c463f7ebe21a878561d4">hwloc_topology_get_complete_nodeset</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology)</td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline <br class="typebreak"/>
<a class="el" href="group__hwlocality__sets.php#ga2f5276235841ad66a79bedad16a5a10c">hwloc_const_nodeset_t</a> <br class="typebreak"/>
&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__helper__nodeset.php#gae6821ede7676dfac0515a4b7b04b0397">hwloc_topology_get_topology_nodeset</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology)</td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline <br class="typebreak"/>
<a class="el" href="group__hwlocality__sets.php#ga2f5276235841ad66a79bedad16a5a10c">hwloc_const_nodeset_t</a> <br class="typebreak"/>
&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__helper__nodeset.php#ga5d829323f8d283687be43ea8c894eb3b">hwloc_topology_get_allowed_nodeset</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Get allowed node set.  <a href="#ga5d829323f8d283687be43ea8c894eb3b"></a><br/></td></tr>
</table>
<hr/><h2>Function Documentation</h2>
<a class="anchor" id="ga5d829323f8d283687be43ea8c894eb3b"></a><!-- doxytag: member="helper.h::hwloc_topology_get_allowed_nodeset" ref="ga5d829323f8d283687be43ea8c894eb3b" args="(hwloc_topology_t topology)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="group__hwlocality__sets.php#ga2f5276235841ad66a79bedad16a5a10c">hwloc_const_nodeset_t</a>  hwloc_topology_get_allowed_nodeset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&nbsp;</td>
          <td class="paramname"> <em>topology</em></td>
          <td>&nbsp;)&nbsp;</td>
          <td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Get allowed node set. </p>
<dl class="return"><dt><b>Returns:</b></dt><dd>the node set of allowed memory of the system. If the topology is the result of a combination of several systems, NULL is returned.</dd></dl>
<dl class="note"><dt><b>Note:</b></dt><dd>The returned nodeset is not newly allocated and should thus not be changed or freed, hwloc_nodeset_dup must be used to obtain a local copy. </dd></dl>

</div>
</div>
<a class="anchor" id="gaf8331b6d5e60c463f7ebe21a878561d4"></a><!-- doxytag: member="helper.h::hwloc_topology_get_complete_nodeset" ref="gaf8331b6d5e60c463f7ebe21a878561d4" args="(hwloc_topology_t topology)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="group__hwlocality__sets.php#ga2f5276235841ad66a79bedad16a5a10c">hwloc_const_nodeset_t</a>  hwloc_topology_get_complete_nodeset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&nbsp;</td>
          <td class="paramname"> <em>topology</em></td>
          <td>&nbsp;)&nbsp;</td>
          <td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

</div>
</div>
<a class="anchor" id="gae6821ede7676dfac0515a4b7b04b0397"></a><!-- doxytag: member="helper.h::hwloc_topology_get_topology_nodeset" ref="gae6821ede7676dfac0515a4b7b04b0397" args="(hwloc_topology_t topology)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="group__hwlocality__sets.php#ga2f5276235841ad66a79bedad16a5a10c">hwloc_const_nodeset_t</a>  hwloc_topology_get_topology_nodeset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&nbsp;</td>
          <td class="paramname"> <em>topology</em></td>
          <td>&nbsp;)&nbsp;</td>
          <td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

</div>
</div>
</div>
<?php
include_once("$topdir/includes/footer.inc");
