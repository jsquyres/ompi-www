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
<!-- Generated by Doxygen 1.6.2 -->
<div class="navigation" id="top">
  <div class="tabs">
    <ul>
      <li><a href="index.php"><span>Main&nbsp;Page</span></a></li>
      <li><a href="pages.php"><span>Related&nbsp;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&nbsp;Structures</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
</div>
<div class="contents">
<h1>Topology context</h1><table border="0" cellpadding="0" cellspacing="0">
<tr><td colspan="2"><h2>Typedefs</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">typedef struct hwloc_topology *&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Topology context.  <a href="#ga9d1e76ee15a7dee158b786c30b6a6e38"></a><br/></td></tr>
</table>
<hr/><h2>Typedef Documentation</h2>
<a class="anchor" id="ga9d1e76ee15a7dee158b786c30b6a6e38"></a><!-- doxytag: member="hwloc.h::hwloc_topology_t" ref="ga9d1e76ee15a7dee158b786c30b6a6e38" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">typedef struct hwloc_topology* <a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Topology context. </p>
<p>To be initialized with <a class="el" href="group__hwlocality__creation.php#ga5c2d6f476af87005c7bd0811d4548b9f" title="Allocate a topology context.">hwloc_topology_init()</a> and built with <a class="el" href="group__hwlocality__creation.php#ga91e2e6427b95fb7339c99dbbef996e71" title="Build the actual topology.">hwloc_topology_load()</a>. </p>

</div>
</div>
</div>
<?php
include_once("$topdir/includes/footer.inc");
