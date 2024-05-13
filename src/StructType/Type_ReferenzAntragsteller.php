<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ReferenzAntragsteller StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ReferenzAntragsteller extends AbstractStructBase
{
    /**
     * The strassenverkehrsBehoerde
     * @var \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde|null
     */
    public ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $strassenverkehrsBehoerde = null;
    /**
     * The sonstigerKommunikationspartner
     * @var \THAG\XKfz\StructType\Code_Kommunikationspartner|null
     */
    public ?\THAG\XKfz\StructType\Code_Kommunikationspartner $sonstigerKommunikationspartner = null;
    /**
     * The sonstigerAntragsteller
     * @var string|null
     */
    public ?string $sonstigerAntragsteller = null;
    /**
     * Constructor method for Type.ReferenzAntragsteller
     * @uses Type_ReferenzAntragsteller::setStrassenverkehrsBehoerde()
     * @uses Type_ReferenzAntragsteller::setSonstigerKommunikationspartner()
     * @uses Type_ReferenzAntragsteller::setSonstigerAntragsteller()
     * @param \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $strassenverkehrsBehoerde
     * @param \THAG\XKfz\StructType\Code_Kommunikationspartner $sonstigerKommunikationspartner
     * @param string $sonstigerAntragsteller
     */
    public function __construct(?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $strassenverkehrsBehoerde = null, ?\THAG\XKfz\StructType\Code_Kommunikationspartner $sonstigerKommunikationspartner = null, ?string $sonstigerAntragsteller = null)
    {
        $this
            ->setStrassenverkehrsBehoerde($strassenverkehrsBehoerde)
            ->setSonstigerKommunikationspartner($sonstigerKommunikationspartner)
            ->setSonstigerAntragsteller($sonstigerAntragsteller);
    }
    /**
     * Get strassenverkehrsBehoerde value
     * @return \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde|null
     */
    public function getStrassenverkehrsBehoerde(): ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde
    {
        return $this->strassenverkehrsBehoerde;
    }
    /**
     * Set strassenverkehrsBehoerde value
     * @param \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $strassenverkehrsBehoerde
     * @return \THAG\XKfz\StructType\Type_ReferenzAntragsteller
     */
    public function setStrassenverkehrsBehoerde(?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $strassenverkehrsBehoerde = null): self
    {
        $this->strassenverkehrsBehoerde = $strassenverkehrsBehoerde;
        
        return $this;
    }
    /**
     * Get sonstigerKommunikationspartner value
     * @return \THAG\XKfz\StructType\Code_Kommunikationspartner|null
     */
    public function getSonstigerKommunikationspartner(): ?\THAG\XKfz\StructType\Code_Kommunikationspartner
    {
        return $this->sonstigerKommunikationspartner;
    }
    /**
     * Set sonstigerKommunikationspartner value
     * @param \THAG\XKfz\StructType\Code_Kommunikationspartner $sonstigerKommunikationspartner
     * @return \THAG\XKfz\StructType\Type_ReferenzAntragsteller
     */
    public function setSonstigerKommunikationspartner(?\THAG\XKfz\StructType\Code_Kommunikationspartner $sonstigerKommunikationspartner = null): self
    {
        $this->sonstigerKommunikationspartner = $sonstigerKommunikationspartner;
        
        return $this;
    }
    /**
     * Get sonstigerAntragsteller value
     * @return string|null
     */
    public function getSonstigerAntragsteller(): ?string
    {
        return $this->sonstigerAntragsteller;
    }
    /**
     * Set sonstigerAntragsteller value
     * @param string $sonstigerAntragsteller
     * @return \THAG\XKfz\StructType\Type_ReferenzAntragsteller
     */
    public function setSonstigerAntragsteller(?string $sonstigerAntragsteller = null): self
    {
        $this->sonstigerAntragsteller = $sonstigerAntragsteller;
        
        return $this;
    }
}
