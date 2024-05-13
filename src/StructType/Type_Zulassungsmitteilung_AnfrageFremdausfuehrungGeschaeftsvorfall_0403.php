<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Type.Zulassungsmitteilung.AnfrageFremdausfuehrungGeschaeftsvorfall.0403
 * StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Zulassungsmitteilung_AnfrageFremdausfuehrungGeschaeftsvorfall_0403 extends AbstractStructBase
{
    /**
     * The fremdausfuehrungGeschaeftsvorfall
     * @var \THAG\XKfz\StructType\FremdausfuehrungGeschaeftsvorfall|null
     */
    public ?\THAG\XKfz\StructType\FremdausfuehrungGeschaeftsvorfall $fremdausfuehrungGeschaeftsvorfall = null;
    /**
     * Constructor method for
     * Type.Zulassungsmitteilung.AnfrageFremdausfuehrungGeschaeftsvorfall.0403
     * @uses Type_Zulassungsmitteilung_AnfrageFremdausfuehrungGeschaeftsvorfall_0403::setFremdausfuehrungGeschaeftsvorfall()
     * @param \THAG\XKfz\StructType\FremdausfuehrungGeschaeftsvorfall $fremdausfuehrungGeschaeftsvorfall
     */
    public function __construct(?\THAG\XKfz\StructType\FremdausfuehrungGeschaeftsvorfall $fremdausfuehrungGeschaeftsvorfall = null)
    {
        $this
            ->setFremdausfuehrungGeschaeftsvorfall($fremdausfuehrungGeschaeftsvorfall);
    }
    /**
     * Get fremdausfuehrungGeschaeftsvorfall value
     * @return \THAG\XKfz\StructType\FremdausfuehrungGeschaeftsvorfall|null
     */
    public function getFremdausfuehrungGeschaeftsvorfall(): ?\THAG\XKfz\StructType\FremdausfuehrungGeschaeftsvorfall
    {
        return $this->fremdausfuehrungGeschaeftsvorfall;
    }
    /**
     * Set fremdausfuehrungGeschaeftsvorfall value
     * @param \THAG\XKfz\StructType\FremdausfuehrungGeschaeftsvorfall $fremdausfuehrungGeschaeftsvorfall
     * @return \THAG\XKfz\StructType\Type_Zulassungsmitteilung_AnfrageFremdausfuehrungGeschaeftsvorfall_0403
     */
    public function setFremdausfuehrungGeschaeftsvorfall(?\THAG\XKfz\StructType\FremdausfuehrungGeschaeftsvorfall $fremdausfuehrungGeschaeftsvorfall = null): self
    {
        $this->fremdausfuehrungGeschaeftsvorfall = $fremdausfuehrungGeschaeftsvorfall;
        
        return $this;
    }
}
