<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.UntersuchungUmweltvertraeglichkeit StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_UntersuchungUmweltvertraeglichkeit extends AbstractStructBase
{
    /**
     * The werkstattUntersuchungUmweltvertraeglichkeit
     * @var string|null
     */
    public ?string $werkstattUntersuchungUmweltvertraeglichkeit = null;
    /**
     * The datumUntersuchungUmweltvertraeglichkeit
     * @var string|null
     */
    public ?string $datumUntersuchungUmweltvertraeglichkeit = null;
    /**
     * Constructor method for Type.UntersuchungUmweltvertraeglichkeit
     * @uses Type_UntersuchungUmweltvertraeglichkeit::setWerkstattUntersuchungUmweltvertraeglichkeit()
     * @uses Type_UntersuchungUmweltvertraeglichkeit::setDatumUntersuchungUmweltvertraeglichkeit()
     * @param string $werkstattUntersuchungUmweltvertraeglichkeit
     * @param string $datumUntersuchungUmweltvertraeglichkeit
     */
    public function __construct(?string $werkstattUntersuchungUmweltvertraeglichkeit = null, ?string $datumUntersuchungUmweltvertraeglichkeit = null)
    {
        $this
            ->setWerkstattUntersuchungUmweltvertraeglichkeit($werkstattUntersuchungUmweltvertraeglichkeit)
            ->setDatumUntersuchungUmweltvertraeglichkeit($datumUntersuchungUmweltvertraeglichkeit);
    }
    /**
     * Get werkstattUntersuchungUmweltvertraeglichkeit value
     * @return string|null
     */
    public function getWerkstattUntersuchungUmweltvertraeglichkeit(): ?string
    {
        return $this->werkstattUntersuchungUmweltvertraeglichkeit;
    }
    /**
     * Set werkstattUntersuchungUmweltvertraeglichkeit value
     * @param string $werkstattUntersuchungUmweltvertraeglichkeit
     * @return \THAG\XKfz\StructType\Type_UntersuchungUmweltvertraeglichkeit
     */
    public function setWerkstattUntersuchungUmweltvertraeglichkeit(?string $werkstattUntersuchungUmweltvertraeglichkeit = null): self
    {
        $this->werkstattUntersuchungUmweltvertraeglichkeit = $werkstattUntersuchungUmweltvertraeglichkeit;
        
        return $this;
    }
    /**
     * Get datumUntersuchungUmweltvertraeglichkeit value
     * @return string|null
     */
    public function getDatumUntersuchungUmweltvertraeglichkeit(): ?string
    {
        return $this->datumUntersuchungUmweltvertraeglichkeit;
    }
    /**
     * Set datumUntersuchungUmweltvertraeglichkeit value
     * @param string $datumUntersuchungUmweltvertraeglichkeit
     * @return \THAG\XKfz\StructType\Type_UntersuchungUmweltvertraeglichkeit
     */
    public function setDatumUntersuchungUmweltvertraeglichkeit(?string $datumUntersuchungUmweltvertraeglichkeit = null): self
    {
        $this->datumUntersuchungUmweltvertraeglichkeit = $datumUntersuchungUmweltvertraeglichkeit;
        
        return $this;
    }
}
