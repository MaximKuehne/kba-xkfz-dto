<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.KonfigurationGebuehren StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_KonfigurationGebuehren extends AbstractStructBase
{
    /**
     * The positionen
     */
    public ?\THAG\XKfz\StructType\Type_ListeGebuehrenposition $positionen = null;

    /**
     * The summePositionenGesamt
     */
    public ?float $summePositionenGesamt = null;

    /**
     * The bemerkung
     */
    public ?string $bemerkung = null;

    /**
     * Constructor method for Type.KonfigurationGebuehren
     *
     * @uses Type_KonfigurationGebuehren::setPositionen()
     * @uses Type_KonfigurationGebuehren::setSummePositionenGesamt()
     * @uses Type_KonfigurationGebuehren::setBemerkung()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_ListeGebuehrenposition $positionen = null, ?float $summePositionenGesamt = null, ?string $bemerkung = null)
    {
        $this
            ->setPositionen($positionen)
            ->setSummePositionenGesamt($summePositionenGesamt)
            ->setBemerkung($bemerkung);
    }

    /**
     * Get positionen value
     */
    public function getPositionen(): ?\THAG\XKfz\StructType\Type_ListeGebuehrenposition
    {
        return $this->positionen;
    }

    /**
     * Set positionen value
     */
    public function setPositionen(?\THAG\XKfz\StructType\Type_ListeGebuehrenposition $positionen = null): self
    {
        $this->positionen = $positionen;

        return $this;
    }

    /**
     * Get summePositionenGesamt value
     */
    public function getSummePositionenGesamt(): ?float
    {
        return $this->summePositionenGesamt;
    }

    /**
     * Set summePositionenGesamt value
     */
    public function setSummePositionenGesamt(?float $summePositionenGesamt = null): self
    {
        $this->summePositionenGesamt = $summePositionenGesamt;

        return $this;
    }

    /**
     * Get bemerkung value
     */
    public function getBemerkung(): ?string
    {
        return $this->bemerkung;
    }

    /**
     * Set bemerkung value
     */
    public function setBemerkung(?string $bemerkung = null): self
    {
        $this->bemerkung = $bemerkung;

        return $this;
    }
}
