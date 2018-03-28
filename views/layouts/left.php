<!--左侧导航开始-->
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="nav-close"><i class="fa fa-times-circle"></i>
    </div>
    <div class="sidebar-collapse">
        <?php $callback = function($menu){
            $data = json_decode($menu['data'], true);
            $items = $menu['children'];
            $return = [
                'label' => $menu['name'],
                'url' => [$menu['route']],
            ];
            //处理我们的配置
            if ($data) {
                //visible
                isset($data['visible']) && $return['visible'] = $data['visible'];
                //icon
                isset($data['icon']) && $data['icon'] && $return['icon'] = $data['icon'];
                //other attribute e.g. class...
                $return['options'] = $data;
            }
            //没配置图标的显示默认图标
            (!isset($return['icon']) || !$return['icon']) && $return['icon'] = 'fa fa-circle-o';
            $items && $return['items'] = $items;
            return $return;
        };?>
            <?= \miffy\miffyzq\widgets\Menu::widget(
                [
                    'user' => $user,
                    'options' => ['class' => 'nav', 'id' => 'side-menu'],
                    'items' => [
                        ['label' => 'Menu Yii2', 'options' => ['class' => 'header', 'style' => 'color: #4b646f;
                        background: #1a2226;padding-left: 30%;line-height: 40px;']],
                        ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                        ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                        ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                        [
                            'label' => 'Same tools',
                            'icon' => 'share',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                                ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                                [
                                    'label' => 'Level One',
                                    'icon' => 'circle-o',
                                    'url' => '#',
                                    'items' => [
                                        ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                        [
                                            'label' => 'Level Two',
                                            'icon' => 'circle-o',
                                            'url' => '#',
                                            'items' => [
                                                ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                                ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]
            ) ?>
    </div>
</nav>
<!--左侧导航结束-->
