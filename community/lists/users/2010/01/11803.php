<?
$subject_val = "Re: [OMPI users] shared memory (sm) module not working properly?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 15 18:06:46 2010" -->
<!-- isoreceived="20100115230646" -->
<!-- sent="Fri, 15 Jan 2010 15:08:12 -0800" -->
<!-- isosent="20100115230812" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] shared memory (sm) module not working properly?" -->
<!-- id="4B50F55C.1080806_at_sun.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="dcf611bd1001151448q8a48e5ctcea9fa30f2641911_at_mail.gmail.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] shared memory (sm) module not working properly?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-15 18:08:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11804.php">Roman Martonak: "Re: [OMPI users] dynamic rules"</a>
<li><strong>Previous message:</strong> <a href="11802.php">Nicolas Bock: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>In reply to:</strong> <a href="11802.php">Nicolas Bock: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11824.php">Nicolas Bock: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>Reply:</strong> <a href="11824.php">Nicolas Bock: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=UTF-8" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
Dunno.  Do lower np values succeed?  If so, at what value of np does
the job no longer start?<br>
<br>
Perhaps it's having a hard time creating the shared-memory backing file
in /tmp.  I think this is a 64-Mbyte file.  If this is the case, try
reducing the size of the shared area per this FAQ item: 
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/faq/?category=sm#decrease-sm">http://www.open-mpi.org/faq/?category=sm#decrease-sm</a>  Most notably,
reduce mpool_sm_min_size below 67108864.<br>
<br>
Also note trac ticket 2043, which describes problems with the sm BTL
exposed by GCC 4.4.x compilers.  You need to get a sufficiently recent
build to solve this.  But, those problems don't occur until you start
passing messages, and here you're not even starting up.<br>
<br>
Nicolas Bock wrote:
<blockquote
 cite="middcf611bd1001151448q8a48e5ctcea9fa30f2641911@mail.gmail.com"
 type="cite">Sorry, I forgot to give more details on what versions I am
using:<br>
  <br>
OpenMPI 1.4<br>
Ubuntu 9.10, kernel 2.6.31-16-generic #53-Ubuntu<br>
gcc (Ubuntu 4.4.1-4ubuntu8) 4.4.1<br>
  <br>
  <div class="gmail_quote">On Fri, Jan 15, 2010 at 15:47, Nicolas Bock <span
 dir="ltr">&lt;<a href="mailto:nicolasbock@gmail.com">nicolasbock@gmail.com</a>&gt;</span>
wrote:<br>
  <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">Hello
list,<br>
    <br>
I am running a job on a 4 quadcore AMD Opteron. This machine has 16
cores, which I can verify by looking at /proc/cpuinfo. However, when I
run a job with<br>
    <br>
mpirun -np 16 -mca btl self,sm job<br>
    <br>
I get this error:<br>
    <br>
--------------------------------------------------------------------------<br>
At least one pair of MPI processes are unable to reach each other for<br>
MPI communications.  This means that no Open MPI device has indicated<br>
that it can be used to communicate between these processes.  This is<br>
an error; Open MPI requires that all MPI processes be able to reach<br>
each other.  This error can sometimes be the result of forgetting to<br>
specify the "self" BTL.<br>
    <br>
  Process 1 ([[56972,2],0]) is on host: rust<br>
  Process 2 ([[56972,1],0]) is on host: rust<br>
  BTLs attempted: self sm<br>
    <br>
Your MPI job is now going to abort; sorry.<br>
--------------------------------------------------------------------------<br>
    <br>
By adding the tcp btl I can run the job. I don't understand why openmpi
claims that a pair of processes can not reach each other, all processor
cores should have access to all memory after all. Do I need to set some
other btl limit?<br>
  </blockquote>
  </div>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11804.php">Roman Martonak: "Re: [OMPI users] dynamic rules"</a>
<li><strong>Previous message:</strong> <a href="11802.php">Nicolas Bock: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>In reply to:</strong> <a href="11802.php">Nicolas Bock: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11824.php">Nicolas Bock: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>Reply:</strong> <a href="11824.php">Nicolas Bock: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
