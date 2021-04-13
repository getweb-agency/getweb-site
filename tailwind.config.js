module.exports = {
  purge: [
  './app/**/*.php',
  './resources/**/*.php',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
      // theme('colors.indigo-dark')
      'c-rojo': '#E95D6C',
      'c-morado': '#37244C',
    },
  },
},
variants: {
  extend: {},
},
plugins: [],
}
