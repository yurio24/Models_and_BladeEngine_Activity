/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {      
      colors: {
      blue: '#89CFF0',
    },},
  },
  plugins: [],
}
