XT=@sabcmd
XTOPTS=

CONTENTS=Dats.shtml
ROMCENTER=RomCenter.shtml
ROMCENTER_INF=RomCenter.inf
FILELIST=Files.lst

EMULATORS= \
	CPS-2/CPS-2.shtml \
	CPS-1/CPS-1.shtml \
	CottAGE/CottAGE.shtml \
	Daphne/Daphne.shtml \
	FinalBurn/FinalBurn.shtml \
	FinalBurnAlpha/FinalBurnAlpha.shtml \
	MAMEBeta/MAMEBeta.shtml \
	MAMEChanges/MAMEChanges.shtml \
	RAINE/RAINE.shtml \
	OlderEmus/OlderEmus.shtml \
	Neo-Geo/Neo-Geo.shtml \
	ZN/ZN.shtml \
	QPlayer/QPlayer.shtml \
	NeoJukeBox/NeoJukeBox.shtml \
	NebulaJukebox/NebulaJukebox.shtml \
	Nebula/Nebula.shtml \
	NebulaModel2/NebulaModel2.shtml \
	CrashTestsMAMEScreenshots/CrashTestsMAMEScreenshots.shtml \
	MAMEArtwork/MAMEArtwork.shtml \
	MAMECabinets/MAMECabinets.shtml \
	MAMEFlyers/MAMEFlyers.shtml \
	MAMEIcons/MAMEIcons.shtml \
	MAMEMarquees/MAMEMarquees.shtml \
	MAMEPanels/MAMEPanels.shtml \
	MAMESamples/MAMESamples.shtml \
	MAMESnaps/MAMESnaps.shtml \
	MAMETitles/MAMETitles.shtml \
	MAMusIcons/MAMusIcons.shtml \
	WinKawaks/WinKawaks.shtml \
	M1/M1.shtml \
	MPU/MPU.shtml \
	VivaNonno/VivaNonno.shtml \

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
