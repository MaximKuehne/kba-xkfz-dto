<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BatchFahrzeugdatenTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class BatchFahrzeugdatenTyp extends AbstractStructBase
{
    /**
     * The Fahrzeugidentifizierungsnummer
     * @var string|null
     */
    public ?string $Fahrzeugidentifizierungsnummer = null;
    /**
     * The PruefzifferFahrzeugidentifizierungsnummer
     * @var string|null
     */
    public ?string $PruefzifferFahrzeugidentifizierungsnummer = null;
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
     * The Genehmigungsnummer
     * @var string|null
     */
    public ?string $Genehmigungsnummer = null;
    /**
     * The DatumGenehmigung
     * @var string|null
     */
    public ?string $DatumGenehmigung = null;
    /**
     * The SchluesselFahrzeugklasse
     * @var string|null
     */
    public ?string $SchluesselFahrzeugklasse = null;
    /**
     * The SchluesselKraftstoff
     * @var string|null
     */
    public ?string $SchluesselKraftstoff = null;
    /**
     * The TextKraftstoff
     * @var string|null
     */
    public ?string $TextKraftstoff = null;
    /**
     * The kombinierterCo2WertWltp
     * @var int|null
     */
    public ?int $kombinierterCo2WertWltp = null;
    /**
     * The NennleistungKW
     * @var int|null
     */
    public ?int $NennleistungKW = null;
    /**
     * The BemerkungenAusnahmen
     * @var string|null
     */
    public ?string $BemerkungenAusnahmen = null;
    /**
     * The Beiblatt
     * @var string|null
     */
    public ?string $Beiblatt = null;
    /**
     * The DatumErstzulassung
     * @var string|null
     */
    public ?string $DatumErstzulassung = null;
    /**
     * Constructor method for BatchFahrzeugdatenTyp
     * @uses BatchFahrzeugdatenTyp::setFahrzeugidentifizierungsnummer()
     * @uses BatchFahrzeugdatenTyp::setPruefzifferFahrzeugidentifizierungsnummer()
     * @uses BatchFahrzeugdatenTyp::setTextHersteller()
     * @uses BatchFahrzeugdatenTyp::setTextMarke()
     * @uses BatchFahrzeugdatenTyp::setTextHandelsbezeichnung()
     * @uses BatchFahrzeugdatenTyp::setGenehmigungsnummer()
     * @uses BatchFahrzeugdatenTyp::setDatumGenehmigung()
     * @uses BatchFahrzeugdatenTyp::setSchluesselFahrzeugklasse()
     * @uses BatchFahrzeugdatenTyp::setSchluesselKraftstoff()
     * @uses BatchFahrzeugdatenTyp::setTextKraftstoff()
     * @uses BatchFahrzeugdatenTyp::setKombinierterCo2WertWltp()
     * @uses BatchFahrzeugdatenTyp::setNennleistungKW()
     * @uses BatchFahrzeugdatenTyp::setBemerkungenAusnahmen()
     * @uses BatchFahrzeugdatenTyp::setBeiblatt()
     * @uses BatchFahrzeugdatenTyp::setDatumErstzulassung()
     * @param string $fahrzeugidentifizierungsnummer
     * @param string $pruefzifferFahrzeugidentifizierungsnummer
     * @param string $textHersteller
     * @param string $textMarke
     * @param string $textHandelsbezeichnung
     * @param string $genehmigungsnummer
     * @param string $datumGenehmigung
     * @param string $schluesselFahrzeugklasse
     * @param string $schluesselKraftstoff
     * @param string $textKraftstoff
     * @param int $kombinierterCo2WertWltp
     * @param int $nennleistungKW
     * @param string $bemerkungenAusnahmen
     * @param string $beiblatt
     * @param string $datumErstzulassung
     */
    public function __construct(?string $fahrzeugidentifizierungsnummer = null, ?string $pruefzifferFahrzeugidentifizierungsnummer = null, ?string $textHersteller = null, ?string $textMarke = null, ?string $textHandelsbezeichnung = null, ?string $genehmigungsnummer = null, ?string $datumGenehmigung = null, ?string $schluesselFahrzeugklasse = null, ?string $schluesselKraftstoff = null, ?string $textKraftstoff = null, ?int $kombinierterCo2WertWltp = null, ?int $nennleistungKW = null, ?string $bemerkungenAusnahmen = null, ?string $beiblatt = null, ?string $datumErstzulassung = null)
    {
        $this
            ->setFahrzeugidentifizierungsnummer($fahrzeugidentifizierungsnummer)
            ->setPruefzifferFahrzeugidentifizierungsnummer($pruefzifferFahrzeugidentifizierungsnummer)
            ->setTextHersteller($textHersteller)
            ->setTextMarke($textMarke)
            ->setTextHandelsbezeichnung($textHandelsbezeichnung)
            ->setGenehmigungsnummer($genehmigungsnummer)
            ->setDatumGenehmigung($datumGenehmigung)
            ->setSchluesselFahrzeugklasse($schluesselFahrzeugklasse)
            ->setSchluesselKraftstoff($schluesselKraftstoff)
            ->setTextKraftstoff($textKraftstoff)
            ->setKombinierterCo2WertWltp($kombinierterCo2WertWltp)
            ->setNennleistungKW($nennleistungKW)
            ->setBemerkungenAusnahmen($bemerkungenAusnahmen)
            ->setBeiblatt($beiblatt)
            ->setDatumErstzulassung($datumErstzulassung);
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
     * @return \THAG\XKfz\StructType\BatchFahrzeugdatenTyp
     */
    public function setFahrzeugidentifizierungsnummer(?string $fahrzeugidentifizierungsnummer = null): self
    {
        $this->Fahrzeugidentifizierungsnummer = $fahrzeugidentifizierungsnummer;
        
        return $this;
    }
    /**
     * Get PruefzifferFahrzeugidentifizierungsnummer value
     * @return string|null
     */
    public function getPruefzifferFahrzeugidentifizierungsnummer(): ?string
    {
        return $this->PruefzifferFahrzeugidentifizierungsnummer;
    }
    /**
     * Set PruefzifferFahrzeugidentifizierungsnummer value
     * @param string $pruefzifferFahrzeugidentifizierungsnummer
     * @return \THAG\XKfz\StructType\BatchFahrzeugdatenTyp
     */
    public function setPruefzifferFahrzeugidentifizierungsnummer(?string $pruefzifferFahrzeugidentifizierungsnummer = null): self
    {
        $this->PruefzifferFahrzeugidentifizierungsnummer = $pruefzifferFahrzeugidentifizierungsnummer;
        
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
     * @return \THAG\XKfz\StructType\BatchFahrzeugdatenTyp
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
     * @return \THAG\XKfz\StructType\BatchFahrzeugdatenTyp
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
     * @return \THAG\XKfz\StructType\BatchFahrzeugdatenTyp
     */
    public function setTextHandelsbezeichnung(?string $textHandelsbezeichnung = null): self
    {
        $this->TextHandelsbezeichnung = $textHandelsbezeichnung;
        
        return $this;
    }
    /**
     * Get Genehmigungsnummer value
     * @return string|null
     */
    public function getGenehmigungsnummer(): ?string
    {
        return $this->Genehmigungsnummer;
    }
    /**
     * Set Genehmigungsnummer value
     * @param string $genehmigungsnummer
     * @return \THAG\XKfz\StructType\BatchFahrzeugdatenTyp
     */
    public function setGenehmigungsnummer(?string $genehmigungsnummer = null): self
    {
        $this->Genehmigungsnummer = $genehmigungsnummer;
        
        return $this;
    }
    /**
     * Get DatumGenehmigung value
     * @return string|null
     */
    public function getDatumGenehmigung(): ?string
    {
        return $this->DatumGenehmigung;
    }
    /**
     * Set DatumGenehmigung value
     * @param string $datumGenehmigung
     * @return \THAG\XKfz\StructType\BatchFahrzeugdatenTyp
     */
    public function setDatumGenehmigung(?string $datumGenehmigung = null): self
    {
        $this->DatumGenehmigung = $datumGenehmigung;
        
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
     * @return \THAG\XKfz\StructType\BatchFahrzeugdatenTyp
     */
    public function setSchluesselFahrzeugklasse(?string $schluesselFahrzeugklasse = null): self
    {
        $this->SchluesselFahrzeugklasse = $schluesselFahrzeugklasse;
        
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
     * @return \THAG\XKfz\StructType\BatchFahrzeugdatenTyp
     */
    public function setSchluesselKraftstoff(?string $schluesselKraftstoff = null): self
    {
        $this->SchluesselKraftstoff = $schluesselKraftstoff;
        
        return $this;
    }
    /**
     * Get TextKraftstoff value
     * @return string|null
     */
    public function getTextKraftstoff(): ?string
    {
        return $this->TextKraftstoff;
    }
    /**
     * Set TextKraftstoff value
     * @param string $textKraftstoff
     * @return \THAG\XKfz\StructType\BatchFahrzeugdatenTyp
     */
    public function setTextKraftstoff(?string $textKraftstoff = null): self
    {
        $this->TextKraftstoff = $textKraftstoff;
        
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
     * @return \THAG\XKfz\StructType\BatchFahrzeugdatenTyp
     */
    public function setKombinierterCo2WertWltp(?int $kombinierterCo2WertWltp = null): self
    {
        $this->kombinierterCo2WertWltp = $kombinierterCo2WertWltp;
        
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
     * @return \THAG\XKfz\StructType\BatchFahrzeugdatenTyp
     */
    public function setNennleistungKW(?int $nennleistungKW = null): self
    {
        $this->NennleistungKW = $nennleistungKW;
        
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
     * @return \THAG\XKfz\StructType\BatchFahrzeugdatenTyp
     */
    public function setBemerkungenAusnahmen(?string $bemerkungenAusnahmen = null): self
    {
        $this->BemerkungenAusnahmen = $bemerkungenAusnahmen;
        
        return $this;
    }
    /**
     * Get Beiblatt value
     * @return string|null
     */
    public function getBeiblatt(): ?string
    {
        return $this->Beiblatt;
    }
    /**
     * Set Beiblatt value
     * @param string $beiblatt
     * @return \THAG\XKfz\StructType\BatchFahrzeugdatenTyp
     */
    public function setBeiblatt(?string $beiblatt = null): self
    {
        $this->Beiblatt = $beiblatt;
        
        return $this;
    }
    /**
     * Get DatumErstzulassung value
     * @return string|null
     */
    public function getDatumErstzulassung(): ?string
    {
        return $this->DatumErstzulassung;
    }
    /**
     * Set DatumErstzulassung value
     * @param string $datumErstzulassung
     * @return \THAG\XKfz\StructType\BatchFahrzeugdatenTyp
     */
    public function setDatumErstzulassung(?string $datumErstzulassung = null): self
    {
        $this->DatumErstzulassung = $datumErstzulassung;
        
        return $this;
    }
}
