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
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div class="tabs">
    <ul>
      <li><a href="files.php"><span>File&nbsp;List</span></a></li>
      <li><a href="globals.php"><span>Globals</span></a></li>
    </ul>
  </div>
</div>
<div class="contents">
<h1>hwloc.h File Reference</h1>
<p>The hwloc API.  
<a href="#_details">More...</a></p>
<code>#include &lt;hwloc/config.h&gt;</code><br/>
<code>#include &lt;sys/types.h&gt;</code><br/>
<code>#include &lt;stdio.h&gt;</code><br/>
<code>#include &lt;limits.h&gt;</code><br/>
<code>#include &lt;hwloc/rename.h&gt;</code><br/>
<code>#include &lt;<a class="el" href="cpuset_8h_source.php">hwloc/cpuset.h</a>&gt;</code><br/>
<code>#include &lt;<a class="el" href="helper_8h_source.php">hwloc/helper.h</a>&gt;</code><br/>

<p><a href="hwloc_8h_source.php">Go to the source code of this file.</a></p>
<table border="0" cellpadding="0" cellspacing="0">
<tr><td colspan="2"><h2>Data Structures</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj__memory__s.php">hwloc_obj_memory_s</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Object memory.  <a href="structhwloc__obj__memory__s.php#_details">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj__memory__s_1_1hwloc__obj__memory__page__type__s.php">hwloc_obj_memory_s::hwloc_obj_memory_page_type_s</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Array of local memory page types, <code>NULL</code> if no local memory and <code>page_types</code> is 0.  <a href="structhwloc__obj__memory__s_1_1hwloc__obj__memory__page__type__s.php#_details">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj.php">hwloc_obj</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Structure of a topology object.  <a href="structhwloc__obj.php#_details">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">union &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="unionhwloc__obj__attr__u.php">hwloc_obj_attr_u</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Object type-specific Attributes.  <a href="unionhwloc__obj__attr__u.php#_details">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj__attr__u_1_1hwloc__cache__attr__s.php">hwloc_obj_attr_u::hwloc_cache_attr_s</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Cache-specific Object Attributes.  <a href="structhwloc__obj__attr__u_1_1hwloc__cache__attr__s.php#_details">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj__attr__u_1_1hwloc__machine__attr__s.php">hwloc_obj_attr_u::hwloc_machine_attr_s</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Machine-specific Object Attributes.  <a href="structhwloc__obj__attr__u_1_1hwloc__machine__attr__s.php#_details">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj__attr__u_1_1hwloc__group__attr__s.php">hwloc_obj_attr_u::hwloc_group_attr_s</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Group-specific Object Attributes.  <a href="structhwloc__obj__attr__u_1_1hwloc__group__attr__s.php#_details">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__topology__discovery__support.php">hwloc_topology_discovery_support</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Flags describing actual discovery support for this topology.  <a href="structhwloc__topology__discovery__support.php#_details">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__topology__cpubind__support.php">hwloc_topology_cpubind_support</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Flags describing actual binding support for this topology.  <a href="structhwloc__topology__cpubind__support.php#_details">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__topology__support.php">hwloc_topology_support</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Set of flags describing actual support for this topology.  <a href="structhwloc__topology__support.php#_details">More...</a><br/></td></tr>
<tr><td colspan="2"><h2>Defines</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">#define&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__api__version.php#ga8f4dfb8eef138af55dd1a0fa802e5476">HWLOC_API_VERSION</a>&nbsp;&nbsp;&nbsp;0x00010000</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Indicate at build time which hwloc API version is being used.  <a href="group__hwlocality__api__version.php#ga8f4dfb8eef138af55dd1a0fa802e5476"></a><br/></td></tr>
<tr><td colspan="2"><h2>Typedefs</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">typedef struct hwloc_topology *&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Topology context.  <a href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">typedef struct <a class="el" href="structhwloc__obj.php">hwloc_obj</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__objects.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a></td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Convenience typedef; a pointer to a struct <a class="el" href="structhwloc__obj.php" title="Structure of a topology object.">hwloc_obj</a>.  <a href="group__hwlocality__objects.php#ga79b8ab56877ef99ac59b833203391c7d"></a><br/></td></tr>
<tr><td colspan="2"><h2>Enumerations</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">enum &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> { <br/>
&nbsp;&nbsp;<a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a3aa1b842d1fd4207ebce171f95a244ec">HWLOC_OBJ_SYSTEM</a>, 
<a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a3f4e83ffc4a259354959ae8a9eaa2a80">HWLOC_OBJ_MACHINE</a>, 
<a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55aaf0964881117bdedf1a5e9332cd120dd">HWLOC_OBJ_NODE</a>, 
<a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a1ac6e07775ae4324b3fe9dbd72c785ec">HWLOC_OBJ_SOCKET</a>, 
<br/>
&nbsp;&nbsp;<a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a56ee0b7eca88f363b75b34fdde8c9ddc">HWLOC_OBJ_CACHE</a>, 
<a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55ac793958f330bca371aa1535de8aff45f">HWLOC_OBJ_CORE</a>, 
<a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55abca6887e80cb291353b0a0c1da83f661">HWLOC_OBJ_PU</a>, 
<a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a5269ef95be72f88465559d35c9b7ad56">HWLOC_OBJ_GROUP</a>, 
<br/>
&nbsp;&nbsp;<a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a19f8a6953fa91efc76bcbcdf2d22de4d">HWLOC_OBJ_MISC</a>
<br/>
 }</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight"><p>Type of topology object. </p>
 <a href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">enum &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__types.php#ga46323568968005137c32f6a1cd405b74">hwloc_compare_types_e</a> { <a class="el" href="group__hwlocality__types.php#gga46323568968005137c32f6a1cd405b74a2f8297ea36eba46e7596e810a67298fb">HWLOC_TYPE_UNORDERED</a>
 }</td></tr>
<tr><td class="memItemLeft" align="right" valign="top">enum &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__configuration.php#gada025d3ec20b4b420f8038d23d6e7bde">hwloc_topology_flags_e</a> { <a class="el" href="group__hwlocality__configuration.php#ggada025d3ec20b4b420f8038d23d6e7bdea129b4fea1300be22bbaf0bb0958994c8">HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM</a>, 
<a class="el" href="group__hwlocality__configuration.php#ggada025d3ec20b4b420f8038d23d6e7bdea6ecb6abc6a0bb75e81564f8bca85783b">HWLOC_TOPOLOGY_FLAG_IS_THISSYSTEM</a>
 }</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight"><p>Flags to be set onto a topology context before load. </p>
 <a href="group__hwlocality__configuration.php#gada025d3ec20b4b420f8038d23d6e7bde">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">enum &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__information.php#gaf4e663cf42bbe20756b849c6293ef575">hwloc_get_type_depth_e</a> { <a class="el" href="group__hwlocality__information.php#ggaf4e663cf42bbe20756b849c6293ef575a0565ab92ab72cb0cec91e23003294aad">HWLOC_TYPE_DEPTH_UNKNOWN</a>, 
<a class="el" href="group__hwlocality__information.php#ggaf4e663cf42bbe20756b849c6293ef575ae99465995cacde6c210d5fc2e409798c">HWLOC_TYPE_DEPTH_MULTIPLE</a>
 }</td></tr>
<tr><td class="memItemLeft" align="right" valign="top">enum &nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__binding.php#ga9b2de9a34a18edb39fb272adf9c33622">hwloc_cpubind_policy_t</a> { <a class="el" href="group__hwlocality__binding.php#gga9b2de9a34a18edb39fb272adf9c33622a2e0dd0128dac6b03408c7dd170477fdc">HWLOC_CPUBIND_PROCESS</a>, 
<a class="el" href="group__hwlocality__binding.php#gga9b2de9a34a18edb39fb272adf9c33622af1b6bbad00d7b1017b918e3719f4d421">HWLOC_CPUBIND_THREAD</a>, 
<a class="el" href="group__hwlocality__binding.php#gga9b2de9a34a18edb39fb272adf9c33622a679a7e0f0c7ee06b123565f90d98e7fa">HWLOC_CPUBIND_STRICT</a>
 }</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight"><p>Process/Thread binding policy. </p>
 <a href="group__hwlocality__binding.php#ga9b2de9a34a18edb39fb272adf9c33622">More...</a><br/></td></tr>
<tr><td colspan="2"><h2>Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__types.php#gabd7da4f4ea12b420b8ecbde458b27805">hwloc_compare_types</a> (<a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type1, <a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type2) </td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Compare the depth of two object types.  <a href="group__hwlocality__types.php#gabd7da4f4ea12b420b8ecbde458b27805"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__creation.php#ga5c2d6f476af87005c7bd0811d4548b9f">hwloc_topology_init</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> *topologyp)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Allocate a topology context.  <a href="group__hwlocality__creation.php#ga5c2d6f476af87005c7bd0811d4548b9f"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__creation.php#ga91e2e6427b95fb7339c99dbbef996e71">hwloc_topology_load</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Build the actual topology.  <a href="group__hwlocality__creation.php#ga91e2e6427b95fb7339c99dbbef996e71"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> void&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__creation.php#ga6040925d3ee4bbb2647f2a321aca5f4b">hwloc_topology_destroy</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Terminate and free a topology context.  <a href="group__hwlocality__creation.php#ga6040925d3ee4bbb2647f2a321aca5f4b"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> void&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__creation.php#gab3628b2a540a5a08e8cf724ef829e70a">hwloc_topology_check</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Run internal checks on a topology structure.  <a href="group__hwlocality__creation.php#gab3628b2a540a5a08e8cf724ef829e70a"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__configuration.php#gaf2071c8621fddc53649c245d87835b47">hwloc_topology_ignore_type</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Ignore an object type.  <a href="group__hwlocality__configuration.php#gaf2071c8621fddc53649c245d87835b47"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__configuration.php#ga6ddd4213d95bd1c30555b294a60efa6b">hwloc_topology_ignore_type_keep_structure</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Ignore an object type if it does not bring any structure.  <a href="group__hwlocality__configuration.php#ga6ddd4213d95bd1c30555b294a60efa6b"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__configuration.php#gaec6fb00050f50cd41007f1ae580d2106">hwloc_topology_ignore_all_keep_structure</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Ignore all objects that do not bring any structure.  <a href="group__hwlocality__configuration.php#gaec6fb00050f50cd41007f1ae580d2106"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__configuration.php#ga6d11e53db143ac39c32cdb3912b71f99">hwloc_topology_set_flags</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, unsigned long flags)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Set OR'ed flags to non-yet-loaded topology.  <a href="group__hwlocality__configuration.php#ga6d11e53db143ac39c32cdb3912b71f99"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__configuration.php#ga2f6bfb6958d8b508ea1d7d5bb266432c">hwloc_topology_set_fsroot</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict topology, const char *restrict fsroot_path)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Change the file-system root path when building the topology from sysfs/procfs.  <a href="group__hwlocality__configuration.php#ga2f6bfb6958d8b508ea1d7d5bb266432c"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__configuration.php#gae1100de0162b3c6a9db750ac14629c05">hwloc_topology_set_pid</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict topology, hwloc_pid_t pid)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Change which pid the topology is viewed from.  <a href="group__hwlocality__configuration.php#gae1100de0162b3c6a9db750ac14629c05"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__configuration.php#ga2fcb52181b586c20f001b7a999550324">hwloc_topology_set_synthetic</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict topology, const char *restrict description)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Enable synthetic topology.  <a href="group__hwlocality__configuration.php#ga2fcb52181b586c20f001b7a999550324"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__configuration.php#ga93efcc8a962afe1ed23393700682173f">hwloc_topology_set_xml</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict topology, const char *restrict xmlpath)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Enable XML-file based topology.  <a href="group__hwlocality__configuration.php#ga93efcc8a962afe1ed23393700682173f"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> struct <br class="typebreak"/>
<a class="el" href="structhwloc__topology__support.php">hwloc_topology_support</a> *&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__configuration.php#gac2126e105f3ae708efca2e90d612625a">hwloc_topology_get_support</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict topology)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Retrieve the topology support.  <a href="group__hwlocality__configuration.php#gac2126e105f3ae708efca2e90d612625a"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> void&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__tinker.php#ga1c9d8e608232206ce2142fe806a6835b">hwloc_topology_export_xml</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, const char *xmlpath)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Export the topology into an XML file.  <a href="group__hwlocality__tinker.php#ga1c9d8e608232206ce2142fe806a6835b"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__tinker.php#ga017a9ba16d554326c6e3812d545d7230">hwloc_topology_insert_misc_object_by_cpuset</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> cpuset, const char *name)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Add a MISC object to the topology.  <a href="group__hwlocality__tinker.php#ga017a9ba16d554326c6e3812d545d7230"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__tinker.php#gadacd7a3d21220fbb30c3256d8b22a294">hwloc_topology_insert_misc_object_by_parent</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> parent, const char *name)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Add a MISC object to the topology.  <a href="group__hwlocality__tinker.php#gadacd7a3d21220fbb30c3256d8b22a294"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> unsigned&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__information.php#ga8c30b0cec55074eb3ed34e4f2a1a9937">hwloc_topology_get_depth</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict topology) </td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Get the depth of the hierachical tree of objects.  <a href="group__hwlocality__information.php#ga8c30b0cec55074eb3ed34e4f2a1a9937"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__information.php#gaea7c64dd59467f5201ba87712710b14d">hwloc_get_type_depth</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Returns the depth of objects of type <code>type</code>.  <a href="group__hwlocality__information.php#gaea7c64dd59467f5201ba87712710b14d"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> <a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__information.php#gadd4964764ae7e49231065d58a553fd31">hwloc_get_depth_type</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, unsigned depth) </td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Returns the type of objects at depth <code>depth</code>.  <a href="group__hwlocality__information.php#gadd4964764ae7e49231065d58a553fd31"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> unsigned&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__information.php#ga20cfe2456f4cfdd789c9aca6d2fdd69f">hwloc_get_nbobjs_by_depth</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, unsigned depth) </td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Returns the width of level at depth <code>depth</code>.  <a href="group__hwlocality__information.php#ga20cfe2456f4cfdd789c9aca6d2fdd69f"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline int <br class="typebreak"/>
&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__information.php#ga0131ab1051011fabfa69d7c1853e716c">hwloc_get_nbobjs_by_type</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Returns the width of level type <code>type</code>.  <a href="group__hwlocality__information.php#ga0131ab1051011fabfa69d7c1853e716c"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__information.php#ga0d109e33fc7990f62f665d336e5e5111">hwloc_topology_is_thissystem</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> restrict topology) </td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Does the topology context come from this system?  <a href="group__hwlocality__information.php#ga0d109e33fc7990f62f665d336e5e5111"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__traversal.php#gaedd78240b0c1108355586a268ec5a697">hwloc_get_obj_by_depth</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, unsigned depth, unsigned idx) </td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Returns the topology object at index <code>index</code> from depth <code>depth</code>.  <a href="group__hwlocality__traversal.php#gaedd78240b0c1108355586a268ec5a697"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline <br class="typebreak"/>
<a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> <br class="typebreak"/>
&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__traversal.php#ga701f83b2cf0cb8e0acd58cd2dc1c67a2">hwloc_get_obj_by_type</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type, unsigned idx)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Returns the topology object at index <code>index</code> with type <code>type</code>.  <a href="group__hwlocality__traversal.php#ga701f83b2cf0cb8e0acd58cd2dc1c67a2"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> const char *&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__conversion.php#ga7c61920feca6fd9006d930dabfc09058">hwloc_obj_type_string</a> (<a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type) </td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Return a stringified topology object type.  <a href="group__hwlocality__conversion.php#ga7c61920feca6fd9006d930dabfc09058"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> <a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__conversion.php#gade722091ae392fdc79557e797a16c370">hwloc_obj_type_of_string</a> (const char *string) </td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Return an object type from the string.  <a href="group__hwlocality__conversion.php#gade722091ae392fdc79557e797a16c370"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__conversion.php#ga3ad856e8f3487d340c82a23b8a2a0351">hwloc_obj_type_snprintf</a> (char *restrict string, size_t size, <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> obj, int verbose)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Stringify the type of a given topology object into a human-readable form.  <a href="group__hwlocality__conversion.php#ga3ad856e8f3487d340c82a23b8a2a0351"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__conversion.php#ga0db8286d7f3ceda8defd76e3e1e2b284">hwloc_obj_attr_snprintf</a> (char *restrict string, size_t size, <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> obj, const char *restrict separator, int verbose)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Stringify the attributes of a given topology object into a human-readable form.  <a href="group__hwlocality__conversion.php#ga0db8286d7f3ceda8defd76e3e1e2b284"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__conversion.php#ga5c6a61a83f4790b421e2f62e9088446f">hwloc_obj_snprintf</a> (char *restrict string, size_t size, <a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> obj, const char *restrict indexprefix, int verbose)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Stringify a given topology object into a human-readable form.  <a href="group__hwlocality__conversion.php#ga5c6a61a83f4790b421e2f62e9088446f"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__conversion.php#gabbfb92224c992c0e2ecef6b6e45260f2">hwloc_obj_cpuset_snprintf</a> (char *restrict str, size_t size, size_t nobj, const <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> *restrict objs)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Stringify the cpuset containing a set of objects.  <a href="group__hwlocality__conversion.php#gabbfb92224c992c0e2ecef6b6e45260f2"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__binding.php#ga42f02baaf7dc0c0f5a6bbeca731fd144">hwloc_set_cpubind</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> set, int policy)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Bind current process or thread on cpus given in cpuset <code>set</code>.  <a href="group__hwlocality__binding.php#ga42f02baaf7dc0c0f5a6bbeca731fd144"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__binding.php#ga55427f8da8073ae16d0bab11f8137f1c">hwloc_get_cpubind</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a> set, int policy)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Get current process or thread binding.  <a href="group__hwlocality__binding.php#ga55427f8da8073ae16d0bab11f8137f1c"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__binding.php#gac349497da8f4f738bad51b2861461dc3">hwloc_set_proc_cpubind</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, hwloc_pid_t pid, <a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> set, int policy)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Bind a process <code>pid</code> on cpus given in cpuset <code>set</code>.  <a href="group__hwlocality__binding.php#gac349497da8f4f738bad51b2861461dc3"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__binding.php#ga02141a2049739d63a5fa7a172d301f1c">hwloc_get_proc_cpubind</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, hwloc_pid_t pid, <a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a> set, int policy)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Get the current binding of process <code>pid</code>.  <a href="group__hwlocality__binding.php#ga02141a2049739d63a5fa7a172d301f1c"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>The hwloc API. </p>
<p>See <a class="el" href="cpuset_8h.php" title="The Cpuset API, for use in hwloc itself.">hwloc/cpuset.h</a> for CPU set specific macros. See <a class="el" href="helper_8h.php" title="High-level hwloc traversal helpers.">hwloc/helper.h</a> for high-level topology traversal helpers. </p>
</div>
<?php
include_once("$topdir/includes/footer.inc");
