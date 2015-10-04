<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options;

class AdvancedHAxis extends MediumHAxis
{
    /**
     * If false, will hide outermost labels rather than allow them to be cropped by the chart container. If true,
     * will allow label cropping.
     *
     * @var boolean
     */
    protected $allowContainerBoundaryTextCufoff;

    /**
     * If true, draw the horizontal axis text at an angle, to help fit more text along the axis; if false, draw
     * horizontal axis text upright. Default behavior is to slant text if it cannot all fit when drawn upright.
     * Notice that this option is available only when the hAxis.textPosition is set to 'out' (which is the default).
     *
     * @var boolean
     */
    protected $slantedText;

    /**
     * The angle of the horizontal axis text, if it's drawn slanted. Ignored if hAxis.slantedText is false, or is in
     * auto mode, and the chart decided to draw the text horizontally.
     *
     * @var int
     */
    protected $slantedTextAngle;

    /**
     * Maximum number of levels of horizontal axis text. If axis text labels become too crowded, the server might
     * shift neighboring labels up or down in order to fit labels closer together. This value specifies the most
     * number of levels to use; the server can use fewer levels, if labels can fit without overlapping.
     *
     * @var int
     */
    protected $maxAlternation;

    /**
     * Maximum number of lines allowed for the text labels. Labels can span multiple lines if they are too long,
     * and the nuber of lines is, by default, limited by the height of the available space.
     *
     * @var int
     */
    protected $maxTextLines;

    /**
     * Minimum horizontal spacing, in pixels, allowed between two adjacent text labels. If the labels are spaced too
     * densely, or they are too long, the spacing can drop below this threshold, and in this case one of the
     * label-unclutter measures will be applied (e.g, truncating the lables or dropping some of them).
     *
     * @var int
     */
    protected $minTextSpacing;

    /**
     * How many horizontal axis labels to show, where 1 means show every label, 2 means show every other label,
     * and so on. Default is to try to show as many labels as possible without overlapping.
     *
     * @var int
     */
    protected $showTextEvery;


    /**
     * @param int $showTextEvery
     */
    public function setShowTextEvery($showTextEvery)
    {
        $this->showTextEvery = $showTextEvery;
    }

    /**
     * @param boolean $allowContainerBoundaryTextCufoff
     */
    public function setAllowContainerBoundaryTextCufoff($allowContainerBoundaryTextCufoff)
    {
        $this->allowContainerBoundaryTextCufoff = $allowContainerBoundaryTextCufoff;
    }

    /**
     * @param boolean $slantedText
     */
    public function setSlantedText($slantedText)
    {
        $this->slantedText = $slantedText;
    }

    /**
     * @param int $slantedTextAngle
     */
    public function setSlantedTextAngle($slantedTextAngle)
    {
        $this->slantedTextAngle = $slantedTextAngle;
    }

    /**
     * @param int $maxAlternation
     */
    public function setMaxAlternation($maxAlternation)
    {
        $this->maxAlternation = $maxAlternation;
    }

    /**
     * @param int $maxTextLines
     */
    public function setMaxTextLines($maxTextLines)
    {
        $this->maxTextLines = $maxTextLines;
    }

    /**
     * @param int $minTextSpacing
     */
    public function setMinTextSpacing($minTextSpacing)
    {
        $this->minTextSpacing = $minTextSpacing;
    }
}
