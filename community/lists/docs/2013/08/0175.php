<?
$subject_val = "Re: [OMPI docs] How to compile OpenMPI applications?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 24 13:45:15 2013" -->
<!-- isoreceived="20130824174515" -->
<!-- sent="Sat, 24 Aug 2013 19:42:56 +0200" -->
<!-- isosent="20130824174256" -->
<!-- name="manday_at_[hidden]" -->
<!-- email="manday_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] How to compile OpenMPI applications?" -->
<!-- id="20130824174239.GD10861_at_slate" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EBF70D4C-A776-4E1F-8B62-92462EE61969_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI docs] How to compile OpenMPI applications?<br>
<strong>From:</strong> <a href="mailto:manday_at_[hidden]?Subject=Re:%20[OMPI%20docs]%20How%20to%20compile%20OpenMPI%20applications?"><em>manday_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-08-24 13:42:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0176.php">Jed Brown: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>Previous message:</strong> <a href="0174.php">Leonardo Fialho: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>In reply to:</strong> <a href="0173.php">Ralph Castain: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0176.php">Jed Brown: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>Reply:</strong> <a href="0176.php">Jed Brown: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've frankly got no idea what you're talking about or whom you're
<br>
adressing for that matter. There is no student with any assignment and
<br>
neither are there any m4 files anywhere in the openmpi installation (at
<br>
least on Gentoo).
<br>
<p>I'm simply a software developer trying to &quot;properly&quot; compile my OpenMPI
<br>
software like I would compile any other program (that is, without
<br>
auxilliary software). In more practical regard, I'd prefer that the
<br>
compilation of this program integrate well with CMake and the normal
<br>
compile process, in which additional tools such as mpicc are uncalled
<br>
for.
<br>
<p>I hope this clears things up a little.
<br>
<p>On Sat, Aug 24, 2013 at 09:50:49AM -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; We generally refrain from helping students with assignments as that somewhat violates the intent of the teacher, but we can certainly provide direction. Constructing your own version of mpicc would mean that you dig thru the various .m4 files in the config directory to see what compiler and linker flags are being set. The code base tests the local environment using the .m4 files to determine which are applicable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good luck with your assignment!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 24, 2013, at 9:44 AM, manday_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Basically, yes. But what are the &quot;right librarlies&quot; and the necessary
</span><br>
<span class="quotelev2">&gt; &gt; header files? I would like to find documentation which does *not* assume
</span><br>
<span class="quotelev2">&gt; &gt; a &quot;black box&quot; (mpicc) which does all the &quot;magic&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Of course, I could just look at the example output of mpicc --showme,
</span><br>
<span class="quotelev2">&gt; &gt; but then I couldn't be sure that this is generally the right LD and CC
</span><br>
<span class="quotelev2">&gt; &gt; flags - therefore I'm looking for a documentation which covers the
</span><br>
<span class="quotelev2">&gt; &gt; compilation requirements generally.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Sat, Aug 24, 2013 at 11:13:31AM -0500, Leonardo Fialho wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If I'm not wrong, you just have to link the right libraries and be sure the preprocessor will find the header files. Usually, the mpicc is a compiler wraper that does that for you. Check if actually it is not a script that you can just change the content to adapt it to your necessities.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Aug 24, 2013, at 10:02 AM, manday_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; without mpicc, documentation of the general requirements. mpicc --showme
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; will just give an example, that's not what I meant when I referred to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &quot;documentation&quot;.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Freely rephrased, I'm looking for documentation which would
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; theoretically allow me to write a working mpicc myself (although that is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; obviously not my goal).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Sat, Aug 24, 2013 at 07:34:07AM -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Just type &quot;mpicc --showme&quot; and it will tell you the cmd line
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Aug 24, 2013, at 3:49 AM, manday_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; could you please provide me with documentation of how to compile OpenMPI
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; C applications in general (without a does-it-for-you tool such as mpicc)?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thank you
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; docs mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; docs_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; docs mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; docs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; docs mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; docs_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; docs mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; docs_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; docs mailing list
</span><br>
<span class="quotelev2">&gt; &gt; docs_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; docs mailing list
</span><br>
<span class="quotelev1">&gt; docs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0176.php">Jed Brown: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>Previous message:</strong> <a href="0174.php">Leonardo Fialho: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>In reply to:</strong> <a href="0173.php">Ralph Castain: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0176.php">Jed Brown: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>Reply:</strong> <a href="0176.php">Jed Brown: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
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
