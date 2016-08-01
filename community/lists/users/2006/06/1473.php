<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 28 06:56:15 2006" -->
<!-- isoreceived="20060628105615" -->
<!-- sent="Wed, 28 Jun 2006 12:53:14 +0200" -->
<!-- isosent="20060628105314" -->
<!-- name="Frank" -->
<!-- email="openmpi-user_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.1: Signal:10 info.si_errno:0(Unknown error: 0) si_code:1(BUS_ADRALN)" -->
<!-- id="44A25F9A.3070800_at_fraka-mp.de" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Frank (<em>openmpi-user_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-28 06:53:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1474.php">Terry D. Dontje: "Re: [OMPI users] OpenMPI 1.1: Signal:10 info.si_errno:0(Unknown, error:	0) si_code:1(BUS_ADRALN)"</a>
<li><strong>Previous message:</strong> <a href="1472.php">Patrick Jessee: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>I've recently updated to OpenMPI 1.1 on a few nodes and running into a 
<br>
problem that wasn't there with OpenMPI 1.0.2.
<br>
<p>Submitting a job to the XGrid with OpenMPI 1.1 yields a Bus error that 
<br>
isn't there when not submitting the job to the XGrid:
<br>
<p>[g5dual:/Network/CFD/MVH-1.0] motte% mpirun -d -np 2 ./vhone
<br>
[g5dual.3-net:08794] [0,0,0] setting up session dir with
<br>
[g5dual.3-net:08794]    universe default-universe
<br>
[g5dual.3-net:08794]    user motte
<br>
[g5dual.3-net:08794]    host g5dual.3-net
<br>
[g5dual.3-net:08794]    jobid 0
<br>
[g5dual.3-net:08794]    procid 0
<br>
[g5dual.3-net:08794] procdir: 
<br>
/tmp/openmpi-sessions-motte_at_g5dual.3-net_0/default-universe/0/0
<br>
[g5dual.3-net:08794] jobdir: 
<br>
/tmp/openmpi-sessions-motte_at_g5dual.3-net_0/default-universe/0
<br>
[g5dual.3-net:08794] unidir: 
<br>
/tmp/openmpi-sessions-motte_at_g5dual.3-net_0/default-universe
<br>
[g5dual.3-net:08794] top: openmpi-sessions-motte_at_g5dual.3-net_0
<br>
[g5dual.3-net:08794] tmp: /tmp
<br>
[g5dual.3-net:08794] [0,0,0] contact_file 
<br>
/tmp/openmpi-sessions-motte_at_g5dual.3-net_0/default-universe/universe-setup.txt
<br>
[g5dual.3-net:08794] [0,0,0] wrote setup file
<br>
Signal:10 info.si_errno:0(Unknown error: 0) si_code:1(BUS_ADRALN)
<br>
Failing at addr:0x10
<br>
*** End of error message ***
<br>
Bus error
<br>
[g5dual:/Network/CFD/MVH-1.0] motte%
<br>
<p>When not xgrid-submitting the job with OpenMPI 1.1 everything is just fine:
<br>
<p>[g5dual:/Network/CFD/MVH-1.0] motte% mpirun -d -np 2 ./vhone
<br>
[g5dual.3-net:08957] procdir: (null)
<br>
[g5dual.3-net:08957] jobdir: (null)
<br>
[g5dual.3-net:08957] unidir: 
<br>
/tmp/openmpi-sessions-motte_at_g5dual.3-net_0/default-universe
<br>
[g5dual.3-net:08957] top: openmpi-sessions-motte_at_g5dual.3-net_0
<br>
[g5dual.3-net:08957] tmp: /tmp
<br>
[g5dual.3-net:08957] connect_uni: contact info read
<br>
[g5dual.3-net:08957] connect_uni: connection not allowed
<br>
[g5dual.3-net:08957] [0,0,0] setting up session dir with
<br>
[g5dual.3-net:08957]    tmpdir /tmp
<br>
[g5dual.3-net:08957]    universe default-universe-8957
<br>
[g5dual.3-net:08957]    user motte
<br>
[g5dual.3-net:08957]    host g5dual.3-net
<br>
[g5dual.3-net:08957]    jobid 0
<br>
[g5dual.3-net:08957]    procid 0
<br>
[g5dual.3-net:08957] procdir: 
<br>
/tmp/openmpi-sessions-motte_at_g5dual.3-net_0/default-universe-8957/0/0
<br>
[g5dual.3-net:08957] jobdir: 
<br>
/tmp/openmpi-sessions-motte_at_g5dual.3-net_0/default-universe-8957/0
<br>
[g5dual.3-net:08957] unidir: 
<br>
/tmp/openmpi-sessions-motte_at_g5dual.3-net_0/default-universe-8957
<br>
[g5dual.3-net:08957] top: openmpi-sessions-motte_at_g5dual.3-net_0
<br>
[g5dual.3-net:08957] tmp: /tmp
<br>
[g5dual.3-net:08957] [0,0,0] contact_file 
<br>
/tmp/openmpi-sessions-motte_at_g5dual.3-net_0/default-universe-8957/universe-setup.txt
<br>
[g5dual.3-net:08957] [0,0,0] wrote setup file
<br>
[g5dual.3-net:08957] pls:rsh: local csh: 1, local bash: 0
<br>
[g5dual.3-net:08957] pls:rsh: assuming same remote shell as local shell
<br>
[g5dual.3-net:08957] pls:rsh: remote csh: 1, remote bash: 0
<br>
[g5dual.3-net:08957] pls:rsh: final template argv:
<br>
[g5dual.3-net:08957] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted --debug 
<br>
--bootproxy 1 --name &lt;template&gt; --num_procs 2 --vpid_start 0 --nodename 
<br>
&lt;template&gt; --universe motte_at_g5dual.3-net:default-universe-8957 
<br>
--nsreplica &quot;0.0.0;tcp://192.168.3.2:49281&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://192.168.3.2:49281&quot; --mpi-call-yield 0
<br>
[g5dual.3-net:08957] pls:rsh: launching on node localhost
<br>
[g5dual.3-net:08957] pls:rsh: oversubscribed -- setting 
<br>
mpi_yield_when_idle to 1 (1 2)
<br>
[g5dual.3-net:08957] pls:rsh: localhost is a LOCAL node
<br>
[g5dual.3-net:08957] pls:rsh: changing to directory /Users/motte
<br>
[g5dual.3-net:08957] pls:rsh: executing: orted --debug --bootproxy 1 
<br>
--name 0.0.1 --num_procs 2 --vpid_start 0 --nodename localhost 
<br>
--universe motte_at_g5dual.3-net:default-universe-8957 --nsreplica 
<br>
&quot;0.0.0;tcp://192.168.3.2:49281&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://192.168.3.2:49281&quot; --mpi-call-yield 1
<br>
[g5dual.3-net:08958] [0,0,1] setting up session dir with
<br>
[g5dual.3-net:08958]    universe default-universe-8957
<br>
[g5dual.3-net:08958]    user motte
<br>
[g5dual.3-net:08958]    host localhost
<br>
[g5dual.3-net:08958]    jobid 0
<br>
[g5dual.3-net:08958]    procid 1
<br>
[g5dual.3-net:08958] procdir: 
<br>
/tmp/openmpi-sessions-motte_at_localhost_0/default-universe-8957/0/1
<br>
[g5dual.3-net:08958] jobdir: 
<br>
/tmp/openmpi-sessions-motte_at_localhost_0/default-universe-8957/0
<br>
[g5dual.3-net:08958] unidir: 
<br>
/tmp/openmpi-sessions-motte_at_localhost_0/default-universe-8957
<br>
[g5dual.3-net:08958] top: openmpi-sessions-motte_at_localhost_0
<br>
[g5dual.3-net:08958] tmp: /tmp
<br>
[g5dual.3-net:08962] [0,1,1] setting up session dir with
<br>
[g5dual.3-net:08962]    universe default-universe-8957
<br>
[g5dual.3-net:08962]    user motte
<br>
[g5dual.3-net:08962]    host localhost
<br>
[g5dual.3-net:08962]    jobid 1
<br>
[g5dual.3-net:08962]    procid 1
<br>
[g5dual.3-net:08962] procdir: 
<br>
/tmp/openmpi-sessions-motte_at_localhost_0/default-universe-8957/1/1
<br>
[g5dual.3-net:08962] jobdir: 
<br>
/tmp/openmpi-sessions-motte_at_localhost_0/default-universe-8957/1
<br>
[g5dual.3-net:08962] unidir: 
<br>
/tmp/openmpi-sessions-motte_at_localhost_0/default-universe-8957
<br>
[g5dual.3-net:08962] top: openmpi-sessions-motte_at_localhost_0
<br>
[g5dual.3-net:08962] tmp: /tmp
<br>
[g5dual.3-net:08960] [0,1,0] setting up session dir with
<br>
[g5dual.3-net:08960]    universe default-universe-8957
<br>
[g5dual.3-net:08960]    user motte
<br>
[g5dual.3-net:08960]    host localhost
<br>
[g5dual.3-net:08960]    jobid 1
<br>
[g5dual.3-net:08960]    procid 0
<br>
[g5dual.3-net:08960] procdir: 
<br>
/tmp/openmpi-sessions-motte_at_localhost_0/default-universe-8957/1/0
<br>
[g5dual.3-net:08960] jobdir: 
<br>
/tmp/openmpi-sessions-motte_at_localhost_0/default-universe-8957/1
<br>
[g5dual.3-net:08960] unidir: 
<br>
/tmp/openmpi-sessions-motte_at_localhost_0/default-universe-8957
<br>
[g5dual.3-net:08960] top: openmpi-sessions-motte_at_localhost_0
<br>
[g5dual.3-net:08960] tmp: /tmp
<br>
[g5dual.3-net:08957] spawn: in job_state_callback(jobid = 1, state = 0x4)
<br>
[g5dual.3-net:08957] Info: Setting up debugger process table for 
<br>
applications
<br>
&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;MPIR_debug_gate = 0
<br>
&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;MPIR_acquired_pre_main = 0
<br>
&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;MPIR_proctable_size = 2
<br>
&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, localhost, ./vhone, 8960)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, localhost, ./vhone, 8962)
<br>
[g5dual.3-net:08960] [0,1,0] ompi_mpi_init completed
<br>
[g5dual.3-net:08962] [0,1,1] ompi_mpi_init completed
<br>
<p>(Rest ommitted)
<br>
<p>When xgrid-submitting the job with OpenMPI 1.0.2 there's no Bus error, 
<br>
either:
<br>
<p>[g5dual:/Network/CFD/MVH-1.0] motte% mpirun -d -np 2 ./vhone
<br>
[g5dual.3-net:00497] [0,0,0] setting up session dir with
<br>
[g5dual.3-net:00497]    universe default-universe
<br>
[g5dual.3-net:00497]    user motte
<br>
[g5dual.3-net:00497]    host g5dual.3-net
<br>
[g5dual.3-net:00497]    jobid 0
<br>
[g5dual.3-net:00497]    procid 0
<br>
[g5dual.3-net:00497] procdir: 
<br>
/tmp/openmpi-sessions-motte_at_g5dual.3-net_0/default-universe/0/0
<br>
[g5dual.3-net:00497] jobdir: 
<br>
/tmp/openmpi-sessions-motte_at_g5dual.3-net_0/default-universe/0
<br>
[g5dual.3-net:00497] unidir: 
<br>
/tmp/openmpi-sessions-motte_at_g5dual.3-net_0/default-universe
<br>
[g5dual.3-net:00497] top: openmpi-sessions-motte_at_g5dual.3-net_0
<br>
[g5dual.3-net:00497] tmp: /tmp
<br>
[g5dual.3-net:00497] [0,0,0] contact_file 
<br>
/tmp/openmpi-sessions-motte_at_g5dual.3-net_0/default-universe/universe-setup.txt
<br>
[g5dual.3-net:00497] [0,0,0] wrote setup file
<br>
[g5dual.3-net:00497] spawn: in job_state_callback(jobid = 1, state = 0x1)
<br>
[g5dual.3-net:00507] [0,1,1] setting up session dir with
<br>
[g5dual.3-net:00507]    universe default-universe
<br>
[g5dual.3-net:00507]    user nobody
<br>
[g5dual.3-net:00507]    host xgrid-node-1
<br>
[g5dual.3-net:00507]    jobid 1
<br>
[g5dual.3-net:00507]    procid 1
<br>
[g5dual.3-net:00507] procdir: 
<br>
/tmp/openmpi-sessions-nobody_at_xgrid-node-1_0/default-universe/1/1
<br>
[g5dual.3-net:00507] jobdir: 
<br>
/tmp/openmpi-sessions-nobody_at_xgrid-node-1_0/default-universe/1
<br>
[g5dual.3-net:00507] unidir: 
<br>
/tmp/openmpi-sessions-nobody_at_xgrid-node-1_0/default-universe
<br>
[g5dual.3-net:00507] top: openmpi-sessions-nobody_at_xgrid-node-1_0
<br>
[g5dual.3-net:00507] tmp: /tmp
<br>
[g5dual.3-net:00509] [0,1,0] setting up session dir with
<br>
[g5dual.3-net:00509]    universe default-universe
<br>
[g5dual.3-net:00509]    user nobody
<br>
[g5dual.3-net:00509]    host xgrid-node-0
<br>
[g5dual.3-net:00509]    jobid 1
<br>
[g5dual.3-net:00509]    procid 0
<br>
[g5dual.3-net:00509] procdir: 
<br>
/tmp/openmpi-sessions-nobody_at_xgrid-node-0_0/default-universe/1/0
<br>
[g5dual.3-net:00509] jobdir: 
<br>
/tmp/openmpi-sessions-nobody_at_xgrid-node-0_0/default-universe/1
<br>
[g5dual.3-net:00509] unidir: 
<br>
/tmp/openmpi-sessions-nobody_at_xgrid-node-0_0/default-universe
<br>
[g5dual.3-net:00509] top: openmpi-sessions-nobody_at_xgrid-node-0_0
<br>
[g5dual.3-net:00509] tmp: /tmp
<br>
[g5dual.3-net:00497] spawn: in job_state_callback(jobid = 1, state = 0x3)
<br>
[g5dual.3-net:00497] Info: Setting up debugger process table for 
<br>
applications
<br>
&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;MPIR_debug_gate = 0
<br>
&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;MPIR_acquired_pre_main = 0
<br>
&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;MPIR_proctable_size = 2
<br>
&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, xgrid-node-1, ./vhone, 507)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, xgrid-node-0, ./vhone, 509)
<br>
[g5dual.3-net:00497] spawn: in job_state_callback(jobid = 1, state = 0x4)
<br>
[g5dual.3-net:00507] [0,1,1] ompi_mpi_init completed
<br>
[g5dual.3-net:00509] [0,1,0] ompi_mpi_init completed
<br>
<p>(Rest ommitted)
<br>
<p>These are the steps I've done in order to upgrade to OpenMPI 1.1:
<br>
<p>- sudo make uninstall (within the OpenMPI 1.0.2-directory tree)
<br>
- cd to OpenMPI 1.1-directory tree
<br>
- ./configure --prefix=/usr --with-xgrid
<br>
- sudo make all install
<br>
<p>Maybe the ompi_info-output is of any help:
<br>
<p>[g5dual:/Network/CFD/MVH-1.0] motte% ompi_info
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.1
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r10477
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.1
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r10477
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r10477
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /usr
<br>
&nbsp;Configured architecture: powerpc-apple-darwin8.7.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: admin
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Wed Jun 28 10:55:12 CEST 2006
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: G5-Dual.local
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Wed Jun 28 11:32:04 CEST 2006
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: G5-Dual.local
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (single underscore)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: yes
<br>
&nbsp;Fortran90 bindings size: small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: g++
<br>
&nbsp;&nbsp;&nbsp;C++ compiler absolute: /usr/bin/g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: gfortran
<br>
&nbsp;&nbsp;Fortran77 compiler abs: /usr/local/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: gfortran
<br>
&nbsp;&nbsp;Fortran90 compiler abs: /usr/local/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (mpi: no, progress: no)
<br>
&nbsp;&nbsp;Internal debug support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
Memory profiling support: no
<br>
Memory debugging support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memory: darwin (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA timer: darwin (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: basic (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: hierarch (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: self (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sm (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: tuned (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: romio (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: sm (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA bml: r2 (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rcache: rb (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: self (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: sm (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA topo: unity (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: null (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: replica (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: proxy (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: svc (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: proxy (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: replica (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: dash_host (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: hostfile (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: localhost (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: xgrid (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: resfile (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: round_robin (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rml: oob (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: fork (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: rsh (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: xgrid (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: env (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: pipe (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: seed (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: singleton (MCA v1.0, API v1.0, Component v1.1)
<br>
<p>Enclosed you'll find the config.log.
<br>
<p>Yours,
<br>
Frank
<br>
<p><p><p>
<p>
This file contains any messages produced by compilers while
<br>
running configure, to aid debugging if configure makes a mistake.
<br>
<p>It was created by Open MPI configure 1.1, which was
<br>
generated by GNU Autoconf 2.59.  Invocation command line was
<br>
<p>&nbsp;&nbsp;$ ./configure --prefix=/usr --with-xgrid
<br>
<p>## --------- ##
<br>
## Platform. ##
<br>
## --------- ##
<br>
<p>hostname = G5-Dual.local
<br>
uname -m = Power Macintosh
<br>
uname -r = 8.7.0
<br>
uname -s = Darwin
<br>
uname -v = Darwin Kernel Version 8.7.0: Fri May 26 15:20:53 PDT 2006; root:xnu-792.6.76.obj~1/RELEASE_PPC
<br>
<p>/usr/bin/uname -p = powerpc
<br>
/bin/uname -X     = unknown
<br>
<p>/bin/arch              = unknown
<br>
/usr/bin/arch -k       = unknown
<br>
/usr/convex/getsysinfo = unknown
<br>
hostinfo               = Mach kernel version:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Darwin Kernel Version 8.7.0: Fri May 26 15:20:53 PDT 2006; root:xnu-792.6.76.obj~1/RELEASE_PPC
<br>
Kernel configured for up to 2 processors.
<br>
2 processors are physically available.
<br>
Processor type: ppc970 (PowerPC 970)
<br>
Processors active: 0 1
<br>
Primary memory available: 1.50 gigabytes
<br>
Default processor set: 71 tasks, 252 threads, 2 processors
<br>
Load average: 1.41, Mach factor: 0.77
<br>
/bin/machine           = unknown
<br>
/usr/bin/oslevel       = unknown
<br>
/bin/universe          = unknown
<br>
<p>PATH: /usr/local/gravsim/bin
<br>
PATH: /usr/local/bin
<br>
PATH: /usr/local/X11R6/bin
<br>
PATH: /sw/share/Geomview/bin
<br>
PATH: /sw/bin
<br>
PATH: /sw/sbin
<br>
PATH: /sw/share/Geomview/bin
<br>
PATH: /usr/bin
<br>
PATH: /bin
<br>
PATH: /usr/sbin
<br>
PATH: /sbin
<br>
PATH: /usr/X11R6/bin
<br>
PATH: /Users/motte/geant4.8/bin/Darwin-g++
<br>
PATH: /Users/admin/geant4.8/bin/Darwin-g++
<br>
<p><p>## ----------- ##
<br>
## Core tests. ##
<br>
## ----------- ##
<br>
<p>configure:1813: checking for a BSD-compatible install
<br>
configure:1868: result: /usr/bin/install -c
<br>
configure:1879: checking whether build environment is sane
<br>
configure:1922: result: yes
<br>
configure:1987: checking for gawk
<br>
configure:2003: found /sw/bin/gawk
<br>
configure:2013: result: gawk
<br>
configure:2023: checking whether make sets $(MAKE)
<br>
configure:2043: result: yes
<br>
configure:2332: checking Open MPI version
<br>
configure:2334: result: 1.1
<br>
configure:2336: checking Open MPI Subversion repository version
<br>
configure:2338: result: r10477
<br>
configure:2434: checking Open Run-Time Environment version
<br>
configure:2436: result: 1.1
<br>
configure:2438: checking Open Run-Time Environment Subversion repository version
<br>
configure:2440: result: r10477
<br>
configure:2536: checking Open Portable Access Layer version
<br>
configure:2538: result: 1.1
<br>
configure:2540: checking Open Portable Access Layer Subversion repository version
<br>
configure:2542: result: r10477
<br>
configure:2610: builddir: /usr/src/openmpi/openmpi-1.1
<br>
configure:2612: srcdir: /usr/src/openmpi/openmpi-1.1
<br>
configure:2634: checking build system type
<br>
configure:2652: result: powerpc-apple-darwin8.7.0
<br>
configure:2680: checking host system type
<br>
configure:2694: result: powerpc-apple-darwin8.7.0
<br>
configure:2848: checking Whether to run code coverage
<br>
configure:2875: result: no
<br>
configure:2885: checking whether to debug memory usage
<br>
configure:2897: result: no
<br>
configure:2917: checking whether to profile memory usage
<br>
configure:2929: result: no
<br>
configure:2949: checking if want developer-level compiler pickyness
<br>
configure:2961: result: no
<br>
configure:2976: checking if want developer-level debugging code
<br>
configure:2988: result: no
<br>
configure:3013: checking if want Fortran 77 bindings
<br>
configure:3021: result: yes
<br>
configure:3035: checking if want Fortran 90 bindings
<br>
configure:3043: result: yes
<br>
configure:3052: checking desired Fortran 90 bindings &quot;size&quot;
<br>
configure:3134: result: small
<br>
configure:3141: checking whether to enable PMPI
<br>
configure:3149: result: yes
<br>
configure:3166: checking if want C++ bindings
<br>
configure:3174: result: yes
<br>
configure:3188: checking if want to enable weak symbol support
<br>
configure:3196: result: yes
<br>
configure:3209: checking if want run-time MPI parameter checking
<br>
configure:3230: result: runtime
<br>
configure:3253: checking if want to install OMPI header files
<br>
configure:3266: result: no
<br>
configure:3284: checking if want pretty-print stacktrace
<br>
configure:3296: result: yes
<br>
configure:3309: checking if want deprecated executable names
<br>
configure:3321: result: no
<br>
configure:3341: checking if peruse support is required
<br>
configure:3353: result: no
<br>
configure:3378: checking max supported array dimension in F90 MPI bindings
<br>
configure:3393: result: 4
<br>
configure:3398: checking if pty support should be enabled
<br>
configure:3410: result: yes
<br>
configure:3423: checking if user wants dlopen support
<br>
configure:3438: result: yes
<br>
configure:3446: checking if heterogeneous support should be enabled
<br>
configure:3458: result: yes
<br>
configure:3472: checking if want trace file debugging
<br>
configure:3484: result: no
<br>
configure:3733: checking for style of include used by make
<br>
configure:3761: result: GNU
<br>
configure:3837: checking for gcc
<br>
configure:3853: found /usr/bin/gcc
<br>
configure:3863: result: gcc
<br>
configure:4107: checking for C compiler version
<br>
configure:4110: gcc --version &lt;/dev/null &gt;&amp;5
<br>
powerpc-apple-darwin8-gcc-4.0.1 (GCC) 4.0.1 (Apple Computer, Inc. build 5341)
<br>
Copyright (C) 2005 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.  There is NO
<br>
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
<br>
<p>configure:4113: $? = 0
<br>
configure:4115: gcc -v &lt;/dev/null &gt;&amp;5
<br>
Using built-in specs.
<br>
Target: powerpc-apple-darwin8
<br>
Configured with: /private/var/tmp/gcc/gcc-5341.obj~1/src/configure --disable-checking -enable-werror --prefix=/usr --mandir=/share/man --enable-languages=c,objc,c++,obj-c++ --program-transform-name=/^[cg][^.-]*$/s/$/-4.0/ --with-gxx-include-dir=/include/c++/4.0.0 --with-slibdir=/usr/lib --build=powerpc-apple-darwin8 --host=powerpc-apple-darwin8 --target=powerpc-apple-darwin8
<br>
Thread model: posix
<br>
gcc version 4.0.1 (Apple Computer, Inc. build 5341)
<br>
configure:4118: $? = 0
<br>
configure:4120: gcc -V &lt;/dev/null &gt;&amp;5
<br>
gcc: argument to `-V' is missing
<br>
configure:4123: $? = 1
<br>
configure:4146: checking for C compiler default output file name
<br>
configure:4149: gcc -DNDEBUG    conftest.c  &gt;&amp;5
<br>
configure:4152: $? = 0
<br>
configure:4198: result: a.out
<br>
configure:4203: checking whether the C compiler works
<br>
configure:4209: ./a.out
<br>
configure:4212: $? = 0
<br>
configure:4229: result: yes
<br>
configure:4236: checking whether we are cross compiling
<br>
configure:4238: result: no
<br>
configure:4241: checking for suffix of executables
<br>
configure:4243: gcc -o conftest -DNDEBUG    conftest.c  &gt;&amp;5
<br>
configure:4246: $? = 0
<br>
configure:4271: result: 
<br>
configure:4277: checking for suffix of object files
<br>
configure:4298: gcc -c -DNDEBUG   conftest.c &gt;&amp;5
<br>
configure:4301: $? = 0
<br>
configure:4323: result: o
<br>
configure:4327: checking whether we are using the GNU C compiler
<br>
configure:4351: gcc -c -DNDEBUG   conftest.c &gt;&amp;5
<br>
configure:4357: $? = 0
<br>
configure:4361: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:4364: $? = 0
<br>
configure:4367: test -s conftest.o
<br>
configure:4370: $? = 0
<br>
configure:4383: result: yes
<br>
configure:4389: checking whether gcc accepts -g
<br>
configure:4410: gcc -c -g  conftest.c &gt;&amp;5
<br>
configure:4416: $? = 0
<br>
configure:4420: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:4423: $? = 0
<br>
configure:4426: test -s conftest.o
<br>
configure:4429: $? = 0
<br>
configure:4440: result: yes
<br>
configure:4457: checking for gcc option to accept ANSI C
<br>
configure:4527: gcc  -c -DNDEBUG   conftest.c &gt;&amp;5
<br>
configure:4533: $? = 0
<br>
configure:4537: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:4540: $? = 0
<br>
configure:4543: test -s conftest.o
<br>
configure:4546: $? = 0
<br>
configure:4564: result: none needed
<br>
configure:4582: gcc -c -DNDEBUG   conftest.c &gt;&amp;5
<br>
conftest.c:2: error: parse error before 'me'
<br>
configure:4588: $? = 1
<br>
configure: failed program was:
<br>
| #ifndef __cplusplus
<br>
|   choke me
<br>
| #endif
<br>
configure:4723: checking dependency style of gcc
<br>
configure:4813: result: gcc3
<br>
configure:4841: checking whether gcc and cc understand -c and -o together
<br>
configure:4871: gcc -c conftest.c -o conftest.o &gt;&amp;5
<br>
configure:4874: $? = 0
<br>
configure:4876: gcc -c conftest.c -o conftest.o &gt;&amp;5
<br>
configure:4879: $? = 0
<br>
configure:4886: cc -c conftest.c &gt;&amp;5
<br>
configure:4889: $? = 0
<br>
configure:4892: cc -c conftest.c -o conftest.o &gt;&amp;5
<br>
configure:4895: $? = 0
<br>
configure:4897: cc -c conftest.c -o conftest.o &gt;&amp;5
<br>
configure:4900: $? = 0
<br>
configure:4918: result: yes
<br>
configure:4956: checking for the C compiler vendor
<br>
configure:4984: gcc -c -DNDEBUG   conftest.c &gt;&amp;5
<br>
conftest.c:2:2: error: #error &quot;condition defined(__INTEL_COMPILER) || defined(__ICC) not met&quot;
<br>
conftest.c:3: error: parse error before 'me'
<br>
configure:4990: $? = 1
<br>
configure: failed program was:
<br>
| #if !( defined(__INTEL_COMPILER) || defined(__ICC) )
<br>
| #error &quot;condition defined(__INTEL_COMPILER) || defined(__ICC) not met&quot;
<br>
| choke me
<br>
| #endif
<br>
configure:5025: gcc -c -DNDEBUG   conftest.c &gt;&amp;5
<br>
configure:5031: $? = 0
<br>
configure:5035: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:5038: $? = 0
<br>
configure:5041: test -s conftest.o
<br>
configure:5044: $? = 0
<br>
configure:6213: result: gnu
<br>
configure:6472: checking if gcc supports -finline-functions
<br>
configure:6493: gcc -c -DNDEBUG  -finline-functions  conftest.c &gt;&amp;5
<br>
configure:6499: $? = 0
<br>
configure:6503: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:6506: $? = 0
<br>
configure:6509: test -s conftest.o
<br>
configure:6512: $? = 0
<br>
configure:6523: result: yes
<br>
configure:6532: checking if gcc supports -fno-strict-aliasing
<br>
configure:6553: gcc -c -DNDEBUG  -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:6559: $? = 0
<br>
configure:6563: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:6566: $? = 0
<br>
configure:6569: test -s conftest.o
<br>
configure:6572: $? = 0
<br>
configure:6583: result: yes
<br>
configure:6659: WARNING:  -fno-strict-aliasing has been added to CFLAGS
<br>
configure:6890: checking for C optimization flags
<br>
configure:6954: result: -O3 -DNDEBUG -fno-strict-aliasing
<br>
configure:6981: checking how to run the C preprocessor
<br>
configure:7016: gcc -E  conftest.c
<br>
configure:7022: $? = 0
<br>
configure:7054: gcc -E  conftest.c
<br>
conftest.c:36:28: error: ac_nonexistent.h: No such file or directory
<br>
configure:7060: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;ac_nonexistent.h&gt;
<br>
configure:7099: result: gcc -E
<br>
configure:7123: gcc -E  conftest.c
<br>
configure:7129: $? = 0
<br>
configure:7161: gcc -E  conftest.c
<br>
conftest.c:36:28: error: ac_nonexistent.h: No such file or directory
<br>
configure:7167: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;ac_nonexistent.h&gt;
<br>
configure:7211: checking for egrep
<br>
configure:7221: result: grep -E
<br>
configure:7226: checking for ANSI C header files
<br>
configure:7251: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:7257: $? = 0
<br>
configure:7261: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:7264: $? = 0
<br>
configure:7267: test -s conftest.o
<br>
configure:7270: $? = 0
<br>
configure:7356: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
conftest.c: In function 'main':
<br>
conftest.c:53: warning: incompatible implicit declaration of built-in function 'exit'
<br>
configure:7359: $? = 0
<br>
configure:7361: ./conftest
<br>
configure:7364: $? = 0
<br>
configure:7379: result: yes
<br>
configure:7403: checking for sys/types.h
<br>
configure:7419: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:7425: $? = 0
<br>
configure:7429: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:7432: $? = 0
<br>
configure:7435: test -s conftest.o
<br>
configure:7438: $? = 0
<br>
configure:7449: result: yes
<br>
configure:7403: checking for sys/stat.h
<br>
configure:7419: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:7425: $? = 0
<br>
configure:7429: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:7432: $? = 0
<br>
configure:7435: test -s conftest.o
<br>
configure:7438: $? = 0
<br>
configure:7449: result: yes
<br>
configure:7403: checking for stdlib.h
<br>
configure:7419: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:7425: $? = 0
<br>
configure:7429: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:7432: $? = 0
<br>
configure:7435: test -s conftest.o
<br>
configure:7438: $? = 0
<br>
configure:7449: result: yes
<br>
configure:7403: checking for string.h
<br>
configure:7419: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:7425: $? = 0
<br>
configure:7429: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:7432: $? = 0
<br>
configure:7435: test -s conftest.o
<br>
configure:7438: $? = 0
<br>
configure:7449: result: yes
<br>
configure:7403: checking for memory.h
<br>
configure:7419: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:7425: $? = 0
<br>
configure:7429: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:7432: $? = 0
<br>
configure:7435: test -s conftest.o
<br>
configure:7438: $? = 0
<br>
configure:7449: result: yes
<br>
configure:7403: checking for strings.h
<br>
configure:7419: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:7425: $? = 0
<br>
configure:7429: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:7432: $? = 0
<br>
configure:7435: test -s conftest.o
<br>
configure:7438: $? = 0
<br>
configure:7449: result: yes
<br>
configure:7403: checking for inttypes.h
<br>
configure:7419: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:7425: $? = 0
<br>
configure:7429: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:7432: $? = 0
<br>
configure:7435: test -s conftest.o
<br>
configure:7438: $? = 0
<br>
configure:7449: result: yes
<br>
configure:7403: checking for stdint.h
<br>
configure:7419: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:7425: $? = 0
<br>
configure:7429: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:7432: $? = 0
<br>
configure:7435: test -s conftest.o
<br>
configure:7438: $? = 0
<br>
configure:7449: result: yes
<br>
configure:7403: checking for unistd.h
<br>
configure:7419: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:7425: $? = 0
<br>
configure:7429: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:7432: $? = 0
<br>
configure:7435: test -s conftest.o
<br>
configure:7438: $? = 0
<br>
configure:7449: result: yes
<br>
configure:7461: checking for long long
<br>
configure:7485: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:7491: $? = 0
<br>
configure:7495: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:7498: $? = 0
<br>
configure:7501: test -s conftest.o
<br>
configure:7504: $? = 0
<br>
configure:7515: result: yes
<br>
configure:7526: checking for long double
<br>
configure:7550: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:7556: $? = 0
<br>
configure:7560: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:7563: $? = 0
<br>
configure:7566: test -s conftest.o
<br>
configure:7569: $? = 0
<br>
configure:7580: result: yes
<br>
configure:7591: checking for int8_t
<br>
configure:7615: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:7621: $? = 0
<br>
configure:7625: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:7628: $? = 0
<br>
configure:7631: test -s conftest.o
<br>
configure:7634: $? = 0
<br>
configure:7645: result: yes
<br>
configure:7656: checking for uint8_t
<br>
configure:7680: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:7686: $? = 0
<br>
configure:7690: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:7693: $? = 0
<br>
configure:7696: test -s conftest.o
<br>
configure:7699: $? = 0
<br>
configure:7710: result: yes
<br>
configure:7721: checking for int16_t
<br>
configure:7745: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:7751: $? = 0
<br>
configure:7755: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:7758: $? = 0
<br>
configure:7761: test -s conftest.o
<br>
configure:7764: $? = 0
<br>
configure:7775: result: yes
<br>
configure:7786: checking for uint16_t
<br>
configure:7810: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:7816: $? = 0
<br>
configure:7820: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:7823: $? = 0
<br>
configure:7826: test -s conftest.o
<br>
configure:7829: $? = 0
<br>
configure:7840: result: yes
<br>
configure:7851: checking for int32_t
<br>
configure:7875: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:7881: $? = 0
<br>
configure:7885: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:7888: $? = 0
<br>
configure:7891: test -s conftest.o
<br>
configure:7894: $? = 0
<br>
configure:7905: result: yes
<br>
configure:7916: checking for uint32_t
<br>
configure:7940: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:7946: $? = 0
<br>
configure:7950: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:7953: $? = 0
<br>
configure:7956: test -s conftest.o
<br>
configure:7959: $? = 0
<br>
configure:7970: result: yes
<br>
configure:7981: checking for int64_t
<br>
configure:8005: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:8011: $? = 0
<br>
configure:8015: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:8018: $? = 0
<br>
configure:8021: test -s conftest.o
<br>
configure:8024: $? = 0
<br>
configure:8035: result: yes
<br>
configure:8046: checking for uint64_t
<br>
configure:8070: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:8076: $? = 0
<br>
configure:8080: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:8083: $? = 0
<br>
configure:8086: test -s conftest.o
<br>
configure:8089: $? = 0
<br>
configure:8100: result: yes
<br>
configure:8111: checking for intptr_t
<br>
configure:8135: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:8141: $? = 0
<br>
configure:8145: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:8148: $? = 0
<br>
configure:8151: test -s conftest.o
<br>
configure:8154: $? = 0
<br>
configure:8165: result: yes
<br>
configure:8176: checking for uintptr_t
<br>
configure:8200: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:8206: $? = 0
<br>
configure:8210: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:8213: $? = 0
<br>
configure:8216: test -s conftest.o
<br>
configure:8219: $? = 0
<br>
configure:8230: result: yes
<br>
configure:8241: checking for mode_t
<br>
configure:8265: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:8271: $? = 0
<br>
configure:8275: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:8278: $? = 0
<br>
configure:8281: test -s conftest.o
<br>
configure:8284: $? = 0
<br>
configure:8295: result: yes
<br>
configure:8312: checking for char
<br>
configure:8336: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:8342: $? = 0
<br>
configure:8346: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:8349: $? = 0
<br>
configure:8352: test -s conftest.o
<br>
configure:8355: $? = 0
<br>
configure:8366: result: yes
<br>
configure:8369: checking size of char
<br>
configure:8688: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:8691: $? = 0
<br>
configure:8693: ./conftest
<br>
configure:8696: $? = 0
<br>
configure:8719: result: 1
<br>
configure:8726: checking for short
<br>
configure:8750: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:8756: $? = 0
<br>
configure:8760: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:8763: $? = 0
<br>
configure:8766: test -s conftest.o
<br>
configure:8769: $? = 0
<br>
configure:8780: result: yes
<br>
configure:8783: checking size of short
<br>
configure:9102: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:9105: $? = 0
<br>
configure:9107: ./conftest
<br>
configure:9110: $? = 0
<br>
configure:9133: result: 2
<br>
configure:9140: checking for int
<br>
configure:9164: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:9170: $? = 0
<br>
configure:9174: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:9177: $? = 0
<br>
configure:9180: test -s conftest.o
<br>
configure:9183: $? = 0
<br>
configure:9194: result: yes
<br>
configure:9197: checking size of int
<br>
configure:9516: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:9519: $? = 0
<br>
configure:9521: ./conftest
<br>
configure:9524: $? = 0
<br>
configure:9547: result: 4
<br>
configure:9554: checking for long
<br>
configure:9578: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:9584: $? = 0
<br>
configure:9588: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:9591: $? = 0
<br>
configure:9594: test -s conftest.o
<br>
configure:9597: $? = 0
<br>
configure:9608: result: yes
<br>
configure:9611: checking size of long
<br>
configure:9930: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:9933: $? = 0
<br>
configure:9935: ./conftest
<br>
configure:9938: $? = 0
<br>
configure:9961: result: 4
<br>
configure:9969: checking for long long
<br>
configure:10023: result: yes
<br>
configure:10026: checking size of long long
<br>
configure:10345: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:10348: $? = 0
<br>
configure:10350: ./conftest
<br>
configure:10353: $? = 0
<br>
configure:10376: result: 8
<br>
configure:10385: checking for long double
<br>
configure:10439: result: yes
<br>
configure:10442: checking size of long double
<br>
configure:10761: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:10764: $? = 0
<br>
configure:10766: ./conftest
<br>
configure:10769: $? = 0
<br>
configure:10792: result: 16
<br>
configure:10800: checking for float
<br>
configure:10824: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:10830: $? = 0
<br>
configure:10834: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:10837: $? = 0
<br>
configure:10840: test -s conftest.o
<br>
configure:10843: $? = 0
<br>
configure:10854: result: yes
<br>
configure:10857: checking size of float
<br>
configure:11176: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:11179: $? = 0
<br>
configure:11181: ./conftest
<br>
configure:11184: $? = 0
<br>
configure:11207: result: 4
<br>
configure:11214: checking for double
<br>
configure:11238: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:11244: $? = 0
<br>
configure:11248: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:11251: $? = 0
<br>
configure:11254: test -s conftest.o
<br>
configure:11257: $? = 0
<br>
configure:11268: result: yes
<br>
configure:11271: checking size of double
<br>
configure:11590: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:11593: $? = 0
<br>
configure:11595: ./conftest
<br>
configure:11598: $? = 0
<br>
configure:11621: result: 8
<br>
configure:11628: checking for void *
<br>
configure:11652: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:11658: $? = 0
<br>
configure:11662: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:11665: $? = 0
<br>
configure:11668: test -s conftest.o
<br>
configure:11671: $? = 0
<br>
configure:11682: result: yes
<br>
configure:11685: checking size of void *
<br>
configure:12004: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:12007: $? = 0
<br>
configure:12009: ./conftest
<br>
configure:12012: $? = 0
<br>
configure:12035: result: 4
<br>
configure:12042: checking for size_t
<br>
configure:12066: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:12072: $? = 0
<br>
configure:12076: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:12079: $? = 0
<br>
configure:12082: test -s conftest.o
<br>
configure:12085: $? = 0
<br>
configure:12096: result: yes
<br>
configure:12099: checking size of size_t
<br>
configure:12418: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:12421: $? = 0
<br>
configure:12423: ./conftest
<br>
configure:12426: $? = 0
<br>
configure:12449: result: 4
<br>
configure:12462: checking alignment of char
<br>
configure:12865: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:12868: $? = 0
<br>
configure:12870: ./conftest
<br>
configure:12873: $? = 0
<br>
configure:12893: result: 1
<br>
configure:12905: checking alignment of short
<br>
configure:13308: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:13311: $? = 0
<br>
configure:13313: ./conftest
<br>
configure:13316: $? = 0
<br>
configure:13336: result: 2
<br>
configure:13348: checking alignment of wchar_t
<br>
configure:13751: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:13754: $? = 0
<br>
configure:13756: ./conftest
<br>
configure:13759: $? = 0
<br>
configure:13779: result: 4
<br>
configure:13791: checking alignment of int
<br>
configure:14194: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:14197: $? = 0
<br>
configure:14199: ./conftest
<br>
configure:14202: $? = 0
<br>
configure:14222: result: 4
<br>
configure:14234: checking alignment of long
<br>
configure:14637: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:14640: $? = 0
<br>
configure:14642: ./conftest
<br>
configure:14645: $? = 0
<br>
configure:14665: result: 4
<br>
configure:14678: checking alignment of long long
<br>
configure:15081: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:15084: $? = 0
<br>
configure:15086: ./conftest
<br>
configure:15089: $? = 0
<br>
configure:15109: result: 4
<br>
configure:15122: checking alignment of float
<br>
configure:15525: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:15528: $? = 0
<br>
configure:15530: ./conftest
<br>
configure:15533: $? = 0
<br>
configure:15553: result: 4
<br>
configure:15565: checking alignment of double
<br>
configure:15968: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:15971: $? = 0
<br>
configure:15973: ./conftest
<br>
configure:15976: $? = 0
<br>
configure:15996: result: 4
<br>
configure:16009: checking alignment of long double
<br>
configure:16412: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:16415: $? = 0
<br>
configure:16417: ./conftest
<br>
configure:16420: $? = 0
<br>
configure:16440: result: 16
<br>
configure:16453: checking alignment of void *
<br>
configure:16856: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:16859: $? = 0
<br>
configure:16861: ./conftest
<br>
configure:16864: $? = 0
<br>
configure:16884: result: 4
<br>
configure:16901: checking for C bool type
<br>
configure:16920: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
conftest.c: In function 'main':
<br>
conftest.c:117: error: 'bool' undeclared (first use in this function)
<br>
conftest.c:117: error: (Each undeclared identifier is reported only once
<br>
conftest.c:117: error: for each function it appears in.)
<br>
conftest.c:117: error: parse error before 'bar'
<br>
conftest.c:117: error: 'bar' undeclared (first use in this function)
<br>
conftest.c:117: error: 'foo' undeclared (first use in this function)
<br>
configure:16926: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| /* end confdefs.h.  */
<br>
| 
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| int
<br>
| main ()
<br>
| {
<br>
| bool bar, foo = true; bar = foo;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:16954: result: no
<br>
configure:16982: checking for inline
<br>
configure:17003: gcc -c -O3 -DNDEBUG  -Werror -ansi  conftest.c &gt;&amp;5
<br>
conftest.c:82: error: syntax error before 'foo_t'
<br>
conftest.c:83: error: syntax error before 'foo_t'
<br>
configure:17009: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| /* end confdefs.h.  */
<br>
| #ifndef __cplusplus
<br>
| typedef int foo_t;
<br>
| static inline foo_t static_foo () {return 0; }
<br>
| inline foo_t foo () {return 0; }
<br>
| #endif
<br>
| 
<br>
configure:17003: gcc -c -O3 -DNDEBUG  -Werror -ansi  conftest.c &gt;&amp;5
<br>
configure:17009: $? = 0
<br>
configure:17013: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:17016: $? = 0
<br>
configure:17019: test -s conftest.o
<br>
configure:17022: $? = 0
<br>
configure:17034: result: __inline__
<br>
configure:17053: checking for C/C++ restrict keyword
<br>
configure:17071: gcc -c -O3 -DNDEBUG  -Werror -ansi  conftest.c &gt;&amp;5
<br>
conftest.c:83: error: parse error before 'x'
<br>
cc1: warnings being treated as errors
<br>
conftest.c:83: warning: data definition has no type or storage class
<br>
configure:17077: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| /* end confdefs.h.  */
<br>
| float * restrict x;
<br>
configure:17071: gcc -c -O3 -DNDEBUG  -Werror -ansi  conftest.c &gt;&amp;5
<br>
configure:17077: $? = 0
<br>
configure:17081: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:17084: $? = 0
<br>
configure:17087: test -s conftest.o
<br>
configure:17090: $? = 0
<br>
configure:17102: result: __restrict
<br>
configure:17118: checking for weak symbol support
<br>
configure:17148: gcc -O3 -DNDEBUG  -Werror -ansi  -c conftest_weak.c
<br>
cc1: warnings being treated as errors
<br>
conftest_weak.c:4: warning: alias definitions not supported in Mach-O; ignored
<br>
configure:17155: $? = 1
<br>
configure:17196: result: no
<br>
configure:17425: checking for g++
<br>
configure:17441: found /usr/bin/g++
<br>
configure:17451: result: g++
<br>
configure:17467: checking for C++ compiler version
<br>
configure:17470: g++ --version &lt;/dev/null &gt;&amp;5
<br>
powerpc-apple-darwin8-g++-4.0.1 (GCC) 4.0.1 (Apple Computer, Inc. build 5341)
<br>
Copyright (C) 2005 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.  There is NO
<br>
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
<br>
<p>configure:17473: $? = 0
<br>
configure:17475: g++ -v &lt;/dev/null &gt;&amp;5
<br>
Using built-in specs.
<br>
Target: powerpc-apple-darwin8
<br>
Configured with: /private/var/tmp/gcc/gcc-5341.obj~1/src/configure --disable-checking -enable-werror --prefix=/usr --mandir=/share/man --enable-languages=c,objc,c++,obj-c++ --program-transform-name=/^[cg][^.-]*$/s/$/-4.0/ --with-gxx-include-dir=/include/c++/4.0.0 --with-slibdir=/usr/lib --build=powerpc-apple-darwin8 --host=powerpc-apple-darwin8 --target=powerpc-apple-darwin8
<br>
Thread model: posix
<br>
gcc version 4.0.1 (Apple Computer, Inc. build 5341)
<br>
configure:17478: $? = 0
<br>
configure:17480: g++ -V &lt;/dev/null &gt;&amp;5
<br>
g++: argument to `-V' is missing
<br>
configure:17483: $? = 1
<br>
configure:17486: checking whether we are using the GNU C++ compiler
<br>
configure:17510: g++ -c -DNDEBUG   conftest.cc &gt;&amp;5
<br>
configure:17516: $? = 0
<br>
configure:17520: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:17523: $? = 0
<br>
configure:17526: test -s conftest.o
<br>
configure:17529: $? = 0
<br>
configure:17542: result: yes
<br>
configure:17548: checking whether g++ accepts -g
<br>
configure:17569: g++ -c -g  conftest.cc &gt;&amp;5
<br>
configure:17575: $? = 0
<br>
configure:17579: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:17582: $? = 0
<br>
configure:17585: test -s conftest.o
<br>
configure:17588: $? = 0
<br>
configure:17599: result: yes
<br>
configure:17641: g++ -c -DNDEBUG   conftest.cc &gt;&amp;5
<br>
configure:17647: $? = 0
<br>
configure:17651: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:17654: $? = 0
<br>
configure:17657: test -s conftest.o
<br>
configure:17660: $? = 0
<br>
configure:17686: g++ -c -DNDEBUG   conftest.cc &gt;&amp;5
<br>
conftest.cc: In function 'int main()':
<br>
conftest.cc:90: error: 'exit' was not declared in this scope
<br>
configure:17692: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| /* end confdefs.h.  */
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| exit (42);
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:17641: g++ -c -DNDEBUG   conftest.cc &gt;&amp;5
<br>
/usr/include/stdlib.h:158: error: declaration of 'void std::exit(int)' throws different exceptions
<br>
conftest.cc:86: error: than previous declaration 'void std::exit(int) throw ()'
<br>
configure:17647: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| /* end confdefs.h.  */
<br>
| extern &quot;C&quot; void std::exit (int) throw (); using std::exit;
<br>
| #include &lt;stdlib.h&gt;
<br>
| int
<br>
| main ()
<br>
| {
<br>
| exit (42);
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:17641: g++ -c -DNDEBUG   conftest.cc &gt;&amp;5
<br>
configure:17647: $? = 0
<br>
configure:17651: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:17654: $? = 0
<br>
configure:17657: test -s conftest.o
<br>
configure:17660: $? = 0
<br>
configure:17686: g++ -c -DNDEBUG   conftest.cc &gt;&amp;5
<br>
configure:17692: $? = 0
<br>
configure:17696: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:17699: $? = 0
<br>
configure:17702: test -s conftest.o
<br>
configure:17705: $? = 0
<br>
configure:17730: checking dependency style of g++
<br>
configure:17820: result: gcc3
<br>
configure:17842: checking how to run the C++ preprocessor
<br>
configure:17873: g++ -E  conftest.cc
<br>
configure:17879: $? = 0
<br>
configure:17911: g++ -E  conftest.cc
<br>
conftest.cc:89:28: error: ac_nonexistent.h: No such file or directory
<br>
configure:17917: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;ac_nonexistent.h&gt;
<br>
configure:17956: result: g++ -E
<br>
configure:17980: g++ -E  conftest.cc
<br>
configure:17986: $? = 0
<br>
configure:18018: g++ -E  conftest.cc
<br>
conftest.cc:89:28: error: ac_nonexistent.h: No such file or directory
<br>
configure:18024: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;ac_nonexistent.h&gt;
<br>
configure:18082: checking if C++ compiler works
<br>
configure:18112: g++ -o conftest -DNDEBUG    conftest.cc  &gt;&amp;5
<br>
configure:18115: $? = 0
<br>
configure:18117: ./conftest
<br>
configure:18120: $? = 0
<br>
configure:18140: result: yes
<br>
configure:18170: checking for the C++ compiler vendor
<br>
configure:18198: g++ -c -DNDEBUG   conftest.cc &gt;&amp;5
<br>
conftest.cc:2:2: error: #error &quot;condition defined(__INTEL_COMPILER) || defined(__ICC) not met&quot;
<br>
conftest.cc:3: error: 'choke' does not name a type
<br>
configure:18204: $? = 1
<br>
configure: failed program was:
<br>
| #if !( defined(__INTEL_COMPILER) || defined(__ICC) )
<br>
| #error &quot;condition defined(__INTEL_COMPILER) || defined(__ICC) not met&quot;
<br>
| choke me
<br>
| #endif
<br>
configure:18239: g++ -c -DNDEBUG   conftest.cc &gt;&amp;5
<br>
configure:18245: $? = 0
<br>
configure:18249: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:18252: $? = 0
<br>
configure:18255: test -s conftest.o
<br>
configure:18258: $? = 0
<br>
configure:19427: result: gnu
<br>
configure:19687: checking if g++ supports -finline-functions
<br>
configure:19708: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:19714: $? = 0
<br>
configure:19718: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:19721: $? = 0
<br>
configure:19724: test -s conftest.o
<br>
configure:19727: $? = 0
<br>
configure:19738: result: yes
<br>
configure:19814: WARNING:  -finline-functions has been added to CXXFLAGS
<br>
configure:19829: checking if want C++ exception handling
<br>
configure:19831: result: no
<br>
configure:20127: checking for C++ template_repository_directory
<br>
configure:20194: g++ -DNDEBUG -finline-functions -c conftest1.C
<br>
configure:20204: g++ -DNDEBUG -finline-functions -c conftest2.C
<br>
configure:20256: result: not used
<br>
configure:20278: checking for C++ compiler template parameters
<br>
configure:20286: result: none needed
<br>
configure:20380: checking for C++ optimization flags
<br>
configure:20382: result: -O3 -DNDEBUG -finline-functions
<br>
configure:20395: checking for bool
<br>
configure:20419: g++ -c -O3 -DNDEBUG -finline-functions  conftest.cc &gt;&amp;5
<br>
configure:20425: $? = 0
<br>
configure:20429: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:20432: $? = 0
<br>
configure:20435: test -s conftest.o
<br>
configure:20438: $? = 0
<br>
configure:20449: result: yes
<br>
configure:20452: checking size of bool
<br>
configure:20771: g++ -o conftest -O3 -DNDEBUG -finline-functions   conftest.cc  &gt;&amp;5
<br>
configure:20774: $? = 0
<br>
configure:20776: ./conftest
<br>
configure:20779: $? = 0
<br>
configure:20802: result: 4
<br>
configure:20813: checking alignment of bool
<br>
configure:21216: g++ -o conftest -O3 -DNDEBUG -finline-functions   conftest.cc  &gt;&amp;5
<br>
configure:21219: $? = 0
<br>
configure:21221: ./conftest
<br>
configure:21224: $? = 0
<br>
configure:21244: result: 4
<br>
configure:21294: checking for BSD-compatible nm
<br>
configure:21343: result: /usr/bin/nm -p
<br>
configure:21347: checking for fgrep
<br>
configure:21357: result: grep -F
<br>
configure:21368: checking whether to enable smp locks
<br>
configure:21376: result: yes
<br>
configure:21394: checking directive for setting text section
<br>
configure:21411: result: .text
<br>
configure:21422: checking directive for exporting symbols
<br>
configure:21434: result: .globl
<br>
configure:21447: checking for objdump
<br>
configure:21476: result: no
<br>
configure:21480: checking if .note.GNU-stack is needed
<br>
configure:21534: result: no
<br>
configure:21543: checking suffix for labels
<br>
configure:21551: result: :
<br>
configure:21562: checking prefix for global symbol labels
<br>
configure: trying _
<br>
configure:21599: gcc -O3 -DNDEBUG -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
<br>
configure:21602: $? = 0
<br>
configure:21607: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. conftest_c.c -c &gt; conftest.cmpl 2&gt;&amp;1
<br>
configure:21610: $? = 0
<br>
configure:21615: gcc -O3 -DNDEBUG -fno-strict-aliasing conftest_c.o conftest.o -o conftest &gt; conftest.link 2&gt;&amp;1
<br>
configure:21618: $? = 0
<br>
configure:21656: result: _
<br>
configure:21677: checking prefix for lsym labels
<br>
configure: trying L
<br>
configure:21697: gcc -O3 -DNDEBUG -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
<br>
configure:21700: $? = 0
<br>
configure:21742: result: L
<br>
configure:21753: checking prefix for function in .type
<br>
configure: trying @
<br>
configure:21781: gcc -O3 -DNDEBUG -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
<br>
configure:21784: $? = 1
<br>
conftest.s:1:Unknown pseudo-op: .type
<br>
conftest.s:1:Rest of line ignored. 1st junk character valued 109 (m).
<br>
conftest.s:1:Invalid mnemonic 'function'
<br>
configure: failed program was:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.type mysym, @function
<br>
mysym:
<br>
configure: trying #
<br>
configure:21781: gcc -O3 -DNDEBUG -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
<br>
configure:21784: $? = 1
<br>
conftest.s:1:Unknown pseudo-op: .type
<br>
conftest.s:1:Rest of line ignored. 1st junk character valued 109 (m).
<br>
configure: failed program was:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.type mysym, #function
<br>
mysym:
<br>
configure: trying %
<br>
configure:21781: gcc -O3 -DNDEBUG -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
<br>
configure:21784: $? = 1
<br>
conftest.s:1:Unknown pseudo-op: .type
<br>
conftest.s:1:Rest of line ignored. 1st junk character valued 109 (m).
<br>
configure: failed program was:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.type mysym, %function
<br>
mysym:
<br>
configure:21811: result: 
<br>
configure:21823: checking if .size is needed
<br>
configure:21837: gcc -O3 -DNDEBUG -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
<br>
configure:21840: $? = 1
<br>
conftest.s:1:Unknown pseudo-op: .size
<br>
conftest.s:1:Rest of line ignored. 1st junk character valued 109 (m).
<br>
configure: failed program was:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.size mysym, 1
<br>
configure:21857: result: no
<br>
configure:21878: checking if .align directive takes logarithmic value
<br>
configure:21897: gcc -O3 -DNDEBUG -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
<br>
configure:21900: $? = 0
<br>
configure: .align test address offset is 10
<br>
configure:21923: result: yes
<br>
configure:21978: checking if PowerPC registers have r prefix
<br>
configure:21989: gcc -O3 -DNDEBUG -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
<br>
configure:21992: $? = 1
<br>
conftest.s:2:Parameter syntax error (parameter 1)
<br>
configure: failed program was:
<br>
.text
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;addi 1,1,0
<br>
configure:22011: gcc -O3 -DNDEBUG -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
<br>
configure:22014: $? = 0
<br>
configure:22036: result: yes
<br>
configure:22063: checking for 64-bit PowerPC assembly support
<br>
configure:22082: gcc -O3 -DNDEBUG -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
<br>
configure:22085: $? = 1
<br>
conftest.s:2:ldarx instruction is only for 64-bit implementations (not allowed without -force_cpusubtype_ALL option)
<br>
configure: failed program was:
<br>
.text
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ldarx r1,r1,r1
<br>
configure:22111: result: no
<br>
configure:22241: checking if gcc supports GCC inline assembly
<br>
configure:22279: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:22282: $? = 0
<br>
configure:22284: ./conftest
<br>
configure:22287: $? = 0
<br>
configure:22360: result: yes
<br>
configure:22379: checking if gcc supports DEC inline assembly
<br>
configure:22401: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
conftest.c:141:19: error: c_asm.h: No such file or directory
<br>
configure:22407: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| /* end confdefs.h.  */
<br>
| 
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;c_asm.h&gt;
<br>
| int
<br>
| main ()
<br>
| {
<br>
| asm(&quot;&quot;);
<br>
| return 0;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:22432: result: no
<br>
configure:22451: checking if gcc supports XLC inline assembly
<br>
configure:22461: result: no
<br>
configure:22481: checking if g++ supports GCC inline assembly
<br>
configure:22514: g++ -o conftest -O3 -DNDEBUG -finline-functions   conftest.cc  &gt;&amp;5
<br>
configure:22517: $? = 0
<br>
configure:22519: ./conftest
<br>
configure:22522: $? = 0
<br>
configure:22593: result: yes
<br>
configure:22624: checking if g++ supports DEC inline assembly
<br>
configure:22646: g++ -o conftest -O3 -DNDEBUG -finline-functions   conftest.cc  &gt;&amp;5
<br>
conftest.cc:144:19: error: c_asm.h: No such file or directory
<br>
configure:22652: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| /* end confdefs.h.  */
<br>
| 
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;c_asm.h&gt;
<br>
| int
<br>
| main ()
<br>
| {
<br>
| asm(&quot;&quot;);
<br>
| return 0;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:22677: result: no
<br>
configure:22702: checking if g++ supports XLC inline assembly
<br>
configure:22712: result: no
<br>
configure:22740: checking for assembly format
<br>
configure:22742: result: default-.text-.globl-:-_-L--0-1-1-0-0
<br>
configure:22754: checking for asssembly architecture
<br>
configure:22756: result: POWERPC32
<br>
configure:22771: checking for perl
<br>
configure:22787: found /usr/bin/perl
<br>
configure:22797: result: perl
<br>
configure:22806: checking for pre-built assembly file
<br>
configure:22814: result: yes (atomic-powerpc32-osx.s)
<br>
configure:22871: checking for atomic assembly filename
<br>
configure:22878: result: atomic-powerpc32-osx.s
<br>
configure:22986: checking for gfortran
<br>
configure:23002: found /usr/local/bin/gfortran
<br>
configure:23012: result: gfortran
<br>
configure:23030: checking for Fortran 77 compiler version
<br>
configure:23030: gfortran --version &lt;/dev/null &gt;&amp;5
<br>
GNU Fortran 95 (GCC) 4.2.0 20060218 (experimental)
<br>
Copyright (C) 2006 Free Software Foundation, Inc.
<br>
<p>GNU Fortran comes with NO WARRANTY, to the extent permitted by law.
<br>
You may redistribute copies of GNU Fortran
<br>
under the terms of the GNU General Public License.
<br>
For more information about these matters, see the file named COPYING
<br>
<p>configure:23033: $? = 0
<br>
configure:23035: gfortran -v &lt;/dev/null &gt;&amp;5
<br>
Using built-in specs.
<br>
Target: powerpc-apple-darwin8.5.0
<br>
Configured with: ../gcc-4.2-20060218/configure --enable-languages=fortran
<br>
Thread model: posix
<br>
gcc version 4.2.0 20060218 (experimental)
<br>
configure:23038: $? = 0
<br>
configure:23040: gfortran -V &lt;/dev/null &gt;&amp;5
<br>
gfortran: '-V' option must have argument
<br>
configure:23043: $? = 1
<br>
configure:23051: checking whether we are using the GNU Fortran 77 compiler
<br>
configure:23065: gfortran -c  conftest.F &gt;&amp;5
<br>
configure:23071: $? = 0
<br>
configure:23075: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:23078: $? = 0
<br>
configure:23081: test -s conftest.o
<br>
configure:23084: $? = 0
<br>
configure:23097: result: yes
<br>
configure:23103: checking whether gfortran accepts -g
<br>
configure:23115: gfortran -c -g conftest.f &gt;&amp;5
<br>
configure:23121: $? = 0
<br>
configure:23125: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:23128: $? = 0
<br>
configure:23131: test -s conftest.o
<br>
configure:23134: $? = 0
<br>
configure:23146: result: yes
<br>
configure:23199: checking if Fortran 77 compiler works
<br>
configure:23218: gfortran -o conftest   conftest.f  &gt;&amp;5
<br>
configure:23221: $? = 0
<br>
configure:23223: ./conftest
<br>
configure:23226: $? = 0
<br>
configure:23246: result: yes
<br>
configure:23300: checking gfortran external symbol convention
<br>
configure:23322: gfortran  -c conftest.f  
<br>
configure:23329: $? = 0
<br>
configure:23369: result: single underscore
<br>
configure:23446: checking if Fortran 77 compiler supports LOGICAL
<br>
configure:23463: gfortran -c  conftest.f &gt;&amp;5
<br>
configure:23469: $? = 0
<br>
configure:23473: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:23476: $? = 0
<br>
configure:23479: test -s conftest.o
<br>
configure:23482: $? = 0
<br>
configure:23499: result: yes
<br>
configure:23533: checking size of Fortran 77 LOGICAL
<br>
configure:23606: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:23613: $? = 0
<br>
configure:23623: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:23630: $? = 0
<br>
configure:23661: ./conftest
<br>
configure:23668: $? = 0
<br>
configure:23699: result: 4
<br>
configure:23722: checking for C type corresponding to LOGICAL
<br>
configure:23755: result: int
<br>
configure:23788: checking alignment of Fortran LOGICAL
<br>
configure:23871: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:23878: $? = 0
<br>
configure:23888: gfortran  conftestf.f conftest.o -o conftest  
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 3 bytes required before 'x' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 3 bytes required before 'z' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: COMMON 'foo' at (1) requires 3 bytes of padding at start
<br>
configure:23895: $? = 0
<br>
configure:23926: ./conftest
<br>
configure:23933: $? = 0
<br>
configure:23949: result: 4
<br>
configure:24011: checking if Fortran 77 compiler supports INTEGER
<br>
configure:24028: gfortran -c  conftest.f &gt;&amp;5
<br>
configure:24034: $? = 0
<br>
configure:24038: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:24041: $? = 0
<br>
configure:24044: test -s conftest.o
<br>
configure:24047: $? = 0
<br>
configure:24064: result: yes
<br>
configure:24098: checking size of Fortran 77 INTEGER
<br>
configure:24171: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:24178: $? = 0
<br>
configure:24188: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:24195: $? = 0
<br>
configure:24226: ./conftest
<br>
configure:24233: $? = 0
<br>
configure:24264: result: 4
<br>
configure:24287: checking for C type corresponding to INTEGER
<br>
configure:24330: result: int
<br>
configure:24363: checking alignment of Fortran INTEGER
<br>
configure:24446: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:24453: $? = 0
<br>
configure:24463: gfortran  conftestf.f conftest.o -o conftest  
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 3 bytes required before 'x' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 3 bytes required before 'z' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: COMMON 'foo' at (1) requires 3 bytes of padding at start
<br>
configure:24470: $? = 0
<br>
configure:24501: ./conftest
<br>
configure:24508: $? = 0
<br>
configure:24524: result: 4
<br>
configure:24586: checking if Fortran 77 compiler supports INTEGER*1
<br>
configure:24603: gfortran -c  conftest.f &gt;&amp;5
<br>
configure:24609: $? = 0
<br>
configure:24613: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:24616: $? = 0
<br>
configure:24619: test -s conftest.o
<br>
configure:24622: $? = 0
<br>
configure:24639: result: yes
<br>
configure:24673: checking size of Fortran 77 INTEGER*1
<br>
configure:24746: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:24753: $? = 0
<br>
configure:24763: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:24770: $? = 0
<br>
configure:24801: ./conftest
<br>
configure:24808: $? = 0
<br>
configure:24839: result: 1
<br>
configure:24862: checking for C type corresponding to INTEGER*1
<br>
configure:24915: result: char
<br>
configure:24948: checking alignment of Fortran INTEGER*1
<br>
configure:25031: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:25038: $? = 0
<br>
configure:25048: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:25055: $? = 0
<br>
configure:25086: ./conftest
<br>
configure:25093: $? = 0
<br>
configure:25109: result: 1
<br>
configure:25171: checking if Fortran 77 compiler supports INTEGER*2
<br>
configure:25188: gfortran -c  conftest.f &gt;&amp;5
<br>
configure:25194: $? = 0
<br>
configure:25198: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:25201: $? = 0
<br>
configure:25204: test -s conftest.o
<br>
configure:25207: $? = 0
<br>
configure:25224: result: yes
<br>
configure:25258: checking size of Fortran 77 INTEGER*2
<br>
configure:25331: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:25338: $? = 0
<br>
configure:25348: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:25355: $? = 0
<br>
configure:25386: ./conftest
<br>
configure:25393: $? = 0
<br>
configure:25424: result: 2
<br>
configure:25447: checking for C type corresponding to INTEGER*2
<br>
configure:25500: result: short
<br>
configure:25533: checking alignment of Fortran INTEGER*2
<br>
configure:25616: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:25623: $? = 0
<br>
configure:25633: gfortran  conftestf.f conftest.o -o conftest  
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 1 bytes required before 'x' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 1 bytes required before 'z' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: COMMON 'foo' at (1) requires 1 bytes of padding at start
<br>
configure:25640: $? = 0
<br>
configure:25671: ./conftest
<br>
configure:25678: $? = 0
<br>
configure:25694: result: 2
<br>
configure:25756: checking if Fortran 77 compiler supports INTEGER*4
<br>
configure:25773: gfortran -c  conftest.f &gt;&amp;5
<br>
configure:25779: $? = 0
<br>
configure:25783: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:25786: $? = 0
<br>
configure:25789: test -s conftest.o
<br>
configure:25792: $? = 0
<br>
configure:25809: result: yes
<br>
configure:25843: checking size of Fortran 77 INTEGER*4
<br>
configure:25916: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:25923: $? = 0
<br>
configure:25933: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:25940: $? = 0
<br>
configure:25971: ./conftest
<br>
configure:25978: $? = 0
<br>
configure:26009: result: 4
<br>
configure:26032: checking for C type corresponding to INTEGER*4
<br>
configure:26075: result: int
<br>
configure:26108: checking alignment of Fortran INTEGER*4
<br>
configure:26191: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:26198: $? = 0
<br>
configure:26208: gfortran  conftestf.f conftest.o -o conftest  
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 3 bytes required before 'x' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 3 bytes required before 'z' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: COMMON 'foo' at (1) requires 3 bytes of padding at start
<br>
configure:26215: $? = 0
<br>
configure:26246: ./conftest
<br>
configure:26253: $? = 0
<br>
configure:26269: result: 4
<br>
configure:26331: checking if Fortran 77 compiler supports INTEGER*8
<br>
configure:26348: gfortran -c  conftest.f &gt;&amp;5
<br>
configure:26354: $? = 0
<br>
configure:26358: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:26361: $? = 0
<br>
configure:26364: test -s conftest.o
<br>
configure:26367: $? = 0
<br>
configure:26384: result: yes
<br>
configure:26418: checking size of Fortran 77 INTEGER*8
<br>
configure:26491: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:26498: $? = 0
<br>
configure:26508: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:26515: $? = 0
<br>
configure:26546: ./conftest
<br>
configure:26553: $? = 0
<br>
configure:26584: result: 8
<br>
configure:26607: checking for C type corresponding to INTEGER*8
<br>
configure:26645: result: long long
<br>
configure:26678: checking alignment of Fortran INTEGER*8
<br>
configure:26761: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:26768: $? = 0
<br>
configure:26778: gfortran  conftestf.f conftest.o -o conftest  
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 7 bytes required before 'x' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 7 bytes required before 'z' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: COMMON 'foo' at (1) requires 7 bytes of padding at start
<br>
configure:26785: $? = 0
<br>
configure:26816: ./conftest
<br>
configure:26823: $? = 0
<br>
configure:26839: result: 8
<br>
configure:26901: checking if Fortran 77 compiler supports INTEGER*16
<br>
configure:26918: gfortran -c  conftest.f &gt;&amp;5
<br>
&nbsp;In file conftest.f:3
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INTEGER*16 bogus_variable                                       
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Old-style type declaration INTEGER*16 not supported at (1)
<br>
configure:26924: $? = 1
<br>
configure: failed program was:
<br>
| C
<br>
|         program main
<br>
|         INTEGER*16 bogus_variable
<br>
|         end
<br>
configure:26954: result: no
<br>
configure:27472: checking if Fortran 77 compiler supports REAL
<br>
configure:27489: gfortran -c  conftest.f &gt;&amp;5
<br>
configure:27495: $? = 0
<br>
configure:27499: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:27502: $? = 0
<br>
configure:27505: test -s conftest.o
<br>
configure:27508: $? = 0
<br>
configure:27525: result: yes
<br>
configure:27559: checking size of Fortran 77 REAL
<br>
configure:27632: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:27639: $? = 0
<br>
configure:27649: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:27656: $? = 0
<br>
configure:27687: ./conftest
<br>
configure:27694: $? = 0
<br>
configure:27725: result: 4
<br>
configure:27748: checking for C type corresponding to REAL
<br>
configure:27781: result: float
<br>
configure:27814: checking alignment of Fortran REAL
<br>
configure:27897: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:27904: $? = 0
<br>
configure:27914: gfortran  conftestf.f conftest.o -o conftest  
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 3 bytes required before 'x' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 3 bytes required before 'z' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: COMMON 'foo' at (1) requires 3 bytes of padding at start
<br>
configure:27921: $? = 0
<br>
configure:27952: ./conftest
<br>
configure:27959: $? = 0
<br>
configure:27975: result: 4
<br>
configure:28037: checking if Fortran 77 compiler supports REAL*4
<br>
configure:28054: gfortran -c  conftest.f &gt;&amp;5
<br>
configure:28060: $? = 0
<br>
configure:28064: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:28067: $? = 0
<br>
configure:28070: test -s conftest.o
<br>
configure:28073: $? = 0
<br>
configure:28090: result: yes
<br>
configure:28124: checking size of Fortran 77 REAL*4
<br>
configure:28197: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:28204: $? = 0
<br>
configure:28214: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:28221: $? = 0
<br>
configure:28252: ./conftest
<br>
configure:28259: $? = 0
<br>
configure:28290: result: 4
<br>
configure:28313: checking for C type corresponding to REAL*4
<br>
configure:28346: result: float
<br>
configure:28379: checking alignment of Fortran REAL*4
<br>
configure:28462: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:28469: $? = 0
<br>
configure:28479: gfortran  conftestf.f conftest.o -o conftest  
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 3 bytes required before 'x' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 3 bytes required before 'z' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: COMMON 'foo' at (1) requires 3 bytes of padding at start
<br>
configure:28486: $? = 0
<br>
configure:28517: ./conftest
<br>
configure:28524: $? = 0
<br>
configure:28540: result: 4
<br>
configure:28602: checking if Fortran 77 compiler supports REAL*8
<br>
configure:28619: gfortran -c  conftest.f &gt;&amp;5
<br>
configure:28625: $? = 0
<br>
configure:28629: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:28632: $? = 0
<br>
configure:28635: test -s conftest.o
<br>
configure:28638: $? = 0
<br>
configure:28655: result: yes
<br>
configure:28689: checking size of Fortran 77 REAL*8
<br>
configure:28762: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:28769: $? = 0
<br>
configure:28779: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:28786: $? = 0
<br>
configure:28817: ./conftest
<br>
configure:28824: $? = 0
<br>
configure:28855: result: 8
<br>
configure:28878: checking for C type corresponding to REAL*8
<br>
configure:28911: result: double
<br>
configure:28944: checking alignment of Fortran REAL*8
<br>
configure:29027: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:29034: $? = 0
<br>
configure:29044: gfortran  conftestf.f conftest.o -o conftest  
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 7 bytes required before 'x' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 7 bytes required before 'z' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: COMMON 'foo' at (1) requires 7 bytes of padding at start
<br>
configure:29051: $? = 0
<br>
configure:29082: ./conftest
<br>
configure:29089: $? = 0
<br>
configure:29105: result: 8
<br>
configure:29167: checking if Fortran 77 compiler supports REAL*16
<br>
configure:29184: gfortran -c  conftest.f &gt;&amp;5
<br>
configure:29190: $? = 0
<br>
configure:29194: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:29197: $? = 0
<br>
configure:29200: test -s conftest.o
<br>
configure:29203: $? = 0
<br>
configure:29220: result: yes
<br>
configure:29254: checking size of Fortran 77 REAL*16
<br>
configure:29327: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:29334: $? = 0
<br>
configure:29344: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:29351: $? = 0
<br>
configure:29382: ./conftest
<br>
configure:29389: $? = 0
<br>
configure:29420: result: 16
<br>
configure:29443: checking for C type corresponding to REAL*16
<br>
configure:29476: result: long double
<br>
configure:29509: checking alignment of Fortran REAL*16
<br>
configure:29592: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:29599: $? = 0
<br>
configure:29609: gfortran  conftestf.f conftest.o -o conftest  
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 15 bytes required before 'x' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 15 bytes required before 'z' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: COMMON 'foo' at (1) requires 15 bytes of padding at start
<br>
configure:29616: $? = 0
<br>
configure:29647: ./conftest
<br>
configure:29654: $? = 0
<br>
configure:29670: result: 16
<br>
configure:29732: checking if Fortran 77 compiler supports DOUBLE PRECISION
<br>
configure:29749: gfortran -c  conftest.f &gt;&amp;5
<br>
configure:29755: $? = 0
<br>
configure:29759: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:29762: $? = 0
<br>
configure:29765: test -s conftest.o
<br>
configure:29768: $? = 0
<br>
configure:29785: result: yes
<br>
configure:29819: checking size of Fortran 77 DOUBLE PRECISION
<br>
configure:29892: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:29899: $? = 0
<br>
configure:29909: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:29916: $? = 0
<br>
configure:29947: ./conftest
<br>
configure:29954: $? = 0
<br>
configure:29985: result: 8
<br>
configure:30008: checking for C type corresponding to DOUBLE PRECISION
<br>
configure:30041: result: double
<br>
configure:30074: checking alignment of Fortran DOUBLE PRECISION
<br>
configure:30157: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:30164: $? = 0
<br>
configure:30174: gfortran  conftestf.f conftest.o -o conftest  
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 7 bytes required before 'x' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 7 bytes required before 'z' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: COMMON 'foo' at (1) requires 7 bytes of padding at start
<br>
configure:30181: $? = 0
<br>
configure:30212: ./conftest
<br>
configure:30219: $? = 0
<br>
configure:30235: result: 8
<br>
configure:30298: checking if Fortran 77 compiler supports COMPLEX
<br>
configure:30315: gfortran -c  conftest.f &gt;&amp;5
<br>
configure:30321: $? = 0
<br>
configure:30325: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:30328: $? = 0
<br>
configure:30331: test -s conftest.o
<br>
configure:30334: $? = 0
<br>
configure:30351: result: yes
<br>
configure:30385: checking size of Fortran 77 COMPLEX
<br>
configure:30458: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:30465: $? = 0
<br>
configure:30475: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:30482: $? = 0
<br>
configure:30513: ./conftest
<br>
configure:30520: $? = 0
<br>
configure:30551: result: 8
<br>
configure:30575: checking alignment of Fortran COMPLEX
<br>
configure:30658: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:30665: $? = 0
<br>
configure:30675: gfortran  conftestf.f conftest.o -o conftest  
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 3 bytes required before 'x' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 3 bytes required before 'z' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: COMMON 'foo' at (1) requires 3 bytes of padding at start
<br>
configure:30682: $? = 0
<br>
configure:30713: ./conftest
<br>
configure:30720: $? = 0
<br>
configure:30736: result: 4
<br>
configure:30810: checking if Fortran 77 compiler supports COMPLEX*8
<br>
configure:30827: gfortran -c  conftest.f &gt;&amp;5
<br>
configure:30833: $? = 0
<br>
configure:30837: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:30840: $? = 0
<br>
configure:30843: test -s conftest.o
<br>
configure:30846: $? = 0
<br>
configure:30863: result: yes
<br>
configure:30897: checking size of Fortran 77 COMPLEX*8
<br>
configure:30970: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:30977: $? = 0
<br>
configure:30987: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:30994: $? = 0
<br>
configure:31025: ./conftest
<br>
configure:31032: $? = 0
<br>
configure:31063: result: 8
<br>
configure:31087: checking alignment of Fortran COMPLEX*8
<br>
configure:31170: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:31177: $? = 0
<br>
configure:31187: gfortran  conftestf.f conftest.o -o conftest  
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 3 bytes required before 'x' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 3 bytes required before 'z' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: COMMON 'foo' at (1) requires 3 bytes of padding at start
<br>
configure:31194: $? = 0
<br>
configure:31225: ./conftest
<br>
configure:31232: $? = 0
<br>
configure:31248: result: 4
<br>
configure:31310: checking if Fortran 77 compiler supports COMPLEX*16
<br>
configure:31327: gfortran -c  conftest.f &gt;&amp;5
<br>
configure:31333: $? = 0
<br>
configure:31337: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:31340: $? = 0
<br>
configure:31343: test -s conftest.o
<br>
configure:31346: $? = 0
<br>
configure:31363: result: yes
<br>
configure:31397: checking size of Fortran 77 COMPLEX*16
<br>
configure:31470: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:31477: $? = 0
<br>
configure:31487: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:31494: $? = 0
<br>
configure:31525: ./conftest
<br>
configure:31532: $? = 0
<br>
configure:31563: result: 16
<br>
configure:31587: checking alignment of Fortran COMPLEX*16
<br>
configure:31670: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:31677: $? = 0
<br>
configure:31687: gfortran  conftestf.f conftest.o -o conftest  
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 7 bytes required before 'x' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 7 bytes required before 'z' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: COMMON 'foo' at (1) requires 7 bytes of padding at start
<br>
configure:31694: $? = 0
<br>
configure:31725: ./conftest
<br>
configure:31732: $? = 0
<br>
configure:31748: result: 8
<br>
configure:31810: checking if Fortran 77 compiler supports COMPLEX*32
<br>
configure:31827: gfortran -c  conftest.f &gt;&amp;5
<br>
configure:31833: $? = 0
<br>
configure:31837: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:31840: $? = 0
<br>
configure:31843: test -s conftest.o
<br>
configure:31846: $? = 0
<br>
configure:31863: result: yes
<br>
configure:31897: checking size of Fortran 77 COMPLEX*32
<br>
configure:31970: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:31977: $? = 0
<br>
configure:31987: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:31994: $? = 0
<br>
configure:32025: ./conftest
<br>
configure:32032: $? = 0
<br>
configure:32063: result: 32
<br>
configure:32087: checking alignment of Fortran COMPLEX*32
<br>
configure:32170: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:32177: $? = 0
<br>
configure:32187: gfortran  conftestf.f conftest.o -o conftest  
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 15 bytes required before 'x' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 15 bytes required before 'z' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: COMMON 'foo' at (1) requires 15 bytes of padding at start
<br>
configure:32194: $? = 0
<br>
configure:32225: ./conftest
<br>
configure:32232: $? = 0
<br>
configure:32248: result: 16
<br>
configure:32299: checking for max Fortran MPI handle index
<br>
configure:32354: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:32357: $? = 0
<br>
configure:32359: ./conftest
<br>
configure:32362: $? = 0
<br>
configure:32391: result: ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
configure:32411: checking FORTRAN value for .TRUE. logical type
<br>
configure:32508: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:32515: $? = 0
<br>
configure:32525: gfortran  -o conftest conftest.o conftestf.f  
<br>
configure:32532: $? = 0
<br>
configure:32563: ./conftest
<br>
configure:32570: $? = 0
<br>
configure:32584: result: 1
<br>
configure:32597: checking for correct handling of FORTRAN logical arrays
<br>
configure:32692: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:32699: $? = 0
<br>
configure:32709: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:32716: $? = 0
<br>
configure:32745: ./conftest
<br>
configure:32752: $? = 0
<br>
configure:32768: result: yes
<br>
configure:32929: checking for gfortran
<br>
configure:32945: found /usr/local/bin/gfortran
<br>
configure:32955: result: gfortran
<br>
configure:32973: checking for Fortran compiler version
<br>
configure:32973: gfortran --version &lt;/dev/null &gt;&amp;5
<br>
GNU Fortran 95 (GCC) 4.2.0 20060218 (experimental)
<br>
Copyright (C) 2006 Free Software Foundation, Inc.
<br>
<p>GNU Fortran comes with NO WARRANTY, to the extent permitted by law.
<br>
You may redistribute copies of GNU Fortran
<br>
under the terms of the GNU General Public License.
<br>
For more information about these matters, see the file named COPYING
<br>
<p>configure:32976: $? = 0
<br>
configure:32978: gfortran -v &lt;/dev/null &gt;&amp;5
<br>
Using built-in specs.
<br>
Target: powerpc-apple-darwin8.5.0
<br>
Configured with: ../gcc-4.2-20060218/configure --enable-languages=fortran
<br>
Thread model: posix
<br>
gcc version 4.2.0 20060218 (experimental)
<br>
configure:32981: $? = 0
<br>
configure:32983: gfortran -V &lt;/dev/null &gt;&amp;5
<br>
gfortran: '-V' option must have argument
<br>
configure:32986: $? = 1
<br>
configure:32994: checking whether we are using the GNU Fortran compiler
<br>
configure:33008: gfortran -c   conftest.F &gt;&amp;5
<br>
configure:33014: $? = 0
<br>
configure:33018: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:33021: $? = 0
<br>
configure:33024: test -s conftest.o
<br>
configure:33027: $? = 0
<br>
configure:33040: result: yes
<br>
configure:33046: checking whether gfortran accepts -g
<br>
configure:33058: gfortran -c -g  conftest.f &gt;&amp;5
<br>
configure:33064: $? = 0
<br>
configure:33068: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:33071: $? = 0
<br>
configure:33074: test -s conftest.o
<br>
configure:33077: $? = 0
<br>
configure:33089: result: yes
<br>
configure:33134: checking if Fortran compiler works
<br>
configure:33153: gfortran -o conftest    conftest.f  &gt;&amp;5
<br>
configure:33156: $? = 0
<br>
configure:33158: ./conftest
<br>
configure:33161: $? = 0
<br>
configure:33181: result: yes
<br>
configure:33207: checking whether gfortran and gfortran compilers are compatible
<br>
configure:33235: gfortran   -c conftestf90.f
<br>
configure:33242: $? = 0
<br>
configure:33252: gfortran  -c conftestf77.f
<br>
configure:33259: $? = 0
<br>
configure:33269: gfortran  -o conftest conftestf90.o conftestf77.o 
<br>
configure:33276: $? = 0
<br>
configure:33344: result: yes
<br>
configure:33360: checking for Fortran flag to compile .f files
<br>
configure:33377: gfortran -c   conftest.f &gt;&amp;5
<br>
configure:33383: $? = 0
<br>
configure:33387: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:33390: $? = 0
<br>
configure:33393: test -s conftest.o
<br>
configure:33396: $? = 0
<br>
configure:33410: result: none
<br>
configure:33429: checking for Fortran flag to compile .f90 files
<br>
configure:33446: gfortran -c   conftest.f90 &gt;&amp;5
<br>
configure:33452: $? = 0
<br>
configure:33456: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:33459: $? = 0
<br>
configure:33462: test -s conftest.o
<br>
configure:33465: $? = 0
<br>
configure:33479: result: none
<br>
configure:33537: checking for Fortran 90 compiler module include flag
<br>
configure:33566: gfortran   -c conftest-module.f90  
<br>
configure:33573: $? = 0
<br>
configure:33612: gfortran   conftest.f90 -Isubdir  
<br>
configure:33619: $? = 0
<br>
configure:33634: result: -I
<br>
configure:33676: checking if Fortran 90 compiler supports LOGICAL
<br>
configure:33692: gfortran -c   conftest.f90 &gt;&amp;5
<br>
configure:33698: $? = 0
<br>
configure:33702: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:33705: $? = 0
<br>
configure:33708: test -s conftest.o
<br>
configure:33711: $? = 0
<br>
configure:33728: result: yes
<br>
configure:33762: checking size of Fortran 90 LOGICAL
<br>
configure:33834: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:33841: $? = 0
<br>
configure:33851: gfortran   conftestf.f90 conftest.o -o conftest  
<br>
configure:33858: $? = 0
<br>
configure:33906: ./conftest
<br>
configure:33913: $? = 0
<br>
configure:33929: result: 4
<br>
configure:33956: checking if Fortran 77 and 90 type sizes match
<br>
configure:33969: result: yes
<br>
configure:34044: checking if Fortran 90 compiler supports INTEGER
<br>
configure:34060: gfortran -c   conftest.f90 &gt;&amp;5
<br>
configure:34066: $? = 0
<br>
configure:34070: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:34073: $? = 0
<br>
configure:34076: test -s conftest.o
<br>
configure:34079: $? = 0
<br>
configure:34096: result: yes
<br>
configure:34130: checking size of Fortran 90 INTEGER
<br>
configure:34202: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:34209: $? = 0
<br>
configure:34219: gfortran   conftestf.f90 conftest.o -o conftest  
<br>
configure:34226: $? = 0
<br>
configure:34274: ./conftest
<br>
configure:34281: $? = 0
<br>
configure:34297: result: 4
<br>
configure:34324: checking if Fortran 77 and 90 type sizes match
<br>
configure:34337: result: yes
<br>
configure:34410: checking if Fortran 90 compiler supports INTEGER*1
<br>
configure:34426: gfortran -c   conftest.f90 &gt;&amp;5
<br>
configure:34432: $? = 0
<br>
configure:34436: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:34439: $? = 0
<br>
configure:34442: test -s conftest.o
<br>
configure:34445: $? = 0
<br>
configure:34462: result: yes
<br>
configure:34496: checking size of Fortran 90 INTEGER*1
<br>
configure:34568: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:34575: $? = 0
<br>
configure:34585: gfortran   conftestf.f90 conftest.o -o conftest  
<br>
configure:34592: $? = 0
<br>
configure:34640: ./conftest
<br>
configure:34647: $? = 0
<br>
configure:34663: result: 1
<br>
configure:34690: checking if Fortran 77 and 90 type sizes match
<br>
configure:34703: result: yes
<br>
configure:34776: checking if Fortran 90 compiler supports INTEGER*2
<br>
configure:34792: gfortran -c   conftest.f90 &gt;&amp;5
<br>
configure:34798: $? = 0
<br>
configure:34802: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:34805: $? = 0
<br>
configure:34808: test -s conftest.o
<br>
configure:34811: $? = 0
<br>
configure:34828: result: yes
<br>
configure:34862: checking size of Fortran 90 INTEGER*2
<br>
configure:34934: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:34941: $? = 0
<br>
configure:34951: gfortran   conftestf.f90 conftest.o -o conftest  
<br>
configure:34958: $? = 0
<br>
configure:35006: ./conftest
<br>
configure:35013: $? = 0
<br>
configure:35029: result: 2
<br>
configure:35056: checking if Fortran 77 and 90 type sizes match
<br>
configure:35069: result: yes
<br>
configure:35142: checking if Fortran 90 compiler supports INTEGER*4
<br>
configure:35158: gfortran -c   conftest.f90 &gt;&amp;5
<br>
configure:35164: $? = 0
<br>
configure:35168: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:35171: $? = 0
<br>
configure:35174: test -s conftest.o
<br>
configure:35177: $? = 0
<br>
configure:35194: result: yes
<br>
configure:35228: checking size of Fortran 90 INTEGER*4
<br>
configure:35300: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:35307: $? = 0
<br>
configure:35317: gfortran   conftestf.f90 conftest.o -o conftest  
<br>
configure:35324: $? = 0
<br>
configure:35372: ./conftest
<br>
configure:35379: $? = 0
<br>
configure:35395: result: 4
<br>
configure:35422: checking if Fortran 77 and 90 type sizes match
<br>
configure:35435: result: yes
<br>
configure:35508: checking if Fortran 90 compiler supports INTEGER*8
<br>
configure:35524: gfortran -c   conftest.f90 &gt;&amp;5
<br>
configure:35530: $? = 0
<br>
configure:35534: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:35537: $? = 0
<br>
configure:35540: test -s conftest.o
<br>
configure:35543: $? = 0
<br>
configure:35560: result: yes
<br>
configure:35594: checking size of Fortran 90 INTEGER*8
<br>
configure:35666: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:35673: $? = 0
<br>
configure:35683: gfortran   conftestf.f90 conftest.o -o conftest  
<br>
configure:35690: $? = 0
<br>
configure:35738: ./conftest
<br>
configure:35745: $? = 0
<br>
configure:35761: result: 8
<br>
configure:35788: checking if Fortran 77 and 90 type sizes match
<br>
configure:35801: result: yes
<br>
configure:35874: checking if Fortran 90 compiler supports INTEGER*16
<br>
configure:35890: gfortran -c   conftest.f90 &gt;&amp;5
<br>
&nbsp;In file conftest.f90:2
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;INTEGER*16 :: x
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Old-style type declaration INTEGER*16 not supported at (1)
<br>
configure:35896: $? = 1
<br>
configure: failed program was:
<br>
| program main
<br>
|     INTEGER*16 :: x
<br>
| end
<br>
configure:35926: result: no
<br>
configure:36242: checking if Fortran 90 compiler supports REAL
<br>
configure:36258: gfortran -c   conftest.f90 &gt;&amp;5
<br>
configure:36264: $? = 0
<br>
configure:36268: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:36271: $? = 0
<br>
configure:36274: test -s conftest.o
<br>
configure:36277: $? = 0
<br>
configure:36294: result: yes
<br>
configure:36328: checking size of Fortran 90 REAL
<br>
configure:36400: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:36407: $? = 0
<br>
configure:36417: gfortran   conftestf.f90 conftest.o -o conftest  
<br>
configure:36424: $? = 0
<br>
configure:36472: ./conftest
<br>
configure:36479: $? = 0
<br>
configure:36495: result: 4
<br>
configure:36522: checking if Fortran 77 and 90 type sizes match
<br>
configure:36535: result: yes
<br>
configure:36608: checking if Fortran 90 compiler supports REAL*4
<br>
configure:36624: gfortran -c   conftest.f90 &gt;&amp;5
<br>
configure:36630: $? = 0
<br>
configure:36634: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:36637: $? = 0
<br>
configure:36640: test -s conftest.o
<br>
configure:36643: $? = 0
<br>
configure:36660: result: yes
<br>
configure:36694: checking size of Fortran 90 REAL*4
<br>
configure:36766: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:36773: $? = 0
<br>
configure:36783: gfortran   conftestf.f90 conftest.o -o conftest  
<br>
configure:36790: $? = 0
<br>
configure:36838: ./conftest
<br>
configure:36845: $? = 0
<br>
configure:36861: result: 4
<br>
configure:36888: checking if Fortran 77 and 90 type sizes match
<br>
configure:36901: result: yes
<br>
configure:36974: checking if Fortran 90 compiler supports REAL*8
<br>
configure:36990: gfortran -c   conftest.f90 &gt;&amp;5
<br>
configure:36996: $? = 0
<br>
configure:37000: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:37003: $? = 0
<br>
configure:37006: test -s conftest.o
<br>
configure:37009: $? = 0
<br>
configure:37026: result: yes
<br>
configure:37060: checking size of Fortran 90 REAL*8
<br>
configure:37132: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:37139: $? = 0
<br>
configure:37149: gfortran   conftestf.f90 conftest.o -o conftest  
<br>
configure:37156: $? = 0
<br>
configure:37204: ./conftest
<br>
configure:37211: $? = 0
<br>
configure:37227: result: 8
<br>
configure:37254: checking if Fortran 77 and 90 type sizes match
<br>
configure:37267: result: yes
<br>
configure:37340: checking if Fortran 90 compiler supports REAL*16
<br>
configure:37356: gfortran -c   conftest.f90 &gt;&amp;5
<br>
configure:37362: $? = 0
<br>
configure:37366: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:37369: $? = 0
<br>
configure:37372: test -s conftest.o
<br>
configure:37375: $? = 0
<br>
configure:37392: result: yes
<br>
configure:37426: checking size of Fortran 90 REAL*16
<br>
configure:37498: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:37505: $? = 0
<br>
configure:37515: gfortran   conftestf.f90 conftest.o -o conftest  
<br>
configure:37522: $? = 0
<br>
configure:37570: ./conftest
<br>
configure:37577: $? = 0
<br>
configure:37593: result: 16
<br>
configure:37620: checking if Fortran 77 and 90 type sizes match
<br>
configure:37633: result: yes
<br>
configure:37706: checking if Fortran 90 compiler supports DOUBLE PRECISION
<br>
configure:37722: gfortran -c   conftest.f90 &gt;&amp;5
<br>
configure:37728: $? = 0
<br>
configure:37732: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:37735: $? = 0
<br>
configure:37738: test -s conftest.o
<br>
configure:37741: $? = 0
<br>
configure:37758: result: yes
<br>
configure:37792: checking size of Fortran 90 DOUBLE PRECISION
<br>
configure:37864: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:37871: $? = 0
<br>
configure:37881: gfortran   conftestf.f90 conftest.o -o conftest  
<br>
configure:37888: $? = 0
<br>
configure:37936: ./conftest
<br>
configure:37943: $? = 0
<br>
configure:37959: result: 8
<br>
configure:37986: checking if Fortran 77 and 90 type sizes match
<br>
configure:37999: result: yes
<br>
configure:38074: checking if Fortran 90 compiler supports COMPLEX
<br>
configure:38090: gfortran -c   conftest.f90 &gt;&amp;5
<br>
configure:38096: $? = 0
<br>
configure:38100: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:38103: $? = 0
<br>
configure:38106: test -s conftest.o
<br>
configure:38109: $? = 0
<br>
configure:38126: result: yes
<br>
configure:38160: checking size of Fortran 90 COMPLEX
<br>
configure:38232: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:38239: $? = 0
<br>
configure:38249: gfortran   conftestf.f90 conftest.o -o conftest  
<br>
configure:38256: $? = 0
<br>
configure:38304: ./conftest
<br>
configure:38311: $? = 0
<br>
configure:38327: result: 8
<br>
configure:38354: checking if Fortran 77 and 90 type sizes match
<br>
configure:38367: result: yes
<br>
configure:38440: checking if Fortran 90 compiler supports COMPLEX*8
<br>
configure:38456: gfortran -c   conftest.f90 &gt;&amp;5
<br>
configure:38462: $? = 0
<br>
configure:38466: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:38469: $? = 0
<br>
configure:38472: test -s conftest.o
<br>
configure:38475: $? = 0
<br>
configure:38492: result: yes
<br>
configure:38526: checking size of Fortran 90 COMPLEX*8
<br>
configure:38598: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:38605: $? = 0
<br>
configure:38615: gfortran   conftestf.f90 conftest.o -o conftest  
<br>
configure:38622: $? = 0
<br>
configure:38670: ./conftest
<br>
configure:38677: $? = 0
<br>
configure:38693: result: 8
<br>
configure:38720: checking if Fortran 77 and 90 type sizes match
<br>
configure:38733: result: yes
<br>
configure:38806: checking if Fortran 90 compiler supports COMPLEX*16
<br>
configure:38822: gfortran -c   conftest.f90 &gt;&amp;5
<br>
configure:38828: $? = 0
<br>
configure:38832: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:38835: $? = 0
<br>
configure:38838: test -s conftest.o
<br>
configure:38841: $? = 0
<br>
configure:38858: result: yes
<br>
configure:38892: checking size of Fortran 90 COMPLEX*16
<br>
configure:38964: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:38971: $? = 0
<br>
configure:38981: gfortran   conftestf.f90 conftest.o -o conftest  
<br>
configure:38988: $? = 0
<br>
configure:39036: ./conftest
<br>
configure:39043: $? = 0
<br>
configure:39059: result: 16
<br>
configure:39086: checking if Fortran 77 and 90 type sizes match
<br>
configure:39099: result: yes
<br>
configure:39172: checking if Fortran 90 compiler supports COMPLEX*32
<br>
configure:39188: gfortran -c   conftest.f90 &gt;&amp;5
<br>
configure:39194: $? = 0
<br>
configure:39198: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:39201: $? = 0
<br>
configure:39204: test -s conftest.o
<br>
configure:39207: $? = 0
<br>
configure:39224: result: yes
<br>
configure:39258: checking size of Fortran 90 COMPLEX*32
<br>
configure:39330: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:39337: $? = 0
<br>
configure:39347: gfortran   conftestf.f90 conftest.o -o conftest  
<br>
configure:39354: $? = 0
<br>
configure:39402: ./conftest
<br>
configure:39409: $? = 0
<br>
configure:39425: result: 32
<br>
configure:39452: checking if Fortran 77 and 90 type sizes match
<br>
configure:39465: result: yes
<br>
configure:39538: checking if Fortran 90 compiler supports DOUBLE COMPLEX
<br>
configure:39554: gfortran -c   conftest.f90 &gt;&amp;5
<br>
configure:39560: $? = 0
<br>
configure:39564: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:39567: $? = 0
<br>
configure:39570: test -s conftest.o
<br>
configure:39573: $? = 0
<br>
configure:39590: result: yes
<br>
configure:39624: checking size of Fortran 90 DOUBLE COMPLEX
<br>
configure:39696: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:39703: $? = 0
<br>
configure:39713: gfortran   conftestf.f90 conftest.o -o conftest  
<br>
configure:39720: $? = 0
<br>
configure:39768: ./conftest
<br>
configure:39775: $? = 0
<br>
configure:39791: result: 16
<br>
configure:40008: checking Fortran 90 kind of MPI_INTEGER_KIND (selected_int_kind(9))
<br>
configure:40029: gfortran   -o conftest conftestf.f90  
<br>
configure:40036: $? = 0
<br>
configure:40080: ./conftest
<br>
configure:40087: $? = 0
<br>
configure:40103: result: 4
<br>
configure:40448: checking Fortran 90 kind of MPI_ADDRESS_KIND (selected_int_kind(9))
<br>
configure:40543: result: 4
<br>
configure:40779: checking Fortran 90 kind of MPI_OFFSET_KIND (selected_int_kind(18))
<br>
configure:40800: gfortran   -o conftest conftestf.f90  
<br>
configure:40807: $? = 0
<br>
configure:40851: ./conftest
<br>
configure:40858: $? = 0
<br>
configure:40874: result: 8
<br>
configure:41018: checking alloca.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking alloca.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for alloca.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking aio.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking aio.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for aio.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking arpa/inet.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking arpa/inet.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for arpa/inet.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking dirent.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking dirent.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for dirent.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking dlfcn.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking dlfcn.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for dlfcn.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking execinfo.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
conftest.c:241:22: error: execinfo.h: No such file or directory
<br>
configure:41036: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;execinfo.h&gt;
<br>
configure:41059: result: no
<br>
configure:41063: checking execinfo.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
conftest.c:207:22: error: execinfo.h: No such file or directory
<br>
configure:41079: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;execinfo.h&gt;
<br>
configure:41099: result: no
<br>
configure:41134: checking for execinfo.h
<br>
configure:41141: result: no
<br>
configure:41018: checking err.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking err.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for err.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking fcntl.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking fcntl.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for fcntl.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking grp.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking grp.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for grp.h
<br>
configure:41141: result: yes
<br>
configure:41009: checking for inttypes.h
<br>
configure:41014: result: yes
<br>
configure:41018: checking libgen.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking libgen.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for libgen.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking libutil.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
conftest.c:246:21: error: libutil.h: No such file or directory
<br>
configure:41036: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;libutil.h&gt;
<br>
configure:41059: result: no
<br>
configure:41063: checking libutil.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
conftest.c:212:21: error: libutil.h: No such file or directory
<br>
configure:41079: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;libutil.h&gt;
<br>
configure:41099: result: no
<br>
configure:41134: checking for libutil.h
<br>
configure:41141: result: no
<br>
configure:41018: checking netdb.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking netdb.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for netdb.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking netinet/in.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking netinet/in.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for netinet/in.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking netinet/tcp.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking netinet/tcp.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for netinet/tcp.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking poll.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking poll.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for poll.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking pthread.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking pthread.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for pthread.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking pty.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
conftest.c:251:17: error: pty.h: No such file or directory
<br>
configure:41036: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;pty.h&gt;
<br>
configure:41059: result: no
<br>
configure:41063: checking pty.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
conftest.c:217:17: error: pty.h: No such file or directory
<br>
configure:41079: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;pty.h&gt;
<br>
configure:41099: result: no
<br>
configure:41134: checking for pty.h
<br>
configure:41141: result: no
<br>
configure:41018: checking pwd.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking pwd.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for pwd.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking sched.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking sched.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for sched.h
<br>
configure:41141: result: yes
<br>
configure:41009: checking for stdint.h
<br>
configure:41014: result: yes
<br>
configure:41009: checking for string.h
<br>
configure:41014: result: yes
<br>
configure:41009: checking for strings.h
<br>
configure:41014: result: yes
<br>
configure:41018: checking stropts.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
conftest.c:256:21: error: stropts.h: No such file or directory
<br>
configure:41036: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;stropts.h&gt;
<br>
configure:41059: result: no
<br>
configure:41063: checking stropts.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
conftest.c:222:21: error: stropts.h: No such file or directory
<br>
configure:41079: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stropts.h&gt;
<br>
configure:41099: result: no
<br>
configure:41134: checking for stropts.h
<br>
configure:41141: result: no
<br>
configure:41018: checking sys/fcntl.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking sys/fcntl.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for sys/fcntl.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking sys/ipc.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking sys/ipc.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for sys/ipc.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking sys/ioctl.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking sys/ioctl.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for sys/ioctl.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking sys/mman.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking sys/mman.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for sys/mman.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking sys/param.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking sys/param.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for sys/param.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking sys/queue.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking sys/queue.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for sys/queue.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking sys/resource.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking sys/resource.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for sys/resource.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking sys/select.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking sys/select.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for sys/select.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking sys/socket.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking sys/socket.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for sys/socket.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking sys/sockio.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking sys/sockio.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for sys/sockio.h
<br>
configure:41141: result: yes
<br>
configure:41009: checking for sys/stat.h
<br>
configure:41014: result: yes
<br>
configure:41018: checking sys/statvfs.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking sys/statvfs.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for sys/statvfs.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking sys/time.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking sys/time.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for sys/time.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking sys/tree.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
conftest.c:269:22: error: sys/tree.h: No such file or directory
<br>
configure:41036: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;sys/tree.h&gt;
<br>
configure:41059: result: no
<br>
configure:41063: checking sys/tree.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
conftest.c:235:22: error: sys/tree.h: No such file or directory
<br>
configure:41079: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;sys/tree.h&gt;
<br>
configure:41099: result: no
<br>
configure:41134: checking for sys/tree.h
<br>
configure:41141: result: no
<br>
configure:41009: checking for sys/types.h
<br>
configure:41014: result: yes
<br>
configure:41018: checking sys/uio.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking sys/uio.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for sys/uio.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking sys/utsname.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking sys/utsname.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for sys/utsname.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking sys/wait.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking sys/wait.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for sys/wait.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking syslog.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking syslog.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for syslog.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking time.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking time.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for time.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking termios.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking termios.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for termios.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking ulimit.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking ulimit.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for ulimit.h
<br>
configure:41141: result: yes
<br>
configure:41009: checking for unistd.h
<br>
configure:41014: result: yes
<br>
configure:41018: checking util.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking util.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for util.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking utmp.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41036: $? = 0
<br>
configure:41040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41043: $? = 0
<br>
configure:41046: test -s conftest.o
<br>
configure:41049: $? = 0
<br>
configure:41059: result: yes
<br>
configure:41063: checking utmp.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
configure:41079: $? = 0
<br>
configure:41099: result: yes
<br>
configure:41134: checking for utmp.h
<br>
configure:41141: result: yes
<br>
configure:41018: checking malloc.h usability
<br>
configure:41030: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
conftest.c:280:20: error: malloc.h: No such file or directory
<br>
configure:41036: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;malloc.h&gt;
<br>
configure:41059: result: no
<br>
configure:41063: checking malloc.h presence
<br>
configure:41073: gcc -E  conftest.c
<br>
conftest.c:246:20: error: malloc.h: No such file or directory
<br>
configure:41079: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;malloc.h&gt;
<br>
configure:41099: result: no
<br>
configure:41134: checking for malloc.h
<br>
configure:41141: result: no
<br>
configure:41161: checking for net/if.h
<br>
configure:41189: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41195: $? = 0
<br>
configure:41199: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41202: $? = 0
<br>
configure:41205: test -s conftest.o
<br>
configure:41208: $? = 0
<br>
configure:41219: result: yes
<br>
configure:41256: checking stdbool.h usability
<br>
configure:41268: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41274: $? = 0
<br>
configure:41278: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41281: $? = 0
<br>
configure:41284: test -s conftest.o
<br>
configure:41287: $? = 0
<br>
configure:41297: result: yes
<br>
configure:41301: checking stdbool.h presence
<br>
configure:41311: gcc -E  conftest.c
<br>
configure:41317: $? = 0
<br>
configure:41337: result: yes
<br>
configure:41372: checking for stdbool.h
<br>
configure:41379: result: yes
<br>
configure:41394: checking if &lt;stdbool.h&gt; works
<br>
configure:41417: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41423: $? = 0
<br>
configure:41427: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41430: $? = 0
<br>
configure:41433: test -s conftest.o
<br>
configure:41436: $? = 0
<br>
configure:41455: result: yes
<br>
configure:41522: checking for pid_t
<br>
configure:41546: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41552: $? = 0
<br>
configure:41556: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41559: $? = 0
<br>
configure:41562: test -s conftest.o
<br>
configure:41565: $? = 0
<br>
configure:41576: result: yes
<br>
configure:41579: checking size of pid_t
<br>
configure:41898: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:41901: $? = 0
<br>
configure:41903: ./conftest
<br>
configure:41906: $? = 0
<br>
configure:41929: result: 4
<br>
configure:41937: checking for socklen_t
<br>
configure:41963: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:41969: $? = 0
<br>
configure:41973: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:41976: $? = 0
<br>
configure:41979: test -s conftest.o
<br>
configure:41982: $? = 0
<br>
configure:41993: result: yes
<br>
configure:42009: checking for struct sockaddr_in
<br>
configure:42037: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:42043: $? = 0
<br>
configure:42047: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:42050: $? = 0
<br>
configure:42053: test -s conftest.o
<br>
configure:42056: $? = 0
<br>
configure:42067: result: yes
<br>
configure:42080: checking if SA_RESTART defined in signal.h
<br>
configure:42107: result: yes
<br>
configure:42111: checking for sa_len in struct sockaddr
<br>
configure:42130: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:42136: $? = 0
<br>
configure:42140: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:42143: $? = 0
<br>
configure:42146: test -s conftest.o
<br>
configure:42149: $? = 0
<br>
configure:42164: result: yes
<br>
configure:42167: checking for struct dirent.d_type
<br>
configure:42193: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:42199: $? = 0
<br>
configure:42203: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:42206: $? = 0
<br>
configure:42209: test -s conftest.o
<br>
configure:42212: $? = 0
<br>
configure:42272: result: yes
<br>
configure:42284: checking for siginfo_t.si_fd
<br>
configure:42308: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
conftest.c: In function 'main':
<br>
conftest.c:262: error: 'siginfo_t' has no member named 'si_fd'
<br>
configure:42314: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;signal.h&gt;
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| static siginfo_t ac_aggr;
<br>
| if (ac_aggr.si_fd)
<br>
| return 0;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:42353: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
conftest.c: In function 'main':
<br>
conftest.c:262: error: 'siginfo_t' has no member named 'si_fd'
<br>
configure:42359: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;signal.h&gt;
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| static siginfo_t ac_aggr;
<br>
| if (sizeof ac_aggr.si_fd)
<br>
| return 0;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:42385: result: no
<br>
configure:42396: checking for siginfo_t.si_band
<br>
configure:42420: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:42426: $? = 0
<br>
configure:42430: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:42433: $? = 0
<br>
configure:42436: test -s conftest.o
<br>
configure:42439: $? = 0
<br>
configure:42497: result: yes
<br>
configure:42574: checking for openpty in -lutil
<br>
configure:42604: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c -lutil   &gt;&amp;5
<br>
/usr/bin/ld: can't locate file for: -lutil
<br>
collect2: ld returned 1 exit status
<br>
configure:42610: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| /* end confdefs.h.  */
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char openpty ();
<br>
| int
<br>
| main ()
<br>
| {
<br>
| openpty ();
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:42636: result: no
<br>
configure:42649: checking for gethostbyname in -lnsl
<br>
configure:42679: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c -lnsl   &gt;&amp;5
<br>
/usr/bin/ld: can't locate file for: -lnsl
<br>
collect2: ld returned 1 exit status
<br>
configure:42685: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| /* end confdefs.h.  */
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char gethostbyname ();
<br>
| int
<br>
| main ()
<br>
| {
<br>
| gethostbyname ();
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:42711: result: no
<br>
configure:42724: checking for socket in -lsocket
<br>
configure:42754: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c -lsocket   &gt;&amp;5
<br>
/usr/bin/ld: can't locate file for: -lsocket
<br>
collect2: ld returned 1 exit status
<br>
configure:42760: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| /* end confdefs.h.  */
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char socket ();
<br>
| int
<br>
| main ()
<br>
| {
<br>
| socket ();
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:42786: result: no
<br>
configure:42800: checking if we need -lrt for sched_yield
<br>
configure:42857: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:42863: $? = 0
<br>
configure:42867: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:42870: $? = 0
<br>
configure:42873: test -s conftest
<br>
configure:42876: $? = 0
<br>
configure:42972: result: no
<br>
configure:42986: checking for sched_yield
<br>
configure:43043: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:43049: $? = 0
<br>
configure:43053: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:43056: $? = 0
<br>
configure:43059: test -s conftest
<br>
configure:43062: $? = 0
<br>
configure:43074: result: yes
<br>
configure:43088: checking if we need -lexecinfo for backtrace
<br>
configure:43145: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
/usr/bin/ld: Undefined symbols:
<br>
_backtrace
<br>
collect2: ld returned 1 exit status
<br>
configure:43151: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| /* end confdefs.h.  */
<br>
| /* Define backtrace to an innocuous variant, in case &lt;limits.h&gt; declares backtrace.
<br>
|    For example, HP-UX 11i &lt;limits.h&gt; declares gettimeofday.  */
<br>
| #define backtrace innocuous_backtrace
<br>
| 
<br>
| /* System header to define __stub macros and hopefully few prototypes,
<br>
|     which can conflict with char backtrace (); below.
<br>
|     Prefer &lt;limits.h&gt; to &lt;assert.h&gt; if __STDC__ is defined, since
<br>
|     &lt;limits.h&gt; exists even on freestanding compilers.  */
<br>
| 
<br>
| #ifdef __STDC__
<br>
| # include &lt;limits.h&gt;
<br>
| #else
<br>
| # include &lt;assert.h&gt;
<br>
| #endif
<br>
| 
<br>
| #undef backtrace
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| {
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char backtrace ();
<br>
| /* The GNU C library defines this for functions which it implements
<br>
|     to always fail with ENOSYS.  Some functions are actually named
<br>
|     something starting with __ and the normal name is an alias.  */
<br>
| #if defined (__stub_backtrace) || defined (__stub___backtrace)
<br>
| choke me
<br>
| #else
<br>
| char (*f) () = backtrace;
<br>
| #endif
<br>
| #ifdef __cplusplus
<br>
| }
<br>
| #endif
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| return f != backtrace;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:43225: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  -lexecinfo &gt;&amp;5
<br>
/usr/bin/ld: can't locate file for: -lexecinfo
<br>
collect2: ld returned 1 exit status
<br>
configure:43231: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| /* end confdefs.h.  */
<br>
| /* Define backtrace to an innocuous variant, in case &lt;limits.h&gt; declares backtrace.
<br>
|    For example, HP-UX 11i &lt;limits.h&gt; declares gettimeofday.  */
<br>
| #define backtrace innocuous_backtrace
<br>
| 
<br>
| /* System header to define __stub macros and hopefully few prototypes,
<br>
|     which can conflict with char backtrace (); below.
<br>
|     Prefer &lt;limits.h&gt; to &lt;assert.h&gt; if __STDC__ is defined, since
<br>
|     &lt;limits.h&gt; exists even on freestanding compilers.  */
<br>
| 
<br>
| #ifdef __STDC__
<br>
| # include &lt;limits.h&gt;
<br>
| #else
<br>
| # include &lt;assert.h&gt;
<br>
| #endif
<br>
| 
<br>
| #undef backtrace
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| {
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char backtrace ();
<br>
| /* The GNU C library defines this for functions which it implements
<br>
|     to always fail with ENOSYS.  Some functions are actually named
<br>
|     something starting with __ and the normal name is an alias.  */
<br>
| #if defined (__stub_backtrace) || defined (__stub___backtrace)
<br>
| choke me
<br>
| #else
<br>
| char (*f) () = backtrace;
<br>
| #endif
<br>
| #ifdef __cplusplus
<br>
| }
<br>
| #endif
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| return f != backtrace;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:43260: result: not found
<br>
configure:43274: checking for backtrace
<br>
configure:43331: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
/usr/bin/ld: Undefined symbols:
<br>
_backtrace
<br>
collect2: ld returned 1 exit status
<br>
configure:43337: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| /* end confdefs.h.  */
<br>
| /* Define backtrace to an innocuous variant, in case &lt;limits.h&gt; declares backtrace.
<br>
|    For example, HP-UX 11i &lt;limits.h&gt; declares gettimeofday.  */
<br>
| #define backtrace innocuous_backtrace
<br>
| 
<br>
| /* System header to define __stub macros and hopefully few prototypes,
<br>
|     which can conflict with char backtrace (); below.
<br>
|     Prefer &lt;limits.h&gt; to &lt;assert.h&gt; if __STDC__ is defined, since
<br>
|     &lt;limits.h&gt; exists even on freestanding compilers.  */
<br>
| 
<br>
| #ifdef __STDC__
<br>
| # include &lt;limits.h&gt;
<br>
| #else
<br>
| # include &lt;assert.h&gt;
<br>
| #endif
<br>
| 
<br>
| #undef backtrace
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| {
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char backtrace ();
<br>
| /* The GNU C library defines this for functions which it implements
<br>
|     to always fail with ENOSYS.  Some functions are actually named
<br>
|     something starting with __ and the normal name is an alias.  */
<br>
| #if defined (__stub_backtrace) || defined (__stub___backtrace)
<br>
| choke me
<br>
| #else
<br>
| char (*f) () = backtrace;
<br>
| #endif
<br>
| #ifdef __cplusplus
<br>
| }
<br>
| #endif
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| return f != backtrace;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:43362: result: no
<br>
configure:43376: checking if we need -lgen for dirname
<br>
configure:43433: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:43439: $? = 0
<br>
configure:43443: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:43446: $? = 0
<br>
configure:43449: test -s conftest
<br>
configure:43452: $? = 0
<br>
configure:43548: result: no
<br>
configure:43562: checking for dirname
<br>
configure:43619: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:43625: $? = 0
<br>
configure:43629: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:43632: $? = 0
<br>
configure:43635: test -s conftest
<br>
configure:43638: $? = 0
<br>
configure:43650: result: yes
<br>
configure:43664: checking if we need -lm for ceil
<br>
configure:43721: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
conftest.c:283: warning: conflicting types for built-in function 'ceil'
<br>
configure:43727: $? = 0
<br>
configure:43731: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:43734: $? = 0
<br>
configure:43737: test -s conftest
<br>
configure:43740: $? = 0
<br>
configure:43836: result: no
<br>
configure:43850: checking for ceil
<br>
configure:43907: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
conftest.c:283: warning: conflicting types for built-in function 'ceil'
<br>
configure:43913: $? = 0
<br>
configure:43917: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:43920: $? = 0
<br>
configure:43923: test -s conftest
<br>
configure:43926: $? = 0
<br>
configure:43938: result: yes
<br>
configure:43973: checking for asprintf
<br>
configure:44030: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:44036: $? = 0
<br>
configure:44040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44043: $? = 0
<br>
configure:44046: test -s conftest
<br>
configure:44049: $? = 0
<br>
configure:44061: result: yes
<br>
configure:43973: checking for snprintf
<br>
configure:44030: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
conftest.c:285: warning: conflicting types for built-in function 'snprintf'
<br>
configure:44036: $? = 0
<br>
configure:44040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44043: $? = 0
<br>
configure:44046: test -s conftest
<br>
configure:44049: $? = 0
<br>
configure:44061: result: yes
<br>
configure:43973: checking for vasprintf
<br>
configure:44030: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:44036: $? = 0
<br>
configure:44040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44043: $? = 0
<br>
configure:44046: test -s conftest
<br>
configure:44049: $? = 0
<br>
configure:44061: result: yes
<br>
configure:43973: checking for vsnprintf
<br>
configure:44030: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
conftest.c:287: warning: conflicting types for built-in function 'vsnprintf'
<br>
configure:44036: $? = 0
<br>
configure:44040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44043: $? = 0
<br>
configure:44046: test -s conftest
<br>
configure:44049: $? = 0
<br>
configure:44061: result: yes
<br>
configure:43973: checking for openpty
<br>
configure:44030: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:44036: $? = 0
<br>
configure:44040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44043: $? = 0
<br>
configure:44046: test -s conftest
<br>
configure:44049: $? = 0
<br>
configure:44061: result: yes
<br>
configure:43973: checking for isatty
<br>
configure:44030: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:44036: $? = 0
<br>
configure:44040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44043: $? = 0
<br>
configure:44046: test -s conftest
<br>
configure:44049: $? = 0
<br>
configure:44061: result: yes
<br>
configure:43973: checking for htonl
<br>
configure:44030: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:44036: $? = 0
<br>
configure:44040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44043: $? = 0
<br>
configure:44046: test -s conftest
<br>
configure:44049: $? = 0
<br>
configure:44061: result: yes
<br>
configure:43973: checking for ntohl
<br>
configure:44030: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:44036: $? = 0
<br>
configure:44040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44043: $? = 0
<br>
configure:44046: test -s conftest
<br>
configure:44049: $? = 0
<br>
configure:44061: result: yes
<br>
configure:43973: checking for htons
<br>
configure:44030: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:44036: $? = 0
<br>
configure:44040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44043: $? = 0
<br>
configure:44046: test -s conftest
<br>
configure:44049: $? = 0
<br>
configure:44061: result: yes
<br>
configure:43973: checking for ntohs
<br>
configure:44030: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:44036: $? = 0
<br>
configure:44040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44043: $? = 0
<br>
configure:44046: test -s conftest
<br>
configure:44049: $? = 0
<br>
configure:44061: result: yes
<br>
configure:43973: checking for getpwuid
<br>
configure:44030: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:44036: $? = 0
<br>
configure:44040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44043: $? = 0
<br>
configure:44046: test -s conftest
<br>
configure:44049: $? = 0
<br>
configure:44061: result: yes
<br>
configure:43973: checking for fork
<br>
configure:44030: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
conftest.c:295: warning: conflicting types for built-in function 'fork'
<br>
configure:44036: $? = 0
<br>
configure:44040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44043: $? = 0
<br>
configure:44046: test -s conftest
<br>
configure:44049: $? = 0
<br>
configure:44061: result: yes
<br>
configure:43973: checking for waitpid
<br>
configure:44030: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:44036: $? = 0
<br>
configure:44040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44043: $? = 0
<br>
configure:44046: test -s conftest
<br>
configure:44049: $? = 0
<br>
configure:44061: result: yes
<br>
configure:43973: checking for execve
<br>
configure:44030: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
conftest.c:297: warning: conflicting types for built-in function 'execve'
<br>
configure:44036: $? = 0
<br>
configure:44040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44043: $? = 0
<br>
configure:44046: test -s conftest
<br>
configure:44049: $? = 0
<br>
configure:44061: result: yes
<br>
configure:43973: checking for pipe
<br>
configure:44030: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:44036: $? = 0
<br>
configure:44040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44043: $? = 0
<br>
configure:44046: test -s conftest
<br>
configure:44049: $? = 0
<br>
configure:44061: result: yes
<br>
configure:43973: checking for ptsname
<br>
configure:44030: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:44036: $? = 0
<br>
configure:44040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44043: $? = 0
<br>
configure:44046: test -s conftest
<br>
configure:44049: $? = 0
<br>
configure:44061: result: yes
<br>
configure:43973: checking for setsid
<br>
configure:44030: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:44036: $? = 0
<br>
configure:44040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44043: $? = 0
<br>
configure:44046: test -s conftest
<br>
configure:44049: $? = 0
<br>
configure:44061: result: yes
<br>
configure:43973: checking for mmap
<br>
configure:44030: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:44036: $? = 0
<br>
configure:44040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44043: $? = 0
<br>
configure:44046: test -s conftest
<br>
configure:44049: $? = 0
<br>
configure:44061: result: yes
<br>
configure:43973: checking for mallopt
<br>
configure:44030: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
/usr/bin/ld: Undefined symbols:
<br>
_mallopt
<br>
collect2: ld returned 1 exit status
<br>
configure:44036: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| /* end confdefs.h.  */
<br>
| /* Define mallopt to an innocuous variant, in case &lt;limits.h&gt; declares mallopt.
<br>
|    For example, HP-UX 11i &lt;limits.h&gt; declares gettimeofday.  */
<br>
| #define mallopt innocuous_mallopt
<br>
| 
<br>
| /* System header to define __stub macros and hopefully few prototypes,
<br>
|     which can conflict with char mallopt (); below.
<br>
|     Prefer &lt;limits.h&gt; to &lt;assert.h&gt; if __STDC__ is defined, since
<br>
|     &lt;limits.h&gt; exists even on freestanding compilers.  */
<br>
| 
<br>
| #ifdef __STDC__
<br>
| # include &lt;limits.h&gt;
<br>
| #else
<br>
| # include &lt;assert.h&gt;
<br>
| #endif
<br>
| 
<br>
| #undef mallopt
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| {
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char mallopt ();
<br>
| /* The GNU C library defines this for functions which it implements
<br>
|     to always fail with ENOSYS.  Some functions are actually named
<br>
|     something starting with __ and the normal name is an alias.  */
<br>
| #if defined (__stub_mallopt) || defined (__stub___mallopt)
<br>
| choke me
<br>
| #else
<br>
| char (*f) () = mallopt;
<br>
| #endif
<br>
| #ifdef __cplusplus
<br>
| }
<br>
| #endif
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| return f != mallopt;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:44061: result: no
<br>
configure:43973: checking for tcgetpgrp
<br>
configure:44030: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:44036: $? = 0
<br>
configure:44040: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44043: $? = 0
<br>
configure:44046: test -s conftest
<br>
configure:44049: $? = 0
<br>
configure:44061: result: yes
<br>
configure:44076: checking whether va_copy is declared
<br>
configure:44101: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44107: $? = 0
<br>
configure:44111: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44114: $? = 0
<br>
configure:44117: test -s conftest.o
<br>
configure:44120: $? = 0
<br>
configure:44131: result: yes
<br>
configure:44145: checking whether __va_copy is declared
<br>
configure:44170: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44176: $? = 0
<br>
configure:44180: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44183: $? = 0
<br>
configure:44186: test -s conftest.o
<br>
configure:44189: $? = 0
<br>
configure:44200: result: yes
<br>
configure:44214: checking whether __func__ is declared
<br>
configure:44238: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44244: $? = 0
<br>
configure:44248: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44251: $? = 0
<br>
configure:44254: test -s conftest.o
<br>
configure:44257: $? = 0
<br>
configure:44268: result: yes
<br>
configure:44357: checking checking for type of MPI_Offset
<br>
configure:44384: result: long long
<br>
configure:44403: checking checking for an MPI datatype for MPI_Offset
<br>
configure:44405: result: MPI_LONG_LONG
<br>
configure:44422: checking whether byte ordering is bigendian
<br>
configure:44449: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44455: $? = 0
<br>
configure:44459: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44462: $? = 0
<br>
configure:44465: test -s conftest.o
<br>
configure:44468: $? = 0
<br>
configure:44492: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44498: $? = 0
<br>
configure:44502: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44505: $? = 0
<br>
configure:44508: test -s conftest.o
<br>
configure:44511: $? = 0
<br>
configure:44633: result: yes
<br>
configure:44654: checking for broken qsort
<br>
configure:44670: result: no
<br>
configure:44749: checking if C compiler and POSIX threads work as is
<br>
configure:44812: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing  -D_REENTRANT  conftest.c  &gt;&amp;5
<br>
configure:44818: $? = 0
<br>
configure:44822: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44825: $? = 0
<br>
configure:44828: test -s conftest
<br>
configure:44831: $? = 0
<br>
configure:44851: result: yes
<br>
configure:44868: checking if C++ compiler and POSIX threads work as is
<br>
configure:44931: g++ -o conftest -O3 -DNDEBUG -finline-functions  -D_REENTRANT  conftest.cc  &gt;&amp;5
<br>
configure:44937: $? = 0
<br>
configure:44941: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44944: $? = 0
<br>
configure:44947: test -s conftest
<br>
configure:44950: $? = 0
<br>
configure:44970: result: yes
<br>
configure:44987: checking if F77 compiler and POSIX threads work as is
<br>
configure:45087: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:45094: $? = 0
<br>
configure:45104: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:45111: $? = 0
<br>
configure:45182: result: yes
<br>
configure:46357: checking for PTHREAD_MUTEX_ERRORCHECK_NP
<br>
configure:46375: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing  -D_REENTRANT  conftest.c  &gt;&amp;5
<br>
conftest.c: In function 'main':
<br>
conftest.c:290: error: 'PTHREAD_MUTEX_ERRORCHECK_NP' undeclared (first use in this function)
<br>
conftest.c:290: error: (Each undeclared identifier is reported only once
<br>
conftest.c:290: error: for each function it appears in.)
<br>
configure:46381: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;pthread.h&gt;
<br>
| int
<br>
| main ()
<br>
| {
<br>
| pthread_mutexattr_settype(NULL, PTHREAD_MUTEX_ERRORCHECK_NP);
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:46405: result: no
<br>
configure:46414: checking for PTHREAD_MUTEX_ERRORCHECK
<br>
configure:46432: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing  -D_REENTRANT  conftest.c  &gt;&amp;5
<br>
configure:46438: $? = 0
<br>
configure:46442: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:46445: $? = 0
<br>
configure:46448: test -s conftest
<br>
configure:46451: $? = 0
<br>
configure:46462: result: yes
<br>
configure:46495: checking for working POSIX threads package
<br>
configure:46498: result: yes
<br>
configure:46537: checking if C compiler and Solaris threads work
<br>
configure:46572: gcc -o conftest  -DNDEBUG  -D_REENTRANT    conftest.c -lthread  &gt;&amp;5
<br>
conftest.c:288:20: error: thread.h: No such file or directory
<br>
conftest.c: In function 'main':
<br>
conftest.c:292: error: 'thread_t' undeclared (first use in this function)
<br>
conftest.c:292: error: (Each undeclared identifier is reported only once
<br>
conftest.c:292: error: for each function it appears in.)
<br>
conftest.c:292: error: parse error before 'th'
<br>
conftest.c:292: error: 'th' undeclared (first use in this function)
<br>
configure:46578: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;thread.h&gt;
<br>
| int
<br>
| main ()
<br>
| {
<br>
| thread_t th; thr_join(th, 0, 0);
<br>
|                  thr_create(0,0,0,0,0,0);
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:46614: result: no
<br>
configure:46635: checking if C++ compiler and Solaris threads work
<br>
configure:46666: g++ -o conftest  -DNDEBUG  -D_REENTRANT    conftest.cc -lthread  &gt;&amp;5
<br>
conftest.cc:288:20: error: thread.h: No such file or directory
<br>
conftest.cc: In function 'int main()':
<br>
conftest.cc:292: error: 'thread_t' was not declared in this scope
<br>
conftest.cc:292: error: expected `;' before 'th'
<br>
conftest.cc:292: error: 'th' was not declared in this scope
<br>
conftest.cc:292: error: 'thr_join' was not declared in this scope
<br>
conftest.cc:293: error: 'thr_create' was not declared in this scope
<br>
configure:46672: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;thread.h&gt;
<br>
| int
<br>
| main ()
<br>
| {
<br>
| thread_t th; thr_join(th, 0, 0);
<br>
|                  thr_create(0,0,0,0,0,0);
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:46708: result: no
<br>
configure:46727: checking if F77 compiler and Solaris threads work
<br>
configure:46783: gcc  -DNDEBUG  -I. -c conftest.c
<br>
conftest.c:3:20: error: thread.h: No such file or directory
<br>
conftest.c: In function 'ompi_pthread':
<br>
conftest.c:11: error: 'thread_t' undeclared (first use in this function)
<br>
conftest.c:11: error: (Each undeclared identifier is reported only once
<br>
conftest.c:11: error: for each function it appears in.)
<br>
conftest.c:11: error: parse error before 'th'
<br>
conftest.c:12: error: 'th' undeclared (first use in this function)
<br>
configure:46790: $? = 1
<br>
configure:46830: here is the C program:
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;thread.h&gt;
<br>
<p><p>#ifdef __cplusplus
<br>
extern &quot;C&quot; {
<br>
#endif
<br>
void ompi_pthread()
<br>
{
<br>
&nbsp;&nbsp;thread_t th;
<br>
&nbsp;&nbsp;thr_join(th, 0, 0);
<br>
&nbsp;&nbsp;thr_create(0,0,0,0,0,0);
<br>
}
<br>
#ifdef __cplusplus
<br>
}
<br>
#endif
<br>
configure:46858: here is the fortran program:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program fpthread
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INTEGER i
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i = 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
configure:46881: result: no
<br>
configure:46910: checking for working Solaris threads package
<br>
configure:46916: result: no
<br>
configure:46924: checking for type of thread support
<br>
configure:46989: result: posix
<br>
configure:47053: checking if threads have different pids (pthreads on linux)
<br>
configure:47104: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing  -D_REENTRANT   conftest.c   &gt;&amp;5
<br>
configure:47107: $? = 0
<br>
configure:47109: ./conftest
<br>
configure:47112: $? = 0
<br>
configure:47130: result: no
<br>
configure:47205: checking if want MPI thread support
<br>
configure:47235: result: no
<br>
configure:47239: checking if want asynchronous progress thread support
<br>
configure:47270: result: no
<br>
configure:47293: checking whether ln -s works
<br>
configure:47297: result: yes
<br>
configure:47319: checking for flex
<br>
configure:47335: found /usr/bin/flex
<br>
configure:47345: result: flex
<br>
configure:47358: checking for yywrap in -lfl
<br>
configure:47388: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT   conftest.c -lfl    &gt;&amp;5
<br>
configure:47394: $? = 0
<br>
configure:47398: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:47401: $? = 0
<br>
configure:47404: test -s conftest
<br>
configure:47407: $? = 0
<br>
configure:47420: result: yes
<br>
configure:47498: checking lex output file root
<br>
configure:47509: flex conftest.l
<br>
configure:47512: $? = 0
<br>
configure:47524: result: lex.yy
<br>
configure:47529: checking whether yytext is a pointer
<br>
configure:47545: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT   conftest.c   -lfl &gt;&amp;5
<br>
configure:47551: $? = 0
<br>
configure:47555: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:47558: $? = 0
<br>
configure:47561: test -s conftest
<br>
configure:47564: $? = 0
<br>
configure:47578: result: yes
<br>
configure:47653: checking if build filesystem is case sensitive
<br>
configure:47669: result: no
<br>
configure:47678: checking if configuring for case sensitive filesystem
<br>
configure:47699: result: no
<br>
configure:47803: checking for subdir args
<br>
configure:47863: result:  '--prefix=/usr' '--with-xgrid'
<br>
configure:47916: checking for gcc
<br>
configure:47932: found /usr/bin/gcc
<br>
configure:47942: result: gcc
<br>
configure:47959: checking dependency style of gcc
<br>
configure:48049: result: gcc3
<br>
configure:48098: checking which components should be disabled
<br>
configure:48129: result: 
<br>
configure:48138: checking which components should be direct-linked into the library
<br>
configure:48183: result: 
<br>
configure:48191: checking which components should be run-time loadable
<br>
configure:48214: result: all
<br>
configure:48224: checking which components should be static
<br>
configure:48244: result: none
<br>
configure:48248: checking for projects containing MCA frameworks
<br>
configure:48250: result: opal, orte, ompi
<br>
configure:48266: checking for frameworks for opal
<br>
configure:48268: result: maffinity, memcpy, memory, paffinity, timer
<br>
configure:48361: checking for no configure components in framework maffinity
<br>
configure:48363: result: first_use
<br>
configure:48365: checking for m4 configure components in framework maffinity
<br>
configure:48367: result: libnuma
<br>
configure:48478: checking for MCA component maffinity:first_use compile mode
<br>
configure:48484: result: dso
<br>
configure:48512: checking if MCA component maffinity:first_use can compile
<br>
configure:48514: result: yes
<br>
configure:48755: checking for MCA component maffinity:libnuma compile mode
<br>
configure:48761: result: dso
<br>
configure:48978: checking numa.h usability
<br>
configure:48990: gcc -c -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT conftest.c &gt;&amp;5
<br>
conftest.c:328:18: error: numa.h: No such file or directory
<br>
configure:48996: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;numa.h&gt;
<br>
configure:49019: result: no
<br>
configure:49023: checking numa.h presence
<br>
configure:49033: gcc -E  -D_REENTRANT conftest.c
<br>
conftest.c:294:18: error: numa.h: No such file or directory
<br>
configure:49039: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;numa.h&gt;
<br>
configure:49059: result: no
<br>
configure:49094: checking for numa.h
<br>
configure:49101: result: no
<br>
configure:49837: checking if MCA component maffinity:libnuma can compile
<br>
configure:49839: result: no
<br>
configure:50439: checking for no configure components in framework memcpy
<br>
configure:50441: result: 
<br>
configure:50443: checking for m4 configure components in framework memcpy
<br>
configure:50445: result: 
<br>
configure:51017: checking for no configure components in framework memory
<br>
configure:51019: result: 
<br>
configure:51021: checking for m4 configure components in framework memory
<br>
configure:51023: result: darwin, ptmalloc2, malloc_hooks
<br>
configure:51109: checking for MCA component memory:darwin compile mode
<br>
configure:51112: result: static
<br>
configure:51153: checking malloc/malloc.h usability
<br>
configure:51165: gcc -c -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT conftest.c &gt;&amp;5
<br>
configure:51171: $? = 0
<br>
configure:51175: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:51178: $? = 0
<br>
configure:51181: test -s conftest.o
<br>
configure:51184: $? = 0
<br>
configure:51194: result: yes
<br>
configure:51198: checking malloc/malloc.h presence
<br>
configure:51208: gcc -E  -D_REENTRANT conftest.c
<br>
configure:51214: $? = 0
<br>
configure:51234: result: yes
<br>
configure:51269: checking for malloc/malloc.h
<br>
configure:51276: result: yes
<br>
configure:51292: checking for malloc_default_zone
<br>
configure:51349: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT   conftest.c   &gt;&amp;5
<br>
configure:51355: $? = 0
<br>
configure:51359: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:51362: $? = 0
<br>
configure:51365: test -s conftest
<br>
configure:51368: $? = 0
<br>
configure:51380: result: yes
<br>
configure:51394: checking for dlsym
<br>
configure:51451: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT   conftest.c   &gt;&amp;5
<br>
configure:51457: $? = 0
<br>
configure:51461: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:51464: $? = 0
<br>
configure:51467: test -s conftest
<br>
configure:51470: $? = 0
<br>
configure:51482: result: yes
<br>
configure:51538: checking if MCA component memory:darwin can compile
<br>
configure:51540: result: yes
<br>
configure:51749: checking for MCA component memory:ptmalloc2 compile mode
<br>
configure:51752: result: static
<br>
configure:52883: checking if MCA component memory:ptmalloc2 can compile
<br>
configure:52885: result: no
<br>
configure:53008: checking for MCA component memory:malloc_hooks compile mode
<br>
configure:53011: result: static
<br>
configure:53580: checking if MCA component memory:malloc_hooks can compile
<br>
configure:53582: result: no
<br>
configure:54185: checking for no configure components in framework paffinity
<br>
configure:54187: result: 
<br>
configure:54189: checking for m4 configure components in framework paffinity
<br>
configure:54191: result: linux, solaris, windows
<br>
configure:54310: checking for MCA component paffinity:linux compile mode
<br>
configure:54316: result: dso
<br>
configure:54327: checking for sched_setaffinity
<br>
configure:54384: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT   -Wl,-u,_munmap -Wl,-multiply_defined,suppress conftest.c   &gt;&amp;5
<br>
/usr/bin/ld: Undefined symbols:
<br>
_sched_setaffinity
<br>
collect2: ld returned 1 exit status
<br>
configure:54390: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| /* end confdefs.h.  */
<br>
| /* Define sched_setaffinity to an innocuous variant, in case &lt;limits.h&gt; declares sched_setaffinity.
<br>
|    For example, HP-UX 11i &lt;limits.h&gt; declares gettimeofday.  */
<br>
| #define sched_setaffinity innocuous_sched_setaffinity
<br>
| 
<br>
| /* System header to define __stub macros and hopefully few prototypes,
<br>
|     which can conflict with char sched_setaffinity (); below.
<br>
|     Prefer &lt;limits.h&gt; to &lt;assert.h&gt; if __STDC__ is defined, since
<br>
|     &lt;limits.h&gt; exists even on freestanding compilers.  */
<br>
| 
<br>
| #ifdef __STDC__
<br>
| # include &lt;limits.h&gt;
<br>
| #else
<br>
| # include &lt;assert.h&gt;
<br>
| #endif
<br>
| 
<br>
| #undef sched_setaffinity
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| {
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char sched_setaffinity ();
<br>
| /* The GNU C library defines this for functions which it implements
<br>
|     to always fail with ENOSYS.  Some functions are actually named
<br>
|     something starting with __ and the normal name is an alias.  */
<br>
| #if defined (__stub_sched_setaffinity) || defined (__stub___sched_setaffinity)
<br>
| choke me
<br>
| #else
<br>
| char (*f) () = sched_setaffinity;
<br>
| #endif
<br>
| #ifdef __cplusplus
<br>
| }
<br>
| #endif
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| return f != sched_setaffinity;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:54415: result: no
<br>
configure:54431: checking for cpu_set_t
<br>
configure:54456: gcc -c -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT conftest.c &gt;&amp;5
<br>
conftest.c: In function 'main':
<br>
conftest.c:300: error: 'cpu_set_t' undeclared (first use in this function)
<br>
conftest.c:300: error: (Each undeclared identifier is reported only once
<br>
conftest.c:300: error: for each function it appears in.)
<br>
conftest.c:300: error: parse error before ')' token
<br>
configure:54462: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;sched.h&gt;
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| if ((cpu_set_t *) 0)
<br>
|   return 0;
<br>
| if (sizeof (cpu_set_t))
<br>
|   return 0;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:54486: result: no
<br>
configure:54741: checking if MCA component paffinity:linux can compile
<br>
configure:54743: result: no
<br>
configure:54899: checking for MCA component paffinity:solaris compile mode
<br>
configure:54905: result: dso
<br>
configure:54915: checking for processor_bind
<br>
configure:54972: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT   -Wl,-u,_munmap -Wl,-multiply_defined,suppress conftest.c   &gt;&amp;5
<br>
/usr/bin/ld: Undefined symbols:
<br>
_processor_bind
<br>
collect2: ld returned 1 exit status
<br>
configure:54978: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| /* end confdefs.h.  */
<br>
| /* Define processor_bind to an innocuous variant, in case &lt;limits.h&gt; declares processor_bind.
<br>
|    For example, HP-UX 11i &lt;limits.h&gt; declares gettimeofday.  */
<br>
| #define processor_bind innocuous_processor_bind
<br>
| 
<br>
| /* System header to define __stub macros and hopefully few prototypes,
<br>
|     which can conflict with char processor_bind (); below.
<br>
|     Prefer &lt;limits.h&gt; to &lt;assert.h&gt; if __STDC__ is defined, since
<br>
|     &lt;limits.h&gt; exists even on freestanding compilers.  */
<br>
| 
<br>
| #ifdef __STDC__
<br>
| # include &lt;limits.h&gt;
<br>
| #else
<br>
| # include &lt;assert.h&gt;
<br>
| #endif
<br>
| 
<br>
| #undef processor_bind
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| {
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char processor_bind ();
<br>
| /* The GNU C library defines this for functions which it implements
<br>
|     to always fail with ENOSYS.  Some functions are actually named
<br>
|     something starting with __ and the normal name is an alias.  */
<br>
| #if defined (__stub_processor_bind) || defined (__stub___processor_bind)
<br>
| choke me
<br>
| #else
<br>
| char (*f) () = processor_bind;
<br>
| #endif
<br>
| #ifdef __cplusplus
<br>
| }
<br>
| #endif
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| return f != processor_bind;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:55003: result: no
<br>
configure:55124: checking if MCA component paffinity:solaris can compile
<br>
configure:55126: result: no
<br>
configure:55282: checking for MCA component paffinity:windows compile mode
<br>
configure:55288: result: dso
<br>
configure:55300: checking for working GetProcessAffinityMask
<br>
configure:55358: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT   -Wl,-u,_munmap -Wl,-multiply_defined,suppress conftest.c   &gt;&amp;5
<br>
conftest.c:295:21: error: windows.h: No such file or directory
<br>
conftest.c: In function 'main':
<br>
conftest.c:297: error: 'DWORD' undeclared (first use in this function)
<br>
conftest.c:297: error: (Each undeclared identifier is reported only once
<br>
conftest.c:297: error: for each function it appears in.)
<br>
conftest.c:297: error: parse error before 'aff'
<br>
conftest.c:298: error: 'NULL' undeclared (first use in this function)
<br>
conftest.c:298: error: 'aff' undeclared (first use in this function)
<br>
conftest.c:298: error: 'mask' undeclared (first use in this function)
<br>
configure:55361: $? = 1
<br>
configure: program exited with status 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;windows.h&gt;
<br>
| int main( int argc, char** argv ) {
<br>
|     DWORD aff, mask;
<br>
|     GetProcessAffinityMask( NULL, &amp;aff, &amp;mask );
<br>
|     return 0; }
<br>
configure:55377: result: no
<br>
configure:55496: checking if MCA component paffinity:windows can compile
<br>
configure:55498: result: no
<br>
configure:56098: checking for no configure components in framework timer
<br>
configure:56100: result: 
<br>
configure:56102: checking for m4 configure components in framework timer
<br>
configure:56104: result: aix, altix, darwin, solaris, windows, linux
<br>
configure:56190: checking for MCA component timer:aix compile mode
<br>
configure:56193: result: static
<br>
configure:56223: checking for time_base_to_time
<br>
configure:56280: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT   -Wl,-u,_munmap -Wl,-multiply_defined,suppress conftest.c   &gt;&amp;5
<br>
/usr/bin/ld: Undefined symbols:
<br>
_time_base_to_time
<br>
collect2: ld returned 1 exit status
<br>
configure:56286: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| /* end confdefs.h.  */
<br>
| /* Define time_base_to_time to an innocuous variant, in case &lt;limits.h&gt; declares time_base_to_time.
<br>
|    For example, HP-UX 11i &lt;limits.h&gt; declares gettimeofday.  */
<br>
| #define time_base_to_time innocuous_time_base_to_time
<br>
| 
<br>
| /* System header to define __stub macros and hopefully few prototypes,
<br>
|     which can conflict with char time_base_to_time (); below.
<br>
|     Prefer &lt;limits.h&gt; to &lt;assert.h&gt; if __STDC__ is defined, since
<br>
|     &lt;limits.h&gt; exists even on freestanding compilers.  */
<br>
| 
<br>
| #ifdef __STDC__
<br>
| # include &lt;limits.h&gt;
<br>
| #else
<br>
| # include &lt;assert.h&gt;
<br>
| #endif
<br>
| 
<br>
| #undef time_base_to_time
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| {
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char time_base_to_time ();
<br>
| /* The GNU C library defines this for functions which it implements
<br>
|     to always fail with ENOSYS.  Some functions are actually named
<br>
|     something starting with __ and the normal name is an alias.  */
<br>
| #if defined (__stub_time_base_to_time) || defined (__stub___time_base_to_time)
<br>
| choke me
<br>
| #else
<br>
| char (*f) () = time_base_to_time;
<br>
| #endif
<br>
| #ifdef __cplusplus
<br>
| }
<br>
| #endif
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| return f != time_base_to_time;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:56311: result: no
<br>
configure:56789: checking if MCA component timer:aix can compile
<br>
configure:56791: result: no
<br>
configure:56914: checking for MCA component timer:altix compile mode
<br>
configure:56917: result: static
<br>
configure:56957: checking sn/mmtimer.h usability
<br>
configure:56969: gcc -c -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT conftest.c &gt;&amp;5
<br>
conftest.c:329:24: error: sn/mmtimer.h: No such file or directory
<br>
configure:56975: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;sn/mmtimer.h&gt;
<br>
configure:56998: result: no
<br>
configure:57002: checking sn/mmtimer.h presence
<br>
configure:57012: gcc -E  -D_REENTRANT conftest.c
<br>
conftest.c:295:24: error: sn/mmtimer.h: No such file or directory
<br>
configure:57018: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;sn/mmtimer.h&gt;
<br>
configure:57038: result: no
<br>
configure:57073: checking for sn/mmtimer.h
<br>
configure:57080: result: no
<br>
configure:57450: checking if MCA component timer:altix can compile
<br>
configure:57452: result: no
<br>
configure:57575: checking for MCA component timer:darwin compile mode
<br>
configure:57578: result: static
<br>
configure:57622: checking mach/mach_time.h usability
<br>
configure:57634: gcc -c -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT conftest.c &gt;&amp;5
<br>
configure:57640: $? = 0
<br>
configure:57644: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:57647: $? = 0
<br>
configure:57650: test -s conftest.o
<br>
configure:57653: $? = 0
<br>
configure:57663: result: yes
<br>
configure:57667: checking mach/mach_time.h presence
<br>
configure:57677: gcc -E  -D_REENTRANT conftest.c
<br>
configure:57683: $? = 0
<br>
configure:57703: result: yes
<br>
configure:57738: checking for mach/mach_time.h
<br>
configure:57745: result: yes
<br>
configure:57758: checking for mach_absolute_time
<br>
configure:57815: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT   -Wl,-u,_munmap -Wl,-multiply_defined,suppress conftest.c   &gt;&amp;5
<br>
configure:57821: $? = 0
<br>
configure:57825: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:57828: $? = 0
<br>
configure:57831: test -s conftest
<br>
configure:57834: $? = 0
<br>
configure:57846: result: yes
<br>
configure:57899: checking if MCA component timer:darwin can compile
<br>
configure:57901: result: yes
<br>
configure:58110: checking for MCA component timer:solaris compile mode
<br>
configure:58113: result: static
<br>
configure:58370: checking if MCA component timer:solaris can compile
<br>
configure:58372: result: no
<br>
configure:58495: checking for MCA component timer:windows compile mode
<br>
configure:58498: result: static
<br>
configure:58705: checking if MCA component timer:windows can compile
<br>
configure:58707: result: no
<br>
configure:58830: checking for MCA component timer:linux compile mode
<br>
configure:58833: result: static
<br>
configure:59000: checking if MCA component timer:linux can compile
<br>
configure:59002: result: no
<br>
configure:59553: checking for frameworks for orte
<br>
configure:59555: result: errmgr, gpr, iof, ns, oob, pls, ras, rds, rmaps, rmgr, rml, schema, sds, soh
<br>
configure:59648: checking for no configure components in framework errmgr
<br>
configure:59650: result: 
<br>
configure:59652: checking for m4 configure components in framework errmgr
<br>
configure:59654: result: 
<br>
configure:60213: checking for no configure components in framework gpr
<br>
configure:60215: result: null, proxy, replica
<br>
configure:60217: checking for m4 configure components in framework gpr
<br>
configure:60219: result: 
<br>
configure:60330: checking for MCA component gpr:null compile mode
<br>
configure:60336: result: dso
<br>
configure:60364: checking if MCA component gpr:null can compile
<br>
configure:60366: result: yes
<br>
configure:60599: checking for MCA component gpr:proxy compile mode
<br>
configure:60605: result: dso
<br>
configure:60633: checking if MCA component gpr:proxy can compile
<br>
configure:60635: result: yes
<br>
configure:60868: checking for MCA component gpr:replica compile mode
<br>
configure:60874: result: dso
<br>
configure:60902: checking if MCA component gpr:replica can compile
<br>
configure:60904: result: yes
<br>
configure:61585: checking for no configure components in framework iof
<br>
configure:61587: result: proxy, svc
<br>
configure:61589: checking for m4 configure components in framework iof
<br>
configure:61591: result: 
<br>
configure:61702: checking for MCA component iof:proxy compile mode
<br>
configure:61708: result: dso
<br>
configure:61736: checking if MCA component iof:proxy can compile
<br>
configure:61738: result: yes
<br>
configure:61971: checking for MCA component iof:svc compile mode
<br>
configure:61977: result: dso
<br>
configure:62005: checking if MCA component iof:svc can compile
<br>
configure:62007: result: yes
<br>
configure:62688: checking for no configure components in framework ns
<br>
configure:62690: result: proxy, replica
<br>
configure:62692: checking for m4 configure components in framework ns
<br>
configure:62694: result: 
<br>
configure:62805: checking for MCA component ns:proxy compile mode
<br>
configure:62811: result: dso
<br>
configure:62839: checking if MCA component ns:proxy can compile
<br>
configure:62841: result: yes
<br>
configure:63074: checking for MCA component ns:replica compile mode
<br>
configure:63080: result: dso
<br>
configure:63108: checking if MCA component ns:replica can compile
<br>
configure:63110: result: yes
<br>
configure:63791: checking for no configure components in framework oob
<br>
configure:63793: result: 
<br>
configure:63795: checking for m4 configure components in framework oob
<br>
configure:63797: result: tcp
<br>
configure:63916: checking for MCA component oob:tcp compile mode
<br>
configure:63922: result: dso
<br>
configure:63932: checking for struct sockaddr_in
<br>
configure:63990: result: yes
<br>
configure:64030: checking if MCA component oob:tcp can compile
<br>
configure:64032: result: yes
<br>
configure:64714: checking for no configure components in framework pls
<br>
configure:64716: result: 
<br>
configure:64718: checking for m4 configure components in framework pls
<br>
configure:64720: result: bproc, bproc_orted, bproc_seed, fork, poe, rsh, slurm, tm, xgrid
<br>
configure:64839: checking for MCA component pls:bproc compile mode
<br>
configure:64845: result: dso
<br>
configure:64889: checking sys/bproc.h usability
<br>
configure:64901: gcc -c -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT conftest.c &gt;&amp;5
<br>
conftest.c:331:23: error: sys/bproc.h: No such file or directory
<br>
configure:64907: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;sys/bproc.h&gt;
<br>
configure:64930: result: no
<br>
configure:64934: checking sys/bproc.h presence
<br>
configure:64944: gcc -E  -D_REENTRANT conftest.c
<br>
conftest.c:297:23: error: sys/bproc.h: No such file or directory
<br>
configure:64950: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;sys/bproc.h&gt;
<br>
configure:64970: result: no
<br>
configure:65005: checking for sys/bproc.h
<br>
configure:65012: result: no
<br>
configure:65336: checking if MCA component pls:bproc can compile
<br>
configure:65338: result: no
<br>
configure:65494: checking for MCA component pls:bproc_orted compile mode
<br>
configure:65500: result: dso
<br>
configure:65535: checking for sys/bproc.h
<br>
configure:65540: result: no
<br>
configure:65983: checking if MCA component pls:bproc_orted can compile
<br>
configure:65985: result: no
<br>
configure:66141: checking for MCA component pls:bproc_seed compile mode
<br>
configure:66147: result: dso
<br>
configure:66183: checking for sys/bproc.h
<br>
configure:66188: result: no
<br>
configure:66636: checking if MCA component pls:bproc_seed can compile
<br>
configure:66638: result: no
<br>
configure:66794: checking for MCA component pls:fork compile mode
<br>
configure:66800: result: dso
<br>
configure:66809: checking for fork
<br>
configure:66897: result: yes
<br>
configure:66932: checking if MCA component pls:fork can compile
<br>
configure:66934: result: yes
<br>
configure:67176: checking for MCA component pls:poe compile mode
<br>
configure:67182: result: dso
<br>
configure:67194: checking if on AIX
<br>
configure:67204: result: no
<br>
configure:67325: checking if MCA component pls:poe can compile
<br>
configure:67327: result: no
<br>
configure:67483: checking for MCA component pls:rsh compile mode
<br>
configure:67489: result: dso
<br>
configure:67498: checking for fork
<br>
configure:67586: result: yes
<br>
configure:67621: checking if MCA component pls:rsh can compile
<br>
configure:67623: result: yes
<br>
configure:67865: checking for MCA component pls:slurm compile mode
<br>
configure:67871: result: dso
<br>
configure:68341: checking if MCA component pls:slurm can compile
<br>
configure:68343: result: no
<br>
configure:68499: checking for MCA component pls:tm compile mode
<br>
configure:68505: result: dso
<br>
configure:68733: checking tm.h usability
<br>
configure:68745: gcc -c -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT conftest.c &gt;&amp;5
<br>
conftest.c:331:16: error: tm.h: No such file or directory
<br>
configure:68751: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;tm.h&gt;
<br>
configure:68774: result: no
<br>
configure:68778: checking tm.h presence
<br>
configure:68788: gcc -E  -D_REENTRANT conftest.c
<br>
conftest.c:297:16: error: tm.h: No such file or directory
<br>
configure:68794: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;tm.h&gt;
<br>
configure:68814: result: no
<br>
configure:68849: checking for tm.h
<br>
configure:68856: result: no
<br>
configure:69653: checking tm.h usability
<br>
configure:69665: gcc -c -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT conftest.c &gt;&amp;5
<br>
conftest.c:331:16: error: tm.h: No such file or directory
<br>
configure:69671: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;tm.h&gt;
<br>
configure:69694: result: no
<br>
configure:69698: checking tm.h presence
<br>
configure:69708: gcc -E  -D_REENTRANT conftest.c
<br>
conftest.c:297:16: error: tm.h: No such file or directory
<br>
configure:69714: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;tm.h&gt;
<br>
configure:69734: result: no
<br>
configure:69769: checking for tm.h
<br>
configure:69776: result: no
<br>
configure:70517: checking if MCA component pls:tm can compile
<br>
configure:70519: result: no
<br>
configure:70675: checking for MCA component pls:xgrid compile mode
<br>
configure:70681: result: dso
<br>
configure:70700: checking for XGridFoundation Framework
<br>
configure:70739: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing  -framework XGridFoundation  -D_REENTRANT   -Wl,-u,_munmap -Wl,-multiply_defined,suppress conftest.c   &gt;&amp;5
<br>
configure:70745: $? = 0
<br>
configure:70749: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:70752: $? = 0
<br>
configure:70755: test -s conftest
<br>
configure:70758: $? = 0
<br>
configure:70784: result: yes
<br>
configure:70846: checking if MCA component pls:xgrid can compile
<br>
configure:70848: result: yes
<br>
configure:71530: checking for no configure components in framework ras
<br>
configure:71532: result: dash_host, hostfile, localhost
<br>
configure:71534: checking for m4 configure components in framework ras
<br>
configure:71536: result: bjs, lsf_bproc, poe, slurm, tm, xgrid
<br>
configure:71647: checking for MCA component ras:dash_host compile mode
<br>
configure:71653: result: dso
<br>
configure:71681: checking if MCA component ras:dash_host can compile
<br>
configure:71683: result: yes
<br>
configure:71916: checking for MCA component ras:hostfile compile mode
<br>
configure:71922: result: dso
<br>
configure:71950: checking if MCA component ras:hostfile can compile
<br>
configure:71952: result: yes
<br>
configure:72185: checking for MCA component ras:localhost compile mode
<br>
configure:72191: result: dso
<br>
configure:72219: checking if MCA component ras:localhost can compile
<br>
configure:72221: result: yes
<br>
configure:72462: checking for MCA component ras:bjs compile mode
<br>
configure:72468: result: dso
<br>
configure:72503: checking for sys/bproc.h
<br>
configure:72508: result: no
<br>
configure:72951: checking if MCA component ras:bjs can compile
<br>
configure:72953: result: no
<br>
configure:73109: checking for MCA component ras:lsf_bproc compile mode
<br>
configure:73115: result: dso
<br>
configure:73150: checking for sys/bproc.h
<br>
configure:73155: result: no
<br>
configure:73598: checking if MCA component ras:lsf_bproc can compile
<br>
configure:73600: result: no
<br>
configure:73756: checking for MCA component ras:poe compile mode
<br>
configure:73762: result: dso
<br>
configure:73774: checking if on AIX
<br>
configure:73784: result: no
<br>
configure:73905: checking if MCA component ras:poe can compile
<br>
configure:73907: result: no
<br>
configure:74063: checking for MCA component ras:slurm compile mode
<br>
configure:74069: result: dso
<br>
configure:74539: checking if MCA component ras:slurm can compile
<br>
configure:74541: result: no
<br>
configure:74697: checking for MCA component ras:tm compile mode
<br>
configure:74703: result: dso
<br>
configure:74931: checking tm.h usability
<br>
configure:74943: gcc -c -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT conftest.c &gt;&amp;5
<br>
conftest.c:331:16: error: tm.h: No such file or directory
<br>
configure:74949: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;tm.h&gt;
<br>
configure:74972: result: no
<br>
configure:74976: checking tm.h presence
<br>
configure:74986: gcc -E  -D_REENTRANT conftest.c
<br>
conftest.c:297:16: error: tm.h: No such file or directory
<br>
configure:74992: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;tm.h&gt;
<br>
configure:75012: result: no
<br>
configure:75047: checking for tm.h
<br>
configure:75054: result: no
<br>
configure:75851: checking tm.h usability
<br>
configure:75863: gcc -c -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT conftest.c &gt;&amp;5
<br>
conftest.c:331:16: error: tm.h: No such file or directory
<br>
configure:75869: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;tm.h&gt;
<br>
configure:75892: result: no
<br>
configure:75896: checking tm.h presence
<br>
configure:75906: gcc -E  -D_REENTRANT conftest.c
<br>
conftest.c:297:16: error: tm.h: No such file or directory
<br>
configure:75912: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;tm.h&gt;
<br>
configure:75932: result: no
<br>
configure:75967: checking for tm.h
<br>
configure:75974: result: no
<br>
configure:76715: checking if MCA component ras:tm can compile
<br>
configure:76717: result: no
<br>
configure:76873: checking for MCA component ras:xgrid compile mode
<br>
configure:76879: result: dso
<br>
configure:76898: checking for XGridFoundation Framework
<br>
configure:76982: result: yes
<br>
configure:77039: checking if MCA component ras:xgrid can compile
<br>
configure:77041: result: yes
<br>
configure:77723: checking for no configure components in framework rds
<br>
configure:77725: result: hostfile, resfile
<br>
configure:77727: checking for m4 configure components in framework rds
<br>
configure:77729: result: 
<br>
configure:77840: checking for MCA component rds:hostfile compile mode
<br>
configure:77846: result: dso
<br>
configure:77874: checking if MCA component rds:hostfile can compile
<br>
configure:77876: result: yes
<br>
configure:78109: checking for MCA component rds:resfile compile mode
<br>
configure:78115: result: dso
<br>
configure:78143: checking if MCA component rds:resfile can compile
<br>
configure:78145: result: yes
<br>
configure:78826: checking for no configure components in framework rmaps
<br>
configure:78828: result: round_robin
<br>
configure:78830: checking for m4 configure components in framework rmaps
<br>
configure:78832: result: 
<br>
configure:78943: checking for MCA component rmaps:round_robin compile mode
<br>
configure:78949: result: dso
<br>
configure:78977: checking if MCA component rmaps:round_robin can compile
<br>
configure:78979: result: yes
<br>
configure:79660: checking for no configure components in framework rmgr
<br>
configure:79662: result: proxy, urm
<br>
configure:79664: checking for m4 configure components in framework rmgr
<br>
configure:79666: result: cnos
<br>
configure:79777: checking for MCA component rmgr:proxy compile mode
<br>
configure:79783: result: dso
<br>
configure:79811: checking if MCA component rmgr:proxy can compile
<br>
configure:79813: result: yes
<br>
configure:80046: checking for MCA component rmgr:urm compile mode
<br>
configure:80052: result: dso
<br>
configure:80080: checking if MCA component rmgr:urm can compile
<br>
configure:80082: result: yes
<br>
configure:80323: checking for MCA component rmgr:cnos compile mode
<br>
configure:80329: result: dso
<br>
configure:80344: checking for cnos_barrier
<br>
configure:80401: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT   -Wl,-u,_munmap -Wl,-multiply_defined,suppress conftest.c   &gt;&amp;5
<br>
/usr/bin/ld: Undefined symbols:
<br>
_cnos_barrier
<br>
collect2: ld returned 1 exit status
<br>
configure:80407: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| /* end confdefs.h.  */
<br>
| /* Define cnos_barrier to an innocuous variant, in case &lt;limits.h&gt; declares cnos_barrier.
<br>
|    For example, HP-UX 11i &lt;limits.h&gt; declares gettimeofday.  */
<br>
| #define cnos_barrier innocuous_cnos_barrier
<br>
| 
<br>
| /* System header to define __stub macros and hopefully few prototypes,
<br>
|     which can conflict with char cnos_barrier (); below.
<br>
|     Prefer &lt;limits.h&gt; to &lt;assert.h&gt; if __STDC__ is defined, since
<br>
|     &lt;limits.h&gt; exists even on freestanding compilers.  */
<br>
| 
<br>
| #ifdef __STDC__
<br>
| # include &lt;limits.h&gt;
<br>
| #else
<br>
| # include &lt;assert.h&gt;
<br>
| #endif
<br>
| 
<br>
| #undef cnos_barrier
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| {
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char cnos_barrier ();
<br>
| /* The GNU C library defines this for functions which it implements
<br>
|     to always fail with ENOSYS.  Some functions are actually named
<br>
|     something starting with __ and the normal name is an alias.  */
<br>
| #if defined (__stub_cnos_barrier) || defined (__stub___cnos_barrier)
<br>
| choke me
<br>
| #else
<br>
| char (*f) () = cnos_barrier;
<br>
| #endif
<br>
| #ifdef __cplusplus
<br>
| }
<br>
| #endif
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| return f != cnos_barrier;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:80432: result: no
<br>
configure:80447: checking for killrank
<br>
configure:80504: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT   -Wl,-u,_munmap -Wl,-multiply_defined,suppress conftest.c   &gt;&amp;5
<br>
/usr/bin/ld: Undefined symbols:
<br>
_killrank
<br>
collect2: ld returned 1 exit status
<br>
configure:80510: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| /* end confdefs.h.  */
<br>
| /* Define killrank to an innocuous variant, in case &lt;limits.h&gt; declares killrank.
<br>
|    For example, HP-UX 11i &lt;limits.h&gt; declares gettimeofday.  */
<br>
| #define killrank innocuous_killrank
<br>
| 
<br>
| /* System header to define __stub macros and hopefully few prototypes,
<br>
|     which can conflict with char killrank (); below.
<br>
|     Prefer &lt;limits.h&gt; to &lt;assert.h&gt; if __STDC__ is defined, since
<br>
|     &lt;limits.h&gt; exists even on freestanding compilers.  */
<br>
| 
<br>
| #ifdef __STDC__
<br>
| # include &lt;limits.h&gt;
<br>
| #else
<br>
| # include &lt;assert.h&gt;
<br>
| #endif
<br>
| 
<br>
| #undef killrank
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| {
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char killrank ();
<br>
| /* The GNU C library defines this for functions which it implements
<br>
|     to always fail with ENOSYS.  Some functions are actually named
<br>
|     something starting with __ and the normal name is an alias.  */
<br>
| #if defined (__stub_killrank) || defined (__stub___killrank)
<br>
| choke me
<br>
| #else
<br>
| char (*f) () = killrank;
<br>
| #endif
<br>
| #ifdef __cplusplus
<br>
| }
<br>
| #endif
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| return f != killrank;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:80535: result: no
<br>
configure:80447: checking for cnos_pm_barrier
<br>
configure:80504: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT   -Wl,-u,_munmap -Wl,-multiply_defined,suppress conftest.c   &gt;&amp;5
<br>
/usr/bin/ld: Undefined symbols:
<br>
_cnos_pm_barrier
<br>
collect2: ld returned 1 exit status
<br>
configure:80510: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| /* end confdefs.h.  */
<br>
| /* Define cnos_pm_barrier to an innocuous variant, in case &lt;limits.h&gt; declares cnos_pm_barrier.
<br>
|    For example, HP-UX 11i &lt;limits.h&gt; declares gettimeofday.  */
<br>
| #define cnos_pm_barrier innocuous_cnos_pm_barrier
<br>
| 
<br>
| /* System header to define __stub macros and hopefully few prototypes,
<br>
|     which can conflict with char cnos_pm_barrier (); below.
<br>
|     Prefer &lt;limits.h&gt; to &lt;assert.h&gt; if __STDC__ is defined, since
<br>
|     &lt;limits.h&gt; exists even on freestanding compilers.  */
<br>
| 
<br>
| #ifdef __STDC__
<br>
| # include &lt;limits.h&gt;
<br>
| #else
<br>
| # include &lt;assert.h&gt;
<br>
| #endif
<br>
| 
<br>
| #undef cnos_pm_barrier
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| {
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char cnos_pm_barrier ();
<br>
| /* The GNU C library defines this for functions which it implements
<br>
|     to always fail with ENOSYS.  Some functions are actually named
<br>
|     something starting with __ and the normal name is an alias.  */
<br>
| #if defined (__stub_cnos_pm_barrier) || defined (__stub___cnos_pm_barrier)
<br>
| choke me
<br>
| #else
<br>
| char (*f) () = cnos_pm_barrier;
<br>
| #endif
<br>
| #ifdef __cplusplus
<br>
| }
<br>
| #endif
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| return f != cnos_pm_barrier;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:80535: result: no
<br>
configure:80665: checking if MCA component rmgr:cnos can compile
<br>
configure:80667: result: no
<br>
configure:81263: checking for no configure components in framework rml
<br>
configure:81265: result: oob
<br>
configure:81267: checking for m4 configure components in framework rml
<br>
configure:81269: result: cnos
<br>
configure:81380: checking for MCA component rml:oob compile mode
<br>
configure:81386: result: dso
<br>
configure:81414: checking if MCA component rml:oob can compile
<br>
configure:81416: result: yes
<br>
configure:81657: checking for MCA component rml:cnos compile mode
<br>
configure:81663: result: dso
<br>
configure:81679: checking for cnos_barrier
<br>
configure:81767: result: no
<br>
configure:81903: checking if MCA component rml:cnos can compile
<br>
configure:81905: result: no
<br>
configure:82501: checking for no configure components in framework schema
<br>
configure:82503: result: 
<br>
configure:82505: checking for m4 configure components in framework schema
<br>
configure:82507: result: 
<br>
configure:83066: checking for no configure components in framework sds
<br>
configure:83068: result: env, seed, singleton
<br>
configure:83070: checking for m4 configure components in framework sds
<br>
configure:83072: result: bproc, cnos, pipe, portals_utcp, slurm
<br>
configure:83183: checking for MCA component sds:env compile mode
<br>
configure:83189: result: dso
<br>
configure:83217: checking if MCA component sds:env can compile
<br>
configure:83219: result: yes
<br>
configure:83452: checking for MCA component sds:seed compile mode
<br>
configure:83458: result: dso
<br>
configure:83486: checking if MCA component sds:seed can compile
<br>
configure:83488: result: yes
<br>
configure:83721: checking for MCA component sds:singleton compile mode
<br>
configure:83727: result: dso
<br>
configure:83755: checking if MCA component sds:singleton can compile
<br>
configure:83757: result: yes
<br>
configure:83998: checking for MCA component sds:bproc compile mode
<br>
configure:84004: result: dso
<br>
configure:84039: checking for sys/bproc.h
<br>
configure:84044: result: no
<br>
configure:84485: checking if MCA component sds:bproc can compile
<br>
configure:84487: result: no
<br>
configure:84643: checking for MCA component sds:cnos compile mode
<br>
configure:84649: result: dso
<br>
configure:84659: checking for cnos_get_rank
<br>
configure:84716: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT   -Wl,-u,_munmap -Wl,-multiply_defined,suppress conftest.c   &gt;&amp;5
<br>
/usr/bin/ld: Undefined symbols:
<br>
_cnos_get_rank
<br>
collect2: ld returned 1 exit status
<br>
configure:84722: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| /* Define cnos_get_rank to an innocuous variant, in case &lt;limits.h&gt; declares cnos_get_rank.
<br>
|    For example, HP-UX 11i &lt;limits.h&gt; declares gettimeofday.  */
<br>
| #define cnos_get_rank innocuous_cnos_get_rank
<br>
| 
<br>
| /* System header to define __stub macros and hopefully few prototypes,
<br>
|     which can conflict with char cnos_get_rank (); below.
<br>
|     Prefer &lt;limits.h&gt; to &lt;assert.h&gt; if __STDC__ is defined, since
<br>
|     &lt;limits.h&gt; exists even on freestanding compilers.  */
<br>
| 
<br>
| #ifdef __STDC__
<br>
| # include &lt;limits.h&gt;
<br>
| #else
<br>
| # include &lt;assert.h&gt;
<br>
| #endif
<br>
| 
<br>
| #undef cnos_get_rank
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| {
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char cnos_get_rank ();
<br>
| /* The GNU C library defines this for functions which it implements
<br>
|     to always fail with ENOSYS.  Some functions are actually named
<br>
|     something starting with __ and the normal name is an alias.  */
<br>
| #if defined (__stub_cnos_get_rank) || defined (__stub___cnos_get_rank)
<br>
| choke me
<br>
| #else
<br>
| char (*f) () = cnos_get_rank;
<br>
| #endif
<br>
| #ifdef __cplusplus
<br>
| }
<br>
| #endif
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| return f != cnos_get_rank;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:84747: result: no
<br>
configure:84868: checking if MCA component sds:cnos can compile
<br>
configure:84870: result: no
<br>
configure:85026: checking for MCA component sds:pipe compile mode
<br>
configure:85032: result: dso
<br>
configure:85042: checking for pipe
<br>
configure:85130: result: yes
<br>
configure:85165: checking if MCA component sds:pipe can compile
<br>
configure:85167: result: yes
<br>
configure:85409: checking for MCA component sds:portals_utcp compile mode
<br>
configure:85415: result: dso
<br>
configure:85470: checking for PtlGetRank
<br>
configure:85498: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT   -Wl,-u,_munmap -Wl,-multiply_defined,suppress conftest.c   -lp3utcp -lp3api -lp3lib -lp3rt -lp3utcp &gt;&amp;5
<br>
conftest.c:298:22: error: portals3.h: No such file or directory
<br>
conftest.c:300:24: error: p3nal_utcp.h: No such file or directory
<br>
conftest.c:301:23: error: p3rt/p3rt.h: No such file or directory
<br>
conftest.c:302:25: error: p3api/debug.h: No such file or directory
<br>
conftest.c: In function 'main':
<br>
conftest.c:311: error: 'PTL_IFACE_DEFAULT' undeclared (first use in this function)
<br>
conftest.c:311: error: (Each undeclared identifier is reported only once
<br>
conftest.c:311: error: for each function it appears in.)
<br>
conftest.c:311: error: 'PTL_PID_ANY' undeclared (first use in this function)
<br>
conftest.c:312: error: 'PTL_INVALID_HANDLE' undeclared (first use in this function)
<br>
configure:85504: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;portals3.h&gt;
<br>
| #include &lt;stdio.h&gt;
<br>
| #include &lt;p3nal_utcp.h&gt;
<br>
| #include &lt;p3rt/p3rt.h&gt;
<br>
| #include &lt;p3api/debug.h&gt;
<br>
| FILE *utcp_api_out;
<br>
| FILE *utcp_lib_out;
<br>
| int
<br>
| main ()
<br>
| {
<br>
| unsigned int nprocs, rank;
<br>
| int dummy;
<br>
| PtlInit(&amp;dummy);
<br>
| PtlNIInit(PTL_IFACE_DEFAULT, PTL_PID_ANY, NULL, NULL, NULL);
<br>
| PtlGetRank(PTL_INVALID_HANDLE, &amp;rank, &amp;nprocs);
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:85526: result: no
<br>
configure:85655: checking if MCA component sds:portals_utcp can compile
<br>
configure:85657: result: no
<br>
configure:85813: checking for MCA component sds:slurm compile mode
<br>
configure:85819: result: dso
<br>
configure:86289: checking if MCA component sds:slurm can compile
<br>
configure:86291: result: no
<br>
configure:86887: checking for no configure components in framework soh
<br>
configure:86889: result: 
<br>
configure:86891: checking for m4 configure components in framework soh
<br>
configure:86893: result: bproc
<br>
configure:87012: checking for MCA component soh:bproc compile mode
<br>
configure:87018: result: dso
<br>
configure:87053: checking for sys/bproc.h
<br>
configure:87058: result: no
<br>
configure:87556: checking if MCA component soh:bproc can compile
<br>
configure:87558: result: no
<br>
configure:88100: checking for frameworks for ompi
<br>
configure:88102: result: allocator, bml, btl, coll, common, io, mpool, osc, pml, rcache, topo
<br>
configure:88195: checking for no configure components in framework allocator
<br>
configure:88197: result: basic, bucket
<br>
configure:88199: checking for m4 configure components in framework allocator
<br>
configure:88201: result: 
<br>
configure:88312: checking for MCA component allocator:basic compile mode
<br>
configure:88318: result: dso
<br>
configure:88346: checking if MCA component allocator:basic can compile
<br>
configure:88348: result: yes
<br>
configure:88581: checking for MCA component allocator:bucket compile mode
<br>
configure:88587: result: dso
<br>
configure:88615: checking if MCA component allocator:bucket can compile
<br>
configure:88617: result: yes
<br>
configure:89298: checking for no configure components in framework bml
<br>
configure:89300: result: r2
<br>
configure:89302: checking for m4 configure components in framework bml
<br>
configure:89304: result: 
<br>
configure:89415: checking for MCA component bml:r2 compile mode
<br>
configure:89421: result: dso
<br>
configure:89449: checking if MCA component bml:r2 can compile
<br>
configure:89451: result: yes
<br>
configure:90132: checking for no configure components in framework btl
<br>
configure:90134: result: self, sm
<br>
configure:90136: checking for m4 configure components in framework btl
<br>
configure:90138: result: gm, mvapi, mx, openib, portals, tcp
<br>
configure:90249: checking for MCA component btl:self compile mode
<br>
configure:90255: result: dso
<br>
configure:90283: checking if MCA component btl:self can compile
<br>
configure:90285: result: yes
<br>
configure:90518: checking for MCA component btl:sm compile mode
<br>
configure:90524: result: dso
<br>
configure:90552: checking if MCA component btl:sm can compile
<br>
configure:90554: result: yes
<br>
configure:90795: checking for MCA component btl:gm compile mode
<br>
configure:90801: result: dso
<br>
configure:91027: checking gm.h usability
<br>
configure:91039: gcc -c -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT conftest.c &gt;&amp;5
<br>
conftest.c:332:16: error: gm.h: No such file or directory
<br>
configure:91045: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;gm.h&gt;
<br>
configure:91068: result: no
<br>
configure:91072: checking gm.h presence
<br>
configure:91082: gcc -E  -D_REENTRANT conftest.c
<br>
conftest.c:298:16: error: gm.h: No such file or directory
<br>
configure:91088: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;gm.h&gt;
<br>
configure:91108: result: no
<br>
configure:91143: checking for gm.h
<br>
configure:91150: result: no
<br>
configure:92222: checking if MCA component btl:gm can compile
<br>
configure:92224: result: no
<br>
configure:92380: checking for MCA component btl:mvapi compile mode
<br>
configure:92386: result: dso
<br>
configure:92631: checking vapi.h usability
<br>
configure:92643: gcc -c -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT conftest.c &gt;&amp;5
<br>
conftest.c:332:18: error: vapi.h: No such file or directory
<br>
configure:92649: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;vapi.h&gt;
<br>
configure:92672: result: no
<br>
configure:92676: checking vapi.h presence
<br>
configure:92686: gcc -E  -D_REENTRANT conftest.c
<br>
conftest.c:298:18: error: vapi.h: No such file or directory
<br>
configure:92692: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;vapi.h&gt;
<br>
configure:92712: result: no
<br>
configure:92747: checking for vapi.h
<br>
configure:92754: result: no
<br>
configure:93546: checking vapi.h usability
<br>
configure:93558: gcc -c -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT conftest.c &gt;&amp;5
<br>
conftest.c:332:18: error: vapi.h: No such file or directory
<br>
configure:93564: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;vapi.h&gt;
<br>
configure:93587: result: no
<br>
configure:93591: checking vapi.h presence
<br>
configure:93601: gcc -E  -D_REENTRANT conftest.c
<br>
conftest.c:298:18: error: vapi.h: No such file or directory
<br>
configure:93607: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;vapi.h&gt;
<br>
configure:93627: result: no
<br>
configure:93662: checking for vapi.h
<br>
configure:93669: result: no
<br>
configure:94437: checking if MCA component btl:mvapi can compile
<br>
configure:94439: result: no
<br>
configure:94595: checking for MCA component btl:mx compile mode
<br>
configure:94601: result: dso
<br>
configure:94831: checking myriexpress.h usability
<br>
configure:94843: gcc -c -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT conftest.c &gt;&amp;5
<br>
conftest.c:332:25: error: myriexpress.h: No such file or directory
<br>
configure:94849: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;myriexpress.h&gt;
<br>
configure:94872: result: no
<br>
configure:94876: checking myriexpress.h presence
<br>
configure:94886: gcc -E  -D_REENTRANT conftest.c
<br>
conftest.c:298:25: error: myriexpress.h: No such file or directory
<br>
configure:94892: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;myriexpress.h&gt;
<br>
configure:94912: result: no
<br>
configure:94947: checking for myriexpress.h
<br>
configure:94954: result: no
<br>
configure:95789: checking if MCA component btl:mx can compile
<br>
configure:95791: result: no
<br>
configure:95947: checking for MCA component btl:openib compile mode
<br>
configure:95953: result: dso
<br>
configure:95996: checking for sysfs_open_class in -lsysfs
<br>
configure:96026: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT   -Wl,-u,_munmap -Wl,-multiply_defined,suppress conftest.c -lsysfs    &gt;&amp;5
<br>
/usr/bin/ld: can't locate file for: -lsysfs
<br>
collect2: ld returned 1 exit status
<br>
configure:96032: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char sysfs_open_class ();
<br>
| int
<br>
| main ()
<br>
| {
<br>
| sysfs_open_class ();
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:96058: result: no
<br>
configure:96089: checking sysfs/libsysfs.h usability
<br>
configure:96101: gcc -c -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT conftest.c &gt;&amp;5
<br>
conftest.c:332:28: error: sysfs/libsysfs.h: No such file or directory
<br>
configure:96107: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;sysfs/libsysfs.h&gt;
<br>
configure:96130: result: no
<br>
configure:96134: checking sysfs/libsysfs.h presence
<br>
configure:96144: gcc -E  -D_REENTRANT conftest.c
<br>
conftest.c:298:28: error: sysfs/libsysfs.h: No such file or directory
<br>
configure:96150: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;sysfs/libsysfs.h&gt;
<br>
configure:96170: result: no
<br>
configure:96205: checking for sysfs/libsysfs.h
<br>
configure:96212: result: no
<br>
configure:96265: checking for cm_timeout in -lcm
<br>
configure:96295: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT   -Wl,-u,_munmap -Wl,-multiply_defined,suppress conftest.c -lcm    &gt;&amp;5
<br>
/usr/bin/ld: can't locate file for: -lcm
<br>
collect2: ld returned 1 exit status
<br>
configure:96301: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char cm_timeout ();
<br>
| int
<br>
| main ()
<br>
| {
<br>
| cm_timeout ();
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:96327: result: no
<br>
configure:96528: checking infiniband/verbs.h usability
<br>
configure:96540: gcc -c -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT conftest.c &gt;&amp;5
<br>
conftest.c:332:30: error: infiniband/verbs.h: No such file or directory
<br>
configure:96546: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;infiniband/verbs.h&gt;
<br>
configure:96569: result: no
<br>
configure:96573: checking infiniband/verbs.h presence
<br>
configure:96583: gcc -E  -D_REENTRANT conftest.c
<br>
conftest.c:298:30: error: infiniband/verbs.h: No such file or directory
<br>
configure:96589: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;infiniband/verbs.h&gt;
<br>
configure:96609: result: no
<br>
configure:96644: checking for infiniband/verbs.h
<br>
configure:96651: result: no
<br>
configure:97372: checking for ibv_create_srq
<br>
configure:97429: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT    -Wl,-u,_munmap -Wl,-multiply_defined,suppress  conftest.c    &gt;&amp;5
<br>
/usr/bin/ld: Undefined symbols:
<br>
_ibv_create_srq
<br>
collect2: ld returned 1 exit status
<br>
configure:97435: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| /* Define ibv_create_srq to an innocuous variant, in case &lt;limits.h&gt; declares ibv_create_srq.
<br>
|    For example, HP-UX 11i &lt;limits.h&gt; declares gettimeofday.  */
<br>
| #define ibv_create_srq innocuous_ibv_create_srq
<br>
| 
<br>
| /* System header to define __stub macros and hopefully few prototypes,
<br>
|     which can conflict with char ibv_create_srq (); below.
<br>
|     Prefer &lt;limits.h&gt; to &lt;assert.h&gt; if __STDC__ is defined, since
<br>
|     &lt;limits.h&gt; exists even on freestanding compilers.  */
<br>
| 
<br>
| #ifdef __STDC__
<br>
| # include &lt;limits.h&gt;
<br>
| #else
<br>
| # include &lt;assert.h&gt;
<br>
| #endif
<br>
| 
<br>
| #undef ibv_create_srq
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| {
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char ibv_create_srq ();
<br>
| /* The GNU C library defines this for functions which it implements
<br>
|     to always fail with ENOSYS.  Some functions are actually named
<br>
|     something starting with __ and the normal name is an alias.  */
<br>
| #if defined (__stub_ibv_create_srq) || defined (__stub___ibv_create_srq)
<br>
| choke me
<br>
| #else
<br>
| char (*f) () = ibv_create_srq;
<br>
| #endif
<br>
| #ifdef __cplusplus
<br>
| }
<br>
| #endif
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| return f != ibv_create_srq;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:97460: result: no
<br>
configure:97482: checking for ibv_get_device_list
<br>
configure:97539: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT    -Wl,-u,_munmap -Wl,-multiply_defined,suppress  conftest.c    &gt;&amp;5
<br>
/usr/bin/ld: Undefined symbols:
<br>
_ibv_get_device_list
<br>
collect2: ld returned 1 exit status
<br>
configure:97545: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.1&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.1&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 1
<br>
| #define OMPI_RELEASE_VERSION 0
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;0&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 1
<br>
| #define ORTE_RELEASE_VERSION 0
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;0&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 1
<br>
| #define OPAL_RELEASE_VERSION 0
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;0&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.7.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
| 