<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Briefkasten StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Briefkasten extends AbstractStructBase
{
    /**
     * The Zeitstempel
     * @var string|null
     */
    public ?string $Zeitstempel = null;
    /**
     * The LoginToken
     * @var string|null
     */
    public ?string $LoginToken = null;
    /**
     * The BriefkastenId
     * @var string|null
     */
    public ?string $BriefkastenId = null;
    /**
     * The BriefkastenIdAnfrage
     * @var string|null
     */
    public ?string $BriefkastenIdAnfrage = null;
    /**
     * The BriefkastenIdAntwort
     * @var \THAG\XKfz\StructType\BriefkastenIdAntwort|null
     */
    public ?\THAG\XKfz\StructType\BriefkastenIdAntwort $BriefkastenIdAntwort = null;
    /**
     * The BriefkastenAnfrage
     * @var \THAG\XKfz\StructType\BriefkastenAnfrage|null
     */
    public ?\THAG\XKfz\StructType\BriefkastenAnfrage $BriefkastenAnfrage = null;
    /**
     * The BriefkastenAntwort
     * @var \THAG\XKfz\StructType\BriefkastenAntwort|null
     */
    public ?\THAG\XKfz\StructType\BriefkastenAntwort $BriefkastenAntwort = null;
    /**
     * The BriefkastenAbruf
     * @var \THAG\XKfz\StructType\BriefkastenAbruf|null
     */
    public ?\THAG\XKfz\StructType\BriefkastenAbruf $BriefkastenAbruf = null;
    /**
     * The BriefkastenAbrufAntwort
     * @var \THAG\XKfz\StructType\BriefkastenAbrufAntwort|null
     */
    public ?\THAG\XKfz\StructType\BriefkastenAbrufAntwort $BriefkastenAbrufAntwort = null;
    /**
     * The BriefkastenLeeren
     * @var \THAG\XKfz\StructType\BriefkastenLeeren|null
     */
    public ?\THAG\XKfz\StructType\BriefkastenLeeren $BriefkastenLeeren = null;
    /**
     * The BriefkastenGeleert
     * @var \THAG\XKfz\StructType\BriefkastenGeleert|null
     */
    public ?\THAG\XKfz\StructType\BriefkastenGeleert $BriefkastenGeleert = null;
    /**
     * Constructor method for Briefkasten
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
     * @param string $zeitstempel
     * @param string $loginToken
     * @param string $briefkastenId
     * @param string $briefkastenIdAnfrage
     * @param \THAG\XKfz\StructType\BriefkastenIdAntwort $briefkastenIdAntwort
     * @param \THAG\XKfz\StructType\BriefkastenAnfrage $briefkastenAnfrage
     * @param \THAG\XKfz\StructType\BriefkastenAntwort $briefkastenAntwort
     * @param \THAG\XKfz\StructType\BriefkastenAbruf $briefkastenAbruf
     * @param \THAG\XKfz\StructType\BriefkastenAbrufAntwort $briefkastenAbrufAntwort
     * @param \THAG\XKfz\StructType\BriefkastenLeeren $briefkastenLeeren
     * @param \THAG\XKfz\StructType\BriefkastenGeleert $briefkastenGeleert
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
     * @return string|null
     */
    public function getZeitstempel(): ?string
    {
        return $this->Zeitstempel;
    }
    /**
     * Set Zeitstempel value
     * @param string $zeitstempel
     * @return \THAG\XKfz\StructType\Briefkasten
     */
    public function setZeitstempel(?string $zeitstempel = null): self
    {
        $this->Zeitstempel = $zeitstempel;
        
        return $this;
    }
    /**
     * Get LoginToken value
     * @return string|null
     */
    public function getLoginToken(): ?string
    {
        return $this->LoginToken;
    }
    /**
     * Set LoginToken value
     * @param string $loginToken
     * @return \THAG\XKfz\StructType\Briefkasten
     */
    public function setLoginToken(?string $loginToken = null): self
    {
        $this->LoginToken = $loginToken;
        
        return $this;
    }
    /**
     * Get BriefkastenId value
     * @return string|null
     */
    public function getBriefkastenId(): ?string
    {
        return $this->BriefkastenId;
    }
    /**
     * Set BriefkastenId value
     * @param string $briefkastenId
     * @return \THAG\XKfz\StructType\Briefkasten
     */
    public function setBriefkastenId(?string $briefkastenId = null): self
    {
        $this->BriefkastenId = $briefkastenId;
        
        return $this;
    }
    /**
     * Get BriefkastenIdAnfrage value
     * @return string|null
     */
    public function getBriefkastenIdAnfrage(): ?string
    {
        return $this->BriefkastenIdAnfrage;
    }
    /**
     * Set BriefkastenIdAnfrage value
     * @param string $briefkastenIdAnfrage
     * @return \THAG\XKfz\StructType\Briefkasten
     */
    public function setBriefkastenIdAnfrage(?string $briefkastenIdAnfrage = null): self
    {
        $this->BriefkastenIdAnfrage = $briefkastenIdAnfrage;
        
        return $this;
    }
    /**
     * Get BriefkastenIdAntwort value
     * @return \THAG\XKfz\StructType\BriefkastenIdAntwort|null
     */
    public function getBriefkastenIdAntwort(): ?\THAG\XKfz\StructType\BriefkastenIdAntwort
    {
        return $this->BriefkastenIdAntwort;
    }
    /**
     * Set BriefkastenIdAntwort value
     * @param \THAG\XKfz\StructType\BriefkastenIdAntwort $briefkastenIdAntwort
     * @return \THAG\XKfz\StructType\Briefkasten
     */
    public function setBriefkastenIdAntwort(?\THAG\XKfz\StructType\BriefkastenIdAntwort $briefkastenIdAntwort = null): self
    {
        $this->BriefkastenIdAntwort = $briefkastenIdAntwort;
        
        return $this;
    }
    /**
     * Get BriefkastenAnfrage value
     * @return \THAG\XKfz\StructType\BriefkastenAnfrage|null
     */
    public function getBriefkastenAnfrage(): ?\THAG\XKfz\StructType\BriefkastenAnfrage
    {
        return $this->BriefkastenAnfrage;
    }
    /**
     * Set BriefkastenAnfrage value
     * @param \THAG\XKfz\StructType\BriefkastenAnfrage $briefkastenAnfrage
     * @return \THAG\XKfz\StructType\Briefkasten
     */
    public function setBriefkastenAnfrage(?\THAG\XKfz\StructType\BriefkastenAnfrage $briefkastenAnfrage = null): self
    {
        $this->BriefkastenAnfrage = $briefkastenAnfrage;
        
        return $this;
    }
    /**
     * Get BriefkastenAntwort value
     * @return \THAG\XKfz\StructType\BriefkastenAntwort|null
     */
    public function getBriefkastenAntwort(): ?\THAG\XKfz\StructType\BriefkastenAntwort
    {
        return $this->BriefkastenAntwort;
    }
    /**
     * Set BriefkastenAntwort value
     * @param \THAG\XKfz\StructType\BriefkastenAntwort $briefkastenAntwort
     * @return \THAG\XKfz\StructType\Briefkasten
     */
    public function setBriefkastenAntwort(?\THAG\XKfz\StructType\BriefkastenAntwort $briefkastenAntwort = null): self
    {
        $this->BriefkastenAntwort = $briefkastenAntwort;
        
        return $this;
    }
    /**
     * Get BriefkastenAbruf value
     * @return \THAG\XKfz\StructType\BriefkastenAbruf|null
     */
    public function getBriefkastenAbruf(): ?\THAG\XKfz\StructType\BriefkastenAbruf
    {
        return $this->BriefkastenAbruf;
    }
    /**
     * Set BriefkastenAbruf value
     * @param \THAG\XKfz\StructType\BriefkastenAbruf $briefkastenAbruf
     * @return \THAG\XKfz\StructType\Briefkasten
     */
    public function setBriefkastenAbruf(?\THAG\XKfz\StructType\BriefkastenAbruf $briefkastenAbruf = null): self
    {
        $this->BriefkastenAbruf = $briefkastenAbruf;
        
        return $this;
    }
    /**
     * Get BriefkastenAbrufAntwort value
     * @return \THAG\XKfz\StructType\BriefkastenAbrufAntwort|null
     */
    public function getBriefkastenAbrufAntwort(): ?\THAG\XKfz\StructType\BriefkastenAbrufAntwort
    {
        return $this->BriefkastenAbrufAntwort;
    }
    /**
     * Set BriefkastenAbrufAntwort value
     * @param \THAG\XKfz\StructType\BriefkastenAbrufAntwort $briefkastenAbrufAntwort
     * @return \THAG\XKfz\StructType\Briefkasten
     */
    public function setBriefkastenAbrufAntwort(?\THAG\XKfz\StructType\BriefkastenAbrufAntwort $briefkastenAbrufAntwort = null): self
    {
        $this->BriefkastenAbrufAntwort = $briefkastenAbrufAntwort;
        
        return $this;
    }
    /**
     * Get BriefkastenLeeren value
     * @return \THAG\XKfz\StructType\BriefkastenLeeren|null
     */
    public function getBriefkastenLeeren(): ?\THAG\XKfz\StructType\BriefkastenLeeren
    {
        return $this->BriefkastenLeeren;
    }
    /**
     * Set BriefkastenLeeren value
     * @param \THAG\XKfz\StructType\BriefkastenLeeren $briefkastenLeeren
     * @return \THAG\XKfz\StructType\Briefkasten
     */
    public function setBriefkastenLeeren(?\THAG\XKfz\StructType\BriefkastenLeeren $briefkastenLeeren = null): self
    {
        $this->BriefkastenLeeren = $briefkastenLeeren;
        
        return $this;
    }
    /**
     * Get BriefkastenGeleert value
     * @return \THAG\XKfz\StructType\BriefkastenGeleert|null
     */
    public function getBriefkastenGeleert(): ?\THAG\XKfz\StructType\BriefkastenGeleert
    {
        return $this->BriefkastenGeleert;
    }
    /**
     * Set BriefkastenGeleert value
     * @param \THAG\XKfz\StructType\BriefkastenGeleert $briefkastenGeleert
     * @return \THAG\XKfz\StructType\Briefkasten
     */
    public function setBriefkastenGeleert(?\THAG\XKfz\StructType\BriefkastenGeleert $briefkastenGeleert = null): self
    {
        $this->BriefkastenGeleert = $briefkastenGeleert;
        
        return $this;
    }
}
