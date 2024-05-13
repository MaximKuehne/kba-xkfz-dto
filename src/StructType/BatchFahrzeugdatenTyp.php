<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BatchFahrzeugdatenTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class BatchFahrzeugdatenTyp extends AbstractStructBase
{
    /**
     * The Fahrzeugidentifizierungsnummer
     */
    public ?string $Fahrzeugidentifizierungsnummer = null;

    /**
     * The PruefzifferFahrzeugidentifizierungsnummer
     */
    public ?string $PruefzifferFahrzeugidentifizierungsnummer = null;

    /**
     * The TextHersteller
     */
    public ?string $TextHersteller = null;

    /**
     * The TextMarke
     */
    public ?string $TextMarke = null;

    /**
     * The TextHandelsbezeichnung
     */
    public ?string $TextHandelsbezeichnung = null;

    /**
     * The Genehmigungsnummer
     */
    public ?string $Genehmigungsnummer = null;

    /**
     * The DatumGenehmigung
     */
    public ?string $DatumGenehmigung = null;

    /**
     * The SchluesselFahrzeugklasse
     */
    public ?string $SchluesselFahrzeugklasse = null;

    /**
     * The SchluesselKraftstoff
     */
    public ?string $SchluesselKraftstoff = null;

    /**
     * The TextKraftstoff
     */
    public ?string $TextKraftstoff = null;

    /**
     * The kombinierterCo2WertWltp
     */
    public ?int $kombinierterCo2WertWltp = null;

    /**
     * The NennleistungKW
     */
    public ?int $NennleistungKW = null;

    /**
     * The BemerkungenAusnahmen
     */
    public ?string $BemerkungenAusnahmen = null;

    /**
     * The Beiblatt
     */
    public ?string $Beiblatt = null;

    /**
     * The DatumErstzulassung
     */
    public ?string $DatumErstzulassung = null;

    /**
     * Constructor method for BatchFahrzeugdatenTyp
     *
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
     * Get PruefzifferFahrzeugidentifizierungsnummer value
     */
    public function getPruefzifferFahrzeugidentifizierungsnummer(): ?string
    {
        return $this->PruefzifferFahrzeugidentifizierungsnummer;
    }

    /**
     * Set PruefzifferFahrzeugidentifizierungsnummer value
     */
    public function setPruefzifferFahrzeugidentifizierungsnummer(?string $pruefzifferFahrzeugidentifizierungsnummer = null): self
    {
        $this->PruefzifferFahrzeugidentifizierungsnummer = $pruefzifferFahrzeugidentifizierungsnummer;

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
     * Get TextMarke value
     */
    public function getTextMarke(): ?string
    {
        return $this->TextMarke;
    }

    /**
     * Set TextMarke value
     */
    public function setTextMarke(?string $textMarke = null): self
    {
        $this->TextMarke = $textMarke;

        return $this;
    }

    /**
     * Get TextHandelsbezeichnung value
     */
    public function getTextHandelsbezeichnung(): ?string
    {
        return $this->TextHandelsbezeichnung;
    }

    /**
     * Set TextHandelsbezeichnung value
     */
    public function setTextHandelsbezeichnung(?string $textHandelsbezeichnung = null): self
    {
        $this->TextHandelsbezeichnung = $textHandelsbezeichnung;

        return $this;
    }

    /**
     * Get Genehmigungsnummer value
     */
    public function getGenehmigungsnummer(): ?string
    {
        return $this->Genehmigungsnummer;
    }

    /**
     * Set Genehmigungsnummer value
     */
    public function setGenehmigungsnummer(?string $genehmigungsnummer = null): self
    {
        $this->Genehmigungsnummer = $genehmigungsnummer;

        return $this;
    }

    /**
     * Get DatumGenehmigung value
     */
    public function getDatumGenehmigung(): ?string
    {
        return $this->DatumGenehmigung;
    }

    /**
     * Set DatumGenehmigung value
     */
    public function setDatumGenehmigung(?string $datumGenehmigung = null): self
    {
        $this->DatumGenehmigung = $datumGenehmigung;

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
     * Get SchluesselKraftstoff value
     */
    public function getSchluesselKraftstoff(): ?string
    {
        return $this->SchluesselKraftstoff;
    }

    /**
     * Set SchluesselKraftstoff value
     */
    public function setSchluesselKraftstoff(?string $schluesselKraftstoff = null): self
    {
        $this->SchluesselKraftstoff = $schluesselKraftstoff;

        return $this;
    }

    /**
     * Get TextKraftstoff value
     */
    public function getTextKraftstoff(): ?string
    {
        return $this->TextKraftstoff;
    }

    /**
     * Set TextKraftstoff value
     */
    public function setTextKraftstoff(?string $textKraftstoff = null): self
    {
        $this->TextKraftstoff = $textKraftstoff;

        return $this;
    }

    /**
     * Get kombinierterCo2WertWltp value
     */
    public function getKombinierterCo2WertWltp(): ?int
    {
        return $this->kombinierterCo2WertWltp;
    }

    /**
     * Set kombinierterCo2WertWltp value
     */
    public function setKombinierterCo2WertWltp(?int $kombinierterCo2WertWltp = null): self
    {
        $this->kombinierterCo2WertWltp = $kombinierterCo2WertWltp;

        return $this;
    }

    /**
     * Get NennleistungKW value
     */
    public function getNennleistungKW(): ?int
    {
        return $this->NennleistungKW;
    }

    /**
     * Set NennleistungKW value
     */
    public function setNennleistungKW(?int $nennleistungKW = null): self
    {
        $this->NennleistungKW = $nennleistungKW;

        return $this;
    }

    /**
     * Get BemerkungenAusnahmen value
     */
    public function getBemerkungenAusnahmen(): ?string
    {
        return $this->BemerkungenAusnahmen;
    }

    /**
     * Set BemerkungenAusnahmen value
     */
    public function setBemerkungenAusnahmen(?string $bemerkungenAusnahmen = null): self
    {
        $this->BemerkungenAusnahmen = $bemerkungenAusnahmen;

        return $this;
    }

    /**
     * Get Beiblatt value
     */
    public function getBeiblatt(): ?string
    {
        return $this->Beiblatt;
    }

    /**
     * Set Beiblatt value
     */
    public function setBeiblatt(?string $beiblatt = null): self
    {
        $this->Beiblatt = $beiblatt;

        return $this;
    }

    /**
     * Get DatumErstzulassung value
     */
    public function getDatumErstzulassung(): ?string
    {
        return $this->DatumErstzulassung;
    }

    /**
     * Set DatumErstzulassung value
     */
    public function setDatumErstzulassung(?string $datumErstzulassung = null): self
    {
        $this->DatumErstzulassung = $datumErstzulassung;

        return $this;
    }
}
