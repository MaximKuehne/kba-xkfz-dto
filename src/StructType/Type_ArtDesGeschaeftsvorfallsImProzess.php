<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ArtDesGeschaeftsvorfallsImProzess StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ArtDesGeschaeftsvorfallsImProzess extends AbstractStructBase
{
    /**
     * The code
     * @var \THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls|null
     */
    public ?\THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls $code = null;
    /**
     * The zusatz
     * @var string|null
     */
    public ?string $zusatz = null;
    /**
     * Constructor method for Type.ArtDesGeschaeftsvorfallsImProzess
     * @uses Type_ArtDesGeschaeftsvorfallsImProzess::setCode()
     * @uses Type_ArtDesGeschaeftsvorfallsImProzess::setZusatz()
     * @param \THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls $code
     * @param string $zusatz
     */
    public function __construct(?\THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls $code = null, ?string $zusatz = null)
    {
        $this
            ->setCode($code)
            ->setZusatz($zusatz);
    }
    /**
     * Get code value
     * @return \THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls|null
     */
    public function getCode(): ?\THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param \THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls $code
     * @return \THAG\XKfz\StructType\Type_ArtDesGeschaeftsvorfallsImProzess
     */
    public function setCode(?\THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls $code = null): self
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
     * @return \THAG\XKfz\StructType\Type_ArtDesGeschaeftsvorfallsImProzess
     */
    public function setZusatz(?string $zusatz = null): self
    {
        $this->zusatz = $zusatz;
        
        return $this;
    }
}
