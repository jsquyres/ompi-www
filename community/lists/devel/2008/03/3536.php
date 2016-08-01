<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17956";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 26 10:55:33 2008" -->
<!-- isoreceived="20080326145533" -->
<!-- sent="Wed, 26 Mar 2008 10:55:28 -0400" -->
<!-- isosent="20080326145528" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r17956" -->
<!-- id="D1A9E006-8573-4799-864E-2456AABF1E5E_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0AC3AF33-F3E4-4966-92DD-C849A135FC66_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r17956<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-26 10:55:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3537.php">Brian W. Barrett: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<li><strong>Previous message:</strong> <a href="3535.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17956"</a>
<li><strong>In reply to:</strong> <a href="3535.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17956"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3538.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17956"</a>
<li><strong>Reply:</strong> <a href="3538.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17956"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My fix is in r17980. I did some limited testing with and without C/R  
<br>
and things look fine. Wider testing may be in order, but I think MTT  
<br>
should take care of that this evening.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Mar 26, 2008, at 10:40 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think this commit is not quite correct. I'm working on a patch to
</span><br>
<span class="quotelev1">&gt; fix it at the moment, but just wanted to give a heads up for anyone
</span><br>
<span class="quotelev1">&gt; that is experience the same problem I am.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Before this commit I could set &quot;opal_event_include=select&quot; in
</span><br>
<span class="quotelev1">&gt; my .openmpi/mca-params.conf file and the event engine would only use
</span><br>
<span class="quotelev1">&gt; 'select' for all OMPI/ORTE processes. This commit overrides this
</span><br>
<span class="quotelev1">&gt; selection by forcing that all MPI apps use &quot;all&quot;. I noticed the break
</span><br>
<span class="quotelev1">&gt; since the FT builds (which require 'select' at the moment) were  
</span><br>
<span class="quotelev1">&gt; failing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The fix might be as easy as checking to see if the user specified
</span><br>
<span class="quotelev1">&gt; anything other than the default then forcing only if the user did not
</span><br>
<span class="quotelev1">&gt; define anything. Thoughts?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 25, 2008, at 1:18 PM, jsquyres_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: jsquyres
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2008-03-25 13:18:17 EDT (Tue, 25 Mar 2008)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 17956
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/17956">https://svn.open-mpi.org/trac/ompi/changeset/17956</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Fix #1253: default libevent to use select/poll and only use the other
</span><br>
<span class="quotelev2">&gt;&gt; mechanisms (such as epoll) if someone (ompi_mpi_init()) requests
</span><br>
<span class="quotelev2">&gt;&gt; otherwise.  See big comment in opal/event/event.c for a full
</span><br>
<span class="quotelev2">&gt;&gt; explanation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/runtime/ompi_mpi_init.c |    32 ++++++++++++++++++++++++
</span><br>
<span class="quotelev2">&gt;&gt; +++-----
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/event/event.c           |    37 ++++++++++++++++++++++++
</span><br>
<span class="quotelev2">&gt;&gt; ++++++++-----
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/orted/orted_main.c      |    31
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;  3 files changed, 59 insertions(+), 41 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/runtime/ompi_mpi_init.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/runtime/ompi_mpi_init.c	2008-03-25 13:18:17 EDT (Tue,
</span><br>
<span class="quotelev2">&gt;&gt; 25 Mar 2008)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -234,15 +234,37 @@
</span><br>
<span class="quotelev2">&gt;&gt;    /* see comment below about sched_yield */
</span><br>
<span class="quotelev2">&gt;&gt;    int num_processors;
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    /* Join the run-time environment - do the things that don't hit
</span><br>
<span class="quotelev2">&gt;&gt; -       the registry */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    if (ORTE_SUCCESS != (ret = opal_init())) {
</span><br>
<span class="quotelev2">&gt;&gt; -        error = &quot;ompi_mpi_init: opal_init failed&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +    /* Setup enough to check get/set MCA params */
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    if (ORTE_SUCCESS != (ret = opal_init_util())) {
</span><br>
<span class="quotelev2">&gt;&gt; +        error = &quot;ompi_mpi_init: opal_init_util failed&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;        goto error;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +    /* _After_ opal_init_util() but _before_ orte_init(), we need to
</span><br>
<span class="quotelev2">&gt;&gt; +       set an MCA param that tells libevent that it's ok to use any
</span><br>
<span class="quotelev2">&gt;&gt; +       mechanism in libevent that si available on this platform
</span><br>
<span class="quotelev2">&gt;&gt; (e.g.,
</span><br>
<span class="quotelev2">&gt;&gt; +       epoll and friends).  Per opal/event/event.s, we default to
</span><br>
<span class="quotelev2">&gt;&gt; +       select/poll -- but we know that MPI processes won't be using
</span><br>
<span class="quotelev2">&gt;&gt; +       pty's with the event engine, so it's ok to relax this
</span><br>
<span class="quotelev2">&gt;&gt; +       constraint and let any fd-monitoring mechanism be used. */
</span><br>
<span class="quotelev2">&gt;&gt; +    ret = mca_base_param_reg_string_name(&quot;opal&quot;, &quot;event_include&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                                         &quot;Internal orted MCA param:
</span><br>
<span class="quotelev2">&gt;&gt; tell opal_init() to use a specific mechanism in libevent&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                                         false, false, &quot;all&quot;, NULL);
</span><br>
<span class="quotelev2">&gt;&gt; +    if (ret &gt;= 0) {
</span><br>
<span class="quotelev2">&gt;&gt; +        /* We have to explicitly &quot;set&quot; the MCA param value here
</span><br>
<span class="quotelev2">&gt;&gt; +           because libevent initialization will re-register the MCA
</span><br>
<span class="quotelev2">&gt;&gt; +           param and therefore override the default. Setting the
</span><br>
<span class="quotelev2">&gt;&gt; value
</span><br>
<span class="quotelev2">&gt;&gt; +           here puts the desired value (&quot;all&quot;) in different storage
</span><br>
<span class="quotelev2">&gt;&gt; +           that is not overwritten if/when the MCA param is
</span><br>
<span class="quotelev2">&gt;&gt; +           re-registered.  Note that we do *NOT* set this value as  
</span><br>
<span class="quotelev2">&gt;&gt; an
</span><br>
<span class="quotelev2">&gt;&gt; +           environment variable, just so that it won't be inherited
</span><br>
<span class="quotelev2">&gt;&gt; by
</span><br>
<span class="quotelev2">&gt;&gt; +           any spawned processes and potentially cause unintented
</span><br>
<span class="quotelev2">&gt;&gt; +           side-effects with launching ORTE tools... */
</span><br>
<span class="quotelev2">&gt;&gt; +        mca_base_param_set_string(ret, &quot;all&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;    /* check to see if we want timing information */
</span><br>
<span class="quotelev2">&gt;&gt;    param = mca_base_param_reg_int_name(&quot;ompi&quot;, &quot;timing&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                                        &quot;Request that critical
</span><br>
<span class="quotelev2">&gt;&gt; timing loops be measured&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/opal/event/event.c
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/opal/event/event.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/opal/event/event.c	2008-03-25 13:18:17 EDT (Tue, 25 Mar
</span><br>
<span class="quotelev2">&gt;&gt; 2008)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -256,15 +256,42 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #if OPAL_HAVE_WORKING_EVENTOPS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    /**
</span><br>
<span class="quotelev2">&gt;&gt; -     * Retrieve the upper level specified event system, if any.
</span><br>
<span class="quotelev2">&gt;&gt; +    /* Retrieve the upper level specified event system, if any.
</span><br>
<span class="quotelev2">&gt;&gt; +     * Default to select() on OS X and poll() everywhere else  
</span><br>
<span class="quotelev2">&gt;&gt; because
</span><br>
<span class="quotelev2">&gt;&gt; +     * various parts of OMPI / ORTE use libevent with pty's.  pty's
</span><br>
<span class="quotelev2">&gt;&gt; +     * *only* work with select on OS X (tested on Tiger and  
</span><br>
<span class="quotelev2">&gt;&gt; Leopard);
</span><br>
<span class="quotelev2">&gt;&gt; +     * we *know* that both select and poll works with pty's
</span><br>
<span class="quotelev2">&gt;&gt; everywhere
</span><br>
<span class="quotelev2">&gt;&gt; +     * else we care about (other mechansisms such as epoll *may*  
</span><br>
<span class="quotelev2">&gt;&gt; work
</span><br>
<span class="quotelev2">&gt;&gt; +     * with pty's -- we have not tested comprehensively with newer
</span><br>
<span class="quotelev2">&gt;&gt; +     * versions of Linux, etc.).  So the safe thing to do is:
</span><br>
<span class="quotelev2">&gt;&gt; +     *
</span><br>
<span class="quotelev2">&gt;&gt; +     * - On OS X, default to using &quot;select&quot; only
</span><br>
<span class="quotelev2">&gt;&gt; +     * - Everywhere else, default to using &quot;poll&quot; only (because poll
</span><br>
<span class="quotelev2">&gt;&gt; +     *   is more scalable than select)
</span><br>
<span class="quotelev2">&gt;&gt; +     *
</span><br>
<span class="quotelev2">&gt;&gt; +     * An upper layer may override this setting if it knows that
</span><br>
<span class="quotelev2">&gt;&gt; pty's
</span><br>
<span class="quotelev2">&gt;&gt; +     * won't be used with libevent.  For example, we currently have
</span><br>
<span class="quotelev2">&gt;&gt; +     * ompi_mpi_init() set to use &quot;all&quot; (to include epoll and
</span><br>
<span class="quotelev2">&gt;&gt; friends)
</span><br>
<span class="quotelev2">&gt;&gt; +     * so that the TCP BTL can be a bit more scalable -- because we
</span><br>
<span class="quotelev2">&gt;&gt; +     * *know* that MPI apps don't use pty's with libevent.
</span><br>
<span class="quotelev2">&gt;&gt; +     * Note that other tools explicitly *do* use pty's with  
</span><br>
<span class="quotelev2">&gt;&gt; libevent:
</span><br>
<span class="quotelev2">&gt;&gt; +     *
</span><br>
<span class="quotelev2">&gt;&gt; +     * - orted
</span><br>
<span class="quotelev2">&gt;&gt; +     * - orterun (probably only if it launches locally)
</span><br>
<span class="quotelev2">&gt;&gt; +     * - ...?
</span><br>
<span class="quotelev2">&gt;&gt;     */
</span><br>
<span class="quotelev2">&gt;&gt;    mca_base_param_reg_string_name(&quot;opal&quot;, &quot;event_include&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                   &quot;Comma-delimited list of
</span><br>
<span class="quotelev2">&gt;&gt; libevent subsystems to use (kqueue, devpoll, epoll, poll, select,
</span><br>
<span class="quotelev2">&gt;&gt; and rtsig)&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                   false, false, &quot;all&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;event_module_include);
</span><br>
<span class="quotelev2">&gt;&gt; +                                   &quot;Comma-delimited list of
</span><br>
<span class="quotelev2">&gt;&gt; libevent subsystems to use (kqueue, devpoll, epoll, poll, select,
</span><br>
<span class="quotelev2">&gt;&gt; and rtsig -- depending on your platform)&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                                   false, false,
</span><br>
<span class="quotelev2">&gt;&gt; +#ifdef __APPLE__
</span><br>
<span class="quotelev2">&gt;&gt; +                                   &quot;select&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +#else
</span><br>
<span class="quotelev2">&gt;&gt; +                                   &quot;poll&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +                                   &amp;event_module_include);
</span><br>
<span class="quotelev2">&gt;&gt;    if (NULL == event_module_include) {
</span><br>
<span class="quotelev2">&gt;&gt;        /* Shouldn't happen, but... */
</span><br>
<span class="quotelev2">&gt;&gt; -        event_module_include = strdup(&quot;all&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +        event_module_include = strdup(&quot;select&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    opal_event_module_include =
</span><br>
<span class="quotelev2">&gt;&gt; opal_argv_split(event_module_include,',');
</span><br>
<span class="quotelev2">&gt;&gt;    free(event_module_include);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/orted/orted_main.c
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/orted/orted_main.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/orted/orted_main.c	2008-03-25 13:18:17 EDT (Tue, 25
</span><br>
<span class="quotelev2">&gt;&gt; Mar 2008)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -178,7 +178,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;    char log_file[PATH_MAX];
</span><br>
<span class="quotelev2">&gt;&gt;    char *jobidstring;
</span><br>
<span class="quotelev2">&gt;&gt;    char *rml_uri;
</span><br>
<span class="quotelev2">&gt;&gt; -    char *tmp1, *tmp2;
</span><br>
<span class="quotelev2">&gt;&gt;    int i;
</span><br>
<span class="quotelev2">&gt;&gt;    opal_buffer_t *buffer;
</span><br>
<span class="quotelev2">&gt;&gt;    char hostname[100];
</span><br>
<span class="quotelev2">&gt;&gt; @@ -264,36 +263,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;        if (1000 &lt; i) i=0;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    /* _After_ opal_init_util() (and various other bookkeeping) but
</span><br>
<span class="quotelev2">&gt;&gt; -       _before_ orte_init(), we need to set an MCA param that tells
</span><br>
<span class="quotelev2">&gt;&gt; -       the orted not to use any other libevent mechanism except
</span><br>
<span class="quotelev2">&gt;&gt; -       &quot;select&quot; or &quot;poll&quot; (per potential pty issues with scalable
</span><br>
<span class="quotelev2">&gt;&gt; -       fd-monitoring mechanisms such as epoll() and friends -- these
</span><br>
<span class="quotelev2">&gt;&gt; -       issues *may* have been fixed in later OS releases and/or  
</span><br>
<span class="quotelev2">&gt;&gt; newer
</span><br>
<span class="quotelev2">&gt;&gt; -       versions of libevent, but we weren't willing to do all the
</span><br>
<span class="quotelev2">&gt;&gt; -       testing to figure it out.  So force the orted to use
</span><br>
<span class="quotelev2">&gt;&gt; -       select()/poll() *only* -- there's so few fd's in the orted
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; -       it really doesn't matter.
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -       Note that pty's work fine with poll() on most systems, so we
</span><br>
<span class="quotelev2">&gt;&gt; -       prefer that (because it's more scalable than select()).
</span><br>
<span class="quotelev2">&gt;&gt; -       However, poll() does *not* work with ptys on OS X, so we use
</span><br>
<span class="quotelev2">&gt;&gt; -       select() there. */
</span><br>
<span class="quotelev2">&gt;&gt; -    mca_base_param_reg_string_name(&quot;opal&quot;, &quot;event_include&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                   &quot;Internal orted MCA param: tell
</span><br>
<span class="quotelev2">&gt;&gt; opal_init() to use a specific mechanism in libevent&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                   true, true,
</span><br>
<span class="quotelev2">&gt;&gt; -#ifdef __APPLE__
</span><br>
<span class="quotelev2">&gt;&gt; -                                   &quot;select&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -#else
</span><br>
<span class="quotelev2">&gt;&gt; -                                   &quot;poll&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -#endif
</span><br>
<span class="quotelev2">&gt;&gt; -                                   NULL);
</span><br>
<span class="quotelev2">&gt;&gt; -    tmp1 = mca_base_param_environ_variable(&quot;opal&quot;, NULL,
</span><br>
<span class="quotelev2">&gt;&gt; &quot;event_include&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; -    asprintf(&amp;tmp2, &quot;%s=select&quot;, tmp1);
</span><br>
<span class="quotelev2">&gt;&gt; -    putenv(tmp2);
</span><br>
<span class="quotelev2">&gt;&gt; -    free(tmp1);
</span><br>
<span class="quotelev2">&gt;&gt; -    free(tmp2);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;    /* Okay, now on to serious business! */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    if (orted_globals.hnp) {
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3537.php">Brian W. Barrett: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<li><strong>Previous message:</strong> <a href="3535.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17956"</a>
<li><strong>In reply to:</strong> <a href="3535.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17956"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3538.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17956"</a>
<li><strong>Reply:</strong> <a href="3538.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17956"</a>
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