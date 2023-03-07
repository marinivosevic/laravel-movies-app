/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./resources/views/Layouts/main.blade.php",
  "resources/views/index.blade.php",
  "resources/views/show.blade.php"
],
  theme: {
    extend: {
      width:{
        '96':'24rem'
      }
    },
  },
  plugins: [],
}
