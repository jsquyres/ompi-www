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
<div class="title">Object/String Conversion</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ga7c61920feca6fd9006d930dabfc09058"><td class="memItemLeft" align="right" valign="top"> const char *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00052.php#ga7c61920feca6fd9006d930dabfc09058">hwloc_obj_type_string</a> (<a class="el" href="a00044.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type) </td></tr>
<tr class="separator:ga7c61920feca6fd9006d930dabfc09058"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gade722091ae392fdc79557e797a16c370"><td class="memItemLeft" align="right" valign="top"> <a class="el" href="a00044.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00052.php#gade722091ae392fdc79557e797a16c370">hwloc_obj_type_of_string</a> (const char *string) </td></tr>
<tr class="separator:gade722091ae392fdc79557e797a16c370"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga3ad856e8f3487d340c82a23b8a2a0351"><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00052.php#ga3ad856e8f3487d340c82a23b8a2a0351">hwloc_obj_type_snprintf</a> (char *restrict string, size_t size, <a class="el" href="a00045.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> obj, int verbose)</td></tr>
<tr class="separator:ga3ad856e8f3487d340c82a23b8a2a0351"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga0db8286d7f3ceda8defd76e3e1e2b284"><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00052.php#ga0db8286d7f3ceda8defd76e3e1e2b284">hwloc_obj_attr_snprintf</a> (char *restrict string, size_t size, <a class="el" href="a00045.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> obj, const char *restrict separator, int verbose)</td></tr>
<tr class="separator:ga0db8286d7f3ceda8defd76e3e1e2b284"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga5c6a61a83f4790b421e2f62e9088446f"><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00052.php#ga5c6a61a83f4790b421e2f62e9088446f">hwloc_obj_snprintf</a> (char *restrict string, size_t size, <a class="el" href="a00042.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00045.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> obj, const char *restrict indexprefix, int verbose)</td></tr>
<tr class="separator:ga5c6a61a83f4790b421e2f62e9088446f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gabbfb92224c992c0e2ecef6b6e45260f2"><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00052.php#gabbfb92224c992c0e2ecef6b6e45260f2">hwloc_obj_cpuset_snprintf</a> (char *restrict str, size_t size, size_t nobj, const <a class="el" href="a00045.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> *restrict objs)</td></tr>
<tr class="separator:gabbfb92224c992c0e2ecef6b6e45260f2"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga2a12b2450489675bd5759dc47cbc51ed"><td class="memItemLeft" align="right" valign="top">static inline const char *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00052.php#ga2a12b2450489675bd5759dc47cbc51ed">hwloc_obj_get_info_by_name</a> (<a class="el" href="a00045.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> obj, const char *name) </td></tr>
<tr class="separator:ga2a12b2450489675bd5759dc47cbc51ed"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gaba3afe636940872772ed6dfaf0b3552e"><td class="memItemLeft" align="right" valign="top"> void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00052.php#gaba3afe636940872772ed6dfaf0b3552e">hwloc_obj_add_info</a> (<a class="el" href="a00045.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> obj, const char *name, const char *value)</td></tr>
<tr class="separator:gaba3afe636940872772ed6dfaf0b3552e"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="gaba3afe636940872772ed6dfaf0b3552e"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> void hwloc_obj_add_info </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00045.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
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
          <td class="paramtype">const char *&#160;</td>
          <td class="paramname"><em>value</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Add the given info name and value pair to the given object. </p>
<p>The info is appended to the existing info array even if another key with the same name already exists.</p>
<p>The input strings are copied before being added in the object infos.</p>
<dl class="section note"><dt>Note</dt><dd>If <code>value</code> contains some non-printable characters, they will be dropped when exporting to XML, see <a class="el" href="a00048.php#ga45578d725c66865cfef31d0585dcff70" title="Export the topology into an XML file.">hwloc_topology_export_xml()</a>. </dd></dl>

</div>
</div>
<a class="anchor" id="ga0db8286d7f3ceda8defd76e3e1e2b284"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_obj_attr_snprintf </td>
          <td>(</td>
          <td class="paramtype">char *restrict&#160;</td>
          <td class="paramname"><em>string</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">size_t&#160;</td>
          <td class="paramname"><em>size</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00045.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>obj</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const char *restrict&#160;</td>
          <td class="paramname"><em>separator</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>verbose</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Stringify the attributes of a given topology object into a human-readable form. </p>
<p>Attribute values are separated by <code>separator</code>.</p>
<p>Only the major attributes are printed in non-verbose mode.</p>
<p>If <code>size</code> is 0, <code>string</code> may safely be <code>NULL</code>.</p>
<dl class="section return"><dt>Returns</dt><dd>the number of character that were actually written if not truncating, or that would have been written (not including the ending \0). </dd></dl>

</div>
</div>
<a class="anchor" id="gabbfb92224c992c0e2ecef6b6e45260f2"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_obj_cpuset_snprintf </td>
          <td>(</td>
          <td class="paramtype">char *restrict&#160;</td>
          <td class="paramname"><em>str</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">size_t&#160;</td>
          <td class="paramname"><em>size</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">size_t&#160;</td>
          <td class="paramname"><em>nobj</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="a00045.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> *restrict&#160;</td>
          <td class="paramname"><em>objs</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Stringify the cpuset containing a set of objects. </p>
<p>If <code>size</code> is 0, <code>string</code> may safely be <code>NULL</code>.</p>
<dl class="section return"><dt>Returns</dt><dd>the number of character that were actually written if not truncating, or that would have been written (not including the ending \0). </dd></dl>

</div>
</div>
<a class="anchor" id="ga2a12b2450489675bd5759dc47cbc51ed"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline const char * hwloc_obj_get_info_by_name </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00045.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>obj</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const char *&#160;</td>
          <td class="paramname"><em>name</em>&#160;</td>
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

<p>Search the given key name in object infos and return the corresponding value. </p>
<p>If multiple keys match the given name, only the first one is returned.</p>
<dl class="section return"><dt>Returns</dt><dd><code>NULL</code> if no such key exists. </dd></dl>

</div>
</div>
<a class="anchor" id="ga5c6a61a83f4790b421e2f62e9088446f"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_obj_snprintf </td>
          <td>(</td>
          <td class="paramtype">char *restrict&#160;</td>
          <td class="paramname"><em>string</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">size_t&#160;</td>
          <td class="paramname"><em>size</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00042.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00045.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>obj</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const char *restrict&#160;</td>
          <td class="paramname"><em>indexprefix</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>verbose</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Stringify a given topology object into a human-readable form. </p>
<dl class="section note"><dt>Note</dt><dd>This function is deprecated in favor of <a class="el" href="a00052.php#ga3ad856e8f3487d340c82a23b8a2a0351" title="Stringify the type of a given topology object into a human-readable form.">hwloc_obj_type_snprintf()</a> and <a class="el" href="a00052.php#ga0db8286d7f3ceda8defd76e3e1e2b284" title="Stringify the attributes of a given topology object into a human-readable form.">hwloc_obj_attr_snprintf()</a> since it is not very flexible and only prints physical/OS indexes.</dd></dl>
<p>Fill string <code>string</code> up to <code>size</code> characters with the description of topology object <code>obj</code> in topology <code>topology</code>.</p>
<p>If <code>verbose</code> is set, a longer description is used. Otherwise a short description is used.</p>
<p><code>indexprefix</code> is used to prefix the <code>os_index</code> attribute number of the object in the description. If <code>NULL</code>, the <code>#</code> character is used.</p>
<p>If <code>size</code> is 0, <code>string</code> may safely be <code>NULL</code>.</p>
<dl class="section return"><dt>Returns</dt><dd>the number of character that were actually written if not truncating, or that would have been written (not including the ending \0). </dd></dl>

</div>
</div>
<a class="anchor" id="gade722091ae392fdc79557e797a16c370"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> <a class="el" href="a00044.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> hwloc_obj_type_of_string </td>
          <td>(</td>
          <td class="paramtype">const char *&#160;</td>
          <td class="paramname"><em>string</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Return an object type from the string. </p>
<dl class="section return"><dt>Returns</dt><dd>-1 if unrecognized. </dd></dl>

</div>
</div>
<a class="anchor" id="ga3ad856e8f3487d340c82a23b8a2a0351"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_obj_type_snprintf </td>
          <td>(</td>
          <td class="paramtype">char *restrict&#160;</td>
          <td class="paramname"><em>string</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">size_t&#160;</td>
          <td class="paramname"><em>size</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00045.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>obj</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>verbose</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Stringify the type of a given topology object into a human-readable form. </p>
<p>It differs from <a class="el" href="a00052.php#ga7c61920feca6fd9006d930dabfc09058" title="Return a stringified topology object type.">hwloc_obj_type_string()</a> because it prints type attributes such as cache depth and type.</p>
<p>If <code>size</code> is 0, <code>string</code> may safely be <code>NULL</code>.</p>
<dl class="section return"><dt>Returns</dt><dd>the number of character that were actually written if not truncating, or that would have been written (not including the ending \0). </dd></dl>

</div>
</div>
<a class="anchor" id="ga7c61920feca6fd9006d930dabfc09058"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> const char* hwloc_obj_type_string </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00044.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td>
          <td class="paramname"><em>type</em></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Return a stringified topology object type. </p>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
