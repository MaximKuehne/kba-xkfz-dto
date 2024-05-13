<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.UntersuchungUmweltvertraeglichkeit StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_UntersuchungUmweltvertraeglichkeit extends AbstractStructBase
{
    /**
     * The werkstattUntersuchungUmweltvertraeglichkeit
     */
    public ?string $werkstattUntersuchungUmweltvertraeglichkeit = null;

    /**
     * The datumUntersuchungUmweltvertraeglichkeit
     */
    public ?string $datumUntersuchungUmweltvertraeglichkeit = null;

    /**
     * Constructor method for Type.UntersuchungUmweltvertraeglichkeit
     *
     * @uses Type_UntersuchungUmweltvertraeglichkeit::setWerkstattUntersuchungUmweltvertraeglichkeit()
     * @uses Type_UntersuchungUmweltvertraeglichkeit::setDatumUntersuchungUmweltvertraeglichkeit()
     */
    public function __construct(?string $werkstattUntersuchungUmweltvertraeglichkeit = null, ?string $datumUntersuchungUmweltvertraeglichkeit = null)
    {
        $this
            ->setWerkstattUntersuchungUmweltvertraeglichkeit($werkstattUntersuchungUmweltvertraeglichkeit)
            ->setDatumUntersuchungUmweltvertraeglichkeit($datumUntersuchungUmweltvertraeglichkeit);
    }

    /**
     * Get werkstattUntersuchungUmweltvertraeglichkeit value
     */
    public function getWerkstattUntersuchungUmweltvertraeglichkeit(): ?string
    {
        return $this->werkstattUntersuchungUmweltvertraeglichkeit;
    }

    /**
     * Set werkstattUntersuchungUmweltvertraeglichkeit value
     */
    public function setWerkstattUntersuchungUmweltvertraeglichkeit(?string $werkstattUntersuchungUmweltvertraeglichkeit = null): self
    {
        $this->werkstattUntersuchungUmweltvertraeglichkeit = $werkstattUntersuchungUmweltvertraeglichkeit;

        return $this;
    }

    /**
     * Get datumUntersuchungUmweltvertraeglichkeit value
     */
    public function getDatumUntersuchungUmweltvertraeglichkeit(): ?string
    {
        return $this->datumUntersuchungUmweltvertraeglichkeit;
    }

    /**
     * Set datumUntersuchungUmweltvertraeglichkeit value
     */
    public function setDatumUntersuchungUmweltvertraeglichkeit(?string $datumUntersuchungUmweltvertraeglichkeit = null): self
    {
        $this->datumUntersuchungUmweltvertraeglichkeit = $datumUntersuchungUmweltvertraeglichkeit;

        return $this;
    }
}
