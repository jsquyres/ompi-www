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
<!-- Generated by Doxygen 1.7.1 -->
<div class="navigation" id="top">
  <div class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&nbsp;Page</span></a></li>
      <li><a href="pages.php"><span>Related&nbsp;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li class="current"><a href="annotated.php"><span>Data&nbsp;Structures</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Data&nbsp;Structures</span></a></li>
      <li class="current"><a href="functions.php"><span>Data&nbsp;Fields</span></a></li>
    </ul>
  </div>
  <div class="tabs2">
    <ul class="tablist">
      <li><a href="functions.php"><span>All</span></a></li>
      <li class="current"><a href="functions_vars.php"><span>Variables</span></a></li>
    </ul>
  </div>
  <div class="tabs3">
    <ul class="tablist">
      <li><a href="#index_a"><span>a</span></a></li>
      <li><a href="#index_c"><span>c</span></a></li>
      <li><a href="#index_d"><span>d</span></a></li>
      <li><a href="#index_f"><span>f</span></a></li>
      <li><a href="#index_g"><span>g</span></a></li>
      <li><a href="#index_l"><span>l</span></a></li>
      <li><a href="#index_m"><span>m</span></a></li>
      <li><a href="#index_n"><span>n</span></a></li>
      <li><a href="#index_o"><span>o</span></a></li>
      <li><a href="#index_p"><span>p</span></a></li>
      <li><a href="#index_s"><span>s</span></a></li>
      <li><a href="#index_t"><span>t</span></a></li>
      <li><a href="#index_u"><span>u</span></a></li>
    </ul>
  </div>
</div>
<div class="contents">
&nbsp;

<h3><a class="anchor" id="index_a"></a>- a -</h3><ul>
<li>allowed_cpuset
: <a class="el" href="structhwloc__obj.php#afa3c59a6dd3da8ffa48710780a1bfb34">hwloc_obj</a>
</li>
<li>allowed_nodeset
: <a class="el" href="structhwloc__obj.php#a9c1af614e0978a65ce309f921a822c8b">hwloc_obj</a>
</li>
<li>arity
: <a class="el" href="structhwloc__obj.php#aac3f6da35c9b57599909a44ce2b716c1">hwloc_obj</a>
</li>
<li>attr
: <a class="el" href="structhwloc__obj.php#accd40e29f71f19e88db62ea3df02adc8">hwloc_obj</a>
</li>
</ul>


<h3><a class="anchor" id="index_c"></a>- c -</h3><ul>
<li>cache
: <a class="el" href="unionhwloc__obj__attr__u.php#ab5a8ae3bf490e6b1071fea53f7382836">hwloc_obj_attr_u</a>
</li>
<li>children
: <a class="el" href="structhwloc__obj.php#a04d05403da37bfe17cd63b7c7dd07b1f">hwloc_obj</a>
</li>
<li>complete_cpuset
: <a class="el" href="structhwloc__obj.php#a91788a9da687beb7224cc1fd7b75208c">hwloc_obj</a>
</li>
<li>complete_nodeset
: <a class="el" href="structhwloc__obj.php#adc473a52c071d7fd49e659ac90467a0f">hwloc_obj</a>
</li>
<li>count
: <a class="el" href="structhwloc__obj__memory__s_1_1hwloc__obj__memory__page__type__s.php#ab5d01db7b26177a6b5361107cad152c3">hwloc_obj_memory_s::hwloc_obj_memory_page_type_s</a>
</li>
<li>cpubind
: <a class="el" href="structhwloc__topology__support.php#adef2bb91f74c3e70a2a071393caf5f56">hwloc_topology_support</a>
</li>
<li>cpuset
: <a class="el" href="structhwloc__obj.php#a67925e0f2c47f50408fbdb9bddd0790f">hwloc_obj</a>
</li>
</ul>


<h3><a class="anchor" id="index_d"></a>- d -</h3><ul>
<li>depth
: <a class="el" href="structhwloc__obj.php#a9d82690370275d42d652eccdea5d3ee5">hwloc_obj</a>
, <a class="el" href="structhwloc__obj__attr__u_1_1hwloc__cache__attr__s.php#a5c8f7f39193736c2187ed626940835d5">hwloc_obj_attr_u::hwloc_cache_attr_s</a>
, <a class="el" href="structhwloc__obj__attr__u_1_1hwloc__group__attr__s.php#ad914eac61c77481e1b7037877bcc5579">hwloc_obj_attr_u::hwloc_group_attr_s</a>
</li>
<li>discovery
: <a class="el" href="structhwloc__topology__support.php#aea3fbd7653d987d81f848636c420504d">hwloc_topology_support</a>
</li>
<li>dmi_board_name
: <a class="el" href="structhwloc__obj__attr__u_1_1hwloc__machine__attr__s.php#a8b99af84fd38753a91c861f0e856b461">hwloc_obj_attr_u::hwloc_machine_attr_s</a>
</li>
<li>dmi_board_vendor
: <a class="el" href="structhwloc__obj__attr__u_1_1hwloc__machine__attr__s.php#aae85be0b4ebb86501718c4b460df5167">hwloc_obj_attr_u::hwloc_machine_attr_s</a>
</li>
</ul>


<h3><a class="anchor" id="index_f"></a>- f -</h3><ul>
<li>first_child
: <a class="el" href="structhwloc__obj.php#af51d08a0a79dba517c06c5afedc8d2dc">hwloc_obj</a>
</li>
</ul>


<h3><a class="anchor" id="index_g"></a>- g -</h3><ul>
<li>get_proc_cpubind
: <a class="el" href="structhwloc__topology__cpubind__support.php#aae705bc447adc163ead377362c4dfe9f">hwloc_topology_cpubind_support</a>
</li>
<li>get_thisproc_cpubind
: <a class="el" href="structhwloc__topology__cpubind__support.php#a77a09ddd78ee3e9ff5f532a6ac74f7eb">hwloc_topology_cpubind_support</a>
</li>
<li>get_thisthread_cpubind
: <a class="el" href="structhwloc__topology__cpubind__support.php#a80d762e532d677dff262d83cc7bb1c60">hwloc_topology_cpubind_support</a>
</li>
<li>get_thread_cpubind
: <a class="el" href="structhwloc__topology__cpubind__support.php#a8dd4d8531ed2eebdce1507e7d104154e">hwloc_topology_cpubind_support</a>
</li>
<li>group
: <a class="el" href="unionhwloc__obj__attr__u.php#ae4ba157cc313e2cdd9a82f1c1df7aaa6">hwloc_obj_attr_u</a>
</li>
</ul>


<h3><a class="anchor" id="index_l"></a>- l -</h3><ul>
<li>last_child
: <a class="el" href="structhwloc__obj.php#a84bd65634dbc55f4158b74443a9bd04f">hwloc_obj</a>
</li>
<li>local_memory
: <a class="el" href="structhwloc__obj__memory__s.php#a27043a3150660f44ed84916c2d0d7e0e">hwloc_obj_memory_s</a>
</li>
<li>logical_index
: <a class="el" href="structhwloc__obj.php#a0d07fb7b8935e137c94d75a3eb492ae9">hwloc_obj</a>
</li>
</ul>


<h3><a class="anchor" id="index_m"></a>- m -</h3><ul>
<li>machine
: <a class="el" href="unionhwloc__obj__attr__u.php#a5b42966df7c5bfdc36891e414cc31607">hwloc_obj_attr_u</a>
</li>
<li>memory
: <a class="el" href="structhwloc__obj.php#a1dc830816716213b5f797e4052487864">hwloc_obj</a>
</li>
</ul>


<h3><a class="anchor" id="index_n"></a>- n -</h3><ul>
<li>name
: <a class="el" href="structhwloc__obj.php#abb709ec38f2970677e4e57d1d30be96d">hwloc_obj</a>
</li>
<li>next_cousin
: <a class="el" href="structhwloc__obj.php#a85a788017457129589318b6c39451acf">hwloc_obj</a>
</li>
<li>next_sibling
: <a class="el" href="structhwloc__obj.php#a7f2343ed476fe4942e6fffd4cade1b40">hwloc_obj</a>
</li>
<li>nodeset
: <a class="el" href="structhwloc__obj.php#a79982ede313c2190505fc5e3714a16fb">hwloc_obj</a>
</li>
</ul>


<h3><a class="anchor" id="index_o"></a>- o -</h3><ul>
<li>online_cpuset
: <a class="el" href="structhwloc__obj.php#a8842d56c2975380f327ea401c5f53564">hwloc_obj</a>
</li>
<li>os_index
: <a class="el" href="structhwloc__obj.php#a61a7a80a68eaccbaaa28269e678c81a9">hwloc_obj</a>
</li>
<li>os_level
: <a class="el" href="structhwloc__obj.php#a68766f0b1c4d61b5bad87e3b81dacfde">hwloc_obj</a>
</li>
</ul>


<h3><a class="anchor" id="index_p"></a>- p -</h3><ul>
<li>page_types
: <a class="el" href="structhwloc__obj__memory__s.php#a865eba7b12b986d72dbe7a2cfd97c50d">hwloc_obj_memory_s</a>
</li>
<li>page_types_len
: <a class="el" href="structhwloc__obj__memory__s.php#a208c27f4491077d7fb9ba5db8b29cb57">hwloc_obj_memory_s</a>
</li>
<li>parent
: <a class="el" href="structhwloc__obj.php#adc494f6aed939992be1c55cca5822900">hwloc_obj</a>
</li>
<li>prev_cousin
: <a class="el" href="structhwloc__obj.php#ac715989f55ff5a0eb6be2969ee477ec0">hwloc_obj</a>
</li>
<li>prev_sibling
: <a class="el" href="structhwloc__obj.php#a7b89e8c189876c0158a9282aaaf17f50">hwloc_obj</a>
</li>
<li>pu
: <a class="el" href="structhwloc__topology__discovery__support.php#ad7bb4ecf7a82f5a04fc632e9592ad3ab">hwloc_topology_discovery_support</a>
</li>
</ul>


<h3><a class="anchor" id="index_s"></a>- s -</h3><ul>
<li>set_proc_cpubind
: <a class="el" href="structhwloc__topology__cpubind__support.php#aa166223d1c2a6de7256ab2d8b675a87e">hwloc_topology_cpubind_support</a>
</li>
<li>set_thisproc_cpubind
: <a class="el" href="structhwloc__topology__cpubind__support.php#a9403d51657a4d546b3ea9553a2973a27">hwloc_topology_cpubind_support</a>
</li>
<li>set_thisthread_cpubind
: <a class="el" href="structhwloc__topology__cpubind__support.php#a57a89a4b5f1f74fa6cfe176f1e8b0798">hwloc_topology_cpubind_support</a>
</li>
<li>set_thread_cpubind
: <a class="el" href="structhwloc__topology__cpubind__support.php#a46fba33e307909ce256624687799dd6d">hwloc_topology_cpubind_support</a>
</li>
<li>sibling_rank
: <a class="el" href="structhwloc__obj.php#aaa6043eee6f55869933c1d974efd9acd">hwloc_obj</a>
</li>
<li>size
: <a class="el" href="structhwloc__obj__memory__s_1_1hwloc__obj__memory__page__type__s.php#af0619463fb5d10052b7fe3495a66d74b">hwloc_obj_memory_s::hwloc_obj_memory_page_type_s</a>
, <a class="el" href="structhwloc__obj__attr__u_1_1hwloc__cache__attr__s.php#a3c68235220554308f89768f281ad1e62">hwloc_obj_attr_u::hwloc_cache_attr_s</a>
</li>
</ul>


<h3><a class="anchor" id="index_t"></a>- t -</h3><ul>
<li>total_memory
: <a class="el" href="structhwloc__obj__memory__s.php#a68c3323d2d0a248d1b7fec7af44bebe3">hwloc_obj_memory_s</a>
</li>
<li>type
: <a class="el" href="structhwloc__obj.php#acc4f0803f244867e68fe0036800be5de">hwloc_obj</a>
</li>
</ul>


<h3><a class="anchor" id="index_u"></a>- u -</h3><ul>
<li>userdata
: <a class="el" href="structhwloc__obj.php#a76fd3ac94401cf32dfccc3a3a8de68a5">hwloc_obj</a>
</li>
</ul>
</div>
<?php
include_once("$topdir/includes/footer.inc");
