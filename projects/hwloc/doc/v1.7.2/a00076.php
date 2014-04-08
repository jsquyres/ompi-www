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
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">Advanced I/O object traversal helpers</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ga3603275746a8792e54415d79763aa9e9"><td class="memItemLeft" align="right" valign="top">static __hwloc_inline <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00076.php#ga3603275746a8792e54415d79763aa9e9">hwloc_get_non_io_ancestor_obj</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology __hwloc_attribute_unused, <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> ioobj)</td></tr>
<tr class="separator:ga3603275746a8792e54415d79763aa9e9"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gad6e1ed122ef3b6e098538d75acd5e3f6"><td class="memItemLeft" align="right" valign="top">static __hwloc_inline <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00076.php#gad6e1ed122ef3b6e098538d75acd5e3f6">hwloc_get_next_pcidev</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> prev)</td></tr>
<tr class="separator:gad6e1ed122ef3b6e098538d75acd5e3f6"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga546e1d690c63fb24177f3013ed78ceb1"><td class="memItemLeft" align="right" valign="top">static __hwloc_inline <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00076.php#ga546e1d690c63fb24177f3013ed78ceb1">hwloc_get_pcidev_by_busid</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, unsigned domain, unsigned bus, unsigned dev, unsigned func)</td></tr>
<tr class="separator:ga546e1d690c63fb24177f3013ed78ceb1"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga9d5643f2e337fe1b98e7cce5c1ecb74e"><td class="memItemLeft" align="right" valign="top">static __hwloc_inline <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00076.php#ga9d5643f2e337fe1b98e7cce5c1ecb74e">hwloc_get_pcidev_by_busidstring</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, const char *busid)</td></tr>
<tr class="separator:ga9d5643f2e337fe1b98e7cce5c1ecb74e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga73a5bc6265642e6001f7a10812ab886d"><td class="memItemLeft" align="right" valign="top">static __hwloc_inline <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00076.php#ga73a5bc6265642e6001f7a10812ab886d">hwloc_get_next_osdev</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> prev)</td></tr>
<tr class="separator:ga73a5bc6265642e6001f7a10812ab886d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga2bd3f856d0fc3c6c02642c17d763b823"><td class="memItemLeft" align="right" valign="top">static __hwloc_inline <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00076.php#ga2bd3f856d0fc3c6c02642c17d763b823">hwloc_get_next_bridge</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> prev)</td></tr>
<tr class="separator:ga2bd3f856d0fc3c6c02642c17d763b823"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gaef22d6bf5cb0b7f13a863780126a8cb7"><td class="memItemLeft" align="right" valign="top">static __hwloc_inline int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00076.php#gaef22d6bf5cb0b7f13a863780126a8cb7">hwloc_bridge_covers_pcibus</a> (<a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> bridge, unsigned domain, unsigned bus)</td></tr>
<tr class="separator:gaef22d6bf5cb0b7f13a863780126a8cb7"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga81d4f68afbd68d94eb70d4f5c603eff5"><td class="memItemLeft" align="right" valign="top">static __hwloc_inline <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00076.php#ga81d4f68afbd68d94eb70d4f5c603eff5">hwloc_get_hostbridge_by_pcibus</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, unsigned domain, unsigned bus)</td></tr>
<tr class="separator:ga81d4f68afbd68d94eb70d4f5c603eff5"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="gaef22d6bf5cb0b7f13a863780126a8cb7"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static __hwloc_inline int hwloc_bridge_covers_pcibus </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>bridge</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>domain</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>bus</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

</div>
</div>
<a class="anchor" id="ga81d4f68afbd68d94eb70d4f5c603eff5"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static __hwloc_inline <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_hostbridge_by_pcibus </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>domain</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>bus</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Find the hostbridge that covers the given PCI bus. </p>
<p>This is useful for finding the locality of a bus because it is the hostbridge parent cpuset. </p>

</div>
</div>
<a class="anchor" id="ga2bd3f856d0fc3c6c02642c17d763b823"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static __hwloc_inline <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_next_bridge </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>prev</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the next bridge in the system. </p>
<dl class="section return"><dt>Returns</dt><dd>the first bridge if <code>prev</code> is <code>NULL</code>. </dd></dl>

</div>
</div>
<a class="anchor" id="ga73a5bc6265642e6001f7a10812ab886d"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static __hwloc_inline <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_next_osdev </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>prev</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the next OS device in the system. </p>
<dl class="section return"><dt>Returns</dt><dd>the first OS device if <code>prev</code> is <code>NULL</code>. </dd></dl>

</div>
</div>
<a class="anchor" id="gad6e1ed122ef3b6e098538d75acd5e3f6"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static __hwloc_inline <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_next_pcidev </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>prev</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the next PCI device in the system. </p>
<dl class="section return"><dt>Returns</dt><dd>the first PCI device if <code>prev</code> is <code>NULL</code>. </dd></dl>

</div>
</div>
<a class="anchor" id="ga3603275746a8792e54415d79763aa9e9"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static __hwloc_inline <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_non_io_ancestor_obj </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology&#160;</td>
          <td class="paramname"><em>__hwloc_attribute_unused</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>ioobj</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the first non-I/O ancestor object. </p>
<p>Given the I/O object <code>ioobj</code>, find the smallest non-I/O ancestor object. This regular object may then be used for binding because its locality is the same as <code>ioobj</code>. </p>

</div>
</div>
<a class="anchor" id="ga546e1d690c63fb24177f3013ed78ceb1"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static __hwloc_inline <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_pcidev_by_busid </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>domain</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>bus</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>dev</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>func</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Find the PCI device object matching the PCI bus id given domain, bus device and function PCI bus id. </p>

</div>
</div>
<a class="anchor" id="ga9d5643f2e337fe1b98e7cce5c1ecb74e"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static __hwloc_inline <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_pcidev_by_busidstring </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const char *&#160;</td>
          <td class="paramname"><em>busid</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Find the PCI device object matching the PCI bus id given as a string xxxx:yy:zz.t or yy:zz.t. </p>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
