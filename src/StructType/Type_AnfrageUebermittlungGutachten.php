<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AnfrageUebermittlungGutachten StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AnfrageUebermittlungGutachten extends AbstractStructBase
{
    /**
     * The gutachtennummer
     * @var string|null
     */
    public ?string $gutachtennummer = null;
    /**
     * The abrufendeBehoerde
     * @var \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde|null
     */
    public ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $abrufendeBehoerde = null;
    /**
     * The Fahrzeugidentifizierungsnummer
     * @var string|null
     */
    public ?string $Fahrzeugidentifizierungsnummer = null;
    /**
     * The merkmalPDFBereitstellen
     * @var bool|null
     */
    public ?bool $merkmalPDFBereitstellen = null;
    /**
     * Constructor method for Type.AnfrageUebermittlungGutachten
     * @uses Type_AnfrageUebermittlungGutachten::setGutachtennummer()
     * @uses Type_AnfrageUebermittlungGutachten::setAbrufendeBehoerde()
     * @uses Type_AnfrageUebermittlungGutachten::setFahrzeugidentifizierungsnummer()
     * @uses Type_AnfrageUebermittlungGutachten::setMerkmalPDFBereitstellen()
     * @param string $gutachtennummer
     * @param \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $abrufendeBehoerde
     * @param string $fahrzeugidentifizierungsnummer
     * @param bool $merkmalPDFBereitstellen
     */
    public function __construct(?string $gutachtennummer = null, ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $abrufendeBehoerde = null, ?string $fahrzeugidentifizierungsnummer = null, ?bool $merkmalPDFBereitstellen = null)
    {
        $this
            ->setGutachtennummer($gutachtennummer)
            ->setAbrufendeBehoerde($abrufendeBehoerde)
            ->setFahrzeugidentifizierungsnummer($fahrzeugidentifizierungsnummer)
            ->setMerkmalPDFBereitstellen($merkmalPDFBereitstellen);
    }
    /**
     * Get gutachtennummer value
     * @return string|null
     */
    public function getGutachtennummer(): ?string
    {
        return $this->gutachtennummer;
    }
    /**
     * Set gutachtennummer value
     * @param string $gutachtennummer
     * @return \THAG\XKfz\StructType\Type_AnfrageUebermittlungGutachten
     */
    public function setGutachtennummer(?string $gutachtennummer = null): self
    {
        $this->gutachtennummer = $gutachtennummer;
        
        return $this;
    }
    /**
     * Get abrufendeBehoerde value
     * @return \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde|null
     */
    public function getAbrufendeBehoerde(): ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde
    {
        return $this->abrufendeBehoerde;
    }
    /**
     * Set abrufendeBehoerde value
     * @param \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $abrufendeBehoerde
     * @return \THAG\XKfz\StructType\Type_AnfrageUebermittlungGutachten
     */
    public function setAbrufendeBehoerde(?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $abrufendeBehoerde = null): self
    {
        $this->abrufendeBehoerde = $abrufendeBehoerde;
        
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
     * @return \THAG\XKfz\StructType\Type_AnfrageUebermittlungGutachten
     */
    public function setFahrzeugidentifizierungsnummer(?string $fahrzeugidentifizierungsnummer = null): self
    {
        $this->Fahrzeugidentifizierungsnummer = $fahrzeugidentifizierungsnummer;
        
        return $this;
    }
    /**
     * Get merkmalPDFBereitstellen value
     * @return bool|null
     */
    public function getMerkmalPDFBereitstellen(): ?bool
    {
        return $this->merkmalPDFBereitstellen;
    }
    /**
     * Set merkmalPDFBereitstellen value
     * @param bool $merkmalPDFBereitstellen
     * @return \THAG\XKfz\StructType\Type_AnfrageUebermittlungGutachten
     */
    public function setMerkmalPDFBereitstellen(?bool $merkmalPDFBereitstellen = null): self
    {
        $this->merkmalPDFBereitstellen = $merkmalPDFBereitstellen;
        
        return $this;
    }
}
