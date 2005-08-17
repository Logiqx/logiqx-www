XT=@sabcmd
XTOPTS=

CONTENTS=Tools.php
FILELIST=Files.lst

TOOLS= \
	AVI2CDVC/AVI2CDVC.php \
	DatLib/DatLib.php \
	DatUtil/DatUtil.php \
	ImgChk/ImgChk.php \
	MAMEDiff/MAMEDiff.php \
	ROMBuild/ROMBuild.php \
	ROMInfo/ROMInfo.php \
	ZIPFind/ZIPFind.php \
	ZIPIdent/ZIPIdent.php \

all: $(CONTENTS) $(FILELIST) $(TOOLS)

$(CONTENTS): $(TOOLS) Tools.xml xsl/contents.xsl xsl/comments.xsl
	@echo Building $@...
	$(XT) $(XTOPTS) xsl/contents.xsl Tools.xml $@

$(FILELIST): $(TOOLS) Tools.xml xsl/filelist.xsl
	@echo Building $@...
	$(XT) $(XTOPTS) xsl/filelist.xsl Tools.xml $@
	@echo Validating $@...
	@FILECHK.EXE
	@rm $(FILELIST)

%.php: %.xml %.ent.xml xsl/tool.xsl xsl/comments.xsl
	@echo Building $@...
	$(XT) $(XTOPTS) xsl/tool.xsl $< $@
