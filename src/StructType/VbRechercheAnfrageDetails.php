<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VbRechercheAnfrageDetails StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VbRechercheAnfrageDetails extends AbstractStructBase
{
    /**
     * The Versicherungsunternehmensnummer
     * @var string|null
     */
    public ?string $Versicherungsunternehmensnummer = null;
    /**
     * The Versicherungsbestaetigungsnummer
     * @var string|null
     */
    public ?string $Versicherungsbestaetigungsnummer = null;
    /**
     * The VbVerarbeitungshistorieVon
     * @var string|null
     */
    public ?string $VbVerarbeitungshistorieVon = null;
    /**
     * The VbVerarbeitungshistorieBis
     * @var string|null
     */
    public ?string $VbVerarbeitungshistorieBis = null;
    /**
     * Constructor method for VbRechercheAnfrageDetails
     * @uses VbRechercheAnfrageDetails::setVersicherungsunternehmensnummer()
     * @uses VbRechercheAnfrageDetails::setVersicherungsbestaetigungsnummer()
     * @uses VbRechercheAnfrageDetails::setVbVerarbeitungshistorieVon()
     * @uses VbRechercheAnfrageDetails::setVbVerarbeitungshistorieBis()
     * @param string $versicherungsunternehmensnummer
     * @param string $versicherungsbestaetigungsnummer
     * @param string $vbVerarbeitungshistorieVon
     * @param string $vbVerarbeitungshistorieBis
     */
    public function __construct(?string $versicherungsunternehmensnummer = null, ?string $versicherungsbestaetigungsnummer = null, ?string $vbVerarbeitungshistorieVon = null, ?string $vbVerarbeitungshistorieBis = null)
    {
        $this
            ->setVersicherungsunternehmensnummer($versicherungsunternehmensnummer)
            ->setVersicherungsbestaetigungsnummer($versicherungsbestaetigungsnummer)
            ->setVbVerarbeitungshistorieVon($vbVerarbeitungshistorieVon)
            ->setVbVerarbeitungshistorieBis($vbVerarbeitungshistorieBis);
    }
    /**
     * Get Versicherungsunternehmensnummer value
     * @return string|null
     */
    public function getVersicherungsunternehmensnummer(): ?string
    {
        return $this->Versicherungsunternehmensnummer;
    }
    /**
     * Set Versicherungsunternehmensnummer value
     * @param string $versicherungsunternehmensnummer
     * @return \THAG\XKfz\StructType\VbRechercheAnfrageDetails
     */
    public function setVersicherungsunternehmensnummer(?string $versicherungsunternehmensnummer = null): self
    {
        $this->Versicherungsunternehmensnummer = $versicherungsunternehmensnummer;
        
        return $this;
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
     * @return \THAG\XKfz\StructType\VbRechercheAnfrageDetails
     */
    public function setVersicherungsbestaetigungsnummer(?string $versicherungsbestaetigungsnummer = null): self
    {
        $this->Versicherungsbestaetigungsnummer = $versicherungsbestaetigungsnummer;
        
        return $this;
    }
    /**
     * Get VbVerarbeitungshistorieVon value
     * @return string|null
     */
    public function getVbVerarbeitungshistorieVon(): ?string
    {
        return $this->VbVerarbeitungshistorieVon;
    }
    /**
     * Set VbVerarbeitungshistorieVon value
     * @param string $vbVerarbeitungshistorieVon
     * @return \THAG\XKfz\StructType\VbRechercheAnfrageDetails
     */
    public function setVbVerarbeitungshistorieVon(?string $vbVerarbeitungshistorieVon = null): self
    {
        $this->VbVerarbeitungshistorieVon = $vbVerarbeitungshistorieVon;
        
        return $this;
    }
    /**
     * Get VbVerarbeitungshistorieBis value
     * @return string|null
     */
    public function getVbVerarbeitungshistorieBis(): ?string
    {
        return $this->VbVerarbeitungshistorieBis;
    }
    /**
     * Set VbVerarbeitungshistorieBis value
     * @param string $vbVerarbeitungshistorieBis
     * @return \THAG\XKfz\StructType\VbRechercheAnfrageDetails
     */
    public function setVbVerarbeitungshistorieBis(?string $vbVerarbeitungshistorieBis = null): self
    {
        $this->VbVerarbeitungshistorieBis = $vbVerarbeitungshistorieBis;
        
        return $this;
    }
}
