XT=@sabcmd
XTOPTS=

CONTENTS=Dats.shtml
ROMCENTER=RomCenter.shtml
ROMCENTER_INF=RomCenter.inf
FILELIST=Files.lst

EMULATORS= \
	ACE/ACE.shtml \
	CPS-2/CPS-2.shtml \
	CPS-1/CPS-1.shtml \
	Callus95/Callus95.shtml \
	TheNewZealandStory/TheNewZealandStory.shtml \
	Calice/Calice.shtml \
	CottAGE/CottAGE.shtml \
	Daphne/Daphne.shtml \
	FinalBurn/FinalBurn.shtml \
	FinalBurnAlpha/FinalBurnAlpha.shtml \
	Laser/Laser.shtml \
	MAMEBeta/MAMEBeta.shtml \
	MAMEChanges/MAMEChanges.shtml \
	MAMETestDrivers/MAMETestDrivers.shtml \
	Mimic/Mimic.shtml \
	ModelerNew/ModelerNew.shtml \
	RAINE/RAINE.shtml \
	SegaSystem16/SegaSystem16.shtml \
	SegaSystem24Emulator/SegaSystem24Emulator.shtml \
	U64Emu/U64Emu.shtml \
	Virtua/Virtua.shtml \
	WinGorf/WinGorf.shtml \
	PinMAME/PinMAME.shtml \
	OlderEmus/OlderEmus.shtml \
	MESS/MESS.shtml \
	MESSBeta/MESSBeta.shtml \
	VisualAM/VisualAM.shtml \
	tROMbone/tROMbone.shtml \
	SNAME/SNAME.shtml \
	Neo-Geo/Neo-Geo.shtml \
	ZN/ZN.shtml \
	QPlayer/QPlayer.shtml \
	NeoJukeBox/NeoJukeBox.shtml \
	NebulaJukebox/NebulaJukebox.shtml \
	VAntAGE/VAntAGE.shtml \
	Nebula/Nebula.shtml \
	NebulaModel2/NebulaModel2.shtml \
	MAMEImages/MAMEImages.shtml \
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
	VisualPinball/VisualPinball.shtml \
	WinKawaks/WinKawaks.shtml \
	M1/M1.shtml \
	Hoot/Hoot.shtml \
	GXP/GXP.shtml \
	S11Emu/S11Emu.shtml \
	YAAME/YAAME.shtml \
	MPU/MPU.shtml \
	NeoRAGExSupp/NeoRAGExSupp.shtml \
	SledgeHammer/SledgeHammer.shtml \
	Zinc/Zinc.shtml \
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
