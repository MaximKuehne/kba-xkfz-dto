<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ITD_GDV_060.ListeAuftragStatus.VkzLogistikDaten StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ITD_GDV_060_ListeAuftragStatus_VkzLogistikDaten extends AbstractStructBase
{
    /**
     * The Buchstabenblock
     * @var string|null
     */
    public ?string $Buchstabenblock = null;
    /**
     * The Ziffern
     * @var string|null
     */
    public ?string $Ziffern = null;
    /**
     * The VkeNummer
     * @var string|null
     */
    public ?string $VkeNummer = null;
    /**
     * The VpeNummer
     * @var string|null
     */
    public ?string $VpeNummer = null;
    /**
     * Constructor method for ITD_GDV_060.ListeAuftragStatus.VkzLogistikDaten
     * @uses ITD_GDV_060_ListeAuftragStatus_VkzLogistikDaten::setBuchstabenblock()
     * @uses ITD_GDV_060_ListeAuftragStatus_VkzLogistikDaten::setZiffern()
     * @uses ITD_GDV_060_ListeAuftragStatus_VkzLogistikDaten::setVkeNummer()
     * @uses ITD_GDV_060_ListeAuftragStatus_VkzLogistikDaten::setVpeNummer()
     * @param string $buchstabenblock
     * @param string $ziffern
     * @param string $vkeNummer
     * @param string $vpeNummer
     */
    public function __construct(?string $buchstabenblock = null, ?string $ziffern = null, ?string $vkeNummer = null, ?string $vpeNummer = null)
    {
        $this
            ->setBuchstabenblock($buchstabenblock)
            ->setZiffern($ziffern)
            ->setVkeNummer($vkeNummer)
            ->setVpeNummer($vpeNummer);
    }
    /**
     * Get Buchstabenblock value
     * @return string|null
     */
    public function getBuchstabenblock(): ?string
    {
        return $this->Buchstabenblock;
    }
    /**
     * Set Buchstabenblock value
     * @param string $buchstabenblock
     * @return \THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus_VkzLogistikDaten
     */
    public function setBuchstabenblock(?string $buchstabenblock = null): self
    {
        $this->Buchstabenblock = $buchstabenblock;
        
        return $this;
    }
    /**
     * Get Ziffern value
     * @return string|null
     */
    public function getZiffern(): ?string
    {
        return $this->Ziffern;
    }
    /**
     * Set Ziffern value
     * @param string $ziffern
     * @return \THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus_VkzLogistikDaten
     */
    public function setZiffern(?string $ziffern = null): self
    {
        $this->Ziffern = $ziffern;
        
        return $this;
    }
    /**
     * Get VkeNummer value
     * @return string|null
     */
    public function getVkeNummer(): ?string
    {
        return $this->VkeNummer;
    }
    /**
     * Set VkeNummer value
     * @param string $vkeNummer
     * @return \THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus_VkzLogistikDaten
     */
    public function setVkeNummer(?string $vkeNummer = null): self
    {
        $this->VkeNummer = $vkeNummer;
        
        return $this;
    }
    /**
     * Get VpeNummer value
     * @return string|null
     */
    public function getVpeNummer(): ?string
    {
        return $this->VpeNummer;
    }
    /**
     * Set VpeNummer value
     * @param string $vpeNummer
     * @return \THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus_VkzLogistikDaten
     */
    public function setVpeNummer(?string $vpeNummer = null): self
    {
        $this->VpeNummer = $vpeNummer;
        
        return $this;
    }
}
