<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kommunikationspartner StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kommunikationspartner extends AbstractStructBase
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
     * The kbaKommunikationspartnerschluessel
     * @var string|null
     */
    public ?string $kbaKommunikationspartnerschluessel = null;
    /**
     * Constructor method for Type.Kommunikationspartner
     * @uses Type_Kommunikationspartner::setStrassenverkehrsBehoerde()
     * @uses Type_Kommunikationspartner::setSonstigerKommunikationspartner()
     * @uses Type_Kommunikationspartner::setKbaKommunikationspartnerschluessel()
     * @param \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $strassenverkehrsBehoerde
     * @param \THAG\XKfz\StructType\Code_Kommunikationspartner $sonstigerKommunikationspartner
     * @param string $kbaKommunikationspartnerschluessel
     */
    public function __construct(?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $strassenverkehrsBehoerde = null, ?\THAG\XKfz\StructType\Code_Kommunikationspartner $sonstigerKommunikationspartner = null, ?string $kbaKommunikationspartnerschluessel = null)
    {
        $this
            ->setStrassenverkehrsBehoerde($strassenverkehrsBehoerde)
            ->setSonstigerKommunikationspartner($sonstigerKommunikationspartner)
            ->setKbaKommunikationspartnerschluessel($kbaKommunikationspartnerschluessel);
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
     * @return \THAG\XKfz\StructType\Type_Kommunikationspartner
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
     * @return \THAG\XKfz\StructType\Type_Kommunikationspartner
     */
    public function setSonstigerKommunikationspartner(?\THAG\XKfz\StructType\Code_Kommunikationspartner $sonstigerKommunikationspartner = null): self
    {
        $this->sonstigerKommunikationspartner = $sonstigerKommunikationspartner;
        
        return $this;
    }
    /**
     * Get kbaKommunikationspartnerschluessel value
     * @return string|null
     */
    public function getKbaKommunikationspartnerschluessel(): ?string
    {
        return $this->kbaKommunikationspartnerschluessel;
    }
    /**
     * Set kbaKommunikationspartnerschluessel value
     * @param string $kbaKommunikationspartnerschluessel
     * @return \THAG\XKfz\StructType\Type_Kommunikationspartner
     */
    public function setKbaKommunikationspartnerschluessel(?string $kbaKommunikationspartnerschluessel = null): self
    {
        $this->kbaKommunikationspartnerschluessel = $kbaKommunikationspartnerschluessel;
        
        return $this;
    }
}
