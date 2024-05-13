<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kontakt StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kontakt extends AbstractStructBase
{
    /**
     * The typ
     * @var \THAG\XKfz\StructType\Code_TypDesKontakts|null
     */
    public ?\THAG\XKfz\StructType\Code_TypDesKontakts $typ = null;
    /**
     * The prioritaet
     * @var int|null
     */
    public ?int $prioritaet = null;
    /**
     * The information
     * @var string|null
     */
    public ?string $information = null;
    /**
     * Constructor method for Type.Kontakt
     * @uses Type_Kontakt::setTyp()
     * @uses Type_Kontakt::setPrioritaet()
     * @uses Type_Kontakt::setInformation()
     * @param \THAG\XKfz\StructType\Code_TypDesKontakts $typ
     * @param int $prioritaet
     * @param string $information
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
     * @return \THAG\XKfz\StructType\Code_TypDesKontakts|null
     */
    public function getTyp(): ?\THAG\XKfz\StructType\Code_TypDesKontakts
    {
        return $this->typ;
    }
    /**
     * Set typ value
     * @param \THAG\XKfz\StructType\Code_TypDesKontakts $typ
     * @return \THAG\XKfz\StructType\Type_Kontakt
     */
    public function setTyp(?\THAG\XKfz\StructType\Code_TypDesKontakts $typ = null): self
    {
        $this->typ = $typ;
        
        return $this;
    }
    /**
     * Get prioritaet value
     * @return int|null
     */
    public function getPrioritaet(): ?int
    {
        return $this->prioritaet;
    }
    /**
     * Set prioritaet value
     * @param int $prioritaet
     * @return \THAG\XKfz\StructType\Type_Kontakt
     */
    public function setPrioritaet(?int $prioritaet = null): self
    {
        $this->prioritaet = $prioritaet;
        
        return $this;
    }
    /**
     * Get information value
     * @return string|null
     */
    public function getInformation(): ?string
    {
        return $this->information;
    }
    /**
     * Set information value
     * @param string $information
     * @return \THAG\XKfz\StructType\Type_Kontakt
     */
    public function setInformation(?string $information = null): self
    {
        $this->information = $information;
        
        return $this;
    }
}
