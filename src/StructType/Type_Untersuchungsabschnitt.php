<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Untersuchungsabschnitt StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Untersuchungsabschnitt extends AbstractStructBase
{
    /**
     * The IdentifizierungsnummerZFZREintrag
     * @var string|null
     */
    public ?string $IdentifizierungsnummerZFZREintrag = null;
    /**
     * The kennzeichen
     * @var string|null
     */
    public ?string $kennzeichen = null;
    /**
     * The Laenderkennzeichen
     * @var string|null
     */
    public ?string $Laenderkennzeichen = null;
    /**
     * The artDerUntersuchung
     * @var \THAG\XKfz\StructType\Code_ArtDerUntersuchung|null
     */
    public ?\THAG\XKfz\StructType\Code_ArtDerUntersuchung $artDerUntersuchung = null;
    /**
     * The typDerUntersuchung
     * @var \THAG\XKfz\StructType\Code_TypDerUntersuchung|null
     */
    public ?\THAG\XKfz\StructType\Code_TypDerUntersuchung $typDerUntersuchung = null;
    /**
     * The ZeitpunktUntersuchung
     * @var string|null
     */
    public ?string $ZeitpunktUntersuchung = null;
    /**
     * The entscheidungZuteilungPruefplakettePruefmarke
     * @var bool|null
     */
    public ?bool $entscheidungZuteilungPruefplakettePruefmarke = null;
    /**
     * The ergebnisDerUntersuchung
     * @var \THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung|null
     */
    public ?\THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung $ergebnisDerUntersuchung = null;
    /**
     * The SchluesselFahrzeugklasse
     * @var string|null
     */
    public ?string $SchluesselFahrzeugklasse = null;
    /**
     * The TextTyp
     * @var string|null
     */
    public ?string $TextTyp = null;
    /**
     * The SchluesselTyp
     * @var string|null
     */
    public ?string $SchluesselTyp = null;
    /**
     * The TextVariante
     * @var string|null
     */
    public ?string $TextVariante = null;
    /**
     * The TextVersion
     * @var string|null
     */
    public ?string $TextVersion = null;
    /**
     * The SchluesselVarianteVersion
     * @var string|null
     */
    public ?string $SchluesselVarianteVersion = null;
    /**
     * The Kilometerstand
     * @var int|null
     */
    public ?int $Kilometerstand = null;
    /**
     * The Meilenstand
     * @var int|null
     */
    public ?int $Meilenstand = null;
    /**
     * The Betriebsstunden
     * @var int|null
     */
    public ?int $Betriebsstunden = null;
    /**
     * The MerkmalFahrleistungUnplausibel
     * @var bool|null
     */
    public ?bool $MerkmalFahrleistungUnplausibel = null;
    /**
     * The ZulaessigeGesamtmasse
     * @var int|null
     */
    public ?int $ZulaessigeGesamtmasse = null;
    /**
     * The monatJahrLetzteHU
     * @var string|null
     */
    public ?string $monatJahrLetzteHU = null;
    /**
     * The AnordnungWiedervorfuehrpflicht
     * @var bool|null
     */
    public ?bool $AnordnungWiedervorfuehrpflicht = null;
    /**
     * The ZeitpunktBearbeitungTU
     * @var string|null
     */
    public ?string $ZeitpunktBearbeitungTU = null;
    /**
     * The ZeitpunktVerarbeitung
     * @var string|null
     */
    public ?string $ZeitpunktVerarbeitung = null;
    /**
     * The ZeitpunktAenderung
     * @var string|null
     */
    public ?string $ZeitpunktAenderung = null;
    /**
     * The hinweise
     * @var \THAG\XKfz\StructType\Type_ListeHinweise|null
     */
    public ?\THAG\XKfz\StructType\Type_ListeHinweise $hinweise = null;
    /**
     * The listeMaengel
     * @var \THAG\XKfz\StructType\Type_ListeMaengel|null
     */
    public ?\THAG\XKfz\StructType\Type_ListeMaengel $listeMaengel = null;
    /**
     * The zeitpunktKorrekturStempelplaketten
     * @var string|null
     */
    public ?string $zeitpunktKorrekturStempelplaketten = null;
    /**
     * The zeitpunktKorrekturZB1
     * @var string|null
     */
    public ?string $zeitpunktKorrekturZB1 = null;
    /**
     * The korrigierendeBehoerdeKreisschluessel
     * @var string|null
     */
    public ?string $korrigierendeBehoerdeKreisschluessel = null;
    /**
     * The korrigierendeBehoerdeZusatzziffer
     * @var string|null
     */
    public ?string $korrigierendeBehoerdeZusatzziffer = null;
    /**
     * The ErgebnisNachMangelbeseitigung
     * @var string|null
     */
    public ?string $ErgebnisNachMangelbeseitigung = null;
    /**
     * Constructor method for Type.Untersuchungsabschnitt
     * @uses Type_Untersuchungsabschnitt::setIdentifizierungsnummerZFZREintrag()
     * @uses Type_Untersuchungsabschnitt::setKennzeichen()
     * @uses Type_Untersuchungsabschnitt::setLaenderkennzeichen()
     * @uses Type_Untersuchungsabschnitt::setArtDerUntersuchung()
     * @uses Type_Untersuchungsabschnitt::setTypDerUntersuchung()
     * @uses Type_Untersuchungsabschnitt::setZeitpunktUntersuchung()
     * @uses Type_Untersuchungsabschnitt::setEntscheidungZuteilungPruefplakettePruefmarke()
     * @uses Type_Untersuchungsabschnitt::setErgebnisDerUntersuchung()
     * @uses Type_Untersuchungsabschnitt::setSchluesselFahrzeugklasse()
     * @uses Type_Untersuchungsabschnitt::setTextTyp()
     * @uses Type_Untersuchungsabschnitt::setSchluesselTyp()
     * @uses Type_Untersuchungsabschnitt::setTextVariante()
     * @uses Type_Untersuchungsabschnitt::setTextVersion()
     * @uses Type_Untersuchungsabschnitt::setSchluesselVarianteVersion()
     * @uses Type_Untersuchungsabschnitt::setKilometerstand()
     * @uses Type_Untersuchungsabschnitt::setMeilenstand()
     * @uses Type_Untersuchungsabschnitt::setBetriebsstunden()
     * @uses Type_Untersuchungsabschnitt::setMerkmalFahrleistungUnplausibel()
     * @uses Type_Untersuchungsabschnitt::setZulaessigeGesamtmasse()
     * @uses Type_Untersuchungsabschnitt::setMonatJahrLetzteHU()
     * @uses Type_Untersuchungsabschnitt::setAnordnungWiedervorfuehrpflicht()
     * @uses Type_Untersuchungsabschnitt::setZeitpunktBearbeitungTU()
     * @uses Type_Untersuchungsabschnitt::setZeitpunktVerarbeitung()
     * @uses Type_Untersuchungsabschnitt::setZeitpunktAenderung()
     * @uses Type_Untersuchungsabschnitt::setHinweise()
     * @uses Type_Untersuchungsabschnitt::setListeMaengel()
     * @uses Type_Untersuchungsabschnitt::setZeitpunktKorrekturStempelplaketten()
     * @uses Type_Untersuchungsabschnitt::setZeitpunktKorrekturZB1()
     * @uses Type_Untersuchungsabschnitt::setKorrigierendeBehoerdeKreisschluessel()
     * @uses Type_Untersuchungsabschnitt::setKorrigierendeBehoerdeZusatzziffer()
     * @uses Type_Untersuchungsabschnitt::setErgebnisNachMangelbeseitigung()
     * @param string $identifizierungsnummerZFZREintrag
     * @param string $kennzeichen
     * @param string $laenderkennzeichen
     * @param \THAG\XKfz\StructType\Code_ArtDerUntersuchung $artDerUntersuchung
     * @param \THAG\XKfz\StructType\Code_TypDerUntersuchung $typDerUntersuchung
     * @param string $zeitpunktUntersuchung
     * @param bool $entscheidungZuteilungPruefplakettePruefmarke
     * @param \THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung $ergebnisDerUntersuchung
     * @param string $schluesselFahrzeugklasse
     * @param string $textTyp
     * @param string $schluesselTyp
     * @param string $textVariante
     * @param string $textVersion
     * @param string $schluesselVarianteVersion
     * @param int $kilometerstand
     * @param int $meilenstand
     * @param int $betriebsstunden
     * @param bool $merkmalFahrleistungUnplausibel
     * @param int $zulaessigeGesamtmasse
     * @param string $monatJahrLetzteHU
     * @param bool $anordnungWiedervorfuehrpflicht
     * @param string $zeitpunktBearbeitungTU
     * @param string $zeitpunktVerarbeitung
     * @param string $zeitpunktAenderung
     * @param \THAG\XKfz\StructType\Type_ListeHinweise $hinweise
     * @param \THAG\XKfz\StructType\Type_ListeMaengel $listeMaengel
     * @param string $zeitpunktKorrekturStempelplaketten
     * @param string $zeitpunktKorrekturZB1
     * @param string $korrigierendeBehoerdeKreisschluessel
     * @param string $korrigierendeBehoerdeZusatzziffer
     * @param string $ergebnisNachMangelbeseitigung
     */
    public function __construct(?string $identifizierungsnummerZFZREintrag = null, ?string $kennzeichen = null, ?string $laenderkennzeichen = null, ?\THAG\XKfz\StructType\Code_ArtDerUntersuchung $artDerUntersuchung = null, ?\THAG\XKfz\StructType\Code_TypDerUntersuchung $typDerUntersuchung = null, ?string $zeitpunktUntersuchung = null, ?bool $entscheidungZuteilungPruefplakettePruefmarke = null, ?\THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung $ergebnisDerUntersuchung = null, ?string $schluesselFahrzeugklasse = null, ?string $textTyp = null, ?string $schluesselTyp = null, ?string $textVariante = null, ?string $textVersion = null, ?string $schluesselVarianteVersion = null, ?int $kilometerstand = null, ?int $meilenstand = null, ?int $betriebsstunden = null, ?bool $merkmalFahrleistungUnplausibel = null, ?int $zulaessigeGesamtmasse = null, ?string $monatJahrLetzteHU = null, ?bool $anordnungWiedervorfuehrpflicht = null, ?string $zeitpunktBearbeitungTU = null, ?string $zeitpunktVerarbeitung = null, ?string $zeitpunktAenderung = null, ?\THAG\XKfz\StructType\Type_ListeHinweise $hinweise = null, ?\THAG\XKfz\StructType\Type_ListeMaengel $listeMaengel = null, ?string $zeitpunktKorrekturStempelplaketten = null, ?string $zeitpunktKorrekturZB1 = null, ?string $korrigierendeBehoerdeKreisschluessel = null, ?string $korrigierendeBehoerdeZusatzziffer = null, ?string $ergebnisNachMangelbeseitigung = null)
    {
        $this
            ->setIdentifizierungsnummerZFZREintrag($identifizierungsnummerZFZREintrag)
            ->setKennzeichen($kennzeichen)
            ->setLaenderkennzeichen($laenderkennzeichen)
            ->setArtDerUntersuchung($artDerUntersuchung)
            ->setTypDerUntersuchung($typDerUntersuchung)
            ->setZeitpunktUntersuchung($zeitpunktUntersuchung)
            ->setEntscheidungZuteilungPruefplakettePruefmarke($entscheidungZuteilungPruefplakettePruefmarke)
            ->setErgebnisDerUntersuchung($ergebnisDerUntersuchung)
            ->setSchluesselFahrzeugklasse($schluesselFahrzeugklasse)
            ->setTextTyp($textTyp)
            ->setSchluesselTyp($schluesselTyp)
            ->setTextVariante($textVariante)
            ->setTextVersion($textVersion)
            ->setSchluesselVarianteVersion($schluesselVarianteVersion)
            ->setKilometerstand($kilometerstand)
            ->setMeilenstand($meilenstand)
            ->setBetriebsstunden($betriebsstunden)
            ->setMerkmalFahrleistungUnplausibel($merkmalFahrleistungUnplausibel)
            ->setZulaessigeGesamtmasse($zulaessigeGesamtmasse)
            ->setMonatJahrLetzteHU($monatJahrLetzteHU)
            ->setAnordnungWiedervorfuehrpflicht($anordnungWiedervorfuehrpflicht)
            ->setZeitpunktBearbeitungTU($zeitpunktBearbeitungTU)
            ->setZeitpunktVerarbeitung($zeitpunktVerarbeitung)
            ->setZeitpunktAenderung($zeitpunktAenderung)
            ->setHinweise($hinweise)
            ->setListeMaengel($listeMaengel)
            ->setZeitpunktKorrekturStempelplaketten($zeitpunktKorrekturStempelplaketten)
            ->setZeitpunktKorrekturZB1($zeitpunktKorrekturZB1)
            ->setKorrigierendeBehoerdeKreisschluessel($korrigierendeBehoerdeKreisschluessel)
            ->setKorrigierendeBehoerdeZusatzziffer($korrigierendeBehoerdeZusatzziffer)
            ->setErgebnisNachMangelbeseitigung($ergebnisNachMangelbeseitigung);
    }
    /**
     * Get IdentifizierungsnummerZFZREintrag value
     * @return string|null
     */
    public function getIdentifizierungsnummerZFZREintrag(): ?string
    {
        return $this->IdentifizierungsnummerZFZREintrag;
    }
    /**
     * Set IdentifizierungsnummerZFZREintrag value
     * @param string $identifizierungsnummerZFZREintrag
     * @return \THAG\XKfz\StructType\Type_Untersuchungsabschnitt
     */
    public function setIdentifizierungsnummerZFZREintrag(?string $identifizierungsnummerZFZREintrag = null): self
    {
        $this->IdentifizierungsnummerZFZREintrag = $identifizierungsnummerZFZREintrag;
        
        return $this;
    }
    /**
     * Get kennzeichen value
     * @return string|null
     */
    public function getKennzeichen(): ?string
    {
        return $this->kennzeichen;
    }
    /**
     * Set kennzeichen value
     * @param string $kennzeichen
     * @return \THAG\XKfz\StructType\Type_Untersuchungsabschnitt
     */
    public function setKennzeichen(?string $kennzeichen = null): self
    {
        $this->kennzeichen = $kennzeichen;
        
        return $this;
    }
    /**
     * Get Laenderkennzeichen value
     * @return string|null
     */
    public function getLaenderkennzeichen(): ?string
    {
        return $this->Laenderkennzeichen;
    }
    /**
     * Set Laenderkennzeichen value
     * @param string $laenderkennzeichen
     * @return \THAG\XKfz\StructType\Type_Untersuchungsabschnitt
     */
    public function setLaenderkennzeichen(?string $laenderkennzeichen = null): self
    {
        $this->Laenderkennzeichen = $laenderkennzeichen;
        
        return $this;
    }
    /**
     * Get artDerUntersuchung value
     * @return \THAG\XKfz\StructType\Code_ArtDerUntersuchung|null
     */
    public function getArtDerUntersuchung(): ?\THAG\XKfz\StructType\Code_ArtDerUntersuchung
    {
        return $this->artDerUntersuchung;
    }
    /**
     * Set artDerUntersuchung value
     * @param \THAG\XKfz\StructType\Code_ArtDerUntersuchung $artDerUntersuchung
     * @return \THAG\XKfz\StructType\Type_Untersuchungsabschnitt
     */
    public function setArtDerUntersuchung(?\THAG\XKfz\StructType\Code_ArtDerUntersuchung $artDerUntersuchung = null): self
    {
        $this->artDerUntersuchung = $artDerUntersuchung;
        
        return $this;
    }
    /**
     * Get typDerUntersuchung value
     * @return \THAG\XKfz\StructType\Code_TypDerUntersuchung|null
     */
    public function getTypDerUntersuchung(): ?\THAG\XKfz\StructType\Code_TypDerUntersuchung
    {
        return $this->typDerUntersuchung;
    }
    /**
     * Set typDerUntersuchung value
     * @param \THAG\XKfz\StructType\Code_TypDerUntersuchung $typDerUntersuchung
     * @return \THAG\XKfz\StructType\Type_Untersuchungsabschnitt
     */
    public function setTypDerUntersuchung(?\THAG\XKfz\StructType\Code_TypDerUntersuchung $typDerUntersuchung = null): self
    {
        $this->typDerUntersuchung = $typDerUntersuchung;
        
        return $this;
    }
    /**
     * Get ZeitpunktUntersuchung value
     * @return string|null
     */
    public function getZeitpunktUntersuchung(): ?string
    {
        return $this->ZeitpunktUntersuchung;
    }
    /**
     * Set ZeitpunktUntersuchung value
     * @param string $zeitpunktUntersuchung
     * @return \THAG\XKfz\StructType\Type_Untersuchungsabschnitt
     */
    public function setZeitpunktUntersuchung(?string $zeitpunktUntersuchung = null): self
    {
        $this->ZeitpunktUntersuchung = $zeitpunktUntersuchung;
        
        return $this;
    }
    /**
     * Get entscheidungZuteilungPruefplakettePruefmarke value
     * @return bool|null
     */
    public function getEntscheidungZuteilungPruefplakettePruefmarke(): ?bool
    {
        return $this->entscheidungZuteilungPruefplakettePruefmarke;
    }
    /**
     * Set entscheidungZuteilungPruefplakettePruefmarke value
     * @param bool $entscheidungZuteilungPruefplakettePruefmarke
     * @return \THAG\XKfz\StructType\Type_Untersuchungsabschnitt
     */
    public function setEntscheidungZuteilungPruefplakettePruefmarke(?bool $entscheidungZuteilungPruefplakettePruefmarke = null): self
    {
        $this->entscheidungZuteilungPruefplakettePruefmarke = $entscheidungZuteilungPruefplakettePruefmarke;
        
        return $this;
    }
    /**
     * Get ergebnisDerUntersuchung value
     * @return \THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung|null
     */
    public function getErgebnisDerUntersuchung(): ?\THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung
    {
        return $this->ergebnisDerUntersuchung;
    }
    /**
     * Set ergebnisDerUntersuchung value
     * @param \THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung $ergebnisDerUntersuchung
     * @return \THAG\XKfz\StructType\Type_Untersuchungsabschnitt
     */
    public function setErgebnisDerUntersuchung(?\THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung $ergebnisDerUntersuchung = null): self
    {
        $this->ergebnisDerUntersuchung = $ergebnisDerUntersuchung;
        
        return $this;
    }
    /**
     * Get SchluesselFahrzeugklasse value
     * @return string|null
     */
    public function getSchluesselFahrzeugklasse(): ?string
    {
        return $this->SchluesselFahrzeugklasse;
    }
    /**
     * Set SchluesselFahrzeugklasse value
     * @param string $schluesselFahrzeugklasse
     * @return \THAG\XKfz\StructType\Type_Untersuchungsabschnitt
     */
    public function setSchluesselFahrzeugklasse(?string $schluesselFahrzeugklasse = null): self
    {
        $this->SchluesselFahrzeugklasse = $schluesselFahrzeugklasse;
        
        return $this;
    }
    /**
     * Get TextTyp value
     * @return string|null
     */
    public function getTextTyp(): ?string
    {
        return $this->TextTyp;
    }
    /**
     * Set TextTyp value
     * @param string $textTyp
     * @return \THAG\XKfz\StructType\Type_Untersuchungsabschnitt
     */
    public function setTextTyp(?string $textTyp = null): self
    {
        $this->TextTyp = $textTyp;
        
        return $this;
    }
    /**
     * Get SchluesselTyp value
     * @return string|null
     */
    public function getSchluesselTyp(): ?string
    {
        return $this->SchluesselTyp;
    }
    /**
     * Set SchluesselTyp value
     * @param string $schluesselTyp
     * @return \THAG\XKfz\StructType\Type_Untersuchungsabschnitt
     */
    public function setSchluesselTyp(?string $schluesselTyp = null): self
    {
        $this->SchluesselTyp = $schluesselTyp;
        
        return $this;
    }
    /**
     * Get TextVariante value
     * @return string|null
     */
    public function getTextVariante(): ?string
    {
        return $this->TextVariante;
    }
    /**
     * Set TextVariante value
     * @param string $textVariante
     * @return \THAG\XKfz\StructType\Type_Untersuchungsabschnitt
     */
    public function setTextVariante(?string $textVariante = null): self
    {
        $this->TextVariante = $textVariante;
        
        return $this;
    }
    /**
     * Get TextVersion value
     * @return string|null
     */
    public function getTextVersion(): ?string
    {
        return $this->TextVersion;
    }
    /**
     * Set TextVersion value
     * @param string $textVersion
     * @return \THAG\XKfz\StructType\Type_Untersuchungsabschnitt
     */
    public function setTextVersion(?string $textVersion = null): self
    {
        $this->TextVersion = $textVersion;
        
        return $this;
    }
    /**
     * Get SchluesselVarianteVersion value
     * @return string|null
     */
    public function getSchluesselVarianteVersion(): ?string
    {
        return $this->SchluesselVarianteVersion;
    }
    /**
     * Set SchluesselVarianteVersion value
     * @param string $schluesselVarianteVersion
     * @return \THAG\XKfz\StructType\Type_Untersuchungsabschnitt
     */
    public function setSchluesselVarianteVersion(?string $schluesselVarianteVersion = null): self
    {
        $this->SchluesselVarianteVersion = $schluesselVarianteVersion;
        
        return $this;
    }
    /**
     * Get Kilometerstand value
     * @return int|null
     */
    public function getKilometerstand(): ?int
    {
        return $this->Kilometerstand;
    }
    /**
     * Set Kilometerstand value
     * @param int $kilometerstand
     * @return \THAG\XKfz\StructType\Type_Untersuchungsabschnitt
     */
    public function setKilometerstand(?int $kilometerstand = null): self
    {
        $this->Kilometerstand = $kilometerstand;
        
        return $this;
    }
    /**
     * Get Meilenstand value
     * @return int|null
     */
    public function getMeilenstand(): ?int
    {
        return $this->Meilenstand;
    }
    /**
     * Set Meilenstand value
     * @param int $meilenstand
     * @return \THAG\XKfz\StructType\Type_Untersuchungsabschnitt
     */
    public function setMeilenstand(?int $meilenstand = null): self
    {
        $this->Meilenstand = $meilenstand;
        
        return $this;
    }
    /**
     * Get Betriebsstunden value
     * @return int|null
     */
    public function getBetriebsstunden(): ?int
    {
        return $this->Betriebsstunden;
    }
    /**
     * Set Betriebsstunden value
     * @param int $betriebsstunden
     * @return \THAG\XKfz\StructType\Type_Untersuchungsabschnitt
     */
    public function setBetriebsstunden(?int $betriebsstunden = null): self
    {
        $this->Betriebsstunden = $betriebsstunden;
        
        return $this;
    }
    /**
     * Get MerkmalFahrleistungUnplausibel value
     * @return bool|null
     */
    public function getMerkmalFahrleistungUnplausibel(): ?bool
    {
        return $this->MerkmalFahrleistungUnplausibel;
    }
    /**
     * Set MerkmalFahrleistungUnplausibel value
     * @param bool $merkmalFahrleistungUnplausibel
     * @return \THAG\XKfz\StructType\Type_Untersuchungsabschnitt
     */
    public function setMerkmalFahrleistungUnplausibel(?bool $merkmalFahrleistungUnplausibel = null): self
    {
        $this->MerkmalFahrleistungUnplausibel = $merkmalFahrleistungUnplausibel;
        
        return $this;
    }
    /**
     * Get ZulaessigeGesamtmasse value
     * @return int|null
     */
    public function getZulaessigeGesamtmasse(): ?int
    {
        return $this->ZulaessigeGesamtmasse;
    }
    /**
     * Set ZulaessigeGesamtmasse value
     * @param int $zulaessigeGesamtmasse
     * @return \THAG\XKfz\StructType\Type_Untersuchungsabschnitt
     */
    public function setZulaessigeGesamtmasse(?int $zulaessigeGesamtmasse = null): self
    {
        $this->ZulaessigeGesamtmasse = $zulaessigeGesamtmasse;
        
        return $this;
    }
    /**
     * Get monatJahrLetzteHU value
     * @return string|null
     */
    public function getMonatJahrLetzteHU(): ?string
    {
        return $this->monatJahrLetzteHU;
    }
    /**
     * Set monatJahrLetzteHU value
     * @param string $monatJahrLetzteHU
     * @return \THAG\XKfz\StructType\Type_Untersuchungsabschnitt
     */
    public function setMonatJahrLetzteHU(?string $monatJahrLetzteHU = null): self
    {
        $this->monatJahrLetzteHU = $monatJahrLetzteHU;
        
        return $this;
    }
    /**
     * Get AnordnungWiedervorfuehrpflicht value
     * @return bool|null
     */
    public function getAnordnungWiedervorfuehrpflicht(): ?bool
    {
        return $this->AnordnungWiedervorfuehrpflicht;
    }
    /**
     * Set AnordnungWiedervorfuehrpflicht value
     * @param bool $anordnungWiedervorfuehrpflicht
     * @return \THAG\XKfz\StructType\Type_Untersuchungsabschnitt
     */
    public function setAnordnungWiedervorfuehrpflicht(?bool $anordnungWiedervorfuehrpflicht = null): self
    {
        $this->AnordnungWiedervorfuehrpflicht = $anordnungWiedervorfuehrpflicht;
        
        return $this;
    }
    /**
     * Get ZeitpunktBearbeitungTU value
     * @return string|null
     */
    public function getZeitpunktBearbeitungTU(): ?string
    {
        return $this->ZeitpunktBearbeitungTU;
    }
    /**
     * Set ZeitpunktBearbeitungTU value
     * @param string $zeitpunktBearbeitungTU
     * @return \THAG\XKfz\StructType\Type_Untersuchungsabschnitt
     */
    public function setZeitpunktBearbeitungTU(?string $zeitpunktBearbeitungTU = null): self
    {
        $this->ZeitpunktBearbeitungTU = $zeitpunktBearbeitungTU;
        
        return $this;
    }
    /**
     * Get ZeitpunktVerarbeitung value
     * @return string|null
     */
    public function getZeitpunktVerarbeitung(): ?string
    {
        return $this->ZeitpunktVerarbeitung;
    }
    /**
     * Set ZeitpunktVerarbeitung value
     * @param string $zeitpunktVerarbeitung
     * @return \THAG\XKfz\StructType\Type_Untersuchungsabschnitt
     */
    public function setZeitpunktVerarbeitung(?string $zeitpunktVerarbeitung = null): self
    {
        $this->ZeitpunktVerarbeitung = $zeitpunktVerarbeitung;
        
        return $this;
    }
    /**
     * Get ZeitpunktAenderung value
     * @return string|null
     */
    public function getZeitpunktAenderung(): ?string
    {
        return $this->ZeitpunktAenderung;
    }
    /**
     * Set ZeitpunktAenderung value
     * @param string $zeitpunktAenderung
     * @return \THAG\XKfz\StructType\Type_Untersuchungsabschnitt
     */
    public function setZeitpunktAenderung(?string $zeitpunktAenderung = null): self
    {
        $this->ZeitpunktAenderung = $zeitpunktAenderung;
        
        return $this;
    }
    /**
     * Get hinweise value
     * @return \THAG\XKfz\StructType\Type_ListeHinweise|null
     */
    public function getHinweise(): ?\THAG\XKfz\StructType\Type_ListeHinweise
    {
        return $this->hinweise;
    }
    /**
     * Set hinweise value
     * @param \THAG\XKfz\StructType\Type_ListeHinweise $hinweise
     * @return \THAG\XKfz\StructType\Type_Untersuchungsabschnitt
     */
    public function setHinweise(?\THAG\XKfz\StructType\Type_ListeHinweise $hinweise = null): self
    {
        $this->hinweise = $hinweise;
        
        return $this;
    }
    /**
     * Get listeMaengel value
     * @return \THAG\XKfz\StructType\Type_ListeMaengel|null
     */
    public function getListeMaengel(): ?\THAG\XKfz\StructType\Type_ListeMaengel
    {
        return $this->listeMaengel;
    }
    /**
     * Set listeMaengel value
     * @param \THAG\XKfz\StructType\Type_ListeMaengel $listeMaengel
     * @return \THAG\XKfz\StructType\Type_Untersuchungsabschnitt
     */
    public function setListeMaengel(?\THAG\XKfz\StructType\Type_ListeMaengel $listeMaengel = null): self
    {
        $this->listeMaengel = $listeMaengel;
        
        return $this;
    }
    /**
     * Get zeitpunktKorrekturStempelplaketten value
     * @return string|null
     */
    public function getZeitpunktKorrekturStempelplaketten(): ?string
    {
        return $this->zeitpunktKorrekturStempelplaketten;
    }
    /**
     * Set zeitpunktKorrekturStempelplaketten value
     * @param string $zeitpunktKorrekturStempelplaketten
     * @return \THAG\XKfz\StructType\Type_Untersuchungsabschnitt
     */
    public function setZeitpunktKorrekturStempelplaketten(?string $zeitpunktKorrekturStempelplaketten = null): self
    {
        $this->zeitpunktKorrekturStempelplaketten = $zeitpunktKorrekturStempelplaketten;
        
        return $this;
    }
    /**
     * Get zeitpunktKorrekturZB1 value
     * @return string|null
     */
    public function getZeitpunktKorrekturZB1(): ?string
    {
        return $this->zeitpunktKorrekturZB1;
    }
    /**
     * Set zeitpunktKorrekturZB1 value
     * @param string $zeitpunktKorrekturZB1
     * @return \THAG\XKfz\StructType\Type_Untersuchungsabschnitt
     */
    public function setZeitpunktKorrekturZB1(?string $zeitpunktKorrekturZB1 = null): self
    {
        $this->zeitpunktKorrekturZB1 = $zeitpunktKorrekturZB1;
        
        return $this;
    }
    /**
     * Get korrigierendeBehoerdeKreisschluessel value
     * @return string|null
     */
    public function getKorrigierendeBehoerdeKreisschluessel(): ?string
    {
        return $this->korrigierendeBehoerdeKreisschluessel;
    }
    /**
     * Set korrigierendeBehoerdeKreisschluessel value
     * @param string $korrigierendeBehoerdeKreisschluessel
     * @return \THAG\XKfz\StructType\Type_Untersuchungsabschnitt
     */
    public function setKorrigierendeBehoerdeKreisschluessel(?string $korrigierendeBehoerdeKreisschluessel = null): self
    {
        $this->korrigierendeBehoerdeKreisschluessel = $korrigierendeBehoerdeKreisschluessel;
        
        return $this;
    }
    /**
     * Get korrigierendeBehoerdeZusatzziffer value
     * @return string|null
     */
    public function getKorrigierendeBehoerdeZusatzziffer(): ?string
    {
        return $this->korrigierendeBehoerdeZusatzziffer;
    }
    /**
     * Set korrigierendeBehoerdeZusatzziffer value
     * @param string $korrigierendeBehoerdeZusatzziffer
     * @return \THAG\XKfz\StructType\Type_Untersuchungsabschnitt
     */
    public function setKorrigierendeBehoerdeZusatzziffer(?string $korrigierendeBehoerdeZusatzziffer = null): self
    {
        $this->korrigierendeBehoerdeZusatzziffer = $korrigierendeBehoerdeZusatzziffer;
        
        return $this;
    }
    /**
     * Get ErgebnisNachMangelbeseitigung value
     * @return string|null
     */
    public function getErgebnisNachMangelbeseitigung(): ?string
    {
        return $this->ErgebnisNachMangelbeseitigung;
    }
    /**
     * Set ErgebnisNachMangelbeseitigung value
     * @param string $ergebnisNachMangelbeseitigung
     * @return \THAG\XKfz\StructType\Type_Untersuchungsabschnitt
     */
    public function setErgebnisNachMangelbeseitigung(?string $ergebnisNachMangelbeseitigung = null): self
    {
        $this->ErgebnisNachMangelbeseitigung = $ergebnisNachMangelbeseitigung;
        
        return $this;
    }
}
