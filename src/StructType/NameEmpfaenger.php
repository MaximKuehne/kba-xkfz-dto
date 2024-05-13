<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NameEmpfaenger StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class NameEmpfaenger extends AbstractStructBase
{
    /**
     * The Name1
     * @var string|null
     */
    public ?string $Name1 = null;
    /**
     * The Name2
     * @var string|null
     */
    public ?string $Name2 = null;
    /**
     * Constructor method for NameEmpfaenger
     * @uses NameEmpfaenger::setName1()
     * @uses NameEmpfaenger::setName2()
     * @param string $name1
     * @param string $name2
     */
    public function __construct(?string $name1 = null, ?string $name2 = null)
    {
        $this
            ->setName1($name1)
            ->setName2($name2);
    }
    /**
     * Get Name1 value
     * @return string|null
     */
    public function getName1(): ?string
    {
        return $this->Name1;
    }
    /**
     * Set Name1 value
     * @param string $name1
     * @return \THAG\XKfz\StructType\NameEmpfaenger
     */
    public function setName1(?string $name1 = null): self
    {
        $this->Name1 = $name1;
        
        return $this;
    }
    /**
     * Get Name2 value
     * @return string|null
     */
    public function getName2(): ?string
    {
        return $this->Name2;
    }
    /**
     * Set Name2 value
     * @param string $name2
     * @return \THAG\XKfz\StructType\NameEmpfaenger
     */
    public function setName2(?string $name2 = null): self
    {
        $this->Name2 = $name2;
        
        return $this;
    }
}
