XT=@sabcmd
XTOPTS=

CONTENTS=Dats.shtml
ROMCENTER=RomCenter.shtml
ROMCENTER_INF=RomCenter.inf
FILELIST=Files.lst

EMULATORS= \
	CrystalSystemEmulator/CrystalSystemEmulator.shtml \
	Daphne/Daphne.shtml \
	FinalBurnAlpha/FinalBurnAlpha.shtml \
	MAMEBeta/MAMEBeta.shtml \
	MAMEChanges/MAMEChanges.shtml \
	RadikalBikersEmulator/RadikalBikersEmulator.shtml \
	RAINE/RAINE.shtml \
	Tickle/Tickle.shtml \
	WinKawaks/WinKawaks.shtml \
	Zinc/Zinc.shtml \
	OlderEmus/OlderEmus.shtml \
	M1/M1.shtml \
	NebulaJukebox/NebulaJukebox.shtml \
	Nebula/Nebula.shtml \
	SEGAModel2Emulator/SEGAModel2Emulator.shtml \
	CPS-1/CPS-1.shtml \
	CPS-2/CPS-2.shtml \
	Neo-Geo/Neo-Geo.shtml \
	ZN/ZN.shtml \
	MPU/MPU.shtml \
	MAMEArtwork/MAMEArtwork.shtml \
	MAMESamples/MAMESamples.shtml \

all: $(CONTENTS) $(ROMCENTER) $(ROMCENTER_INF) $(FILELIST) $(EMULATORS)

$(CONTENTS): $(EMULATORS) Dats.xml xsl/contents.xsl
	@echo Building $@...
	@rm -f d:/winnt/leje2.dll
	$(XT) $(XTOPTS) xsl/contents.xsl Dats.xml $@

$(ROMCENTER): $(EMULATORS) RomCenter.xml xsl/romcenter.xsl
	@echo Building $@...
	@rm -f d:/winnt/leje2.dll
	$(XT) $(XTOPTS) xsl/romcenter.xsl RomCenter.xml $@

$(ROMCENTER_INF): $(EMULATORS) RomCenter.xml xsl/romcenter_inf.xsl
	@echo Building $@...
	@rm -f d:/winnt/leje2.dll
	$(XT) $(XTOPTS) xsl/romcenter_inf.xsl RomCenter.xml $@

$(FILELIST): $(EMULATORS) Dats.xml xsl/filelist.xsl
	@echo Building $@...
	@rm -f d:/winnt/leje2.dll
	$(XT) $(XTOPTS) xsl/filelist.xsl Dats.xml $@
	@echo Validating $@...
	@FILECHK.EXE
	@rm $(FILELIST)

%.shtml: %.xml %.ent.xml xsl/emulator.xsl
	@echo Building $@...
	@rm -f d:/winnt/leje2.dll
	$(XT) $(XTOPTS) xsl/emulator.xsl $< $@
