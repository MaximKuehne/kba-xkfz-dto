<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FahrzeugakteZWTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FahrzeugakteZWTyp extends AbstractStructBase
{
    /**
     * The IdentifizierungsnummerZFZREintrag
     * @var string|null
     */
    public ?string $IdentifizierungsnummerZFZREintrag = null;
    /**
     * The Zulassungsabschnitt
     * @var \THAG\XKfz\StructType\ZulassungsabschnittZWTyp|null
     */
    public ?\THAG\XKfz\StructType\ZulassungsabschnittZWTyp $Zulassungsabschnitt = null;
    /**
     * Constructor method for FahrzeugakteZWTyp
     * @uses FahrzeugakteZWTyp::setIdentifizierungsnummerZFZREintrag()
     * @uses FahrzeugakteZWTyp::setZulassungsabschnitt()
     * @param string $identifizierungsnummerZFZREintrag
     * @param \THAG\XKfz\StructType\ZulassungsabschnittZWTyp $zulassungsabschnitt
     */
    public function __construct(?string $identifizierungsnummerZFZREintrag = null, ?\THAG\XKfz\StructType\ZulassungsabschnittZWTyp $zulassungsabschnitt = null)
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
     * @return \THAG\XKfz\StructType\FahrzeugakteZWTyp
     */
    public function setIdentifizierungsnummerZFZREintrag(?string $identifizierungsnummerZFZREintrag = null): self
    {
        $this->IdentifizierungsnummerZFZREintrag = $identifizierungsnummerZFZREintrag;
        
        return $this;
    }
    /**
     * Get Zulassungsabschnitt value
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZWTyp|null
     */
    public function getZulassungsabschnitt(): ?\THAG\XKfz\StructType\ZulassungsabschnittZWTyp
    {
        return $this->Zulassungsabschnitt;
    }
    /**
     * Set Zulassungsabschnitt value
     * @param \THAG\XKfz\StructType\ZulassungsabschnittZWTyp $zulassungsabschnitt
     * @return \THAG\XKfz\StructType\FahrzeugakteZWTyp
     */
    public function setZulassungsabschnitt(?\THAG\XKfz\StructType\ZulassungsabschnittZWTyp $zulassungsabschnitt = null): self
    {
        $this->Zulassungsabschnitt = $zulassungsabschnitt;
        
        return $this;
    }
}
