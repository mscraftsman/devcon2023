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
        dm: ['DM Sans', 'sans-serif'],
      },
      colors: {
        mustard: '#fdce00',
        purple: 'rgb(47, 32, 82)',
        purpleDark: 'rgb(25, 16, 41)',
      },
      spacing: {
        '26': '26rem',
      }
    },
  },
  plugins: [],
}
