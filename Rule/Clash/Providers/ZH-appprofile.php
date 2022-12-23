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
            'allow-lan'           => false,
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
        'ProxyProviders' => [
    //         'freenode' => [
			 //   'type' => 'http',
		  //  	'url' => 'https://zhfree.alienergy.eu.org/clash/proxies',
			 //  	'interval' => 1200,
		  //  	'path' => './Proxy/freenode.yaml',
		  //  	'health-check' => [
		  //  		'enable' => true,
		  //  		'interval' => 600,
			 //  		'url' => 'http://www.gstatic.com/generate_204',
			 //  	]
			 //],
			 # SS 只选中国（CN）
			 'freenode-ss' => [
			    'type' => 'http',
		    	'url' => 'https://zhfree.onrender.com/clash/proxies?c=CN,HK,TW&type=ss,ssr',
			   	'interval' => 43200,
		    	'path' => './Proxy/freenode-ss.yaml',
		    	'health-check' => [
		    		'enable' => true,
		    		'interval' => 600,
			   		'url' => 'http://www.gstatic.com/generate_204',
			   	],
			 ],
			 # 排除澳大利亚（AU）
			 'freenode-vmess' => [
			    'type' => 'http',
		    	'url' => 'https://zhfree.onrender.com/clash/proxies?nc=AU&type=vmess',
			   	'interval' => 43200,
		    	'path' => './Proxy/freenode-vmess.yaml',
		    	'health-check' => [
		    		'enable' => true,
		    		'interval' => 600,
			   		'url' => 'http://www.gstatic.com/generate_204',
			   	],
			 ],
			 # 排除澳大利亚（AU）
			 'freenode-trojan' => [
			    'type' => 'http',
		    	'url' => 'https://zhfree.onrender.com/clash/proxies?nc=AU&type=trojan',
			   	'interval' => 43200,
		    	'path' => './Proxy/freenode-trojan.yaml',
		    	'health-check' => [
		    		'enable' => true,
		    		'interval' => 600,
			   		'url' => 'http://www.gstatic.com/generate_204',
			   	],
			 ],
			 'UnblockNeteaseMusic' => [
			    'type' => 'http',
		    	'url' => 'https://cdn.staticaly.com/gh/Originat/Resource/main/Proxy/Clash/Providers/UnblockNeteaseMusic.yaml',
			   	'interval' => 43200,
		    	'path' => './Proxy/UnblockNeteaseMusic.yaml',
		    	'health-check' => [
		    		'enable' => true,
		    		'interval' => 600,
			   		'url' => 'http://www.gstatic.com/generate_204',
			   	],
			 ],
		],
        'RuleProviders' => [
			# 📲 电报消息
            'Telegram' => [
			    'type' => 'http',
				'behavior' => 'classical',
				'path' => './RuleSet/Telegram.yaml',
		    	'url' => 'https://cdn.staticaly.com/gh/ACL4SSR/ACL4SSR/98cc96f1/Clash/Providers/Ruleset/Telegram.yaml',
			   	'interval' => 86400,
			],
			# 🎶 网易音乐
            'NeteaseMusic' => [
			    'type' => 'http',
				'behavior' => 'classical',
				'path' => './RuleSet/NeteaseMusic.yaml',
		    	'url' => 'https://cdn.staticaly.com/gh/ACL4SSR/ACL4SSR/98cc96f1/Clash/Providers/Ruleset/NetEaseMusic.yaml',
			   	'interval' => 86400,
			],
			# 📹 油管视频
            'YouTube' => [
			    'type' => 'http',
				'behavior' => 'classical',
				'path' => './RuleSet/YouTube.yaml',
		    	'url' => 'https://cdn.staticaly.com/gh/ACL4SSR/ACL4SSR/98cc96f1/Clash/Providers/Ruleset/YouTube.yaml',
			   	'interval' => 86400,
			],
			# 🎥 奈飞视频
            'Netflix' => [
			    'type' => 'http',
				'behavior' => 'classical',
				'path' => './RuleSet/Netflix.yaml',
		    	'url' => 'https://cdn.staticaly.com/gh/ACL4SSR/ACL4SSR/98cc96f1/Clash/Providers/Ruleset/Netflix.yaml',
			   	'interval' => 86400,
			],
			# Ⓜ️ 微软云盘
            'OneDrive' => [
			    'type' => 'http',
				'behavior' => 'classical',
				'path' => './RuleSet/OneDrive.yaml',
		    	'url' => 'https://cdn.staticaly.com/gh/ACL4SSR/ACL4SSR/98cc96f1/Clash/Providers/Ruleset/OneDrive.yaml',
			   	'interval' => 86400,
			],
			# Ⓜ️ 微软服务
            'Microsoft' => [
			    'type' => 'http',
				'behavior' => 'classical',
				'path' => './RuleSet/Microsoft.yaml',
		    	'url' => 'https://cdn.staticaly.com/gh/ACL4SSR/ACL4SSR/98cc96f1/Clash/Providers/Ruleset/Microsoft.yaml',
			   	'interval' => 86400,
			],
			# 📢 谷歌FCM -- 谷歌推送服务
            'GoogleFCM' => [
			    'type' => 'http',
				'behavior' => 'classical',
				'path' => './RuleSet/GoogleFCM.yaml',
		    	'url' => 'https://cdn.staticaly.com/gh/ACL4SSR/ACL4SSR/98cc96f1/Clash/Providers/Ruleset/GoogleFCM.yaml',
			   	'interval' => 86400,
			],
			# 🛑 广告拦截 -- 广告关键字、广告联盟
            'BanAD' => [
			    'type' => 'http',
				'behavior' => 'classical',
				'path' => './RuleSet/BanAD.yaml',
		    	'url' => 'https://cdn.staticaly.com/gh/ACL4SSR/ACL4SSR/98cc96f1/Clash/Providers/BanAD.yaml',
			   	'interval' => 86400,
			],
			# 🍃 应用净化 -- 常用应用的各种去广告规则
            'BanProgramAD' => [
			    'type' => 'http',
				'behavior' => 'classical',
				'path' => './RuleSet/BanProgramAD.yaml',
		    	'url' => 'https://cdn.staticaly.com/gh/ACL4SSR/ACL4SSR/98cc96f1/Clash/Providers/BanProgramAD.yaml',
			   	'interval' => 86400,
			],
			# AntiAd -- 精确的广告屏蔽和隐私保护
            'AntiAd' => [
			    'type' => 'http',
				'behavior' => 'classical',
				'path' => './RuleSet/AntiAd.yaml',
		    	'url' => 'https://cdn.staticaly.com/gh/Originat/Resource/main/Rule/Clash/Providers/AntiAd.yaml',
			   	'interval' => 86400,
			],
			# 🆎 AdBlock -- EasyList列表，只包含ABP中的 EasyList 内容
            'BanEasyList' => [
			    'type' => 'http',
				'behavior' => 'classical',
				'path' => './RuleSet/BanEasyList.yaml',
		    	'url' => 'https://cdn.staticaly.com/gh/ACL4SSR/ACL4SSR/98cc96f1/Clash/Providers/BanEasyList.yaml',
			   	'interval' => 86400,
			],
			# 🆎 AdBlock -- EasyListChina列表，只包含ABP中的 EasyListChina 内容
            'BanEasyListChina' => [
			    'type' => 'http',
				'behavior' => 'classical',
				'path' => './RuleSet/BanEasyListChina.yaml',
		    	'url' => 'https://cdn.staticaly.com/gh/ACL4SSR/ACL4SSR/98cc96f1/Clash/Providers/BanEasyListChina.yaml',
			   	'interval' => 86400,
			],
			# 🆎 AdBlock -- EasyPrivacy列表，隐私保护，屏蔽隐私追踪
            'BanEasyPrivacy' => [
			    'type' => 'http',
				'behavior' => 'classical',
				'path' => './RuleSet/BanEasyPrivacy.yaml',
		    	'url' => 'https://cdn.staticaly.com/gh/ACL4SSR/ACL4SSR/98cc96f1/Clash/Providers/BanEasyPrivacy.yaml',
			   	'interval' => 86400,
			],
			# 🎯 全球直连 -- 本地/局域网地址
            'LocalAreaNetwork' => [
			    'type' => 'http',
				'behavior' => 'classical',
				'path' => './RuleSet/LocalAreaNetwork.yaml',
		    	'url' => 'https://cdn.staticaly.com/gh/ACL4SSR/ACL4SSR/98cc96f1/Clash/Providers/LocalAreaNetwork.yaml',
			   	'interval' => 86400,
			],
			# 🎯 全球直连 -- Unbreak 白名单 不应该被广告链接的网站
            'UnBan' => [
			    'type' => 'http',
				'behavior' => 'classical',
				'path' => './RuleSet/UnBan.yaml',
		    	'url' => 'https://cdn.staticaly.com/gh/ACL4SSR/ACL4SSR/98cc96f1/Clash/Providers/UnBan.yaml',
			   	'interval' => 86400,
			],
			# 🎯 全球直连 -- GoogleCN
            'GoogleCN' => [
			    'type' => 'http',
				'behavior' => 'classical',
				'path' => './RuleSet/GoogleCN.yaml',
		    	'url' => 'https://cdn.staticaly.com/gh/ACL4SSR/ACL4SSR/98cc96f1/Clash/Providers/Ruleset/GoogleCN.yaml',
			   	'interval' => 86400,
			],
			# 🎯 全球直连 -- SteamCN
            'SteamCN' => [
			    'type' => 'http',
				'behavior' => 'classical',
				'path' => './RuleSet/SteamCN.yaml',
		    	'url' => 'https://cdn.staticaly.com/gh/ACL4SSR/ACL4SSR/98cc96f1/Clash/Providers/Ruleset/SteamCN.yaml',
			   	'interval' => 86400,
			],
			# 🎯 全球直连 -- ChinaDomain
            'ChinaDomain' => [
			    'type' => 'http',
				'behavior' => 'classical',
				'path' => './RuleSet/ChinaDomain.yaml',
		    	'url' => 'https://cdn.staticaly.com/gh/ACL4SSR/ACL4SSR/98cc96f1/Clash/Providers/ChinaDomain.yaml',
			   	'interval' => 86400,
			],
			# 🎯 全球直连 -- Download
            'Download' => [
			    'type' => 'http',
				'behavior' => 'classical',
				'path' => './RuleSet/Download.yaml',
		    	'url' => 'https://cdn.staticaly.com/gh/ACL4SSR/ACL4SSR/98cc96f1/Clash/Providers/Download.yaml',
			   	'interval' => 86400,
			],
		],
		'Proxy' => [],
// 			[
// 		        'name' => '🎵 CN 解锁本地VIP+歌单 1M',
// 			    'type' => 'ss',
// 			    'server' => 'music.cn.theking.cf',
// 			    'port' => '33333',
// 				'cipher' => 'aes-128-gcm',
// 				'password' => 'yupasswordyu'
// 			],
// 			[
// 		        'name' => '🎵 GB 解锁本地VIP v6',
// 			    'type' => 'ss',
// 			    'server' => 'music.v6.gb.theking.cf',
// 			    'port' => '30000',
// 				'cipher' => 'aes-128-gcm',
// 				'password' => 'yupassword'
// 			],
// 			[
// 		        'name' => '🎵 英国 解锁本地VIP v6',
// 			    'type' => 'http',
// 			    'server' => 'music.v6.gb.theking.cf',
// 			    'port' => '8080'
// 			],
// 			[
// 		        'name' => '🎵 波兰 解锁本地VIP v6',
// 			    'type' => 'http',
// 			    'server' => 'music.v6.pl.theking.cf',
// 			    'port' => '8080'
// 			],
// 			[
// 		        'name' => '🎵 美国 解锁本地VIP v4',
// 			    'type' => 'http',
// 			    'server' => 'music.v4.us.theking.cf',
// 			    'port' => '28080'
// 			],
// 			[
// 		        'name' => '🎵 美国 解锁本地VIP v6',
// 			    'type' => 'http',
// 			    'server' => 'music.v6.us.theking.cf',
// 			    'port' => '8080'
// 			],
// 			[
// 		        'name' => '🎵 法国 解锁本地VIP v6',
// 			    'type' => 'http',
// 			    'server' => 'music.v6.fr.theking.cf',
// 			    'port' => '8080'
// 			],
        'ProxyGroup' => [
            [
                'name' => '🚀 ZHStyle',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔮 ZH-负载均衡',
                        '🔮 FR-负载均衡',
                        '🔮 全-负载均衡',
                        '🔯 ZH-故障转移',
                        '🔯 FR-故障转移',
                        '🔯 全-故障转移',
                        '♻️ ZH-自动选择',
                        '♻️ FR-自动选择',
                        '♻️ 全-自动选择',
                    ],
					'regex' => '(.*)',
                ],
                'use' => [
                        'freenode-ss',
                        'freenode-vmess',
                        'freenode-trojan',
                ],
                
            ],
            [
                'name' => '📲 电报消息',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
					    '🚀 ZHStyle',
                        '♻️ ZH-自动选择',
                        '🔮 ZH-负载均衡',
                    ],
                    'regex' => '(.*)',
                    'right-proxies' => [
                        'DIRECT',
					],
                ],
            ],
            [
			    'name' => '🎶 网易音乐',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        'DIRECT',
					],
                ],
                'use' => [
                        'UnblockNeteaseMusic',
                ],
			],
            [
                'name' => '📹 油管视频',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
					    '🚀 ZHStyle',
                        '♻️ ZH-自动选择'
                    ],
                    'regex' => '(.*)',
                    'right-proxies' => [
                        'DIRECT',
					],
                ],
            ],
			[
                'name' => '🎥 奈飞视频',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
						'🚀 ZHStyle',
                        '♻️ NF-自动选择',
                        '🔯 NF-故障转移',
                        '🔮 NF-负载均衡',
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
                        '♻️ ZH-自动选择',
                    ],
                    'regex' => '(.*)',
                ],
            ],
			[
                'name' => 'Ⓜ️ 微软服务',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
					    'DIRECT',
						'🚀 ZHStyle',
                        '♻️ ZH-自动选择',
                    ],
                    'regex' => '(.*)',
                ],
            ],
			[
                'name' => '📢 谷歌FCM',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
					    'DIRECT',
					    '🔮 ZH-负载均衡',
						'🚀 ZHStyle',
                    ],
                    'regex' => '(.*)',
                ],
            ],
			[
                'name' => '🛑 广告拦截',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
					    'REJECT',
						'DIRECT',
                    ],
                ],
            ],
			[
                'name' => '🍃 应用净化',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
					    'REJECT',
						'DIRECT',
                    ],
                ],
            ],
            [
                'name' => 'AntiAd',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
					    'REJECT',
						'DIRECT',
                    ],
                ],
            ],
			[
                'name' => '🆎 AdBlock',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
					    'REJECT',
						'DIRECT',
                    ],
                ],
            ],
			[
                'name' => '🛡️ 隐私防护',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
					    'REJECT',
						'DIRECT',
                    ],
                ],
            ],
			[
                'name' => '🐟 漏网之鱼',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
					    '🚀 ZHStyle',
					    '🔮 ZH-负载均衡',
                        '♻️ ZH-自动选择'
                    ],
                    'regex' => '(.*)',
                    'right-proxies' => [
                        'DIRECT',
					],
                ],
            ],
			[
                'name' => '🎯 全球直连',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
					    'DIRECT',
						'🚀 ZHStyle',
						'🔮 ZH-负载均衡',
                        '♻️ ZH-自动选择',
                    ],
                ],
            ],
			[
                'name' => '♻️ ZH-自动选择',
                'type' => 'url-test',
				'url' => 'http://www.gstatic.com/generate_204',
				'interval' => 240,
				'tolerance' => 50,
                'content' => [
                    'regex' => '(.*)',
                ],
            ],
            [
                'name' => '🔯 ZH-故障转移',
                'type' => 'fallback',
				'url' => 'http://www.gstatic.com/generate_204',
                'interval' => 240,
                'tolerance' => 50,
                'content' => [
                    'regex' => '(.*)',
                ],
            ],
            [
                'name' => '🔮 ZH-负载均衡',
                'type' => 'load-balance',
				'url' => 'http://www.gstatic.com/generate_204',
                'interval' => 240,
                'tolerance' => 50,
                'content' => [
                    'regex' => '(.*)',
                ],
            ],
            [
                'name' => '♻️ FR-自动选择',
                'type' => 'url-test',
				'url' => 'http://www.gstatic.com/generate_204',
				'interval' => 60,
				'tolerance' => 50,
				'content' => [
                    'regex' => '(.*C)',
                ],
                'use' => [
                        'freenode-ss',
                        'freenode-vmess',
                        'freenode-trojan',
                ],
            ],
            [
                'name' => '🔯 FR-故障转移',
                'type' => 'fallback',
				'url' => 'http://www.gstatic.com/generate_204',
                'interval' => 60,
                'tolerance' => 50,
                'content' => [
                    'regex' => '(.*C)',
                ],
                'use' => [
                        'freenode-ss',
                        'freenode-vmess',
                        'freenode-trojan',
                ],
            ],
            [
                'name' => '🔮 FR-负载均衡',
                'type' => 'load-balance',
				'url' => 'http://www.gstatic.com/generate_204',
                'interval' => 60,
                'tolerance' => 50,
                'content' => [
                    'regex' => '(.*C)',
                ],
                'use' => [
                        'freenode-ss',
                        'freenode-vmess',
                        'freenode-trojan',
                ],
            ],
            [
                'name' => '♻️ NF-自动选择',
                'type' => 'url-test',
				'url' => 'http://www.gstatic.com/generate_204',
				'interval' => 240,
				'tolerance' => 50,
                'content' => [
                    'regex' => '(.*NF)',
                ],
            ],
            [
                'name' => '🔯 NF-故障转移',
                'type' => 'fallback',
				'url' => 'http://www.gstatic.com/generate_204',
                'interval' => 60,
                'tolerance' => 50,
                'content' => [
                    'regex' => '(.*NF)',
                ],
            ],
            [
                'name' => '🔮 NF-负载均衡',
                'type' => 'load-balance',
				'url' => 'http://www.gstatic.com/generate_204',
                'interval' => 240,
                'tolerance' => 50,
                'content' => [
                    'regex' => '(.*NF)',
                ],
            ],
            [
                'name' => '♻️ 全-自动选择',
                'type' => 'url-test',
				'url' => 'http://www.gstatic.com/generate_204',
				'interval' => 60,
				'tolerance' => 50,
				'content' => [
                    'regex' => '(.*)',
                ],
                'use' => [
                        'freenode-ss',
                        'freenode-vmess',
                        'freenode-trojan',
                ],
            ],
            [
                'name' => '🔯 全-故障转移',
                'type' => 'fallback',
				'url' => 'http://www.gstatic.com/generate_204',
                'interval' => 60,
                'tolerance' => 50,
                'content' => [
                    'regex' => '(.*)',
                ],
                'use' => [
                        'freenode-ss',
                        'freenode-vmess',
                        'freenode-trojan',
                ],
            ],
            [
                'name' => '🔮 全-负载均衡',
                'type' => 'load-balance',
				'url' => 'http://www.gstatic.com/generate_204',
                'interval' => 60,
                'tolerance' => 50,
                'content' => [
                    'regex' => '(.*)',
                ],
                'use' => [
                        'freenode-ss',
                        'freenode-vmess',
                        'freenode-trojan',
                ],
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
            'source' => 'clash/myself.tpl',
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
