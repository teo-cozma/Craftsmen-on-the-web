module.exports = {
  content: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    fontFamily: {
      'custom1': [''],
      'body': ['Segoe UI'],
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
    require('@tailwindcss/custom-forms'),
  ]
}
