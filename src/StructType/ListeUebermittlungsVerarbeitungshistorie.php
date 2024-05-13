<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeUebermittlungsVerarbeitungshistorie StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeUebermittlungsVerarbeitungshistorie extends AbstractStructBase
{
    /**
     * The UebermittlungsVerarbeitungshistorie
     */
    public ?\THAG\XKfz\StructType\UebermittlungsVerarbeitungshistorie $UebermittlungsVerarbeitungshistorie = null;

    /**
     * Constructor method for ListeUebermittlungsVerarbeitungshistorie
     *
     * @uses ListeUebermittlungsVerarbeitungshistorie::setUebermittlungsVerarbeitungshistorie()
     */
    public function __construct(?\THAG\XKfz\StructType\UebermittlungsVerarbeitungshistorie $uebermittlungsVerarbeitungshistorie = null)
    {
        $this
            ->setUebermittlungsVerarbeitungshistorie($uebermittlungsVerarbeitungshistorie);
    }

    /**
     * Get UebermittlungsVerarbeitungshistorie value
     */
    public function getUebermittlungsVerarbeitungshistorie(): ?\THAG\XKfz\StructType\UebermittlungsVerarbeitungshistorie
    {
        return $this->UebermittlungsVerarbeitungshistorie;
    }

    /**
     * Set UebermittlungsVerarbeitungshistorie value
     */
    public function setUebermittlungsVerarbeitungshistorie(?\THAG\XKfz\StructType\UebermittlungsVerarbeitungshistorie $uebermittlungsVerarbeitungshistorie = null): self
    {
        $this->UebermittlungsVerarbeitungshistorie = $uebermittlungsVerarbeitungshistorie;

        return $this;
    }
}
