      PROGRAM tthr
      IMPLICIT NONE
      INCLUDE "mpif.h"
      INTEGER  REQUIRED, PROVIDED, IERROR
      REQUIRED = MPI_THREAD_MULTIPLE
      PROVIDED = -1
      CALL MPI_INIT_THREAD(REQUIRED, PROVIDED, IERROR)
      WRITE (*,*) MPI_THREAD_SINGLE, MPI_THREAD_FUNNELED,
     & MPI_THREAD_SERIALIZED, MPI_THREAD_MULTIPLE
      WRITE (*,*) REQUIRED, PROVIDED, IERROR
      CALL MPI_FINALIZE(IERROR)
      END

