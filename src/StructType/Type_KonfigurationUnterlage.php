<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.KonfigurationUnterlage StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_KonfigurationUnterlage extends AbstractStructBase
{
    /**
     * The lieferdienst
     * @var \THAG\XKfz\StructType\Type_Lieferdienst|null
     */
    public ?\THAG\XKfz\StructType\Type_Lieferdienst $lieferdienst = null;
    /**
     * The unterlage
     * @var \THAG\XKfz\StructType\Type_Unterlage|null
     */
    public ?\THAG\XKfz\StructType\Type_Unterlage $unterlage = null;
    /**
     * The bemerkung
     * @var string|null
     */
    public ?string $bemerkung = null;
    /**
     * Constructor method for Type.KonfigurationUnterlage
     * @uses Type_KonfigurationUnterlage::setLieferdienst()
     * @uses Type_KonfigurationUnterlage::setUnterlage()
     * @uses Type_KonfigurationUnterlage::setBemerkung()
     * @param \THAG\XKfz\StructType\Type_Lieferdienst $lieferdienst
     * @param \THAG\XKfz\StructType\Type_Unterlage $unterlage
     * @param string $bemerkung
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
     * @return \THAG\XKfz\StructType\Type_Lieferdienst|null
     */
    public function getLieferdienst(): ?\THAG\XKfz\StructType\Type_Lieferdienst
    {
        return $this->lieferdienst;
    }
    /**
     * Set lieferdienst value
     * @param \THAG\XKfz\StructType\Type_Lieferdienst $lieferdienst
     * @return \THAG\XKfz\StructType\Type_KonfigurationUnterlage
     */
    public function setLieferdienst(?\THAG\XKfz\StructType\Type_Lieferdienst $lieferdienst = null): self
    {
        $this->lieferdienst = $lieferdienst;
        
        return $this;
    }
    /**
     * Get unterlage value
     * @return \THAG\XKfz\StructType\Type_Unterlage|null
     */
    public function getUnterlage(): ?\THAG\XKfz\StructType\Type_Unterlage
    {
        return $this->unterlage;
    }
    /**
     * Set unterlage value
     * @param \THAG\XKfz\StructType\Type_Unterlage $unterlage
     * @return \THAG\XKfz\StructType\Type_KonfigurationUnterlage
     */
    public function setUnterlage(?\THAG\XKfz\StructType\Type_Unterlage $unterlage = null): self
    {
        $this->unterlage = $unterlage;
        
        return $this;
    }
    /**
     * Get bemerkung value
     * @return string|null
     */
    public function getBemerkung(): ?string
    {
        return $this->bemerkung;
    }
    /**
     * Set bemerkung value
     * @param string $bemerkung
     * @return \THAG\XKfz\StructType\Type_KonfigurationUnterlage
     */
    public function setBemerkung(?string $bemerkung = null): self
    {
        $this->bemerkung = $bemerkung;
        
        return $this;
    }
}
