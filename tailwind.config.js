/** @type {import('tailwindcss').Config} */
export default  {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],

  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    // require('@tailwindcss/aspect-ratio'),
  ],
  theme: {
    extend: {
        spacing: {
            '96': '24rem',
        },
        colors: {
            'primary': {
                100: '#ECB159',
                200: '#E48F45',
                300: '#B67352',
                400: '#65451F',
            },

        }
    },
  },

}

