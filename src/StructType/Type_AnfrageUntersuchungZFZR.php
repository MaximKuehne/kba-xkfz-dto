<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AnfrageUntersuchungZFZR StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AnfrageUntersuchungZFZR extends AbstractStructBase
{
    /**
     * The zusatzprotokollierung
     * @var \THAG\XKfz\StructType\ZusatzprotokollierungAnlass0|null
     */
    public ?\THAG\XKfz\StructType\ZusatzprotokollierungAnlass0 $zusatzprotokollierung = null;
    /**
     * The schluesselnummerUeberwachungsinstitutionOderZDK
     * @var \THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK|null
     */
    public ?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerUeberwachungsinstitutionOderZDK = null;
    /**
     * The KontrollnummerSP
     * @var string|null
     */
    public ?string $KontrollnummerSP = null;
    /**
     * The artDerUntersuchung
     * @var \THAG\XKfz\StructType\Code_ArtDerUntersuchung|null
     */
    public ?\THAG\XKfz\StructType\Code_ArtDerUntersuchung $artDerUntersuchung = null;
    /**
     * The fahrzeugidentifizierungsnummer
     * @var string|null
     */
    public ?string $fahrzeugidentifizierungsnummer = null;
    /**
     * The kennzeichen
     * @var string|null
     */
    public ?string $kennzeichen = null;
    /**
     * The Berichtsnummer
     * @var string|null
     */
    public ?string $Berichtsnummer = null;
    /**
     * Constructor method for Type.AnfrageUntersuchungZFZR
     * @uses Type_AnfrageUntersuchungZFZR::setZusatzprotokollierung()
     * @uses Type_AnfrageUntersuchungZFZR::setSchluesselnummerUeberwachungsinstitutionOderZDK()
     * @uses Type_AnfrageUntersuchungZFZR::setKontrollnummerSP()
     * @uses Type_AnfrageUntersuchungZFZR::setArtDerUntersuchung()
     * @uses Type_AnfrageUntersuchungZFZR::setFahrzeugidentifizierungsnummer()
     * @uses Type_AnfrageUntersuchungZFZR::setKennzeichen()
     * @uses Type_AnfrageUntersuchungZFZR::setBerichtsnummer()
     * @param \THAG\XKfz\StructType\ZusatzprotokollierungAnlass0 $zusatzprotokollierung
     * @param \THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerUeberwachungsinstitutionOderZDK
     * @param string $kontrollnummerSP
     * @param \THAG\XKfz\StructType\Code_ArtDerUntersuchung $artDerUntersuchung
     * @param string $fahrzeugidentifizierungsnummer
     * @param string $kennzeichen
     * @param string $berichtsnummer
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
     * @return \THAG\XKfz\StructType\ZusatzprotokollierungAnlass0|null
     */
    public function getZusatzprotokollierung(): ?\THAG\XKfz\StructType\ZusatzprotokollierungAnlass0
    {
        return $this->zusatzprotokollierung;
    }
    /**
     * Set zusatzprotokollierung value
     * @param \THAG\XKfz\StructType\ZusatzprotokollierungAnlass0 $zusatzprotokollierung
     * @return \THAG\XKfz\StructType\Type_AnfrageUntersuchungZFZR
     */
    public function setZusatzprotokollierung(?\THAG\XKfz\StructType\ZusatzprotokollierungAnlass0 $zusatzprotokollierung = null): self
    {
        $this->zusatzprotokollierung = $zusatzprotokollierung;
        
        return $this;
    }
    /**
     * Get schluesselnummerUeberwachungsinstitutionOderZDK value
     * @return \THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK|null
     */
    public function getSchluesselnummerUeberwachungsinstitutionOderZDK(): ?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK
    {
        return $this->schluesselnummerUeberwachungsinstitutionOderZDK;
    }
    /**
     * Set schluesselnummerUeberwachungsinstitutionOderZDK value
     * @param \THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerUeberwachungsinstitutionOderZDK
     * @return \THAG\XKfz\StructType\Type_AnfrageUntersuchungZFZR
     */
    public function setSchluesselnummerUeberwachungsinstitutionOderZDK(?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerUeberwachungsinstitutionOderZDK = null): self
    {
        $this->schluesselnummerUeberwachungsinstitutionOderZDK = $schluesselnummerUeberwachungsinstitutionOderZDK;
        
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
     * @return \THAG\XKfz\StructType\Type_AnfrageUntersuchungZFZR
     */
    public function setKontrollnummerSP(?string $kontrollnummerSP = null): self
    {
        $this->KontrollnummerSP = $kontrollnummerSP;
        
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
     * @return \THAG\XKfz\StructType\Type_AnfrageUntersuchungZFZR
     */
    public function setArtDerUntersuchung(?\THAG\XKfz\StructType\Code_ArtDerUntersuchung $artDerUntersuchung = null): self
    {
        $this->artDerUntersuchung = $artDerUntersuchung;
        
        return $this;
    }
    /**
     * Get fahrzeugidentifizierungsnummer value
     * @return string|null
     */
    public function getFahrzeugidentifizierungsnummer(): ?string
    {
        return $this->fahrzeugidentifizierungsnummer;
    }
    /**
     * Set fahrzeugidentifizierungsnummer value
     * @param string $fahrzeugidentifizierungsnummer
     * @return \THAG\XKfz\StructType\Type_AnfrageUntersuchungZFZR
     */
    public function setFahrzeugidentifizierungsnummer(?string $fahrzeugidentifizierungsnummer = null): self
    {
        $this->fahrzeugidentifizierungsnummer = $fahrzeugidentifizierungsnummer;
        
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
     * @return \THAG\XKfz\StructType\Type_AnfrageUntersuchungZFZR
     */
    public function setKennzeichen(?string $kennzeichen = null): self
    {
        $this->kennzeichen = $kennzeichen;
        
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
     * @return \THAG\XKfz\StructType\Type_AnfrageUntersuchungZFZR
     */
    public function setBerichtsnummer(?string $berichtsnummer = null): self
    {
        $this->Berichtsnummer = $berichtsnummer;
        
        return $this;
    }
}
