const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    content: ["./templates/**/*.{twig,html,js}"],
    theme: {
        container: {
            center: true,
            padding: '20px',
            screens: {
                'sm': "640px",
                'md': "768px",
                'lg': "1024px",
                'xl': "1280px",
                '2xl': "1280px",
            }
        },
        extend: {
            fontFamily: {
                sans: ['Lato', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                xxs: ['10px', '12px'],
                base: ['16px', '26px'],
                h1: ['42px', '48px'],
                h2: ['32px', '40px'],
                h3: ['22px', '26px'],
            },
            colors: {
                'goldenrod': '#A36836',
                'ocean': '#29626C',
                'caribbean': '#238EA0',
                'deep-sea': '#002B33',
                'sand': '#EDE9E6'
            },
            typography: ({ theme }) => ({
                theme: {
                    css: {
                        '--tw-prose-body': theme('colors.deep-sea'),
                        '--tw-prose-headings': theme('colors.deep-sea'),
                        '--tw-prose-lead': theme('colors.deep-sea'),
                        '--tw-prose-links': theme('colors.caribbean'),
                        '--tw-prose-bold': theme('colors.deep-sea'),
                        '--tw-prose-counters': theme('colors.goldenrod'),
                        '--tw-prose-bullets': theme('colors.goldenrod'),
                        '--tw-prose-hr': theme('colors.goldenrod'),
                        '--tw-prose-quotes': theme('colors.caribbean'),
                        '--tw-prose-quote-borders': theme('colors.goldenrod'),
                        '--tw-prose-captions': theme('colors.goldenrod'),
                    },
                },
            }),
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
    ],
}