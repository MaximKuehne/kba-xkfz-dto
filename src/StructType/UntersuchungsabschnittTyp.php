<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UntersuchungsabschnittTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class UntersuchungsabschnittTyp extends AbstractStructBase
{
    /**
     * The IdentifizierungsnummerZFZREintrag
     * @var string|null
     */
    public ?string $IdentifizierungsnummerZFZREintrag = null;
    /**
     * The SchluesselnummerUeberwachungsinstitutionOderZDKCode
     * @var string|null
     */
    public ?string $SchluesselnummerUeberwachungsinstitutionOderZDKCode = null;
    /**
     * The SchluesselnummerUeberwachungsinstitutionOderZDKName
     * @var string|null
     */
    public ?string $SchluesselnummerUeberwachungsinstitutionOderZDKName = null;
    /**
     * The KontrollnummerSP
     * @var string|null
     */
    public ?string $KontrollnummerSP = null;
    /**
     * The Fahrzeugidentifizierungsnummer
     * @var string|null
     */
    public ?string $Fahrzeugidentifizierungsnummer = null;
    /**
     * The SchluesselHersteller
     * @var string|null
     */
    public ?string $SchluesselHersteller = null;
    /**
     * The TextHersteller
     * @var string|null
     */
    public ?string $TextHersteller = null;
    /**
     * The MonatJahrDerErstzulassung
     * @var string|null
     */
    public ?string $MonatJahrDerErstzulassung = null;
    /**
     * The Kennzeichen
     * @var string|null
     */
    public ?string $Kennzeichen = null;
    /**
     * The Laenderkennzeichen
     * @var string|null
     */
    public ?string $Laenderkennzeichen = null;
    /**
     * The Berichtsnummer
     * @var string|null
     */
    public ?string $Berichtsnummer = null;
    /**
     * The ArtDerUntersuchung
     * @var string|null
     */
    public ?string $ArtDerUntersuchung = null;
    /**
     * The TypDerUntersuchung
     * @var string|null
     */
    public ?string $TypDerUntersuchung = null;
    /**
     * The ZeitpunktUntersuchung
     * @var string|null
     */
    public ?string $ZeitpunktUntersuchung = null;
    /**
     * The EntscheidungZuteilungPruefplakettePruefmarke
     * @var bool|null
     */
    public ?bool $EntscheidungZuteilungPruefplakettePruefmarke = null;
    /**
     * The NaechsteHauptuntersuchung
     * @var string|null
     */
    public ?string $NaechsteHauptuntersuchung = null;
    /**
     * The NaechsteSicherheitspruefung
     * @var string|null
     */
    public ?string $NaechsteSicherheitspruefung = null;
    /**
     * The ErgebnisVorOderOhneMaengelschleifeCode
     * @var string|null
     */
    public ?string $ErgebnisVorOderOhneMaengelschleifeCode = null;
    /**
     * The ErgebnisVorOderOhneMaengelschleifeName
     * @var string|null
     */
    public ?string $ErgebnisVorOderOhneMaengelschleifeName = null;
    /**
     * The ErgebnisNachMaengelschleifeCode
     * @var string|null
     */
    public ?string $ErgebnisNachMaengelschleifeCode = null;
    /**
     * The ErgebnisNachMaengelschleifeName
     * @var string|null
     */
    public ?string $ErgebnisNachMaengelschleifeName = null;
    /**
     * The ZeitpunktDerMaengelbehebung
     * @var string|null
     */
    public ?string $ZeitpunktDerMaengelbehebung = null;
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
     * The MerkmalFahrleistungUnplausibel
     * @var bool|null
     */
    public ?bool $MerkmalFahrleistungUnplausibel = null;
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
     * The ZulaessigeGesamtmasse
     * @var int|null
     */
    public ?int $ZulaessigeGesamtmasse = null;
    /**
     * The MonatJahrLetzteHU
     * @var string|null
     */
    public ?string $MonatJahrLetzteHU = null;
    /**
     * The SchluesselUntersuchungsort
     * @var string|null
     */
    public ?string $SchluesselUntersuchungsort = null;
    /**
     * The TextUntersuchungsort
     * @var string|null
     */
    public ?string $TextUntersuchungsort = null;
    /**
     * The BundeslandCode
     * @var string|null
     */
    public ?string $BundeslandCode = null;
    /**
     * The BundeslandName
     * @var string|null
     */
    public ?string $BundeslandName = null;
    /**
     * The AnordnungWiedervorfuehrpflicht
     * @var bool|null
     */
    public ?bool $AnordnungWiedervorfuehrpflicht = null;
    /**
     * The ArtUntersuchungsstelleCode
     * @var string|null
     */
    public ?string $ArtUntersuchungsstelleCode = null;
    /**
     * The ArtUntersuchungsstelleName
     * @var string|null
     */
    public ?string $ArtUntersuchungsstelleName = null;
    /**
     * The KennnummerPruefer
     * @var string|null
     */
    public ?string $KennnummerPruefer = null;
    /**
     * The MessdrehzahlBeiKraftrad
     * @var float|null
     */
    public ?float $MessdrehzahlBeiKraftrad = null;
    /**
     * The StandgeraeuschvergleichswertBeiKraftrad
     * @var float|null
     */
    public ?float $StandgeraeuschvergleichswertBeiKraftrad = null;
    /**
     * The StandgeraeuschwertSollBeiKraftrad
     * @var float|null
     */
    public ?float $StandgeraeuschwertSollBeiKraftrad = null;
    /**
     * The KontrollnummerUntersuchungUmweltvertraeglichkeit
     * @var string|null
     */
    public ?string $KontrollnummerUntersuchungUmweltvertraeglichkeit = null;
    /**
     * The DatumUntersuchungUmweltvertraeglichkeit
     * @var string|null
     */
    public ?string $DatumUntersuchungUmweltvertraeglichkeit = null;
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
     * The MerkmalStornierung
     * @var string|null
     */
    public ?string $MerkmalStornierung = null;
    /**
     * The ZeitpunktStornierung
     * @var string|null
     */
    public ?string $ZeitpunktStornierung = null;
    /**
     * The ZeitpunktAenderung
     * @var string|null
     */
    public ?string $ZeitpunktAenderung = null;
    /**
     * The MerkmalHUExpressVerfahren
     * @var bool|null
     */
    public ?bool $MerkmalHUExpressVerfahren = null;
    /**
     * The ZustaendigeBehoerdeKreisschluesselExpress
     * @var string|null
     */
    public ?string $ZustaendigeBehoerdeKreisschluesselExpress = null;
    /**
     * The ZustaendigeBehoerdeZusatzzifferExpress
     * @var string|null
     */
    public ?string $ZustaendigeBehoerdeZusatzzifferExpress = null;
    /**
     * The SchluesselnummerUeberwachungsinstitutionOderZDKExpress
     * @var string|null
     */
    public ?string $SchluesselnummerUeberwachungsinstitutionOderZDKExpress = null;
    /**
     * The FahrzeugidentifizierungsnummerExpress
     * @var string|null
     */
    public ?string $FahrzeugidentifizierungsnummerExpress = null;
    /**
     * The NaechsteHauptuntersuchungExpress
     * @var string|null
     */
    public ?string $NaechsteHauptuntersuchungExpress = null;
    /**
     * The NaechsteSicherheitspruefungExpress
     * @var string|null
     */
    public ?string $NaechsteSicherheitspruefungExpress = null;
    /**
     * The DatumUntersuchungExpress
     * @var string|null
     */
    public ?string $DatumUntersuchungExpress = null;
    /**
     * The DatumAusgabeExpress
     * @var string|null
     */
    public ?string $DatumAusgabeExpress = null;
    /**
     * The Hinweise
     * @var \THAG\XKfz\StructType\Hinweise|null
     */
    public ?\THAG\XKfz\StructType\Hinweise $Hinweise = null;
    /**
     * The Bremsmessung
     * @var \THAG\XKfz\StructType\Bremsmessung|null
     */
    public ?\THAG\XKfz\StructType\Bremsmessung $Bremsmessung = null;
    /**
     * The Maengel
     * @var \THAG\XKfz\StructType\Maengel|null
     */
    public ?\THAG\XKfz\StructType\Maengel $Maengel = null;
    /**
     * The GebuehrEntgelt
     * @var \THAG\XKfz\StructType\GebuehrEntgelt|null
     */
    public ?\THAG\XKfz\StructType\GebuehrEntgelt $GebuehrEntgelt = null;
    /**
     * The ZeitpunktKorrekturStempelplaketten
     * @var string|null
     */
    public ?string $ZeitpunktKorrekturStempelplaketten = null;
    /**
     * The ZeitpunktKorrekturZB1
     * @var string|null
     */
    public ?string $ZeitpunktKorrekturZB1 = null;
    /**
     * The KorrigierendeBehoerdeKreisschluessel
     * @var string|null
     */
    public ?string $KorrigierendeBehoerdeKreisschluessel = null;
    /**
     * The KorrigierendeBehoerdeZusatzziffer
     * @var string|null
     */
    public ?string $KorrigierendeBehoerdeZusatzziffer = null;
    /**
     * The ErgebnisNachMangelbeseitigung
     * @var string|null
     */
    public ?string $ErgebnisNachMangelbeseitigung = null;
    /**
     * Constructor method for UntersuchungsabschnittTyp
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
     * @param string $identifizierungsnummerZFZREintrag
     * @param string $schluesselnummerUeberwachungsinstitutionOderZDKCode
     * @param string $schluesselnummerUeberwachungsinstitutionOderZDKName
     * @param string $kontrollnummerSP
     * @param string $fahrzeugidentifizierungsnummer
     * @param string $schluesselHersteller
     * @param string $textHersteller
     * @param string $monatJahrDerErstzulassung
     * @param string $kennzeichen
     * @param string $laenderkennzeichen
     * @param string $berichtsnummer
     * @param string $artDerUntersuchung
     * @param string $typDerUntersuchung
     * @param string $zeitpunktUntersuchung
     * @param bool $entscheidungZuteilungPruefplakettePruefmarke
     * @param string $naechsteHauptuntersuchung
     * @param string $naechsteSicherheitspruefung
     * @param string $ergebnisVorOderOhneMaengelschleifeCode
     * @param string $ergebnisVorOderOhneMaengelschleifeName
     * @param string $ergebnisNachMaengelschleifeCode
     * @param string $ergebnisNachMaengelschleifeName
     * @param string $zeitpunktDerMaengelbehebung
     * @param string $schluesselFahrzeugklasse
     * @param string $textTyp
     * @param string $schluesselTyp
     * @param string $textVariante
     * @param string $textVersion
     * @param string $schluesselVarianteVersion
     * @param int $kilometerstand
     * @param bool $merkmalFahrleistungUnplausibel
     * @param int $meilenstand
     * @param int $betriebsstunden
     * @param int $zulaessigeGesamtmasse
     * @param string $monatJahrLetzteHU
     * @param string $schluesselUntersuchungsort
     * @param string $textUntersuchungsort
     * @param string $bundeslandCode
     * @param string $bundeslandName
     * @param bool $anordnungWiedervorfuehrpflicht
     * @param string $artUntersuchungsstelleCode
     * @param string $artUntersuchungsstelleName
     * @param string $kennnummerPruefer
     * @param float $messdrehzahlBeiKraftrad
     * @param float $standgeraeuschvergleichswertBeiKraftrad
     * @param float $standgeraeuschwertSollBeiKraftrad
     * @param string $kontrollnummerUntersuchungUmweltvertraeglichkeit
     * @param string $datumUntersuchungUmweltvertraeglichkeit
     * @param string $zeitpunktBearbeitungTU
     * @param string $zeitpunktVerarbeitung
     * @param string $merkmalStornierung
     * @param string $zeitpunktStornierung
     * @param string $zeitpunktAenderung
     * @param bool $merkmalHUExpressVerfahren
     * @param string $zustaendigeBehoerdeKreisschluesselExpress
     * @param string $zustaendigeBehoerdeZusatzzifferExpress
     * @param string $schluesselnummerUeberwachungsinstitutionOderZDKExpress
     * @param string $fahrzeugidentifizierungsnummerExpress
     * @param string $naechsteHauptuntersuchungExpress
     * @param string $naechsteSicherheitspruefungExpress
     * @param string $datumUntersuchungExpress
     * @param string $datumAusgabeExpress
     * @param \THAG\XKfz\StructType\Hinweise $hinweise
     * @param \THAG\XKfz\StructType\Bremsmessung $bremsmessung
     * @param \THAG\XKfz\StructType\Maengel $maengel
     * @param \THAG\XKfz\StructType\GebuehrEntgelt $gebuehrEntgelt
     * @param string $zeitpunktKorrekturStempelplaketten
     * @param string $zeitpunktKorrekturZB1
     * @param string $korrigierendeBehoerdeKreisschluessel
     * @param string $korrigierendeBehoerdeZusatzziffer
     * @param string $ergebnisNachMangelbeseitigung
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
     * @return string|null
     */
    public function getIdentifizierungsnummerZFZREintrag(): ?string
    {
        return $this->IdentifizierungsnummerZFZREintrag;
    }
    /**
     * Set IdentifizierungsnummerZFZREintrag value
     * @param string $identifizierungsnummerZFZREintrag
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setIdentifizierungsnummerZFZREintrag(?string $identifizierungsnummerZFZREintrag = null): self
    {
        $this->IdentifizierungsnummerZFZREintrag = $identifizierungsnummerZFZREintrag;
        
        return $this;
    }
    /**
     * Get SchluesselnummerUeberwachungsinstitutionOderZDKCode value
     * @return string|null
     */
    public function getSchluesselnummerUeberwachungsinstitutionOderZDKCode(): ?string
    {
        return $this->SchluesselnummerUeberwachungsinstitutionOderZDKCode;
    }
    /**
     * Set SchluesselnummerUeberwachungsinstitutionOderZDKCode value
     * @param string $schluesselnummerUeberwachungsinstitutionOderZDKCode
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setSchluesselnummerUeberwachungsinstitutionOderZDKCode(?string $schluesselnummerUeberwachungsinstitutionOderZDKCode = null): self
    {
        $this->SchluesselnummerUeberwachungsinstitutionOderZDKCode = $schluesselnummerUeberwachungsinstitutionOderZDKCode;
        
        return $this;
    }
    /**
     * Get SchluesselnummerUeberwachungsinstitutionOderZDKName value
     * @return string|null
     */
    public function getSchluesselnummerUeberwachungsinstitutionOderZDKName(): ?string
    {
        return $this->SchluesselnummerUeberwachungsinstitutionOderZDKName;
    }
    /**
     * Set SchluesselnummerUeberwachungsinstitutionOderZDKName value
     * @param string $schluesselnummerUeberwachungsinstitutionOderZDKName
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setSchluesselnummerUeberwachungsinstitutionOderZDKName(?string $schluesselnummerUeberwachungsinstitutionOderZDKName = null): self
    {
        $this->SchluesselnummerUeberwachungsinstitutionOderZDKName = $schluesselnummerUeberwachungsinstitutionOderZDKName;
        
        return $this;
    }
    /**
     * Get KontrollnummerSP value
     * @return string|null
     */
    public function getKontrollnummerSP(): ?string
    {
        return $this->KontrollnummerSP;
    }
    /**
     * Set KontrollnummerSP value
     * @param string $kontrollnummerSP
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setKontrollnummerSP(?string $kontrollnummerSP = null): self
    {
        $this->KontrollnummerSP = $kontrollnummerSP;
        
        return $this;
    }
    /**
     * Get Fahrzeugidentifizierungsnummer value
     * @return string|null
     */
    public function getFahrzeugidentifizierungsnummer(): ?string
    {
        return $this->Fahrzeugidentifizierungsnummer;
    }
    /**
     * Set Fahrzeugidentifizierungsnummer value
     * @param string $fahrzeugidentifizierungsnummer
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setFahrzeugidentifizierungsnummer(?string $fahrzeugidentifizierungsnummer = null): self
    {
        $this->Fahrzeugidentifizierungsnummer = $fahrzeugidentifizierungsnummer;
        
        return $this;
    }
    /**
     * Get SchluesselHersteller value
     * @return string|null
     */
    public function getSchluesselHersteller(): ?string
    {
        return $this->SchluesselHersteller;
    }
    /**
     * Set SchluesselHersteller value
     * @param string $schluesselHersteller
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setSchluesselHersteller(?string $schluesselHersteller = null): self
    {
        $this->SchluesselHersteller = $schluesselHersteller;
        
        return $this;
    }
    /**
     * Get TextHersteller value
     * @return string|null
     */
    public function getTextHersteller(): ?string
    {
        return $this->TextHersteller;
    }
    /**
     * Set TextHersteller value
     * @param string $textHersteller
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setTextHersteller(?string $textHersteller = null): self
    {
        $this->TextHersteller = $textHersteller;
        
        return $this;
    }
    /**
     * Get MonatJahrDerErstzulassung value
     * @return string|null
     */
    public function getMonatJahrDerErstzulassung(): ?string
    {
        return $this->MonatJahrDerErstzulassung;
    }
    /**
     * Set MonatJahrDerErstzulassung value
     * @param string $monatJahrDerErstzulassung
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setMonatJahrDerErstzulassung(?string $monatJahrDerErstzulassung = null): self
    {
        $this->MonatJahrDerErstzulassung = $monatJahrDerErstzulassung;
        
        return $this;
    }
    /**
     * Get Kennzeichen value
     * @return string|null
     */
    public function getKennzeichen(): ?string
    {
        return $this->Kennzeichen;
    }
    /**
     * Set Kennzeichen value
     * @param string $kennzeichen
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setKennzeichen(?string $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;
        
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
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setLaenderkennzeichen(?string $laenderkennzeichen = null): self
    {
        $this->Laenderkennzeichen = $laenderkennzeichen;
        
        return $this;
    }
    /**
     * Get Berichtsnummer value
     * @return string|null
     */
    public function getBerichtsnummer(): ?string
    {
        return $this->Berichtsnummer;
    }
    /**
     * Set Berichtsnummer value
     * @param string $berichtsnummer
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setBerichtsnummer(?string $berichtsnummer = null): self
    {
        $this->Berichtsnummer = $berichtsnummer;
        
        return $this;
    }
    /**
     * Get ArtDerUntersuchung value
     * @return string|null
     */
    public function getArtDerUntersuchung(): ?string
    {
        return $this->ArtDerUntersuchung;
    }
    /**
     * Set ArtDerUntersuchung value
     * @param string $artDerUntersuchung
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setArtDerUntersuchung(?string $artDerUntersuchung = null): self
    {
        $this->ArtDerUntersuchung = $artDerUntersuchung;
        
        return $this;
    }
    /**
     * Get TypDerUntersuchung value
     * @return string|null
     */
    public function getTypDerUntersuchung(): ?string
    {
        return $this->TypDerUntersuchung;
    }
    /**
     * Set TypDerUntersuchung value
     * @param string $typDerUntersuchung
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setTypDerUntersuchung(?string $typDerUntersuchung = null): self
    {
        $this->TypDerUntersuchung = $typDerUntersuchung;
        
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
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setZeitpunktUntersuchung(?string $zeitpunktUntersuchung = null): self
    {
        $this->ZeitpunktUntersuchung = $zeitpunktUntersuchung;
        
        return $this;
    }
    /**
     * Get EntscheidungZuteilungPruefplakettePruefmarke value
     * @return bool|null
     */
    public function getEntscheidungZuteilungPruefplakettePruefmarke(): ?bool
    {
        return $this->EntscheidungZuteilungPruefplakettePruefmarke;
    }
    /**
     * Set EntscheidungZuteilungPruefplakettePruefmarke value
     * @param bool $entscheidungZuteilungPruefplakettePruefmarke
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setEntscheidungZuteilungPruefplakettePruefmarke(?bool $entscheidungZuteilungPruefplakettePruefmarke = null): self
    {
        $this->EntscheidungZuteilungPruefplakettePruefmarke = $entscheidungZuteilungPruefplakettePruefmarke;
        
        return $this;
    }
    /**
     * Get NaechsteHauptuntersuchung value
     * @return string|null
     */
    public function getNaechsteHauptuntersuchung(): ?string
    {
        return $this->NaechsteHauptuntersuchung;
    }
    /**
     * Set NaechsteHauptuntersuchung value
     * @param string $naechsteHauptuntersuchung
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setNaechsteHauptuntersuchung(?string $naechsteHauptuntersuchung = null): self
    {
        $this->NaechsteHauptuntersuchung = $naechsteHauptuntersuchung;
        
        return $this;
    }
    /**
     * Get NaechsteSicherheitspruefung value
     * @return string|null
     */
    public function getNaechsteSicherheitspruefung(): ?string
    {
        return $this->NaechsteSicherheitspruefung;
    }
    /**
     * Set NaechsteSicherheitspruefung value
     * @param string $naechsteSicherheitspruefung
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setNaechsteSicherheitspruefung(?string $naechsteSicherheitspruefung = null): self
    {
        $this->NaechsteSicherheitspruefung = $naechsteSicherheitspruefung;
        
        return $this;
    }
    /**
     * Get ErgebnisVorOderOhneMaengelschleifeCode value
     * @return string|null
     */
    public function getErgebnisVorOderOhneMaengelschleifeCode(): ?string
    {
        return $this->ErgebnisVorOderOhneMaengelschleifeCode;
    }
    /**
     * Set ErgebnisVorOderOhneMaengelschleifeCode value
     * @param string $ergebnisVorOderOhneMaengelschleifeCode
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setErgebnisVorOderOhneMaengelschleifeCode(?string $ergebnisVorOderOhneMaengelschleifeCode = null): self
    {
        $this->ErgebnisVorOderOhneMaengelschleifeCode = $ergebnisVorOderOhneMaengelschleifeCode;
        
        return $this;
    }
    /**
     * Get ErgebnisVorOderOhneMaengelschleifeName value
     * @return string|null
     */
    public function getErgebnisVorOderOhneMaengelschleifeName(): ?string
    {
        return $this->ErgebnisVorOderOhneMaengelschleifeName;
    }
    /**
     * Set ErgebnisVorOderOhneMaengelschleifeName value
     * @param string $ergebnisVorOderOhneMaengelschleifeName
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setErgebnisVorOderOhneMaengelschleifeName(?string $ergebnisVorOderOhneMaengelschleifeName = null): self
    {
        $this->ErgebnisVorOderOhneMaengelschleifeName = $ergebnisVorOderOhneMaengelschleifeName;
        
        return $this;
    }
    /**
     * Get ErgebnisNachMaengelschleifeCode value
     * @return string|null
     */
    public function getErgebnisNachMaengelschleifeCode(): ?string
    {
        return $this->ErgebnisNachMaengelschleifeCode;
    }
    /**
     * Set ErgebnisNachMaengelschleifeCode value
     * @param string $ergebnisNachMaengelschleifeCode
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setErgebnisNachMaengelschleifeCode(?string $ergebnisNachMaengelschleifeCode = null): self
    {
        $this->ErgebnisNachMaengelschleifeCode = $ergebnisNachMaengelschleifeCode;
        
        return $this;
    }
    /**
     * Get ErgebnisNachMaengelschleifeName value
     * @return string|null
     */
    public function getErgebnisNachMaengelschleifeName(): ?string
    {
        return $this->ErgebnisNachMaengelschleifeName;
    }
    /**
     * Set ErgebnisNachMaengelschleifeName value
     * @param string $ergebnisNachMaengelschleifeName
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setErgebnisNachMaengelschleifeName(?string $ergebnisNachMaengelschleifeName = null): self
    {
        $this->ErgebnisNachMaengelschleifeName = $ergebnisNachMaengelschleifeName;
        
        return $this;
    }
    /**
     * Get ZeitpunktDerMaengelbehebung value
     * @return string|null
     */
    public function getZeitpunktDerMaengelbehebung(): ?string
    {
        return $this->ZeitpunktDerMaengelbehebung;
    }
    /**
     * Set ZeitpunktDerMaengelbehebung value
     * @param string $zeitpunktDerMaengelbehebung
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setZeitpunktDerMaengelbehebung(?string $zeitpunktDerMaengelbehebung = null): self
    {
        $this->ZeitpunktDerMaengelbehebung = $zeitpunktDerMaengelbehebung;
        
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
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
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
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
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
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
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
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
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
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
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
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
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
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setKilometerstand(?int $kilometerstand = null): self
    {
        $this->Kilometerstand = $kilometerstand;
        
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
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setMerkmalFahrleistungUnplausibel(?bool $merkmalFahrleistungUnplausibel = null): self
    {
        $this->MerkmalFahrleistungUnplausibel = $merkmalFahrleistungUnplausibel;
        
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
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
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
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setBetriebsstunden(?int $betriebsstunden = null): self
    {
        $this->Betriebsstunden = $betriebsstunden;
        
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
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setZulaessigeGesamtmasse(?int $zulaessigeGesamtmasse = null): self
    {
        $this->ZulaessigeGesamtmasse = $zulaessigeGesamtmasse;
        
        return $this;
    }
    /**
     * Get MonatJahrLetzteHU value
     * @return string|null
     */
    public function getMonatJahrLetzteHU(): ?string
    {
        return $this->MonatJahrLetzteHU;
    }
    /**
     * Set MonatJahrLetzteHU value
     * @param string $monatJahrLetzteHU
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setMonatJahrLetzteHU(?string $monatJahrLetzteHU = null): self
    {
        $this->MonatJahrLetzteHU = $monatJahrLetzteHU;
        
        return $this;
    }
    /**
     * Get SchluesselUntersuchungsort value
     * @return string|null
     */
    public function getSchluesselUntersuchungsort(): ?string
    {
        return $this->SchluesselUntersuchungsort;
    }
    /**
     * Set SchluesselUntersuchungsort value
     * @param string $schluesselUntersuchungsort
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setSchluesselUntersuchungsort(?string $schluesselUntersuchungsort = null): self
    {
        $this->SchluesselUntersuchungsort = $schluesselUntersuchungsort;
        
        return $this;
    }
    /**
     * Get TextUntersuchungsort value
     * @return string|null
     */
    public function getTextUntersuchungsort(): ?string
    {
        return $this->TextUntersuchungsort;
    }
    /**
     * Set TextUntersuchungsort value
     * @param string $textUntersuchungsort
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setTextUntersuchungsort(?string $textUntersuchungsort = null): self
    {
        $this->TextUntersuchungsort = $textUntersuchungsort;
        
        return $this;
    }
    /**
     * Get BundeslandCode value
     * @return string|null
     */
    public function getBundeslandCode(): ?string
    {
        return $this->BundeslandCode;
    }
    /**
     * Set BundeslandCode value
     * @param string $bundeslandCode
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setBundeslandCode(?string $bundeslandCode = null): self
    {
        $this->BundeslandCode = $bundeslandCode;
        
        return $this;
    }
    /**
     * Get BundeslandName value
     * @return string|null
     */
    public function getBundeslandName(): ?string
    {
        return $this->BundeslandName;
    }
    /**
     * Set BundeslandName value
     * @param string $bundeslandName
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setBundeslandName(?string $bundeslandName = null): self
    {
        $this->BundeslandName = $bundeslandName;
        
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
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setAnordnungWiedervorfuehrpflicht(?bool $anordnungWiedervorfuehrpflicht = null): self
    {
        $this->AnordnungWiedervorfuehrpflicht = $anordnungWiedervorfuehrpflicht;
        
        return $this;
    }
    /**
     * Get ArtUntersuchungsstelleCode value
     * @return string|null
     */
    public function getArtUntersuchungsstelleCode(): ?string
    {
        return $this->ArtUntersuchungsstelleCode;
    }
    /**
     * Set ArtUntersuchungsstelleCode value
     * @param string $artUntersuchungsstelleCode
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setArtUntersuchungsstelleCode(?string $artUntersuchungsstelleCode = null): self
    {
        $this->ArtUntersuchungsstelleCode = $artUntersuchungsstelleCode;
        
        return $this;
    }
    /**
     * Get ArtUntersuchungsstelleName value
     * @return string|null
     */
    public function getArtUntersuchungsstelleName(): ?string
    {
        return $this->ArtUntersuchungsstelleName;
    }
    /**
     * Set ArtUntersuchungsstelleName value
     * @param string $artUntersuchungsstelleName
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setArtUntersuchungsstelleName(?string $artUntersuchungsstelleName = null): self
    {
        $this->ArtUntersuchungsstelleName = $artUntersuchungsstelleName;
        
        return $this;
    }
    /**
     * Get KennnummerPruefer value
     * @return string|null
     */
    public function getKennnummerPruefer(): ?string
    {
        return $this->KennnummerPruefer;
    }
    /**
     * Set KennnummerPruefer value
     * @param string $kennnummerPruefer
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setKennnummerPruefer(?string $kennnummerPruefer = null): self
    {
        $this->KennnummerPruefer = $kennnummerPruefer;
        
        return $this;
    }
    /**
     * Get MessdrehzahlBeiKraftrad value
     * @return float|null
     */
    public function getMessdrehzahlBeiKraftrad(): ?float
    {
        return $this->MessdrehzahlBeiKraftrad;
    }
    /**
     * Set MessdrehzahlBeiKraftrad value
     * @param float $messdrehzahlBeiKraftrad
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setMessdrehzahlBeiKraftrad(?float $messdrehzahlBeiKraftrad = null): self
    {
        $this->MessdrehzahlBeiKraftrad = $messdrehzahlBeiKraftrad;
        
        return $this;
    }
    /**
     * Get StandgeraeuschvergleichswertBeiKraftrad value
     * @return float|null
     */
    public function getStandgeraeuschvergleichswertBeiKraftrad(): ?float
    {
        return $this->StandgeraeuschvergleichswertBeiKraftrad;
    }
    /**
     * Set StandgeraeuschvergleichswertBeiKraftrad value
     * @param float $standgeraeuschvergleichswertBeiKraftrad
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setStandgeraeuschvergleichswertBeiKraftrad(?float $standgeraeuschvergleichswertBeiKraftrad = null): self
    {
        $this->StandgeraeuschvergleichswertBeiKraftrad = $standgeraeuschvergleichswertBeiKraftrad;
        
        return $this;
    }
    /**
     * Get StandgeraeuschwertSollBeiKraftrad value
     * @return float|null
     */
    public function getStandgeraeuschwertSollBeiKraftrad(): ?float
    {
        return $this->StandgeraeuschwertSollBeiKraftrad;
    }
    /**
     * Set StandgeraeuschwertSollBeiKraftrad value
     * @param float $standgeraeuschwertSollBeiKraftrad
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setStandgeraeuschwertSollBeiKraftrad(?float $standgeraeuschwertSollBeiKraftrad = null): self
    {
        $this->StandgeraeuschwertSollBeiKraftrad = $standgeraeuschwertSollBeiKraftrad;
        
        return $this;
    }
    /**
     * Get KontrollnummerUntersuchungUmweltvertraeglichkeit value
     * @return string|null
     */
    public function getKontrollnummerUntersuchungUmweltvertraeglichkeit(): ?string
    {
        return $this->KontrollnummerUntersuchungUmweltvertraeglichkeit;
    }
    /**
     * Set KontrollnummerUntersuchungUmweltvertraeglichkeit value
     * @param string $kontrollnummerUntersuchungUmweltvertraeglichkeit
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setKontrollnummerUntersuchungUmweltvertraeglichkeit(?string $kontrollnummerUntersuchungUmweltvertraeglichkeit = null): self
    {
        $this->KontrollnummerUntersuchungUmweltvertraeglichkeit = $kontrollnummerUntersuchungUmweltvertraeglichkeit;
        
        return $this;
    }
    /**
     * Get DatumUntersuchungUmweltvertraeglichkeit value
     * @return string|null
     */
    public function getDatumUntersuchungUmweltvertraeglichkeit(): ?string
    {
        return $this->DatumUntersuchungUmweltvertraeglichkeit;
    }
    /**
     * Set DatumUntersuchungUmweltvertraeglichkeit value
     * @param string $datumUntersuchungUmweltvertraeglichkeit
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setDatumUntersuchungUmweltvertraeglichkeit(?string $datumUntersuchungUmweltvertraeglichkeit = null): self
    {
        $this->DatumUntersuchungUmweltvertraeglichkeit = $datumUntersuchungUmweltvertraeglichkeit;
        
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
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
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
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setZeitpunktVerarbeitung(?string $zeitpunktVerarbeitung = null): self
    {
        $this->ZeitpunktVerarbeitung = $zeitpunktVerarbeitung;
        
        return $this;
    }
    /**
     * Get MerkmalStornierung value
     * @return string|null
     */
    public function getMerkmalStornierung(): ?string
    {
        return $this->MerkmalStornierung;
    }
    /**
     * Set MerkmalStornierung value
     * @param string $merkmalStornierung
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setMerkmalStornierung(?string $merkmalStornierung = null): self
    {
        $this->MerkmalStornierung = $merkmalStornierung;
        
        return $this;
    }
    /**
     * Get ZeitpunktStornierung value
     * @return string|null
     */
    public function getZeitpunktStornierung(): ?string
    {
        return $this->ZeitpunktStornierung;
    }
    /**
     * Set ZeitpunktStornierung value
     * @param string $zeitpunktStornierung
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setZeitpunktStornierung(?string $zeitpunktStornierung = null): self
    {
        $this->ZeitpunktStornierung = $zeitpunktStornierung;
        
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
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setZeitpunktAenderung(?string $zeitpunktAenderung = null): self
    {
        $this->ZeitpunktAenderung = $zeitpunktAenderung;
        
        return $this;
    }
    /**
     * Get MerkmalHUExpressVerfahren value
     * @return bool|null
     */
    public function getMerkmalHUExpressVerfahren(): ?bool
    {
        return $this->MerkmalHUExpressVerfahren;
    }
    /**
     * Set MerkmalHUExpressVerfahren value
     * @param bool $merkmalHUExpressVerfahren
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setMerkmalHUExpressVerfahren(?bool $merkmalHUExpressVerfahren = null): self
    {
        $this->MerkmalHUExpressVerfahren = $merkmalHUExpressVerfahren;
        
        return $this;
    }
    /**
     * Get ZustaendigeBehoerdeKreisschluesselExpress value
     * @return string|null
     */
    public function getZustaendigeBehoerdeKreisschluesselExpress(): ?string
    {
        return $this->ZustaendigeBehoerdeKreisschluesselExpress;
    }
    /**
     * Set ZustaendigeBehoerdeKreisschluesselExpress value
     * @param string $zustaendigeBehoerdeKreisschluesselExpress
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setZustaendigeBehoerdeKreisschluesselExpress(?string $zustaendigeBehoerdeKreisschluesselExpress = null): self
    {
        $this->ZustaendigeBehoerdeKreisschluesselExpress = $zustaendigeBehoerdeKreisschluesselExpress;
        
        return $this;
    }
    /**
     * Get ZustaendigeBehoerdeZusatzzifferExpress value
     * @return string|null
     */
    public function getZustaendigeBehoerdeZusatzzifferExpress(): ?string
    {
        return $this->ZustaendigeBehoerdeZusatzzifferExpress;
    }
    /**
     * Set ZustaendigeBehoerdeZusatzzifferExpress value
     * @param string $zustaendigeBehoerdeZusatzzifferExpress
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setZustaendigeBehoerdeZusatzzifferExpress(?string $zustaendigeBehoerdeZusatzzifferExpress = null): self
    {
        $this->ZustaendigeBehoerdeZusatzzifferExpress = $zustaendigeBehoerdeZusatzzifferExpress;
        
        return $this;
    }
    /**
     * Get SchluesselnummerUeberwachungsinstitutionOderZDKExpress value
     * @return string|null
     */
    public function getSchluesselnummerUeberwachungsinstitutionOderZDKExpress(): ?string
    {
        return $this->SchluesselnummerUeberwachungsinstitutionOderZDKExpress;
    }
    /**
     * Set SchluesselnummerUeberwachungsinstitutionOderZDKExpress value
     * @param string $schluesselnummerUeberwachungsinstitutionOderZDKExpress
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setSchluesselnummerUeberwachungsinstitutionOderZDKExpress(?string $schluesselnummerUeberwachungsinstitutionOderZDKExpress = null): self
    {
        $this->SchluesselnummerUeberwachungsinstitutionOderZDKExpress = $schluesselnummerUeberwachungsinstitutionOderZDKExpress;
        
        return $this;
    }
    /**
     * Get FahrzeugidentifizierungsnummerExpress value
     * @return string|null
     */
    public function getFahrzeugidentifizierungsnummerExpress(): ?string
    {
        return $this->FahrzeugidentifizierungsnummerExpress;
    }
    /**
     * Set FahrzeugidentifizierungsnummerExpress value
     * @param string $fahrzeugidentifizierungsnummerExpress
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setFahrzeugidentifizierungsnummerExpress(?string $fahrzeugidentifizierungsnummerExpress = null): self
    {
        $this->FahrzeugidentifizierungsnummerExpress = $fahrzeugidentifizierungsnummerExpress;
        
        return $this;
    }
    /**
     * Get NaechsteHauptuntersuchungExpress value
     * @return string|null
     */
    public function getNaechsteHauptuntersuchungExpress(): ?string
    {
        return $this->NaechsteHauptuntersuchungExpress;
    }
    /**
     * Set NaechsteHauptuntersuchungExpress value
     * @param string $naechsteHauptuntersuchungExpress
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setNaechsteHauptuntersuchungExpress(?string $naechsteHauptuntersuchungExpress = null): self
    {
        $this->NaechsteHauptuntersuchungExpress = $naechsteHauptuntersuchungExpress;
        
        return $this;
    }
    /**
     * Get NaechsteSicherheitspruefungExpress value
     * @return string|null
     */
    public function getNaechsteSicherheitspruefungExpress(): ?string
    {
        return $this->NaechsteSicherheitspruefungExpress;
    }
    /**
     * Set NaechsteSicherheitspruefungExpress value
     * @param string $naechsteSicherheitspruefungExpress
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setNaechsteSicherheitspruefungExpress(?string $naechsteSicherheitspruefungExpress = null): self
    {
        $this->NaechsteSicherheitspruefungExpress = $naechsteSicherheitspruefungExpress;
        
        return $this;
    }
    /**
     * Get DatumUntersuchungExpress value
     * @return string|null
     */
    public function getDatumUntersuchungExpress(): ?string
    {
        return $this->DatumUntersuchungExpress;
    }
    /**
     * Set DatumUntersuchungExpress value
     * @param string $datumUntersuchungExpress
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setDatumUntersuchungExpress(?string $datumUntersuchungExpress = null): self
    {
        $this->DatumUntersuchungExpress = $datumUntersuchungExpress;
        
        return $this;
    }
    /**
     * Get DatumAusgabeExpress value
     * @return string|null
     */
    public function getDatumAusgabeExpress(): ?string
    {
        return $this->DatumAusgabeExpress;
    }
    /**
     * Set DatumAusgabeExpress value
     * @param string $datumAusgabeExpress
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setDatumAusgabeExpress(?string $datumAusgabeExpress = null): self
    {
        $this->DatumAusgabeExpress = $datumAusgabeExpress;
        
        return $this;
    }
    /**
     * Get Hinweise value
     * @return \THAG\XKfz\StructType\Hinweise|null
     */
    public function getHinweise(): ?\THAG\XKfz\StructType\Hinweise
    {
        return $this->Hinweise;
    }
    /**
     * Set Hinweise value
     * @param \THAG\XKfz\StructType\Hinweise $hinweise
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setHinweise(?\THAG\XKfz\StructType\Hinweise $hinweise = null): self
    {
        $this->Hinweise = $hinweise;
        
        return $this;
    }
    /**
     * Get Bremsmessung value
     * @return \THAG\XKfz\StructType\Bremsmessung|null
     */
    public function getBremsmessung(): ?\THAG\XKfz\StructType\Bremsmessung
    {
        return $this->Bremsmessung;
    }
    /**
     * Set Bremsmessung value
     * @param \THAG\XKfz\StructType\Bremsmessung $bremsmessung
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setBremsmessung(?\THAG\XKfz\StructType\Bremsmessung $bremsmessung = null): self
    {
        $this->Bremsmessung = $bremsmessung;
        
        return $this;
    }
    /**
     * Get Maengel value
     * @return \THAG\XKfz\StructType\Maengel|null
     */
    public function getMaengel(): ?\THAG\XKfz\StructType\Maengel
    {
        return $this->Maengel;
    }
    /**
     * Set Maengel value
     * @param \THAG\XKfz\StructType\Maengel $maengel
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setMaengel(?\THAG\XKfz\StructType\Maengel $maengel = null): self
    {
        $this->Maengel = $maengel;
        
        return $this;
    }
    /**
     * Get GebuehrEntgelt value
     * @return \THAG\XKfz\StructType\GebuehrEntgelt|null
     */
    public function getGebuehrEntgelt(): ?\THAG\XKfz\StructType\GebuehrEntgelt
    {
        return $this->GebuehrEntgelt;
    }
    /**
     * Set GebuehrEntgelt value
     * @param \THAG\XKfz\StructType\GebuehrEntgelt $gebuehrEntgelt
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setGebuehrEntgelt(?\THAG\XKfz\StructType\GebuehrEntgelt $gebuehrEntgelt = null): self
    {
        $this->GebuehrEntgelt = $gebuehrEntgelt;
        
        return $this;
    }
    /**
     * Get ZeitpunktKorrekturStempelplaketten value
     * @return string|null
     */
    public function getZeitpunktKorrekturStempelplaketten(): ?string
    {
        return $this->ZeitpunktKorrekturStempelplaketten;
    }
    /**
     * Set ZeitpunktKorrekturStempelplaketten value
     * @param string $zeitpunktKorrekturStempelplaketten
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setZeitpunktKorrekturStempelplaketten(?string $zeitpunktKorrekturStempelplaketten = null): self
    {
        $this->ZeitpunktKorrekturStempelplaketten = $zeitpunktKorrekturStempelplaketten;
        
        return $this;
    }
    /**
     * Get ZeitpunktKorrekturZB1 value
     * @return string|null
     */
    public function getZeitpunktKorrekturZB1(): ?string
    {
        return $this->ZeitpunktKorrekturZB1;
    }
    /**
     * Set ZeitpunktKorrekturZB1 value
     * @param string $zeitpunktKorrekturZB1
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setZeitpunktKorrekturZB1(?string $zeitpunktKorrekturZB1 = null): self
    {
        $this->ZeitpunktKorrekturZB1 = $zeitpunktKorrekturZB1;
        
        return $this;
    }
    /**
     * Get KorrigierendeBehoerdeKreisschluessel value
     * @return string|null
     */
    public function getKorrigierendeBehoerdeKreisschluessel(): ?string
    {
        return $this->KorrigierendeBehoerdeKreisschluessel;
    }
    /**
     * Set KorrigierendeBehoerdeKreisschluessel value
     * @param string $korrigierendeBehoerdeKreisschluessel
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setKorrigierendeBehoerdeKreisschluessel(?string $korrigierendeBehoerdeKreisschluessel = null): self
    {
        $this->KorrigierendeBehoerdeKreisschluessel = $korrigierendeBehoerdeKreisschluessel;
        
        return $this;
    }
    /**
     * Get KorrigierendeBehoerdeZusatzziffer value
     * @return string|null
     */
    public function getKorrigierendeBehoerdeZusatzziffer(): ?string
    {
        return $this->KorrigierendeBehoerdeZusatzziffer;
    }
    /**
     * Set KorrigierendeBehoerdeZusatzziffer value
     * @param string $korrigierendeBehoerdeZusatzziffer
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setKorrigierendeBehoerdeZusatzziffer(?string $korrigierendeBehoerdeZusatzziffer = null): self
    {
        $this->KorrigierendeBehoerdeZusatzziffer = $korrigierendeBehoerdeZusatzziffer;
        
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
     * @return \THAG\XKfz\StructType\UntersuchungsabschnittTyp
     */
    public function setErgebnisNachMangelbeseitigung(?string $ergebnisNachMangelbeseitigung = null): self
    {
        $this->ErgebnisNachMangelbeseitigung = $ergebnisNachMangelbeseitigung;
        
        return $this;
    }
}
