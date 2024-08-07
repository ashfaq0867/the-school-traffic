/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        '/node_modules/jquery/**/*.js',
        "./resources/**/*.vue",
      ],
  theme: {
    extend: {},
  },
  plugins: [],
    layers: {
    'no-tailwindcss': {
      // Add any styles you want to disable here
      '.no-tailwindcss': {
        all: 'unset',
        fontFamily:'ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"',
      },
    },
  },
}

