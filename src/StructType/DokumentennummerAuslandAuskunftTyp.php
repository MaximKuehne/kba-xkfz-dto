<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DokumentennummerAuslandAuskunftTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class DokumentennummerAuslandAuskunftTyp extends AbstractStructBase
{
    /**
     * The Dokument1Ausland
     * @var string|null
     */
    public ?string $Dokument1Ausland = null;
    /**
     * The Dokument2Ausland
     * @var string|null
     */
    public ?string $Dokument2Ausland = null;
    /**
     * Constructor method for DokumentennummerAuslandAuskunftTyp
     * @uses DokumentennummerAuslandAuskunftTyp::setDokument1Ausland()
     * @uses DokumentennummerAuslandAuskunftTyp::setDokument2Ausland()
     * @param string $dokument1Ausland
     * @param string $dokument2Ausland
     */
    public function __construct(?string $dokument1Ausland = null, ?string $dokument2Ausland = null)
    {
        $this
            ->setDokument1Ausland($dokument1Ausland)
            ->setDokument2Ausland($dokument2Ausland);
    }
    /**
     * Get Dokument1Ausland value
     * @return string|null
     */
    public function getDokument1Ausland(): ?string
    {
        return $this->Dokument1Ausland;
    }
    /**
     * Set Dokument1Ausland value
     * @param string $dokument1Ausland
     * @return \THAG\XKfz\StructType\DokumentennummerAuslandAuskunftTyp
     */
    public function setDokument1Ausland(?string $dokument1Ausland = null): self
    {
        $this->Dokument1Ausland = $dokument1Ausland;
        
        return $this;
    }
    /**
     * Get Dokument2Ausland value
     * @return string|null
     */
    public function getDokument2Ausland(): ?string
    {
        return $this->Dokument2Ausland;
    }
    /**
     * Set Dokument2Ausland value
     * @param string $dokument2Ausland
     * @return \THAG\XKfz\StructType\DokumentennummerAuslandAuskunftTyp
     */
    public function setDokument2Ausland(?string $dokument2Ausland = null): self
    {
        $this->Dokument2Ausland = $dokument2Ausland;
        
        return $this;
    }
}
