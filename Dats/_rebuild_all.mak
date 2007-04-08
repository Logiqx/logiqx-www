XT=@sabcmd
XTOPTS=

CONTENTS=Dats.php
ROMCENTER=RomCenter.php
ROMCENTER_INF=RomCenter.inf
FILELIST=Files.lst

EMULATORS= \
	Daphne/Daphne.php \
	FinalBurnAlpha/FinalBurnAlpha.php \
	MAMEBeta/MAMEBeta.php \
	MAMESuperSet/MAMESuperSet.php \
	MAMESuperSetSuppM/MAMESuperSetSuppM.php \
	MAMESuperSetSuppS/MAMESuperSetSuppS.php \
	MAMESuperSetEmusM/MAMESuperSetEmusM.php \
	MAMESuperSetEmusS/MAMESuperSetEmusS.php \
	RAINE/RAINE.php \
	WinKawaks/WinKawaks.php \
	Zinc/Zinc.php \
	OlderEmus/OlderEmus.php \
	M1/M1.php \
	Nebula/Nebula.php \
	SEGAModel2Emulator/SEGAModel2Emulator.php \
	CPS-1/CPS-1.php \
	CPS-2/CPS-2.php \
	Neo-Geo/Neo-Geo.php \
	MAMEArtwork/MAMEArtwork.php \
	MAMESamples/MAMESamples.php \

all: $(CONTENTS) $(ROMCENTER) $(ROMCENTER_INF) $(FILELIST) $(EMULATORS)

$(CONTENTS): $(EMULATORS) Dats.xml xsl/contents.xsl xsl/comments.xsl
	@echo Building $@...
	$(XT) $(XTOPTS) xsl/contents.xsl Dats.xml $@

$(ROMCENTER): $(EMULATORS) RomCenter.xml xsl/romcenter.xsl xsl/comments.xsl
	@echo Building $@...
	$(XT) $(XTOPTS) xsl/romcenter.xsl RomCenter.xml $@

$(ROMCENTER_INF): $(EMULATORS) RomCenter.xml xsl/romcenter_inf.xsl
	@echo Building $@...
	$(XT) $(XTOPTS) xsl/romcenter_inf.xsl RomCenter.xml $@

$(FILELIST): $(EMULATORS) Dats.xml xsl/filelist.xsl
	@echo Building $@...
	$(XT) $(XTOPTS) xsl/filelist.xsl Dats.xml $@
	@echo Validating $@...
	@FILECHK.EXE
	@rm $(FILELIST)

%.php: %.xml %.ent.xml xsl/emulator.xsl xsl/comments.xsl
	@echo Building $@...
	$(XT) $(XTOPTS) xsl/emulator.xsl $< $@
