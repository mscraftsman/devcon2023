/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      fontFamily: {
        astronomus: ['Astronomus', 'sans-serif'],
        spotnik: ['Spotnik', 'sans-serif'],
      },
      colors: {
          mustard: '#fdce00',
      }
    },
  },
  plugins: [],
}
