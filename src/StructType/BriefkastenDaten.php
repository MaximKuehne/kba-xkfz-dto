<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BriefkastenDaten StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class BriefkastenDaten extends AbstractStructBase
{
    /**
     * The BriefkastenId
     * @var string|null
     */
    public ?string $BriefkastenId = null;
    /**
     * The BriefkastenName
     * @var string|null
     */
    public ?string $BriefkastenName = null;
    /**
     * The IstDefaultBriefkasten
     * @var string|null
     */
    public ?string $IstDefaultBriefkasten = null;
    /**
     * Constructor method for BriefkastenDaten
     * @uses BriefkastenDaten::setBriefkastenId()
     * @uses BriefkastenDaten::setBriefkastenName()
     * @uses BriefkastenDaten::setIstDefaultBriefkasten()
     * @param string $briefkastenId
     * @param string $briefkastenName
     * @param string $istDefaultBriefkasten
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
     * @return string|null
     */
    public function getBriefkastenId(): ?string
    {
        return $this->BriefkastenId;
    }
    /**
     * Set BriefkastenId value
     * @param string $briefkastenId
     * @return \THAG\XKfz\StructType\BriefkastenDaten
     */
    public function setBriefkastenId(?string $briefkastenId = null): self
    {
        $this->BriefkastenId = $briefkastenId;
        
        return $this;
    }
    /**
     * Get BriefkastenName value
     * @return string|null
     */
    public function getBriefkastenName(): ?string
    {
        return $this->BriefkastenName;
    }
    /**
     * Set BriefkastenName value
     * @param string $briefkastenName
     * @return \THAG\XKfz\StructType\BriefkastenDaten
     */
    public function setBriefkastenName(?string $briefkastenName = null): self
    {
        $this->BriefkastenName = $briefkastenName;
        
        return $this;
    }
    /**
     * Get IstDefaultBriefkasten value
     * @return string|null
     */
    public function getIstDefaultBriefkasten(): ?string
    {
        return $this->IstDefaultBriefkasten;
    }
    /**
     * Set IstDefaultBriefkasten value
     * @param string $istDefaultBriefkasten
     * @return \THAG\XKfz\StructType\BriefkastenDaten
     */
    public function setIstDefaultBriefkasten(?string $istDefaultBriefkasten = null): self
    {
        $this->IstDefaultBriefkasten = $istDefaultBriefkasten;
        
        return $this;
    }
}
