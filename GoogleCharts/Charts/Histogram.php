<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Histogram\HistogramOptions;

/**
 * @author Christophe Meneses
 */
class Histogram extends Chart
{
    /**
     * @var HistogramOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new HistogramOptions();
    }

    /**
     * {@inheritdoc}
     */
    protected function getType()
    {
        return 'Histogram';
    }

    /**
     * {@inheritdoc}
     */
    public function getPackage()
    {
        return 'corechart';
    }

    /**
     * @return HistogramOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options HistogramOptions
     *
     * @return Histogram
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
