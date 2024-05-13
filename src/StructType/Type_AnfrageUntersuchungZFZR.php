<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AnfrageUntersuchungZFZR StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AnfrageUntersuchungZFZR extends AbstractStructBase
{
    /**
     * The zusatzprotokollierung
     */
    public ?\THAG\XKfz\StructType\ZusatzprotokollierungAnlass0 $zusatzprotokollierung = null;

    /**
     * The schluesselnummerUeberwachungsinstitutionOderZDK
     */
    public ?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerUeberwachungsinstitutionOderZDK = null;

    /**
     * The KontrollnummerSP
     */
    public ?string $KontrollnummerSP = null;

    /**
     * The artDerUntersuchung
     */
    public ?\THAG\XKfz\StructType\Code_ArtDerUntersuchung $artDerUntersuchung = null;

    /**
     * The fahrzeugidentifizierungsnummer
     */
    public ?string $fahrzeugidentifizierungsnummer = null;

    /**
     * The kennzeichen
     */
    public ?string $kennzeichen = null;

    /**
     * The Berichtsnummer
     */
    public ?string $Berichtsnummer = null;

    /**
     * Constructor method for Type.AnfrageUntersuchungZFZR
     *
     * @uses Type_AnfrageUntersuchungZFZR::setZusatzprotokollierung()
     * @uses Type_AnfrageUntersuchungZFZR::setSchluesselnummerUeberwachungsinstitutionOderZDK()
     * @uses Type_AnfrageUntersuchungZFZR::setKontrollnummerSP()
     * @uses Type_AnfrageUntersuchungZFZR::setArtDerUntersuchung()
     * @uses Type_AnfrageUntersuchungZFZR::setFahrzeugidentifizierungsnummer()
     * @uses Type_AnfrageUntersuchungZFZR::setKennzeichen()
     * @uses Type_AnfrageUntersuchungZFZR::setBerichtsnummer()
     */
    public function __construct(?\THAG\XKfz\StructType\ZusatzprotokollierungAnlass0 $zusatzprotokollierung = null, ?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerUeberwachungsinstitutionOderZDK = null, ?string $kontrollnummerSP = null, ?\THAG\XKfz\StructType\Code_ArtDerUntersuchung $artDerUntersuchung = null, ?string $fahrzeugidentifizierungsnummer = null, ?string $kennzeichen = null, ?string $berichtsnummer = null)
    {
        $this
            ->setZusatzprotokollierung($zusatzprotokollierung)
            ->setSchluesselnummerUeberwachungsinstitutionOderZDK($schluesselnummerUeberwachungsinstitutionOderZDK)
            ->setKontrollnummerSP($kontrollnummerSP)
            ->setArtDerUntersuchung($artDerUntersuchung)
            ->setFahrzeugidentifizierungsnummer($fahrzeugidentifizierungsnummer)
            ->setKennzeichen($kennzeichen)
            ->setBerichtsnummer($berichtsnummer);
    }

    /**
     * Get zusatzprotokollierung value
     */
    public function getZusatzprotokollierung(): ?\THAG\XKfz\StructType\ZusatzprotokollierungAnlass0
    {
        return $this->zusatzprotokollierung;
    }

    /**
     * Set zusatzprotokollierung value
     */
    public function setZusatzprotokollierung(?\THAG\XKfz\StructType\ZusatzprotokollierungAnlass0 $zusatzprotokollierung = null): self
    {
        $this->zusatzprotokollierung = $zusatzprotokollierung;

        return $this;
    }

    /**
     * Get schluesselnummerUeberwachungsinstitutionOderZDK value
     */
    public function getSchluesselnummerUeberwachungsinstitutionOderZDK(): ?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK
    {
        return $this->schluesselnummerUeberwachungsinstitutionOderZDK;
    }

    /**
     * Set schluesselnummerUeberwachungsinstitutionOderZDK value
     */
    public function setSchluesselnummerUeberwachungsinstitutionOderZDK(?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerUeberwachungsinstitutionOderZDK = null): self
    {
        $this->schluesselnummerUeberwachungsinstitutionOderZDK = $schluesselnummerUeberwachungsinstitutionOderZDK;

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
     * Get fahrzeugidentifizierungsnummer value
     */
    public function getFahrzeugidentifizierungsnummer(): ?string
    {
        return $this->fahrzeugidentifizierungsnummer;
    }

    /**
     * Set fahrzeugidentifizierungsnummer value
     */
    public function setFahrzeugidentifizierungsnummer(?string $fahrzeugidentifizierungsnummer = null): self
    {
        $this->fahrzeugidentifizierungsnummer = $fahrzeugidentifizierungsnummer;

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
}
