<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Referenz StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Referenz extends AbstractStructBase
{
    /**
     * The referenzTyp
     * @var \THAG\XKfz\StructType\Code_TypDerReferenz|null
     */
    public ?\THAG\XKfz\StructType\Code_TypDerReferenz $referenzTyp = null;
    /**
     * The referenzID
     * @var string|null
     */
    public ?string $referenzID = null;
    /**
     * Constructor method for Type.Referenz
     * @uses Type_Referenz::setReferenzTyp()
     * @uses Type_Referenz::setReferenzID()
     * @param \THAG\XKfz\StructType\Code_TypDerReferenz $referenzTyp
     * @param string $referenzID
     */
    public function __construct(?\THAG\XKfz\StructType\Code_TypDerReferenz $referenzTyp = null, ?string $referenzID = null)
    {
        $this
            ->setReferenzTyp($referenzTyp)
            ->setReferenzID($referenzID);
    }
    /**
     * Get referenzTyp value
     * @return \THAG\XKfz\StructType\Code_TypDerReferenz|null
     */
    public function getReferenzTyp(): ?\THAG\XKfz\StructType\Code_TypDerReferenz
    {
        return $this->referenzTyp;
    }
    /**
     * Set referenzTyp value
     * @param \THAG\XKfz\StructType\Code_TypDerReferenz $referenzTyp
     * @return \THAG\XKfz\StructType\Type_Referenz
     */
    public function setReferenzTyp(?\THAG\XKfz\StructType\Code_TypDerReferenz $referenzTyp = null): self
    {
        $this->referenzTyp = $referenzTyp;
        
        return $this;
    }
    /**
     * Get referenzID value
     * @return string|null
     */
    public function getReferenzID(): ?string
    {
        return $this->referenzID;
    }
    /**
     * Set referenzID value
     * @param string $referenzID
     * @return \THAG\XKfz\StructType\Type_Referenz
     */
    public function setReferenzID(?string $referenzID = null): self
    {
        $this->referenzID = $referenzID;
        
        return $this;
    }
}
