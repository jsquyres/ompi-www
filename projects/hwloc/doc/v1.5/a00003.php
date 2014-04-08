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
      <li class="current"><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Environment Variables </div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><p>The behavior of the hwloc library and tools may be tuned thanks to the following environment variables.</p>
<dl>
<dt>HWLOC_XMLFILE=/path/to/file.xml </dt>
<dd><p class="startdd">enforces the discovery from the given XML file as if <a class="el" href="a00044.php#ga93efcc8a962afe1ed23393700682173f" title="Enable XML-file based topology.">hwloc_topology_set_xml()</a> had been called. This file may have been generated earlier with lstopo file.xml. For convenience, this backend provides empty binding hooks which just return success. To have hwloc still actually call OS-specific hooks, HWLOC_THISSYSTEM should be set 1 in the environment too, to assert that the loaded file is really the underlying system. See also <a class="el" href="a00007.php">Importing and exporting topologies from/to XML files</a>. </p>
<p class="enddd"></p>
</dd>
<dt>HWLOC_XML_VERBOSE=1 </dt>
<dd></dd>
<dt>HWLOC_SYNTHETIC_VERBOSE=1 </dt>
<dd><p class="startdd">enable verbose messages in the XML or synthetic topology backends. hwloc XML backends (see <a class="el" href="a00007.php">Importing and exporting topologies from/to XML files</a>) can emit some error messages to the error output stream. Enabling these verbose messages within hwloc can be useful for understanding failures to parse input XML topologies. Similarly, enabling verbose messages in the synthetic topology backend can help understand why the description string is invalid. </p>
<p class="enddd"></p>
</dd>
<dt>HWLOC_FSROOT=/path/to/linux/filesystem-root/ </dt>
<dd><p class="startdd">switches to reading the topology from the specified Linux filesystem root instead of the main file-system root, as if <a class="el" href="a00044.php#ga2f6bfb6958d8b508ea1d7d5bb266432c" title="Change the file-system root path when building the topology from sysfs/procfs.">hwloc_topology_set_fsroot()</a> had been called. Not using the main file-system root causes <a class="el" href="a00046.php#ga0d109e33fc7990f62f665d336e5e5111" title="Does the topology context come from this system?">hwloc_topology_is_thissystem()</a> to return 0. For convenience, this backend provides empty binding hooks which just return success. To have hwloc still actually call OS-specific hooks, HWLOC_THISSYSTEM should be set 1 in the environment too, to assert that the loaded file is really the underlying system. </p>
<p class="enddd"></p>
</dd>
<dt>HWLOC_THISSYSTEM=1 </dt>
<dd><p class="startdd">enforces the return value of <a class="el" href="a00046.php#ga0d109e33fc7990f62f665d336e5e5111" title="Does the topology context come from this system?">hwloc_topology_is_thissystem()</a>, as if HWLOC_TOPOLOGY_FLAG_IS_THISSYSTEM was set with <a class="el" href="a00044.php#ga6d11e53db143ac39c32cdb3912b71f99" title="Set OR&#39;ed flags to non-yet-loaded topology.">hwloc_topology_set_flags()</a>. It means that it makes hwloc assume that the selected backend provides the topology for the system on which we are running, even if it is not the OS-specific backend but the XML backend for instance. This means making the binding functions actually call the OS-specific system calls and really do binding, while the XML backend would otherwise provide empty hooks just returning success. This can be used for efficiency reasons to first detect the topology once, save it to an XML file, and quickly reload it later through the XML backend, but still having binding functions actually do bind. </p>
<p class="enddd"></p>
</dd>
<dt>HWLOC_HIDE_ERRORS=0 </dt>
<dd><p class="startdd">enables or disables verbose reporting of errors. The hwloc library may issue warnings to the standard error stream when it detects a problem during topology discovery, for instance if the operating system (or user) gives contradictory topology information. Setting this environment variable to 1 removes the actual displaying of these error messages. </p>
<p class="enddd"></p>
</dd>
<dt>HWLOC_GROUPING=1 </dt>
<dd><p class="startdd">enables or disables objects grouping based on distances. By default, hwloc uses distance matrices between objects (either read from the OS or given by the user) to find groups of close objects. These groups are described by adding intermediate Group objects in the topology. Setting this environment variable to 0 will disable this grouping. This variable supersedes the obsolete HWLOC_IGNORE_DISTANCES variable. </p>
<p class="enddd"></p>
</dd>
<dt>HWLOC_GROUPING_ACCURACY=0.05 </dt>
<dd><p class="startdd">relaxes distance comparison during grouping. By default, objects may be grouped if their distances form a minimal distance graph. When setting this variable to 0.02, these distances do not have to be strictly equal anymore, they may just be equal with a 2% error. If set to <code>try</code> instead of a numerical value, hwloc will try to group with perfect accuracy (0, the default), then with 0.01, 0.02, 0.05 and finally 0.1.</p>
<p class="enddd"></p>
</dd>
<dt>HWLOC_GROUPING_VERBOSE=0 </dt>
<dd><p class="startdd">enables or disables some verbose messages during grouping. If this variable is set to 1, some debug messages will be displayed during distance-based grouping of objects even if debug was not specific at configure time. This is useful when trying to find an interesting distance grouping accuracy.</p>
<p class="enddd"></p>
</dd>
<dt>HWLOC_&lt;type&gt;_DISTANCES=index,...:X*Y </dt>
<dd></dd>
<dt>HWLOC_&lt;type&gt;_DISTANCES=begin-end:X*Y*Z </dt>
<dd></dd>
<dt>HWLOC_&lt;type&gt;_DISTANCES=index,...:distance,... </dt>
<dd><p class="startdd">sets a distance matrix for objects of the given type and physical indexes. The type should be given as its case-sensitive stringified value (e.g. <code>NUMANode</code>, <code>Socket</code>, <code>Cache</code>, <code>Core</code>, <code>PU</code>). If another distance matrix already exists for the given type, either because the user specified it or because the OS offers it, it will be replaced by the given one.</p>
<p>If the variable value is <code>none</code>, the existing distance matrix for the given type is removed. Otherwise, the variable value first consists in a list of physical indexes that may be specified as a comma-separated list (e.g. <code>0,2,4,1,3,5</code>) or as a range of consecutive indexes (<code>0-5</code>). It is followed by a colon and the corresponding distances: </p>
<ul>
<li>
If <code>X*Y</code> is given, X groups of Y close objects are specified. </li>
<li>
If <code>X*Y*Z</code> is given, X groups of Y groups of Z close objects are specified. </li>
<li>
Otherwise, the comma-separated list of distances should be given. If N objects are considered, the i*N+j-th value gives the distance from the i-th object to the j-th object. These distance values must use a dot as a decimal separator. </li>
</ul>
<p>Note that distances are ignored in multi-node topologies. </p>
<p class="enddd"></p>
</dd>
<dt>HWLOC_PCI_&lt;domain&gt;_&lt;bus&gt;_LOCALCPUS=&lt;cpuset&gt; </dt>
<dd><p class="startdd">changes the locality of I/O devices behind the specified PCI hostbridge. If no I/O locality information is available or if the BIOS reports incorrect information, it is possible to move a I/O device tree (the entire set of objects behind a host bridge) near a custom set of processors. <code>domain</code> and <code>bus</code> are the PCI domain and primary bus of the corresponding host bridge. </p>
<p class="enddd"></p>
</dd>
</dl>
</div></div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
