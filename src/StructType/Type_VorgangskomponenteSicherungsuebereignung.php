<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteSicherungsuebereignung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteSicherungsuebereignung extends AbstractStructBase
{
    /**
     * The vorgangskomponentenIDIdentifikation
     * @var string|null
     */
    public ?string $vorgangskomponentenIDIdentifikation = null;
    /**
     * The DatumVerfuegungsberechtigungVon
     * @var string|null
     */
    public ?string $DatumVerfuegungsberechtigungVon = null;
    /**
     * The DatumVerfuegungsberechtigungBis
     * @var string|null
     */
    public ?string $DatumVerfuegungsberechtigungBis = null;
    /**
     * Constructor method for Type.VorgangskomponenteSicherungsuebereignung
     * @uses Type_VorgangskomponenteSicherungsuebereignung::setVorgangskomponentenIDIdentifikation()
     * @uses Type_VorgangskomponenteSicherungsuebereignung::setDatumVerfuegungsberechtigungVon()
     * @uses Type_VorgangskomponenteSicherungsuebereignung::setDatumVerfuegungsberechtigungBis()
     * @param string $vorgangskomponentenIDIdentifikation
     * @param string $datumVerfuegungsberechtigungVon
     * @param string $datumVerfuegungsberechtigungBis
     */
    public function __construct(?string $vorgangskomponentenIDIdentifikation = null, ?string $datumVerfuegungsberechtigungVon = null, ?string $datumVerfuegungsberechtigungBis = null)
    {
        $this
            ->setVorgangskomponentenIDIdentifikation($vorgangskomponentenIDIdentifikation)
            ->setDatumVerfuegungsberechtigungVon($datumVerfuegungsberechtigungVon)
            ->setDatumVerfuegungsberechtigungBis($datumVerfuegungsberechtigungBis);
    }
    /**
     * Get vorgangskomponentenIDIdentifikation value
     * @return string|null
     */
    public function getVorgangskomponentenIDIdentifikation(): ?string
    {
        return $this->vorgangskomponentenIDIdentifikation;
    }
    /**
     * Set vorgangskomponentenIDIdentifikation value
     * @param string $vorgangskomponentenIDIdentifikation
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteSicherungsuebereignung
     */
    public function setVorgangskomponentenIDIdentifikation(?string $vorgangskomponentenIDIdentifikation = null): self
    {
        $this->vorgangskomponentenIDIdentifikation = $vorgangskomponentenIDIdentifikation;
        
        return $this;
    }
    /**
     * Get DatumVerfuegungsberechtigungVon value
     * @return string|null
     */
    public function getDatumVerfuegungsberechtigungVon(): ?string
    {
        return $this->DatumVerfuegungsberechtigungVon;
    }
    /**
     * Set DatumVerfuegungsberechtigungVon value
     * @param string $datumVerfuegungsberechtigungVon
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteSicherungsuebereignung
     */
    public function setDatumVerfuegungsberechtigungVon(?string $datumVerfuegungsberechtigungVon = null): self
    {
        $this->DatumVerfuegungsberechtigungVon = $datumVerfuegungsberechtigungVon;
        
        return $this;
    }
    /**
     * Get DatumVerfuegungsberechtigungBis value
     * @return string|null
     */
    public function getDatumVerfuegungsberechtigungBis(): ?string
    {
        return $this->DatumVerfuegungsberechtigungBis;
    }
    /**
     * Set DatumVerfuegungsberechtigungBis value
     * @param string $datumVerfuegungsberechtigungBis
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteSicherungsuebereignung
     */
    public function setDatumVerfuegungsberechtigungBis(?string $datumVerfuegungsberechtigungBis = null): self
    {
        $this->DatumVerfuegungsberechtigungBis = $datumVerfuegungsberechtigungBis;
        
        return $this;
    }
}
