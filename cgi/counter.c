#/*
cc counter.c -lrt -o counter
exit
*/

#include <stdio.h>
#include <stdlib.h>
#include <fcntl.h>
#include <sys/stat.h>
#include <sys/types.h>
#include <time.h>
#include <sys/time.h>
#include <locale.h>

#define SLENGTH 200

#define LOCK_FN    "counter.lock"
#define COUNTER_FN "counter.dat"

int main(int argc, char **argv)
{
	int errflg=0;
	int lock=-1;
	int dummy, day_count, month_count, year_count, total_count;
	char *path;

	struct timespec ts;

	char fn[SLENGTH];
	char tmp_fn[SLENGTH];
	FILE *file;

	time_t nowbin;
	const struct tm *nowstruct;

	/* --- Get date --- */

	path=argv[1];

	/* --- Get date --- */

	setlocale(LC_ALL, "");
	time(&nowbin);
	nowstruct=localtime(&nowbin);

	/* --- Get lock, try for a fixed time (5 seconds) --- */

	/*ts.tv_sec=0;
	ts.tv_nsec=10000000; // 100th of a second

	total_count=0;
	sprintf(fn, "%s/%s", path, LOCK_FN);
	while (!errflg && lock==-1 && total_count<100)
	{
		lock=open(fn, O_CREAT|O_EXCL, S_IRUSR|S_IWUSR);
		nanosleep(&ts, 0);
		total_count++;
	}

	if (lock != -1 )
		close(lock);
	else
	{
		printf("%s", fn);
		return(1);
	}*/

	/* --- Increment main counter --- */

	sprintf(fn, "%s/%s", path, COUNTER_FN);
	if ((file=fopen(fn, "a+"))!=0)
	{
		total_count=0;
		rewind(file);
		fscanf(file, "%d", &total_count);

		total_count++;

		freopen(fn, "w+", file);
		fprintf(file, "%07d\n", total_count);
		fclose(file);
	}

	/* --- Increment year counter --- */

	strftime(tmp_fn, SLENGTH, "%Y", nowstruct);
	sprintf(fn, "%s/%s.dat", path, tmp_fn);
	if ((file=fopen(fn, "a+"))!=0)
	{
		year_count=0;
		rewind(file);
		fscanf(file, "%d,%d", &dummy, &year_count, &dummy);

		year_count++;

		freopen(fn, "w+", file);
		fprintf(file, "%s,%07d,%07d\n", tmp_fn, year_count, total_count);
		fclose(file);
	}

	/* --- Increment month counter --- */

	strftime(tmp_fn, SLENGTH, "%Y%m", nowstruct);
	sprintf(fn, "%s/%s.dat", path, tmp_fn);
	if ((file=fopen(fn, "a+"))!=0)
	{
		month_count=0;
		rewind(file);
		fscanf(file, "%d,%d", &dummy, &month_count, &dummy, &dummy);

		month_count++;

		freopen(fn, "w+", file);
		fprintf(file, "%s,%07d,%07d,%07d\n", tmp_fn, month_count, year_count, total_count);
		fclose(file);
	}

	/* --- Increment day counter --- */

	strftime(tmp_fn, SLENGTH, "%Y%m%d", nowstruct);
	sprintf(fn, "%s/%s.dat", path, tmp_fn);
	if ((file=fopen(fn, "a+"))!=0)
	{
		day_count=0;
		rewind(file);
		fscanf(file, "%d,%d", &dummy, &day_count, &dummy, &dummy, &dummy);

		day_count++;

		freopen(fn, "w+", file);
		fprintf(file, "%s,%07d,%07d,%07d,%07d\n", tmp_fn, day_count, month_count, year_count, total_count);
		fclose(file);
	}

	/* --- Release lock --- */

	unlink(LOCK_FN);

	return(errflg);
}
