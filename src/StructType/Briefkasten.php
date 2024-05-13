<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Briefkasten StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Briefkasten extends AbstractStructBase
{
    /**
     * The Zeitstempel
     */
    public ?string $Zeitstempel = null;

    /**
     * The LoginToken
     */
    public ?string $LoginToken = null;

    /**
     * The BriefkastenId
     */
    public ?string $BriefkastenId = null;

    /**
     * The BriefkastenIdAnfrage
     */
    public ?string $BriefkastenIdAnfrage = null;

    /**
     * The BriefkastenIdAntwort
     */
    public ?\THAG\XKfz\StructType\BriefkastenIdAntwort $BriefkastenIdAntwort = null;

    /**
     * The BriefkastenAnfrage
     */
    public ?\THAG\XKfz\StructType\BriefkastenAnfrage $BriefkastenAnfrage = null;

    /**
     * The BriefkastenAntwort
     */
    public ?\THAG\XKfz\StructType\BriefkastenAntwort $BriefkastenAntwort = null;

    /**
     * The BriefkastenAbruf
     */
    public ?\THAG\XKfz\StructType\BriefkastenAbruf $BriefkastenAbruf = null;

    /**
     * The BriefkastenAbrufAntwort
     */
    public ?\THAG\XKfz\StructType\BriefkastenAbrufAntwort $BriefkastenAbrufAntwort = null;

    /**
     * The BriefkastenLeeren
     */
    public ?\THAG\XKfz\StructType\BriefkastenLeeren $BriefkastenLeeren = null;

    /**
     * The BriefkastenGeleert
     */
    public ?\THAG\XKfz\StructType\BriefkastenGeleert $BriefkastenGeleert = null;

    /**
     * Constructor method for Briefkasten
     *
     * @uses Briefkasten::setZeitstempel()
     * @uses Briefkasten::setLoginToken()
     * @uses Briefkasten::setBriefkastenId()
     * @uses Briefkasten::setBriefkastenIdAnfrage()
     * @uses Briefkasten::setBriefkastenIdAntwort()
     * @uses Briefkasten::setBriefkastenAnfrage()
     * @uses Briefkasten::setBriefkastenAntwort()
     * @uses Briefkasten::setBriefkastenAbruf()
     * @uses Briefkasten::setBriefkastenAbrufAntwort()
     * @uses Briefkasten::setBriefkastenLeeren()
     * @uses Briefkasten::setBriefkastenGeleert()
     */
    public function __construct(?string $zeitstempel = null, ?string $loginToken = null, ?string $briefkastenId = null, ?string $briefkastenIdAnfrage = null, ?\THAG\XKfz\StructType\BriefkastenIdAntwort $briefkastenIdAntwort = null, ?\THAG\XKfz\StructType\BriefkastenAnfrage $briefkastenAnfrage = null, ?\THAG\XKfz\StructType\BriefkastenAntwort $briefkastenAntwort = null, ?\THAG\XKfz\StructType\BriefkastenAbruf $briefkastenAbruf = null, ?\THAG\XKfz\StructType\BriefkastenAbrufAntwort $briefkastenAbrufAntwort = null, ?\THAG\XKfz\StructType\BriefkastenLeeren $briefkastenLeeren = null, ?\THAG\XKfz\StructType\BriefkastenGeleert $briefkastenGeleert = null)
    {
        $this
            ->setZeitstempel($zeitstempel)
            ->setLoginToken($loginToken)
            ->setBriefkastenId($briefkastenId)
            ->setBriefkastenIdAnfrage($briefkastenIdAnfrage)
            ->setBriefkastenIdAntwort($briefkastenIdAntwort)
            ->setBriefkastenAnfrage($briefkastenAnfrage)
            ->setBriefkastenAntwort($briefkastenAntwort)
            ->setBriefkastenAbruf($briefkastenAbruf)
            ->setBriefkastenAbrufAntwort($briefkastenAbrufAntwort)
            ->setBriefkastenLeeren($briefkastenLeeren)
            ->setBriefkastenGeleert($briefkastenGeleert);
    }

    /**
     * Get Zeitstempel value
     */
    public function getZeitstempel(): ?string
    {
        return $this->Zeitstempel;
    }

    /**
     * Set Zeitstempel value
     */
    public function setZeitstempel(?string $zeitstempel = null): self
    {
        $this->Zeitstempel = $zeitstempel;

        return $this;
    }

    /**
     * Get LoginToken value
     */
    public function getLoginToken(): ?string
    {
        return $this->LoginToken;
    }

    /**
     * Set LoginToken value
     */
    public function setLoginToken(?string $loginToken = null): self
    {
        $this->LoginToken = $loginToken;

        return $this;
    }

    /**
     * Get BriefkastenId value
     */
    public function getBriefkastenId(): ?string
    {
        return $this->BriefkastenId;
    }

    /**
     * Set BriefkastenId value
     */
    public function setBriefkastenId(?string $briefkastenId = null): self
    {
        $this->BriefkastenId = $briefkastenId;

        return $this;
    }

    /**
     * Get BriefkastenIdAnfrage value
     */
    public function getBriefkastenIdAnfrage(): ?string
    {
        return $this->BriefkastenIdAnfrage;
    }

    /**
     * Set BriefkastenIdAnfrage value
     */
    public function setBriefkastenIdAnfrage(?string $briefkastenIdAnfrage = null): self
    {
        $this->BriefkastenIdAnfrage = $briefkastenIdAnfrage;

        return $this;
    }

    /**
     * Get BriefkastenIdAntwort value
     */
    public function getBriefkastenIdAntwort(): ?\THAG\XKfz\StructType\BriefkastenIdAntwort
    {
        return $this->BriefkastenIdAntwort;
    }

    /**
     * Set BriefkastenIdAntwort value
     */
    public function setBriefkastenIdAntwort(?\THAG\XKfz\StructType\BriefkastenIdAntwort $briefkastenIdAntwort = null): self
    {
        $this->BriefkastenIdAntwort = $briefkastenIdAntwort;

        return $this;
    }

    /**
     * Get BriefkastenAnfrage value
     */
    public function getBriefkastenAnfrage(): ?\THAG\XKfz\StructType\BriefkastenAnfrage
    {
        return $this->BriefkastenAnfrage;
    }

    /**
     * Set BriefkastenAnfrage value
     */
    public function setBriefkastenAnfrage(?\THAG\XKfz\StructType\BriefkastenAnfrage $briefkastenAnfrage = null): self
    {
        $this->BriefkastenAnfrage = $briefkastenAnfrage;

        return $this;
    }

    /**
     * Get BriefkastenAntwort value
     */
    public function getBriefkastenAntwort(): ?\THAG\XKfz\StructType\BriefkastenAntwort
    {
        return $this->BriefkastenAntwort;
    }

    /**
     * Set BriefkastenAntwort value
     */
    public function setBriefkastenAntwort(?\THAG\XKfz\StructType\BriefkastenAntwort $briefkastenAntwort = null): self
    {
        $this->BriefkastenAntwort = $briefkastenAntwort;

        return $this;
    }

    /**
     * Get BriefkastenAbruf value
     */
    public function getBriefkastenAbruf(): ?\THAG\XKfz\StructType\BriefkastenAbruf
    {
        return $this->BriefkastenAbruf;
    }

    /**
     * Set BriefkastenAbruf value
     */
    public function setBriefkastenAbruf(?\THAG\XKfz\StructType\BriefkastenAbruf $briefkastenAbruf = null): self
    {
        $this->BriefkastenAbruf = $briefkastenAbruf;

        return $this;
    }

    /**
     * Get BriefkastenAbrufAntwort value
     */
    public function getBriefkastenAbrufAntwort(): ?\THAG\XKfz\StructType\BriefkastenAbrufAntwort
    {
        return $this->BriefkastenAbrufAntwort;
    }

    /**
     * Set BriefkastenAbrufAntwort value
     */
    public function setBriefkastenAbrufAntwort(?\THAG\XKfz\StructType\BriefkastenAbrufAntwort $briefkastenAbrufAntwort = null): self
    {
        $this->BriefkastenAbrufAntwort = $briefkastenAbrufAntwort;

        return $this;
    }

    /**
     * Get BriefkastenLeeren value
     */
    public function getBriefkastenLeeren(): ?\THAG\XKfz\StructType\BriefkastenLeeren
    {
        return $this->BriefkastenLeeren;
    }

    /**
     * Set BriefkastenLeeren value
     */
    public function setBriefkastenLeeren(?\THAG\XKfz\StructType\BriefkastenLeeren $briefkastenLeeren = null): self
    {
        $this->BriefkastenLeeren = $briefkastenLeeren;

        return $this;
    }

    /**
     * Get BriefkastenGeleert value
     */
    public function getBriefkastenGeleert(): ?\THAG\XKfz\StructType\BriefkastenGeleert
    {
        return $this->BriefkastenGeleert;
    }

    /**
     * Set BriefkastenGeleert value
     */
    public function setBriefkastenGeleert(?\THAG\XKfz\StructType\BriefkastenGeleert $briefkastenGeleert = null): self
    {
        $this->BriefkastenGeleert = $briefkastenGeleert;

        return $this;
    }
}
