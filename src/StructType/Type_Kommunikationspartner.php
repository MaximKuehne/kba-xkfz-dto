<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kommunikationspartner StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kommunikationspartner extends AbstractStructBase
{
    /**
     * The strassenverkehrsBehoerde
     */
    public ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $strassenverkehrsBehoerde = null;

    /**
     * The sonstigerKommunikationspartner
     */
    public ?\THAG\XKfz\StructType\Code_Kommunikationspartner $sonstigerKommunikationspartner = null;

    /**
     * The kbaKommunikationspartnerschluessel
     */
    public ?string $kbaKommunikationspartnerschluessel = null;

    /**
     * Constructor method for Type.Kommunikationspartner
     *
     * @uses Type_Kommunikationspartner::setStrassenverkehrsBehoerde()
     * @uses Type_Kommunikationspartner::setSonstigerKommunikationspartner()
     * @uses Type_Kommunikationspartner::setKbaKommunikationspartnerschluessel()
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
     */
    public function getStrassenverkehrsBehoerde(): ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde
    {
        return $this->strassenverkehrsBehoerde;
    }

    /**
     * Set strassenverkehrsBehoerde value
     */
    public function setStrassenverkehrsBehoerde(?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $strassenverkehrsBehoerde = null): self
    {
        $this->strassenverkehrsBehoerde = $strassenverkehrsBehoerde;

        return $this;
    }

    /**
     * Get sonstigerKommunikationspartner value
     */
    public function getSonstigerKommunikationspartner(): ?\THAG\XKfz\StructType\Code_Kommunikationspartner
    {
        return $this->sonstigerKommunikationspartner;
    }

    /**
     * Set sonstigerKommunikationspartner value
     */
    public function setSonstigerKommunikationspartner(?\THAG\XKfz\StructType\Code_Kommunikationspartner $sonstigerKommunikationspartner = null): self
    {
        $this->sonstigerKommunikationspartner = $sonstigerKommunikationspartner;

        return $this;
    }

    /**
     * Get kbaKommunikationspartnerschluessel value
     */
    public function getKbaKommunikationspartnerschluessel(): ?string
    {
        return $this->kbaKommunikationspartnerschluessel;
    }

    /**
     * Set kbaKommunikationspartnerschluessel value
     */
    public function setKbaKommunikationspartnerschluessel(?string $kbaKommunikationspartnerschluessel = null): self
    {
        $this->kbaKommunikationspartnerschluessel = $kbaKommunikationspartnerschluessel;

        return $this;
    }
}
