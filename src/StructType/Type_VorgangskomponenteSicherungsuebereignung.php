<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteSicherungsuebereignung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteSicherungsuebereignung extends AbstractStructBase
{
    /**
     * The vorgangskomponentenIDIdentifikation
     */
    public ?string $vorgangskomponentenIDIdentifikation = null;

    /**
     * The DatumVerfuegungsberechtigungVon
     */
    public ?string $DatumVerfuegungsberechtigungVon = null;

    /**
     * The DatumVerfuegungsberechtigungBis
     */
    public ?string $DatumVerfuegungsberechtigungBis = null;

    /**
     * Constructor method for Type.VorgangskomponenteSicherungsuebereignung
     *
     * @uses Type_VorgangskomponenteSicherungsuebereignung::setVorgangskomponentenIDIdentifikation()
     * @uses Type_VorgangskomponenteSicherungsuebereignung::setDatumVerfuegungsberechtigungVon()
     * @uses Type_VorgangskomponenteSicherungsuebereignung::setDatumVerfuegungsberechtigungBis()
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
     */
    public function getVorgangskomponentenIDIdentifikation(): ?string
    {
        return $this->vorgangskomponentenIDIdentifikation;
    }

    /**
     * Set vorgangskomponentenIDIdentifikation value
     */
    public function setVorgangskomponentenIDIdentifikation(?string $vorgangskomponentenIDIdentifikation = null): self
    {
        $this->vorgangskomponentenIDIdentifikation = $vorgangskomponentenIDIdentifikation;

        return $this;
    }

    /**
     * Get DatumVerfuegungsberechtigungVon value
     */
    public function getDatumVerfuegungsberechtigungVon(): ?string
    {
        return $this->DatumVerfuegungsberechtigungVon;
    }

    /**
     * Set DatumVerfuegungsberechtigungVon value
     */
    public function setDatumVerfuegungsberechtigungVon(?string $datumVerfuegungsberechtigungVon = null): self
    {
        $this->DatumVerfuegungsberechtigungVon = $datumVerfuegungsberechtigungVon;

        return $this;
    }

    /**
     * Get DatumVerfuegungsberechtigungBis value
     */
    public function getDatumVerfuegungsberechtigungBis(): ?string
    {
        return $this->DatumVerfuegungsberechtigungBis;
    }

    /**
     * Set DatumVerfuegungsberechtigungBis value
     */
    public function setDatumVerfuegungsberechtigungBis(?string $datumVerfuegungsberechtigungBis = null): self
    {
        $this->DatumVerfuegungsberechtigungBis = $datumVerfuegungsberechtigungBis;

        return $this;
    }
}
