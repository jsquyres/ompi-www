<? 
if (preg_match("/\/[12][0-9][0-9][0-9]\/[01][0-9]\//", $_SERVER["REQUEST_URI"])) {
    include("../../include/index-header.inc");
} else {
    include("include/index-header.inc");
}
?>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/docs/2008/01/date.php">Previous Folder, Date view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/2008/03/date.php">Next Folder, Date view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/index.php">List of Folders</a></th></tr>
</table>
</div>
<div class="center">
<table>
<tr>
<th colspan="4">3 Messages</th>
</tr>
<tr>
  <th>Starting:</th><td><em>2007-09-14 14:30:58</em></td>
  <th>Ending:</th><td><em>2016-03-29 09:20:51</em></td>
</tr>
</table>
</div>
<hr>
<ul>
<li><a href="0102.php"><strong>Re: [OMPI docs] Logo for user-docs project</strong></a>&nbsp;<a name="102"><em>Amit Kumar Saha</em></a>&nbsp;<em>(2008-02-04 11:24:39)</em></li>
<li><a href="0101.php"><strong>Re: [OMPI docs] Logo for user-docs project</strong></a>&nbsp;<a name="101"><em>Jeff Squyres</em></a>&nbsp;<em>(2008-02-04 08:15:25)</em></li>
<li><a href="0100.php"><strong>Re: [OMPI docs] Logo for user-docs project</strong></a>&nbsp;<a name="100"><em>Jeff Squyres</em></a>&nbsp;<em>(2008-02-04 07:55:33)</em></li>
</ul>
<hr>
<div class="center">
<table>
<tr><th><a name="end">Last message date: </a></th><td><em>2016-03-29 09:20:51</em></td>
<th>Archived on: </th><td><em>2016-03-29 09:20:53 EDT</em></td>
</table>
</div>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/docs/2008/01/date.php">Previous Folder, Date view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/2008/03/date.php">Next Folder, Date view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/index.php">List of Folders</a></th></tr>
</table>
</div>
<!-- trailer="footer" -->
<? 
if (preg_match("/\/[12][0-9][0-9][0-9]\/[01][0-9]\//", $_SERVER{'REQUEST_URI'})) {
    include("../../include/index-footer.inc");
} else {
    include("include/index-footer.inc");
}
?>
