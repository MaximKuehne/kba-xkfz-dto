<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Fahrtenbuchauflage StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Fahrtenbuchauflage extends AbstractStructBase
{
    /**
     * The AnordnendeStelleFahrtenbuch
     */
    public ?string $AnordnendeStelleFahrtenbuch = null;

    /**
     * The DatumFahrtenbuchBis
     */
    public ?string $DatumFahrtenbuchBis = null;

    /**
     * The DatumAnordnungFahrtenbuch
     */
    public ?string $DatumAnordnungFahrtenbuch = null;

    /**
     * The DatumFahrtenbuchVon
     */
    public ?string $DatumFahrtenbuchVon = null;

    /**
     * Constructor method for Fahrtenbuchauflage
     *
     * @uses Fahrtenbuchauflage::setAnordnendeStelleFahrtenbuch()
     * @uses Fahrtenbuchauflage::setDatumFahrtenbuchBis()
     * @uses Fahrtenbuchauflage::setDatumAnordnungFahrtenbuch()
     * @uses Fahrtenbuchauflage::setDatumFahrtenbuchVon()
     */
    public function __construct(?string $anordnendeStelleFahrtenbuch = null, ?string $datumFahrtenbuchBis = null, ?string $datumAnordnungFahrtenbuch = null, ?string $datumFahrtenbuchVon = null)
    {
        $this
            ->setAnordnendeStelleFahrtenbuch($anordnendeStelleFahrtenbuch)
            ->setDatumFahrtenbuchBis($datumFahrtenbuchBis)
            ->setDatumAnordnungFahrtenbuch($datumAnordnungFahrtenbuch)
            ->setDatumFahrtenbuchVon($datumFahrtenbuchVon);
    }

    /**
     * Get AnordnendeStelleFahrtenbuch value
     */
    public function getAnordnendeStelleFahrtenbuch(): ?string
    {
        return $this->AnordnendeStelleFahrtenbuch;
    }

    /**
     * Set AnordnendeStelleFahrtenbuch value
     */
    public function setAnordnendeStelleFahrtenbuch(?string $anordnendeStelleFahrtenbuch = null): self
    {
        $this->AnordnendeStelleFahrtenbuch = $anordnendeStelleFahrtenbuch;

        return $this;
    }

    /**
     * Get DatumFahrtenbuchBis value
     */
    public function getDatumFahrtenbuchBis(): ?string
    {
        return $this->DatumFahrtenbuchBis;
    }

    /**
     * Set DatumFahrtenbuchBis value
     */
    public function setDatumFahrtenbuchBis(?string $datumFahrtenbuchBis = null): self
    {
        $this->DatumFahrtenbuchBis = $datumFahrtenbuchBis;

        return $this;
    }

    /**
     * Get DatumAnordnungFahrtenbuch value
     */
    public function getDatumAnordnungFahrtenbuch(): ?string
    {
        return $this->DatumAnordnungFahrtenbuch;
    }

    /**
     * Set DatumAnordnungFahrtenbuch value
     */
    public function setDatumAnordnungFahrtenbuch(?string $datumAnordnungFahrtenbuch = null): self
    {
        $this->DatumAnordnungFahrtenbuch = $datumAnordnungFahrtenbuch;

        return $this;
    }

    /**
     * Get DatumFahrtenbuchVon value
     */
    public function getDatumFahrtenbuchVon(): ?string
    {
        return $this->DatumFahrtenbuchVon;
    }

    /**
     * Set DatumFahrtenbuchVon value
     */
    public function setDatumFahrtenbuchVon(?string $datumFahrtenbuchVon = null): self
    {
        $this->DatumFahrtenbuchVon = $datumFahrtenbuchVon;

        return $this;
    }
}
