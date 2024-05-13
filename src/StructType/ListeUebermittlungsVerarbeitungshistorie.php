<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeUebermittlungsVerarbeitungshistorie StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeUebermittlungsVerarbeitungshistorie extends AbstractStructBase
{
    /**
     * The UebermittlungsVerarbeitungshistorie
     * @var \THAG\XKfz\StructType\UebermittlungsVerarbeitungshistorie|null
     */
    public ?\THAG\XKfz\StructType\UebermittlungsVerarbeitungshistorie $UebermittlungsVerarbeitungshistorie = null;
    /**
     * Constructor method for ListeUebermittlungsVerarbeitungshistorie
     * @uses ListeUebermittlungsVerarbeitungshistorie::setUebermittlungsVerarbeitungshistorie()
     * @param \THAG\XKfz\StructType\UebermittlungsVerarbeitungshistorie $uebermittlungsVerarbeitungshistorie
     */
    public function __construct(?\THAG\XKfz\StructType\UebermittlungsVerarbeitungshistorie $uebermittlungsVerarbeitungshistorie = null)
    {
        $this
            ->setUebermittlungsVerarbeitungshistorie($uebermittlungsVerarbeitungshistorie);
    }
    /**
     * Get UebermittlungsVerarbeitungshistorie value
     * @return \THAG\XKfz\StructType\UebermittlungsVerarbeitungshistorie|null
     */
    public function getUebermittlungsVerarbeitungshistorie(): ?\THAG\XKfz\StructType\UebermittlungsVerarbeitungshistorie
    {
        return $this->UebermittlungsVerarbeitungshistorie;
    }
    /**
     * Set UebermittlungsVerarbeitungshistorie value
     * @param \THAG\XKfz\StructType\UebermittlungsVerarbeitungshistorie $uebermittlungsVerarbeitungshistorie
     * @return \THAG\XKfz\StructType\ListeUebermittlungsVerarbeitungshistorie
     */
    public function setUebermittlungsVerarbeitungshistorie(?\THAG\XKfz\StructType\UebermittlungsVerarbeitungshistorie $uebermittlungsVerarbeitungshistorie = null): self
    {
        $this->UebermittlungsVerarbeitungshistorie = $uebermittlungsVerarbeitungshistorie;
        
        return $this;
    }
}
