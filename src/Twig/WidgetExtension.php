<?php

namespace PhpLab\Web\Twig;

use PhpLab\Web\Widgets\WidgetInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class WidgetExtension extends AbstractExtension
{

    private $items = [];

    public function getFunctions()
    {
        return [
            new TwigFunction('widget', [$this, 'widget'], ['is_safe' => ['html']]),
        ];
    }

    public function widget(string $widgetClass, array $params = [])
    {
        /** @var WidgetInterface $widget */
        $widget = new $widgetClass;
        foreach ($params as $paramName => $paramValue) {
            $widget->{$paramName} = $paramValue;
        }
        return $widget->render();
    }

}
