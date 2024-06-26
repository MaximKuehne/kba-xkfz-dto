<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * GDV_ITD_060.ListeVkzProduktionsauftrag.ZiffernblockIntervall StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class GDV_ITD_060_ListeVkzProduktionsauftrag_ZiffernblockIntervall extends AbstractStructBase
{
    /**
     * The Von
     */
    public ?string $Von = null;

    /**
     * The Bis
     */
    public ?string $Bis = null;

    /**
     * Constructor method for
     * GDV_ITD_060.ListeVkzProduktionsauftrag.ZiffernblockIntervall
     *
     * @uses GDV_ITD_060_ListeVkzProduktionsauftrag_ZiffernblockIntervall::setVon()
     * @uses GDV_ITD_060_ListeVkzProduktionsauftrag_ZiffernblockIntervall::setBis()
     */
    public function __construct(?string $von = null, ?string $bis = null)
    {
        $this
            ->setVon($von)
            ->setBis($bis);
    }

    /**
     * Get Von value
     */
    public function getVon(): ?string
    {
        return $this->Von;
    }

    /**
     * Set Von value
     */
    public function setVon(?string $von = null): self
    {
        $this->Von = $von;

        return $this;
    }

    /**
     * Get Bis value
     */
    public function getBis(): ?string
    {
        return $this->Bis;
    }

    /**
     * Set Bis value
     */
    public function setBis(?string $bis = null): self
    {
        $this->Bis = $bis;

        return $this;
    }
}
