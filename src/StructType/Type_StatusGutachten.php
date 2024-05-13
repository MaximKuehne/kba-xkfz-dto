<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.StatusGutachten StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_StatusGutachten extends AbstractStructBase
{
    /**
     * The gutachtennummer
     */
    public ?string $gutachtennummer = null;

    /**
     * The Fahrzeugidentifizierungsnummer
     */
    public ?string $Fahrzeugidentifizierungsnummer = null;

    /**
     * The status
     */
    public ?\THAG\XKfz\StructType\Code_StatusGutachten $status = null;

    /**
     * Constructor method for Type.StatusGutachten
     *
     * @uses Type_StatusGutachten::setGutachtennummer()
     * @uses Type_StatusGutachten::setFahrzeugidentifizierungsnummer()
     * @uses Type_StatusGutachten::setStatus()
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
     */
    public function getGutachtennummer(): ?string
    {
        return $this->gutachtennummer;
    }

    /**
     * Set gutachtennummer value
     */
    public function setGutachtennummer(?string $gutachtennummer = null): self
    {
        $this->gutachtennummer = $gutachtennummer;

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
     * Get status value
     */
    public function getStatus(): ?\THAG\XKfz\StructType\Code_StatusGutachten
    {
        return $this->status;
    }

    /**
     * Set status value
     */
    public function setStatus(?\THAG\XKfz\StructType\Code_StatusGutachten $status = null): self
    {
        $this->status = $status;

        return $this;
    }
}
