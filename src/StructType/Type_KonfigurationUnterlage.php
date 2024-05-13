<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.KonfigurationUnterlage StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_KonfigurationUnterlage extends AbstractStructBase
{
    /**
     * The lieferdienst
     */
    public ?\THAG\XKfz\StructType\Type_Lieferdienst $lieferdienst = null;

    /**
     * The unterlage
     */
    public ?\THAG\XKfz\StructType\Type_Unterlage $unterlage = null;

    /**
     * The bemerkung
     */
    public ?string $bemerkung = null;

    /**
     * Constructor method for Type.KonfigurationUnterlage
     *
     * @uses Type_KonfigurationUnterlage::setLieferdienst()
     * @uses Type_KonfigurationUnterlage::setUnterlage()
     * @uses Type_KonfigurationUnterlage::setBemerkung()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Lieferdienst $lieferdienst = null, ?\THAG\XKfz\StructType\Type_Unterlage $unterlage = null, ?string $bemerkung = null)
    {
        $this
            ->setLieferdienst($lieferdienst)
            ->setUnterlage($unterlage)
            ->setBemerkung($bemerkung);
    }

    /**
     * Get lieferdienst value
     */
    public function getLieferdienst(): ?\THAG\XKfz\StructType\Type_Lieferdienst
    {
        return $this->lieferdienst;
    }

    /**
     * Set lieferdienst value
     */
    public function setLieferdienst(?\THAG\XKfz\StructType\Type_Lieferdienst $lieferdienst = null): self
    {
        $this->lieferdienst = $lieferdienst;

        return $this;
    }

    /**
     * Get unterlage value
     */
    public function getUnterlage(): ?\THAG\XKfz\StructType\Type_Unterlage
    {
        return $this->unterlage;
    }

    /**
     * Set unterlage value
     */
    public function setUnterlage(?\THAG\XKfz\StructType\Type_Unterlage $unterlage = null): self
    {
        $this->unterlage = $unterlage;

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
