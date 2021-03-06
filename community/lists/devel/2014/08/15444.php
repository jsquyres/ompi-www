<?
$subject_val = "Re: [OMPI devel] 1.8.2rc3 now out";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  1 05:46:48 2014" -->
<!-- isoreceived="20140801094648" -->
<!-- sent="Fri, 1 Aug 2014 12:46:45 +0300" -->
<!-- isosent="20140801094645" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.2rc3 now out" -->
<!-- id="CAAO1KyZ6NoKxmyvvE5WeLM-gbCUCsQPWTMyWTehAS4H+t7P8KA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA14hSLk7VFn2a3bvB81KH54C=Pvb2zVuoFtts1ZuWzzaFA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.2rc3 now out<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-01 05:46:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15445.php">Kawashima, Takahiro: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Previous message:</strong> <a href="15443.php">Paul Hargrove: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<li><strong>In reply to:</strong> <a href="15440.php">Paul Hargrove: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15449.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
<li><strong>Reply:</strong> <a href="15449.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also, latest commit into openib (origin/v1.8
<br>
<a href="https://svn.open-mpi.org/trac/ompi/changeset/32391">https://svn.open-mpi.org/trac/ompi/changeset/32391</a>) broke something:
<br>
<p>*11:45:01* + timeout -s SIGSEGV 3m
<br>
/scrap/jenkins/workspace/OMPI-vendor/label/hpctest/ompi_install1/bin/mpirun
<br>
-np 8 -mca pml ob1 -mca btl self,openib
<br>
/scrap/jenkins/workspace/OMPI-vendor/label/hpctest/ompi_install1/examples/hello_usempi*11:45:01*
<br>
--------------------------------------------------------------------------*11:45:01*
<br>
WARNING: There are more than one active ports on host 'hpctest', but
<br>
the*11:45:01* default subnet GID prefix was detected on more than one
<br>
of these*11:45:01* ports.  If these ports are connected to different
<br>
physical IB*11:45:01* networks, this configuration will fail in Open
<br>
MPI.  This version of*11:45:01* Open MPI requires that every
<br>
physically separate IB subnet that is*11:45:01* used between connected
<br>
MPI processes must have different subnet ID*11:45:01*
<br>
values.*11:45:01* *11:45:01* Please see this FAQ entry for more
<br>
details:*11:45:01* *11:45:01*
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid*11:45:01">http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid*11:45:01</a>*
<br>
*11:45:01* NOTE: You can turn off this warning by setting the MCA
<br>
parameter*11:45:01*       btl_openib_warn_default_gid_prefix to
<br>
0.*11:45:01* --------------------------------------------------------------------------*11:45:01*
<br>
--------------------------------------------------------------------------*11:45:01*
<br>
WARNING: No queue pairs were defined in the
<br>
btl_openib_receive_queues*11:45:01* MCA parameter.  At least one queue
<br>
pair must be defined.  The*11:45:01* OpenFabrics (openib) BTL will
<br>
therefore be deactivated for this run.*11:45:01* *11:45:01*   Local
<br>
host: hpctest*11:45:01*
<br>
--------------------------------------------------------------------------*11:45:01*
<br>
--------------------------------------------------------------------------*11:45:01*
<br>
At least one pair of MPI processes are unable to reach each other
<br>
for*11:45:01* MPI communications.  This means that no Open MPI device
<br>
has indicated*11:45:01* that it can be used to communicate between
<br>
these processes.  This is*11:45:01* an error; Open MPI requires that
<br>
all MPI processes be able to reach*11:45:01* each other.  This error
<br>
can sometimes be the result of forgetting to*11:45:01* specify the
<br>
&quot;self&quot; BTL.*11:45:01* *11:45:01*   Process 1 ([[55281,1],1]) is on
<br>
host: hpctest*11:45:01*   Process 2 ([[55281,1],0]) is on host:
<br>
hpctest*11:45:01*   BTLs attempted: self*11:45:01* *11:45:01* Your MPI
<br>
job is now going to abort; sorry.*11:45:01*
<br>
--------------------------------------------------------------------------*11:45:01*
<br>
--------------------------------------------------------------------------*11:45:01*
<br>
MPI_INIT has failed because at least one MPI process is
<br>
unreachable*11:45:01* from another.  This *usually* means that an
<br>
underlying communication*11:45:01* plugin -- such as a BTL or an MTL
<br>
-- has either not loaded or not*11:45:01* allowed itself to be used.
<br>
Your MPI job will now abort.*11:45:01* *11:45:01* You may wish to try
<br>
to narrow down the problem;*11:45:01* *11:45:01*  * Check the output
<br>
of ompi_info to see which BTL/MTL plugins are*11:45:01*
<br>
available.*11:45:01*  * Run your application with
<br>
MPI_THREAD_SINGLE.*11:45:01*  * Set the MCA parameter btl_base_verbose
<br>
to 100 (or mtl_base_verbose,*11:45:01*    if using MTL-based
<br>
communications) to see exactly which*11:45:01*    communication
<br>
plugins were considered and/or discarded.*11:45:01*
<br>
--------------------------------------------------------------------------*11:45:01*
<br>
*** An error occurred in MPI_Init*11:45:01* *** on a NULL
<br>
communicator*11:45:01* *** MPI_ERRORS_ARE_FATAL (processes in this
<br>
communicator will now abort,*11:45:01* ***    and potentially your MPI
<br>
job)*11:45:01* [hpctest:2761] Local abort before MPI_INIT completed
<br>
successfully; not able to aggregate error messages, and not able to
<br>
guarantee that all other processes were killed!*11:45:01* *** An error
<br>
occurred in MPI_Init*11:45:01* *** on a NULL communicator*11:45:01*
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now
<br>
abort,*11:45:01* ***    and potentially your MPI job)*11:45:01*
<br>
[hpctest:2757] Local abort before MPI_INIT completed successfully; not
<br>
able to aggregate error messages, and not able to guarantee that all
<br>
other processes were killed!*11:45:01* *** An error occurred in
<br>
MPI_Init*11:45:01* *** on a NULL communicator*11:45:01* ***
<br>
MPI_ERRORS_ARE_FATAL (processes in this communicator will now
<br>
abort,*11:45:01* ***    and potentially your MPI job)*11:45:01*
<br>
[hpctest:2751] Local abort before MPI_INIT completed successfully; not
<br>
able to aggregate error messages, and not able to guarantee that all
<br>
other processes were killed!*11:45:01* *** An error occurred in
<br>
MPI_Init*11:45:01* *** on a NULL communicator*11:45:01* ***
<br>
MPI_ERRORS_ARE_FATAL (processes in this communicator will now
<br>
abort,*11:45:01* ***    and potentially your MPI job)*11:45:01*
<br>
[hpctest:2752] Local abort before MPI_INIT completed successfully; not
<br>
able to aggregate error messages, and not able to guarantee that all
<br>
other processes were killed!*11:45:01* *** An error occurred in
<br>
MPI_Init*11:45:01* *** on a NULL communicator*11:45:01* ***
<br>
MPI_ERRORS_ARE_FATAL (processes in this communicator will now
<br>
abort,*11:45:01* ***    and potentially your MPI job)*11:45:01*
<br>
[hpctest:2753] Local abort before MPI_INIT completed successfully; not
<br>
able to aggregate error messages, and not able to guarantee that all
<br>
other processes were killed!*11:45:01* *** An error occurred in
<br>
MPI_Init*11:45:01* *** on a NULL communicator*11:45:01* ***
<br>
MPI_ERRORS_ARE_FATAL (processes in this communicator will now
<br>
abort,*11:45:01* ***    and potentially your MPI job)*11:45:01*
<br>
[hpctest:2755] Local abort before MPI_INIT completed successfully; not
<br>
able to aggregate error messages, and not able to guarantee that all
<br>
other processes were killed!*11:45:01* *** An error occurred in
<br>
MPI_Init*11:45:01* *** on a NULL communicator*11:45:01* ***
<br>
MPI_ERRORS_ARE_FATAL (processes in this communicator will now
<br>
abort,*11:45:01* ***    and potentially your MPI job)*11:45:01*
<br>
[hpctest:2759] Local abort before MPI_INIT completed successfully; not
<br>
able to aggregate error messages, and not able to guarantee that all
<br>
other processes were killed!*11:45:01* *** An error occurred in
<br>
MPI_Init*11:45:01* *** on a NULL communicator*11:45:01* ***
<br>
MPI_ERRORS_ARE_FATAL (processes in this communicator will now
<br>
abort,*11:45:01* ***    and potentially your MPI job)*11:45:01*
<br>
[hpctest:2763] Local abort before MPI_INIT completed successfully; not
<br>
able to aggregate error messages, and not able to guarantee that all
<br>
other processes were killed!
<br>
<p><p><p>On Fri, Aug 1, 2014 at 11:00 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Note that the Solaris unresolved alloca problem George fixed in r32388 is
</span><br>
<span class="quotelev1">&gt; still present in 1.8.2rc3.
</span><br>
<span class="quotelev1">&gt; I have manually confirmed that the same patch resolves the problem in
</span><br>
<span class="quotelev1">&gt; 1.8.2rc3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 31, 2014 at 9:44 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Usual place - this is a last-chance check, so please hit it. Main change
</span><br>
<span class="quotelev2">&gt;&gt; from rc2 is the repairs to the Fortran binding config logic
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15433.php">http://www.open-mpi.org/community/lists/devel/2014/08/15433.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15440.php">http://www.open-mpi.org/community/lists/devel/2014/08/15440.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15444/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15445.php">Kawashima, Takahiro: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Previous message:</strong> <a href="15443.php">Paul Hargrove: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<li><strong>In reply to:</strong> <a href="15440.php">Paul Hargrove: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15449.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
<li><strong>Reply:</strong> <a href="15449.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
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
