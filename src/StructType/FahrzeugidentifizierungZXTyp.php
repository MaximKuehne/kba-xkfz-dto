<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FahrzeugidentifizierungZXTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FahrzeugidentifizierungZXTyp extends AbstractStructBase
{
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
     * The PruefzifferTypVarianteVersion
     * @var string|null
     */
    public ?string $PruefzifferTypVarianteVersion = null;
    /**
     * Constructor method for FahrzeugidentifizierungZXTyp
     * @uses FahrzeugidentifizierungZXTyp::setSchluesselHersteller()
     * @uses FahrzeugidentifizierungZXTyp::setTextHersteller()
     * @uses FahrzeugidentifizierungZXTyp::setFahrzeugidentifizierungsnummer()
     * @uses FahrzeugidentifizierungZXTyp::setPruefzifferFahrzeugidentifizierungsnummer()
     * @uses FahrzeugidentifizierungZXTyp::setSchluesselTyp()
     * @uses FahrzeugidentifizierungZXTyp::setSchluesselVarianteVersion()
     * @uses FahrzeugidentifizierungZXTyp::setPruefzifferTypVarianteVersion()
     * @param string $schluesselHersteller
     * @param string $textHersteller
     * @param string $fahrzeugidentifizierungsnummer
     * @param string $pruefzifferFahrzeugidentifizierungsnummer
     * @param string $schluesselTyp
     * @param string $schluesselVarianteVersion
     * @param string $pruefzifferTypVarianteVersion
     */
    public function __construct(?string $schluesselHersteller = null, ?string $textHersteller = null, ?string $fahrzeugidentifizierungsnummer = null, ?string $pruefzifferFahrzeugidentifizierungsnummer = null, ?string $schluesselTyp = null, ?string $schluesselVarianteVersion = null, ?string $pruefzifferTypVarianteVersion = null)
    {
        $this
            ->setSchluesselHersteller($schluesselHersteller)
            ->setTextHersteller($textHersteller)
            ->setFahrzeugidentifizierungsnummer($fahrzeugidentifizierungsnummer)
            ->setPruefzifferFahrzeugidentifizierungsnummer($pruefzifferFahrzeugidentifizierungsnummer)
            ->setSchluesselTyp($schluesselTyp)
            ->setSchluesselVarianteVersion($schluesselVarianteVersion)
            ->setPruefzifferTypVarianteVersion($pruefzifferTypVarianteVersion);
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
     * @return \THAG\XKfz\StructType\FahrzeugidentifizierungZXTyp
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
     * @return \THAG\XKfz\StructType\FahrzeugidentifizierungZXTyp
     */
    public function setTextHersteller(?string $textHersteller = null): self
    {
        $this->TextHersteller = $textHersteller;
        
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
     * @return \THAG\XKfz\StructType\FahrzeugidentifizierungZXTyp
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
     * @return \THAG\XKfz\StructType\FahrzeugidentifizierungZXTyp
     */
    public function setPruefzifferFahrzeugidentifizierungsnummer(?string $pruefzifferFahrzeugidentifizierungsnummer = null): self
    {
        $this->PruefzifferFahrzeugidentifizierungsnummer = $pruefzifferFahrzeugidentifizierungsnummer;
        
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
     * @return \THAG\XKfz\StructType\FahrzeugidentifizierungZXTyp
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
     * @return \THAG\XKfz\StructType\FahrzeugidentifizierungZXTyp
     */
    public function setSchluesselVarianteVersion(?string $schluesselVarianteVersion = null): self
    {
        $this->SchluesselVarianteVersion = $schluesselVarianteVersion;
        
        return $this;
    }
    /**
     * Get PruefzifferTypVarianteVersion value
     * @return string|null
     */
    public function getPruefzifferTypVarianteVersion(): ?string
    {
        return $this->PruefzifferTypVarianteVersion;
    }
    /**
     * Set PruefzifferTypVarianteVersion value
     * @param string $pruefzifferTypVarianteVersion
     * @return \THAG\XKfz\StructType\FahrzeugidentifizierungZXTyp
     */
    public function setPruefzifferTypVarianteVersion(?string $pruefzifferTypVarianteVersion = null): self
    {
        $this->PruefzifferTypVarianteVersion = $pruefzifferTypVarianteVersion;
        
        return $this;
    }
}
