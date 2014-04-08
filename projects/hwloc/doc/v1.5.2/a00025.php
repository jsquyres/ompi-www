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
<!-- Generated by Doxygen 1.8.3.1 -->
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
<div class="title">hwloc_topology_membind_support Struct Reference<div class="ingroups"><a class="el" href="a00044.php">Configure Topology Detection</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p><code>#include &lt;<a class="el" href="a00033_source.php">hwloc.h</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-attribs"></a>
Data Fields</h2></td></tr>
<tr class="memitem:a36b3e388df9c6a249427cab7e3724749"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00025.php#a36b3e388df9c6a249427cab7e3724749">set_thisproc_membind</a></td></tr>
<tr class="separator:a36b3e388df9c6a249427cab7e3724749"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3fd51e6fa5f0dd800322301b46b08559"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00025.php#a3fd51e6fa5f0dd800322301b46b08559">get_thisproc_membind</a></td></tr>
<tr class="separator:a3fd51e6fa5f0dd800322301b46b08559"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a756f44912894b176bf979a1b65f12aac"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00025.php#a756f44912894b176bf979a1b65f12aac">set_proc_membind</a></td></tr>
<tr class="separator:a756f44912894b176bf979a1b65f12aac"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9880cd2d605e316fc020167c49ca69ad"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00025.php#a9880cd2d605e316fc020167c49ca69ad">get_proc_membind</a></td></tr>
<tr class="separator:a9880cd2d605e316fc020167c49ca69ad"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0697af2e41f2e82b8ce71e3cc13f7eac"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00025.php#a0697af2e41f2e82b8ce71e3cc13f7eac">set_thisthread_membind</a></td></tr>
<tr class="separator:a0697af2e41f2e82b8ce71e3cc13f7eac"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a63b0b2e26157b472f5717ee93cc7c535"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00025.php#a63b0b2e26157b472f5717ee93cc7c535">get_thisthread_membind</a></td></tr>
<tr class="separator:a63b0b2e26157b472f5717ee93cc7c535"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a476c06f96b65c08b287cf2369966123b"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00025.php#a476c06f96b65c08b287cf2369966123b">set_area_membind</a></td></tr>
<tr class="separator:a476c06f96b65c08b287cf2369966123b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0a84e24a06f2fa487fe8c9605c6f68b3"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00025.php#a0a84e24a06f2fa487fe8c9605c6f68b3">get_area_membind</a></td></tr>
<tr class="separator:a0a84e24a06f2fa487fe8c9605c6f68b3"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ae551abb27d2aa9ce008583488b845b98"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00025.php#ae551abb27d2aa9ce008583488b845b98">alloc_membind</a></td></tr>
<tr class="separator:ae551abb27d2aa9ce008583488b845b98"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a221098c339dbfab27bd2c9f5d32f123b"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00025.php#a221098c339dbfab27bd2c9f5d32f123b">firsttouch_membind</a></td></tr>
<tr class="separator:a221098c339dbfab27bd2c9f5d32f123b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ae7cdb1f1b5f0242a69f85b5a5538c764"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00025.php#ae7cdb1f1b5f0242a69f85b5a5538c764">bind_membind</a></td></tr>
<tr class="separator:ae7cdb1f1b5f0242a69f85b5a5538c764"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3c44c6012860bbeba8a0f4c19710858d"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00025.php#a3c44c6012860bbeba8a0f4c19710858d">interleave_membind</a></td></tr>
<tr class="separator:a3c44c6012860bbeba8a0f4c19710858d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:afe608fb85eb2aa9706221ccb5fc4d415"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00025.php#afe608fb85eb2aa9706221ccb5fc4d415">replicate_membind</a></td></tr>
<tr class="separator:afe608fb85eb2aa9706221ccb5fc4d415"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ab0921af6e0cd6975812a80b8e5c7435c"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00025.php#ab0921af6e0cd6975812a80b8e5c7435c">nexttouch_membind</a></td></tr>
<tr class="separator:ab0921af6e0cd6975812a80b8e5c7435c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aafa7683871a6a760246f9b35209caec5"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00025.php#aafa7683871a6a760246f9b35209caec5">migrate_membind</a></td></tr>
<tr class="separator:aafa7683871a6a760246f9b35209caec5"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Flags describing actual memory binding support for this topology. </p>
</div><h2 class="groupheader">Field Documentation</h2>
<a class="anchor" id="ae551abb27d2aa9ce008583488b845b98"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_topology_membind_support::alloc_membind</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Allocating a bound memory area is supported. </p>

</div>
</div>
<a class="anchor" id="ae7cdb1f1b5f0242a69f85b5a5538c764"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_topology_membind_support::bind_membind</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Bind policy is supported. </p>

</div>
</div>
<a class="anchor" id="a221098c339dbfab27bd2c9f5d32f123b"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_topology_membind_support::firsttouch_membind</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>First-touch policy is supported. </p>

</div>
</div>
<a class="anchor" id="a0a84e24a06f2fa487fe8c9605c6f68b3"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_topology_membind_support::get_area_membind</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Getting the binding of a given memory area is supported. </p>

</div>
</div>
<a class="anchor" id="a9880cd2d605e316fc020167c49ca69ad"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_topology_membind_support::get_proc_membind</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Getting the binding of a whole given process is supported. </p>

</div>
</div>
<a class="anchor" id="a3fd51e6fa5f0dd800322301b46b08559"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_topology_membind_support::get_thisproc_membind</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Getting the binding of the whole current process is supported. </p>

</div>
</div>
<a class="anchor" id="a63b0b2e26157b472f5717ee93cc7c535"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_topology_membind_support::get_thisthread_membind</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Getting the binding of the current thread only is supported. </p>

</div>
</div>
<a class="anchor" id="a3c44c6012860bbeba8a0f4c19710858d"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_topology_membind_support::interleave_membind</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Interleave policy is supported. </p>

</div>
</div>
<a class="anchor" id="aafa7683871a6a760246f9b35209caec5"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_topology_membind_support::migrate_membind</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Migration flags is supported. </p>

</div>
</div>
<a class="anchor" id="ab0921af6e0cd6975812a80b8e5c7435c"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_topology_membind_support::nexttouch_membind</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Next-touch migration policy is supported. </p>

</div>
</div>
<a class="anchor" id="afe608fb85eb2aa9706221ccb5fc4d415"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_topology_membind_support::replicate_membind</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Replication policy is supported. </p>

</div>
</div>
<a class="anchor" id="a476c06f96b65c08b287cf2369966123b"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_topology_membind_support::set_area_membind</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Binding a given memory area is supported. </p>

</div>
</div>
<a class="anchor" id="a756f44912894b176bf979a1b65f12aac"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_topology_membind_support::set_proc_membind</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Binding a whole given process is supported. </p>

</div>
</div>
<a class="anchor" id="a36b3e388df9c6a249427cab7e3724749"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_topology_membind_support::set_thisproc_membind</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Binding the whole current process is supported. </p>

</div>
</div>
<a class="anchor" id="a0697af2e41f2e82b8ce71e3cc13f7eac"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_topology_membind_support::set_thisthread_membind</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Binding the current thread only is supported. </p>

</div>
</div>
<hr/>The documentation for this struct was generated from the following file:<ul>
<li><a class="el" href="a00033_source.php">hwloc.h</a></li>
</ul>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
