<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ReferenzZustaendigkeit StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ReferenzZustaendigkeit extends AbstractStructBase
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
     * The sonstigerAntragsteller
     */
    public ?string $sonstigerAntragsteller = null;

    /**
     * Constructor method for Type.ReferenzZustaendigkeit
     *
     * @uses Type_ReferenzZustaendigkeit::setStrassenverkehrsBehoerde()
     * @uses Type_ReferenzZustaendigkeit::setSonstigerKommunikationspartner()
     * @uses Type_ReferenzZustaendigkeit::setSonstigerAntragsteller()
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
     * Get sonstigerAntragsteller value
     */
    public function getSonstigerAntragsteller(): ?string
    {
        return $this->sonstigerAntragsteller;
    }

    /**
     * Set sonstigerAntragsteller value
     */
    public function setSonstigerAntragsteller(?string $sonstigerAntragsteller = null): self
    {
        $this->sonstigerAntragsteller = $sonstigerAntragsteller;

        return $this;
    }
}
