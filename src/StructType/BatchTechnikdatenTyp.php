<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BatchTechnikdatenTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class BatchTechnikdatenTyp extends AbstractStructBase
{
    /**
     * The HerstellerKurzbezeichnung
     * @var string|null
     */
    public ?string $HerstellerKurzbezeichnung = null;
    /**
     * The Fahrzeugidentifizierungsnummer
     * @var string|null
     */
    public ?string $Fahrzeugidentifizierungsnummer = null;
    /**
     * The SchluesselTyp
     * @var string|null
     */
    public ?string $SchluesselTyp = null;
    /**
     * The SchluesselVarianteVersion
     * @var string|null
     */
    public ?string $SchluesselVarianteVersion = null;
    /**
     * The TextHersteller
     * @var string|null
     */
    public ?string $TextHersteller = null;
    /**
     * The TextMarke
     * @var string|null
     */
    public ?string $TextMarke = null;
    /**
     * The TextHandelsbezeichnung
     * @var string|null
     */
    public ?string $TextHandelsbezeichnung = null;
    /**
     * The TextTyp
     * @var string|null
     */
    public ?string $TextTyp = null;
    /**
     * The TextAufbau
     * @var string|null
     */
    public ?string $TextAufbau = null;
    /**
     * The SchluesselGrundfarbe
     * @var string|null
     */
    public ?string $SchluesselGrundfarbe = null;
    /**
     * The SchluesselZweitfarbe
     * @var string|null
     */
    public ?string $SchluesselZweitfarbe = null;
    /**
     * The ArtGenehmigung
     * @var string|null
     */
    public ?string $ArtGenehmigung = null;
    /**
     * The SchluesselFahrzeugklasse
     * @var string|null
     */
    public ?string $SchluesselFahrzeugklasse = null;
    /**
     * The SchluesselAufbau
     * @var string|null
     */
    public ?string $SchluesselAufbau = null;
    /**
     * The SchluesselEmissionsklasse
     * @var string|null
     */
    public ?string $SchluesselEmissionsklasse = null;
    /**
     * The TextEmissionsklasse
     * @var string|null
     */
    public ?string $TextEmissionsklasse = null;
    /**
     * The SchluesselKraftstoff
     * @var string|null
     */
    public ?string $SchluesselKraftstoff = null;
    /**
     * The KombinierterCO2Wert
     * @var int|null
     */
    public ?int $KombinierterCO2Wert = null;
    /**
     * The kombinierterCo2WertWltp
     * @var int|null
     */
    public ?int $kombinierterCo2WertWltp = null;
    /**
     * The Hoechstgeschwindigkeit
     * @var int|null
     */
    public ?int $Hoechstgeschwindigkeit = null;
    /**
     * The NennleistungKW
     * @var int|null
     */
    public ?int $NennleistungKW = null;
    /**
     * The NennleistungUmdrehung
     * @var int|null
     */
    public ?int $NennleistungUmdrehung = null;
    /**
     * The Hubraum
     * @var int|null
     */
    public ?int $Hubraum = null;
    /**
     * The Leistungsgewicht
     * @var float|null
     */
    public ?float $Leistungsgewicht = null;
    /**
     * The Nutzlast
     * @var int|null
     */
    public ?int $Nutzlast = null;
    /**
     * The Rauminhalt
     * @var float|null
     */
    public ?float $Rauminhalt = null;
    /**
     * The AnzahlStehplaetze
     * @var int|null
     */
    public ?int $AnzahlStehplaetze = null;
    /**
     * The AnzahlSitzplaetze
     * @var int|null
     */
    public ?int $AnzahlSitzplaetze = null;
    /**
     * The MasseFahrbereitMin
     * @var int|null
     */
    public ?int $MasseFahrbereitMin = null;
    /**
     * The MasseFahrbereitMax
     * @var int|null
     */
    public ?int $MasseFahrbereitMax = null;
    /**
     * The TechnischZulaessigeGesamtmasse
     * @var int|null
     */
    public ?int $TechnischZulaessigeGesamtmasse = null;
    /**
     * The TechnischZulaessigeAchslastAchse1
     * @var int|null
     */
    public ?int $TechnischZulaessigeAchslastAchse1 = null;
    /**
     * The TechnischZulaessigeAchslastAchse2
     * @var int|null
     */
    public ?int $TechnischZulaessigeAchslastAchse2 = null;
    /**
     * The TechnischZulaessigeAchslastAchse3
     * @var int|null
     */
    public ?int $TechnischZulaessigeAchslastAchse3 = null;
    /**
     * The Stuetzlast
     * @var int|null
     */
    public ?int $Stuetzlast = null;
    /**
     * The AnhaengelastGebremst
     * @var int|null
     */
    public ?int $AnhaengelastGebremst = null;
    /**
     * The AnhaengelastUngebremst
     * @var int|null
     */
    public ?int $AnhaengelastUngebremst = null;
    /**
     * The AnzahlAchsen
     * @var int|null
     */
    public ?int $AnzahlAchsen = null;
    /**
     * The AnzahlAntriebsachsen
     * @var int|null
     */
    public ?int $AnzahlAntriebsachsen = null;
    /**
     * The Standgeraeusch
     * @var string|null
     */
    public ?string $Standgeraeusch = null;
    /**
     * The StandgeraeuschUmdrehung
     * @var int|null
     */
    public ?int $StandgeraeuschUmdrehung = null;
    /**
     * The Fahrgeraeusch
     * @var string|null
     */
    public ?string $Fahrgeraeusch = null;
    /**
     * The BereifungAchse1
     * @var string|null
     */
    public ?string $BereifungAchse1 = null;
    /**
     * The BereifungAchse2
     * @var string|null
     */
    public ?string $BereifungAchse2 = null;
    /**
     * The BereifungAchse3
     * @var string|null
     */
    public ?string $BereifungAchse3 = null;
    /**
     * The LaengeMax
     * @var int|null
     */
    public ?int $LaengeMax = null;
    /**
     * The LaengeMin
     * @var int|null
     */
    public ?int $LaengeMin = null;
    /**
     * The BreiteMax
     * @var int|null
     */
    public ?int $BreiteMax = null;
    /**
     * The BreiteMin
     * @var int|null
     */
    public ?int $BreiteMin = null;
    /**
     * The HoeheMax
     * @var int|null
     */
    public ?int $HoeheMax = null;
    /**
     * The HoeheMin
     * @var int|null
     */
    public ?int $HoeheMin = null;
    /**
     * The ZulaessigeGesamtmasse
     * @var int|null
     */
    public ?int $ZulaessigeGesamtmasse = null;
    /**
     * The ZulaessigeAchslastAchse1
     * @var int|null
     */
    public ?int $ZulaessigeAchslastAchse1 = null;
    /**
     * The ZulaessigeAchslastAchse2
     * @var int|null
     */
    public ?int $ZulaessigeAchslastAchse2 = null;
    /**
     * The ZulaessigeAchslastAchse3
     * @var int|null
     */
    public ?int $ZulaessigeAchslastAchse3 = null;
    /**
     * The SteuerEmissionsrelevanteDaten
     * @var string|null
     */
    public ?string $SteuerEmissionsrelevanteDaten = null;
    /**
     * The GenehmigungsnummerPMS
     * @var string|null
     */
    public ?string $GenehmigungsnummerPMS = null;
    /**
     * The DatumNachruestung
     * @var string|null
     */
    public ?string $DatumNachruestung = null;
    /**
     * The BemerkungenAusnahmen
     * @var string|null
     */
    public ?string $BemerkungenAusnahmen = null;
    /**
     * Constructor method for BatchTechnikdatenTyp
     * @uses BatchTechnikdatenTyp::setHerstellerKurzbezeichnung()
     * @uses BatchTechnikdatenTyp::setFahrzeugidentifizierungsnummer()
     * @uses BatchTechnikdatenTyp::setSchluesselTyp()
     * @uses BatchTechnikdatenTyp::setSchluesselVarianteVersion()
     * @uses BatchTechnikdatenTyp::setTextHersteller()
     * @uses BatchTechnikdatenTyp::setTextMarke()
     * @uses BatchTechnikdatenTyp::setTextHandelsbezeichnung()
     * @uses BatchTechnikdatenTyp::setTextTyp()
     * @uses BatchTechnikdatenTyp::setTextAufbau()
     * @uses BatchTechnikdatenTyp::setSchluesselGrundfarbe()
     * @uses BatchTechnikdatenTyp::setSchluesselZweitfarbe()
     * @uses BatchTechnikdatenTyp::setArtGenehmigung()
     * @uses BatchTechnikdatenTyp::setSchluesselFahrzeugklasse()
     * @uses BatchTechnikdatenTyp::setSchluesselAufbau()
     * @uses BatchTechnikdatenTyp::setSchluesselEmissionsklasse()
     * @uses BatchTechnikdatenTyp::setTextEmissionsklasse()
     * @uses BatchTechnikdatenTyp::setSchluesselKraftstoff()
     * @uses BatchTechnikdatenTyp::setKombinierterCO2Wert()
     * @uses BatchTechnikdatenTyp::setKombinierterCo2WertWltp()
     * @uses BatchTechnikdatenTyp::setHoechstgeschwindigkeit()
     * @uses BatchTechnikdatenTyp::setNennleistungKW()
     * @uses BatchTechnikdatenTyp::setNennleistungUmdrehung()
     * @uses BatchTechnikdatenTyp::setHubraum()
     * @uses BatchTechnikdatenTyp::setLeistungsgewicht()
     * @uses BatchTechnikdatenTyp::setNutzlast()
     * @uses BatchTechnikdatenTyp::setRauminhalt()
     * @uses BatchTechnikdatenTyp::setAnzahlStehplaetze()
     * @uses BatchTechnikdatenTyp::setAnzahlSitzplaetze()
     * @uses BatchTechnikdatenTyp::setMasseFahrbereitMin()
     * @uses BatchTechnikdatenTyp::setMasseFahrbereitMax()
     * @uses BatchTechnikdatenTyp::setTechnischZulaessigeGesamtmasse()
     * @uses BatchTechnikdatenTyp::setTechnischZulaessigeAchslastAchse1()
     * @uses BatchTechnikdatenTyp::setTechnischZulaessigeAchslastAchse2()
     * @uses BatchTechnikdatenTyp::setTechnischZulaessigeAchslastAchse3()
     * @uses BatchTechnikdatenTyp::setStuetzlast()
     * @uses BatchTechnikdatenTyp::setAnhaengelastGebremst()
     * @uses BatchTechnikdatenTyp::setAnhaengelastUngebremst()
     * @uses BatchTechnikdatenTyp::setAnzahlAchsen()
     * @uses BatchTechnikdatenTyp::setAnzahlAntriebsachsen()
     * @uses BatchTechnikdatenTyp::setStandgeraeusch()
     * @uses BatchTechnikdatenTyp::setStandgeraeuschUmdrehung()
     * @uses BatchTechnikdatenTyp::setFahrgeraeusch()
     * @uses BatchTechnikdatenTyp::setBereifungAchse1()
     * @uses BatchTechnikdatenTyp::setBereifungAchse2()
     * @uses BatchTechnikdatenTyp::setBereifungAchse3()
     * @uses BatchTechnikdatenTyp::setLaengeMax()
     * @uses BatchTechnikdatenTyp::setLaengeMin()
     * @uses BatchTechnikdatenTyp::setBreiteMax()
     * @uses BatchTechnikdatenTyp::setBreiteMin()
     * @uses BatchTechnikdatenTyp::setHoeheMax()
     * @uses BatchTechnikdatenTyp::setHoeheMin()
     * @uses BatchTechnikdatenTyp::setZulaessigeGesamtmasse()
     * @uses BatchTechnikdatenTyp::setZulaessigeAchslastAchse1()
     * @uses BatchTechnikdatenTyp::setZulaessigeAchslastAchse2()
     * @uses BatchTechnikdatenTyp::setZulaessigeAchslastAchse3()
     * @uses BatchTechnikdatenTyp::setSteuerEmissionsrelevanteDaten()
     * @uses BatchTechnikdatenTyp::setGenehmigungsnummerPMS()
     * @uses BatchTechnikdatenTyp::setDatumNachruestung()
     * @uses BatchTechnikdatenTyp::setBemerkungenAusnahmen()
     * @param string $herstellerKurzbezeichnung
     * @param string $fahrzeugidentifizierungsnummer
     * @param string $schluesselTyp
     * @param string $schluesselVarianteVersion
     * @param string $textHersteller
     * @param string $textMarke
     * @param string $textHandelsbezeichnung
     * @param string $textTyp
     * @param string $textAufbau
     * @param string $schluesselGrundfarbe
     * @param string $schluesselZweitfarbe
     * @param string $artGenehmigung
     * @param string $schluesselFahrzeugklasse
     * @param string $schluesselAufbau
     * @param string $schluesselEmissionsklasse
     * @param string $textEmissionsklasse
     * @param string $schluesselKraftstoff
     * @param int $kombinierterCO2Wert
     * @param int $kombinierterCo2WertWltp
     * @param int $hoechstgeschwindigkeit
     * @param int $nennleistungKW
     * @param int $nennleistungUmdrehung
     * @param int $hubraum
     * @param float $leistungsgewicht
     * @param int $nutzlast
     * @param float $rauminhalt
     * @param int $anzahlStehplaetze
     * @param int $anzahlSitzplaetze
     * @param int $masseFahrbereitMin
     * @param int $masseFahrbereitMax
     * @param int $technischZulaessigeGesamtmasse
     * @param int $technischZulaessigeAchslastAchse1
     * @param int $technischZulaessigeAchslastAchse2
     * @param int $technischZulaessigeAchslastAchse3
     * @param int $stuetzlast
     * @param int $anhaengelastGebremst
     * @param int $anhaengelastUngebremst
     * @param int $anzahlAchsen
     * @param int $anzahlAntriebsachsen
     * @param string $standgeraeusch
     * @param int $standgeraeuschUmdrehung
     * @param string $fahrgeraeusch
     * @param string $bereifungAchse1
     * @param string $bereifungAchse2
     * @param string $bereifungAchse3
     * @param int $laengeMax
     * @param int $laengeMin
     * @param int $breiteMax
     * @param int $breiteMin
     * @param int $hoeheMax
     * @param int $hoeheMin
     * @param int $zulaessigeGesamtmasse
     * @param int $zulaessigeAchslastAchse1
     * @param int $zulaessigeAchslastAchse2
     * @param int $zulaessigeAchslastAchse3
     * @param string $steuerEmissionsrelevanteDaten
     * @param string $genehmigungsnummerPMS
     * @param string $datumNachruestung
     * @param string $bemerkungenAusnahmen
     */
    public function __construct(?string $herstellerKurzbezeichnung = null, ?string $fahrzeugidentifizierungsnummer = null, ?string $schluesselTyp = null, ?string $schluesselVarianteVersion = null, ?string $textHersteller = null, ?string $textMarke = null, ?string $textHandelsbezeichnung = null, ?string $textTyp = null, ?string $textAufbau = null, ?string $schluesselGrundfarbe = null, ?string $schluesselZweitfarbe = null, ?string $artGenehmigung = null, ?string $schluesselFahrzeugklasse = null, ?string $schluesselAufbau = null, ?string $schluesselEmissionsklasse = null, ?string $textEmissionsklasse = null, ?string $schluesselKraftstoff = null, ?int $kombinierterCO2Wert = null, ?int $kombinierterCo2WertWltp = null, ?int $hoechstgeschwindigkeit = null, ?int $nennleistungKW = null, ?int $nennleistungUmdrehung = null, ?int $hubraum = null, ?float $leistungsgewicht = null, ?int $nutzlast = null, ?float $rauminhalt = null, ?int $anzahlStehplaetze = null, ?int $anzahlSitzplaetze = null, ?int $masseFahrbereitMin = null, ?int $masseFahrbereitMax = null, ?int $technischZulaessigeGesamtmasse = null, ?int $technischZulaessigeAchslastAchse1 = null, ?int $technischZulaessigeAchslastAchse2 = null, ?int $technischZulaessigeAchslastAchse3 = null, ?int $stuetzlast = null, ?int $anhaengelastGebremst = null, ?int $anhaengelastUngebremst = null, ?int $anzahlAchsen = null, ?int $anzahlAntriebsachsen = null, ?string $standgeraeusch = null, ?int $standgeraeuschUmdrehung = null, ?string $fahrgeraeusch = null, ?string $bereifungAchse1 = null, ?string $bereifungAchse2 = null, ?string $bereifungAchse3 = null, ?int $laengeMax = null, ?int $laengeMin = null, ?int $breiteMax = null, ?int $breiteMin = null, ?int $hoeheMax = null, ?int $hoeheMin = null, ?int $zulaessigeGesamtmasse = null, ?int $zulaessigeAchslastAchse1 = null, ?int $zulaessigeAchslastAchse2 = null, ?int $zulaessigeAchslastAchse3 = null, ?string $steuerEmissionsrelevanteDaten = null, ?string $genehmigungsnummerPMS = null, ?string $datumNachruestung = null, ?string $bemerkungenAusnahmen = null)
    {
        $this
            ->setHerstellerKurzbezeichnung($herstellerKurzbezeichnung)
            ->setFahrzeugidentifizierungsnummer($fahrzeugidentifizierungsnummer)
            ->setSchluesselTyp($schluesselTyp)
            ->setSchluesselVarianteVersion($schluesselVarianteVersion)
            ->setTextHersteller($textHersteller)
            ->setTextMarke($textMarke)
            ->setTextHandelsbezeichnung($textHandelsbezeichnung)
            ->setTextTyp($textTyp)
            ->setTextAufbau($textAufbau)
            ->setSchluesselGrundfarbe($schluesselGrundfarbe)
            ->setSchluesselZweitfarbe($schluesselZweitfarbe)
            ->setArtGenehmigung($artGenehmigung)
            ->setSchluesselFahrzeugklasse($schluesselFahrzeugklasse)
            ->setSchluesselAufbau($schluesselAufbau)
            ->setSchluesselEmissionsklasse($schluesselEmissionsklasse)
            ->setTextEmissionsklasse($textEmissionsklasse)
            ->setSchluesselKraftstoff($schluesselKraftstoff)
            ->setKombinierterCO2Wert($kombinierterCO2Wert)
            ->setKombinierterCo2WertWltp($kombinierterCo2WertWltp)
            ->setHoechstgeschwindigkeit($hoechstgeschwindigkeit)
            ->setNennleistungKW($nennleistungKW)
            ->setNennleistungUmdrehung($nennleistungUmdrehung)
            ->setHubraum($hubraum)
            ->setLeistungsgewicht($leistungsgewicht)
            ->setNutzlast($nutzlast)
            ->setRauminhalt($rauminhalt)
            ->setAnzahlStehplaetze($anzahlStehplaetze)
            ->setAnzahlSitzplaetze($anzahlSitzplaetze)
            ->setMasseFahrbereitMin($masseFahrbereitMin)
            ->setMasseFahrbereitMax($masseFahrbereitMax)
            ->setTechnischZulaessigeGesamtmasse($technischZulaessigeGesamtmasse)
            ->setTechnischZulaessigeAchslastAchse1($technischZulaessigeAchslastAchse1)
            ->setTechnischZulaessigeAchslastAchse2($technischZulaessigeAchslastAchse2)
            ->setTechnischZulaessigeAchslastAchse3($technischZulaessigeAchslastAchse3)
            ->setStuetzlast($stuetzlast)
            ->setAnhaengelastGebremst($anhaengelastGebremst)
            ->setAnhaengelastUngebremst($anhaengelastUngebremst)
            ->setAnzahlAchsen($anzahlAchsen)
            ->setAnzahlAntriebsachsen($anzahlAntriebsachsen)
            ->setStandgeraeusch($standgeraeusch)
            ->setStandgeraeuschUmdrehung($standgeraeuschUmdrehung)
            ->setFahrgeraeusch($fahrgeraeusch)
            ->setBereifungAchse1($bereifungAchse1)
            ->setBereifungAchse2($bereifungAchse2)
            ->setBereifungAchse3($bereifungAchse3)
            ->setLaengeMax($laengeMax)
            ->setLaengeMin($laengeMin)
            ->setBreiteMax($breiteMax)
            ->setBreiteMin($breiteMin)
            ->setHoeheMax($hoeheMax)
            ->setHoeheMin($hoeheMin)
            ->setZulaessigeGesamtmasse($zulaessigeGesamtmasse)
            ->setZulaessigeAchslastAchse1($zulaessigeAchslastAchse1)
            ->setZulaessigeAchslastAchse2($zulaessigeAchslastAchse2)
            ->setZulaessigeAchslastAchse3($zulaessigeAchslastAchse3)
            ->setSteuerEmissionsrelevanteDaten($steuerEmissionsrelevanteDaten)
            ->setGenehmigungsnummerPMS($genehmigungsnummerPMS)
            ->setDatumNachruestung($datumNachruestung)
            ->setBemerkungenAusnahmen($bemerkungenAusnahmen);
    }
    /**
     * Get HerstellerKurzbezeichnung value
     * @return string|null
     */
    public function getHerstellerKurzbezeichnung(): ?string
    {
        return $this->HerstellerKurzbezeichnung;
    }
    /**
     * Set HerstellerKurzbezeichnung value
     * @param string $herstellerKurzbezeichnung
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setHerstellerKurzbezeichnung(?string $herstellerKurzbezeichnung = null): self
    {
        $this->HerstellerKurzbezeichnung = $herstellerKurzbezeichnung;
        
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
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setFahrzeugidentifizierungsnummer(?string $fahrzeugidentifizierungsnummer = null): self
    {
        $this->Fahrzeugidentifizierungsnummer = $fahrzeugidentifizierungsnummer;
        
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
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setSchluesselTyp(?string $schluesselTyp = null): self
    {
        $this->SchluesselTyp = $schluesselTyp;
        
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
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setSchluesselVarianteVersion(?string $schluesselVarianteVersion = null): self
    {
        $this->SchluesselVarianteVersion = $schluesselVarianteVersion;
        
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
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setTextHersteller(?string $textHersteller = null): self
    {
        $this->TextHersteller = $textHersteller;
        
        return $this;
    }
    /**
     * Get TextMarke value
     * @return string|null
     */
    public function getTextMarke(): ?string
    {
        return $this->TextMarke;
    }
    /**
     * Set TextMarke value
     * @param string $textMarke
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setTextMarke(?string $textMarke = null): self
    {
        $this->TextMarke = $textMarke;
        
        return $this;
    }
    /**
     * Get TextHandelsbezeichnung value
     * @return string|null
     */
    public function getTextHandelsbezeichnung(): ?string
    {
        return $this->TextHandelsbezeichnung;
    }
    /**
     * Set TextHandelsbezeichnung value
     * @param string $textHandelsbezeichnung
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setTextHandelsbezeichnung(?string $textHandelsbezeichnung = null): self
    {
        $this->TextHandelsbezeichnung = $textHandelsbezeichnung;
        
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
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setTextTyp(?string $textTyp = null): self
    {
        $this->TextTyp = $textTyp;
        
        return $this;
    }
    /**
     * Get TextAufbau value
     * @return string|null
     */
    public function getTextAufbau(): ?string
    {
        return $this->TextAufbau;
    }
    /**
     * Set TextAufbau value
     * @param string $textAufbau
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setTextAufbau(?string $textAufbau = null): self
    {
        $this->TextAufbau = $textAufbau;
        
        return $this;
    }
    /**
     * Get SchluesselGrundfarbe value
     * @return string|null
     */
    public function getSchluesselGrundfarbe(): ?string
    {
        return $this->SchluesselGrundfarbe;
    }
    /**
     * Set SchluesselGrundfarbe value
     * @param string $schluesselGrundfarbe
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setSchluesselGrundfarbe(?string $schluesselGrundfarbe = null): self
    {
        $this->SchluesselGrundfarbe = $schluesselGrundfarbe;
        
        return $this;
    }
    /**
     * Get SchluesselZweitfarbe value
     * @return string|null
     */
    public function getSchluesselZweitfarbe(): ?string
    {
        return $this->SchluesselZweitfarbe;
    }
    /**
     * Set SchluesselZweitfarbe value
     * @param string $schluesselZweitfarbe
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setSchluesselZweitfarbe(?string $schluesselZweitfarbe = null): self
    {
        $this->SchluesselZweitfarbe = $schluesselZweitfarbe;
        
        return $this;
    }
    /**
     * Get ArtGenehmigung value
     * @return string|null
     */
    public function getArtGenehmigung(): ?string
    {
        return $this->ArtGenehmigung;
    }
    /**
     * Set ArtGenehmigung value
     * @param string $artGenehmigung
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setArtGenehmigung(?string $artGenehmigung = null): self
    {
        $this->ArtGenehmigung = $artGenehmigung;
        
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
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setSchluesselFahrzeugklasse(?string $schluesselFahrzeugklasse = null): self
    {
        $this->SchluesselFahrzeugklasse = $schluesselFahrzeugklasse;
        
        return $this;
    }
    /**
     * Get SchluesselAufbau value
     * @return string|null
     */
    public function getSchluesselAufbau(): ?string
    {
        return $this->SchluesselAufbau;
    }
    /**
     * Set SchluesselAufbau value
     * @param string $schluesselAufbau
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setSchluesselAufbau(?string $schluesselAufbau = null): self
    {
        $this->SchluesselAufbau = $schluesselAufbau;
        
        return $this;
    }
    /**
     * Get SchluesselEmissionsklasse value
     * @return string|null
     */
    public function getSchluesselEmissionsklasse(): ?string
    {
        return $this->SchluesselEmissionsklasse;
    }
    /**
     * Set SchluesselEmissionsklasse value
     * @param string $schluesselEmissionsklasse
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setSchluesselEmissionsklasse(?string $schluesselEmissionsklasse = null): self
    {
        $this->SchluesselEmissionsklasse = $schluesselEmissionsklasse;
        
        return $this;
    }
    /**
     * Get TextEmissionsklasse value
     * @return string|null
     */
    public function getTextEmissionsklasse(): ?string
    {
        return $this->TextEmissionsklasse;
    }
    /**
     * Set TextEmissionsklasse value
     * @param string $textEmissionsklasse
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setTextEmissionsklasse(?string $textEmissionsklasse = null): self
    {
        $this->TextEmissionsklasse = $textEmissionsklasse;
        
        return $this;
    }
    /**
     * Get SchluesselKraftstoff value
     * @return string|null
     */
    public function getSchluesselKraftstoff(): ?string
    {
        return $this->SchluesselKraftstoff;
    }
    /**
     * Set SchluesselKraftstoff value
     * @param string $schluesselKraftstoff
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setSchluesselKraftstoff(?string $schluesselKraftstoff = null): self
    {
        $this->SchluesselKraftstoff = $schluesselKraftstoff;
        
        return $this;
    }
    /**
     * Get KombinierterCO2Wert value
     * @return int|null
     */
    public function getKombinierterCO2Wert(): ?int
    {
        return $this->KombinierterCO2Wert;
    }
    /**
     * Set KombinierterCO2Wert value
     * @param int $kombinierterCO2Wert
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setKombinierterCO2Wert(?int $kombinierterCO2Wert = null): self
    {
        $this->KombinierterCO2Wert = $kombinierterCO2Wert;
        
        return $this;
    }
    /**
     * Get kombinierterCo2WertWltp value
     * @return int|null
     */
    public function getKombinierterCo2WertWltp(): ?int
    {
        return $this->kombinierterCo2WertWltp;
    }
    /**
     * Set kombinierterCo2WertWltp value
     * @param int $kombinierterCo2WertWltp
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setKombinierterCo2WertWltp(?int $kombinierterCo2WertWltp = null): self
    {
        $this->kombinierterCo2WertWltp = $kombinierterCo2WertWltp;
        
        return $this;
    }
    /**
     * Get Hoechstgeschwindigkeit value
     * @return int|null
     */
    public function getHoechstgeschwindigkeit(): ?int
    {
        return $this->Hoechstgeschwindigkeit;
    }
    /**
     * Set Hoechstgeschwindigkeit value
     * @param int $hoechstgeschwindigkeit
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setHoechstgeschwindigkeit(?int $hoechstgeschwindigkeit = null): self
    {
        $this->Hoechstgeschwindigkeit = $hoechstgeschwindigkeit;
        
        return $this;
    }
    /**
     * Get NennleistungKW value
     * @return int|null
     */
    public function getNennleistungKW(): ?int
    {
        return $this->NennleistungKW;
    }
    /**
     * Set NennleistungKW value
     * @param int $nennleistungKW
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setNennleistungKW(?int $nennleistungKW = null): self
    {
        $this->NennleistungKW = $nennleistungKW;
        
        return $this;
    }
    /**
     * Get NennleistungUmdrehung value
     * @return int|null
     */
    public function getNennleistungUmdrehung(): ?int
    {
        return $this->NennleistungUmdrehung;
    }
    /**
     * Set NennleistungUmdrehung value
     * @param int $nennleistungUmdrehung
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setNennleistungUmdrehung(?int $nennleistungUmdrehung = null): self
    {
        $this->NennleistungUmdrehung = $nennleistungUmdrehung;
        
        return $this;
    }
    /**
     * Get Hubraum value
     * @return int|null
     */
    public function getHubraum(): ?int
    {
        return $this->Hubraum;
    }
    /**
     * Set Hubraum value
     * @param int $hubraum
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setHubraum(?int $hubraum = null): self
    {
        $this->Hubraum = $hubraum;
        
        return $this;
    }
    /**
     * Get Leistungsgewicht value
     * @return float|null
     */
    public function getLeistungsgewicht(): ?float
    {
        return $this->Leistungsgewicht;
    }
    /**
     * Set Leistungsgewicht value
     * @param float $leistungsgewicht
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setLeistungsgewicht(?float $leistungsgewicht = null): self
    {
        $this->Leistungsgewicht = $leistungsgewicht;
        
        return $this;
    }
    /**
     * Get Nutzlast value
     * @return int|null
     */
    public function getNutzlast(): ?int
    {
        return $this->Nutzlast;
    }
    /**
     * Set Nutzlast value
     * @param int $nutzlast
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setNutzlast(?int $nutzlast = null): self
    {
        $this->Nutzlast = $nutzlast;
        
        return $this;
    }
    /**
     * Get Rauminhalt value
     * @return float|null
     */
    public function getRauminhalt(): ?float
    {
        return $this->Rauminhalt;
    }
    /**
     * Set Rauminhalt value
     * @param float $rauminhalt
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setRauminhalt(?float $rauminhalt = null): self
    {
        $this->Rauminhalt = $rauminhalt;
        
        return $this;
    }
    /**
     * Get AnzahlStehplaetze value
     * @return int|null
     */
    public function getAnzahlStehplaetze(): ?int
    {
        return $this->AnzahlStehplaetze;
    }
    /**
     * Set AnzahlStehplaetze value
     * @param int $anzahlStehplaetze
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setAnzahlStehplaetze(?int $anzahlStehplaetze = null): self
    {
        $this->AnzahlStehplaetze = $anzahlStehplaetze;
        
        return $this;
    }
    /**
     * Get AnzahlSitzplaetze value
     * @return int|null
     */
    public function getAnzahlSitzplaetze(): ?int
    {
        return $this->AnzahlSitzplaetze;
    }
    /**
     * Set AnzahlSitzplaetze value
     * @param int $anzahlSitzplaetze
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setAnzahlSitzplaetze(?int $anzahlSitzplaetze = null): self
    {
        $this->AnzahlSitzplaetze = $anzahlSitzplaetze;
        
        return $this;
    }
    /**
     * Get MasseFahrbereitMin value
     * @return int|null
     */
    public function getMasseFahrbereitMin(): ?int
    {
        return $this->MasseFahrbereitMin;
    }
    /**
     * Set MasseFahrbereitMin value
     * @param int $masseFahrbereitMin
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setMasseFahrbereitMin(?int $masseFahrbereitMin = null): self
    {
        $this->MasseFahrbereitMin = $masseFahrbereitMin;
        
        return $this;
    }
    /**
     * Get MasseFahrbereitMax value
     * @return int|null
     */
    public function getMasseFahrbereitMax(): ?int
    {
        return $this->MasseFahrbereitMax;
    }
    /**
     * Set MasseFahrbereitMax value
     * @param int $masseFahrbereitMax
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setMasseFahrbereitMax(?int $masseFahrbereitMax = null): self
    {
        $this->MasseFahrbereitMax = $masseFahrbereitMax;
        
        return $this;
    }
    /**
     * Get TechnischZulaessigeGesamtmasse value
     * @return int|null
     */
    public function getTechnischZulaessigeGesamtmasse(): ?int
    {
        return $this->TechnischZulaessigeGesamtmasse;
    }
    /**
     * Set TechnischZulaessigeGesamtmasse value
     * @param int $technischZulaessigeGesamtmasse
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setTechnischZulaessigeGesamtmasse(?int $technischZulaessigeGesamtmasse = null): self
    {
        $this->TechnischZulaessigeGesamtmasse = $technischZulaessigeGesamtmasse;
        
        return $this;
    }
    /**
     * Get TechnischZulaessigeAchslastAchse1 value
     * @return int|null
     */
    public function getTechnischZulaessigeAchslastAchse1(): ?int
    {
        return $this->TechnischZulaessigeAchslastAchse1;
    }
    /**
     * Set TechnischZulaessigeAchslastAchse1 value
     * @param int $technischZulaessigeAchslastAchse1
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setTechnischZulaessigeAchslastAchse1(?int $technischZulaessigeAchslastAchse1 = null): self
    {
        $this->TechnischZulaessigeAchslastAchse1 = $technischZulaessigeAchslastAchse1;
        
        return $this;
    }
    /**
     * Get TechnischZulaessigeAchslastAchse2 value
     * @return int|null
     */
    public function getTechnischZulaessigeAchslastAchse2(): ?int
    {
        return $this->TechnischZulaessigeAchslastAchse2;
    }
    /**
     * Set TechnischZulaessigeAchslastAchse2 value
     * @param int $technischZulaessigeAchslastAchse2
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setTechnischZulaessigeAchslastAchse2(?int $technischZulaessigeAchslastAchse2 = null): self
    {
        $this->TechnischZulaessigeAchslastAchse2 = $technischZulaessigeAchslastAchse2;
        
        return $this;
    }
    /**
     * Get TechnischZulaessigeAchslastAchse3 value
     * @return int|null
     */
    public function getTechnischZulaessigeAchslastAchse3(): ?int
    {
        return $this->TechnischZulaessigeAchslastAchse3;
    }
    /**
     * Set TechnischZulaessigeAchslastAchse3 value
     * @param int $technischZulaessigeAchslastAchse3
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setTechnischZulaessigeAchslastAchse3(?int $technischZulaessigeAchslastAchse3 = null): self
    {
        $this->TechnischZulaessigeAchslastAchse3 = $technischZulaessigeAchslastAchse3;
        
        return $this;
    }
    /**
     * Get Stuetzlast value
     * @return int|null
     */
    public function getStuetzlast(): ?int
    {
        return $this->Stuetzlast;
    }
    /**
     * Set Stuetzlast value
     * @param int $stuetzlast
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setStuetzlast(?int $stuetzlast = null): self
    {
        $this->Stuetzlast = $stuetzlast;
        
        return $this;
    }
    /**
     * Get AnhaengelastGebremst value
     * @return int|null
     */
    public function getAnhaengelastGebremst(): ?int
    {
        return $this->AnhaengelastGebremst;
    }
    /**
     * Set AnhaengelastGebremst value
     * @param int $anhaengelastGebremst
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setAnhaengelastGebremst(?int $anhaengelastGebremst = null): self
    {
        $this->AnhaengelastGebremst = $anhaengelastGebremst;
        
        return $this;
    }
    /**
     * Get AnhaengelastUngebremst value
     * @return int|null
     */
    public function getAnhaengelastUngebremst(): ?int
    {
        return $this->AnhaengelastUngebremst;
    }
    /**
     * Set AnhaengelastUngebremst value
     * @param int $anhaengelastUngebremst
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setAnhaengelastUngebremst(?int $anhaengelastUngebremst = null): self
    {
        $this->AnhaengelastUngebremst = $anhaengelastUngebremst;
        
        return $this;
    }
    /**
     * Get AnzahlAchsen value
     * @return int|null
     */
    public function getAnzahlAchsen(): ?int
    {
        return $this->AnzahlAchsen;
    }
    /**
     * Set AnzahlAchsen value
     * @param int $anzahlAchsen
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setAnzahlAchsen(?int $anzahlAchsen = null): self
    {
        $this->AnzahlAchsen = $anzahlAchsen;
        
        return $this;
    }
    /**
     * Get AnzahlAntriebsachsen value
     * @return int|null
     */
    public function getAnzahlAntriebsachsen(): ?int
    {
        return $this->AnzahlAntriebsachsen;
    }
    /**
     * Set AnzahlAntriebsachsen value
     * @param int $anzahlAntriebsachsen
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setAnzahlAntriebsachsen(?int $anzahlAntriebsachsen = null): self
    {
        $this->AnzahlAntriebsachsen = $anzahlAntriebsachsen;
        
        return $this;
    }
    /**
     * Get Standgeraeusch value
     * @return string|null
     */
    public function getStandgeraeusch(): ?string
    {
        return $this->Standgeraeusch;
    }
    /**
     * Set Standgeraeusch value
     * @param string $standgeraeusch
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setStandgeraeusch(?string $standgeraeusch = null): self
    {
        $this->Standgeraeusch = $standgeraeusch;
        
        return $this;
    }
    /**
     * Get StandgeraeuschUmdrehung value
     * @return int|null
     */
    public function getStandgeraeuschUmdrehung(): ?int
    {
        return $this->StandgeraeuschUmdrehung;
    }
    /**
     * Set StandgeraeuschUmdrehung value
     * @param int $standgeraeuschUmdrehung
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setStandgeraeuschUmdrehung(?int $standgeraeuschUmdrehung = null): self
    {
        $this->StandgeraeuschUmdrehung = $standgeraeuschUmdrehung;
        
        return $this;
    }
    /**
     * Get Fahrgeraeusch value
     * @return string|null
     */
    public function getFahrgeraeusch(): ?string
    {
        return $this->Fahrgeraeusch;
    }
    /**
     * Set Fahrgeraeusch value
     * @param string $fahrgeraeusch
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setFahrgeraeusch(?string $fahrgeraeusch = null): self
    {
        $this->Fahrgeraeusch = $fahrgeraeusch;
        
        return $this;
    }
    /**
     * Get BereifungAchse1 value
     * @return string|null
     */
    public function getBereifungAchse1(): ?string
    {
        return $this->BereifungAchse1;
    }
    /**
     * Set BereifungAchse1 value
     * @param string $bereifungAchse1
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setBereifungAchse1(?string $bereifungAchse1 = null): self
    {
        $this->BereifungAchse1 = $bereifungAchse1;
        
        return $this;
    }
    /**
     * Get BereifungAchse2 value
     * @return string|null
     */
    public function getBereifungAchse2(): ?string
    {
        return $this->BereifungAchse2;
    }
    /**
     * Set BereifungAchse2 value
     * @param string $bereifungAchse2
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setBereifungAchse2(?string $bereifungAchse2 = null): self
    {
        $this->BereifungAchse2 = $bereifungAchse2;
        
        return $this;
    }
    /**
     * Get BereifungAchse3 value
     * @return string|null
     */
    public function getBereifungAchse3(): ?string
    {
        return $this->BereifungAchse3;
    }
    /**
     * Set BereifungAchse3 value
     * @param string $bereifungAchse3
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setBereifungAchse3(?string $bereifungAchse3 = null): self
    {
        $this->BereifungAchse3 = $bereifungAchse3;
        
        return $this;
    }
    /**
     * Get LaengeMax value
     * @return int|null
     */
    public function getLaengeMax(): ?int
    {
        return $this->LaengeMax;
    }
    /**
     * Set LaengeMax value
     * @param int $laengeMax
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setLaengeMax(?int $laengeMax = null): self
    {
        $this->LaengeMax = $laengeMax;
        
        return $this;
    }
    /**
     * Get LaengeMin value
     * @return int|null
     */
    public function getLaengeMin(): ?int
    {
        return $this->LaengeMin;
    }
    /**
     * Set LaengeMin value
     * @param int $laengeMin
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setLaengeMin(?int $laengeMin = null): self
    {
        $this->LaengeMin = $laengeMin;
        
        return $this;
    }
    /**
     * Get BreiteMax value
     * @return int|null
     */
    public function getBreiteMax(): ?int
    {
        return $this->BreiteMax;
    }
    /**
     * Set BreiteMax value
     * @param int $breiteMax
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setBreiteMax(?int $breiteMax = null): self
    {
        $this->BreiteMax = $breiteMax;
        
        return $this;
    }
    /**
     * Get BreiteMin value
     * @return int|null
     */
    public function getBreiteMin(): ?int
    {
        return $this->BreiteMin;
    }
    /**
     * Set BreiteMin value
     * @param int $breiteMin
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setBreiteMin(?int $breiteMin = null): self
    {
        $this->BreiteMin = $breiteMin;
        
        return $this;
    }
    /**
     * Get HoeheMax value
     * @return int|null
     */
    public function getHoeheMax(): ?int
    {
        return $this->HoeheMax;
    }
    /**
     * Set HoeheMax value
     * @param int $hoeheMax
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setHoeheMax(?int $hoeheMax = null): self
    {
        $this->HoeheMax = $hoeheMax;
        
        return $this;
    }
    /**
     * Get HoeheMin value
     * @return int|null
     */
    public function getHoeheMin(): ?int
    {
        return $this->HoeheMin;
    }
    /**
     * Set HoeheMin value
     * @param int $hoeheMin
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setHoeheMin(?int $hoeheMin = null): self
    {
        $this->HoeheMin = $hoeheMin;
        
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
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setZulaessigeGesamtmasse(?int $zulaessigeGesamtmasse = null): self
    {
        $this->ZulaessigeGesamtmasse = $zulaessigeGesamtmasse;
        
        return $this;
    }
    /**
     * Get ZulaessigeAchslastAchse1 value
     * @return int|null
     */
    public function getZulaessigeAchslastAchse1(): ?int
    {
        return $this->ZulaessigeAchslastAchse1;
    }
    /**
     * Set ZulaessigeAchslastAchse1 value
     * @param int $zulaessigeAchslastAchse1
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setZulaessigeAchslastAchse1(?int $zulaessigeAchslastAchse1 = null): self
    {
        $this->ZulaessigeAchslastAchse1 = $zulaessigeAchslastAchse1;
        
        return $this;
    }
    /**
     * Get ZulaessigeAchslastAchse2 value
     * @return int|null
     */
    public function getZulaessigeAchslastAchse2(): ?int
    {
        return $this->ZulaessigeAchslastAchse2;
    }
    /**
     * Set ZulaessigeAchslastAchse2 value
     * @param int $zulaessigeAchslastAchse2
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setZulaessigeAchslastAchse2(?int $zulaessigeAchslastAchse2 = null): self
    {
        $this->ZulaessigeAchslastAchse2 = $zulaessigeAchslastAchse2;
        
        return $this;
    }
    /**
     * Get ZulaessigeAchslastAchse3 value
     * @return int|null
     */
    public function getZulaessigeAchslastAchse3(): ?int
    {
        return $this->ZulaessigeAchslastAchse3;
    }
    /**
     * Set ZulaessigeAchslastAchse3 value
     * @param int $zulaessigeAchslastAchse3
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setZulaessigeAchslastAchse3(?int $zulaessigeAchslastAchse3 = null): self
    {
        $this->ZulaessigeAchslastAchse3 = $zulaessigeAchslastAchse3;
        
        return $this;
    }
    /**
     * Get SteuerEmissionsrelevanteDaten value
     * @return string|null
     */
    public function getSteuerEmissionsrelevanteDaten(): ?string
    {
        return $this->SteuerEmissionsrelevanteDaten;
    }
    /**
     * Set SteuerEmissionsrelevanteDaten value
     * @param string $steuerEmissionsrelevanteDaten
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setSteuerEmissionsrelevanteDaten(?string $steuerEmissionsrelevanteDaten = null): self
    {
        $this->SteuerEmissionsrelevanteDaten = $steuerEmissionsrelevanteDaten;
        
        return $this;
    }
    /**
     * Get GenehmigungsnummerPMS value
     * @return string|null
     */
    public function getGenehmigungsnummerPMS(): ?string
    {
        return $this->GenehmigungsnummerPMS;
    }
    /**
     * Set GenehmigungsnummerPMS value
     * @param string $genehmigungsnummerPMS
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setGenehmigungsnummerPMS(?string $genehmigungsnummerPMS = null): self
    {
        $this->GenehmigungsnummerPMS = $genehmigungsnummerPMS;
        
        return $this;
    }
    /**
     * Get DatumNachruestung value
     * @return string|null
     */
    public function getDatumNachruestung(): ?string
    {
        return $this->DatumNachruestung;
    }
    /**
     * Set DatumNachruestung value
     * @param string $datumNachruestung
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setDatumNachruestung(?string $datumNachruestung = null): self
    {
        $this->DatumNachruestung = $datumNachruestung;
        
        return $this;
    }
    /**
     * Get BemerkungenAusnahmen value
     * @return string|null
     */
    public function getBemerkungenAusnahmen(): ?string
    {
        return $this->BemerkungenAusnahmen;
    }
    /**
     * Set BemerkungenAusnahmen value
     * @param string $bemerkungenAusnahmen
     * @return \THAG\XKfz\StructType\BatchTechnikdatenTyp
     */
    public function setBemerkungenAusnahmen(?string $bemerkungenAusnahmen = null): self
    {
        $this->BemerkungenAusnahmen = $bemerkungenAusnahmen;
        
        return $this;
    }
}
