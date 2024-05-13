<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ProzessschrittName StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ProzessschrittName extends AbstractStructBase
{
    /**
     * The code
     */
    public ?\THAG\XKfz\StructType\Code_ProzessschrittName $code = null;

    /**
     * The nichtGelisteterWert
     */
    public ?string $nichtGelisteterWert = null;

    /**
     * Constructor method for Type.ProzessschrittName
     *
     * @uses Type_ProzessschrittName::setCode()
     * @uses Type_ProzessschrittName::setNichtGelisteterWert()
     */
    public function __construct(?\THAG\XKfz\StructType\Code_ProzessschrittName $code = null, ?string $nichtGelisteterWert = null)
    {
        $this
            ->setCode($code)
            ->setNichtGelisteterWert($nichtGelisteterWert);
    }

    /**
     * Get code value
     */
    public function getCode(): ?\THAG\XKfz\StructType\Code_ProzessschrittName
    {
        return $this->code;
    }

    /**
     * Set code value
     */
    public function setCode(?\THAG\XKfz\StructType\Code_ProzessschrittName $code = null): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get nichtGelisteterWert value
     */
    public function getNichtGelisteterWert(): ?string
    {
        return $this->nichtGelisteterWert;
    }

    /**
     * Set nichtGelisteterWert value
     */
    public function setNichtGelisteterWert(?string $nichtGelisteterWert = null): self
    {
        $this->nichtGelisteterWert = $nichtGelisteterWert;

        return $this;
    }
}
