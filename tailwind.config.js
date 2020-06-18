module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    container: {
      center: true,
      padding: {
        default: '.75rem',
        sm: '2rem',
        md: '.5rem',
        lg: '.75rem',
        xl: '1.25rem'
      }
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/custom-forms')
  ]
}
