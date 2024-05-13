<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BriefkastenDaten StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class BriefkastenDaten extends AbstractStructBase
{
    /**
     * The BriefkastenId
     */
    public ?string $BriefkastenId = null;

    /**
     * The BriefkastenName
     */
    public ?string $BriefkastenName = null;

    /**
     * The IstDefaultBriefkasten
     */
    public ?string $IstDefaultBriefkasten = null;

    /**
     * Constructor method for BriefkastenDaten
     *
     * @uses BriefkastenDaten::setBriefkastenId()
     * @uses BriefkastenDaten::setBriefkastenName()
     * @uses BriefkastenDaten::setIstDefaultBriefkasten()
     */
    public function __construct(?string $briefkastenId = null, ?string $briefkastenName = null, ?string $istDefaultBriefkasten = null)
    {
        $this
            ->setBriefkastenId($briefkastenId)
            ->setBriefkastenName($briefkastenName)
            ->setIstDefaultBriefkasten($istDefaultBriefkasten);
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
     * Get BriefkastenName value
     */
    public function getBriefkastenName(): ?string
    {
        return $this->BriefkastenName;
    }

    /**
     * Set BriefkastenName value
     */
    public function setBriefkastenName(?string $briefkastenName = null): self
    {
        $this->BriefkastenName = $briefkastenName;

        return $this;
    }

    /**
     * Get IstDefaultBriefkasten value
     */
    public function getIstDefaultBriefkasten(): ?string
    {
        return $this->IstDefaultBriefkasten;
    }

    /**
     * Set IstDefaultBriefkasten value
     */
    public function setIstDefaultBriefkasten(?string $istDefaultBriefkasten = null): self
    {
        $this->IstDefaultBriefkasten = $istDefaultBriefkasten;

        return $this;
    }
}
