<?
$subject_val = "Re: [OMPI users] MPI_Reduce performance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  9 14:43:31 2010" -->
<!-- isoreceived="20100909184331" -->
<!-- sent="Thu, 9 Sep 2010 22:40:06 +0400" -->
<!-- isosent="20100909184006" -->
<!-- name="Alex A. Granovsky" -->
<!-- email="gran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Reduce performance" -->
<!-- id="000201cb504e$d7d96190$3c45efc3_at_alexg" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="OF160AF875.42EFCC20-ON85257799.00604D47-85257799.0063D2A0_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Reduce performance<br>
<strong>From:</strong> Alex A. Granovsky (<em>gran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-09 14:40:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14203.php">Eugene Loh: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14201.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14201.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14203.php">Eugene Loh: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14203.php">Eugene Loh: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Isn't in evident from the theory of random processes and probability theory that in the limit of infinitely 
<br>
large cluster and parallel process, the probability of deadlocks with current implementation is unfortunately 
<br>
quite a finite quantity and in limit approaches to unity regardless on any particular details of the program.
<br>
<p>Just my two cents.
<br>
Alex Granovsky
<br>
<p>&nbsp;&nbsp;----- Original Message ----- 
<br>
&nbsp;&nbsp;From: Richard Treumann 
<br>
&nbsp;&nbsp;To: Open MPI Users 
<br>
&nbsp;&nbsp;Sent: Thursday, September 09, 2010 10:10 PM
<br>
&nbsp;&nbsp;Subject: Re: [OMPI users] MPI_Reduce performance
<br>
<p><p><p>&nbsp;&nbsp;I was pointing out that most programs have some degree of elastic synchronization built in. Tasks (or groups or components in a coupled model) seldom only produce data.they also consume what other tasks produce and that limits the potential skew.   
<br>
<p>&nbsp;&nbsp;If step n for a task (or group or coupled component) depends on data produced by step n-1 in another task  (or group or coupled component)  then no task can be farther ahead of the task it depends on than one step.   If there are 2 tasks that each need the others step n-1 result to compute step n then they can never get farther than one step out of synch.  If there were a rank ordered loop of  8 tasks so each one needs the output of the prior step on task ((me-1)  mod tasks) to compute then you can get more skew because if 
<br>
&nbsp;&nbsp;task 5 gets stalled in step 3, 
<br>
&nbsp;&nbsp;task 6 will finish step 3 and send results to 7 but stall on recv for step 4 (lacking the end of step 3 send by task 5) 
<br>
&nbsp;&nbsp;task 7 will finish step 4 and send results to 0  but stall on recv for step 5 
<br>
&nbsp;&nbsp;task 0 will finish step 5 and send results to 1  but stall on recv for step 6 
<br>
&nbsp;&nbsp;etc 
<br>
<p>&nbsp;&nbsp;In a 2D or 3D grid, the dependency is tighter so the possible skew is less. but it is still significant on a huge grid   In a program with frequent calls to MPI_Allreduce on COMM_WORLD, the skew is very limited. The available skew gets harder to predict as the interdependencies grow more complex. 
<br>
<p>&nbsp;&nbsp;I call this &quot;elasticity&quot; because the amount of stretch varies but, like a bungee cord or an waist band, only goes so far. Every parallel program has some degree of elasticity built into the way its parts interact. 
<br>
<p>&nbsp;&nbsp;I assume a coupler has some elasticity too. That is, ocean and atmosphere each model Monday and report in to coupler but neither can model Tuesday until they get some of the Monday results generated by the other. (I am pretending granularity is day by day)  Wouldn't the right level of synchronization among component result automatically form the data dependencies among them? 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;Dick Treumann  -  MPI Team           
<br>
&nbsp;&nbsp;IBM Systems &amp; Technology Group
<br>
&nbsp;&nbsp;Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
&nbsp;&nbsp;Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From:  Eugene Loh &lt;eugene.loh_at_[hidden]&gt;  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To:  Open MPI Users &lt;users_at_[hidden]&gt;  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date:  09/09/2010 12:40 PM  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject:  Re: [OMPI users] MPI_Reduce performance  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent by:  users-bounces_at_[hidden] 
<br>
<p><p>------------------------------------------------------------------------------
<br>
<p><p><p>&nbsp;&nbsp;Gus Correa wrote:
<br>
<p><span class="quotelev1">  &gt; More often than not some components lag behind (regardless of how
</span><br>
<span class="quotelev1">  &gt; much you tune the number of processors assigned to each component),
</span><br>
<span class="quotelev1">  &gt; slowing down the whole scheme.
</span><br>
<span class="quotelev1">  &gt; The coupler must sit and wait for that late component,
</span><br>
<span class="quotelev1">  &gt; the other components must sit and wait for the coupler,
</span><br>
<span class="quotelev1">  &gt; and the (vicious) &quot;positive feedback&quot; cycle that
</span><br>
<span class="quotelev1">  &gt; Ashley mentioned goes on and on.
</span><br>
<p>&nbsp;&nbsp;I think &quot;sit and wait&quot; is the &quot;typical&quot; scenario that Dick mentions.  
<br>
&nbsp;&nbsp;Someone lags, so someone else has to wait.
<br>
<p>&nbsp;&nbsp;In contrast, the &quot;feedback&quot; cycle Ashley mentions is where someone lags 
<br>
&nbsp;&nbsp;and someone else keeps racing ahead, pumping even more data at the 
<br>
&nbsp;&nbsp;laggard, forcing the laggard ever further behind.
<br>
&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;users_at_[hidden]
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><p><p>------------------------------------------------------------------------------
<br>
<p><p>&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;users_at_[hidden]
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14202/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14203.php">Eugene Loh: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14201.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14201.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14203.php">Eugene Loh: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14203.php">Eugene Loh: "Re: [OMPI users] MPI_Reduce performance"</a>
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