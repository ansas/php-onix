<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\Measure;

trait HasMeasures
{
    /** @var Measure[] */
    protected $measures = [];
    /** @var Measure */
    protected $height;
    /** @var Measure */
    protected $width;
    /** @var Measure */
    protected $thickness;
    /** @var Measure */
    protected $weight;

    public function setMeasure(\SimpleXMLElement $xml): void
    {
        /** @var Measure $measure */
        $measure          = Measure::buildFromXml($xml, $this);
        $this->measures[] = $measure;
        if ($measure->isHeight()) {
            $this->height = $measure;
        } elseif ($measure->isWidth()) {
            $this->width = $measure;
        } elseif ($measure->isThickness()) {
            $this->thickness = $measure;
        } elseif ($measure->isWeight()) {
            $this->weight = $measure;
        }
    }

    public function getHeightMeasurement(): ?float
    {
        return $this->height ? $this->height->getMeasurement() : null;
    }

    public function getHeightUnit(): ?string
    {
        return $this->height ? $this->height->getMeasureUnitCode() : null;
    }

    public function getWidthMeasurement(): ?float
    {
        return $this->width ? $this->width->getMeasurement() : null;
    }

    public function getWidthUnit(): ?string
    {
        return $this->width ? $this->width->getMeasureUnitCode() : null;
    }

    public function getThicknessMeasurement(): ?float
    {
        return $this->thickness ? $this->thickness->getMeasurement() : null;
    }

    public function getThicknessUnit(): ?string
    {
        return $this->thickness ? $this->thickness->getMeasureUnitCode() : null;
    }

    public function getWeightMeasurement(): ?float
    {
        return $this->weight ? $this->weight->getMeasurement() : null;
    }

    public function getWeightUnit(): ?string
    {
        return $this->weight ? $this->weight->getMeasureUnitCode() : null;
    }
}