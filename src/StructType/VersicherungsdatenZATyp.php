<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VersicherungsdatenZATyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VersicherungsdatenZATyp extends AbstractStructBase
{
    /**
     * The DatumVersicherungsbeginn
     * @var string|null
     */
    public ?string $DatumVersicherungsbeginn = null;
    /**
     * The Versicherungsunternehmensnummer
     * @var string|null
     */
    public ?string $Versicherungsunternehmensnummer = null;
    /**
     * The Versicherungsscheinnummer
     * @var string|null
     */
    public ?string $Versicherungsscheinnummer = null;
    /**
     * The Versicherungsbestaetigungsnummer
     * @var string|null
     */
    public ?string $Versicherungsbestaetigungsnummer = null;
    /**
     * The DatumEndeVersicherungsschutz
     * @var string|null
     */
    public ?string $DatumEndeVersicherungsschutz = null;
    /**
     * Constructor method for VersicherungsdatenZATyp
     * @uses VersicherungsdatenZATyp::setDatumVersicherungsbeginn()
     * @uses VersicherungsdatenZATyp::setVersicherungsunternehmensnummer()
     * @uses VersicherungsdatenZATyp::setVersicherungsscheinnummer()
     * @uses VersicherungsdatenZATyp::setVersicherungsbestaetigungsnummer()
     * @uses VersicherungsdatenZATyp::setDatumEndeVersicherungsschutz()
     * @param string $datumVersicherungsbeginn
     * @param string $versicherungsunternehmensnummer
     * @param string $versicherungsscheinnummer
     * @param string $versicherungsbestaetigungsnummer
     * @param string $datumEndeVersicherungsschutz
     */
    public function __construct(?string $datumVersicherungsbeginn = null, ?string $versicherungsunternehmensnummer = null, ?string $versicherungsscheinnummer = null, ?string $versicherungsbestaetigungsnummer = null, ?string $datumEndeVersicherungsschutz = null)
    {
        $this
            ->setDatumVersicherungsbeginn($datumVersicherungsbeginn)
            ->setVersicherungsunternehmensnummer($versicherungsunternehmensnummer)
            ->setVersicherungsscheinnummer($versicherungsscheinnummer)
            ->setVersicherungsbestaetigungsnummer($versicherungsbestaetigungsnummer)
            ->setDatumEndeVersicherungsschutz($datumEndeVersicherungsschutz);
    }
    /**
     * Get DatumVersicherungsbeginn value
     * @return string|null
     */
    public function getDatumVersicherungsbeginn(): ?string
    {
        return $this->DatumVersicherungsbeginn;
    }
    /**
     * Set DatumVersicherungsbeginn value
     * @param string $datumVersicherungsbeginn
     * @return \THAG\XKfz\StructType\VersicherungsdatenZATyp
     */
    public function setDatumVersicherungsbeginn(?string $datumVersicherungsbeginn = null): self
    {
        $this->DatumVersicherungsbeginn = $datumVersicherungsbeginn;
        
        return $this;
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
     * @return \THAG\XKfz\StructType\VersicherungsdatenZATyp
     */
    public function setVersicherungsunternehmensnummer(?string $versicherungsunternehmensnummer = null): self
    {
        $this->Versicherungsunternehmensnummer = $versicherungsunternehmensnummer;
        
        return $this;
    }
    /**
     * Get Versicherungsscheinnummer value
     * @return string|null
     */
    public function getVersicherungsscheinnummer(): ?string
    {
        return $this->Versicherungsscheinnummer;
    }
    /**
     * Set Versicherungsscheinnummer value
     * @param string $versicherungsscheinnummer
     * @return \THAG\XKfz\StructType\VersicherungsdatenZATyp
     */
    public function setVersicherungsscheinnummer(?string $versicherungsscheinnummer = null): self
    {
        $this->Versicherungsscheinnummer = $versicherungsscheinnummer;
        
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
     * @return \THAG\XKfz\StructType\VersicherungsdatenZATyp
     */
    public function setVersicherungsbestaetigungsnummer(?string $versicherungsbestaetigungsnummer = null): self
    {
        $this->Versicherungsbestaetigungsnummer = $versicherungsbestaetigungsnummer;
        
        return $this;
    }
    /**
     * Get DatumEndeVersicherungsschutz value
     * @return string|null
     */
    public function getDatumEndeVersicherungsschutz(): ?string
    {
        return $this->DatumEndeVersicherungsschutz;
    }
    /**
     * Set DatumEndeVersicherungsschutz value
     * @param string $datumEndeVersicherungsschutz
     * @return \THAG\XKfz\StructType\VersicherungsdatenZATyp
     */
    public function setDatumEndeVersicherungsschutz(?string $datumEndeVersicherungsschutz = null): self
    {
        $this->DatumEndeVersicherungsschutz = $datumEndeVersicherungsschutz;
        
        return $this;
    }
}
