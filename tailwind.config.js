const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  mode: 'jit',
  content: ["./templates/**/*.{twig,html,js}"],
  theme: {
    container: {
      center: true,
      padding: '20px',
    },
    extend: {
      fontFamily: {
        sans: ['Lato', ...defaultTheme.fontFamily.sans],
      },
      fontSize: {
        base: ['16px', '26px'],
      },
      colors: {
        'goldenrod': '#A36836',
        'ocean': '#29626C',
        'caribbean': '#238EA0',
        'deep-sea': '#002B33',
        'sand': '#EDE9E6'
      }
    },
  },
  plugins: [],
}