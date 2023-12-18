/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}", "./controladores/**/*.php"],
  theme: {
    extend: {
      backgroundImage: {
        'login-gradient': "linear-gradient(135deg, #153677, #4e085f)",
      }
    },
  },
  plugins: [],
}

