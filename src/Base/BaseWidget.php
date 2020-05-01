<?php

namespace PhpLab\Web\Base;

use PhpLab\Core\Helpers\StringHelper;
use PhpLab\Web\Interfaces\WidgetInterface;

abstract class BaseWidget implements WidgetInterface
{

    abstract public function render(): string;

    protected function renderTemplate(string $templateCode, array $params)
    {
        return StringHelper::renderTemplate($templateCode, $params);
    }
}