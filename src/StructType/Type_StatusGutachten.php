<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.StatusGutachten StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_StatusGutachten extends AbstractStructBase
{
    /**
     * The gutachtennummer
     * @var string|null
     */
    public ?string $gutachtennummer = null;
    /**
     * The Fahrzeugidentifizierungsnummer
     * @var string|null
     */
    public ?string $Fahrzeugidentifizierungsnummer = null;
    /**
     * The status
     * @var \THAG\XKfz\StructType\Code_StatusGutachten|null
     */
    public ?\THAG\XKfz\StructType\Code_StatusGutachten $status = null;
    /**
     * Constructor method for Type.StatusGutachten
     * @uses Type_StatusGutachten::setGutachtennummer()
     * @uses Type_StatusGutachten::setFahrzeugidentifizierungsnummer()
     * @uses Type_StatusGutachten::setStatus()
     * @param string $gutachtennummer
     * @param string $fahrzeugidentifizierungsnummer
     * @param \THAG\XKfz\StructType\Code_StatusGutachten $status
     */
    public function __construct(?string $gutachtennummer = null, ?string $fahrzeugidentifizierungsnummer = null, ?\THAG\XKfz\StructType\Code_StatusGutachten $status = null)
    {
        $this
            ->setGutachtennummer($gutachtennummer)
            ->setFahrzeugidentifizierungsnummer($fahrzeugidentifizierungsnummer)
            ->setStatus($status);
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
     * @return \THAG\XKfz\StructType\Type_StatusGutachten
     */
    public function setGutachtennummer(?string $gutachtennummer = null): self
    {
        $this->gutachtennummer = $gutachtennummer;
        
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
     * @return \THAG\XKfz\StructType\Type_StatusGutachten
     */
    public function setFahrzeugidentifizierungsnummer(?string $fahrzeugidentifizierungsnummer = null): self
    {
        $this->Fahrzeugidentifizierungsnummer = $fahrzeugidentifizierungsnummer;
        
        return $this;
    }
    /**
     * Get status value
     * @return \THAG\XKfz\StructType\Code_StatusGutachten|null
     */
    public function getStatus(): ?\THAG\XKfz\StructType\Code_StatusGutachten
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param \THAG\XKfz\StructType\Code_StatusGutachten $status
     * @return \THAG\XKfz\StructType\Type_StatusGutachten
     */
    public function setStatus(?\THAG\XKfz\StructType\Code_StatusGutachten $status = null): self
    {
        $this->status = $status;
        
        return $this;
    }
}
