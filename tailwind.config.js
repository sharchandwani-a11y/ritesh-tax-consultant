/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],

  theme: {
    extend: {
      colors: {
        "rtc-navy": "#0F1B3D",
        "rtc-navy-light": "#1B2C5C",
        "rtc-gold": "#C99A3B",
        "rtc-gold-light": "#E0B563",
        "rtc-cream": "#FAF8F4",
        "rtc-gray": "#6B7280",
      },

      fontFamily: {
        heading: ["Playfair Display", "serif"],
        body: ["Inter", "sans-serif"],
      },
    },
  },

  plugins: [],
};