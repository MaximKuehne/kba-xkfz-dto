<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VbStatusPruefauftrag StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VbStatusPruefauftrag extends AbstractStructBase
{
    /**
     * The Versicherungsbestaetigungsnummer
     */
    public ?string $Versicherungsbestaetigungsnummer = null;

    /**
     * The VbInVerwendungSeit
     */
    public ?string $VbInVerwendungSeit = null;

    /**
     * Constructor method for VbStatusPruefauftrag
     *
     * @uses VbStatusPruefauftrag::setVersicherungsbestaetigungsnummer()
     * @uses VbStatusPruefauftrag::setVbInVerwendungSeit()
     */
    public function __construct(?string $versicherungsbestaetigungsnummer = null, ?string $vbInVerwendungSeit = null)
    {
        $this
            ->setVersicherungsbestaetigungsnummer($versicherungsbestaetigungsnummer)
            ->setVbInVerwendungSeit($vbInVerwendungSeit);
    }

    /**
     * Get Versicherungsbestaetigungsnummer value
     */
    public function getVersicherungsbestaetigungsnummer(): ?string
    {
        return $this->Versicherungsbestaetigungsnummer;
    }

    /**
     * Set Versicherungsbestaetigungsnummer value
     */
    public function setVersicherungsbestaetigungsnummer(?string $versicherungsbestaetigungsnummer = null): self
    {
        $this->Versicherungsbestaetigungsnummer = $versicherungsbestaetigungsnummer;

        return $this;
    }

    /**
     * Get VbInVerwendungSeit value
     */
    public function getVbInVerwendungSeit(): ?string
    {
        return $this->VbInVerwendungSeit;
    }

    /**
     * Set VbInVerwendungSeit value
     */
    public function setVbInVerwendungSeit(?string $vbInVerwendungSeit = null): self
    {
        $this->VbInVerwendungSeit = $vbInVerwendungSeit;

        return $this;
    }
}
