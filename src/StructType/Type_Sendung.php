<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Sendung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Sendung extends AbstractStructBase
{
    /**
     * The referenzPaket
     * @var string|null
     */
    public ?string $referenzPaket = null;
    /**
     * The groessePaket
     * @var string|null
     */
    public ?string $groessePaket = null;
    /**
     * The gewichtPaket
     * @var string|null
     */
    public ?string $gewichtPaket = null;
    /**
     * The urlVerfolgungPaket
     * @var string|null
     */
    public ?string $urlVerfolgungPaket = null;
    /**
     * Constructor method for Type.Sendung
     * @uses Type_Sendung::setReferenzPaket()
     * @uses Type_Sendung::setGroessePaket()
     * @uses Type_Sendung::setGewichtPaket()
     * @uses Type_Sendung::setUrlVerfolgungPaket()
     * @param string $referenzPaket
     * @param string $groessePaket
     * @param string $gewichtPaket
     * @param string $urlVerfolgungPaket
     */
    public function __construct(?string $referenzPaket = null, ?string $groessePaket = null, ?string $gewichtPaket = null, ?string $urlVerfolgungPaket = null)
    {
        $this
            ->setReferenzPaket($referenzPaket)
            ->setGroessePaket($groessePaket)
            ->setGewichtPaket($gewichtPaket)
            ->setUrlVerfolgungPaket($urlVerfolgungPaket);
    }
    /**
     * Get referenzPaket value
     * @return string|null
     */
    public function getReferenzPaket(): ?string
    {
        return $this->referenzPaket;
    }
    /**
     * Set referenzPaket value
     * @param string $referenzPaket
     * @return \THAG\XKfz\StructType\Type_Sendung
     */
    public function setReferenzPaket(?string $referenzPaket = null): self
    {
        $this->referenzPaket = $referenzPaket;
        
        return $this;
    }
    /**
     * Get groessePaket value
     * @return string|null
     */
    public function getGroessePaket(): ?string
    {
        return $this->groessePaket;
    }
    /**
     * Set groessePaket value
     * @param string $groessePaket
     * @return \THAG\XKfz\StructType\Type_Sendung
     */
    public function setGroessePaket(?string $groessePaket = null): self
    {
        $this->groessePaket = $groessePaket;
        
        return $this;
    }
    /**
     * Get gewichtPaket value
     * @return string|null
     */
    public function getGewichtPaket(): ?string
    {
        return $this->gewichtPaket;
    }
    /**
     * Set gewichtPaket value
     * @param string $gewichtPaket
     * @return \THAG\XKfz\StructType\Type_Sendung
     */
    public function setGewichtPaket(?string $gewichtPaket = null): self
    {
        $this->gewichtPaket = $gewichtPaket;
        
        return $this;
    }
    /**
     * Get urlVerfolgungPaket value
     * @return string|null
     */
    public function getUrlVerfolgungPaket(): ?string
    {
        return $this->urlVerfolgungPaket;
    }
    /**
     * Set urlVerfolgungPaket value
     * @param string $urlVerfolgungPaket
     * @return \THAG\XKfz\StructType\Type_Sendung
     */
    public function setUrlVerfolgungPaket(?string $urlVerfolgungPaket = null): self
    {
        $this->urlVerfolgungPaket = $urlVerfolgungPaket;
        
        return $this;
    }
}
