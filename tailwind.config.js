/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./build/**/*.{html,php,css,js}'], // Scans all subfolders within 'build'
  theme: {
    extend: {
     fontFamily: {
     Poppins: ['Satoshi', 'sans-serif'],
      },
    },
  },
  plugins: [],
}






