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
      <li class="current"><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Command-Line Tools </div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><p>hwloc comes with an extensive C programming interface and several command line utilities. Each of them is fully documented in its own manual page; the following is a summary of the available command line tools.</p>
<h1><a class="anchor" id="cli_lstopo"></a>
lstopo and lstopo-no-graphics</h1>
<p>lstopo (also known as hwloc-ls) displays the hierarchical topology map of the current system. The output may be graphical or textual, and can also be exported to numerous file formats such as PDF, PNG, XML, and others. Advanced graphical outputs require the "Cairo" development package (usually <code>cairo-devel</code> or <code>libcairo2-dev</code>).</p>
<p>lstopo and lstopo-no-graphics accept the same command-line options. However graphical outputs are only available in lstopo. Textual outputs (those that do not depend on heavy external libraries such as Cairo) are supported in both lstopo and lstopo-no-graphics.</p>
<p>This command can also display the processes currently bound to a part of the machine (via the <code>&ndash;ps</code> option).</p>
<p>Note that lstopo can read XML files and/or alternate chroot filesystems and display topological maps representing those systems (e.g., use lstopo to output an XML file on one system, and then use lstopo to read in that XML file and display it on a different system).</p>
<h1><a class="anchor" id="cli_hwloc_bind"></a>
hwloc-bind</h1>
<p>hwloc-bind binds processes to specific hardware objects through a flexible syntax. A simple example is binding an executable to specific cores (or sockets or bitmaps or ...). The hwloc-bind(1) man page provides much more detail on what is possible.</p>
<p>hwloc-bind can also be used to retrieve the current process' binding.</p>
<h1><a class="anchor" id="cli_hwloc_calc"></a>
hwloc-calc</h1>
<p>hwloc-calc is generally used to create bitmap strings to pass to hwloc-bind. Although hwloc-bind accepts many forms of object specification (i.e., bitmap strings are one of many forms that hwloc-bind understands), they can be useful, compact representations in shell scripts, for example.</p>
<p>hwloc-calc generates bitmap strings from given hardware objects with the ability to aggregate them, intersect them, and more. hwloc-calc generally uses the same syntax than hwloc-bind, but multiple instances may be composed to generate complex combinations.</p>
<p>Note that hwloc-calc can also generate lists of logical processors or NUMA nodes that are convenient to pass to some external tools such as taskset or numactl.</p>
<h1><a class="anchor" id="cli_hwloc_info"></a>
hwloc-info</h1>
<p>hwloc-info dumps information about the given objects. It is intended to be used with tools such as grep for filtering certain attribute lines. When no object is specified, hwloc-info prints a summary of the topology.</p>
<h1><a class="anchor" id="cli_hwloc_distrib"></a>
hwloc-distrib</h1>
<p>hwloc-distrib generates a set of bitmap strings that are uniformly distributed across the machine for the given number of processes. These strings may be used with hwloc-bind to run processes to maximize their memory bandwidth by properly distributing them across the machine.</p>
<h1><a class="anchor" id="cli_hwloc_ps"></a>
hwloc-ps</h1>
<p>hwloc-ps is a tool to display the bindings of processes that are currently running on the local machine. By default, hwloc-ps only lists processes that are bound; unbound process (and Linux kernel threads) are not displayed.</p>
<h1><a class="anchor" id="cli_hwloc_gather"></a>
hwloc-gather-topology</h1>
<p>hwloc-gather-topology is a Linux-specific tool that saves the relevant topology files of the current machine into a tarball (and the corresponding lstopo output). These files may be used later (possibly offline) for simulating or debugging a machine without actually running on it.</p>
<h1><a class="anchor" id="cli_hwloc_distances"></a>
hwloc-distances</h1>
<p>hwloc-distances displays all distance matrices attached to the topology. Note that lstopo may also display distance matrices in its verbose textual output. However lstopo only prints matrices that cover the entire topology while hwloc-distances also displays matrices that ignore part of the topology.</p>
<h1><a class="anchor" id="cli_hwloc_annotate"></a>
hwloc-annotate</h1>
<p>hwloc-annotate may add object attributes such as string information (see <a class="el" href="a00014.php#attributes_info">Custom string infos</a> for details). It reads an input topology from a XML file and outputs the annotated topology as another XML file.</p>
<h1><a class="anchor" id="cli_hwloc_diffpatch"></a>
hwloc-diff and hwloc-patch</h1>
<p>hwloc-diff computes the difference between two topologies and outputs it to another XML file. hwloc-patch reads such a difference file and applies to another topology.</p>
<h1><a class="anchor" id="cli_hwloc_compressdir"></a>
hwloc-compress-dir</h1>
<p>hwloc-compress-dir compresses an entire directory of XML files by using hwloc-diff to save the differences between topologies instead of entire topologies.</p>
<h1><a class="anchor" id="cli_hwloc_assembler"></a>
hwloc-assembler</h1>
<p>hwloc-assembler combines several XML topology files into a single multi-node XML topology. It may then be used later as input with <a class="el" href="a00077.php#ga93efcc8a962afe1ed23393700682173f" title="Enable XML-file based topology. ">hwloc_topology_set_xml()</a> or with the HWLOC_XMLFILE environment variable. See <a class="el" href="a00012.php">Multi-node Topologies</a> for details.</p>
<h1><a class="anchor" id="cli_hwloc_assembler_remote"></a>
hwloc-assembler-remote</h1>
<p>hwloc-assembler-remote is a frontend to hwloc-assembler. It takes care of contacting the given list of remote hosts (through ssh) and retrieving their topologies as XML before assembling them with hwloc-assembler. </p>
</div></div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
