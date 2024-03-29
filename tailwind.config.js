/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./resources/views/Layouts/main.blade.php",
  "resources/views/index.blade.php",
  "resources/views/show.blade.php",
  "resources/views/livewire/search-dropdown.blade.php"
],
theme: {
  extend: {
      width: {
          '96': '24rem',
      }
  },
  spinner: (theme) => ({
    default: {
      color: '#dae1e7', // color you want to make the spinner
      size: '1em', // size of the spinner (used for both width and height)
      border: '2px', // border-width of the spinner (shouldn't be bigger than half the spinner's size)
      speed: '500ms', // the speed at which the spinner should rotate
    },
  }),
},
  plugins: [
    require('tailwindcss-spinner')(),
  ],
}
