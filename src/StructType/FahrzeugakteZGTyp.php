<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FahrzeugakteZGTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FahrzeugakteZGTyp extends AbstractStructBase
{
    /**
     * The IdentifizierungsnummerZFZREintrag
     * @var string|null
     */
    public ?string $IdentifizierungsnummerZFZREintrag = null;
    /**
     * The Zulassungsabschnitt
     * @var \THAG\XKfz\StructType\ZulassungsabschnittZGTyp|null
     */
    public ?\THAG\XKfz\StructType\ZulassungsabschnittZGTyp $Zulassungsabschnitt = null;
    /**
     * Constructor method for FahrzeugakteZGTyp
     * @uses FahrzeugakteZGTyp::setIdentifizierungsnummerZFZREintrag()
     * @uses FahrzeugakteZGTyp::setZulassungsabschnitt()
     * @param string $identifizierungsnummerZFZREintrag
     * @param \THAG\XKfz\StructType\ZulassungsabschnittZGTyp $zulassungsabschnitt
     */
    public function __construct(?string $identifizierungsnummerZFZREintrag = null, ?\THAG\XKfz\StructType\ZulassungsabschnittZGTyp $zulassungsabschnitt = null)
    {
        $this
            ->setIdentifizierungsnummerZFZREintrag($identifizierungsnummerZFZREintrag)
            ->setZulassungsabschnitt($zulassungsabschnitt);
    }
    /**
     * Get IdentifizierungsnummerZFZREintrag value
     * @return string|null
     */
    public function getIdentifizierungsnummerZFZREintrag(): ?string
    {
        return $this->IdentifizierungsnummerZFZREintrag;
    }
    /**
     * Set IdentifizierungsnummerZFZREintrag value
     * @param string $identifizierungsnummerZFZREintrag
     * @return \THAG\XKfz\StructType\FahrzeugakteZGTyp
     */
    public function setIdentifizierungsnummerZFZREintrag(?string $identifizierungsnummerZFZREintrag = null): self
    {
        $this->IdentifizierungsnummerZFZREintrag = $identifizierungsnummerZFZREintrag;
        
        return $this;
    }
    /**
     * Get Zulassungsabschnitt value
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZGTyp|null
     */
    public function getZulassungsabschnitt(): ?\THAG\XKfz\StructType\ZulassungsabschnittZGTyp
    {
        return $this->Zulassungsabschnitt;
    }
    /**
     * Set Zulassungsabschnitt value
     * @param \THAG\XKfz\StructType\ZulassungsabschnittZGTyp $zulassungsabschnitt
     * @return \THAG\XKfz\StructType\FahrzeugakteZGTyp
     */
    public function setZulassungsabschnitt(?\THAG\XKfz\StructType\ZulassungsabschnittZGTyp $zulassungsabschnitt = null): self
    {
        $this->Zulassungsabschnitt = $zulassungsabschnitt;
        
        return $this;
    }
}
