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
        ibm: ['IBM Plex Sans', 'sans-serif'],
        golos: ['Golos Text', 'sans-serif'],
      },
      colors: {
          mustard: '#fdce00',
      },
      spacing: {
        '26': '26rem',
      }
    },
  },
  plugins: [],
}
