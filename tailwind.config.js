/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js"

  ],
  theme: {
    
    extend: {
      colors:{
        orange: 'rgb(245 0 32)',
        eyegold: 'rgb(245 234 125)',
      }
    },
  },
  plugins: [],
}

