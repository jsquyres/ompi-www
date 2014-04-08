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
<!-- Generated by Doxygen 1.8.2 -->
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
<div class="title">Multi-node Topologies </div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><p><a class="anchor" id="multinode"></a> hwloc is usually used for consulting and manipulating single machine topologies. This includes large systems as long as a single instance of the operating system manages the entire system. However it is sometimes desirable to have multiple independent hosts inside the same topology, for instance when applying algorithms to an entire cluster topology. hwloc therefore offers the ability to agregate multiple host topologies into a single global one.</p>
<h1><a class="anchor" id="multinode_cpusets"></a>
Multi-node Objects Specifities</h1>
<p>A multi-node topology contains several single-node topologies. Those are assembled by making their own root objects (usually Machine object) children of higher objects. These higher objects include at least the root of the global topology (usually a System object). Some intermediate objects may also exists, for instance to represent switches in a large fabric.</p>
<p>There are actually three possible types of objects that have different properties with respect to cpusets, nodesets and binding. Indeed those cpusets and nodesets were designed for execution and memory binding within a single operating system. Binding on another system or across several different systems would be meaningless.</p>
<dl>
<dt>Local objects </dt>
<dd>Any object that corresponds to the local machine may be manipulated as usual. Obviously, if the multi-node topology does not contain the local machine topology, no such local object exists.  </dd>
<dt>Objects from other nodes </dt>
<dd>Any object that comes from inside another node is represented as usual but its cpusets and nodesets should not be used for binding since binding on another system makes no sense.  </dd>
<dt>Objects above single nodes </dt>
<dd>Any object above single-node topologies does not have any cpuset or nodeset pointer because binding across multiple systems makes no sense. This includes the glocal root object of a multi-node topology and possibly some intermediate objects between this global root and the local root of single-node topologies.  </dd>
</dl>
<p>It is important to keep this in mind before binding using multi-node topologies. To make sure binding on an object is possible, one should first check that its cpuset or nodeset pointer is not NULL. Then, one should check whether the object is indeed local.</p>
<p>To find out which machine a given object correspond too, one may look at the info attributes of the parent Machine object. The <code>HostName</code> info is usually available in Machine objects, it may be retrieved with the following code: </p>
<pre class="fragment">  hwloc_obj_t machine_obj;
  obj = hwloc_get_ancestor_obj_by_type(topology, HWLOC_OBJ_MACHINE, obj);
  if (machine_obj)
    return hwloc_obj_get_info_by_name(machine_obj, "HostName");
  else
    return NULL;
</pre><p> The hwloc assembler scripts (see below) also add <code>AssemblerName</code> and <code>AssemblerIndex</code> info attributes to the Machine objects to identify the corresponding host name and index during assembly.</p>
<h1><a class="anchor" id="multinode_tools"></a>
Assembling topologies with command-line tools</h1>
<p>One way to manipulate multinode topologies is to retrieve other nodes' topologies as XML files and combine them as a global XML topology. It may then be loaded with <a class="el" href="a00047.php#ga93efcc8a962afe1ed23393700682173f" title="Enable XML-file based topology.">hwloc_topology_set_xml()</a> or with the HWLOC_XMLFILE environment variable.</p>
<p>The hwloc-assembler and hwloc-assembler-remote utilities offer the ability to combine XML topologies or remote nodes' topologies (see <a class="el" href="a00002.php#tools">Command-Line Tools</a>).</p>
<h1><a class="anchor" id="multinode_interface"></a>
Assembling topologies with the programming interface</h1>
<p>The hwloc programming interface offers the ability to build multinode topologies using the <em>custom</em> interface. A new multinode topology has to be initialized with <a class="el" href="a00046.php#ga5c2d6f476af87005c7bd0811d4548b9f" title="Allocate a topology context.">hwloc_topology_init()</a> and then set to custom with <a class="el" href="a00047.php#ga12024fec46f9368fb8fc5c624089c5ec" title="Prepare the topology for custom assembly.">hwloc_topology_set_custom()</a>. Topologies and objects mat then be assembled. Later, the custom topology is finalized as usual with <a class="el" href="a00046.php#ga91e2e6427b95fb7339c99dbbef996e71" title="Build the actual topology.">hwloc_topology_load()</a>.</p>
<p>A custom topology starts with a single root object of type System. It may be modified by inserting a new child object with <a class="el" href="a00055.php#gac1037fe389bfa7c2bf0e3739b7e20844" title="Insert a new group object inside a custom topology.">hwloc_custom_insert_group_object_by_parent()</a> or by duplicating another topology with <a class="el" href="a00055.php#ga59ccf6a63cb23d63940e8b782059d9cb" title="Insert an existing topology inside a custom topology.">hwloc_custom_insert_topology()</a>. Both of these operations require to specify the parent object in the custom topology where the insertion will take place. This parent may be either the root (returned by <a class="el" href="a00057.php#gadbf58f6e187efbdb3cd9a8e30311b7d7" title="Returns the top-object of the topology-tree.">hwloc_get_root_obj()</a>) or an already-inserted object (returned by <a class="el" href="a00055.php#gac1037fe389bfa7c2bf0e3739b7e20844" title="Insert a new group object inside a custom topology.">hwloc_custom_insert_group_object_by_parent()</a>).</p>
<p>Ideally, any existing object in the custom topology could be the parent. However, special care should be taken when traversing the topology to find such an object because most links between objects (children, siblings, cousins) are not setup until <a class="el" href="a00046.php#ga91e2e6427b95fb7339c99dbbef996e71" title="Build the actual topology.">hwloc_topology_load()</a> is invoked.</p>
<h1><a class="anchor" id="multinode_example"></a>
Example of assembly with the programming interface</h1>
<p>If the topologies of two hosts have been previously gathered in XML files <code>host1.xml</code> and <code>host2.xml</code>, the global topology may be assembled with the following code.</p>
<pre class="fragment">hwloc_topology_t host1, host2, global;

/* initialize global topology */
hwloc_topology_init(&amp;global);
hwloc_topology_set_custom(global);

/* insert host1 entire topology below the global topology root */
hwloc_topology_init(&amp;host1);
hwloc_topology_load(host1);
hwloc_custom_insert_topology(global, hwloc_get_root_obj(global),
                             host1, NULL);
hwloc_topology_destroy(host1);

/* insert host2 entire topology below the global topology root */
hwloc_topology_init(&amp;host2);
hwloc_topology_load(host2);
hwloc_custom_insert_topology(global, hwloc_get_root_obj(global),
                             host2, NULL);
hwloc_topology_destroy(host2);

/* load and play with the global topology */
hwloc_topology_load(global);
...
</pre><p>If a intermediate object such as a switch should be inserted above one of the host topologies: </p>
<pre class="fragment">...
/* insert a switch object below the global topology root */
hwloc_obj_t sw =
   hwloc_custom_insert_group_object_by_parent(global,
                              hwloc_get_root_obj(global), 0);

/* insert host2 entire topology below the switch */
hwloc_topology_init(&amp;host2);
hwloc_topology_load(host2);
hwloc_custom_insert_topology(global, switch, host2, NULL);
hwloc_topology_destroy(host2);

/* load and play with the global topology */
hwloc_topology_load(global);
...
</pre> </div></div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
