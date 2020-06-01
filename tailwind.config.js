module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    // container: {
    //   padding: {
    //     default: '10rem',
    //     sm: '1rem',
    //     lg: '5rem',
    //     xl: '15rem'
    //   }
    // }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/custom-forms')
  ]
}
