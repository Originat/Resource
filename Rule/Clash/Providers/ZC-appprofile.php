<?php

declare(strict_types=1);

/**
 * default 为默认配置，你可以添加其他配置，但必须保证默认配置存在
 *
 * Checks 填写为没有直接在规则文件中使用的并且使用了筛选规则且组内或可能无节点的策略组名
 *  - 例如使用 regex 分类国家分组，未匹配时组内无节点，此类需要填入 Checks 中以保证配置文件无误
 *
 * Surge 以及 Surfboard 的 General 中，布尔值请填写为字符串
 *
 * Surge 以及 Surfboard 的 Proxy 中，请填写为该应用的格式
 * Clash 的 Proxy 中，请填写为数组
 */

/**
 * Surge 配置文件定义
 */
$_ENV['Surge_Profiles'] = [
    'default' => [
        'Checks' => [],
        'General' => [
            'loglevel' => 'notify',
            'dns-server' => 'system, 119.29.29.29, 1.1.1.1',
            'skip-proxy' => '127.0.0.1, 192.168.0.0/16, 10.0.0.0/8, 172.16.0.0/12, 100.64.0.0/10, 17.0.0.0/8, localhost, *.local, *.crashlytics.com',
            'external-controller-access' => 'China@0.0.0.0:8233',
            'allow-wifi-access' => 'true',
            'enhanced-mode-by-rule' => 'false',
            'exclude-simple-hostnames' => 'true',
            'show-error-page-for-reject' => 'true',
            'ipv6' => 'true',
            'replica' => 'false',
            'http-listen' => '0.0.0.0:8234',
            'socks5-listen' => '0.0.0.0:8235',
            'wifi-access-http-port' => 6152,
            'wifi-access-socks5-port' => 6153,
            'internet-test-url' => 'http://wifi.vivo.com.cn/generate_204',
            'proxy-test-url' => 'http://cp.cloudflare.com',
            'test-timeout' => 3,
        ],
        'Proxy' => [
            '🚀直接连接 = direct',
        ],
        'ProxyGroup' => [
            [
                'name' => '🔰国外流量',
                'type' => 'select',
                'content' => [
                    'regex' => '(.*)',
                    'right-proxies' => [
                        '🚀直接连接',
                    ],
                ],
            ],
            [
                'name' => '⚓️其他流量',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量',
                        '🚀直接连接',
                    ],
                ],
            ],
            [
                'name' => '✈️Telegram',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量',
                    ],
                    'regex' => '(.*)',
                ],
            ],
            [
                'name' => '🎬Youtube',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量',
                    ],
                    'regex' => '(.*)',
                ],
            ],
            [
                'name' => '🎬Netflix',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量',
                    ],
                    'regex' => '(.*)',
                ],
            ],
            [
                'name' => '🎬哔哩哔哩',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🚀直接连接',
                    ],
                    'regex' => '(.*)',
                ],
            ],
            [
                'name' => '🎬国外媒体',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量',
                    ],
                    'regex' => '(.*)',
                ],
            ],
            [
                'name' => '🍎苹果服务',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🚀直接连接',
                        '🔰国外流量',
                    ],
                ],
            ],
        ],
        'Rule' => [
            'source' => 'surge/default.tpl',
        ],
    ],
];

/**
 * Surge 2.x 版本的配置文件定义
 */
$_ENV['Surge2_Profiles'] = [
    'default' => [
        'Checks' => [],
        'General' => [
            'loglevel' => 'notify',
            'ipv6' => 'true',
            'replica' => 'false',
            'dns-server' => 'system, 119.29.29.29, 1.1.1.1',
            'skip-proxy' => '127.0.0.1, 192.168.0.0/16, 10.0.0.0/8, 172.16.0.0/12, 100.64.0.0/10, 17.0.0.0/8, localhost, *.local, *.crashlytics.com',
            'bypass-system' => 'true',
            'allow-wifi-access' => 'true',
            'external-controller-access' => 'ChinaX@0.0.0.0:8233',
        ],
        'Proxy' => [
            '🚀直接连接 = direct',
        ],
        'ProxyGroup' => [
            [
                'name' => '🔰国外流量',
                'type' => 'select',
                'content' => [
                    'regex' => '(.*)',
                    'right-proxies' => [
                        '🚀直接连接',
                    ],
                ],
            ],
            [
                'name' => '⚓️其他流量',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量',
                        '🚀直接连接',
                    ],
                ],
            ],
            [
                'name' => '✈️Telegram',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量',
                    ],
                    'regex' => '(.*)',
                ],
            ],
            [
                'name' => '🎬Youtube',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量',
                    ],
                    'regex' => '(.*)',
                ],
            ],
            [
                'name' => '🎬Netflix',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量',
                    ],
                    'regex' => '(.*)',
                ],
            ],
            [
                'name' => '🎬哔哩哔哩',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🚀直接连接',
                    ],
                    'regex' => '(.*)',
                ],
            ],
            [
                'name' => '🎬国外媒体',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量',
                    ],
                    'regex' => '(.*)',
                ],
            ],
            [
                'name' => '🍎苹果服务',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🚀直接连接',
                        '🔰国外流量',
                    ],
                ],
            ],
        ],
        'Rule' => [
            'source' => 'surge2/default.tpl',
        ],
    ],
];

/**
 * Clash 配置文件定义
 */
$_ENV['Clash_Profiles'] = [
    'default' => [
        'Checks' => [],
        'General' => [
            #'port'                => 7890,
            #'socks-port'          => 7891,
            #'redir-port'          => 7892,
			'mixed-port'          => 17890,
            'allow-lan'           => true,
            'bind-address'        => '*',
            'mode'                => 'rule',
            'log-level'           => 'silent',
            'ipv6'                => true,
            'external-controller' => '0.0.0.0:19090'
        ],
        'DNS' => [
            'enable'              => true,
			'ipv6'                => true,
            'listen'              => '0.0.0.0:5353',
            'enhanced-mode'       => 'fake-ip',
            'fake-ip-range'       => '198.18.0.1/16',
			'fake-ip-filter'=>[
				'miwifi.com',
				'music.163.com',
				'api-jooxtt.sanook.com',
				'api.joox.com',
				'joox.com',
				'y.qq.com',
				'streamoc.music.tc.qq.com',
				'mobileoc.music.tc.qq.com',
				'isure.stream.qqmusic.qq.com',
				'dl.stream.qqmusic.qq.com',
				'aqqmusic.tc.qq.com',
				'amobile.music.tc.qq.com',
				'music.migu.cn',
				'netis.cc',
				'router.asus.com',
				'repeater.asus.com',
				'routerlogin.com',
				'routerlogin.net',
				'tendawifi.com',
				'tendawifi.net',
				'tplinklogin.net',
				'tplinkwifi.net',
				'tplinkrepeater.net',
				'localhost.ptlogin2.qq.com',
				'speedtest.cros.wr.pvp.net',
			],
            'default-nameserver'=>[
                # 需要纯ip
                '119.29.29.29',
                '223.5.5.5',
			],
			'nameserver'=>[
				'https://doh.pub/dns-query',
				'https://dns.alidns.com/dns-query',
            ],
            'fallback'=>[
                'https://1.1.1.1/dns-query',
                'https://doh.dns.sb/dns-query',
                'https://public.dns.iij.jp/dns-query',
			    'tls://dns.google:853',
				'tls://1.0.0.1:853',
            ],
            'fallback-filter'=>[
                'geoip'=> true,
                'geoip-code'=> 'CN',
                'ipcidr'=>[
                    '240.0.0.0/4',
					'127.0.0.1/8',
					'0.0.0.0/32',
                ],
				'domain'=>[
                    '+.google.com',
					'+.facebook.com',
					'+.twitter.com',
					'+.youtube.com',
					'+.google.cn',
                ],
            ],
        ],
		'Proxy' => [],
        'ProxyGroup' => [
            [
                'name' => '🚀 ZHStyle',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔮 负载均衡',
						'🔯 故障转移',
                        '♻️ 自动选择'						
                    ],
					'regex' => '(.*)',
                ]
            ],
            [
                'name' => '📲 电报消息',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
					    '🚀 ZHStyle',
                        '♻️ 自动选择'
                    ],
                    'regex' => '(.*)',
                    'right-proxies' => [
                        'DIRECT'
					],
                ]
            ],
            [
                'name' => '📹 油管视频',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
					    '🚀 ZHStyle',
                        '♻️ 自动选择'
                    ],
                    'regex' => '(.*)',
                    'right-proxies' => [
                        'DIRECT'
					],
                ]
            ],
			[
                'name' => '🎥 奈飞视频',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
						'🚀 ZHStyle',
                        '♻️ 自动选择'
                    ],
                    'regex' => '(.*NF)',
                    'right-proxies' => [
                        'DIRECT',
					],
                ],
            ],
			[
                'name' => 'Ⓜ️ 微软云盘',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
					    'DIRECT',
						'🚀 ZHStyle',
                        '♻️ 自动选择'
                    ],
                    'regex' => '(.*)',
                ]
            ],
			[
                'name' => 'Ⓜ️ 微软服务',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
					    'DIRECT',
						'🚀 ZHStyle',
                        '♻️ 自动选择'
                    ],
                    'regex' => '(.*)',
                ]
            ],
			[
                'name' => '🍎 苹果服务',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
					    'DIRECT',
						'🚀 ZHStyle'
                    ],
                    'regex' => '(.*)',
                ]
            ],
			[
                'name' => '📢 谷歌FCM',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
					    'DIRECT',
						'🚀 ZHStyle'
                    ],
                    'regex' => '(.*)',
                ]
            ],
			[
                'name' => '🛑 广告拦截',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
					    'REJECT',
						'DIRECT'
                    ]
                ]
            ],
			[
                'name' => '🍃 应用净化',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
					    'REJECT',
						'DIRECT'
                    ]
                ]
            ],
			[
                'name' => '🛡️ 隐私防护',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
					    'REJECT',
						'DIRECT'
                    ]
                ]
            ],
			[
                'name' => '🐟 漏网之鱼',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
					    '🚀 ZHStyle',
                        '♻️ 自动选择'
                    ],
                    'regex' => '(.*)',
                    'right-proxies' => [
                        'DIRECT'
					],
                ]
            ],
			[
                'name' => '🎯 全球直连',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
					    'DIRECT',
						'🚀 ZHStyle',
                        '♻️ 自动选择'
                    ]
                ]
            ],
			[
                'name' => '♻️ 自动选择',
                'type' => 'url-test',
				'url' => 'http://www.gstatic.com/generate_204',
				'interval' => 300,
				'tolerance' => 50,
                'content' => [
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🔯 故障转移',
                'type' => 'fallback',
				'url' => 'http://www.gstatic.com/generate_204',
                'interval' => 300,
                'tolerance' => 50,
                'content' => [
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🔮 负载均衡',
                'type' => 'load-balance',
				'url' => 'http://www.gstatic.com/generate_204',
                'interval' => 300,
                'tolerance' => 50,
                'content' => [
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => 'US-故障转移',
                'type' => 'fallback',
				'url' => 'http://www.gstatic.com/generate_204',
                'interval' => 60,
                'tolerance' => 50,
                'content' => [
                    'regex' => '(.*US)'
                ],
            ]
        ],
        'Rule' => [
            'source' => 'clash/myself.tpl'
        ],
    ],
];

/**
 * Surfboard 配置文件定义
 */
$_ENV['Surfboard_Profiles'] = [
    'default' => [
        'Checks' => [],
        'General' => [
            'loglevel' => 'notify',
            'dns-server' => 'system, 119.29.29.29, 1.1.1.1',
            'skip-proxy' => '127.0.0.1, 192.168.0.0/16, 10.0.0.0/8, 172.16.0.0/12, 100.64.0.0/10, 17.0.0.0/8, localhost, *.local, *.crashlytics.com',
        ],
        'Proxy' => [
            '🚀直接连接 = direct',
        ],
        'ProxyGroup' => [
            [
                'name' => '🔰国外流量',
                'type' => 'select',
                'content' => [
                    'regex' => '(.*)',
                    'right-proxies' => [
                        '🚀直接连接',
                    ],
                ],
            ],
            [
                'name' => '⚓️其他流量',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量',
                        '🚀直接连接',
                    ],
                ],
            ],
            [
                'name' => '✈️Telegram',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量',
                    ],
                    'regex' => '(.*)',
                ],
            ],
            [
                'name' => '🎬Youtube',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量',
                    ],
                    'regex' => '(.*)',
                ],
            ],
            [
                'name' => '🎬Netflix',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量',
                    ],
                    'regex' => '(.*)',
                ],
            ],
            [
                'name' => '🎬哔哩哔哩',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🚀直接连接',
                    ],
                    'regex' => '(.*)',
                ],
            ],
            [
                'name' => '🎬国外媒体',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量',
                    ],
                    'regex' => '(.*)',
                ],
            ],
        ],
        'Rule' => [
            'source' => 'surfboard/default.tpl',
        ],
    ],
];
