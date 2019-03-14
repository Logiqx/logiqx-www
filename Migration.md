# Migrating from CVS to Git

## Overview

### Introduction

This repository was originally tracked / versioned using [CVS](https://en.wikipedia.org/wiki/Concurrent_Versions_System), running under Windows.

The sections below detail how I went about migrating the repository to [Git](https://git-scm.com/) and pushing it to [GitHub](https://github.com/).

The migration was performed within a [Ubuntu](https://www.ubuntu.com/) bash shell, running under [Windows Subsystem for Linux](https://docs.microsoft.com/en-us/windows/wsl/about).

The main tools used were [cvs-fast-export](http://www.catb.org/~esr/cvs-fast-export/) and Git itself, referencing the [howto](http://www.catb.org/~esr/reposurgeon/dvcs-migration-guide.html) guide from [reposurgeon](http://www.catb.org/~esr/reposurgeon/).



### Approach

The approach was to export the original repository directly from CVSROOT and import it into Git.

The cvs-fast-export tool did a great job, exporting the legacy CVS repository as a Git fast-import file.

The process was largely automatic and mapping the committers / authors was the only minor complication.

The .git directory was then copied into the original project directory and local changes / additions reviewed.

Finally and once I was happy with everything the Git repository was pushed to GitHub.



## Pre-Requisites

### Installing cvs-fast-export

Install GCC:

```sh
mike@MIKE-ENVY:~$ sudo apt install gcc
```

Install make:

```sh
mike@MIKE-ENVY:~$ sudo apt install make
```

Install CVS:

```sh
mike@MIKE-ENVY:~$ sudo apt install cvs
```

Install asciidoc:

```sh
mike@MIKE-ENVY:~$ sudo apt-get update
mike@MIKE-ENVY:~$ sudo apt install asciidoc
```

Install cvs-fast-export:

```bash
mike@MIKE-ENVY:~/cvs-fast-export-1.45$ make
...
mike@MIKE-ENVY:~/cvs-fast-export-1.45$ make check
...
mike@MIKE-ENVY:~/cvs-fast-export-1.45$ sudo make install
[sudo] password for mike:
install -d "/usr/local/bin"
install cvs-fast-export cvssync cvsconvert "/usr/local/bin"
install -d "/usr/local/share/man/man1"
install -m 644 cvs-fast-export.1 "/usr/local/share/man/man1"
install -m 644 cvssync.1 "/usr/local/share/man/man1"
install -m 644 cvsconvert.1 "/usr/local/share/man/man1"
```



### Installing Dos2Unix

This tool is needed for conversion of CR/LF to LF:

```bash
mike@MIKE-ENVY:~$ sudo apt install dos2unix
```



## Preparation

### Converting CR/LF to LF

Ensure that all text files in the existing project directory are converted from CR/LF to LF:

```bash
mike@MIKE-ENVY:/mnt/c/Logiqx/WWW$ find . -type f -exec dos2unix {} \;
```

Note: Binary files are automatically skipped by the dos2unix command.

Check for any unexpected artefacts as a result of the above conversion:

```bash
mike@MIKE-ENVY:/mnt/c/Logiqx/WWW$ find . -type f -exec file {} \; | grep ASCII | grep "line terminators"
./cutenews/inc/functions.inc.php: PHP script, Non-ISO extended-ASCII text, with very long lines, with LF, NEL line terminators
./pi/collins.html: HTML document, ASCII text, with no line terminators
```

Fix the two issues identified above:

+ functions.inc.php was ignored

+ collins.html never had the final CR/LF so it was added using a text editor and run through dos2unix



## Migration

### Exporting from CVSROOT

Export the existing repository / module from CVSROOT using cvs-fast-export:

```sh
mike@MIKE-ENVY:/mnt/c/Logiqx/CVSROOT$ find WWW | cvs-fast-export -p >../WWW.fi
2019-03-14T20:01:03Z: Reading file list...done, 540093.495KB in 3476 files (3.019sec)
2019-03-14T20:01:06Z: Analyzing masters with 8 threads...done, 13411 revisions (96.872sec)
2019-03-14T20:02:43Z: Make DAG branch heads...3476 of 3476(100%)    (0.014sec)
2019-03-14T20:02:43Z: Sorting...done  (0.000sec)
2019-03-14T20:02:43Z: Compute branch parent relationships...2 of 2(100%)    (0.001sec)
2019-03-14T20:02:43Z: Collate common branches...2 of 2(100%)    (0.039sec)
2019-03-14T20:02:43Z: Find tag locations...297 of 297(100%)    (1.129sec)
2019-03-14T20:02:44Z: Compute tail values...done  (0.001sec)
2019-03-14T20:02:44Z: Generating snapshots...done (30.017sec)%)
2019-03-14T20:03:14Z: Saving in fast order: done (0.138sec))
cvs-fast-export: no commitids before 2010-10-31T16:02:09Z.
       after parsing:   99.896  14708KB
after branch collation: 101.093 21776KB
               total:   131.251 32016KB
910 commits/658.629M text, 8298 atoms at 6 commits/sec.s
```



### Mapping Committers / Authors

"Mike" and "cvs-fast-export" were mapped to "Logiqx" using the following hack:

```bash
mike@MIKE-ENVY:/mnt/c/Logiqx$ strings WWW.fi | grep 'committer' | awk '{print $1, $2, $3}' | sort -u
committer cvs-fast-export <cvs-fast-export>
committer Logiqx <Logiqx>
committer Mike <Mike>
mike@MIKE-ENVY:/mnt/c/Logiqx$ sed 's/committer .* <.*>/committer Logiqx <software@mikeg.me.uk>/' WWW.fi >WWW.tmp.fi
mike@MIKE-ENVY:/mnt/c/Logiqx$ strings WWW.tmp.fi | grep 'committer' | awk '{print $1, $2, $3}' | sort -u
committer Logiqx <software@mikeg.me.uk>
```

Note: I'm not 100% happy about hacking the fast import file but it seemed to work ok!



### Importing to Git

The "fast import" was performed using the standard Git client:

```bash
mike@MIKE-ENVY:/mnt/c/Logiqx$ git init WWW.tmp
Initialized empty Git repository in /mnt/c/Logiqx/WWW.tmp/.git/
mike@MIKE-ENVY:/mnt/c/Logiqx$ cd WWW.tmp
mike@MIKE-ENVY:/mnt/c/Logiqx/WWW.tmp$ git fast-import <../WWW.tmp.fi
git-fast-import statistics:
---------------------------------------------------------------------
Alloc'd objects:      20000
Total objects:        15199 (      1154 duplicates                  )
      blobs  :         9745 (       981 duplicates       7004 deltas of       9248 attempts)
      trees  :         4544 (       173 duplicates       3965 deltas of       4198 attempts)
      commits:          910 (         0 duplicates          0 deltas of          0 attempts)
      tags   :            0 (         0 duplicates          0 deltas of          0 attempts)
Total branches:         299 (       292 loads     )
      marks:        1048576 (     11635 unique    )
      atoms:           3494
Memory total:          3173 KiB
       pools:          2235 KiB
     objects:           937 KiB
---------------------------------------------------------------------
pack_report: getpagesize()            =       4096
pack_report: core.packedGitWindowSize = 1073741824
pack_report: core.packedGitLimit      = 8589934592
pack_report: pack_used_ctr            =      10668
pack_report: pack_mmap_calls          =        299
pack_report: pack_open_windows        =          1 /          1
pack_report: pack_mapped              =  522174240 /  522174240
---------------------------------------------------------------------
```



### Checking Out from Git

Checkout all of the files and check the author(s):

```bash
mike@MIKE-ENVY:/mnt/c/Logiqx/WWW.tmp$ git checkout
Checking out files: 100% (813/813), done.
mike@MIKE-ENVY:/mnt/c/Logiqx/WWW.tmp$ git status
On branch master
nothing to commit, working directory clean
mike@MIKE-ENVY:/mnt/c/Logiqx/WWW.tmp$ git log | grep Author | sort -u
Author: Logiqx <software@mikeg.me.uk>
```



### Comparing Project Directories

A simple directory comparison was used to compare the CVS and Git project directories:

```bash
mike@MIKE-ENVY:/mnt/c/Logiqx$ diff -rq WWW WWW.tmp | grep "Only in" | grep "WWW.tmp"
Only in WWW.tmp: cgi
Only in WWW.tmp/Dats: Callus95
Only in WWW.tmp/Dats: MAMECabinets
Only in WWW.tmp/Dats: MAMEFlyers
Only in WWW.tmp/Dats: MAMEIcons
Only in WWW.tmp/Dats: MAMEMarquees
Only in WWW.tmp/Dats: MAMEPanels
Only in WWW.tmp/Dats: MAMESnaps
Only in WWW.tmp/Dats: MAMETestDrivers
Only in WWW.tmp/Dats: MAMETitles
Only in WWW.tmp/Dats: MAMusIcons
Only in WWW.tmp: .git
Only in WWW.tmp: .gitignore

mike@MIKE-ENVY:/mnt/c/Logiqx$ diff -rq WWW WWW.tmp | grep "Only in" | grep -v "WWW.tmp"
Only in WWW: backup
Only in WWW: cgi-bin
Only in WWW/pi: cgi-bin
Only in WWW/waagle: cgi-bin

mike@MIKE-ENVY:/mnt/c/Logiqx$ diff -rq WWW WWW.tmp | grep "Files"
Files WWW/_filelist_inspiron.txt and WWW.tmp/_filelist_inspiron.txt differ
Files WWW/pi/collins.html and WWW.tmp/pi/collins.html differ
Files WWW/Resources/bg-logiqx.css and WWW.tmp/Resources/bg-logiqx.css differ
Files WWW/team/download/mame_related_updates.xls and WWW.tmp/team/download/mame_related_updates.xls differ
Files WWW/Tools/AVI2CDVC/avi2cdvc.zip and WWW.tmp/Tools/AVI2CDVC/avi2cdvc.zip differ
Files WWW/Tools/ROMBuild/rbmame80.zip and WWW.tmp/Tools/ROMBuild/rbmame80.zip differ

mike@MIKE-ENVY:/mnt/c/Logiqx$ cd WWW.tmp
mike@MIKE-ENVY:/mnt/c/Logiqx/WWW.tmp$ find . -type f -exec file {} \; | grep ASCII | grep "line terminators"
./cutenews/inc/functions.inc.php: PHP script, Non-ISO extended-ASCII text, with very long lines, with LF, NEL line terminators
./pi/collins.html: HTML document, ASCII text, with no line terminators
./Resources/bg-logiqx.css: ASCII text, with CRLF line terminators
```



### Renaming the CGI Directory

Rename the cg-bin directory so that it has the intended name:

```bash
mike@MIKE-ENVY:/mnt/c/Logiqx/WWW.tmp$ mv cgi cgi-bin
mike@MIKE-ENVY:/mnt/c/Logiqx/WWW.tmp$ git status
On branch master
Changes not staged for commit:
  (use "git add/rm <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

        deleted:    cgi/unzip_all.cgi
        deleted:    cgi/unzip_all.sh

Untracked files:
  (use "git add <file>..." to include in what will be committed)

        cgi-bin/

no changes added to commit (use "git add" and/or "git commit -a")
mike@MIKE-ENVY:/mnt/c/Logiqx/WWW.tmp$ git add .
mike@MIKE-ENVY:/mnt/c/Logiqx/WWW.tmp$ git status
On branch master
Changes to be committed:
  (use "git reset HEAD <file>..." to unstage)

        renamed:    cgi/unzip_all.cgi -> cgi-bin/unzip_all.cgi
        renamed:    cgi/unzip_all.sh -> cgi-bin/unzip_all.sh

mike@MIKE-ENVY:/mnt/c/Logiqx/WWW.tmp$ git commit -m "Rename cgi to cgi-bin"
[master 77c9196] Rename cgi to cgi-bin
 2 files changed, 0 insertions(+), 0 deletions(-)
 rename {cgi => cgi-bin}/unzip_all.cgi (100%)
 mode change 100755 => 100644
 rename {cgi => cgi-bin}/unzip_all.sh (100%)
 mode change 100755 => 100644
```



### Removing Old Dats

```bash
mike@MIKE-ENVY:/mnt/c/Logiqx/WWW.tmp/Dats$ rm -fr Callus95 MAMECabinets MAMEFlyers MAMEIcons MAMEMarquees MAMEPanels MAMESnaps MAMETestDrivers MAMETitles MAMusIcons
mike@MIKE-ENVY:/mnt/c/Logiqx/WWW.tmp/Dats$ git status
On branch master
Changes not staged for commit:
  (use "git add/rm <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

        deleted:    ...

no changes added to commit (use "git add" and/or "git commit -a")
mike@MIKE-ENVY:/mnt/c/Logiqx/WWW.tmp/Dats$ git add .
mike@MIKE-ENVY:/mnt/c/Logiqx/WWW.tmp/Dats$ git status
On branch master
Changes to be committed:
  (use "git reset HEAD <file>..." to unstage)

        deleted:    ...

mike@MIKE-ENVY:/mnt/c/Logiqx/WWW.tmp/Dats$ git commit -m "Remove old dats"
[master b857fa4] Remove old dats
 60 files changed, 2649 deletions(-)
 delete mode 100755 ...
```



### Switching from CVS to Git

Remove the CVS directories and copy the Git repository into the project directory.

```bash
mike@MIKE-ENVY:/mnt/c/Logiqx$ find WWW -type d -name CVS -exec rm -fr {} \;
...
mike@MIKE-ENVY:/mnt/c/Logiqx$ cp -p WWW.tmp/.gitignore WWW/
mike@MIKE-ENVY:/mnt/c/Logiqx$ cp -rp WWW.tmp/.git WWW/
```



## Tidy Up

### Configuring the Git User

Prior to committing any changes to Git the user name and e-mail need to be specified:

```bash
mike@MIKE-ENVY:/mnt/c/Logiqx$ git config --global user.name "Logiqx"
mike@MIKE-ENVY:/mnt/c/Logiqx$ git config --global user.email "software@mikeg.me.uk"
```



### Reviewing Local Changes

Use the GIt "status" and "diff" commands to identify local changes:

```bash
mike@MIKE-ENVY:/mnt/c/Logiqx/WWW$ git status
On branch master
Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

        modified:   Resources/bg-logiqx.css
        modified:   Tools/AVI2CDVC/avi2cdvc.zip
        modified:   Tools/ROMBuild/rbmame80.zip
        modified:   _filelist_inspiron.txt
        modified:   pi/collins.html
        modified:   team/download/mame_related_updates.xls

Untracked files:
  (use "git add <file>..." to include in what will be committed)

        backup/

no changes added to commit (use "git add" and/or "git commit -a")
mike@MIKE-ENVY:/mnt/c/Logiqx/WWW$ ... one-off commits, etc ...
```



### Final Check 

Check that the repository is clean:

```bash
mike@MIKE-ENVY:/mnt/c/Logiqx/WWW$ git status
On branch master
nothing to commit, working directory clean
```



## Publication

### Pushing the Repo to GitHub

Push the local repository to GitHub:

```bash
mike@MIKE-ENVY:/mnt/c/Logiqx/WWW$ git push -u origin --all
Username for 'https://github.com': Logiqx
Password for 'https://Logiqx@github.com':
Counting objects: 15229, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (4179/4179), done.
Writing objects: 100% (15229/15229), 498.02 MiB | 302.00 KiB/s, done.
Total 15229 (delta 11000), reused 15175 (delta 10969)
remote: Resolving deltas: 100% (11000/11000), done.
To https://github.com/Logiqx/logiqx-www.git
...
Branch master set up to track remote branch master from origin.
mike@MIKE-ENVY:/mnt/c/Logiqx/WWW$ git status
On branch master
Your branch is up-to-date with 'origin/master'.
nothing to commit, working directory clean
```



### Final Check

Pull the repository from GitHub and compare with the working directory:

```bash
mike@MIKE-ENVY:/mnt/c/Logiqx$ git init WWW.github
Initialized empty Git repository in /mnt/c/logiqx/WWW.github/.git/
mike@MIKE-ENVY:/mnt/c/Logiqx$ cd WWW.github
mike@MIKE-ENVY:/mnt/c/Logiqx/WWW.github$ git remote add origin https://github.com/Logiqx/logiqx-www.git
mike@MIKE-ENVY:/mnt/c/Logiqx/WWW.github$ git pull origin master
remote: Enumerating objects: 14333, done.
remote: Counting objects: 100% (14333/14333), done.
remote: Compressing objects: 100% (3809/3809), done.
remote: Total 14333 (delta 10443), reused 14333 (delta 10443), pack-reused 0
Receiving objects: 100% (14333/14333), 497.91 MiB | 2.29 MiB/s, done.
Resolving deltas: 100% (10443/10443), done.
From https://github.com/Logiqx/logiqx-www
 * branch            master     -> FETCH_HEAD
 * [new branch]      master     -> origin/master
Checking out files: 100% (753/753), done.
mike@MIKE-ENVY:/mnt/c/Logiqx/WWW.github$ rm -fr .git
mike@MIKE-ENVY:/mnt/c/Logiqx/WWW.github$ cd ..
mike@MIKE-ENVY:/mnt/c/Logiqx$ diff -r WWW.github/ WWW
Only in WWW: backup
Only in WWW: .git
Only in WWW/pi: cgi-bin
Only in WWW/waagle: cgi-bin
```

Note:  The "Only in WWW" items are the Git repository and a handful of files listed in .gitignore

