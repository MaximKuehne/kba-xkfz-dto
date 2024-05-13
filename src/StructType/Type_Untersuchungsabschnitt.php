<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Untersuchungsabschnitt StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Untersuchungsabschnitt extends AbstractStructBase
{
    /**
     * The IdentifizierungsnummerZFZREintrag
     */
    public ?string $IdentifizierungsnummerZFZREintrag = null;

    /**
     * The kennzeichen
     */
    public ?string $kennzeichen = null;

    /**
     * The Laenderkennzeichen
     */
    public ?string $Laenderkennzeichen = null;

    /**
     * The artDerUntersuchung
     */
    public ?\THAG\XKfz\StructType\Code_ArtDerUntersuchung $artDerUntersuchung = null;

    /**
     * The typDerUntersuchung
     */
    public ?\THAG\XKfz\StructType\Code_TypDerUntersuchung $typDerUntersuchung = null;

    /**
     * The ZeitpunktUntersuchung
     */
    public ?string $ZeitpunktUntersuchung = null;

    /**
     * The entscheidungZuteilungPruefplakettePruefmarke
     */
    public ?bool $entscheidungZuteilungPruefplakettePruefmarke = null;

    /**
     * The ergebnisDerUntersuchung
     */
    public ?\THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung $ergebnisDerUntersuchung = null;

    /**
     * The SchluesselFahrzeugklasse
     */
    public ?string $SchluesselFahrzeugklasse = null;

    /**
     * The TextTyp
     */
    public ?string $TextTyp = null;

    /**
     * The SchluesselTyp
     */
    public ?string $SchluesselTyp = null;

    /**
     * The TextVariante
     */
    public ?string $TextVariante = null;

    /**
     * The TextVersion
     */
    public ?string $TextVersion = null;

    /**
     * The SchluesselVarianteVersion
     */
    public ?string $SchluesselVarianteVersion = null;

    /**
     * The Kilometerstand
     */
    public ?int $Kilometerstand = null;

    /**
     * The Meilenstand
     */
    public ?int $Meilenstand = null;

    /**
     * The Betriebsstunden
     */
    public ?int $Betriebsstunden = null;

    /**
     * The MerkmalFahrleistungUnplausibel
     */
    public ?bool $MerkmalFahrleistungUnplausibel = null;

    /**
     * The ZulaessigeGesamtmasse
     */
    public ?int $ZulaessigeGesamtmasse = null;

    /**
     * The monatJahrLetzteHU
     */
    public ?string $monatJahrLetzteHU = null;

    /**
     * The AnordnungWiedervorfuehrpflicht
     */
    public ?bool $AnordnungWiedervorfuehrpflicht = null;

    /**
     * The ZeitpunktBearbeitungTU
     */
    public ?string $ZeitpunktBearbeitungTU = null;

    /**
     * The ZeitpunktVerarbeitung
     */
    public ?string $ZeitpunktVerarbeitung = null;

    /**
     * The ZeitpunktAenderung
     */
    public ?string $ZeitpunktAenderung = null;

    /**
     * The hinweise
     */
    public ?\THAG\XKfz\StructType\Type_ListeHinweise $hinweise = null;

    /**
     * The listeMaengel
     */
    public ?\THAG\XKfz\StructType\Type_ListeMaengel $listeMaengel = null;

    /**
     * The zeitpunktKorrekturStempelplaketten
     */
    public ?string $zeitpunktKorrekturStempelplaketten = null;

    /**
     * The zeitpunktKorrekturZB1
     */
    public ?string $zeitpunktKorrekturZB1 = null;

    /**
     * The korrigierendeBehoerdeKreisschluessel
     */
    public ?string $korrigierendeBehoerdeKreisschluessel = null;

    /**
     * The korrigierendeBehoerdeZusatzziffer
     */
    public ?string $korrigierendeBehoerdeZusatzziffer = null;

    /**
     * The ErgebnisNachMangelbeseitigung
     */
    public ?string $ErgebnisNachMangelbeseitigung = null;

    /**
     * Constructor method for Type.Untersuchungsabschnitt
     *
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
     */
    public function getIdentifizierungsnummerZFZREintrag(): ?string
    {
        return $this->IdentifizierungsnummerZFZREintrag;
    }

    /**
     * Set IdentifizierungsnummerZFZREintrag value
     */
    public function setIdentifizierungsnummerZFZREintrag(?string $identifizierungsnummerZFZREintrag = null): self
    {
        $this->IdentifizierungsnummerZFZREintrag = $identifizierungsnummerZFZREintrag;

        return $this;
    }

    /**
     * Get kennzeichen value
     */
    public function getKennzeichen(): ?string
    {
        return $this->kennzeichen;
    }

    /**
     * Set kennzeichen value
     */
    public function setKennzeichen(?string $kennzeichen = null): self
    {
        $this->kennzeichen = $kennzeichen;

        return $this;
    }

    /**
     * Get Laenderkennzeichen value
     */
    public function getLaenderkennzeichen(): ?string
    {
        return $this->Laenderkennzeichen;
    }

    /**
     * Set Laenderkennzeichen value
     */
    public function setLaenderkennzeichen(?string $laenderkennzeichen = null): self
    {
        $this->Laenderkennzeichen = $laenderkennzeichen;

        return $this;
    }

    /**
     * Get artDerUntersuchung value
     */
    public function getArtDerUntersuchung(): ?\THAG\XKfz\StructType\Code_ArtDerUntersuchung
    {
        return $this->artDerUntersuchung;
    }

    /**
     * Set artDerUntersuchung value
     */
    public function setArtDerUntersuchung(?\THAG\XKfz\StructType\Code_ArtDerUntersuchung $artDerUntersuchung = null): self
    {
        $this->artDerUntersuchung = $artDerUntersuchung;

        return $this;
    }

    /**
     * Get typDerUntersuchung value
     */
    public function getTypDerUntersuchung(): ?\THAG\XKfz\StructType\Code_TypDerUntersuchung
    {
        return $this->typDerUntersuchung;
    }

    /**
     * Set typDerUntersuchung value
     */
    public function setTypDerUntersuchung(?\THAG\XKfz\StructType\Code_TypDerUntersuchung $typDerUntersuchung = null): self
    {
        $this->typDerUntersuchung = $typDerUntersuchung;

        return $this;
    }

    /**
     * Get ZeitpunktUntersuchung value
     */
    public function getZeitpunktUntersuchung(): ?string
    {
        return $this->ZeitpunktUntersuchung;
    }

    /**
     * Set ZeitpunktUntersuchung value
     */
    public function setZeitpunktUntersuchung(?string $zeitpunktUntersuchung = null): self
    {
        $this->ZeitpunktUntersuchung = $zeitpunktUntersuchung;

        return $this;
    }

    /**
     * Get entscheidungZuteilungPruefplakettePruefmarke value
     */
    public function getEntscheidungZuteilungPruefplakettePruefmarke(): ?bool
    {
        return $this->entscheidungZuteilungPruefplakettePruefmarke;
    }

    /**
     * Set entscheidungZuteilungPruefplakettePruefmarke value
     */
    public function setEntscheidungZuteilungPruefplakettePruefmarke(?bool $entscheidungZuteilungPruefplakettePruefmarke = null): self
    {
        $this->entscheidungZuteilungPruefplakettePruefmarke = $entscheidungZuteilungPruefplakettePruefmarke;

        return $this;
    }

    /**
     * Get ergebnisDerUntersuchung value
     */
    public function getErgebnisDerUntersuchung(): ?\THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung
    {
        return $this->ergebnisDerUntersuchung;
    }

    /**
     * Set ergebnisDerUntersuchung value
     */
    public function setErgebnisDerUntersuchung(?\THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung $ergebnisDerUntersuchung = null): self
    {
        $this->ergebnisDerUntersuchung = $ergebnisDerUntersuchung;

        return $this;
    }

    /**
     * Get SchluesselFahrzeugklasse value
     */
    public function getSchluesselFahrzeugklasse(): ?string
    {
        return $this->SchluesselFahrzeugklasse;
    }

    /**
     * Set SchluesselFahrzeugklasse value
     */
    public function setSchluesselFahrzeugklasse(?string $schluesselFahrzeugklasse = null): self
    {
        $this->SchluesselFahrzeugklasse = $schluesselFahrzeugklasse;

        return $this;
    }

    /**
     * Get TextTyp value
     */
    public function getTextTyp(): ?string
    {
        return $this->TextTyp;
    }

    /**
     * Set TextTyp value
     */
    public function setTextTyp(?string $textTyp = null): self
    {
        $this->TextTyp = $textTyp;

        return $this;
    }

    /**
     * Get SchluesselTyp value
     */
    public function getSchluesselTyp(): ?string
    {
        return $this->SchluesselTyp;
    }

    /**
     * Set SchluesselTyp value
     */
    public function setSchluesselTyp(?string $schluesselTyp = null): self
    {
        $this->SchluesselTyp = $schluesselTyp;

        return $this;
    }

    /**
     * Get TextVariante value
     */
    public function getTextVariante(): ?string
    {
        return $this->TextVariante;
    }

    /**
     * Set TextVariante value
     */
    public function setTextVariante(?string $textVariante = null): self
    {
        $this->TextVariante = $textVariante;

        return $this;
    }

    /**
     * Get TextVersion value
     */
    public function getTextVersion(): ?string
    {
        return $this->TextVersion;
    }

    /**
     * Set TextVersion value
     */
    public function setTextVersion(?string $textVersion = null): self
    {
        $this->TextVersion = $textVersion;

        return $this;
    }

    /**
     * Get SchluesselVarianteVersion value
     */
    public function getSchluesselVarianteVersion(): ?string
    {
        return $this->SchluesselVarianteVersion;
    }

    /**
     * Set SchluesselVarianteVersion value
     */
    public function setSchluesselVarianteVersion(?string $schluesselVarianteVersion = null): self
    {
        $this->SchluesselVarianteVersion = $schluesselVarianteVersion;

        return $this;
    }

    /**
     * Get Kilometerstand value
     */
    public function getKilometerstand(): ?int
    {
        return $this->Kilometerstand;
    }

    /**
     * Set Kilometerstand value
     */
    public function setKilometerstand(?int $kilometerstand = null): self
    {
        $this->Kilometerstand = $kilometerstand;

        return $this;
    }

    /**
     * Get Meilenstand value
     */
    public function getMeilenstand(): ?int
    {
        return $this->Meilenstand;
    }

    /**
     * Set Meilenstand value
     */
    public function setMeilenstand(?int $meilenstand = null): self
    {
        $this->Meilenstand = $meilenstand;

        return $this;
    }

    /**
     * Get Betriebsstunden value
     */
    public function getBetriebsstunden(): ?int
    {
        return $this->Betriebsstunden;
    }

    /**
     * Set Betriebsstunden value
     */
    public function setBetriebsstunden(?int $betriebsstunden = null): self
    {
        $this->Betriebsstunden = $betriebsstunden;

        return $this;
    }

    /**
     * Get MerkmalFahrleistungUnplausibel value
     */
    public function getMerkmalFahrleistungUnplausibel(): ?bool
    {
        return $this->MerkmalFahrleistungUnplausibel;
    }

    /**
     * Set MerkmalFahrleistungUnplausibel value
     */
    public function setMerkmalFahrleistungUnplausibel(?bool $merkmalFahrleistungUnplausibel = null): self
    {
        $this->MerkmalFahrleistungUnplausibel = $merkmalFahrleistungUnplausibel;

        return $this;
    }

    /**
     * Get ZulaessigeGesamtmasse value
     */
    public function getZulaessigeGesamtmasse(): ?int
    {
        return $this->ZulaessigeGesamtmasse;
    }

    /**
     * Set ZulaessigeGesamtmasse value
     */
    public function setZulaessigeGesamtmasse(?int $zulaessigeGesamtmasse = null): self
    {
        $this->ZulaessigeGesamtmasse = $zulaessigeGesamtmasse;

        return $this;
    }

    /**
     * Get monatJahrLetzteHU value
     */
    public function getMonatJahrLetzteHU(): ?string
    {
        return $this->monatJahrLetzteHU;
    }

    /**
     * Set monatJahrLetzteHU value
     */
    public function setMonatJahrLetzteHU(?string $monatJahrLetzteHU = null): self
    {
        $this->monatJahrLetzteHU = $monatJahrLetzteHU;

        return $this;
    }

    /**
     * Get AnordnungWiedervorfuehrpflicht value
     */
    public function getAnordnungWiedervorfuehrpflicht(): ?bool
    {
        return $this->AnordnungWiedervorfuehrpflicht;
    }

    /**
     * Set AnordnungWiedervorfuehrpflicht value
     */
    public function setAnordnungWiedervorfuehrpflicht(?bool $anordnungWiedervorfuehrpflicht = null): self
    {
        $this->AnordnungWiedervorfuehrpflicht = $anordnungWiedervorfuehrpflicht;

        return $this;
    }

    /**
     * Get ZeitpunktBearbeitungTU value
     */
    public function getZeitpunktBearbeitungTU(): ?string
    {
        return $this->ZeitpunktBearbeitungTU;
    }

    /**
     * Set ZeitpunktBearbeitungTU value
     */
    public function setZeitpunktBearbeitungTU(?string $zeitpunktBearbeitungTU = null): self
    {
        $this->ZeitpunktBearbeitungTU = $zeitpunktBearbeitungTU;

        return $this;
    }

    /**
     * Get ZeitpunktVerarbeitung value
     */
    public function getZeitpunktVerarbeitung(): ?string
    {
        return $this->ZeitpunktVerarbeitung;
    }

    /**
     * Set ZeitpunktVerarbeitung value
     */
    public function setZeitpunktVerarbeitung(?string $zeitpunktVerarbeitung = null): self
    {
        $this->ZeitpunktVerarbeitung = $zeitpunktVerarbeitung;

        return $this;
    }

    /**
     * Get ZeitpunktAenderung value
     */
    public function getZeitpunktAenderung(): ?string
    {
        return $this->ZeitpunktAenderung;
    }

    /**
     * Set ZeitpunktAenderung value
     */
    public function setZeitpunktAenderung(?string $zeitpunktAenderung = null): self
    {
        $this->ZeitpunktAenderung = $zeitpunktAenderung;

        return $this;
    }

    /**
     * Get hinweise value
     */
    public function getHinweise(): ?\THAG\XKfz\StructType\Type_ListeHinweise
    {
        return $this->hinweise;
    }

    /**
     * Set hinweise value
     */
    public function setHinweise(?\THAG\XKfz\StructType\Type_ListeHinweise $hinweise = null): self
    {
        $this->hinweise = $hinweise;

        return $this;
    }

    /**
     * Get listeMaengel value
     */
    public function getListeMaengel(): ?\THAG\XKfz\StructType\Type_ListeMaengel
    {
        return $this->listeMaengel;
    }

    /**
     * Set listeMaengel value
     */
    public function setListeMaengel(?\THAG\XKfz\StructType\Type_ListeMaengel $listeMaengel = null): self
    {
        $this->listeMaengel = $listeMaengel;

        return $this;
    }

    /**
     * Get zeitpunktKorrekturStempelplaketten value
     */
    public function getZeitpunktKorrekturStempelplaketten(): ?string
    {
        return $this->zeitpunktKorrekturStempelplaketten;
    }

    /**
     * Set zeitpunktKorrekturStempelplaketten value
     */
    public function setZeitpunktKorrekturStempelplaketten(?string $zeitpunktKorrekturStempelplaketten = null): self
    {
        $this->zeitpunktKorrekturStempelplaketten = $zeitpunktKorrekturStempelplaketten;

        return $this;
    }

    /**
     * Get zeitpunktKorrekturZB1 value
     */
    public function getZeitpunktKorrekturZB1(): ?string
    {
        return $this->zeitpunktKorrekturZB1;
    }

    /**
     * Set zeitpunktKorrekturZB1 value
     */
    public function setZeitpunktKorrekturZB1(?string $zeitpunktKorrekturZB1 = null): self
    {
        $this->zeitpunktKorrekturZB1 = $zeitpunktKorrekturZB1;

        return $this;
    }

    /**
     * Get korrigierendeBehoerdeKreisschluessel value
     */
    public function getKorrigierendeBehoerdeKreisschluessel(): ?string
    {
        return $this->korrigierendeBehoerdeKreisschluessel;
    }

    /**
     * Set korrigierendeBehoerdeKreisschluessel value
     */
    public function setKorrigierendeBehoerdeKreisschluessel(?string $korrigierendeBehoerdeKreisschluessel = null): self
    {
        $this->korrigierendeBehoerdeKreisschluessel = $korrigierendeBehoerdeKreisschluessel;

        return $this;
    }

    /**
     * Get korrigierendeBehoerdeZusatzziffer value
     */
    public function getKorrigierendeBehoerdeZusatzziffer(): ?string
    {
        return $this->korrigierendeBehoerdeZusatzziffer;
    }

    /**
     * Set korrigierendeBehoerdeZusatzziffer value
     */
    public function setKorrigierendeBehoerdeZusatzziffer(?string $korrigierendeBehoerdeZusatzziffer = null): self
    {
        $this->korrigierendeBehoerdeZusatzziffer = $korrigierendeBehoerdeZusatzziffer;

        return $this;
    }

    /**
     * Get ErgebnisNachMangelbeseitigung value
     */
    public function getErgebnisNachMangelbeseitigung(): ?string
    {
        return $this->ErgebnisNachMangelbeseitigung;
    }

    /**
     * Set ErgebnisNachMangelbeseitigung value
     */
    public function setErgebnisNachMangelbeseitigung(?string $ergebnisNachMangelbeseitigung = null): self
    {
        $this->ErgebnisNachMangelbeseitigung = $ergebnisNachMangelbeseitigung;

        return $this;
    }
}
