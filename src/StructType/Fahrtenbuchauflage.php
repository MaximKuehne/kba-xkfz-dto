<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Fahrtenbuchauflage StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Fahrtenbuchauflage extends AbstractStructBase
{
    /**
     * The AnordnendeStelleFahrtenbuch
     * @var string|null
     */
    public ?string $AnordnendeStelleFahrtenbuch = null;
    /**
     * The DatumFahrtenbuchBis
     * @var string|null
     */
    public ?string $DatumFahrtenbuchBis = null;
    /**
     * The DatumAnordnungFahrtenbuch
     * @var string|null
     */
    public ?string $DatumAnordnungFahrtenbuch = null;
    /**
     * The DatumFahrtenbuchVon
     * @var string|null
     */
    public ?string $DatumFahrtenbuchVon = null;
    /**
     * Constructor method for Fahrtenbuchauflage
     * @uses Fahrtenbuchauflage::setAnordnendeStelleFahrtenbuch()
     * @uses Fahrtenbuchauflage::setDatumFahrtenbuchBis()
     * @uses Fahrtenbuchauflage::setDatumAnordnungFahrtenbuch()
     * @uses Fahrtenbuchauflage::setDatumFahrtenbuchVon()
     * @param string $anordnendeStelleFahrtenbuch
     * @param string $datumFahrtenbuchBis
     * @param string $datumAnordnungFahrtenbuch
     * @param string $datumFahrtenbuchVon
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
     * @return string|null
     */
    public function getAnordnendeStelleFahrtenbuch(): ?string
    {
        return $this->AnordnendeStelleFahrtenbuch;
    }
    /**
     * Set AnordnendeStelleFahrtenbuch value
     * @param string $anordnendeStelleFahrtenbuch
     * @return \THAG\XKfz\StructType\Fahrtenbuchauflage
     */
    public function setAnordnendeStelleFahrtenbuch(?string $anordnendeStelleFahrtenbuch = null): self
    {
        $this->AnordnendeStelleFahrtenbuch = $anordnendeStelleFahrtenbuch;
        
        return $this;
    }
    /**
     * Get DatumFahrtenbuchBis value
     * @return string|null
     */
    public function getDatumFahrtenbuchBis(): ?string
    {
        return $this->DatumFahrtenbuchBis;
    }
    /**
     * Set DatumFahrtenbuchBis value
     * @param string $datumFahrtenbuchBis
     * @return \THAG\XKfz\StructType\Fahrtenbuchauflage
     */
    public function setDatumFahrtenbuchBis(?string $datumFahrtenbuchBis = null): self
    {
        $this->DatumFahrtenbuchBis = $datumFahrtenbuchBis;
        
        return $this;
    }
    /**
     * Get DatumAnordnungFahrtenbuch value
     * @return string|null
     */
    public function getDatumAnordnungFahrtenbuch(): ?string
    {
        return $this->DatumAnordnungFahrtenbuch;
    }
    /**
     * Set DatumAnordnungFahrtenbuch value
     * @param string $datumAnordnungFahrtenbuch
     * @return \THAG\XKfz\StructType\Fahrtenbuchauflage
     */
    public function setDatumAnordnungFahrtenbuch(?string $datumAnordnungFahrtenbuch = null): self
    {
        $this->DatumAnordnungFahrtenbuch = $datumAnordnungFahrtenbuch;
        
        return $this;
    }
    /**
     * Get DatumFahrtenbuchVon value
     * @return string|null
     */
    public function getDatumFahrtenbuchVon(): ?string
    {
        return $this->DatumFahrtenbuchVon;
    }
    /**
     * Set DatumFahrtenbuchVon value
     * @param string $datumFahrtenbuchVon
     * @return \THAG\XKfz\StructType\Fahrtenbuchauflage
     */
    public function setDatumFahrtenbuchVon(?string $datumFahrtenbuchVon = null): self
    {
        $this->DatumFahrtenbuchVon = $datumFahrtenbuchVon;
        
        return $this;
    }
}
