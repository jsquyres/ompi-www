This file contains any messages produced by compilers while
running configure, to aid debugging if configure makes a mistake.

It was created by configure, which was
generated by GNU Autoconf 2.59.  Invocation command line was

  $ ./configure --prefix=/home/mschaara/mtt-testing/scratch-coll/installs/UvUA/install --with-device=osu_ch3:mrail --with-rdma=gen2 --with-pm=mpd --disable-romio --without-mpe

## --------- ##
## Platform. ##
## --------- ##

hostname = shark01
uname -m = x86_64
uname -r = 2.6.16.21-smp
uname -s = Linux
uname -v = #2 SMP Thu Mar 1 10:09:02 CST 2007

/usr/bin/uname -p = unknown
/bin/uname -X     = unknown

/bin/arch              = x86_64
/usr/bin/arch -k       = unknown
/usr/convex/getsysinfo = unknown
hostinfo               = unknown
/bin/machine           = unknown
/usr/bin/oslevel       = unknown
/bin/universe          = unknown

PATH: /opt/papi-3.5.0/bin
PATH: /home/mschaara/OpenMPI/bin
PATH: /opt/gcc-4.2.0/bin
PATH: /opt/SLURM/bin
PATH: /opt/papi-3.5.0/bin
PATH: /home/mschaara/OpenMPI/bin
PATH: /opt/gcc-4.2.0/bin
PATH: /opt/SLURM/bin
PATH: /opt/papi-3.5.0/bin
PATH: /home/mschaara/OpenMPI/bin
PATH: /opt/gcc-4.2.0/bin
PATH: /opt/SLURM/bin
PATH: /home/mschaara/bin
PATH: /usr/local/bin
PATH: /usr/bin
PATH: /usr/X11R6/bin
PATH: /bin
PATH: /usr/games
PATH: /opt/bin
PATH: /opt/gnome/bin
PATH: /opt/kde3/bin
PATH: /usr/lib64/jvm/jre/bin
PATH: /opt/c3-4/
PATH: /usr/local/ofed/bin
PATH: /usr/lib/mit/bin
PATH: /usr/lib/mit/sbin
PATH: /usr/local/ofed/sbin


## ----------- ##
## Core tests. ##
## ----------- ##

configure:2720: checking for gcc
configure:2746: result: gcc
configure:2990: checking for C compiler version
configure:2993: gcc --version </dev/null >&5
gcc (GCC) 4.2.0
Copyright (C) 2007 Free Software Foundation, Inc.
This is free software; see the source for copying conditions.  There is NO
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

configure:2996: $? = 0
configure:2998: gcc -v </dev/null >&5
Using built-in specs.
Target: x86_64-unknown-linux-gnu
Configured with: ../gcc-4.2.0/configure --prefix=/opt/gcc-4.2.0/ --disable-multilib --enable-languages=c,c++,fortran,java
Thread model: posix
gcc version 4.2.0
configure:3001: $? = 0
configure:3003: gcc -V </dev/null >&5
gcc: '-V' option must have argument
configure:3006: $? = 1
configure:3029: checking for C compiler default output file name
configure:3032: gcc -D_X86_64_ -D_SMP_ -DUSE_HEADER_CACHING  -DONE_SIDED -DMPID_USE_SEQUENCE_NUMBERS -D_SHMEM_COLL_    -I/usr/local/ofed/include -O2   conftest.c -L/usr/local/ofed/lib64   -libverbs -libumad -lpthread >&5
/usr/bin/ld: cannot find -libumad
collect2: ld returned 1 exit status
configure:3035: $? = 1
configure: failed program was:
| /* confdefs.h.  */
| 
| #define PACKAGE_NAME ""
| #define PACKAGE_TARNAME ""
| #define PACKAGE_VERSION ""
| #define PACKAGE_STRING ""
| #define PACKAGE_BUGREPORT ""
| #define HAVE_ERROR_CHECKING MPID_ERROR_LEVEL_ALL
| #define MPICH_ERROR_MSG_LEVEL MPICH_ERROR_MSG_ALL
| #define USE_LOGGING MPID_LOGGING_NONE
| #define MPICH_SINGLE_THREADED 1
| #define MPICH_THREAD_LEVEL MPI_THREAD_FUNNELED
| #define USE_THREAD_IMPL MPICH_THREAD_IMPL_NONE
| /* end confdefs.h.  */
| 
| int
| main ()
| {
| 
|   ;
|   return 0;
| }
configure:3074: error: C compiler cannot create executables
See `config.log' for more details.

## ---------------- ##
## Cache variables. ##
## ---------------- ##

ac_cv_env_CC_set=set
ac_cv_env_CC_value=gcc
ac_cv_env_CFLAGS_set=set
ac_cv_env_CFLAGS_value='-D_X86_64_ -D_SMP_ -DUSE_HEADER_CACHING  -DONE_SIDED -DMPID_USE_SEQUENCE_NUMBERS -D_SHMEM_COLL_    -I/usr/local/ofed/include -O2'
ac_cv_env_CPPFLAGS_set=
ac_cv_env_CPPFLAGS_value=
ac_cv_env_CPP_set=
ac_cv_env_CPP_value=
ac_cv_env_CXXFLAGS_set=
ac_cv_env_CXXFLAGS_value=
ac_cv_env_CXX_set=set
ac_cv_env_CXX_value=g++
ac_cv_env_F77_set=set
ac_cv_env_F77_value=g77
ac_cv_env_F90FLAGS_set=
ac_cv_env_F90FLAGS_value=
ac_cv_env_F90_set=set
ac_cv_env_F90_value=
ac_cv_env_FFLAGS_set=set
ac_cv_env_FFLAGS_value=-L/usr/local/ofed/lib64
ac_cv_env_LDFLAGS_set=
ac_cv_env_LDFLAGS_value=
ac_cv_env_build_alias_set=
ac_cv_env_build_alias_value=
ac_cv_env_host_alias_set=
ac_cv_env_host_alias_value=
ac_cv_env_target_alias_set=
ac_cv_env_target_alias_value=
ac_cv_prog_ac_ct_CC=gcc
pac_cv_my_conf_dir=/home/mschaara/mtt-testing/scratch-coll/installs/UvUA/src/mvapich2-0.9.8p3

## ----------------- ##
## Output variables. ##
## ----------------- ##

ADDRESS_KIND=''
ALLOCA=''
AR=''
BSEND_OVERHEAD=''
BUILD_TVDLL=''
CC='gcc'
CC_SHL=''
CC_SHL_DBG=''
CFLAGS='-D_X86_64_ -D_SMP_ -DUSE_HEADER_CACHING  -DONE_SIDED -DMPID_USE_SEQUENCE_NUMBERS -D_SHMEM_COLL_    -I/usr/local/ofed/include -O2'
CONFIGURE_ARGUMENTS='--prefix=/home/mschaara/mtt-testing/scratch-coll/installs/UvUA/install --with-device=osu_ch3:mrail --with-rdma=gen2 --with-pm=mpd --disable-romio --without-mpe'
CPP=''
CPPFLAGS=''
CREATESHLIB=''
CXX='g++'
CXXFLAGS=''
CXX_LINKPATH_SHL=''
CXX_SHL=''
C_LINKPATH_SHL=''
C_LINK_SHL=''
C_LINK_SHL_DBG=''
DEFS=''
DEVICE='osu_ch3:mrail'
DLLIMPORT=''
DOCTEXT=''
DOCTEXTSTYLE=''
ECHO_C=''
ECHO_N='-n'
ECHO_T=''
EGREP=''
ENABLE_SHLIB=''
ETAGS=''
ETAGSADD=''
EXAMPLE_LIBS=''
EXEEXT=''
EXTERNAL_SRC_DIRS=''
EXTRA_STATUS_DECL=''
F77='g77'
F77CPP=''
F77_COMPLEX16=''
F77_COMPLEX32=''
F77_COMPLEX8=''
F77_INCDIR=''
F77_INTEGER16=''
F77_INTEGER1=''
F77_INTEGER2=''
F77_INTEGER4=''
F77_INTEGER8=''
F77_IN_C_LIBS=''
F77_LIBDIR_LEADER=''
F77_NAME_MANGLE=''
F77_REAL16=''
F77_REAL4=''
F77_REAL8=''
F90=''
F90CPP=''
F90EXT=''
F90FLAGS=''
F90INC=''
F90INCFLAG=''
F90MODEXT=''
F90MODINCFLAG=''
F90MODINCSPEC=''
F90_LINKPATH_SHL=''
F90_SHL=''
F90_WORK_FILES_ARG=''
FC=''
FC_LINKPATH_SHL=''
FC_SHL=''
FFLAGS='-L/usr/local/ofed/lib64'
FINCLUDES=''
FLIBS=''
FWRAPNAME='fmpich'
GCC=''
HAVE_CXX_EXCEPTIONS=''
HAVE_ROMIO=''
INCLUDE_MPICXX_H=''
INSTALL_DATA=''
INSTALL_PROGRAM=''
INSTALL_SCRIPT=''
INT16_T=''
INT32_T=''
INT64_T=''
LDFLAGS=''
LIBOBJS=''
LIBS='-L/usr/local/ofed/lib64   -libverbs -libumad -lpthread'
LIBTOOL=''
LTLIBOBJS=''
MAKE=''
MAKE_DEPEND_C=''
MANY_PM='no'
MKDIR_P=''
MPE_THREAD_LIB_NAME=''
MPICC=''
MPICH_TIMER_KIND=''
MPICVSHOME=''
MPICXX=''
MPICXXLIBNAME='mpichcxx'
MPID_TIMER_TYPE=''
MPIF77=''
MPIF90=''
MPIFLIBNAME='mpich'
MPIFPMPI=''
MPILIBNAME='mpich'
MPIMODNAME=''
MPIU_DLL_SPEC_DEF=''
MPI_2COMPLEX=''
MPI_2DOUBLE_COMPLEX=''
MPI_2DOUBLE_PRECISION=''
MPI_2INT=''
MPI_2INTEGER=''
MPI_2REAL=''
MPI_AINT=''
MPI_BYTE=''
MPI_CFLAGS=''
MPI_CHAR=''
MPI_CHARACTER=''
MPI_COMPLEX16=''
MPI_COMPLEX32=''
MPI_COMPLEX8=''
MPI_COMPLEX=''
MPI_CXXFLAGS=''
MPI_DOUBLE=''
MPI_DOUBLE_COMPLEX=''
MPI_DOUBLE_INT=''
MPI_DOUBLE_PRECISION=''
MPI_F77_BYTE=''
MPI_F77_LB=''
MPI_F77_PACKED=''
MPI_F77_UB=''
MPI_F90FLAGS='-O2'
MPI_FFLAGS=''
MPI_FINT=''
MPI_FLOAT=''
MPI_FLOAT_INT=''
MPI_INT=''
MPI_INTEGER16=''
MPI_INTEGER1=''
MPI_INTEGER2=''
MPI_INTEGER4=''
MPI_INTEGER8=''
MPI_INTEGER=''
MPI_LB=''
MPI_LDFLAGS=''
MPI_LOGICAL=''
MPI_LONG=''
MPI_LONG_DOUBLE=''
MPI_LONG_DOUBLE_INT=''
MPI_LONG_INT=''
MPI_LONG_LONG=''
MPI_MAX_PROCESSOR_NAME=''
MPI_OFFSET=''
MPI_OFFSET_TYPEDEF=''
MPI_PACKED=''
MPI_REAL16=''
MPI_REAL4=''
MPI_REAL8=''
MPI_REAL=''
MPI_SHORT=''
MPI_SHORT_INT=''
MPI_SIGNED_CHAR=''
MPI_STATUS_SIZE=''
MPI_UB=''
MPI_UNSIGNED_CHAR=''
MPI_UNSIGNED_INT=''
MPI_UNSIGNED_LONG=''
MPI_UNSIGNED_LONG_LONG=''
MPI_UNSIGNED_SHORT=''
MPI_WCHAR=''
NEEDSPLIB=''
NO_WEAK_SYM=''
NO_WEAK_SYM_TARGET=''
OBJEXT=''
OFFSET_KIND=''
PACKAGE_BUGREPORT='mpich2-maint@mcs.anl.gov'
PACKAGE_NAME='MPICH2'
PACKAGE_STRING=''
PACKAGE_TARNAME='mpich2-MVAPICH2-0.9.8'
PACKAGE_VERSION='MVAPICH2-0.9.8'
PATH_SEPARATOR=':'
PERL5=''
PERL=''
PMPIFLIBNAME='pmpich'
PMPILIBNAME='pmpich'
PROFILE_DEF_MPI=''
RANLIB=''
RANLIB_AFTER_INSTALL=''
SET_CFLAGS=''
SET_MAKE=''
SHELL='/bin/sh'
SHLIB_EXT=''
SHLIB_FROM_LO=''
SHLIB_INSTALL=''
SIZEOF_MPI_STATUS=''
TESTCPP=''
THR_CFLAGS=''
THR_CPPFLAGS=''
THR_DEFS=''
THR_LDFLAGS=''
THR_LIBS=''
VERSION='MVAPICH2-0.9.8'
VPATH=''
ac_ct_CC='gcc'
ac_ct_CXX=''
ac_ct_F77=''
ac_ct_F90=''
ac_ct_RANLIB=''
bindings=''
bindings_dirs=''
bindir='${exec_prefix}/bin'
build_alias=''
datadir='${prefix}/share'
debugger_dir=''
device_name='osu_ch3'
docdir='${prefix}/doc'
exec_prefix='NONE'
host_alias=''
htmldir='${prefix}/www'
includedir='${prefix}/include'
infodir='${prefix}/info'
libdir='${exec_prefix}/lib'
libexecdir='${exec_prefix}/libexec'
localstatedir='${prefix}/var'
logging_dir=''
logging_name='none'
logging_subdirs=''
mandir='${prefix}/man'
master_top_builddir='/home/mschaara/mtt-testing/scratch-coll/installs/UvUA/src/mvapich2-0.9.8p3'
master_top_srcdir='/home/mschaara/mtt-testing/scratch-coll/installs/UvUA/src/mvapich2-0.9.8p3'
modincdir=''
mpe_dir=''
nameserv_name=''
oldincludedir='/usr/include'
other_install_dirs=' src/pm/mpd'
other_pm_names=''
pac_prog=''
pm_name='mpd'
pmi_name='simple'
prefix='/home/mschaara/mtt-testing/scratch-coll/installs/UvUA/install'
program_transform_name='s,x,x,'
romio_dir=''
sbindir='${exec_prefix}/sbin'
sharedstatedir='${prefix}/com'
subdirs=''
subsystems=' src/pmi/simple src/pm/mpd'
sysconfdir='${prefix}/etc'
target_alias=''

## ------------- ##
## Output files. ##
## ------------- ##

MPE_THREAD_FUNCS=''
MPE_THREAD_TYPEDEFS=''

## ----------- ##
## confdefs.h. ##
## ----------- ##

#define HAVE_ERROR_CHECKING MPID_ERROR_LEVEL_ALL
#define MPICH_ERROR_MSG_LEVEL MPICH_ERROR_MSG_ALL
#define MPICH_SINGLE_THREADED 1
#define MPICH_THREAD_LEVEL MPI_THREAD_FUNNELED
#define PACKAGE_BUGREPORT ""
#define PACKAGE_NAME ""
#define PACKAGE_STRING ""
#define PACKAGE_TARNAME ""
#define PACKAGE_VERSION ""
#define USE_LOGGING MPID_LOGGING_NONE
#define USE_THREAD_IMPL MPICH_THREAD_IMPL_NONE

configure: exit 77