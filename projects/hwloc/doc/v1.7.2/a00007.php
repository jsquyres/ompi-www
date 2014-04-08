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
<!-- Generated by Doxygen 1.8.4 -->
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
<div class="title">Object attributes </div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><p><a class="anchor" id="attributes"></a> </p>
<h1><a class="anchor" id="attributes_normal"></a>
Normal attributes</h1>
<p>hwloc objects have many attributes. The <a class="el" href="a00022.php" title="Structure of a topology object. ">hwloc_obj</a> structure contains a common set of attributes that are available for object types, for instance their <code>type</code> or <code>logical_index</code>.</p>
<p>Each object also contains an <code>attr</code> field that, if non NULL, points to a union <a class="el" href="a00023.php" title="Object type-specific Attributes. ">hwloc_obj_attr_u</a> of type-specific attribute structures. For instance, a Cache object <code>obj</code> contains cache-specific information in <code>obj-&gt;attr-&gt;cache</code>, such as its size and associativity. See <a class="el" href="a00023.php" title="Object type-specific Attributes. ">hwloc_obj_attr_u</a> for details.</p>
<h1><a class="anchor" id="attributes_info"></a>
Custom string infos</h1>
<p>Aside from the <code>name</code> field of each object, hwloc annotates many objects with string attributes that are made of a key and a value. Each object contains a list of such pairs that may be consulted manually (looking at the object <code>infos</code> array field) or using the <a class="el" href="a00060.php#ga2a12b2450489675bd5759dc47cbc51ed" title="Search the given key name in object infos and return the corresponding value. ">hwloc_obj_get_info_by_name()</a>. The user may additionally add new key-value pairs to any object using <a class="el" href="a00060.php#gaba3afe636940872772ed6dfaf0b3552e" title="Add the given info name and value pair to the given object. ">hwloc_obj_add_info()</a> or the <a class="el" href="a00002.php#cli_hwloc_annotate">hwloc-annotate</a> program.</p>
<p>Here is a non-exhaustive list of attributes that may be automatically added by hwloc (with the usual corresponding object in parentheses). Note that these attributes heavily depend on the ability of the operating system to report them. Many of them will therefore be missing on some OS. </p>
<dl>
<dt>OSName, OSRelease, OSVersion, HostName, Architecture (Machine object) </dt>
<dd>The operating system name, release, version, the hostname and the architecture name, as reported by the Unix <code>uname</code> command.  </dd>
<dt>Backend (Machine object or topology root object) </dt>
<dd>The name of the hwloc backend/component that filled the topology. If several components were combined, multiple Backend keys may exist, with different values, for instance <code>x86</code>, <code>Linux</code> and <code>pci</code>.  </dd>
<dt>LinuxCgroup (Machine object) </dt>
<dd>The name the Linux control group where the calling process is placed.  </dd>
<dt>SyntheticDescription (topology root object) </dt>
<dd>The description string that was given to hwloc to build this synthetic topology.  </dd>
<dt>CPUModel, CPUType (Socket or Machine) </dt>
<dd>The processor model name, and a more-general processor type name when applicable (Solaris/Sparc). These attributes are usually added to Socket objects. However, when hwloc cannot detect the number of sockets but still knows their (same) model, the attribute may be added to the Machine object instead.  </dd>
<dt>PCIVendor, PCIDevice (PCI devices and bridges) </dt>
<dd>The vendor and device names of the PCI device.  </dd>
<dt>CoProcType (Co-Processor OS devices) </dt>
<dd>The type of co-processor, for instance <code>"MIC"</code>, <code>"CUDA"</code> or <code>"OpenCL"</code>.  </dd>
<dt>GPUVendor, GPUModel (GPU or Co-Processor OS devices) </dt>
<dd>The vendor and model names of the GPU device.  </dd>
<dt>OpenCLDeviceType, OpenCLPlatformIndex, </dt>
<dd></dd>
<dt>OpenCLPlatformName, OpenCLPlatformDeviceIndex (OpenCL GPU OS devices) </dt>
<dd>The type of OpenCL device, the OpenCL platform index and name, and the index of the device within the platform.  </dd>
<dt>NVIDIAUUID, NVIDIASerial (NVML GPU OS devices) </dt>
<dd>The UUID and Serial of NVIDIA GPUs.  </dd>
<dt>MICFamily, MICSKU, MICSerialNumber, MICActiveCores, MICMemorySize </dt>
<dd>The family, SKU (model), serial number, number of active cores, and memory size (in kB) of an Intel Xeon Phi (MIC) coprocessor.  </dd>
<dt>DMIBoardVendor, DMIBoardName, etc. (Machine object) </dt>
<dd>DMI hardware information such as the motherboard and chassis models and vendors, the BIOS revision, etc., as reported by Linux under <code>/sys/class/dmi/id/</code>.  </dd>
<dt>Address, Port (Network interface OS devices) </dt>
<dd>The MAC address and the port number of a software network interface, such as <code>eth4</code> on Linux.  </dd>
<dt>NodeGUID, SysImageGUID, Port1State, Port2LID, Port2LMC, Port3GID1 (OpenFabrics OS devices) </dt>
<dd>The node GUID and GUID mask, the state of a port #1 (value is 4 when active), the LID and LID mask count of port #2, and GID #1 of port #3.  </dd>
</dl>
</div></div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
