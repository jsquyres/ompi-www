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
<!-- Generated by Doxygen 1.7.2 -->
<div class="navigation" id="top">
  <div class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li class="current"><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li><a href="functions.php"><span>Data&#160;Fields</span></a></li>
    </ul>
  </div>
</div>
<div class="header">
  <div class="summary">
<a href="#pub-attribs">Data Fields</a>  </div>
  <div class="headertitle">
<h1>hwloc_obj Struct Reference<br/>
<small>
[<a class="el" href="group__hwlocality__objects.php">Topology Objects</a>]</small>
</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="hwloc_obj" -->
<p>Structure of a topology object.  
<a href="#_details">More...</a></p>

<p><code>#include &lt;<a class="el" href="hwloc_8h_source.php">hwloc.h</a>&gt;</code></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-attribs"></a>
Data Fields</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj.php#acc4f0803f244867e68fe0036800be5de">type</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Type of object.  <a href="#acc4f0803f244867e68fe0036800be5de"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">unsigned&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj.php#a61a7a80a68eaccbaaa28269e678c81a9">os_index</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">OS-provided physical index number.  <a href="#a61a7a80a68eaccbaaa28269e678c81a9"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">char *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj.php#abb709ec38f2970677e4e57d1d30be96d">name</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Object description if any.  <a href="#abb709ec38f2970677e4e57d1d30be96d"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct <a class="el" href="structhwloc__obj__memory__s.php">hwloc_obj_memory_s</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj.php#a1dc830816716213b5f797e4052487864">memory</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Memory attributes.  <a href="#a1dc830816716213b5f797e4052487864"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">union <a class="el" href="unionhwloc__obj__attr__u.php">hwloc_obj_attr_u</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj.php#accd40e29f71f19e88db62ea3df02adc8">attr</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Object type-specific Attributes, may be <code>NULL</code> if no attribute value was found.  <a href="#accd40e29f71f19e88db62ea3df02adc8"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">unsigned&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj.php#a9d82690370275d42d652eccdea5d3ee5">depth</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Vertical index in the hierarchy.  <a href="#a9d82690370275d42d652eccdea5d3ee5"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">unsigned&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj.php#a0d07fb7b8935e137c94d75a3eb492ae9">logical_index</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Horizontal index in the whole list of similar objects, could be a "cousin_rank" since it's the rank within the "cousin" list below.  <a href="#a0d07fb7b8935e137c94d75a3eb492ae9"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">signed&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj.php#a68766f0b1c4d61b5bad87e3b81dacfde">os_level</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">OS-provided physical level, -1 if unknown or meaningless.  <a href="#a68766f0b1c4d61b5bad87e3b81dacfde"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct <a class="el" href="structhwloc__obj.php">hwloc_obj</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj.php#a85a788017457129589318b6c39451acf">next_cousin</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Next object of same type.  <a href="#a85a788017457129589318b6c39451acf"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct <a class="el" href="structhwloc__obj.php">hwloc_obj</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj.php#ac715989f55ff5a0eb6be2969ee477ec0">prev_cousin</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Previous object of same type.  <a href="#ac715989f55ff5a0eb6be2969ee477ec0"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct <a class="el" href="structhwloc__obj.php">hwloc_obj</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj.php#adc494f6aed939992be1c55cca5822900">parent</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Parent, <code>NULL</code> if root (system object)  <a href="#adc494f6aed939992be1c55cca5822900"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">unsigned&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj.php#aaa6043eee6f55869933c1d974efd9acd">sibling_rank</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Index in parent's <code>children</code>[] array.  <a href="#aaa6043eee6f55869933c1d974efd9acd"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct <a class="el" href="structhwloc__obj.php">hwloc_obj</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj.php#a7f2343ed476fe4942e6fffd4cade1b40">next_sibling</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Next object below the same parent.  <a href="#a7f2343ed476fe4942e6fffd4cade1b40"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct <a class="el" href="structhwloc__obj.php">hwloc_obj</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj.php#a7b89e8c189876c0158a9282aaaf17f50">prev_sibling</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Previous object below the same parent.  <a href="#a7b89e8c189876c0158a9282aaaf17f50"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">unsigned&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj.php#aac3f6da35c9b57599909a44ce2b716c1">arity</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Number of children.  <a href="#aac3f6da35c9b57599909a44ce2b716c1"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct <a class="el" href="structhwloc__obj.php">hwloc_obj</a> **&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj.php#a04d05403da37bfe17cd63b7c7dd07b1f">children</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Children, <code>children</code>[0 .. arity -1].  <a href="#a04d05403da37bfe17cd63b7c7dd07b1f"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct <a class="el" href="structhwloc__obj.php">hwloc_obj</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj.php#af51d08a0a79dba517c06c5afedc8d2dc">first_child</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">First child.  <a href="#af51d08a0a79dba517c06c5afedc8d2dc"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct <a class="el" href="structhwloc__obj.php">hwloc_obj</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj.php#a84bd65634dbc55f4158b74443a9bd04f">last_child</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Last child.  <a href="#a84bd65634dbc55f4158b74443a9bd04f"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj.php#a76fd3ac94401cf32dfccc3a3a8de68a5">userdata</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Application-given private data pointer, initialized to <code>NULL</code>, use it as you wish.  <a href="#a76fd3ac94401cf32dfccc3a3a8de68a5"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="group__hwlocality__sets.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj.php#a67925e0f2c47f50408fbdb9bddd0790f">cpuset</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">CPUs covered by this object.  <a href="#a67925e0f2c47f50408fbdb9bddd0790f"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="group__hwlocality__sets.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj.php#a91788a9da687beb7224cc1fd7b75208c">complete_cpuset</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">The complete CPU set of logical processors of this object,.  <a href="#a91788a9da687beb7224cc1fd7b75208c"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="group__hwlocality__sets.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj.php#a8842d56c2975380f327ea401c5f53564">online_cpuset</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">The CPU set of online logical processors.  <a href="#a8842d56c2975380f327ea401c5f53564"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="group__hwlocality__sets.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj.php#afa3c59a6dd3da8ffa48710780a1bfb34">allowed_cpuset</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">The CPU set of allowed logical processors.  <a href="#afa3c59a6dd3da8ffa48710780a1bfb34"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="group__hwlocality__sets.php#ga37e35730fa7e775b5bb0afe893d6d508">hwloc_nodeset_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj.php#a08f0d0e16c619a6e653526cbee4ffea3">nodeset</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">NUMA nodes covered by this object or containing this object.  <a href="#a08f0d0e16c619a6e653526cbee4ffea3"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="group__hwlocality__sets.php#ga37e35730fa7e775b5bb0afe893d6d508">hwloc_nodeset_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj.php#ac38c4012127525ef74c5615c526f4c2e">complete_nodeset</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">The complete NUMA node set of this object,.  <a href="#ac38c4012127525ef74c5615c526f4c2e"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="group__hwlocality__sets.php#ga37e35730fa7e775b5bb0afe893d6d508">hwloc_nodeset_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj.php#a19e3d0a5951a7510fc4fc4722a9bf531">allowed_nodeset</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">The set of allowed NUMA memory nodes.  <a href="#a19e3d0a5951a7510fc4fc4722a9bf531"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">struct <a class="el" href="structhwloc__obj__info__s.php">hwloc_obj_info_s</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj.php#ad59bcd73a10260a0e239be5c4b5888bb">infos</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Array of stringified info type=name.  <a href="#ad59bcd73a10260a0e239be5c4b5888bb"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">unsigned&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj.php#a9843acc28cfbba903b63ea14b137ff70">infos_count</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Size of infos array.  <a href="#a9843acc28cfbba903b63ea14b137ff70"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>Structure of a topology object. </p>
<p>Applications must not modify any field except <a class="el" href="structhwloc__obj.php#a76fd3ac94401cf32dfccc3a3a8de68a5" title="Application-given private data pointer, initialized to NULL, use it as you wish.">hwloc_obj.userdata</a>. </p>
<hr/><h2>Field Documentation</h2>
<a class="anchor" id="afa3c59a6dd3da8ffa48710780a1bfb34"></a><!-- doxytag: member="hwloc_obj::allowed_cpuset" ref="afa3c59a6dd3da8ffa48710780a1bfb34" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="group__hwlocality__sets.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> <a class="el" href="structhwloc__obj.php#afa3c59a6dd3da8ffa48710780a1bfb34">hwloc_obj::allowed_cpuset</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>The CPU set of allowed logical processors. </p>
<p>This includes the CPUs contained in this object which are allowed for binding, i.e. passing them to the hwloc binding functions should not return permission errors. This is usually restricted by administration rules. Some of them may however be offline so binding to them may still not be possible, see online_cpuset.</p>
<dl class="note"><dt><b>Note:</b></dt><dd>Its value must not be changed, hwloc_bitmap_dup must be used instead. </dd></dl>

</div>
</div>
<a class="anchor" id="a19e3d0a5951a7510fc4fc4722a9bf531"></a><!-- doxytag: member="hwloc_obj::allowed_nodeset" ref="a19e3d0a5951a7510fc4fc4722a9bf531" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="group__hwlocality__sets.php#ga37e35730fa7e775b5bb0afe893d6d508">hwloc_nodeset_t</a> <a class="el" href="structhwloc__obj.php#a19e3d0a5951a7510fc4fc4722a9bf531">hwloc_obj::allowed_nodeset</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>The set of allowed NUMA memory nodes. </p>
<p>This includes the NUMA memory nodes contained in this object which are allowed for memory allocation, i.e. passing them to NUMA node-directed memory allocation should not return permission errors. This is usually restricted by administration rules.</p>
<p>If there are no NUMA nodes in the machine, all the memory is close to this object, so <code>allowed_nodeset</code> is full.</p>
<dl class="note"><dt><b>Note:</b></dt><dd>Its value must not be changed, hwloc_bitmap_dup must be used instead. </dd></dl>

</div>
</div>
<a class="anchor" id="aac3f6da35c9b57599909a44ce2b716c1"></a><!-- doxytag: member="hwloc_obj::arity" ref="aac3f6da35c9b57599909a44ce2b716c1" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned <a class="el" href="structhwloc__obj.php#aac3f6da35c9b57599909a44ce2b716c1">hwloc_obj::arity</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Number of children. </p>

</div>
</div>
<a class="anchor" id="accd40e29f71f19e88db62ea3df02adc8"></a><!-- doxytag: member="hwloc_obj::attr" ref="accd40e29f71f19e88db62ea3df02adc8" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">union <a class="el" href="unionhwloc__obj__attr__u.php">hwloc_obj_attr_u</a>* <a class="el" href="structhwloc__obj.php#accd40e29f71f19e88db62ea3df02adc8">hwloc_obj::attr</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Object type-specific Attributes, may be <code>NULL</code> if no attribute value was found. </p>

</div>
</div>
<a class="anchor" id="a04d05403da37bfe17cd63b7c7dd07b1f"></a><!-- doxytag: member="hwloc_obj::children" ref="a04d05403da37bfe17cd63b7c7dd07b1f" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="structhwloc__obj.php">hwloc_obj</a>** <a class="el" href="structhwloc__obj.php#a04d05403da37bfe17cd63b7c7dd07b1f">hwloc_obj::children</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Children, <code>children</code>[0 .. arity -1]. </p>

</div>
</div>
<a class="anchor" id="a91788a9da687beb7224cc1fd7b75208c"></a><!-- doxytag: member="hwloc_obj::complete_cpuset" ref="a91788a9da687beb7224cc1fd7b75208c" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="group__hwlocality__sets.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> <a class="el" href="structhwloc__obj.php#a91788a9da687beb7224cc1fd7b75208c">hwloc_obj::complete_cpuset</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>The complete CPU set of logical processors of this object,. </p>
<p>This includes not only the same as the cpuset field, but also the CPUs for which topology information is unknown or incomplete, and the CPUs that are ignored when the HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM flag is not set. Thus no corresponding PU object may be found in the topology, because the precise position is undefined. It is however known that it would be somewhere under this object.</p>
<dl class="note"><dt><b>Note:</b></dt><dd>Its value must not be changed, hwloc_bitmap_dup must be used instead. </dd></dl>

</div>
</div>
<a class="anchor" id="ac38c4012127525ef74c5615c526f4c2e"></a><!-- doxytag: member="hwloc_obj::complete_nodeset" ref="ac38c4012127525ef74c5615c526f4c2e" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="group__hwlocality__sets.php#ga37e35730fa7e775b5bb0afe893d6d508">hwloc_nodeset_t</a> <a class="el" href="structhwloc__obj.php#ac38c4012127525ef74c5615c526f4c2e">hwloc_obj::complete_nodeset</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>The complete NUMA node set of this object,. </p>
<p>This includes not only the same as the nodeset field, but also the NUMA nodes for which topology information is unknown or incomplete, and the nodes that are ignored when the HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM flag is not set. Thus no corresponding NODE object may be found in the topology, because the precise position is undefined. It is however known that it would be somewhere under this object.</p>
<p>If there are no NUMA nodes in the machine, all the memory is close to this object, so <code>complete_nodeset</code> is full.</p>
<dl class="note"><dt><b>Note:</b></dt><dd>Its value must not be changed, hwloc_bitmap_dup must be used instead. </dd></dl>

</div>
</div>
<a class="anchor" id="a67925e0f2c47f50408fbdb9bddd0790f"></a><!-- doxytag: member="hwloc_obj::cpuset" ref="a67925e0f2c47f50408fbdb9bddd0790f" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="group__hwlocality__sets.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> <a class="el" href="structhwloc__obj.php#a67925e0f2c47f50408fbdb9bddd0790f">hwloc_obj::cpuset</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>CPUs covered by this object. </p>
<p>This is the set of CPUs for which there are PU objects in the topology under this object, i.e. which are known to be physically contained in this object and known how (the children path between this object and the PU objects).</p>
<p>If the HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM configuration flag is set, some of these CPUs may be offline, or not allowed for binding, see online_cpuset and allowed_cpuset.</p>
<dl class="note"><dt><b>Note:</b></dt><dd>Its value must not be changed, hwloc_bitmap_dup must be used instead. </dd></dl>

</div>
</div>
<a class="anchor" id="a9d82690370275d42d652eccdea5d3ee5"></a><!-- doxytag: member="hwloc_obj::depth" ref="a9d82690370275d42d652eccdea5d3ee5" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned <a class="el" href="structhwloc__obj.php#a9d82690370275d42d652eccdea5d3ee5">hwloc_obj::depth</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Vertical index in the hierarchy. </p>

</div>
</div>
<a class="anchor" id="af51d08a0a79dba517c06c5afedc8d2dc"></a><!-- doxytag: member="hwloc_obj::first_child" ref="af51d08a0a79dba517c06c5afedc8d2dc" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="structhwloc__obj.php">hwloc_obj</a>* <a class="el" href="structhwloc__obj.php#af51d08a0a79dba517c06c5afedc8d2dc">hwloc_obj::first_child</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>First child. </p>

</div>
</div>
<a class="anchor" id="ad59bcd73a10260a0e239be5c4b5888bb"></a><!-- doxytag: member="hwloc_obj::infos" ref="ad59bcd73a10260a0e239be5c4b5888bb" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="structhwloc__obj__info__s.php">hwloc_obj_info_s</a>* <a class="el" href="structhwloc__obj.php#ad59bcd73a10260a0e239be5c4b5888bb">hwloc_obj::infos</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Array of stringified info type=name. </p>

</div>
</div>
<a class="anchor" id="a9843acc28cfbba903b63ea14b137ff70"></a><!-- doxytag: member="hwloc_obj::infos_count" ref="a9843acc28cfbba903b63ea14b137ff70" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned <a class="el" href="structhwloc__obj.php#a9843acc28cfbba903b63ea14b137ff70">hwloc_obj::infos_count</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Size of infos array. </p>

</div>
</div>
<a class="anchor" id="a84bd65634dbc55f4158b74443a9bd04f"></a><!-- doxytag: member="hwloc_obj::last_child" ref="a84bd65634dbc55f4158b74443a9bd04f" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="structhwloc__obj.php">hwloc_obj</a>* <a class="el" href="structhwloc__obj.php#a84bd65634dbc55f4158b74443a9bd04f">hwloc_obj::last_child</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Last child. </p>

</div>
</div>
<a class="anchor" id="a0d07fb7b8935e137c94d75a3eb492ae9"></a><!-- doxytag: member="hwloc_obj::logical_index" ref="a0d07fb7b8935e137c94d75a3eb492ae9" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned <a class="el" href="structhwloc__obj.php#a0d07fb7b8935e137c94d75a3eb492ae9">hwloc_obj::logical_index</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Horizontal index in the whole list of similar objects, could be a "cousin_rank" since it's the rank within the "cousin" list below. </p>

</div>
</div>
<a class="anchor" id="a1dc830816716213b5f797e4052487864"></a><!-- doxytag: member="hwloc_obj::memory" ref="a1dc830816716213b5f797e4052487864" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="structhwloc__obj__memory__s.php">hwloc_obj_memory_s</a> <a class="el" href="structhwloc__obj.php#a1dc830816716213b5f797e4052487864">hwloc_obj::memory</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Memory attributes. </p>

</div>
</div>
<a class="anchor" id="abb709ec38f2970677e4e57d1d30be96d"></a><!-- doxytag: member="hwloc_obj::name" ref="abb709ec38f2970677e4e57d1d30be96d" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">char* <a class="el" href="structhwloc__obj.php#abb709ec38f2970677e4e57d1d30be96d">hwloc_obj::name</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Object description if any. </p>

</div>
</div>
<a class="anchor" id="a85a788017457129589318b6c39451acf"></a><!-- doxytag: member="hwloc_obj::next_cousin" ref="a85a788017457129589318b6c39451acf" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="structhwloc__obj.php">hwloc_obj</a>* <a class="el" href="structhwloc__obj.php#a85a788017457129589318b6c39451acf">hwloc_obj::next_cousin</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Next object of same type. </p>

</div>
</div>
<a class="anchor" id="a7f2343ed476fe4942e6fffd4cade1b40"></a><!-- doxytag: member="hwloc_obj::next_sibling" ref="a7f2343ed476fe4942e6fffd4cade1b40" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="structhwloc__obj.php">hwloc_obj</a>* <a class="el" href="structhwloc__obj.php#a7f2343ed476fe4942e6fffd4cade1b40">hwloc_obj::next_sibling</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Next object below the same parent. </p>

</div>
</div>
<a class="anchor" id="a08f0d0e16c619a6e653526cbee4ffea3"></a><!-- doxytag: member="hwloc_obj::nodeset" ref="a08f0d0e16c619a6e653526cbee4ffea3" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="group__hwlocality__sets.php#ga37e35730fa7e775b5bb0afe893d6d508">hwloc_nodeset_t</a> <a class="el" href="structhwloc__obj.php#a08f0d0e16c619a6e653526cbee4ffea3">hwloc_obj::nodeset</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>NUMA nodes covered by this object or containing this object. </p>
<p>This is the set of NUMA nodes for which there are NODE objects in the topology under or above this object, i.e. which are known to be physically contained in this object or containing it and known how (the children path between this object and the NODE objects).</p>
<p>In the end, these nodes are those that are close to the current object.</p>
<p>If the HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM configuration flag is set, some of these nodes may not be allowed for allocation, see allowed_nodeset.</p>
<p>If there are no NUMA nodes in the machine, all the memory is close to this object, so <code>nodeset</code> is full.</p>
<dl class="note"><dt><b>Note:</b></dt><dd>Its value must not be changed, hwloc_bitmap_dup must be used instead. </dd></dl>

</div>
</div>
<a class="anchor" id="a8842d56c2975380f327ea401c5f53564"></a><!-- doxytag: member="hwloc_obj::online_cpuset" ref="a8842d56c2975380f327ea401c5f53564" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="group__hwlocality__sets.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> <a class="el" href="structhwloc__obj.php#a8842d56c2975380f327ea401c5f53564">hwloc_obj::online_cpuset</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>The CPU set of online logical processors. </p>
<p>This includes the CPUs contained in this object that are online, i.e. draw power and can execute threads. It may however not be allowed to bind to them due to administration rules, see allowed_cpuset.</p>
<dl class="note"><dt><b>Note:</b></dt><dd>Its value must not be changed, hwloc_bitmap_dup must be used instead. </dd></dl>

</div>
</div>
<a class="anchor" id="a61a7a80a68eaccbaaa28269e678c81a9"></a><!-- doxytag: member="hwloc_obj::os_index" ref="a61a7a80a68eaccbaaa28269e678c81a9" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned <a class="el" href="structhwloc__obj.php#a61a7a80a68eaccbaaa28269e678c81a9">hwloc_obj::os_index</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>OS-provided physical index number. </p>

</div>
</div>
<a class="anchor" id="a68766f0b1c4d61b5bad87e3b81dacfde"></a><!-- doxytag: member="hwloc_obj::os_level" ref="a68766f0b1c4d61b5bad87e3b81dacfde" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">signed <a class="el" href="structhwloc__obj.php#a68766f0b1c4d61b5bad87e3b81dacfde">hwloc_obj::os_level</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>OS-provided physical level, -1 if unknown or meaningless. </p>

</div>
</div>
<a class="anchor" id="adc494f6aed939992be1c55cca5822900"></a><!-- doxytag: member="hwloc_obj::parent" ref="adc494f6aed939992be1c55cca5822900" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="structhwloc__obj.php">hwloc_obj</a>* <a class="el" href="structhwloc__obj.php#adc494f6aed939992be1c55cca5822900">hwloc_obj::parent</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Parent, <code>NULL</code> if root (system object) </p>

</div>
</div>
<a class="anchor" id="ac715989f55ff5a0eb6be2969ee477ec0"></a><!-- doxytag: member="hwloc_obj::prev_cousin" ref="ac715989f55ff5a0eb6be2969ee477ec0" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="structhwloc__obj.php">hwloc_obj</a>* <a class="el" href="structhwloc__obj.php#ac715989f55ff5a0eb6be2969ee477ec0">hwloc_obj::prev_cousin</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Previous object of same type. </p>

</div>
</div>
<a class="anchor" id="a7b89e8c189876c0158a9282aaaf17f50"></a><!-- doxytag: member="hwloc_obj::prev_sibling" ref="a7b89e8c189876c0158a9282aaaf17f50" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="structhwloc__obj.php">hwloc_obj</a>* <a class="el" href="structhwloc__obj.php#a7b89e8c189876c0158a9282aaaf17f50">hwloc_obj::prev_sibling</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Previous object below the same parent. </p>

</div>
</div>
<a class="anchor" id="aaa6043eee6f55869933c1d974efd9acd"></a><!-- doxytag: member="hwloc_obj::sibling_rank" ref="aaa6043eee6f55869933c1d974efd9acd" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned <a class="el" href="structhwloc__obj.php#aaa6043eee6f55869933c1d974efd9acd">hwloc_obj::sibling_rank</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Index in parent's <code>children</code>[] array. </p>

</div>
</div>
<a class="anchor" id="acc4f0803f244867e68fe0036800be5de"></a><!-- doxytag: member="hwloc_obj::type" ref="acc4f0803f244867e68fe0036800be5de" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> <a class="el" href="structhwloc__obj.php#acc4f0803f244867e68fe0036800be5de">hwloc_obj::type</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Type of object. </p>

</div>
</div>
<a class="anchor" id="a76fd3ac94401cf32dfccc3a3a8de68a5"></a><!-- doxytag: member="hwloc_obj::userdata" ref="a76fd3ac94401cf32dfccc3a3a8de68a5" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void* <a class="el" href="structhwloc__obj.php#a76fd3ac94401cf32dfccc3a3a8de68a5">hwloc_obj::userdata</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Application-given private data pointer, initialized to <code>NULL</code>, use it as you wish. </p>

</div>
</div>
<hr/>The documentation for this struct was generated from the following file:<ul>
<li><a class="el" href="hwloc_8h_source.php">hwloc.h</a></li>
</ul>
</div>
<?php
include_once("$topdir/includes/footer.inc");
