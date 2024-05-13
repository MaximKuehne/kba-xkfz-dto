<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UntersuchungsabschnittTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class UntersuchungsabschnittTyp extends AbstractStructBase
{
    /**
     * The IdentifizierungsnummerZFZREintrag
     */
    public ?string $IdentifizierungsnummerZFZREintrag = null;

    /**
     * The SchluesselnummerUeberwachungsinstitutionOderZDKCode
     */
    public ?string $SchluesselnummerUeberwachungsinstitutionOderZDKCode = null;

    /**
     * The SchluesselnummerUeberwachungsinstitutionOderZDKName
     */
    public ?string $SchluesselnummerUeberwachungsinstitutionOderZDKName = null;

    /**
     * The KontrollnummerSP
     */
    public ?string $KontrollnummerSP = null;

    /**
     * The Fahrzeugidentifizierungsnummer
     */
    public ?string $Fahrzeugidentifizierungsnummer = null;

    /**
     * The SchluesselHersteller
     */
    public ?string $SchluesselHersteller = null;

    /**
     * The TextHersteller
     */
    public ?string $TextHersteller = null;

    /**
     * The MonatJahrDerErstzulassung
     */
    public ?string $MonatJahrDerErstzulassung = null;

    /**
     * The Kennzeichen
     */
    public ?string $Kennzeichen = null;

    /**
     * The Laenderkennzeichen
     */
    public ?string $Laenderkennzeichen = null;

    /**
     * The Berichtsnummer
     */
    public ?string $Berichtsnummer = null;

    /**
     * The ArtDerUntersuchung
     */
    public ?string $ArtDerUntersuchung = null;

    /**
     * The TypDerUntersuchung
     */
    public ?string $TypDerUntersuchung = null;

    /**
     * The ZeitpunktUntersuchung
     */
    public ?string $ZeitpunktUntersuchung = null;

    /**
     * The EntscheidungZuteilungPruefplakettePruefmarke
     */
    public ?bool $EntscheidungZuteilungPruefplakettePruefmarke = null;

    /**
     * The NaechsteHauptuntersuchung
     */
    public ?string $NaechsteHauptuntersuchung = null;

    /**
     * The NaechsteSicherheitspruefung
     */
    public ?string $NaechsteSicherheitspruefung = null;

    /**
     * The ErgebnisVorOderOhneMaengelschleifeCode
     */
    public ?string $ErgebnisVorOderOhneMaengelschleifeCode = null;

    /**
     * The ErgebnisVorOderOhneMaengelschleifeName
     */
    public ?string $ErgebnisVorOderOhneMaengelschleifeName = null;

    /**
     * The ErgebnisNachMaengelschleifeCode
     */
    public ?string $ErgebnisNachMaengelschleifeCode = null;

    /**
     * The ErgebnisNachMaengelschleifeName
     */
    public ?string $ErgebnisNachMaengelschleifeName = null;

    /**
     * The ZeitpunktDerMaengelbehebung
     */
    public ?string $ZeitpunktDerMaengelbehebung = null;

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
     * The MerkmalFahrleistungUnplausibel
     */
    public ?bool $MerkmalFahrleistungUnplausibel = null;

    /**
     * The Meilenstand
     */
    public ?int $Meilenstand = null;

    /**
     * The Betriebsstunden
     */
    public ?int $Betriebsstunden = null;

    /**
     * The ZulaessigeGesamtmasse
     */
    public ?int $ZulaessigeGesamtmasse = null;

    /**
     * The MonatJahrLetzteHU
     */
    public ?string $MonatJahrLetzteHU = null;

    /**
     * The SchluesselUntersuchungsort
     */
    public ?string $SchluesselUntersuchungsort = null;

    /**
     * The TextUntersuchungsort
     */
    public ?string $TextUntersuchungsort = null;

    /**
     * The BundeslandCode
     */
    public ?string $BundeslandCode = null;

    /**
     * The BundeslandName
     */
    public ?string $BundeslandName = null;

    /**
     * The AnordnungWiedervorfuehrpflicht
     */
    public ?bool $AnordnungWiedervorfuehrpflicht = null;

    /**
     * The ArtUntersuchungsstelleCode
     */
    public ?string $ArtUntersuchungsstelleCode = null;

    /**
     * The ArtUntersuchungsstelleName
     */
    public ?string $ArtUntersuchungsstelleName = null;

    /**
     * The KennnummerPruefer
     */
    public ?string $KennnummerPruefer = null;

    /**
     * The MessdrehzahlBeiKraftrad
     */
    public ?float $MessdrehzahlBeiKraftrad = null;

    /**
     * The StandgeraeuschvergleichswertBeiKraftrad
     */
    public ?float $StandgeraeuschvergleichswertBeiKraftrad = null;

    /**
     * The StandgeraeuschwertSollBeiKraftrad
     */
    public ?float $StandgeraeuschwertSollBeiKraftrad = null;

    /**
     * The KontrollnummerUntersuchungUmweltvertraeglichkeit
     */
    public ?string $KontrollnummerUntersuchungUmweltvertraeglichkeit = null;

    /**
     * The DatumUntersuchungUmweltvertraeglichkeit
     */
    public ?string $DatumUntersuchungUmweltvertraeglichkeit = null;

    /**
     * The ZeitpunktBearbeitungTU
     */
    public ?string $ZeitpunktBearbeitungTU = null;

    /**
     * The ZeitpunktVerarbeitung
     */
    public ?string $ZeitpunktVerarbeitung = null;

    /**
     * The MerkmalStornierung
     */
    public ?string $MerkmalStornierung = null;

    /**
     * The ZeitpunktStornierung
     */
    public ?string $ZeitpunktStornierung = null;

    /**
     * The ZeitpunktAenderung
     */
    public ?string $ZeitpunktAenderung = null;

    /**
     * The MerkmalHUExpressVerfahren
     */
    public ?bool $MerkmalHUExpressVerfahren = null;

    /**
     * The ZustaendigeBehoerdeKreisschluesselExpress
     */
    public ?string $ZustaendigeBehoerdeKreisschluesselExpress = null;

    /**
     * The ZustaendigeBehoerdeZusatzzifferExpress
     */
    public ?string $ZustaendigeBehoerdeZusatzzifferExpress = null;

    /**
     * The SchluesselnummerUeberwachungsinstitutionOderZDKExpress
     */
    public ?string $SchluesselnummerUeberwachungsinstitutionOderZDKExpress = null;

    /**
     * The FahrzeugidentifizierungsnummerExpress
     */
    public ?string $FahrzeugidentifizierungsnummerExpress = null;

    /**
     * The NaechsteHauptuntersuchungExpress
     */
    public ?string $NaechsteHauptuntersuchungExpress = null;

    /**
     * The NaechsteSicherheitspruefungExpress
     */
    public ?string $NaechsteSicherheitspruefungExpress = null;

    /**
     * The DatumUntersuchungExpress
     */
    public ?string $DatumUntersuchungExpress = null;

    /**
     * The DatumAusgabeExpress
     */
    public ?string $DatumAusgabeExpress = null;

    /**
     * The Hinweise
     */
    public ?\THAG\XKfz\StructType\Hinweise $Hinweise = null;

    /**
     * The Bremsmessung
     */
    public ?\THAG\XKfz\StructType\Bremsmessung $Bremsmessung = null;

    /**
     * The Maengel
     */
    public ?\THAG\XKfz\StructType\Maengel $Maengel = null;

    /**
     * The GebuehrEntgelt
     */
    public ?\THAG\XKfz\StructType\GebuehrEntgelt $GebuehrEntgelt = null;

    /**
     * The ZeitpunktKorrekturStempelplaketten
     */
    public ?string $ZeitpunktKorrekturStempelplaketten = null;

    /**
     * The ZeitpunktKorrekturZB1
     */
    public ?string $ZeitpunktKorrekturZB1 = null;

    /**
     * The KorrigierendeBehoerdeKreisschluessel
     */
    public ?string $KorrigierendeBehoerdeKreisschluessel = null;

    /**
     * The KorrigierendeBehoerdeZusatzziffer
     */
    public ?string $KorrigierendeBehoerdeZusatzziffer = null;

    /**
     * The ErgebnisNachMangelbeseitigung
     */
    public ?string $ErgebnisNachMangelbeseitigung = null;

    /**
     * Constructor method for UntersuchungsabschnittTyp
     *
     * @uses UntersuchungsabschnittTyp::setIdentifizierungsnummerZFZREintrag()
     * @uses UntersuchungsabschnittTyp::setSchluesselnummerUeberwachungsinstitutionOderZDKCode()
     * @uses UntersuchungsabschnittTyp::setSchluesselnummerUeberwachungsinstitutionOderZDKName()
     * @uses UntersuchungsabschnittTyp::setKontrollnummerSP()
     * @uses UntersuchungsabschnittTyp::setFahrzeugidentifizierungsnummer()
     * @uses UntersuchungsabschnittTyp::setSchluesselHersteller()
     * @uses UntersuchungsabschnittTyp::setTextHersteller()
     * @uses UntersuchungsabschnittTyp::setMonatJahrDerErstzulassung()
     * @uses UntersuchungsabschnittTyp::setKennzeichen()
     * @uses UntersuchungsabschnittTyp::setLaenderkennzeichen()
     * @uses UntersuchungsabschnittTyp::setBerichtsnummer()
     * @uses UntersuchungsabschnittTyp::setArtDerUntersuchung()
     * @uses UntersuchungsabschnittTyp::setTypDerUntersuchung()
     * @uses UntersuchungsabschnittTyp::setZeitpunktUntersuchung()
     * @uses UntersuchungsabschnittTyp::setEntscheidungZuteilungPruefplakettePruefmarke()
     * @uses UntersuchungsabschnittTyp::setNaechsteHauptuntersuchung()
     * @uses UntersuchungsabschnittTyp::setNaechsteSicherheitspruefung()
     * @uses UntersuchungsabschnittTyp::setErgebnisVorOderOhneMaengelschleifeCode()
     * @uses UntersuchungsabschnittTyp::setErgebnisVorOderOhneMaengelschleifeName()
     * @uses UntersuchungsabschnittTyp::setErgebnisNachMaengelschleifeCode()
     * @uses UntersuchungsabschnittTyp::setErgebnisNachMaengelschleifeName()
     * @uses UntersuchungsabschnittTyp::setZeitpunktDerMaengelbehebung()
     * @uses UntersuchungsabschnittTyp::setSchluesselFahrzeugklasse()
     * @uses UntersuchungsabschnittTyp::setTextTyp()
     * @uses UntersuchungsabschnittTyp::setSchluesselTyp()
     * @uses UntersuchungsabschnittTyp::setTextVariante()
     * @uses UntersuchungsabschnittTyp::setTextVersion()
     * @uses UntersuchungsabschnittTyp::setSchluesselVarianteVersion()
     * @uses UntersuchungsabschnittTyp::setKilometerstand()
     * @uses UntersuchungsabschnittTyp::setMerkmalFahrleistungUnplausibel()
     * @uses UntersuchungsabschnittTyp::setMeilenstand()
     * @uses UntersuchungsabschnittTyp::setBetriebsstunden()
     * @uses UntersuchungsabschnittTyp::setZulaessigeGesamtmasse()
     * @uses UntersuchungsabschnittTyp::setMonatJahrLetzteHU()
     * @uses UntersuchungsabschnittTyp::setSchluesselUntersuchungsort()
     * @uses UntersuchungsabschnittTyp::setTextUntersuchungsort()
     * @uses UntersuchungsabschnittTyp::setBundeslandCode()
     * @uses UntersuchungsabschnittTyp::setBundeslandName()
     * @uses UntersuchungsabschnittTyp::setAnordnungWiedervorfuehrpflicht()
     * @uses UntersuchungsabschnittTyp::setArtUntersuchungsstelleCode()
     * @uses UntersuchungsabschnittTyp::setArtUntersuchungsstelleName()
     * @uses UntersuchungsabschnittTyp::setKennnummerPruefer()
     * @uses UntersuchungsabschnittTyp::setMessdrehzahlBeiKraftrad()
     * @uses UntersuchungsabschnittTyp::setStandgeraeuschvergleichswertBeiKraftrad()
     * @uses UntersuchungsabschnittTyp::setStandgeraeuschwertSollBeiKraftrad()
     * @uses UntersuchungsabschnittTyp::setKontrollnummerUntersuchungUmweltvertraeglichkeit()
     * @uses UntersuchungsabschnittTyp::setDatumUntersuchungUmweltvertraeglichkeit()
     * @uses UntersuchungsabschnittTyp::setZeitpunktBearbeitungTU()
     * @uses UntersuchungsabschnittTyp::setZeitpunktVerarbeitung()
     * @uses UntersuchungsabschnittTyp::setMerkmalStornierung()
     * @uses UntersuchungsabschnittTyp::setZeitpunktStornierung()
     * @uses UntersuchungsabschnittTyp::setZeitpunktAenderung()
     * @uses UntersuchungsabschnittTyp::setMerkmalHUExpressVerfahren()
     * @uses UntersuchungsabschnittTyp::setZustaendigeBehoerdeKreisschluesselExpress()
     * @uses UntersuchungsabschnittTyp::setZustaendigeBehoerdeZusatzzifferExpress()
     * @uses UntersuchungsabschnittTyp::setSchluesselnummerUeberwachungsinstitutionOderZDKExpress()
     * @uses UntersuchungsabschnittTyp::setFahrzeugidentifizierungsnummerExpress()
     * @uses UntersuchungsabschnittTyp::setNaechsteHauptuntersuchungExpress()
     * @uses UntersuchungsabschnittTyp::setNaechsteSicherheitspruefungExpress()
     * @uses UntersuchungsabschnittTyp::setDatumUntersuchungExpress()
     * @uses UntersuchungsabschnittTyp::setDatumAusgabeExpress()
     * @uses UntersuchungsabschnittTyp::setHinweise()
     * @uses UntersuchungsabschnittTyp::setBremsmessung()
     * @uses UntersuchungsabschnittTyp::setMaengel()
     * @uses UntersuchungsabschnittTyp::setGebuehrEntgelt()
     * @uses UntersuchungsabschnittTyp::setZeitpunktKorrekturStempelplaketten()
     * @uses UntersuchungsabschnittTyp::setZeitpunktKorrekturZB1()
     * @uses UntersuchungsabschnittTyp::setKorrigierendeBehoerdeKreisschluessel()
     * @uses UntersuchungsabschnittTyp::setKorrigierendeBehoerdeZusatzziffer()
     * @uses UntersuchungsabschnittTyp::setErgebnisNachMangelbeseitigung()
     */
    public function __construct(?string $identifizierungsnummerZFZREintrag = null, ?string $schluesselnummerUeberwachungsinstitutionOderZDKCode = null, ?string $schluesselnummerUeberwachungsinstitutionOderZDKName = null, ?string $kontrollnummerSP = null, ?string $fahrzeugidentifizierungsnummer = null, ?string $schluesselHersteller = null, ?string $textHersteller = null, ?string $monatJahrDerErstzulassung = null, ?string $kennzeichen = null, ?string $laenderkennzeichen = null, ?string $berichtsnummer = null, ?string $artDerUntersuchung = null, ?string $typDerUntersuchung = null, ?string $zeitpunktUntersuchung = null, ?bool $entscheidungZuteilungPruefplakettePruefmarke = null, ?string $naechsteHauptuntersuchung = null, ?string $naechsteSicherheitspruefung = null, ?string $ergebnisVorOderOhneMaengelschleifeCode = null, ?string $ergebnisVorOderOhneMaengelschleifeName = null, ?string $ergebnisNachMaengelschleifeCode = null, ?string $ergebnisNachMaengelschleifeName = null, ?string $zeitpunktDerMaengelbehebung = null, ?string $schluesselFahrzeugklasse = null, ?string $textTyp = null, ?string $schluesselTyp = null, ?string $textVariante = null, ?string $textVersion = null, ?string $schluesselVarianteVersion = null, ?int $kilometerstand = null, ?bool $merkmalFahrleistungUnplausibel = null, ?int $meilenstand = null, ?int $betriebsstunden = null, ?int $zulaessigeGesamtmasse = null, ?string $monatJahrLetzteHU = null, ?string $schluesselUntersuchungsort = null, ?string $textUntersuchungsort = null, ?string $bundeslandCode = null, ?string $bundeslandName = null, ?bool $anordnungWiedervorfuehrpflicht = null, ?string $artUntersuchungsstelleCode = null, ?string $artUntersuchungsstelleName = null, ?string $kennnummerPruefer = null, ?float $messdrehzahlBeiKraftrad = null, ?float $standgeraeuschvergleichswertBeiKraftrad = null, ?float $standgeraeuschwertSollBeiKraftrad = null, ?string $kontrollnummerUntersuchungUmweltvertraeglichkeit = null, ?string $datumUntersuchungUmweltvertraeglichkeit = null, ?string $zeitpunktBearbeitungTU = null, ?string $zeitpunktVerarbeitung = null, ?string $merkmalStornierung = null, ?string $zeitpunktStornierung = null, ?string $zeitpunktAenderung = null, ?bool $merkmalHUExpressVerfahren = null, ?string $zustaendigeBehoerdeKreisschluesselExpress = null, ?string $zustaendigeBehoerdeZusatzzifferExpress = null, ?string $schluesselnummerUeberwachungsinstitutionOderZDKExpress = null, ?string $fahrzeugidentifizierungsnummerExpress = null, ?string $naechsteHauptuntersuchungExpress = null, ?string $naechsteSicherheitspruefungExpress = null, ?string $datumUntersuchungExpress = null, ?string $datumAusgabeExpress = null, ?\THAG\XKfz\StructType\Hinweise $hinweise = null, ?\THAG\XKfz\StructType\Bremsmessung $bremsmessung = null, ?\THAG\XKfz\StructType\Maengel $maengel = null, ?\THAG\XKfz\StructType\GebuehrEntgelt $gebuehrEntgelt = null, ?string $zeitpunktKorrekturStempelplaketten = null, ?string $zeitpunktKorrekturZB1 = null, ?string $korrigierendeBehoerdeKreisschluessel = null, ?string $korrigierendeBehoerdeZusatzziffer = null, ?string $ergebnisNachMangelbeseitigung = null)
    {
        $this
            ->setIdentifizierungsnummerZFZREintrag($identifizierungsnummerZFZREintrag)
            ->setSchluesselnummerUeberwachungsinstitutionOderZDKCode($schluesselnummerUeberwachungsinstitutionOderZDKCode)
            ->setSchluesselnummerUeberwachungsinstitutionOderZDKName($schluesselnummerUeberwachungsinstitutionOderZDKName)
            ->setKontrollnummerSP($kontrollnummerSP)
            ->setFahrzeugidentifizierungsnummer($fahrzeugidentifizierungsnummer)
            ->setSchluesselHersteller($schluesselHersteller)
            ->setTextHersteller($textHersteller)
            ->setMonatJahrDerErstzulassung($monatJahrDerErstzulassung)
            ->setKennzeichen($kennzeichen)
            ->setLaenderkennzeichen($laenderkennzeichen)
            ->setBerichtsnummer($berichtsnummer)
            ->setArtDerUntersuchung($artDerUntersuchung)
            ->setTypDerUntersuchung($typDerUntersuchung)
            ->setZeitpunktUntersuchung($zeitpunktUntersuchung)
            ->setEntscheidungZuteilungPruefplakettePruefmarke($entscheidungZuteilungPruefplakettePruefmarke)
            ->setNaechsteHauptuntersuchung($naechsteHauptuntersuchung)
            ->setNaechsteSicherheitspruefung($naechsteSicherheitspruefung)
            ->setErgebnisVorOderOhneMaengelschleifeCode($ergebnisVorOderOhneMaengelschleifeCode)
            ->setErgebnisVorOderOhneMaengelschleifeName($ergebnisVorOderOhneMaengelschleifeName)
            ->setErgebnisNachMaengelschleifeCode($ergebnisNachMaengelschleifeCode)
            ->setErgebnisNachMaengelschleifeName($ergebnisNachMaengelschleifeName)
            ->setZeitpunktDerMaengelbehebung($zeitpunktDerMaengelbehebung)
            ->setSchluesselFahrzeugklasse($schluesselFahrzeugklasse)
            ->setTextTyp($textTyp)
            ->setSchluesselTyp($schluesselTyp)
            ->setTextVariante($textVariante)
            ->setTextVersion($textVersion)
            ->setSchluesselVarianteVersion($schluesselVarianteVersion)
            ->setKilometerstand($kilometerstand)
            ->setMerkmalFahrleistungUnplausibel($merkmalFahrleistungUnplausibel)
            ->setMeilenstand($meilenstand)
            ->setBetriebsstunden($betriebsstunden)
            ->setZulaessigeGesamtmasse($zulaessigeGesamtmasse)
            ->setMonatJahrLetzteHU($monatJahrLetzteHU)
            ->setSchluesselUntersuchungsort($schluesselUntersuchungsort)
            ->setTextUntersuchungsort($textUntersuchungsort)
            ->setBundeslandCode($bundeslandCode)
            ->setBundeslandName($bundeslandName)
            ->setAnordnungWiedervorfuehrpflicht($anordnungWiedervorfuehrpflicht)
            ->setArtUntersuchungsstelleCode($artUntersuchungsstelleCode)
            ->setArtUntersuchungsstelleName($artUntersuchungsstelleName)
            ->setKennnummerPruefer($kennnummerPruefer)
            ->setMessdrehzahlBeiKraftrad($messdrehzahlBeiKraftrad)
            ->setStandgeraeuschvergleichswertBeiKraftrad($standgeraeuschvergleichswertBeiKraftrad)
            ->setStandgeraeuschwertSollBeiKraftrad($standgeraeuschwertSollBeiKraftrad)
            ->setKontrollnummerUntersuchungUmweltvertraeglichkeit($kontrollnummerUntersuchungUmweltvertraeglichkeit)
            ->setDatumUntersuchungUmweltvertraeglichkeit($datumUntersuchungUmweltvertraeglichkeit)
            ->setZeitpunktBearbeitungTU($zeitpunktBearbeitungTU)
            ->setZeitpunktVerarbeitung($zeitpunktVerarbeitung)
            ->setMerkmalStornierung($merkmalStornierung)
            ->setZeitpunktStornierung($zeitpunktStornierung)
            ->setZeitpunktAenderung($zeitpunktAenderung)
            ->setMerkmalHUExpressVerfahren($merkmalHUExpressVerfahren)
            ->setZustaendigeBehoerdeKreisschluesselExpress($zustaendigeBehoerdeKreisschluesselExpress)
            ->setZustaendigeBehoerdeZusatzzifferExpress($zustaendigeBehoerdeZusatzzifferExpress)
            ->setSchluesselnummerUeberwachungsinstitutionOderZDKExpress($schluesselnummerUeberwachungsinstitutionOderZDKExpress)
            ->setFahrzeugidentifizierungsnummerExpress($fahrzeugidentifizierungsnummerExpress)
            ->setNaechsteHauptuntersuchungExpress($naechsteHauptuntersuchungExpress)
            ->setNaechsteSicherheitspruefungExpress($naechsteSicherheitspruefungExpress)
            ->setDatumUntersuchungExpress($datumUntersuchungExpress)
            ->setDatumAusgabeExpress($datumAusgabeExpress)
            ->setHinweise($hinweise)
            ->setBremsmessung($bremsmessung)
            ->setMaengel($maengel)
            ->setGebuehrEntgelt($gebuehrEntgelt)
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
     * Get SchluesselnummerUeberwachungsinstitutionOderZDKCode value
     */
    public function getSchluesselnummerUeberwachungsinstitutionOderZDKCode(): ?string
    {
        return $this->SchluesselnummerUeberwachungsinstitutionOderZDKCode;
    }

    /**
     * Set SchluesselnummerUeberwachungsinstitutionOderZDKCode value
     */
    public function setSchluesselnummerUeberwachungsinstitutionOderZDKCode(?string $schluesselnummerUeberwachungsinstitutionOderZDKCode = null): self
    {
        $this->SchluesselnummerUeberwachungsinstitutionOderZDKCode = $schluesselnummerUeberwachungsinstitutionOderZDKCode;

        return $this;
    }

    /**
     * Get SchluesselnummerUeberwachungsinstitutionOderZDKName value
     */
    public function getSchluesselnummerUeberwachungsinstitutionOderZDKName(): ?string
    {
        return $this->SchluesselnummerUeberwachungsinstitutionOderZDKName;
    }

    /**
     * Set SchluesselnummerUeberwachungsinstitutionOderZDKName value
     */
    public function setSchluesselnummerUeberwachungsinstitutionOderZDKName(?string $schluesselnummerUeberwachungsinstitutionOderZDKName = null): self
    {
        $this->SchluesselnummerUeberwachungsinstitutionOderZDKName = $schluesselnummerUeberwachungsinstitutionOderZDKName;

        return $this;
    }

    /**
     * Get KontrollnummerSP value
     */
    public function getKontrollnummerSP(): ?string
    {
        return $this->KontrollnummerSP;
    }

    /**
     * Set KontrollnummerSP value
     */
    public function setKontrollnummerSP(?string $kontrollnummerSP = null): self
    {
        $this->KontrollnummerSP = $kontrollnummerSP;

        return $this;
    }

    /**
     * Get Fahrzeugidentifizierungsnummer value
     */
    public function getFahrzeugidentifizierungsnummer(): ?string
    {
        return $this->Fahrzeugidentifizierungsnummer;
    }

    /**
     * Set Fahrzeugidentifizierungsnummer value
     */
    public function setFahrzeugidentifizierungsnummer(?string $fahrzeugidentifizierungsnummer = null): self
    {
        $this->Fahrzeugidentifizierungsnummer = $fahrzeugidentifizierungsnummer;

        return $this;
    }

    /**
     * Get SchluesselHersteller value
     */
    public function getSchluesselHersteller(): ?string
    {
        return $this->SchluesselHersteller;
    }

    /**
     * Set SchluesselHersteller value
     */
    public function setSchluesselHersteller(?string $schluesselHersteller = null): self
    {
        $this->SchluesselHersteller = $schluesselHersteller;

        return $this;
    }

    /**
     * Get TextHersteller value
     */
    public function getTextHersteller(): ?string
    {
        return $this->TextHersteller;
    }

    /**
     * Set TextHersteller value
     */
    public function setTextHersteller(?string $textHersteller = null): self
    {
        $this->TextHersteller = $textHersteller;

        return $this;
    }

    /**
     * Get MonatJahrDerErstzulassung value
     */
    public function getMonatJahrDerErstzulassung(): ?string
    {
        return $this->MonatJahrDerErstzulassung;
    }

    /**
     * Set MonatJahrDerErstzulassung value
     */
    public function setMonatJahrDerErstzulassung(?string $monatJahrDerErstzulassung = null): self
    {
        $this->MonatJahrDerErstzulassung = $monatJahrDerErstzulassung;

        return $this;
    }

    /**
     * Get Kennzeichen value
     */
    public function getKennzeichen(): ?string
    {
        return $this->Kennzeichen;
    }

    /**
     * Set Kennzeichen value
     */
    public function setKennzeichen(?string $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;

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
     * Get Berichtsnummer value
     */
    public function getBerichtsnummer(): ?string
    {
        return $this->Berichtsnummer;
    }

    /**
     * Set Berichtsnummer value
     */
    public function setBerichtsnummer(?string $berichtsnummer = null): self
    {
        $this->Berichtsnummer = $berichtsnummer;

        return $this;
    }

    /**
     * Get ArtDerUntersuchung value
     */
    public function getArtDerUntersuchung(): ?string
    {
        return $this->ArtDerUntersuchung;
    }

    /**
     * Set ArtDerUntersuchung value
     */
    public function setArtDerUntersuchung(?string $artDerUntersuchung = null): self
    {
        $this->ArtDerUntersuchung = $artDerUntersuchung;

        return $this;
    }

    /**
     * Get TypDerUntersuchung value
     */
    public function getTypDerUntersuchung(): ?string
    {
        return $this->TypDerUntersuchung;
    }

    /**
     * Set TypDerUntersuchung value
     */
    public function setTypDerUntersuchung(?string $typDerUntersuchung = null): self
    {
        $this->TypDerUntersuchung = $typDerUntersuchung;

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
     * Get EntscheidungZuteilungPruefplakettePruefmarke value
     */
    public function getEntscheidungZuteilungPruefplakettePruefmarke(): ?bool
    {
        return $this->EntscheidungZuteilungPruefplakettePruefmarke;
    }

    /**
     * Set EntscheidungZuteilungPruefplakettePruefmarke value
     */
    public function setEntscheidungZuteilungPruefplakettePruefmarke(?bool $entscheidungZuteilungPruefplakettePruefmarke = null): self
    {
        $this->EntscheidungZuteilungPruefplakettePruefmarke = $entscheidungZuteilungPruefplakettePruefmarke;

        return $this;
    }

    /**
     * Get NaechsteHauptuntersuchung value
     */
    public function getNaechsteHauptuntersuchung(): ?string
    {
        return $this->NaechsteHauptuntersuchung;
    }

    /**
     * Set NaechsteHauptuntersuchung value
     */
    public function setNaechsteHauptuntersuchung(?string $naechsteHauptuntersuchung = null): self
    {
        $this->NaechsteHauptuntersuchung = $naechsteHauptuntersuchung;

        return $this;
    }

    /**
     * Get NaechsteSicherheitspruefung value
     */
    public function getNaechsteSicherheitspruefung(): ?string
    {
        return $this->NaechsteSicherheitspruefung;
    }

    /**
     * Set NaechsteSicherheitspruefung value
     */
    public function setNaechsteSicherheitspruefung(?string $naechsteSicherheitspruefung = null): self
    {
        $this->NaechsteSicherheitspruefung = $naechsteSicherheitspruefung;

        return $this;
    }

    /**
     * Get ErgebnisVorOderOhneMaengelschleifeCode value
     */
    public function getErgebnisVorOderOhneMaengelschleifeCode(): ?string
    {
        return $this->ErgebnisVorOderOhneMaengelschleifeCode;
    }

    /**
     * Set ErgebnisVorOderOhneMaengelschleifeCode value
     */
    public function setErgebnisVorOderOhneMaengelschleifeCode(?string $ergebnisVorOderOhneMaengelschleifeCode = null): self
    {
        $this->ErgebnisVorOderOhneMaengelschleifeCode = $ergebnisVorOderOhneMaengelschleifeCode;

        return $this;
    }

    /**
     * Get ErgebnisVorOderOhneMaengelschleifeName value
     */
    public function getErgebnisVorOderOhneMaengelschleifeName(): ?string
    {
        return $this->ErgebnisVorOderOhneMaengelschleifeName;
    }

    /**
     * Set ErgebnisVorOderOhneMaengelschleifeName value
     */
    public function setErgebnisVorOderOhneMaengelschleifeName(?string $ergebnisVorOderOhneMaengelschleifeName = null): self
    {
        $this->ErgebnisVorOderOhneMaengelschleifeName = $ergebnisVorOderOhneMaengelschleifeName;

        return $this;
    }

    /**
     * Get ErgebnisNachMaengelschleifeCode value
     */
    public function getErgebnisNachMaengelschleifeCode(): ?string
    {
        return $this->ErgebnisNachMaengelschleifeCode;
    }

    /**
     * Set ErgebnisNachMaengelschleifeCode value
     */
    public function setErgebnisNachMaengelschleifeCode(?string $ergebnisNachMaengelschleifeCode = null): self
    {
        $this->ErgebnisNachMaengelschleifeCode = $ergebnisNachMaengelschleifeCode;

        return $this;
    }

    /**
     * Get ErgebnisNachMaengelschleifeName value
     */
    public function getErgebnisNachMaengelschleifeName(): ?string
    {
        return $this->ErgebnisNachMaengelschleifeName;
    }

    /**
     * Set ErgebnisNachMaengelschleifeName value
     */
    public function setErgebnisNachMaengelschleifeName(?string $ergebnisNachMaengelschleifeName = null): self
    {
        $this->ErgebnisNachMaengelschleifeName = $ergebnisNachMaengelschleifeName;

        return $this;
    }

    /**
     * Get ZeitpunktDerMaengelbehebung value
     */
    public function getZeitpunktDerMaengelbehebung(): ?string
    {
        return $this->ZeitpunktDerMaengelbehebung;
    }

    /**
     * Set ZeitpunktDerMaengelbehebung value
     */
    public function setZeitpunktDerMaengelbehebung(?string $zeitpunktDerMaengelbehebung = null): self
    {
        $this->ZeitpunktDerMaengelbehebung = $zeitpunktDerMaengelbehebung;

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
     * Get MonatJahrLetzteHU value
     */
    public function getMonatJahrLetzteHU(): ?string
    {
        return $this->MonatJahrLetzteHU;
    }

    /**
     * Set MonatJahrLetzteHU value
     */
    public function setMonatJahrLetzteHU(?string $monatJahrLetzteHU = null): self
    {
        $this->MonatJahrLetzteHU = $monatJahrLetzteHU;

        return $this;
    }

    /**
     * Get SchluesselUntersuchungsort value
     */
    public function getSchluesselUntersuchungsort(): ?string
    {
        return $this->SchluesselUntersuchungsort;
    }

    /**
     * Set SchluesselUntersuchungsort value
     */
    public function setSchluesselUntersuchungsort(?string $schluesselUntersuchungsort = null): self
    {
        $this->SchluesselUntersuchungsort = $schluesselUntersuchungsort;

        return $this;
    }

    /**
     * Get TextUntersuchungsort value
     */
    public function getTextUntersuchungsort(): ?string
    {
        return $this->TextUntersuchungsort;
    }

    /**
     * Set TextUntersuchungsort value
     */
    public function setTextUntersuchungsort(?string $textUntersuchungsort = null): self
    {
        $this->TextUntersuchungsort = $textUntersuchungsort;

        return $this;
    }

    /**
     * Get BundeslandCode value
     */
    public function getBundeslandCode(): ?string
    {
        return $this->BundeslandCode;
    }

    /**
     * Set BundeslandCode value
     */
    public function setBundeslandCode(?string $bundeslandCode = null): self
    {
        $this->BundeslandCode = $bundeslandCode;

        return $this;
    }

    /**
     * Get BundeslandName value
     */
    public function getBundeslandName(): ?string
    {
        return $this->BundeslandName;
    }

    /**
     * Set BundeslandName value
     */
    public function setBundeslandName(?string $bundeslandName = null): self
    {
        $this->BundeslandName = $bundeslandName;

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
     * Get ArtUntersuchungsstelleCode value
     */
    public function getArtUntersuchungsstelleCode(): ?string
    {
        return $this->ArtUntersuchungsstelleCode;
    }

    /**
     * Set ArtUntersuchungsstelleCode value
     */
    public function setArtUntersuchungsstelleCode(?string $artUntersuchungsstelleCode = null): self
    {
        $this->ArtUntersuchungsstelleCode = $artUntersuchungsstelleCode;

        return $this;
    }

    /**
     * Get ArtUntersuchungsstelleName value
     */
    public function getArtUntersuchungsstelleName(): ?string
    {
        return $this->ArtUntersuchungsstelleName;
    }

    /**
     * Set ArtUntersuchungsstelleName value
     */
    public function setArtUntersuchungsstelleName(?string $artUntersuchungsstelleName = null): self
    {
        $this->ArtUntersuchungsstelleName = $artUntersuchungsstelleName;

        return $this;
    }

    /**
     * Get KennnummerPruefer value
     */
    public function getKennnummerPruefer(): ?string
    {
        return $this->KennnummerPruefer;
    }

    /**
     * Set KennnummerPruefer value
     */
    public function setKennnummerPruefer(?string $kennnummerPruefer = null): self
    {
        $this->KennnummerPruefer = $kennnummerPruefer;

        return $this;
    }

    /**
     * Get MessdrehzahlBeiKraftrad value
     */
    public function getMessdrehzahlBeiKraftrad(): ?float
    {
        return $this->MessdrehzahlBeiKraftrad;
    }

    /**
     * Set MessdrehzahlBeiKraftrad value
     */
    public function setMessdrehzahlBeiKraftrad(?float $messdrehzahlBeiKraftrad = null): self
    {
        $this->MessdrehzahlBeiKraftrad = $messdrehzahlBeiKraftrad;

        return $this;
    }

    /**
     * Get StandgeraeuschvergleichswertBeiKraftrad value
     */
    public function getStandgeraeuschvergleichswertBeiKraftrad(): ?float
    {
        return $this->StandgeraeuschvergleichswertBeiKraftrad;
    }

    /**
     * Set StandgeraeuschvergleichswertBeiKraftrad value
     */
    public function setStandgeraeuschvergleichswertBeiKraftrad(?float $standgeraeuschvergleichswertBeiKraftrad = null): self
    {
        $this->StandgeraeuschvergleichswertBeiKraftrad = $standgeraeuschvergleichswertBeiKraftrad;

        return $this;
    }

    /**
     * Get StandgeraeuschwertSollBeiKraftrad value
     */
    public function getStandgeraeuschwertSollBeiKraftrad(): ?float
    {
        return $this->StandgeraeuschwertSollBeiKraftrad;
    }

    /**
     * Set StandgeraeuschwertSollBeiKraftrad value
     */
    public function setStandgeraeuschwertSollBeiKraftrad(?float $standgeraeuschwertSollBeiKraftrad = null): self
    {
        $this->StandgeraeuschwertSollBeiKraftrad = $standgeraeuschwertSollBeiKraftrad;

        return $this;
    }

    /**
     * Get KontrollnummerUntersuchungUmweltvertraeglichkeit value
     */
    public function getKontrollnummerUntersuchungUmweltvertraeglichkeit(): ?string
    {
        return $this->KontrollnummerUntersuchungUmweltvertraeglichkeit;
    }

    /**
     * Set KontrollnummerUntersuchungUmweltvertraeglichkeit value
     */
    public function setKontrollnummerUntersuchungUmweltvertraeglichkeit(?string $kontrollnummerUntersuchungUmweltvertraeglichkeit = null): self
    {
        $this->KontrollnummerUntersuchungUmweltvertraeglichkeit = $kontrollnummerUntersuchungUmweltvertraeglichkeit;

        return $this;
    }

    /**
     * Get DatumUntersuchungUmweltvertraeglichkeit value
     */
    public function getDatumUntersuchungUmweltvertraeglichkeit(): ?string
    {
        return $this->DatumUntersuchungUmweltvertraeglichkeit;
    }

    /**
     * Set DatumUntersuchungUmweltvertraeglichkeit value
     */
    public function setDatumUntersuchungUmweltvertraeglichkeit(?string $datumUntersuchungUmweltvertraeglichkeit = null): self
    {
        $this->DatumUntersuchungUmweltvertraeglichkeit = $datumUntersuchungUmweltvertraeglichkeit;

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
     * Get MerkmalStornierung value
     */
    public function getMerkmalStornierung(): ?string
    {
        return $this->MerkmalStornierung;
    }

    /**
     * Set MerkmalStornierung value
     */
    public function setMerkmalStornierung(?string $merkmalStornierung = null): self
    {
        $this->MerkmalStornierung = $merkmalStornierung;

        return $this;
    }

    /**
     * Get ZeitpunktStornierung value
     */
    public function getZeitpunktStornierung(): ?string
    {
        return $this->ZeitpunktStornierung;
    }

    /**
     * Set ZeitpunktStornierung value
     */
    public function setZeitpunktStornierung(?string $zeitpunktStornierung = null): self
    {
        $this->ZeitpunktStornierung = $zeitpunktStornierung;

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
     * Get MerkmalHUExpressVerfahren value
     */
    public function getMerkmalHUExpressVerfahren(): ?bool
    {
        return $this->MerkmalHUExpressVerfahren;
    }

    /**
     * Set MerkmalHUExpressVerfahren value
     */
    public function setMerkmalHUExpressVerfahren(?bool $merkmalHUExpressVerfahren = null): self
    {
        $this->MerkmalHUExpressVerfahren = $merkmalHUExpressVerfahren;

        return $this;
    }

    /**
     * Get ZustaendigeBehoerdeKreisschluesselExpress value
     */
    public function getZustaendigeBehoerdeKreisschluesselExpress(): ?string
    {
        return $this->ZustaendigeBehoerdeKreisschluesselExpress;
    }

    /**
     * Set ZustaendigeBehoerdeKreisschluesselExpress value
     */
    public function setZustaendigeBehoerdeKreisschluesselExpress(?string $zustaendigeBehoerdeKreisschluesselExpress = null): self
    {
        $this->ZustaendigeBehoerdeKreisschluesselExpress = $zustaendigeBehoerdeKreisschluesselExpress;

        return $this;
    }

    /**
     * Get ZustaendigeBehoerdeZusatzzifferExpress value
     */
    public function getZustaendigeBehoerdeZusatzzifferExpress(): ?string
    {
        return $this->ZustaendigeBehoerdeZusatzzifferExpress;
    }

    /**
     * Set ZustaendigeBehoerdeZusatzzifferExpress value
     */
    public function setZustaendigeBehoerdeZusatzzifferExpress(?string $zustaendigeBehoerdeZusatzzifferExpress = null): self
    {
        $this->ZustaendigeBehoerdeZusatzzifferExpress = $zustaendigeBehoerdeZusatzzifferExpress;

        return $this;
    }

    /**
     * Get SchluesselnummerUeberwachungsinstitutionOderZDKExpress value
     */
    public function getSchluesselnummerUeberwachungsinstitutionOderZDKExpress(): ?string
    {
        return $this->SchluesselnummerUeberwachungsinstitutionOderZDKExpress;
    }

    /**
     * Set SchluesselnummerUeberwachungsinstitutionOderZDKExpress value
     */
    public function setSchluesselnummerUeberwachungsinstitutionOderZDKExpress(?string $schluesselnummerUeberwachungsinstitutionOderZDKExpress = null): self
    {
        $this->SchluesselnummerUeberwachungsinstitutionOderZDKExpress = $schluesselnummerUeberwachungsinstitutionOderZDKExpress;

        return $this;
    }

    /**
     * Get FahrzeugidentifizierungsnummerExpress value
     */
    public function getFahrzeugidentifizierungsnummerExpress(): ?string
    {
        return $this->FahrzeugidentifizierungsnummerExpress;
    }

    /**
     * Set FahrzeugidentifizierungsnummerExpress value
     */
    public function setFahrzeugidentifizierungsnummerExpress(?string $fahrzeugidentifizierungsnummerExpress = null): self
    {
        $this->FahrzeugidentifizierungsnummerExpress = $fahrzeugidentifizierungsnummerExpress;

        return $this;
    }

    /**
     * Get NaechsteHauptuntersuchungExpress value
     */
    public function getNaechsteHauptuntersuchungExpress(): ?string
    {
        return $this->NaechsteHauptuntersuchungExpress;
    }

    /**
     * Set NaechsteHauptuntersuchungExpress value
     */
    public function setNaechsteHauptuntersuchungExpress(?string $naechsteHauptuntersuchungExpress = null): self
    {
        $this->NaechsteHauptuntersuchungExpress = $naechsteHauptuntersuchungExpress;

        return $this;
    }

    /**
     * Get NaechsteSicherheitspruefungExpress value
     */
    public function getNaechsteSicherheitspruefungExpress(): ?string
    {
        return $this->NaechsteSicherheitspruefungExpress;
    }

    /**
     * Set NaechsteSicherheitspruefungExpress value
     */
    public function setNaechsteSicherheitspruefungExpress(?string $naechsteSicherheitspruefungExpress = null): self
    {
        $this->NaechsteSicherheitspruefungExpress = $naechsteSicherheitspruefungExpress;

        return $this;
    }

    /**
     * Get DatumUntersuchungExpress value
     */
    public function getDatumUntersuchungExpress(): ?string
    {
        return $this->DatumUntersuchungExpress;
    }

    /**
     * Set DatumUntersuchungExpress value
     */
    public function setDatumUntersuchungExpress(?string $datumUntersuchungExpress = null): self
    {
        $this->DatumUntersuchungExpress = $datumUntersuchungExpress;

        return $this;
    }

    /**
     * Get DatumAusgabeExpress value
     */
    public function getDatumAusgabeExpress(): ?string
    {
        return $this->DatumAusgabeExpress;
    }

    /**
     * Set DatumAusgabeExpress value
     */
    public function setDatumAusgabeExpress(?string $datumAusgabeExpress = null): self
    {
        $this->DatumAusgabeExpress = $datumAusgabeExpress;

        return $this;
    }

    /**
     * Get Hinweise value
     */
    public function getHinweise(): ?\THAG\XKfz\StructType\Hinweise
    {
        return $this->Hinweise;
    }

    /**
     * Set Hinweise value
     */
    public function setHinweise(?\THAG\XKfz\StructType\Hinweise $hinweise = null): self
    {
        $this->Hinweise = $hinweise;

        return $this;
    }

    /**
     * Get Bremsmessung value
     */
    public function getBremsmessung(): ?\THAG\XKfz\StructType\Bremsmessung
    {
        return $this->Bremsmessung;
    }

    /**
     * Set Bremsmessung value
     */
    public function setBremsmessung(?\THAG\XKfz\StructType\Bremsmessung $bremsmessung = null): self
    {
        $this->Bremsmessung = $bremsmessung;

        return $this;
    }

    /**
     * Get Maengel value
     */
    public function getMaengel(): ?\THAG\XKfz\StructType\Maengel
    {
        return $this->Maengel;
    }

    /**
     * Set Maengel value
     */
    public function setMaengel(?\THAG\XKfz\StructType\Maengel $maengel = null): self
    {
        $this->Maengel = $maengel;

        return $this;
    }

    /**
     * Get GebuehrEntgelt value
     */
    public function getGebuehrEntgelt(): ?\THAG\XKfz\StructType\GebuehrEntgelt
    {
        return $this->GebuehrEntgelt;
    }

    /**
     * Set GebuehrEntgelt value
     */
    public function setGebuehrEntgelt(?\THAG\XKfz\StructType\GebuehrEntgelt $gebuehrEntgelt = null): self
    {
        $this->GebuehrEntgelt = $gebuehrEntgelt;

        return $this;
    }

    /**
     * Get ZeitpunktKorrekturStempelplaketten value
     */
    public function getZeitpunktKorrekturStempelplaketten(): ?string
    {
        return $this->ZeitpunktKorrekturStempelplaketten;
    }

    /**
     * Set ZeitpunktKorrekturStempelplaketten value
     */
    public function setZeitpunktKorrekturStempelplaketten(?string $zeitpunktKorrekturStempelplaketten = null): self
    {
        $this->ZeitpunktKorrekturStempelplaketten = $zeitpunktKorrekturStempelplaketten;

        return $this;
    }

    /**
     * Get ZeitpunktKorrekturZB1 value
     */
    public function getZeitpunktKorrekturZB1(): ?string
    {
        return $this->ZeitpunktKorrekturZB1;
    }

    /**
     * Set ZeitpunktKorrekturZB1 value
     */
    public function setZeitpunktKorrekturZB1(?string $zeitpunktKorrekturZB1 = null): self
    {
        $this->ZeitpunktKorrekturZB1 = $zeitpunktKorrekturZB1;

        return $this;
    }

    /**
     * Get KorrigierendeBehoerdeKreisschluessel value
     */
    public function getKorrigierendeBehoerdeKreisschluessel(): ?string
    {
        return $this->KorrigierendeBehoerdeKreisschluessel;
    }

    /**
     * Set KorrigierendeBehoerdeKreisschluessel value
     */
    public function setKorrigierendeBehoerdeKreisschluessel(?string $korrigierendeBehoerdeKreisschluessel = null): self
    {
        $this->KorrigierendeBehoerdeKreisschluessel = $korrigierendeBehoerdeKreisschluessel;

        return $this;
    }

    /**
     * Get KorrigierendeBehoerdeZusatzziffer value
     */
    public function getKorrigierendeBehoerdeZusatzziffer(): ?string
    {
        return $this->KorrigierendeBehoerdeZusatzziffer;
    }

    /**
     * Set KorrigierendeBehoerdeZusatzziffer value
     */
    public function setKorrigierendeBehoerdeZusatzziffer(?string $korrigierendeBehoerdeZusatzziffer = null): self
    {
        $this->KorrigierendeBehoerdeZusatzziffer = $korrigierendeBehoerdeZusatzziffer;

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
