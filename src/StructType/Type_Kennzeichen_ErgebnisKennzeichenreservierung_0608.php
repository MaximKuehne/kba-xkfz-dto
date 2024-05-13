<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kennzeichen.ErgebnisKennzeichenreservierung.0608
 * StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kennzeichen_ErgebnisKennzeichenreservierung_0608 extends AbstractStructBase
{
    /**
     * The bestaetigungKennzeichenreservierung
     * @var \THAG\XKfz\StructType\BestaetigungKennzeichenreservierung|null
     */
    public ?\THAG\XKfz\StructType\BestaetigungKennzeichenreservierung $bestaetigungKennzeichenreservierung = null;
    /**
     * Constructor method for Type.Kennzeichen.ErgebnisKennzeichenreservierung.0608
     * @uses Type_Kennzeichen_ErgebnisKennzeichenreservierung_0608::setBestaetigungKennzeichenreservierung()
     * @param \THAG\XKfz\StructType\BestaetigungKennzeichenreservierung $bestaetigungKennzeichenreservierung
     */
    public function __construct(?\THAG\XKfz\StructType\BestaetigungKennzeichenreservierung $bestaetigungKennzeichenreservierung = null)
    {
        $this
            ->setBestaetigungKennzeichenreservierung($bestaetigungKennzeichenreservierung);
    }
    /**
     * Get bestaetigungKennzeichenreservierung value
     * @return \THAG\XKfz\StructType\BestaetigungKennzeichenreservierung|null
     */
    public function getBestaetigungKennzeichenreservierung(): ?\THAG\XKfz\StructType\BestaetigungKennzeichenreservierung
    {
        return $this->bestaetigungKennzeichenreservierung;
    }
    /**
     * Set bestaetigungKennzeichenreservierung value
     * @param \THAG\XKfz\StructType\BestaetigungKennzeichenreservierung $bestaetigungKennzeichenreservierung
     * @return \THAG\XKfz\StructType\Type_Kennzeichen_ErgebnisKennzeichenreservierung_0608
     */
    public function setBestaetigungKennzeichenreservierung(?\THAG\XKfz\StructType\BestaetigungKennzeichenreservierung $bestaetigungKennzeichenreservierung = null): self
    {
        $this->bestaetigungKennzeichenreservierung = $bestaetigungKennzeichenreservierung;
        
        return $this;
    }
}
