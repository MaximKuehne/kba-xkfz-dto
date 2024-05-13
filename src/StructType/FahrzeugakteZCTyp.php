<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FahrzeugakteZCTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FahrzeugakteZCTyp extends AbstractStructBase
{
    /**
     * The IdentifizierungsnummerZFZREintrag
     * @var string|null
     */
    public ?string $IdentifizierungsnummerZFZREintrag = null;
    /**
     * The Zulassungsabschnitt
     * @var \THAG\XKfz\StructType\ZulassungsabschnittZCTyp|null
     */
    public ?\THAG\XKfz\StructType\ZulassungsabschnittZCTyp $Zulassungsabschnitt = null;
    /**
     * Constructor method for FahrzeugakteZCTyp
     * @uses FahrzeugakteZCTyp::setIdentifizierungsnummerZFZREintrag()
     * @uses FahrzeugakteZCTyp::setZulassungsabschnitt()
     * @param string $identifizierungsnummerZFZREintrag
     * @param \THAG\XKfz\StructType\ZulassungsabschnittZCTyp $zulassungsabschnitt
     */
    public function __construct(?string $identifizierungsnummerZFZREintrag = null, ?\THAG\XKfz\StructType\ZulassungsabschnittZCTyp $zulassungsabschnitt = null)
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
     * @return \THAG\XKfz\StructType\FahrzeugakteZCTyp
     */
    public function setIdentifizierungsnummerZFZREintrag(?string $identifizierungsnummerZFZREintrag = null): self
    {
        $this->IdentifizierungsnummerZFZREintrag = $identifizierungsnummerZFZREintrag;
        
        return $this;
    }
    /**
     * Get Zulassungsabschnitt value
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZCTyp|null
     */
    public function getZulassungsabschnitt(): ?\THAG\XKfz\StructType\ZulassungsabschnittZCTyp
    {
        return $this->Zulassungsabschnitt;
    }
    /**
     * Set Zulassungsabschnitt value
     * @param \THAG\XKfz\StructType\ZulassungsabschnittZCTyp $zulassungsabschnitt
     * @return \THAG\XKfz\StructType\FahrzeugakteZCTyp
     */
    public function setZulassungsabschnitt(?\THAG\XKfz\StructType\ZulassungsabschnittZCTyp $zulassungsabschnitt = null): self
    {
        $this->Zulassungsabschnitt = $zulassungsabschnitt;
        
        return $this;
    }
}
