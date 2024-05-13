<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Code.SucheinschraenkungGebuehrenUnterlagen StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Code_SucheinschraenkungGebuehrenUnterlagen extends AbstractStructBase
{
    /**
     * The code
     */
    public ?string $code = null;

    /**
     * The name
     */
    public ?string $name = null;

    /**
     * The listURI
     */
    public ?string $listURI = null;

    /**
     * The listVersionID
     */
    public ?string $listVersionID = null;

    /**
     * Constructor method for Code.SucheinschraenkungGebuehrenUnterlagen
     *
     * @uses Code_SucheinschraenkungGebuehrenUnterlagen::setCode()
     * @uses Code_SucheinschraenkungGebuehrenUnterlagen::setName()
     * @uses Code_SucheinschraenkungGebuehrenUnterlagen::setListURI()
     * @uses Code_SucheinschraenkungGebuehrenUnterlagen::setListVersionID()
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
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Set code value
     */
    public function setCode(?string $code = null): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get name value
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Set name value
     */
    public function setName(?string $name = null): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get listURI value
     */
    public function getListURI(): ?string
    {
        return $this->listURI;
    }

    /**
     * Set listURI value
     */
    public function setListURI(?string $listURI = null): self
    {
        $this->listURI = $listURI;

        return $this;
    }

    /**
     * Get listVersionID value
     */
    public function getListVersionID(): ?string
    {
        return $this->listVersionID;
    }

    /**
     * Set listVersionID value
     */
    public function setListVersionID(?string $listVersionID = null): self
    {
        $this->listVersionID = $listVersionID;

        return $this;
    }
}
