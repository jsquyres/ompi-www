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
<div class="title">Components and plugins </div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><p><a class="anchor" id="plugins"></a> hwloc is organized in components that are responsible for discovering objects. Depending on the topology configuration, some components will be used, some will be ignored. The usual default is to enable the native operating system component, (e.g. <code>linux</code> or <code>solaris</code>) and the <code>libpci</code> additional component. If available, an architecture-specific component (such as <code>x86</code>) may also improve the topology detection.</p>
<p>If a XML topology is loaded, the <code>xml</code> discovery component will be used instead of all other components. It internally uses a specific class of components for the actual XML import/export routines (<code>xml_libxml</code> and <code>xml_nolibxml</code>) but these will not be discussed here (see <a class="el" href="a00008.php#xml_backends">libxml2 and minimalistic XML backends</a>).</p>
<h1><a class="anchor" id="plugins_default"></a>
Components enabled by default</h1>
<p>The hwloc core contains a list of components sorted by priority. Each one is enabled as long as it does not conflict with the previously enabled ones. This includes native operating system components, architecture-specific ones, and if available, I/O components such as <code>libpci</code>.</p>
<p>Usually the native operating system component (when it exists, e.g. <code>linux</code> or <code>aix</code>) is enabled first. Then hwloc looks for an architecture specific component (e.g. <code>x86</code>). Finally these also exist a basic component (<code>no_os</code>) that just tries to discover the number of PUs in the system.</p>
<p>Each component discovers as much topology information as possible. Most of them, including most native OS components, do nothing unless the topology is still empty. Some others, such as <code>x86</code> and <code>libpci</code>, can complete and annotate what other backends still earlier.</p>
<p>Default priorities ensure that clever components are invoked first. Native operating system components have higher priorities, and are therefore invoked first, because they likely offer very detailed topology information. If needed, it will be later extended by architecture-specific information (e.g. from the <code>x86</code> component).</p>
<p>If any configuration function such as <a class="el" href="a00047.php#ga93efcc8a962afe1ed23393700682173f" title="Enable XML-file based topology.">hwloc_topology_set_xml()</a> is used before loading the topology, the corresponding component is enabled first. Then, as usual, hwloc enables any other component (based on priorities) that does not conflict.</p>
<p>Certain components that manage a virtual topology, for instance XML topology import, synthetic topology description, or custom building, conflict with all other components. Therefore, one of them may only be loaded (e.g. with <code><a class="el" href="a00047.php#ga93efcc8a962afe1ed23393700682173f" title="Enable XML-file based topology.">hwloc_topology_set_xml()</a></code>) if no other component is enabled.</p>
<p>The environment variable <code>HWLOC_COMPONENTS_VERBOSE</code> may be set to get verbose messages about component registration (including their priority) and enabling.</p>
<h1><a class="anchor" id="plugins_select"></a>
Selecting which components to use</h1>
<p>Aside from topology configuration function such as <code><a class="el" href="a00047.php#ga12024fec46f9368fb8fc5c624089c5ec" title="Prepare the topology for custom assembly.">hwloc_topology_set_custom()</a></code>, the default priority order may be changed through the <code>HWLOC_COMPONENTS</code> environment variable (component names must be separated by commas).</p>
<p>Specifying <code>x86</code> in this variable will cause the <code>x86</code> component to take precedence over any other component, including the native operating system component. It is therefore loaded first, before hwloc tries to load all remaining non-conflicting components. In this case, <code>x86</code> would take care of discovering everything it supports, instead of only completing what the native OS information. This may be useful if the native component is buggy on some platforms.</p>
<p>It is possible to prevent all remaining components from being loaded by placing <code>stop</code> in the environment variable. Only the components listed before this keyword will be enabled.</p>
<p>Certain component names (<code>xml</code> and <code>synthetic</code>) accept an argument (e.g. <code>xml=file.xml</code>). These arguments behave exactly as if the corresponding string had been passed to <code><a class="el" href="a00047.php#ga93efcc8a962afe1ed23393700682173f" title="Enable XML-file based topology.">hwloc_topology_set_xml()</a></code> or <code><a class="el" href="a00047.php#ga2fcb52181b586c20f001b7a999550324" title="Enable synthetic topology.">hwloc_topology_set_synthetic()</a></code>.</p>
<h1><a class="anchor" id="plugins_config"></a>
Building components as plugins</h1>
<p>Components may optionally be built as plugins so that the hwloc core library does not directly depend on their dependencies (for instance the <code>libpci</code> library). Plugin support may be enabled with the <code>&ndash;enable-plugins</code> configure option. All components buildable as plugins will then be built as plugins. The configure option may be given a comma-separated list of component names to specify the exact list of components to build as plugins.</p>
<p>Plugins are built as independent dynamic libraries that are installed in <code>$libdir/hwloc</code>. All plugins found in this directory are loaded during <code>topology_init()</code>. A specific list of directories (colon-separated) to scan may be specified in the <code>HWLOC_PLUGINS_PATH</code> environment variable.</p>
<p>Plugin filenames must start with <code>hwloc_</code>. For instance the <code>libpci</code> plugin is usually built as <code>hwloc_libpci.so</code>.</p>
<p>Note that loading a plugin just means that the corresponding component is registered to the hwloc core. Components are then only enabled if the topology configuration requests it, as explained in the previous sections.</p>
<h1><a class="anchor" id="plugins_adding"></a>
Adding new discovery components and plugins</h1>
<p>Each new discovery component requires a new <code>hwloc_component</code> structure to be exported to the hwloc core with name <code>hwloc_&lt;name&gt;_component</code>. The configure script should then be modified to add <code>&lt;name&gt;</code> to the <code>hwloc_components</code> variable so that the component is actually available at runtime.</p>
<p>If the new component may be built as a plugin, the configure script should also define <code>hwloc_&lt;name&gt;_component_maybeplugin=1</code>. If the configure scripts decides to enable the component as a plugin, the variable <code>hwloc_&lt;name&gt;_component</code> will be set to <code>plugin</code>. The build system may then use this variable to actually change the way the component is built.</p>
<p>The component structure contains a data field that points to an <code>hwloc_disc_component</code> which defines an <code>instantiate</code> callback. This function is invoked when this component is actually used by a topology. It creates a <code>backend</code> structure that usually contains a <code>discover</code> and/or <code>notify_new_object</code> callback taking care of the actual topology discovery.</p>
<h1><a class="anchor" id="plugins_list"></a>
Existing components and plugins</h1>
<p>All components distributed within hwloc are listed below. The list of actually available components may be listed at running with the <code>HWLOC_COMPONENTS_VERBOSE</code> environment variable (see <a class="el" href="a00003.php#envvar">Environment Variables</a>).</p>
<dl>
<dt>aix, darwin, freebsd, hpux, linux, netbsd, osf, solaris, windows </dt>
<dd>Each officially supported operating system has its own native component, which is statically built when supported, and which is used by default.  </dd>
<dt>x86 </dt>
<dd>The x86 architecture (either 32 or 64 bits) has its own component that may complete or replace the previously-found CPU information. It is statically built when supported.  </dd>
<dt>no_os </dt>
<dd>A basic component that just tries to detect the number of processing units in the system. It mostly serves on operating systems that are not natively supported. It is always statically built.  </dd>
<dt>libpci </dt>
<dd>PCI object discovery uses the external pciutils library (aka libpci), see <a class="el" href="a00005.php#iodevices">I/O Devices</a>. <b>It may be built as a plugin</b>.  </dd>
<dt>synthetic </dt>
<dd>Synthetic topology support (see <a class="el" href="a00009.php#synthetic">Synthetic Topologies</a>) is always built statically.  </dd>
<dt>custom </dt>
<dd>Custom topology support (see <a class="el" href="a00006.php#multinode">Multi-node Topologies</a>) is always built statically.  </dd>
<dt>xml </dt>
<dd>XML topology import (see <a class="el" href="a00008.php#xml">Importing and exporting topologies from/to XML files</a>) is always built statically. It internally uses one of the XML backends (see <a class="el" href="a00008.php#xml_backends">libxml2 and minimalistic XML backends</a>). <ul>
<li>
<b>xml_nolibxml</b> is a basic and hwloc-specific XML import/export. It is always statically built.  </li>
<li>
<b>xml_libxml</b> relies on the external libxml2 library for provinding a feature-complete XML import/export. <b>It may be built as a plugin</b>.   </li>
</ul>
</dd>
<dt>fake </dt>
<dd>A dummy plugin that does nothing but is used for debugging plugin support.  </dd>
</dl>
</div></div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
