/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      fontFamily: {
        astronomus: ['Astronomus', 'sans-serif'],
        spotnik: ['Spotnik', 'sans-serif']
      },
      colors: {
        mustard: '#fdce00'
      }
    },
  },
  plugins: [],
}
