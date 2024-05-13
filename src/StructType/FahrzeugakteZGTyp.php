<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FahrzeugakteZGTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FahrzeugakteZGTyp extends AbstractStructBase
{
    /**
     * The IdentifizierungsnummerZFZREintrag
     */
    public ?string $IdentifizierungsnummerZFZREintrag = null;

    /**
     * The Zulassungsabschnitt
     */
    public ?\THAG\XKfz\StructType\ZulassungsabschnittZGTyp $Zulassungsabschnitt = null;

    /**
     * Constructor method for FahrzeugakteZGTyp
     *
     * @uses FahrzeugakteZGTyp::setIdentifizierungsnummerZFZREintrag()
     * @uses FahrzeugakteZGTyp::setZulassungsabschnitt()
     */
    public function __construct(?string $identifizierungsnummerZFZREintrag = null, ?\THAG\XKfz\StructType\ZulassungsabschnittZGTyp $zulassungsabschnitt = null)
    {
        $this
            ->setIdentifizierungsnummerZFZREintrag($identifizierungsnummerZFZREintrag)
            ->setZulassungsabschnitt($zulassungsabschnitt);
    }

    /**
     * Get IdentifizierungsnummerZFZREintrag value
     */
    public function getIdentifizierungsnummerZFZREintrag(): ?string
    {
        return $this->IdentifizierungsnummerZFZREintrag;
    }

    /**
     * Set IdentifizierungsnummerZFZREintrag value
     */
    public function setIdentifizierungsnummerZFZREintrag(?string $identifizierungsnummerZFZREintrag = null): self
    {
        $this->IdentifizierungsnummerZFZREintrag = $identifizierungsnummerZFZREintrag;

        return $this;
    }

    /**
     * Get Zulassungsabschnitt value
     */
    public function getZulassungsabschnitt(): ?\THAG\XKfz\StructType\ZulassungsabschnittZGTyp
    {
        return $this->Zulassungsabschnitt;
    }

    /**
     * Set Zulassungsabschnitt value
     */
    public function setZulassungsabschnitt(?\THAG\XKfz\StructType\ZulassungsabschnittZGTyp $zulassungsabschnitt = null): self
    {
        $this->Zulassungsabschnitt = $zulassungsabschnitt;

        return $this;
    }
}
