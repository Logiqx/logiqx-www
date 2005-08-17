XT=@sabcmd
XTOPTS=

CONTENTS=Dats.shtml
CONTENTS_PHP=Dats.php
ROMCENTER=RomCenter.shtml
ROMCENTER_INF=RomCenter.inf
FILELIST=Files.lst

EMULATORS= \
	CrystalSystemEmulator/CrystalSystemEmulator.shtml \
	Daphne/Daphne.shtml \
	FinalBurnAlpha/FinalBurnAlpha.shtml \
	MAMEBeta/MAMEBeta.shtml \
	MAMEChanges/MAMEChanges.shtml \
	Pacifi3D/Pacifi3D.shtml \
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
	CrystalSystemEmulator/CrystalSystemEmulator.php \
	Daphne/Daphne.php \
	FinalBurnAlpha/FinalBurnAlpha.php \
	MAMEBeta/MAMEBeta.php \
	MAMEChanges/MAMEChanges.php \
	Pacifi3D/Pacifi3D.php \
	RadikalBikersEmulator/RadikalBikersEmulator.php \
	RAINE/RAINE.php \
	Tickle/Tickle.php \
	WinKawaks/WinKawaks.php \
	Zinc/Zinc.php \
	OlderEmus/OlderEmus.php \
	M1/M1.php \
	NebulaJukebox/NebulaJukebox.php \
	Nebula/Nebula.php \
	SEGAModel2Emulator/SEGAModel2Emulator.php \
	CPS-1/CPS-1.php \
	CPS-2/CPS-2.php \
	Neo-Geo/Neo-Geo.php \
	ZN/ZN.php \
	MPU/MPU.php \
	MAMEArtwork/MAMEArtwork.php \
	MAMESamples/MAMESamples.php \

all: $(CONTENTS) $(CONTENTS_PHP) $(ROMCENTER) $(ROMCENTER_INF) $(FILELIST) $(EMULATORS)

$(CONTENTS): $(EMULATORS) Dats.xml xsl/contents.xsl xsl/comments.xsl
	@echo Building $@...
	$(XT) $(XTOPTS) xsl/contents.xsl Dats.xml $@

$(CONTENTS_PHP): $(EMULATORS) Dats.xml xsl/contents_php.xsl xsl/comments.xsl
	@echo Building $@...
	$(XT) $(XTOPTS) xsl/contents_php.xsl Dats.xml $@

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

%.shtml: %.xml %.ent.xml xsl/emulator.xsl xsl/comments.xsl
	@echo Building $@...
	$(XT) $(XTOPTS) xsl/emulator.xsl $< $@

%.php: %.xml %.ent.xml xsl/emulator_php.xsl xsl/comments.xsl
	@echo Building $@...
	$(XT) $(XTOPTS) xsl/emulator_php.xsl $< $@
