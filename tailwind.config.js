module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        fontFamily: {
            'display': ['Montserrat'],
        },
        extend: {
            boxShadow: {
                "primary": '0 0 1px 0 rgba(69,121,245,0.24), 0 2px 4px -1px rgba(27,10,82,0.12), 0 16px 24px 0 rgba(69,121,245,0.24), 0 8px 8px -4px rgba(69,121,245,0.12)',
                "primary-hover": '0 1px 1px 0 rgba(69,121,245,0.24), 0 4px 4px -1px rgba(27,10,82,0.12), 0 24px 32px 0 rgba(69,121,245,0.24), 0 12px 12px -4px rgba(69,121,245,0.12)',
                "primary-active": '0 1px 1px 0 rgba(69,121,245,0.24), 0 1px 4px -1px rgba(27,10,82,0.12), 0 8px 16px 0 rgba(69,121,245,0.24), 0 8px 8px -4px rgba(69,121,245,0.12)',
                "primary-disabled": '0 0 1px 0 rgba(69,121,245,0.24), 0 0 4px -1px rgba(27,10,82,0.12), 0 0 24px 0 rgba(69,121,245,0.24), 0 0 8px -4px rgba(69,121,245,0.12)',
                plain: '0 0 1px 0 rgba(69,121,245,0.12), 0 2px 4px -1px rgba(27,10,82,0.06), 0 16px 24px 0 rgba(69,121,245,0.12), 0 8px 8px -4px rgba(69,121,245,0.06)',
                "plain-hover": '0 1px 1px 0 rgba(69,121,245,0.12), 0 4px 4px -1px rgba(27,10,82,0.06), 0 24px 32px 0 rgba(69,121,245,0.12), 0 12px 12px -4px rgba(69,121,245,0.06)',
                "plain-active": '0 1px 1px 0 rgba(69,121,245,0.12), 0 2px 4px -1px rgba(27,10,82,0.06), 0 8px 16px 0 rgba(69,121,245,0.12), 0 8px 8px -4px rgba(69,121,245,0.06)',
                "plain-disabled": '0 0 1px 0 rgba(69,121,245,0.12), 0 0 4px -1px rgba(27,10,82,0.06), 0 0 24px 0 rgba(69,121,245,0.12), 0 0 8px -4px rgba(69,121,245,0.06)',
                "gray": '0 1px 1px 0 rgba(9,13,20,0.06), -4px -4px 8px 0 rgba(255,255,255,0.40)',
                dark: '0 0 1px 0 rgba(20,16,41,0.12), 0 2px 4px -1px rgba(20,16,41,0.06), 0 8px 12px 0 rgba(20,16,41,0.06)',
                xl: '0 0 1px 0 rgba(20,16,41,0.12), 0 2px 4px -1px rgba(20,16,41,0.06), 0 16px 24px 0 rgba(20,16,41,0.12), 0 8px 8px -4px rgba(20,16,41,0.06)'

            },
            backgroundImage: {
                primary: "linear-gradient(135deg, #00FFAA 0%, #4579F5 53%, #9C42F5 100%);",
                reverse: "linear-gradient(215deg, #00FFAA 0%, #4579F5 53%, #9C42F5 100%);"
            },
            backgroundOpacity: {
                '2': '0.02',
                '3': '0.03',
                '6': '0.06',
            },
            colors: {
                primary: {
                    DEFAULT: '#4579F5'
                },
                regular: {
                    DEFAULT: '#140129',
                    hard: '#141029'
                },
                gray: {
                    light: '#FAFBFC',
                    lightest: '#F5F7FA',
                    normal: '#EBEFF5',
                },
                highlight: {
                    DEFAULT: '#383A3D'
                },
                red: {
                    DEFAULT: '#F54562'
                },
                fog: {
                    DEFAULT: '#E0E0FF'
                },
                green: {
                    spring: '#00FFAA',
                },
                blue: {
                    cornflower: '#4579F5',
                    'robins-egg': '#00B8B9',
                },
                violet: {
                    electric: '#9C42F5',
                },
                white: {
                    DEFAULT: '#ffffff',
                    lilac: '#E2E5F3',
                }
            },
            fontSize: {
                'sl': ['1.125rem', {
                    letterSpacing: '-0.4px',
                    lineHeight: '24px'
                }],
                'smx': ['0.813rem'],
                'menu-heading': ['0.813rem', {
                    letterSpacing: '1px',
                    lineHeight: '16px'
                }]
            },
            gridTemplateColumns: {
                'panel': '44px minmax(0, 1fr) 24px',
                'crypto-card-sm': '38px minmax(0, 1fr)',
            },
            spacing: {
                '18': '4.5rem',
                '19': '4.75rem',
                '22': '5.5rem',
                '27': '6.75rem',
                '29': '7.25rem',
                '34': '8.5rem',
                '50': '12.5rem',
                '42': '10.5rem',
                '63': '15.75rem',
                '74': '18.5rem',
                '75': '18.75rem',
                '88': '22rem',
                '95': '23.75rem',
                '100': '25rem',
                '112': '28rem',
                '128': '32rem',
                '135': '33.75rem',
                '140': '35rem',
                '192': '48rem',
                '222': '55.5rem',
                '242': '60.5rem',
            },
            screens: {
                desktop: '1024px'
            },
            minHeight: {
                '140': '35rem',
            },
            outline: {
                red: '1px solid #F54562',
            },
            ringOpacity: {
                '6': '0.06',
            }
        },
    },
    variants: {
        extend: {
            boxShadow: ['active', 'disabled'],
            textOpacity: ['disabled'],
            placeholderOpacity: ['disabled'],
            ringColor: ['active', 'focus-visible'],
            ringWidth: ['active', 'focus-visible'],
            ringOpacity: ['active', 'focus-visible'],
            backgroundOpacity: ['focus', 'even'],
            zIndex: ['hover', 'active'],
            backgroundColor: ['even'],
            brightness: ['group-hover'],
            visibility: ['group-hover', 'hover']
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
    ],
}
