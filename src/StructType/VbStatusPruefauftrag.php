<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VbStatusPruefauftrag StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VbStatusPruefauftrag extends AbstractStructBase
{
    /**
     * The Versicherungsbestaetigungsnummer
     * @var string|null
     */
    public ?string $Versicherungsbestaetigungsnummer = null;
    /**
     * The VbInVerwendungSeit
     * @var string|null
     */
    public ?string $VbInVerwendungSeit = null;
    /**
     * Constructor method for VbStatusPruefauftrag
     * @uses VbStatusPruefauftrag::setVersicherungsbestaetigungsnummer()
     * @uses VbStatusPruefauftrag::setVbInVerwendungSeit()
     * @param string $versicherungsbestaetigungsnummer
     * @param string $vbInVerwendungSeit
     */
    public function __construct(?string $versicherungsbestaetigungsnummer = null, ?string $vbInVerwendungSeit = null)
    {
        $this
            ->setVersicherungsbestaetigungsnummer($versicherungsbestaetigungsnummer)
            ->setVbInVerwendungSeit($vbInVerwendungSeit);
    }
    /**
     * Get Versicherungsbestaetigungsnummer value
     * @return string|null
     */
    public function getVersicherungsbestaetigungsnummer(): ?string
    {
        return $this->Versicherungsbestaetigungsnummer;
    }
    /**
     * Set Versicherungsbestaetigungsnummer value
     * @param string $versicherungsbestaetigungsnummer
     * @return \THAG\XKfz\StructType\VbStatusPruefauftrag
     */
    public function setVersicherungsbestaetigungsnummer(?string $versicherungsbestaetigungsnummer = null): self
    {
        $this->Versicherungsbestaetigungsnummer = $versicherungsbestaetigungsnummer;
        
        return $this;
    }
    /**
     * Get VbInVerwendungSeit value
     * @return string|null
     */
    public function getVbInVerwendungSeit(): ?string
    {
        return $this->VbInVerwendungSeit;
    }
    /**
     * Set VbInVerwendungSeit value
     * @param string $vbInVerwendungSeit
     * @return \THAG\XKfz\StructType\VbStatusPruefauftrag
     */
    public function setVbInVerwendungSeit(?string $vbInVerwendungSeit = null): self
    {
        $this->VbInVerwendungSeit = $vbInVerwendungSeit;
        
        return $this;
    }
}
