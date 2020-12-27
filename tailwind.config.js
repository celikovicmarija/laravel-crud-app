const plugin = require('tailwindcss/plugin')

module.exports = {
  important: true,
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
   darkMode: false, // or 'media' or 'class'
   theme: {
    container: {
      center: true,
      padding: "1.5rem",
    },
    screens: {
      sm: { min: "640px", max: "767px" },
      md: { min: "768px", max: "1023px" },
      lg: { min: "1024px", max: "1279px" },
      xl: { min: "1280px" },
    },
     extend: {maxHeight: {
      xs: "20rem",
      sm: "24rem",
      md: "28rem",
      lg: "32rem",
      xl: "36rem",
      "2xl": "42rem",
      "3xl": "48rem",
      "4xl": "56rem",
      "5xl": "64rem",
      "6xl": "72rem",
    }},
   },
   variants: {
     extend: {},
   },
   plugins: [
     
   ],
 }