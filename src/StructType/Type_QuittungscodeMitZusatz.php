<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.QuittungscodeMitZusatz StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_QuittungscodeMitZusatz extends AbstractStructBase
{
    /**
     * The code
     * @var \THAG\XKfz\StructType\Code_Quittungscode|null
     */
    public ?\THAG\XKfz\StructType\Code_Quittungscode $code = null;
    /**
     * The zusatz
     * @var string|null
     */
    public ?string $zusatz = null;
    /**
     * Constructor method for Type.QuittungscodeMitZusatz
     * @uses Type_QuittungscodeMitZusatz::setCode()
     * @uses Type_QuittungscodeMitZusatz::setZusatz()
     * @param \THAG\XKfz\StructType\Code_Quittungscode $code
     * @param string $zusatz
     */
    public function __construct(?\THAG\XKfz\StructType\Code_Quittungscode $code = null, ?string $zusatz = null)
    {
        $this
            ->setCode($code)
            ->setZusatz($zusatz);
    }
    /**
     * Get code value
     * @return \THAG\XKfz\StructType\Code_Quittungscode|null
     */
    public function getCode(): ?\THAG\XKfz\StructType\Code_Quittungscode
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param \THAG\XKfz\StructType\Code_Quittungscode $code
     * @return \THAG\XKfz\StructType\Type_QuittungscodeMitZusatz
     */
    public function setCode(?\THAG\XKfz\StructType\Code_Quittungscode $code = null): self
    {
        $this->code = $code;
        
        return $this;
    }
    /**
     * Get zusatz value
     * @return string|null
     */
    public function getZusatz(): ?string
    {
        return $this->zusatz;
    }
    /**
     * Set zusatz value
     * @param string $zusatz
     * @return \THAG\XKfz\StructType\Type_QuittungscodeMitZusatz
     */
    public function setZusatz(?string $zusatz = null): self
    {
        $this->zusatz = $zusatz;
        
        return $this;
    }
}
