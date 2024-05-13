<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Sendung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Sendung extends AbstractStructBase
{
    /**
     * The referenzPaket
     */
    public ?string $referenzPaket = null;

    /**
     * The groessePaket
     */
    public ?string $groessePaket = null;

    /**
     * The gewichtPaket
     */
    public ?string $gewichtPaket = null;

    /**
     * The urlVerfolgungPaket
     */
    public ?string $urlVerfolgungPaket = null;

    /**
     * Constructor method for Type.Sendung
     *
     * @uses Type_Sendung::setReferenzPaket()
     * @uses Type_Sendung::setGroessePaket()
     * @uses Type_Sendung::setGewichtPaket()
     * @uses Type_Sendung::setUrlVerfolgungPaket()
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
     */
    public function getReferenzPaket(): ?string
    {
        return $this->referenzPaket;
    }

    /**
     * Set referenzPaket value
     */
    public function setReferenzPaket(?string $referenzPaket = null): self
    {
        $this->referenzPaket = $referenzPaket;

        return $this;
    }

    /**
     * Get groessePaket value
     */
    public function getGroessePaket(): ?string
    {
        return $this->groessePaket;
    }

    /**
     * Set groessePaket value
     */
    public function setGroessePaket(?string $groessePaket = null): self
    {
        $this->groessePaket = $groessePaket;

        return $this;
    }

    /**
     * Get gewichtPaket value
     */
    public function getGewichtPaket(): ?string
    {
        return $this->gewichtPaket;
    }

    /**
     * Set gewichtPaket value
     */
    public function setGewichtPaket(?string $gewichtPaket = null): self
    {
        $this->gewichtPaket = $gewichtPaket;

        return $this;
    }

    /**
     * Get urlVerfolgungPaket value
     */
    public function getUrlVerfolgungPaket(): ?string
    {
        return $this->urlVerfolgungPaket;
    }

    /**
     * Set urlVerfolgungPaket value
     */
    public function setUrlVerfolgungPaket(?string $urlVerfolgungPaket = null): self
    {
        $this->urlVerfolgungPaket = $urlVerfolgungPaket;

        return $this;
    }
}
