const colors = require('tailwindcss/colors')

module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    theme: {
      extend: {
        colors: {
          'light-blue': colors.lightBlue,
          cyan: colors.cyan,
        },
      },
    },
    customForms: theme => ({
      default: {
        input: {
          borderRadius: theme('borderRadius.lg'),
          backgroundColor: theme('colors.gray.200'),
          '&:focus': {
            backgroundColor: theme('colors.white'),
          }
        },
        select: {
          borderRadius: theme('borderRadius.lg'),
          boxShadow: theme('boxShadow.default'),
          iconColor: theme('colors.white'),
        },
        checkbox: {
          width: theme('spacing.6'),
          height: theme('spacing.6'),
          iconColor: theme('colors.indigo.700'),
          icon: '<svg fill="#1a202c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" ><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>',
          '&:hover': {
            iconColor: theme('colors.gray.700'),
            icon: '<svg fill="#4a5568" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" ><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>',
          },
        },
        radio: {
          iconColor: theme('colors.indigo.700'),
        },
      },
    })
  },
  plugins: [
    require('@tailwindcss/custom-forms'),
  ],
}
