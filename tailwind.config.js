/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  content: ["./**/*.php"],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
      }
    },
    extend: {
      colors: {
        'primary': {
          DEFAULT: '#FFBF01',
        },
        'danger': {
          DEFAULT: '#dc3545',
        },
        'ss-blue': {
          DEFAULT: "#002856",
        },
        'ss-grey': {
          DEFAULT : '#404040',
          100 : '#F0F2F5',
          800: '#E3E3E3',
          900 : '#353535',
        },
        'ss-red': {
          DEFAULT: '#E02B20',
        },
        'ss-black': {
          DEFAULT: '#404040',
        }
      },
      screens: {
        '2xl': '1312px'
      },
      fontFamily: {
        'lead': ["Raleway", ...defaultTheme.fontFamily.sans],
        'base': ["Poppins", ...defaultTheme.fontFamily.sans],
        'icomoon': ['icomoon'],
      },
    },
  },
  plugins: [],
}
