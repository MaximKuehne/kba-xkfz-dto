<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Referenz StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Referenz extends AbstractStructBase
{
    /**
     * The referenzTyp
     */
    public ?\THAG\XKfz\StructType\Code_TypDerReferenz $referenzTyp = null;

    /**
     * The referenzID
     */
    public ?string $referenzID = null;

    /**
     * Constructor method for Type.Referenz
     *
     * @uses Type_Referenz::setReferenzTyp()
     * @uses Type_Referenz::setReferenzID()
     */
    public function __construct(?\THAG\XKfz\StructType\Code_TypDerReferenz $referenzTyp = null, ?string $referenzID = null)
    {
        $this
            ->setReferenzTyp($referenzTyp)
            ->setReferenzID($referenzID);
    }

    /**
     * Get referenzTyp value
     */
    public function getReferenzTyp(): ?\THAG\XKfz\StructType\Code_TypDerReferenz
    {
        return $this->referenzTyp;
    }

    /**
     * Set referenzTyp value
     */
    public function setReferenzTyp(?\THAG\XKfz\StructType\Code_TypDerReferenz $referenzTyp = null): self
    {
        $this->referenzTyp = $referenzTyp;

        return $this;
    }

    /**
     * Get referenzID value
     */
    public function getReferenzID(): ?string
    {
        return $this->referenzID;
    }

    /**
     * Set referenzID value
     */
    public function setReferenzID(?string $referenzID = null): self
    {
        $this->referenzID = $referenzID;

        return $this;
    }
}
