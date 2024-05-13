<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kontakt StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kontakt extends AbstractStructBase
{
    /**
     * The typ
     */
    public ?\THAG\XKfz\StructType\Code_TypDesKontakts $typ = null;

    /**
     * The prioritaet
     */
    public ?int $prioritaet = null;

    /**
     * The information
     */
    public ?string $information = null;

    /**
     * Constructor method for Type.Kontakt
     *
     * @uses Type_Kontakt::setTyp()
     * @uses Type_Kontakt::setPrioritaet()
     * @uses Type_Kontakt::setInformation()
     */
    public function __construct(?\THAG\XKfz\StructType\Code_TypDesKontakts $typ = null, ?int $prioritaet = null, ?string $information = null)
    {
        $this
            ->setTyp($typ)
            ->setPrioritaet($prioritaet)
            ->setInformation($information);
    }

    /**
     * Get typ value
     */
    public function getTyp(): ?\THAG\XKfz\StructType\Code_TypDesKontakts
    {
        return $this->typ;
    }

    /**
     * Set typ value
     */
    public function setTyp(?\THAG\XKfz\StructType\Code_TypDesKontakts $typ = null): self
    {
        $this->typ = $typ;

        return $this;
    }

    /**
     * Get prioritaet value
     */
    public function getPrioritaet(): ?int
    {
        return $this->prioritaet;
    }

    /**
     * Set prioritaet value
     */
    public function setPrioritaet(?int $prioritaet = null): self
    {
        $this->prioritaet = $prioritaet;

        return $this;
    }

    /**
     * Get information value
     */
    public function getInformation(): ?string
    {
        return $this->information;
    }

    /**
     * Set information value
     */
    public function setInformation(?string $information = null): self
    {
        $this->information = $information;

        return $this;
    }
}
