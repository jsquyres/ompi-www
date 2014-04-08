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
<div class="title">I/O Devices </div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><p><a class="anchor" id="iodevices"></a> hwloc usually manipulates processing units and memory but it can also discover I/O devices and report their locality as well. This is useful for placing I/O intensive applications on cores near the I/O devices they use.</p>
<h1><a class="anchor" id="iodevices_enabling"></a>
Enabling and requirements</h1>
<p>I/O discovery is disabled by default (except in lstopo) so as not to break legacy application by adding unexpected I/O objects to the topology. It can be enabled by passing flags such as <code><a class="el" href="a00047.php#ggada025d3ec20b4b420f8038d23d6e7bdea46ae25e8896278840b1800ae9ce4de41" title="Detect PCI devices.">HWLOC_TOPOLOGY_FLAG_IO_DEVICES</a></code> to <a class="el" href="a00047.php#ga6d11e53db143ac39c32cdb3912b71f99" title="Set OR&#39;ed flags to non-yet-loaded topology.">hwloc_topology_set_flags()</a> before loading the topology.</p>
<p>Note that I/O discovery requires significant help from the operating system. The pciutils library (the development package is usually <code>pciutils-devel</code> or <code>libpci-dev</code>) is needed to detect PCI devices and bridges, and the actual locality of these devices is only currently detected on Linux. Also, some operating systems require privileges for probing PCI devices, see <a class="el" href="a00014.php#faq_privileged">Does hwloc require privileged access?</a> for details.</p>
<h1><a class="anchor" id="iodevices_hierarchy"></a>
I/O object hierarchy</h1>
<p>When I/O discovery is enabled and supported, some additional objects (types <code><a class="el" href="a00044.php#ggacd37bb612667dc437d66bfb175a8dc55a6825f10895fea60aca7a6ba9fe273db0" title="Bridge. Any bridge that connects the host or an I/O bus, to another I/O bus. Bridge objects have neit...">HWLOC_OBJ_BRIDGE</a></code>, <code><a class="el" href="a00044.php#ggacd37bb612667dc437d66bfb175a8dc55a5d8117a54df1fbd3606ab19e42cb0ea9" title="PCI device. These objects have neither CPU sets nor node sets. They are not added to the topology unl...">HWLOC_OBJ_PCI_DEVICE</a></code> and <code><a class="el" href="a00044.php#ggacd37bb612667dc437d66bfb175a8dc55a51e7280240fd9f25589cbbe538bdb075" title="Operating system device. These objects have neither CPU sets nor node sets. They are not added to the...">HWLOC_OBJ_OS_DEVICE</a></code>) are added to the topology as a child of the object they are close to. For instance, if a I/O Hub is connected to a socket, the corresponding hwloc bridge object (and its PCI bridges and devices children) is inserted as a child of the corresponding hwloc socket object.</p>
<p>These new objects have neither CPU sets nor node sets (NULL pointers) because they are not directly usable by the user applications. Moreover I/O hierarchies may be highly complex (asymmetric trees of bridges). So I/O objects are placed in specific levels with custom depths. Their lists may still be traversed with regular helpers such as <a class="el" href="a00057.php#ga5f08ceb69375341e73563cfe2e77534e" title="Returns the next object of type type.">hwloc_get_next_obj_by_type()</a>. However, hwloc offers some dedicated helpers such as <a class="el" href="a00068.php#gad6e1ed122ef3b6e098538d75acd5e3f6" title="Get the next PCI device in the system.">hwloc_get_next_pcidev()</a> and <a class="el" href="a00068.php#ga73a5bc6265642e6001f7a10812ab886d" title="Get the next OS device in the system.">hwloc_get_next_osdev()</a> for convenience (see <a class="el" href="a00068.php">Advanced I/O object traversal helpers</a>).</p>
<p>An I/O hierarchy is organized as follows: A hostbridge object ( <code><a class="el" href="a00044.php#ggacd37bb612667dc437d66bfb175a8dc55a6825f10895fea60aca7a6ba9fe273db0" title="Bridge. Any bridge that connects the host or an I/O bus, to another I/O bus. Bridge objects have neit...">HWLOC_OBJ_BRIDGE</a></code> object with upstream type <em>Host</em> and downstream type <em>PCI</em>) is attached below a regular object (usually the entire machine or a NUMA node). There may be multiple hostbridges in the machine, attached to different places, but all I/O devices are below one of them. Each hostbridge contains one or several children, either other bridges (usually PCI to PCI) or PCI devices (<code><a class="el" href="a00044.php#ggacd37bb612667dc437d66bfb175a8dc55a5d8117a54df1fbd3606ab19e42cb0ea9" title="PCI device. These objects have neither CPU sets nor node sets. They are not added to the topology unl...">HWLOC_OBJ_PCI_DEVICE</a></code>). The number of bridges between the hostbridge and a PCI device depends on the machine and on the topology flags.</p>
<h1><a class="anchor" id="iodevices_osdev"></a>
Software devices</h1>
<p>Although each PCI device is uniquely identified by its bus ID (e.g. 0000:01:02.3), the application can hardly find out which PCI device is actually used when manipulating software handle (such as the <em>eth0</em> network interface or the <em>mlx4_0</em> OpenFabrics HCA). Therefore hwloc tries to add software devices (<code><a class="el" href="a00044.php#ggacd37bb612667dc437d66bfb175a8dc55a51e7280240fd9f25589cbbe538bdb075" title="Operating system device. These objects have neither CPU sets nor node sets. They are not added to the...">HWLOC_OBJ_OS_DEVICE</a></code>) below their PCI objects. These objects can be identified by their usual operating system-wide names, e.g. <em>eth0</em> or <em>mlx4_0</em>. However, this ability is currently only available on Linux for some classes of devices. It should especially be noted that proprietary graphics driver currently do not create any interesting software device for GPUs, they should therefore be manipulated as PCI device objects. On the contrary some PCI devices may contain multiple software device (see the example below).</p>
<p>See also <a class="el" href="a00010.php#interoperability">Interoperability With Other Software</a> for managing these devices without considering them as hwloc objects.</p>
<h1><a class="anchor" id="iodevices_consult"></a>
Consulting I/O devices and binding</h1>
<p>I/O devices may be consulted by traversing the topology manually (with usual routines such as <a class="el" href="a00051.php#ga9be4a03488cdd0fb431e4aa1cbdea895" title="Returns the topology object at logical index idx with type type.">hwloc_get_obj_by_type()</a>) or by using dedicated helpers (such as <a class="el" href="a00068.php#ga546e1d690c63fb24177f3013ed78ceb1" title="Find the PCI device object matching the PCI bus id given domain, bus device and function PCI bus id...">hwloc_get_pcidev_by_busid()</a>, see <a class="el" href="a00068.php">Advanced I/O object traversal helpers</a>).</p>
<p>I/O objects do not actually contain any locality information because their CPU sets and node sets are NULL. Their locality must be retrieved by walking up the object tree (through the <code>parent</code> link) until an non-I/O object is found (see <a class="el" href="a00068.php#ga3603275746a8792e54415d79763aa9e9" title="Get the first non-I/O ancestor object.">hwloc_get_non_io_ancestor_obj()</a>). This regular object should have non-NULL CPU sets and node sets which describe the processing units and memory that are immediately close to the I/O device. For instance the path from a OS device to its locality may go across a PCI device parent, one or several bridges, up to a a NUMA node with the same locality.</p>
<p>Command-line tools are also aware of I/O devices. lstopo displays the interesting ones by default (passing <code>&ndash;no-io</code> disables it).</p>
<p>hwloc-calc and hwloc-bind may manipulate I/O devices specified by PCI bus ID or by OS device name. </p>
<ul>
<li>
<code>pci=0000:02:03.0</code> is replaced by the set of CPUs that are close to the PCI device whose bus ID is given.  </li>
<li>
<code>os=eth0</code> is replaced by CPUs that are close to the I/O device whose software handle is called <code>eth0</code>.  </li>
</ul>
<p>This enables easy binding of I/O-intensive applications near the device they use.</p>
<h1><a class="anchor" id="iodevices_examples"></a>
Examples</h1>
<p>The following picture shows a dual-socket dual-core host whose PCI bus is connected to the first socket and NUMA node.</p>
<div class="image">
<img src="devel09-pci.png" alt="devel09-pci.png"/>
</div>
 <p>Six interesting PCI devices were discovered. However hwloc found some corresponding software devices (<em>eth0</em>, <em>eth1</em>, <em>sda</em>, <em>mlx4_0</em>, <em>ib0</em>, and <em>ib1</em>) for only four of these physical devices. The other ones (<em>PCI 102b:0532</em> and <em>PCI 8086:3a20</em>) are an unused IDE controller (no disk attached) and a graphic card (no corresponding software device reported to the user by the operating system).</p>
<p>On the contrary, it should be noted three different software devices were found for the last PCI device (<em>PCI 15b3:634a</em>). Indeed this OpenFabrics HCA PCI device object contains one one OpenFabrics software device (<em>mlx4_0</em>) and two virtual network interface software devices (<em>ib0</em> and <em>ib1</em>).</p>
<p>PCI link speed is also reported for some bridges and devices because lstopo was privileged when it discovered the topology.</p>
<p>Here is the corresponding textual output:</p>
<pre class="fragment">Machine (24GB)
  NUMANode L#0 (P#0 12GB)
    Socket L#0 + L3 L#0 (8192KB)
      L2 L#0 (256KB) + L1 L#0 (32KB) + Core L#0 + PU L#0 (P#0)
      L2 L#1 (256KB) + L1 L#1 (32KB) + Core L#1 + PU L#1 (P#2)
    HostBridge
      PCIBridge
        PCI 14e4:163b
          Net "eth0"
        PCI 14e4:163b
          Net "eth1"
      PCIBridge
        PCI 1000:0060
          Block "sda"
      PCIBridge
        PCI 102b:0532
      PCI 8086:3a20
      PCI 15b3:634a
        Net "ib0"
        Net "ib1"
        Net "mlx4_0"
  NUMANode L#1 (P#1 12GB) + Socket L#1 + L3 L#1 (8192KB)
    L2 L#2 (256KB) + L1 L#2 (32KB) + Core L#2 + PU L#2 (P#1)
    L2 L#3 (256KB) + L1 L#3 (32KB) + Core L#3 + PU L#3 (P#3)
</pre> </div></div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
