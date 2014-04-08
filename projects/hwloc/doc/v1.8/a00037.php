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
<!-- Generated by Doxygen 1.8.5 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li class="current"><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li><a href="functions.php"><span>Data&#160;Fields</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-attribs">Data Fields</a>  </div>
  <div class="headertitle">
<div class="title">hwloc_obj Struct Reference<div class="ingroups"><a class="el" href="a00076.php">Object Structure and Attributes</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p><code>#include &lt;<a class="el" href="a00064_source.php">hwloc.h</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-attribs"></a>
Data Fields</h2></td></tr>
<tr class="memitem:acc4f0803f244867e68fe0036800be5de"><td class="memItemLeft" align="right" valign="top"><a class="el" href="a00075.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php#acc4f0803f244867e68fe0036800be5de">type</a></td></tr>
<tr class="separator:acc4f0803f244867e68fe0036800be5de"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a61a7a80a68eaccbaaa28269e678c81a9"><td class="memItemLeft" align="right" valign="top">unsigned&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php#a61a7a80a68eaccbaaa28269e678c81a9">os_index</a></td></tr>
<tr class="separator:a61a7a80a68eaccbaaa28269e678c81a9"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:abb709ec38f2970677e4e57d1d30be96d"><td class="memItemLeft" align="right" valign="top">char *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php#abb709ec38f2970677e4e57d1d30be96d">name</a></td></tr>
<tr class="separator:abb709ec38f2970677e4e57d1d30be96d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a1dc830816716213b5f797e4052487864"><td class="memItemLeft" align="right" valign="top">struct <a class="el" href="a00041.php">hwloc_obj_memory_s</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php#a1dc830816716213b5f797e4052487864">memory</a></td></tr>
<tr class="separator:a1dc830816716213b5f797e4052487864"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:accd40e29f71f19e88db62ea3df02adc8"><td class="memItemLeft" align="right" valign="top">union <a class="el" href="a00038.php">hwloc_obj_attr_u</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php#accd40e29f71f19e88db62ea3df02adc8">attr</a></td></tr>
<tr class="separator:accd40e29f71f19e88db62ea3df02adc8"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9d82690370275d42d652eccdea5d3ee5"><td class="memItemLeft" align="right" valign="top">unsigned&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php#a9d82690370275d42d652eccdea5d3ee5">depth</a></td></tr>
<tr class="separator:a9d82690370275d42d652eccdea5d3ee5"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0d07fb7b8935e137c94d75a3eb492ae9"><td class="memItemLeft" align="right" valign="top">unsigned&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php#a0d07fb7b8935e137c94d75a3eb492ae9">logical_index</a></td></tr>
<tr class="separator:a0d07fb7b8935e137c94d75a3eb492ae9"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a68766f0b1c4d61b5bad87e3b81dacfde"><td class="memItemLeft" align="right" valign="top">signed&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php#a68766f0b1c4d61b5bad87e3b81dacfde">os_level</a></td></tr>
<tr class="separator:a68766f0b1c4d61b5bad87e3b81dacfde"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a85a788017457129589318b6c39451acf"><td class="memItemLeft" align="right" valign="top">struct <a class="el" href="a00037.php">hwloc_obj</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php#a85a788017457129589318b6c39451acf">next_cousin</a></td></tr>
<tr class="separator:a85a788017457129589318b6c39451acf"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac715989f55ff5a0eb6be2969ee477ec0"><td class="memItemLeft" align="right" valign="top">struct <a class="el" href="a00037.php">hwloc_obj</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php#ac715989f55ff5a0eb6be2969ee477ec0">prev_cousin</a></td></tr>
<tr class="separator:ac715989f55ff5a0eb6be2969ee477ec0"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:adc494f6aed939992be1c55cca5822900"><td class="memItemLeft" align="right" valign="top">struct <a class="el" href="a00037.php">hwloc_obj</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php#adc494f6aed939992be1c55cca5822900">parent</a></td></tr>
<tr class="separator:adc494f6aed939992be1c55cca5822900"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aaa6043eee6f55869933c1d974efd9acd"><td class="memItemLeft" align="right" valign="top">unsigned&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php#aaa6043eee6f55869933c1d974efd9acd">sibling_rank</a></td></tr>
<tr class="separator:aaa6043eee6f55869933c1d974efd9acd"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a7f2343ed476fe4942e6fffd4cade1b40"><td class="memItemLeft" align="right" valign="top">struct <a class="el" href="a00037.php">hwloc_obj</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php#a7f2343ed476fe4942e6fffd4cade1b40">next_sibling</a></td></tr>
<tr class="separator:a7f2343ed476fe4942e6fffd4cade1b40"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a7b89e8c189876c0158a9282aaaf17f50"><td class="memItemLeft" align="right" valign="top">struct <a class="el" href="a00037.php">hwloc_obj</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php#a7b89e8c189876c0158a9282aaaf17f50">prev_sibling</a></td></tr>
<tr class="separator:a7b89e8c189876c0158a9282aaaf17f50"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aac3f6da35c9b57599909a44ce2b716c1"><td class="memItemLeft" align="right" valign="top">unsigned&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php#aac3f6da35c9b57599909a44ce2b716c1">arity</a></td></tr>
<tr class="separator:aac3f6da35c9b57599909a44ce2b716c1"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a04d05403da37bfe17cd63b7c7dd07b1f"><td class="memItemLeft" align="right" valign="top">struct <a class="el" href="a00037.php">hwloc_obj</a> **&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php#a04d05403da37bfe17cd63b7c7dd07b1f">children</a></td></tr>
<tr class="separator:a04d05403da37bfe17cd63b7c7dd07b1f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af51d08a0a79dba517c06c5afedc8d2dc"><td class="memItemLeft" align="right" valign="top">struct <a class="el" href="a00037.php">hwloc_obj</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php#af51d08a0a79dba517c06c5afedc8d2dc">first_child</a></td></tr>
<tr class="separator:af51d08a0a79dba517c06c5afedc8d2dc"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a84bd65634dbc55f4158b74443a9bd04f"><td class="memItemLeft" align="right" valign="top">struct <a class="el" href="a00037.php">hwloc_obj</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php#a84bd65634dbc55f4158b74443a9bd04f">last_child</a></td></tr>
<tr class="separator:a84bd65634dbc55f4158b74443a9bd04f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a76fd3ac94401cf32dfccc3a3a8de68a5"><td class="memItemLeft" align="right" valign="top">void *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php#a76fd3ac94401cf32dfccc3a3a8de68a5">userdata</a></td></tr>
<tr class="separator:a76fd3ac94401cf32dfccc3a3a8de68a5"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a67925e0f2c47f50408fbdb9bddd0790f"><td class="memItemLeft" align="right" valign="top"><a class="el" href="a00074.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php#a67925e0f2c47f50408fbdb9bddd0790f">cpuset</a></td></tr>
<tr class="separator:a67925e0f2c47f50408fbdb9bddd0790f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a91788a9da687beb7224cc1fd7b75208c"><td class="memItemLeft" align="right" valign="top"><a class="el" href="a00074.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php#a91788a9da687beb7224cc1fd7b75208c">complete_cpuset</a></td></tr>
<tr class="separator:a91788a9da687beb7224cc1fd7b75208c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a8842d56c2975380f327ea401c5f53564"><td class="memItemLeft" align="right" valign="top"><a class="el" href="a00074.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php#a8842d56c2975380f327ea401c5f53564">online_cpuset</a></td></tr>
<tr class="separator:a8842d56c2975380f327ea401c5f53564"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:afa3c59a6dd3da8ffa48710780a1bfb34"><td class="memItemLeft" align="right" valign="top"><a class="el" href="a00074.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php#afa3c59a6dd3da8ffa48710780a1bfb34">allowed_cpuset</a></td></tr>
<tr class="separator:afa3c59a6dd3da8ffa48710780a1bfb34"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a08f0d0e16c619a6e653526cbee4ffea3"><td class="memItemLeft" align="right" valign="top"><a class="el" href="a00074.php#ga37e35730fa7e775b5bb0afe893d6d508">hwloc_nodeset_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php#a08f0d0e16c619a6e653526cbee4ffea3">nodeset</a></td></tr>
<tr class="separator:a08f0d0e16c619a6e653526cbee4ffea3"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac38c4012127525ef74c5615c526f4c2e"><td class="memItemLeft" align="right" valign="top"><a class="el" href="a00074.php#ga37e35730fa7e775b5bb0afe893d6d508">hwloc_nodeset_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php#ac38c4012127525ef74c5615c526f4c2e">complete_nodeset</a></td></tr>
<tr class="separator:ac38c4012127525ef74c5615c526f4c2e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a19e3d0a5951a7510fc4fc4722a9bf531"><td class="memItemLeft" align="right" valign="top"><a class="el" href="a00074.php#ga37e35730fa7e775b5bb0afe893d6d508">hwloc_nodeset_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php#a19e3d0a5951a7510fc4fc4722a9bf531">allowed_nodeset</a></td></tr>
<tr class="separator:a19e3d0a5951a7510fc4fc4722a9bf531"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9a5dd75596edc48fe834f81988cdc0d6"><td class="memItemLeft" align="right" valign="top">struct <a class="el" href="a00035.php">hwloc_distances_s</a> **&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php#a9a5dd75596edc48fe834f81988cdc0d6">distances</a></td></tr>
<tr class="separator:a9a5dd75596edc48fe834f81988cdc0d6"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a8be6f63eca4da91000c832280db927b7"><td class="memItemLeft" align="right" valign="top">unsigned&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php#a8be6f63eca4da91000c832280db927b7">distances_count</a></td></tr>
<tr class="separator:a8be6f63eca4da91000c832280db927b7"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad59bcd73a10260a0e239be5c4b5888bb"><td class="memItemLeft" align="right" valign="top">struct <a class="el" href="a00039.php">hwloc_obj_info_s</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php#ad59bcd73a10260a0e239be5c4b5888bb">infos</a></td></tr>
<tr class="separator:ad59bcd73a10260a0e239be5c4b5888bb"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9843acc28cfbba903b63ea14b137ff70"><td class="memItemLeft" align="right" valign="top">unsigned&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php#a9843acc28cfbba903b63ea14b137ff70">infos_count</a></td></tr>
<tr class="separator:a9843acc28cfbba903b63ea14b137ff70"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0f41a1d67dc6b661906f2217563637f3"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00037.php#a0f41a1d67dc6b661906f2217563637f3">symmetric_subtree</a></td></tr>
<tr class="separator:a0f41a1d67dc6b661906f2217563637f3"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Structure of a topology object. </p>
<p>Applications must not modify any field except <a class="el" href="a00037.php#a76fd3ac94401cf32dfccc3a3a8de68a5" title="Application-given private data pointer, initialized to NULL, use it as you wish. See hwloc_topology_s...">hwloc_obj.userdata</a>. </p>
</div><h2 class="groupheader">Field Documentation</h2>
<a class="anchor" id="afa3c59a6dd3da8ffa48710780a1bfb34"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="a00074.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> hwloc_obj::allowed_cpuset</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>The CPU set of allowed logical processors. </p>
<p>This includes the CPUs contained in this object which are allowed for binding, i.e. passing them to the hwloc binding functions should not return permission errors. This is usually restricted by administration rules. Some of them may however be offline so binding to them may still not be possible, see online_cpuset.</p>
<dl class="section note"><dt>Note</dt><dd>Its value must not be changed, hwloc_bitmap_dup must be used instead. </dd></dl>

</div>
</div>
<a class="anchor" id="a19e3d0a5951a7510fc4fc4722a9bf531"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="a00074.php#ga37e35730fa7e775b5bb0afe893d6d508">hwloc_nodeset_t</a> hwloc_obj::allowed_nodeset</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>The set of allowed NUMA memory nodes. </p>
<p>This includes the NUMA memory nodes contained in this object which are allowed for memory allocation, i.e. passing them to NUMA node-directed memory allocation should not return permission errors. This is usually restricted by administration rules.</p>
<p>If there are no NUMA nodes in the machine, all the memory is close to this object, so <code>allowed_nodeset</code> is full.</p>
<dl class="section note"><dt>Note</dt><dd>Its value must not be changed, hwloc_bitmap_dup must be used instead. </dd></dl>

</div>
</div>
<a class="anchor" id="aac3f6da35c9b57599909a44ce2b716c1"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned hwloc_obj::arity</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Number of children. </p>

</div>
</div>
<a class="anchor" id="accd40e29f71f19e88db62ea3df02adc8"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">union <a class="el" href="a00038.php">hwloc_obj_attr_u</a>* hwloc_obj::attr</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Object type-specific Attributes, may be <code>NULL</code> if no attribute value was found. </p>

</div>
</div>
<a class="anchor" id="a04d05403da37bfe17cd63b7c7dd07b1f"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="a00037.php">hwloc_obj</a>** hwloc_obj::children</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Children, <code>children</code>[0 .. arity -1]. </p>

</div>
</div>
<a class="anchor" id="a91788a9da687beb7224cc1fd7b75208c"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="a00074.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> hwloc_obj::complete_cpuset</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>The complete CPU set of logical processors of this object,. </p>
<p>This includes not only the same as the cpuset field, but also the CPUs for which topology information is unknown or incomplete, and the CPUs that are ignored when the HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM flag is not set. Thus no corresponding PU object may be found in the topology, because the precise position is undefined. It is however known that it would be somewhere under this object.</p>
<dl class="section note"><dt>Note</dt><dd>Its value must not be changed, hwloc_bitmap_dup must be used instead. </dd></dl>

</div>
</div>
<a class="anchor" id="ac38c4012127525ef74c5615c526f4c2e"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="a00074.php#ga37e35730fa7e775b5bb0afe893d6d508">hwloc_nodeset_t</a> hwloc_obj::complete_nodeset</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>The complete NUMA node set of this object,. </p>
<p>This includes not only the same as the nodeset field, but also the NUMA nodes for which topology information is unknown or incomplete, and the nodes that are ignored when the HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM flag is not set. Thus no corresponding NODE object may be found in the topology, because the precise position is undefined. It is however known that it would be somewhere under this object.</p>
<p>If there are no NUMA nodes in the machine, all the memory is close to this object, so <code>complete_nodeset</code> is full.</p>
<dl class="section note"><dt>Note</dt><dd>Its value must not be changed, hwloc_bitmap_dup must be used instead. </dd></dl>

</div>
</div>
<a class="anchor" id="a67925e0f2c47f50408fbdb9bddd0790f"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="a00074.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> hwloc_obj::cpuset</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>CPUs covered by this object. </p>
<p>This is the set of CPUs for which there are PU objects in the topology under this object, i.e. which are known to be physically contained in this object and known how (the children path between this object and the PU objects).</p>
<p>If the HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM configuration flag is set, some of these CPUs may be offline, or not allowed for binding, see online_cpuset and allowed_cpuset.</p>
<dl class="section note"><dt>Note</dt><dd>Its value must not be changed, hwloc_bitmap_dup must be used instead. </dd></dl>

</div>
</div>
<a class="anchor" id="a9d82690370275d42d652eccdea5d3ee5"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned hwloc_obj::depth</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Vertical index in the hierarchy. If the topology is symmetric, this is equal to the parent depth plus one, and also equal to the number of parent/child links from the root object to here. </p>

</div>
</div>
<a class="anchor" id="a9a5dd75596edc48fe834f81988cdc0d6"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="a00035.php">hwloc_distances_s</a>** hwloc_obj::distances</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Distances between all objects at same depth below this object. </p>

</div>
</div>
<a class="anchor" id="a8be6f63eca4da91000c832280db927b7"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned hwloc_obj::distances_count</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a class="anchor" id="af51d08a0a79dba517c06c5afedc8d2dc"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="a00037.php">hwloc_obj</a>* hwloc_obj::first_child</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>First child. </p>

</div>
</div>
<a class="anchor" id="ad59bcd73a10260a0e239be5c4b5888bb"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="a00039.php">hwloc_obj_info_s</a>* hwloc_obj::infos</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Array of stringified info type=name. </p>

</div>
</div>
<a class="anchor" id="a9843acc28cfbba903b63ea14b137ff70"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned hwloc_obj::infos_count</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Size of infos array. </p>

</div>
</div>
<a class="anchor" id="a84bd65634dbc55f4158b74443a9bd04f"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="a00037.php">hwloc_obj</a>* hwloc_obj::last_child</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Last child. </p>

</div>
</div>
<a class="anchor" id="a0d07fb7b8935e137c94d75a3eb492ae9"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned hwloc_obj::logical_index</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Horizontal index in the whole list of similar objects, could be a "cousin_rank" since it's the rank within the "cousin" list below. </p>

</div>
</div>
<a class="anchor" id="a1dc830816716213b5f797e4052487864"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="a00041.php">hwloc_obj_memory_s</a> hwloc_obj::memory</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Memory attributes. </p>

</div>
</div>
<a class="anchor" id="abb709ec38f2970677e4e57d1d30be96d"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">char* hwloc_obj::name</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Object description if any. </p>

</div>
</div>
<a class="anchor" id="a85a788017457129589318b6c39451acf"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="a00037.php">hwloc_obj</a>* hwloc_obj::next_cousin</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Next object of same type and depth. </p>

</div>
</div>
<a class="anchor" id="a7f2343ed476fe4942e6fffd4cade1b40"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="a00037.php">hwloc_obj</a>* hwloc_obj::next_sibling</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Next object below the same parent. </p>

</div>
</div>
<a class="anchor" id="a08f0d0e16c619a6e653526cbee4ffea3"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="a00074.php#ga37e35730fa7e775b5bb0afe893d6d508">hwloc_nodeset_t</a> hwloc_obj::nodeset</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>NUMA nodes covered by this object or containing this object. </p>
<p>This is the set of NUMA nodes for which there are NODE objects in the topology under or above this object, i.e. which are known to be physically contained in this object or containing it and known how (the children path between this object and the NODE objects).</p>
<p>In the end, these nodes are those that are close to the current object.</p>
<p>If the HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM configuration flag is set, some of these nodes may not be allowed for allocation, see allowed_nodeset.</p>
<p>If there are no NUMA nodes in the machine, all the memory is close to this object, so <code>nodeset</code> is full.</p>
<dl class="section note"><dt>Note</dt><dd>Its value must not be changed, hwloc_bitmap_dup must be used instead. </dd></dl>

</div>
</div>
<a class="anchor" id="a8842d56c2975380f327ea401c5f53564"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="a00074.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> hwloc_obj::online_cpuset</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>The CPU set of online logical processors. </p>
<p>This includes the CPUs contained in this object that are online, i.e. draw power and can execute threads. It may however not be allowed to bind to them due to administration rules, see allowed_cpuset.</p>
<dl class="section note"><dt>Note</dt><dd>Its value must not be changed, hwloc_bitmap_dup must be used instead. </dd></dl>

</div>
</div>
<a class="anchor" id="a61a7a80a68eaccbaaa28269e678c81a9"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned hwloc_obj::os_index</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>OS-provided physical index number. </p>

</div>
</div>
<a class="anchor" id="a68766f0b1c4d61b5bad87e3b81dacfde"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">signed hwloc_obj::os_level</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>OS-provided physical level, -1 if unknown or meaningless. </p>

</div>
</div>
<a class="anchor" id="adc494f6aed939992be1c55cca5822900"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="a00037.php">hwloc_obj</a>* hwloc_obj::parent</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Parent, <code>NULL</code> if root (system object) </p>

</div>
</div>
<a class="anchor" id="ac715989f55ff5a0eb6be2969ee477ec0"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="a00037.php">hwloc_obj</a>* hwloc_obj::prev_cousin</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Previous object of same type and depth. </p>

</div>
</div>
<a class="anchor" id="a7b89e8c189876c0158a9282aaaf17f50"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="a00037.php">hwloc_obj</a>* hwloc_obj::prev_sibling</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Previous object below the same parent. </p>

</div>
</div>
<a class="anchor" id="aaa6043eee6f55869933c1d974efd9acd"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned hwloc_obj::sibling_rank</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Index in parent's <code>children</code>[] array. </p>

</div>
</div>
<a class="anchor" id="a0f41a1d67dc6b661906f2217563637f3"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int hwloc_obj::symmetric_subtree</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Set if the subtree of objects below this object is symmetric, which means all children and their children have identical subtrees. If set in the topology root object, lstopo may export the topology as a synthetic string. </p>

</div>
</div>
<a class="anchor" id="acc4f0803f244867e68fe0036800be5de"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="a00075.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> hwloc_obj::type</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Type of object. </p>

</div>
</div>
<a class="anchor" id="a76fd3ac94401cf32dfccc3a3a8de68a5"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void* hwloc_obj::userdata</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Application-given private data pointer, initialized to <code>NULL</code>, use it as you wish. See <a class="el" href="a00085.php#gafd31ee85660ea15497e16cdcf9717f5c" title="Set the application-specific callback for exporting userdata. ">hwloc_topology_set_userdata_export_callback()</a> if you wish to export this field to XML. </p>

</div>
</div>
<hr/>The documentation for this struct was generated from the following file:<ul>
<li><a class="el" href="a00064_source.php">hwloc.h</a></li>
</ul>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
