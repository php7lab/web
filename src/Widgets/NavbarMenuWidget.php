<?php

namespace PhpLab\Web\Widgets;

class NavbarMenuWidget extends \PhpLab\Web\Widgets\MenuWidget
{

    public $itemOptions = [
        'class' => 'nav-item',
        'tag' => 'span',
    ];
    public $linkTemplate =
        '<a href="{url}" class="nav-link {class}">
            {icon}
                {label}
                {treeViewIcon}
                {badge}
        </a>';
    public $submenuTemplate = '<ul class="nav nav-treeview">{items}</ul>';
    public $activateParents = true;
    public $treeViewIcon = '<i class="right fas fa-angle-left"></i>';

    public function __construct()
    {
        $this->items = include(__DIR__ . '/../../../../../config/extra/menu/web.php');
    }

}