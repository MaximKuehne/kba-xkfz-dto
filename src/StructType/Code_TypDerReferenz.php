<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Code.TypDerReferenz StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Code_TypDerReferenz extends AbstractStructBase
{
    /**
     * The code
     * @var string|null
     */
    public ?string $code = null;
    /**
     * The name
     * @var string|null
     */
    public ?string $name = null;
    /**
     * The listURI
     * @var string|null
     */
    public ?string $listURI = null;
    /**
     * The listVersionID
     * @var string|null
     */
    public ?string $listVersionID = null;
    /**
     * Constructor method for Code.TypDerReferenz
     * @uses Code_TypDerReferenz::setCode()
     * @uses Code_TypDerReferenz::setName()
     * @uses Code_TypDerReferenz::setListURI()
     * @uses Code_TypDerReferenz::setListVersionID()
     * @param string $code
     * @param string $name
     * @param string $listURI
     * @param string $listVersionID
     */
    public function __construct(?string $code = null, ?string $name = null, ?string $listURI = null, ?string $listVersionID = null)
    {
        $this
            ->setCode($code)
            ->setName($name)
            ->setListURI($listURI)
            ->setListVersionID($listVersionID);
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \THAG\XKfz\StructType\Code_TypDerReferenz
     */
    public function setCode(?string $code = null): self
    {
        $this->code = $code;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \THAG\XKfz\StructType\Code_TypDerReferenz
     */
    public function setName(?string $name = null): self
    {
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get listURI value
     * @return string|null
     */
    public function getListURI(): ?string
    {
        return $this->listURI;
    }
    /**
     * Set listURI value
     * @param string $listURI
     * @return \THAG\XKfz\StructType\Code_TypDerReferenz
     */
    public function setListURI(?string $listURI = null): self
    {
        $this->listURI = $listURI;
        
        return $this;
    }
    /**
     * Get listVersionID value
     * @return string|null
     */
    public function getListVersionID(): ?string
    {
        return $this->listVersionID;
    }
    /**
     * Set listVersionID value
     * @param string $listVersionID
     * @return \THAG\XKfz\StructType\Code_TypDerReferenz
     */
    public function setListVersionID(?string $listVersionID = null): self
    {
        $this->listVersionID = $listVersionID;
        
        return $this;
    }
}
