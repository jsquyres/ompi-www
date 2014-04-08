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
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">Exporting Topologies to XML.</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ga45578d725c66865cfef31d0585dcff70"><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00056.php#ga45578d725c66865cfef31d0585dcff70">hwloc_topology_export_xml</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, const char *xmlpath)</td></tr>
<tr class="separator:ga45578d725c66865cfef31d0585dcff70"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga739330e9402425315e44e5012631fb91"><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00056.php#ga739330e9402425315e44e5012631fb91">hwloc_topology_export_xmlbuffer</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, char **xmlbuffer, int *buflen)</td></tr>
<tr class="separator:ga739330e9402425315e44e5012631fb91"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga5e375acef034bebc1f20ead884697301"><td class="memItemLeft" align="right" valign="top"> void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00056.php#ga5e375acef034bebc1f20ead884697301">hwloc_free_xmlbuffer</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, char *xmlbuffer)</td></tr>
<tr class="separator:ga5e375acef034bebc1f20ead884697301"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gafd31ee85660ea15497e16cdcf9717f5c"><td class="memItemLeft" align="right" valign="top"> void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00056.php#gafd31ee85660ea15497e16cdcf9717f5c">hwloc_topology_set_userdata_export_callback</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, void(*export_cb)(void *reserved, <a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> obj))</td></tr>
<tr class="separator:gafd31ee85660ea15497e16cdcf9717f5c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga8c66f9bb1d56af4747f7227d2fd4b11a"><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00056.php#ga8c66f9bb1d56af4747f7227d2fd4b11a">hwloc_export_obj_userdata</a> (void *reserved, <a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> obj, const char *name, const void *buffer, size_t length)</td></tr>
<tr class="separator:ga8c66f9bb1d56af4747f7227d2fd4b11a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga05d4b8e6d30adf6f35fbd1f7a5e8449a"><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00056.php#ga05d4b8e6d30adf6f35fbd1f7a5e8449a">hwloc_export_obj_userdata_base64</a> (void *reserved, <a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> obj, const char *name, const void *buffer, size_t length)</td></tr>
<tr class="separator:ga05d4b8e6d30adf6f35fbd1f7a5e8449a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga7a47eecb5807f52c9a6e9bd2e2b6e5c9"><td class="memItemLeft" align="right" valign="top"> void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00056.php#ga7a47eecb5807f52c9a6e9bd2e2b6e5c9">hwloc_topology_set_userdata_import_callback</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, void(*import_cb)(<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> obj, const char *name, const void *buffer, size_t length))</td></tr>
<tr class="separator:ga7a47eecb5807f52c9a6e9bd2e2b6e5c9"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="ga8c66f9bb1d56af4747f7227d2fd4b11a"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_export_obj_userdata </td>
          <td>(</td>
          <td class="paramtype">void *&#160;</td>
          <td class="paramname"><em>reserved</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>obj</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const char *&#160;</td>
          <td class="paramname"><em>name</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const void *&#160;</td>
          <td class="paramname"><em>buffer</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">size_t&#160;</td>
          <td class="paramname"><em>length</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Export some object userdata to XML. </p>
<p>This function may only be called from within the export() callback passed to <a class="el" href="a00056.php#gafd31ee85660ea15497e16cdcf9717f5c" title="Set the application-specific callback for exporting userdata.">hwloc_topology_set_userdata_export_callback()</a>. It may be invoked one of multiple times to export some userdata to XML. The <code>buffer</code> content of length <code>length</code> is stored with optional name <code>name</code>.</p>
<p>When importing this XML file, the import() callback (if set) will be called exactly as many times as <a class="el" href="a00056.php#ga8c66f9bb1d56af4747f7227d2fd4b11a" title="Export some object userdata to XML.">hwloc_export_obj_userdata()</a> was called during export(). It will receive the corresponding <code>name</code>, <code>buffer</code> and <code>length</code> arguments.</p>
<p><code>reserved</code>, <code>topology</code> and <code>obj</code> must be the first three parameters that were given to the export callback.</p>
<p>Only printable characters may be exported to XML string attributes. If a non-printable character is passed in <code>name</code> or <code>buffer</code>, the function returns -1 with errno set to EINVAL.</p>
<p>If exporting binary data, the application should first encode into printable characters only (or use <a class="el" href="a00056.php#ga05d4b8e6d30adf6f35fbd1f7a5e8449a" title="Encode and export some object userdata to XML.">hwloc_export_obj_userdata_base64()</a>). It should also take care of portability issues if the export may be reimported on a different architecture. </p>

</div>
</div>
<a class="anchor" id="ga05d4b8e6d30adf6f35fbd1f7a5e8449a"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_export_obj_userdata_base64 </td>
          <td>(</td>
          <td class="paramtype">void *&#160;</td>
          <td class="paramname"><em>reserved</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>obj</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const char *&#160;</td>
          <td class="paramname"><em>name</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const void *&#160;</td>
          <td class="paramname"><em>buffer</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">size_t&#160;</td>
          <td class="paramname"><em>length</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Encode and export some object userdata to XML. </p>
<p>This function is similar to <a class="el" href="a00056.php#ga8c66f9bb1d56af4747f7227d2fd4b11a" title="Export some object userdata to XML.">hwloc_export_obj_userdata()</a> but it encodes the input buffer into printable characters before exporting. On import, decoding is automatically performed before the data is given to the import() callback if any.</p>
<p>This function may only be called from within the export() callback passed to <a class="el" href="a00056.php#gafd31ee85660ea15497e16cdcf9717f5c" title="Set the application-specific callback for exporting userdata.">hwloc_topology_set_userdata_export_callback()</a>.</p>
<p>The function does not take care of portability issues if the export may be reimported on a different architecture. </p>

</div>
</div>
<a class="anchor" id="ga5e375acef034bebc1f20ead884697301"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> void hwloc_free_xmlbuffer </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">char *&#160;</td>
          <td class="paramname"><em>xmlbuffer</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Free a buffer allocated by <a class="el" href="a00056.php#ga739330e9402425315e44e5012631fb91" title="Export the topology into a newly-allocated XML memory buffer.">hwloc_topology_export_xmlbuffer()</a> </p>

</div>
</div>
<a class="anchor" id="ga45578d725c66865cfef31d0585dcff70"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_topology_export_xml </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const char *&#160;</td>
          <td class="paramname"><em>xmlpath</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Export the topology into an XML file. </p>
<p>This file may be loaded later through <a class="el" href="a00055.php#ga93efcc8a962afe1ed23393700682173f" title="Enable XML-file based topology.">hwloc_topology_set_xml()</a>.</p>
<dl class="section return"><dt>Returns</dt><dd>-1 if a failure occured.</dd></dl>
<dl class="section note"><dt>Note</dt><dd>See also <a class="el" href="a00056.php#gafd31ee85660ea15497e16cdcf9717f5c" title="Set the application-specific callback for exporting userdata.">hwloc_topology_set_userdata_export_callback()</a> for exporting application-specific userdata.</dd>
<dd>
Only printable characters may be exported to XML string attributes. Any other character, especially any non-ASCII character, will be silently dropped. </dd></dl>

</div>
</div>
<a class="anchor" id="ga739330e9402425315e44e5012631fb91"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_topology_export_xmlbuffer </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">char **&#160;</td>
          <td class="paramname"><em>xmlbuffer</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int *&#160;</td>
          <td class="paramname"><em>buflen</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Export the topology into a newly-allocated XML memory buffer. </p>
<p><code>xmlbuffer</code> is allocated by the callee and should be freed with <a class="el" href="a00056.php#ga5e375acef034bebc1f20ead884697301" title="Free a buffer allocated by hwloc_topology_export_xmlbuffer()">hwloc_free_xmlbuffer()</a> later in the caller.</p>
<p>This memory buffer may be loaded later through <a class="el" href="a00055.php#gae7e4bade144652a2b48f5eaf0309b4ec" title="Enable XML based topology using a memory buffer (instead of a file, as with hwloc_topology_set_xml())...">hwloc_topology_set_xmlbuffer()</a>.</p>
<dl class="section return"><dt>Returns</dt><dd>-1 if a failure occured.</dd></dl>
<dl class="section note"><dt>Note</dt><dd>See also <a class="el" href="a00056.php#gafd31ee85660ea15497e16cdcf9717f5c" title="Set the application-specific callback for exporting userdata.">hwloc_topology_set_userdata_export_callback()</a> for exporting application-specific userdata.</dd>
<dd>
Only printable characters may be exported to XML string attributes. Any other character, especially any non-ASCII character, will be silently dropped. </dd></dl>

</div>
</div>
<a class="anchor" id="gafd31ee85660ea15497e16cdcf9717f5c"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> void hwloc_topology_set_userdata_export_callback </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">void(*)(void *reserved, <a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> obj)&#160;</td>
          <td class="paramname"><em>export_cb</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Set the application-specific callback for exporting userdata. </p>
<p>The object userdata pointer is not exported to XML by default because hwloc does not know what it contains.</p>
<p>This function lets applications set <code>export_cb</code> to a callback function that converts this opaque userdata into an exportable string.</p>
<p><code>export_cb</code> is invoked during XML export for each object whose <code>userdata</code> pointer is not <code>NULL</code>. The callback should use <a class="el" href="a00056.php#ga8c66f9bb1d56af4747f7227d2fd4b11a" title="Export some object userdata to XML.">hwloc_export_obj_userdata()</a> or <a class="el" href="a00056.php#ga05d4b8e6d30adf6f35fbd1f7a5e8449a" title="Encode and export some object userdata to XML.">hwloc_export_obj_userdata_base64()</a> to actually export something to XML (possibly multiple times per object).</p>
<p><code>export_cb</code> may be set to <code>NULL</code> if userdata should not be exported to XML. </p>

</div>
</div>
<a class="anchor" id="ga7a47eecb5807f52c9a6e9bd2e2b6e5c9"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> void hwloc_topology_set_userdata_import_callback </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">void(*)(<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> obj, const char *name, const void *buffer, size_t length)&#160;</td>
          <td class="paramname"><em>import_cb</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Set the application-specific callback for importing userdata. </p>
<p>On XML import, userdata is ignored by default because hwloc does not know how to store it in memory.</p>
<p>This function lets applications set <code>import_cb</code> to a callback function that will get the XML-stored userdata and store it in the object as expected by the application.</p>
<p><code>import_cb</code> is called during <a class="el" href="a00054.php#ga91e2e6427b95fb7339c99dbbef996e71" title="Build the actual topology.">hwloc_topology_load()</a> as many times as <a class="el" href="a00056.php#ga8c66f9bb1d56af4747f7227d2fd4b11a" title="Export some object userdata to XML.">hwloc_export_obj_userdata()</a> was called during export. The topology is not entirely setup yet. Object attributes are ready to consult, but links between objects are not.</p>
<p><code>import_cb</code> may be <code>NULL</code> if userdata should be ignored during import.</p>
<dl class="section note"><dt>Note</dt><dd><code>buffer</code> contains <code>length</code> characters followed by a null byte ('\0').</dd>
<dd>
This function should be called before <a class="el" href="a00054.php#ga91e2e6427b95fb7339c99dbbef996e71" title="Build the actual topology.">hwloc_topology_load()</a>. </dd></dl>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
