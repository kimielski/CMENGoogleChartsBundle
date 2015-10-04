<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class VAxis
{
    /**
     * vAxis property that specifies the baseline for the vertical axis. If the baseline is larger than the highest
     * grid line or smaller than the lowest grid line, it will be rounded to the closest gridline.
     *
     * @var int
     */
    protected $baseline;

    /**
     * Specifies the color of the baseline for the vertical axis. Can be any HTML color string,
     * for example: 'red' or '#00cc00'.
     *
     * @var string
     */
    protected $baselineColor;

    /**
     * The direction in which the values along the vertical axis grow. Specify -1 to reverse the order of the values.
     * Default : 1
     *
     * @var int
     */
    protected $direction;

    /**
     * A format string for numeric axis labels. This is a subset of the ICU pattern set . For instance,
     * '#,###%' will display values "1,000%", "750%", and "50%" for values 10, 7.5, and 0.5. You can also
     * supply any of the following :
     * 'none' : displays numbers with no formatting (e.g., 8000000)
     * 'decimal' : displays numbers with thousands separators (e.g., 8,000,000)
     * 'scientific' : displays numbers in scientific notation (e.g., 8e6)
     * 'currency' : displays numbers in the local currency (e.g., $8,000,000.00)
     * 'percent' : displays numbers as percentages (e.g., 800,000,000%)
     * 'short' : displays abbreviated numbers (e.g., 8M)
     * 'long' : displays numbers as full words (e.g., 8 million)
     *
     * The actual formatting applied to the label is derived from the locale the API has been loaded with.
     * For more details, see loading charts with a specific locale.
     *
     * @var string
     */
    protected $format;

    /**
     * @var Gridlines
     */
    protected $gridlines;

    /**
     * @var MinorGridlines
     */
    protected $minorGridlines;

    /**
     * If true, makes the vertical axis a logarithmic scale. Note : All values must be positive.
     *
     * @var boolean
     */
    protected $logScale;

    /**
     * Position of the vertical axis text, relative to the chart area. Supported values: 'out', 'in', 'none'.
     *
     * @var string
     */
    protected $textPosition;

    /**
     * @var MediumTextStyle
     */
    protected $textStyle;

    /**
     * Replaces the automatically generated Y-axis ticks with the specified array. Each element of the array should
     * be either a valid tick value (such as a number, date, datetime, or timeofday), or an object. If it's an object,
     * it should have a v property for the tick value, and an optional f property containing the literal string to be
     * displayed as the label. Examples :
     *     [5,10,15,20]
     *     [ ['v' => 32, 'f' => 'thirty two'], ['v' => 64, 'f' => 'sixty four'] ] ]
     *     [16, ['v' => 32, 'f' => 'thirty two'], ['v' => 64, 'f' => 'sixty four'], 128] ]
     *
     * @var array
     */
    protected $ticks;

    /**
     * vAxis property that specifies a title for the vertical axis.
     *
     * @var string
     */
    protected $title;

    /**
     * @var TitleTextStyle
     */
    protected $titleTextStyle;

    /**
     * Moves the max value of the vertical axis to the specified value; this will be upward in most charts.
     * Ignored if this is set to a value smaller than the maximum y-value of the data. vAxis.viewWindow.max
     * overrides this property.
     *
     * @var int
     */
    protected $maxValue;

    /**
     * Moves the min value of the vertical axis to the specified value; this will be downward in most charts.
     * Ignored if this is set to a value greater than the minimum y-value of the data. vAxis.viewWindow.min
     * overrides this property.
     *
     * @var int
     */
    protected $minValue;

    /**
     * Specifies how to scale the vertical axis to render the values within the chart area. The following string
     * values are supported:
     * 'pretty' - Scale the vertical values so that the maximum and minimum data values are rendered a bit inside the
     *   top and bottom of the chart area. This will cause vaxis.viewWindow.min and vaxis.viewWindow.max to be ignored.
     * 'maximized' - Scale the vertical values so that the maximum and minimum data values touch the top and bottom
     *   of the chart area. This will cause vaxis.viewWindow.min and vaxis.viewWindow.max to be ignored.
     * 'explicit' - A deprecated option for specifying the top and bottom scale values of the chart area.
     *   (Deprecated because it's redundant with vaxis.viewWindow.min and vaxis.viewWindow.max. Data values outside
     *   these values will be cropped. You must specify a vAxis.viewWindow object describing the maximum and minimum
     *   values to show.
     *
     * @var string
     */
    protected $viewWindowMode;

    /**
     * @var ViewWindow
     */
    protected $viewWindow;


    public function __construct()
    {
        $this->gridlines = new Gridlines();
        $this->minorGridlines = new MinorGridlines();
        $this->titleTextStyle = new TitleTextStyle();
        $this->viewWindow = new ViewWindow();
        $this->textStyle = new MediumTextStyle();
    }

    /**
     * @return Gridlines
     */
    public function getGridlines()
    {
        return $this->gridlines;
    }

    /**
     * @return MinorGridlines
     */
    public function getMinorGridlines()
    {
        return $this->minorGridlines;
    }

    /**
     * @return TitleTextStyle
     */
    public function getTitleTextStyle()
    {
        return $this->titleTextStyle;
    }

    /**
     * @return ViewWindow
     */
    public function getViewWindow()
    {
        return $this->viewWindow;
    }

    /**
     * @return MediumTextStyle
     */
    public function getTextStyle()
    {
        return $this->textStyle;
    }

    /**
     * @param int $baseline
     */
    public function setBaseline($baseline)
    {
        $this->baseline = $baseline;
    }

    /**
     * @param string $baselineColor
     */
    public function setBaselineColor($baselineColor)
    {
        $this->baselineColor = $baselineColor;
    }

    /**
     * @param int $direction
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;
    }

    /**
     * @param string $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }

    /**
     * @param boolean $logScale
     */
    public function setLogScale($logScale)
    {
        $this->logScale = $logScale;
    }

    /**
     * @param string $textPosition
     */
    public function setTextPosition($textPosition)
    {
        $this->textPosition = $textPosition;
    }

    /**
     * @param array $ticks
     */
    public function setTicks($ticks)
    {
        $this->ticks = $ticks;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param int $maxValue
     */
    public function setMaxValue($maxValue)
    {
        $this->maxValue = $maxValue;
    }

    /**
     * @param int $minValue
     */
    public function setMinValue($minValue)
    {
        $this->minValue = $minValue;
    }

    /**
     * @param string $viewWindowMode
     */
    public function setViewWindowMode($viewWindowMode)
    {
        $this->viewWindowMode = $viewWindowMode;
    }
}
